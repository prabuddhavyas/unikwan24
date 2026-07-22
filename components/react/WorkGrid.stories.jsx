import React from 'react';

export default {
  title: 'UniKwan Production/WorkGrid',
  parameters: {
    layout: 'padded',
  },
};

const projects = [
  { title: "Lionsgate Play", category: "OTT & Entertainment UX", image: "/assets/images/other-project-lionsgate.png" },
  { title: "Fastrack", category: "E-Commerce & Brand System", image: "/assets/images/other-project-fastrack.png" },
  { title: "NWORX", category: "Enterprise Leadership Platform", image: "/assets/images/other-project-nworx.png" },
  { title: "Bapuji Seva Kendra", category: "Institutional & GovTech Design", image: "/assets/images/other-project-bsk.png" },
];

export const PortfolioGrid = () => (
  <div style={{ backgroundColor: 'var(--color-neutral-950, #0a0d14)', padding: '40px 24px', color: '#fff' }}>
    <h2 style={{ textAlign: 'center', marginBottom: '40px', fontSize: '2rem' }}>Selected Case Studies</h2>
    <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(280px, 1fr))', gap: '24px', maxWidth: '1200px', margin: '0 auto' }}>
      {projects.map((item, idx) => (
        <div key={idx} style={{ padding: '20px', borderRadius: '16px', backgroundColor: 'var(--color-neutral-900, #0f172a)', border: '1px solid var(--color-neutral-800, #1e293b)' }}>
          <div style={{ height: '180px', borderRadius: '8px', backgroundColor: '#1e293b', marginBottom: '16px', overflow: 'hidden' }}>
            <img src={item.image} alt={item.title} style={{ width: '100%', height: '100%', objectFit: 'cover' }} onError={(e) => { e.target.style.display = 'none'; }} />
          </div>
          <h3 style={{ margin: '0 0 4px 0', fontSize: '1.25rem' }}>{item.title}</h3>
          <p style={{ margin: 0, fontSize: '0.875rem', color: 'var(--color-neutral-200, #e2e8f0)', opacity: 0.7 }}>{item.category}</p>
        </div>
      ))}
    </div>
  </div>
);
