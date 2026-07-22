import React from 'react';
import { Header } from './Header';

export default {
  title: 'Design System/Layout/Header',
  component: Header,
  tags: ['autodocs'],
  parameters: {
    layout: 'fullscreen',
  },
};

export const DefaultHeader = {
  args: {
    logoText: 'UNIKWAN',
    navLinks: ['Services', 'Work', 'About', 'Insights'],
  },
};
