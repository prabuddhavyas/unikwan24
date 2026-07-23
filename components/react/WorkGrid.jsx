import React, { useState } from 'react';

export const WorkGrid = ({
  sectionTitle = 'SELECTED CASE STUDIES',
  headline = 'Projects That Bring Editorial Clarity to Product Experiences',
  projects = [
    { title: 'Lionsgate Play', category: 'OTT & Entertainment UX', image: '/assets/images/other-project-lionsgate.png' },
    { title: 'Fastrack', category: 'E-Commerce & Brand System', image: '/assets/images/other-project-fastrack.png' },
    { title: 'NWORX', category: 'Enterprise Leadership Platform', image: '/assets/images/other-project-nworx.png' },
    { title: 'Bapuji Seva Kendra', category: 'Institutional & GovTech Design', image: '/assets/images/other-project-bsk.png' },
  ],
}) => {
  const [hoveredIndex, setHoveredIndex] = useState(null);

  return (
    <section className="work_grid_section project_section pl_pr" style={{ padding: '80px 24px' }}>
      <div style={{ maxWidth: '1200px', margin: '0 auto' }}>
        <div style={{ textAlign: 'center', marginBottom: '56px' }}>
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
          <h2 className="sub_heading_48 fw_700 color_white expertise_heading">{headline}</h2>
        </div>

        <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(280px, 1fr))', gap: '24px' }}>
          {projects.map((project, idx) => {
            const isHovered = hoveredIndex === idx;
            return (
              <div
                key={idx}
                className="work_card"
                tabIndex={0}
                onMouseEnter={() => setHoveredIndex(idx)}
                onMouseLeave={() => setHoveredIndex(null)}
                onFocus={() => setHoveredIndex(idx)}
                onBlur={() => setHoveredIndex(null)}
                style={{
                  backgroundColor: 'var(--color-neutral-900, #0f172a)',
                  border: isHovered
                    ? '1px solid rgba(212, 175, 55, 0.3)'
                    : '1px solid var(--color-neutral-800, #1e293b)',
                  borderRadius: 'var(--radius-lg, 16px)',
                  overflow: 'hidden',
                  transition: 'all 0.3s ease',
                  display: 'flex',
                  flexDirection: 'column',
                }}
              >
                <div
                  style={{
                    minHeight: '180px',
                    backgroundColor: 'var(--global-color-color-extracted-67, #52525b)',
                    overflow: 'hidden',
                  }}
                >
                  <img
                    src={project.image}
                    alt={project.title}
                    style={{ width: '100%', height: '100%', objectFit: 'cover', display: 'block' }}
                    onError={(event) => {
                      event.target.style.display = 'none';
                    }}
                  />
                </div>

                <div style={{ padding: '24px', display: 'flex', flexDirection: 'column', gap: '12px' }}>
                  <span
                    className="ff_satoshi content_14 fw_600"
                    style={{
                      color: 'var(--color-accent-gold, #d4af37)',
                      textTransform: 'uppercase',
                      letterSpacing: '0.18em',
                    }}
                  >
                    {project.category}
                  </span>
                  <h3 className="sub_heading_24 fw_500" style={{ color: 'var(--color-white, #ffffff)', margin: 0 }}>
                    {project.title}
                  </h3>
                  <p className="ff_satoshi content_wls_16 fw_400" style={{ color: 'var(--color-slate-400, #94a3b8)', margin: 0 }}>
                    A concise exploration of modern brand systems, user journeys, and product storytelling.
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

export default WorkGrid;
