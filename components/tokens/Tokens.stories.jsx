import React from 'react';

export default {
  title: 'Design System/Foundations/Tokens',
  parameters: {
    layout: 'padded',
  },
};

export const ColorPalette = () => (
  <div style={{ fontFamily: 'sans-serif', color: '#0f172a' }}>
    <h2 style={{ marginBottom: '20px' }}>Unikwan Design System - Color Tokens</h2>
    
    <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(220px, 1fr))', gap: '20px' }}>
      
      {/* Primary 500 Card */}
      <div style={{ padding: '16px', border: '1px solid #e2e8f0', borderRadius: '12px', boxShadow: '0 1px 3px rgba(0,0,0,0.1)', backgroundColor: '#ffffff' }}>
        <div style={{ height: '80px', backgroundColor: 'var(--color-primary-500, #0066ff)', borderRadius: '8px', marginBottom: '12px' }}></div>
        <div style={{ fontSize: '15px', fontWeight: 'bold', color: '#0f172a' }}>Primary 500</div>
        <div style={{ fontSize: '12px', color: '#64748b', fontFamily: 'monospace', marginTop: '4px' }}>var(--color-primary-500)</div>
      </div>

      {/* Neutral 800 Card */}
      <div style={{ padding: '16px', border: '1px solid #e2e8f0', borderRadius: '12px', boxShadow: '0 1px 3px rgba(0,0,0,0.1)', backgroundColor: '#ffffff' }}>
        <div style={{ height: '80px', backgroundColor: 'var(--color-neutral-800, #1e293b)', borderRadius: '8px', marginBottom: '12px' }}></div>
        <div style={{ fontSize: '15px', fontWeight: 'bold', color: '#0f172a' }}>Neutral 800</div>
        <div style={{ fontSize: '12px', color: '#64748b', fontFamily: 'monospace', marginTop: '4px' }}>var(--color-neutral-800)</div>
      </div>

    </div>
  </div>
);
