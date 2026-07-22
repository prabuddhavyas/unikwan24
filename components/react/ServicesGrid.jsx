import React from 'react';

export const ServicesGrid = ({
  sectionTitle = "OUR EXPERTISE",
  headline = "Transforming Complex Systems Through Intentional Design",
  services = [
    {
      icon: "/assets/images/service-icon-1.svg",
      title: "Experience Strategy & Institutional Design",
      description: "Defining intent-driven frameworks, governance models, and user journeys for large-scale digital ecosystems."
    },
    {
      icon: "/assets/images/service-icon-2.svg",
      title: "Human-Centric AI Architecture",
      description: "Designing interface systems and AI workflows focused on verified intent, user agency, and seamless integration."
    },
    {
      icon: "/assets/images/service-icon-3.svg",
      title: "Product & Design Systems",
      description: "Building scalable token architectures, modular component libraries, and cross-platform UI standards."
    },
    {
      icon: "/assets/images/service-icon-4.svg",
      title: "UX Audits & Performance Optimization",
      description: "Evaluating digital products for conversion friction, usability gaps, accessibility compliance, and ROI impact."
    }
  ]
}) => {
  return (
    <section className="services-section" style={{ backgroundColor: 'var(--color-neutral-950, #0a0d14)', padding: '80px 24px', color: '#ffffff' }}>
      <div style={{ maxWidth: '1200px', margin: '0 auto' }}>
        
        {/* Header Block */}
        <div style={{ textAlign: 'center', marginBottom: '56px' }}>
          {sectionTitle && (
            <span style={{ fontSize: '12px', fontWeight: '700', letterSpacing: '2px', textTransform: 'uppercase', color: 'var(--color-accent-gold, #d4af37)', display: 'block', marginBottom: '12px' }}>
              {sectionTitle}
            </span>
          )}
          <h2 style={{ fontSize: 'clamp(2rem, 4vw, 3rem)', fontWeight: '800', lineHeight: '1.2', maxWidth: '800px', margin: '0 auto', color: '#ffffff' }}>
            {headline}
          </h2>
        </div>

        {/* Services Grid */}
        <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(260px, 1fr))', gap: '24px' }}>
          {services.map((service, index) => (
            <div 
              key={index} 
              style={{
                backgroundColor: 'var(--color-neutral-900, #0f172a)',
                border: '1px solid var(--color-neutral-800, #1e293b)',
                borderRadius: 'var(--radius-lg, 16px)',
                padding: '32px 24px',
                transition: 'transform 0.2s ease, border-color 0.2s ease',
                display: 'flex',
                flexDirection: 'column',
                justify: 'space-between'
              }}
            >
              <div>
                <div style={{ width: '48px', height: '48px', marginBottom: '20px', display: 'flex', alignItems: 'center', justifyContent: 'center', borderRadius: '12px', backgroundColor: 'rgba(255, 255, 255, 0.04)' }}>
                  <img src={service.icon} alt={service.title} style={{ width: '28px', height: '28px' }} onError={(e) => { e.target.style.display = 'none'; }} />
                </div>
                <h3 style={{ fontSize: '1.25rem', fontWeight: '700', marginBottom: '12px', color: '#ffffff', lineHeight: '1.3' }}>
                  {service.title}
                </h3>
                <p style={{ fontSize: '0.95rem', lineHeight: '1.6', color: 'var(--color-neutral-200, #e2e8f0)', opacity: 0.8, margin: 0 }}>
                  {service.description}
                </p>
              </div>

              <div style={{ marginTop: '24px', paddingTop: '16px', borderTop: '1px solid rgba(255, 255, 255, 0.05)' }}>
                <span style={{ fontSize: '0.875rem', fontWeight: '600', color: 'var(--color-primary-400, #38bdf8)', display: 'inline-flex', alignItems: 'center', gap: '6px', cursor: 'pointer' }}>
                  Learn More &rarr;
                </span>
              </div>
            </div>
          ))}
        </div>

      </div>
    </section>
  );
};

export default ServicesGrid;
