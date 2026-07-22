<!DOCTYPE html>
<html lang="en">

<head>
  <title>AI UX Design for Enterprise Products | UniKwan</title>
  <meta name="description"
    content="UniKwan designs the experience layer that turns AI capability into user adoption. Specialised AI UX for enterprise SaaS and B2B products — audits, design sprints, and partnerships.">
  <?php include '../header.php'; ?>
  <meta name="author" content="UniKwan Innovations" />
  <meta property='og:title' content='AI UX Design for Enterprise Products | UniKwan' />
  <meta property='og:description'
    content="UniKwan designs the experience layer that turns AI capability into user adoption. Specialised AI UX for enterprise SaaS and B2B products — audits, design sprints, and partnerships." />
  <meta property='og:url' content='<?php echo $baseUrl; ?>projects/visist-player/' />
  <!-- <meta property='og:image' content='<?php echo $baseUrl; ?>assets/images/blog-post-hero-bg.png' /> -->
  <!-- <meta property="og:image:secure_url" content="<?php echo $baseUrl; ?>assets/images/blog-post-hero-bg.png" /> -->
  <meta property="og:site_name" content="UniKwan Innovations">
  <meta property="og:type" content="Website">
</head>

<body>
  <section class="hero-section">
    <!-- Begin Navbar Section -->
    <?php include '../navbar.php'; ?>
    <!-- End Navbar Section -->
    <div class="hero-container">
      <div class="hero-wrapper">
        <div class="hero-left">
          <div class="hero-eyebrow">
            <span class="eyebrow-dot"></span>UX for AI products
          </div>

          <h1 class="hero-title">
            Building an <span class="gradient-text">AI<br>product?</span>
          </h1>

          <p class="hero-description">
            Technical capability is no longer the differentiator. Trust is.
          </p>

          <div class="hero-actions">
            <a href="#letsTalk" class="btn btn-primary scroll-link">Book a <span class="desktop">&nbsp;discovery</span>&nbsp;call <span class="arrow">&rarr;</span></a>
            <a href="#diagnostic" class="btn btn-secondary scroll-link">Assess your product</a>
          </div>
        </div>

        <div class="hero-right">
          <div class="ai-display-card">
            <img rel="preload"
              as="image" src="<?php echo $baseUrl; ?>assets/images/ai-ux/AI-UX-hero.webp" alt="button arrow"
              width="400px" height="400px" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="scroll-track-container" id="ai-fail-section">
    <div class="sticky-viewport">
      <div class="content-bound">

        <div class="section-top-header">
          <div class="left-header-pane">
            <span class="section-badge">Why AI products fail</span>
            <h2 class="main-section-title">The gap between "it works" and "users love it" is where products die</h2>
          </div>
          <div class="right-counter-pane">
            <span class="current-step" id="step-counter">01</span><span class="total-steps"> / 05</span>
          </div>
        </div>

        <div class="stepped-progress-bar" id="progress-bar-steps">
          <div class="progress-segment active"></div>
          <div class="progress-segment"></div>
          <div class="progress-segment"></div>
          <div class="progress-segment"></div>
          <div class="progress-segment"></div>
        </div>

        <div class="slides-window">

          <div class="slide-row active" data-step="1">
            <div class="failure-stat-card">
              <span class="card-tag">FAILURE 01</span>
              <div class="ai-fail-stat-number">73%</div>
              <p class="stat-desc">of users abandon AI tools after 1 week</p>
            </div>
            <div class="failure-text-pane">
              <h3>Nobody trusts the output.</h3>
              <p>Users verify everything manually. Adoption stalls after week one because the AI feels like a guess, not a trusted workflow partner.</p>
            </div>
          </div>

          <div class="slide-row" data-step="2">
            <div class="failure-stat-card">
              <span class="card-tag">FAILURE 02</span>
              <div class="ai-fail-stat-number">1st</div>
              <p class="stat-desc">model-first, user-second</p>
            </div>
            <div class="failure-text-pane">
              <h3>Built technology first.</h3>
              <p>The product reflects the model's capabilities, not the user's workflow.
                Power without fit goes unused.</p>
            </div>
          </div>

          <div class="slide-row" data-step="3">
            <div class="failure-stat-card">
              <span class="card-tag">FAILURE 03</span>
              <div class="ai-fail-stat-number">∞</div>
              <p class="stat-desc">magical until it isn't</p>
            </div>
            <div class="failure-text-pane">
              <h3>The magical fail.</h3>
              <p>When the AI is wrong, users feel betrayed. One bad answer erases ten
                good ones. Trust collapses fast.</p>
            </div>
          </div>

          <div class="slide-row" data-step="4">
            <div class="failure-stat-card">
              <span class="card-tag">FAILURE 04</span>
              <div class="ai-fail-stat-number">0</div>
              <p class="stat-desc">context, generic output</p>
            </div>
            <div class="failure-text-pane">
              <h3>Missing context.</h3>
              <p>Outputs feel generic and surface-level. Users fall back to manual work
                because the AI doesn't know their world.</p>
            </div>
          </div>

          <div class="slide-row" data-step="5">
            <div class="failure-stat-card">
              <span class="card-tag">FAILURE 05</span>
              <div class="ai-fail-stat-number">-</div>
              <p class="stat-desc">no controls, no oversight</p>
            </div>
            <div class="failure-text-pane">
              <h3>No user control.</h3>
              <p>AI feels imposed instead of empowering. Without steering, correction,
                and override, users disengage.</p>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

  <section class="ux-framework">

    <div class="framework-inner">

      <div class="framework-header">

        <span class="framework-label">
          Framework
        </span>
        <div class="framework-header-flex">
          <h2 class="framework-heading">
            AI Experience Framework
          </h2>

          <p class="framework-description">Helping teams design AI that works for people,
            not just models.</p>
        </div>

      </div>

      <div class="framework-content">

        <!-- LEFT TIMELINE -->

        <div class="framework-timeline">

          <div class="timeline-track">
            <div class="timeline-progress"></div>
          </div>

          <div class="framework-step active" data-step="0">

            <div class="step-dot"></div>

            <div class="step-body">

              <div class="step-row">
                <span class="step-number">01</span>
                <span class="step-title">Understand</span>
              </div>

              <div class="mobile-description"></div>

            </div>

          </div>

          <div class="framework-step" data-step="1">

            <div class="step-dot"></div>

            <div class="step-body">

              <div class="step-row">
                <span class="step-number">02</span>
                <span class="step-title">Guide</span>
              </div>

              <div class="mobile-description"></div>

            </div>

          </div>

          <div class="framework-step" data-step="2">

            <div class="step-dot"></div>

            <div class="step-body">

              <div class="step-row">
                <span class="step-number">03</span>
                <span class="step-title">Trust</span>
              </div>

              <div class="mobile-description"></div>

            </div>

          </div>

          <div class="framework-step" data-step="3">

            <div class="step-dot"></div>

            <div class="step-body">

              <div class="step-row">
                <span class="step-number">04</span>
                <span class="step-title">Steer</span>
              </div>

              <div class="mobile-description"></div>

            </div>

          </div>

          <div class="framework-step" data-step="4">

            <div class="step-dot"></div>

            <div class="step-body">

              <div class="step-row">
                <span class="step-number">05</span>
                <span class="step-title">Improve</span>
              </div>

              <div class="mobile-description"></div>

            </div>

          </div>

        </div>

        <!-- DESKTOP CARD -->

        <div class="framework-card">

          <span class="card-stage">
            STAGE 01
          </span>

          <h3 class="framework-card-title">
            Understand.
          </h3>

          <p class="framework-card-description">
            Map user goals, context and workflow to ground the AI in real intent.
          </p>

          <div class="card-features"></div>

        </div>

      </div>

    </div>

  </section>

  <!-- OUTCOMES SECTION -->
  <section class="outcomes-section">

    <!-- Header Info -->
    <div class="header-info">
      <span class="tag">Outcomes</span>
      <h2 class="heading">What better AI experiences deliver</h2>
    </div>

    <!-- Metric Cards Grid -->
    <div class="stats-grid">

      <!-- Card 1: Adoption -->
      <div class="stat-card">
        <span class="stat-label">Adoption</span>
        <div class="stat-number">
          <span class="count" data-target="2.7" data-suffix="x">0</span>
        </div>
      </div>

      <!-- Card 2: Confidence -->
      <div class="stat-card">
        <span class="stat-label">Confidence</span>
        <div class="stat-number">
          <span class="count" data-target="69" data-suffix="%">0</span>
        </div>
      </div>

      <!-- Card 3: Productivity -->
      <div class="stat-card">
        <span class="stat-label">Productivity</span>
        <div class="stat-number">
          <span class="count" data-target="33" data-suffix="%">0</span>
        </div>
      </div>

      <!-- Card 4: Decision Quality -->
      <div class="stat-card">
        <span class="stat-label">Decision Quality</span>
        <div class="stat-number">
          <span class="count" data-target="1.7" data-suffix="x">0</span>
        </div>
      </div>

      <!-- Card 5: ROI -->
      <div class="stat-card">
        <span class="stat-label">ROI</span>
        <div class="stat-number">
          <span class="count" data-target="4.5" data-suffix="x">0</span>
        </div>
      </div>

    </div>

    <!-- Formula Banner -->
    <div class="formula-banner">
      <p class="formula-text">
        AI Success = <span class="formula-highlight">Adoption x Confidence x ROI </span>
      </p>
    </div>

  </section>


  <!-- EXPERTISE SECTION -->
  <section class="expertise-section">

    <!-- Header Info Group -->
    <div class="header-block">
      <h4 class="tagline">Expertise</h4>
      <h2 class="main-title">Designing AI Experiences Across Every Stage</h2>
    </div>

    <!-- Three-Column Response Matrix Grid -->
    <div class="expertise-grid">

      <!-- Card 1: Designing Something New -->
      <div class="expertise-card">
        <div class="icon-container">
          <!-- Sparkle / Creation Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
            <path d="M16.6663 40.6249C16.6663 41.6457 15.9372 42.4999 14.9371 42.6874L13.708 42.8957C12.6455 43.0624 11.8121 43.8958 11.6456 44.9582L11.4372 46.1874C11.2497 47.1874 10.3955 47.9166 9.37467 47.9166C8.35386 47.9166 7.49962 47.1874 7.3122 46.1874L7.10379 44.9582C6.93721 43.8958 6.10383 43.0624 5.04131 42.8957L3.81221 42.6874C2.81212 42.4999 2.08301 41.6457 2.08301 40.6249C2.08301 39.6041 2.81212 38.7499 3.81221 38.5624L5.04131 38.354C6.10383 38.1873 6.93721 37.3541 7.10379 36.2916L7.3122 35.0623C7.49962 34.0624 8.35386 33.3333 9.37467 33.3333C10.3955 33.3333 11.2497 34.0624 11.4372 35.0623L11.6456 36.2916C11.8121 37.3541 12.6455 38.1873 13.708 38.354L14.9371 38.5624C15.9372 38.7499 16.6663 39.6041 16.6663 40.6249ZM12.755 10.1033C13.7316 9.49496 14.0306 8.20915 13.4233 7.23259C12.814 6.25602 11.5313 5.95899 10.5537 6.56323C9.37467 7.29769 7.90678 8.21118 6.9821 9.77979C5.88245 11.6454 5.92415 14.4775 7.89661 15.9871C9.21293 16.9901 11.0999 17.1386 12.8333 16.3716C13.8302 15.9301 14.6145 15.2892 15.3063 14.7236L15.7081 14.3961C17.41 13.0411 19.4129 11.9933 21.5034 11.3626C22.2022 11.149 22.5054 11.1653 22.54 11.1368C22.5562 11.1795 22.5776 11.2589 22.5756 11.3565C22.5705 11.737 22.3538 12.2273 22.19 12.565C21.2084 14.5975 19.6032 16.337 17.9033 18.1762C17.4679 18.6482 17.0326 19.1182 16.6084 19.5942C14.5006 21.9563 12.0389 25.1749 11.7011 29.13C11.5679 30.6742 11.9615 31.8704 12.872 32.6842C13.581 33.3149 15.1669 34.1816 17.7996 32.847C20.8086 31.3191 23.4046 29.2378 25.9152 27.2257C26.8063 26.5095 27.6974 25.7954 28.6058 25.1077C31.1459 23.1831 35.0013 20.5952 39.1273 20.3612C39.3541 20.349 39.4884 20.3511 39.5321 20.3307C39.5789 20.4874 39.6135 20.8068 39.5423 21.1934C39.108 23.5493 37.1457 25.5147 34.8182 27.655L21.2501 40.1326C20.4027 40.9118 20.3478 42.2302 21.126 43.0765C21.5369 43.5241 22.0975 43.7499 22.661 43.7499C23.1646 43.7499 23.6701 43.5689 24.0699 43.2006L37.638 30.723C39.8668 28.6722 42.9186 25.8666 43.6398 21.9482C44.0701 19.6105 43.2421 17.5313 41.5321 16.6503C40.6165 16.1783 39.6908 16.1498 38.8964 16.2007C33.627 16.4998 29.0636 19.5332 26.0892 21.7874C25.1512 22.4975 24.2306 23.236 23.309 23.9745C20.8554 25.9419 18.5381 27.7994 15.9146 29.132C15.9065 29.1361 15.8983 29.1401 15.8902 29.1442C16.2493 26.5461 18.1108 24.1698 19.7171 22.3693C20.126 21.9095 20.5451 21.4579 20.9642 21.0042C22.7963 19.0205 24.6904 16.9697 25.9406 14.3778C26.2763 13.686 26.7249 12.624 26.7422 11.4135C26.7626 9.92627 26.1126 8.56316 25.0007 7.7697C23.2073 6.48796 21.0141 7.15528 20.2959 7.37501C17.708 8.15625 15.2249 9.4563 13.1131 11.1368L12.6665 11.4989C12.1324 11.9364 11.6279 12.3494 11.1467 12.563C10.7988 12.7156 10.4957 12.7054 10.456 12.7054C10.4011 12.6139 10.3746 12.2293 10.571 11.8957C10.9758 11.208 11.9209 10.62 12.755 10.1033Z" fill="#2D6EE0" />
          </svg>
        </div>
        <h3 class="expertise-card-title">Designing Something New</h3>
        <p class="expertise-card-description">
          We define the mental models and interaction patterns for products that have no precedent.
        </p>
      </div>

      <!-- Card 2: Improving an Existing Product -->
      <div class="expertise-card">
        <div class="icon-container">
          <!-- Growth / Optimization Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
            <path d="M43.7503 41.6665H11.2712L20.2503 32.6873L21.042 34.2707C21.183 34.5499 21.385 34.7939 21.6331 34.9844C21.8813 35.1749 22.1691 35.307 22.4753 35.3711C22.7815 35.4351 23.0982 35.4294 23.4019 35.3543C23.7056 35.2792 23.9884 35.1367 24.2295 34.9373L33.3337 27.354V29.1665C33.3337 29.719 33.5532 30.2489 33.9439 30.6396C34.3346 31.0303 34.8645 31.2498 35.417 31.2498C35.9695 31.2498 36.4994 31.0303 36.8901 30.6396C37.2808 30.2489 37.5003 29.719 37.5003 29.1665V22.9165C37.4954 22.6889 37.4531 22.4637 37.3753 22.2498V22.0832C37.297 21.9256 37.199 21.7786 37.0837 21.6457L36.917 21.479C36.7905 21.3651 36.6506 21.2672 36.5003 21.1873H36.292C36.0313 21.0039 35.7319 20.8827 35.417 20.8332H29.167C28.6145 20.8332 28.0846 21.0527 27.6939 21.4434C27.3032 21.8341 27.0837 22.364 27.0837 22.9165C27.0837 23.469 27.3032 23.9989 27.6939 24.3896C28.0846 24.7803 28.6145 24.9998 29.167 24.9998H29.667L23.6045 30.0415L22.6878 28.229C22.5411 27.9348 22.3268 27.6795 22.0625 27.4839C21.7981 27.2884 21.4913 27.1582 21.167 27.104C20.8403 27.0502 20.5054 27.075 20.1902 27.1765C19.875 27.2779 19.5885 27.4531 19.3545 27.6873L8.33366 38.729V6.24984C8.33366 5.6973 8.11417 5.1674 7.72346 4.7767C7.33276 4.386 6.80286 4.1665 6.25033 4.1665C5.69779 4.1665 5.16789 4.386 4.77719 4.7767C4.38649 5.1674 4.16699 5.6973 4.16699 6.24984V43.7498C4.16699 44.3024 4.38649 44.8323 4.77719 45.223C5.16789 45.6137 5.69779 45.8332 6.25033 45.8332H43.7503C44.3029 45.8332 44.8328 45.6137 45.2235 45.223C45.6142 44.8323 45.8337 44.3024 45.8337 43.7498C45.8337 43.1973 45.6142 42.6674 45.2235 42.2767C44.8328 41.886 44.3029 41.6665 43.7503 41.6665Z" fill="#2D6EE0" />
          </svg>
        </div>
        <h3 class="expertise-card-title">Improving an Existing Product</h3>
        <p class="expertise-card-description">
          Integrating AI features seamlessly into your existing UX without overwhelming users.
        </p>
      </div>

      <!-- Card 3: Aligning Teams -->
      <div class="expertise-card">
        <div class="icon-container">
          <!-- Collaboration / Team Alignment Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
            <g clip-path="url(#clip0_53_3886)">
              <path d="M18.7503 28.6457C13.8753 28.6457 4.16699 31.0832 4.16699 35.9373V39.5832H33.3337V35.9373C33.3337 31.0832 23.6253 28.6457 18.7503 28.6457ZM9.04199 35.4165C10.792 34.2082 15.0212 32.8123 18.7503 32.8123C22.4795 32.8123 26.7087 34.2082 28.4587 35.4165H9.04199ZM18.7503 24.9998C22.7712 24.9998 26.042 21.729 26.042 17.7082C26.042 13.6873 22.7712 10.4165 18.7503 10.4165C14.7295 10.4165 11.4587 13.6873 11.4587 17.7082C11.4587 21.729 14.7295 24.9998 18.7503 24.9998ZM18.7503 14.5832C20.4795 14.5832 21.8753 15.979 21.8753 17.7082C21.8753 19.4373 20.4795 20.8332 18.7503 20.8332C17.0212 20.8332 15.6253 19.4373 15.6253 17.7082C15.6253 15.979 17.0212 14.5832 18.7503 14.5832ZM33.417 28.7707C35.8337 30.5207 37.5003 32.854 37.5003 35.9373V39.5832H45.8337V35.9373C45.8337 31.729 38.542 29.3332 33.417 28.7707ZM31.2503 24.9998C35.2712 24.9998 38.542 21.729 38.542 17.7082C38.542 13.6873 35.2712 10.4165 31.2503 10.4165C30.1253 10.4165 29.0837 10.6873 28.1253 11.1457C29.4378 12.9998 30.2087 15.2707 30.2087 17.7082C30.2087 20.1457 29.4378 22.4165 28.1253 24.2707C29.0837 24.729 30.1253 24.9998 31.2503 24.9998Z" fill="#2D6EE0" />
            </g>
            <defs>
              <clipPath id="clip0_53_3886">
                <rect width="50" height="50" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </div>
        <h3 class="expertise-card-title">Aligning <br /> Teams</h3>
        <p class="expertise-card-description">
          Workshops and sprints to bring engineering and design together on the AI vision.
        </p>
      </div>

    </div>

  </section>

  <!-- DIAGNOSTIC SECTION -->
  <section id="diagnostic" class="diagnostic-section">

    <!-- Header Block -->
    <div class="header-block">
      <span class="tagline">Diagnostic</span>
      <h2 class="main-title">Assess your AI product</h2>
    </div>

    <!-- Adaptive Layout Grid Split -->
    <div class="diagnostic-grid">

      <!-- Left Grid: Sample Evaluation Sheet with Custom Filled Progress Bars -->
      <div class="report-panel" id="leftPanel">
        <div class="panel-header">
          <div>
            <h3 class="panel-title">Sample report</h3>
            <div class="panel-subtitle">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
              </svg>
              Quick assessment takes ~5 minutes
            </div>
          </div>
          <div class="score-badge">
            <div class="score-num" id="compositeScore" data-target="57">0</div>
            <div class="score-label">Composite</div>
          </div>
        </div>

        <!-- Matrix Checklist Metrics Layout Grid -->
        <div class="metrics-list">

          <!-- Row 1: Explainability -->
          <div class="metric-item">
            <div class="metric-info">
              <span class="metric-name">Explainability</span>
              <span class="metric-val"><span class="count" data-target="55">0</span></span>
            </div>
            <div class="progress-bar-track">
              <div class="progress-bar-fill" data-percent="55"></div>
            </div>
          </div>

          <!-- Row 2: Reliability -->
          <div class="metric-item">
            <div class="metric-info">
              <span class="metric-name">Reliability</span>
              <span class="metric-val"><span class="count" data-target="62">0</span></span>
            </div>
            <div class="progress-bar-track">
              <div class="progress-bar-fill" data-percent="62"></div>
            </div>
          </div>

          <!-- Row 3: Steerability -->
          <div class="metric-item">
            <div class="metric-info">
              <span class="metric-name">Steerability</span>
              <span class="metric-val"><span class="count" data-target="48">0</span></span>
            </div>
            <div class="progress-bar-track">
              <div class="progress-bar-fill" data-percent="48"></div>
            </div>
          </div>

          <!-- Row 4: Visibility & Oversight -->
          <div class="metric-item">
            <div class="metric-info">
              <span class="metric-name">Visibility & Oversight</span>
              <span class="metric-val"><span class="count" data-target="71">0</span></span>
            </div>
            <div class="progress-bar-track">
              <div class="progress-bar-fill" data-percent="71"></div>
            </div>
          </div>

          <!-- Row 5: Workflow Fit -->
          <div class="metric-item">
            <div class="metric-info">
              <span class="metric-name">Workflow Fit</span>
              <span class="metric-val"><span class="count" data-target="66">0</span></span>
            </div>
            <div class="progress-bar-track">
              <div class="progress-bar-fill" data-percent="66"></div>
            </div>
          </div>

          <!-- Row 6: Context Awareness -->
          <div class="metric-item">
            <div class="metric-info">
              <span class="metric-name">Context Awareness</span>
              <span class="metric-val"><span class="count" data-target="52">0</span></span>
            </div>
            <div class="progress-bar-track">
              <div class="progress-bar-fill" data-percent="52"></div>
            </div>
          </div>

          <!-- Row 7: User Confidence & Engagement -->
          <div class="metric-item">
            <div class="metric-info">
              <span class="metric-name">User Confidence & Engagement</span>
              <span class="metric-val"><span class="count" data-target="58">0</span></span>
            </div>
            <div class="progress-bar-track">
              <div class="progress-bar-fill" data-percent="58"></div>
            </div>
          </div>

          <!-- Row 8: Learning & Improvement Loop -->
          <div class="metric-item">
            <div class="metric-info">
              <span class="metric-name">Learning & Improvement Loop</span>
              <span class="metric-val"><span class="count" data-target="45">0</span></span>
            </div>
            <div class="progress-bar-track">
              <div class="progress-bar-fill" data-percent="45"></div>
            </div>
          </div>

        </div>

        <!-- Action Button Trigger -->
        <button class="action-btn" onclick="window.location.href='<?php echo $baseUrl; ?>ai-ux-assessment/'">Start assessment →</button>
      </div>

      <!-- Right Grid: Architectural Radar Graph -->
      <div class="graphic-panel" id="rightPanel">
        <img src="<?php echo $baseUrl; ?>assets/images/ai-ux/diagnostic-graphic.webp" alt="Diagnostic Graphic"
          loading="lazy"
          decoding="async"
          width="421px" height="425px" />
      </div>

    </div>

  </section>

  <!-- SELECTED WORK SECTION -->
  <section class="selected-work-section" id="selectedWorkSection">

    <div class="sw-grid">

      <!-- Left Side: Interactive Content -->
      <div>

        <div class="sw-header">
          <span class="sw-tagline">Selected Work</span>
          <h2 class="sw-title">AI products that<br>earned trust</h2>
          <a href="<?php echo $baseUrl; ?>projects/?service=AI_UX" class="btn btn-secondary see-all-btn">See all</a>
        </div>
        <div class="sw-content-wrapper">
          <div class="sw-dynamic-content" id="caseContent">
            <div class="sw-logo-wrapper">
              <img src="<?php echo $baseUrl; ?>assets/images/ai-ux/bluerobins-logo.svg" alt="Case Study Logo" class="case-logo" loading="lazy"
                decoding="async" height="50px" id="caseLogo">
            </div>
            <h3 class="case-title" id="caseTitle">AI-Powered Mentorship Platform</h3>
            <p class="case-description" id="caseDesc">We designed the UX for a mentorship platform with dedicated portals for students, mentors and parents, supported by AI-assisted guidance & personalized learning experiences.</p>
          </div>

          <!-- Controls / Steps -->
          <div class="sw-controls">
            <div class="step-line active" data-index="0">
              <div class="fill"></div>
            </div>
            <div class="step-line" data-index="1">
              <div class="fill"></div>
            </div>
            <div class="step-line" data-index="2">
              <div class="fill"></div>
            </div>
            <div class="step-line" data-index="3">
              <div class="fill"></div>
            </div>
            <div class="step-line" data-index="4">
              <div class="fill"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Right Side: Dynamic Image Area -->
      <div class="sw-image-wrapper">
        <img src="<?php echo $baseUrl; ?>assets/images/ai-ux/bluerobins-work.webp" alt="Case Study Image" loading="lazy"
          decoding="async" class="case-image" id="caseImage">
      </div>

    </div>

  </section>

  <!-- ENGAGEMENTS SECTION -->
  <section class="engagements-section">
    <img
      src="<?php echo $baseUrl; ?>assets/images/ai-ux/engagements-bg.webp"
      class="engagement-bg"
      alt="">
    <div class="engagement-content">
      <div class="section-header">
        <span class="subheading">Engagements</span>
        <h2 class="main-heading">Ways to work together</h2>
      </div>

      <div class="cards-grid">

        <!-- Card 1: AI Product Audit -->
        <div class="engagement-card" data-delay="0">
          <img src="<?php echo $baseUrl; ?>assets/images/ai-ux/ai-product-audit.gif" alt="AI Product Audit" loading="lazy"
            decoding="async" width="81px" height="62px">
          <div class="card-header-row">
            <h3 class="engagement-card-title">AI Product Audit</h3>
          </div>
          <p class="engagement-card-desc">Diagnose trust gaps and UX friction in your existing AI product.</p>

          <ul class="engagement-features-list">
            <li class="engagement-feature-item">
              <div class="check-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              Trust heuristics report
            </li>
            <li class="engagement-feature-item">
              <div class="check-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              UX friction mapping
            </li>
            <li class="engagement-feature-item">
              <div class="check-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              Quick win recommendations
            </li>
          </ul>

          <div class="engagement-card-footer">
            <div class="duration-wrap">
              <span class="duration-label">Duration</span>
              <span class="duration-value">2-3 weeks</span>
            </div>
            <!-- <button class="btn btn-primary">
              Book an audit
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </button> -->
          </div>
        </div>

        <!-- Card 2: Design Sprint (Contains precise embedded inside badge) -->
        <!-- <div class="engagement-card popular" data-delay="0.15">
          <div class="card-header-row">
            <h3 class="engagement-card-title color_white">Design Sprint</h3>
            <div class="popular-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <g clip-path="url(#clip0_73_1592)">
                  <path d="M5.50872 1.40722C5.53014 1.29252 5.59101 1.18893 5.68077 1.11438C5.77053 1.03983 5.88354 0.999023 6.00022 0.999023C6.1169 0.999023 6.22991 1.03983 6.31967 1.11438C6.40943 1.18893 6.4703 1.29252 6.49172 1.40722L7.01722 4.18622C7.05454 4.38379 7.15056 4.56553 7.29274 4.70771C7.43491 4.84988 7.61665 4.9459 7.81422 4.98322L10.5932 5.50872C10.7079 5.53014 10.8115 5.59101 10.8861 5.68077C10.9606 5.77053 11.0014 5.88354 11.0014 6.00022C11.0014 6.1169 10.9606 6.22991 10.8861 6.31967C10.8115 6.40943 10.7079 6.4703 10.5932 6.49172L7.81422 7.01722C7.61665 7.05454 7.43491 7.15056 7.29274 7.29274C7.15056 7.43491 7.05454 7.61665 7.01722 7.81422L6.49172 10.5932C6.4703 10.7079 6.40943 10.8115 6.31967 10.8861C6.22991 10.9606 6.1169 11.0014 6.00022 11.0014C5.88354 11.0014 5.77053 10.9606 5.68077 10.8861C5.59101 10.8115 5.53014 10.7079 5.50872 10.5932L4.98322 7.81422C4.9459 7.61665 4.84988 7.43491 4.70771 7.29274C4.56553 7.15056 4.38379 7.05454 4.18622 7.01722L1.40722 6.49172C1.29252 6.4703 1.18893 6.40943 1.11438 6.31967C1.03983 6.22991 0.999023 6.1169 0.999023 6.00022C0.999023 5.88354 1.03983 5.77053 1.11438 5.68077C1.18893 5.59101 1.29252 5.53014 1.40722 5.50872L4.18622 4.98322C4.38379 4.9459 4.56553 4.84988 4.70771 4.70771C4.84988 4.56553 4.9459 4.38379 4.98322 4.18622L5.50872 1.40722Z" stroke="#2D6EE0" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M10 1V3" stroke="#2D6EE0" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M11 2H9" stroke="#2D6EE0" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M2 11C2.55228 11 3 10.5523 3 10C3 9.44772 2.55228 9 2 9C1.44772 9 1 9.44772 1 10C1 10.5523 1.44772 11 2 11Z" stroke="#2D6EE0" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                  <clipPath id="clip0_73_1592">
                    <rect width="12" height="12" fill="white" />
                  </clipPath>
                </defs>
              </svg>
              Most Popular
            </div>
          </div>
          <p class="engagement-card-desc">Go from concept to validated AI experience in weeks, not quarters.</p>

          <ul class="engagement-features-list">
            <li class="engagement-feature-item popular_card_color">
              <div class="check-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              Prototype creation
            </li>
            <li class="engagement-feature-item popular_card_color">
              <div class="check-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              User validation
            </li>
            <li class="engagement-feature-item">
              <div class="check-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              Implementation roadmap
            </li>
          </ul>

          <div class="engagement-card-footer">
            <div class="duration-wrap">
              <span class="duration-label">Duration</span>
              <span class="duration-value">4-6 weeks</span>
            </div>
            <button class="btn btn-white">
              Start a sprint
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </button>
          </div>
        </div> -->
        <div class="engagement-card" data-delay="0.15">
          <img src="<?php echo $baseUrl; ?>assets/images/ai-ux/design-sprint.gif" alt="Design Sprint" loading="lazy"
            decoding="async" width="50px" height="42px">
          <div class="card-header-row">
            <h3 class="engagement-card-title">Design Sprint</h3>
          </div>
          <p class="engagement-card-desc">Go from concept to validated AI experience in weeks, not quarters.</p>

          <ul class="engagement-features-list">
            <li class="engagement-feature-item">
              <div class="check-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              Prototype creation
            </li>
            <li class="engagement-feature-item">
              <div class="check-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              User validation
            </li>
            <li class="engagement-feature-item">
              <div class="check-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              Implementation roadmap
            </li>
          </ul>

          <div class="engagement-card-footer">
            <div class="duration-wrap">
              <span class="duration-label">Duration</span>
              <span class="duration-value">4-6 weeks</span>
            </div>
            <!-- <button class="btn btn-primary">
              Explore partnership
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </button> -->
          </div>
        </div>

        <!-- Card 3: Partnership -->
        <div class="engagement-card" data-delay="0.3">
          <img src="<?php echo $baseUrl; ?>assets/images/ai-ux/partnership.gif" alt="Partnership" loading="lazy"
            decoding="async" width="50px" height="50px">
          <div class="card-header-row">
            <h3 class="engagement-card-title">Partnership</h3>
          </div>
          <p class="engagement-card-desc">Embedded AI UX leadership across strategy, design, and adoption.</p>

          <ul class="engagement-features-list">
            <li class="engagement-feature-item">
              <div class="check-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              Ongoing AI UX support
            </li>
            <li class="engagement-feature-item">
              <div class="check-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              Strategy
            </li>
            <li class="engagement-feature-item">
              <div class="check-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              Design leadership
            </li>
          </ul>

          <div class="engagement-card-footer">
            <div class="duration-wrap">
              <span class="duration-label">Duration</span>
              <span class="duration-value">Ongoing</span>
            </div>
            <!-- <button class="btn btn-primary">
              Explore partnership
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </button> -->
          </div>
        </div>
      </div>

      <div class="popular-badge margin_center margin_top_32">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
          <g clip-path="url(#clip0_73_1592)">
            <path d="M5.50872 1.40722C5.53014 1.29252 5.59101 1.18893 5.68077 1.11438C5.77053 1.03983 5.88354 0.999023 6.00022 0.999023C6.1169 0.999023 6.22991 1.03983 6.31967 1.11438C6.40943 1.18893 6.4703 1.29252 6.49172 1.40722L7.01722 4.18622C7.05454 4.38379 7.15056 4.56553 7.29274 4.70771C7.43491 4.84988 7.61665 4.9459 7.81422 4.98322L10.5932 5.50872C10.7079 5.53014 10.8115 5.59101 10.8861 5.68077C10.9606 5.77053 11.0014 5.88354 11.0014 6.00022C11.0014 6.1169 10.9606 6.22991 10.8861 6.31967C10.8115 6.40943 10.7079 6.4703 10.5932 6.49172L7.81422 7.01722C7.61665 7.05454 7.43491 7.15056 7.29274 7.29274C7.15056 7.43491 7.05454 7.61665 7.01722 7.81422L6.49172 10.5932C6.4703 10.7079 6.40943 10.8115 6.31967 10.8861C6.22991 10.9606 6.1169 11.0014 6.00022 11.0014C5.88354 11.0014 5.77053 10.9606 5.68077 10.8861C5.59101 10.8115 5.53014 10.7079 5.50872 10.5932L4.98322 7.81422C4.9459 7.61665 4.84988 7.43491 4.70771 7.29274C4.56553 7.15056 4.38379 7.05454 4.18622 7.01722L1.40722 6.49172C1.29252 6.4703 1.18893 6.40943 1.11438 6.31967C1.03983 6.22991 0.999023 6.1169 0.999023 6.00022C0.999023 5.88354 1.03983 5.77053 1.11438 5.68077C1.18893 5.59101 1.29252 5.53014 1.40722 5.50872L4.18622 4.98322C4.38379 4.9459 4.56553 4.84988 4.70771 4.70771C4.84988 4.56553 4.9459 4.38379 4.98322 4.18622L5.50872 1.40722Z" stroke="#2D6EE0" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M10 1V3" stroke="#2D6EE0" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M11 2H9" stroke="#2D6EE0" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M2 11C2.55228 11 3 10.5523 3 10C3 9.44772 2.55228 9 2 9C1.44772 9 1 9.44772 1 10C1 10.5523 1.44772 11 2 11Z" stroke="#2D6EE0" stroke-linecap="round" stroke-linejoin="round" />
          </g>
          <defs>
            <clipPath id="clip0_73_1592">
              <rect width="12" height="12" fill="white" />
            </clipPath>
          </defs>
        </svg>
        Not sure which fits? We will point you to the right next step.
      </div>
      <div class="engagement_btn margin_center margin_top_20">
        <a href="#letsTalk" class="btn btn-primary scroll-link">Book a discovery call <span class="arrow">&rarr;</span></a>
      </div>
    </div>
  </section>

  <!-- Begin FAQ Section -->
  <section class="faq_section pl_pr">
    <div class="label_purple">
      <p class="ff_satoshi content_20 fw_700 color_white">FAQ</p>
    </div>
    <h2 class="sub_heading_48 fw_700 color_white heading_mt faq_heading">Here's everything you may ask</h2>

    <div class="faq_accordion_block margin_top_64">
      <div id="products" class="faq_accordion">
        <div id="faq1" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              What is AI UX design and why does it matter for enterprise products?

            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              AI UX design is the practice of shaping how users interact with, interpret, and trust AI-generated outputs inside a product. Most enterprise AI products fail not because the
              model underperforms, but because users don't understand what the AI is doing or why.
              UniKwan designs the experience layer that closes that gap — turning AI capability into user
              adoption.
            </p>
          </div>
        </div>
        <div id="faq2" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              How is designing for an AI product different from standard UX design?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              Standard UX design assumes predictable system behavior. AI interfaces produce outputs
              that vary, fail unpredictably, and require users to exercise judgment. Designing for AI
              means accounting for uncertainty, communicating confidence levels, building trust
              incrementally, and giving users meaningful control over AI behavior. UniKwan specialises
              in designing for exactly these conditions.
            </p>
          </div>
        </div>
        <div id="faq3" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              What kinds of AI products does UniKwan design for?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              UniKwan works with teams building AI products from scratch, teams adding AI capabilities
              to existing SaaS platforms, and product leaders who need to align their design and AI
              development direction before scaling. Enterprise SaaS, B2B platforms, and AI-powered
              tools are the primary focus.
            </p>
          </div>
        </div>
        <div id="faq4" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              What does a UniKwan AI Product Audit cover?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              The AI Product Audit evaluates your product across all five pillars of the UniKwan AI
              Experience Framework — how well users understand AI outputs, whether the product
              guides decisions clearly, where trust breaks down, how users can influence AI behavior,
              and whether the system improves from feedback. You receive a scored assessment and a
              prioritised action plan.

            </p>
          </div>
        </div>
        <div id="faq5" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              How do you measure the success of AI UX design?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              UniKwan measures AI UX outcomes against three variables: adoption (are users engaging
              with AI features?), confidence (do users trust and act on what the AI surfaces?), and ROI
              (does that usage produce measurable business results?). Design decisions are scoped
              and evaluated against this equation throughout every engagement.
            </p>
          </div>
        </div>
        <div id="faq6" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              How do I get started with UniKwan for my AI product?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              Book a discovery call from the UniKwan website. For teams unsure of where to start, the AI
              Product Audit is the right first step — it gives you a clear picture of what's working, what's
              breaking user trust, and what to fix first before investing in redesign or new features.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="faq_bg_container">
      <img src="<?php echo $baseUrl; ?>assets/images/faq-bg.png" loading="lazy"
        decoding="async" alt="faq bg image" width="1385px" height="1406px" />
    </div>
  </section>
  <!-- End FAQ Section -->

  <section id="letsTalk" class="contact_section">
    <div class="contact_flex">
      <div class="hero-left talk-left">
        <div class="label_purple">
          <p class="ff_satoshi content_20 fw_700 color_white">Let's Talk</p>
        </div>

        <h1 class="talk-title">
          Turn AI capability <br /> into <span class="gradient-text">adoption.</span>
        </h1>

        <div class="talk-actions">
          <!-- <a href="#" class="btn btn-secondary"><img src="<?php echo $baseUrl; ?>assets/images/ai-ux/call.svg" alt="call" width="18px" height="18px" /><span>+91 9686 568 578</span> </a> -->
          <a href="#" class="btn btn-secondary"><img src="<?php echo $baseUrl; ?>assets/images/ai-ux/mail.svg" loading="lazy"
              decoding="async" alt="mail" width="18px" height="18px" /><span>info@unikwan.com</span> </a>
        </div>
      </div>
      <!-- Begin Form Section -->
      <form method="post" action="" name="contactForm" autocomplete="off" id="contact_us_form">
        <div class="form_container margin_top_0 talk_container border_radius_16">
          <div class="contact_form">
            <!-- <p class="sub_heading_20 ff_satoshi fw_400 color_light_black form_text">
              We'd love to hear from you. Get in touch with us today to discuss your needs and goals.
            </p> -->
            <div class="margin_top_20">
              <input type="text" name="name" id="name" class="input-field" placeholder="Name*" onkeypress="return isTextKey(event)">
              <span class="form_error fw_400 ff_satoshi" id="nameErr"></span>
            </div>
            <div class="margin_top_20">
              <input class="input-field" type="text" name="email" id="email" placeholder="Email*">
              <span class="form_error" id="emailErr"></span>
            </div>
            <div class="margin_top_20">
              <input class="input-field" type="text" name="companyname" id="company_name" placeholder="Company Name">
              <span class="form_error" id="companynameErr"></span>
            </div>
            <div class="margin_top_20 custom_dropdown_position">
              <div class="custom-dropdown">
                <div id="topic" class="selected caret-rotate input-field ff_satoshi fw_500 content_wls_16">What you like to discuss*</div>
                <ul class="options">
                  <li class="ff_satoshi fw_500 color_lighter_grey content_wls_16" data-value="Product strategy & growth design">
                    AI Product Audit
                  </li>
                  <li class="ff_satoshi fw_500 color_lighter_grey content_wls_16" data-value="User Experience Design">
                    Design Sprint
                  </li>
                  <li class="ff_satoshi fw_500 color_lighter_grey content_wls_16" data-value="AI UX design">
                    Partnership
                  </li>
                </ul>
                <input hidden type="text" id="selected-value" name="topic">
              </div>
              <span class="form_error" id="topicErr"></span>
            </div>
            <div class="margin_top_20">
              <input class="input-field phone" type="text" name="phone" id="mobile" placeholder="Phone number"
                maxlength="10"
                onkeypress="return isNumberKey(event)">
            </div>
            <div class="recaptcha_container margin_top_20">
              <label class="ff_satoshi fw_400 color_light_black recaptcha_label" id="recaptcha_label">
                Please check the box below to proceed.
              </label>
              <div class="g-recaptcha" data-sitekey="6LduDQkqAAAAAFyExHITLI2gCviJo0ICCDkMKHz6"></div>
            </div>
            <button type="button" class="contact_button_container content_20 ff_satoshi color_half_white border_radius_16" onclick="submitContactForm()" id="contact_btn">
              <strong class="content_20 fw_500 color_white btn_txt">Send Message</strong>
              <img class="btn_arrow" src="<?php echo $baseUrl; ?>assets/images/right_sided_arrow.svg" alt="right arrow" width="17px" height="17px" />
              <span class="contact_loader"></span>
            </button>
          </div>
          <div class="thankyou_screen">
            <div class="contact_lottie">
              <dotlottie-player src="https://lottie.host/f695c6a5-f087-4f5b-b02e-d31f32e0aada/D3v8MuNlGb.lottie" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></dotlottie-player>
            </div>
            <h3 class="sub_heading_34 fw_500 color_black success_title margin_top_32">
              Sent Successfully
            </h3>
            <p class="content_20 color_light_black ff_satoshi fw_400 success_subtext">
              Thank you for connecting with us. Our team will contact you soon
            </p>
          </div>
        </div>
      </form>
      <!-- End Form Section -->
    </div>
  </section>

  <!-- Begin Footer Section -->
  <?php include '../footer.php'; ?>
  <!-- End Footer Section -->

  <!-- let's talk scripts -->

  <!-- <script src="<?php echo $baseUrl; ?>/assets/js/intlTelInput.js"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css" rel="stylesheet">  -->

  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.0/build/css/intlTelInput.css">
  <script defer src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.0/build/js/intlTelInput.min.js"></script>
  <script defer src="<?php echo $baseUrl; ?>assets/js/ajaxForm.js"></script>
  <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
  <!-- <script async src="https://www.google.com/recaptcha/api.js"></script> -->


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>


  <script>
    document.addEventListener("DOMContentLoaded", () => {
      gsap.registerPlugin(ScrollTrigger);

      // Cache common DOM elements globally within scope
      const scrollContainer = document.getElementById("ai-fail-section");
      const stepCounter = document.getElementById("step-counter");
      const segments = document.querySelectorAll(".progress-segment");
      const slides = document.querySelectorAll(".slide-row");

      // ======================
      // 1. AI Fail Section (Sticky Scroll Refactored to ScrollTrigger)
      // ======================
      if (scrollContainer && slides.length > 0) {
        ScrollTrigger.create({
          trigger: scrollContainer,
          start: "top top",
          end: "bottom bottom",
          scrub: true,
          onUpdate: (self) => {
            // self.progress normalizes scroll position perfectly between 0 and 1 without layout thrashing
            let currentStep = Math.min(Math.floor(self.progress * slides.length) + 1, slides.length);

            if (stepCounter) {
              stepCounter.textContent = String(currentStep).padStart(2, '0');
            }

            segments.forEach((seg, i) => seg.classList.toggle("active", i < currentStep));
            slides.forEach(slide => {
              slide.classList.toggle("active", parseInt(slide.dataset.step) === currentStep);
            });
          }
        });
      }

      // ======================
      // 2. Framework Timeline (With MatchMedia for dynamic resizing)
      // ======================
      const frameworkData = [{
          title: "Understand.",
          description: "Map user goals, context and workflow to ground AI decisions in real user intent.",
          features: ["User Goals", "Context", "Workflow"]
        },
        {
          title: "Guide.",
          description: "Shape onboarding, prompts, and recommendations that lead users to value fast.",
          features: ["Onboarding", "Recommendations", "Prompt assist"]
        },
        {
          title: "Trust.",
          description: "Design transparency, explainability, and citations so users know what to believe.",
          features: ["Transparency", "Explainability", "Citations"]
        },
        {
          title: "Steer.",
          description: "Give users control, corrections & oversight to stay in command of the AI.",
          features: ["Controls", "Corrections", "Oversight"]
        },
        {
          title: "Improve.",
          description: "Close the loop with feedback, optimization, and adoption measurement.",
          features: ["Feedback", "Optimization", "Adoption"]
        }
      ];

      let activeStep = 0;

      function buildFeatures(features) {
        return features.map((item, i) => `
            <div class="feature-item">
                <div class="feature-number">${String(i+1).padStart(2,'0')}</div>
                <div class="feature-bar"></div>
                <div class="feature-text">${item}</div>
            </div>
        `).join('');
      }

      function updateStep(step) {
        if (step === activeStep) return;
        activeStep = step;

        $(".framework-step").removeClass("active completed");
        $(".framework-step").each(function(index) {
          if (index < step) $(this).addClass("completed");
          if (index === step) $(this).addClass("active");
        });

        const data = frameworkData[step];
        $(".mobile-description").html("");
        $(".framework-step").eq(step).find(".mobile-description").html(data.description);

        // Standard check remains inside function execution context
        if (window.innerWidth > 1023) {
          gsap.to(".framework-card", {
            opacity: 0,
            y: 20,
            duration: 0.2,
            onComplete: () => {
              $(".card-stage").text("STAGE " + String(step + 1).padStart(2, "0"));
              $(".framework-card-title").text(data.title);
              $(".framework-card-description").text(data.description);
              $(".card-features").html(buildFeatures(data.features));

              gsap.fromTo(".framework-card", {
                opacity: 0,
                y: 30
              }, {
                opacity: 1,
                y: 0,
                duration: 0.4,
                ease: "power2.out"
              });
            }
          });
        }
      }

      // Initial state rendering
      $(".card-features").html(buildFeatures(frameworkData[0].features));
      $(".framework-step").eq(0).find(".mobile-description").html(frameworkData[0].description);

      // Media query management via native GSAP tools
      let mm = gsap.matchMedia();

      mm.add("(min-width: 1024px)", () => {
        // Desktop Pinned Setup
        ScrollTrigger.create({
          trigger: ".ux-framework",
          start: "top top",
          end: "+=2200",
          pin: true,
          scrub: 0.5,
          onUpdate: (self) => {
            const step = Math.min(Math.floor(self.progress * frameworkData.length), frameworkData.length - 1);
            updateStep(step);
            gsap.to(".timeline-progress", {
              height: (self.progress * 100) + "%",
              ease: "none",
              overwrite: "auto"
            });
          }
        });
      });

      mm.add("(max-width: 1023px)", () => {
        // Mobile Trigger Setup
        $(".framework-step").each(function(index) {
          ScrollTrigger.create({
            trigger: this,
            start: "top center",
            end: "bottom center",
            onEnter: () => updateStep(index),
            onEnterBack: () => updateStep(index)
          });
        });
      });

      // ======================
      // 3. Counter Animations (Outcomes Section)
      // ======================
      $('.count').each(function() {
        const $this = $(this);
        const target = parseFloat($this.data('target'));
        const suffix = $this.data('suffix') || '';

        gsap.fromTo($this, {
          textContent: 0
        }, {
          textContent: target,
          duration: 2,
          ease: "power2.out",
          scrollTrigger: {
            trigger: $this.closest('.stat-card'),
            start: "top 85%"
          },
          onUpdate: function() {
            const val = parseFloat(this.targets()[0].textContent);
            $this.html((target % 1 !== 0 ? val.toFixed(1) : Math.floor(val)) + suffix);
          }
        });
      });

      // ======================
      // 4. Expertise Cards
      // ======================
      gsap.fromTo(".expertise-card", {
        opacity: 0,
        y: 40
      }, {
        opacity: 1,
        y: 0,
        duration: 0.8,
        stagger: 0.15,
        scrollTrigger: {
          trigger: ".expertise-grid",
          start: "top 80%"
        }
      });

      // ======================
      // 5. Diagnostics Panel Animations
      // ======================
      gsap.fromTo("#leftPanel", {
        opacity: 0,
        x: -40
      }, {
        opacity: 1,
        x: 0,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
          trigger: ".diagnostic-grid",
          start: "top 80%",
          toggleActions: "play none none none"
        }
      });

      gsap.utils.toArray(".metric-item").forEach(item => {
        const countEl = item.querySelector(".count");
        const fillEl = item.querySelector(".progress-bar-fill");
        const targetValue = parseInt(countEl.getAttribute("data-target"));
        const targetPercent = fillEl.getAttribute("data-percent") + "%";

        gsap.fromTo(countEl, {
          textContent: 0
        }, {
          textContent: targetValue,
          duration: 1.8,
          ease: "power2.out",
          scrollTrigger: {
            trigger: ".diagnostic-grid",
            start: "top 80%"
          },
          onUpdate: function() {
            countEl.innerHTML = Math.floor(countEl.textContent);
          }
        });

        gsap.fromTo(fillEl, {
          width: "0%"
        }, {
          width: targetPercent,
          duration: 1.8,
          ease: "power2.out",
          scrollTrigger: {
            trigger: ".diagnostic-grid",
            start: "top 80%"
          }
        });
      });

      const compositeEl = document.getElementById("compositeScore");
      if (compositeEl) {
        const compositeTarget = parseInt(compositeEl.getAttribute("data-target"));
        gsap.fromTo(compositeEl, {
          textContent: 0
        }, {
          textContent: compositeTarget,
          duration: 1.8,
          ease: "power2.out",
          scrollTrigger: {
            trigger: ".diagnostic-grid",
            start: "top 80%"
          },
          onUpdate: function() {
            compositeEl.innerHTML = Math.floor(compositeEl.textContent);
          }
        });
      }

      gsap.fromTo("#rightPanel", {
        opacity: 0,
        scale: 0.93
      }, {
        opacity: 1,
        scale: 1,
        duration: 1.2,
        ease: "back.out(1.2)",
        scrollTrigger: {
          trigger: ".diagnostic-grid",
          start: "top 80%",
          toggleActions: "play none none none"
        }
      });

      // ======================
      // 6. Case Studies / Selected Work
      // ======================
      const caseStudies = [{
          logo: "<?php echo $baseUrl; ?>assets/images/ai-ux/bluerobins-logo.svg",
          title: "AI-Powered MentorshipPlatform",
          desc: "We designed the UX for a mentorship platform with dedicated portals for students, mentors and parents, supported by AI-assisted guidance & personalized learning experiences.",
          img: "<?php echo $baseUrl; ?>assets/images/ai-ux/bluerobins-work.webp",
          mobileImg: "<?php echo $baseUrl; ?>assets/images/ai-ux/bluerobins-work-mobile.webp"
        },
        /* {
           logo: "<?php echo $baseUrl; ?>assets/images/ai-ux/go-googly-logo.svg",
           title: "Intelligent Research Workflows for P&G",
           desc: "We designed the UX for an AI-powered research platform built to help P&G researchers & strategists turn a fragmented research process into a structured workflow they can trust and control.",
           img: "<?php echo $baseUrl; ?>assets/images/ai-ux/go-googly-work.webp",
           mobileImg: "<?php echo $baseUrl; ?>assets/images/ai-ux/go-googly-work-mobile.webp"
         }, */
        {
          logo: "<?php echo $baseUrl; ?>assets/images/ai-ux/benchmarks-logo.svg",
          title: "AI-Powered Market Intelligence",
          desc: "We designed the UX for a market intelligence platform that helps users benchmark companies, track portfolios, and uncover opportunities through data-driven insights.",
          img: "<?php echo $baseUrl; ?>assets/images/ai-ux/benchmarks-work.webp",
          mobileImg: "<?php echo $baseUrl; ?>assets/images/ai-ux/benchmarks-work-mobile.webp"
        },
        {
          logo: "<?php echo $baseUrl; ?>assets/images/ai-ux/brelyon-logo.svg",
          title: "AI-Powered Visual Intelligence",
          desc: "We designed the UI for an AI platform that reads thousands of behavioral events in real time making machine-generated intelligence interpretable for analysts and decision makers.",
          img: "<?php echo $baseUrl; ?>assets/images/ai-ux/brelyon-work.webp",
          mobileImg: "<?php echo $baseUrl; ?>assets/images/ai-ux/brelyon-work-mobile.webp"
        },
        {
          logo: "<?php echo $baseUrl; ?>assets/images/ai-ux/visist-logo.svg",
          title: "AI-Driven Sports Performance Analytics",
          desc: "We designed the UX for an AI-powered sports platform that turns raw match data and coach feedback into personalized performance insights for young athletes.",
          img: "<?php echo $baseUrl; ?>assets/images/ai-ux/visist-work.webp",
          mobileImg: "<?php echo $baseUrl; ?>assets/images/ai-ux/visist-work-mobile.webp"
        },
        {
          logo: "<?php echo $baseUrl; ?>assets/images/ai-ux/blii-logo.svg",
          title: "AI-Powered Second Memory",
          desc: "We designed the UX for an AI recall app that learns how you save and think, surfacing the right content through adaptive memory.",
          img: "<?php echo $baseUrl; ?>assets/images/ai-ux/blii-work.webp",
          mobileImg: "<?php echo $baseUrl; ?>assets/images/ai-ux/blii-work-mobile.webp"
        }
      ];

      let currentIndex = 0;
      let progressTween;
      const slideDuration = 4; // seconds

      function animateProgress(index) {

        gsap.killTweensOf('.fill');
        gsap.set('.fill', {
          width: '0%'
        });

        progressTween = gsap.to(
          $(`.step-line[data-index="${index}"] .fill`), {
            width: '100%',
            duration: slideDuration,
            ease: 'none',
            onComplete: () => {
              goToCase((index + 1) % caseStudies.length);
            }
          }
        );
      }

      function goToCase(index) {

        currentIndex = index;

        const data = caseStudies[index];

        $('.step-line').removeClass('active');
        $(`.step-line[data-index="${index}"]`).addClass('active');

        gsap.to(
          ['#caseLogo', '#caseTitle', '#caseDesc', '#caseImage'], {
            opacity: 0,
            y: 20,
            duration: 0.3,
            stagger: 0.05,
            onComplete: () => {
              $('#caseLogo').attr('src', data.logo);
              $('#caseTitle').text(data.title);
              $('#caseDesc').text(data.desc);
              // $('#caseImage').attr('src', data.img);
              const imageSrc = window.innerWidth <= 768 ?
                data.mobileImg :
                data.img;

              $('#caseImage').attr('src', imageSrc);

              gsap.fromTo(
                ['#caseLogo', '#caseTitle', '#caseDesc', '#caseImage'], {
                  opacity: 0,
                  y: 20
                }, {
                  opacity: 1,
                  y: 0,
                  duration: 0.6,
                  stagger: 0.1,
                  ease: 'power2.out'
                }
              );

              animateProgress(index);

              $('#caseLogo')
                .attr('src', data.logo)
                .removeClass()
                .addClass(`case-logo ${data.logoClass}`);
            }
          }
        );
      }

      $('.step-line').on('click', function() {
        const index = $(this).data('index');
        goToCase(index);
      });

      gsap.fromTo(
        '#selectedWorkSection', {
          opacity: 0,
          y: 80
        }, {
          opacity: 1,
          y: 0,
          duration: 1.2,
          ease: 'power3.out',
          scrollTrigger: {
            trigger: '#selectedWorkSection',
            start: 'top 80%',
            once: true,
            onEnter: () => {
              animateProgress(0);
            }
          }
        }
      );

      // ======================
      // 7. Engagements Section
      // ======================
      gsap.fromTo(".section-header", {
        opacity: 0,
        y: 20
      }, {
        opacity: 1,
        y: 0,
        duration: 0.8,
        ease: "power3.out",
        scrollTrigger: {
          trigger: ".engagements-section",
          start: "top 85%",
          toggleActions: "play none none none"
        }
      });

      $('.engagement-card').each(function() {
        const delayValue = $(this).attr('data-delay') || 0;

        gsap.fromTo(this, {
          opacity: 0,
          y: 35
        }, {
          opacity: 1,
          y: 0,
          duration: 0.8,
          delay: parseFloat(delayValue),
          ease: "power2.out",
          scrollTrigger: {
            trigger: ".cards-grid",
            start: "top 80%",
            toggleActions: "play none none none"
          }
        });
      });

      // FAQ
      $(".faq_accordion_container").click(function() {
        var clicked_id = $(this).attr("id");
        $(".faq_accordion_container").each(function() {
          $(".faq_accordion_container")
            .not("#" + clicked_id)
            .find(".faq_accordion_content")
            .slideUp();
          $(".faq_accordion_container")
            .not("#" + clicked_id)
            .find(".faq_accordion_header")
            .find(".faq_icon img")
            .removeClass("collapsed");
          $(".faq_accordion_container")
            .not("#" + clicked_id)
            .find(".faq_accordion_header")
            .find(".faq_icon img").attr('src', '<?php echo $baseUrl; ?>assets/images/plus.svg');
          $(".faq_accordion_container")
            .not("#" + clicked_id)
            .find(".faq_accordion_header")
            .find(".faq_question").removeClass('color_white_op50').addClass('color_white');
        });
        $(this).find(".faq_accordion_content").slideToggle();
        if ($(this).find(".faq_accordion_header").find(".faq_icon img").hasClass("collapsed")) {
          $(this).find(".faq_accordion_header").find(".faq_icon img").removeClass("collapsed");
          $(this).find(".faq_accordion_header").find(".faq_question").removeClass('color_white_op50').addClass('color_white');
          $(this).find(".faq_accordion_header").find(".faq_icon img").attr('src', '<?php echo $baseUrl; ?>assets/images/plus.svg');
        } else {
          $(this).find(".faq_accordion_header").find(".faq_icon img").addClass("collapsed");
          $(this).find(".faq_accordion_header").find(".faq_question").removeClass('color_white').addClass('color_white_op50');
          $(this).find(".faq_accordion_header").find(".faq_icon img").attr('src', '<?php echo $baseUrl; ?>assets/images/minus.svg');
        }
      });





      $(".scroll-link").on("click", function(e) {
        e.preventDefault();

        const target = $(this).attr("href");

        $("html, body").animate({
          scrollTop: $(target).offset().top - 60 // header height
        }, 600);
      });


      // Global refresh ensuring all elements are tracked precisely after layout shifts
      ScrollTrigger.refresh();
    });




    // Let's talk
    //    $(".phone").intlTelInput({
    //   initialCountry: "in",
    //   separateDialCode: !0,
    //   utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
    // });

    // const phoneInput = document.querySelector("#mobile");

    // const iti = window.intlTelInput(phoneInput, {
    //   initialCountry: "in",
    //   separateDialCode: true
    // });

    document.addEventListener("DOMContentLoaded", function() {
      const phoneInput = document.querySelector("#mobile");

      window.iti = window.intlTelInput(phoneInput, {
        initialCountry: "in",
        separateDialCode: true
      });
    });

    function isTextKey(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return true;
      } else {
        return false;
      }
    }

    function isNumberKey(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (event.keyCode === 43 || event.keyCode === 32) {
        return true;
      } else if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
      } else {
        return true;
      }
    }

    function submitContactForm() {
      var isValidated = validateContactForm();
      if (!isValidated) {
        return false;
      }
      // var dialCode = $("#mobile").intlTelInput("getSelectedCountryData").dialCode;
      var dialCode = window.iti.getSelectedCountryData().dialCode;
      document.getElementById("contact_btn").disabled = true;
      $('.btn_txt, .btn_arrow').hide();
      $('.contact_loader').css("display", "block");
      var base_url = '<?php echo $baseUrl; ?>contact/';
      var tmpRequest = new Object();
      tmpRequest.formType = "Contact Form";
      tmpRequest.contactName = $("#name").val();
      tmpRequest.contactCompanyName = $("#company_name").val();
      tmpRequest.contactTopic = $("#selected-value").val();
      tmpRequest.contactEmail = $("#email").val();
      tmpRequest.contactMobile = "+" + dialCode + " " + $("#mobile").val();
      var tmpUrl = base_url + 'send_contact_form.php';
      var tmpResponse = httpRequest("POST", tmpUrl, tmpRequest, true);
    }

    function validateContactForm() {
      var flag = true;
      var nameVal = /^[a-zA-Z -]+$/;
      var emailVal = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var recaptchaVal = grecaptcha.getResponse();

      if (document.contactForm.name.value == "") {
        document.getElementById("name").style.borderBottom = "1px solid #FFD3D3";
        document.getElementById('nameErr').innerHTML = "Please Enter Your Name";
        document.contactForm.name.focus();
        flag = false;
      } else if (!nameVal.test(document.contactForm.name.value)) {
        document.getElementById("name").style.borderBottom = "1px solid #FFD3D3";
        document.getElementById('nameErr').innerHTML = "Not a Valid Name";
        document.contactForm.name.focus();
        flag = false;
      } else {
        document.getElementById("name").style.borderBottom = "";
        document.getElementById('nameErr').innerHTML = "";
      }

      if (document.contactForm.email.value == "") {
        document.getElementById("email").style.borderBottom = "1px solid #FFD3D3";
        document.getElementById('emailErr').innerHTML = "Please Enter Your Email Id";
        document.contactForm.email.focus();
        flag = false;
      } else if (!emailVal.test(document.contactForm.email.value)) {
        document.getElementById("email").style.borderBottom = "1px solid #FFD3D3";
        document.getElementById('emailErr').innerHTML = "Not a Valid Email Id";
        document.contactForm.email.focus();
        flag = false;
      } else {
        document.getElementById("email").style.borderBottom = "";
        document.getElementById('emailErr').innerHTML = "";
      }

      if (document.contactForm.topic.value == "") {
        document.getElementById("topic").style.borderBottom = "1px solid #FFD3D3";
        document.getElementById('topicErr').innerHTML = "Please Choose One Option";
        document.contactForm.topic.focus();
        flag = false;
      } else {
        document.getElementById("topic").style.borderBottom = "";
        document.getElementById('topicErr').innerHTML = "";
      }

      if (recaptchaVal.length == 0) {
        document.getElementById('recaptcha_label').style.color = "red";
        flag = false;
      } else {
        document.getElementById('recaptcha_label').style.color = "#09162C";
      }
      return flag;
    }

    const selected = document.querySelector('.custom-dropdown .selected');
    const options = document.querySelector('.options');
    const selectedValueInput = document.getElementById('selected-value');

    selected.addEventListener('click', function() {
      if (options.style.opacity === '1') {
        options.style.opacity = '0';
        setTimeout(() => {
          options.style.zIndex = '0';
        }, 200);
      } else {
        options.style.zIndex = '2001';
        setTimeout(() => {
          options.style.opacity = '1';
        }, 200);
      }
      var dropdown = this.parentElement;
      dropdown.classList.toggle('open');
    });

    options.addEventListener('click', function(e) {
      const target = e.target;
      if (target.tagName === 'LI') {
        selected.textContent = target.textContent;
        selectedValueInput.value = target.getAttribute('data-value');
        options.style.opacity = '0';
        setTimeout(() => {
          options.style.zIndex = '0';
        }, 200);
        $(".custom-dropdown").removeClass("open");
      }
    });

    document.addEventListener('click', function(e) {
      if (!selected.contains(e.target) && !options.contains(e.target)) {
        options.style.opacity = '0';
        setTimeout(() => {
          options.style.zIndex = '0';
        }, 200);
        $(".custom-dropdown").removeClass("open");
      }
    });


    const observer = new IntersectionObserver(entries => {
      if (entries[0].isIntersecting) {
        const script = document.createElement('script');
        script.src = 'https://www.google.com/recaptcha/api.js';
        document.body.appendChild(script);
        observer.disconnect();
      }
    });

    observer.observe(document.querySelector('.contact_section'));
  </script>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
          "@type": "Question",
          "name": "What is AI UX design and why does it matter for enterprise products?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AI UX design is the practice of shaping how users interact with, interpret, and trust AI-generated outputs inside a product. Most enterprise AI products fail not because the model underperforms, but because users don't understand what the AI is doing or why. UniKwan designs the experience layer that closes that gap — turning AI capability into user adoption."
          }
        },
        {
          "@type": "Question",
          "name": "How is designing for an AI product different from standard UX design?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard UX design assumes predictable system behavior. AI interfaces produce outputs that vary, fail unpredictably, and require users to exercise judgment. Designing for AI means accounting for uncertainty, communicating confidence levels, building trust incrementally, and giving users meaningful control over AI behavior. UniKwan specialises in designing for exactly these conditions."
          }
        },
        {
          "@type": "Question",
          "name": "What kinds of AI products does UniKwan design for?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "UniKwan works with teams building AI products from scratch, teams adding AI capabilities to existing SaaS platforms, and product leaders who need to align their design and AI development direction before scaling. Enterprise SaaS, B2B platforms, and AI-powered tools are the primary focus."
          }
        },
        {
          "@type": "Question",
          "name": "What does a UniKwan AI Product Audit cover?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The AI Product Audit evaluates your product across all five pillars of the UniKwan AI Experience Framework — how well users understand AI outputs, whether the product guides decisions clearly, where trust breaks down, how users can influence AI behavior, and whether the system improves from feedback. You receive a scored assessment and a prioritised action plan."
          }
        },
        {
          "@type": "Question",
          "name": "How do you measure the success of AI UX design?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "UniKwan measures AI UX outcomes against three variables: adoption (are users engaging with AI features?), confidence (do users trust and act on what the AI surfaces?), and ROI (does that usage produce measurable business results?). Design decisions are scoped and evaluated against this equation throughout every engagement."
          }
        },
        {
          "@type": "Question",
          "name": "How do I get started with UniKwan for my AI product?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Book a discovery call from the UniKwan website. For teams unsure of where to start, the AI Product Audit is the right first step — it gives you a clear picture of what's working, what's breaking user trust, and what to fix first before investing in redesign or new features."
          }
        }
      ]
    }
  </script>
</body>

</html>