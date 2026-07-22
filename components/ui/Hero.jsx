import React from 'react';
import { Button } from './Button';
import './Hero.css';

export const Hero = ({
  badgeText = "DESIGN SYSTEM DRIVEN",
  title = "Designing Intent-First Digital Experiences",
  description = "Bridging brand philosophy, design token automation, and scalable component architecture for high-growth digital platforms.",
  primaryCtaText = "Explore Our Work",
  secondaryCtaText = "Our Philosophy",
  onPrimaryClick,
  onSecondaryClick,
}) => {
  return (
    <section className="hero">
      <div className="hero__container">
        {badgeText && (
          <div className="hero__badge">
            <span className="hero__badge-dot"></span>
            <span className="hero__badge-text">{badgeText}</span>
          </div>
        )}

        <h1 className="hero__title">{title}</h1>
        <p className="hero__description">{description}</p>

        <div className="hero__actions">
          <Button variant="primary" size="lg" onClick={onPrimaryClick}>
            {primaryCtaText}
          </Button>
          <Button variant="outline" size="lg" onClick={onSecondaryClick}>
            {secondaryCtaText}
          </Button>
        </div>
      </div>
    </section>
  );
};
