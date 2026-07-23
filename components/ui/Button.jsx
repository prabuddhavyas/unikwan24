import React from 'react';
import './Button.css';

const variantClassMap = {
  primary: 'button_blue',
  secondary: 'button_grey',
  outline: 'button_white',
};

/**
 * Primitive Button Component
 * @param {'primary' | 'secondary' | 'outline'} variant
 * @param {'sm' | 'md' | 'lg'} size
 */
export const Button = ({ children, variant = 'primary', size = 'md', onClick, disabled = false }) => {
  const className = `button ${variantClassMap[variant] ?? 'button_blue'} btn--${size}`;

  return (
    <button className={className} onClick={onClick} disabled={disabled}>
      {children}
    </button>
  );
};
