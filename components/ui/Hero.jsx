import React from 'react';
import { Button } from './Button';
import './Hero.css';

export const Hero = ({
  badgeText = "DESIGN & STRATEGY CONSULTANCY",
  title = "Institutional Design & Experience Strategy",
  description = "UniKwan combines human-centric experience strategy with robust digital architecture to build transformative platforms.",
  primaryCtaText = "Explore Our Work",
  secondaryCtaText = "Get in Touch",
  onPrimaryClick,
  onSecondaryClick,
}) => {
  return (
    <section className="unikwan-hero">
      <div className="unikwan-hero__container">
        {badgeText && (
          <div className="unikwan-hero__badge">
            <span className="unikwan-hero__badge-text">{badgeText}</span>
          </div>
        )}

        <h1 className="unikwan-hero__title">{title}</h1>
        <p className="unikwan-hero__description">{description}</p>

        <div className="unikwan-hero__actions">
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
