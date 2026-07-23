import React from 'react';
import WorkGrid from './WorkGrid';

export default {
  title: 'UniKwan Production/WorkGrid',
  component: WorkGrid,
  parameters: {
    layout: 'fullscreen',
    backgrounds: { default: 'dark' },
  },
  decorators: [
    (Story) => (
      <div className="dark_theme_wrapper" style={{ backgroundColor: 'var(--color-neutral-950, #0a0d14)', minHeight: '100vh', padding: '2rem' }}>
        <Story />
      </div>
    ),
  ],
};

export const DefaultGrid = {
  args: {
    eyebrow: 'SELECTED WORK',
    headline: 'Pioneering Intelligent Systems & Digital Products',
  },
};
