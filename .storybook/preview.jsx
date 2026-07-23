import React from 'react';
import '../assets/css/unikwan.css';
import '../build/css/variables.css';

/** @type { import('@storybook/react').Preview } */
const preview = {
  decorators: [
    (Story) => (
      <div className="dark_theme_wrapper">
        <Story />
      </div>
    ),
  ],
  parameters: {
    layout: 'fullscreen',
    backgrounds: {
      default: 'dark',
      values: [{ name: 'dark', value: '#0a0d14' }],
    },
  },
};

export default preview;
