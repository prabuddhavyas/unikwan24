import fs from 'fs';
import path from 'path';

// Target our target stylesheet
const CSS_FILE_PATH = './assets/css/unikwan.css'; 

if (!fs.existsSync(CSS_FILE_PATH)) {
  console.error(`❌ File not found at ${CSS_FILE_PATH}`);
  process.exit(1);
}

const cssContent = fs.readFileSync(CSS_FILE_PATH, 'utf-8');

const tokens = {
  color: {},
  spacing: {},
  radius: {},
  typography: {}
};

// 1. Capture CSS Custom Properties (--primary-color: #0a192f;)
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

// 2. Fallback: Parse raw hex colors if CSS custom properties aren't used everywhere
const hexRegex = /#(?:[0-9a-fA-F]{3}){1,2}\b/g;
let hexMatch;
let hexCount = 1;

while ((hexMatch = hexRegex.exec(cssContent)) !== null) {
  const hexValue = hexMatch[0];
  const tokenName = `color-extracted-${hexCount}`;
  
  // Prevent duplicate hex values
  const exists = Object.values(tokens.color).some(t => t.$value.toLowerCase() === hexValue.toLowerCase());
  if (!exists) {
    tokens.color[tokenName] = { $value: hexValue, $type: 'color' };
    hexCount++;
  }
}

// Output to ./tokens/primitives.json
fs.mkdirSync('./tokens', { recursive: true });
fs.writeFileSync('./tokens/primitives.json', JSON.stringify({ global: tokens }, null, 2));

console.log('✅ Success! Design tokens saved to ./tokens/primitives.json');
