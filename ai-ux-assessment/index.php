<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Assess Your AI Product</title>
  <?php include '../header.php'; ?>

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --bg: #ffffff;
      --fg: #0b0b0f;
      --muted: #6b7280;
      --border: #e5e7eb;
      --primary: #2563eb;
      --primary-soft: #eef2ff;
      --pink: #e91e8c;
      --purple: #7c3aed;
      --gradient: linear-gradient(90deg, #e91e8c, #7c3aed, #2563eb);
      --purple-grad: linear-gradient(135deg, #6d28d9 0%, #7c3aed 45%, #a855f7 100%);
      --dark: #1a1146;
      --green: #16a34a;
      --amber: #f59e0b;
      --red: #ef4444;
      --radius: 14px;
      --shadow: 0 10px 30px rgba(15, 23, 42, .08);
    }

    html,
    body {
      background: var(--bg);
      color: var(--fg);
      min-height: 100vh;
      -webkit-font-smoothing: antialiased;
    }

    .container {
      /* max-width: 1280px; */
      margin: 0 auto;
      padding: 28px 90px;
      width: 100%;
    }

    @media (max-width: 1024px) {
      .container {
        padding: 50px 32px;
      }
    }

    @media (max-width: 640px) {
      .container {
        padding: 40px 20px;
      }
    }

    .logo {
      font-weight: 800;
      font-size: 22px;
      letter-spacing: -0.5px;
      background: var(--gradient);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      margin-bottom: 28px;
      display: inline-block;
    }

    /* Screen base */
    .screen {
      display: none;
    }

    .screen.active {
      display: block;
    }

    /* ===== Selection ===== */
    .badge {
      display: flex;
      padding: 3px 10px;
      align-items: center;
      gap: 10px;
      border: 1px solid #D4E0FE;
      background: #F6F9FF;
      color: #427CE3;
      font-family: "Satoshi", "Inter", sans-serif;
      font-size: 18px;
      font-weight: 700;
      line-height: 24px;
      letter-spacing: 0.03px;
      margin: 8px 0 12px;
      max-width: fit-content;
      width: 100%;
    }

    h1.title {
      /* font-size: clamp(36px, 6vw, 72px); */
      color: #242424;
      font-family: "Onest", sans-serif;
      font-size: 60px;
      font-weight: 700;
      line-height: 62px;
      letter-spacing: -0.3px;
    }

    .lead-row {
      display: flex;
      justify-content: space-between;
      align-items: end;
      gap: 32px;
      flex-wrap: wrap;
      margin-bottom: 48px;
    }

    .lead-row p {
      max-width: 520px;
      color: #5B6167;
      text-align: right;
      font-family: "Satoshi", "Inter", sans-serif;
      font-size: 16px;
      line-height: 1.5;
      font-weight: 400;
      letter-spacing: 0.5px;
    }

    @media (min-width: 720px) {
      .lead-row p {
        text-align: right;
      }
    }

    .step-label {
      color: #9AA0AB;
      font-family: "Onest", sans-serif;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 1.4px;
      text-transform: uppercase;
      margin-bottom: 12px;
    }

    .cards {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin-bottom: 40px;
    }

    @media (max-width: 720px) {
      .cards {
        grid-template-columns: 1fr;
      }
    }

    .card {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      padding: 22px;
      gap: 8px;
      flex: 1 0 0;
      align-self: stretch;
      border-radius: 20px;
      border: 1.5px solid #E4E4E7;
      background: #FFF;
      cursor: pointer;
      transition: border-color .2s, background .2s;
    }

    .card:hover {
      border-color: #c7d2fe;
    }

    .card.active {
      border-color: #2D6EE0;
      background: #EEF3FD;
    }

    .card h3 {
      color: #14161B;
      font-family: "Satoshi", sans-serif;
      font-size: 20px;
      font-weight: 700;
      line-height: 1.6;
      letter-spacing: 0.15px;
      margin-bottom: 6px;
    }

    .card p {
      color: #52525B;
      font-family: "Satoshi", sans-serif;
      font-size: 14px;
      font-weight: 400;
      letter-spacing: 0.25px;
      line-height: 1.45;
    }

    .time-pill {
      display: flex;
      padding: 4px 10px;
      align-items: flex-start;
      border-radius: 999px;
      background: #EEF3FD;
      color: #2D6EE0;
      font-family: "Satoshi", sans-serif;
      font-size: 12px;
      font-weight: 700;
      line-height: 16px;
      white-space: nowrap;
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      margin-bottom: 28px;
    }

    @media (max-width: 720px) {
      .form-row {
        grid-template-columns: 1fr;
      }
    }

    .field {
      /* border-bottom: 1px solid var(--border); */
      padding: 10px 0;
    }

    .field label {
      display: block;
      color: #5B6167;
      font-size: 14px;
      margin-bottom: 4px;
    }

    .field input {
      width: 100%;
      border: 0;
      border-bottom: 1px solid #E0E0E0;
      outline: 0;
      font-size: 16px;
      background: transparent;
      padding: 6px 0;
      color: var(--fg);
    }

    .req {
      color: #FF0707;
    }

    .actions {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      gap: 16px;
      flex-wrap: wrap;
    }

    .hint {
      color: #8B90A0;
      font-size: 12px;
  font-family: "Satoshi", sans-serif;
font-weight: 500;
line-height: 18px; 
letter-spacing: 0.25px;
    }

    .assessment-btn {
      display: flex;
      padding: 15px 26px;
      align-items: center;
      border-radius: 100px;
      background: #2D6EE0;
      color: #FFF;
      font-family: "Satoshi", sans-serif;
      font-size: 15px;
      font-style: normal;
      font-weight: 700;
      line-height: 22px; 
      gap: 10px;
      transition: background .2s;
      text-decoration: none;
      border: 0;
      cursor: pointer;
    }

    .assessment-btn:hover {
      background: #1d4ed8;
    }

    .assessment-btn:disabled {
      opacity: .25;
      cursor: not-allowed;
    }

    .assessment-btn.ghost {
      background: transparent;
      color: #52525B;
      border: 1px solid #D4D4D8;
    }

    .assessment-btn.ghost:hover {
      background: #f9fafb;
    }

    .assessment-btn.outline-light {
      background: transparent;
      color: #fff;
      border: 1px solid rgba(255, 255, 255, .35);
    }

    .assessment-btn.outline-light:hover {
      background: rgba(255, 255, 255, .12);
    }

    .assessment-btn.white {
      background: #fff;
      color: #2D6EE0;
    }

    .assessment-btn.white:hover {
      background: #f3f4f6;
    }

    /* ===== Question screen ===== */
    .progress-wrap {
      margin-bottom: 40px;
    }

    .progress-meta {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
  font-family: "Satoshi", sans-serif;
      color: #52525B;
      margin-bottom: 14px;
      letter-spacing: 0.25px;
      font-weight: 500;
    }

    .progress-bar {
      height: 6px;
      background: #eef0f4;
      border-radius: 999px;
      overflow: hidden;
    }

    .progress-fill {
      height: 100%;
      width: 0%;
      background: var(--gradient);
      border-radius: 999px;
    }

    .cat-tabs {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      margin-bottom: 14px;
    }

    @media (max-width: 600px) {
      .cat-tabs {
        gap: 8px;
      }
    }

    .cat-tab {
      color: #AEB2BB;
  font-family: "Satoshi", sans-serif;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 1.3px;
      text-align: center;
      text-transform: uppercase;
    }

    .cat-tab.active {
      color: var(--pink);
    }

    .cat-tab.done {
      color: var(--purple);
    }

    .back-link {
      display: inline-block;
      color: #A1A1AA;
      font-family: "Satoshi", sans-serif;
      font-size: 14.5px;
      font-weight: 700;
      line-height: 20px; 
      margin-bottom: 32px;
      cursor: pointer;
    }

    .back-link:hover {
      color: var(--fg);
    }

    .qnum {
      text-align: center;
      color: #427CE3;
  font-family: "Satoshi", sans-serif;
font-size: 14px;
font-weight: 500;
line-height: 24px; 
letter-spacing: 0.25px;
      margin-bottom: 50px;
    }

    .qtext {
      text-align: center;
      font-size: clamp(24px, 4vw, 40px);
      line-height: 1.2;
      max-width: 830px;
      margin: 0 auto 16px;
      color: #14161B;
  font-family: "Onest", sans-serif;
font-weight: 700;
letter-spacing: 0.25px;
    }

    .qsub {
      color: #52525B;
  font-family: "Satoshi", sans-serif;
font-size: 16px;
line-height: 24px; 
letter-spacing: 0.5px;
      text-align: center;
      margin-bottom: 44px;
      max-width: 830px;
      margin-left: auto;
      margin-right: auto;
    }

    /* Quick-check rich option cards */
    .qc-options {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 14px;
      max-width: 880px;
      margin: 0 auto 36px;
    }

    @media (max-width: 720px) {
      .qc-options {
        grid-template-columns: 1fr;
      }
    }

    .qc-card {
      border: 2px solid var(--border);
      border-radius: 14px;
      padding: 20px 22px;
      cursor: pointer;
      transition: border-color .2s, background .2s, transform .2s;
      background: #fff;
      display: flex;
      gap: 16px;
      align-items: flex-start;
    }

    .qc-card:hover {
      border-color: #c7d2fe;
    }

    .qc-card.selected {
      border-color: var(--primary);
      background: #f5f8ff;
    }

    .qc-card .qc-icon {
      font-size: 26px;
      line-height: 1;
      flex-shrink: 0;
      margin-top: 2px;
    }

    .qc-card .qc-body h4 {
      color: #14161B;
  font-family: "Satoshi", sans-serif;
font-size: 16px;
font-weight: 700;
line-height: 24px; 
letter-spacing: 0.5px;
      margin-bottom: 6px;
    }

    .qc-card .qc-body p {
      color: #616369;
  font-family: "Satoshi", sans-serif;
font-size: 14px;
font-weight: 400;
letter-spacing: 0.25px;
    }

    /* Detailed rating */
    .ratings {
      display: flex;
      justify-content: center;
      gap: 18px;
      margin-bottom: 18px;
      flex-wrap: wrap;
    }

    .rating {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      border: 1.6px solid #E7E8EE;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      background: #fff;
      color: #14161B;
text-align: center;
  font-family: "Onest", sans-serif;
font-size: 24px;
font-weight: 700;
line-height: 28px; 
      transition: all .2s;
    }

    .rating:hover {
      border-color: var(--primary);
    }

    .rating.selected {
      background: var(--primary);
      border-color: var(--primary);
      color: #fff;
    }

    .scale-labels {
      display: flex;
      justify-content: space-between;
      max-width: 460px;
      margin: 0 auto 48px;
      color: #52525B;
  font-family: "Satoshi", sans-serif;
font-size: 12px;
font-weight: 400;
letter-spacing: 0.25px;
    }

    .nav-row {
      display: flex;
      justify-content: space-between;
      max-width: 880px;
      margin: 0 auto;
      gap: 12px;
    }

    /* ===== Detailed results shared ===== */
    .results-banner {
    display: flex;
padding: 28px;
flex-direction: column;
align-items: flex-start;
align-self: stretch;
border-radius: 24px;
background: linear-gradient(90deg, #231642 0%, #351549 100%);
      margin-bottom: 56px;
    }

    .results-banner h2 {
      font-size: clamp(20px, 3vw, 24px);
      color: #FFF;
      font-family: "Onest", sans-serif;
      font-weight: 700;
      line-height: 32px; 
margin-bottom: 4px;
    }

    .results-banner p {
      /* max-width: 720px; */
      line-height: 1.5;
      color: #C5C9D3;
  font-family: "Satoshi", sans-serif;
font-size: 14px;
font-weight: 500;
line-height: 24px; 
letter-spacing: 0.25px;
margin-bottom: 22px;
    }

    .banner-actions {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .score-row {
      display: flex;
      gap: 28px;
      align-items: center;
      margin-bottom: 36px;
      flex-wrap: wrap;
    }

    .score-circle {
      width: 146px;
      height: 146px;
      border-radius: 50%;
      background: conic-gradient(#2D6EE0 var(--p, 0%), #2D6EE01F 0);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .score-inner {
      width: 116px;
      height: 116px;
      background: #fff;
      border-radius: 50%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .score-inner strong {
      font-size: 32px;
    }

    .score-inner span {
      font-size: 10px;
      color: var(--muted);
      letter-spacing: 1.2px;
    }

    .score-text h3 {
      font-size: clamp(22px, 3vw, 34px);
      margin-bottom: 6px;
      color: #18181B;
  font-family: "Onest", sans-serif;
font-weight: 700;
line-height: 48px; 
letter-spacing: 0.25px;
    }

    .score-text .tag {
      color: #2257B3;
      font-weight: 700;
      font-size: 12px;
      letter-spacing: 1.2px;
      margin-bottom: 4px;
      background: transparent;
      border: 0;
      padding: 0;
      max-width: fit-content !important;
    }

    .score-text p {
      color: #52525B;
  font-family: "Satoshi", sans-serif;
      font-size: 16px;
      letter-spacing: 0.5px;
      line-height: 1.5;
    }

    .stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
      gap: 14px;
      margin-bottom: 36px;
    }

    .stat {
      padding: 22px;
      border-radius: 18px;
border: 1px solid #E7E8EE;
background: #FFF;
    }

    .stat span {
      display: block;
      font-family: "Satoshi", sans-serif;
      color: #52525B;
      font-size: 12px;
      line-height: 1.3;
      letter-spacing: 1px;
      margin-bottom: 4px;
    }

    .stat strong {
      font-size: 20px;
      font-family: "Onest", sans-serif;
      font-weight: 700;
      line-height: 1.5;
    }

    .section-title {
      color: #14161B;
      font-family: "Satoshi", sans-serif;
      font-size: 20px;
      font-weight: 700;
      line-height: 28px; 
      letter-spacing: 0.15px;
      margin-bottom: 4px;
    }

    .section-sub {
          color: #52525B;
    font-family: "Satoshi", sans-serif;
    font-size: 14px;
    letter-spacing: 0.5px;
    line-height: 1.4;
      margin-bottom: 20px;
    }

    .cat-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      row-gap: 28px;
      column-gap: 36px;
      margin-bottom: 36px;
    }



    /* Prevent invisible dynamic cards from throwing off scroll layouts pre-animation */
    .cat-card,
    .priority-card {
      opacity: 0;
      backface-visibility: hidden;
      will-change: transform, opacity;
    }

    /* Keeps incoming cards from expanding the page structure visually */
    .cat-grid,
    .priority-grid {
      overflow: hidden;
    }


    /* Smoothly handle scrollbar track aesthetics to minimize appearance flicker */
    ::-webkit-scrollbar {
      width: 8px;
      height: 8px;
    }

    ::-webkit-scrollbar-track {
      background: transparent;
    }

    ::-webkit-scrollbar-thumb {
      background: #e5e7eb;
      /* Matches your var(--border) color */
      border-radius: 999px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #d1d5db;
    }


    .cat-card {
      background: #fff;
      opacity: 0;
    }

    .cat-card-head {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 6px;
      gap: 8px;
    }

    .cat-name-badge {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .cat-name {
      color: #14161B;
  font-family: "Satoshi", sans-serif;
font-size: 16px;
font-weight: 700;
line-height: 24px; 
letter-spacing: 0.5px;
    }

    .cat-score {
      color: #616369;
  font-family: "Satoshi", sans-serif;
font-size: 15px;
font-weight: 700;
line-height: 20px; 
    }

    .cat-desc {
      color: #52525B;
  font-family: "Satoshi", sans-serif;
font-size: 14px;
letter-spacing: 0.25px;
margin-bottom: 8px;
    }

    .cat-bar {
      height: 8px;
      background: #eef0f4;
      border-radius: 999px;
      overflow: hidden;
      margin-bottom: 12px;
    }

    .cat-bar-fill {
      height: 100%;
      width: 0%;
      border-radius: 999px;
      background: var(--primary);
    }

    .cat-bar-fill.good {
      background: #2F9E6F;
    }

    .cat-bar-fill.mid {
      background: #3F78D6;
    }

    .cat-bar-fill.low {
      background: #D2603A;
    }

    .focus-badge {
display: flex;
padding: 2px 8px;
align-items: flex-start;
border-radius: 999px;
background: #EEF3FD;
      color: #2D6EE0;
  font-family: "Satoshi", sans-serif;
font-size: 11px;
font-weight: 700;
line-height: 15px; 
    }

    .ok-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 4px 10px;
      border-radius: 999px;
      background: #ecfdf5;
      color: #15803d;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: .6px;
    }

    .priority-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 16px;
      margin-bottom: 36px;
    }

    .priority-card {
      padding: 22px;
      border-radius: 18px;
      border: 1px solid #E7E8EE;
      background: #FFF;
      opacity: 0;
    }

    .priority-card .pc-head {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 12px;
    }

    .priority-card h4 {
      font-size: 18px;
      color: #14161B;
  font-family: "Onest", sans-serif;
      font-weight: 700;
      margin-bottom: 8px;
    }

    .priority-card .pc-desc {
            color: #14161B;
  font-family: "Satoshi", sans-serif;

      font-size: 14px;
      line-height: 1.5;
      margin-bottom: 14px;
    }

    .priority-card .pc-actions {
      font-size: 12px;
  font-family: "Satoshi", sans-serif;
      font-weight: 700;
      letter-spacing: 1px;
      color: #52525B;
      margin-bottom: 8px;
      text-transform: uppercase;
    }

    .priority-card ul {
      list-style: none;
      padding: 0;
    }

    .priority-card li {
      padding: 8px 0 8px 22px;
      position: relative;
      font-size: 14px;
  font-family: "Satoshi", sans-serif;

      color: #374151;
      line-height: 1.4;
    }

    .priority-card li::before {
      content: "✓";
      position: absolute;
      left: 0;
      top: 8px;
      color: var(--primary);
      font-weight: 700;
    }

    .retake {
      color: #616369;
text-align: center;
  font-family: "Satoshi", sans-serif;
font-size: 14.5px;
font-weight: 700;
line-height: 20px;
      cursor: pointer;
      margin-top: 24px;
    }

    .retake:hover {
      color: var(--fg);
    }

    /* ===== Quick Result page ===== */
    .qr-banner {
      display: flex;
padding: 28px;
flex-direction: column;
align-items: flex-start;
align-self: stretch;
border-radius: 24px;
background: linear-gradient(90deg, #231642 0%, #351549 100%);
      margin-bottom: 56px;
      position: relative;
      overflow: hidden;
    }

    .qr-banner::after {
      content: "";
      position: absolute;
      inset: 0;
      background: radial-gradient(800px 200px at 20% 0%, rgba(255, 255, 255, .18), transparent 60%);
      pointer-events: none;
    }

    .qr-banner h2 {
      color: #FFF;
  font-family: "Onest", sans-serif;
font-size: 24px;
font-weight: 700;
line-height: 32px; 
    }

    .qr-banner p {
      color: #C5C9D3;
      font-family: "Satoshi", sans-serif;
      font-size: 14px;
      font-weight: 500;
      line-height: 24px; 
      letter-spacing: 0.25px;
      margin-bottom: 22px;
    }

    .qr-banner .banner-actions {
      position: relative;
      z-index: 1;
    }

    .qr-main {
      display: grid;
      grid-template-columns: 1fr 280px;
      gap: 36px;
      margin-bottom: 40px;
    }

    @media (max-width: 860px) {
      .qr-main {
        grid-template-columns: 1fr;
      }
    }

    .qr-heading {
      font-size: clamp(28px, 4vw, 40px);
      color: #18181B;
      font-family: "Onest", sans-serif;
      font-weight: 700;
      line-height: 1.1; 
      margin-bottom: 16px;
    }

    .qr-heading .accent {
      background: var(--gradient);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .qr-lead {
      color: #52525B;
  font-family: "Satoshi", sans-serif;
font-size: 16px;
line-height: 24px; 
letter-spacing: 0.5px;
      line-height: 1.6;
      max-width: 760px;
    }

    .qr-badges {
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    .qr-badge {
      display: flex;
padding: 6px 14px;
align-items: center;
gap: 7px;
border-radius: 100px;
border: 1px solid rgba(0, 0, 0, 0.16);
      background: #fff;
    }

    .qr-badge .qb-label {
      color: #52525B;
  font-family: "Satoshi", sans-serif;
font-size: 12px;
font-weight: 400;
letter-spacing: 0.25px;
    }

    .qr-badge .qb-value {
      font-size: 14px;
      font-weight: 700;
      display: flex;
      align-items: center;
      gap: 4px;
      color: #52525B;
  font-family: "Satoshi", sans-serif;
font-size: 12px;
font-weight: 700;
line-height: 24px; 
letter-spacing: 0.25px;
    }

    .qr-badge .qb-value .qi {
      font-size: 20px;
      margin-left: 8px;
    }

    .qr-insights {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin-bottom: 28px;
    }

    @media (max-width: 720px) {
      .qr-insights {
        grid-template-columns: 1fr;
      }
    }

    .qr-insight {
padding: 22px;
border-radius: 18px;
border: 1px solid #E7E8EE;
background: #FFF;
    }

    .qr-insight .qi-label {
      font-size: 11px;
      letter-spacing: 1.4px;
      font-weight: 700;
      color: var(--primary);
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .qr-insight h4 {
      color: #14161B;
  font-family: "Satoshi", sans-serif;
font-size: 16px;
font-weight: 700;
line-height: 24px; 
letter-spacing: 0.5px;
margin-bottom: 8px;
    }

    .qr-insight p {
      color: #616369;
  font-family: "Satoshi", sans-serif;
font-size: 14px;
line-height: 20px;
letter-spacing: 0.25px;
    }

    .qr-rec {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      padding: 26px;
      gap: 2px;
      border-radius: 20px;
      border: 1.5px solid #E3E4E8;
      background: #FFF;
      margin-bottom: 32px;
    }

    .qr-rec .qrr-label {
      color: #427CE3;
  font-family: "Satoshi", sans-serif;
font-size: 12px;
font-weight: 500;
line-height: 18px; 
letter-spacing: 0.25px;
      margin-bottom: 16px;
    }

    .qr-rec h3 {
      color: #14161B;
      font-family: "Onest", sans-serif;
      font-size: 24px;
      font-weight: 700;
      line-height: 32px; 
      margin-bottom: 6px;
      letter-spacing: -.4px;
    }

    .qr-rec p {
      color: #52525B;
  font-family: "Satoshi", sans-serif;
font-size: 16px;
line-height: 1.55;
letter-spacing: 0.5px;
max-width: 800px;
    }

    /* .qr-rec .assessment-btn {
      background: var(--purple);
    } */

    .qr-rec .assessment-btn:hover {
      background: #427CE3;
    }

    .qr-bottom {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 32px;
      flex-wrap: wrap;
    }

    .qr-bottom .left {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
    }

    /* =========================================================
     VIEWPORT FIT — non-result screens fit within 1 viewport.
     Results screens scroll normally.
     ========================================================= */
    html,
    body {
      height: 100%;
    }

    body.fit {
      overflow: hidden;
    }

    body.fit .container {
      height: 100vh;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      padding-top: clamp(20px, 3.25vh, 28px);
      padding-bottom: clamp(20px, 3.25vh, 28px);
      overflow: hidden;
    }

    body.fit .screen.active {
      flex: 1 1 auto;
      min-height: 0;
      display: flex;
      flex-direction: column;
      /* overflow-y: auto; */
      overflow-y: auto;
      overflow-x: hidden;
      /* Prevent horizontal scroll tracking flashes */
      scrollbar-gutter: stable;
      /* Reserves space for scrollbar to avoid sudden jumps */
    }

    body.fit .logo {
      margin-bottom: clamp(12px, 2vh, 24px);
    }

    body.fit h1.title {
      font-size: clamp(30px, 5.2vw, 60px);
      line-height: 1.1;
    }

    body.fit .lead-row {
      margin-bottom: clamp(18px, 3vh, 36px);
    }

    body.fit .cards {
      margin-bottom: clamp(14px, 2.4vh, 28px);
    }

    body.fit .form-row {
      margin-bottom: clamp(14px, 2.1vh, 24px);
      row-gap: 12px;
      column-gap: 36px;
    }

    body.fit .card {
      padding: 16px 18px;
    }

    body.fit .qsub {
      margin-bottom: clamp(18px, 3vh, 36px);
    }

    body.fit .qtext {
      font-size: clamp(20px, 3.2vw, 34px);
      margin-bottom: 10px;
    }

    body.fit .scale-labels {
      margin-bottom: clamp(18px, 3vh, 36px);
    }

    body.fit .progress-wrap {
      margin-top: 50px;
      margin-bottom: clamp(16px, 2.6vh, 30px);
    }

    body.fit .back-link {
      margin-bottom: clamp(12px, 2vh, 24px);
    }

    body.fit .qc-options {
      margin-bottom: clamp(14px, 2.4vh, 28px);
    }

    body.fit .ratings {
      margin-bottom: 16px;
    }

    /* Rating circles — always single horizontal row (incl. mobile) */
    .ratings {
      flex-wrap: nowrap !important;
      gap: clamp(8px, 2vw, 18px);
    }

    @media (max-width: 640px) {
      .rating {
        width: clamp(44px, 13vw, 60px);
        height: clamp(44px, 13vw, 60px);
        font-size: 16px;
      }
    }

    .scale-labels {
      max-width: 520px;
    }

    @media (max-height: 760px) {
      .qc-card {
        padding: 14px 16px;
      }

      .qc-card .qc-body p {
        font-size: 12.5px;
      }
    }

    /* ===== Resume modal ===== */
    .modal-backdrop {
      position: fixed;
      inset: 0;
      background: rgba(15, 23, 42, .55);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 9999;
      padding: 20px;
    }

    .modal-backdrop.show {
      display: flex;
    }


    .modal {
      background: #fff;
      border-radius: 18px;
      max-width: 460px;
      width: 100%;
      padding: 28px 28px 22px;
      box-shadow: 0 30px 80px rgba(15, 23, 42, .3);
    }

    .modal h3 {
      font-size: 22px;
      font-weight: 800;
      margin-bottom: 10px;
      letter-spacing: -.4px;
    }

    .modal p {
      color: var(--muted);
      font-size: 14px;
      line-height: 1.55;
      margin-bottom: 22px;
    }

    .modal .modal-actions {
      display: flex;
      gap: 10px;
      justify-content: flex-end;
      flex-wrap: wrap;
    }

    /* ===== Field error + toast ===== */
    .field input.invalid {
      border-bottom-color: #ef4444;
    }

    .field-error {
      color: #ef4444;
      font-size: 12px;
      margin-top: 4px;
      min-height: 14px;
    }

    .toast {
      position: fixed;
      left: 50%;
      bottom: 24px;
      transform: translateX(-50%) translateY(20px);
      background: #0b0b0f;
      color: #fff;
      padding: 12px 18px;
      border-radius: 999px;
      font-size: 13px;
      font-weight: 600;
      opacity: 0;
      pointer-events: none;
      transition: opacity .25s, transform .25s;
      z-index: 10000;
      max-width: 92vw;
      text-align: center;
    }

    .toast.show {
      opacity: 1;
      transform: translateX(-50%) translateY(0);
    }
  </style>

</head>

<body>
  <div class="container">
    <!-- <div class="logo">uniKWAN ↗</div> -->
    <a href="<?php echo $baseUrl; ?>">
      <img src="<?php echo $baseUrl; ?>assets/images/logo-v2.png"
        alt="logo" class="logo" width="100%" height="100%" />
    </a>

    <!-- ============ SCREEN 1: SELECTION ============ -->
    <section id="assessment-selection" class="screen active">
      <span class="badge">Diagnostic</span>
      <div class="lead-row">
        <h1 class="title">Assess your<br />AI product</h1>
        <p>Evaluate your product's UX maturity across trust, control, integration and adoption to see where experience is holding capability back.</p>
      </div>

      <div class="step-label">1 · Choose your audit</div>
      <div class="cards">
        <div class="card" data-type="quick">
          <div>
            <h3>Quick Check</h3>
            <p>A fast, qualitative snapshot with a recommended starting point.</p>
          </div>
          <span class="time-pill">~1 min</span>
        </div>
        <div class="card" data-type="detailed">
          <div>
            <h3>Detailed Audit</h3>
            <p>Returns a composite AI-UX score, a full breakdown, and focus areas.</p>
          </div>
          <span class="time-pill">~3 min</span>
        </div>
      </div>

      <div class="step-label">2 · Tell us about you &amp; your product</div>
      <div class="form-row">
        <div class="field"><label>Name<span class="req">*</span></label><input id="f-name" type="text" autocomplete="name" />
          <div class="field-error" id="e-name"></div>
        </div>
        <div class="field"><label>Work Email<span class="req">*</span></label><input id="f-email" type="email" autocomplete="email" />
          <div class="field-error" id="e-email"></div>
        </div>
        <div class="field"><label>Company Name</label><input id="f-company" type="text" autocomplete="organization" />
          <div class="field-error" id="e-company"></div>
        </div>
        <div class="field"><label>Product Name</label><input id="f-product" type="text" />
          <div class="field-error" id="e-product"></div>
        </div>
      </div>


      <div class="actions">
        <span class="hint">Name and email to begin · no spam</span>
        <button id="start-btn" class="assessment-btn" disabled>Start assessment →</button>
      </div>
    </section>

    <!-- ============ SCREEN 2: QUESTIONS ============ -->
    <section id="question-screen" class="screen">
      <div class="progress-wrap">
        <div id="cat-tabs" class="cat-tabs" style="display:none"></div>
        <div class="progress-meta">
          <span id="progress-label">QUESTION 1</span>
          <span id="progress-pct">0%</span>
        </div>
        <div class="progress-bar">
          <div id="progress-fill" class="progress-fill"></div>
        </div>
      </div>

      <span class="back-link" id="back-link">← Back to start</span>
      <div class="qnum" id="qnum">QUESTION 1 OF 3</div>
      <h2 class="qtext" id="qtext"></h2>
      <p class="qsub" id="qsub"></p>

      <!-- Quick check rich option cards -->
      <div id="qc-options" class="qc-options" style="display:none"></div>

      <!-- Detailed rating -->
      <div id="ratings-wrap" style="display:none">
        <div class="ratings" id="ratings"></div>
        <div class="scale-labels"><span>1 — Weak</span><span>Strong — 5</span></div>
      </div>

      <div class="nav-row">
        <button class="assessment-btn ghost" id="prev-btn">← Previous</button>
        <button class="assessment-btn" id="next-btn" disabled>Next →</button>
      </div>
    </section>

    <!-- ============ SCREEN 3a: DETAILED RESULTS ============ -->
    <section id="results-screen" class="screen">
      <div class="results-banner">
        <h2 id="rec-title">Assessment Complete</h2>
        <p id="rec-body"></p>
        <div class="banner-actions">
          <a href="<?php echo $baseUrl; ?>contact/" class="assessment-btn white">Book a discovery call →</a>
          <!-- <button class="assessment-btn outline-light">📞 +91 9686 568 578</button> -->
          <a href="mailto:info@unikwan.com" class="assessment-btn outline-light"><img src="<?php echo $baseUrl; ?>assets/images/ai-ux/mail.svg" alt="mail" width="18px" height="18px" /> info@unikwan.com</a>
        </div>
      </div>

      <div class="score-row">
        <div class="score-circle" id="score-circle">
          <div class="score-inner"><strong id="score-num">0</strong><span>COMPOSITE</span></div>
        </div>
        <div class="score-text">
          <div class="tag">● AI UX SCORE · YOUR PRODUCT</div>
          <h3 id="result-headline">Assessment Complete</h3>
          <p id="result-desc"></p>
        </div>
      </div>

      <div class="stats">
        <div class="stat"><span>ASSESSMENT TYPE</span><strong id="s-type">—</strong></div>
        <div class="stat"><span>TOTAL SCORE</span><strong id="s-total">—</strong></div>
        <div class="stat"><span>AVERAGE</span><strong id="s-avg">—</strong></div>
        <div class="stat"><span>READINESS</span><strong id="s-pct">—</strong></div>
      </div>

      <div id="cat-breakdown-section" style="display:none">
        <h3 class="section-title">Category Breakdown</h3>
        <p class="section-sub">Independent scores per category. Below 70% = focus area.</p>
        <div id="cat-grid" class="cat-grid"></div>
      </div>

      <div id="priority-section" style="display:none">
        <h3 class="section-title">Priority Improvements</h3>
        <p class="section-sub">Focus areas with the highest leverage for your product.</p>
        <div id="priority-grid" class="priority-grid"></div>
      </div>

      <div class="retake" id="retake">↻ Retake the assessment</div>
    </section>

    <!-- ============ SCREEN 3b: QUICK RESULTS ============ -->
    <section id="quick-results-screen" class="screen">
      <div class="qr-banner">
        <h2>Let's turn this snapshot into a plan.</h2>
        <p>UniKwan designs AI experiences people actually trust and adopt. Bring us your results and we'll map the highest-leverage fixes.</p>
        <div class="banner-actions">
          <a href="<?php echo $baseUrl; ?>contact/" class="assessment-btn white">Book a discovery call →</a>
          <!-- <a href="tel:+919686568578" class="assessment-btn outline-light">📞 +91 9686 568 578</a> -->
          <a href="mailto:info@unikwan.com" class="assessment-btn outline-light"><img src="<?php echo $baseUrl; ?>assets/images/ai-ux/mail.svg" alt="mail" width="18px" height="18px" /> info@unikwan.com</a>
        </div>
      </div>

      <div class="qr-main">
        <div>
          <h2 class="qr-heading" id="qr-heading"><span class="accent">Trust</span> is where to start.</h2>
          <p class="qr-lead" id="qr-lead"></p>
        </div>
        <div class="qr-badges" id="qr-badges"></div>
      </div>

      <div class="qr-insights">
        <div class="qr-insight">
          <!-- <div class="qi-label" id="qi1-label">PRIMARY FOCUS</div> -->
          <h4 id="qi1-title">Trust</h4>
          <p id="qi1-desc"></p>
        </div>
        <div class="qr-insight">
          <!-- <div class="qi-label">TEAM ANGLE</div> -->
          <h4 id="qi2-title">Team Angle</h4>
          <p id="qi2-desc"></p>
        </div>
      </div>

      <div class="qr-rec">
        <div>
          <div class="qrr-label">Recommended Starting Point</div>
          <h3 id="qrr-title">AI Product Audit</h3>
          <p id="qrr-desc"></p>
        </div>
        <a href="<?php echo $baseUrl; ?>contact/" class="assessment-btn">Enquire →</a>
      </div>

      <div class="qr-bottom">
        <div class="left">
          <button class="assessment-btn ghost" id="run-full-audit">Run the full 8-question audit →</button>
        </div>
        <div class="retake" id="retake-quick" style="margin:0">↻ Start over</div>
      </div>
    </section>
  </div>

  <!-- Resume modal -->
  <div class="modal-backdrop" id="resume-modal">
    <div class="modal">
      <h3>Continue where you left off?</h3>
      <p>You have an unfinished assessment saved on this device. Would you like to resume it, or start over?</p>
      <div class="modal-actions">
        <button class="btn ghost" id="resume-start-over">Start over</button>
        <button class="assessment-btn" id="resume-continue">Continue assessment →</button>
      </div>
    </div>
  </div>

  <!-- Toast -->
  <div class="toast" id="toast" role="status" aria-live="polite"></div>


  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script>
    /* =========================================================
   Data
========================================================= */
    const CATS = ["Trust", "Control", "Integration", "Adoption"];
    const CatsDes = ["Transparency, explainability, reliability", "Visibility, steerability, human oversight", "Workflow fit, context awareness, usability", "User confidence, engagement, improvement loops"]

    /* ---- Quick Check: 3 qualitative card questions ---- */
    const quickQuestions = [{
        key: "stage",
        q: "Product lifecycle stage",
        sub: "Where is your AI product today?",
        options: [{
            icon: "✍️",
            label: "Inception & Design",
            desc: "Mapping workflows, user journeys, and AI opportunities before development."
          },
          {
            icon: "🧪",
            label: "Prototype / Beta",
            desc: "Testing live AI interactions with early users and feedback loops."
          },
          {
            icon: "🚀",
            label: "Live in Production",
            desc: "Deployed to real users and optimizing adoption, trust, or performance."
          },
          {
            icon: "🔄",
            label: "Refactoring Frameworks",
            desc: "Redesigning systems to support copilots, agents, or advanced AI workflows."
          }
        ]
      },
      {
        key: "challenge",
        q: "Core AI UX challenge",
        sub: "What friction do users feel most?",
        options: [{
            icon: "📦",
            label: "The Black Box Gap",
            desc: "Users receive outputs without understanding confidence, reasoning, or sources.",
            theme: "Trust"
          },
          {
            icon: "🧭",
            label: "Autonomy Anxiety",
            desc: "AI actions feel overly automated with limited visibility or control.",
            theme: "Control"
          },
          {
            icon: "🧠",
            label: "Memory Amnesia",
            desc: "The system struggles to retain context, preferences, or workflow continuity.",
            theme: "Integration"
          },
          {
            icon: "💬",
            label: "Static Chatbot Flow",
            desc: "Interactions feel repetitive and transactional instead of collaborative.",
            theme: "Adoption"
          }
        ]
      },
      {
        key: "team",
        q: "Team composition",
        sub: "Who's building the experience?",
        options: [{
            icon: "🛠",
            label: "Engineering Heavy",
            desc: "Strong technical execution with limited AI UX specialization."
          },
          {
            icon: "🎨",
            label: "Generalist Product Design",
            desc: "Strong product UX foundations but limited AI-native experience."
          },
          {
            icon: "⚖️",
            label: "Balanced AI Product Team",
            desc: "Dedicated collaboration across AI design, product, and engineering."
          }
        ]
      }
    ];

    /* ---- Theme content for quick results (driven by challenge) ---- */
    const THEME_CONTENT = {
      Trust: {
        heading: "Trust",
        lead: "Trust is your leading constraint. Users are receiving outputs they can't interrogate — no view into confidence, reasoning or sources — so they hesitate to act.",
        focusDesc: "Users are receiving outputs they can't interrogate, no view into confidence, reasoning, or sources, so they hesitate to act on them."
      },
      Control: {
        heading: "Control",
        lead: "Control is your leading constraint. AI actions feel overly automated and users can't see what's happening or steer it — so they pull back.",
        focusDesc: "Users feel the AI is acting on them rather than with them. Without visible controls and reversible actions, confidence collapses."
      },
      Integration: {
        heading: "Integration",
        lead: "Integration is your leading constraint. The system forgets context and preferences, so users repeat themselves and lose workflow continuity.",
        focusDesc: "Memory and context are fragmented. The AI doesn't carry state across the workflow, forcing users to rebuild context every session."
      },
      Adoption: {
        heading: "Adoption",
        lead: "Adoption is your leading constraint. Interactions feel transactional and repetitive — users don't return because the product never feels collaborative.",
        focusDesc: "The conversation pattern is static and the feedback loop is thin. Users churn before the product earns a habit."
      }
    };

    /* ---- Team angle copy ---- */
    const TEAM_ANGLE = {
      "Engineering Heavy": "With an engineering-heavy team, bringing in dedicated AI-UX specialization is the fastest way to close the experience gap.",
      "Generalist Product Design": "Your product UX foundation is solid — adding AI-native expertise will sharpen reasoning, control and trust patterns.",
      "Balanced AI Product Team": "You're well-staffed for this work. A targeted workshop will compound what your team already does well."
    };

    /* ---- Recommended starting point copy (driven by stage) ---- */
    const STAGE_RECOMMENDATION = {
      "Inception & Design": {
        title: "AI UX Discovery",
        desc: "You're early — a discovery sprint maps the highest-value AI opportunities and the UX patterns that make them feel trustworthy from day one."
      },
      "Prototype / Beta": {
        title: "Beta UX Sprint",
        desc: "You have real signal — a focused sprint turns beta feedback into trust, control and adoption fixes before you scale."
      },
      "Live in Production": {
        title: "AI Product Audit",
        desc: "You're live — an audit pinpoints the trust and UX friction costing you adoption right now, with quick wins you can ship fast."
      },
      "Refactoring Frameworks": {
        title: "AI Framework Redesign",
        desc: "You're rebuilding the foundations — we'll redesign the interaction model so copilots, agents and advanced flows feel coherent."
      }
    };

    /* ---- Detailed audit (unchanged) ---- */
    const assessmentData = {
      detailed: {
        title: "Detailed Audit",
        questions: [{
            cat: "Trust",
            q: "How clearly can users understand why the AI generated a response or recommendation?",
            sub: "Measures transparency, explainability, and reliability in your AI experience."
          },
          {
            cat: "Trust",
            q: "How confident are users in the accuracy of AI outputs?",
            sub: "Reliability and confidence signals."
          },
          {
            cat: "Control",
            q: "How easily can users correct or override AI decisions?",
            sub: "User control and steerability."
          },
          {
            cat: "Control",
            q: "How visible are automated AI actions before and after they happen?",
            sub: "Visibility and human oversight."
          },
          {
            cat: "Integration",
            q: "How well does the AI fit into existing user workflows?",
            sub: "Workflow fit and integration."
          },
          {
            cat: "Integration",
            q: "How well does the AI adapt to user context, preferences, or history?",
            sub: "Context awareness and personalization."
          },
          {
            cat: "Adoption",
            q: "How engaged do users feel after their first session?",
            sub: "First-run experience and engagement."
          },
          {
            cat: "Adoption",
            q: "How effectively does the product learn from user feedback or behaviour?",
            sub: "Feedback loops and continuous improvement."
          }
        ]
      }
    };

    const CAT_RECOMMENDATIONS = {
      Trust: {
        title: "Build trust through transparency",
        desc: "Users hesitate when AI feels opaque. Make reasoning visible and add confidence signals so users know when to lean in.",
        actions: ["Show source citations and reasoning summaries inline", "Surface confidence levels on AI outputs", "Add an 'explain this' affordance on every AI action"]
      },
      Control: {
        title: "Give users meaningful control",
        desc: "Trust grows when users can correct, undo or steer the AI without friction. Make overrides a first-class action.",
        actions: ["One-click edit/undo for any AI output", "Preview automated actions before they execute", "Settings for autonomy level (suggest vs. act)"]
      },
      Integration: {
        title: "Fit naturally into existing workflows",
        desc: "AI loses value when it lives in a silo. Meet users inside the tools and contexts they already use.",
        actions: ["Embed AI into existing primary workflows", "Remember context across sessions and tools", "Personalize defaults to each user's history"]
      },
      Adoption: {
        title: "Drive durable adoption",
        desc: "First impressions and feedback loops decide retention. Make the win obvious and let the product learn from every interaction.",
        actions: ["Design a guided first-run with a quick win", "Capture thumbs/feedback on every output", "Close the loop — show how feedback improves results"]
      }
    };

    /* =========================================================
       Config — Google Sheets endpoint
       Replace SHEETS_ENDPOINT with your deployed Google Apps Script
       Web App URL. You may also override at runtime via:
         window.SHEETS_ENDPOINT = "https://script.google.com/.../exec"
       Apps Script (paste in Apps Script editor, deploy as Web App,
       "Execute as: Me", "Who has access: Anyone"):

         function doPost(e){
           const sheet = SpreadsheetApp.getActive().getSheetByName('Assessment Responses')
             || SpreadsheetApp.getActive().insertSheet('Assessment Responses');
           const p = JSON.parse(e.postData.contents);
           const headers = ["Timestamp","Audit Type","Name","Email","Company Name","Product Name","Phone Number",
             "Product Lifecycle Stage","Core AI UX Challenge","Team Composition",
             "Primary Focus Area","Team Angle","Recommended Starting Point",
             "Composite Score","Assessment Result","Readiness Percentage","Average Score",
             "Trust Score","Control Score","Integration Score","Adoption Score",
             "Priority 1","Priority 2","Priority 3","Answers JSON","Submission Status","Submission ID"];
           if (sheet.getLastRow() === 0) sheet.appendRow(headers);
           sheet.appendRow(headers.map(h => p[h] !== undefined ? p[h] : ""));
           return ContentService.createTextOutput(JSON.stringify({ok:true})).setMimeType(ContentService.MimeType.JSON);
         }
    ========================================================= */

    // const SHEETS_ENDPOINT = "https://script.google.com/macros/s/AKfycby9YwXagXSrDG34_rv4VGgizvf8H00oCWqw8d-4FXUfwJDnHBsL9ilGs25pinPV_del0g/exec"; 

    const SHEETS_ENDPOINT = "https://script.google.com/macros/s/AKfycbzLXuoCC2XqktZ4WP-hFhY7uUKIV3JiB5AbsitHdIwEN36W2Ao8faE-m5C7OTTJ5MrK/exec";
    
  
    const STORAGE_KEY = "uniKWAN.assessment.v1";
    const SUBMIT_KEY = "uniKWAN.assessment.submissions.v1";

    /* =========================================================
       State
    ========================================================= */
    let state = {
      type: null,
      current: 0,
      answers: [],
      user: {
        name: "",
        email: "",
        company: "",
        product: ""
      },
      screen: "assessment-selection",
      submissionId: null,
      submitted: false
    };

    /* =========================================================
       localStorage persistence
    ========================================================= */
    function saveState() {
      try {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(state));
      } catch (_) {}
    }

    function loadState() {
      try {
        const raw = localStorage.getItem(STORAGE_KEY);
        if (!raw) return null;
        return JSON.parse(raw);
      } catch (_) {
        return null;
      }
    }

    function clearState() {
      try {
        localStorage.removeItem(STORAGE_KEY);
      } catch (_) {}
    }

    function hasUnfinishedProgress(s) {
      if (!s) return false;
      if (s.submitted) return false;
      const hasUser = s.user && (s.user.name || s.user.email);
      const hasProgress = s.type && (s.answers && s.answers.some(Boolean));
      return !!(hasUser || hasProgress);
    }

    function markSubmitted(id) {
      try {
        const list = JSON.parse(localStorage.getItem(SUBMIT_KEY) || "[]");
        if (!list.includes(id)) list.push(id);
        localStorage.setItem(SUBMIT_KEY, JSON.stringify(list.slice(-50)));
      } catch (_) {}
    }

    function isAlreadySubmitted(id) {
      try {
        const list = JSON.parse(localStorage.getItem(SUBMIT_KEY) || "[]");
        return list.includes(id);
      } catch (_) {
        return false;
      }
    }

    function uuid() {
      if (window.crypto && crypto.randomUUID) return crypto.randomUUID();
      return "id-" + Date.now() + "-" + Math.random().toString(36).slice(2, 10);
    }

    /* =========================================================
       Toast
    ========================================================= */
    let toastTimer = null;

    function showToast(msg, ms) {
      const $t = $("#toast").text(msg).addClass("show");
      clearTimeout(toastTimer);
      toastTimer = setTimeout(() => $t.removeClass("show"), ms || 4000);
    }

    /* =========================================================
       Helpers
    ========================================================= */
    function getQuestions() {
      return state.type === "quick" ? quickQuestions : assessmentData.detailed.questions;
    }

    function applyFitMode(id) {
      const scrollable = id === "results-screen" || id === "quick-results-screen";
      $("body").toggleClass("fit", !scrollable);
    }

    function showScreen(id) {
      const $cur = $(".screen.active");
      const $next = $("#" + id);
      state.screen = id;
      saveState();
      if ($cur.attr("id") === id) {
        applyFitMode(id);
        return;
      }
      gsap.to($cur[0], {
        opacity: 0,
        y: -10,
        duration: 0.25,
        onComplete: () => {
          $cur.removeClass("active");
          $next.addClass("active");
          applyFitMode(id);
          gsap.fromTo($next[0], {
            opacity: 0,
            y: 10
          }, {
            opacity: 1,
            y: 0,
            duration: 0.4
          });
          window.scrollTo({
            top: 0,
            behavior: "smooth"
          });
        }
      });
    }

    /* =========================================================
       Screen 1: Selection — validation + selection
    ========================================================= */
    $(".card").on("click", function() {
      $(".card").removeClass("active");
      $(this).addClass("active");
      state.type = $(this).data("type");
      gsap.fromTo(this, {
        scale: 0.98
      }, {
        scale: 1.0,
        duration: 0.25,
        ease: "back.out(2)"
      });
      saveState();
      validateStart();
    });

    const EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

    function setFieldError(id, msg) {
      $("#e-" + id).text(msg || "");
      $("#f-" + id).closest(".field input").toggleClass("invalid", !!msg);
    }

    function validateStart() {
      const name = $("#f-name").val().trim();
      const email = $("#f-email").val().trim();
      const company = $("#f-company").val().trim();
      const product = $("#f-product").val().trim();

      let ok = true;
      if (!name) {
        setFieldError("name", "Name is required");
        ok = false;
      } else if (name.length < 2) {
        setFieldError("name", "Enter your full name");
        ok = false;
      } else setFieldError("name", "");

      if (!email) {
        setFieldError("email", "Email is required");
        ok = false;
      } else if (!EMAIL_RE.test(email)) {
        setFieldError("email", "Enter a valid email");
        ok = false;
      } else setFieldError("email", "");

      if (company && company.length > 120) {
        setFieldError("company", "Too long");
        ok = false;
      } else setFieldError("company", "");
      if (product && product.length > 120) {
        setFieldError("product", "Too long");
        ok = false;
      } else setFieldError("product", "");

      state.user = {
        name,
        email,
        company,
        product
      };
      saveState();
      $("#start-btn").prop("disabled", !(state.type && ok));
      return ok;
    }
    $("#f-name, #f-email, #f-company, #f-product").on("input", validateStart);

    $("#start-btn").on("click", function() {
      if ($(this).prop("disabled")) return;
      if (!validateStart()) return;
      // Fresh attempt — new submission id, reset answers
      state.current = 0;
      state.answers = [];
      state.submissionId = uuid();
      state.submitted = false;
      saveState();
      renderQuestion();
      showScreen("question-screen");
    });
    $(document).on("mouseenter", ".assessment-btn", function() {
        gsap.to(this, {
          y: -2,
          duration: 0.2
        });
      })
      .on("mouseleave", ".assessment-btn", function() {
        gsap.to(this, {
          y: 0,
          duration: 0.2
        });
      });



    /* =========================================================
       Screen 2: Questions
    ========================================================= */
    function updateProgress() {
      const total = getQuestions().length;
      const completed = state.answers[state.current] ? state.current + 1 : state.current;
      const pct = Math.round((completed / total) * 100);
      gsap.to("#progress-fill", {
        width: pct + "%",
        duration: 0.5,
        ease: "power2.out"
      });
      $("#progress-pct").text(pct + "%");
      $("#progress-label").text(`QUESTION ${state.current + 1} OF ${total}`);

      if (state.type === "detailed") {
        $("#cat-tabs").show();
        const $tabs = $("#cat-tabs").empty();
        const currentCatIdx = Math.floor(state.current / 2);
        CATS.forEach((c, i) => {
          const cls = i < currentCatIdx ? "done" : (i === currentCatIdx ? "active" : "");
          $tabs.append(`<div class="cat-tab ${cls}">${c}</div>`);
        });
      } else {
        $("#cat-tabs").hide();
      }
    }

    function renderQuestion() {
      const questions = getQuestions();
      const total = questions.length;
      const q = questions[state.current];

      $("#qnum").text(`QUESTION ${state.current + 1} OF ${total}`);
      $("#qtext").text(q.q);
      $("#qsub").text(q.sub || "");

      if (state.type === "quick") {
        $("#ratings-wrap").hide();
        const $o = $("#qc-options").show().empty();
        q.options.forEach((opt) => {
          const $el = $(`
        <div class="qc-card">
          <div class="qc-icon">${opt.icon}</div>
          <div class="qc-body">
            <h4>${opt.label}</h4>
            <p>${opt.desc}</p>
          </div>
        </div>
      `);
          $el.on("click", () => {
            $("#qc-options .qc-card").removeClass("selected");
            $el.addClass("selected");
            gsap.fromTo($el[0], {
              scale: 0.98
            }, {
              scale: 1,
              duration: 0.25,
              ease: "back.out(2)"
            });
            state.answers[state.current] = {
              key: q.key,
              icon: opt.icon,
              label: opt.label,
              desc: opt.desc,
              theme: opt.theme || null
            };
            saveState();
            $("#next-btn").prop("disabled", false);
            updateProgress();
          });
          $o.append($el);
        });
        const prior = state.answers[state.current];
        if (prior) {
          const idx = q.options.findIndex(o => o.label === prior.label);
          if (idx >= 0) $("#qc-options .qc-card").eq(idx).addClass("selected");
        }
      } else {
        $("#qc-options").hide();
        $("#ratings-wrap").show();
        const $r = $("#ratings").empty();
        for (let i = 1; i <= 5; i++) {
          const $b = $(`<div class="rating">${i}</div>`).on("click", function() {
            $(".rating").removeClass("selected");
            $(this).addClass("selected");
            gsap.fromTo(this, {
              scale: 0.9
            }, {
              scale: 1,
              duration: 0.25,
              ease: "back.out(2)"
            });
            state.answers[state.current] = {
              question: q.q,
              score: i,
              max: 5,
              cat: q.cat
            };
            saveState();
            $("#next-btn").prop("disabled", false);
            updateProgress();
          });
          $r.append($b);
        }
        const prior = state.answers[state.current];
        if (prior && prior.score) $r.find(".rating").eq(prior.score - 1).addClass("selected");
      }

      const hasAnswer = !!state.answers[state.current];
      $("#next-btn").prop("disabled", !hasAnswer);
      $("#prev-btn").prop("disabled", state.current === 0);
      $("#next-btn").text(state.current === total - 1 ? "Finish →" : "Next →");

      updateProgress();
      gsap.fromTo("#qtext", {
        opacity: 0,
        y: 8
      }, {
        opacity: 1,
        y: 0,
        duration: 0.35
      });
      gsap.fromTo("#qc-options .qc-card, #ratings .rating", {
        opacity: 0,
        y: 10
      }, {
        opacity: 1,
        y: 0,
        duration: 0.35,
        stagger: 0.05
      });
    }

    $("#prev-btn").on("click", () => {
      if (state.current > 0) {
        state.current--;
        saveState();
        renderQuestion();
      }
    });
    $("#next-btn").on("click", () => {
      const total = getQuestions().length;
      if (!state.answers[state.current]) return;
      if (state.current === total - 1) {
        let payload;
        if (state.type === "quick") {
          payload = renderQuickResults();
          showScreen("quick-results-screen");
        } else {
          payload = renderDetailedResults();
          showScreen("results-screen");
        }
        submitToSheets(payload);
      } else {
        state.current++;
        saveState();
        renderQuestion();
      }
    });
    $("#back-link").on("click", () => showScreen("assessment-selection"));


    /* =========================================================
       Screen 3a: Detailed Results
    ========================================================= */
    function categoryScores() {
      const scores = {};
      CATS.forEach(c => scores[c] = {
        sum: 0,
        count: 0
      });
      state.answers.forEach(a => {
        if (!a || !a.cat) return;
        scores[a.cat].sum += a.score;
        scores[a.cat].count += 1;
      });
      const out = {};
      CATS.forEach(c => {
        const s = scores[c];
        out[c] = s.count ? Math.round((s.sum / (s.count * 5)) * 100) : 0;
      });
      return out;
    }

    function renderDetailedResults() {
      const data = assessmentData.detailed;
      const total = data.questions.length;
      const totalScore = state.answers.reduce((s, a) => s + (a ? a.score : 0), 0);
      const maxScore = state.answers.reduce((s, a) => s + (a ? a.max : 0), 0);
      const pct = Math.round((totalScore / maxScore) * 100);
      const avg = (totalScore / total).toFixed(2);

      $("#s-type").text(data.title);
      $("#s-total").text(`${totalScore} / ${maxScore}`);
      $("#s-avg").text(avg);
      $("#s-pct").text(pct + "%");

      let headline, desc, recTitle;
      if (pct >= 80) {
        headline = "Excellent AI Product Readiness";
        desc = "Strong AI UX maturity. Focus on scaling, polish and edges.";
        recTitle = "You're in great shape. Let's compound the gains.";
      } else if (pct >= 60) {
        headline = "Good Foundation";
        desc = "Solid base with clear opportunities to tighten trust, control or adoption.";
        recTitle = "Let's turn this snapshot into a plan.";
      } else {
        headline = "Needs Improvement";
        desc = "Meaningful UX gaps are holding capability back. A focused sprint will move the needle.";
        recTitle = "Your score says trust and adoption need work. Let's fix that.";
      }
      $("#result-headline").text(headline);
      $("#result-desc").text(desc);
      $("#rec-title").text(recTitle);
      $("#rec-body").text("UniKwan designs AI experiences people actually trust and adopt. Bring us your results and we'll map the highest-leverage fixes.");

      $("#score-circle").css("--p", "0%");
      gsap.to({
        val: 0
      }, {
        val: pct,
        duration: 1.1,
        ease: "power2.out",
        onUpdate: function() {
          $("#score-circle").css("--p", this.targets()[0].val + "%");
          $("#score-num").text(Math.round(this.targets()[0].val));
        }
      });

      const cs = categoryScores();
      $("#cat-breakdown-section").show();
      const $grid = $("#cat-grid").empty();
      CATS.forEach(c => {
        const score = cs[c];
        const focus = score < 70;
        const tone = score >= 80 ? "good" : score >= 60 ? "mid" : "low";
        const $card = $(`
      <div class="cat-card">
        <div class="cat-card-head"><div class="cat-name-badge"><div class="cat-name">${c}</div>
        ${focus ? '<span class="focus-badge">FOCUS AREA</span>' : '<span class="ok-badge">ON TRACK</span>'}</div>
        <div class="cat-score">${score}%</div></div>
        <div class="cat-desc">${CatsDes[CATS.indexOf(c)]}</div>
        <div class="cat-bar"><div class="cat-bar-fill ${tone}"></div></div>
        
      </div>
    `);
        $grid.append($card);
        gsap.to($card[0], {
          opacity: 1,
          y: 0,
          duration: 0.5,
          delay: 0.1 * CATS.indexOf(c),
          ease: "power2.out"
        });
        gsap.fromTo($card[0], {
          y: 20
        }, {
          y: 0,
          duration: 0.5,
          delay: 0.1 * CATS.indexOf(c)
        });
        gsap.to($card.find(".cat-bar-fill")[0], {
          width: score + "%",
          duration: 1,
          delay: 0.2 + 0.1 * CATS.indexOf(c),
          ease: "power2.out"
        });
      });

      const focusCats = CATS.filter(c => cs[c] < 70);
      if (focusCats.length) {
        $("#priority-section").show();
        const $pg = $("#priority-grid").empty();
        focusCats.forEach((c, i) => {
          const r = CAT_RECOMMENDATIONS[c];
          const $card = $(`
        <div class="priority-card">
          <div class="pc-head"><h4>${c}</h4><span class="focus-badge">● FOCUS</span></div>
          <div style="font-weight:700; margin-bottom:6px;">${r.title}</div>
          <p class="pc-desc">${r.desc}</p>
          <div class="pc-actions">Suggested Actions</div>
          <ul>${r.actions.map(a => `<li>${a}</li>`).join("")}</ul>
        </div>
      `);
          $pg.append($card);
          gsap.to($card[0], {
            opacity: 1,
            duration: 0.5,
            delay: 0.6 + i * 0.12
          });
          gsap.fromTo($card[0], {
            y: 20
          }, {
            y: 0,
            duration: 0.5,
            delay: 0.6 + i * 0.12,
            ease: "power2.out"
          });
        });
      } else {
        $("#priority-section").hide();
      }

      // Build submission payload for Google Sheets
      const focusCatsRanked = CATS.slice().sort((a, b) => cs[a] - cs[b]).filter(c => cs[c] < 70);
      return {
        "Timestamp": new Date().toISOString(),
        "Audit Type": "Detailed Audit",
        "Name": state.user.name,
        "Email": state.user.email,
        "Company Name": state.user.company,
        "Product Name": state.user.product,
        "Phone Number": "",
        "Product Lifecycle Stage": "",
        "Core AI UX Challenge": "",
        "Team Composition": "",
        "Primary Focus Area": focusCatsRanked[0] || "",
        "Team Angle": "",
        "Recommended Starting Point": "",
        "Composite Score": `${totalScore} / ${maxScore}`,
        "Assessment Result": headline,
        "Readiness Percentage": pct + "%",
        "Average Score": avg,
        "Trust Score": cs.Trust + "%",
        "Control Score": cs.Control + "%",
        "Integration Score": cs.Integration + "%",
        "Adoption Score": cs.Adoption + "%",
        "Priority 1": focusCatsRanked[0] ? `${focusCatsRanked[0]}: ${CAT_RECOMMENDATIONS[focusCatsRanked[0]].title}` : "",
        "Priority 2": focusCatsRanked[1] ? `${focusCatsRanked[1]}: ${CAT_RECOMMENDATIONS[focusCatsRanked[1]].title}` : "",
        "Priority 3": focusCatsRanked[2] ? `${focusCatsRanked[2]}: ${CAT_RECOMMENDATIONS[focusCatsRanked[2]].title}` : "",
        "Answers JSON": JSON.stringify(state.answers),
        "Submission Status": "Completed",
        "Submission ID": state.submissionId
      };
    }


    /* =========================================================
       Screen 3b: Quick Results
    ========================================================= */
    function getQuickAnswer(key) {
      return state.answers.find(a => a && a.key === key);
    }

    function renderQuickResults() {
      const stage = getQuickAnswer("stage");
      const challenge = getQuickAnswer("challenge");
      const team = getQuickAnswer("team");

      const theme = (challenge && challenge.theme) || "Trust";
      const tc = THEME_CONTENT[theme];
      const stageRec = STAGE_RECOMMENDATION[stage ? stage.label : "Live in Production"] || STAGE_RECOMMENDATION["Live in Production"];
      const teamCopy = team ? (TEAM_ANGLE[team.label] || "") : "";

      // Heading
      $("#qr-heading").html(`<span class="accent">${tc.heading}</span> is where to start.`);
      $("#qr-lead").text(tc.lead);

      // Badges
      const $b = $("#qr-badges").empty();
      const rows = [{
          label: "Stage",
          value: stage
        },
        {
          label: "Challenge",
          value: challenge
        },
        {
          label: "Team",
          value: team
        }
      ];
      rows.forEach(r => {
        if (!r.value) return;
        $b.append(`
      <div class="qr-badge">
        <div class="qb-value">
        <div class="qb-label">${r.label}</div>
        <span class="qi">${r.value.icon}</span><span>${r.value.label}</span></div>
      </div>
    `);
      });

      // Insights
      $("#qi1-label").text(`PRIMARY FOCUS · ${tc.heading.toUpperCase()}`);
      $("#qi1-title").text(`Primary Focus – ${tc.heading}`);
      $("#qi1-desc").text(tc.focusDesc);
      $("#qi2-title").text("Team Angle");
      $("#qi2-desc").text(teamCopy);

      // Starting point card
      $("#qrr-title").text(stageRec.title);
      $("#qrr-desc").text(stageRec.desc);

      // Animations
      gsap.fromTo("#qr-heading", {
        opacity: 0,
        y: 12
      }, {
        opacity: 1,
        y: 0,
        duration: 0.5
      });
      gsap.fromTo("#qr-lead", {
        opacity: 0,
        y: 12
      }, {
        opacity: 1,
        y: 0,
        duration: 0.5,
        delay: 0.1
      });
      gsap.fromTo(".qr-badge", {
        opacity: 0,
        x: 12
      }, {
        opacity: 1,
        x: 0,
        duration: 0.4,
        stagger: 0.08,
        delay: 0.15
      });
      gsap.fromTo(".qr-insight", {
        opacity: 0,
        y: 16
      }, {
        opacity: 1,
        y: 0,
        duration: 0.5,
        stagger: 0.1,
        delay: 0.3
      });
      gsap.fromTo(".qr-rec", {
        opacity: 0,
        y: 16
      }, {
        opacity: 1,
        y: 0,
        duration: 0.5,
        delay: 0.5
      });

      return {
        "Timestamp": new Date().toISOString(),
        "Audit Type": "Quick Check",
        "Name": state.user.name,
        "Email": state.user.email,
        "Company Name": state.user.company,
        "Product Name": state.user.product,
        "Phone Number": "",
        "Product Lifecycle Stage": stage ? stage.label : "",
        "Core AI UX Challenge": challenge ? challenge.label : "",
        "Team Composition": team ? team.label : "",
        "Primary Focus Area": tc.heading,
        "Team Angle": teamCopy,
        "Recommended Starting Point": stageRec.title,
        "Composite Score": "",
        "Assessment Result": `${tc.heading} is where to start.`,
        "Readiness Percentage": "",
        "Average Score": "",
        "Trust Score": "",
        "Control Score": "",
        "Integration Score": "",
        "Adoption Score": "",
        "Priority 1": "",
        "Priority 2": "",
        "Priority 3": "",
        "Answers JSON": JSON.stringify(state.answers),
        "Submission Status": "Completed",
        "Submission ID": state.submissionId
      };
    }

    /* =========================================================
       Google Sheets submission (once per submissionId)
    ========================================================= */
    function submitToSheets(payload) {
      if (!payload || !state.submissionId) return;
      if (state.submitted || isAlreadySubmitted(state.submissionId)) return;

      state.submitted = true;
      markSubmitted(state.submissionId);
      saveState();

      const endpoint = window.SHEETS_ENDPOINT || SHEETS_ENDPOINT;
      if (!endpoint) {
        console.warn("[assessment] SHEETS_ENDPOINT not configured. Payload:", payload);
        return;
      }

      // text/plain avoids CORS preflight against Apps Script
      fetch(endpoint, {
        method: "POST",
        mode: "no-cors",
        headers: {
          "Content-Type": "text/plain;charset=utf-8"
        },
        body: JSON.stringify(payload)
      }).catch(err => {
        console.error("[assessment] Sheets submission failed:", err);
        showToast("Your assessment is complete. We were unable to save your submission right now.");
        // Allow background retry on next page load via flag
        state.submitted = false;
        saveState();
      });
    }

    /* Run full audit from quick results -> jump into detailed flow */
    $("#run-full-audit").on("click", () => {
      state.type = "detailed";
      state.current = 0;
      state.answers = [];
      state.submissionId = uuid();
      state.submitted = false;
      saveState();
      renderQuestion();
      showScreen("question-screen");
    });


    function startOver() {
      const user = state.user;

      state = {
        type: null,
        current: 0,
        answers: [],
        user: user, // keep Name, Email, Company, Product
        screen: "assessment-selection",
        submissionId: null,
        submitted: false
      };

      $(".card").removeClass("active");

      $("#resume-modal").removeClass("show");

      saveState();

      applyRestoredUserFields();
      showScreen("assessment-selection");
    }

    /* Retake handlers — full reset, clear storage */
    function resetAll() {
      clearState();
      state = {
        type: null,
        current: 0,
        answers: [],
        user: {
          name: "",
          email: "",
          company: "",
          product: ""
        },
        screen: "assessment-selection",
        submissionId: null,
        submitted: false
      };
      $(".card").removeClass("active");
      $("#f-name,#f-email,#f-company,#f-product").val("");
      ["name", "email", "company", "product"].forEach(k => setFieldError(k, ""));
      validateStart();
      showScreen("assessment-selection");
    }
    $("#retake").on("click", resetAll);
    $("#retake-quick").on("click", resetAll);

    /* =========================================================
       Boot — restore from localStorage, show resume modal
    ========================================================= */
    function applyRestoredUserFields() {
      if (!state.user) return;
      $("#f-name").val(state.user.name || "");
      $("#f-email").val(state.user.email || "");
      $("#f-company").val(state.user.company || "");
      $("#f-product").val(state.user.product || "");
      if (state.type) $(`.card[data-type="${state.type}"]`).addClass("active");
      validateStart();
    }

    function resumeAssessment() {
      applyRestoredUserFields();
      const target = state.screen || "assessment-selection";
      if (target === "question-screen" && state.type) {
        renderQuestion();
        showScreen("question-screen");
      } else if (target === "results-screen" && state.type === "detailed" && state.answers.length) {
        const payload = renderDetailedResults();
        showScreen("results-screen");
        if (!state.submitted) submitToSheets(payload);
      } else if (target === "quick-results-screen" && state.type === "quick" && state.answers.length) {
        const payload = renderQuickResults();
        showScreen("quick-results-screen");
        if (!state.submitted) submitToSheets(payload);
      } else {
        showScreen("assessment-selection");
      }
    }

    // $(function() {
    //   applyFitMode($(".screen.active").attr("id"));
    //   const saved = loadState();
    //   if (hasUnfinishedProgress(saved)) {
    //     state = Object.assign(state, saved);
    //     $("#resume-modal").addClass("show");
    //     $("#resume-continue").one("click", () => {
    //       $("#resume-modal").removeClass("show");
    //       resumeAssessment();
    //     });
    //     $("#resume-start-over").one("click", () => {
    //       $("#resume-modal").removeClass("show");
    //       resetAll();
    //     });

    //   } else if (saved && saved.user) {
    //     // No active progress but keep their contact info pre-filled
    //     state.user = saved.user;
    //     applyRestoredUserFields();
    //   }
    // });



    $(function() {
      applyFitMode($(".screen.active").attr("id"));

      const saved = loadState();

      if (hasUnfinishedProgress(saved)) {
        state = Object.assign(state, saved);
        resumeAssessment(); // directly restore
        $("#resume-start-over").one("click", () => {
          startOver();
        });
      } else if (saved && saved.user) {
        state.user = saved.user;
        applyRestoredUserFields();
      }
    });
  </script>

</body>

</html>