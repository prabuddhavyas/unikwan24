import React, { useState } from 'react';

export const ServicesGrid = ({
  sectionTitle = 'OUR EXPERTISE',
  headline = 'Transforming Complex Systems Through Intentional Design',
  services = [
    {
      icon: '/assets/images/service-icon-1.svg',
      title: 'Experience Strategy & Institutional Design',
      description: 'Defining intent-driven frameworks, governance models, and user journeys for large-scale digital ecosystems.',
    },
    {
      icon: '/assets/images/service-icon-2.svg',
      title: 'Human-Centric AI Architecture',
      description: 'Designing interface systems and AI workflows focused on verified intent, user agency, and seamless integration.',
    },
    {
      icon: '/assets/images/service-icon-3.svg',
      title: 'Product & Design Systems',
      description: 'Building scalable token architectures, modular component libraries, and cross-platform UI standards.',
    },
    {
      icon: '/assets/images/service-icon-4.svg',
      title: 'UX Audits & Performance Optimization',
      description: 'Evaluating digital products for conversion friction, usability gaps, accessibility compliance, and ROI impact.',
    },
  ],
}) => {
  const [hoveredIndex, setHoveredIndex] = useState(null);

  return (
    <section className="services_grid_section project_section pl_pr" style={{ padding: '80px 24px' }}>
      <div style={{ maxWidth: '1200px', margin: '0 auto' }}>
        <div style={{ textAlign: 'center', marginBottom: '56px' }}>
          {sectionTitle && (
            <p
              className="ff_satoshi content_20 fw_700"
              style={{
                marginBottom: 'var(--spacing-sm, 12px)',
                textTransform: 'uppercase',
                letterSpacing: '0.18em',
                color: 'var(--color-accent-gold, #d4af37)',
              }}
            >
              {sectionTitle}
            </p>
          )}
          <h2 className="sub_heading_48 fw_700 color_white expertise_heading">{headline}</h2>
        </div>

        <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(260px, 1fr))', gap: '24px' }}>
          {services.map((service, index) => {
            const isHovered = hoveredIndex === index;
            return (
              <div
                key={index}
                className="service_card"
                tabIndex={0}
                onMouseEnter={() => setHoveredIndex(index)}
                onMouseLeave={() => setHoveredIndex(null)}
                onFocus={() => setHoveredIndex(index)}
                onBlur={() => setHoveredIndex(null)}
                style={{
                  backgroundColor: 'var(--color-neutral-900, #0f172a)',
                  border: isHovered
                    ? '1px solid rgba(212, 175, 55, 0.3)'
                    : '1px solid var(--color-neutral-800, #1e293b)',
                  borderRadius: 'var(--radius-lg, 16px)',
                  padding: '32px 24px',
                  display: 'flex',
                  flexDirection: 'column',
                  gap: 'var(--spacing-lg, 24px)',
                  transition: 'all 0.3s ease',
                }}
              >
                <div>
                  <div
                    style={{
                      width: '48px',
                      height: '48px',
                      marginBottom: '20px',
                      display: 'flex',
                      alignItems: 'center',
                      justifyContent: 'center',
                      borderRadius: '12px',
                      backgroundColor: 'var(--global-color-color-extracted-67, #52525b)',
                    }}
                  >
                    <img
                      src={service.icon}
                      alt={service.title}
                      style={{ width: '28px', height: '28px' }}
                      onError={(event) => {
                        event.target.style.display = 'none';
                      }}
                    />
                  </div>
                  <h3
                    className="sub_heading_24 fw_500"
                    style={{ marginBottom: '12px', color: 'var(--color-white, #ffffff)' }}
                  >
                    {service.title}
                  </h3>
                  <p
                    className="ff_satoshi content_wls_16 fw_400"
                    style={{ color: 'var(--color-slate-400, #94a3b8)', margin: 0 }}
                  >
                    {service.description}
                  </p>
                </div>
              </div>
            );
          })}
        </div>
      </div>
    </section>
  );
};

export default ServicesGrid;
