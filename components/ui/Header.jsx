import React from 'react';
import { Button } from './Button';
import './Header.css';

export const Header = ({ logoText = 'UNIKWAN', navLinks = ['Services', 'Work', 'About', 'Insights'] }) => {
  return (
    <header className="header">
      <div className="header__container">
        {/* Brand Logo */}
        <div className="header__brand">
          <span className="header__logo">{logoText}</span>
        </div>

        {/* Navigation Links */}
        <nav className="header__nav">
          <ul className="header__nav-list">
            {navLinks.map((link, index) => (
              <li key={index} className="header__nav-item">
                <a href={`#${link.toLowerCase()}`} className="header__nav-link">
                  {link}
                </a>
              </li>
            ))}
          </ul>
        </nav>

        {/* Action CTA */}
        <div className="header__actions">
          <Button variant="primary" size="sm">
            Get in Touch
          </Button>
        </div>
      </div>
    </header>
  );
};
