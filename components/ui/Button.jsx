import React from 'react';
import './Button.css';

/**
 * Primitive Button Component
 * @param {'primary' | 'secondary' | 'outline'} variant 
 * @param {'sm' | 'md' | 'lg'} size 
 */
export const Button = ({ 
  children, 
  variant = 'primary', 
  size = 'md', 
  onClick, 
  disabled = false 
}) => {
  return (
    <button 
      className={`btn btn--${variant} btn--${size}`} 
      onClick={onClick}
      disabled={disabled}
    >
      {children}
    </button>
  );
};
