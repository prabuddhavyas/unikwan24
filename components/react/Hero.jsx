import React from 'react';

export const Hero = ({
  tagline = "STRATEGY & DESIGN CONSULTANCY",
  title = "Designing Intent-First Digital Experiences",
  description = "We help institutions, tech platforms, and founders architect human-centric digital experiences with systemic precision.",
  primaryCta = "Explore Our Work",
  secondaryCta = "Get in Touch"
}) => {
  return (
    <section className="hero-section" style={{ padding: '120px 24px 80px', textAlign: 'center', backgroundColor: 'var(--color-neutral-950, #0a0d14)' }}>
      <div className="container" style={{ maxWidth: '1000px', margin: '0 auto' }}>
        
        {tagline && (
          <div style={{ display: 'inline-block', padding: '6px 16px', borderRadius: 'var(--radius-full, 9999px)', backgroundColor: 'rgba(255,255,255,0.05)', border: '1px solid var(--color-neutral-800, #1e293b)', marginBottom: '24px' }}>
            <span style={{ fontSize: '12px', fontWeight: '700', letterSpacing: '1.5px', textTransform: 'uppercase', color: 'var(--color-accent-gold, #d4af37)' }}>
              {tagline}
            </span>
          </div>
        )}

        <h1 style={{ fontSize: 'clamp(2.5rem, 5vw, 4.25rem)', fontWeight: '800', lineHeight: '1.1', color: '#ffffff', marginBottom: '24px' }}>
          {title}
        </h1>

        <p style={{ fontSize: 'clamp(1.1rem, 2vw, 1.25rem)', lineHeight: '1.6', color: 'var(--color-neutral-200, #e2e8f0)', maxWidth: '720px', margin: '0 auto 40px', opacity: 0.85 }}>
          {description}
        </p>

        <div style={{ display: 'flex', gap: '16px', justifyContent: 'center', flexWrap: 'wrap' }}>
          <button className="btn btn-primary" style={{ padding: '14px 28px', borderRadius: 'var(--radius-md, 8px)', fontWeight: '600', backgroundColor: 'var(--color-primary-500, #0066ff)', color: '#fff', border: 'none', cursor: 'pointer' }}>
            {primaryCta}
          </button>
          <button className="btn btn-outline" style={{ padding: '14px 28px', borderRadius: 'var(--radius-md, 8px)', fontWeight: '600', backgroundColor: 'transparent', color: '#fff', border: '1px solid var(--color-neutral-700, #334155)', cursor: 'pointer' }}>
            {secondaryCta}
          </button>
        </div>

      </div>
    </section>
  );
};

export default Hero;
