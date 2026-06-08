<?php
/**
 * Template Name: Brand Guidelines
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Twilight Engineering Solutions — Brand Guidelines 2025</title>
<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --crimson:#EC2128;--crimson-dark:#B01920;--crimson-light:#F04A50;--crimson-pale:#FDE8E9;
  --white:#FFFFFF;--offwhite:#F7F6F3;--cream:#F0EDE6;--bone:#E8E4DC;--mist:#D4D0C8;
  --smoke:#9A9690;--ash:#666666;--charcoal:#333333;--ink:#1A1A1A;--black:#0D0D0D;
  --font:"Montserrat","Helvetica Neue",Helvetica,Arial,sans-serif;
  --nav-h:64px;
  --section-pad:120px;
  --page-pad:80px;
}
html{scroll-behavior:smooth}
body{font-family:var(--font);background:var(--offwhite);color:var(--ink);-webkit-font-smoothing:antialiased;overflow-x:hidden}

/* NAV */
#topnav{position:fixed;top:0;left:0;right:0;height:var(--nav-h);background:#fff;border-bottom:1px solid var(--bone);z-index:1000;display:flex;align-items:center;justify-content:space-between;padding:0 48px}
.nav-logo{height:22px;display:flex;align-items:center}
.nav-logo svg{height:80px!important;width:auto}
.nav-links{display:flex;gap:36px;list-style:none;align-items:center}
.nav-links a{font-size:11px;font-weight:400;letter-spacing:.1em;text-transform:uppercase;color:var(--ash);text-decoration:none;padding-bottom:2px;border-bottom:2px solid transparent;transition:color .2s,border-color .2s;white-space:nowrap}
.nav-links a:hover{color:var(--ink)}
.nav-links a.active{color:var(--crimson);border-color:var(--crimson)}
.nav-burger{display:none;flex-direction:column;gap:5px;cursor:pointer;padding:8px}
.nav-burger span{display:block;width:20px;height:1.5px;background:var(--ink);transition:.3s}
@media(max-width:1000px){.nav-links{display:none}.nav-burger{display:flex}}
.mobile-menu{display:none;position:fixed;inset:0;background:#fff;z-index:999;flex-direction:column;align-items:center;justify-content:center;gap:44px}
.mobile-menu.open{display:flex}
.mobile-menu a{font-size:18px;font-weight:500;color:var(--ink);text-decoration:none;letter-spacing:.04em}

/* PROGRESS */
#progress{position:fixed;top:var(--nav-h);left:0;height:2px;background:var(--crimson);width:0%;z-index:999;transition:width .1s linear}

/* FADE IN */
.fade-in{opacity:0;transform:translateY(16px);transition:opacity .55s ease,transform .55s ease}
.fade-in.visible{opacity:1;transform:none}

/* ── HERO ── */
/* Hero Section Container */
section#hero {
    background: var(--crimson);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 30px 40px;
    min-height: auto;
    position: relative;
}

/* Inner Layout Wrapper */
.hero-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 0 clamp(16px, 5vw, 80px);
}

/* Content Container */
.hero-left {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 60px 0;
}

/* Eyebrow Text (BRAND GUIDELINES) */
.hero-eyebrow {
    color: #fff;
    font-size: 16px;
    font-weight: 400;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin-bottom: -5px;
    order: 2;
    margin-top: -80px;
}

/* Logo Wrapper */
.hero-logo-wrap {
    order: 1; /* Positioned at top */
}

/* Main Heading (Tagline) */
.hero-tagline {
    color: #fff;
    font-size: 22px;
    font-weight: 400;
    line-height: 1.2;
    max-width: 900px;
    margin: 10px 0 8px;
    order: 3;
}

/* Meta Description Text */
.hero-meta {
    color: #fff;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.6;
    max-width: 800px;
    text-align: center;
    order: 4;
    padding-bottom: 15px;
}






/* #hero{min-height:100vh;padding-top:var(--nav-h);display:flex;align-items:stretch;background:#fff;position:relative;overflow:hidden}
.hero-inner{max-width:1400px;margin:0 auto;padding:0 var(--page-pad)}
.hero-left{display:flex;flex-direction:column;justify-content:center;padding:100px 0;position:relative;z-index:2}
.hero-eyebrow{font-size:10px;font-weight:400;letter-spacing:.18em;text-transform:uppercase;color:var(--smoke);margin-bottom:52px}
.hero-logo-wrap{margin-bottom:44px}
.hero-logo-wrap svg{max-width:340px;height:auto}
.hero-tagline{font-size:16px;font-weight:300;font-style:italic;color:var(--ash);line-height:1.75;margin-bottom:44px;max-width:380px}
.hero-accent{width:40px;height:2px;background:var(--crimson);margin-bottom:44px}
.hero-meta{display:flex;flex-direction:column;gap:8px}
.hero-meta span{font-size:11px;font-weight:400;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke)}*/
.hero-right {
    position: absolute;
    /* height: 100%; */
    /* top: 28px; */
    right: -60px;
    bottom: -90px;
    overflow: hidden;
}
.hero-mark{position:relative;z-index:1;opacity:.05}
.hero-mark svg{width:400px;height:auto}
@media(max-width:1024px){.hero-inner{grid-template-columns:1fr}.hero-right{display:none}}
@media(max-width:768px){.hero-inner{padding:0 24px}.hero-left{padding:72px 0}}

/* ── SECTION STRUCTURE ── */
.sec-wrap{padding:var(--section-pad) 0}
.sec-wrap.alt{background:rgb(240, 240, 240)}
.sec{max-width:1400px;margin:0 auto;padding:0 var(--page-pad)}
@media(max-width:768px){.sec{padding:0 24px}.sec-wrap{padding:80px 0}}

.sec-eyebrow{font-size:10px;font-weight:400;letter-spacing:.16em;text-transform:uppercase;color:var(--smoke);display:block;margin-bottom:14px}
.sec-num{font-size:10px;letter-spacing:.16em;text-transform:uppercase;color:var(--smoke)}
.sec-title{font-size:clamp(32px,4vw,52px);font-weight:700;line-height:1.05;letter-spacing:-.02em;color:var(--ink);margin-bottom:28px}
.sec-subtitle{font-size:20px;font-weight:700;letter-spacing:-.01em;color:var(--ink);margin-bottom:20px}
.sec-rule{border:none;border-top:1px solid var(--bone);margin:32px 0 44px}
.sec-body{font-size:15px;font-weight:300;line-height:1.85;color:#555;max-width:500px}
.sec-body+.sec-body{margin-top:18px}

.two-col{display:grid;grid-template-columns:460px 1fr;gap:80px;align-items:end}
.two-col.center{align-items:center}
@media(max-width:1100px){.two-col{grid-template-columns:1fr;gap:52px}}

/* ── LOGO SECTION ── */
/* 4-cell usage grid */
.sec-wrap#logo {background:#fff}
.logo-usage-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:2px;margin-top:0}
.logo-cell{display:flex;flex-direction:column;align-items:center;justify-content:center;padding:40px 32px;position:relative;gap:16px}
.logo-cell-label{position:absolute;top:14px;left:16px;font-size:8px;font-weight:600;letter-spacing:.18em;text-transform:uppercase;color:inherit;}

.logo-cell.bg-white{background:#fff;border:1px solid var(--bone)}
.logo-cell.bg-cream{background:#F7F4F2;border:1px solid var(--bone)}
.logo-cell.bg-crimson{background:#EC2128}
.logo-cell.bg-black{background:#000}
.logo-cell.bg-navy{background:#141429}
.logo-cell.bg-charcoal{background:#333333}
@media(max-width:900px){.logo-usage-grid{grid-template-columns:repeat(2,1fr)}}

/* Variants row */
.variants-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;margin-top:48px}
.variant-cell{background:#fff;border:1px solid var(--bone);padding:48px 32px;display:flex;flex-direction:column;align-items:center;gap:0px;position:relative;width: 33.33%;}
.variant-name{font-size:10px;font-weight:500;letter-spacing:.12em;text-transform:uppercase;color:var(--smoke);text-align:center}
@media(max-width:900px){.variants-grid{grid-template-columns:repeat(2,1fr)}}

/* Clearspace */
.clearspace-wrap{background:#fff;border:1px solid var(--bone);padding:72px;display:flex;align-items:center;justify-content:center;margin-top:0}
.clearspace-inner{border:1.5px dashed var(--mist);padding:48px;position:relative;display:inline-block}
.cs-measure{position:absolute;font-size:9px;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--crimson);white-space:nowrap}
.cs-measure.top{top:-24px;left:50%;transform:translateX(-50%)}
.cs-measure.bottom{bottom:-24px;left:50%;transform:translateX(-50%)}
.cs-measure.left{left:-28px;top:50%;transform:translateY(-50%) rotate(-90deg)}
.cs-measure.right{right:-28px;top:50%;transform:translateY(-50%) rotate(90deg)}
.clearspace-inner svg{max-width:320px;display:block}

/* ── DO SECTION ── */
.do-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;margin-top:0}
.do-card{background:#fff;border:1px solid var(--bone);overflow:hidden;display:flex;flex-direction:column}
.do-card-img{flex:1;display:flex;align-items:center;justify-content:center;padding:48px 40px;min-height:150px;position:relative}
.do-card-img svg{width:100%;height:auto;max-height:72px;display:block}
.do-card-footer{padding:16px 20px;border-top:1px solid var(--bone);display:flex;align-items:center;gap:10px}
.do-badge{width:20px;height:20px;border-radius:50%;background:#DCFCE7;color:#15803D;display:flex;align-items:center;justify-content:center;font-size:10px;font-weight:700;flex-shrink:0}
.do-card-label{font-size:11px;font-weight:400;letter-spacing:.04em;color:var(--ash);line-height:1.4}
.do-card.span2{grid-column:span 2}
@media(max-width:900px){.do-grid{grid-template-columns:repeat(2,1fr)}}

/* ── DON'T SECTION ── */
.dont-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:2px;margin-top:0}
.dont-card{background:#fff;border:1px solid var(--bone);overflow:hidden;display:flex;flex-direction:column}
.dont-card-img{flex:1;display:flex;align-items:center;justify-content:center;padding:0;min-height:200px;position:relative;overflow:hidden}
.dont-card-img img{width:100%;height:100%;object-fit:cover;display:block}
.dont-card-footer{padding:16px 20px;border-top:1px solid var(--bone);display:flex;align-items:center;gap:10px;border-top:3px solid var(--crimson)}
.dont-badge{width:20px;height:20px;border-radius:50%;background:var(--crimson-pale);color:var(--crimson);display:flex;align-items:center;justify-content:center;font-size:10px;font-weight:700;flex-shrink:0}
.dont-card-label{font-size:11px;font-weight:400;letter-spacing:.04em;color:var(--ash);line-height:1.4}
@media(max-width:900px){.dont-grid{grid-template-columns:repeat(2,1fr)}}

/* ── COLOUR ── */
.swatch-row{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;margin-top:0}
.swatch-card{min-height:220px;display:flex;flex-direction:column;justify-content:flex-end;padding:24px;border:1px solid rgba(0,0,0,.06)}
.swatch-name{font-size:14px;font-weight:700;margin-bottom:6px}
.swatch-hex{font-size:12px;font-family:monospace;opacity:.9;margin-bottom:5px}
.swatch-specs{font-size:10px;opacity:.7;line-height:1.7}
.swatch-role{font-size:9px;font-weight:500;letter-spacing:.14em;text-transform:uppercase;opacity:.55;margin-bottom:16px}
.neutral-row{display:grid;grid-template-columns:repeat(10,1fr);gap:2px;margin-top:32px}
.neutral-cell{height:60px;position:relative}
.neutral-cell-label{position:absolute;bottom:-20px;left:50%;transform:translateX(-50%);font-size:8px;letter-spacing:.06em;text-transform:uppercase;color:var(--smoke);white-space:nowrap}
.crimson-row{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;margin-top:32px}
.crimson-tile{height:100px;display:flex;flex-direction:column;justify-content:flex-end;padding:16px}
.color-combo-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;margin-top:48px}
.color-combo{height:100px;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:4px}
@media(max-width:900px){.swatch-row{grid-template-columns:repeat(2,1fr)}.neutral-row{grid-template-columns:repeat(5,1fr)}.color-combo-grid{grid-template-columns:repeat(2,1fr)}}

/* ── TYPOGRAPHY ── */
.sec-wrap#typography {background:#fff}
.specimen-block{background:#fff;border:1px solid var(--bone);padding:52px}
.specimen-row{font-size:26px;line-height:1.5;color:var(--ink);word-break:break-all}
.specimen-divider{border:none;border-top:1px solid var(--bone);margin:24px 0}
.weight-row{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;margin-top:48px}
.weight-cell{background:#fff;border:1px solid var(--bone);padding:32px 28px}
.weight-label{font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:var(--smoke);margin-bottom:20px}
.hierarchy-list{border:1px solid var(--bone);background:#fff;overflow:hidden;margin-top:48px}
.hierarchy-item{padding:28px 44px;border-bottom:1px solid var(--bone);display:flex;align-items:baseline;gap:48px}
.hierarchy-item:last-child{border-bottom:none}
.hierarchy-meta{font-size:10px;letter-spacing:.08em;text-transform:uppercase;color:var(--smoke);white-space:nowrap;min-width:160px}
.type-combo-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;margin-top:48px}
.type-combo{height:120px;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:6px}
.highlight-examples{margin-top:48px;display:flex;flex-direction:column;gap:2px}
.highlight-ex{background:#fff;border:1px solid var(--bone);padding:40px 48px;font-size:22px;font-weight:300;line-height:1.65;color:var(--ink)}
.highlight-ex em{font-style:normal;font-weight:700;color:var(--crimson)}
@media(max-width:900px){.weight-row{grid-template-columns:repeat(2,1fr)}.type-combo-grid{grid-template-columns:repeat(2,1fr)}}

/* ── STORY ── */
.story-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;margin-top:64px}
.story-card{background:#fff;padding:48px 36px;border-top:3px solid var(--crimson)}
.story-card-num{font-size:80px;font-weight:700;color:var(--ink);opacity:.06;line-height:1;margin-bottom:20px;letter-spacing:-.03em}
.story-card-title{font-size:18px;font-weight:700;color:var(--ink);margin-bottom:16px;letter-spacing:-.01em}
.story-card-body{font-size:14px;font-weight:300;line-height:1.8;color:#666;margin-bottom:22px}
.story-card-quote{font-size:12px;font-style:italic;color:var(--smoke);border-left:2px solid var(--crimson);padding-left:14px;line-height:1.75}
@media(max-width:900px){.story-cards{grid-template-columns:1fr}}

/* ── IMAGERY ── */
.photo-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;margin-top:48px}
.photo-block{aspect-ratio:4/3;position:relative;overflow:hidden;display:flex;align-items:flex-end}
.photo-caption{position:relative;z-index:2;padding:20px;font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:#fff;opacity:.8}
.photo-rule-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;margin-top:2px}
.photo-rule-card{background:#fff;border:1px solid var(--bone);padding:28px;border-top:2px solid var(--ink)}
.photo-rule-card h4{font-size:12px;font-weight:700;letter-spacing:.06em;text-transform:uppercase;margin-bottom:12px;color:var(--ink)}
.photo-rule-card p{font-size:13px;font-weight:300;line-height:1.75;color:var(--ash)}
@media(max-width:900px){.photo-grid{grid-template-columns:1fr}.photo-rule-cards{grid-template-columns:1fr}}

/* ── APPLICATIONS ── */
.sec-wrap#applications {background:#fff; display: none;}
.app-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:2px;margin-top:48px}
@media(max-width:768px){.app-grid{grid-template-columns:1fr}}

/* ── DIVISIONS ── */
#divisions {background:#fff}
.division-section{min-height:100vh;display:flex;align-items:center;position:relative;overflow:hidden}
.division-inner{z-index:1;max-width:1400px;width:100%;padding:120px var(--page-pad);display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;margin:0 auto}
.division-logo svg{max-width:320px;height:auto}
.division-title{font-size:clamp(32px,3.5vw,52px);font-weight:700;letter-spacing:-.02em;color:var(--ink);margin-bottom:20px;line-height:1.05}
.division-sub{font-size:16px;font-weight:300;color:var(--ash);line-height:1.85;margin-bottom:44px;max-width:440px}
.division-pills{display:flex;flex-wrap:wrap;gap:8px}
.pill{display:inline-block;padding:9px 18px;border:1px solid var(--bone);font-size:10px;font-weight:500;letter-spacing:.1em;text-transform:uppercase;color:var(--ash);background:#fff}
.division-meta{margin-top:44px;display:flex;flex-direction:column;gap:10px}
.division-meta span{font-size:11px;letter-spacing:.08em;text-transform:uppercase;color:var(--smoke)}
.division-visual{display:flex;align-items:center;justify-content:center;height:480px;position:relative}
@media(max-width:1024px){.division-inner{grid-template-columns:1fr}.division-visual{display:none}}
@media(max-width:768px){.division-inner{padding:80px 24px}}

/* ── BACK COVER ── */
#back-cover{min-height:100vh;background:var(--crimson);display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden}
.back-cover-inner{text-align:center;position:relative;z-index:2;padding:80px 40px}
.back-cover-logo{place-items: center;}
.back-cover-logo svg{max-width:320px;height:auto}
.back-cover-tagline{font-size:20px;font-weight:300;font-style:italic;color:#fff;margin-bottom:48px;line-height:1.65}
.back-cover-rule{width:40px;height:1.5px;background:rgba(255,255,255,.35);margin:0 auto 44px}
.back-cover-contact span{display:block;font-size:12px;font-weight:300;letter-spacing:.08em;color:#fff;line-height:2}
.back-cover-version{margin-top:44px;font-size:9px;letter-spacing:.16em;text-transform:uppercase;color:#fff}
.back-pattern{position:absolute;inset:0;background-image:repeating-linear-gradient(45deg,rgba(0,0,0,.03) 0,rgba(0,0,0,.03) 1px,transparent 1px,transparent 24px);pointer-events:none}

/* ── ICON GRID ── */
.icon-grid{display:grid;grid-template-columns:repeat(8,1fr);gap:2px;margin-top:48px}
.icon-cell{background:#fff;border:1px solid var(--bone);aspect-ratio:1;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:10px;padding:16px}
.icon-cell span{font-size:8px;letter-spacing:.06em;text-transform:uppercase;color:var(--smoke)}
@media(max-width:768px){.icon-grid{grid-template-columns:repeat(4,1fr)}}

/* ── UTILITIES ── */
.tag{display:inline-block;padding:5px 12px;background:var(--bone);font-size:9px;font-weight:500;letter-spacing:.12em;text-transform:uppercase;color:var(--ash);border-radius:2px}
.tag.green{background:#DCFCE7;color:#15803D}
.tag.red{background:var(--crimson-pale);color:var(--crimson)}
.mt48{margin-top:48px}.mt64{margin-top:64px}.mt80{margin-top:80px}
.subdiv{margin-top:80px}
.subdiv-title{font-size:22px;font-weight:700;letter-spacing:-.01em;color:var(--ink);margin-bottom:20px}
.subdiv-rule{border:none;border-top:1px solid var(--bone);margin-bottom:40px}

/* ══════════════════════════════════════════
   MOBILE RESPONSIVE OVERRIDES
   Breakpoints: 768px (mobile), 480px (small)
   ══════════════════════════════════════════ */

@media(max-width:768px){

  /* ── Root variables ── */
  :root{
    --section-pad: 64px;
    --page-pad: 20px;
  }

  /* ── NAV ── */
  #topnav{ padding: 0 20px; }

  /* ── HERO ── */
  section#hero{ padding: 100px 20px 48px; }
  .hero-inner{ padding: 0; }
  .hero-left{ padding: 32px 0 0; }
  .hero-eyebrow{ font-size: 11px; margin-top: -40px; }
  .hero-tagline{ font-size: 16px; }
  .hero-meta{ font-size: 13px; }
  .hero-right{ display: none; }

  /* ── SECTION STRUCTURE ── */
  .sec{ padding: 0 20px; }
  .sec-wrap{ padding: 56px 0; }
  .sec-title{ font-size: clamp(26px, 7vw, 40px); }
  .sec-body{ max-width: 100%; }
  .two-col{ grid-template-columns: 1fr; gap: 36px; }

  /* ── LOGO SECTION ── */
  .logo-usage-grid{ grid-template-columns: 1fr 1fr; gap: 2px; }
  .logo-cell{ padding: 28px 16px; }
  .variants-grid{ grid-template-columns: 1fr; gap: 8px; margin-top: 32px; }
  .variant-cell{ width: 100%; padding: 32px 20px; }
  .clearspace-wrap{ padding: 32px 16px; }

  /* ── DO / DON'T grids ── */
  .do-grid{ grid-template-columns: 1fr 1fr; gap: 2px; }
  .do-card.span2{ grid-column: span 2; }
  .do-card-img{ padding: 28px 20px; min-height: 120px; }
  .dont-grid{ grid-template-columns: 1fr 1fr; gap: 2px; }
  .dont-card-img{ min-height: 140px; }

  /* ── COLOUR ── */
  .swatch-row{ grid-template-columns: 1fr 1fr; gap: 2px; }
  .swatch-card{ min-height: 160px; padding: 16px; }
  .neutral-row{ grid-template-columns: repeat(5,1fr); gap: 2px; margin-top: 48px; }
  .neutral-cell-label{ font-size: 7px; }
  .crimson-row{ grid-template-columns: repeat(2,1fr); }
  .color-combo-grid{ grid-template-columns: repeat(2,1fr); }

  /* ── TYPOGRAPHY ── */
  .specimen-block{ padding: 28px 20px; }
  .specimen-row{ font-size: 18px; word-break: break-word; }
  .weight-row{ grid-template-columns: repeat(2,1fr); }
  .weight-cell{ padding: 20px 16px; }
  .type-combo-grid{ grid-template-columns: repeat(2,1fr); }
  .hierarchy-list{ overflow-x: auto; }
  .hierarchy-item{ padding: 20px 20px; gap: 20px; flex-direction: column; align-items: flex-start; }
  .hierarchy-meta{ min-width: unset; white-space: normal; }
  .highlight-ex{ padding: 24px 20px; font-size: 16px; }

  /* ── STORY CARDS ── */
  .story-cards{ grid-template-columns: 1fr; gap: 2px; margin-top: 40px; }
  .story-card{ padding: 32px 24px; }

  /* ── IMAGERY ── */
  .photo-grid{ grid-template-columns: 1fr; }
  .photo-rule-cards{ grid-template-columns: 1fr; }

  /* ── DIVISIONS ── */
  .division-section{ min-height: auto; }
  .division-inner{ grid-template-columns: 1fr; gap: 40px; padding: 64px 20px; }
  .division-visual{ display: none; }
  .division-logo svg{ max-width: 240px; }
  .division-title{ font-size: clamp(26px,6vw,40px); }
  .division-sub{ max-width: 100%; font-size: 14px; margin-bottom: 28px; }
  .division-meta{ margin-top: 28px; }

  /* ── BACK COVER ── */
  .back-cover-inner{ padding: 60px 24px; }
  .back-cover-tagline{ font-size: 16px; }
  .back-cover-version{ font-size: 8px; letter-spacing: .1em; }

  /* ── ICON GRID ── */
  .icon-grid{ grid-template-columns: repeat(4,1fr); }

  /* ── SUBDIV ── */
  .subdiv{ margin-top: 52px; }
  .subdiv-title{ font-size: 18px; }

  /* ── MISC: correct logo usage table overflow ── */
  .do-grid, .dont-grid{ overflow-x: hidden; }
  img{ max-width: 100%; height: auto; }
}

/* ── Small phones (≤480px) ── */
@media(max-width:480px){

  #topnav{ padding: 0 16px; }
  section#hero{ padding: 88px 16px 40px; }
  .sec{ padding: 0 16px; }
  .sec-wrap{ padding: 48px 0; }
  .hero-eyebrow{
    margin-top: 0px !important;
  }
  .hero-meta
  {
    font-size: 12px !important;
  }
  .hero-left{
    padding: 0px !important;
  }
  .logo-usage-grid{ grid-template-columns: 1fr; }
  .do-grid{ grid-template-columns: 1fr; }
  .do-card.span2{ grid-column: span 1; }
  .dont-grid{ grid-template-columns: 1fr; }
  .swatch-row{ grid-template-columns: 1fr; }
  .crimson-row{ grid-template-columns: repeat(2,1fr); }
  .weight-row{ grid-template-columns: 1fr !important; }
  .neutral-row{ grid-template-columns: repeat(5,1fr); }
  .neutral-cell{ height: 40px; }
  .neutral-cell-label{ display: none; }
  .icon-grid{ grid-template-columns: repeat(3,1fr); }
  .pill{ font-size: 9px; padding: 7px 12px; }
  .back-cover-tagline{ font-size: 14px; }
  .specimen-row{ font-size: 15px; }
  .color-combo-grid{ grid-template-columns: repeat(2,1fr); }
  .type-combo-grid{ grid-template-columns: repeat(2,1fr); }
  .variants-grid{
    grid-template-columns: repeat(2, 1fr) !important;
  }
  /* Hero logo scales down gracefully */
  .hero-logo-wrap svg{ width: 100% !important; }
}
</style>
</head>
<body>

<!-- NAV -->
<nav id="topnav">
  <div class="nav-logo">
  <svg style="height:22px;width:auto;max-width:100%;display:block;" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M646.393 174.912H657.415V125.616H684.754V117.02H619.055V125.533H646.465L646.393 174.912Z" fill="#EC2128"/>
<path d="M588.878 140.205V117.02H599.869V174.912H588.878V148.998H542.715V174.912H531.879V117.02H542.798V140.247L588.878 140.205Z" fill="#EC2128"/>
<path d="M469.742 142.503V150.552H493.478V166.226H447.635V125.641H493.489V133.39L504.304 131.561V126.891C504.304 126.891 505.13 117.003 492.663 117.003H449.586C449.586 117.003 438.533 116.445 437.036 125.269C436.675 127.109 436.526 128.985 436.593 130.859V163.054C436.593 163.054 435.561 175.835 448.172 174.833H491.579C492.023 174.833 492.477 174.833 492.921 174.833C495.14 174.905 504.015 174.606 504.273 164.563V142.39L469.742 142.503Z" fill="#EC2128"/>
<path d="M408.686 116.996H397.695V174.929H408.686V116.996Z" fill="#EC2128"/>
<path d="M377.878 166.096V175.002H322.086V116.914H332.871V166.117L377.878 166.096Z" fill="#EC2128"/>
<path d="M210.455 116.974H200.764L184.788 161.258L168.059 116.953H160.824L143.837 161.258L127.768 116.974L116.488 116.953L138.863 174.969H147.078L164.158 131.728L180.402 174.969H188.442L210.455 116.974Z" fill="#EC2128"/>
<path d="M107.425 116.953V125.674H79.8903V174.969H69.25V125.591H41.7773V116.953H107.425Z" fill="#EC2128"/>
<path d="M317.4 173.781H193.68V174.835H317.4V173.781Z" fill="#EC2128"/>
<path d="M308.519 171.611H255.039V83.3008H256.081V170.557H308.519V171.611Z" fill="#EC2128"/>
<path d="M299.579 168.396H258.246V91.2031H259.288V167.342H299.579V168.396Z" fill="#EC2128"/>
<path d="M292.726 165.183H261.445V99.3867H262.498V164.139H292.726V165.183Z" fill="#EC2128"/>
<path d="M284.108 161.97H264.664V106.352H265.717V160.917H284.108V161.97Z" fill="#EC2128"/>
<path d="M220.578 161.97H240.022V106.352H238.969V160.917H220.578V161.97Z" fill="#EC2128"/>
<path d="M252.869 75.0039H251.816V174.308H252.869V75.0039Z" fill="#EC2128"/>
<path d="M249.644 171.611H200.664V170.557H248.592V83.3008H249.644V171.611Z" fill="#EC2128"/>
<path d="M246.441 168.396H209.68V167.342H245.388V91.2031H246.441V168.396Z" fill="#EC2128"/>
<path d="M243.234 165.183H214.977V164.139H242.181V99.3867H243.234V165.183Z" fill="#EC2128"/>
</svg></div>
  <ul class="nav-links" id="navLinks">
    <li><a href="#hero" data-section="hero">Cover</a></li>
    <li><a href="#brand-story" data-section="brand-story">Brand</a></li>
    <li><a href="#logo" data-section="logo">Logo</a></li>
    <li><a href="#color" data-section="color">Colour</a></li>
    <li><a href="#typography" data-section="typography">Type</a></li>
    <li><a href="#imagery" data-section="imagery">Imagery</a></li>
    <!-- <li><a href="#applications" data-section="applications">Applications</a></li> -->
    <li><a href="#divisions" data-section="divisions">Divisions</a></li>
  </ul>
  <div class="nav-burger" id="burger" onclick="toggleMenu()">
    <span></span><span></span><span></span>
  </div>
</nav>
<div class="mobile-menu" id="mobileMenu">
  <a href="#hero" onclick="toggleMenu()">Cover</a>
  <a href="#brand-story" onclick="toggleMenu()">Brand Story</a>
  <a href="#logo" onclick="toggleMenu()">Logo</a>
  <a href="#color" onclick="toggleMenu()">Colour</a>
  <a href="#typography" onclick="toggleMenu()">Typography</a>
  <a href="#imagery" onclick="toggleMenu()">Imagery</a>
  <a href="#applications" onclick="toggleMenu()">Applications</a>
  <a href="#divisions" onclick="toggleMenu()">Divisions</a>
</div>
<div id="progress"></div>

<!-- 01 HERO -->
<section id="hero">
  <div class="hero-inner">
    <div class="hero-left fade-in">
      <p class="hero-eyebrow">Brand Guidelines &nbsp;&middot;&nbsp; 2026</p>
      <div class="hero-logo-wrap">
      <svg style="height:auto;width:1200px;max-width:100%;display:block;" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M646.391 174.912H657.413V125.616H684.752V117.02H619.053V125.533H646.464L646.391 174.912Z" fill="white"/>
<path d="M588.876 140.205V117.02H599.867V174.912H588.876V148.998H542.713V174.912H531.877V117.02H542.796V140.247L588.876 140.205Z" fill="white"/>
<path d="M469.74 142.503V150.552H493.476V166.226H447.633V125.641H493.487V133.39L504.302 131.561V126.891C504.302 126.891 505.128 117.003 492.661 117.003H449.584C449.584 117.003 438.531 116.445 437.034 125.269C436.673 127.109 436.524 128.985 436.591 130.859V163.054C436.591 163.054 435.559 175.835 448.17 174.833H491.577C492.021 174.833 492.475 174.833 492.919 174.833C495.138 174.905 504.013 174.606 504.271 164.563V142.39L469.74 142.503Z" fill="white"/>
<path d="M408.684 116.996H397.693V174.929H408.684V116.996Z" fill="white"/>
<path d="M377.876 166.096V175.002H322.084V116.914H332.869V166.117L377.876 166.096Z" fill="white"/>
<path d="M210.453 116.974H200.762L184.786 161.258L168.057 116.953H160.822L143.835 161.258L127.766 116.974L116.486 116.953L138.861 174.969H147.076L164.156 131.728L180.4 174.969H188.44L210.453 116.974Z" fill="white"/>
<path d="M107.423 116.953V125.674H79.8883V174.969H69.2481V125.591H41.7754V116.953H107.423Z" fill="white"/>
<path d="M317.398 173.781H193.678V174.835H317.398V173.781Z" fill="white"/>
<path d="M308.515 171.611H255.035V83.3008H256.078V170.557H308.515V171.611Z" fill="white"/>
<path d="M299.577 168.396H258.244V91.2031H259.286V167.342H299.577V168.396Z" fill="white"/>
<path d="M292.724 165.183H261.443V99.3867H262.496V164.139H292.724V165.183Z" fill="white"/>
<path d="M284.108 161.97H264.664V106.352H265.717V160.917H284.108V161.97Z" fill="white"/>
<path d="M220.576 161.97H240.02V106.352H238.967V160.917H220.576V161.97Z" fill="white"/>
<path d="M252.869 75.0039H251.816V174.308H252.869V75.0039Z" fill="white"/>
<path d="M249.644 171.611H200.664V170.557H248.592V83.3008H249.644V171.611Z" fill="white"/>
<path d="M246.439 168.396H209.678V167.342H245.386V91.2031H246.439V168.396Z" fill="white"/>
<path d="M243.23 165.183H214.973V164.139H242.177V99.3867H243.23V165.183Z" fill="white"/>
</svg>
      </div>
      <p class="hero-tagline">&ldquo;Between Light and Shadow, We Create.&rdquo;</p>
      <div class="hero-accent"></div>
      <div class="hero-meta">
        <span>Liverpool, United Kingdom</span>
        <span>Architecture &middot; BIM &middot; Structural &middot; MEP &middot; Scan-to-BIM</span>
        <div style="color:#fff;margin-top:4px;text-transform: lowercase;">www.twilightengineering.co.uk</div>
      </div>
      
    </div>
    <div class="hero-right">
      <div class="hero-mark"><svg style="height:630px;width:auto;max-width:100%;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 258.98 250">
        <path style="fill:#ffffff;" d="M231.52,211.84H27.46a.93.93,0,1,1,0-1.85H231.52a.93.93,0,1,1,0,1.85Z"></path>
        <path style="fill:#ffffff;" d="M218.4,205.6H130.13V70.52a.93.93,0,0,1,1.85,0V203.75H218.4a.93.93,0,1,1,0,1.85Z"></path>
        <path style="fill:#ffffff;" d="M205,199.1H136.76V95.2a.93.93,0,0,1,1.85,0V197.25H205a.93.93,0,0,1,0,1.85Z"></path>
        <path style="fill:#ffffff;" d="M195,192.82H143.35v-71.1a.92.92,0,1,1,1.84,0V191H195a.92.92,0,1,1,0,1.84Z"></path>
        <path style="fill:#ffffff;" d="M124.2,211.84a.92.92,0,0,1-.93-.92V39.08a.93.93,0,0,1,1.85,0V210.92A.92.92,0,0,1,124.2,211.84Z"></path>
        <path style="fill:#ffffff;" d="M118.62,205.6H37.78a.93.93,0,0,1,0-1.85h79V67.6a.93.93,0,1,1,1.85,0Z"></path>
        <path style="fill:#ffffff;" d="M112.51,199.1H51.81a.93.93,0,0,1,0-1.85h58.85V91.7a.93.93,0,1,1,1.85,0Z"></path>
        <path style="fill:#ffffff;" d="M106,192.82H59.34a.92.92,0,0,1,0-1.84h44.82V116.46a.92.92,0,1,1,1.84,0Z"></path></svg></div>
    </div>
  </div>
</section>

<!-- 02 BRAND STORY -->
<div class="sec-wrap alt" id="brand-story">
<div class="sec fade-in">
  <div class="two-col">
    <div>
      <span class="sec-eyebrow">02 &mdash; Brand Identity</span>
      <h2 class="sec-title">Our Brand Story</h2>
      <hr class="sec-rule">
      <p class="sec-body">Twilight Engineering Solutions LTD sits at the intersection of precision engineering and visionary architecture. Our brand reflects the duality of our name &mdash; the moment between certainty and possibility, light and shadow, structure and space.</p>
      <p class="sec-body">Every element of our visual identity communicates authority, precision, and forward-thinking design &mdash; from the weight of our typography to the restraint of our colour palette.</p>
    </div>
    <div style="display:flex;flex-direction:column;gap:2px;    height: 100%;
    justify-content: end;">
      <div style="background:#fff;padding:32px;border-left:3px solid var(--crimson)">
        <p style="font-size:10px;font-weight:500;letter-spacing:.12em;text-transform:uppercase;color:var(--smoke);margin-bottom:10px">Mission</p>
        <p style="font-size:14px;font-weight:300;line-height:1.85;color:#555">To deliver precision-engineered solutions that elevate the built environment through innovation, rigour, and craft.</p>
      </div>
      <div style="background:#fff;padding:32px;border-left:3px solid var(--crimson)">
        <p style="font-size:10px;font-weight:500;letter-spacing:.12em;text-transform:uppercase;color:var(--smoke);margin-bottom:10px">Vision</p>
        <p style="font-size:14px;font-weight:300;line-height:1.85;color:#555">To be recognised as the north of England&rsquo;s most trusted multidisciplinary design and engineering practice.</p>
      </div>
    </div>
  </div>
  <div class="story-cards fade-in">
    <div class="story-card">
      <div class="story-card-num">01</div>
      <h3 class="story-card-title">Authoritative</h3>
      <p class="story-card-body">We speak with confidence earned through technical mastery. Our work is backed by expertise in architecture, BIM, structural, and MEP engineering &mdash; delivered with clarity and without ambiguity.</p>
      <p class="story-card-quote">&ldquo;We don&rsquo;t guess. We calculate.&rdquo;</p>
    </div>
    <div class="story-card">
      <div class="story-card-num">02</div>
      <h3 class="story-card-title">Precise</h3>
      <p class="story-card-body">Every detail matters. From the 1px divider to the structural calculation, precision is our standard. Our brand identity reflects this through clean geometry, disciplined spacing, and measured restraint.</p>
      <p class="story-card-quote">&ldquo;Accuracy is not a feature. It&rsquo;s the baseline.&rdquo;</p>
    </div>
    <div class="story-card">
      <div class="story-card-num">03</div>
      <h3 class="story-card-title">Visionary</h3>
      <p class="story-card-body">We see what others don&rsquo;t yet see. Twilight exists in the transformative moment &mdash; the space between what is and what could be. We bring that perspective to every project.</p>
      <p class="story-card-quote">&ldquo;Between light and shadow, we create.&rdquo;</p>
    </div>
  </div>
</div>
</div>

<!-- 03 LOGO -->
<div class="sec-wrap" id="logo">
<div class="sec fade-in">
  <span class="sec-eyebrow">03 &mdash; Logo</span>
  <div class="two-col">
    <div>
      <h2 class="sec-title">The Twilight Logo</h2>
      <hr class="sec-rule">
      <p class="sec-body">The Twilight mark combines a geometric BIM-inspired icon &mdash; a structural representation of stacked architectural layers &mdash; with the TWILIGHT wordmark in Helvetica Neue Bold. Together they form a singular, indivisible identity.</p>
      <p class="sec-body">The icon and wordmark must always appear together in brand applications. Neither element may be used in isolation except the icon at small sizes (below 120px) or for favicon use.</p>
      <div style="margin-top:36px;display:flex;flex-direction:column;gap:12px">
        <div style="display:flex;align-items:center;gap:12px"><span class="tag green">DO</span><span style="font-size:13px;font-weight:300;color:var(--ash)">Use the full logo wherever possible</span></div>
        <div style="display:flex;align-items:center;gap:12px"><span class="tag green">DO</span><span style="font-size:13px;font-weight:300;color:var(--ash)">Use on approved backgrounds only</span></div>
        <div style="display:flex;align-items:center;gap:12px"><span class="tag green">DO</span><span style="font-size:13px;font-weight:300;color:var(--ash)">Maintain the icon-to-wordmark ratio</span></div>
        <div style="display:flex;align-items:center;gap:12px"><span class="tag red">DON&rsquo;T</span><span style="font-size:13px;font-weight:300;color:var(--ash)">Separate or rearrange logo elements</span></div>
        <div style="display:flex;align-items:center;gap:12px"><span class="tag red">DON&rsquo;T</span><span style="font-size:13px;font-weight:300;color:var(--ash)">Re-draw, alter, or recreate the mark</span></div>
      </div>
    </div>
    <div>
      
<div class="logo-usage-grid mt48">
  <div class="logo-cell bg-white">
    <span class="logo-cell-label" style="color:var(--smoke)">On White</span>
    <svg style="height:100px;width:auto;max-width:100%;display:block;" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="726.53" height="250" fill="white"/>
<path d="M646.393 174.908H657.415V125.612H684.754V117.016H619.055V125.529H646.465L646.393 174.908Z" fill="black"/>
<path d="M588.878 140.201V117.016H599.869V174.908H588.878V148.994H542.715V174.908H531.879V117.016H542.798V140.243L588.878 140.201Z" fill="black"/>
<path d="M469.742 142.499V150.548H493.478V166.222H447.635V125.637H493.489V133.386L504.304 131.557V126.887C504.304 126.887 505.13 116.999 492.663 116.999H449.586C449.586 116.999 438.533 116.441 437.036 125.265C436.675 127.105 436.526 128.981 436.593 130.855V163.05C436.593 163.05 435.561 175.831 448.172 174.829H491.579C492.023 174.829 492.477 174.829 492.921 174.829C495.14 174.902 504.015 174.602 504.273 164.559V142.386L469.742 142.499Z" fill="black"/>
<path d="M408.686 116.992H397.695V174.926H408.686V116.992Z" fill="black"/>
<path d="M377.878 166.092V174.998H322.086V116.91H332.871V166.113L377.878 166.092Z" fill="black"/>
<path d="M210.455 116.97H200.764L184.788 161.254L168.059 116.949H160.824L143.837 161.254L127.768 116.97L116.488 116.949L138.863 174.965H147.078L164.158 131.724L180.402 174.965H188.442L210.455 116.97Z" fill="black"/>
<path d="M107.425 116.949V125.67H79.8903V174.965H69.25V125.587H41.7773V116.949H107.425Z" fill="black"/>
<path d="M317.4 173.777H193.68V174.831H317.4V173.777Z" fill="black"/>
<path d="M308.517 171.607H255.037V83.2969H256.079V170.553H308.517V171.607Z" fill="black"/>
<path d="M299.579 168.392H258.246V91.1992H259.288V167.338H299.579V168.392Z" fill="black"/>
<path d="M292.726 165.179H261.445V99.3828H262.498V164.136H292.726V165.179Z" fill="black"/>
<path d="M284.109 161.967H264.666V106.348H265.719V160.913H284.109V161.967Z" fill="black"/>
<path d="M220.578 161.967H240.022V106.348H238.969V160.913H220.578V161.967Z" fill="black"/>
<path d="M252.871 75H251.818V174.304H252.871V75Z" fill="black"/>
<path d="M249.646 171.607H200.666V170.553H248.594V83.2969H249.646V171.607Z" fill="black"/>
<path d="M246.441 168.392H209.68V167.338H245.388V91.1992H246.441V168.392Z" fill="black"/>
<path d="M243.232 165.179H214.975V164.136H242.179V99.3828H243.232V165.179Z" fill="black"/>
</svg>
  </div>
  <div class="logo-cell bg-cream">
    <span class="logo-cell-label" style="color:var(--smoke)">On Off-White</span>
    <svg style="height:100px;width:auto;max-width:100%;display:block;" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="726.53" height="250" fill="#F7F4F2"/>
<path d="M646.393 174.908H657.415V125.612H684.754V117.016H619.055V125.529H646.465L646.393 174.908Z" fill="black"/>
<path d="M588.878 140.201V117.016H599.869V174.908H588.878V148.994H542.715V174.908H531.879V117.016H542.798V140.243L588.878 140.201Z" fill="black"/>
<path d="M469.742 142.499V150.548H493.478V166.222H447.635V125.637H493.489V133.386L504.304 131.557V126.887C504.304 126.887 505.13 116.999 492.663 116.999H449.586C449.586 116.999 438.533 116.441 437.036 125.265C436.675 127.105 436.526 128.981 436.593 130.855V163.05C436.593 163.05 435.561 175.831 448.172 174.829H491.579C492.023 174.829 492.477 174.829 492.921 174.829C495.14 174.902 504.015 174.602 504.273 164.559V142.386L469.742 142.499Z" fill="black"/>
<path d="M408.686 116.992H397.695V174.926H408.686V116.992Z" fill="black"/>
<path d="M377.878 166.092V174.998H322.086V116.91H332.871V166.113L377.878 166.092Z" fill="black"/>
<path d="M210.455 116.97H200.764L184.788 161.254L168.059 116.949H160.824L143.837 161.254L127.768 116.97L116.488 116.949L138.863 174.965H147.078L164.158 131.724L180.402 174.965H188.442L210.455 116.97Z" fill="black"/>
<path d="M107.425 116.949V125.67H79.8903V174.965H69.25V125.587H41.7773V116.949H107.425Z" fill="black"/>
<path d="M317.4 173.777H193.68V174.831H317.4V173.777Z" fill="black"/>
<path d="M308.517 171.607H255.037V83.2969H256.079V170.553H308.517V171.607Z" fill="black"/>
<path d="M299.579 168.392H258.246V91.1992H259.288V167.338H299.579V168.392Z" fill="black"/>
<path d="M292.726 165.179H261.445V99.3828H262.498V164.136H292.726V165.179Z" fill="black"/>
<path d="M284.109 161.967H264.666V106.348H265.719V160.913H284.109V161.967Z" fill="black"/>
<path d="M220.578 161.967H240.022V106.348H238.969V160.913H220.578V161.967Z" fill="black"/>
<path d="M252.871 75H251.818V174.304H252.871V75Z" fill="black"/>
<path d="M249.646 171.607H200.666V170.553H248.594V83.2969H249.646V171.607Z" fill="black"/>
<path d="M246.441 168.392H209.68V167.338H245.388V91.1992H246.441V168.392Z" fill="black"/>
<path d="M243.232 165.179H214.975V164.136H242.179V99.3828H243.232V165.179Z" fill="black"/>
</svg>
  </div>
  <div class="logo-cell bg-crimson">
    <span class="logo-cell-label" style="color:rgba(255,255,255,.4)">On Crimson</span>
    <svg style="height:100px;width:auto;max-width:100%;display:block;" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="726.53" height="250" fill="#EC2128"/>
<path d="M628.55 171.85H638.92V125.56H664.63V117.48H602.85V125.48H628.63L628.55 171.85Z" fill="white"/>
<path d="M574.551 139.329V117.559H584.891V171.929H574.551V147.589H531.151V171.929H520.961V117.559H531.221V139.369L574.551 139.329Z" fill="white"/>
<path d="M463.069 141.43V149H485.409V163.7H442.289V125.59H485.409V132.87L495.569 131.15V126.76C495.569 126.76 496.349 117.48 484.629 117.48H444.129C444.129 117.48 431.329 117.38 431.909 130.54V160.76C431.909 160.76 430.909 172.76 442.789 171.81H483.609H484.869C486.949 171.89 495.299 171.6 495.579 162.17V141.31L463.069 141.43Z" fill="white"/>
<path d="M405.85 117.48H395.52V171.89H405.85V117.48Z" fill="white"/>
<path d="M377.091 163.631V172.001H324.631V117.441H334.781V163.651L377.091 163.631Z" fill="white"/>
<path d="M220.409 117.428H211.289L196.269 159.008L180.539 117.398H173.739L157.769 159.008L142.659 117.428L132.039 117.398L153.089 171.888H160.809L176.869 131.278L192.149 171.888H199.699L220.409 117.428Z" fill="white"/>
<path d="M123.63 117.398V125.588H97.7402V171.888H87.7402V125.508H61.9102V117.398H123.63Z" fill="white"/>
<path d="M321.068 172H204.738" stroke="white" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M312.7 169.329H262.91V87.5586" stroke="white" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M265.789 94.5195V166.52H304.159" stroke="white" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M268.66 102.531V163.831H297.57" stroke="white" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M289.751 161.201H271.961V109.461" stroke="white" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M259.891 78.7383V171.998" stroke="white" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M211.52 169.331H257.07V86.8906" stroke="white" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M254.48 94.5195V166.52H220.41" stroke="white" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M225.59 163.831H251.66V102.531" stroke="white" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M232.699 161.191H248.919V109.191" stroke="white" stroke-miterlimit="10" stroke-linecap="round"/>
</svg>
  </div>
  <div class="logo-cell bg-black">
    <span class="logo-cell-label" style="color:rgba(255,255,255,.3)">On Black</span>
    <svg style="height:100px;width:auto;max-width:100%;display:block;" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="726.53" height="250" fill="black"/>
<path d="M646.393 174.908H657.415V125.612H684.754V117.016H619.055V125.529H646.465L646.393 174.908Z" fill="white"/>
<path d="M588.878 140.201V117.016H599.869V174.908H588.878V148.994H542.715V174.908H531.879V117.016H542.798V140.243L588.878 140.201Z" fill="white"/>
<path d="M469.742 142.499V150.548H493.478V166.222H447.635V125.637H493.489V133.386L504.304 131.557V126.887C504.304 126.887 505.13 116.999 492.663 116.999H449.586C449.586 116.999 438.533 116.441 437.036 125.265C436.675 127.105 436.526 128.981 436.593 130.855V163.05C436.593 163.05 435.561 175.831 448.172 174.829H491.579C492.023 174.829 492.477 174.829 492.921 174.829C495.14 174.902 504.015 174.602 504.273 164.559V142.386L469.742 142.499Z" fill="white"/>
<path d="M408.686 116.992H397.695V174.926H408.686V116.992Z" fill="white"/>
<path d="M377.878 166.092V174.998H322.086V116.91H332.871V166.113L377.878 166.092Z" fill="white"/>
<path d="M210.455 116.97H200.764L184.788 161.254L168.059 116.949H160.824L143.837 161.254L127.768 116.97L116.488 116.949L138.863 174.965H147.078L164.158 131.724L180.402 174.965H188.442L210.455 116.97Z" fill="white"/>
<path d="M107.425 116.949V125.67H79.8903V174.965H69.25V125.587H41.7773V116.949H107.425Z" fill="white"/>
<path d="M317.4 173.777H193.68V174.831H317.4V173.777Z" fill="white"/>
<path d="M308.517 171.607H255.037V83.2969H256.079V170.553H308.517V171.607Z" fill="white"/>
<path d="M299.579 168.392H258.246V91.1992H259.288V167.338H299.579V168.392Z" fill="white"/>
<path d="M292.726 165.179H261.445V99.3828H262.498V164.136H292.726V165.179Z" fill="white"/>
<path d="M284.109 161.967H264.666V106.348H265.719V160.913H284.109V161.967Z" fill="white"/>
<path d="M220.578 161.967H240.022V106.348H238.969V160.913H220.578V161.967Z" fill="white"/>
<path d="M252.871 75H251.818V174.304H252.871V75Z" fill="white"/>
<path d="M249.646 171.607H200.666V170.553H248.594V83.2969H249.646V171.607Z" fill="white"/>
<path d="M246.441 168.392H209.68V167.338H245.388V91.1992H246.441V168.392Z" fill="white"/>
<path d="M243.232 165.179H214.975V164.136H242.179V99.3828H243.232V165.179Z" fill="white"/>
</svg>
  </div>
  <div class="logo-cell bg-white">
    <span class="logo-cell-label" style="color:var(--smoke)">On White</span>
    <svg style="height:100px;width:auto;max-width:100%;display:block;" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M646.393 174.912H657.415V125.616H684.754V117.02H619.055V125.533H646.465L646.393 174.912Z" fill="#EC2128"/>
<path d="M588.878 140.205V117.02H599.869V174.912H588.878V148.998H542.715V174.912H531.879V117.02H542.798V140.247L588.878 140.205Z" fill="#EC2128"/>
<path d="M469.742 142.503V150.552H493.478V166.226H447.635V125.641H493.489V133.39L504.304 131.561V126.891C504.304 126.891 505.13 117.003 492.663 117.003H449.586C449.586 117.003 438.533 116.445 437.036 125.269C436.675 127.109 436.526 128.985 436.593 130.859V163.054C436.593 163.054 435.561 175.835 448.172 174.833H491.579C492.023 174.833 492.477 174.833 492.921 174.833C495.14 174.905 504.015 174.606 504.273 164.563V142.39L469.742 142.503Z" fill="#EC2128"/>
<path d="M408.686 116.996H397.695V174.929H408.686V116.996Z" fill="#EC2128"/>
<path d="M377.878 166.096V175.002H322.086V116.914H332.871V166.117L377.878 166.096Z" fill="#EC2128"/>
<path d="M210.455 116.974H200.764L184.788 161.258L168.059 116.953H160.824L143.837 161.258L127.768 116.974L116.488 116.953L138.863 174.969H147.078L164.158 131.728L180.402 174.969H188.442L210.455 116.974Z" fill="#EC2128"/>
<path d="M107.425 116.953V125.674H79.8903V174.969H69.25V125.591H41.7773V116.953H107.425Z" fill="#EC2128"/>
<path d="M317.4 173.781H193.68V174.835H317.4V173.781Z" fill="#EC2128"/>
<path d="M308.519 171.611H255.039V83.3008H256.081V170.557H308.519V171.611Z" fill="#EC2128"/>
<path d="M299.579 168.396H258.246V91.2031H259.288V167.342H299.579V168.396Z" fill="#EC2128"/>
<path d="M292.726 165.183H261.445V99.3867H262.498V164.139H292.726V165.183Z" fill="#EC2128"/>
<path d="M284.108 161.97H264.664V106.352H265.717V160.917H284.108V161.97Z" fill="#EC2128"/>
<path d="M220.578 161.97H240.022V106.352H238.969V160.917H220.578V161.97Z" fill="#EC2128"/>
<path d="M252.869 75.0039H251.816V174.308H252.869V75.0039Z" fill="#EC2128"/>
<path d="M249.644 171.611H200.664V170.557H248.592V83.3008H249.644V171.611Z" fill="#EC2128"/>
<path d="M246.441 168.396H209.68V167.342H245.388V91.2031H246.441V168.396Z" fill="#EC2128"/>
<path d="M243.234 165.183H214.977V164.139H242.181V99.3867H243.234V165.183Z" fill="#EC2128"/>
</svg>
  </div>
  <div class="logo-cell bg-black">
    <span class="logo-cell-label" style="color:rgba(255,255,255,.3)">On Black</span>
    <svg style="height:100px;width:auto;max-width:100%;display:block;" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="726.53" height="250" fill="black"/>
<path d="M664.13 117.98V125.061H638.42V171.351H629.051L629.13 125.481L629.131 124.98H603.35V117.98H664.13Z" fill="#EC2128" stroke="#EC2128"/>
<path d="M530.721 118.059V139.869L531.222 139.868L574.552 139.828H575.051V118.059H584.391V171.429H575.051V147.089H530.651V171.429H521.461V118.059H530.721Z" fill="#EC2128" stroke="#EC2128"/>
<path d="M432.409 130.519C432.268 127.313 432.941 124.953 434.001 123.208C435.062 121.461 436.532 120.297 438.032 119.52C439.536 118.741 441.063 118.355 442.22 118.164C442.797 118.069 443.278 118.023 443.613 118.001C443.781 117.99 443.911 117.985 443.999 117.982C444.042 117.981 444.075 117.981 444.097 117.98H484.63C490.331 117.981 492.884 120.221 494.056 122.36C494.652 123.451 494.907 124.546 495.012 125.373C495.064 125.785 495.079 126.128 495.08 126.365C495.081 126.483 495.079 126.575 495.076 126.636C495.075 126.666 495.073 126.688 495.072 126.702C495.072 126.709 495.071 126.714 495.071 126.717V126.719L495.069 126.739V130.728L485.909 132.278V125.091H441.789V164.2H485.909V148.501H463.569V141.929L495.079 141.812V162.171C495.009 164.445 494.456 166.137 493.658 167.399C492.858 168.665 491.794 169.527 490.668 170.113C488.4 171.295 485.897 171.349 484.889 171.311H442.77L442.75 171.312C439.865 171.543 437.812 170.985 436.344 170.062C434.873 169.137 433.942 167.816 433.354 166.444C432.764 165.069 432.527 163.656 432.438 162.579C432.393 162.042 432.386 161.593 432.39 161.28C432.392 161.124 432.396 161.002 432.4 160.92C432.402 160.879 432.405 160.848 432.406 160.828C432.407 160.818 432.407 160.811 432.407 160.807C432.407 160.805 432.407 160.804 432.407 160.803L432.408 160.802L432.407 160.801L432.409 160.781V130.519Z" fill="#EC2128" stroke="#EC2128"/>
<path d="M405.35 117.98V171.391H396.02V117.98H405.35Z" fill="#EC2128" stroke="#EC2128"/>
<path d="M334.281 117.941V164.151H334.781L376.591 164.132V171.501H325.131V117.941H334.281Z" fill="#EC2128" stroke="#EC2128"/>
<path d="M180.193 117.898L195.802 159.186L196.279 160.45L196.739 159.179L211.641 117.929H219.684L199.354 171.389H192.495L177.337 131.103L176.881 129.89L176.404 131.095L160.469 171.389H153.433L132.77 117.9L142.309 117.927L157.299 159.18L157.756 160.438L158.236 159.188L174.083 117.898H180.193Z" fill="#EC2128" stroke="#EC2128"/>
<path d="M123.13 117.898V125.089H97.2402V171.389H88.2402V125.009H62.4102V117.898H123.13Z" fill="#EC2128" stroke="#EC2128"/>
<path d="M321.07 172H204.74" stroke="#EC2128" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M312.7 169.329H262.91V87.5586" stroke="#EC2128" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M265.789 94.5195V166.52H304.159" stroke="#EC2128" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M268.66 102.531V163.831H297.57" stroke="#EC2128" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M289.751 161.201H271.961V109.461" stroke="#EC2128" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M259.891 78.7383V171.998" stroke="#EC2128" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M211.52 169.331H257.07V86.8906" stroke="#EC2128" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M254.48 94.5195V166.52H220.41" stroke="#EC2128" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M225.59 163.831H251.66V102.531" stroke="#EC2128" stroke-miterlimit="10" stroke-linecap="round"/>
<path d="M232.699 161.191H248.919V109.191" stroke="#EC2128" stroke-miterlimit="10" stroke-linecap="round"/>
</svg>
  </div>
</div>

    </div>
  </div>

  <!-- Variants -->
  <!-- <div class="subdiv fade-in">
    <h3 class="subdiv-title">All Approved Variants</h3>
    <hr class="subdiv-rule">
    
  <div class="variants-grid" style="display: flex;width: 100%;">
    <div class="variant-cell">
      <svg style="height:150px;width:auto;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 726.53 250"><line style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" x1="320.97" y1="172" x2="210.61" y2="172"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="313.88 168.62 266.64 168.62 266.64 96.07"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="270.22 109.42 270.22 165.11 306.62 165.11"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="273.79 123.76 273.79 161.72 301.22 161.72"/><line style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" x1="262.93" y1="79.07" x2="262.93" y2="172"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="216.2 168.62 259.41 168.62 259.41 94.49"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="256.11 107.52 256.11 165.11 223.78 165.11"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="227.86 161.72 252.59 161.72 252.59 120.92"/><polygon style="fill:#ec2128;" points="628.55 171.85 638.92 171.85 638.92 125.56 664.63 125.56 664.63 117.48 602.85 117.48 602.85 125.48 628.63 125.48 628.55 171.85"/><polygon style="fill:#ec2128;" points="574.55 139.33 574.55 117.56 584.89 117.56 584.89 171.93 574.55 171.93 574.55 147.59 531.15 147.59 531.15 171.93 520.96 171.93 520.96 117.56 531.22 117.56 531.22 139.37 574.55 139.33"/><path style="fill:#ec2128;" d="M463.07,141.43V149h22.34V163.7H442.29V125.59h43.12v7.28l10.16-1.72v-4.39s.78-9.28-10.94-9.28h-40.5s-12.8-.1-12.22,13.06v30.22s-1,12,10.88,11.05h40.82l1.26,0c2.08.08,10.43-.21,10.71-9.64V141.31Z"/><rect style="fill:#ec2128;" x="395.52" y="117.48" width="10.33" height="54.41"/><polygon style="fill:#ec2128;" points="377.09 163.63 377.09 172 324.63 172 324.63 117.44 334.78 117.44 334.78 163.65 377.09 163.63"/><polygon style="fill:#ec2128;" points="220.41 117.43 211.29 117.43 196.27 159.01 180.54 117.4 173.74 117.4 157.77 159.01 142.66 117.43 132.04 117.4 153.09 171.89 160.81 171.89 176.87 131.28 192.15 171.89 199.7 171.89 220.41 117.43"/><polygon style="fill:#ec2128;" points="123.63 117.4 123.63 125.59 97.74 125.59 97.74 171.89 87.74 171.89 87.74 125.51 61.91 125.51 61.91 117.4 123.63 117.4"/></svg>
      <span class="variant-name">Primary Logo</span>
    </div>
    <div class="variant-cell">
      <svg style="height:150px;width:auto;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 726.53 250"><line style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;" x1="320.97" y1="172" x2="210.61" y2="172"/><polyline style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;" points="313.88 168.62 266.64 168.62 266.64 96.07"/><polyline style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;" points="270.22 109.42 270.22 165.11 306.62 165.11"/><polyline style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;" points="273.79 123.76 273.79 161.72 301.22 161.72"/><line style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;" x1="262.93" y1="79.07" x2="262.93" y2="172"/><polyline style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;" points="216.2 168.62 259.41 168.62 259.41 94.49"/><polyline style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;" points="256.11 107.52 256.11 165.11 223.78 165.11"/><polyline style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;" points="227.86 161.72 252.59 161.72 252.59 120.92"/><polygon points="628.55 171.85 638.92 171.85 638.92 125.56 664.63 125.56 664.63 117.48 602.85 117.48 602.85 125.48 628.63 125.48 628.55 171.85"/><polygon points="574.55 139.33 574.55 117.56 584.89 117.56 584.89 171.93 574.55 171.93 574.55 147.59 531.15 147.59 531.15 171.93 520.96 171.93 520.96 117.56 531.22 117.56 531.22 139.37 574.55 139.33"/><path d="M463.07,141.43V149h22.34V163.7H442.29V125.59h43.12v7.28l10.16-1.72v-4.39s.78-9.28-10.94-9.28h-40.5s-12.8-.1-12.22,13.06v30.22s-1,12,10.88,11.05h40.82l1.26,0c2.08.08,10.43-.21,10.71-9.64V141.31Z"/><rect x="395.52" y="117.48" width="10.33" height="54.41"/><polygon points="377.09 163.63 377.09 172 324.63 172 324.63 117.44 334.78 117.44 334.78 163.65 377.09 163.63"/><polygon points="220.41 117.43 211.29 117.43 196.27 159.01 180.54 117.4 173.74 117.4 157.77 159.01 142.66 117.43 132.04 117.4 153.09 171.89 160.81 171.89 176.87 131.28 192.15 171.89 199.7 171.89 220.41 117.43"/><polygon points="123.63 117.4 123.63 125.59 97.74 125.59 97.74 171.89 87.74 171.89 87.74 125.51 61.91 125.51 61.91 117.4 123.63 117.4"/></svg>
      <span class="variant-name">Black Logo</span>
    </div>
    <div class="variant-cell" style="background:#1A1A1A">
      <svg style="height:150px;width:auto;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 726.53 250"><line style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" x1="320.97" y1="172" x2="210.61" y2="172"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="313.88 168.62 266.64 168.62 266.64 96.07"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="270.22 109.42 270.22 165.11 306.62 165.11"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="273.79 123.76 273.79 161.72 301.22 161.72"/><line style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" x1="262.93" y1="79.07" x2="262.93" y2="172"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="216.2 168.62 259.41 168.62 259.41 94.49"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="256.11 107.52 256.11 165.11 223.78 165.11"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="227.86 161.72 252.59 161.72 252.59 120.92"/><polygon style="fill:#fff;" points="628.55 171.85 638.92 171.85 638.92 125.56 664.63 125.56 664.63 117.48 602.85 117.48 602.85 125.48 628.63 125.48 628.55 171.85"/><polygon style="fill:#fff;" points="574.55 139.33 574.55 117.56 584.89 117.56 584.89 171.93 574.55 171.93 574.55 147.59 531.15 147.59 531.15 171.93 520.96 171.93 520.96 117.56 531.22 117.56 531.22 139.37 574.55 139.33"/><path style="fill:#fff;" d="M463.07,141.43V149h22.34V163.7H442.29V125.59h43.12v7.28l10.16-1.72v-4.39s.78-9.28-10.94-9.28h-40.5s-12.8-.1-12.22,13.06v30.22s-1,12,10.88,11.05h40.82l1.26,0c2.08.08,10.43-.21,10.71-9.64V141.31Z"/><rect style="fill:#fff;" x="395.52" y="117.48" width="10.33" height="54.41"/><polygon style="fill:#fff;" points="377.09 163.63 377.09 172 324.63 172 324.63 117.44 334.78 117.44 334.78 163.65 377.09 163.63"/><polygon style="fill:#fff;" points="220.41 117.43 211.29 117.43 196.27 159.01 180.54 117.4 173.74 117.4 157.77 159.01 142.66 117.43 132.04 117.4 153.09 171.89 160.81 171.89 176.87 131.28 192.15 171.89 199.7 171.89 220.41 117.43"/><polygon style="fill:#fff;" points="123.63 117.4 123.63 125.59 97.74 125.59 97.74 171.89 87.74 171.89 87.74 125.51 61.91 125.51 61.91 117.4 123.63 117.4"/></svg>
      <span class="variant-name" style="color:rgba(255,255,255,.4)">White Logo</span>
    </div>
  </div>

  </div> -->

  <style>
    /* Legacy color-variant block (kept as requested) */
    .variant-card {
      padding: 40px;
      border-radius: 8px;
      display: flex;
      flex-direction: column;
      align-items: center;
      border: 1px solid #eee;
      background-color: transparent;
      transition: transform 0.2s ease;
    }

    .variant-card:hover {
      transform: translateY(-2px);
    }

    .variant-card.dark-mode {
      background-color: #1a1a1a;
      border: none;
    }

    .variant-card svg {
      height: auto;
      width: 100%;
      display: block;
      margin: 0 auto;
    }

    .variant-label {
      font-size: 12px;
      margin-top: 15px;
      font-weight: 600;
      color: #666;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      text-align: center;
    }

    .variant-card.dark-mode .variant-label {
      color: #ffffff;
    }

    .favicon-size-grid {
      display: grid;
      grid-template-columns: repeat(5, minmax(0, 1fr));
      gap: 20px;
      margin-top: 20px;
    }

    .favicon-size-card {
      border: 1px solid #e9e9e9;
      border-radius: 10px;
      background: #ffffff;
      padding: 16px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
      min-height: 215px;
    }

    .favicon-size-preview {
      width: 100%;
      aspect-ratio: 1 / 1;
      border-radius: 10px;
      background: #f4f4f4;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .favicon-size-preview.cream {
      background: #f5f1e8;
    }

    .favicon-size-mark {
      display: block;
    width: 100%;  
    height: auto;
    }

    .favicon-size-label {
      font-size: 12px;
      font-weight: 500;
      color: #444;
      text-align: center;
      line-height: 1.25;
    }

    @media (max-width: 1200px) {
      .favicon-size-grid {
        grid-template-columns: repeat(3, minmax(0, 1fr));
      }
    }

    @media (max-width: 768px) {
      .favicon-size-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }
    }

    @media (max-width: 520px) {
      .favicon-size-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>

<div class="subdiv fade-in visible">
    <h3 class="subdiv-title">Favicon Variations</h3>
    <hr class="subdiv-rule">

    <div class="variants-grid">
      <div class="variant-card">
      <svg width="1080" height="1080" viewBox="0 0 1080 1080" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1042.76 937.113H37.2402V945.594H1042.76V937.113Z" fill="#EC2128"/>
<path d="M970.542 919.575H535.889V201.84H544.36V911.009H970.542V919.575Z" fill="#EC2128"/>
<path d="M897.9 893.372H561.971V266.078H570.442V884.891H897.9V893.372Z" fill="#EC2128"/>
<path d="M842.213 867.345H587.98V332.508H596.536V858.78H842.213V867.345Z" fill="#EC2128"/>
<path d="M772.17 841.149H614.145V389.195H622.7V832.668H772.17V841.149Z" fill="#EC2128"/>
<path d="M255.82 841.149H413.846V389.195H405.29V832.668H255.82V841.149Z" fill="#EC2128"/>
<path d="M518.274 134.406H509.719V941.491H518.274V134.406Z" fill="#EC2128"/>
<path d="M492.098 919.575H94.0156V911.009H483.543V201.84H492.098V919.575Z" fill="#EC2128"/>
<path d="M466.014 893.372H167.242V884.891H457.458V266.078H466.014V893.372Z" fill="#EC2128"/>
<path d="M439.926 867.345H210.27V858.78H431.371V332.508H439.926V867.345Z" fill="#EC2128"/>
</svg>
        <span class="variant-label">Red Variation</span>
      </div>

      <div class="variant-card dark-mode">
      <svg width="1080" height="1080" viewBox="0 0 1080 1080" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1042.76 937.113H37.2402V945.594H1042.76V937.113Z" fill="white"/>
<path d="M970.542 919.575H535.889V201.84H544.36V911.009H970.542V919.575Z" fill="white"/>
<path d="M897.9 893.372H561.971V266.078H570.442V884.891H897.9V893.372Z" fill="white"/>
<path d="M842.213 867.345H587.98V332.508H596.536V858.78H842.213V867.345Z" fill="white"/>
<path d="M772.17 841.149H614.145V389.195H622.7V832.668H772.17V841.149Z" fill="white"/>
<path d="M255.82 841.149H413.846V389.195H405.29V832.668H255.82V841.149Z" fill="white"/>
<path d="M518.274 134.406H509.719V941.491H518.274V134.406Z" fill="white"/>
<path d="M492.098 919.575H94.0156V911.009H483.543V201.84H492.098V919.575Z" fill="white"/>
<path d="M466.014 893.372H167.242V884.891H457.458V266.078H466.014V893.372Z" fill="white"/>
<path d="M439.926 867.345H210.27V858.78H431.371V332.508H439.926V867.345Z" fill="white"/>
</svg>
        <span class="variant-label">White Variation</span>
      </div>

      <div class="variant-card">
      <svg width="1080" height="1080" viewBox="0 0 1080 1080" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1042.76 937.113H37.2402V945.594H1042.76V937.113Z" fill="black"/>
<path d="M970.542 919.575H535.889V201.84H544.36V911.009H970.542V919.575Z" fill="black"/>
<path d="M897.9 893.372H561.971V266.078H570.442V884.891H897.9V893.372Z" fill="black"/>
<path d="M842.213 867.345H587.98V332.508H596.536V858.78H842.213V867.345Z" fill="black"/>
<path d="M772.17 841.149H614.145V389.195H622.7V832.668H772.17V841.149Z" fill="black"/>
<path d="M255.82 841.149H413.846V389.195H405.29V832.668H255.82V841.149Z" fill="black"/>
<path d="M518.274 134.406H509.719V941.491H518.274V134.406Z" fill="black"/>
<path d="M492.098 919.575H94.0156V911.009H483.543V201.84H492.098V919.575Z" fill="black"/>
<path d="M466.014 893.372H167.242V884.891H457.458V266.078H466.014V893.372Z" fill="black"/>
<path d="M439.926 867.345H210.27V858.78H431.371V332.508H439.926V867.345Z" fill="black"/>
</svg>
        <span class="variant-label">Black Variation</span>
      </div>
    </div>

    <h3 class="subdiv-title" style="margin-top:44px;">Favicon Size Variations</h3>
    <hr class="subdiv-rule">

    <svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
      <defs>
        <symbol id="salesnanny-favicon-mark" viewBox="0 0 258.98 250">
          <path d="M231.52,211.84H27.46a.93.93,0,1,1,0-1.85H231.52a.93.93,0,1,1,0,1.85Z"></path>
          <path d="M218.4,205.6H130.13V70.52a.93.93,0,0,1,1.85,0V203.75H218.4a.93.93,0,1,1,0,1.85Z"></path>
          <path d="M205,199.1H136.76V95.2a.93.93,0,0,1,1.85,0V197.25H205a.93.93,0,0,1,0,1.85Z"></path>
          <path d="M195,192.82H143.35v-71.1a.92.92,0,1,1,1.84,0V191H195a.92.92,0,1,1,0,1.84Z"></path>
          <path d="M124.2,211.84a.92.92,0,0,1-.93-.92V39.08a.93.93,0,0,1,1.85,0V210.92A.92.92,0,0,1,124.2,211.84Z"></path>
          <path d="M118.62,205.6H37.78a.93.93,0,0,1,0-1.85h79V67.6a.93.93,0,1,1,1.85,0Z"></path>
          <path d="M112.51,199.1H51.81a.93.93,0,0,1,0-1.85h58.85V91.7a.93.93,0,1,1,1.85,0Z"></path>
          <path d="M106,192.82H59.34a.92.92,0,0,1,0-1.84h44.82V116.46a.92.92,0,1,1,1.84,0Z"></path>
        </symbol>
      </defs>
    </svg>

    <div class="favicon-size-grid">

      <div class="favicon-size-card">
        <div class="favicon-size-preview">
        <div style="width:80px;height:80px;display:flex;align-items:center;justify-content:center;overflow:hidden;">
        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDgwIiBoZWlnaHQ9IjEwODAiIHZpZXdCb3g9IjAgMCAxMDgwIDEwODAiIGZpbGw9Im5vbmUiPgogIDxwYXRoIGQ9Ik0xMDQyLjc2IDkzNy4xMTNIMzcuMjQwMlY5NDUuNTk0SDEwNDIuNzZWOTM3LjExM1oiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNOTcwLjU0MiA5MTkuNTc1SDUzNS44ODlWMjAxLjg0SDU0NC4zNlY5MTEuMDA5SDk3MC41NDJWOTE5LjU3NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNODk3LjkgODkzLjM3Mkg1NjEuOTcxVjI2Ni4wNzhINTcwLjQ0MlY4ODQuODkxSDg5Ny45Vjg5My4zNzJaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTg0Mi4yMTMgODY3LjM0NUg1ODcuOThWMzMyLjUwOEg1OTYuNTM2Vjg1OC43OEg4NDIuMjEzVjg2Ny4zNDVaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTc3Mi4xNyA4NDEuMTQ5SDYxNC4xNDVWMzg5LjE5NUg2MjIuN1Y4MzIuNjY4SDc3Mi4xN1Y4NDEuMTQ5WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yNTUuODIgODQxLjE0OUg0MTMuODQ2VjM4OS4xOTVINDA1LjI5VjgzMi42NjhIMjU1LjgyVjg0MS4xNDlaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTUxOC4yNzQgMTM0LjQwNkg1MDkuNzE5Vjk0MS40OTFINTE4LjI3NFYxMzQuNDA2WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00OTIuMDk4IDkxOS41NzVIOTQuMDE1NlY5MTEuMDA5SDQ4My41NDNWMjAxLjg0SDQ5Mi4wOThWOTE5LjU3NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNNDY2LjAxNCA4OTMuMzcySDE2Ny4yNDJWODg0Ljg5MUg0NTcuNDU4VjI2Ni4wNzhINDY2LjAxNFY4OTMuMzcyWiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00MzkuOTI2IDg2Ny4zNDVIMjEwLjI3Vjg1OC43OEg0MzEuMzcxVjMzMi41MDhINDM5LjkyNlY4NjcuMzQ1WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgo8L3N2Zz4K"             alt="Salesnanny favicon 256 x 256"
            class="img-fluid"
            style="max-width:16px;width:100%;height:auto;clip-path: inset(1px);" />
          </div>
        </div>
        <span class="favicon-size-label">16 x 16<br>Variation Size</span>
      </div>
      <div class="favicon-size-card">
        <div class="favicon-size-preview">
        <div style="width:80px;height:80px;display:flex;align-items:center;justify-content:center;overflow:hidden;">
        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDgwIiBoZWlnaHQ9IjEwODAiIHZpZXdCb3g9IjAgMCAxMDgwIDEwODAiIGZpbGw9Im5vbmUiPgogIDxwYXRoIGQ9Ik0xMDQyLjc2IDkzNy4xMTNIMzcuMjQwMlY5NDUuNTk0SDEwNDIuNzZWOTM3LjExM1oiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNOTcwLjU0MiA5MTkuNTc1SDUzNS44ODlWMjAxLjg0SDU0NC4zNlY5MTEuMDA5SDk3MC41NDJWOTE5LjU3NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNODk3LjkgODkzLjM3Mkg1NjEuOTcxVjI2Ni4wNzhINTcwLjQ0MlY4ODQuODkxSDg5Ny45Vjg5My4zNzJaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTg0Mi4yMTMgODY3LjM0NUg1ODcuOThWMzMyLjUwOEg1OTYuNTM2Vjg1OC43OEg4NDIuMjEzVjg2Ny4zNDVaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTc3Mi4xNyA4NDEuMTQ5SDYxNC4xNDVWMzg5LjE5NUg2MjIuN1Y4MzIuNjY4SDc3Mi4xN1Y4NDEuMTQ5WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yNTUuODIgODQxLjE0OUg0MTMuODQ2VjM4OS4xOTVINDA1LjI5VjgzMi42NjhIMjU1LjgyVjg0MS4xNDlaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTUxOC4yNzQgMTM0LjQwNkg1MDkuNzE5Vjk0MS40OTFINTE4LjI3NFYxMzQuNDA2WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00OTIuMDk4IDkxOS41NzVIOTQuMDE1NlY5MTEuMDA5SDQ4My41NDNWMjAxLjg0SDQ5Mi4wOThWOTE5LjU3NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNNDY2LjAxNCA4OTMuMzcySDE2Ny4yNDJWODg0Ljg5MUg0NTcuNDU4VjI2Ni4wNzhINDY2LjAxNFY4OTMuMzcyWiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00MzkuOTI2IDg2Ny4zNDVIMjEwLjI3Vjg1OC43OEg0MzEuMzcxVjMzMi41MDhINDM5LjkyNlY4NjcuMzQ1WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgo8L3N2Zz4K"             alt="Salesnanny favicon 256 x 256"
            class="img-fluid"
            style="max-width:24px;width:100%;height:auto;clip-path: inset(1px);" />
          </div>
        </div>
        <span class="favicon-size-label">24 x 24<br>Variation Size</span>
      </div>
      <div class="favicon-size-card">
        <div class="favicon-size-preview">
        <div style="width:80px;height:80px;display:flex;align-items:center;justify-content:center;overflow:hidden;">
        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDgwIiBoZWlnaHQ9IjEwODAiIHZpZXdCb3g9IjAgMCAxMDgwIDEwODAiIGZpbGw9Im5vbmUiPgogIDxwYXRoIGQ9Ik0xMDQyLjc2IDkzNy4xMTNIMzcuMjQwMlY5NDUuNTk0SDEwNDIuNzZWOTM3LjExM1oiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNOTcwLjU0MiA5MTkuNTc1SDUzNS44ODlWMjAxLjg0SDU0NC4zNlY5MTEuMDA5SDk3MC41NDJWOTE5LjU3NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNODk3LjkgODkzLjM3Mkg1NjEuOTcxVjI2Ni4wNzhINTcwLjQ0MlY4ODQuODkxSDg5Ny45Vjg5My4zNzJaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTg0Mi4yMTMgODY3LjM0NUg1ODcuOThWMzMyLjUwOEg1OTYuNTM2Vjg1OC43OEg4NDIuMjEzVjg2Ny4zNDVaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTc3Mi4xNyA4NDEuMTQ5SDYxNC4xNDVWMzg5LjE5NUg2MjIuN1Y4MzIuNjY4SDc3Mi4xN1Y4NDEuMTQ5WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yNTUuODIgODQxLjE0OUg0MTMuODQ2VjM4OS4xOTVINDA1LjI5VjgzMi42NjhIMjU1LjgyVjg0MS4xNDlaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTUxOC4yNzQgMTM0LjQwNkg1MDkuNzE5Vjk0MS40OTFINTE4LjI3NFYxMzQuNDA2WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00OTIuMDk4IDkxOS41NzVIOTQuMDE1NlY5MTEuMDA5SDQ4My41NDNWMjAxLjg0SDQ5Mi4wOThWOTE5LjU3NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNNDY2LjAxNCA4OTMuMzcySDE2Ny4yNDJWODg0Ljg5MUg0NTcuNDU4VjI2Ni4wNzhINDY2LjAxNFY4OTMuMzcyWiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00MzkuOTI2IDg2Ny4zNDVIMjEwLjI3Vjg1OC43OEg0MzEuMzcxVjMzMi41MDhINDM5LjkyNlY4NjcuMzQ1WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgo8L3N2Zz4K"             alt="Salesnanny favicon 256 x 256"
            class="img-fluid"
            style="max-width:32px;width:100%;height:auto;clip-path: inset(1px);" />
          </div>
        </div>
        <span class="favicon-size-label">32 x 32<br>Variation Size</span>
      </div>
      <div class="favicon-size-card">
        <div class="favicon-size-preview">
        <div style="width:80px;height:80px;display:flex;align-items:center;justify-content:center;overflow:hidden;">
        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDgwIiBoZWlnaHQ9IjEwODAiIHZpZXdCb3g9IjAgMCAxMDgwIDEwODAiIGZpbGw9Im5vbmUiPgogIDxwYXRoIGQ9Ik0xMDQyLjc2IDkzNy4xMTNIMzcuMjQwMlY5NDUuNTk0SDEwNDIuNzZWOTM3LjExM1oiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNOTcwLjU0MiA5MTkuNTc1SDUzNS44ODlWMjAxLjg0SDU0NC4zNlY5MTEuMDA5SDk3MC41NDJWOTE5LjU3NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNODk3LjkgODkzLjM3Mkg1NjEuOTcxVjI2Ni4wNzhINTcwLjQ0MlY4ODQuODkxSDg5Ny45Vjg5My4zNzJaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTg0Mi4yMTMgODY3LjM0NUg1ODcuOThWMzMyLjUwOEg1OTYuNTM2Vjg1OC43OEg4NDIuMjEzVjg2Ny4zNDVaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTc3Mi4xNyA4NDEuMTQ5SDYxNC4xNDVWMzg5LjE5NUg2MjIuN1Y4MzIuNjY4SDc3Mi4xN1Y4NDEuMTQ5WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yNTUuODIgODQxLjE0OUg0MTMuODQ2VjM4OS4xOTVINDA1LjI5VjgzMi42NjhIMjU1LjgyVjg0MS4xNDlaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTUxOC4yNzQgMTM0LjQwNkg1MDkuNzE5Vjk0MS40OTFINTE4LjI3NFYxMzQuNDA2WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00OTIuMDk4IDkxOS41NzVIOTQuMDE1NlY5MTEuMDA5SDQ4My41NDNWMjAxLjg0SDQ5Mi4wOThWOTE5LjU3NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNNDY2LjAxNCA4OTMuMzcySDE2Ny4yNDJWODg0Ljg5MUg0NTcuNDU4VjI2Ni4wNzhINDY2LjAxNFY4OTMuMzcyWiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00MzkuOTI2IDg2Ny4zNDVIMjEwLjI3Vjg1OC43OEg0MzEuMzcxVjMzMi41MDhINDM5LjkyNlY4NjcuMzQ1WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgo8L3N2Zz4K"             alt="Salesnanny favicon 256 x 256"
            class="img-fluid"
            style="max-width:64px;width:100%;height:auto;clip-path: inset(1px);" />
          </div>
        </div>
        <span class="favicon-size-label">64 x 64<br>Variation Size</span>
      </div>
      <div class="favicon-size-card">
        <div class="favicon-size-preview">
        <div style="width:75px;height:75px;display:flex;align-items:center;justify-content:center;overflow:hidden;">
        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDgwIiBoZWlnaHQ9IjEwODAiIHZpZXdCb3g9IjAgMCAxMDgwIDEwODAiIGZpbGw9Im5vbmUiPgogIDxwYXRoIGQ9Ik0xMDQyLjc2IDkzNy4xMTNIMzcuMjQwMlY5NDUuNTk0SDEwNDIuNzZWOTM3LjExM1oiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNOTcwLjU0MiA5MTkuNTc1SDUzNS44ODlWMjAxLjg0SDU0NC4zNlY5MTEuMDA5SDk3MC41NDJWOTE5LjU3NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNODk3LjkgODkzLjM3Mkg1NjEuOTcxVjI2Ni4wNzhINTcwLjQ0MlY4ODQuODkxSDg5Ny45Vjg5My4zNzJaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTg0Mi4yMTMgODY3LjM0NUg1ODcuOThWMzMyLjUwOEg1OTYuNTM2Vjg1OC43OEg4NDIuMjEzVjg2Ny4zNDVaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTc3Mi4xNyA4NDEuMTQ5SDYxNC4xNDVWMzg5LjE5NUg2MjIuN1Y4MzIuNjY4SDc3Mi4xN1Y4NDEuMTQ5WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yNTUuODIgODQxLjE0OUg0MTMuODQ2VjM4OS4xOTVINDA1LjI5VjgzMi42NjhIMjU1LjgyVjg0MS4xNDlaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTUxOC4yNzQgMTM0LjQwNkg1MDkuNzE5Vjk0MS40OTFINTE4LjI3NFYxMzQuNDA2WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00OTIuMDk4IDkxOS41NzVIOTQuMDE1NlY5MTEuMDA5SDQ4My41NDNWMjAxLjg0SDQ5Mi4wOThWOTE5LjU3NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNNDY2LjAxNCA4OTMuMzcySDE2Ny4yNDJWODg0Ljg5MUg0NTcuNDU4VjI2Ni4wNzhINDY2LjAxNFY4OTMuMzcyWiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00MzkuOTI2IDg2Ny4zNDVIMjEwLjI3Vjg1OC43OEg0MzEuMzcxVjMzMi41MDhINDM5LjkyNlY4NjcuMzQ1WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgo8L3N2Zz4K"             alt="Salesnanny favicon 256 x 256"
            class="img-fluid"
            style="max-width:128px;width:100%;height:auto;clip-path: inset(1px);" />
          </div>
        </div>
        <span class="favicon-size-label">128 x 128<br>Variation Size</span>
      </div>
      <div class="favicon-size-card">
        <div class="favicon-size-preview">
        <div style="width:80px;height:80px;display:flex;align-items:center;justify-content:center;overflow:hidden;">
        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDgwIiBoZWlnaHQ9IjEwODAiIHZpZXdCb3g9IjAgMCAxMDgwIDEwODAiIGZpbGw9Im5vbmUiPgogIDxwYXRoIGQ9Ik0xMDQyLjc2IDkzNy4xMTNIMzcuMjQwMlY5NDUuNTk0SDEwNDIuNzZWOTM3LjExM1oiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNOTcwLjU0MiA5MTkuNTc1SDUzNS44ODlWMjAxLjg0SDU0NC4zNlY5MTEuMDA5SDk3MC41NDJWOTE5LjU3NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNODk3LjkgODkzLjM3Mkg1NjEuOTcxVjI2Ni4wNzhINTcwLjQ0MlY4ODQuODkxSDg5Ny45Vjg5My4zNzJaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTg0Mi4yMTMgODY3LjM0NUg1ODcuOThWMzMyLjUwOEg1OTYuNTM2Vjg1OC43OEg4NDIuMjEzVjg2Ny4zNDVaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTc3Mi4xNyA4NDEuMTQ5SDYxNC4xNDVWMzg5LjE5NUg2MjIuN1Y4MzIuNjY4SDc3Mi4xN1Y4NDEuMTQ5WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yNTUuODIgODQxLjE0OUg0MTMuODQ2VjM4OS4xOTVINDA1LjI5VjgzMi42NjhIMjU1LjgyVjg0MS4xNDlaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTUxOC4yNzQgMTM0LjQwNkg1MDkuNzE5Vjk0MS40OTFINTE4LjI3NFYxMzQuNDA2WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00OTIuMDk4IDkxOS41NzVIOTQuMDE1NlY5MTEuMDA5SDQ4My41NDNWMjAxLjg0SDQ5Mi4wOThWOTE5LjU3NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNNDY2LjAxNCA4OTMuMzcySDE2Ny4yNDJWODg0Ljg5MUg0NTcuNDU4VjI2Ni4wNzhINDY2LjAxNFY4OTMuMzcyWiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00MzkuOTI2IDg2Ny4zNDVIMjEwLjI3Vjg1OC43OEg0MzEuMzcxVjMzMi41MDhINDM5LjkyNlY4NjcuMzQ1WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgo8L3N2Zz4K"             alt="Salesnanny favicon 256 x 256"
            class="img-fluid"
            style="max-width:256px;width:100%;height:auto;clip-path: inset(1px);" />
          </div>
        </div>
        <span class="favicon-size-label">256 x 256<br>Variation Size</span>
      </div>
      <div class="favicon-size-card">
        <div class="favicon-size-preview">
        <div style="width:100px;height:100px;display:flex;align-items:center;justify-content:center;overflow:hidden;">
          <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDgwIiBoZWlnaHQ9IjEwODAiIHZpZXdCb3g9IjAgMCAxMDgwIDEwODAiIGZpbGw9Im5vbmUiPgogIDxwYXRoIGQ9Ik0xMDQyLjc2IDkzNy4xMTNIMzcuMjQwMlY5NDUuNTk0SDEwNDIuNzZWOTM3LjExM1oiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNOTcwLjU0MiA5MTkuNTc1SDUzNS44ODlWMjAxLjg0SDU0NC4zNlY5MTEuMDA5SDk3MC41NDJWOTE5LjU3NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNODk3LjkgODkzLjM3Mkg1NjEuOTcxVjI2Ni4wNzhINTcwLjQ0MlY4ODQuODkxSDg5Ny45Vjg5My4zNzJaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTg0Mi4yMTMgODY3LjM0NUg1ODcuOThWMzMyLjUwOEg1OTYuNTM2Vjg1OC43OEg4NDIuMjEzVjg2Ny4zNDVaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTc3Mi4xNyA4NDEuMTQ5SDYxNC4xNDVWMzg5LjE5NUg2MjIuN1Y4MzIuNjY4SDc3Mi4xN1Y4NDEuMTQ5WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yNTUuODIgODQxLjE0OUg0MTMuODQ2VjM4OS4xOTVINDA1LjI5VjgzMi42NjhIMjU1LjgyVjg0MS4xNDlaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTUxOC4yNzQgMTM0LjQwNkg1MDkuNzE5Vjk0MS40OTFINTE4LjI3NFYxMzQuNDA2WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00OTIuMDk4IDkxOS41NzVIOTQuMDE1NlY5MTEuMDA5SDQ4My41NDNWMjAxLjg0SDQ5Mi4wOThWOTE5LjU3NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNNDY2LjAxNCA4OTMuMzcySDE2Ny4yNDJWODg0Ljg5MUg0NTcuNDU4VjI2Ni4wNzhINDY2LjAxNFY4OTMuMzcyWiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00MzkuOTI2IDg2Ny4zNDVIMjEwLjI3Vjg1OC43OEg0MzEuMzcxVjMzMi41MDhINDM5LjkyNlY4NjcuMzQ1WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgo8L3N2Zz4K"             alt="Salesnanny favicon 256 x 256"
            class="img-fluid"
            style="max-width:512px;width:100%;height:auto;clip-path: inset(1px);" />
          </div>
        </div>
        <span class="favicon-size-label">512 x 512<br>Variation Size</span>
      </div>
    </div>
</div>
<div class="subdiv fade-in">
  <h3 class="subdiv-title">Division Logos</h3>
  <hr class="subdiv-rule">
  <div style="display:grid;grid-template-columns:1fr 1fr;gap:2px">
    <div style="background:#fff;border:1px solid var(--bone);padding:48px 40px;display:flex;flex-direction:column;align-items:center;gap:16px">
    <svg style="height:auto;width:420px;max-width:100%;display:block;" viewBox="0 0 1207 325" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1079 203.465H1097.51V120.666H1143.43V106.227H1033.08V120.544H1079.12L1079 203.465Z" fill="#EC2128"/>
<path d="M982.389 145.171V106.227H1000.85V203.465H982.389V159.957H904.852V203.465H886.65V106.227H904.99V145.24L982.389 145.171Z" fill="#EC2128"/>
<path d="M782.279 149.043V162.562H822.149V188.889H745.149V120.685H822.166V133.701L840.333 130.612V122.767C840.333 122.767 841.719 106.176 820.779 106.176H748.425C748.425 106.176 729.86 105.222 727.346 120.06C726.739 123.151 726.489 126.301 726.601 129.449V183.509C726.601 183.509 724.867 204.959 746.05 203.276H818.959C819.705 203.276 820.467 203.276 821.213 203.276C824.94 203.415 839.847 202.894 840.281 186.043V148.678L782.279 149.043Z" fill="#EC2128"/>
<path d="M679.727 106.191H661.266V203.499H679.727V106.191Z" fill="#EC2128"/>
<path d="M627.982 188.661V203.639H534.271V106.07H552.386V188.696L627.982 188.661Z" fill="#EC2128"/>
<path d="M346.769 106.173H330.492L303.658 180.538L275.558 106.121H263.407L234.874 180.538L207.884 106.173L188.938 106.121L226.519 203.568H240.317L269.006 130.938L296.29 203.568H309.794L346.769 106.173Z" fill="#EC2128"/>
<path d="M173.714 106.121V120.786H127.466V203.568H109.594V120.63H63.4492V106.121H173.714Z" fill="#EC2128"/>
<path d="M526.4 201.57H318.594V203.341H526.4V201.57Z" fill="#EC2128"/>
<path d="M511.48 197.931H421.652V49.6172H423.403V196.16H511.48V197.931Z" fill="#EC2128"/>
<path d="M496.468 192.534H427.043V62.8945H428.794V190.781H496.468V192.534Z" fill="#EC2128"/>
<path d="M484.957 187.136H432.416V76.6211H434.184V185.383H484.957V187.136Z" fill="#EC2128"/>
<path d="M470.483 181.741H437.824V88.3203H439.592V179.988H470.483V181.741Z" fill="#EC2128"/>
<path d="M363.77 181.741H396.428V88.3203H394.66V179.988H363.77V181.741Z" fill="#EC2128"/>
<path d="M418.012 35.6641H416.244V202.46H418.012V35.6641Z" fill="#EC2128"/>
<path d="M412.598 197.932H330.328V196.18H410.83V49.6016H412.598V197.932Z" fill="#EC2128"/>
<path d="M407.214 192.534H345.469V190.781H405.446V62.8945H407.214V192.534Z" fill="#EC2128"/>
<path d="M401.821 187.136H354.359V185.383H400.053V76.6211H401.821V187.136Z" fill="#EC2128"/>
<path d="M758.251 261.465C758.442 260.459 758.546 259.73 758.754 258.949C759.239 257.213 759.707 255.478 760.297 253.742C761.354 250.757 762.481 247.807 763.608 244.857C763.941 244.028 764.317 243.217 764.734 242.427C764.859 242.158 765.05 241.925 765.289 241.75C765.405 241.673 765.537 241.622 765.674 241.601C765.812 241.58 765.953 241.589 766.087 241.629C766.201 241.71 766.299 241.813 766.373 241.932C766.447 242.051 766.497 242.184 766.52 242.323C766.519 242.619 766.448 242.91 766.312 243.173C764.995 246.644 763.66 249.959 762.342 253.36C762.065 254.072 761.822 254.818 761.58 255.547C761.552 255.853 761.552 256.161 761.58 256.467C761.885 256.108 762.168 255.731 762.429 255.339C763.667 253.298 765.082 251.37 766.659 249.577C767.406 248.722 768.23 247.938 769.12 247.234C771.044 245.794 772.327 246.332 772.778 248.71C773.02 249.942 773.055 251.209 773.246 252.441C773.365 253.205 773.562 253.956 773.835 254.679C773.877 254.825 773.953 254.958 774.056 255.068C774.16 255.178 774.288 255.262 774.43 255.313C774.572 255.364 774.725 255.38 774.874 255.36C775.024 255.341 775.167 255.286 775.291 255.2C776.028 254.815 776.72 254.349 777.354 253.812C778.845 252.51 780.284 251.157 781.705 249.803C782.065 249.41 782.374 248.972 782.624 248.501C784.139 245.975 786.331 243.925 788.951 242.583C789.941 242.023 791.055 241.718 792.192 241.698C793.213 241.607 794.233 241.891 795.059 242.498C795.886 243.105 796.463 243.993 796.682 244.996C796.769 245.273 796.89 245.534 797.029 245.898C797.368 245.721 797.692 245.518 798 245.291C798.624 244.753 799.23 244.163 799.854 243.555C800.105 243.306 800.378 243.08 800.669 242.878C800.862 242.726 801.1 242.644 801.345 242.644C801.59 242.644 801.828 242.726 802.021 242.878C802.196 242.994 802.329 243.162 802.404 243.358C802.479 243.554 802.49 243.769 802.437 243.972C802.307 244.676 802.133 245.371 801.917 246.054C801.276 248.102 800.548 250.133 799.924 252.18C799.057 255.044 798.19 257.908 797.427 260.858C797.427 261.136 797.254 261.448 797.705 261.691C797.89 261.619 798.061 261.513 798.208 261.378C801.798 257.541 805.6 253.908 809.596 250.497C810.382 249.88 810.982 249.057 811.33 248.12C811.498 247.673 811.738 247.257 812.041 246.887C812.165 246.682 812.364 246.533 812.595 246.471C812.875 246.42 813.163 246.469 813.41 246.61C813.494 246.685 813.558 246.779 813.598 246.885C813.637 246.991 813.65 247.105 813.635 247.217C813.531 247.684 813.392 248.142 813.219 248.588C812.37 250.887 811.726 253.256 811.295 255.669C811.148 256.487 811.096 257.32 811.139 258.15C811.139 259.435 811.884 259.886 813.081 259.469C813.987 259.175 814.821 258.69 815.525 258.046C817.616 256.257 819.547 254.288 821.297 252.163C822.355 250.896 823.499 249.664 824.556 248.38C824.838 248.003 825.066 247.588 825.232 247.148C825.787 245.829 826.272 244.475 826.844 243.173C827.058 242.679 827.358 242.227 827.728 241.837C827.835 241.747 827.96 241.682 828.095 241.646C828.23 241.61 828.371 241.604 828.508 241.629C828.597 241.649 828.681 241.687 828.755 241.74C828.829 241.793 828.893 241.86 828.941 241.937C828.989 242.015 829.022 242.101 829.037 242.191C829.052 242.281 829.049 242.373 829.028 242.462C828.939 242.806 828.823 243.142 828.682 243.468C827.295 246.939 825.908 250.584 824.556 254.159C824.158 254.833 824.01 255.626 824.14 256.398C824.469 255.964 824.712 255.669 824.937 255.356C826.272 253.517 827.572 251.66 828.942 249.855C829.599 249.081 830.312 248.356 831.074 247.686C831.428 247.369 831.818 247.095 832.235 246.87C832.472 246.677 832.755 246.55 833.056 246.501C833.357 246.453 833.666 246.485 833.951 246.594C834.235 246.703 834.486 246.886 834.678 247.123C834.87 247.36 834.996 247.644 835.043 247.946C835.242 248.638 835.381 249.347 835.459 250.063C835.598 251 835.633 251.955 835.789 252.909C835.87 253.504 836.021 254.086 836.24 254.645C836.28 254.807 836.36 254.958 836.471 255.083C836.582 255.209 836.722 255.305 836.879 255.365C837.035 255.425 837.204 255.446 837.37 255.426C837.537 255.406 837.696 255.347 837.834 255.252C838.421 254.963 838.974 254.608 839.481 254.194C841.619 252.285 843.734 250.352 845.826 248.397C846.14 248.045 846.408 247.655 846.623 247.234C847.5 245.801 848.574 244.499 849.812 243.364C850.357 242.903 850.936 242.485 851.546 242.115C851.854 241.936 852.197 241.823 852.551 241.785C852.847 241.703 853.159 241.702 853.455 241.78C853.751 241.858 854.022 242.014 854.238 242.231C854.455 242.448 854.61 242.718 854.689 243.015C854.767 243.312 854.765 243.624 854.684 243.92C854.495 245.107 854.025 246.231 853.314 247.2C851.958 249.101 850.328 250.791 848.478 252.215C848.111 252.512 847.729 252.79 847.334 253.048C846.711 253.417 846.219 253.972 845.926 254.635C845.634 255.297 845.556 256.035 845.704 256.745C845.704 257.265 845.826 257.821 845.93 258.341C846.022 258.766 846.235 259.156 846.542 259.463C846.85 259.771 847.239 259.984 847.663 260.077C848.48 260.278 849.339 260.224 850.125 259.921C852.482 258.889 854.637 257.443 856.486 255.651C856.785 255.287 856.983 254.85 857.058 254.385C857.232 253.708 857.284 252.979 857.492 252.284C858.335 249.651 860 247.358 862.241 245.742C862.997 245.131 863.961 244.839 864.928 244.926C865.154 244.919 865.379 244.965 865.584 245.059C865.79 245.154 865.97 245.296 866.112 245.472C866.253 245.649 866.351 245.857 866.398 246.078C866.446 246.3 866.441 246.529 866.384 246.748C866.225 247.509 865.925 248.233 865.5 248.883C864.661 250.038 863.759 251.144 862.796 252.198C861.877 253.222 860.855 254.141 859.884 255.113C859.646 255.412 859.426 255.725 859.225 256.051C859.486 256.296 859.777 256.506 860.092 256.675C860.571 256.853 861.08 256.931 861.59 256.904C862.1 256.877 862.599 256.746 863.056 256.519C864.461 255.862 865.822 255.114 867.13 254.28C869.036 252.979 870.857 251.504 872.711 250.115C872.93 249.91 873.162 249.719 873.405 249.543C874.819 248.756 875.879 247.459 876.369 245.915C876.468 245.634 876.621 245.374 876.82 245.152C876.905 244.991 877.043 244.865 877.21 244.795C877.378 244.725 877.565 244.717 877.738 244.77C877.91 244.83 878.053 244.953 878.136 245.114C878.22 245.275 878.239 245.463 878.189 245.638C878.09 246.164 877.945 246.681 877.756 247.182C877.34 248.241 876.889 249.282 876.438 250.323C875.425 252.615 874.574 254.976 873.89 257.387C873.666 257.938 873.624 258.546 873.769 259.122C874.289 259.122 874.358 258.654 874.514 258.341C875.208 256.953 875.884 255.565 876.594 254.176C877.434 252.403 878.612 250.811 880.061 249.49C880.516 249.104 881.01 248.767 881.535 248.484C881.792 248.322 882.1 248.263 882.398 248.318C882.696 248.372 882.964 248.537 883.147 248.779C883.482 249.195 883.767 249.65 883.996 250.133C885.019 252.163 885.834 252.441 887.793 251.226C888.749 250.618 889.659 249.94 890.514 249.196C890.889 248.813 891.21 248.381 891.467 247.911C891.745 247.529 891.97 247.096 892.265 246.731C892.397 246.568 892.583 246.458 892.79 246.419C892.996 246.381 893.21 246.418 893.392 246.523C893.544 246.623 893.656 246.774 893.707 246.949C893.758 247.124 893.744 247.311 893.669 247.477C893.53 247.929 893.357 248.38 893.201 248.831C892.386 251.014 891.777 253.268 891.381 255.565C891.222 256.499 891.175 257.448 891.242 258.393C891.242 259.435 891.988 259.817 892.976 259.521C893.95 259.23 894.845 258.719 895.593 258.029C897.811 256.121 899.848 254.012 901.677 251.729C902.579 250.619 903.584 249.577 904.486 248.484C904.791 248.123 905.032 247.712 905.196 247.269C905.699 246.054 906.132 244.822 906.652 243.607C906.928 242.996 907.264 242.414 907.658 241.872C907.749 241.714 907.898 241.599 908.073 241.55C908.248 241.501 908.435 241.523 908.594 241.612C908.785 241.702 908.933 241.862 909.011 242.059C909.088 242.255 909.088 242.474 909.01 242.67C908.906 243 908.733 243.33 908.611 243.659C907.225 247.13 905.838 250.775 904.503 254.35C904.318 254.65 904.197 254.985 904.146 255.334C904.095 255.684 904.116 256.04 904.208 256.38C904.538 255.912 904.763 255.582 905.006 255.27C906.289 253.534 907.554 251.66 908.889 249.907C909.553 249.14 910.259 248.41 911.003 247.72C911.224 247.52 911.462 247.341 911.714 247.182C913.552 245.915 914.748 246.349 915.181 248.501C915.424 249.664 915.493 250.862 915.666 251.972C915.723 252.628 915.833 253.278 915.996 253.916C916.412 255.391 917.071 255.651 918.353 254.853C918.975 254.482 919.556 254.045 920.087 253.552C921.474 252.319 922.826 251.07 924.16 249.786C924.531 249.4 924.852 248.968 925.114 248.501C926.608 245.962 928.79 243.899 931.406 242.549C932.465 241.955 933.659 241.644 934.873 241.646C935.901 241.58 936.917 241.899 937.724 242.54C938.531 243.181 939.072 244.1 939.242 245.117C939.242 245.343 939.415 245.534 939.554 245.881C939.83 245.764 940.097 245.625 940.351 245.464C940.906 244.996 941.426 244.492 941.946 244.024L942.604 243.416C943.159 242.93 943.731 242.392 944.494 242.878C945.257 243.364 944.962 244.163 944.806 244.839C944.61 245.71 944.361 246.568 944.06 247.408C942.552 251.695 941.287 256.085 940.108 260.424C940.025 260.889 939.967 261.358 939.935 261.83C940.258 261.661 940.566 261.463 940.854 261.24C944.486 257.357 948.334 253.684 952.381 250.237C952.918 249.768 953.49 249.334 954.115 248.918C954.252 248.8 954.428 248.736 954.609 248.736C954.79 248.736 954.965 248.8 955.103 248.918C955.248 249.07 955.329 249.272 955.329 249.482C955.329 249.692 955.248 249.894 955.103 250.046C954.671 250.544 954.208 251.014 953.716 251.452C951.74 253.187 949.729 255.044 947.735 256.849C944.718 259.563 941.918 262.511 939.363 265.665C938.263 267.004 937.417 268.534 936.867 270.177C936.139 272.399 935.376 274.585 934.561 276.772C933.618 279.353 932.459 281.85 931.094 284.235C930.573 285.166 929.994 286.065 929.361 286.925C929.006 287.404 928.579 287.826 928.095 288.174C927.94 288.32 927.749 288.422 927.542 288.471C927.335 288.519 927.119 288.512 926.915 288.451C926.711 288.389 926.527 288.275 926.382 288.12C926.236 287.965 926.133 287.774 926.085 287.567C925.857 286.826 925.757 286.051 925.79 285.276C925.868 284.085 926.131 282.914 926.57 281.805C927.572 279.116 928.905 276.562 930.54 274.204C931.84 272.277 933.244 270.403 934.683 268.581C935.806 267.189 936.648 265.592 937.161 263.878C938.704 258.671 940.334 253.361 941.911 248.102C942.015 247.72 942.032 247.321 942.136 246.696C941.819 246.81 941.516 246.962 941.235 247.148C938.652 249.438 936.035 251.781 933.504 254.089C931.952 255.528 930.228 256.769 928.373 257.786C927.651 258.215 926.819 258.42 925.981 258.376C925.404 258.392 924.843 258.187 924.411 257.803C923.98 257.42 923.71 256.886 923.658 256.311C923.519 255.443 923.536 254.575 923.484 253.656C923.12 253.482 922.93 253.656 922.722 253.933L920.59 255.86C919.895 256.521 919.031 256.978 918.093 257.179C917.491 257.391 916.829 257.357 916.251 257.084C915.674 256.811 915.227 256.322 915.008 255.721C914.68 254.954 914.447 254.15 914.314 253.326C914.124 252.267 914.072 251.191 913.933 250.133C913.933 249.664 913.708 249.23 913.569 248.623C913.211 248.74 912.872 248.91 912.564 249.126C911.35 250.445 910.102 251.729 908.993 253.135C907.433 255.176 906.08 257.368 904.954 259.678C904.572 260.424 904.243 261.188 903.81 261.899C903.533 262.355 903.175 262.755 902.752 263.079C902.617 263.176 902.46 263.237 902.295 263.255C902.13 263.274 901.963 263.25 901.81 263.185C901.657 263.121 901.523 263.018 901.421 262.887C901.319 262.756 901.252 262.601 901.227 262.437C901.114 261.794 901.114 261.136 901.227 260.493C901.574 258.862 902.007 257.248 902.423 255.634C902.562 255.061 902.735 254.506 903.012 253.569C902.475 254.055 902.215 254.228 902.007 254.471C900.533 256.198 898.909 257.789 897.153 259.226C896.408 259.816 895.593 260.32 894.796 260.84C894.493 261.027 894.166 261.173 893.825 261.274C893.396 261.46 892.928 261.541 892.462 261.511C891.995 261.481 891.542 261.341 891.14 261.103C890.737 260.864 890.397 260.533 890.147 260.138C889.896 259.743 889.743 259.293 889.699 258.827C889.5 257.708 889.5 256.562 889.699 255.443C889.89 254.402 890.063 253.343 890.271 252.111L889.179 252.58C888.559 252.934 887.916 253.247 887.255 253.517C886.557 253.808 885.778 253.845 885.055 253.62C884.333 253.394 883.712 252.922 883.303 252.284C882.904 251.764 882.575 251.209 882.141 250.549C881.811 250.675 881.501 250.85 881.223 251.07C879.796 252.516 878.623 254.195 877.756 256.033C876.681 258.237 875.589 260.424 874.497 262.611C874.23 263.145 873.929 263.661 873.596 264.155C873.445 264.413 873.259 264.646 873.041 264.849C872.901 264.962 872.736 265.039 872.56 265.073C872.384 265.107 872.202 265.097 872.031 265.044C871.859 264.99 871.704 264.896 871.577 264.768C871.451 264.64 871.359 264.484 871.307 264.311C871.174 263.608 871.145 262.889 871.221 262.177C871.61 259.159 872.343 256.195 873.405 253.343C873.561 252.892 873.648 252.441 873.769 251.972C873.769 251.972 873.769 251.868 873.665 251.781C873.072 252.032 872.532 252.391 872.07 252.84C870.337 254.037 868.725 255.322 866.974 256.45C865.873 257.132 864.712 257.712 863.507 258.185C862.801 258.52 862.024 258.676 861.245 258.639C860.465 258.603 859.706 258.376 859.034 257.977L858.41 257.63C858.142 257.471 857.83 257.4 857.519 257.428C857.208 257.456 856.913 257.581 856.677 257.786C855.966 258.324 855.273 258.879 854.545 259.4C853.321 260.364 851.928 261.088 850.437 261.535C849.746 261.714 849.035 261.807 848.322 261.812C847.353 261.852 846.405 261.529 845.662 260.906C844.918 260.284 844.433 259.407 844.3 258.446C843.977 256.922 843.93 255.352 844.161 253.812C844.161 253.43 844.265 253.031 844.352 252.371C843.867 252.718 843.572 252.892 843.312 253.118L840.261 255.877C839.464 256.612 838.458 257.079 837.384 257.213C836.907 257.289 836.419 257.216 835.985 257.005C835.551 256.794 835.192 256.455 834.957 256.033C834.44 255.224 834.13 254.3 834.055 253.343C833.934 252.215 833.813 251.087 833.674 249.976C833.695 249.719 833.648 249.46 833.538 249.226C833.429 248.991 833.261 248.79 833.05 248.64C832.754 248.765 832.48 248.935 832.235 249.143C831.039 250.462 829.791 251.764 828.682 253.17C827.122 255.207 825.774 257.4 824.66 259.712C824.331 260.354 824.036 260.997 823.689 261.621C823.452 262.036 823.173 262.426 822.857 262.784C822.704 262.971 822.496 263.104 822.262 263.164C822.027 263.223 821.781 263.206 821.557 263.114C821.362 263.032 821.196 262.895 821.079 262.719C820.962 262.543 820.899 262.336 820.898 262.125C820.867 261.544 820.902 260.962 821.002 260.389C821.349 258.827 821.748 257.265 822.147 255.704C822.303 255.131 822.476 254.575 822.667 253.968C822.129 253.812 822.008 254.211 821.8 254.419C820.222 255.964 818.697 257.56 817.085 259.07C816.361 259.714 815.584 260.294 814.762 260.806C814.411 261.028 814.032 261.203 813.635 261.326C813.197 261.532 812.714 261.627 812.23 261.602C811.747 261.576 811.277 261.432 810.862 261.181C810.447 260.931 810.1 260.582 809.852 260.165C809.604 259.748 809.463 259.277 809.44 258.793C809.374 257.728 809.403 256.659 809.527 255.599C809.527 254.836 809.752 254.072 809.891 253.204C809.614 253.204 809.423 253.204 809.319 253.343C805.72 256.382 802.31 259.64 799.109 263.097C798.936 263.27 798.78 263.461 798.624 263.635C796.283 266.033 794.568 268.971 793.631 272.191C792.649 275.61 791.331 278.924 789.696 282.083C788.847 283.818 787.876 285.311 786.888 286.855C786.474 287.441 785.957 287.946 785.363 288.348C785.233 288.458 785.08 288.537 784.916 288.58C784.751 288.623 784.579 288.628 784.412 288.594C784.245 288.561 784.088 288.49 783.953 288.387C783.817 288.284 783.706 288.152 783.629 288.001C783.415 287.645 783.273 287.249 783.213 286.838C783.069 285.771 783.133 284.686 783.404 283.645C783.9 281.798 784.61 280.016 785.519 278.334C787.228 275.048 789.298 271.963 791.69 269.136C793.101 267.435 794.134 265.453 794.723 263.322C796.179 258.289 797.757 253.274 799.265 248.241C799.386 247.824 799.698 247.356 799.161 246.852C798.936 247.009 798.71 247.165 798.502 247.338C795.919 249.647 793.302 251.972 790.754 254.28C789.138 255.706 787.343 256.914 785.415 257.873C784.687 258.297 783.843 258.479 783.005 258.393C782.492 258.381 781.999 258.191 781.61 257.856C781.222 257.52 780.961 257.06 780.873 256.554C780.772 256.15 780.714 255.737 780.7 255.322C780.7 254.784 780.7 254.263 780.7 253.586C780.418 253.692 780.15 253.832 779.902 254.003C779.174 254.627 778.481 255.27 777.77 255.912C777.118 256.535 776.319 256.983 775.447 257.213C775.125 257.344 774.78 257.407 774.432 257.398C774.085 257.388 773.743 257.307 773.428 257.158C773.114 257.01 772.834 256.798 772.605 256.535C772.377 256.273 772.206 255.966 772.102 255.634C771.777 254.808 771.556 253.946 771.443 253.066C771.252 251.938 771.183 250.809 771.01 249.595C770.901 249.225 770.75 248.87 770.559 248.536C770.074 248.9 769.692 249.143 769.345 249.456C767.693 250.997 766.248 252.747 765.046 254.662C763.816 256.641 762.724 258.688 761.58 260.719C761.285 261.24 761.06 261.795 760.73 262.281C760.606 262.523 760.427 262.732 760.207 262.892C759.987 263.052 759.733 263.157 759.465 263.201C758.927 263.201 758.598 262.871 758.269 262.489C757.924 262.739 757.552 262.949 757.159 263.114C752.982 264.537 748.995 266.585 744.73 267.661C743.084 268.198 741.379 268.53 739.651 268.65C738.759 268.7 737.864 268.653 736.982 268.511C736.125 268.39 735.329 268 734.706 267.399C734.084 266.797 733.667 266.014 733.515 265.162C733.141 263.341 733.195 261.457 733.671 259.66C734.052 257.925 734.486 256.05 734.884 254.246C734.954 253.861 735 253.473 735.023 253.083C734.659 252.84 734.26 252.597 733.879 252.319C733.793 252.258 733.723 252.178 733.675 252.084C733.626 251.99 733.601 251.887 733.601 251.781C733.601 251.676 733.626 251.572 733.675 251.478C733.723 251.385 733.793 251.304 733.879 251.243C734.103 251.055 734.362 250.913 734.642 250.827C735.067 250.694 735.45 250.454 735.754 250.128C736.058 249.803 736.272 249.403 736.375 248.97C737.138 246.766 737.866 244.544 738.785 242.427C740.345 238.8 742.061 235.26 743.69 231.667C744.095 231.083 744.329 230.398 744.366 229.689C743.881 229.307 743.309 229.55 742.806 229.428C742.532 229.359 742.292 229.192 742.13 228.96C741.974 228.717 742.269 228.266 742.633 228.144C742.997 228.023 743.552 227.884 744.002 227.728C744.8 227.485 745.58 227.207 746.377 226.981C746.833 226.851 747.296 226.746 747.764 226.669C748.648 226.53 749.497 226.443 750.416 226.287C753.588 225.749 756.743 225.142 759.933 224.673C761.533 224.493 763.142 224.418 764.752 224.448C765.48 224.448 765.896 224.795 765.896 225.298C765.896 225.801 765.376 226.287 764.613 226.131C763.072 225.907 761.502 225.972 759.985 226.322C756.154 226.895 752.358 227.641 748.527 228.266C748.053 228.319 747.601 228.494 747.216 228.773C746.83 229.053 746.523 229.428 746.325 229.862C743.264 235.739 740.645 241.836 738.49 248.102C738.49 248.328 738.317 248.553 738.265 248.779C738.23 248.879 738.221 248.985 738.238 249.089C738.254 249.193 738.296 249.291 738.359 249.375C738.422 249.459 738.506 249.526 738.601 249.57C738.696 249.615 738.801 249.635 738.906 249.629C739.379 249.584 739.849 249.502 740.31 249.386L748.821 247.304C749.347 247.182 749.879 247.095 750.416 247.044C750.592 247.01 750.775 247.038 750.933 247.123C751.091 247.209 751.214 247.346 751.283 247.512C751.335 247.719 751.309 247.938 751.209 248.127C751.11 248.316 750.945 248.461 750.745 248.536C750.429 248.685 750.098 248.801 749.757 248.883L739.166 251.486L738.126 251.781C737.868 251.863 737.635 252.009 737.45 252.207C737.265 252.404 737.133 252.646 737.069 252.909C737.024 253.022 736.989 253.138 736.964 253.256C736.34 256.051 735.699 258.845 735.127 261.639C734.927 262.643 734.981 263.681 735.283 264.658C735.402 265.22 735.695 265.73 736.122 266.114C736.549 266.498 737.087 266.735 737.658 266.793C738.812 266.959 739.986 266.918 741.125 266.672C743.283 266.203 745.403 265.577 747.469 264.797C750.243 263.704 753.034 262.663 755.807 261.587C756.16 261.379 756.555 261.252 756.962 261.216C757.37 261.18 757.781 261.236 758.165 261.378M794.931 246.818C794.931 246.28 794.931 245.985 794.931 245.69C794.897 245.22 794.709 244.774 794.395 244.422C794.082 244.071 793.661 243.833 793.198 243.746C792.625 243.636 792.037 243.636 791.464 243.746C790.708 243.908 789.978 244.177 789.298 244.544C787.591 245.485 786.119 246.799 784.991 248.389C783.862 249.979 783.107 251.803 782.78 253.725C782.684 254.369 782.684 255.024 782.78 255.669C782.779 255.823 782.819 255.975 782.896 256.109C782.974 256.242 783.085 256.353 783.22 256.429C783.354 256.505 783.506 256.544 783.66 256.541C783.815 256.539 783.965 256.495 784.097 256.415C785.182 255.942 786.216 255.361 787.183 254.679C789.419 252.944 791.551 251.209 793.718 249.473C793.9 249.314 794.073 249.146 794.238 248.97C794.519 248.712 794.743 248.398 794.895 248.049C795.048 247.699 795.125 247.321 795.122 246.939M925.426 254.454C925.409 254.789 925.409 255.125 925.426 255.461C925.53 256.519 926.05 256.884 926.986 256.45C927.843 256.045 928.672 255.581 929.465 255.061C931.96 253.322 934.329 251.409 936.555 249.334C936.779 249.136 936.982 248.915 937.161 248.675C937.529 248.127 937.746 247.493 937.792 246.835C937.837 246.177 937.71 245.519 937.421 244.926C937.322 244.672 937.157 244.449 936.944 244.278C936.731 244.108 936.477 243.996 936.208 243.954C935.58 243.796 934.928 243.749 934.284 243.815C933.525 243.96 932.794 244.224 932.117 244.596C930.581 245.406 929.228 246.523 928.143 247.878C927.057 249.234 926.262 250.799 925.807 252.475C925.582 253.204 925.478 253.968 925.374 254.454M785.103 285.692C785.536 285.397 785.727 285.345 785.813 285.224C787.296 282.914 788.567 280.474 789.61 277.935C790.095 276.72 790.494 275.47 790.927 274.238C790.927 274.238 790.823 274.065 790.771 273.961C789.015 275.803 787.626 277.965 786.68 280.33C785.809 281.997 785.273 283.819 785.103 285.692ZM933.608 273.804C931.466 276.207 929.796 278.991 928.685 282.013C928.13 283.081 927.901 284.287 928.026 285.484C928.251 285.328 928.477 285.259 928.598 285.085C930.873 281.606 932.566 277.778 933.608 273.752M847.143 250.862C849.314 249.573 851.107 247.736 852.343 245.533C852.58 245.117 852.783 244.681 852.95 244.232C853.071 243.902 852.95 243.677 852.586 243.573C851.236 244.351 850.062 245.4 849.137 246.654C848.213 247.909 847.557 249.341 847.212 250.862M859.728 252.753C861.498 251.586 863 250.053 864.131 248.258C864.408 247.824 864.79 247.408 864.599 246.818C863.542 246.818 863.056 247.165 861.756 248.553C861.162 249.07 860.677 249.7 860.329 250.406C859.981 251.112 859.777 251.88 859.728 252.666" fill="#1D1D1B"/>
<path d="M1106.63 247.981C1106.95 247.079 1107.3 246.125 1107.68 245.187C1108.06 244.25 1108.45 243.452 1108.86 242.584C1109.04 242.274 1109.26 241.993 1109.52 241.751C1109.57 241.695 1109.63 241.65 1109.71 241.619C1109.78 241.589 1109.85 241.573 1109.93 241.573C1110 241.573 1110.08 241.589 1110.15 241.619C1110.22 241.65 1110.28 241.695 1110.33 241.751C1110.55 241.941 1110.69 242.198 1110.73 242.48C1110.68 242.831 1110.57 243.171 1110.4 243.487C1109.01 247.096 1107.61 250.712 1106.21 254.333C1105.86 254.968 1105.74 255.702 1105.86 256.416C1106.12 256.124 1106.37 255.817 1106.59 255.496C1107.83 253.452 1109.24 251.519 1110.8 249.717C1111.51 248.919 1112.33 248.207 1113.11 247.478C1113.29 247.32 1113.49 247.18 1113.7 247.062C1115.29 246.09 1116.44 246.558 1116.87 248.415C1117.1 249.457 1117.16 250.533 1117.32 251.591C1117.4 252.487 1117.55 253.375 1117.77 254.246C1118.14 255.513 1118.78 255.756 1119.9 255.097C1120.57 254.695 1121.19 254.237 1121.78 253.726C1123.28 252.372 1124.74 250.967 1126.25 249.613C1126.54 249.366 1126.77 249.049 1126.91 248.692C1127.06 248.334 1127.11 247.947 1127.06 247.565C1127.01 246.248 1127.31 244.941 1127.91 243.773C1128.52 242.604 1129.42 241.614 1130.53 240.901C1131.25 240.352 1132.14 240.081 1133.04 240.137C1133.51 240.208 1133.95 240.38 1134.34 240.64C1134.44 240.711 1134.51 240.807 1134.56 240.916C1134.6 241.026 1134.61 241.146 1134.59 241.263C1134.57 241.38 1134.52 241.489 1134.44 241.578C1134.37 241.667 1134.27 241.733 1134.15 241.769C1133.86 241.837 1133.57 241.89 1133.27 241.925C1132.54 242.043 1131.85 242.307 1131.23 242.699C1130.61 243.092 1130.08 243.606 1129.66 244.211C1129.25 244.816 1128.96 245.498 1128.81 246.218C1128.67 246.937 1128.67 247.679 1128.81 248.398C1129 249.63 1129.26 250.862 1129.45 252.095C1129.65 253.327 1129.8 254.594 1129.97 255.826C1130.04 256.098 1130.13 256.364 1130.23 256.624C1131 256.624 1131.41 256.225 1131.97 255.895L1140.46 249.943L1141.81 249.04C1142.01 248.908 1142.21 248.792 1142.42 248.693C1142.5 248.651 1142.59 248.625 1142.68 248.617C1142.77 248.609 1142.86 248.619 1142.95 248.646C1143.04 248.674 1143.12 248.718 1143.19 248.777C1143.26 248.835 1143.32 248.907 1143.36 248.988C1143.42 249.113 1143.45 249.249 1143.45 249.387C1143.45 249.526 1143.42 249.662 1143.36 249.786C1143.04 250.216 1142.65 250.591 1142.21 250.897L1135.28 255.913C1134.12 256.746 1132.96 257.648 1131.81 258.394C1131.26 258.742 1130.79 259.212 1130.44 259.769C1130.1 260.325 1129.89 260.953 1129.82 261.605C1129.62 263.445 1129.03 265.221 1128.09 266.811C1127.65 267.518 1127.13 268.171 1126.54 268.755C1126.17 269.151 1125.68 269.414 1125.15 269.501C1124.61 269.589 1124.07 269.496 1123.59 269.238C1123.11 268.98 1122.74 268.571 1122.52 268.075C1122.3 267.58 1122.25 267.025 1122.38 266.499C1122.49 265.855 1122.71 265.233 1123.02 264.659C1123.88 262.94 1125.1 261.434 1126.61 260.251C1127.27 259.793 1127.79 259.153 1128.1 258.408C1128.41 257.663 1128.49 256.844 1128.35 256.051C1128.28 254.405 1128.01 252.774 1127.55 251.192C1127.29 251.34 1127.03 251.503 1126.79 251.678C1125.33 252.997 1123.89 254.351 1122.4 255.635C1121.78 256.194 1121.08 256.656 1120.32 257.006C1119.96 257.23 1119.54 257.362 1119.12 257.392C1118.69 257.422 1118.27 257.348 1117.87 257.178C1117.48 257.008 1117.14 256.745 1116.87 256.413C1116.6 256.081 1116.42 255.689 1116.33 255.271C1116.03 254.302 1115.82 253.309 1115.69 252.303C1115.57 251.539 1115.55 250.758 1115.43 249.995C1115.34 249.549 1115.23 249.108 1115.08 248.676C1114.74 248.797 1114.41 248.832 1114.25 249.005C1110.94 252.125 1108.24 255.847 1106.31 259.974C1105.91 260.772 1105.53 261.588 1105.06 262.334C1104.93 262.637 1104.7 262.887 1104.41 263.045C1104.12 263.202 1103.78 263.257 1103.45 263.202C1102.9 263.097 1102.57 262.559 1102.66 261.588C1102.76 260.416 1102.97 259.255 1103.26 258.117C1103.8 256.225 1104.46 254.368 1105 252.494C1105.19 251.886 1105.43 251.279 1105.62 250.758C1105.31 250.394 1105.01 250.533 1104.75 250.637C1102.71 251.481 1100.56 252.065 1098.37 252.372C1098.13 252.462 1097.89 252.579 1097.66 252.719C1097.66 253.275 1097.8 253.795 1097.84 254.316C1097.94 255.274 1097.82 256.243 1097.49 257.146C1097.15 258.05 1096.61 258.863 1095.91 259.522C1095.36 260.077 1094.64 260.446 1093.87 260.581C1093.41 260.671 1092.94 260.669 1092.49 260.574C1092.04 260.48 1091.61 260.296 1091.22 260.032C1090.84 259.768 1090.52 259.431 1090.27 259.039C1090.02 258.647 1089.85 258.21 1089.78 257.752C1089.66 257.005 1089.58 256.252 1089.55 255.496C1089.13 255.305 1089 255.635 1088.79 255.826C1087.61 256.919 1086.48 258.065 1085.32 259.141C1084.59 259.768 1083.82 260.348 1083.02 260.876C1082.66 261.093 1082.28 261.273 1081.89 261.414C1081.44 261.642 1080.95 261.755 1080.45 261.741C1079.95 261.727 1079.47 261.587 1079.04 261.334C1078.6 261.081 1078.25 260.724 1077.99 260.295C1077.73 259.866 1077.59 259.38 1077.57 258.88C1077.51 258.048 1077.51 257.213 1077.57 256.381C1077.57 255.878 1077.57 255.357 1077.69 254.837C1077.19 254.837 1077.1 255.132 1076.95 255.34C1074.99 257.978 1073.07 260.546 1071.09 263.254C1070.05 264.625 1068.94 265.961 1067.83 267.297C1067.28 268.007 1066.56 268.563 1065.73 268.911C1065.5 269.043 1065.23 269.121 1064.96 269.141C1064.69 269.161 1064.42 269.122 1064.17 269.026C1063.91 268.93 1063.68 268.78 1063.49 268.587C1063.3 268.393 1063.15 268.16 1063.06 267.905C1062.72 267.14 1062.55 266.312 1062.56 265.475C1062.51 263.262 1062.7 261.051 1063.13 258.88C1063.46 257.145 1063.84 255.409 1064.19 253.674C1063.81 253.379 1063.65 253.674 1063.46 253.917C1062.25 254.958 1061.05 256.051 1059.8 257.058C1058.79 257.891 1057.61 258.484 1056.34 258.793C1055.99 258.939 1055.61 258.998 1055.23 258.965C1054.85 258.931 1054.49 258.807 1054.17 258.603C1053.85 258.399 1053.58 258.12 1053.39 257.79C1053.2 257.461 1053.09 257.091 1053.08 256.711C1052.97 255.557 1052.97 254.394 1053.08 253.24C1053.08 252.285 1053.3 251.348 1053.41 250.394C1053.44 250.111 1053.44 249.826 1053.41 249.543C1053.07 249.696 1052.75 249.882 1052.45 250.099C1051.5 251.018 1050.62 251.991 1049.65 252.876C1048.4 253.986 1047.13 255.062 1045.8 256.069C1045.11 256.541 1044.36 256.904 1043.56 257.145C1043.38 257.2 1043.19 257.217 1043.01 257.195C1042.82 257.173 1042.64 257.113 1042.48 257.019C1042.31 256.925 1042.17 256.798 1042.06 256.646C1041.95 256.495 1041.87 256.322 1041.83 256.138C1041.71 255.692 1041.62 255.24 1041.55 254.785C1041.05 254.785 1040.91 255.097 1040.7 255.357L1036.07 261.726C1035.33 262.75 1034.6 263.774 1033.82 264.729C1033.21 265.463 1032.55 266.153 1031.84 266.794C1031.49 267.117 1031.09 267.381 1030.65 267.575C1030.25 267.796 1029.78 267.852 1029.35 267.732C1028.91 267.612 1028.54 267.325 1028.31 266.933C1027.72 266.025 1027.42 264.961 1027.44 263.878C1027.41 261.612 1027.58 259.347 1027.94 257.11C1028.15 255.687 1028.45 254.281 1028.72 252.876C1028.86 252.164 1029 251.47 1028.41 250.915C1028.28 250.892 1028.14 250.892 1028.01 250.915C1025.88 251.628 1023.7 252.208 1021.5 252.65C1021.5 252.65 1021.5 252.65 1021.27 252.876C1021.27 253.483 1021.36 254.194 1021.37 254.889C1021.41 255.817 1021.24 256.742 1020.85 257.589C1020.47 258.437 1019.9 259.182 1019.17 259.765C1018.44 260.391 1017.48 260.702 1016.52 260.633C1015.86 260.622 1015.21 260.406 1014.68 260.015C1014.14 259.623 1013.74 259.076 1013.52 258.446C1013.07 257.345 1012.99 256.129 1013.28 254.975C1013.49 254.195 1013.68 253.396 1013.92 252.424C1013.65 252.495 1013.39 252.582 1013.14 252.685L1004.58 257.162C1003.19 257.881 1002.08 259.049 1001.44 260.477C999.942 263.607 997.892 266.441 995.389 268.842C994.583 269.638 993.7 270.353 992.754 270.976C992.053 271.435 991.288 271.786 990.484 272.018C989.973 272.2 989.418 272.216 988.898 272.064C988.378 271.911 987.92 271.597 987.589 271.167C987.204 270.742 986.964 270.206 986.902 269.636C986.839 269.065 986.959 268.49 987.242 267.992C987.619 267.314 988.06 266.675 988.559 266.083C990.426 263.898 992.647 262.044 995.129 260.598C996.551 259.713 997.989 258.863 999.428 258.03C1000.44 257.341 1001.21 256.356 1001.64 255.209C1002.07 254.062 1002.13 252.81 1001.82 251.626C1001.64 251.053 1001.29 250.548 1000.81 250.176C1000.34 249.805 999.768 249.585 999.168 249.543C998.011 249.411 996.84 249.47 995.701 249.717C992.841 250.324 989.981 250.897 987.034 251.452C985.814 251.739 984.544 251.739 983.324 251.452C982.442 251.243 981.625 250.816 980.95 250.21C980.275 249.604 979.762 248.837 979.459 247.981C978.791 246.181 978.6 244.238 978.904 242.341C979.413 238.84 980.59 235.47 982.371 232.414C985.277 227.169 989.367 222.677 994.314 219.294C996.408 217.865 998.765 216.868 1001.25 216.361C1003 215.964 1004.83 216.03 1006.55 216.552C1008.02 216.939 1009.29 217.871 1010.1 219.161C1010.91 220.451 1011.2 222 1010.9 223.494C1010.79 224.326 1010.58 225.141 1010.28 225.924C1009.43 228.409 1008.21 230.749 1006.66 232.866C1005.87 233.924 1004.93 234.855 1003.87 235.625C1003.01 236.284 1001.95 236.632 1000.87 236.614C1000.69 236.629 1000.51 236.579 1000.36 236.475C1000.21 236.37 1000.1 236.217 1000.05 236.041C1000.01 235.866 1000.03 235.683 1000.11 235.519C1000.18 235.356 1000.31 235.222 1000.47 235.139C1000.67 235.009 1000.89 234.91 1001.13 234.844C1002.38 234.433 1003.5 233.689 1004.37 232.692C1006.67 230.274 1008.28 227.275 1009.01 224.015C1009.14 223.492 1009.2 222.955 1009.19 222.418C1009.2 221.511 1008.92 220.624 1008.38 219.898C1007.83 219.172 1007.06 218.648 1006.19 218.409C1004.82 217.972 1003.35 217.894 1001.94 218.184C1000.06 218.517 998.253 219.2 996.62 220.197C989.018 224.679 983.478 231.971 981.192 240.502C980.596 242.391 980.524 244.406 980.984 246.333C981.098 246.797 981.255 247.251 981.452 247.687C981.722 248.325 982.169 248.872 982.741 249.263C983.312 249.654 983.984 249.872 984.676 249.89C985.386 249.92 986.096 249.861 986.791 249.717C989.6 249.162 992.39 248.537 995.216 247.981C996.502 247.745 997.809 247.646 999.116 247.687C999.763 247.677 1000.4 247.799 1001 248.045C1001.6 248.291 1002.14 248.657 1002.6 249.12C1003.05 249.583 1003.4 250.133 1003.63 250.737C1003.87 251.34 1003.98 251.986 1003.95 252.633C1003.95 253.153 1003.95 253.691 1003.95 254.229C1003.98 254.555 1004.02 254.88 1004.07 255.201C1004.49 255.11 1004.91 254.982 1005.3 254.819C1008.77 253.084 1012.08 251.348 1015.45 249.491C1015.89 249.199 1016.29 248.836 1016.62 248.415C1017.24 247.679 1018.04 247.127 1018.95 246.819C1019.06 246.774 1019.18 246.751 1019.29 246.752C1019.41 246.753 1019.53 246.777 1019.64 246.824C1019.75 246.871 1019.85 246.939 1019.93 247.025C1020.02 247.11 1020.08 247.211 1020.13 247.322C1020.2 247.485 1020.21 247.67 1020.16 247.842C1020.11 248.015 1020 248.163 1019.85 248.259C1019.59 248.398 1019.26 248.433 1019.03 248.589C1018.57 248.857 1018.16 249.197 1017.8 249.596C1016.47 251.298 1015.6 253.31 1015.25 255.444C1015.14 256.087 1015.14 256.745 1015.25 257.388C1015.28 257.728 1015.41 258.054 1015.62 258.322C1015.83 258.591 1016.11 258.792 1016.44 258.9C1016.76 259.007 1017.11 259.017 1017.44 258.927C1017.77 258.837 1018.06 258.652 1018.29 258.394C1018.92 257.801 1019.37 257.032 1019.56 256.184C1019.76 255.337 1019.69 254.45 1019.38 253.639C1019.12 253.049 1018.79 252.476 1018.53 251.904C1018.47 251.783 1018.44 251.65 1018.44 251.515C1018.45 251.38 1018.49 251.249 1018.55 251.132C1018.62 251.015 1018.71 250.916 1018.83 250.845C1018.94 250.774 1019.07 250.732 1019.21 250.724C1019.63 250.68 1020.05 250.68 1020.47 250.724C1022.56 250.783 1024.64 250.404 1026.57 249.613L1029.62 248.485C1030.14 247.685 1030.51 246.797 1030.7 245.864C1031.75 242.497 1032.98 239.194 1034.37 235.955C1035.48 233.247 1036.81 230.64 1038.36 228.163C1039.18 226.913 1040.1 225.75 1041.03 224.57C1041.29 224.246 1041.62 223.981 1041.98 223.789C1042.16 223.698 1042.35 223.654 1042.54 223.66C1042.73 223.666 1042.92 223.723 1043.09 223.825C1043.25 223.926 1043.39 224.07 1043.48 224.24C1043.57 224.41 1043.62 224.602 1043.61 224.796C1043.59 225.21 1043.51 225.619 1043.37 226.01C1042.77 228.069 1041.97 230.068 1041 231.98C1039.22 235.767 1037.16 239.416 1034.84 242.897C1032.44 246.336 1030.89 250.298 1030.32 254.455C1029.95 257.041 1029.66 259.661 1029.35 262.264C1029.3 262.842 1029.3 263.422 1029.35 264C1029.36 264.635 1029.58 265.248 1029.99 265.735C1030.32 265.651 1030.65 265.516 1030.94 265.336C1031.47 264.852 1031.96 264.324 1032.4 263.757C1035.68 259.349 1038.94 254.935 1042.18 250.515C1042.66 249.766 1043.11 248.989 1043.51 248.19C1043.86 247.565 1044.19 246.923 1044.55 246.315C1044.71 246.066 1044.93 245.854 1045.17 245.691C1045.32 245.581 1045.5 245.521 1045.68 245.521C1045.86 245.521 1046.03 245.581 1046.18 245.691C1046.33 245.796 1046.43 245.951 1046.47 246.128C1046.51 246.304 1046.48 246.488 1046.39 246.645C1046.23 246.975 1046.04 247.27 1045.87 247.582C1044.81 249.458 1044.09 251.51 1043.75 253.639C1043.71 254.084 1043.71 254.531 1043.75 254.975C1044.13 254.915 1044.5 254.798 1044.84 254.628C1045.73 254.031 1046.59 253.388 1047.41 252.702C1049.28 251.104 1051.02 249.364 1052.61 247.495C1053.27 246.732 1053.98 246.003 1054.67 245.257C1054.87 245.032 1055.09 244.829 1055.33 244.649C1055.48 244.499 1055.68 244.405 1055.88 244.386C1056.09 244.367 1056.3 244.423 1056.48 244.545C1056.63 244.637 1056.75 244.776 1056.82 244.942C1056.89 245.108 1056.9 245.291 1056.86 245.465C1056.72 246.177 1056.51 246.853 1056.35 247.565C1055.99 249.127 1055.56 250.689 1055.3 252.268C1055.12 253.416 1055.06 254.579 1055.12 255.739C1055.12 257.006 1055.87 257.475 1057.07 256.919C1057.73 256.65 1058.36 256.288 1058.92 255.843C1060.08 254.923 1061.19 253.917 1062.39 252.945C1062.75 252.615 1063.06 252.251 1063.41 251.938C1065.22 250.371 1066.51 248.288 1067.1 245.968C1067.64 243.834 1068.52 241.786 1069.27 239.703C1069.56 239.176 1069.68 238.567 1069.6 237.968C1069.39 237.8 1069.14 237.685 1068.87 237.63C1068.61 237.576 1068.33 237.585 1068.07 237.655C1066.24 237.881 1064.42 238.141 1062.58 238.332C1061.87 238.384 1061.16 238.384 1060.45 238.332C1060.37 238.336 1060.3 238.323 1060.23 238.293C1060.16 238.264 1060.09 238.219 1060.04 238.163C1059.99 238.106 1059.96 238.039 1059.94 237.966C1059.92 237.893 1059.91 237.817 1059.93 237.742C1059.94 237.633 1059.98 237.528 1060.04 237.438C1060.11 237.347 1060.19 237.273 1060.29 237.222C1061.02 236.964 1061.76 236.772 1062.53 236.649C1064.54 236.371 1066.56 236.163 1068.58 235.92C1068.92 235.92 1069.29 235.92 1069.63 235.798C1070.01 235.759 1070.36 235.624 1070.67 235.405C1070.97 235.185 1071.21 234.89 1071.37 234.549C1071.8 233.629 1072.18 232.692 1072.65 231.79C1073.45 230.262 1074.26 228.735 1075.13 227.243C1075.42 226.799 1075.78 226.406 1076.2 226.08C1076.3 226.024 1076.42 225.994 1076.53 225.994C1076.65 225.994 1076.76 226.024 1076.86 226.08C1076.96 226.14 1077.04 226.221 1077.09 226.318C1077.15 226.414 1077.18 226.523 1077.19 226.635C1077.15 227.107 1077.04 227.569 1076.86 228.006C1076.17 229.603 1075.42 231.165 1074.71 232.727C1074.45 233.292 1074.23 233.872 1074.04 234.462C1074 234.657 1074 234.857 1074.04 235.052C1074.62 235.317 1075.28 235.378 1075.91 235.226C1077.28 235.104 1078.63 234.896 1080 234.775C1082.79 234.532 1085.58 234.289 1088.39 234.115C1089.3 233.954 1090.23 234.044 1091.09 234.375C1091.09 234.584 1091.09 234.879 1091.09 235.035C1090.93 235.27 1090.69 235.441 1090.42 235.521C1089.29 235.694 1088.16 235.816 1086.95 235.92C1082.79 236.302 1078.65 236.701 1074.47 237.031C1073.87 237.025 1073.29 237.21 1072.81 237.56C1072.32 237.91 1071.96 238.406 1071.78 238.974C1071.28 240.38 1070.69 241.751 1070.22 243.174C1068.96 247.027 1067.69 250.88 1066.51 254.75C1065.55 257.961 1064.96 261.276 1064.78 264.625C1064.76 265.207 1064.81 265.791 1064.94 266.36C1064.95 266.498 1065 266.63 1065.08 266.74C1065.16 266.851 1065.27 266.936 1065.4 266.985C1065.53 267.034 1065.67 267.045 1065.81 267.018C1065.94 266.99 1066.07 266.924 1066.17 266.829C1066.73 266.399 1067.24 265.897 1067.67 265.336C1069.27 263.236 1070.81 261.119 1072.35 258.984C1073.59 257.249 1074.76 255.513 1076.01 253.899C1076.83 252.806 1077.75 251.713 1078.56 250.672C1079.11 250.047 1079.56 249.338 1079.9 248.571C1080.13 248.029 1080.44 247.516 1080.8 247.044C1081 246.834 1081.27 246.699 1081.56 246.662C1081.66 246.652 1081.77 246.664 1081.86 246.698C1081.96 246.733 1082.05 246.789 1082.12 246.862C1082.2 246.935 1082.25 247.024 1082.29 247.122C1082.32 247.219 1082.33 247.323 1082.32 247.426C1082.23 247.834 1082.11 248.234 1081.96 248.624C1081.13 250.883 1080.48 253.204 1080.02 255.565C1079.75 256.608 1079.69 257.693 1079.84 258.759C1079.84 258.965 1079.89 259.169 1079.99 259.351C1080.08 259.532 1080.23 259.686 1080.4 259.796C1080.58 259.906 1080.78 259.969 1080.98 259.979C1081.19 259.988 1081.39 259.945 1081.58 259.852C1082.61 259.554 1083.56 259.019 1084.35 258.29C1086.51 256.41 1088.51 254.342 1090.31 252.112C1091.46 250.741 1092.67 249.422 1093.88 248.103C1094.41 247.526 1095.08 247.106 1095.83 246.888C1096.02 246.814 1096.24 246.81 1096.44 246.876C1096.65 246.942 1096.82 247.075 1096.94 247.253C1097.2 247.635 1097.13 248.225 1096.73 248.329C1094.63 248.936 1093.85 250.706 1093.05 252.442C1092.7 253.201 1092.44 253.999 1092.27 254.819C1092.13 255.638 1092.08 256.471 1092.13 257.301C1092.12 257.634 1092.21 257.964 1092.39 258.242C1092.58 258.519 1092.84 258.731 1093.16 258.846C1093.53 258.978 1093.93 259.002 1094.31 258.916C1094.69 258.83 1095.04 258.637 1095.32 258.36C1095.93 257.747 1096.35 256.965 1096.51 256.114C1096.68 255.264 1096.58 254.383 1096.24 253.587C1095.96 252.98 1095.65 252.407 1095.39 251.852C1095.36 251.751 1095.35 251.646 1095.36 251.541C1095.37 251.437 1095.4 251.335 1095.45 251.242C1095.5 251.15 1095.57 251.069 1095.65 251.004C1095.73 250.938 1095.83 250.89 1095.93 250.862C1096.34 250.811 1096.76 250.811 1097.18 250.862C1099.51 250.932 1101.82 250.5 1103.97 249.596L1107.25 248.398M998.769 260.945C995.772 262.551 993.013 264.566 990.57 266.933C990.158 267.36 989.786 267.825 989.461 268.321C989.289 268.564 989.16 268.834 989.079 269.12C989.019 269.321 989.019 269.536 989.081 269.737C989.143 269.937 989.263 270.115 989.426 270.248C989.558 270.372 989.725 270.454 989.905 270.481C990.084 270.509 990.268 270.482 990.432 270.404C990.922 270.202 991.397 269.964 991.853 269.692C994.766 267.809 997.086 265.137 998.544 261.987C998.657 261.649 998.733 261.3 998.769 260.945ZM1034.91 238.697C1035.26 238.436 1035.38 238.384 1035.43 238.28C1037.18 234.902 1038.91 231.506 1040.63 228.093C1040.63 227.937 1040.63 227.711 1040.63 227.381C1040.34 227.538 1040.13 227.572 1040.04 227.694C1038.54 229.984 1037.24 232.406 1036.18 234.931C1035.56 236.117 1035.12 237.385 1034.86 238.697M1127.32 262.143C1125.9 263.133 1124.78 264.512 1124.12 266.117C1124.04 266.248 1123.99 266.395 1123.98 266.547C1123.97 266.699 1123.99 266.852 1124.04 266.994C1124.1 267.136 1124.19 267.264 1124.3 267.367C1124.41 267.471 1124.54 267.548 1124.69 267.592C1125.51 266.942 1126.17 266.114 1126.63 265.17C1127.09 264.227 1127.32 263.192 1127.32 262.143Z" fill="#1D1D1B"/>
<path d="M814.124 243.783C813.794 243.748 813.491 243.584 813.28 243.328C813.07 243.071 812.968 242.742 812.997 242.412C812.997 242.247 813.03 242.084 813.096 241.932C813.161 241.781 813.257 241.645 813.377 241.533C813.498 241.42 813.64 241.334 813.795 241.279C813.951 241.224 814.116 241.202 814.28 241.214C814.58 241.202 814.873 241.302 815.104 241.495C815.334 241.687 815.485 241.958 815.528 242.256C815.54 242.449 815.512 242.643 815.447 242.825C815.382 243.008 815.281 243.176 815.15 243.318C815.019 243.461 814.861 243.575 814.684 243.655C814.508 243.735 814.317 243.778 814.124 243.783Z" fill="#1D1D1B"/>
<path d="M894.518 241.229C894.681 241.226 894.843 241.258 894.994 241.321C895.144 241.385 895.279 241.48 895.39 241.599C895.501 241.719 895.586 241.861 895.639 242.015C895.692 242.17 895.712 242.333 895.697 242.496C895.654 242.855 895.48 243.185 895.207 243.423C894.935 243.66 894.585 243.787 894.224 243.781C893.899 243.717 893.61 243.534 893.414 243.267C893.218 243 893.13 242.669 893.166 242.34C893.177 242.176 893.221 242.016 893.296 241.87C893.37 241.724 893.474 241.595 893.601 241.491C893.728 241.386 893.875 241.309 894.033 241.264C894.19 241.22 894.356 241.208 894.518 241.229Z" fill="#1D1D1B"/>
<path d="M1082.25 241.234C1082.58 241.21 1082.91 241.317 1083.16 241.532C1083.41 241.746 1083.56 242.051 1083.59 242.38C1083.55 242.738 1083.4 243.074 1083.15 243.33C1082.89 243.586 1082.56 243.747 1082.2 243.786C1082.04 243.779 1081.88 243.739 1081.73 243.669C1081.58 243.598 1081.45 243.498 1081.34 243.375C1081.23 243.252 1081.15 243.107 1081.1 242.951C1081.05 242.795 1081.03 242.63 1081.04 242.467C1081.02 242.302 1081.04 242.136 1081.1 241.981C1081.16 241.826 1081.24 241.684 1081.36 241.567C1081.48 241.449 1081.62 241.358 1081.77 241.301C1081.92 241.244 1082.09 241.221 1082.25 241.234Z" fill="#1D1D1B"/>
</svg>
      <p style="font-size:11px;font-weight:300;color:var(--smoke);letter-spacing:.04em">Engineering Solutions Division</p>
    </div>
    <div style="background:#fff;border:1px solid var(--bone);padding:48px 40px;display:flex;flex-direction:column;align-items:center;gap:16px">
    <svg style="height:auto;width:420px;max-width:100%;display:block;" viewBox="0 0 1207 325" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1078.67 207.834H1097.26V124.734H1143.35V110.242H1032.58V124.612H1078.81L1078.67 207.834Z" fill="#EC2128"/>
<path d="M985.206 149.345V110.242H1003.73V207.834H985.206V164.168H907.387V207.834H889.119V110.242H907.508V149.397L985.206 149.345Z" fill="#EC2128"/>
<path d="M784.943 153.216V166.785H824.957V193.208H747.677V124.808H824.975V137.872L843.207 134.771V126.898C843.207 126.898 844.599 110.247 823.583 110.247H750.965C750.965 110.247 732.332 109.289 729.81 124.181C729.201 127.283 728.95 130.445 729.062 133.604V187.861C729.062 187.861 727.322 209.389 748.582 207.699H821.756H824.018C827.758 207.839 842.72 207.316 843.155 190.404V153.025L784.943 153.216Z" fill="#EC2128"/>
<path d="M682.019 110.207H663.49V207.869H682.019V110.207Z" fill="#EC2128"/>
<path d="M630.085 192.977V208.009H536.033V110.086H554.214V193.012L630.085 192.977Z" fill="#EC2128"/>
<path d="M347.846 110.189H331.51L304.579 184.824L276.377 110.137H264.181L235.545 184.824L208.457 110.189L189.441 110.137L227.159 207.955H241.008L269.801 135.062L297.185 207.955H310.737L347.846 110.189Z" fill="#EC2128"/>
<path d="M174.166 110.137V124.855H127.749V207.955H109.812V124.698H63.5V110.137H174.166Z" fill="#EC2128"/>
<path d="M1037.4 254.027C1040.21 253.326 1042.95 252.34 1045.56 251.084C1045.75 250.544 1045.96 249.917 1046.2 249.342C1046.99 247.356 1047.75 245.37 1048.59 243.42C1048.86 242.885 1049.22 242.397 1049.65 241.974C1049.74 241.895 1049.85 241.842 1049.97 241.821C1050.09 241.799 1050.21 241.811 1050.33 241.853C1050.44 241.896 1050.54 241.969 1050.62 242.063C1050.69 242.158 1050.74 242.272 1050.76 242.392C1050.83 242.879 1050.72 243.373 1050.45 243.785C1049.22 246.231 1048.21 248.778 1047.42 251.397C1046.59 254.254 1045.84 257.145 1045.09 260.019C1045 260.56 1044.95 261.107 1044.95 261.656C1045.3 261.464 1045.56 261.412 1045.65 261.255C1046.17 260.437 1046.62 259.514 1047.13 258.747C1048.24 256.918 1049.28 255.072 1050.5 253.33C1051.28 252.317 1052.13 251.363 1053.04 250.474C1053.29 250.21 1053.59 249.992 1053.91 249.829C1054.08 249.721 1054.27 249.652 1054.47 249.628C1054.67 249.604 1054.87 249.625 1055.06 249.691C1055.25 249.756 1055.42 249.864 1055.56 250.005C1055.7 250.147 1055.81 250.319 1055.88 250.509C1056.11 251.062 1056.24 251.652 1056.26 252.251C1056.26 253.348 1056.26 254.428 1056.08 255.525C1055.93 256.52 1056.03 257.538 1056.36 258.486C1056.66 258.374 1056.94 258.228 1057.2 258.051C1058.09 257.232 1058.94 256.309 1059.84 255.56C1060.37 255.06 1060.96 254.622 1061.58 254.253C1061.78 254.109 1062.01 254.013 1062.25 253.971C1062.5 253.93 1062.75 253.946 1062.98 254.017C1063.22 254.088 1063.43 254.212 1063.61 254.38C1063.79 254.548 1063.93 254.755 1064.02 254.985C1064.19 255.368 1064.35 255.786 1064.54 256.152C1064.75 256.584 1065.01 256.993 1065.31 257.371C1065.5 257.63 1065.78 257.813 1066.1 257.892C1066.42 257.971 1066.75 257.941 1067.05 257.807C1067.88 257.447 1068.68 256.991 1069.41 256.448C1070.96 255.194 1072.46 253.853 1073.93 252.494C1074.42 252.059 1074.77 251.449 1075.22 250.962C1075.94 250.147 1076.71 249.373 1077.52 248.645C1078.22 248.053 1079.08 247.668 1079.99 247.53C1081.97 247.182 1083.14 248.471 1082.63 250.474C1082.52 250.944 1082.35 251.4 1082.13 251.833C1080.74 254.65 1078.29 256.803 1075.33 257.824C1073.78 258.347 1073.59 258.765 1073.76 260.332C1073.81 260.569 1073.87 260.802 1073.95 261.029C1074.39 262.562 1075.08 263.067 1076.61 262.666C1077.79 262.355 1078.92 261.91 1079.99 261.343C1081.65 260.441 1083.18 259.323 1084.55 258.016C1086.55 256.152 1088.51 254.254 1090.53 252.407C1091.07 251.933 1091.48 251.335 1091.73 250.666C1092.25 249.237 1092.83 247.826 1093.47 246.433C1093.69 245.93 1093.99 245.466 1094.36 245.057C1094.47 244.963 1094.6 244.895 1094.73 244.856C1094.87 244.817 1095.02 244.808 1095.16 244.831C1095.34 244.872 1095.5 244.983 1095.6 245.139C1095.7 245.295 1095.74 245.484 1095.7 245.667C1095.63 245.965 1095.54 246.256 1095.42 246.537L1091.28 257.249C1090.88 258.091 1090.65 259.002 1090.6 259.932C1090.86 259.702 1091.1 259.452 1091.32 259.183C1092.57 257.102 1093.99 255.127 1095.56 253.278C1096.29 252.458 1097.06 251.678 1097.87 250.944C1098.34 250.553 1098.86 250.23 1099.42 249.986C1099.62 249.878 1099.85 249.815 1100.08 249.802C1100.31 249.789 1100.54 249.826 1100.75 249.91C1100.96 249.995 1101.16 250.125 1101.31 250.291C1101.47 250.458 1101.59 250.657 1101.67 250.874C1101.93 251.558 1102.11 252.272 1102.21 252.999C1102.36 254.079 1102.4 255.177 1102.59 256.257C1102.71 256.971 1102.92 257.667 1103.21 258.329C1103.26 258.446 1103.32 258.551 1103.41 258.639C1103.5 258.727 1103.6 258.794 1103.72 258.837C1103.84 258.881 1103.96 258.898 1104.08 258.889C1104.21 258.879 1104.32 258.843 1104.43 258.782C1105.15 258.452 1105.82 258.036 1106.43 257.546C1108.17 255.978 1109.91 254.376 1111.65 252.721C1112.02 252.326 1112.3 251.857 1112.47 251.345C1113.56 248.256 1114.64 245.155 1115.71 242.043C1115.81 241.667 1115.89 241.283 1115.93 240.894C1115.72 240.7 1115.45 240.563 1115.17 240.496C1114.89 240.43 1114.59 240.435 1114.31 240.511C1112.45 240.737 1110.59 240.998 1108.71 241.207C1107.99 241.251 1107.26 241.251 1106.54 241.207C1106.46 241.21 1106.38 241.197 1106.31 241.168C1106.24 241.138 1106.18 241.094 1106.13 241.038C1106.07 240.982 1106.03 240.915 1106.01 240.842C1105.98 240.769 1105.97 240.692 1105.98 240.616C1106 240.503 1106.05 240.396 1106.11 240.303C1106.18 240.21 1106.26 240.132 1106.36 240.075C1107.1 239.815 1107.87 239.622 1108.64 239.501C1110.7 239.204 1112.75 238.996 1114.78 238.752L1115.71 238.647C1116.13 238.61 1116.54 238.456 1116.89 238.201C1117.23 237.945 1117.5 237.599 1117.65 237.201C1118 236.365 1118.37 235.46 1118.79 234.711C1119.62 233.108 1120.53 231.506 1121.4 229.921C1121.69 229.464 1122.06 229.058 1122.49 228.719C1122.59 228.659 1122.7 228.627 1122.81 228.627C1122.93 228.627 1123.04 228.659 1123.14 228.719C1123.25 228.803 1123.35 228.909 1123.42 229.032C1123.49 229.155 1123.54 229.292 1123.55 229.433C1123.48 229.918 1123.34 230.389 1123.12 230.827C1122.44 232.377 1121.71 233.909 1121 235.46C1120.77 235.965 1120.56 236.453 1120.35 236.975C1120.29 237.21 1120.23 237.448 1120.19 237.689C1120.38 237.852 1120.6 237.967 1120.84 238.025C1121.08 238.083 1121.33 238.081 1121.57 238.02C1123.2 237.864 1124.82 237.654 1126.46 237.515C1129.31 237.271 1132.15 237.045 1135 236.836C1135.72 236.783 1136.45 236.783 1137.18 236.836C1137.25 236.837 1137.33 236.855 1137.4 236.888C1137.47 236.922 1137.53 236.97 1137.57 237.03C1137.62 237.09 1137.66 237.16 1137.68 237.235C1137.69 237.31 1137.69 237.387 1137.68 237.463C1137.67 237.578 1137.64 237.69 1137.59 237.792C1137.53 237.894 1137.46 237.984 1137.37 238.055C1136.97 238.199 1136.55 238.293 1136.13 238.334L1129.05 239.013C1126.27 239.274 1123.48 239.553 1120.7 239.762C1120.12 239.76 1119.55 239.943 1119.08 240.284C1118.62 240.626 1118.27 241.108 1118.09 241.66C1117.48 243.402 1116.79 244.935 1116.23 246.607C1115.01 250.352 1113.81 254.114 1112.75 257.894C1111.81 261.048 1111.23 264.296 1111.01 267.578C1110.98 268.066 1110.98 268.554 1111.01 269.041C1111.01 269.303 1111.08 269.56 1111.21 269.786C1111.34 270.012 1111.53 270.199 1111.76 270.33C1112.08 270.309 1112.39 270.213 1112.66 270.049C1112.94 269.886 1113.17 269.66 1113.34 269.39C1114.04 268.536 1114.73 267.648 1115.38 266.812C1117.41 264.007 1119.38 261.151 1121.45 258.364C1123.07 256.17 1124.79 254.044 1126.67 251.71C1126.67 251.414 1126.67 250.874 1126.67 250.334C1126.68 248.986 1127.05 247.664 1127.74 246.506C1128.43 245.348 1129.42 244.397 1130.6 243.75C1131.24 243.421 1131.95 243.226 1132.67 243.176C1133.09 243.167 1133.5 243.262 1133.87 243.454C1134.05 243.511 1134.2 243.635 1134.29 243.801C1134.38 243.966 1134.41 244.16 1134.36 244.343C1134.21 244.596 1133.97 244.783 1133.7 244.865C1133.35 244.956 1132.99 245.02 1132.63 245.057C1131.53 245.296 1130.53 245.89 1129.79 246.747C1129.05 247.605 1128.6 248.681 1128.53 249.812C1128.47 250.662 1128.51 251.515 1128.65 252.355C1128.95 254.585 1129.31 256.796 1129.66 259.026C1129.74 259.353 1129.84 259.674 1129.97 259.984C1130.63 259.93 1131.24 259.646 1131.71 259.183L1140.22 253.226C1140.72 252.878 1141.23 252.529 1141.75 252.198C1141.94 252.055 1142.15 251.938 1142.38 251.85C1142.55 251.794 1142.74 251.798 1142.91 251.861C1143.09 251.924 1143.23 252.043 1143.33 252.198C1143.44 252.311 1143.5 252.461 1143.5 252.616C1143.5 252.772 1143.44 252.921 1143.33 253.034C1142.92 253.471 1142.47 253.873 1141.99 254.236C1138.9 256.483 1135.77 258.712 1132.65 260.925C1132.27 261.221 1131.87 261.517 1131.47 261.778C1130.89 262.122 1130.41 262.599 1130.05 263.169C1129.7 263.738 1129.49 264.384 1129.43 265.053C1129.24 266.689 1128.74 268.273 1127.95 269.721C1127.6 270.425 1127.18 271.09 1126.68 271.706C1126.29 272.177 1125.81 272.567 1125.28 272.856C1124.93 273.038 1124.54 273.131 1124.15 273.127C1123.75 273.123 1123.37 273.022 1123.02 272.832C1122.68 272.642 1122.39 272.37 1122.17 272.04C1121.96 271.71 1121.83 271.332 1121.8 270.94C1121.7 270.088 1121.88 269.228 1122.3 268.484C1123.24 266.702 1124.49 265.103 1125.99 263.763L1126.82 263.067C1127.16 262.799 1127.43 262.46 1127.63 262.075C1127.82 261.69 1127.92 261.268 1127.94 260.837C1128.01 258.895 1127.8 256.953 1127.31 255.072C1127.31 254.967 1127.15 254.915 1127.01 254.776C1126.5 255.184 1126.06 255.686 1125.73 256.257C1123.22 259.618 1120.75 262.997 1118.23 266.359C1117.13 267.822 1115.97 269.216 1114.75 270.644C1114.16 271.429 1113.37 272.032 1112.45 272.386C1112.22 272.497 1111.96 272.558 1111.7 272.565C1111.44 272.573 1111.18 272.528 1110.94 272.432C1110.7 272.335 1110.48 272.19 1110.3 272.005C1110.12 271.821 1109.97 271.6 1109.88 271.358C1109.5 270.52 1109.31 269.611 1109.32 268.693C1109.28 266.624 1109.46 264.557 1109.86 262.527C1110.17 260.785 1110.59 259.044 1110.97 257.18L1111.13 256.326C1110.68 256.083 1110.5 256.326 1110.3 256.553L1107.32 259.235C1106.62 259.917 1105.74 260.388 1104.78 260.594C1104.16 260.795 1103.49 260.754 1102.91 260.479C1102.32 260.204 1101.86 259.716 1101.61 259.113C1101.2 258.3 1100.95 257.411 1100.88 256.5C1100.78 255.351 1100.64 254.201 1100.48 253.017C1100.48 252.599 1100.48 252.164 1099.81 251.902C1099.48 252.116 1099.18 252.349 1098.88 252.599C1097.13 254.207 1095.61 256.048 1094.36 258.068C1093.14 260.019 1092.05 262.057 1090.88 264.06C1090.62 264.548 1090.43 265.07 1090.13 265.523C1089.86 265.92 1089.52 266.272 1089.14 266.568C1089 266.669 1088.84 266.732 1088.67 266.753C1088.51 266.773 1088.33 266.75 1088.18 266.686C1088.02 266.621 1087.88 266.517 1087.78 266.383C1087.67 266.25 1087.6 266.092 1087.57 265.924C1087.49 265.346 1087.49 264.76 1087.57 264.182C1087.89 262.135 1088.41 260.122 1089.11 258.172C1089.3 257.615 1089.45 257.04 1089.64 256.431C1089.09 256.204 1088.93 256.64 1088.71 256.831C1086.4 259.089 1083.85 261.082 1081.1 262.771C1080.21 263.289 1079.28 263.732 1078.32 264.095C1077.57 264.354 1076.79 264.495 1076.01 264.513C1075.25 264.587 1074.5 264.402 1073.87 263.991C1073.24 263.579 1072.76 262.965 1072.53 262.248C1072.15 261.412 1071.96 260.501 1071.99 259.583C1071.99 258.747 1072.07 257.842 1072.14 257.058C1071.78 256.779 1071.6 257.058 1071.39 257.267C1070.47 257.959 1069.52 258.599 1068.52 259.183C1068.09 259.466 1067.59 259.649 1067.08 259.721C1066.56 259.793 1066.04 259.751 1065.54 259.598C1065.04 259.446 1064.59 259.186 1064.2 258.837C1063.81 258.488 1063.51 258.06 1063.3 257.58C1063.06 257.162 1062.84 256.727 1062.57 256.326C1062.57 256.239 1062.37 256.222 1062.23 256.152C1061.58 256.152 1061.2 256.727 1060.76 257.128C1059.93 257.929 1059.15 258.782 1058.31 259.583C1057.93 259.969 1057.51 260.319 1057.06 260.629C1055.88 261.378 1054.9 261.029 1054.54 259.705C1054.34 258.944 1054.25 258.158 1054.26 257.371C1054.26 256.152 1054.36 254.933 1054.43 253.731C1054.45 253.43 1054.45 253.127 1054.43 252.825C1054.41 252.736 1054.38 252.652 1054.32 252.58C1054.26 252.509 1054.19 252.452 1054.1 252.414C1054.02 252.377 1053.93 252.36 1053.84 252.364C1053.75 252.369 1053.66 252.396 1053.58 252.442C1053.43 252.536 1053.3 252.661 1053.2 252.808C1052.08 254.393 1050.9 255.943 1049.89 257.615C1048.52 259.897 1047.28 262.266 1045.98 264.582C1045.64 265.299 1045.15 265.93 1044.53 266.428C1044.38 266.576 1044.18 266.676 1043.97 266.715C1043.76 266.755 1043.54 266.733 1043.35 266.652C1043.15 266.571 1042.98 266.435 1042.85 266.259C1042.73 266.084 1042.66 265.876 1042.65 265.662C1042.6 265.118 1042.6 264.569 1042.65 264.025C1042.86 261.233 1043.36 258.471 1044.15 255.786C1044.32 255.142 1044.48 254.497 1044.64 253.905C1044.38 253.505 1044.06 253.609 1043.8 253.731C1041.91 254.55 1039.99 255.333 1038.11 256.187C1037.03 256.772 1036.22 257.76 1035.85 258.939C1034.87 261.238 1033.51 263.352 1031.82 265.192C1030.78 266.392 1029.53 267.385 1028.13 268.118C1027.8 268.283 1027.46 268.401 1027.1 268.467C1026.84 268.486 1026.58 268.451 1026.34 268.363C1026.09 268.275 1025.87 268.135 1025.68 267.954C1025.49 267.773 1025.35 267.554 1025.25 267.312C1025.15 267.071 1025.11 266.811 1025.12 266.55C1025.11 265.689 1025.38 264.848 1025.88 264.147C1026.71 262.954 1027.64 261.829 1028.65 260.785C1030.11 259.406 1031.67 258.137 1033.31 256.988C1033.96 256.593 1034.5 256.044 1034.88 255.391C1035.27 254.738 1035.49 254.001 1035.52 253.243C1035.57 252.338 1035.57 251.431 1035.52 250.526C1035.53 250.37 1035.5 250.214 1035.42 250.077C1035.35 249.94 1035.23 249.828 1035.09 249.756C1034.95 249.684 1034.8 249.654 1034.64 249.67C1034.48 249.686 1034.34 249.747 1034.22 249.847C1033.37 250.324 1032.56 250.865 1031.8 251.467C1029.88 253.156 1028.2 255.101 1026.8 257.249C1023.06 262.941 1020.01 269.064 1017.72 275.486C1016.87 277.82 1016.19 280.223 1015.41 282.592C1015.19 283.285 1014.94 283.965 1014.64 284.63C1014.56 284.795 1014.42 284.925 1014.25 285.001C1014.08 285.077 1013.89 285.094 1013.7 285.048C1013.52 285.023 1013.35 284.93 1013.24 284.789C1013.12 284.647 1013.05 284.466 1013.06 284.282C1013 283.702 1013 283.119 1013.06 282.54C1013.81 274.971 1015.17 267.475 1017.11 260.123C1017.58 258.382 1018.09 256.64 1018.59 254.898C1018.68 254.55 1018.85 254.201 1018.59 253.783C1018.3 253.783 1017.95 253.94 1017.64 254.062C1015.77 254.798 1013.83 255.312 1011.84 255.595C1011.09 255.595 1010.89 255.961 1010.99 256.71C1011.24 257.903 1011.16 259.14 1010.78 260.297C1010.41 261.398 1009.74 262.374 1008.85 263.119C1008.38 263.532 1007.81 263.817 1007.2 263.946C1006.59 264.074 1005.95 264.042 1005.35 263.853C1004.76 263.664 1004.22 263.324 1003.79 262.866C1003.37 262.408 1003.06 261.847 1002.92 261.238L1002.76 260.524L1002.55 259.653C1002.08 260.245 1001.73 260.646 1001.42 261.064C999.682 263.363 998.064 265.68 996.324 268.031C995.631 268.871 994.881 269.662 994.08 270.4C993.763 270.683 993.405 270.918 993.019 271.097C992.822 271.216 992.603 271.295 992.375 271.329C992.147 271.363 991.914 271.351 991.691 271.294C991.468 271.238 991.258 271.137 991.074 270.998C990.889 270.86 990.734 270.686 990.618 270.487C989.96 269.527 989.642 268.374 989.713 267.213C989.818 265.018 989.957 262.841 990.183 260.663C990.357 259.113 990.705 257.563 990.983 255.96C990.427 255.873 990.235 256.309 989.957 256.57C987.496 259.016 984.765 261.173 981.815 262.997C980.675 263.698 979.429 264.21 978.126 264.513C977.555 264.635 976.969 264.676 976.387 264.634C975.776 264.591 975.19 264.378 974.695 264.017C974.2 263.657 973.815 263.165 973.586 262.597C972.942 261.204 972.753 259.644 973.046 258.138C973.255 257.127 973.621 256.152 973.916 255.177C974.038 254.776 974.177 254.393 974.351 253.905C974.079 253.877 973.805 253.877 973.533 253.905C971.985 254.219 970.454 254.567 968.888 254.863C968.49 254.911 968.115 255.073 967.806 255.33C967.498 255.586 967.269 255.926 967.149 256.309L966.592 257.859C965.605 260.543 964.208 263.058 962.451 265.314C961.869 266.016 961.235 266.674 960.555 267.282C960.234 267.56 959.861 267.773 959.459 267.909C959.265 268 959.054 268.05 958.839 268.056C958.625 268.062 958.412 268.024 958.213 267.944C958.014 267.864 957.833 267.743 957.682 267.591C957.532 267.438 957.414 267.256 957.336 267.056C957.113 266.558 956.966 266.03 956.901 265.488C956.71 264.224 956.71 262.938 956.901 261.673L957.684 256.814C957.684 256.587 957.684 256.344 957.684 255.891C957.162 256.326 956.797 256.605 956.449 256.936C954.092 259.222 951.497 261.249 948.707 262.98C947.571 263.688 946.324 264.2 945.019 264.495C944.366 264.629 943.697 264.658 943.036 264.582C942.458 264.515 941.91 264.294 941.448 263.942C940.985 263.589 940.626 263.118 940.409 262.579C939.692 260.931 939.563 259.086 940.043 257.354C940.741 254.504 942.161 251.883 944.166 249.742C945.01 248.772 946.106 248.054 947.333 247.669C947.778 247.459 948.273 247.382 948.761 247.447C949.248 247.512 949.707 247.716 950.082 248.036C950.406 248.403 950.617 248.858 950.688 249.343C950.759 249.829 950.688 250.324 950.482 250.77C950.369 251.181 950.212 251.578 950.012 251.955C948.557 254.762 946.057 256.883 943.053 257.859L942.357 258.068C942.181 258.118 942.022 258.215 941.899 258.351C941.776 258.487 941.694 258.654 941.661 258.834C941.448 259.981 941.665 261.165 942.27 262.161C942.412 262.363 942.603 262.525 942.826 262.631C943.048 262.738 943.294 262.786 943.54 262.771C944.392 262.767 945.234 262.582 946.01 262.231C948.262 261.299 950.325 259.965 952.1 258.294C954.135 256.448 956.084 254.55 958.102 252.686C958.631 252.182 959.026 251.553 959.25 250.857C959.498 250.178 959.801 249.52 960.155 248.889C960.198 248.807 960.258 248.734 960.33 248.676C960.402 248.617 960.485 248.574 960.574 248.548C960.664 248.522 960.757 248.514 960.849 248.525C960.942 248.535 961.031 248.564 961.112 248.61C961.284 248.673 961.43 248.794 961.522 248.954C961.614 249.113 961.648 249.3 961.616 249.481C961.514 249.958 961.368 250.424 961.181 250.874C959.848 254.221 958.993 257.739 958.641 261.325C958.519 262.405 958.519 263.503 958.485 264.6C958.467 264.779 958.467 264.96 958.485 265.14C958.512 265.241 958.563 265.335 958.634 265.414C958.704 265.492 958.791 265.554 958.889 265.592C958.987 265.631 959.093 265.647 959.198 265.638C959.302 265.629 959.404 265.595 959.494 265.54C959.688 265.395 959.864 265.225 960.016 265.035C962.156 262.615 963.778 259.782 964.783 256.71C964.887 256.431 964.939 256.135 965.043 255.839C965.276 255.143 965.683 254.518 966.225 254.025C966.767 253.531 967.427 253.184 968.14 253.017C968.732 252.877 969.341 252.808 969.88 252.686C971.481 252.355 973.081 252.007 974.699 251.693C975.292 251.563 975.821 251.231 976.195 250.752C976.827 250.022 977.513 249.34 978.248 248.715C978.998 248.078 979.917 247.672 980.893 247.548C981.264 247.44 981.657 247.436 982.03 247.538C982.403 247.639 982.741 247.84 983.007 248.121C983.273 248.402 983.456 248.75 983.537 249.128C983.619 249.507 983.595 249.899 983.468 250.265C983.286 251.037 982.986 251.778 982.58 252.459C981.111 255.09 978.688 257.055 975.813 257.946C974.647 258.295 974.334 258.765 974.473 259.932C974.538 260.411 974.648 260.884 974.803 261.343C974.84 261.584 974.926 261.815 975.057 262.021C975.188 262.227 975.361 262.403 975.564 262.537C975.768 262.672 975.997 262.763 976.238 262.803C976.478 262.843 976.725 262.832 976.961 262.771C977.683 262.666 978.39 262.472 979.066 262.196C981.365 261.226 983.465 259.838 985.259 258.103C986.825 256.657 988.356 255.159 989.922 253.731C990.879 252.882 991.603 251.803 992.027 250.596C992.323 249.725 992.619 248.854 992.897 248.001C994.529 242.837 996.619 237.829 999.143 233.039C1000.18 231.037 1001.44 229.161 1002.9 227.448C1003.21 227.081 1003.56 226.749 1003.94 226.455C1004.14 226.311 1004.39 226.234 1004.63 226.234C1004.88 226.234 1005.12 226.311 1005.32 226.455C1005.5 226.577 1005.64 226.751 1005.72 226.952C1005.8 227.154 1005.82 227.375 1005.77 227.587C1005.72 228.008 1005.63 228.422 1005.49 228.824C1004.71 230.792 1004 232.812 1003.09 234.728C1001.32 238.604 999.228 242.322 996.829 245.841C994.14 249.842 992.468 254.44 991.958 259.235C991.679 261.273 991.453 263.328 991.244 265.384C991.068 266.472 991.176 267.588 991.557 268.623C991.749 269.076 992.236 269.285 992.584 268.972C993.184 268.44 993.737 267.858 994.237 267.23C995.454 265.715 996.637 264.164 997.716 262.597C1000.06 259.339 1002.38 256.065 1004.68 252.825C1005.23 252.028 1005.88 251.298 1006.61 250.648C1007.13 250.267 1007.72 249.984 1008.35 249.812C1008.71 249.673 1009.15 250.073 1009.23 250.509C1009.32 250.944 1009.23 251.293 1008.8 251.397C1008.2 251.6 1007.65 251.928 1007.18 252.36C1006.72 252.793 1006.35 253.319 1006.1 253.905C1005.26 255.245 1004.67 256.727 1004.36 258.277C1004.23 259.049 1004.23 259.839 1004.36 260.611C1004.41 260.948 1004.55 261.264 1004.76 261.526C1004.98 261.787 1005.27 261.983 1005.59 262.092C1005.91 262.2 1006.25 262.217 1006.59 262.14C1006.92 262.063 1007.22 261.895 1007.46 261.656C1008.08 261.076 1008.53 260.33 1008.74 259.506C1008.95 258.682 1008.92 257.815 1008.66 257.006C1008.38 256.326 1008.02 255.699 1007.72 255.038C1007.66 254.916 1007.62 254.781 1007.63 254.645C1007.63 254.508 1007.66 254.373 1007.72 254.252C1007.78 254.131 1007.88 254.027 1007.99 253.948C1008.1 253.87 1008.23 253.819 1008.36 253.801C1008.85 253.757 1009.34 253.757 1009.82 253.801C1011.71 253.853 1013.59 253.539 1015.36 252.877L1019.38 251.397C1019.65 250.7 1019.92 249.969 1020.21 249.237C1021.12 246.99 1021.95 244.726 1022.96 242.496C1023.2 242.002 1023.49 241.539 1023.85 241.12C1023.92 241.081 1024.01 241.06 1024.09 241.06C1024.18 241.06 1024.26 241.081 1024.33 241.12C1024.53 241.225 1024.8 241.451 1024.79 241.608C1024.78 242.028 1024.69 242.442 1024.53 242.828C1023.99 244.256 1023.39 245.649 1022.79 247.077C1020.13 254.267 1018.06 261.659 1016.59 269.181C1016.23 270.08 1016.12 271.061 1016.26 272.02C1016.49 271.849 1016.7 271.643 1016.87 271.41C1017.64 269.808 1018.37 268.205 1019.13 266.62C1021.07 262.556 1023.34 258.663 1025.93 254.985C1027.26 253.016 1028.88 251.255 1030.72 249.76C1031.48 249.159 1032.31 248.667 1033.21 248.297C1035.31 247.461 1036.44 248.088 1037 250.248C1037.2 251.016 1037.24 251.815 1037.12 252.599C1037.12 253.069 1037.12 253.557 1037 254.167M942.479 256.047C943.581 255.704 944.588 255.108 945.419 254.306C946.234 253.589 946.99 252.809 947.681 251.972C947.996 251.535 948.215 251.036 948.324 250.509C948.498 249.847 948.011 249.394 947.42 249.655C946.856 249.866 946.323 250.153 945.837 250.509C944.347 251.743 943.198 253.338 942.496 255.142C942.448 255.448 942.448 255.759 942.496 256.065M975.552 255.925C975.736 255.954 975.924 255.954 976.108 255.925C977.825 255.028 979.336 253.783 980.545 252.268C980.855 251.823 981.111 251.344 981.31 250.84C981.417 250.689 981.474 250.51 981.474 250.326C981.474 250.142 981.417 249.962 981.31 249.812C980.997 249.481 980.649 249.603 980.301 249.812C979.964 249.936 979.643 250.099 979.344 250.3C977.59 251.63 976.265 253.447 975.534 255.525C975.534 255.647 975.534 255.856 975.639 256.047M1074.68 256.047C1074.89 256.075 1075.09 256.075 1075.29 256.047C1077.01 255.15 1078.52 253.898 1079.71 252.373C1080.06 251.888 1080.32 251.345 1080.48 250.77C1080.48 250.491 1080.37 250.126 1080.3 249.777C1079.87 249.775 1079.43 249.859 1079.03 250.027C1078.63 250.194 1078.26 250.441 1077.95 250.752C1076.54 251.986 1075.43 253.522 1074.7 255.246C1074.65 255.54 1074.65 255.841 1074.7 256.135M1003.37 230.757C1003.09 230.757 1002.94 230.757 1002.87 230.757C1002.67 230.9 1002.51 231.077 1002.38 231.279C1000.44 234.426 998.821 237.758 997.542 241.225C997.506 241.514 997.506 241.807 997.542 242.096C999.719 238.429 1001.67 234.631 1003.37 230.722M1032.95 260.106C1030.58 261.431 1028.62 263.368 1027.26 265.714C1027.26 265.836 1027.26 266.045 1027.41 266.185C1027.46 266.221 1027.51 266.248 1027.56 266.263C1027.61 266.278 1027.67 266.281 1027.73 266.272C1027.85 266.254 1027.96 266.206 1028.06 266.132C1029.77 264.962 1031.22 263.45 1032.32 261.691C1032.58 261.238 1032.77 260.733 1033.17 259.949M1126.98 265.976C1125.59 266.779 1124.48 267.997 1123.81 269.459C1123.68 269.726 1123.59 270.006 1123.52 270.295C1123.46 270.469 1123.46 270.66 1123.53 270.83C1123.6 271 1123.73 271.139 1123.9 271.218C1124.04 271.241 1124.19 271.232 1124.33 271.193C1124.46 271.154 1124.59 271.086 1124.7 270.992C1126.07 269.676 1126.88 267.889 1126.98 265.993" fill="#1D1D1B"/>
<path d="M855.436 237.846C856.12 238.103 856.866 238.146 857.575 237.968L868.832 236.94C869.667 236.94 870.571 236.94 871.372 236.853C871.615 236.836 871.859 236.836 872.102 236.853C872.287 236.853 872.464 236.926 872.595 237.057C872.725 237.188 872.798 237.365 872.798 237.55C872.798 238.003 872.468 238.177 872.12 238.281C871.822 238.348 871.52 238.388 871.215 238.403L864.256 239.065C861.403 239.326 858.567 239.622 855.714 239.831C855.135 239.823 854.568 240.001 854.098 240.34C853.628 240.679 853.28 241.16 853.104 241.713C852.443 243.541 851.678 245.336 851.069 247.182C849.851 250.944 848.65 254.706 847.589 258.486C846.727 261.657 846.191 264.907 845.989 268.188C845.887 268.6 845.913 269.034 846.062 269.432C846.211 269.83 846.476 270.173 846.824 270.417C847.182 270.344 847.521 270.199 847.82 269.989C848.12 269.779 848.373 269.51 848.563 269.198C849.538 267.944 850.495 266.69 851.434 265.418C853.365 262.771 855.244 260.071 857.193 257.423C858.271 255.96 859.42 254.55 860.672 253.156C861.185 252.56 861.596 251.883 861.89 251.153C862.277 250.196 862.724 249.266 863.23 248.366C863.462 248.009 863.75 247.692 864.082 247.426C864.146 247.358 864.222 247.303 864.308 247.266C864.393 247.229 864.485 247.21 864.578 247.21C864.671 247.21 864.763 247.229 864.848 247.266C864.934 247.303 865.01 247.358 865.074 247.426C865.16 247.538 865.222 247.668 865.255 247.806C865.288 247.944 865.291 248.087 865.265 248.227C865.123 248.622 864.93 248.997 864.691 249.342C863.619 251.398 862.969 253.648 862.777 255.96C862.644 256.485 862.719 257.04 862.986 257.511C863.595 257.894 864.065 257.51 864.517 257.267C866.299 256.208 867.897 254.867 869.249 253.296C870.989 251.293 872.555 249.237 874.208 247.216C874.625 246.694 875.06 246.189 875.495 245.684C875.623 245.51 875.807 245.385 876.016 245.331C876.226 245.277 876.447 245.298 876.643 245.388C876.843 245.468 877.012 245.608 877.127 245.789C877.243 245.971 877.299 246.183 877.287 246.398C877.322 246.763 877.322 247.13 877.287 247.495C876.904 250.683 876.487 253.888 876.104 257.075C875.912 258.521 875.773 259.984 875.617 261.43C875.598 261.644 875.598 261.859 875.617 262.074C876.278 262.231 876.434 261.743 876.678 261.43C878.592 259.078 880.488 256.709 882.402 254.34C883.028 253.597 883.672 252.866 884.333 252.146C884.567 251.872 884.858 251.653 885.185 251.502C885.47 251.456 885.761 251.518 886.003 251.675C886.068 251.716 886.124 251.769 886.168 251.832C886.211 251.895 886.241 251.967 886.256 252.042C886.27 252.117 886.269 252.195 886.253 252.27C886.236 252.344 886.205 252.415 886.16 252.477C885.801 253.038 885.412 253.579 884.994 254.097C883.08 256.466 881.149 258.799 879.253 261.186C878.192 262.527 877.235 263.92 876.191 265.279C875.05 266.784 874.303 268.55 874.016 270.417C873.67 272.826 873.087 275.195 872.276 277.489C871.98 278.286 871.625 279.06 871.215 279.806C870.997 280.233 870.702 280.616 870.345 280.937C870.173 281.135 869.956 281.288 869.713 281.383C869.469 281.478 869.206 281.512 868.946 281.483C868.686 281.454 868.437 281.362 868.22 281.216C868.003 281.069 867.825 280.872 867.701 280.642C867.369 280.164 867.161 279.611 867.098 279.033C867.034 278.455 867.116 277.87 867.336 277.332C867.843 275.961 868.424 274.618 869.075 273.309C869.91 271.689 870.815 270.121 871.824 268.571C872.706 267.184 873.248 265.609 873.407 263.973C873.912 259.688 874.486 255.42 875.025 251.135C875.051 250.817 875.051 250.497 875.025 250.178C874.87 250.098 874.69 250.082 874.524 250.134C874.358 250.187 874.219 250.302 874.138 250.456C873.303 251.414 872.485 252.39 871.65 253.365C870.026 255.261 868.187 256.963 866.17 258.434C865.546 258.911 864.854 259.293 864.117 259.566C863.797 259.719 863.445 259.79 863.091 259.773C862.737 259.756 862.393 259.651 862.089 259.468C861.786 259.285 861.532 259.03 861.352 258.725C861.171 258.419 861.069 258.074 861.055 257.719C860.97 257.23 860.912 256.736 860.881 256.239C860.394 256.814 860.063 257.162 859.785 257.528C857.436 260.698 855.105 263.885 852.722 267.038C851.782 268.31 850.79 269.546 849.747 270.73C849.245 271.31 848.659 271.809 848.007 272.211C847.734 272.418 847.412 272.55 847.073 272.593C846.734 272.637 846.39 272.592 846.074 272.462C845.757 272.331 845.48 272.121 845.27 271.851C845.06 271.581 844.924 271.261 844.875 270.922C844.602 269.995 844.468 269.033 844.475 268.066C844.503 265.753 844.76 263.448 845.241 261.186C845.571 259.583 845.971 257.981 846.319 256.378C846.319 256.03 846.319 255.682 846.476 255.194L845.223 255.856C844.753 256.117 844.284 256.413 843.779 256.64C843.371 256.889 842.916 257.052 842.443 257.117C841.969 257.183 841.487 257.15 841.027 257.021C840.567 256.892 840.138 256.67 839.767 256.367C839.397 256.065 839.092 255.689 838.873 255.264L837.916 253.818C837.538 254.053 837.178 254.315 836.838 254.602C835.451 256.06 834.306 257.729 833.445 259.548C832.349 261.778 831.253 264.025 830.122 266.237C829.783 266.886 829.405 267.514 828.991 268.118C828.872 268.334 828.684 268.505 828.457 268.603C828.23 268.7 827.978 268.72 827.739 268.658C827.467 268.607 827.223 268.459 827.053 268.241C826.883 268.022 826.799 267.75 826.817 267.474C826.784 266.566 826.831 265.656 826.956 264.756C827.335 262.297 827.916 259.874 828.695 257.511C828.817 257.127 828.869 256.727 829.026 256.013C828.4 256.518 828.034 256.797 827.686 257.11C825.404 259.302 822.897 261.246 820.205 262.91C819.123 263.565 817.951 264.058 816.726 264.373C816.195 264.492 815.652 264.551 815.108 264.547C814.404 264.558 813.714 264.347 813.137 263.944C812.559 263.54 812.123 262.966 811.889 262.301C811.181 260.626 811.052 258.762 811.524 257.005C811.768 256.082 812.116 255.264 812.481 254.114C812.16 254.101 811.838 254.13 811.524 254.201C809.784 254.933 808.184 255.647 806.548 256.431C805.533 257.022 804.776 257.973 804.426 259.095C803.348 261.614 801.815 263.911 799.903 265.871C798.949 266.9 797.81 267.739 796.545 268.344C796.25 268.62 795.869 268.783 795.466 268.808C795.064 268.833 794.666 268.718 794.339 268.481C794.013 268.245 793.778 267.902 793.676 267.512C793.574 267.122 793.61 266.708 793.779 266.342C793.861 265.62 794.111 264.928 794.509 264.321C795.291 263.167 796.164 262.078 797.119 261.064C798.54 259.561 800.141 258.239 801.886 257.127C802.526 256.772 803.063 256.256 803.444 255.63C803.826 255.004 804.038 254.29 804.061 253.557C804.061 252.895 804.269 252.233 804.287 251.571C804.275 251.148 804.192 250.73 804.043 250.334C804.011 250.232 803.956 250.138 803.882 250.059C803.809 249.981 803.718 249.92 803.618 249.881C803.518 249.843 803.41 249.828 803.303 249.837C803.195 249.846 803.092 249.879 802.999 249.934C802.093 250.44 801.232 251.023 800.424 251.675C798.999 252.911 797.715 254.302 796.597 255.821C794.873 258.102 793.337 260.519 792.004 263.049C788.645 269.255 785.984 275.816 784.071 282.61C783.897 283.184 783.74 283.777 783.514 284.351C783.404 284.63 783.231 284.881 783.009 285.083C782.906 285.17 782.782 285.229 782.649 285.254C782.516 285.279 782.379 285.269 782.251 285.225C782.124 285.181 782.009 285.105 781.919 285.004C781.83 284.902 781.768 284.78 781.739 284.648C781.679 284.104 781.679 283.554 781.739 283.01C781.931 281.129 782.122 279.265 782.366 277.402C783.415 269.807 785.056 262.306 787.272 254.968C787.359 254.689 787.411 254.393 787.481 254.114C787.202 253.783 786.907 253.923 786.628 254.027C784.6 254.859 782.48 255.444 780.313 255.769C780.056 255.841 779.814 255.959 779.6 256.117C779.6 256.779 779.704 257.441 779.721 258.103C779.785 259.048 779.628 259.995 779.263 260.869C778.897 261.743 778.334 262.519 777.616 263.137C776.893 263.803 775.937 264.16 774.954 264.129C774.221 264.129 773.506 263.896 772.912 263.464C772.319 263.033 771.876 262.424 771.649 261.726C771.296 260.743 771.218 259.683 771.423 258.66C771.579 257.911 771.753 257.145 771.927 256.344C771.51 256.117 771.249 256.448 770.953 256.57C770.379 256.762 769.839 257.023 769.213 257.18C768.624 257.351 767.996 257.337 767.415 257.141C766.833 256.945 766.326 256.575 765.96 256.082C765.455 255.49 765.038 254.811 764.533 254.097C764.198 254.213 763.882 254.377 763.594 254.585C762.171 256.011 760.995 257.665 760.114 259.479C758.949 261.83 757.8 264.181 756.635 266.446C756.3 267.095 755.916 267.718 755.487 268.31C755.289 268.537 755.028 268.7 754.738 268.78C754.59 268.818 754.435 268.824 754.285 268.797C754.134 268.77 753.991 268.711 753.865 268.623C753.74 268.535 753.634 268.421 753.557 268.289C753.479 268.157 753.431 268.009 753.416 267.857C753.312 266.954 753.312 266.042 753.416 265.139C753.884 262.07 754.689 259.062 755.817 256.169C756.652 254.027 757.557 251.885 758.444 249.76C758.654 249.258 758.936 248.788 759.279 248.366C759.372 248.253 759.497 248.171 759.639 248.133C759.78 248.095 759.93 248.102 760.067 248.155C760.203 248.207 760.32 248.3 760.401 248.423C760.481 248.545 760.521 248.69 760.514 248.837C760.477 249.374 760.36 249.902 760.166 250.404C759.732 251.554 759.227 252.651 758.74 253.766C757.654 256.211 756.764 258.739 756.078 261.325C755.993 261.68 755.935 262.041 755.904 262.405C755.904 262.51 755.904 262.614 756.061 262.875C756.274 262.662 756.467 262.429 756.635 262.178C757.383 260.715 758.096 259.235 758.844 257.772C759.581 256.23 760.562 254.819 761.75 253.592C762.399 252.943 763.11 252.36 763.872 251.85C764.023 251.742 764.194 251.666 764.375 251.627C764.557 251.588 764.744 251.588 764.926 251.626C765.107 251.663 765.279 251.738 765.43 251.846C765.581 251.954 765.708 252.091 765.803 252.25C766.054 252.591 766.275 252.952 766.464 253.33C766.643 253.715 766.846 254.087 767.073 254.445C767.292 254.813 767.638 255.087 768.045 255.215C768.453 255.344 768.893 255.317 769.283 255.142C770.012 254.83 770.701 254.432 771.336 253.957C772.641 252.982 773.893 251.902 775.198 250.909C775.779 250.484 776.41 250.133 777.077 249.864C777.222 249.833 777.371 249.834 777.516 249.867C777.66 249.9 777.795 249.964 777.912 250.056C778.027 250.13 778.12 250.234 778.18 250.357C778.24 250.48 778.265 250.618 778.253 250.755C778.24 250.891 778.19 251.022 778.109 251.132C778.027 251.242 777.917 251.328 777.79 251.38C777.046 251.648 776.37 252.077 775.811 252.637C775.251 253.197 774.822 253.874 774.554 254.619C773.875 255.905 773.433 257.304 773.249 258.747C773.161 259.324 773.161 259.912 773.249 260.489C773.293 260.838 773.434 261.168 773.658 261.439C773.882 261.71 774.179 261.912 774.514 262.02C774.848 262.128 775.207 262.138 775.547 262.049C775.887 261.96 776.194 261.775 776.433 261.517C777.075 260.902 777.515 260.106 777.696 259.235C777.876 258.364 777.787 257.459 777.442 256.64C777.199 256.1 776.868 255.56 776.659 255.003C776.58 254.869 776.538 254.717 776.539 254.562C776.54 254.406 776.583 254.254 776.663 254.122C776.744 253.989 776.859 253.881 776.996 253.809C777.133 253.737 777.288 253.704 777.442 253.714C777.865 253.688 778.289 253.688 778.712 253.714C780.661 253.763 782.601 253.425 784.419 252.721L788.281 251.31C788.525 250.683 788.768 250.004 789.046 249.324C789.916 247.13 790.804 244.935 791.708 242.74C791.911 242.233 792.168 241.748 792.474 241.295C792.562 241.133 792.71 241.014 792.886 240.962C793.062 240.909 793.252 240.929 793.413 241.016C793.549 241.093 793.653 241.216 793.707 241.362C793.762 241.509 793.762 241.67 793.709 241.817C793.535 242.392 793.309 242.949 793.083 243.559C791.47 247.565 790.055 251.629 788.838 255.751C787.341 260.768 786.228 265.889 785.132 270.992C785.103 271.299 785.103 271.608 785.132 271.915C785.463 271.654 785.724 271.549 785.828 271.34C786.593 269.755 787.324 268.135 788.09 266.568C790.344 261.777 793.103 257.24 796.319 253.034C797.413 251.648 798.669 250.397 800.059 249.307C800.866 248.655 801.803 248.186 802.808 247.931C803.107 247.806 803.429 247.748 803.752 247.762C804.076 247.776 804.392 247.86 804.679 248.01C804.966 248.159 805.217 248.37 805.414 248.627C805.61 248.885 805.748 249.182 805.818 249.498C806.173 250.473 806.281 251.52 806.131 252.546C806.105 252.964 806.105 253.383 806.131 253.8C806.131 253.8 806.131 253.801 806.287 254.027C806.563 254.017 806.836 253.982 807.105 253.922C809.315 253.086 811.524 252.181 813.734 251.397C814.229 251.17 814.664 250.83 815.004 250.404C815.67 249.699 816.385 249.041 817.144 248.436C817.922 247.841 818.862 247.495 819.84 247.443C820.16 247.395 820.486 247.425 820.792 247.53C821.098 247.635 821.374 247.811 821.597 248.045C821.821 248.279 821.985 248.563 822.075 248.874C822.166 249.184 822.181 249.512 822.119 249.829C822.024 250.554 821.8 251.256 821.458 251.902C820.749 253.301 819.769 254.544 818.574 255.558C817.379 256.571 815.993 257.336 814.499 257.807C814.206 257.876 813.92 257.975 813.647 258.103C813.398 258.265 813.209 258.503 813.107 258.782C812.865 259.924 813.071 261.115 813.681 262.109C813.82 262.315 814.01 262.481 814.233 262.591C814.456 262.701 814.704 262.751 814.951 262.736C815.805 262.74 816.648 262.555 817.422 262.196C819.887 261.146 822.134 259.646 824.05 257.772C825.929 256.03 827.739 254.288 829.652 252.546C830.542 251.821 831.23 250.88 831.653 249.812C831.882 249.251 832.187 248.723 832.558 248.244C832.65 248.131 832.776 248.049 832.917 248.011C833.059 247.973 833.208 247.98 833.345 248.032C833.482 248.085 833.599 248.179 833.679 248.301C833.76 248.424 833.799 248.568 833.793 248.715C833.754 249.257 833.637 249.791 833.445 250.299C832.993 251.432 832.506 252.547 832.018 253.661C830.935 256.103 830.039 258.624 829.339 261.203C829.246 261.42 829.198 261.654 829.198 261.891C829.198 262.128 829.246 262.362 829.339 262.579C829.826 262.579 829.896 262.144 830.035 261.848C830.748 260.437 831.444 259.009 832.158 257.598C833.011 255.835 834.192 254.25 835.637 252.93C836.135 252.487 836.678 252.096 837.255 251.763C837.533 251.591 837.864 251.528 838.185 251.586C838.506 251.644 838.795 251.818 838.995 252.076C839.229 252.356 839.433 252.659 839.604 252.982C839.76 253.243 839.847 253.557 839.986 253.818C840.077 254.13 840.242 254.416 840.468 254.65C840.694 254.883 840.975 255.058 841.284 255.157C841.593 255.257 841.922 255.279 842.242 255.222C842.562 255.165 842.863 255.029 843.118 254.828C844.562 254.038 845.891 253.054 847.067 251.902C847.348 251.596 847.562 251.234 847.694 250.839C848.755 247.861 849.799 244.865 850.825 241.887C850.919 241.505 850.971 241.113 850.982 240.72C850.706 240.55 850.399 240.438 850.079 240.39C849.76 240.342 849.433 240.36 849.12 240.441C847.38 240.65 845.641 240.912 843.901 241.103C843.179 241.187 842.453 241.227 841.726 241.225C841.57 241.23 841.419 241.175 841.302 241.071C841.186 240.968 841.113 240.823 841.1 240.668C841.074 240.516 841.109 240.359 841.197 240.232C841.285 240.105 841.418 240.018 841.57 239.988C842.322 239.761 843.089 239.586 843.866 239.466C845.849 239.187 847.833 238.856 849.834 238.769C850.592 238.777 851.333 238.536 851.942 238.083C852.551 237.63 852.996 236.99 853.209 236.261C854.043 234.105 855.105 232.044 856.375 230.112C856.701 229.604 857.093 229.141 857.541 228.736C857.669 228.676 857.808 228.645 857.95 228.645C858.091 228.645 858.23 228.676 858.358 228.736C858.452 228.802 858.527 228.892 858.576 228.996C858.625 229.1 858.646 229.214 858.637 229.329C858.571 229.808 858.442 230.276 858.254 230.722C857.506 232.464 856.723 234.031 855.957 235.686C855.529 236.293 855.348 237.04 855.453 237.776M814.203 255.839C816.368 254.963 818.231 253.474 819.562 251.554C819.803 251.14 819.968 250.685 820.049 250.213C820.089 250.095 820.094 249.968 820.062 249.848C820.031 249.728 819.964 249.62 819.871 249.537C819.777 249.455 819.662 249.403 819.539 249.386C819.416 249.37 819.29 249.391 819.179 249.446C818.663 249.621 818.176 249.874 817.735 250.195C816.174 251.457 814.973 253.109 814.256 254.985C814.219 255.268 814.219 255.555 814.256 255.839M801.677 259.74C799.3 261.12 797.322 263.095 795.936 265.471C795.89 265.568 795.879 265.678 795.905 265.782C795.93 265.887 795.991 265.98 796.076 266.045C796.162 266.11 796.267 266.144 796.374 266.141C796.482 266.138 796.585 266.098 796.667 266.028C798.644 264.701 800.263 262.906 801.381 260.802C801.501 260.454 801.6 260.1 801.677 259.74ZM869.423 278.9C869.651 278.564 869.849 278.208 870.015 277.837C870.38 276.687 870.728 275.521 871.059 274.354C871.059 274.354 871.059 274.162 870.867 273.936C870.209 274.89 869.705 275.942 869.371 277.053C869.216 277.506 869.105 277.973 869.04 278.447C869.04 278.447 869.18 278.604 869.423 278.9Z" fill="#1D1D1B"/>
<path d="M912.051 259.482C912.729 259.238 912.799 258.733 912.99 258.315C914.243 255.597 915.391 252.863 916.713 250.198C918.644 246.331 920.61 242.482 922.715 238.737C924.884 234.803 927.708 231.268 931.066 228.286C932.277 227.268 933.562 226.342 934.911 225.517C935.892 224.899 936.997 224.507 938.147 224.367C938.837 224.249 939.546 224.355 940.171 224.668C940.797 224.981 941.307 225.486 941.626 226.109C942.147 227.002 942.451 228.004 942.514 229.035C942.686 231.404 942.516 233.786 942.009 236.107C940.111 244.528 936.092 252.323 930.335 258.75C928.489 261.089 926.402 263.225 924.107 265.125C923.135 265.853 922.111 266.511 921.045 267.093C920.565 267.348 920.038 267.502 919.497 267.546C919.276 267.574 919.053 267.553 918.841 267.487C918.629 267.42 918.434 267.309 918.269 267.16C918.104 267.011 917.973 266.829 917.885 266.625C917.796 266.421 917.753 266.201 917.757 265.978C917.737 265.253 917.861 264.53 918.122 263.853C918.564 262.85 919.094 261.889 919.705 260.98C921.29 258.674 923.174 256.588 925.308 254.779C928.034 252.301 930.942 250.03 934.006 247.986C935.553 247.076 936.772 245.697 937.486 244.05C938.98 240.78 940.027 237.323 940.6 233.773C940.791 232.394 940.879 231.002 940.861 229.61C940.828 228.824 940.651 228.05 940.339 227.328C940.26 227.097 940.132 226.886 939.966 226.707C939.799 226.528 939.597 226.386 939.372 226.291C939.147 226.196 938.905 226.149 938.661 226.154C938.417 226.158 938.177 226.214 937.955 226.318C936.993 226.675 936.062 227.112 935.172 227.624C933.029 228.916 931.122 230.565 929.535 232.501C927.753 234.576 926.163 236.809 924.786 239.173C921.157 245.497 917.876 252.015 914.956 258.698C914.208 260.44 913.512 262.042 912.746 263.697C912.416 264.327 912.007 264.912 911.529 265.439C911.421 265.548 911.288 265.628 911.141 265.671C910.994 265.715 910.839 265.72 910.689 265.687C910.54 265.654 910.401 265.583 910.286 265.482C910.171 265.381 910.084 265.252 910.032 265.107C909.861 264.466 909.785 263.803 909.806 263.139C909.944 259.433 910.486 255.754 911.424 252.166C913.077 246.07 914.904 239.974 917.009 234.052C917.809 231.822 918.453 229.54 919.166 227.293C919.274 226.883 919.413 226.481 919.584 226.092C919.647 225.918 919.774 225.775 919.938 225.691C920.103 225.607 920.293 225.588 920.471 225.639C920.653 225.68 920.815 225.785 920.927 225.935C921.039 226.085 921.093 226.271 921.08 226.457C921.082 226.821 921.042 227.184 920.958 227.538C920.715 228.478 920.454 229.418 920.158 230.342C918.418 235.567 916.783 240.618 915.13 245.756C913.742 249.911 912.741 254.185 912.138 258.524C912.112 258.825 912.112 259.128 912.138 259.429M919.758 265.09C919.962 265.208 920.198 265.258 920.433 265.233C920.667 265.208 920.888 265.11 921.063 264.951C922.171 264.215 923.234 263.412 924.246 262.547C927.608 259.302 930.612 255.705 933.206 251.818C933.284 251.725 933.343 251.619 933.38 251.504C933.4 251.267 933.4 251.028 933.38 250.79C932.569 251.167 931.814 251.654 931.136 252.236C927.194 255.082 923.754 258.567 920.958 262.547C920.362 263.279 919.972 264.157 919.827 265.09" fill="#1D1D1B"/>
<path d="M723.342 269.863C723.503 269.742 723.649 269.601 723.776 269.445C724.264 268.609 724.733 267.703 725.151 266.884C728.63 259.482 732.667 252.306 736.929 245.269C739.351 241.122 742.122 237.189 745.21 233.512C746.167 232.415 747.194 231.369 748.22 230.359C749.149 229.389 750.253 228.604 751.473 228.043C752.136 227.749 752.84 227.561 753.561 227.485C754.05 227.431 754.544 227.523 754.98 227.749C755.417 227.975 755.777 228.326 756.014 228.757C756.535 229.584 756.835 230.532 756.884 231.509C756.954 232.902 756.866 234.298 756.623 235.672C755.8 241.047 753.765 246.163 750.673 250.634C748.78 253.401 746.333 255.743 743.488 257.514C742.618 258.076 741.64 258.45 740.617 258.611C740.215 258.733 739.789 258.76 739.375 258.688C738.96 258.616 738.568 258.448 738.23 258.198C737.892 257.947 737.617 257.621 737.428 257.245C737.238 256.869 737.139 256.454 737.138 256.033C736.982 254.541 737.335 253.039 738.141 251.774C738.947 250.509 740.157 249.554 741.574 249.066C741.742 248.998 741.929 248.998 742.096 249.066C742.361 249.176 742.585 249.365 742.74 249.606C742.779 249.716 742.791 249.835 742.772 249.95C742.754 250.066 742.707 250.175 742.635 250.268C742.086 250.747 741.504 251.19 740.896 251.591C740.291 252.004 739.797 252.561 739.46 253.211C739.123 253.862 738.953 254.586 738.965 255.319C738.965 256.382 739.504 256.956 740.548 256.73C741.309 256.531 742.032 256.207 742.688 255.772C745.107 254.24 747.2 252.246 748.846 249.902C752.169 245.071 754.276 239.508 754.988 233.686C755.16 232.599 755.058 231.485 754.692 230.446C754.655 230.233 754.566 230.032 754.432 229.862C754.299 229.691 754.125 229.557 753.926 229.47C753.728 229.384 753.511 229.348 753.296 229.367C753.08 229.385 752.872 229.457 752.691 229.575C751.388 230.114 750.205 230.907 749.212 231.91C747.82 233.338 746.428 234.801 745.175 236.351C742.593 239.586 740.239 242.996 738.129 246.558C733.954 253.403 730.283 260.492 726.682 267.703C725.864 269.34 724.942 270.925 724.124 272.528C723.822 273.131 723.35 273.633 722.767 273.973C722.629 274.084 722.467 274.159 722.294 274.195C722.122 274.23 721.943 274.223 721.773 274.175C721.603 274.128 721.447 274.041 721.317 273.921C721.188 273.801 721.088 273.652 721.028 273.486C720.818 273.046 720.717 272.562 720.732 272.075C720.854 270.211 720.958 268.313 721.236 266.466C722.697 256.841 725.254 247.415 728.857 238.372C730.248 234.749 731.814 231.178 733.31 227.59C733.61 226.926 733.959 226.286 734.354 225.674C734.388 225.604 734.434 225.542 734.492 225.491C734.55 225.441 734.617 225.401 734.69 225.377C734.763 225.353 734.841 225.343 734.917 225.349C734.994 225.356 735.069 225.377 735.137 225.413C735.346 225.552 735.624 225.883 735.589 226.092C735.521 226.689 735.375 227.275 735.154 227.834C734.546 229.349 733.867 230.847 733.223 232.363C729.786 240.344 727.005 248.592 724.907 257.026C723.941 260.856 723.249 264.75 722.837 268.678C722.84 269.034 722.869 269.389 722.924 269.741C722.924 269.741 723.011 269.741 723.168 269.88" fill="#1D1D1B"/>
<path d="M528.132 206.23H319.57V207.99H528.132V206.23Z" fill="#EC2128"/>
<path d="M513.158 202.593H423.004V53.7227H424.761V200.816H513.158V202.593Z" fill="#EC2128"/>
<path d="M498.091 197.158H428.414V67.0469H430.171V195.399H498.091V197.158Z" fill="#EC2128"/>
<path d="M486.539 191.758H433.807V80.8242H435.581V189.982H486.539V191.758Z" fill="#EC2128"/>
<path d="M472.011 186.328H439.234V92.5859H441.009V184.569H472.011V186.328Z" fill="#EC2128"/>
<path d="M364.912 186.328H397.689V92.5859H395.915V184.569H364.912V186.328Z" fill="#EC2128"/>
<path d="M419.353 39.7383H417.578V207.141H419.353V39.7383Z" fill="#EC2128"/>
<path d="M413.917 202.593H331.348V200.816H412.142V53.7227H413.917V202.593Z" fill="#EC2128"/>
<path d="M408.513 197.158H346.543V195.399H406.739V67.0469H408.513V197.158Z" fill="#EC2128"/>
<path d="M403.099 191.758H355.465V189.982H401.325V80.8242H403.099V191.758Z" fill="#EC2128"/>
</svg>
      <p style="font-size:11px;font-weight:300;color:var(--smoke);letter-spacing:.04em">Property Developments Division</p>
    </div>
  </div>
</div>

  
<!-- <div class="subdiv fade-in">
  <h3 class="subdiv-title">Minimum Clearspace</h3>
  <hr class="subdiv-rule">
  <p class="sec-body" style="margin-bottom:40px">Always maintain a minimum clearspace equal to the cap-height of the wordmark&rsquo;T&rsquo; on all sides. This exclusion zone must remain free of all text, graphics, and visual elements.</p>
  <div class="clearspace-wrap">
    <div class="clearspace-inner">
      <span class="cs-measure top">1&times; cap-height</span>
      <span class="cs-measure bottom">1&times; cap-height</span>
      <span class="cs-measure left">1&times;</span>
      <span class="cs-measure right">1&times;</span>
      <svg style="height:auto;width:280px;max-width:100%;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 726.53 250"><line style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" x1="320.97" y1="172" x2="210.61" y2="172"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="313.88 168.62 266.64 168.62 266.64 96.07"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="270.22 109.42 270.22 165.11 306.62 165.11"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="273.79 123.76 273.79 161.72 301.22 161.72"/><line style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" x1="262.93" y1="79.07" x2="262.93" y2="172"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="216.2 168.62 259.41 168.62 259.41 94.49"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="256.11 107.52 256.11 165.11 223.78 165.11"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="227.86 161.72 252.59 161.72 252.59 120.92"/><polygon style="fill:#ec2128;" points="628.55 171.85 638.92 171.85 638.92 125.56 664.63 125.56 664.63 117.48 602.85 117.48 602.85 125.48 628.63 125.48 628.55 171.85"/><polygon style="fill:#ec2128;" points="574.55 139.33 574.55 117.56 584.89 117.56 584.89 171.93 574.55 171.93 574.55 147.59 531.15 147.59 531.15 171.93 520.96 171.93 520.96 117.56 531.22 117.56 531.22 139.37 574.55 139.33"/><path style="fill:#ec2128;" d="M463.07,141.43V149h22.34V163.7H442.29V125.59h43.12v7.28l10.16-1.72v-4.39s.78-9.28-10.94-9.28h-40.5s-12.8-.1-12.22,13.06v30.22s-1,12,10.88,11.05h40.82l1.26,0c2.08.08,10.43-.21,10.71-9.64V141.31Z"/><rect style="fill:#ec2128;" x="395.52" y="117.48" width="10.33" height="54.41"/><polygon style="fill:#ec2128;" points="377.09 163.63 377.09 172 324.63 172 324.63 117.44 334.78 117.44 334.78 163.65 377.09 163.63"/><polygon style="fill:#ec2128;" points="220.41 117.43 211.29 117.43 196.27 159.01 180.54 117.4 173.74 117.4 157.77 159.01 142.66 117.43 132.04 117.4 153.09 171.89 160.81 171.89 176.87 131.28 192.15 171.89 199.7 171.89 220.41 117.43"/><polygon style="fill:#ec2128;" points="123.63 117.4 123.63 125.59 97.74 125.59 97.74 171.89 87.74 171.89 87.74 125.51 61.91 125.51 61.91 117.4 123.63 117.4"/></svg>
    </div>
  </div>
</div> -->


  <!-- CORRECT USAGE -->
  <div class="subdiv fade-in">
    <div style="display:flex;align-items:center;gap:16px;margin-bottom:20px">
      <h3 class="subdiv-title" style="margin-bottom:0">Correct Logo Usage</h3>
      <span class="tag green">Approved</span>
    </div>
    <hr class="subdiv-rule">
    <p class="sec-body" style="margin-bottom:40px">The following examples show the only approved logo applications. Always use the supplied vector files. Maintain consistent padding and never place the logo on unapproved backgrounds.</p>
    <div class="do-grid">
      
  <div class="do-card">
    <div class="do-card-img" style="background:#FFFFFF">
    <svg style="height:auto;width:100%;max-width:100%;display:block;max-height:80px;object-fit:contain;" width="727" height="250" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M646.393 161.138H657.415V125.443H684.754V119.219H619.055V125.384H646.465L646.393 161.138Z" fill="#EC2128"/>
<path d="M588.878 136.007V119.219H599.869V161.138H588.878V142.374H542.715V161.138H531.879V119.219H542.798V136.037L588.878 136.007Z" fill="#EC2128"/>
<path d="M469.742 137.673V143.501H493.478V154.85H447.635V125.463H493.489V131.074L504.304 129.75V126.368C504.304 126.368 505.13 119.208 492.663 119.208H449.586C449.586 119.208 438.533 118.804 437.036 125.193C436.675 126.526 436.526 127.884 436.593 129.241V152.553C436.593 152.553 435.561 161.808 448.172 161.082H491.579C492.023 161.082 492.477 161.082 492.921 161.082C495.14 161.135 504.015 160.918 504.273 153.646V137.59L469.742 137.673Z" fill="#EC2128"/>
<path d="M408.686 119.203H397.695V161.152H408.686V119.203Z" fill="#EC2128"/>
<path d="M377.878 154.753V161.202H322.086V119.141H332.871V154.768L377.878 154.753Z" fill="#EC2128"/>
<path d="M210.455 119.187H200.764L184.788 151.253L168.059 119.172H160.824L143.837 151.253L127.768 119.187L116.488 119.172L138.863 161.181H147.078L164.158 129.87L180.402 161.181H188.442L210.455 119.187Z" fill="#EC2128"/>
<path d="M107.425 119.172V125.486H79.8903V161.181H69.25V125.426H41.7773V119.172H107.425Z" fill="#EC2128"/>
<path d="M317.4 160.32H193.68V161.083H317.4V160.32Z" fill="#EC2128"/>
<path d="M308.519 158.749H255.039V94.8047H256.081V157.986H308.519V158.749Z" fill="#EC2128"/>
<path d="M299.579 156.418H258.246V100.523H259.288V155.655H299.579V156.418Z" fill="#EC2128"/>
<path d="M292.726 154.092H261.445V106.449H262.498V153.336H292.726V154.092Z" fill="#EC2128"/>
<path d="M284.108 151.765H264.664V111.492H265.717V151.002H284.108V151.765Z" fill="#EC2128"/>
<path d="M220.578 151.765H240.022V111.492H238.969V151.002H220.578V151.765Z" fill="#EC2128"/>
<path d="M252.869 88.7969H251.816V160.702H252.869V88.7969Z" fill="#EC2128"/>
<path d="M249.644 158.749H200.664V157.986H248.592V94.8047H249.644V158.749Z" fill="#EC2128"/>
<path d="M246.441 156.418H209.68V155.655H245.388V100.523H246.441V156.418Z" fill="#EC2128"/>
<path d="M243.234 154.092H214.977V153.336H242.181V106.449H243.234V154.092Z" fill="#EC2128"/>
</svg>

    </div>
    <div class="do-card-footer">
      <div class="do-badge">&#10003;</div>
      <span class="do-card-label">On white — primary logo</span>
    </div>
  </div>
  <div class="do-card">
    <div class="do-card-img" style="background:#F7F4F2">
    <svg style="height:auto;width:100%;max-width:100%;display:block;max-height:80px;object-fit:contain;" width="727" height="250" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M646.393 161.138H657.415V125.443H684.754V119.219H619.055V125.384H646.465L646.393 161.138Z" fill="#EC2128"/>
<path d="M588.878 136.007V119.219H599.869V161.138H588.878V142.374H542.715V161.138H531.879V119.219H542.798V136.037L588.878 136.007Z" fill="#EC2128"/>
<path d="M469.742 137.673V143.501H493.478V154.85H447.635V125.463H493.489V131.074L504.304 129.75V126.368C504.304 126.368 505.13 119.208 492.663 119.208H449.586C449.586 119.208 438.533 118.804 437.036 125.193C436.675 126.526 436.526 127.884 436.593 129.241V152.553C436.593 152.553 435.561 161.808 448.172 161.082H491.579C492.023 161.082 492.477 161.082 492.921 161.082C495.14 161.135 504.015 160.918 504.273 153.646V137.59L469.742 137.673Z" fill="#EC2128"/>
<path d="M408.686 119.203H397.695V161.152H408.686V119.203Z" fill="#EC2128"/>
<path d="M377.878 154.753V161.202H322.086V119.141H332.871V154.768L377.878 154.753Z" fill="#EC2128"/>
<path d="M210.455 119.187H200.764L184.788 151.253L168.059 119.172H160.824L143.837 151.253L127.768 119.187L116.488 119.172L138.863 161.181H147.078L164.158 129.87L180.402 161.181H188.442L210.455 119.187Z" fill="#EC2128"/>
<path d="M107.425 119.172V125.486H79.8903V161.181H69.25V125.426H41.7773V119.172H107.425Z" fill="#EC2128"/>
<path d="M317.4 160.32H193.68V161.083H317.4V160.32Z" fill="#EC2128"/>
<path d="M308.519 158.749H255.039V94.8047H256.081V157.986H308.519V158.749Z" fill="#EC2128"/>
<path d="M299.579 156.418H258.246V100.523H259.288V155.655H299.579V156.418Z" fill="#EC2128"/>
<path d="M292.726 154.092H261.445V106.449H262.498V153.336H292.726V154.092Z" fill="#EC2128"/>
<path d="M284.108 151.765H264.664V111.492H265.717V151.002H284.108V151.765Z" fill="#EC2128"/>
<path d="M220.578 151.765H240.022V111.492H238.969V151.002H220.578V151.765Z" fill="#EC2128"/>
<path d="M252.869 88.7969H251.816V160.702H252.869V88.7969Z" fill="#EC2128"/>
<path d="M249.644 158.749H200.664V157.986H248.592V94.8047H249.644V158.749Z" fill="#EC2128"/>
<path d="M246.441 156.418H209.68V155.655H245.388V100.523H246.441V156.418Z" fill="#EC2128"/>
<path d="M243.234 154.092H214.977V153.336H242.181V106.449H243.234V154.092Z" fill="#EC2128"/>
</svg>

    </div>
    <div class="do-card-footer">
      <div class="do-badge">&#10003;</div>
      <span class="do-card-label">On off-white — primary logo</span>
    </div>
  </div>
  <div class="do-card">
    <div class="do-card-img" style="background:#EC2128">
    <svg style="height:auto;width:100%;max-width:100%;display:block;max-height:80px;object-fit:contain;" width="727" height="250" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M646.391 174.912H657.413V125.616H684.752V117.02H619.053V125.533H646.464L646.391 174.912Z" fill="white"/>
<path d="M588.876 140.205V117.02H599.867V174.912H588.876V148.998H542.713V174.912H531.877V117.02H542.796V140.247L588.876 140.205Z" fill="white"/>
<path d="M469.74 142.503V150.552H493.476V166.226H447.633V125.641H493.487V133.39L504.302 131.561V126.891C504.302 126.891 505.128 117.003 492.661 117.003H449.584C449.584 117.003 438.531 116.445 437.034 125.269C436.673 127.109 436.524 128.985 436.591 130.859V163.054C436.591 163.054 435.559 175.835 448.17 174.833H491.577C492.021 174.833 492.475 174.833 492.919 174.833C495.138 174.905 504.013 174.606 504.271 164.563V142.39L469.74 142.503Z" fill="white"/>
<path d="M408.684 116.996H397.693V174.929H408.684V116.996Z" fill="white"/>
<path d="M377.876 166.096V175.002H322.084V116.914H332.869V166.117L377.876 166.096Z" fill="white"/>
<path d="M210.453 116.974H200.762L184.786 161.258L168.057 116.953H160.822L143.835 161.258L127.766 116.974L116.486 116.953L138.861 174.969H147.076L164.156 131.728L180.4 174.969H188.44L210.453 116.974Z" fill="white"/>
<path d="M107.423 116.953V125.674H79.8883V174.969H69.2481V125.591H41.7754V116.953H107.423Z" fill="white"/>
<path d="M317.398 173.781H193.678V174.835H317.398V173.781Z" fill="white"/>
<path d="M308.515 171.611H255.035V83.3008H256.078V170.557H308.515V171.611Z" fill="white"/>
<path d="M299.577 168.396H258.244V91.2031H259.286V167.342H299.577V168.396Z" fill="white"/>
<path d="M292.724 165.183H261.443V99.3867H262.496V164.139H292.724V165.183Z" fill="white"/>
<path d="M284.108 161.97H264.664V106.352H265.717V160.917H284.108V161.97Z" fill="white"/>
<path d="M220.576 161.97H240.02V106.352H238.967V160.917H220.576V161.97Z" fill="white"/>
<path d="M252.869 75.0039H251.816V174.308H252.869V75.0039Z" fill="white"/>
<path d="M249.644 171.611H200.664V170.557H248.592V83.3008H249.644V171.611Z" fill="white"/>
<path d="M246.439 168.396H209.678V167.342H245.386V91.2031H246.439V168.396Z" fill="white"/>
<path d="M243.23 165.183H214.973V164.139H242.177V99.3867H243.23V165.183Z" fill="white"/>
</svg>

    </div>
    <div class="do-card-footer">
      <div class="do-badge">&#10003;</div>
      <span class="do-card-label">On crimson — white logo</span>
    </div>
  </div>
  <div class="do-card">
    <div class="do-card-img" style="background:#000000">
    <svg style="height:auto;width:100%;max-width:100%;display:block;max-height:80px;object-fit:contain;" width="727" height="250" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M646.391 174.912H657.413V125.616H684.752V117.02H619.053V125.533H646.464L646.391 174.912Z" fill="white"/>
<path d="M588.876 140.205V117.02H599.867V174.912H588.876V148.998H542.713V174.912H531.877V117.02H542.796V140.247L588.876 140.205Z" fill="white"/>
<path d="M469.74 142.503V150.552H493.476V166.226H447.633V125.641H493.487V133.39L504.302 131.561V126.891C504.302 126.891 505.128 117.003 492.661 117.003H449.584C449.584 117.003 438.531 116.445 437.034 125.269C436.673 127.109 436.524 128.985 436.591 130.859V163.054C436.591 163.054 435.559 175.835 448.17 174.833H491.577C492.021 174.833 492.475 174.833 492.919 174.833C495.138 174.905 504.013 174.606 504.271 164.563V142.39L469.74 142.503Z" fill="white"/>
<path d="M408.684 116.996H397.693V174.929H408.684V116.996Z" fill="white"/>
<path d="M377.876 166.096V175.002H322.084V116.914H332.869V166.117L377.876 166.096Z" fill="white"/>
<path d="M210.453 116.974H200.762L184.786 161.258L168.057 116.953H160.822L143.835 161.258L127.766 116.974L116.486 116.953L138.861 174.969H147.076L164.156 131.728L180.4 174.969H188.44L210.453 116.974Z" fill="white"/>
<path d="M107.423 116.953V125.674H79.8883V174.969H69.2481V125.591H41.7754V116.953H107.423Z" fill="white"/>
<path d="M317.398 173.781H193.678V174.835H317.398V173.781Z" fill="white"/>
<path d="M308.515 171.611H255.035V83.3008H256.078V170.557H308.515V171.611Z" fill="white"/>
<path d="M299.577 168.396H258.244V91.2031H259.286V167.342H299.577V168.396Z" fill="white"/>
<path d="M292.724 165.183H261.443V99.3867H262.496V164.139H292.724V165.183Z" fill="white"/>
<path d="M284.108 161.97H264.664V106.352H265.717V160.917H284.108V161.97Z" fill="white"/>
<path d="M220.576 161.97H240.02V106.352H238.967V160.917H220.576V161.97Z" fill="white"/>
<path d="M252.869 75.0039H251.816V174.308H252.869V75.0039Z" fill="white"/>
<path d="M249.644 171.611H200.664V170.557H248.592V83.3008H249.644V171.611Z" fill="white"/>
<path d="M246.439 168.396H209.678V167.342H245.386V91.2031H246.439V168.396Z" fill="white"/>
<path d="M243.23 165.183H214.973V164.139H242.177V99.3867H243.23V165.183Z" fill="white"/>
</svg>

    </div>
    <div class="do-card-footer">
      <div class="do-badge">&#10003;</div>
      <span class="do-card-label">On black — white logo</span>
    </div>
  </div>



  <div class="do-card">
    <div class="do-card-img" style="background:#000000">
 <svg style="height:auto;width:100%;max-width:100%;display:block;max-height:80px;object-fit:contain;" width="727" height="250" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M646.393 161.138H657.415V125.443H684.754V119.219H619.055V125.384H646.465L646.393 161.138Z" fill="#EC2128"/>
<path d="M588.878 136.007V119.219H599.869V161.138H588.878V142.374H542.715V161.138H531.879V119.219H542.798V136.037L588.878 136.007Z" fill="#EC2128"/>
<path d="M469.742 137.673V143.501H493.478V154.85H447.635V125.463H493.489V131.074L504.304 129.75V126.368C504.304 126.368 505.13 119.208 492.663 119.208H449.586C449.586 119.208 438.533 118.804 437.036 125.193C436.675 126.526 436.526 127.884 436.593 129.241V152.553C436.593 152.553 435.561 161.808 448.172 161.082H491.579C492.023 161.082 492.477 161.082 492.921 161.082C495.14 161.135 504.015 160.918 504.273 153.646V137.59L469.742 137.673Z" fill="#EC2128"/>
<path d="M408.686 119.203H397.695V161.152H408.686V119.203Z" fill="#EC2128"/>
<path d="M377.878 154.753V161.202H322.086V119.141H332.871V154.768L377.878 154.753Z" fill="#EC2128"/>
<path d="M210.455 119.187H200.764L184.788 151.253L168.059 119.172H160.824L143.837 151.253L127.768 119.187L116.488 119.172L138.863 161.181H147.078L164.158 129.87L180.402 161.181H188.442L210.455 119.187Z" fill="#EC2128"/>
<path d="M107.425 119.172V125.486H79.8903V161.181H69.25V125.426H41.7773V119.172H107.425Z" fill="#EC2128"/>
<path d="M317.4 160.32H193.68V161.083H317.4V160.32Z" fill="#EC2128"/>
<path d="M308.519 158.749H255.039V94.8047H256.081V157.986H308.519V158.749Z" fill="#EC2128"/>
<path d="M299.579 156.418H258.246V100.523H259.288V155.655H299.579V156.418Z" fill="#EC2128"/>
<path d="M292.726 154.092H261.445V106.449H262.498V153.336H292.726V154.092Z" fill="#EC2128"/>
<path d="M284.108 151.765H264.664V111.492H265.717V151.002H284.108V151.765Z" fill="#EC2128"/>
<path d="M220.578 151.765H240.022V111.492H238.969V151.002H220.578V151.765Z" fill="#EC2128"/>
<path d="M252.869 88.7969H251.816V160.702H252.869V88.7969Z" fill="#EC2128"/>
<path d="M249.644 158.749H200.664V157.986H248.592V94.8047H249.644V158.749Z" fill="#EC2128"/>
<path d="M246.441 156.418H209.68V155.655H245.388V100.523H246.441V156.418Z" fill="#EC2128"/>
<path d="M243.234 154.092H214.977V153.336H242.181V106.449H243.234V154.092Z" fill="#EC2128"/>
</svg>

    </div>
    <div class="do-card-footer">
      <div class="do-badge">&#10003;</div>
      <span class="do-card-label">On black — crimson mark</span>
    </div>
  </div>
  <div class="do-card">
    <div class="do-card-img" style="background:#FFFFFF">
    <svg style="height:auto;width:100%;max-width:100%;display:block;max-height:80px;object-fit:contain;" width="727" height="250" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M646.393 174.912H657.415V125.616H684.754V117.02H619.055V125.533H646.465L646.393 174.912Z" fill="black"/>
<path d="M588.878 140.205V117.02H599.869V174.912H588.878V148.998H542.715V174.912H531.879V117.02H542.798V140.247L588.878 140.205Z" fill="black"/>
<path d="M469.742 142.503V150.552H493.478V166.226H447.635V125.641H493.489V133.39L504.304 131.561V126.891C504.304 126.891 505.13 117.003 492.663 117.003H449.586C449.586 117.003 438.533 116.445 437.036 125.269C436.675 127.109 436.526 128.985 436.593 130.859V163.054C436.593 163.054 435.561 175.835 448.172 174.833H491.579C492.023 174.833 492.477 174.833 492.921 174.833C495.14 174.905 504.015 174.606 504.273 164.563V142.39L469.742 142.503Z" fill="black"/>
<path d="M408.686 116.996H397.695V174.929H408.686V116.996Z" fill="black"/>
<path d="M377.878 166.096V175.002H322.086V116.914H332.871V166.117L377.878 166.096Z" fill="black"/>
<path d="M210.455 116.974H200.764L184.788 161.258L168.059 116.953H160.824L143.837 161.258L127.768 116.974L116.488 116.953L138.863 174.969H147.078L164.158 131.728L180.402 174.969H188.442L210.455 116.974Z" fill="black"/>
<path d="M107.425 116.953V125.674H79.8903V174.969H69.25V125.591H41.7773V116.953H107.425Z" fill="black"/>
<path d="M317.4 173.781H193.68V174.835H317.4V173.781Z" fill="black"/>
<path d="M308.517 171.611H255.037V83.3008H256.079V170.557H308.517V171.611Z" fill="black"/>
<path d="M299.579 168.396H258.246V91.2031H259.288V167.342H299.579V168.396Z" fill="black"/>
<path d="M292.726 165.183H261.445V99.3867H262.498V164.139H292.726V165.183Z" fill="black"/>
<path d="M284.109 161.97H264.666V106.352H265.719V160.917H284.109V161.97Z" fill="black"/>
<path d="M220.578 161.97H240.022V106.352H238.969V160.917H220.578V161.97Z" fill="black"/>
<path d="M252.871 75.0039H251.818V174.308H252.871V75.0039Z" fill="black"/>
<path d="M249.646 171.611H200.666V170.557H248.594V83.3008H249.646V171.611Z" fill="black"/>
<path d="M246.441 168.396H209.68V167.342H245.388V91.2031H246.441V168.396Z" fill="black"/>
<path d="M243.232 165.183H214.975V164.139H242.179V99.3867H243.232V165.183Z" fill="black"/>
</svg>

    </div>
    <div class="do-card-footer">
      <div class="do-badge">&#10003;</div>
      <span class="do-card-label">On white — black logo</span>
    </div>
  </div>
  <div class="do-card">
    <div class="do-card-img" style="background:#141429">
    <svg style="height:auto;width:100%;max-width:100%;display:block;max-height:80px;object-fit:contain;" width="727" height="250" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M646.393 161.138H657.415V125.443H684.754V119.219H619.055V125.384H646.465L646.393 161.138Z" fill="#EC2128"/>
<path d="M588.878 136.007V119.219H599.869V161.138H588.878V142.374H542.715V161.138H531.879V119.219H542.798V136.037L588.878 136.007Z" fill="#EC2128"/>
<path d="M469.742 137.673V143.501H493.478V154.85H447.635V125.463H493.489V131.074L504.304 129.75V126.368C504.304 126.368 505.13 119.208 492.663 119.208H449.586C449.586 119.208 438.533 118.804 437.036 125.193C436.675 126.526 436.526 127.884 436.593 129.241V152.553C436.593 152.553 435.561 161.808 448.172 161.082H491.579C492.023 161.082 492.477 161.082 492.921 161.082C495.14 161.135 504.015 160.918 504.273 153.646V137.59L469.742 137.673Z" fill="#EC2128"/>
<path d="M408.686 119.203H397.695V161.152H408.686V119.203Z" fill="#EC2128"/>
<path d="M377.878 154.753V161.202H322.086V119.141H332.871V154.768L377.878 154.753Z" fill="#EC2128"/>
<path d="M210.455 119.187H200.764L184.788 151.253L168.059 119.172H160.824L143.837 151.253L127.768 119.187L116.488 119.172L138.863 161.181H147.078L164.158 129.87L180.402 161.181H188.442L210.455 119.187Z" fill="#EC2128"/>
<path d="M107.425 119.172V125.486H79.8903V161.181H69.25V125.426H41.7773V119.172H107.425Z" fill="#EC2128"/>
<path d="M317.4 160.32H193.68V161.083H317.4V160.32Z" fill="#EC2128"/>
<path d="M308.519 158.749H255.039V94.8047H256.081V157.986H308.519V158.749Z" fill="#EC2128"/>
<path d="M299.579 156.418H258.246V100.523H259.288V155.655H299.579V156.418Z" fill="#EC2128"/>
<path d="M292.726 154.092H261.445V106.449H262.498V153.336H292.726V154.092Z" fill="#EC2128"/>
<path d="M284.108 151.765H264.664V111.492H265.717V151.002H284.108V151.765Z" fill="#EC2128"/>
<path d="M220.578 151.765H240.022V111.492H238.969V151.002H220.578V151.765Z" fill="#EC2128"/>
<path d="M252.869 88.7969H251.816V160.702H252.869V88.7969Z" fill="#EC2128"/>
<path d="M249.644 158.749H200.664V157.986H248.592V94.8047H249.644V158.749Z" fill="#EC2128"/>
<path d="M246.441 156.418H209.68V155.655H245.388V100.523H246.441V156.418Z" fill="#EC2128"/>
<path d="M243.234 154.092H214.977V153.336H242.181V106.449H243.234V154.092Z" fill="#EC2128"/>
</svg>

    </div>
    <div class="do-card-footer">
      <div class="do-badge">&#10003;</div>
      <span class="do-card-label">On dark navy — primary logo</span>
    </div>
  </div>
    </div>
  </div>

  <!-- INCORRECT USAGE -->
  <div class="subdiv fade-in">
    <div style="display:flex;align-items:center;gap:16px;margin-bottom:20px">
      <h3 class="subdiv-title" style="margin-bottom:0">Incorrect Logo Usage</h3>
      <span class="tag red">Not approved</span>
    </div>
    <hr class="subdiv-rule">
    <p class="sec-body" style="margin-bottom:40px">The following examples illustrate common misuses that undermine brand integrity. These applications must be avoided in all brand communications without exception.</p>
    <div class="dont-grid">
      
  <div class="dont-card">
    <div class="dont-card-img">
      <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3MjciIGhlaWdodD0iMjUwIiB2aWV3Qm94PSIwIDAgNzI3IDI1MCIgZmlsbD0ibm9uZSI+CiAgPHBhdGggZD0iTTY0Ni4zOTMgMTYxLjEzOEg2NTcuNDE1VjEyNS40NDNINjg0Ljc1NFYxMTkuMjE5SDYxOS4wNTVWMTI1LjM4NEg2NDYuNDY1TDY0Ni4zOTMgMTYxLjEzOFoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNNTg4Ljg3OCAxMzYuMDA3VjExOS4yMTlINTk5Ljg2OVYxNjEuMTM4SDU4OC44NzhWMTQyLjM3NEg1NDIuNzE1VjE2MS4xMzhINTMxLjg3OVYxMTkuMjE5SDU0Mi43OThWMTM2LjAzN0w1ODguODc4IDEzNi4wMDdaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTQ2OS43NDIgMTM3LjY3M1YxNDMuNTAxSDQ5My40NzhWMTU0Ljg1SDQ0Ny42MzVWMTI1LjQ2M0g0OTMuNDg5VjEzMS4wNzRMNTA0LjMwNCAxMjkuNzVWMTI2LjM2OEM1MDQuMzA0IDEyNi4zNjggNTA1LjEzIDExOS4yMDggNDkyLjY2MyAxMTkuMjA4SDQ0OS41ODZDNDQ5LjU4NiAxMTkuMjA4IDQzOC41MzMgMTE4LjgwNCA0MzcuMDM2IDEyNS4xOTNDNDM2LjY3NSAxMjYuNTI2IDQzNi41MjYgMTI3Ljg4NCA0MzYuNTkzIDEyOS4yNDFWMTUyLjU1M0M0MzYuNTkzIDE1Mi41NTMgNDM1LjU2MSAxNjEuODA4IDQ0OC4xNzIgMTYxLjA4Mkg0OTEuNTc5QzQ5Mi4wMjMgMTYxLjA4MiA0OTIuNDc3IDE2MS4wODIgNDkyLjkyMSAxNjEuMDgyQzQ5NS4xNCAxNjEuMTM1IDUwNC4wMTUgMTYwLjkxOCA1MDQuMjczIDE1My42NDZWMTM3LjU5TDQ2OS43NDIgMTM3LjY3M1oiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNNDA4LjY4NiAxMTkuMjAzSDM5Ny42OTVWMTYxLjE1Mkg0MDguNjg2VjExOS4yMDNaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTM3Ny44NzggMTU0Ljc1M1YxNjEuMjAySDMyMi4wODZWMTE5LjE0MUgzMzIuODcxVjE1NC43NjhMMzc3Ljg3OCAxNTQuNzUzWiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yMTAuNDU1IDExOS4xODdIMjAwLjc2NEwxODQuNzg4IDE1MS4yNTNMMTY4LjA1OSAxMTkuMTcySDE2MC44MjRMMTQzLjgzNyAxNTEuMjUzTDEyNy43NjggMTE5LjE4N0wxMTYuNDg4IDExOS4xNzJMMTM4Ljg2MyAxNjEuMTgxSDE0Ny4wNzhMMTY0LjE1OCAxMjkuODdMMTgwLjQwMiAxNjEuMTgxSDE4OC40NDJMMjEwLjQ1NSAxMTkuMTg3WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0xMDcuNDI1IDExOS4xNzJWMTI1LjQ4Nkg3OS44OTAzVjE2MS4xODFINjkuMjVWMTI1LjQyNkg0MS43NzczVjExOS4xNzJIMTA3LjQyNVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNMzE3LjQgMTYwLjMySDE5My42OFYxNjEuMDgzSDMxNy40VjE2MC4zMloiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNMzA4LjUxOSAxNTguNzQ5SDI1NS4wMzlWOTQuODA0N0gyNTYuMDgxVjE1Ny45ODZIMzA4LjUxOVYxNTguNzQ5WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yOTkuNTc5IDE1Ni40MThIMjU4LjI0NlYxMDAuNTIzSDI1OS4yODhWMTU1LjY1NUgyOTkuNTc5VjE1Ni40MThaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTI5Mi43MjYgMTU0LjA5MkgyNjEuNDQ1VjEwNi40NDlIMjYyLjQ5OFYxNTMuMzM2SDI5Mi43MjZWMTU0LjA5MloiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNMjg0LjEwOCAxNTEuNzY1SDI2NC42NjRWMTExLjQ5MkgyNjUuNzE3VjE1MS4wMDJIMjg0LjEwOFYxNTEuNzY1WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yMjAuNTc4IDE1MS43NjVIMjQwLjAyMlYxMTEuNDkySDIzOC45NjlWMTUxLjAwMkgyMjAuNTc4VjE1MS43NjVaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTI1Mi44NjkgODguNzk2OUgyNTEuODE2VjE2MC43MDJIMjUyLjg2OVY4OC43OTY5WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yNDkuNjQ0IDE1OC43NDlIMjAwLjY2NFYxNTcuOTg2SDI0OC41OTJWOTQuODA0N0gyNDkuNjQ0VjE1OC43NDlaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTI0Ni40NDEgMTU2LjQxOEgyMDkuNjhWMTU1LjY1NUgyNDUuMzg4VjEwMC41MjNIMjQ2LjQ0MVYxNTYuNDE4WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yNDMuMjM0IDE1NC4wOTJIMjE0Ljk3N1YxNTMuMzM2SDI0Mi4xODFWMTA2LjQ0OUgyNDMuMjM0VjE1NC4wOTJaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+Cjwvc3ZnPgo=" alt="Don't rotate or angle the logo" style="width:100%;height:100%;object-fit:contain;display:block" />
    </div>
    <div class="dont-card-footer">
      <div class="dont-badge">&#10005;</div>
      <span class="dont-card-label">Don't stretch or distort proportions</span>
    </div>
  </div>
  <div class="dont-card">
    <div class="dont-card-img">
      <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3MjciIGhlaWdodD0iMjUwIiB2aWV3Qm94PSIwIDAgNzI3IDI1MCIgZmlsbD0ibm9uZSI+CiAgPHBhdGggZD0iTTY0OS45NTUgMTQ2LjQ4MUw2NjAuOTIyIDE0NS4zODRMNjU2LjAxNiA5Ni4zMzM2TDY4My4yMTkgOTMuNjEyN0w2ODIuMzYzIDg1LjA1ODlMNjE2Ljk5IDkxLjU5NzdMNjE3LjgzOCAxMDAuMDY5TDY0NS4xMTIgOTcuMzQxMkw2NDkuOTU1IDE0Ni40ODFaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTU4OS4yNzIgMTE3LjY3MUw1ODYuOTY0IDk0LjYwMDVMNTk3LjkwMSA5My41MDY2TDYwMy42NjMgMTUxLjExMUw1OTIuNzI2IDE1Mi4yMDVMNTkwLjE0NyAxMjYuNDJMNTQ0LjIxMyAxMzEuMDE1TDU0Ni43OTIgMTU2LjhMNTM2LjAxIDE1Ny44NzhMNTMwLjI0OCAxMDAuMjczTDU0MS4xMTMgOTkuMTg2N0w1NDMuNDI0IDEyMi4yOThMNTg5LjI3MiAxMTcuNjcxWiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00NzAuOTU1IDEzMS44MThMNDcxLjc1NiAxMzkuODI3TDQ5NS4zNzUgMTM3LjQ2NEw0OTYuOTM1IDE1My4wNkw0NTEuMzIgMTU3LjYyM0w0NDcuMjgxIDExNy4yMzlMNDkyLjkwNiAxMTIuNjc2TDQ5My42NzggMTIwLjM4Nkw1MDQuMjU3IDExNy40OUw1MDMuNzkzIDExMi44NDNDNTAzLjc5MyAxMTIuODQzIDUwMy42MyAxMDIuOTIyIDQ5MS4yMjUgMTA0LjE2M0w0NDguMzYyIDEwOC40NUM0NDguMzYyIDEwOC40NSA0MzcuMzA4IDEwOC45OTUgNDM2LjY5NyAxMTcuOTI0QzQzNi41MjEgMTE5Ljc5MSA0MzYuNTYgMTIxLjY3MiA0MzYuODEyIDEyMy41M0w0NDAuMDE2IDE1NS41NjZDNDQwLjAxNiAxNTUuNTY2IDQ0MC4yNjIgMTY4LjM4NiA0NTIuNzExIDE2Ni4xMzRMNDk1LjkwMiAxNjEuODEzQzQ5Ni4zNDQgMTYxLjc2OSA0OTYuNzk2IDE2MS43MjQgNDk3LjIzNyAxNjEuNjhDNDk5LjQ1MiAxNjEuNTMxIDUwOC4yNTQgMTYwLjM1IDUwNy41MTEgMTUwLjMzMUw1MDUuMzA0IDEyOC4yNjhMNDcwLjk1NSAxMzEuODE4WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00MDcuNjYzIDExMi41MTVMMzk2LjcyNyAxMTMuNjA5TDQwMi40OTIgMTcxLjI1NUw0MTMuNDI5IDE3MC4xNjFMNDA3LjY2MyAxMTIuNTE1WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0zODEuODk2IDE2NC40MzZMMzgyLjc4MiAxNzMuMjk4TDMyNy4yNjggMTc4Ljg1MUwzMjEuNDg2IDEyMS4wNTFMMzMyLjIxOCAxMTkuOTc3TDMzNy4xMTQgMTY4LjkzNkwzODEuODk2IDE2NC40MzZaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTIxMC40MTQgMTMyLjIyM0wyMDAuNzcxIDEzMy4xODhMMTg5LjI4MiAxNzguODQyTDE2OC4yMjcgMTM2LjQyMkwxNjEuMDI4IDEzNy4xNDJMMTQ4LjUzNSAxODIuOTE4TDEyOC4xMzggMTQwLjQ1M0wxMTYuOTEyIDE0MS41NTVMMTQ0Ljk1IDE5Ny4wNTZMMTUzLjEyNCAxOTYuMjM4TDE2NS44MTYgMTUxLjUxMkwxODYuMjgzIDE5Mi45MjJMMTk0LjI4MiAxOTIuMTIxTDIxMC40MTQgMTMyLjIyM1oiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNMTA3Ljg5NCAxNDIuNDU1TDEwOC43NjIgMTUxLjEzMkw4MS4zNjM5IDE1My44NzJMODYuMjcwMSAyMDIuOTIzTDc1LjY4MjcgMjAzLjk4Mkw3MC43NjgyIDE1NC44NDlMNDMuNDMyIDE1Ny41ODNMNDIuNTcyMyAxNDguOTg4TDEwNy44OTQgMTQyLjQ1NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNMzIyLjQ4MyAxNzguMTA1TDE5OS4zNzcgMTkwLjQxOEwxOTkuNDgyIDE5MS40NjdMMzIyLjU4OCAxNzkuMTUzTDMyMi40ODMgMTc4LjEwNVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNMzEzLjQyNyAxNzYuODI3TDI2MC4yMTMgMTgyLjE0OUwyNTEuNDI0IDk0LjI3NzNMMjUyLjQ2MSA5NC4xNzM2TDI2MS4xNDUgMTgwLjk5N0wzMTMuMzIzIDE3NS43NzhMMzEzLjQyNyAxNzYuODI3WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0zMDQuMjE1IDE3NC41MkwyNjMuMDg3IDE3OC42MzRMMjU1LjQwNCAxMDEuODI0TDI1Ni40NDEgMTAxLjcyTDI2NC4wMTkgMTc3LjQ4MUwzMDQuMTEgMTczLjQ3MUwzMDQuMjE1IDE3NC41MloiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNMjk3LjA3NiAxNzIuMDA1TDI2NS45NTEgMTc1LjExOEwyNTkuNDAyIDEwOS42NDhMMjYwLjQ1IDEwOS41NDRMMjY2Ljg5NCAxNzMuOTc1TDI5Ni45NzMgMTcwLjk2NkwyOTcuMDc2IDE3Mi4wMDVaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTI4OC4xODEgMTY5LjY2NUwyNjguODM0IDE3MS42MDFMMjYzLjI5OSAxMTYuMjU4TDI2NC4zNDYgMTE2LjE1M0wyNjkuNzc3IDE3MC40NDdMMjg4LjA3NiAxNjguNjE3TDI4OC4xODEgMTY5LjY2NVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNMjI0Ljk2NSAxNzUuOTg3TDI0NC4zMTIgMTc0LjA1MkwyMzguNzc3IDExOC43MDlMMjM3LjcyOSAxMTguODE0TDI0My4xNiAxNzMuMTA4TDIyNC44NiAxNzQuOTM5TDIyNC45NjUgMTc1Ljk4N1oiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNMjQ4LjQ0MiA4Ni4yMzlMMjQ3LjM5NSA4Ni4zNDM4TDI1Ny4yNzggMTg1LjE1NUwyNTguMzI1IDE4NS4wNUwyNDguNDQyIDg2LjIzOVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNMjU0Ljg0OSAxODIuNjg1TDIwNi4xMTEgMTg3LjU1OUwyMDYuMDA3IDE4Ni41MTFMMjUzLjY5NiAxODEuNzQxTDI0NS4wMTIgOTQuOTE3NUwyNDYuMDU5IDk0LjgxMjdMMjU0Ljg0OSAxODIuNjg1WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yNTEuMzM5IDE3OS44MDdMMjE0Ljc2MSAxODMuNDY2TDIxNC42NTYgMTgyLjQxN0wyNTAuMTg3IDE3OC44NjNMMjQyLjYwOSAxMDMuMTAyTDI0My42NTcgMTAyLjk5OEwyNTEuMzM5IDE3OS44MDdaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTI0Ny44MjcgMTc2LjkzMUwyMTkuNzExIDE3OS43NDNMMjE5LjYwNyAxNzguNzA1TDI0Ni42NzYgMTc1Ljk5N0wyNDAuMjMxIDExMS41NjZMMjQxLjI3OSAxMTEuNDYxTDI0Ny44MjcgMTc2LjkzMVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KPC9zdmc+Cg==" alt="Don't rotate or angle the logo" style="width:100%;height:100%;object-fit:contain;display:block" />
    </div>
    <div class="dont-card-footer">
      <div class="dont-badge">&#10005;</div>
      <span class="dont-card-label">Don't rotate or angle the logo</span>
    </div>
  </div>

  <div class="dont-card">
    <div class="dont-card-img">
      <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3MjciIGhlaWdodD0iMjUwIiB2aWV3Qm94PSIwIDAgNzI3IDI1MCIgZmlsbD0ibm9uZSI+CiAgPGcgZmlsdGVyPSJ1cmwoI2ZpbHRlcjBfZF8zMDI4Xzk2MCkiPgogICAgPHBhdGggZD0iTTY0Ni4zOTMgMTc0LjkwNEg2NTcuNDE1VjEyNS42MDhINjg0Ljc1NFYxMTcuMDEySDYxOS4wNTVWMTI1LjUyNkg2NDYuNDY1TDY0Ni4zOTMgMTc0LjkwNFoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICAgIDxwYXRoIGQ9Ik01ODguODc4IDE0MC4xOTdWMTE3LjAxMkg1OTkuODY5VjE3NC45MDRINTg4Ljg3OFYxNDguOTlINTQyLjcxNVYxNzQuOTA0SDUzMS44NzlWMTE3LjAxMkg1NDIuNzk4VjE0MC4yMzlMNTg4Ljg3OCAxNDAuMTk3WiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogICAgPHBhdGggZD0iTTQ2OS43NDIgMTQyLjQ5OVYxNTAuNTQ4SDQ5My40NzhWMTY2LjIyMkg0NDcuNjM1VjEyNS42MzdINDkzLjQ4OVYxMzMuMzg2TDUwNC4zMDQgMTMxLjU1N1YxMjYuODg3QzUwNC4zMDQgMTI2Ljg4NyA1MDUuMTMgMTE2Ljk5OSA0OTIuNjYzIDExNi45OTlINDQ5LjU4NkM0NDkuNTg2IDExNi45OTkgNDM4LjUzMyAxMTYuNDQxIDQzNy4wMzYgMTI1LjI2NUM0MzYuNjc1IDEyNy4xMDUgNDM2LjUyNiAxMjguOTgxIDQzNi41OTMgMTMwLjg1NVYxNjMuMDVDNDM2LjU5MyAxNjMuMDUgNDM1LjU2MSAxNzUuODMxIDQ0OC4xNzIgMTc0LjgyOUg0OTEuNTc5QzQ5Mi4wMjMgMTc0LjgyOSA0OTIuNDc3IDE3NC44MjkgNDkyLjkyMSAxNzQuODI5QzQ5NS4xNCAxNzQuOTAyIDUwNC4wMTUgMTc0LjYwMiA1MDQuMjczIDE2NC41NTlWMTQyLjM4Nkw0NjkuNzQyIDE0Mi40OTlaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgICA8cGF0aCBkPSJNNDA4LjY4NCAxMTYuOTkySDM5Ny42OTNWMTc0LjkyNkg0MDguNjg0VjExNi45OTJaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgICA8cGF0aCBkPSJNMzc3Ljg3OCAxNjYuMDkyVjE3NC45OThIMzIyLjA4NlYxMTYuOTFIMzMyLjg3MVYxNjYuMTEzTDM3Ny44NzggMTY2LjA5MloiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICAgIDxwYXRoIGQ9Ik0yMTAuNDU1IDExNi45N0gyMDAuNzY0TDE4NC43ODggMTYxLjI1NEwxNjguMDU5IDExNi45NDlIMTYwLjgyNEwxNDMuODM3IDE2MS4yNTRMMTI3Ljc2OCAxMTYuOTdMMTE2LjQ4OCAxMTYuOTQ5TDEzOC44NjMgMTc0Ljk2NUgxNDcuMDc4TDE2NC4xNTggMTMxLjcyNEwxODAuNDAyIDE3NC45NjVIMTg4LjQ0MkwyMTAuNDU1IDExNi45N1oiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICAgIDxwYXRoIGQ9Ik0xMDcuNDIzIDExNi45NDlWMTI1LjY3SDc5Ljg4ODNWMTc0Ljk2NUg2OS4yNDgxVjEyNS41ODdINDEuNzc1NFYxMTYuOTQ5SDEwNy40MjNaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgICA8cGF0aCBkPSJNMzE3LjM5OCAxNzMuNzc3SDE5My42NzhWMTc0LjgzMUgzMTcuMzk4VjE3My43NzdaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgICA8cGF0aCBkPSJNMzA4LjUxNyAxNzEuNjAzSDI1NS4wMzdWODMuMjkzSDI1Ni4wNzlWMTcwLjU0OUgzMDguNTE3VjE3MS42MDNaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgICA8cGF0aCBkPSJNMjk5LjU3OSAxNjguMzkySDI1OC4yNDZWOTEuMTk5MkgyNTkuMjg4VjE2Ny4zMzhIMjk5LjU3OVYxNjguMzkyWiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogICAgPHBhdGggZD0iTTI5Mi43MjYgMTY1LjE3OUgyNjEuNDQ1Vjk5LjM4MjhIMjYyLjQ5OFYxNjQuMTM2SDI5Mi43MjZWMTY1LjE3OVoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICAgIDxwYXRoIGQ9Ik0yODQuMTA4IDE2MS45NjdIMjY0LjY2NFYxMDYuMzQ4SDI2NS43MTdWMTYwLjkxM0gyODQuMTA4VjE2MS45NjdaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgICA8cGF0aCBkPSJNMjIwLjU3NiAxNjEuOTY3SDI0MC4wMlYxMDYuMzQ4SDIzOC45NjdWMTYwLjkxM0gyMjAuNTc2VjE2MS45NjdaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgICA8cGF0aCBkPSJNMjUyLjg2OSA3NC45OTYxSDI1MS44MTZWMTc0LjNIMjUyLjg2OVY3NC45OTYxWiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogICAgPHBhdGggZD0iTTI0OS42NDQgMTcxLjYwM0gyMDAuNjY0VjE3MC41NDlIMjQ4LjU5MlY4My4yOTNIMjQ5LjY0NFYxNzEuNjAzWiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogICAgPHBhdGggZD0iTTI0Ni40MzkgMTY4LjM5MkgyMDkuNjc4VjE2Ny4zMzhIMjQ1LjM4NlY5MS4xOTkySDI0Ni40MzlWMTY4LjM5MloiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICAgIDxwYXRoIGQ9Ik0yNDMuMjMyIDE2NS4xNzlIMjE0Ljk3NVYxNjQuMTM2SDI0Mi4xNzlWOTkuMzgyOEgyNDMuMjMyVjE2NS4xNzlaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPC9nPgogIDxkZWZzPgogICAgPGZpbHRlciBpZD0iZmlsdGVyMF9kXzMwMjhfOTYwIiB4PSIzNy43NzU0IiB5PSI3NC45OTYxIiB3aWR0aD0iNjUwLjk3OSIgaGVpZ2h0PSIxMTMuMDA0IiBmaWx0ZXJVbml0cz0idXNlclNwYWNlT25Vc2UiIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiI+CiAgICAgIDxmZUZsb29kIGZsb29kLW9wYWNpdHk9IjAiIHJlc3VsdD0iQmFja2dyb3VuZEltYWdlRml4Ij48L2ZlRmxvb2Q+CiAgICAgIDxmZUNvbG9yTWF0cml4IGluPSJTb3VyY2VBbHBoYSIgdHlwZT0ibWF0cml4IiB2YWx1ZXM9IjAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDEyNyAwIiByZXN1bHQ9ImhhcmRBbHBoYSI+PC9mZUNvbG9yTWF0cml4PgogICAgICA8ZmVPZmZzZXQgZHk9IjkiPjwvZmVPZmZzZXQ+CiAgICAgIDxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249IjIiPjwvZmVHYXVzc2lhbkJsdXI+CiAgICAgIDxmZUNvbXBvc2l0ZSBpbjI9ImhhcmRBbHBoYSIgb3BlcmF0b3I9Im91dCI+PC9mZUNvbXBvc2l0ZT4KICAgICAgPGZlQ29sb3JNYXRyaXggdHlwZT0ibWF0cml4IiB2YWx1ZXM9IjAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAuODEgMCI+PC9mZUNvbG9yTWF0cml4PgogICAgICA8ZmVCbGVuZCBtb2RlPSJub3JtYWwiIGluMj0iQmFja2dyb3VuZEltYWdlRml4IiByZXN1bHQ9ImVmZmVjdDFfZHJvcFNoYWRvd18zMDI4Xzk2MCI+PC9mZUJsZW5kPgogICAgICA8ZmVCbGVuZCBtb2RlPSJub3JtYWwiIGluPSJTb3VyY2VHcmFwaGljIiBpbjI9ImVmZmVjdDFfZHJvcFNoYWRvd18zMDI4Xzk2MCIgcmVzdWx0PSJzaGFwZSI+PC9mZUJsZW5kPgogICAgPC9maWx0ZXI+CiAgPC9kZWZzPgo8L3N2Zz4K" alt="Don't rotate or angle the logo" style="width:100%;height:100%;object-fit:contain;display:block" />
    </div>
    <div class="dont-card-footer">
      <div class="dont-badge">&#10005;</div>
      <span class="dont-card-label">Don't apply effects or filters</span>
    </div>
  </div>
  <div class="dont-card">
    <div class="dont-card-img">
      <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3MjciIGhlaWdodD0iMjUwIiB2aWV3Qm94PSIwIDAgNzI3IDI1MCIgZmlsbD0ibm9uZSI+CiAgPHBhdGggZD0iTTY0Ni4zOTUgMTc0LjkwOEg2NTcuNDE3VjEyNS42MTJINjg0Ljc1NlYxMTcuMDE2SDYxOS4wNTdWMTI1LjUyOUg2NDYuNDY3TDY0Ni4zOTUgMTc0LjkwOFoiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNNTg4Ljg4IDE0MC4yMDFWMTE3LjAxNkg1OTkuODcxVjE3NC45MDhINTg4Ljg4VjE0OC45OTRINTQyLjcxN1YxNzQuOTA4SDUzMS44ODFWMTE3LjAxNkg1NDIuOFYxNDAuMjQzTDU4OC44OCAxNDAuMjAxWiIgZmlsbD0iI0VDMjEyOCI+PC9wYXRoPgogIDxwYXRoIGQ9Ik00NjkuNzQ0IDE0Mi41MDNWMTUwLjU1Mkg0OTMuNDhWMTY2LjIyNkg0NDcuNjM3VjEyNS42NDFINDkzLjQ5MVYxMzMuMzlMNTA0LjMwNiAxMzEuNTYxVjEyNi44OTFDNTA0LjMwNiAxMjYuODkxIDUwNS4xMzIgMTE3LjAwMyA0OTIuNjY1IDExNy4wMDNINDQ5LjU4OEM0NDkuNTg4IDExNy4wMDMgNDM4LjUzNSAxMTYuNDQ1IDQzNy4wMzggMTI1LjI2OUM0MzYuNjc3IDEyNy4xMDkgNDM2LjUyOCAxMjguOTg1IDQzNi41OTUgMTMwLjg1OVYxNjMuMDU0QzQzNi41OTUgMTYzLjA1NCA0MzUuNTYzIDE3NS44MzUgNDQ4LjE3NCAxNzQuODMzSDQ5MS41ODFDNDkyLjAyNSAxNzQuODMzIDQ5Mi40NzkgMTc0LjgzMyA0OTIuOTIzIDE3NC44MzNDNDk1LjE0MiAxNzQuOTA1IDUwNC4wMTcgMTc0LjYwNiA1MDQuMjc1IDE2NC41NjNWMTQyLjM5TDQ2OS43NDQgMTQyLjUwM1oiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNNDA4LjY4NiAxMTYuOTk2SDM5Ny42OTVWMTc0LjkyOUg0MDguNjg2VjExNi45OTZaIiBmaWxsPSIjRUMyMTI4Ij48L3BhdGg+CiAgPHBhdGggZD0iTTM3Ny44OCAxNjYuMDk2VjE3NS4wMDJIMzIyLjA4OFYxMTYuOTE0SDMzMi44NzNWMTY2LjExN0wzNzcuODggMTY2LjA5NloiIGZpbGw9IiNFQzIxMjgiPjwvcGF0aD4KICA8cGF0aCBkPSJNMjEwLjQ1NSAxMTYuOTc0SDIwMC43NjRMMTg0Ljc4OCAxNjEuMjU4TDE2OC4wNTkgMTE2Ljk1M0gxNjAuODI0TDE0My44MzcgMTYxLjI1OEwxMjcuNzY4IDExNi45NzRMMTE2LjQ4OCAxMTYuOTUzTDEzOC44NjMgMTc0Ljk2OUgxNDcuMDc4TDE2NC4xNTggMTMxLjcyOEwxODAuNDAyIDE3NC45NjlIMTg4LjQ0MkwyMTAuNDU1IDExNi45NzRaIiBmaWxsPSIjMkUwMDAyIj48L3BhdGg+CiAgPHBhdGggZD0iTTEwNy40MjUgMTE2Ljk1M1YxMjUuNjc0SDc5Ljg5MDNWMTc0Ljk2OUg2OS4yNVYxMjUuNTkxSDQxLjc3NzNWMTE2Ljk1M0gxMDcuNDI1WiIgZmlsbD0iIzJFMDAwMiI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0zMTcuNCAxNzMuNzgxSDE5My42OFYxNzQuODM1SDMxNy40VjE3My43ODFaIiBmaWxsPSIjMkUwMDAyIj48L3BhdGg+CiAgPHBhdGggZD0iTTMwOC41MTkgMTcxLjYwN0gyNTUuMDM5VjgzLjI5NjlIMjU2LjA4MVYxNzAuNTUzSDMwOC41MTlWMTcxLjYwN1oiIGZpbGw9IiMyRTAwMDIiPjwvcGF0aD4KICA8cGF0aCBkPSJNMjk5LjU3OSAxNjguMzk2SDI1OC4yNDZWOTEuMjAzMUgyNTkuMjg4VjE2Ny4zNDJIMjk5LjU3OVYxNjguMzk2WiIgZmlsbD0iIzJFMDAwMiI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yOTIuNzI2IDE2NS4xODNIMjYxLjQ0NVY5OS4zODY3SDI2Mi40OThWMTY0LjEzOUgyOTIuNzI2VjE2NS4xODNaIiBmaWxsPSIjMkUwMDAyIj48L3BhdGg+CiAgPHBhdGggZD0iTTI4NC4xMTEgMTYxLjk3SDI2NC42NjhWMTA2LjM1MkgyNjUuNzIxVjE2MC45MTdIMjg0LjExMVYxNjEuOTdaIiBmaWxsPSIjMkUwMDAyIj48L3BhdGg+CiAgPHBhdGggZD0iTTIyMC41NzggMTYxLjk3SDI0MC4wMjJWMTA2LjM1MkgyMzguOTY5VjE2MC45MTdIMjIwLjU3OFYxNjEuOTdaIiBmaWxsPSIjMkUwMDAyIj48L3BhdGg+CiAgPHBhdGggZD0iTTI1Mi44NzMgNzVIMjUxLjgyVjE3NC4zMDRIMjUyLjg3M1Y3NVoiIGZpbGw9IiMyRTAwMDIiPjwvcGF0aD4KICA8cGF0aCBkPSJNMjQ5LjY0OCAxNzEuNjA3SDIwMC42NjhWMTcwLjU1M0gyNDguNTk2VjgzLjI5NjlIMjQ5LjY0OFYxNzEuNjA3WiIgZmlsbD0iIzJFMDAwMiI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yNDYuNDQxIDE2OC4zOTZIMjA5LjY4VjE2Ny4zNDJIMjQ1LjM4OFY5MS4yMDMxSDI0Ni40NDFWMTY4LjM5NloiIGZpbGw9IiMyRTAwMDIiPjwvcGF0aD4KICA8cGF0aCBkPSJNMjQzLjIzNCAxNjUuMTgzSDIxNC45NzdWMTY0LjEzOUgyNDIuMTgxVjk5LjM4NjdIMjQzLjIzNFYxNjUuMTgzWiIgZmlsbD0iIzJFMDAwMiI+PC9wYXRoPgo8L3N2Zz4K" alt="Don't rotate or angle the logo" style="width:100%;height:100%;object-fit:contain;display:block" />
    </div>
    <div class="dont-card-footer">
      <div class="dont-badge">&#10005;</div>
      <span class="dont-card-label">Don't use on low-contrast backgrounds</span>
    </div>
  </div>
  <div class="dont-card">
    <div class="dont-card-img">
      <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI3MjciIGhlaWdodD0iMjUwIiB2aWV3Qm94PSIwIDAgNzI3IDI1MCIgZmlsbD0ibm9uZSI+CiAgPHBhdGggZD0iTTY0Ni4zOTMgMTc0LjkwNEg2NTcuNDE1VjEyNS42MDhINjg0Ljc1NFYxMTcuMDEySDYxOS4wNTVWMTI1LjUyNkg2NDYuNDY1TDY0Ni4zOTMgMTc0LjkwNFoiIGZpbGw9IiMwMDlCN0MiPjwvcGF0aD4KICA8cGF0aCBkPSJNNTg4Ljg3OCAxNDAuMTk3VjExNy4wMTJINTk5Ljg2OVYxNzQuOTA0SDU4OC44NzhWMTQ4Ljk5SDU0Mi43MTVWMTc0LjkwNEg1MzEuODc5VjExNy4wMTJINTQyLjc5OFYxNDAuMjM5TDU4OC44NzggMTQwLjE5N1oiIGZpbGw9IiMwMDlCN0MiPjwvcGF0aD4KICA8cGF0aCBkPSJNNDY5Ljc0MiAxNDIuNDk5VjE1MC41NDhINDkzLjQ3OFYxNjYuMjIySDQ0Ny42MzVWMTI1LjYzN0g0OTMuNDg5VjEzMy4zODZMNTA0LjMwNCAxMzEuNTU3VjEyNi44ODdDNTA0LjMwNCAxMjYuODg3IDUwNS4xMyAxMTYuOTk5IDQ5Mi42NjMgMTE2Ljk5OUg0NDkuNTg2QzQ0OS41ODYgMTE2Ljk5OSA0MzguNTMzIDExNi40NDEgNDM3LjAzNiAxMjUuMjY1QzQzNi42NzUgMTI3LjEwNSA0MzYuNTI2IDEyOC45ODEgNDM2LjU5MyAxMzAuODU1VjE2My4wNUM0MzYuNTkzIDE2My4wNSA0MzUuNTYxIDE3NS44MzEgNDQ4LjE3MiAxNzQuODI5SDQ5MS41NzlDNDkyLjAyMyAxNzQuODI5IDQ5Mi40NzcgMTc0LjgyOSA0OTIuOTIxIDE3NC44MjlDNDk1LjE0IDE3NC45MDIgNTA0LjAxNSAxNzQuNjAyIDUwNC4yNzMgMTY0LjU1OVYxNDIuMzg2TDQ2OS43NDIgMTQyLjQ5OVoiIGZpbGw9IiMwMDlCN0MiPjwvcGF0aD4KICA8cGF0aCBkPSJNNDA4LjY4NCAxMTYuOTkySDM5Ny42OTNWMTc0LjkyNkg0MDguNjg0VjExNi45OTJaIiBmaWxsPSIjMDA5QjdDIj48L3BhdGg+CiAgPHBhdGggZD0iTTM3Ny44NzggMTY2LjA5MlYxNzQuOTk4SDMyMi4wODZWMTE2LjkxSDMzMi44NzFWMTY2LjExM0wzNzcuODc4IDE2Ni4wOTJaIiBmaWxsPSIjMDA5QjdDIj48L3BhdGg+CiAgPHBhdGggZD0iTTIxMC40NTUgMTE2Ljk3SDIwMC43NjRMMTg0Ljc4OCAxNjEuMjU0TDE2OC4wNTkgMTE2Ljk0OUgxNjAuODI0TDE0My44MzcgMTYxLjI1NEwxMjcuNzY4IDExNi45N0wxMTYuNDg4IDExNi45NDlMMTM4Ljg2MyAxNzQuOTY1SDE0Ny4wNzhMMTY0LjE1OCAxMzEuNzI0TDE4MC40MDIgMTc0Ljk2NUgxODguNDQyTDIxMC40NTUgMTE2Ljk3WiIgZmlsbD0iIzAwOUI3QyI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0xMDcuNDIzIDExNi45NDlWMTI1LjY3SDc5Ljg4ODNWMTc0Ljk2NUg2OS4yNDgxVjEyNS41ODdINDEuNzc1NFYxMTYuOTQ5SDEwNy40MjNaIiBmaWxsPSIjMDA5QjdDIj48L3BhdGg+CiAgPHBhdGggZD0iTTMxNy4zOTggMTczLjc3N0gxOTMuNjc4VjE3NC44MzFIMzE3LjM5OFYxNzMuNzc3WiIgZmlsbD0iIzAwOUI3QyI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0zMDguNTE3IDE3MS42MDNIMjU1LjAzN1Y4My4yOTNIMjU2LjA3OVYxNzAuNTQ5SDMwOC41MTdWMTcxLjYwM1oiIGZpbGw9IiMwMDlCN0MiPjwvcGF0aD4KICA8cGF0aCBkPSJNMjk5LjU3OSAxNjguMzkySDI1OC4yNDZWOTEuMTk5MkgyNTkuMjg4VjE2Ny4zMzhIMjk5LjU3OVYxNjguMzkyWiIgZmlsbD0iIzAwOUI3QyI+PC9wYXRoPgogIDxwYXRoIGQ9Ik0yOTIuNzI2IDE2NS4xNzlIMjYxLjQ0NVY5OS4zODI4SDI2Mi40OThWMTY0LjEzNkgyOTIuNzI2VjE2NS4xNzlaIiBmaWxsPSIjMDA5QjdDIj48L3BhdGg+CiAgPHBhdGggZD0iTTI4NC4xMDggMTYxLjk2N0gyNjQuNjY0VjEwNi4zNDhIMjY1LjcxN1YxNjAuOTEzSDI4NC4xMDhWMTYxLjk2N1oiIGZpbGw9IiMwMDlCN0MiPjwvcGF0aD4KICA8cGF0aCBkPSJNMjIwLjU3NiAxNjEuOTY3SDI0MC4wMlYxMDYuMzQ4SDIzOC45NjdWMTYwLjkxM0gyMjAuNTc2VjE2MS45NjdaIiBmaWxsPSIjMDA5QjdDIj48L3BhdGg+CiAgPHBhdGggZD0iTTI1Mi44NjkgNzQuOTk2MUgyNTEuODE2VjE3NC4zSDI1Mi44NjlWNzQuOTk2MVoiIGZpbGw9IiMwMDlCN0MiPjwvcGF0aD4KICA8cGF0aCBkPSJNMjQ5LjY0NCAxNzEuNjAzSDIwMC42NjRWMTcwLjU0OUgyNDguNTkyVjgzLjI5M0gyNDkuNjQ0VjE3MS42MDNaIiBmaWxsPSIjMDA5QjdDIj48L3BhdGg+CiAgPHBhdGggZD0iTTI0Ni40MzkgMTY4LjM5MkgyMDkuNjc4VjE2Ny4zMzhIMjQ1LjM4NlY5MS4xOTkySDI0Ni40MzlWMTY4LjM5MloiIGZpbGw9IiMwMDlCN0MiPjwvcGF0aD4KICA8cGF0aCBkPSJNMjQzLjIzMiAxNjUuMTc5SDIxNC45NzVWMTY0LjEzNkgyNDIuMTc5Vjk5LjM4MjhIMjQzLjIzMlYxNjUuMTc5WiIgZmlsbD0iIzAwOUI3QyI+PC9wYXRoPgo8L3N2Zz4K" alt="Don't rotate or angle the logo" style="width:100%;height:100%;object-fit:contain;display:block" />
    </div>
    <div class="dont-card-footer">
      <div class="dont-badge">&#10005;</div>
      <span class="dont-card-label">Don't recolour or alter brand colours</span>
    </div>
  </div>
    </div>
  </div>

</div><!-- /sec -->
</div><!-- /sec-wrap logo -->

<!-- 04 COLOUR -->
<div class="sec-wrap alt" id="color">
<div class="sec fade-in">
  <span class="sec-eyebrow">04 &mdash; Colour</span>
  <div class="two-col">
    <div>
      <h2 class="sec-title">Colour Palette</h2>
      <hr class="sec-rule">
      <p class="sec-body">The Twilight palette is built on restraint. Four primary tones anchor the system &mdash; an architectural palette where each colour earns its place through function, not decoration.</p>
      <p class="sec-body">Crimson is our single accent colour. Used sparingly, it commands attention. Never introduce colours outside this palette in brand communications.</p>
    </div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:2px;margin-top: 45px;">
      <div style="background:#EC2128;padding:24px;min-height:130px;display:flex;align-items:flex-end">
        <div><p style="font-size:13px;font-weight:700;color:white">Twilight Crimson</p><p style="font-size:10px;font-family:monospace;color:rgba(255,255,255,.8)">#EC2128</p></div>
      </div>
      <div style="background:#0D0D0D;padding:24px;min-height:130px;display:flex;align-items:flex-end">
        <div><p style="font-size:13px;font-weight:700;color:white">Twilight Black</p><p style="font-size:10px;font-family:monospace;color:rgba(255,255,255,.7)">#0D0D0D</p></div>
      </div>
      <div style="background:#F7F6F3;border:1px solid #E8E4DC;padding:24px;min-height:130px;display:flex;align-items:flex-end">
        <div><p style="font-size:12px;font-weight:700;color:#1A1A1A">Off White</p><p style="font-size:10px;font-family:monospace;color:#9A9690">#F7F6F3</p></div>
      </div>
      <div style="background:#333333;padding:24px;min-height:130px;display:flex;align-items:flex-end">
        <div><p style="font-size:12px;font-weight:700;color:white">Charcoal</p><p style="font-size:10px;font-family:monospace;color:rgba(255,255,255,.7)">#333333</p></div>
      </div>
    </div>
  </div>
  <!-- <div class="swatch-row mt64 fade-in">
    <div class="swatch-card" style="background:#0D0D0D">
      <p class="swatch-role" style="color:rgba(255,255,255,.4)">Primary</p>
      <div class="swatch-name" style="color:white">Twilight Black</div>
      <div class="swatch-hex" style="color:rgba(255,255,255,.8)">#0D0D0D</div>
      <div class="swatch-specs" style="color:rgba(255,255,255,.55)">RGB 13, 13, 13<br>CMYK 0, 0, 0, 97<br>Pantone Black 6 C</div>
    </div>
    <div class="swatch-card" style="background:#F7F6F3;border:1px solid #E8E4DC">
      <p class="swatch-role" style="color:#9A9690">Primary</p>
      <div class="swatch-name" style="color:#1A1A1A">Off White</div>
      <div class="swatch-hex" style="color:#555">#F7F6F3</div>
      <div class="swatch-specs" style="color:#9A9690">RGB 247, 246, 243<br>CMYK 0, 0, 1, 3<br>Pantone Cool Gray 1 C</div>
    </div>
    <div class="swatch-card" style="background:#EC2128">
      <p class="swatch-role" style="color:rgba(255,255,255,.55)">Accent</p>
      <div class="swatch-name" style="color:white">Twilight Crimson</div>
      <div class="swatch-hex" style="color:rgba(255,255,255,.9)">#EC2128</div>
      <div class="swatch-specs" style="color:rgba(255,255,255,.65)">RGB 236, 33, 40<br>CMYK 0, 86, 83, 7<br>Pantone 485 C</div>
    </div>
    <div class="swatch-card" style="background:#333333">
      <p class="swatch-role" style="color:rgba(255,255,255,.4)">Secondary</p>
      <div class="swatch-name" style="color:white">Charcoal</div>
      <div class="swatch-hex" style="color:rgba(255,255,255,.8)">#333333</div>
      <div class="swatch-specs" style="color:rgba(255,255,255,.55)">RGB 51, 51, 51<br>CMYK 0, 0, 0, 80<br>Pantone Black 4 C</div>
    </div>
  </div> -->
  <div class="subdiv fade-in">
    <h3 class="subdiv-title">Neutral Scale</h3><hr class="subdiv-rule">
    <div class="neutral-row" style="margin-bottom:28px">
      <div class="neutral-cell" style="background:#1A1A1A"><div class="neutral-cell-label">100</div></div>
      <div class="neutral-cell" style="background:#333333"><div class="neutral-cell-label">200</div></div>
      <div class="neutral-cell" style="background:#555555"><div class="neutral-cell-label">300</div></div>
      <div class="neutral-cell" style="background:#777777"><div class="neutral-cell-label">400</div></div>
      <div class="neutral-cell" style="background:#9A9690"><div class="neutral-cell-label">500</div></div>
      <div class="neutral-cell" style="background:#B8B4AC"><div class="neutral-cell-label">600</div></div>
      <div class="neutral-cell" style="background:#D4D0C8"><div class="neutral-cell-label">700</div></div>
      <div class="neutral-cell" style="background:#E8E4DC"><div class="neutral-cell-label">800</div></div>
      <div class="neutral-cell" style="background:#F0EDE6;border:1px solid #E8E4DC"><div class="neutral-cell-label">900</div></div>
      <div class="neutral-cell" style="background:#FFFFFF;border:1px solid #E8E4DC"><div class="neutral-cell-label">White</div></div>
    </div>
    <div class="crimson-row">
      <div class="crimson-tile" style="background:#B01920"><span style="color:white;font-size:12px;font-weight:700">Crimson Dark</span><small style="color:rgba(255,255,255,.7);font-size:10px">#B01920</small></div>
      <div class="crimson-tile" style="background:#EC2128"><span style="color:white;font-size:12px;font-weight:700">Crimson</span><small style="color:rgba(255,255,255,.75);font-size:10px">#EC2128 &middot; Primary</small></div>
      <div class="crimson-tile" style="background:#F04A50"><span style="color:white;font-size:12px;font-weight:700">Crimson Light</span><small style="color:rgba(255,255,255,.7);font-size:10px">#F04A50</small></div>
      <div class="crimson-tile" style="background:#FDE8E9;border:1px solid #E8E4DC"><span style="color:#B01920;font-size:12px;font-weight:700">Crimson Pale</span><small style="color:#EC2128;font-size:10px">#FDE8E9</small></div>
    </div>
  </div>
  <div class="subdiv fade-in">
    <h3 class="subdiv-title">Approved Colour Combinations</h3><hr class="subdiv-rule">
    <div class="color-combo-grid">
      <div class="color-combo" style="background:#1A1A1A;flex-direction:column"><span style="font-size:20px;font-weight:700;color:white">Aa</span><span style="font-size:9px;opacity:.5;letter-spacing:.1em;text-transform:uppercase;color:white;margin-top:6px">White on Black</span></div>
      <div class="color-combo" style="background:#EC2128;flex-direction:column"><span style="font-size:20px;font-weight:700;color:white">Aa</span><span style="font-size:9px;opacity:.7;letter-spacing:.1em;text-transform:uppercase;color:white;margin-top:6px">White on Crimson</span></div>
      <div class="color-combo" style="background:#F7F6F3;border:1px solid #E8E4DC;flex-direction:column"><span style="font-size:20px;font-weight:700;color:#1A1A1A">Aa</span><span style="font-size:9px;color:#9A9690;letter-spacing:.1em;text-transform:uppercase;margin-top:6px">Black on Off-White</span></div>
      <div class="color-combo" style="background:#333333;flex-direction:column"><span style="font-size:20px;font-weight:700;color:white">Aa</span><span style="font-size:9px;opacity:.5;letter-spacing:.1em;text-transform:uppercase;color:white;margin-top:6px">White on Charcoal</span></div>
      <div class="color-combo" style="background:#FFFFFF;border:1px solid #E8E4DC;flex-direction:column"><span style="font-size:20px;font-weight:700;color:#EC2128">Aa</span><span style="font-size:9px;color:#9A9690;letter-spacing:.1em;text-transform:uppercase;margin-top:6px">Crimson on White</span></div>
      <div class="color-combo" style="background:#F0EDE6;border:1px solid #E8E4DC;flex-direction:column"><span style="font-size:20px;font-weight:700;color:#1A1A1A">Aa</span><span style="font-size:9px;color:#9A9690;letter-spacing:.1em;text-transform:uppercase;margin-top:6px">Black on Cream</span></div>
      <div class="color-combo" style="background:#1A1A1A;flex-direction:column"><span style="font-size:20px;font-weight:700;color:#EC2128">Aa</span><span style="font-size:9px;color:rgba(255,255,255,.35);letter-spacing:.1em;text-transform:uppercase;margin-top:6px">Crimson on Black</span></div>
      <div class="color-combo" style="background:#FDE8E9;border:1px solid #F04A50;flex-direction:column"><span style="font-size:20px;font-weight:700;color:#B01920">Aa</span><span style="font-size:9px;color:#EC2128;opacity:.7;letter-spacing:.1em;text-transform:uppercase;margin-top:6px">Crimson on Pale</span></div>
    </div>
  </div>
</div>
</div>

<!-- 05 TYPOGRAPHY -->
<div class="sec-wrap" id="typography">
<div class="sec fade-in">
  <span class="sec-eyebrow">05 &mdash; Typography</span>
  <div class="two-col">
    <div>
      <h2 class="sec-title">Typography</h2>
      <hr class="sec-rule">
      <p class="sec-body">Our primary typeface is <span style="font-weight:500">Montserrat</span> &mdash; the definitive voice of precision and modernity. Its clean geometric forms reflect our engineering-led approach. We use the full weight range from Light 300 to Bold 700.</p>
      <p class="sec-body">Typography is architecture. Each weight, size, and spacing choice is deliberate. Follow the hierarchy precisely and do not introduce additional typefaces.</p>
    </div>
    <div style="background:#fff;border:1px solid var(--bone);padding:48px">
      <p style="font-size:72px;font-weight:700;letter-spacing:-.02em;line-height:1;color:var(--ink)">Aa</p>
      <p style="font-size:20px;font-weight:300;color:var(--ash);margin-top:12px">Montserrat</p>
      <div style="margin-top:28px;display:flex;gap:20px;flex-wrap:wrap">
        <span style="font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke)">Light 300</span>
        <span style="font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke)">Regular 400</span>
        <span style="font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke)">Medium 500</span>
        <span style="font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke)">Bold 700</span>
      </div>
    </div>
  </div>
  <div class="specimen-block mt64 fade-in">
    <p style="font-size:10px;letter-spacing:.14em;text-transform:uppercase;color:var(--smoke);margin-bottom:28px">Typeface Specimen</p>
    <div class="specimen-row" style="font-weight:300">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</div>
    <div class="specimen-row" style="font-weight:700;margin-top:8px">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</div>
    <hr class="specimen-divider">
    <div class="specimen-row" style="font-weight:700">0 1 2 3 4 5 6 7 8 9</div>
    <hr class="specimen-divider">
    <div class="specimen-row" style="font-weight:300;font-size:18px;color:var(--smoke)">. , : ; ! ? &ldquo; &rsquo; / \ ( ) [ ] @ # &amp; + &minus; &times; = % &pound; $ &euro; &copy;</div>
  </div>
  <div class="weight-row fade-in">
    <div class="weight-cell">
      <p class="weight-label">Light &mdash; 300</p>
      <p style="font-size:28px;font-weight:300;line-height:1.2;color:var(--ink);margin-bottom:12px">The Built<br>Environment</p>
      <p style="font-size:10px;font-family:monospace;color:var(--smoke)">300 &middot; 28px &middot; Body copy</p>
    </div>
    <div class="weight-cell">
      <p class="weight-label">Regular &mdash; 400</p>
      <p style="font-size:28px;font-weight:400;line-height:1.2;color:var(--ink);margin-bottom:12px">The Built<br>Environment</p>
      <p style="font-size:10px;font-family:monospace;color:var(--smoke)">400 &middot; 28px &middot; UI / Labels</p>
    </div>
    <div class="weight-cell">
      <p class="weight-label">Medium &mdash; 500</p>
      <p style="font-size:28px;font-weight:500;line-height:1.2;color:var(--ink);margin-bottom:12px">The Built<br>Environment</p>
      <p style="font-size:10px;font-family:monospace;color:var(--smoke)">500 &middot; 28px &middot; Emphasis</p>
    </div>
    <div class="weight-cell">
      <p class="weight-label">Bold &mdash; 700</p>
      <p style="font-size:28px;font-weight:700;line-height:1.2;color:var(--ink);margin-bottom:12px">The Built<br>Environment</p>
      <p style="font-size:10px;font-family:monospace;color:var(--smoke)">700 &middot; 28px &middot; Headlines</p>
    </div>
  </div>
  <div class="subdiv fade-in">
    <h3 class="subdiv-title">Type Hierarchy</h3><hr class="subdiv-rule">
    <div class="hierarchy-list">
      <div class="hierarchy-item"><span class="hierarchy-meta">Display &middot; 96px &middot; 700</span><span style="font-size:clamp(36px,5vw,88px);font-weight:700;line-height:1;letter-spacing:-.03em;color:var(--ink)">Display</span></div>
      <div class="hierarchy-item"><span class="hierarchy-meta">Section &middot; 52px &middot; 700</span><span style="font-size:clamp(28px,3.5vw,52px);font-weight:700;line-height:1.05;letter-spacing:-.02em;color:var(--ink)">Section Title</span></div>
      <div class="hierarchy-item"><span class="hierarchy-meta">Heading &middot; 24px &middot; 500</span><span style="font-size:24px;font-weight:500;line-height:1.3;letter-spacing:-.01em;color:var(--ink)">Subsection Heading</span></div>
      <div class="hierarchy-item"><span class="hierarchy-meta">Lead &middot; 17px &middot; 300</span><span style="font-size:17px;font-weight:300;line-height:1.85;color:#555">Lead paragraph text for introductions and featured copy blocks.</span></div>
      <div class="hierarchy-item"><span class="hierarchy-meta">Body &middot; 15px &middot; 300</span><span style="font-size:15px;font-weight:300;line-height:1.85;color:#555">Standard body text used throughout documents, proposals, and website content.</span></div>
      <div class="hierarchy-item"><span class="hierarchy-meta">Label &middot; 11px &middot; 400</span><span style="font-size:11px;font-weight:400;letter-spacing:.12em;text-transform:uppercase;color:var(--smoke)">Section Label &middot; Eyebrow &middot; Tag</span></div>
      <div class="hierarchy-item"><span class="hierarchy-meta">Caption &middot; 10px &middot; 400</span><span style="font-size:10px;font-weight:400;letter-spacing:.08em;color:var(--smoke)">Image caption &middot; footnote &middot; metadata</span></div>
    </div>
  </div>
  <div class="subdiv fade-in">
    <h3 class="subdiv-title">Colour Highlights</h3><hr class="subdiv-rule">
    <p class="sec-body" style="margin-bottom:36px">Use Twilight Crimson sparingly to emphasise key words. Never underline for emphasis &mdash; use weight 500 instead. Crimson highlights should appear no more than once per paragraph.</p>
    <div class="highlight-examples">
      <div class="highlight-ex">We design with <em>precision</em> and build with purpose.</div>
      <div class="highlight-ex">Architecture begins where <em>imagination</em> meets engineering.</div>
      <div class="highlight-ex">Between <em>light and shadow</em>, we create the extraordinary.</div>
      <div class="highlight-ex">Every structure tells a story. Ours is written in <em>steel, concrete, and code.</em></div>
    </div>
  </div>
</div>
</div>

<!-- 06 IMAGERY -->
<div class="sec-wrap alt" id="imagery">
<div class="sec fade-in">
  <span class="sec-eyebrow">06 &mdash; Imagery</span>
  <div class="two-col">
    <div>
      <h2 class="sec-title">Imagery &amp; Iconography</h2>
      <hr class="sec-rule">
      <p class="sec-body">Our photography captures the drama inherent in the built environment &mdash; bold geometry, dramatic shadows, and the interplay of structure and sky. Every image should feel considered, architectural, and purposeful.</p>
      <p class="sec-body">We favour high-contrast treatments and compositions that emphasise form over decoration. Avoid lifestyle photography, stock clich&eacute;s, and over-saturated colour treatments.</p>
    </div>
    <div style="display:flex;flex-direction:column;gap:14px">
      <div style="display:flex;align-items:flex-start;gap:12px"><div style="width:3px;height:3px;background:var(--crimson);border-radius:50%;margin-top:6px;flex-shrink:0"></div><span style="font-size:14px;font-weight:300;color:var(--ash)">Architectural subject matter &mdash; structures, details, materials</span></div>
      <div style="display:flex;align-items:flex-start;gap:12px"><div style="width:3px;height:3px;background:var(--crimson);border-radius:50%;margin-top:6px;flex-shrink:0"></div><span style="font-size:14px;font-weight:300;color:var(--ash)">Dramatic natural lighting &mdash; golden hour, overcast, dusk</span></div>
      <div style="display:flex;align-items:flex-start;gap:12px"><div style="width:3px;height:3px;background:var(--crimson);border-radius:50%;margin-top:6px;flex-shrink:0"></div><span style="font-size:14px;font-weight:300;color:var(--ash)">High contrast or muted monochromatic colour treatment</span></div>
      <div style="display:flex;align-items:flex-start;gap:12px"><div style="width:3px;height:3px;background:var(--crimson);border-radius:50%;margin-top:6px;flex-shrink:0"></div><span style="font-size:14px;font-weight:300;color:var(--ash)">Technical imagery &mdash; BIM renders, scan data, site photography</span></div>
    </div>
  </div>
  <div class="photo-grid fade-in">
    <div class="photo-block" style="background:#1A1A1A">
      <div style="position:absolute;inset:0;background:repeating-linear-gradient(0deg,transparent,transparent 39px,rgba(255,255,255,.03) 40px),repeating-linear-gradient(90deg,transparent,transparent 39px,rgba(255,255,255,.03) 40px)"></div>
      <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);opacity:.12"><svg style="height:80px;width:auto;max-width:100%;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 258.98 250"><path style="fill:#fcfcfc;" d="M231.52,211.84H27.46a.93.93,0,1,1,0-1.85H231.52a.93.93,0,1,1,0,1.85Z"/><path style="fill:#fcfcfc;" d="M218.4,205.6H130.13V70.52a.93.93,0,0,1,1.85,0V203.75H218.4a.93.93,0,1,1,0,1.85Z"/><path style="fill:#fcfcfc;" d="M205,199.1H136.76V95.2a.93.93,0,0,1,1.85,0V197.25H205a.93.93,0,0,1,0,1.85Z"/><path style="fill:#fcfcfc;" d="M195,192.82H143.35v-71.1a.92.92,0,1,1,1.84,0V191H195a.92.92,0,1,1,0,1.84Z"/><path style="fill:#fcfcfc;" d="M124.2,211.84a.92.92,0,0,1-.93-.92V39.08a.93.93,0,0,1,1.85,0V210.92A.92.92,0,0,1,124.2,211.84Z"/><path style="fill:#fcfcfc;" d="M118.62,205.6H37.78a.93.93,0,0,1,0-1.85h79V67.6a.93.93,0,1,1,1.85,0Z"/><path style="fill:#fcfcfc;" d="M112.51,199.1H51.81a.93.93,0,0,1,0-1.85h58.85V91.7a.93.93,0,1,1,1.85,0Z"/><path style="fill:#fcfcfc;" d="M106,192.82H59.34a.92.92,0,0,1,0-1.84h44.82V116.46a.92.92,0,1,1,1.84,0Z"/></svg></div>
      <p class="photo-caption">Structural form &amp; geometry</p>
    </div>
    <div class="photo-block" style="background:#333333">
      <div style="position:absolute;inset:0;background:repeating-linear-gradient(45deg,rgba(255,255,255,.025) 0,rgba(255,255,255,.025) 1px,transparent 1px,transparent 20px)"></div>
      <p class="photo-caption">Dramatic light &amp; shadow</p>
    </div>
    <div class="photo-block" style="background:#555555">
      <div style="position:absolute;inset:0;background-image:radial-gradient(circle at 30% 40%,rgba(236,33,40,.12) 0%,transparent 50%)"></div>
      <p class="photo-caption">Material texture &amp; detail</p>
    </div>
  </div>
  <div class="photo-rule-cards fade-in">
    <div class="photo-rule-card"><h4>Lighting</h4><p>Prefer dramatic side-lighting, long shadows, and twilight-hour atmosphere. Avoid flat, midday overhead light.</p></div>
    <div class="photo-rule-card"><h4>Composition</h4><p>Strong leading lines, geometric framing, rule-of-thirds. Architectural rigour and intentionality in every frame.</p></div>
    <div class="photo-rule-card"><h4>Treatment</h4><p>Desaturated tones or black &amp; white with slight warm cast (+10 temperature). Never over-processed HDR or heavy filters.</p></div>
  </div>
  <div class="subdiv fade-in">
    <h3 class="subdiv-title">Icon System</h3><hr class="subdiv-rule">
    <p class="sec-body" style="margin-bottom:36px">Use a single consistent icon library throughout. Icons must be 24&times;24px, 1.5px stroke weight, rounded joins, no fill &mdash; matching the geometric precision of Helvetica Neue.</p>
    <div class="icon-grid">
      <div class="icon-cell"><svg viewBox="0 0 24 24" fill="none" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="width:24px;height:24px"><path d="M3 21L12 3l9 18H3z"/><line x1="9" y1="21" x2="9" y2="14"/><line x1="15" y1="21" x2="15" y2="14"/><line x1="9" y1="14" x2="15" y2="14"/></svg><span>Structure</span></div>
      <div class="icon-cell"><svg viewBox="0 0 24 24" fill="none" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="width:24px;height:24px"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg><span>BIM</span></div>
      <div class="icon-cell"><svg viewBox="0 0 24 24" fill="none" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="width:24px;height:24px"><circle cx="12" cy="12" r="9"/><line x1="12" y1="3" x2="12" y2="21"/><line x1="3" y1="12" x2="21" y2="12"/></svg><span>Global</span></div>
      <div class="icon-cell"><svg viewBox="0 0 24 24" fill="none" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="width:24px;height:24px"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg><span>MEP</span></div>
      <div class="icon-cell"><svg viewBox="0 0 24 24" fill="none" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="width:24px;height:24px"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg><span>Location</span></div>
      <div class="icon-cell"><svg viewBox="0 0 24 24" fill="none" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="width:24px;height:24px"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg><span>Engineering</span></div>
      <div class="icon-cell"><svg viewBox="0 0 24 24" fill="none" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="width:24px;height:24px"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg><span>Digital</span></div>
      <div class="icon-cell"><svg viewBox="0 0 24 24" fill="none" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="width:24px;height:24px"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg><span>Grid</span></div>
    </div>
  </div>
</div>
</div>

<!-- 07 APPLICATIONS -->
<div class="sec-wrap" id="applications">
<div class="sec fade-in">
  <span class="sec-eyebrow">07 &mdash; Applications</span>
  <div class="two-col">
    <div>
      <h2 class="sec-title">Applications</h2>
      <hr class="sec-rule">
      <p class="sec-body">The Twilight brand system performs across every touchpoint &mdash; from digital interfaces and social media to printed proposals, letterheads, and site signage. Consistency across applications builds recognition and trust.</p>
      <p class="sec-body">Always source approved templates from the brand asset library. Never recreate branded materials from scratch without referencing these guidelines.</p>
    </div>
    <div style="display:flex;flex-wrap:wrap;gap:8px;align-content:flex-start;padding-top:4px">
      <span class="tag">Digital</span><span class="tag">Print</span><span class="tag">Signage</span><span class="tag">Social Media</span><span class="tag">Email</span><span class="tag">Proposals</span>
    </div>
  </div>
  <!-- Digital mockups -->
  <div class="subdiv fade-in">
    <h3 class="subdiv-title">Digital Applications</h3><hr class="subdiv-rule">
    <div class="app-grid">
      <div style="background:#1A1A1A;aspect-ratio:16/9;position:relative;overflow:hidden">
        <div style="position:absolute;inset:0;background:repeating-linear-gradient(0deg,transparent,transparent 39px,rgba(255,255,255,.025) 40px),repeating-linear-gradient(90deg,transparent,transparent 39px,rgba(255,255,255,.025) 40px)"></div>
        <div style="position:absolute;top:0;left:0;right:0;height:28px;background:rgba(255,255,255,.05);border-bottom:1px solid rgba(255,255,255,.06);display:flex;align-items:center;justify-content:space-between;padding:0 16px">
          <div style="display:flex;align-items:center;gap:6px;height:14px;overflow:hidden"><svg style="height:10px;width:auto;max-width:100%;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 726.53 250"><line style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" x1="320.97" y1="172" x2="210.61" y2="172"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="313.88 168.62 266.64 168.62 266.64 96.07"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="270.22 109.42 270.22 165.11 306.62 165.11"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="273.79 123.76 273.79 161.72 301.22 161.72"/><line style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" x1="262.93" y1="79.07" x2="262.93" y2="172"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="216.2 168.62 259.41 168.62 259.41 94.49"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="256.11 107.52 256.11 165.11 223.78 165.11"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="227.86 161.72 252.59 161.72 252.59 120.92"/><polygon style="fill:#fff;" points="628.55 171.85 638.92 171.85 638.92 125.56 664.63 125.56 664.63 117.48 602.85 117.48 602.85 125.48 628.63 125.48 628.55 171.85"/><polygon style="fill:#fff;" points="574.55 139.33 574.55 117.56 584.89 117.56 584.89 171.93 574.55 171.93 574.55 147.59 531.15 147.59 531.15 171.93 520.96 171.93 520.96 117.56 531.22 117.56 531.22 139.37 574.55 139.33"/><path style="fill:#fff;" d="M463.07,141.43V149h22.34V163.7H442.29V125.59h43.12v7.28l10.16-1.72v-4.39s.78-9.28-10.94-9.28h-40.5s-12.8-.1-12.22,13.06v30.22s-1,12,10.88,11.05h40.82l1.26,0c2.08.08,10.43-.21,10.71-9.64V141.31Z"/><rect style="fill:#fff;" x="395.52" y="117.48" width="10.33" height="54.41"/><polygon style="fill:#fff;" points="377.09 163.63 377.09 172 324.63 172 324.63 117.44 334.78 117.44 334.78 163.65 377.09 163.63"/><polygon style="fill:#fff;" points="220.41 117.43 211.29 117.43 196.27 159.01 180.54 117.4 173.74 117.4 157.77 159.01 142.66 117.43 132.04 117.4 153.09 171.89 160.81 171.89 176.87 131.28 192.15 171.89 199.7 171.89 220.41 117.43"/><polygon style="fill:#fff;" points="123.63 117.4 123.63 125.59 97.74 125.59 97.74 171.89 87.74 171.89 87.74 125.51 61.91 125.51 61.91 117.4 123.63 117.4"/></svg></div>
          <div style="display:flex;gap:8px"><span style="font-size:5px;color:rgba(255,255,255,.4);letter-spacing:.08em;text-transform:uppercase">Projects</span><span style="font-size:5px;color:rgba(255,255,255,.4);letter-spacing:.08em;text-transform:uppercase">Services</span><span style="font-size:5px;color:rgba(255,255,255,.4);letter-spacing:.08em;text-transform:uppercase">About</span><span style="font-size:5px;background:#EC2128;color:white;padding:1px 5px;letter-spacing:.08em;text-transform:uppercase">Contact</span></div>
        </div>
        <div style="position:absolute;top:50%;left:16px;transform:translateY(-50%)">
          <p style="font-size:5.5px;letter-spacing:.14em;text-transform:uppercase;color:#9A9690;margin-bottom:6px">Engineering Solutions</p>
          <p style="font-size:18px;font-weight:700;color:white;line-height:1.05;letter-spacing:-.02em">Between Light<br>and Shadow.</p>
          <div style="width:18px;height:1.5px;background:#EC2128;margin:8px 0"></div>
          <p style="font-size:5.5px;font-weight:300;color:rgba(255,255,255,.5)">Liverpool &middot; Architecture &middot; BIM &middot; Structural</p>
        </div>
        <div style="position:absolute;right:32px;top:50%;transform:translateY(-50%);opacity:.07"><svg style="height:80px;width:auto;max-width:100%;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 258.98 250"><path style="fill:#fcfcfc;" d="M231.52,211.84H27.46a.93.93,0,1,1,0-1.85H231.52a.93.93,0,1,1,0,1.85Z"/><path style="fill:#fcfcfc;" d="M218.4,205.6H130.13V70.52a.93.93,0,0,1,1.85,0V203.75H218.4a.93.93,0,1,1,0,1.85Z"/><path style="fill:#fcfcfc;" d="M205,199.1H136.76V95.2a.93.93,0,0,1,1.85,0V197.25H205a.93.93,0,0,1,0,1.85Z"/><path style="fill:#fcfcfc;" d="M195,192.82H143.35v-71.1a.92.92,0,1,1,1.84,0V191H195a.92.92,0,1,1,0,1.84Z"/><path style="fill:#fcfcfc;" d="M124.2,211.84a.92.92,0,0,1-.93-.92V39.08a.93.93,0,0,1,1.85,0V210.92A.92.92,0,0,1,124.2,211.84Z"/><path style="fill:#fcfcfc;" d="M118.62,205.6H37.78a.93.93,0,0,1,0-1.85h79V67.6a.93.93,0,1,1,1.85,0Z"/><path style="fill:#fcfcfc;" d="M112.51,199.1H51.81a.93.93,0,0,1,0-1.85h58.85V91.7a.93.93,0,1,1,1.85,0Z"/><path style="fill:#fcfcfc;" d="M106,192.82H59.34a.92.92,0,0,1,0-1.84h44.82V116.46a.92.92,0,1,1,1.84,0Z"/></svg></div>
        <span style="position:absolute;bottom:10px;right:12px;font-size:7px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.25)">Website Hero</span>
      </div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:2px">
        <div style="background:#EC2128;display:flex;align-items:center;justify-content:center;position:relative;aspect-ratio:1"><svg style="height:48%;width:auto;max-width:100%;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 258.98 250"><path style="fill:#fcfcfc;" d="M231.52,211.84H27.46a.93.93,0,1,1,0-1.85H231.52a.93.93,0,1,1,0,1.85Z"/><path style="fill:#fcfcfc;" d="M218.4,205.6H130.13V70.52a.93.93,0,0,1,1.85,0V203.75H218.4a.93.93,0,1,1,0,1.85Z"/><path style="fill:#fcfcfc;" d="M205,199.1H136.76V95.2a.93.93,0,0,1,1.85,0V197.25H205a.93.93,0,0,1,0,1.85Z"/><path style="fill:#fcfcfc;" d="M195,192.82H143.35v-71.1a.92.92,0,1,1,1.84,0V191H195a.92.92,0,1,1,0,1.84Z"/><path style="fill:#fcfcfc;" d="M124.2,211.84a.92.92,0,0,1-.93-.92V39.08a.93.93,0,0,1,1.85,0V210.92A.92.92,0,0,1,124.2,211.84Z"/><path style="fill:#fcfcfc;" d="M118.62,205.6H37.78a.93.93,0,0,1,0-1.85h79V67.6a.93.93,0,1,1,1.85,0Z"/><path style="fill:#fcfcfc;" d="M112.51,199.1H51.81a.93.93,0,0,1,0-1.85h58.85V91.7a.93.93,0,1,1,1.85,0Z"/><path style="fill:#fcfcfc;" d="M106,192.82H59.34a.92.92,0,0,1,0-1.84h44.82V116.46a.92.92,0,1,1,1.84,0Z"/></svg><span style="position:absolute;bottom:8px;font-size:7px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.5)">App Icon</span></div>
        <div style="background:#F7F6F3;border:1px solid var(--bone);display:flex;align-items:center;justify-content:center;padding:20px;aspect-ratio:1;position:relative"><svg style="height:auto;width:80%;max-width:100%;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 726.53 250"><line style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" x1="320.97" y1="172" x2="210.61" y2="172"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="313.88 168.62 266.64 168.62 266.64 96.07"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="270.22 109.42 270.22 165.11 306.62 165.11"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="273.79 123.76 273.79 161.72 301.22 161.72"/><line style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" x1="262.93" y1="79.07" x2="262.93" y2="172"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="216.2 168.62 259.41 168.62 259.41 94.49"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="256.11 107.52 256.11 165.11 223.78 165.11"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="227.86 161.72 252.59 161.72 252.59 120.92"/><polygon style="fill:#ec2128;" points="628.55 171.85 638.92 171.85 638.92 125.56 664.63 125.56 664.63 117.48 602.85 117.48 602.85 125.48 628.63 125.48 628.55 171.85"/><polygon style="fill:#ec2128;" points="574.55 139.33 574.55 117.56 584.89 117.56 584.89 171.93 574.55 171.93 574.55 147.59 531.15 147.59 531.15 171.93 520.96 171.93 520.96 117.56 531.22 117.56 531.22 139.37 574.55 139.33"/><path style="fill:#ec2128;" d="M463.07,141.43V149h22.34V163.7H442.29V125.59h43.12v7.28l10.16-1.72v-4.39s.78-9.28-10.94-9.28h-40.5s-12.8-.1-12.22,13.06v30.22s-1,12,10.88,11.05h40.82l1.26,0c2.08.08,10.43-.21,10.71-9.64V141.31Z"/><rect style="fill:#ec2128;" x="395.52" y="117.48" width="10.33" height="54.41"/><polygon style="fill:#ec2128;" points="377.09 163.63 377.09 172 324.63 172 324.63 117.44 334.78 117.44 334.78 163.65 377.09 163.63"/><polygon style="fill:#ec2128;" points="220.41 117.43 211.29 117.43 196.27 159.01 180.54 117.4 173.74 117.4 157.77 159.01 142.66 117.43 132.04 117.4 153.09 171.89 160.81 171.89 176.87 131.28 192.15 171.89 199.7 171.89 220.41 117.43"/><polygon style="fill:#ec2128;" points="123.63 117.4 123.63 125.59 97.74 125.59 97.74 171.89 87.74 171.89 87.74 125.51 61.91 125.51 61.91 117.4 123.63 117.4"/></svg><span style="position:absolute;bottom:8px;font-size:7px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke)">Social Profile</span></div>
        <div style="background:#fff;border:1px solid var(--bone);padding:14px;aspect-ratio:2/1;position:relative">
          <div style="border-left:2px solid #EC2128;padding-left:10px">
            <p style="font-size:8px;font-weight:700;color:#1A1A1A;margin-bottom:3px">John Smith</p>
            <p style="font-size:7px;font-weight:300;color:#666;margin-bottom:2px">Senior Architect</p>
            <p style="font-size:7px;font-weight:300;color:#9A9690">Twilight Engineering Solutions LTD</p>
          </div>
          <span style="position:absolute;bottom:6px;right:8px;font-size:7px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke)">Email Sig</span>
        </div>
        <div style="background:#1A1A1A;display:flex;flex-direction:column;justify-content:flex-end;padding:12px;aspect-ratio:2/1;position:relative">
          <div style="width:14px;height:1px;background:#EC2128;margin-bottom:6px"></div>
          <p style="font-size:8px;font-weight:700;color:white;line-height:1.3">New project<br>complete.</p>
          <span style="position:absolute;top:8px;right:8px;font-size:7px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.25)">Social Post</span>
        </div>
      </div>
    </div>
  </div>
  <!-- Print mockups -->
  <div class="subdiv fade-in">
    <h3 class="subdiv-title">Print Applications</h3><hr class="subdiv-rule">
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2px">
      <div style="background:#fff;border:1px solid var(--bone);padding:28px 24px;min-height:340px;position:relative;display:flex;flex-direction:column">
        <div style="border-bottom:1px solid var(--bone);padding-bottom:16px;margin-bottom:20px;display:flex;justify-content:space-between;align-items:flex-start">
          <div style="height:14px;overflow:hidden"><svg style="height:10px;width:auto;max-width:100%;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 726.53 250"><line style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" x1="320.97" y1="172" x2="210.61" y2="172"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="313.88 168.62 266.64 168.62 266.64 96.07"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="270.22 109.42 270.22 165.11 306.62 165.11"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="273.79 123.76 273.79 161.72 301.22 161.72"/><line style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" x1="262.93" y1="79.07" x2="262.93" y2="172"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="216.2 168.62 259.41 168.62 259.41 94.49"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="256.11 107.52 256.11 165.11 223.78 165.11"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="227.86 161.72 252.59 161.72 252.59 120.92"/><polygon style="fill:#ec2128;" points="628.55 171.85 638.92 171.85 638.92 125.56 664.63 125.56 664.63 117.48 602.85 117.48 602.85 125.48 628.63 125.48 628.55 171.85"/><polygon style="fill:#ec2128;" points="574.55 139.33 574.55 117.56 584.89 117.56 584.89 171.93 574.55 171.93 574.55 147.59 531.15 147.59 531.15 171.93 520.96 171.93 520.96 117.56 531.22 117.56 531.22 139.37 574.55 139.33"/><path style="fill:#ec2128;" d="M463.07,141.43V149h22.34V163.7H442.29V125.59h43.12v7.28l10.16-1.72v-4.39s.78-9.28-10.94-9.28h-40.5s-12.8-.1-12.22,13.06v30.22s-1,12,10.88,11.05h40.82l1.26,0c2.08.08,10.43-.21,10.71-9.64V141.31Z"/><rect style="fill:#ec2128;" x="395.52" y="117.48" width="10.33" height="54.41"/><polygon style="fill:#ec2128;" points="377.09 163.63 377.09 172 324.63 172 324.63 117.44 334.78 117.44 334.78 163.65 377.09 163.63"/><polygon style="fill:#ec2128;" points="220.41 117.43 211.29 117.43 196.27 159.01 180.54 117.4 173.74 117.4 157.77 159.01 142.66 117.43 132.04 117.4 153.09 171.89 160.81 171.89 176.87 131.28 192.15 171.89 199.7 171.89 220.41 117.43"/><polygon style="fill:#ec2128;" points="123.63 117.4 123.63 125.59 97.74 125.59 97.74 171.89 87.74 171.89 87.74 125.51 61.91 125.51 61.91 117.4 123.63 117.4"/></svg></div>
          <div style="text-align:right"><p style="font-size:6px;font-weight:300;color:#9A9690;line-height:1.8">Liverpool, UK</p><p style="font-size:6px;font-weight:300;color:#9A9690">info@twilighteng.co.uk</p></div>
        </div>
        <div style="flex:1"><div style="height:3.5px;background:#F0EDE6;margin-bottom:7px;width:60%"></div><div style="height:3.5px;background:#F0EDE6;margin-bottom:7px;width:80%"></div><div style="height:3.5px;background:#F0EDE6;margin-bottom:7px;width:70%"></div><div style="height:3.5px;background:#F0EDE6;margin-bottom:7px;width:50%"></div><div style="height:3.5px;background:#F0EDE6;margin-bottom:7px;width:75%"></div><div style="height:3.5px;background:#F0EDE6;margin-bottom:7px;width:65%"></div><div style="height:3.5px;background:#F0EDE6;margin-bottom:7px;width:55%"></div><div style="height:3.5px;background:#F0EDE6;margin-bottom:7px;width:70%"></div><div style="height:3.5px;background:#F0EDE6;margin-bottom:7px;width:45%"></div><div style="height:3.5px;background:#F0EDE6;margin-bottom:7px;width:65%"></div></div>
        <div style="border-top:1px solid var(--bone);padding-top:10px;margin-top:8px"><p style="font-size:5px;font-weight:300;color:#B8B4AC;letter-spacing:.06em;text-align:center">Twilight Engineering Solutions LTD &middot; Registered in England &amp; Wales</p></div>
        <span style="position:absolute;bottom:8px;right:10px;font-size:7px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke)">Letterhead</span>
      </div>
      <div style="display:flex;flex-direction:column;gap:2px">
        <div style="background:#1A1A1A;padding:24px 20px;flex:1;position:relative;min-height:200px;display:flex;flex-direction:column;justify-content:space-between">
          <div style="height:12px;overflow:hidden"><svg style="height:9px;width:auto;max-width:100%;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 726.53 250"><line style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" x1="320.97" y1="172" x2="210.61" y2="172"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="313.88 168.62 266.64 168.62 266.64 96.07"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="270.22 109.42 270.22 165.11 306.62 165.11"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="273.79 123.76 273.79 161.72 301.22 161.72"/><line style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" x1="262.93" y1="79.07" x2="262.93" y2="172"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="216.2 168.62 259.41 168.62 259.41 94.49"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="256.11 107.52 256.11 165.11 223.78 165.11"/><polyline style="fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;" points="227.86 161.72 252.59 161.72 252.59 120.92"/><polygon style="fill:#fff;" points="628.55 171.85 638.92 171.85 638.92 125.56 664.63 125.56 664.63 117.48 602.85 117.48 602.85 125.48 628.63 125.48 628.55 171.85"/><polygon style="fill:#fff;" points="574.55 139.33 574.55 117.56 584.89 117.56 584.89 171.93 574.55 171.93 574.55 147.59 531.15 147.59 531.15 171.93 520.96 171.93 520.96 117.56 531.22 117.56 531.22 139.37 574.55 139.33"/><path style="fill:#fff;" d="M463.07,141.43V149h22.34V163.7H442.29V125.59h43.12v7.28l10.16-1.72v-4.39s.78-9.28-10.94-9.28h-40.5s-12.8-.1-12.22,13.06v30.22s-1,12,10.88,11.05h40.82l1.26,0c2.08.08,10.43-.21,10.71-9.64V141.31Z"/><rect style="fill:#fff;" x="395.52" y="117.48" width="10.33" height="54.41"/><polygon style="fill:#fff;" points="377.09 163.63 377.09 172 324.63 172 324.63 117.44 334.78 117.44 334.78 163.65 377.09 163.63"/><polygon style="fill:#fff;" points="220.41 117.43 211.29 117.43 196.27 159.01 180.54 117.4 173.74 117.4 157.77 159.01 142.66 117.43 132.04 117.4 153.09 171.89 160.81 171.89 176.87 131.28 192.15 171.89 199.7 171.89 220.41 117.43"/><polygon style="fill:#fff;" points="123.63 117.4 123.63 125.59 97.74 125.59 97.74 171.89 87.74 171.89 87.74 125.51 61.91 125.51 61.91 117.4 123.63 117.4"/></svg></div>
          <div><div style="width:16px;height:1px;background:#EC2128;margin-bottom:8px"></div><p style="font-size:8px;font-weight:500;color:white;margin-bottom:2px">Jane Doe</p><p style="font-size:7px;font-weight:300;color:rgba(255,255,255,.5)">Principal Engineer</p></div>
          <span style="position:absolute;bottom:6px;right:8px;font-size:6px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.2)">Front</span>
        </div>
        <div style="background:#EC2128;padding:20px;flex:1;min-height:100px;display:flex;align-items:flex-end;position:relative"><div><p style="font-size:7px;font-weight:300;color:rgba(255,255,255,.8);line-height:1.8;margin-bottom:2px">jane@twilighteng.co.uk</p><p style="font-size:7px;font-weight:300;color:rgba(255,255,255,.7)">+44 151 000 0000</p></div><span style="position:absolute;bottom:6px;right:8px;font-size:6px;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.3)">Back</span></div>
        <span style="font-size:8px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke);margin-top:8px;text-align:center">Business Card</span>
      </div>
      <div style="background:#F7F6F3;border:1px solid var(--bone);overflow:hidden;position:relative;min-height:340px;display:flex;flex-direction:column">
        <div style="background:#1A1A1A;padding:28px 20px;flex:1;position:relative">
          <div style="position:absolute;inset:0;background:repeating-linear-gradient(45deg,rgba(255,255,255,.015) 0,rgba(255,255,255,.015) 1px,transparent 1px,transparent 18px)"></div>
          <div style="position:absolute;bottom:20px;right:20px;opacity:.08"><svg style="height:48px;width:auto;max-width:100%;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 258.98 250"><path style="fill:#fcfcfc;" d="M231.52,211.84H27.46a.93.93,0,1,1,0-1.85H231.52a.93.93,0,1,1,0,1.85Z"/><path style="fill:#fcfcfc;" d="M218.4,205.6H130.13V70.52a.93.93,0,0,1,1.85,0V203.75H218.4a.93.93,0,1,1,0,1.85Z"/><path style="fill:#fcfcfc;" d="M205,199.1H136.76V95.2a.93.93,0,0,1,1.85,0V197.25H205a.93.93,0,0,1,0,1.85Z"/><path style="fill:#fcfcfc;" d="M195,192.82H143.35v-71.1a.92.92,0,1,1,1.84,0V191H195a.92.92,0,1,1,0,1.84Z"/><path style="fill:#fcfcfc;" d="M124.2,211.84a.92.92,0,0,1-.93-.92V39.08a.93.93,0,0,1,1.85,0V210.92A.92.92,0,0,1,124.2,211.84Z"/><path style="fill:#fcfcfc;" d="M118.62,205.6H37.78a.93.93,0,0,1,0-1.85h79V67.6a.93.93,0,1,1,1.85,0Z"/><path style="fill:#fcfcfc;" d="M112.51,199.1H51.81a.93.93,0,0,1,0-1.85h58.85V91.7a.93.93,0,1,1,1.85,0Z"/><path style="fill:#fcfcfc;" d="M106,192.82H59.34a.92.92,0,0,1,0-1.84h44.82V116.46a.92.92,0,1,1,1.84,0Z"/></svg></div>
          <div style="position:relative;z-index:1;margin-top:60px"><div style="width:20px;height:1.5px;background:#EC2128;margin-bottom:14px"></div><p style="font-size:7px;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.4);margin-bottom:10px">Project Proposal</p><p style="font-size:16px;font-weight:700;color:white;letter-spacing:-.01em;line-height:1.2">The Riverside<br>Development</p></div>
        </div>
        <div style="padding:16px 20px;background:#fff;border-top:3px solid #EC2128"><div style="height:10px;overflow:hidden"><svg style="height:8px;width:auto;max-width:100%;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 726.53 250"><line style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" x1="320.97" y1="172" x2="210.61" y2="172"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="313.88 168.62 266.64 168.62 266.64 96.07"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="270.22 109.42 270.22 165.11 306.62 165.11"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="273.79 123.76 273.79 161.72 301.22 161.72"/><line style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" x1="262.93" y1="79.07" x2="262.93" y2="172"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="216.2 168.62 259.41 168.62 259.41 94.49"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="256.11 107.52 256.11 165.11 223.78 165.11"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="227.86 161.72 252.59 161.72 252.59 120.92"/><polygon style="fill:#ec2128;" points="628.55 171.85 638.92 171.85 638.92 125.56 664.63 125.56 664.63 117.48 602.85 117.48 602.85 125.48 628.63 125.48 628.55 171.85"/><polygon style="fill:#ec2128;" points="574.55 139.33 574.55 117.56 584.89 117.56 584.89 171.93 574.55 171.93 574.55 147.59 531.15 147.59 531.15 171.93 520.96 171.93 520.96 117.56 531.22 117.56 531.22 139.37 574.55 139.33"/><path style="fill:#ec2128;" d="M463.07,141.43V149h22.34V163.7H442.29V125.59h43.12v7.28l10.16-1.72v-4.39s.78-9.28-10.94-9.28h-40.5s-12.8-.1-12.22,13.06v30.22s-1,12,10.88,11.05h40.82l1.26,0c2.08.08,10.43-.21,10.71-9.64V141.31Z"/><rect style="fill:#ec2128;" x="395.52" y="117.48" width="10.33" height="54.41"/><polygon style="fill:#ec2128;" points="377.09 163.63 377.09 172 324.63 172 324.63 117.44 334.78 117.44 334.78 163.65 377.09 163.63"/><polygon style="fill:#ec2128;" points="220.41 117.43 211.29 117.43 196.27 159.01 180.54 117.4 173.74 117.4 157.77 159.01 142.66 117.43 132.04 117.4 153.09 171.89 160.81 171.89 176.87 131.28 192.15 171.89 199.7 171.89 220.41 117.43"/><polygon style="fill:#ec2128;" points="123.63 117.4 123.63 125.59 97.74 125.59 97.74 171.89 87.74 171.89 87.74 125.51 61.91 125.51 61.91 117.4 123.63 117.4"/></svg></div></div>
        <span style="position:absolute;bottom:8px;right:10px;font-size:7px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke)">Proposal Cover</span>
      </div>
    </div>
  </div>
</div>
</div>

<!-- 08 DIVISIONS -->
<div id="divisions">
  <div class="division-section">
    <div style="z-index:0;position:absolute;inset:0;background-image:linear-gradient(var(--bone) 1px,transparent 1px),linear-gradient(90deg,var(--bone) 1px,transparent 1px);background-size:60px 60px;opacity:.25;pointer-events:none"></div>
    <div class="division-inner">
      <div class="fade-in">
        <span style="font-size:10px;font-weight:400;letter-spacing:.16em;text-transform:uppercase;color:var(--smoke);display:block;margin-bottom:40px">08a &mdash; Division</span>
        <div class="division-logo" style="margin-left: -25px;"><svg style="height:auto;width:320px;max-width:100%;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 726.53 250"><polygon style="fill:#ec2128;" points="628.55 146.64 638.92 146.64 638.92 100.34 664.63 100.34 664.63 92.27 602.85 92.27 602.85 100.27 628.63 100.27 628.55 146.64"/><polygon style="fill:#ec2128;" points="574.55 114.12 574.55 92.34 584.89 92.34 584.89 146.71 574.55 146.71 574.55 122.38 531.15 122.38 531.15 146.71 520.96 146.71 520.96 92.34 531.22 92.34 531.22 114.16 574.55 114.12"/><path style="fill:#ec2128;" d="M463.07,116.21v7.56h22.34v14.72H442.29V100.38h43.12v7.28l10.16-1.73v-4.39s.78-9.27-10.94-9.27h-40.5s-12.8-.1-12.22,13v30.22s-1,12,10.88,11.06h40.82l1.26,0c2.08.07,10.43-.21,10.71-9.64V116.1Z"/><rect style="fill:#ec2128;" x="395.52" y="92.27" width="10.33" height="54.41"/><polygon style="fill:#ec2128;" points="377.09 138.41 377.09 146.78 324.63 146.78 324.63 92.23 334.78 92.23 334.78 138.43 377.09 138.41"/><polygon style="fill:#ec2128;" points="220.41 92.21 211.29 92.21 196.27 133.79 180.54 92.18 173.74 92.18 157.77 133.79 142.66 92.21 132.04 92.18 153.09 146.67 160.81 146.67 176.87 106.06 192.15 146.67 199.7 146.67 220.41 92.21"/><polygon style="fill:#ec2128;" points="123.63 92.18 123.63 100.38 97.74 100.38 97.74 146.67 87.74 146.67 87.74 100.29 61.91 100.29 61.91 92.18 123.63 92.18"/><line style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" x1="321.07" y1="146.67" x2="204.74" y2="146.67"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="312.7 144.01 262.91 144.01 262.91 62.23"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="265.79 69.19 265.79 141.19 304.16 141.19"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="268.66 77.2 268.66 138.51 297.57 138.51"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="289.75 135.88 271.96 135.88 271.96 84.14"/><line style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" x1="259.89" y1="53.41" x2="259.89" y2="146.67"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="211.52 144.01 257.07 144.01 257.07 61.56"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="254.48 69.19 254.48 141.19 220.41 141.19"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="225.59 138.51 251.66 138.51 251.66 77.2"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="232.7 135.86 248.92 135.86 248.92 83.86"/><path style="fill:#1d1d1b;" d="M454.94,182.44c.11-.54.16-1,.27-1.36.26-.94.52-1.88.84-2.8.58-1.62,1.19-3.22,1.81-4.83a13.12,13.12,0,0,1,.61-1.32.91.91,0,0,1,.3-.37.5.5,0,0,1,.44-.06.55.55,0,0,1,.23.38,1,1,0,0,1-.12.46c-.71,1.84-1.43,3.69-2.15,5.53-.15.4-.29.79-.42,1.2a2.64,2.64,0,0,0,0,.5c.21-.27.35-.43.47-.62a22.1,22.1,0,0,1,2.3-3.13,9.46,9.46,0,0,1,1.34-1.27c1-.78,1.74-.5,2,.8.13.67.15,1.35.26,2a5.6,5.6,0,0,0,.31,1.22.53.53,0,0,0,.8.29,6.68,6.68,0,0,0,1.12-.76c.81-.71,1.59-1.44,2.36-2.18a3.28,3.28,0,0,0,.51-.71,8.53,8.53,0,0,1,3.44-3.22,3.75,3.75,0,0,1,1.77-.48,2.31,2.31,0,0,1,2.45,1.8c0,.15.11.29.18.49a4.54,4.54,0,0,0,.53-.33c.34-.3.67-.62,1-.92a5.32,5.32,0,0,1,.46-.37.6.6,0,0,1,.72,0,.55.55,0,0,1,.23.6,8.88,8.88,0,0,1-.28,1.13c-.35,1.12-.74,2.22-1.08,3.33-.47,1.56-.91,3.12-1.36,4.68,0,.15-.1.31.14.45a1.17,1.17,0,0,0,.28-.17,77,77,0,0,1,6.2-5.92,2.92,2.92,0,0,0,1-1.29,2.66,2.66,0,0,1,.39-.67.56.56,0,0,1,.3-.23.77.77,0,0,1,.45.07.4.4,0,0,1,.12.34,4.87,4.87,0,0,1-.23.74,23.32,23.32,0,0,0-1,3.85,6.09,6.09,0,0,0-.08,1.35c.05.7.4.92,1.05.72a3.82,3.82,0,0,0,1.34-.77,25.57,25.57,0,0,0,3.13-3.2c.58-.7,1.2-1.36,1.78-2.06a2.73,2.73,0,0,0,.37-.67c.3-.72.57-1.45.88-2.17a2.92,2.92,0,0,1,.48-.72.49.49,0,0,1,.43-.11.36.36,0,0,1,.27.45,2.72,2.72,0,0,1-.18.55c-.75,1.94-1.51,3.87-2.25,5.81a1.9,1.9,0,0,0-.23,1.22c.18-.24.32-.4.44-.57.73-1,1.43-2,2.18-3a11.74,11.74,0,0,1,1.16-1.18,3.16,3.16,0,0,1,.64-.44,1,1,0,0,1,1.53.59,7.4,7.4,0,0,1,.22,1.14c.07.52.1,1,.18,1.55a3.28,3.28,0,0,0,.25.93.56.56,0,0,0,.86.34,4.39,4.39,0,0,0,.89-.58q1.76-1.56,3.46-3.15a2.9,2.9,0,0,0,.44-.64,9.93,9.93,0,0,1,1.73-2.09,6.5,6.5,0,0,1,.94-.69,1.49,1.49,0,0,1,.55-.18,1,1,0,0,1,1.16,1.17,4.19,4.19,0,0,1-.75,1.78,12.8,12.8,0,0,1-2.63,2.72,7.26,7.26,0,0,1-.63.46,1.88,1.88,0,0,0-.88,2,8.28,8.28,0,0,0,.12.87,1.21,1.21,0,0,0,1,1,2.19,2.19,0,0,0,1.34-.08,11.71,11.71,0,0,0,3.46-2.31,1.45,1.45,0,0,0,.31-.7c.1-.37.13-.77.24-1.14a7.06,7.06,0,0,1,2.59-3.56,2.05,2.05,0,0,1,1.46-.44.79.79,0,0,1,.79,1,3.48,3.48,0,0,1-.48,1.16,19.55,19.55,0,0,1-1.47,1.8c-.5.56-1.06,1.06-1.58,1.59a4.86,4.86,0,0,0-.37.51,2.25,2.25,0,0,0,.48.34,2,2,0,0,0,1.61-.09,19.66,19.66,0,0,0,2.21-1.21c1.05-.71,2-1.51,3.05-2.27.13-.1.24-.22.37-.31a3.51,3.51,0,0,0,1.62-2,1.27,1.27,0,0,1,.24-.42.41.41,0,0,1,.5-.2.38.38,0,0,1,.25.47,5,5,0,0,1-.24.84c-.22.57-.47,1.14-.72,1.7a28.92,28.92,0,0,0-1.38,3.85,1.5,1.5,0,0,0-.07.91c.29,0,.32-.26.41-.42l1.13-2.27a8,8,0,0,1,1.92-2.54,4.74,4.74,0,0,1,.8-.55.67.67,0,0,1,.89.16,4,4,0,0,1,.46.74c.55,1.1,1,1.24,2.07.58a12.07,12.07,0,0,0,1.48-1.1,3.57,3.57,0,0,0,.52-.69c.15-.22.27-.45.43-.65a.49.49,0,0,1,.61-.11.41.41,0,0,1,.15.52l-.25.73a21.3,21.3,0,0,0-1,3.66,6.72,6.72,0,0,0-.08,1.55c0,.56.41.76,1,.61a3.73,3.73,0,0,0,1.42-.81,26.25,26.25,0,0,0,3.32-3.43c.49-.61,1-1.17,1.53-1.76a2.9,2.9,0,0,0,.38-.66c.28-.66.51-1.34.79-2a4.77,4.77,0,0,1,.55-.92.39.39,0,0,1,.51-.15.46.46,0,0,1,.23.58c-.06.18-.15.36-.22.54-.75,1.93-1.51,3.87-2.24,5.81a1.44,1.44,0,0,0-.16,1.11l.43-.61c.71-1,1.39-2,2.12-2.91a14.33,14.33,0,0,1,1.15-1.19,2.88,2.88,0,0,1,.39-.3c1-.68,1.64-.45,1.9.73.14.63.18,1.28.27,1.92a7.55,7.55,0,0,0,.17,1.06c.24.79.59.93,1.29.51a7.14,7.14,0,0,0,.93-.71c.75-.67,1.49-1.35,2.21-2.05a3.26,3.26,0,0,0,.52-.7,8.44,8.44,0,0,1,3.42-3.23,3.85,3.85,0,0,1,1.87-.5,2.27,2.27,0,0,1,2.38,1.87c0,.11.09.22.16.4a2,2,0,0,0,.44-.22c.3-.25.58-.52.87-.79l.36-.32c.3-.26.61-.56,1-.29s.25.69.17,1.06-.25.94-.41,1.4c-.83,2.33-1.51,4.69-2.15,7.08a4.88,4.88,0,0,0-.1.76,3.72,3.72,0,0,0,.5-.32,77.07,77.07,0,0,1,6.28-6,10.81,10.81,0,0,1,.92-.72.4.4,0,0,1,.53,0,.45.45,0,0,1,0,.62c-.24.26-.49.52-.75.76L558.18,180a42.09,42.09,0,0,0-4.56,4.79,7.81,7.81,0,0,0-1.36,2.46c-.39,1.2-.81,2.4-1.25,3.58a27.19,27.19,0,0,1-1.88,4.06,16.13,16.13,0,0,1-1,1.47,3.13,3.13,0,0,1-.69.67.67.67,0,0,1-1.1-.33,3.71,3.71,0,0,1-.16-1.24,6.18,6.18,0,0,1,.43-1.89,18.54,18.54,0,0,1,2.16-4.14c.71-1,1.47-2.06,2.25-3.05a7.42,7.42,0,0,0,1.35-2.56c.84-2.86,1.73-5.72,2.59-8.57a7.05,7.05,0,0,0,.12-.77,2.21,2.21,0,0,0-.49.24c-1.41,1.25-2.8,2.52-4.21,3.76a13.61,13.61,0,0,1-2.9,2,2.25,2.25,0,0,1-1.3.32,1.24,1.24,0,0,1-1.26-1.12,13.74,13.74,0,0,1-.09-1.44c-.2-.1-.31.05-.43.15-.39.34-.77.69-1.15,1a2.87,2.87,0,0,1-1.36.73,1.34,1.34,0,0,1-1.68-.8,5.39,5.39,0,0,1-.38-1.3c-.1-.58-.13-1.16-.21-1.74a8,8,0,0,0-.2-.82,2.2,2.2,0,0,0-.54.28c-.66.71-1.34,1.41-1.94,2.17a20.73,20.73,0,0,0-2.21,3.56c-.2.4-.38.82-.62,1.21a2.5,2.5,0,0,1-.57.64.53.53,0,0,1-.84-.34,3.14,3.14,0,0,1,0-1.06c.18-.89.42-1.77.65-2.65.07-.3.17-.61.32-1.12-.29.26-.44.36-.55.49a20.1,20.1,0,0,1-2.64,2.58,13.83,13.83,0,0,1-1.28.88,2.61,2.61,0,0,1-.54.24,1.61,1.61,0,0,1-2.24-1.33,5.17,5.17,0,0,1,0-1.84c.1-.57.2-1.14.31-1.81l-.59.25a9.21,9.21,0,0,1-1.05.51,1.75,1.75,0,0,1-2.15-.67c-.22-.28-.4-.58-.63-.92a2.43,2.43,0,0,0-.51.27,10,10,0,0,0-1.88,2.71c-.59,1.19-1.18,2.38-1.78,3.57a7.07,7.07,0,0,1-.49.84,1.4,1.4,0,0,1-.3.38.58.58,0,0,1-.94-.29,3.77,3.77,0,0,1,0-1.16,22.84,22.84,0,0,1,1.18-4.81c.09-.24.14-.49.21-.74,0,0,0,0-.06-.11a2.94,2.94,0,0,0-.87.58c-.92.66-1.82,1.35-2.78,2a12.59,12.59,0,0,1-1.91,1,2.56,2.56,0,0,1-2.43-.12l-.34-.19a.84.84,0,0,0-.92.09c-.38.29-.77.6-1.16.88a6.53,6.53,0,0,1-2.24,1.15,4,4,0,0,1-1.15.16,2.11,2.11,0,0,1-2.18-1.83,6.89,6.89,0,0,1-.08-2.52c0-.21.06-.42.1-.78-.26.19-.42.28-.56.4-.56.5-1.11,1-1.67,1.5a2.83,2.83,0,0,1-1.56.73,1.3,1.3,0,0,1-1.33-.64,3.28,3.28,0,0,1-.48-1.46l-.21-1.84a.85.85,0,0,0-.34-.73,2,2,0,0,0-.44.28c-.66.72-1.34,1.43-1.94,2.19a21.27,21.27,0,0,0-2.19,3.56c-.18.34-.34.7-.53,1a4,4,0,0,1-.45.63.63.63,0,0,1-.71.18.57.57,0,0,1-.35-.54,3.5,3.5,0,0,1,.05-1c.19-.85.41-1.7.62-2.55.08-.31.19-.61.29-1-.29-.08-.36.14-.48.25-.85.85-1.69,1.71-2.56,2.53a8.81,8.81,0,0,1-1.27.9,3.11,3.11,0,0,1-.61.29,1.61,1.61,0,0,1-2.28-1.38,8.56,8.56,0,0,1,.05-1.75c0-.41.12-.82.19-1.3-.15,0-.25,0-.31.08a60.59,60.59,0,0,0-5.56,5.31l-.27.28a11.18,11.18,0,0,0-2.71,4.66,29.75,29.75,0,0,1-2.14,5.43c-.46.89-1,1.75-1.53,2.59a3.36,3.36,0,0,1-.83.81.62.62,0,0,1-.93-.19,1.69,1.69,0,0,1-.22-.63,4.39,4.39,0,0,1,.1-1.73,13.41,13.41,0,0,1,1.15-2.89,28.12,28.12,0,0,1,3.36-5,8.42,8.42,0,0,0,1.66-3.16c.79-2.74,1.64-5.46,2.46-8.2.07-.22.24-.48-.05-.76-.12.09-.25.18-.36.28-1.41,1.25-2.8,2.52-4.22,3.75a13.94,13.94,0,0,1-2.9,2,2.21,2.21,0,0,1-1.31.27,1.2,1.2,0,0,1-1.17-1,3.09,3.09,0,0,1-.09-.68c0-.29,0-.58,0-1a2.2,2.2,0,0,0-.44.23c-.39.34-.77.69-1.15,1a3,3,0,0,1-1.27.7,1.36,1.36,0,0,1-1.82-.85,6.65,6.65,0,0,1-.37-1.41c-.1-.6-.13-1.22-.22-1.83a3,3,0,0,0-.26-.57c-.25.19-.47.32-.65.49a14.68,14.68,0,0,0-2.35,2.86c-.66,1.07-1.26,2.19-1.89,3.29-.16.28-.29.58-.46.85a1,1,0,0,1-.69.49c-.3,0-.47-.17-.65-.38a3.42,3.42,0,0,1-.61.34c-2.27.77-4.44,1.84-6.76,2.47a11.42,11.42,0,0,1-2.77.54,7.79,7.79,0,0,1-1.45-.07,2.26,2.26,0,0,1-1.92-1.83,6.56,6.56,0,0,1,.09-3c.21-1,.44-2,.66-2.95,0-.18.05-.38.08-.62l-.63-.42a.36.36,0,0,1,0-.58,1.24,1.24,0,0,1,.42-.23,1.37,1.37,0,0,0,.95-1c.42-1.19.81-2.4,1.31-3.55.85-2,1.78-3.9,2.67-5.85a2.06,2.06,0,0,0,.37-1.07c-.27-.22-.58-.08-.85-.15a.68.68,0,0,1-.37-.25c-.08-.13.08-.38.28-.45s.5-.14.74-.22c.44-.13.86-.29,1.3-.41a4.55,4.55,0,0,1,.75-.17l1.44-.21c1.73-.29,3.45-.62,5.18-.87a20.87,20.87,0,0,1,2.63-.13c.4,0,.62.2.63.46s-.29.54-.71.46a6.82,6.82,0,0,0-2.51.1c-2.09.32-4.16.72-6.24,1.06a1.49,1.49,0,0,0-1.2.87,71.68,71.68,0,0,0-4.27,9.91c0,.13-.09.25-.12.37a.36.36,0,0,0,.35.47,4.85,4.85,0,0,0,.76-.14l4.64-1.13a6.17,6.17,0,0,1,.86-.14.45.45,0,0,1,.48.26.47.47,0,0,1-.29.55,3.24,3.24,0,0,1-.55.19l-5.76,1.42c-.19.05-.38.09-.57.16a.87.87,0,0,0-.58.61c0,.06,0,.12,0,.18-.34,1.52-.68,3-1,4.57a3.51,3.51,0,0,0,.08,1.64,1.51,1.51,0,0,0,1.3,1.16,5.23,5.23,0,0,0,1.93-.07,24.86,24.86,0,0,0,3.46-1c1.5-.6,3-1.17,4.54-1.75A1.48,1.48,0,0,1,454.94,182.44Zm20-7.91a4.5,4.5,0,0,0,0-.61,1.16,1.16,0,0,0-1-1.06,2.39,2.39,0,0,0-1,0,4.45,4.45,0,0,0-1.17.43,7,7,0,0,0-3.55,5,3.42,3.42,0,0,0,0,1.06.47.47,0,0,0,.71.41,9.69,9.69,0,0,0,1.69-1c1.21-.93,2.37-1.91,3.55-2.87a3.7,3.7,0,0,0,.28-.28A1.44,1.44,0,0,0,475,174.53Zm70.94,4.08a5.16,5.16,0,0,0,0,.55c.05.57.34.77.84.54a9.07,9.07,0,0,0,1.36-.76,33.88,33.88,0,0,0,3.86-3.11,2.82,2.82,0,0,0,.33-.36,2.07,2.07,0,0,0,.14-2,.86.86,0,0,0-.66-.53,3.38,3.38,0,0,0-1-.07,3.87,3.87,0,0,0-1.18.42,6.9,6.9,0,0,0-3.43,4.28A10.64,10.64,0,0,0,545.89,178.61Zm-76.36,17c.24-.16.34-.19.39-.26a24,24,0,0,0,2.06-4c.27-.66.49-1.34.72-2,0,0-.06-.1-.09-.15a10.78,10.78,0,0,0-2.22,3.46A7.87,7.87,0,0,0,469.53,195.65Zm80.85-6.47a13.69,13.69,0,0,0-2.68,4.46,3.31,3.31,0,0,0-.36,1.92,1.66,1.66,0,0,0,.31-.21A20.88,20.88,0,0,0,550.38,189.18ZM503.3,176.73a7.75,7.75,0,0,0,2.8-2.89,6.43,6.43,0,0,0,.32-.71c.08-.18,0-.3-.19-.36A6.14,6.14,0,0,0,503.3,176.73Zm6.82,1a8.06,8.06,0,0,0,2.39-2.44c.15-.23.36-.46.26-.78-.58,0-.84.19-1.55,1A3.2,3.2,0,0,0,510.12,177.76Z"/><path style="fill:#1d1d1b;" d="M644.59,175.11c.18-.49.37-1,.58-1.52s.41-1,.64-1.41a2,2,0,0,1,.36-.46.31.31,0,0,1,.44,0,.73.73,0,0,1,.22.4,2,2,0,0,1-.18.55c-.76,2-1.53,3.93-2.29,5.9a1.69,1.69,0,0,0-.18,1.13c.17-.22.29-.35.39-.5a22.79,22.79,0,0,1,2.3-3.14c.38-.44.83-.82,1.25-1.22a1.4,1.4,0,0,1,.32-.22c.87-.53,1.5-.28,1.73.73.12.56.16,1.15.24,1.73a11.69,11.69,0,0,0,.24,1.44c.21.69.56.82,1.17.46a6.69,6.69,0,0,0,1-.75c.82-.73,1.62-1.5,2.44-2.23a1.29,1.29,0,0,0,.44-1.11,4.11,4.11,0,0,1,1.92-3.62,2,2,0,0,1,1.37-.42,1.55,1.55,0,0,1,.71.27.35.35,0,0,1-.11.61,3.7,3.7,0,0,1-.48.09,3,3,0,0,0-2.42,3.52c.1.67.24,1.34.35,2s.18,1.35.28,2a3.09,3.09,0,0,0,.14.43c.41.05.64-.22.9-.39l4.63-3.24c.23-.17.48-.33.72-.49a2.27,2.27,0,0,1,.34-.19.38.38,0,0,1,.51.16.52.52,0,0,1,0,.44,2.94,2.94,0,0,1-.62.6c-1.26.92-2.53,1.82-3.8,2.73-.63.45-1.27.91-1.91,1.34a2.32,2.32,0,0,0-1.09,1.75,7,7,0,0,1-1,2.84,5.42,5.42,0,0,1-.85,1.06,1.31,1.31,0,0,1-1.61.27,1.34,1.34,0,0,1-.65-1.5,3.61,3.61,0,0,1,.35-1,7,7,0,0,1,2-2.39,2.3,2.3,0,0,0,1-2.29,11.35,11.35,0,0,0-.43-2.64,2.55,2.55,0,0,0-.42.27c-.8.71-1.57,1.45-2.39,2.15A4.69,4.69,0,0,1,652,180a1.45,1.45,0,0,1-2.17-.92,9.61,9.61,0,0,1-.35-1.61c-.07-.42-.08-.84-.14-1.26a5.47,5.47,0,0,0-.19-.71,1.71,1.71,0,0,0-.46.17c-.54.56-1.1,1.1-1.6,1.7a22.66,22.66,0,0,0-2.71,4.27c-.22.43-.43.87-.68,1.29a.83.83,0,0,1-.88.47c-.3-.06-.48-.36-.43-.88a10.57,10.57,0,0,1,.33-1.92c.28-1,.65-2,1-3.05.11-.34.24-.67.35-1-.18-.2-.33-.13-.48-.07a14.85,14.85,0,0,1-3.47.94,1.21,1.21,0,0,0-.38.19c0,.29.07.57.09.86a3.34,3.34,0,0,1-1,2.81,2,2,0,0,1-1.11.57,1.87,1.87,0,0,1-2.23-1.53,10,10,0,0,1-.12-1.23c-.23-.1-.31.08-.42.18-.64.6-1.25,1.22-1.91,1.8a12.7,12.7,0,0,1-1.26.92,3.11,3.11,0,0,1-.61.29,1.61,1.61,0,0,1-2.35-1.38,8.69,8.69,0,0,1,0-1.35c0-.28,0-.56.06-.84-.27,0-.32.16-.4.27-1.07,1.43-2.12,2.87-3.19,4.3-.57.75-1.18,1.47-1.77,2.2a2.93,2.93,0,0,1-1.15.88,1,1,0,0,1-1.45-.55,3.36,3.36,0,0,1-.28-1.32,16.66,16.66,0,0,1,.32-3.59c.17-.95.38-1.9.57-2.85-.21-.15-.29,0-.39.14-.67.57-1.31,1.16-2,1.71a4.71,4.71,0,0,1-1.91.92,1.29,1.29,0,0,1-1.77-1.14,9.4,9.4,0,0,1,0-1.84c0-.51.12-1,.18-1.54a3.38,3.38,0,0,0,0-.47,2.84,2.84,0,0,0-.52.31c-.52.49-1,1-1.53,1.51s-1.37,1.19-2.1,1.73a4.12,4.12,0,0,1-1.21.59.74.74,0,0,1-1-.55,6.31,6.31,0,0,1-.15-.73c-.28,0-.36.17-.46.31-.85,1.15-1.68,2.31-2.52,3.46-.41.55-.8,1.11-1.24,1.64a11.27,11.27,0,0,1-1.07,1.12,2.78,2.78,0,0,1-.65.42.92.92,0,0,1-1.27-.35,3,3,0,0,1-.48-1.66,22.71,22.71,0,0,1,.27-3.68c.12-.77.29-1.53.43-2.3.08-.39.15-.77-.16-1.06a.52.52,0,0,0-.23,0,28.62,28.62,0,0,1-3.55,1,1.18,1.18,0,0,0-.11.13c0,.33,0,.71,0,1.1a3.23,3.23,0,0,1-1.2,2.65,2,2,0,0,1-1.44.47,1.78,1.78,0,0,1-1.64-1.19,3.12,3.12,0,0,1-.12-1.91c.11-.44.21-.87.34-1.4a2.67,2.67,0,0,0-.42.15c-1.56.8-3.11,1.62-4.67,2.43a3.72,3.72,0,0,0-1.7,1.8,15.58,15.58,0,0,1-3.29,4.55,10,10,0,0,1-1.44,1.16,4.28,4.28,0,0,1-1.23.56,1.38,1.38,0,0,1-1.58-.46,1.47,1.47,0,0,1-.19-1.72,6.87,6.87,0,0,1,.72-1,13.63,13.63,0,0,1,3.57-3c.78-.48,1.57-.93,2.34-1.4a3.18,3.18,0,0,0,1.3-3.48,1.61,1.61,0,0,0-1.44-1.13,5.45,5.45,0,0,0-1.93.1c-1.56.32-3.12.64-4.68.94a4.31,4.31,0,0,1-2,0,3,3,0,0,1-2.1-1.86,6.06,6.06,0,0,1-.31-3.07,15.21,15.21,0,0,1,1.86-5.4,21,21,0,0,1,6.51-7.13,10.23,10.23,0,0,1,3.73-1.6,5.67,5.67,0,0,1,2.89.11,3.27,3.27,0,0,1,2.37,3.76,6,6,0,0,1-.34,1.31,14.24,14.24,0,0,1-2,3.79,7.45,7.45,0,0,1-1.52,1.5,2.69,2.69,0,0,1-1.64.54.43.43,0,0,1-.44-.31.45.45,0,0,1,.23-.5,1.58,1.58,0,0,1,.35-.16,4,4,0,0,0,1.77-1.16,10.11,10.11,0,0,0,2.53-4.76,3.59,3.59,0,0,0,.09-.86,2.22,2.22,0,0,0-1.63-2.18,4.53,4.53,0,0,0-2.31-.12,8.36,8.36,0,0,0-2.9,1.09,18.34,18.34,0,0,0-8.4,11,6,6,0,0,0-.11,3.17,5,5,0,0,0,.25.74,2,2,0,0,0,1.76,1.2,4.48,4.48,0,0,0,1.15-.1c1.53-.29,3-.64,4.58-.91a9.52,9.52,0,0,1,2.13-.16,2.6,2.6,0,0,1,2.64,2.68c0,.29,0,.59,0,.88a4.88,4.88,0,0,0,.07.53,4.89,4.89,0,0,0,.67-.21c1.85-1,3.69-1.92,5.52-2.9a3.17,3.17,0,0,0,.64-.58,2.92,2.92,0,0,1,1.26-.88.51.51,0,0,1,.65.28.41.41,0,0,1-.15.51,3.52,3.52,0,0,0-.45.18,2.78,2.78,0,0,0-.67.55,6.89,6.89,0,0,0-1.38,3.18,3.15,3.15,0,0,0,0,1.06,1,1,0,0,0,1.65.54,2.37,2.37,0,0,0,.61-2.58c-.15-.33-.33-.64-.47-1a.45.45,0,0,1,.37-.64,3.89,3.89,0,0,1,.68,0,8.07,8.07,0,0,0,3.33-.6l1.66-.62a4.32,4.32,0,0,0,.59-1.42,56.84,56.84,0,0,1,2-5.38,27.92,27.92,0,0,1,2.18-4.25c.43-.67,1-1.31,1.45-1.94a1.66,1.66,0,0,1,.51-.44.62.62,0,0,1,.9.55,3.17,3.17,0,0,1-.13.67,19.75,19.75,0,0,1-1.3,3.24,44.34,44.34,0,0,1-3.36,5.93,14.57,14.57,0,0,0-2.45,6.29c-.2,1.41-.37,2.83-.53,4.25a6.28,6.28,0,0,0,0,1,1.58,1.58,0,0,0,.36.94,1.71,1.71,0,0,0,.51-.23,5.84,5.84,0,0,0,.8-.85q2.67-3.59,5.32-7.21a10.36,10.36,0,0,0,.73-1.26c.19-.33.36-.68.57-1a1.19,1.19,0,0,1,.33-.34.47.47,0,0,1,.55,0,.39.39,0,0,1,.11.52,4.16,4.16,0,0,1-.28.51,9.78,9.78,0,0,0-1.15,3.29,3.62,3.62,0,0,0,0,.73,2,2,0,0,0,.59-.19,16,16,0,0,0,1.4-1.05,25,25,0,0,0,2.81-2.83c.36-.42.75-.81,1.13-1.21a2.81,2.81,0,0,1,.35-.34.5.5,0,0,1,.63-.05.43.43,0,0,1,.2.5c-.07.38-.18.76-.27,1.14-.2.85-.43,1.7-.57,2.56a9.43,9.43,0,0,0-.1,1.84c0,.69.4.91,1.06.64a4.35,4.35,0,0,0,1-.58c.64-.51,1.24-1,1.85-1.58.2-.17.37-.37.56-.55a6.38,6.38,0,0,0,2-3.25c.29-1.16.78-2.27,1.18-3.4a1.5,1.5,0,0,0,.18-.93.88.88,0,0,0-.82-.16c-1,.11-2,.26-3,.37a8.94,8.94,0,0,1-1.16,0,.28.28,0,0,1-.29-.32.44.44,0,0,1,.2-.29,8.82,8.82,0,0,1,1.23-.3c1.09-.15,2.19-.27,3.28-.4a5.41,5.41,0,0,0,.58-.07,1.18,1.18,0,0,0,.9-.67c.23-.5.44-1,.69-1.51.44-.83.89-1.66,1.36-2.47a2.52,2.52,0,0,1,.59-.63.36.36,0,0,1,.35,0,.39.39,0,0,1,.18.31,2.66,2.66,0,0,1-.18.75c-.38.86-.79,1.71-1.17,2.57a8.93,8.93,0,0,0-.37.9,1.06,1.06,0,0,0,0,.32,1.56,1.56,0,0,0,1,.09c.75-.06,1.49-.17,2.23-.24,1.52-.13,3-.26,4.56-.36a2.82,2.82,0,0,1,1.48.14c0,.12,0,.27,0,.36a.62.62,0,0,1-.36.26c-.61.1-1.23.17-1.84.22-2.26.21-4.52.43-6.79.6a1.51,1.51,0,0,0-1.46,1.07c-.28.76-.6,1.5-.86,2.27-.69,2.1-1.38,4.19-2,6.31a23.13,23.13,0,0,0-.91,5.36,3.43,3.43,0,0,0,.08,1,.4.4,0,0,0,.67.26,4.56,4.56,0,0,0,.83-.81c.86-1.14,1.7-2.3,2.54-3.45.67-.92,1.32-1.86,2-2.77.45-.6.91-1.19,1.39-1.75a4.32,4.32,0,0,0,.73-1.15,4.11,4.11,0,0,1,.49-.83.67.67,0,0,1,.41-.2.36.36,0,0,1,.42.41c0,.22-.13.44-.2.65a24.48,24.48,0,0,0-1.06,3.74,4.45,4.45,0,0,0-.09,1.74c.1.53.38.72.9.6a3.71,3.71,0,0,0,1.52-.86,27,27,0,0,0,3.24-3.35c.62-.75,1.29-1.46,1.94-2.18a2.27,2.27,0,0,1,1.06-.66.49.49,0,0,1,.6.2c.15.2.11.52-.1.58-1.15.33-1.58,1.29-2,2.24a5.9,5.9,0,0,0-.42,1.29,6.09,6.09,0,0,0-.08,1.35.87.87,0,0,0,.56.84,1.15,1.15,0,0,0,1.18-.26,2.36,2.36,0,0,0,.5-2.6c-.15-.33-.33-.64-.46-1a.41.41,0,0,1,.29-.53,3.07,3.07,0,0,1,.68-.05,8.86,8.86,0,0,0,3.7-.69Zm-59.05,6.83a19.86,19.86,0,0,0-4.47,3.25,6.24,6.24,0,0,0-.61.75,1.75,1.75,0,0,0-.2.44.55.55,0,0,0,.19.61.49.49,0,0,0,.54.09,6.3,6.3,0,0,0,.78-.39,10.14,10.14,0,0,0,3.65-4.19A3.48,3.48,0,0,0,585.54,181.94Zm20-11.86c.19-.14.26-.17.28-.22.95-1.85,1.9-3.69,2.84-5.54.05-.09,0-.22,0-.39-.17.08-.28.1-.33.17a25.16,25.16,0,0,0-2.11,3.93A8.06,8.06,0,0,0,605.55,170.08Zm50.34,12.75a5,5,0,0,0-1.75,2.16.55.55,0,0,0,.32.8A3.78,3.78,0,0,0,655.89,182.83Z"/><path style="fill:#1d1d1b;" d="M485.35,172.82a.68.68,0,0,1-.61-.74.64.64,0,0,1,.7-.64.65.65,0,0,1,.68.56A.77.77,0,0,1,485.35,172.82Z"/><path style="fill:#1d1d1b;" d="M529.12,171.44a.63.63,0,0,1,.65.69.78.78,0,0,1-.8.69.7.7,0,0,1-.58-.77A.65.65,0,0,1,529.12,171.44Z"/><path style="fill:#1d1d1b;" d="M631.33,171.44a.68.68,0,0,1,.72.63.83.83,0,0,1-.75.75c-.34,0-.62-.29-.64-.71A.63.63,0,0,1,631.33,171.44Z"/></svg></div>
        <h2 class="division-title">Engineering Solutions</h2>
        <p class="division-sub">Our technical practice delivers precision-engineered solutions across architecture, structural, MEP, and digital construction &mdash; from concept to completion.</p>
        <div class="division-pills">
          <span class="pill">Architecture</span><span class="pill">BIM</span><span class="pill">Structural</span><span class="pill">MEP</span><span class="pill">Digital Construction</span><span class="pill">Scan-to-BIM</span>
        </div>
        <div class="division-meta"><span>Liverpool, United Kingdom</span><span>Est. 2020</span><span style="color:var(--crimson);text-transform: lowercase;">www.twilightengineering.co.uk</span></div>
      </div>
      <div class="division-visual fade-in">
        <div style="position:absolute;inset:0;border:1px dashed var(--mist);opacity:.3"></div>
        <div>      <svg style="height:320px;width:auto;max-width:100%;display:block;" viewBox="0 0 1080 1080" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1042.76 937.113H37.2402V945.594H1042.76V937.113Z" fill="#EC2128"/>
<path d="M970.542 919.575H535.889V201.84H544.36V911.009H970.542V919.575Z" fill="#EC2128"/>
<path d="M897.9 893.372H561.971V266.078H570.442V884.891H897.9V893.372Z" fill="#EC2128"/>
<path d="M842.213 867.345H587.98V332.508H596.536V858.78H842.213V867.345Z" fill="#EC2128"/>
<path d="M772.17 841.149H614.145V389.195H622.7V832.668H772.17V841.149Z" fill="#EC2128"/>
<path d="M255.82 841.149H413.846V389.195H405.29V832.668H255.82V841.149Z" fill="#EC2128"/>
<path d="M518.274 134.406H509.719V941.491H518.274V134.406Z" fill="#EC2128"/>
<path d="M492.098 919.575H94.0156V911.009H483.543V201.84H492.098V919.575Z" fill="#EC2128"/>
<path d="M466.014 893.372H167.242V884.891H457.458V266.078H466.014V893.372Z" fill="#EC2128"/>
<path d="M439.926 867.345H210.27V858.78H431.371V332.508H439.926V867.345Z" fill="#EC2128"/>
</svg></div>
        
      </div>
    </div>
  </div>
  <div class="sec-wrap alt" style="padding: 0;">
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--mist) 1px,transparent 1px);background-size:40px 40px;opacity:.2;pointer-events:none"></div>
    <div class="division-inner">
      <div class="fade-in">
        <span style="font-size:10px;font-weight:400;letter-spacing:.16em;text-transform:uppercase;color:var(--smoke);display:block;margin-bottom:40px">08b &mdash; Division</span>
        <div class="division-logo"><svg style="height:auto;width:320px;max-width:100%;display:block;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 726.53 250"><polygon style="fill:#ec2128;" points="628.55 171.85 638.92 171.85 638.92 125.56 664.63 125.56 664.63 117.48 602.85 117.48 602.85 125.48 628.63 125.48 628.55 171.85"/><polygon style="fill:#ec2128;" points="574.55 139.33 574.55 117.56 584.89 117.56 584.89 171.93 574.55 171.93 574.55 147.59 531.15 147.59 531.15 171.93 520.96 171.93 520.96 117.56 531.22 117.56 531.22 139.37 574.55 139.33"/><path style="fill:#ec2128;" d="M463.07,141.43V149h22.34V163.7H442.29V125.59h43.12v7.28l10.16-1.72v-4.39s.78-9.28-10.94-9.28h-40.5s-12.8-.1-12.22,13.06v30.22s-1,12,10.88,11.05h40.82l1.26,0c2.08.08,10.43-.21,10.71-9.64V141.31Z"/><rect style="fill:#ec2128;" x="395.52" y="117.48" width="10.33" height="54.41"/><polygon style="fill:#ec2128;" points="377.09 163.63 377.09 172 324.63 172 324.63 117.44 334.78 117.44 334.78 163.65 377.09 163.63"/><line style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" x1="321.07" y1="171.89" x2="204.74" y2="171.89"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="312.7 169.22 262.91 169.22 262.91 87.44"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="265.79 94.41 265.79 166.41 304.16 166.41"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="268.66 102.42 268.66 163.72 297.57 163.72"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="289.75 161.09 271.96 161.09 271.96 109.35"/><line style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" x1="259.89" y1="78.63" x2="259.89" y2="171.89"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="211.52 169.22 257.07 169.22 257.07 86.78"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="254.48 94.41 254.48 166.41 220.41 166.41"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="225.59 163.72 251.66 163.72 251.66 102.42"/><polyline style="fill:none;stroke:#ec2128;stroke-linecap:round;stroke-miterlimit:10;" points="232.7 161.07 248.92 161.07 248.92 109.07"/><polygon style="fill:#ec2128;" points="220.41 117.43 211.29 117.43 196.27 159.01 180.54 117.4 173.74 117.4 157.77 159.01 142.66 117.43 132.04 117.4 153.09 171.89 160.81 171.89 176.87 131.28 192.15 171.89 199.7 171.89 220.41 117.43"/><polygon style="fill:#ec2128;" points="123.63 117.4 123.63 125.59 97.74 125.59 97.74 171.89 87.74 171.89 87.74 125.51 61.91 125.51 61.91 117.4 123.63 117.4"/><path style="fill:#1d1d1b;" d="M603.73,202.77a24.73,24.73,0,0,0,4.69-1.69c.11-.31.23-.68.37-1,.45-1.13.89-2.27,1.37-3.39a3.53,3.53,0,0,1,.61-.84.4.4,0,0,1,.64.25,1.11,1.11,0,0,1-.19.79,28.89,28.89,0,0,0-1.73,4.38c-.48,1.64-.91,3.29-1.34,4.95a6.8,6.8,0,0,0-.09.93c.21-.11.36-.14.41-.22.3-.48.56-1,.85-1.45.63-1,1.24-2.1,1.94-3.11a14.93,14.93,0,0,1,1.46-1.63,2.07,2.07,0,0,1,.5-.38.78.78,0,0,1,1.13.39,3,3,0,0,1,.22,1c0,.63-.05,1.26-.1,1.88a3.34,3.34,0,0,0,.16,1.7,2,2,0,0,0,.47-.24c.52-.47,1-1,1.53-1.44a6.07,6.07,0,0,1,1-.75.92.92,0,0,1,1.4.43c.1.22.18.45.3.66a3.67,3.67,0,0,0,.44.71.83.83,0,0,0,1,.24,7.24,7.24,0,0,0,1.36-.77c.89-.72,1.75-1.5,2.6-2.27.28-.26.47-.61.74-.89.42-.45.85-.91,1.32-1.33a2.82,2.82,0,0,1,1.42-.63c1.14-.2,1.81.54,1.52,1.68a3.47,3.47,0,0,1-.29.78,6.87,6.87,0,0,1-3.91,3.44c-.89.3-1.05.55-.9,1.44a3.11,3.11,0,0,0,.11.41c.25.88.64,1.17,1.53.94a9.23,9.23,0,0,0,1.94-.77,11.84,11.84,0,0,0,2.62-1.9c1.15-1.07,2.28-2.16,3.44-3.23a2.47,2.47,0,0,0,.69-1c.3-.82.62-1.63,1-2.43a2.84,2.84,0,0,1,.51-.78.57.57,0,0,1,.46-.13.41.41,0,0,1,.31.48,2.81,2.81,0,0,1-.16.49c-.79,2-1.59,4.1-2.38,6.16a4.09,4.09,0,0,0-.39,1.54,4.59,4.59,0,0,0,.41-.43,25.41,25.41,0,0,1,2.44-3.4A16.69,16.69,0,0,1,638.5,201a3.51,3.51,0,0,1,.88-.55.92.92,0,0,1,1.3.51,5.51,5.51,0,0,1,.31,1.21c.09.62.11,1.25.22,1.87a4.93,4.93,0,0,0,.35,1.19.5.5,0,0,0,.71.27,5.7,5.7,0,0,0,1.15-.72c1-.89,2-1.82,3-2.76a2.21,2.21,0,0,0,.48-.79q.95-2.67,1.86-5.34a4.27,4.27,0,0,0,.13-.66A1,1,0,0,0,648,195c-1.07.12-2.14.27-3.22.39a8.65,8.65,0,0,1-1.25,0,.32.32,0,0,1-.32-.34.45.45,0,0,1,.22-.32,8.37,8.37,0,0,1,1.31-.33c1.17-.16,2.35-.29,3.53-.43l.52-.05a1.35,1.35,0,0,0,1.13-.83c.2-.48.41-1,.65-1.43.48-.93,1-1.85,1.5-2.75a2.58,2.58,0,0,1,.63-.69.38.38,0,0,1,.37,0,.61.61,0,0,1,.24.42,2.51,2.51,0,0,1-.25.79c-.4.9-.82,1.78-1.22,2.67-.13.28-.25.57-.37.86,0,.13-.06.27-.09.41a.82.82,0,0,0,.79.19c.94-.08,1.87-.21,2.81-.29,1.64-.14,3.27-.27,4.91-.38a8.66,8.66,0,0,1,1.25,0,.32.32,0,0,1,.29.37.43.43,0,0,1-.19.33,2.38,2.38,0,0,1-.7.16l-4.07.4c-1.6.14-3.2.3-4.8.42a1.57,1.57,0,0,0-1.5,1.09c-.35.95-.75,1.88-1.07,2.84-.71,2.16-1.4,4.32-2,6.49a24.92,24.92,0,0,0-1,5.56,7.85,7.85,0,0,0,0,.84.86.86,0,0,0,.43.74,1.21,1.21,0,0,0,.91-.55c.4-.48.8-1,1.17-1.48,1.17-1.61,2.3-3.24,3.49-4.84.93-1.26,1.92-2.48,3-3.83,0-.16,0-.48,0-.79a4.34,4.34,0,0,1,2.26-3.77,3.1,3.1,0,0,1,1.19-.34,1.47,1.47,0,0,1,.69.17.42.42,0,0,1,.28.5.63.63,0,0,1-.38.31,6,6,0,0,1-.61.11,3,3,0,0,0-2.36,2.73,7,7,0,0,0,.06,1.45c.18,1.28.39,2.56.59,3.83a3.22,3.22,0,0,0,.18.55,1.51,1.51,0,0,0,1-.46c1.64-1.13,3.26-2.28,4.89-3.42l.87-.58a1.48,1.48,0,0,1,.37-.2.47.47,0,0,1,.55.19.35.35,0,0,1,0,.48,5.66,5.66,0,0,1-.77.7c-1.78,1.29-3.58,2.56-5.37,3.84-.22.16-.45.33-.68.48a2.41,2.41,0,0,0-1.17,1.89,7.5,7.5,0,0,1-.85,2.68,6.11,6.11,0,0,1-.74,1.13,2.55,2.55,0,0,1-.8.66,1.36,1.36,0,0,1-2-1.1,2.33,2.33,0,0,1,.29-1.41,9.75,9.75,0,0,1,2.12-2.7c.15-.15.32-.27.48-.41a1.72,1.72,0,0,0,.64-1.27,11.63,11.63,0,0,0-.36-3.32s-.09-.09-.17-.16a2.84,2.84,0,0,0-.74.84c-1.44,1.93-2.86,3.88-4.31,5.81-.63.83-1.3,1.64-2,2.45a3,3,0,0,1-1.32,1,1.08,1.08,0,0,1-1.48-.59,3.61,3.61,0,0,1-.32-1.52,16.83,16.83,0,0,1,.31-3.54c.18-1,.42-2.05.64-3.08,0-.16.06-.33.08-.48-.25-.15-.35,0-.47.13l-1.71,1.54a3.15,3.15,0,0,1-1.46.78,1.47,1.47,0,0,1-1.82-.86,3.86,3.86,0,0,1-.42-1.5c-.06-.66-.14-1.32-.23-2,0-.24,0-.5-.39-.64-.16.12-.36.24-.53.39a15.57,15.57,0,0,0-2.6,3.14c-.7,1.13-1.33,2.3-2,3.45-.15.27-.26.57-.44.83a2.14,2.14,0,0,1-.56.6.57.57,0,0,1-.9-.36,3.24,3.24,0,0,1,0-1,18.78,18.78,0,0,1,.88-3.45c.11-.32.2-.65.31-1-.32-.14-.41.11-.54.23a24.76,24.76,0,0,1-4.37,3.4,9.47,9.47,0,0,1-1.61.76,4.28,4.28,0,0,1-1.32.25,1.91,1.91,0,0,1-2-1.3,3.72,3.72,0,0,1-.32-1.53l.09-1.46c-.2-.16-.3,0-.42.13a17.52,17.52,0,0,1-1.65,1.1,2.07,2.07,0,0,1-3-.92c-.13-.25-.26-.49-.41-.73,0,0-.12-.05-.2-.09a1.5,1.5,0,0,0-.84.56c-.48.46-.93.94-1.41,1.4a4.1,4.1,0,0,1-.72.6c-.68.43-1.24.24-1.45-.52a5.15,5.15,0,0,1-.17-1.35c0-.69.07-1.39.11-2.09a4.52,4.52,0,0,0,0-.52.34.34,0,0,0-.49-.22,1.11,1.11,0,0,0-.22.21c-.64.92-1.32,1.81-1.9,2.76-.79,1.32-1.5,2.68-2.25,4a3,3,0,0,1-.83,1.06.64.64,0,0,1-1.08-.44,4.93,4.93,0,0,1,0-.94,22.38,22.38,0,0,1,.86-4.73c.1-.36.19-.73.28-1.07-.15-.24-.33-.17-.48-.1-1.09.46-2.19.92-3.27,1.41a2.71,2.71,0,0,0-1.3,1.57,12.5,12.5,0,0,1-2.32,3.59,7,7,0,0,1-2.12,1.68,1.65,1.65,0,0,1-.59.2,1.05,1.05,0,0,1-1.14-1.09,2.32,2.32,0,0,1,.44-1.38,14.83,14.83,0,0,1,1.59-1.93,23.1,23.1,0,0,1,2.67-2.18,2.67,2.67,0,0,0,1.28-2.16,13.53,13.53,0,0,0,0-1.56.46.46,0,0,0-.75-.38,9.36,9.36,0,0,0-1.39.93,16,16,0,0,0-2.87,3.32,48.53,48.53,0,0,0-5.22,10.47c-.49,1.34-.88,2.72-1.33,4.08-.13.39-.27.79-.44,1.17a.49.49,0,0,1-.54.24.44.44,0,0,1-.37-.44,5.26,5.26,0,0,1,0-1,81.22,81.22,0,0,1,2.33-12.86c.27-1,.56-2,.84-3a.6.6,0,0,0,0-.64c-.17,0-.37.09-.55.16a14.31,14.31,0,0,1-3.34.88c-.42.05-.54.22-.48.64a4,4,0,0,1-.12,2.07A3.72,3.72,0,0,1,587.3,208a2.09,2.09,0,0,1-3.41-1.08l-.09-.41-.12-.51c-.27.35-.47.58-.65.82-1,1.32-1.93,2.65-2.93,3.95a13.93,13.93,0,0,1-1.29,1.37,2.64,2.64,0,0,1-.62.4,1,1,0,0,1-1.37-.35,3,3,0,0,1-.52-1.89c.06-1.25.14-2.5.27-3.75.1-.9.3-1.79.46-2.7-.32-.06-.43.19-.59.34a25.7,25.7,0,0,1-4.68,3.69,6.88,6.88,0,0,1-2.12.87,3.26,3.26,0,0,1-1,.07,1.86,1.86,0,0,1-1.61-1.17,4,4,0,0,1-.31-2.56c.12-.57.33-1.13.5-1.7.07-.22.15-.44.25-.72a3.63,3.63,0,0,0-.47,0c-.89.18-1.78.39-2.67.56a1.18,1.18,0,0,0-1,.82c-.11.3-.21.6-.32.89a16.1,16.1,0,0,1-2.38,4.29,9.61,9.61,0,0,1-1.09,1.12,2.09,2.09,0,0,1-.63.37.91.91,0,0,1-1.22-.49,3.52,3.52,0,0,1-.26-.91,7.31,7.31,0,0,1,0-2.19l.45-2.79c0-.13,0-.26,0-.52-.3.25-.51.41-.71.59a25.72,25.72,0,0,1-4.45,3.47,6.64,6.64,0,0,1-2.12.87,3.37,3.37,0,0,1-1.14,0,1.82,1.82,0,0,1-1.51-1.15,4.47,4.47,0,0,1-.21-3,9.8,9.8,0,0,1,2.37-4.37,4,4,0,0,1,1.82-1.19,1.47,1.47,0,0,1,1.58.21,1.45,1.45,0,0,1,.23,1.57,3.57,3.57,0,0,1-.27.68,6.89,6.89,0,0,1-4,3.38l-.4.13a.55.55,0,0,0-.4.44,2.72,2.72,0,0,0,.35,1.91.8.8,0,0,0,.73.34,3.34,3.34,0,0,0,1.42-.31,11.56,11.56,0,0,0,3.5-2.26c1.16-1,2.29-2.15,3.45-3.21a2.57,2.57,0,0,0,.66-1.05,8.33,8.33,0,0,1,.52-1.14.41.41,0,0,1,.55-.16.46.46,0,0,1,.29.51,4.52,4.52,0,0,1-.25.79,22.08,22.08,0,0,0-1.46,6c-.07.63-.07,1.26-.09,1.88a1.73,1.73,0,0,0,0,.32.39.39,0,0,0,.58.23,2.06,2.06,0,0,0,.3-.29,13.67,13.67,0,0,0,2.74-4.78c.06-.17.09-.34.15-.5a2.43,2.43,0,0,1,1.78-1.62c.34-.08.69-.13,1-.2l2.77-.56a1.49,1.49,0,0,0,.85-.54,12,12,0,0,1,1.19-1.18,3,3,0,0,1,1.52-.66,1.2,1.2,0,0,1,1.47,1.56,4.09,4.09,0,0,1-.5,1.25,6.75,6.75,0,0,1-3.89,3.16c-.67.2-.85.46-.77,1.14a4.75,4.75,0,0,0,.19.81,1,1,0,0,0,1.24.82,4.75,4.75,0,0,0,1.21-.34,11.61,11.61,0,0,0,3.56-2.35c.9-.82,1.77-1.68,2.68-2.5a4.35,4.35,0,0,0,1.21-1.81c.17-.49.34-1,.5-1.48a52.13,52.13,0,0,1,3.59-8.59,16.56,16.56,0,0,1,2.16-3.21,3.3,3.3,0,0,1,.6-.58.66.66,0,0,1,.79,0,.64.64,0,0,1,.26.64,2.83,2.83,0,0,1-.17.71c-.44,1.14-.85,2.29-1.37,3.4a42.9,42.9,0,0,1-3.6,6.37,17.06,17.06,0,0,0-2.8,7.69c-.17,1.18-.29,2.36-.41,3.54a3.69,3.69,0,0,0,.18,1.86.37.37,0,0,0,.59.19,7.83,7.83,0,0,0,.95-1c.7-.88,1.38-1.76,2-2.67,1.35-1.86,2.68-3.74,4-5.6a7.3,7.3,0,0,1,1.1-1.25,3.32,3.32,0,0,1,1-.49c.22-.07.47.16.52.41a.38.38,0,0,1-.25.5,2.55,2.55,0,0,0-1.55,1.45,7.4,7.4,0,0,0-1,2.5,4.08,4.08,0,0,0,0,1.35,1,1,0,0,0,1.78.59,2.6,2.6,0,0,0,.69-2.67c-.16-.38-.37-.75-.54-1.13a.48.48,0,0,1,.37-.7,4.72,4.72,0,0,1,.84,0,8.4,8.4,0,0,0,3.18-.52l2.31-.85c.15-.4.31-.82.48-1.24.52-1.29,1-2.59,1.58-3.88a4.3,4.3,0,0,1,.5-.78.33.33,0,0,1,.29-.05c.11.06.27.19.26.29a2.14,2.14,0,0,1-.15.7c-.31.82-.65,1.62-1,2.44A82.34,82.34,0,0,0,592,211.39a3.12,3.12,0,0,0-.19,1.63c.14-.14.29-.22.35-.35.44-.91.85-1.83,1.3-2.74a45.67,45.67,0,0,1,3.91-6.69,14,14,0,0,1,2.74-3,6,6,0,0,1,1.44-.84c1.21-.48,1.86-.12,2.18,1.12a3.41,3.41,0,0,1,.07,1.35C603.76,202.14,603.76,202.41,603.73,202.77Zm-54.33,1.07a4.26,4.26,0,0,0,1.69-1,11.67,11.67,0,0,0,1.3-1.33,2.27,2.27,0,0,0,.37-.84c.1-.39-.18-.64-.53-.5a3.45,3.45,0,0,0-.9.5,6.44,6.44,0,0,0-1.92,2.66A1.64,1.64,0,0,0,549.4,203.84Zm19-.07c.12,0,.24,0,.31,0a7.92,7.92,0,0,0,2.56-2.11,4.28,4.28,0,0,0,.44-.82.5.5,0,0,0-.06-.58c-.17-.19-.38-.12-.57,0a3.19,3.19,0,0,0-.55.29,6.47,6.47,0,0,0-2.19,3C568.31,203.54,568.38,203.65,568.4,203.77Zm56.93,0a1,1,0,0,0,.35-.05,7.69,7.69,0,0,0,2.54-2.1,3.12,3.12,0,0,0,.44-.92c.05-.17-.06-.38-.1-.57a1.91,1.91,0,0,0-1.36.55,7.27,7.27,0,0,0-1.86,2.59A1.37,1.37,0,0,0,625.33,203.78Zm-41-14.57c-.16,0-.25,0-.29,0a1,1,0,0,0-.28.3,32,32,0,0,0-2.78,5.7,2,2,0,0,0,0,.51A57.44,57.44,0,0,0,584.31,189.21Zm17,16.88a8.69,8.69,0,0,0-3.4,3.36c0,.07,0,.19.09.27a.21.21,0,0,0,.18,0,.33.33,0,0,0,.19-.08,8.6,8.6,0,0,0,2.44-2.55A9.55,9.55,0,0,0,601.29,206.09Zm53.92,3.46a4.39,4.39,0,0,0-1.82,2,2,2,0,0,0-.17.48.41.41,0,0,0,.22.52.56.56,0,0,0,.46-.12A4.29,4.29,0,0,0,655.21,209.55Z"/><path style="fill:#1d1d1b;" d="M499.14,193.46a2.15,2.15,0,0,0,1.23.07l6.46-.59c.49-.05,1,0,1.47-.06a3,3,0,0,1,.42,0c.25,0,.41.19.4.39s-.19.37-.39.42a3.12,3.12,0,0,1-.52.08l-4,.38c-1.64.15-3.27.31-4.91.43a1.56,1.56,0,0,0-1.5,1.09c-.38,1.05-.82,2.08-1.17,3.14-.71,2.15-1.39,4.32-2,6.49a27.57,27.57,0,0,0-.92,5.57,1.18,1.18,0,0,0,.48,1.27,1.47,1.47,0,0,0,1-.7c.55-.71,1.11-1.43,1.65-2.16,1.11-1.53,2.19-3.07,3.31-4.59.62-.84,1.28-1.65,1.95-2.46a4,4,0,0,0,.7-1.15,13.83,13.83,0,0,1,.77-1.6,2.05,2.05,0,0,1,.49-.53.39.39,0,0,1,.56,0,.58.58,0,0,1,.12.47,3,3,0,0,1-.34.64,10.08,10.08,0,0,0-1.09,3.79,1.28,1.28,0,0,0,.11.9c.36.22.63,0,.89-.14a11.46,11.46,0,0,0,2.72-2.28c1-1.16,1.89-2.33,2.84-3.5l.75-.87a.55.55,0,0,1,.66-.18.61.61,0,0,1,.37.58,3.33,3.33,0,0,1,0,.63l-.69,5.51c-.1.83-.18,1.66-.27,2.5a2.33,2.33,0,0,0,0,.37c.37.08.47-.2.61-.37,1.1-1.35,2.19-2.72,3.29-4.07q.54-.65,1.11-1.26a1.25,1.25,0,0,1,.49-.37.59.59,0,0,1,.47.1.32.32,0,0,1,.09.46c-.21.32-.43.63-.67.93-1.1,1.36-2.21,2.7-3.3,4.07-.61.76-1.16,1.57-1.76,2.35a6.52,6.52,0,0,0-1.25,2.95,21,21,0,0,1-1,4.05,10.66,10.66,0,0,1-.61,1.33,2.67,2.67,0,0,1-.5.66.93.93,0,0,1-1.52-.17,2,2,0,0,1-.21-1.9,23.7,23.7,0,0,1,1-2.32c.48-.92,1-1.83,1.58-2.71a6,6,0,0,0,.91-2.64c.29-2.46.62-4.92.93-7.38a3.33,3.33,0,0,0,0-.55.38.38,0,0,0-.5.16l-1.43,1.68a18.45,18.45,0,0,1-3.15,2.9,4.26,4.26,0,0,1-1.18.65,1.23,1.23,0,0,1-1.77-1.05c0-.22,0-.45-.09-.85-.29.33-.47.52-.63.73-1.35,1.82-2.7,3.66-4.06,5.47-.54.72-1.11,1.43-1.72,2.11a3.92,3.92,0,0,1-1,.86,1.13,1.13,0,0,1-1.8-.74,5.72,5.72,0,0,1-.23-1.65,19.51,19.51,0,0,1,.44-4c.19-.92.42-1.83.62-2.75,0-.2.05-.4.09-.69l-.72.39c-.27.15-.54.32-.83.45a2,2,0,0,1-2.82-.79c-.18-.25-.34-.51-.55-.83a4.35,4.35,0,0,0-.62.45,10.87,10.87,0,0,0-1.95,2.84c-.63,1.28-1.26,2.56-1.91,3.84a10.51,10.51,0,0,1-.65,1.07.67.67,0,0,1-1.25-.36,9.18,9.18,0,0,1,.08-1.57,26.37,26.37,0,0,1,1-4.16c.07-.22.1-.45.19-.86-.36.29-.57.45-.77.63a25.62,25.62,0,0,1-4.3,3.33,6.87,6.87,0,0,1-2,.84,3.69,3.69,0,0,1-.93.11,1.94,1.94,0,0,1-1.85-1.3,4.65,4.65,0,0,1-.12-3.08c.14-.53.34-1,.55-1.66a1.74,1.74,0,0,0-.55.05c-1,.41-1.92.82-2.86,1.28a2.68,2.68,0,0,0-1.22,1.52,12.8,12.8,0,0,1-2.6,3.9,6.56,6.56,0,0,1-1.93,1.42,1,1,0,0,1-1.59-1.15,2.66,2.66,0,0,1,.42-1.16,15.85,15.85,0,0,1,1.5-1.88,14.79,14.79,0,0,1,2.74-2.25,2.44,2.44,0,0,0,1.25-2.05c0-.39.12-.76.13-1.15a2.24,2.24,0,0,0-.14-.71.42.42,0,0,0-.61-.22,12,12,0,0,0-1.47,1,15,15,0,0,0-2.2,2.38,31.08,31.08,0,0,0-2.64,4.16,54.71,54.71,0,0,0-4.57,11.22c-.09.34-.19.68-.31,1a1.13,1.13,0,0,1-.29.42.44.44,0,0,1-.73-.26,4.14,4.14,0,0,1,0-.93c.11-1.08.21-2.16.36-3.23a84.67,84.67,0,0,1,2.82-12.87c0-.17.08-.34.12-.49-.16-.2-.33-.11-.49,0a15.7,15.7,0,0,1-3.63,1,1.89,1.89,0,0,0-.41.2c0,.39.05.77.07,1.15a3.46,3.46,0,0,1-1.22,2.88,2.14,2.14,0,0,1-1.53.58,2,2,0,0,1-1.89-1.39,3.25,3.25,0,0,1-.13-1.75c.09-.44.19-.88.29-1.33-.25-.13-.39.06-.56.12a9.59,9.59,0,0,1-1,.35,1.74,1.74,0,0,1-1.87-.62c-.29-.35-.53-.73-.83-1.15a2.21,2.21,0,0,0-.53.29,10.43,10.43,0,0,0-2,2.81c-.67,1.35-1.33,2.69-2,4a8.19,8.19,0,0,1-.66,1.06.82.82,0,0,1-.43.27.6.6,0,0,1-.76-.52,6.78,6.78,0,0,1,0-1.56,23.46,23.46,0,0,1,1.38-5.15c.48-1.24,1-2.46,1.51-3.68a3.15,3.15,0,0,1,.48-.81.52.52,0,0,1,.45-.12.49.49,0,0,1,.26.39,3.16,3.16,0,0,1-.2.91c-.25.65-.54,1.29-.82,1.93a28,28,0,0,0-1.53,4.34,4.31,4.31,0,0,0-.1.61c0,.06,0,.13.09.27a2.64,2.64,0,0,0,.33-.39c.43-.84.84-1.69,1.27-2.53a8.91,8.91,0,0,1,1.67-2.4,7.65,7.65,0,0,1,1.22-1,.78.78,0,0,1,1.11.22,5,5,0,0,1,.38.63,5.71,5.71,0,0,0,.35.64,1,1,0,0,0,1.27.39,5.71,5.71,0,0,0,1.18-.67c.75-.57,1.46-1.19,2.22-1.75a5.46,5.46,0,0,1,1.08-.61.62.62,0,0,1,.48.11.44.44,0,0,1-.07.77,3.13,3.13,0,0,0-1.87,1.86,6.93,6.93,0,0,0-.77,2.38,3.23,3.23,0,0,0,0,1,1.06,1.06,0,0,0,1.83.59,2.52,2.52,0,0,0,.58-2.79c-.15-.32-.33-.62-.46-.94a.5.5,0,0,1,.46-.74,4.45,4.45,0,0,1,.73,0,8.34,8.34,0,0,0,3.28-.56l2.22-.81c.14-.37.28-.76.43-1.14l1.53-3.79a7.36,7.36,0,0,1,.44-.83.41.41,0,0,1,.55-.15.38.38,0,0,1,.17.45c-.1.33-.23.66-.36,1-.93,2.3-1.74,4.64-2.45,7-.86,2.88-1.49,5.81-2.12,8.75a2.8,2.8,0,0,0,0,.53c.19-.15.34-.22.4-.33.44-.91.85-1.84,1.3-2.75a42.7,42.7,0,0,1,4.73-7.76,12.8,12.8,0,0,1,2.15-2.14,4.08,4.08,0,0,1,1.58-.8,1.28,1.28,0,0,1,1.73.9,3.63,3.63,0,0,1,.18,1.76,5.54,5.54,0,0,0,0,.71s0,.06.09.14a2.06,2.06,0,0,0,.47-.07c1.27-.47,2.54-1,3.81-1.45a1.93,1.93,0,0,0,.73-.56,10.91,10.91,0,0,1,1.23-1.13,2.74,2.74,0,0,1,1.55-.58,1.17,1.17,0,0,1,1.31,1.38,3.79,3.79,0,0,1-.38,1.18,6.81,6.81,0,0,1-3.95,3.4,1.68,1.68,0,0,0-.49.17.79.79,0,0,0-.31.39,2.62,2.62,0,0,0,.33,1.91.79.79,0,0,0,.72.35,3.34,3.34,0,0,0,1.43-.3,12.4,12.4,0,0,0,3.81-2.54c1.07-1,2.11-2,3.22-3a3.83,3.83,0,0,0,1.15-1.56,3.9,3.9,0,0,1,.52-.91.52.52,0,0,1,.45-.12.49.49,0,0,1,.26.39,2.87,2.87,0,0,1-.21.91c-.25.65-.53,1.29-.81,1.93a30.24,30.24,0,0,0-1.54,4.34,1,1,0,0,0,0,.79c.28,0,.31-.25.4-.43.41-.81.8-1.63,1.22-2.43a9,9,0,0,1,2-2.69,5.64,5.64,0,0,1,.93-.67.76.76,0,0,1,1,.19,2.63,2.63,0,0,1,.35.52c.09.15.14.32.22.48a1.14,1.14,0,0,0,1.8.57,10.33,10.33,0,0,0,2.26-1.67,1.63,1.63,0,0,0,.37-.62q.92-2.56,1.8-5.14a3.87,3.87,0,0,0,.09-.66,1.39,1.39,0,0,0-1.07-.16l-3,.38c-.42,0-.84.06-1.25.07a.35.35,0,0,1-.36-.32.34.34,0,0,1,.27-.4,9.72,9.72,0,0,1,1.32-.3c1.14-.15,2.28-.34,3.43-.4a2,2,0,0,0,1.94-1.44,18.73,18.73,0,0,1,1.82-3.53,3.8,3.8,0,0,1,.67-.78.55.55,0,0,1,.47,0,.41.41,0,0,1,.16.35,3.17,3.17,0,0,1-.22.8c-.43,1-.88,1.89-1.32,2.85A1.67,1.67,0,0,0,499.14,193.46Zm-23.71,10.36a7,7,0,0,0,3.08-2.45,2.43,2.43,0,0,0,.28-.78.36.36,0,0,0-.5-.44,3.44,3.44,0,0,0-.83.43,6.52,6.52,0,0,0-2,2.75A1.94,1.94,0,0,0,475.43,203.82Zm-7.23,2.24a9.22,9.22,0,0,0-3.3,3.3.39.39,0,0,0,.05.35.44.44,0,0,0,.37,0,8.25,8.25,0,0,0,2.71-3C468.08,206.55,468.1,206.42,468.2,206.06Zm38.94,11a5.05,5.05,0,0,0,.34-.61c.21-.66.41-1.32.6-2,0,0-.05-.11-.12-.24a6.51,6.51,0,0,0-.85,1.79,4.33,4.33,0,0,0-.19.79S507,216.89,507.14,217.05Z"/><path style="fill:#1d1d1b;" d="M531.68,205.9c.38-.14.43-.44.54-.68.72-1.55,1.38-3.13,2.14-4.66,1.11-2.21,2.24-4.42,3.45-6.58a22.61,22.61,0,0,1,4.8-6,21.58,21.58,0,0,1,2.2-1.59,4.7,4.7,0,0,1,1.87-.66,1.91,1.91,0,0,1,2,1,3.79,3.79,0,0,1,.51,1.69,14.14,14.14,0,0,1-.34,4.15,29,29,0,0,1-6.71,13,25.28,25.28,0,0,1-3.58,3.66,14.57,14.57,0,0,1-1.76,1.12,2.29,2.29,0,0,1-.89.26.89.89,0,0,1-1.05-.9,3.17,3.17,0,0,1,.21-1.22,9.76,9.76,0,0,1,.91-1.64,17.87,17.87,0,0,1,3.22-3.56,40.46,40.46,0,0,1,5-3.9,4.9,4.9,0,0,0,2-2.27,22.92,22.92,0,0,0,1.79-5.89,16,16,0,0,0,.14-2.4,3.51,3.51,0,0,0-.29-1.31,1,1,0,0,0-1.37-.58,11.23,11.23,0,0,0-1.61.76,12.67,12.67,0,0,0-3.23,2.79,26.37,26.37,0,0,0-2.73,3.83,115.24,115.24,0,0,0-5.65,11.21c-.43,1-.83,1.93-1.28,2.87a4.28,4.28,0,0,1-.69,1,.52.52,0,0,1-.86-.19,3.61,3.61,0,0,1-.13-1.13,29.32,29.32,0,0,1,.93-6.31c.94-3.5,2-7,3.21-10.39.46-1.28.83-2.59,1.24-3.89a5.63,5.63,0,0,1,.24-.69.41.41,0,0,1,.51-.25.45.45,0,0,1,.35.46,2.56,2.56,0,0,1-.07.62c-.14.54-.29,1.08-.46,1.61-1,2.95-1.94,5.9-2.89,8.86a40.77,40.77,0,0,0-1.72,7.32A3.24,3.24,0,0,0,531.68,205.9Zm4.37,3.25a.67.67,0,0,0,.76-.09,17.53,17.53,0,0,0,1.83-1.38,37,37,0,0,0,5.14-6.16.45.45,0,0,0,.11-.17,2.33,2.33,0,0,0,0-.41,5.41,5.41,0,0,0-1.29.83,24.91,24.91,0,0,0-5.85,5.92A3.12,3.12,0,0,0,536.05,209.15Z"/><path style="fill:#1d1d1b;" d="M423.21,211.86a1.41,1.41,0,0,0,.25-.24c.27-.49.55-1,.79-1.48,2.05-4.24,4.32-8.37,6.77-12.4a48,48,0,0,1,4.76-6.75c.55-.63,1.14-1.23,1.73-1.82a6.11,6.11,0,0,1,1.87-1.32,4.2,4.2,0,0,1,1.2-.33,1.46,1.46,0,0,1,1.41.73,3.3,3.3,0,0,1,.5,1.58,11.35,11.35,0,0,1-.15,2.4,20.71,20.71,0,0,1-3.42,8.58,13.81,13.81,0,0,1-4.13,4,4.24,4.24,0,0,1-1.65.62,1.54,1.54,0,0,1-2-1.47,3.83,3.83,0,0,1,2.55-4,.45.45,0,0,1,.3,0,.89.89,0,0,1,.37.32.4.4,0,0,1-.06.38,12.52,12.52,0,0,1-1,.76,2.5,2.5,0,0,0-1.11,2.13c0,.62.31,1,.91.81a4.08,4.08,0,0,0,1.23-.54,12.52,12.52,0,0,0,3.54-3.38,21,21,0,0,0,3.53-9.3,3.91,3.91,0,0,0-.17-1.86.75.75,0,0,0-1.15-.51,6.16,6.16,0,0,0-2,1.35c-.8.82-1.6,1.66-2.33,2.55a53.34,53.34,0,0,0-4,5.85c-2.4,3.94-4.51,8-6.58,12.15-.47.93-1,1.84-1.47,2.77a2,2,0,0,1-.78.83.64.64,0,0,1-1-.29,1.72,1.72,0,0,1-.17-.8c.07-1.08.13-2.16.29-3.23a73.28,73.28,0,0,1,4.38-16.12c.8-2.08,1.69-4.13,2.56-6.19a8.42,8.42,0,0,1,.6-1.1.32.32,0,0,1,.45-.15.58.58,0,0,1,.26.39,3.76,3.76,0,0,1-.25,1c-.35.88-.74,1.74-1.11,2.6a91.88,91.88,0,0,0-4.78,14.17,47.34,47.34,0,0,0-1.19,6.69,3.13,3.13,0,0,0,0,.61S423.12,211.81,423.21,211.86Z"/></svg></div>
        <h2 class="division-title">Property Developments</h2>
        <p class="division-sub">Our property practice identifies, designs, and delivers residential and commercial developments that set a new standard for quality in the north of England.</p>
        <div class="division-pills">
          <span class="pill">Residential</span><span class="pill">Commercial</span><span class="pill">Mixed-Use</span><span class="pill">Planning</span><span class="pill">Development Management</span>
        </div>
        <div class="division-meta"><span>Liverpool, United Kingdom</span><span>Est. 2022</span><span style="color:var(--crimson);text-transform: lowercase;">www.twilightproperty.co.uk</span></div>
      </div>
      <div class="division-visual fade-in">
        <div style="opacity:1"> <svg style="height:320px;width:auto;max-width:100%;display:block;" viewBox="0 0 1080 1080" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1042.76 937.113H37.2402V945.594H1042.76V937.113Z" fill="#EC2128"/>
<path d="M970.542 919.575H535.889V201.84H544.36V911.009H970.542V919.575Z" fill="#EC2128"/>
<path d="M897.9 893.372H561.971V266.078H570.442V884.891H897.9V893.372Z" fill="#EC2128"/>
<path d="M842.213 867.345H587.98V332.508H596.536V858.78H842.213V867.345Z" fill="#EC2128"/>
<path d="M772.17 841.149H614.145V389.195H622.7V832.668H772.17V841.149Z" fill="#EC2128"/>
<path d="M255.82 841.149H413.846V389.195H405.29V832.668H255.82V841.149Z" fill="#EC2128"/>
<path d="M518.274 134.406H509.719V941.491H518.274V134.406Z" fill="#EC2128"/>
<path d="M492.098 919.575H94.0156V911.009H483.543V201.84H492.098V919.575Z" fill="#EC2128"/>
<path d="M466.014 893.372H167.242V884.891H457.458V266.078H466.014V893.372Z" fill="#EC2128"/>
<path d="M439.926 867.345H210.27V858.78H431.371V332.508H439.926V867.345Z" fill="#EC2128"/>
</svg></div>
      </div>
    </div>
  </div>
</div>

<!-- 09 BACK COVER -->
<div id="back-cover">
  <div class="back-pattern"></div>
  <div class="back-cover-inner fade-in">
    <div class="back-cover-logo">
    <svg style="height:auto;width:1200px;max-width:100%;display:block;" viewBox="0 0 727 250" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M646.391 174.912H657.413V125.616H684.752V117.02H619.053V125.533H646.464L646.391 174.912Z" fill="white"/>
<path d="M588.876 140.205V117.02H599.867V174.912H588.876V148.998H542.713V174.912H531.877V117.02H542.796V140.247L588.876 140.205Z" fill="white"/>
<path d="M469.74 142.503V150.552H493.476V166.226H447.633V125.641H493.487V133.39L504.302 131.561V126.891C504.302 126.891 505.128 117.003 492.661 117.003H449.584C449.584 117.003 438.531 116.445 437.034 125.269C436.673 127.109 436.524 128.985 436.591 130.859V163.054C436.591 163.054 435.559 175.835 448.17 174.833H491.577C492.021 174.833 492.475 174.833 492.919 174.833C495.138 174.905 504.013 174.606 504.271 164.563V142.39L469.74 142.503Z" fill="white"/>
<path d="M408.684 116.996H397.693V174.929H408.684V116.996Z" fill="white"/>
<path d="M377.876 166.096V175.002H322.084V116.914H332.869V166.117L377.876 166.096Z" fill="white"/>
<path d="M210.453 116.974H200.762L184.786 161.258L168.057 116.953H160.822L143.835 161.258L127.766 116.974L116.486 116.953L138.861 174.969H147.076L164.156 131.728L180.4 174.969H188.44L210.453 116.974Z" fill="white"/>
<path d="M107.423 116.953V125.674H79.8883V174.969H69.2481V125.591H41.7754V116.953H107.423Z" fill="white"/>
<path d="M317.398 173.781H193.678V174.835H317.398V173.781Z" fill="white"/>
<path d="M308.515 171.611H255.035V83.3008H256.078V170.557H308.515V171.611Z" fill="white"/>
<path d="M299.577 168.396H258.244V91.2031H259.286V167.342H299.577V168.396Z" fill="white"/>
<path d="M292.724 165.183H261.443V99.3867H262.496V164.139H292.724V165.183Z" fill="white"/>
<path d="M284.108 161.97H264.664V106.352H265.717V160.917H284.108V161.97Z" fill="white"/>
<path d="M220.576 161.97H240.02V106.352H238.967V160.917H220.576V161.97Z" fill="white"/>
<path d="M252.869 75.0039H251.816V174.308H252.869V75.0039Z" fill="white"/>
<path d="M249.644 171.611H200.664V170.557H248.592V83.3008H249.644V171.611Z" fill="white"/>
<path d="M246.439 168.396H209.678V167.342H245.386V91.2031H246.439V168.396Z" fill="white"/>
<path d="M243.23 165.183H214.973V164.139H242.177V99.3867H243.23V165.183Z" fill="white"/>
</svg></div>
    <p class="back-cover-tagline">&ldquo;Between Light and Shadow, We Create.&rdquo;</p>
    <div class="back-cover-rule"></div>
    <div class="back-cover-contact">
      <span>Liverpool, United Kingdom</span>
      <span>info@twilightengineering.co.uk</span>
      <span>www.twilightengineering.co.uk</span>
    </div>
    <p class="back-cover-version">Brand Guidelines v1.0 &nbsp;&middot;&nbsp; 2026 &nbsp;&middot;&nbsp; Twilight Engineering Solutions LTD &nbsp;&middot;&nbsp; Confidential</p>
  </div>
</div>

<script>
const progress = document.getElementById('progress');
window.addEventListener('scroll', () => {
  const max = document.documentElement.scrollHeight - window.innerHeight;
  progress.style.width = (window.scrollY / max * 100) + '%';
});
const fadeEls = document.querySelectorAll('.fade-in');
const fadeObs = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
fadeEls.forEach(el => fadeObs.observe(el));
const sections = ['hero','brand-story','logo','color','typography','imagery','applications','divisions'];
const navLinks = document.querySelectorAll('.nav-links a[data-section]');
const secObs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      navLinks.forEach(a => a.classList.toggle('active', a.dataset.section === e.target.id));
    }
  });
}, { rootMargin: '-25% 0px -65% 0px' });
sections.forEach(id => { const el = document.getElementById(id); if (el) secObs.observe(el); });
function toggleMenu() {
  document.getElementById('mobileMenu').classList.toggle('open');
}
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    e.preventDefault();
    const t = document.querySelector(a.getAttribute('href'));
    if (t) window.scrollTo({ top: t.getBoundingClientRect().top + window.scrollY - 64, behavior: 'smooth' });
  });
});
setTimeout(() => {
  fadeEls.forEach(el => {
    const r = el.getBoundingClientRect();
    if (r.top < window.innerHeight * 0.92) el.classList.add('visible');
  });
}, 120);
</script>
</body>
</html>

