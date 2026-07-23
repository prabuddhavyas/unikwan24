import fs from 'fs';

// Target our target stylesheet
const CSS_FILE_PATH = './assets/css/unikwan.css';
const TOKENS_FILE_PATH = './tokens/primitives.json';

if (!fs.existsSync(CSS_FILE_PATH)) {
  console.error(`❌ File not found at ${CSS_FILE_PATH}`);
  process.exit(1);
}

const cssContent = fs.readFileSync(CSS_FILE_PATH, 'utf-8');

// Merge onto whatever primitives.json already has instead of regenerating from scratch.
// Converting a hardcoded hex in unikwan.css to a var(--color-extracted-N) reference
// (the whole point of the token pipeline) removes that hex's literal text from the file —
// a naive from-scratch re-scan would then drop that color and shift every later index,
// silently breaking every existing var() reference that depends on it. So: previously-seen
// tokens are always kept (by value, for colors; by name, for named custom properties), and
// new indices are only ever appended, never reused/reshuffled.
let existingTokens = { color: {}, spacing: {}, radius: {}, typography: {} };
if (fs.existsSync(TOKENS_FILE_PATH)) {
  try {
    const parsed = JSON.parse(fs.readFileSync(TOKENS_FILE_PATH, 'utf-8'));
    existingTokens = { ...existingTokens, ...parsed.global };
  } catch {
    console.warn(`⚠️  Could not parse existing ${TOKENS_FILE_PATH}, starting fresh.`);
  }
}

const tokens = {
  color: { ...existingTokens.color },
  spacing: { ...existingTokens.spacing },
  radius: { ...existingTokens.radius },
  typography: { ...existingTokens.typography },
};

// 1. Capture CSS Custom Properties (--primary-color: #0a192f;) — named, so upsert by name.
const cssVarRegex = /--([a-zA-Z0-9-]+):\s*([^;]+);/g;
let match;

while ((match = cssVarRegex.exec(cssContent)) !== null) {
  const [, rawName, rawValue] = match;
  const name = rawName.trim();
  const value = rawValue.trim();

  if (name.includes('color') || name.includes('bg') || name.includes('text') || name.includes('accent') || name.includes('brand')) {
    tokens.color[name] = { $value: value, $type: 'color' };
  } else if (name.includes('radius') || name.includes('rounded')) {
    tokens.radius[name] = { $value: value, $type: 'dimension' };
  } else if (name.includes('font') || name.includes('family')) {
    tokens.typography[name] = { $value: value, $type: 'fontFamily' };
  } else {
    tokens.spacing[name] = { $value: value, $type: 'dimension' };
  }
}

// 2. Fallback: parse raw hex colors, skipping anything whose value is already a known
// token (regardless of whether that token's own hex literal is still present in the CSS)
// and only ever appending new indices after the highest one already assigned.
const knownValues = new Set(Object.values(tokens.color).map((t) => t.$value.toLowerCase()));
const existingIndices = Object.keys(tokens.color)
  .map((name) => /^color-extracted-(\d+)$/.exec(name)?.[1])
  .filter(Boolean)
  .map(Number);
let hexCount = (existingIndices.length ? Math.max(...existingIndices) : 0) + 1;

const hexRegex = /#(?:[0-9a-fA-F]{3}){1,2}\b/g;
let hexMatch;

while ((hexMatch = hexRegex.exec(cssContent)) !== null) {
  const hexValue = hexMatch[0];
  const hexValueLower = hexValue.toLowerCase();

  if (!knownValues.has(hexValueLower)) {
    tokens.color[`color-extracted-${hexCount}`] = { $value: hexValue, $type: 'color' };
    knownValues.add(hexValueLower);
    hexCount++;
  }
}

// Output to ./tokens/primitives.json
fs.mkdirSync('./tokens', { recursive: true });
fs.writeFileSync(TOKENS_FILE_PATH, JSON.stringify({ global: tokens }, null, 2));

console.log('✅ Success! Design tokens merged into ./tokens/primitives.json');
