import React from 'react';
import './Card.css';

/**
 * Primitive Card Component
 * @param {'default' | 'elevated' | 'glass'} variant
 */
export const Card = ({ children, title, subtitle, variant = 'default' }) => {
  return (
    <div className={`card card--${variant}`}>
      {(title || subtitle) && (
        <div className="card__header">
          {title && <h3 className="card__title">{title}</h3>}
          {subtitle && <p className="card__subtitle">{subtitle}</p>}
        </div>
      )}
      <div className="card__body">{children}</div>
    </div>
  );
};
