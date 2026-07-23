import React from 'react';
import ServicesGrid from './ServicesGrid';

export default {
  title: 'UniKwan Production/ServicesGrid',
  component: ServicesGrid,
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

export const DefaultGrid = {};
