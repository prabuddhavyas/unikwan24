const DEFAULT_ARTICLES = [
  {
    title: 'How Culture Shapes What People Want from AI (A Stanford Study)',
    href: '/articles/post/how-a-culture-shapes-what-people-want-from-ai/',
    image: '/assets/images/global-ai-perspectives.png',
    imageAlt: 'blog',
    date: '04 April, 2025',
    readTime: '12 Min Read',
  },
  {
    title: 'How to Turn Curious Browsers into Buyers with Effective E-commerce Site Search',
    href: '/articles/post/how-to-turn-curious-browsers-into-buyers-with-effective-ecommerce-site-search/',
    image: '/assets/images/e-commerce-site-search.png',
    imageAlt: 'e-commerce site search blog',
    date: '14 February, 2025',
    readTime: '12 Min Read',
  },
  {
    title: 'UX Design in the Age of Digital Bharat: The Top 7 Challenges',
    href: '/articles/post/ux-design-in-the-age-of-digital-bharat/',
    image: '/assets/images/digital-bharat-ux-challenges.png',
    imageAlt: 'digital bharat ux challenges blog',
    date: '30 January, 2025',
    readTime: '12 Min Read',
  },
];

// Reuses the exact production classes from articles/index.php's "Latest Articles"
// listing (blog_listing_*, sub_heading_*, color_grey, color_light_black) rather than
// inventing new ones. color_grey/color_light_black are wired to CSS variables in
// unikwan.css (--global-color-color-extracted-7 / -12) which resolve to #343638 /
// #1f1f1f respectively — see the WARNING in nav-tokens.js about these indices shifting
// if tokens/primitives.json is regenerated.
export default function ArticlesGrid({ heading = 'Latest Insights', articles = DEFAULT_ARTICLES }) {
  return (
    <section
      className="blog_listing_section pl_pr"
      style={{ backgroundColor: 'var(--global-color-color-extracted-16)' }}
    >
      <h2 className="sub_heading_34 fw_700 color_grey">{heading}</h2>
      <div className="blog_listing_flex">
        {articles.map((article) => (
          <div className="blog_listing_container" key={article.href}>
            <a href={article.href} className="blog_image_continer">
              <img src={article.image} alt={article.imageAlt} width="399" height="280" />
            </a>
            <a href={article.href} className="blog_title_continer">
              <h3 className="sub_heading_24 fw_500 color_light_black blog_title">{article.title}</h3>
            </a>
            <div className="blog_listing_details_flex">
              <p className="ff_satoshi content_16 fw_400 color_grey">{article.date}</p>
              <div className="blog_listing_readtime_flex">
                <img src="/assets/images/clock.svg" alt="clock" width="23" height="23" />
                <p className="ff_satoshi content_16 fw_400 color_grey">{article.readTime}</p>
              </div>
            </div>
          </div>
        ))}
      </div>
    </section>
  );
}
