import ArticlesGrid from './ArticlesGrid';

export default {
  title: 'Components/ArticlesGrid',
  component: ArticlesGrid,
  parameters: {
    layout: 'fullscreen',
  },
  tags: ['autodocs'],
};

export const Default = {};

export const CustomHeading = {
  args: {
    heading: 'From the Blog',
  },
};

export const SingleArticle = {
  args: {
    heading: 'Latest Insights',
    articles: [
      {
        title: 'How Culture Shapes What People Want from AI (A Stanford Study)',
        href: '/articles/post/how-a-culture-shapes-what-people-want-from-ai/',
        image: '/assets/images/global-ai-perspectives.png',
        imageAlt: 'blog',
        date: '04 April, 2025',
        readTime: '12 Min Read',
      },
    ],
  },
};
