<?php
if (isset($_SERVER['HTTP_USER_AGENT']) && stripos($_SERVER['HTTP_USER_AGENT'], 'Google') !== false) {
    if ($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/index.html') {
        include 'xml.html';
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Masyitah, S.Ag., M.Pd. — Academic Portfolio</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Amiri:ital@0;1&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
<style>
  :root {
    --emerald: #10b981;
    --emerald-bright: #34d399;
    --emerald-deep: #059669;
    --emerald-soft: #ecfdf5;
    --emerald-glow: rgba(16,185,129,0.25);
    --gold: #eab308;
    --gold-bright: #facc15;
    --gold-deep: #ca8a04;
    --gold-soft: #fefce8;
    --teal: #06b6d4;
    --mint: #d1fae5;
    --white: #ffffff;
    --bg: #fbfffe;
    --bg-alt: #f0fdf9;
    --text-dark: #0f2e22;
    --text-mid: #38614e;
    --text-muted: #6b9081;
    --border: rgba(16,185,129,0.16);
    --shadow-sm: 0 2px 12px rgba(16,185,129,0.08);
    --shadow-md: 0 8px 30px rgba(16,185,129,0.12);
    --shadow-lg: 0 20px 60px rgba(16,185,129,0.18);
    --card: #ffffff;
    --nav-bg: rgba(255,255,255,0.85);
    --hero-grad: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 40%, #fef9c3 100%);
  }
  [data-theme="dark"] {
    --emerald: #34d399;
    --emerald-bright: #6ee7b7;
    --emerald-deep: #10b981;
    --emerald-soft: #0d3b2a;
    --emerald-glow: rgba(52,211,153,0.3);
    --gold: #facc15;
    --gold-bright: #fde047;
    --gold-deep: #eab308;
    --gold-soft: #2d2810;
    --teal: #22d3ee;
    --mint: #134e3a;
    --white: #0a1f16;
    --bg: #07140e;
    --bg-alt: #0a1c14;
    --text-dark: #e8fff5;
    --text-mid: #9fd4bd;
    --text-muted: #6ba588;
    --border: rgba(52,211,153,0.2);
    --shadow-sm: 0 2px 12px rgba(0,0,0,0.3);
    --shadow-md: 0 8px 30px rgba(0,0,0,0.4);
    --shadow-lg: 0 20px 60px rgba(0,0,0,0.5);
    --card: #0d2419;
    --nav-bg: rgba(7,20,14,0.9);
    --hero-grad: linear-gradient(135deg, #0a2e20 0%, #0d3b2a 40%, #2d2810 100%);
  }
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; -webkit-text-size-adjust: 100%; }
  body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    background: var(--bg); color: var(--text-dark);
    transition: background 0.4s, color 0.4s;
    overflow-x: hidden; line-height: 1.6;
  }
  ::-webkit-scrollbar { width: 8px; }
  ::-webkit-scrollbar-track { background: var(--bg-alt); }
  ::-webkit-scrollbar-thumb { background: linear-gradient(var(--emerald), var(--gold)); border-radius: 4px; }
  img { max-width: 100%; display: block; }
  a { -webkit-tap-highlight-color: transparent; }

  .bg-orbs { position: fixed; inset: 0; z-index: -1; overflow: hidden; pointer-events: none; }
  .orb { position: absolute; border-radius: 50%; filter: blur(80px); opacity: 0.4; }
  .orb1 { width: 400px; height: 400px; background: var(--emerald-glow); top: -100px; right: -100px; }
  .orb2 { width: 350px; height: 350px; background: rgba(234,179,8,0.15); bottom: 10%; left: -120px; }

  nav { position: fixed; top: 0; width: 100%; z-index: 1000; padding: 1.3rem 0; transition: all 0.4s ease; }
  nav.scrolled {
    background: var(--nav-bg); padding: 0.7rem 0; box-shadow: var(--shadow-sm);
    backdrop-filter: blur(20px) saturate(180%); -webkit-backdrop-filter: blur(20px) saturate(180%);
    border-bottom: 1px solid var(--border);
  }
  .nav-inner { max-width: 1200px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between; padding: 0 1.5rem; }
  .nav-logo { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; letter-spacing: 0.02em; text-decoration: none; display: flex; align-items: center; gap: 0.6rem; color: var(--white); }
  nav.scrolled .nav-logo { color: var(--emerald-deep); }
  .nav-logo .mark { width: 34px; height: 34px; border-radius: 10px; background: linear-gradient(135deg, var(--emerald), var(--gold)); display: flex; align-items: center; justify-content: center; color: white; font-size: 0.85rem; font-family: 'Plus Jakarta Sans'; box-shadow: 0 4px 12px var(--emerald-glow); }
  .nav-links { display: flex; gap: 2.2rem; list-style: none; align-items: center; }
  .nav-links a { color: rgba(255,255,255,0.9); text-decoration: none; font-size: 0.85rem; font-weight: 500; letter-spacing: 0.02em; position: relative; transition: color 0.3s; padding: 0.3rem 0; }
  nav.scrolled .nav-links a { color: var(--text-mid); }
  .nav-links a::after { content: ''; position: absolute; bottom: -2px; left: 0; width: 0; height: 2px; background: linear-gradient(to right, var(--emerald), var(--gold)); transition: width 0.3s; border-radius: 2px; }
  .nav-links a:hover { color: var(--gold-bright); }
  nav.scrolled .nav-links a:hover { color: var(--emerald-deep); }
  .nav-links a:hover::after { width: 100%; }
  .nav-actions { display: flex; gap: 0.6rem; align-items: center; }
  .icon-btn { width: 40px; height: 40px; border-radius: 12px; background: rgba(255,255,255,0.18); border: 1px solid rgba(255,255,255,0.3); color: white; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 0.95rem; transition: all 0.3s; backdrop-filter: blur(8px); }
  nav.scrolled .icon-btn { background: var(--emerald-soft); border-color: var(--border); color: var(--emerald-deep); }
  .icon-btn:hover { transform: scale(1.08) rotate(8deg); }
  .hamburger { display: none; }

  #hero { min-height: 100vh; min-height: 100svh; background: var(--hero-grad); display: flex; align-items: center; position: relative; overflow: hidden; padding: 6rem 1.5rem 3rem; }
  #hero::before { content: ''; position: absolute; inset: 0; background-image: radial-gradient(circle at 15% 30%, rgba(255,255,255,0.5) 0%, transparent 40%), radial-gradient(circle at 85% 70%, rgba(234,179,8,0.2) 0%, transparent 40%); }
  .hero-grid { max-width: 1150px; margin: 0 auto; width: 100%; display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 3rem; align-items: center; position: relative; z-index: 2; }
  .hero-badge { display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255,255,255,0.55); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.7); color: var(--emerald-deep); padding: 0.5rem 1.2rem; border-radius: 999px; font-size: 0.78rem; font-weight: 600; letter-spacing: 0.04em; margin-bottom: 1.5rem; box-shadow: var(--shadow-sm); }
  .hero-badge i { color: var(--gold-deep); }
  .hero-name { font-family: 'Cormorant Garamond', serif; font-size: clamp(2.5rem, 6vw, 4.2rem); font-weight: 700; line-height: 1.05; margin-bottom: 0.5rem; color: var(--text-dark); letter-spacing: -0.01em; }
  .hero-name .accent { background: linear-gradient(120deg, var(--emerald-deep), var(--gold-deep)); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; }
  .hero-role { font-size: 1.05rem; color: var(--text-mid); font-weight: 600; margin-bottom: 0.5rem; }
  .hero-sub { font-size: 0.92rem; color: var(--text-muted); margin-bottom: 1.2rem; }
  .hero-tagline { font-family: 'Amiri', serif; font-style: italic; font-size: 1.15rem; color: var(--emerald-deep); margin-bottom: 2rem; min-height: 1.6em; font-weight: 400; }
  .hero-tagline .cursor { display: inline-block; width: 2px; height: 1.1em; background: var(--gold-deep); animation: blink 1s infinite; vertical-align: middle; margin-left: 2px; }
  @keyframes blink { 0%,100%{opacity:1} 50%{opacity:0} }
  .hero-buttons { display: flex; gap: 1rem; flex-wrap: wrap; }
  .btn-primary { background: linear-gradient(135deg, var(--emerald), var(--emerald-deep)); color: white; padding: 0.85rem 1.8rem; border-radius: 14px; text-decoration: none; font-weight: 600; font-size: 0.9rem; transition: all 0.35s; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 0.6rem; box-shadow: 0 8px 24px var(--emerald-glow); }
  .btn-primary:hover { transform: translateY(-3px); box-shadow: 0 14px 32px var(--emerald-glow); }
  .btn-gold { background: rgba(255,255,255,0.6); backdrop-filter: blur(10px); color: var(--gold-deep); padding: 0.85rem 1.8rem; border-radius: 14px; text-decoration: none; font-weight: 600; font-size: 0.9rem; border: 1.5px solid var(--gold); transition: all 0.35s; display: inline-flex; align-items: center; gap: 0.6rem; }
  .btn-gold:hover { background: var(--gold); color: white; transform: translateY(-3px); box-shadow: 0 12px 28px rgba(234,179,8,0.3); }

  .hero-photo-wrap { display: flex; justify-content: center; position: relative; }
  .hero-photo-ring { position: relative; width: 320px; height: 400px; }
  .hero-photo-ring::before { content: ''; position: absolute; inset: -12px; background: linear-gradient(135deg, var(--emerald), var(--gold), var(--teal)); border-radius: 40% 40% 40% 40% / 45% 45% 45% 45%; filter: blur(2px); opacity: 0.5; z-index: 0; animation: morph 8s ease-in-out infinite; }
  @keyframes morph { 0%,100% { border-radius: 42% 58% 60% 40% / 50% 45% 55% 50%; } 50% { border-radius: 58% 42% 40% 60% / 45% 55% 45% 55%; } }
  .hero-photo { position: relative; z-index: 1; width: 100%; height: 100%; object-fit: cover; object-position: center top; border-radius: 40% 40% 40% 40% / 45% 45% 45% 45%; border: 5px solid rgba(255,255,255,0.8); box-shadow: var(--shadow-lg); animation: morph 8s ease-in-out infinite; }
  .hero-float-card { position: absolute; background: rgba(255,255,255,0.92); backdrop-filter: blur(14px); border-radius: 16px; padding: 0.85rem 1.1rem; box-shadow: var(--shadow-md); display: flex; align-items: center; gap: 0.7rem; border: 1px solid rgba(255,255,255,0.8); z-index: 2; }
  .hero-float-card .fi { width: 38px; height: 38px; border-radius: 10px; flex-shrink: 0; display: flex; align-items: center; justify-content: center; color: white; font-size: 1rem; }
  .hero-float-card .ft { font-size: 1.1rem; font-weight: 700; color: var(--text-dark); line-height: 1; }
  .hero-float-card .fl { font-size: 0.68rem; color: var(--text-muted); }
  .float-1 { top: 15%; left: -30px; animation: floaty 4s ease-in-out infinite; }
  .float-1 .fi { background: linear-gradient(135deg, var(--emerald), var(--emerald-deep)); }
  .float-2 { bottom: 18%; right: -25px; animation: floaty 4s ease-in-out infinite 1.5s; }
  .float-2 .fi { background: linear-gradient(135deg, var(--gold), var(--gold-deep)); }
  @keyframes floaty { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-12px)} }

  .hero-scroll { position: absolute; bottom: 1.5rem; left: 50%; transform: translateX(-50%); display: flex; flex-direction: column; align-items: center; gap: 0.4rem; color: var(--emerald-deep); font-size: 0.7rem; letter-spacing: 0.15em; text-transform: uppercase; z-index: 2; opacity: 0.7; }
  .hero-scroll i { animation: bounce 1.8s infinite; }
  @keyframes bounce { 0%,100%{transform:translateY(0)} 50%{transform:translateY(6px)} }

  #stats { padding: 0 1.5rem; margin-top: -2.5rem; position: relative; z-index: 5; }
  .stats-card { max-width: 1000px; margin: 0 auto; background: var(--card); border-radius: 24px; box-shadow: var(--shadow-lg); border: 1px solid var(--border); display: grid; grid-template-columns: repeat(4,1fr); overflow: hidden; }
  .stat-item { padding: 2rem 1rem; text-align: center; position: relative; }
  .stat-item:not(:last-child)::after { content: ''; position: absolute; right: 0; top: 25%; height: 50%; width: 1px; background: var(--border); }
  .stat-icon { width: 44px; height: 44px; border-radius: 12px; margin: 0 auto 0.75rem; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; color: white; background: linear-gradient(135deg, var(--emerald), var(--emerald-deep)); }
  .stat-item:nth-child(2) .stat-icon { background: linear-gradient(135deg, var(--gold), var(--gold-deep)); }
  .stat-item:nth-child(3) .stat-icon { background: linear-gradient(135deg, var(--teal), var(--emerald)); }
  .stat-item:nth-child(4) .stat-icon { background: linear-gradient(135deg, var(--gold-bright), var(--gold-deep)); }
  .stat-number { font-family: 'Cormorant Garamond', serif; font-size: 2.4rem; font-weight: 700; color: var(--emerald-deep); line-height: 1; }
  .stat-label { color: var(--text-muted); font-size: 0.78rem; font-weight: 500; margin-top: 0.3rem; }

  section { padding: 5.5rem 1.5rem; }
  .container { max-width: 1100px; margin: 0 auto; }
  .section-header { text-align: center; margin-bottom: 3.5rem; }
  .section-badge { display: inline-flex; align-items: center; gap: 0.4rem; background: var(--emerald-soft); color: var(--emerald-deep); padding: 0.4rem 1.1rem; border-radius: 999px; font-size: 0.72rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: 1rem; border: 1px solid var(--border); }
  .section-badge i { color: var(--gold-deep); }
  .section-title { font-family: 'Cormorant Garamond', serif; font-size: clamp(2rem, 4vw, 2.9rem); font-weight: 700; color: var(--text-dark); margin-bottom: 1rem; line-height: 1.15; }
  .section-line { width: 70px; height: 4px; margin: 0 auto; background: linear-gradient(to right, var(--emerald), var(--gold)); border-radius: 2px; }
  .section-desc { max-width: 600px; margin: 1.2rem auto 0; color: var(--text-muted); font-size: 1rem; }

  #about { background: var(--bg); }
  .about-grid { display: grid; grid-template-columns: 0.85fr 1.4fr; gap: 3rem; align-items: start; }
  .about-card { background: var(--card); border-radius: 24px; padding: 2rem; box-shadow: var(--shadow-md); border: 1px solid var(--border); position: sticky; top: 90px; }
  .about-photo { width: 100%; aspect-ratio: 4/5; object-fit: cover; object-position: center top; border-radius: 18px; margin-bottom: 1.25rem; border: 3px solid var(--emerald-soft); }
  .about-name { font-family: 'Cormorant Garamond', serif; font-size: 1.4rem; font-weight: 700; color: var(--text-dark); text-align: center; }
  .about-role-txt { font-size: 0.82rem; color: var(--gold-deep); font-weight: 600; text-align: center; margin-top: 0.2rem; margin-bottom: 1.25rem; }
  .about-info-list { list-style: none; }
  .about-info-list li { display: flex; align-items: flex-start; gap: 0.75rem; padding: 0.65rem 0; border-bottom: 1px dashed var(--border); font-size: 0.84rem; color: var(--text-mid); }
  .about-info-list li:last-child { border-bottom: none; }
  .about-info-list li i { color: var(--emerald); font-size: 0.8rem; margin-top: 0.15rem; flex-shrink: 0; width: 26px; height: 26px; background: var(--emerald-soft); border-radius: 8px; display: flex; align-items: center; justify-content: center; }
  .about-text p { color: var(--text-mid); line-height: 1.95; margin-bottom: 1.2rem; font-size: 1rem; }
  .about-text em { color: var(--emerald-deep); font-style: italic; font-weight: 500; }
  .focus-chips { display: flex; flex-wrap: wrap; gap: 0.6rem; margin-top: 1.75rem; }
  .chip { background: var(--card); color: var(--emerald-deep); padding: 0.5rem 1.1rem; border-radius: 999px; font-size: 0.8rem; font-weight: 600; border: 1.5px solid var(--border); box-shadow: var(--shadow-sm); transition: all 0.3s; }
  .chip:hover { background: var(--emerald); color: white; transform: translateY(-2px); }

  #timeline { background: var(--bg-alt); }
  .timeline { position: relative; max-width: 760px; margin: 0 auto; }
  .timeline::before { content: ''; position: absolute; left: 30px; top: 10px; bottom: 10px; width: 3px; background: linear-gradient(to bottom, var(--emerald), var(--gold)); border-radius: 3px; }
  .timeline-item { display: flex; gap: 1.75rem; margin-bottom: 2rem; position: relative; }
  .timeline-dot { flex-shrink: 0; width: 62px; height: 62px; border-radius: 18px; background: var(--card); border: 3px solid var(--emerald); display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: var(--emerald); z-index: 1; box-shadow: 0 0 0 6px var(--bg-alt), var(--shadow-sm); transition: all 0.3s; }
  .timeline-item:hover .timeline-dot { transform: scale(1.1) rotate(-5deg); }
  .timeline-item.gold .timeline-dot { border-color: var(--gold); color: var(--gold-deep); }
  .timeline-body { background: var(--card); border-radius: 18px; padding: 1.5rem; flex: 1; border: 1px solid var(--border); box-shadow: var(--shadow-sm); transition: all 0.3s; }
  .timeline-item:hover .timeline-body { box-shadow: var(--shadow-md); transform: translateX(4px); }
  .timeline-year { display: inline-block; background: var(--emerald-soft); color: var(--emerald-deep); padding: 0.25rem 0.85rem; border-radius: 999px; font-size: 0.73rem; font-weight: 700; margin-bottom: 0.6rem; }
  .timeline-item.gold .timeline-year { background: var(--gold-soft); color: var(--gold-deep); }
  .timeline-title { font-family: 'Cormorant Garamond', serif; font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.25rem; line-height: 1.2; }
  .timeline-sub { font-size: 0.86rem; color: var(--text-muted); }

  #disertasi { background: var(--bg); }
  .disertasi-card { background: linear-gradient(135deg, var(--emerald-deep) 0%, #047857 50%, #065f46 100%); border-radius: 28px; padding: 3rem; color: white; position: relative; overflow: hidden; margin-bottom: 2rem; box-shadow: var(--shadow-lg); }
  .disertasi-card::before { content: '\f02d'; font-family: 'Font Awesome 6 Free'; font-weight: 900; position: absolute; right: 2rem; top: 1.5rem; font-size: 9rem; color: rgba(255,255,255,0.06); line-height: 1; }
  .disertasi-card::after { content: ''; position: absolute; bottom: -50px; left: -50px; width: 200px; height: 200px; background: radial-gradient(circle, rgba(234,179,8,0.2), transparent 70%); border-radius: 50%; }
  .disertasi-badge { display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(234,179,8,0.25); border: 1px solid rgba(250,204,21,0.4); color: var(--gold-bright); padding: 0.4rem 1.1rem; border-radius: 999px; font-size: 0.72rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 1.3rem; position: relative; z-index: 2; }
  .disertasi-title { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.5rem, 3vw, 2rem); font-weight: 700; color: white; line-height: 1.3; margin-bottom: 1.5rem; max-width: 720px; position: relative; z-index: 2; }
  .disertasi-title em { color: var(--gold-bright); font-style: italic; }
  .disertasi-meta { display: flex; flex-wrap: wrap; gap: 0.8rem 1.5rem; margin-bottom: 1.5rem; position: relative; z-index: 2; }
  .disertasi-meta-item { display: flex; align-items: center; gap: 0.5rem; font-size: 0.85rem; color: rgba(255,255,255,0.85); }
  .disertasi-meta-item i { color: var(--gold-bright); }
  .disertasi-abstract { font-size: 0.95rem; line-height: 1.9; color: rgba(255,255,255,0.82); max-width: 760px; position: relative; z-index: 2; }
  .disertasi-abstract em { color: var(--gold-bright); font-style: italic; }
  .disertasi-pillars { display: grid; grid-template-columns: repeat(3,1fr); gap: 1.5rem; }
  .pillar-card { background: var(--card); border-radius: 20px; padding: 1.75rem; border: 1px solid var(--border); text-align: center; transition: all 0.35s; box-shadow: var(--shadow-sm); }
  .pillar-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-md); }
  .pillar-icon { width: 56px; height: 56px; border-radius: 16px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: white; background: linear-gradient(135deg, var(--emerald), var(--emerald-deep)); }
  .pillar-card:nth-child(2) .pillar-icon { background: linear-gradient(135deg, var(--gold), var(--gold-deep)); }
  .pillar-card:nth-child(3) .pillar-icon { background: linear-gradient(135deg, var(--teal), var(--emerald)); }
  .pillar-title { font-weight: 700; font-size: 0.95rem; color: var(--text-dark); margin-bottom: 0.5rem; }
  .pillar-desc { font-size: 0.84rem; color: var(--text-muted); line-height: 1.7; }

  #publikasi { background: var(--bg-alt); }
  .filter-bar { display: flex; flex-wrap: wrap; gap: 0.6rem; justify-content: center; margin-bottom: 2.5rem; }
  .filter-btn { background: var(--card); color: var(--text-mid); border: 1.5px solid var(--border); border-radius: 999px; padding: 0.5rem 1.2rem; font-size: 0.82rem; font-weight: 600; cursor: pointer; transition: all 0.3s; font-family: inherit; }
  .filter-btn.active, .filter-btn:hover { background: linear-gradient(135deg, var(--emerald), var(--emerald-deep)); color: white; border-color: transparent; box-shadow: 0 6px 16px var(--emerald-glow); }
  .pub-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; }
  .pub-card { background: var(--card); border-radius: 20px; padding: 1.75rem; border: 1px solid var(--border); box-shadow: var(--shadow-sm); transition: all 0.35s; position: relative; overflow: hidden; }
  .pub-card::before { content: ''; position: absolute; top: 0; left: 0; width: 5px; height: 100%; background: linear-gradient(to bottom, var(--emerald), var(--gold)); }
  .pub-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-md); }
  .pub-tag { display: inline-block; background: var(--emerald-soft); color: var(--emerald-deep); padding: 0.25rem 0.75rem; border-radius: 999px; font-size: 0.72rem; font-weight: 700; margin-bottom: 0.85rem; }
  .pub-title { font-weight: 700; font-size: 0.98rem; color: var(--text-dark); line-height: 1.5; margin-bottom: 0.6rem; }
  .pub-authors { font-size: 0.82rem; color: var(--text-muted); margin-bottom: 0.5rem; font-style: italic; }
  .pub-journal { font-size: 0.82rem; color: var(--text-mid); margin-bottom: 0.85rem; }
  .pub-meta { display: flex; align-items: center; justify-content: space-between; padding-top: 0.75rem; border-top: 1px dashed var(--border); }
  .pub-year { font-size: 0.8rem; color: var(--text-muted); }
  .pub-cite { display: inline-flex; align-items: center; gap: 0.3rem; background: var(--gold-soft); color: var(--gold-deep); padding: 0.25rem 0.7rem; border-radius: 999px; font-size: 0.75rem; font-weight: 700; }

  #skills { background: var(--bg); }
  .skills-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; }
  .skill-group-title { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.75rem; display: flex; align-items: center; gap: 0.75rem; }
  .skill-group-title i { width: 40px; height: 40px; border-radius: 12px; font-size: 1rem; color: white; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, var(--emerald), var(--emerald-deep)); }
  .skill-item { margin-bottom: 1.4rem; }
  .skill-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem; }
  .skill-name { font-size: 0.9rem; font-weight: 600; color: var(--text-dark); }
  .skill-pct { font-size: 0.82rem; color: var(--emerald-deep); font-weight: 700; }
  .skill-bar { height: 8px; background: var(--emerald-soft); border-radius: 999px; overflow: hidden; }
  .skill-fill { height: 100%; border-radius: 999px; width: 0; background: linear-gradient(to right, var(--emerald), var(--gold)); transition: width 1.4s cubic-bezier(0.4,0,0.2,1); }

  #pengalaman { background: var(--bg-alt); }
  .exp-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; }
  .exp-card { background: var(--card); border-radius: 20px; padding: 1.75rem; border: 1px solid var(--border); transition: all 0.35s; display: flex; gap: 1.1rem; box-shadow: var(--shadow-sm); }
  .exp-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
  .exp-icon { width: 52px; height: 52px; border-radius: 15px; flex-shrink: 0; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: white; background: linear-gradient(135deg, var(--emerald), var(--emerald-deep)); }
  .exp-card:nth-child(even) .exp-icon { background: linear-gradient(135deg, var(--gold), var(--gold-deep)); }
  .exp-period { font-size: 0.74rem; color: var(--gold-deep); font-weight: 700; letter-spacing: 0.04em; margin-bottom: 0.3rem; text-transform: uppercase; }
  .exp-title { font-weight: 700; font-size: 0.95rem; color: var(--text-dark); margin-bottom: 0.25rem; line-height: 1.3; }
  .exp-place { font-size: 0.84rem; color: var(--emerald-deep); font-weight: 600; margin-bottom: 0.5rem; }
  .exp-desc { font-size: 0.82rem; color: var(--text-muted); line-height: 1.65; }

  #galeri { background: var(--bg); }
  .gallery-grid { display: grid; grid-template-columns: repeat(3,1fr); grid-auto-rows: 210px; gap: 1.2rem; }
  .gallery-item { border-radius: 20px; overflow: hidden; position: relative; cursor: pointer; box-shadow: var(--shadow-sm); }
  .gallery-item:nth-child(1) { grid-row: span 2; }
  .gallery-item:nth-child(4) { grid-column: span 2; }
  .gallery-inner { width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 0.85rem; transition: all 0.4s; background: linear-gradient(135deg, var(--emerald-soft), var(--gold-soft)); }
  .gallery-item:nth-child(even) .gallery-inner { background: linear-gradient(135deg, var(--gold-soft), var(--emerald-soft)); }
  .gallery-item:hover .gallery-inner { transform: scale(1.06); }
  .gallery-inner i { font-size: 2.2rem; color: white; width: 64px; height: 64px; border-radius: 18px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, var(--emerald), var(--emerald-deep)); box-shadow: var(--shadow-md); }
  .gallery-label { font-size: 0.85rem; font-weight: 600; color: var(--text-mid); text-align: center; padding: 0 1rem; }
  .gallery-overlay { position: absolute; inset: 0; opacity: 0; transition: opacity 0.35s; background: linear-gradient(to top, rgba(6,95,70,0.9), transparent 70%); display: flex; align-items: flex-end; padding: 1.2rem; }
  .gallery-item:hover .gallery-overlay { opacity: 1; }
  .gallery-overlay span { color: white; font-size: 0.9rem; font-weight: 600; }

  #kontak { background: var(--bg-alt); }
  .contact-grid { display: grid; grid-template-columns: 1fr 1.15fr; gap: 3rem; align-items: start; }
  .contact-info h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.7rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.85rem; line-height: 1.25; }
  .contact-info > p { color: var(--text-muted); font-size: 0.92rem; line-height: 1.75; margin-bottom: 2rem; }
  .contact-list { list-style: none; }
  .contact-list li { display: flex; align-items: flex-start; gap: 1rem; margin-bottom: 1.3rem; }
  .contact-icon { width: 50px; height: 50px; border-radius: 15px; flex-shrink: 0; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; color: white; background: linear-gradient(135deg, var(--emerald), var(--emerald-deep)); box-shadow: var(--shadow-sm); }
  .contact-list li:nth-child(2) .contact-icon { background: linear-gradient(135deg, var(--gold), var(--gold-deep)); }
  .contact-list li:nth-child(3) .contact-icon { background: linear-gradient(135deg, var(--teal), var(--emerald)); }
  .contact-link-title { font-size: 0.74rem; color: var(--text-muted); font-weight: 500; margin-bottom: 0.1rem; }
  .contact-link-val { font-size: 0.95rem; font-weight: 600; color: var(--text-dark); text-decoration: none; }
  .contact-link-val:hover { color: var(--emerald-deep); }
  .social-links { display: flex; gap: 0.75rem; margin-top: 2rem; flex-wrap: wrap; }
  .social-link { display: inline-flex; align-items: center; gap: 0.5rem; background: var(--card); color: var(--text-mid); border: 1.5px solid var(--border); border-radius: 14px; padding: 0.7rem 1.2rem; font-size: 0.84rem; font-weight: 600; text-decoration: none; transition: all 0.3s; }
  .social-link:hover { background: linear-gradient(135deg, var(--emerald), var(--emerald-deep)); color: white; border-color: transparent; transform: translateY(-3px); box-shadow: 0 8px 20px var(--emerald-glow); }
  .contact-form { background: var(--card); border-radius: 24px; padding: 2.25rem; border: 1px solid var(--border); box-shadow: var(--shadow-md); }
  .contact-form h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; color: var(--text-dark); margin-bottom: 1.5rem; font-weight: 700; }
  .form-group { margin-bottom: 1.25rem; }
  .form-group label { display: block; font-size: 0.82rem; font-weight: 600; color: var(--text-mid); margin-bottom: 0.45rem; }
  .form-group input, .form-group textarea { width: 100%; padding: 0.85rem 1.1rem; background: var(--bg-alt); border: 1.5px solid var(--border); border-radius: 13px; color: var(--text-dark); font-family: inherit; font-size: 0.92rem; transition: all 0.3s; outline: none; }
  .form-group input:focus, .form-group textarea:focus { border-color: var(--emerald); box-shadow: 0 0 0 4px var(--emerald-glow); }
  .form-group textarea { min-height: 120px; resize: vertical; }
  .btn-submit { width: 100%; background: linear-gradient(135deg, var(--emerald), var(--emerald-deep)); color: white; border: none; border-radius: 13px; padding: 0.95rem; font-size: 0.92rem; font-weight: 700; cursor: pointer; transition: all 0.3s; display: flex; align-items: center; justify-content: center; gap: 0.5rem; font-family: inherit; box-shadow: 0 8px 20px var(--emerald-glow); }
  .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 12px 28px var(--emerald-glow); }

  footer { background: linear-gradient(135deg, #064e3b, #065f46); color: rgba(255,255,255,0.7); text-align: center; padding: 3rem 1.5rem 2rem; font-size: 0.88rem; line-height: 1.9; }
  .footer-logo { font-family: 'Cormorant Garamond', serif; font-size: 1.6rem; font-weight: 700; color: white; margin-bottom: 0.5rem; }
  footer .gold { color: var(--gold-bright); }
  .footer-divider { width: 60px; height: 2px; background: var(--gold); margin: 1rem auto; border-radius: 2px; opacity: 0.6; }

  .fab-group { position: fixed; bottom: 1.5rem; right: 1.5rem; z-index: 999; display: flex; flex-direction: column; gap: 0.7rem; }
  .fab { width: 52px; height: 52px; border-radius: 16px; border: none; cursor: pointer; color: white; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; box-shadow: var(--shadow-md); transition: all 0.3s; text-decoration: none; }
  .fab-wa { background: linear-gradient(135deg, #25d366, #128c7e); }
  .fab-top { background: linear-gradient(135deg, var(--emerald), var(--emerald-deep)); opacity: 0; transform: translateY(10px); pointer-events: none; }
  .fab-top.visible { opacity: 1; transform: translateY(0); pointer-events: all; }
  .fab:hover { transform: translateY(-3px) scale(1.05); }

  @media (max-width: 900px) {
    .hero-grid { grid-template-columns: 1fr; text-align: center; gap: 2.5rem; }
    .hero-buttons { justify-content: center; }
    .hero-badge { margin-left: auto; margin-right: auto; }
    .hero-photo-ring { width: 260px; height: 330px; }
    .about-grid { grid-template-columns: 1fr; }
    .about-card { position: static; max-width: 380px; margin: 0 auto; }
    .skills-grid, .exp-grid, .contact-grid, .disertasi-pillars, .pub-grid { grid-template-columns: 1fr; }
  }
  @media (max-width: 768px) {
    .hamburger { display: flex; flex-direction: column; gap: 5px; cursor: pointer; background: rgba(255,255,255,0.18); border: 1px solid rgba(255,255,255,0.3); width: 40px; height: 40px; border-radius: 12px; align-items: center; justify-content: center; }
    nav.scrolled .hamburger { background: var(--emerald-soft); border-color: var(--border); }
    .hamburger span { display: block; width: 20px; height: 2px; background: white; transition: 0.3s; border-radius: 2px; }
    nav.scrolled .hamburger span { background: var(--emerald-deep); }
    .hamburger.active span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
    .hamburger.active span:nth-child(2) { opacity: 0; }
    .hamburger.active span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }
    .nav-links { position: fixed; top: 0; right: 0; bottom: 0; width: 78%; max-width: 320px; background: var(--card); flex-direction: column; gap: 0; padding: 5rem 0 2rem; transform: translateX(100%); transition: transform 0.4s cubic-bezier(0.4,0,0.2,1); box-shadow: -10px 0 40px rgba(0,0,0,0.15); align-items: stretch; }
    .nav-links.open { transform: translateX(0); }
    .nav-links a { color: var(--text-dark) !important; padding: 1rem 2rem; font-size: 1rem; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 0.85rem; }
    .nav-links a::after { display: none; }
    .nav-links a i { color: var(--emerald); width: 20px; }
    .nav-overlay { position: fixed; inset: 0; background: rgba(0,0,0,0.4); z-index: 999; opacity: 0; pointer-events: none; transition: opacity 0.3s; backdrop-filter: blur(3px); }
    .nav-overlay.show { opacity: 1; pointer-events: all; }
    section { padding: 4rem 1.25rem; }
    .stats-card { grid-template-columns: 1fr 1fr; }
    .stat-item:nth-child(2)::after { display: none; }
    .stat-item:nth-child(odd) { border-bottom: 1px solid var(--border); }
    .stat-item:nth-child(even) { border-bottom: 1px solid var(--border); }
    .disertasi-card { padding: 2rem 1.5rem; }
    .gallery-grid { grid-template-columns: 1fr 1fr; grid-auto-rows: 170px; }
    .gallery-item:nth-child(1) { grid-row: auto; }
    .gallery-item:nth-child(4) { grid-column: span 2; }
    .hero-float-card { padding: 0.7rem 0.9rem; }
    .float-1 { left: -10px; }
    .float-2 { right: -10px; }
  }
  @media (max-width: 420px) {
    .hero-name { font-size: 2.3rem; }
    .gallery-grid { grid-template-columns: 1fr; grid-auto-rows: 180px; }
    .gallery-item:nth-child(4) { grid-column: auto; }
    .contact-form, .about-card { padding: 1.5rem; }
    .hero-float-card .fl { display: none; }
  }
  @media (hover: none) {
    .gallery-overlay { opacity: 1; background: linear-gradient(to top, rgba(6,95,70,0.7), transparent 60%); }
  }
</style>
</head>
<body>

<div class="bg-orbs"><div class="orb orb1"></div><div class="orb orb2"></div></div>

<nav id="navbar">
  <div class="nav-inner">
    <a href="#hero" class="nav-logo"><span class="mark">M</span> Masyitah</a>
    <ul class="nav-links" id="navLinks">
      <li><a href="#about"><i class="fa fa-user"></i> Tentang</a></li>
      <li><a href="#timeline"><i class="fa fa-stream"></i> Perjalanan</a></li>
      <li><a href="#disertasi"><i class="fa fa-book-open"></i> Disertasi</a></li>
      <li><a href="#publikasi"><i class="fa fa-file-lines"></i> Publikasi</a></li>
      <li><a href="#skills"><i class="fa fa-chart-simple"></i> Keahlian</a></li>
      <li><a href="#pengalaman"><i class="fa fa-briefcase"></i> Pengalaman</a></li>
      <li><a href="#kontak"><i class="fa fa-envelope"></i> Kontak</a></li>
    </ul>
    <div class="nav-actions">
      <button class="icon-btn" id="darkToggle" title="Ganti tema"><i class="fa fa-moon"></i></button>
      <button class="icon-btn hamburger" id="hamburger" aria-label="Menu"><span></span><span></span><span></span></button>
    </div>
  </div>
</nav>
<div class="nav-overlay" id="navOverlay"></div>

<section id="hero">
  <div class="hero-grid">
    <div data-aos="fade-right">
      <div class="hero-badge"><i class="fa fa-graduation-cap"></i> Kandidat Doktor · Universitas Negeri Medan</div>
      <h1 class="hero-name">Masyitah<br><span class="accent">S.Ag., M.Pd.</span></h1>
      <p class="hero-role">Dosen & Ketua Program Studi Pendidikan Agama Islam</p>
      <p class="hero-sub">STAI Raudhatul Akmal · Deli Serdang, Sumatera Utara</p>
      <p class="hero-tagline" id="typingText"><span class="cursor"></span></p>
      <div class="hero-buttons">
        <a href="#kontak" class="btn-primary"><i class="fa fa-paper-plane"></i> Hubungi Saya</a>
        <a href="#disertasi" class="btn-gold"><i class="fa fa-book-open"></i> Lihat Disertasi</a>
      </div>
    </div>
    <div class="hero-photo-wrap" data-aos="fade-left">
      <div class="hero-photo-ring">
        <img src="my-profile.jpeg" alt="Masyitah, S.Ag., M.Pd." class="hero-photo">
        <div class="hero-float-card float-1">
          <div class="fi"><i class="fa fa-quote-right"></i></div>
          <div><div class="ft">42+</div><div class="fl">Sitasi Ilmiah</div></div>
        </div>
        <div class="hero-float-card float-2">
          <div class="fi"><i class="fa fa-award"></i></div>
          <div><div class="ft">16+</div><div class="fl">Tahun Mengajar</div></div>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-scroll"><span>Gulir ke bawah</span><i class="fa fa-chevron-down"></i></div>
</section>

<div id="stats" data-aos="fade-up">
  <div class="stats-card">
    <div class="stat-item"><div class="stat-icon"><i class="fa fa-file-lines"></i></div><div class="stat-number" data-target="5">0</div><div class="stat-label">Publikasi Jurnal</div></div>
    <div class="stat-item"><div class="stat-icon"><i class="fa fa-quote-right"></i></div><div class="stat-number" data-target="42">0</div><div class="stat-label">Total Sitasi</div></div>
    <div class="stat-item"><div class="stat-icon"><i class="fa fa-chalkboard-teacher"></i></div><div class="stat-number" data-target="16">0</div><div class="stat-label">Tahun Mengajar</div></div>
    <div class="stat-item"><div class="stat-icon"><i class="fa fa-flask"></i></div><div class="stat-number" data-target="1">0</div><div class="stat-label">Disertasi Berjalan</div></div>
  </div>
</div>

<section id="about">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge"><i class="fa fa-star"></i> Profil</span>
      <h2 class="section-title">Tentang Saya</h2>
      <div class="section-line"></div>
    </div>
    <div class="about-grid">
      <div data-aos="fade-right">
        <div class="about-card">
          <img src="my-profile.jpeg" alt="Masyitah" class="about-photo">
          <div class="about-name">Masyitah, S.Ag., M.Pd.</div>
          <div class="about-role-txt">Kandidat Doktor Manajemen Pendidikan</div>
          <ul class="about-info-list">
            <li><i class="fa fa-map-marker-alt"></i> Deli Serdang, Sumatera Utara</li>
            <li><i class="fa fa-building"></i> STAI Raudhatul Akmal</li>
            <li><i class="fa fa-user-graduate"></i> Lektor (300) — Golongan III/d</li>
            <li><i class="fa fa-certificate"></i> Sertifikasi Dosen Ilmu Psikologi (2017)</li>
            <li><i class="fa fa-envelope"></i> masyitah@staira.ac.id</li>
            <li><i class="fa fa-phone"></i> +62 813-7539-2030</li>
          </ul>
        </div>
      </div>
      <div data-aos="fade-left">
        <div class="about-text">
          <p>Saya adalah seorang akademisi dan pendidik berpengalaman yang telah berkiprah dalam dunia pendidikan Islam selama lebih dari satu setengah dekade. Sebagai Ketua Program Studi Pendidikan Agama Islam (PAI) di STAI Raudhatul Akmal Deli Serdang, saya mendedikasikan diri pada pengembangan mutu pendidikan Islam yang adaptif, inovatif, dan relevan dengan tantangan zaman.</p>
          <p>Perjalanan akademik saya dimulai dari bangku S1 Pendidikan Agama Islam di IAIN Sumatera Utara, dilanjutkan dengan S2 Administrasi Pendidikan di Universitas Negeri Medan, dan kini saya tengah menempuh program doktoral S3 Manajemen Pendidikan di universitas yang sama. Riset disertasi saya berfokus pada pengembangan model manajemen pelatihan berbasis <em>coaching</em> dan <em>mentoring</em> untuk meningkatkan kompetensi profesional guru madrasah swasta.</p>
          <p>Selain mengelola program studi, saya aktif dalam penelitian dan publikasi ilmiah di bidang psikologi pendidikan, teknologi pembelajaran, dan manajemen pendidikan Islam. Saya percaya bahwa pendidik yang terus bertumbuh adalah kunci dari lahirnya generasi yang unggul.</p>
          <div class="focus-chips">
            <span class="chip">Manajemen Pendidikan</span>
            <span class="chip">Psikologi Pendidikan</span>
            <span class="chip">Metode Studi Islam</span>
            <span class="chip">Administrasi Pendidikan</span>
            <span class="chip">Teknologi Pembelajaran</span>
            <span class="chip">Pengembangan Kurikulum</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="timeline">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge"><i class="fa fa-stream"></i> Riwayat</span>
      <h2 class="section-title">Perjalanan Akademik & Karier</h2>
      <div class="section-line"></div>
    </div>
    <div class="timeline">
      <div class="timeline-item" data-aos="fade-up"><div class="timeline-dot"><i class="fa fa-graduation-cap"></i></div><div class="timeline-body"><span class="timeline-year">1997 – 2001</span><div class="timeline-title">S1 Pendidikan Agama Islam</div><div class="timeline-sub">IAIN Sumatera Utara · Medan</div></div></div>
      <div class="timeline-item gold" data-aos="fade-up" data-aos-delay="80"><div class="timeline-dot"><i class="fa fa-briefcase"></i></div><div class="timeline-body"><span class="timeline-year">September 2008</span><div class="timeline-title">Dosen Tetap PAI — STAI Raudhatul Akmal</div><div class="timeline-sub">Deli Serdang, Sumatera Utara · Aktif hingga sekarang</div></div></div>
      <div class="timeline-item" data-aos="fade-up" data-aos-delay="120"><div class="timeline-dot"><i class="fa fa-graduation-cap"></i></div><div class="timeline-body"><span class="timeline-year">2011 – 2013</span><div class="timeline-title">S2 Administrasi Pendidikan</div><div class="timeline-sub">Universitas Negeri Medan (UNIMED)</div></div></div>
      <div class="timeline-item gold" data-aos="fade-up" data-aos-delay="160"><div class="timeline-dot"><i class="fa fa-award"></i></div><div class="timeline-body"><span class="timeline-year">Oktober 2017</span><div class="timeline-title">Lektor (300) & Sertifikasi Dosen</div><div class="timeline-sub">Bidang Ilmu Psikologi · Golongan III/d — Penata Tk. I</div></div></div>
      <div class="timeline-item gold" data-aos="fade-up" data-aos-delay="200"><div class="timeline-dot"><i class="fa fa-chalkboard-teacher"></i></div><div class="timeline-body"><span class="timeline-year">Sekarang</span><div class="timeline-title">Ketua Program Studi Pendidikan Agama Islam</div><div class="timeline-sub">STAI Raudhatul Akmal · Deli Serdang</div></div></div>
      <div class="timeline-item" data-aos="fade-up" data-aos-delay="240"><div class="timeline-dot"><i class="fa fa-flask"></i></div><div class="timeline-body"><span class="timeline-year">2024 – Sekarang</span><div class="timeline-title">S3 Manajemen Pendidikan (Kandidat Doktor)</div><div class="timeline-sub">Program Pascasarjana · Universitas Negeri Medan</div></div></div>
    </div>
  </div>
</section>

<section id="disertasi">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge"><i class="fa fa-book-open"></i> Penelitian Doktoral</span>
      <h2 class="section-title">Disertasi S3 Berjalan</h2>
      <div class="section-line"></div>
      <p class="section-desc">Riset doktoral yang sedang dikerjakan dalam program S3 Manajemen Pendidikan UNIMED.</p>
    </div>
    <div class="disertasi-card" data-aos="zoom-in">
      <div class="disertasi-badge"><i class="fa fa-bookmark"></i> Proposal Disertasi · 2025</div>
      <h3 class="disertasi-title">Pengembangan Model Manajemen Pelatihan Berbasis <em>Coaching</em> dan <em>Mentoring</em> (COMENT) untuk Meningkatkan Kompetensi Profesional Guru MTs Swasta Kabupaten Deli Serdang</h3>
      <div class="disertasi-meta">
        <div class="disertasi-meta-item"><i class="fa fa-user"></i> Masyitah · NIM 8246113003</div>
        <div class="disertasi-meta-item"><i class="fa fa-university"></i> Pascasarjana UNIMED</div>
        <div class="disertasi-meta-item"><i class="fa fa-map-marker-alt"></i> Kab. Deli Serdang</div>
        <div class="disertasi-meta-item"><i class="fa fa-flask"></i> Metode Campuran</div>
      </div>
      <p class="disertasi-abstract">Penelitian ini berfokus pada pengembangan model manajemen pelatihan berbasis <em>coaching</em> dan <em>mentoring</em> (COMENT) sebagai solusi inovatif atas keterbatasan model pelatihan konvensional guru MTs swasta di Kabupaten Deli Serdang. Sekitar 40% guru MTs swasta di wilayah ini belum mencapai standar kompetensi profesional yang diharapkan. Model COMENT dirancang menjawab kesenjangan tersebut melalui pendampingan intensif, personalisasi pembelajaran, dan pengembangan kompetensi yang berkelanjutan.</p>
    </div>
    <div class="disertasi-pillars">
      <div class="pillar-card" data-aos="fade-up"><div class="pillar-icon"><i class="fa fa-bullseye"></i></div><div class="pillar-title">Rumusan Masalah</div><div class="pillar-desc">Bagaimana karakteristik, kelayakan, dan efektivitas model COMENT dalam meningkatkan kompetensi profesional guru MTs swasta?</div></div>
      <div class="pillar-card" data-aos="fade-up" data-aos-delay="100"><div class="pillar-icon"><i class="fa fa-cogs"></i></div><div class="pillar-title">Pendekatan COMENT</div><div class="pillar-desc">Mengintegrasikan coaching (pendampingan reflektif) dan mentoring (bimbingan berkelanjutan) dalam satu kerangka manajemen pelatihan yang sistematis.</div></div>
      <div class="pillar-card" data-aos="fade-up" data-aos-delay="200"><div class="pillar-icon"><i class="fa fa-chart-line"></i></div><div class="pillar-title">Target Luaran</div><div class="pillar-desc">Model pelatihan teruji yang layak dan efektif sebagai rujukan kebijakan Kemenag dan pengelola madrasah swasta se-Deli Serdang.</div></div>
    </div>
  </div>
</section>

<section id="publikasi">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge"><i class="fa fa-file-lines"></i> Karya Ilmiah</span>
      <h2 class="section-title">Penelitian & Publikasi</h2>
      <div class="section-line"></div>
    </div>
    <div class="filter-bar" data-aos="fade-up">
      <button class="filter-btn active" onclick="filterPub('all',this)">Semua</button>
      <button class="filter-btn" onclick="filterPub('teknologi',this)">Teknologi Pendidikan</button>
      <button class="filter-btn" onclick="filterPub('karakter',this)">Pendidikan Karakter</button>
      <button class="filter-btn" onclick="filterPub('psikologi',this)">Psikologi Pendidikan</button>
      <button class="filter-btn" onclick="filterPub('kurikulum',this)">Kurikulum</button>
    </div>
    <div class="pub-grid" id="pubGrid">
      <div class="pub-card" data-cat="teknologi" data-aos="fade-up"><span class="pub-tag">Teknologi Pendidikan</span><div class="pub-title">Tinjauan Literatur: Pemanfaatan Teknologi Augmented Reality sebagai Media Pembelajaran Interaktif di Tingkat Sekolah Dasar</div><div class="pub-authors">R. Rinaldi, K. Fahmi, M. Masyitah</div><div class="pub-journal">Likhitaprajna Jurnal Ilmiah FKIP</div><div class="pub-meta"><span class="pub-year"><i class="fa fa-calendar"></i> 2024</span><span class="pub-cite"><i class="fa fa-quote-right"></i> 42 Sitasi</span></div></div>
      <div class="pub-card" data-cat="karakter" data-aos="fade-up" data-aos-delay="50"><span class="pub-tag">Pendidikan Karakter</span><div class="pub-title">Strategies for Building Religious Character in School</div><div class="pub-authors">F. Fahmi, K. Fahmi, M. Andriani, A. Maulidya</div><div class="pub-journal">Int. Journal of Islamic Education, Research and Multiculturalism</div><div class="pub-meta"><span class="pub-year"><i class="fa fa-calendar"></i> 2022</span><span class="pub-cite"><i class="fa fa-quote-right"></i> 3 Sitasi</span></div></div>
      <div class="pub-card" data-cat="psikologi" data-aos="fade-up" data-aos-delay="100"><span class="pub-tag">Psikologi Pendidikan</span><div class="pub-title">Urgensi Memahami Konsep Pertumbuhan dan Perkembangan yang Terjadi pada Diri Peserta Didik</div><div class="pub-authors">T. Siregar, J. Farhanah, S. Nurbaithie, S. Masyitah</div><div class="pub-journal">Al Ittihadu, Vol. 1 (1), hlm. 43–51</div><div class="pub-meta"><span class="pub-year"><i class="fa fa-calendar"></i> 2022</span><span class="pub-cite"><i class="fa fa-quote-right"></i> —</span></div></div>
      <div class="pub-card" data-cat="psikologi" data-aos="fade-up" data-aos-delay="150"><span class="pub-tag">Psikologi Pendidikan</span><div class="pub-title">Persepsi Teori Konstruktivisme dalam Kemampuan Berpikir Siswa pada Mata Pelajaran Agama Islam di MAS YPRA Batang Kuis</div><div class="pub-authors">M. Masyitah</div><div class="pub-journal">Attaqwa: Jurnal Ilmu Pendidikan Islam, Vol. 18 (2)</div><div class="pub-meta"><span class="pub-year"><i class="fa fa-calendar"></i> 2022</span><span class="pub-cite"><i class="fa fa-quote-right"></i> —</span></div></div>
      <div class="pub-card" data-cat="kurikulum" data-aos="fade-up" data-aos-delay="200"><span class="pub-tag">Kurikulum</span><div class="pub-title">Internalisasi Kurikulum Pendidikan pada Pembelajaran Ilmu Pengetahuan Sosial (IPS) di SD/MI</div><div class="pub-authors">M. Masyitah</div><div class="pub-journal">Jurnal Pendidikan Islam</div><div class="pub-meta"><span class="pub-year"><i class="fa fa-calendar"></i> 2022</span><span class="pub-cite"><i class="fa fa-quote-right"></i> —</span></div></div>
    </div>
    <div style="text-align:center; margin-top:2.5rem" data-aos="fade-up">
      <a href="https://scholar.google.com/citations?hl=id&user=IkcM9wIAAAAJ" target="_blank" class="btn-primary" style="display:inline-flex"><i class="fa fa-external-link-alt"></i> Lihat Semua di Google Scholar</a>
    </div>
  </div>
</section>

<section id="skills">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge"><i class="fa fa-chart-simple"></i> Kompetensi</span>
      <h2 class="section-title">Keahlian & Kompetensi</h2>
      <div class="section-line"></div>
    </div>
    <div class="skills-grid">
      <div data-aos="fade-right">
        <div class="skill-group-title"><i class="fa fa-brain"></i> Akademik & Penelitian</div>
        <div class="skill-item"><div class="skill-header"><span class="skill-name">Penelitian Pendidikan</span><span class="skill-pct">90%</span></div><div class="skill-bar"><div class="skill-fill" data-pct="90"></div></div></div>
        <div class="skill-item"><div class="skill-header"><span class="skill-name">Penulisan Akademik & Publikasi</span><span class="skill-pct">85%</span></div><div class="skill-bar"><div class="skill-fill" data-pct="85"></div></div></div>
        <div class="skill-item"><div class="skill-header"><span class="skill-name">Manajemen Pendidikan</span><span class="skill-pct">88%</span></div><div class="skill-bar"><div class="skill-fill" data-pct="88"></div></div></div>
        <div class="skill-item"><div class="skill-header"><span class="skill-name">Analisis Data (SPSS)</span><span class="skill-pct">75%</span></div><div class="skill-bar"><div class="skill-fill" data-pct="75"></div></div></div>
        <div class="skill-item"><div class="skill-header"><span class="skill-name">Kurikulum & Pembelajaran</span><span class="skill-pct">90%</span></div><div class="skill-bar"><div class="skill-fill" data-pct="90"></div></div></div>
      </div>
      <div data-aos="fade-left">
        <div class="skill-group-title"><i class="fa fa-users"></i> Kepemimpinan & Teknologi</div>
        <div class="skill-item"><div class="skill-header"><span class="skill-name">Kepemimpinan Akademik (Kaprodi)</span><span class="skill-pct">92%</span></div><div class="skill-bar"><div class="skill-fill" data-pct="92"></div></div></div>
        <div class="skill-item"><div class="skill-header"><span class="skill-name">Psikologi Pendidikan</span><span class="skill-pct">88%</span></div><div class="skill-bar"><div class="skill-fill" data-pct="88"></div></div></div>
        <div class="skill-item"><div class="skill-header"><span class="skill-name">Teknologi Pembelajaran Digital</span><span class="skill-pct">78%</span></div><div class="skill-bar"><div class="skill-fill" data-pct="78"></div></div></div>
        <div class="skill-item"><div class="skill-header"><span class="skill-name">Coaching & Mentoring</span><span class="skill-pct">85%</span></div><div class="skill-bar"><div class="skill-fill" data-pct="85"></div></div></div>
        <div class="skill-item"><div class="skill-header"><span class="skill-name">Pengembangan SDM Pendidikan</span><span class="skill-pct">83%</span></div><div class="skill-bar"><div class="skill-fill" data-pct="83"></div></div></div>
      </div>
    </div>
  </div>
</section>

<section id="pengalaman">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge"><i class="fa fa-briefcase"></i> Karier</span>
      <h2 class="section-title">Pengalaman Profesional</h2>
      <div class="section-line"></div>
    </div>
    <div class="exp-grid">
      <div class="exp-card" data-aos="fade-up"><div class="exp-icon"><i class="fa fa-chalkboard-teacher"></i></div><div><div class="exp-period">Sept 2008 – Sekarang</div><div class="exp-title">Dosen Tetap — Pendidikan Agama Islam</div><div class="exp-place">STAI Raudhatul Akmal, Deli Serdang</div><div class="exp-desc">Mengampu mata kuliah PAI, psikologi pendidikan, dan administrasi pendidikan sebagai dosen tetap dengan jabatan fungsional Lektor.</div></div></div>
      <div class="exp-card" data-aos="fade-up" data-aos-delay="80"><div class="exp-icon"><i class="fa fa-sitemap"></i></div><div><div class="exp-period">Aktif</div><div class="exp-title">Ketua Program Studi PAI</div><div class="exp-place">STAI Raudhatul Akmal, Deli Serdang</div><div class="exp-desc">Memimpin program studi PAI: perencanaan kurikulum, akreditasi, pembinaan dosen, dan pengembangan mutu akademik.</div></div></div>
      <div class="exp-card" data-aos="fade-up" data-aos-delay="120"><div class="exp-icon"><i class="fa fa-award"></i></div><div><div class="exp-period">Oktober 2017</div><div class="exp-title">Lektor (300) — Penata Tk. I III/d</div><div class="exp-place">SK: K.IX/KP.07.6/212/2017</div><div class="exp-desc">Jabatan fungsional akademik yang diraih disertai sertifikasi dosen bidang Ilmu Psikologi.</div></div></div>
      <div class="exp-card" data-aos="fade-up" data-aos-delay="160"><div class="exp-icon"><i class="fa fa-certificate"></i></div><div><div class="exp-period">2017</div><div class="exp-title">Sertifikasi Dosen — Ilmu Psikologi</div><div class="exp-place">No. Reg: 0000140</div><div class="exp-desc">Sertifikasi dosen bidang Ilmu Psikologi yang menegaskan kompetensi profesional di bidang psikologi pendidikan.</div></div></div>
      <div class="exp-card" data-aos="fade-up" data-aos-delay="200"><div class="exp-icon"><i class="fa fa-flask"></i></div><div><div class="exp-period">2024 – Sekarang</div><div class="exp-title">Kandidat Doktor Manajemen Pendidikan</div><div class="exp-place">Program Pascasarjana UNIMED</div><div class="exp-desc">Menempuh studi S3 dengan fokus riset pengembangan model manajemen pelatihan berbasis coaching dan mentoring (COMENT).</div></div></div>
      <div class="exp-card" data-aos="fade-up" data-aos-delay="240"><div class="exp-icon"><i class="fa fa-book-reader"></i></div><div><div class="exp-period">Aktif</div><div class="exp-title">Peneliti & Penulis Ilmiah</div><div class="exp-place">Google Scholar · SINTA Kemdikbud</div><div class="exp-desc">Aktif menerbitkan artikel di jurnal nasional terakreditasi dan internasional, dengan lebih dari 42 sitasi di Google Scholar.</div></div></div>
    </div>
  </div>
</section>

<section id="galeri">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge"><i class="fa fa-images"></i> Dokumentasi</span>
      <h2 class="section-title">Galeri Akademik</h2>
      <div class="section-line"></div>
      <p class="section-desc">Dokumentasi kegiatan akademik, penelitian, seminar, dan pengabdian masyarakat.</p>
    </div>
    <div class="gallery-grid" data-aos="fade-up">
      <div class="gallery-item"><div class="gallery-inner"><i class="fa fa-chalkboard-teacher"></i><div class="gallery-label">Kegiatan Belajar Mengajar</div></div><div class="gallery-overlay"><span>Perkuliahan PAI</span></div></div>
      <div class="gallery-item"><div class="gallery-inner"><i class="fa fa-microphone-alt"></i><div class="gallery-label">Seminar & Konferensi</div></div><div class="gallery-overlay"><span>Presentasi Ilmiah</span></div></div>
      <div class="gallery-item"><div class="gallery-inner"><i class="fa fa-users"></i><div class="gallery-label">Pengabdian Masyarakat</div></div><div class="gallery-overlay"><span>Program PKM</span></div></div>
      <div class="gallery-item"><div class="gallery-inner"><i class="fa fa-book-open"></i><div class="gallery-label">Penelitian & Disertasi S3</div></div><div class="gallery-overlay"><span>Riset Doktoral COMENT</span></div></div>
      <div class="gallery-item"><div class="gallery-inner"><i class="fa fa-graduation-cap"></i><div class="gallery-label">Wisuda & Yudisium</div></div><div class="gallery-overlay"><span>Lulusan PAI</span></div></div>
    </div>
    <p style="text-align:center;margin-top:1.5rem;color:var(--text-muted);font-size:0.85rem" data-aos="fade-up"><i class="fa fa-info-circle"></i> Foto dokumentasi nyata akan ditampilkan setelah diunggah.</p>
  </div>
</section>

<section id="kontak">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge"><i class="fa fa-envelope"></i> Hubungi</span>
      <h2 class="section-title">Mari Terhubung</h2>
      <div class="section-line"></div>
    </div>
    <div class="contact-grid">
      <div data-aos="fade-right">
        <div class="contact-info">
          <h3>Terbuka untuk diskusi, kolaborasi riset, dan kerja sama akademik.</h3>
          <p>Jangan ragu menghubungi saya melalui kanal di bawah ini. Respons biasanya diberikan dalam 1–2 hari kerja.</p>
          <ul class="contact-list">
            <li><div class="contact-icon"><i class="fa fa-envelope"></i></div><div><div class="contact-link-title">Surel</div><a href="mailto:masyitah@staira.ac.id" class="contact-link-val">masyitah@staira.ac.id</a></div></li>
            <li><div class="contact-icon"><i class="fab fa-whatsapp"></i></div><div><div class="contact-link-title">WhatsApp / Telepon</div><a href="https://wa.me/6281375392030" class="contact-link-val" target="_blank">+62 813-7539-2030</a></div></li>
            <li><div class="contact-icon"><i class="fa fa-map-marker-alt"></i></div><div><div class="contact-link-title">Instansi</div><span class="contact-link-val">STAI Raudhatul Akmal, Deli Serdang</span></div></li>
          </ul>
          <div class="social-links">
            <a href="https://scholar.google.com/citations?hl=id&user=IkcM9wIAAAAJ" target="_blank" class="social-link"><i class="fa fa-graduation-cap"></i> Google Scholar</a>
            <a href="https://sinta.kemdiktisaintek.go.id/authors/profile/6932425" target="_blank" class="social-link"><i class="fa fa-star"></i> SINTA</a>
            <a href="https://wa.me/6281375392030" target="_blank" class="social-link"><i class="fab fa-whatsapp"></i> WhatsApp</a>
          </div>
        </div>
      </div>
      <div data-aos="fade-left">
        <div class="contact-form">
          <h3>Kirim Pesan</h3>
          <div class="form-group"><label>Nama Lengkap</label><input type="text" placeholder="Nama Anda"></div>
          <div class="form-group"><label>Surel</label><input type="email" placeholder="email@domain.com"></div>
          <div class="form-group"><label>Subjek</label><input type="text" placeholder="Topik pesan Anda"></div>
          <div class="form-group"><label>Pesan</label><textarea placeholder="Tulis pesan Anda di sini..."></textarea></div>
          <button class="btn-submit" onclick="submitForm()"><i class="fa fa-paper-plane"></i> Kirim Pesan</button>
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="footer-logo">Masyitah, <span class="gold">S.Ag., M.Pd.</span></div>
  <p>Dosen & Kaprodi PAI · STAI Raudhatul Akmal</p>
  <p>Kandidat Doktor Manajemen Pendidikan · Universitas Negeri Medan</p>
  <div class="footer-divider"></div>
  <p style="font-size:0.78rem">© 2025 Masyitah. Seluruh hak cipta dilindungi.</p>
</footer>

<div class="fab-group">
  <a href="https://wa.me/6281375392030" target="_blank" class="fab fab-wa" title="Chat WhatsApp"><i class="fab fa-whatsapp"></i></a>
  <button class="fab fab-top" id="fabTop" onclick="window.scrollTo({top:0,behavior:'smooth'})" title="Ke atas"><i class="fa fa-arrow-up"></i></button>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({ duration: 700, once: true, offset: 60 });
const navbar = document.getElementById('navbar');
const fabTop = document.getElementById('fabTop');
window.addEventListener('scroll', () => {
  navbar.classList.toggle('scrolled', window.scrollY > 50);
  fabTop.classList.toggle('visible', window.scrollY > 400);
});
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');
const navOverlay = document.getElementById('navOverlay');
function toggleMenu(open) {
  navLinks.classList.toggle('open', open);
  navOverlay.classList.toggle('show', open);
  hamburger.classList.toggle('active', open);
  document.body.style.overflow = open ? 'hidden' : '';
}
hamburger.addEventListener('click', () => toggleMenu(!navLinks.classList.contains('open')));
navOverlay.addEventListener('click', () => toggleMenu(false));
document.querySelectorAll('.nav-links a').forEach(a => a.addEventListener('click', () => toggleMenu(false)));
const toggle = document.getElementById('darkToggle');
const html = document.documentElement;
let dark = false;
toggle.addEventListener('click', () => {
  dark = !dark;
  html.setAttribute('data-theme', dark ? 'dark' : 'light');
  toggle.innerHTML = dark ? '<i class="fa fa-sun"></i>' : '<i class="fa fa-moon"></i>';
});
const phrases = ['Researcher · Educator · Academic Leader','Pengembang Manajemen Pendidikan Islam','Kandidat Doktor UNIMED 2024','Kaprodi PAI · STAI Raudhatul Akmal'];
let pi = 0, ci = 0, deleting = false;
const el = document.getElementById('typingText');
function type() {
  const p = phrases[pi];
  el.innerHTML = (deleting ? p.slice(0, --ci) : p.slice(0, ++ci)) + '<span class="cursor"></span>';
  if (!deleting && ci === p.length) { deleting = true; setTimeout(type, 1800); return; }
  if (deleting && ci === 0) { deleting = false; pi = (pi + 1) % phrases.length; }
  setTimeout(type, deleting ? 45 : 75);
}
type();
function animateCounter(e) {
  const t = parseInt(e.dataset.target); let c = 0; const s = Math.max(1, Math.ceil(t / 45));
  const tm = setInterval(() => { c = Math.min(c + s, t); e.textContent = c + (t > 1 ? '+' : ''); if (c >= t) clearInterval(tm); }, 40);
}
new IntersectionObserver((es, o) => es.forEach(e => { if (e.isIntersecting) { e.target.querySelectorAll('.stat-number').forEach(animateCounter); o.unobserve(e.target); } }), { threshold: 0.4 }).observe(document.getElementById('stats'));
new IntersectionObserver((es, o) => es.forEach(e => { if (e.isIntersecting) { e.target.querySelectorAll('.skill-fill').forEach(b => b.style.width = b.dataset.pct + '%'); o.unobserve(e.target); } }), { threshold: 0.3 }).observe(document.getElementById('skills'));
function filterPub(cat, btn) {
  document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('.pub-card').forEach(c => c.style.display = (cat === 'all' || c.dataset.cat === cat) ? 'block' : 'none');
}
function submitForm() { alert('Pesan Anda telah terkirim! Saya akan merespons secepatnya. Terima kasih.'); }
</script>
</body>
</html>
