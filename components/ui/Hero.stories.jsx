import React from 'react';
import { Hero } from './Hero';

export default {
  title: 'Design System/Layout/Hero',
  component: Hero,
  tags: ['autodocs'],
  parameters: {
    layout: 'fullscreen',
  },
};

export const DefaultHero = {
  args: {
    badgeText: 'DESIGN SYSTEM DRIVEN',
    title: 'Designing Intent-First Digital Experiences',
    description: 'Bridging brand philosophy, design token automation, and scalable component architecture for high-growth digital platforms.',
    primaryCtaText: 'Explore Our Work',
    secondaryCtaText: 'Our Philosophy',
  },
};
