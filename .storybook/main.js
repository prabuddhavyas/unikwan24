/** @type { import('@storybook/react-vite').StorybookConfig } */
const config = {
  stories: [
    "../components/**/*.mdx",
    "../components/**/*.stories.@(js|jsx|mjs|ts|tsx)"
  ],
  addons: [
    "@storybook/addon-essentials",
    "@storybook/addon-interactions",
    "@storybook/addon-a11y"
  ],
  framework: {
    name: "@storybook/react-vite",
    options: {},
  },
};
export default config;
