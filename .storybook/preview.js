// 1. Compiled Design System Token Variables
import '../build/css/variables.css';

// 2. UniKwan's Main Production Stylesheet
import '../assets/css/unikwan.css';

/** @type { import('@storybook/react').Preview } */
const preview = {
  parameters: {
    controls: {
      matchers: {
        color: /(background|color)$/i,
        date: /Date$/i,
      },
    },
    backgrounds: {
      default: 'dark',
      values: [
        { name: 'dark', value: '#0a0d14' },
      ],
    },
  },
};

export default preview;
