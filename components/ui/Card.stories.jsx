import React from 'react';
import { Card } from './Card';
import { Button } from './Button';

export default {
  title: 'Design System/Primitives/Card',
  component: Card,
  tags: ['autodocs'],
  argTypes: {
    variant: {
      control: 'select',
      options: ['default', 'elevated', 'glass'],
    },
  },
};

export const Default = {
  args: {
    title: 'Design Engine',
    subtitle: 'Automated token extraction & build pipeline',
    variant: 'default',
    children: (
      <div>
        <p style={{ marginBottom: '16px' }}>
          Tokens keep designers and developers aligned across all product surface areas.
        </p>
        <Button variant="primary" size="sm">Explore Token Specs</Button>
      </div>
    ),
  },
};

export const GlassVariant = {
  args: {
    title: 'Glassmorphic Overlay',
    subtitle: 'Semi-transparent card container',
    variant: 'glass',
    children: (
      <div>
        <p style={{ marginBottom: '16px' }}>
          Built using backdrop blur and subtle border opacity.
        </p>
        <Button variant="outline" size="sm">Learn More</Button>
      </div>
    ),
  },
};
