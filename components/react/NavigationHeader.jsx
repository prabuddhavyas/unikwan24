import { useState } from "react";
import { navTokens } from "./nav-tokens";

const DEFAULT_NAV_ITEMS = [
  { label: "Projects", href: "/projects/" },
  { label: "AI UX", href: "/ai-ux/" },
  { label: "Expertise", href: "/expertise/" },
  { label: "Articles", href: "/articles/" },
  { label: "About us", href: "/about-us/" },
];

export default function NavigationHeader({
  homeHref = "/",
  logoSrc = "/assets/images/logo.png",
  navItems = DEFAULT_NAV_ITEMS,
  activeHref,
  ctaLabel = "Contact",
  ctaHref = "/contact/",
}) {
  const [menuOpen, setMenuOpen] = useState(false);

  return (
    <>
      <nav style={styles.navbar} aria-label="Primary">
        <a href={homeHref} style={styles.homeIcon} aria-label="Home">
          <img src={logoSrc} alt="Unikwan" style={styles.homeIconImg} />
        </a>

        <div style={styles.linkGroup}>
          {navItems.map((item) => {
            const isActive = item.href === activeHref;
            return (
              <a
                key={item.href}
                href={item.href}
                style={{
                  ...styles.navLink,
                  ...(isActive ? styles.navLinkActive : null),
                }}
                onMouseEnter={(e) => {
                  if (!isActive) e.currentTarget.style.border = `1px solid ${navTokens.hoverBorder}`;
                }}
                onMouseLeave={(e) => {
                  if (!isActive) e.currentTarget.style.border = "1px solid transparent";
                }}
              >
                {item.label}
              </a>
            );
          })}
        </div>

        <a href={ctaHref} style={styles.cta}>
          {ctaLabel}
        </a>

        <button
          type="button"
          style={styles.hamburger}
          onClick={() => setMenuOpen((open) => !open)}
          aria-expanded={menuOpen}
          aria-controls="mobile-nav-menu"
          aria-label="Toggle navigation menu"
        >
          <span style={styles.hamburgerLine} />
          <span style={styles.hamburgerLine} />
          <span style={styles.hamburgerLine} />
        </button>
      </nav>

      {menuOpen && (
        <ul id="mobile-nav-menu" style={styles.mobileMenu}>
          <li>
            <a href={homeHref} style={styles.mobileLink}>
              Home
            </a>
          </li>
          {navItems.map((item) => {
            const isActive = item.href === activeHref;
            return (
              <li key={item.href} style={styles.mobileItem}>
                <span
                  style={{
                    ...styles.mobileDot,
                    opacity: isActive ? 1 : 0,
                  }}
                />
                <a
                  href={item.href}
                  style={{
                    ...styles.mobileLink,
                    fontWeight: isActive ? 700 : 400,
                  }}
                >
                  {item.label}
                </a>
              </li>
            );
          })}
        </ul>
      )}
    </>
  );
}

const styles = {
  navbar: {
    display: "flex",
    alignItems: "center",
    gap: 8,
    padding: "8px 12px",
    borderRadius: 50,
    backgroundColor: navTokens.backgroundTranslucent,
    border: `1px solid ${navTokens.hairline}`,
    backdropFilter: "blur(32px)",
    WebkitBackdropFilter: "blur(32px)",
    fontFamily: '"Onest", sans-serif',
  },
  homeIcon: {
    display: "flex",
    alignItems: "center",
    justifyContent: "center",
    width: 48,
    height: 48,
    borderRadius: 100,
    border: `1px solid ${navTokens.hairlineFaint}`,
    backgroundColor: navTokens.activeBg,
  },
  homeIconImg: {
    width: 18,
    height: 18,
  },
  linkGroup: {
    display: "flex",
    alignItems: "center",
    gap: 4,
  },
  navLink: {
    padding: "12px 16px",
    borderRadius: 50,
    border: "1px solid transparent",
    color: navTokens.text,
    fontWeight: 700,
    fontSize: 16,
    textDecoration: "none",
    whiteSpace: "nowrap",
    transition: "all 0.3s ease",
  },
  navLinkActive: {
    backgroundColor: navTokens.activeBg,
    border: `1px solid ${navTokens.hoverBorder}`,
  },
  cta: {
    padding: "12px 24px",
    borderRadius: 50,
    backgroundColor: navTokens.cta,
    color: navTokens.text,
    fontWeight: 700,
    fontSize: 16,
    textDecoration: "none",
    whiteSpace: "nowrap",
  },
  hamburger: {
    display: "none",
    flexDirection: "column",
    gap: 4,
    width: 20,
    height: 20,
    background: "none",
    border: "none",
    cursor: "pointer",
    padding: 0,
  },
  hamburgerLine: {
    display: "block",
    width: "100%",
    height: 2,
    backgroundColor: navTokens.text,
    borderRadius: 2,
  },
  mobileMenu: {
    listStyle: "none",
    margin: 0,
    padding: 16,
    backgroundColor: navTokens.background,
    color: navTokens.textMuted,
  },
  mobileItem: {
    display: "flex",
    alignItems: "center",
    gap: 8,
    padding: "10px 0",
  },
  mobileDot: {
    width: 8,
    height: 8,
    borderRadius: "50%",
    backgroundColor: navTokens.cta,
  },
  mobileLink: {
    color: navTokens.text,
    fontSize: 18,
    lineHeight: "24px",
    textDecoration: "none",
  },
};
