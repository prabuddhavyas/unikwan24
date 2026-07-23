import { useState } from 'react';

const DEFAULT_NAV_ITEMS = [
  { label: 'Projects', href: '/projects/' },
  { label: 'AI UX', href: '/ai-ux/' },
  { label: 'Expertise', href: '/expertise/' },
  { label: 'Articles', href: '/articles/' },
  { label: 'About us', href: '/about-us/' },
];

export default function NavigationHeader({
  homeHref = '/',
  logoSrc = '/assets/images/logo.png',
  navItems = DEFAULT_NAV_ITEMS,
  activeHref,
  ctaLabel = 'Contact',
  ctaHref = '/contact/',
}) {
  const [menuOpen, setMenuOpen] = useState(false);

  return (
    <div className="dark_theme_wrapper" style={{ padding: '24px 24px 0' }}>
      <nav className="navbar" aria-label="Primary">
        <div className="header_section pl_pr">
          <a href={homeHref}>
            <img src={logoSrc} alt="UniKwan" className="logo" width="147" height="28" />
          </a>
          <div className="header_content_container">
            <h3 className="ff_satoshi header_text content_16 fw_400 color_white">
              AI &amp; Digital User Experience <br />Design Agency
            </h3>
            <div className="header_vertical_border" />
          </div>
        </div>

        <div className="navbar_container">
          <a href={homeHref} className="home_icon_container">
            <img src="/assets/images/home_icon.svg" alt="home" className="home_icon" width="18" height="18" />
          </a>

          {navItems.map((item) => {
            const isActive = item.href === activeHref;
            return (
              <a
                key={item.href}
                href={item.href}
                className={`ff_satoshi content_wls_16 fw_700 color_white nav_name${isActive ? ' active' : ''}`}
              >
                {item.label}
              </a>
            );
          })}

          <div className="nav_button_container">
            <a href={ctaHref} className="ff_satoshi content_wls_16 color_white button button_blue">
              {ctaLabel}
            </a>
          </div>
        </div>

        <div className="mobile_navbar">
          <div className={`mobile_navbar_container${menuOpen ? ' mobile_navbar_hover' : ''}`}>
            <div className="navbar_flex">
              <a href={homeHref} className="home_icon_container">
                <img src="/assets/images/home_icon.svg" alt="home" className="home_icon" width="16" height="16" />
              </a>
              <div className="nav_button_container">
                <a href={ctaHref} className="ff_satoshi content_wls_16 color_white button button_blue">
                  {ctaLabel}
                </a>
              </div>
              <button
                type="button"
                className="hamburger_menu_container"
                onClick={() => setMenuOpen((open) => !open)}
                aria-expanded={menuOpen}
                aria-controls="mobile-nav-menu"
                aria-label="Toggle navigation menu"
              >
                <img src="/assets/images/menu_burger.svg" alt="menu burger" width="20" height="20" />
              </button>
            </div>
          </div>
        </div>

        <div id="mobile-nav-menu" className={`opened_menu${menuOpen ? ' opened_menu_hover' : ''}`} style={{ display: menuOpen ? 'block' : 'none' }}>
          <ul className="menu" style={{ display: menuOpen ? 'block' : 'none', opacity: menuOpen ? 1 : 0 }}>
            <li className="hover_home_icon_container">
              <img src="/assets/images/home_icon.svg" alt="home icon" className="home_icon" width="14" height="14" />
              <a href={homeHref} className="ff_satoshi content_wls_16 fw_400 mobile_menu mobile_nav_name">
                Home
              </a>
            </li>
            {navItems.map((item) => {
              const isActive = item.href === activeHref;
              return (
                <li key={item.href}>
                  <span className="mobile_active_dot" />
                  <a
                    href={item.href}
                    className={`ff_satoshi content_wls_16 fw_${isActive ? '700' : '400'} mobile_menu mobile_nav_name`}
                  >
                    {item.label}
                  </a>
                </li>
              );
            })}
          </ul>
        </div>
      </nav>
    </div>
  );
}
