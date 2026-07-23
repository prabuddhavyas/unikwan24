import React from 'react';

export const Hero = ({
  subtitle = 'Driving Innovation Through',
  title = 'Thoughtful AI UX Design',
  ctaText = 'Explore Our Work',
  ctaLink = '/projects',
}) => {
  return (
    <section className="hero_section">
      <div className="hero_content_section">
        {subtitle && (
          <h2 className="heading_34 fw_300 color_white home_hero_sub_title">
            {subtitle}
          </h2>
        )}
        <h1 className="heading_48 fw_400 color_white home_hero_title">{title}</h1>
        {ctaText && (
          <div style={{ marginTop: 'var(--spacing-lg, 24px)' }}>
            <a href={ctaLink} className="button button_blue">
              {ctaText}
            </a>
          </div>
        )}
      </div>
      <div id="desktop_unikwan_hero_animation" className="unikwan_hero_animation desktop" />
      <div id="tablet_unikwan_hero_animation" className="unikwan_hero_animation tablet" />
      <div id="mobile_unikwan_hero_animation" className="unikwan_hero_animation mobile" />
    </section>
  );
};

export default Hero;
