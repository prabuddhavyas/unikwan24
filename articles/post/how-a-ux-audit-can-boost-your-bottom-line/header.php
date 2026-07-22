<?php
  //$baseUrl = "https://www.unikwan.com/";
  //$currentUrl = $_SERVER['REQUEST_URI'] === '/success-stories/' || $_SERVER['REQUEST_URI'] === '/articles/' || $_SERVER['REQUEST_URI'] === '/free-templates-and-ebooks/' ? 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] : '';
  $baseUrl = "https://www.unikwan.com/unikwan-projects/2024/unikwan24/";
  $currentUrl = $_SERVER['REQUEST_URI'] === '/unikwan-projects/2024/unikwan24/success-stories/' || $_SERVER['REQUEST_URI'] === '/unikwan-projects/2024/unikwan24/articles/' || $_SERVER['REQUEST_URI'] === '/unikwan-projects/2024/unikwan24/free-templates-and-ebooks/' ? 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] : '';
  // $baseUrl = "http://localhost/unikwan24/";
  // $currentUrl = $_SERVER['REQUEST_URI'] === '/unikwan24/success-stories/' || $_SERVER['REQUEST_URI'] === '/unikwan24/articles/' || $_SERVER['REQUEST_URI'] === '/unikwan24/free-templates-and-ebooks/' ? 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] : '';
?>

<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="icon" href="<?php echo $baseUrl; ?>favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo $baseUrl; ?>favicon.ico">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
<link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,2&display=swap" rel="stylesheet">
<link href="<?php echo $baseUrl; ?>assets/css/unikwan.css?v=0.6" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->