<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account – Swizer Premium Apparel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,700;0,800;0,900;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        :root {
            --swz-black: #111111;
            --swz-off: #f6f5f2;
            --swz-gray: #767676;
            --swz-lgray: #b0b0b0;
            --swz-accent: #c9a96e;
            --swz-red: #d63333;
            --swz-white: #ffffff;
            --swz-green: #2a7a4a;
            --swz-border: #e8e8e8;
        }
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Manrope', sans-serif; background: var(--swz-off); color: var(--swz-black); overflow-x: hidden; }
        @media (max-width: 767px) { body { padding-bottom: 68px; } }

        /* ANNOUNCE BAR */
        .swz-announce-bar { overflow: hidden; padding: 10px 0; background: var(--swz-black); }
        .swz-marquee-track { display: flex; width: max-content; animation: swzMarquee 32s linear infinite; color: #fff; font-size: 10px; font-weight: 600; letter-spacing: .22em; text-transform: uppercase; }
        @keyframes swzMarquee { to { transform: translateX(-50%); } }
        .swz-marquee-item { padding: 0 48px; }
        .swz-marquee-sep { opacity: .3; }

        /* HEADER */
        .swz-header { position: sticky; top: 0; z-index: 50; background: rgba(255,255,255,.9); backdrop-filter: blur(14px); border-bottom: 1px solid rgba(229,231,235,.6); }
        .swz-header-inner { max-width: 1280px; margin: 0 auto; padding: 0 24px; height: 64px; display: flex; align-items: center; justify-content: space-between; gap: 16px; }
        @media (min-width: 1024px) { .swz-header-inner { padding: 0 32px; height: 68px; } }
        .swz-logo { display: inline-flex; align-items: center; text-decoration: none; }
        .swz-logo img { height: 58px; width: auto; display: block; }
        .swz-logo-text { font-family: 'Playfair Display', serif; font-weight: 800; font-size: 22px; color: var(--swz-black); font-style: italic; text-decoration: none; }
        .swz-desk-nav { display: none; align-items: center; gap: 28px; }
        @media (min-width: 1024px) { .swz-desk-nav { display: flex; } }
        .swz-nav-link { font-size: 12px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; color: var(--swz-gray); text-decoration: none; position: relative; transition: color .25s; white-space: nowrap; padding-bottom: 2px; }
        .swz-nav-link::after { content: ''; position: absolute; bottom: -4px; left: 0; width: 0; height: 1.5px; background: var(--swz-black); transition: width .3s; }
        .swz-nav-link:hover { color: var(--swz-black); }
        .swz-nav-link:hover::after { width: 100%; }
        .swz-nav-link--sale { color: var(--swz-red); }
        .swz-header-right { display: flex; align-items: center; gap: 4px; }
        .swz-icon-btn { background: none; border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; transition: background .2s; position: relative; }
        .swz-icon-btn:hover { background: #f2f2f2; }
        .swz-cart-badge { position: absolute; top: -2px; right: -2px; background: var(--swz-black); color: #fff; font-size: 9px; font-weight: 700; width: 17px; height: 17px; border-radius: 50%; display: flex; align-items: center; justify-content: center; }

        /* BREADCRUMB */
        .swz-breadcrumb-bar { border-bottom: 1px solid var(--swz-border); background: #fff; }
        .swz-breadcrumb-inner { max-width: 1280px; margin: 0 auto; padding: 0 24px; height: 44px; display: flex; align-items: center; }
        @media (min-width: 1024px) { .swz-breadcrumb-inner { padding: 0 32px; } }
        .swz-breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 11px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; color: var(--swz-lgray); }
        .swz-breadcrumb a { color: var(--swz-lgray); text-decoration: none; transition: color .2s; }
        .swz-breadcrumb a:hover { color: var(--swz-black); }
        .swz-breadcrumb span { color: var(--swz-black); }

        /* PAGE HERO */
        .swz-page-hero { background: var(--swz-black); padding: 56px 24px; text-align: center; }
        @media (min-width: 1024px) { .swz-page-hero { padding: 72px 32px; } }
        .swz-page-hero-eyebrow { font-size: 10px; font-weight: 700; letter-spacing: .45em; text-transform: uppercase; color: rgba(255,255,255,.4); margin-bottom: 14px; display: block; }
        .swz-page-hero-title { font-family: 'Playfair Display', serif; font-weight: 900; font-size: clamp(38px, 6vw, 72px); line-height: 1; letter-spacing: -.02em; color: #fff; font-style: italic; }

        /* MAIN LAYOUT */
        .swz-account-main { max-width: 1280px; margin: 0 auto; padding: 40px 24px 80px; display: grid; grid-template-columns: 1fr; gap: 28px; }
        @media (min-width: 1024px) { .swz-account-main { grid-template-columns: 280px 1fr; padding: 48px 32px 80px; gap: 40px; align-items: start; } }

        /* SIDEBAR */
        .swz-sidebar { background: #fff; border: 1px solid var(--swz-border); position: sticky; top: 88px; }
        .swz-sidebar-user { padding: 28px 24px; border-bottom: 1px solid var(--swz-border); display: flex; align-items: center; gap: 16px; }
        .swz-avatar { width: 56px; height: 56px; border-radius: 50%; background: var(--swz-black); display: flex; align-items: center; justify-content: center; color: #fff; font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 700; font-style: italic; flex-shrink: 0; }
        .swz-sidebar-name { font-family: 'Playfair Display', serif; font-weight: 700; font-size: 16px; font-style: italic; line-height: 1.2; }
        .swz-sidebar-email { font-size: 11px; font-weight: 400; color: var(--swz-gray); margin-top: 3px; }
        .swz-sidebar-nav { padding: 8px 0; }
        .swz-sidebar-nav-item { display: flex; align-items: center; gap: 14px; padding: 14px 24px; font-size: 12px; font-weight: 600; letter-spacing: .1em; text-transform: uppercase; color: var(--swz-gray); cursor: pointer; text-decoration: none; transition: all .2s; border-left: 2.5px solid transparent; }
        .swz-sidebar-nav-item:hover { color: var(--swz-black); background: var(--swz-off); }
        .swz-sidebar-nav-item.active { color: var(--swz-black); background: var(--swz-off); border-left-color: var(--swz-black); }
        .swz-sidebar-nav-item--red { color: var(--swz-red) !important; }
        .swz-sidebar-sep { height: 1px; background: var(--swz-border); margin: 8px 0; }

        /* PANELS */
        .swz-panel { background: #fff; border: 1px solid var(--swz-border); display: none; }
        .swz-panel.active { display: block; animation: swzFadeUp .35s ease both; }
        @keyframes swzFadeUp { from { opacity:0; transform:translateY(12px); } to { opacity:1; transform:none; } }
        .swz-panel-head { padding: 24px 28px; border-bottom: 1px solid var(--swz-border); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; }
        .swz-panel-title { font-family: 'Playfair Display', serif; font-weight: 800; font-size: 22px; font-style: italic; display: flex; align-items: center; gap: 12px; }
        .swz-panel-title-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--swz-accent); flex-shrink: 0; }
        .swz-panel-body { padding: 28px; }

        /* BUTTONS */
        .swz-btn-black { display: inline-flex; align-items: center; justify-content: center; gap: 8px; background: var(--swz-black); color: #fff; border: none; font-family: 'Manrope', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: .18em; text-transform: uppercase; padding: 13px 28px; cursor: pointer; transition: all .25s; }
        .swz-btn-black:hover { background: #333; }
        .swz-btn-outline { display: inline-flex; align-items: center; justify-content: center; gap: 8px; background: #fff; color: var(--swz-black); border: 1.5px solid var(--swz-border); font-family: 'Manrope', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: .18em; text-transform: uppercase; padding: 12px 24px; cursor: pointer; transition: all .25s; }
        .swz-btn-outline:hover { border-color: var(--swz-black); }
        .swz-btn-red { display: inline-flex; align-items: center; justify-content: center; gap: 8px; background: #fff; color: var(--swz-red); border: 1.5px solid var(--swz-red); font-family: 'Manrope', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: .18em; text-transform: uppercase; padding: 12px 24px; cursor: pointer; transition: all .25s; }
        .swz-btn-red:hover { background: var(--swz-red); color: #fff; }

        /* STATS STRIP */
        .swz-account-stats { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1px; background: var(--swz-border); margin-bottom: 0; }
        @media (min-width: 640px) { .swz-account-stats { grid-template-columns: repeat(4, 1fr); } }
        .swz-account-stat { background: #fff; padding: 20px 16px; text-align: center; }
        .swz-account-stat-num { font-family: 'Cormorant Garamond', serif; font-size: 36px; font-weight: 700; line-height: 1; font-style: italic; }
        .swz-account-stat-label { font-size: 9px; font-weight: 700; letter-spacing: .22em; text-transform: uppercase; color: var(--swz-gray); margin-top: 6px; }

        /* FORM */
        .swz-form-grid { display: grid; grid-template-columns: 1fr; gap: 18px; }
        .swz-form-grid-2 { grid-template-columns: 1fr 1fr; }
        @media (max-width: 600px) { .swz-form-grid-2 { grid-template-columns: 1fr; } }
        .swz-field { display: flex; flex-direction: column; gap: 6px; }
        .swz-field label { font-size: 10px; font-weight: 700; letter-spacing: .18em; text-transform: uppercase; color: var(--swz-black); }
        .swz-input { width: 100%; border: 1.5px solid var(--swz-border); padding: 13px 14px; font-family: 'Manrope', sans-serif; font-size: 14px; font-weight: 400; outline: none; background: #fff; color: var(--swz-black); transition: border-color .25s, box-shadow .25s; }
        .swz-input:focus { border-color: var(--swz-black); box-shadow: 0 0 0 3px rgba(17,17,17,.06); }
        .swz-input::placeholder { color: #bbb; }
        .swz-select-wrap { position: relative; }
        .swz-select-wrap::after { content:''; position:absolute; right:14px; top:50%; transform:translateY(-50%); width:0; height:0; border-left:5px solid transparent; border-right:5px solid transparent; border-top:6px solid var(--swz-gray); pointer-events:none; }
        .swz-select { appearance: none; padding-right: 36px; cursor: pointer; }
        .swz-form-section { margin-bottom: 32px; }
        .swz-form-section-title { font-size: 11px; font-weight: 700; letter-spacing: .2em; text-transform: uppercase; color: var(--swz-black); margin-bottom: 18px; padding-bottom: 10px; border-bottom: 1px solid var(--swz-border); }
        .swz-form-footer { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; padding-top: 24px; border-top: 1px solid var(--swz-border); margin-top: 8px; }
        .swz-form-success { display: none; font-size: 13px; font-weight: 600; color: var(--swz-green); align-items: center; gap: 6px; }
        .swz-form-success.show { display: flex; }

        /* ADDRESSES */
        .swz-address-grid { display: grid; grid-template-columns: 1fr; gap: 16px; }
        @media (min-width: 640px) { .swz-address-grid { grid-template-columns: repeat(2, 1fr); } }
        .swz-address-card { border: 1.5px solid var(--swz-border); padding: 20px; position: relative; transition: border-color .2s; }
        .swz-address-card.default { border-color: var(--swz-black); }
        .swz-address-default-badge { position: absolute; top: 12px; right: 12px; background: var(--swz-black); color: #fff; font-size: 9px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; padding: 3px 10px; }
        .swz-address-name { font-size: 14px; font-weight: 700; margin-bottom: 8px; }
        .swz-address-lines { font-size: 13px; font-weight: 300; color: var(--swz-gray); line-height: 1.7; }
        .swz-address-actions { display: flex; gap: 10px; margin-top: 14px; padding-top: 14px; border-top: 1px solid var(--swz-border); }
        .swz-address-action-btn { font-size: 11px; font-weight: 600; letter-spacing: .1em; text-transform: uppercase; background: none; border: none; cursor: pointer; color: var(--swz-gray); transition: color .2s; }
        .swz-address-action-btn:hover { color: var(--swz-black); }
        .swz-address-action-btn--red:hover { color: var(--swz-red); }
        .swz-add-address-card { border: 1.5px dashed var(--swz-border); padding: 20px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 12px; cursor: pointer; min-height: 160px; transition: all .25s; }
        .swz-add-address-card:hover { border-color: var(--swz-black); background: var(--swz-off); }
        .swz-add-address-icon { width: 44px; height: 44px; border-radius: 50%; border: 1.5px solid var(--swz-border); display: flex; align-items: center; justify-content: center; color: var(--swz-gray); }
        .swz-add-address-label { font-size: 11px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: var(--swz-gray); }

        /* QUICK LINKS */
        .swz-quick-links { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
        @media (min-width: 640px) { .swz-quick-links { grid-template-columns: repeat(3, 1fr); } }
        .swz-quick-link-card { border: 1px solid var(--swz-border); padding: 20px; display: flex; flex-direction: column; align-items: flex-start; gap: 10px; cursor: pointer; text-decoration: none; transition: all .25s; background: #fff; }
        .swz-quick-link-card:hover { border-color: var(--swz-black); transform: translateY(-2px); box-shadow: 0 6px 24px rgba(0,0,0,.08); }
        .swz-quick-link-icon { width: 40px; height: 40px; border-radius: 50%; background: var(--swz-black); display: flex; align-items: center; justify-content: center; }
        .swz-quick-link-label { font-size: 12px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; }
        .swz-quick-link-desc { font-size: 12px; font-weight: 300; color: var(--swz-gray); line-height: 1.5; }

        /* RECENT ORDERS MINI */
        .swz-recent-orders-list { display: flex; flex-direction: column; gap: 12px; }
        .swz-recent-order-item { display: flex; align-items: center; gap: 14px; padding: 14px; border: 1px solid var(--swz-border); }
        .swz-recent-order-img { width: 52px; height: 64px; object-fit: cover; flex-shrink: 0; }
        .swz-recent-order-info { flex: 1; min-width: 0; }
        .swz-recent-order-name { font-size: 13px; font-weight: 600; margin-bottom: 2px; }
        .swz-recent-order-meta { font-size: 11px; font-weight: 300; color: var(--swz-gray); }
        .swz-recent-order-price { font-size: 14px; font-weight: 700; }
        .swz-status-badge { display: inline-flex; align-items: center; gap: 5px; font-size: 9px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; padding: 3px 10px; }
        .swz-status-badge--delivered { background: #e8f5ef; color: var(--swz-green); }
        .swz-status-badge--shipped { background: #e8f0f5; color: #1a5a8a; }
        .swz-status-badge--processing { background: #f5f0e8; color: #8a5a1a; }

        /* PREFERENCES */
        .swz-pref-list { display: flex; flex-direction: column; gap: 0; }
        .swz-pref-item { display: flex; align-items: center; justify-content: space-between; padding: 18px 0; border-bottom: 1px solid var(--swz-border); gap: 16px; }
        .swz-pref-item:last-child { border-bottom: none; }
        .swz-pref-info h4 { font-size: 13px; font-weight: 700; margin-bottom: 3px; }
        .swz-pref-info p { font-size: 12px; font-weight: 300; color: var(--swz-gray); line-height: 1.5; }
        .swz-toggle { position: relative; width: 44px; height: 24px; flex-shrink: 0; }
        .swz-toggle input { opacity: 0; width: 0; height: 0; position: absolute; }
        .swz-toggle-slider { position: absolute; cursor: pointer; inset: 0; background: #ddd; transition: .3s; border-radius: 24px; }
        .swz-toggle-slider::before { position: absolute; content: ''; height: 18px; width: 18px; left: 3px; bottom: 3px; background: white; transition: .3s; border-radius: 50%; }
        .swz-toggle input:checked + .swz-toggle-slider { background: var(--swz-black); }
        .swz-toggle input:checked + .swz-toggle-slider::before { transform: translateX(20px); }

        /* MOBILE BOTTOM NAV */
        .swz-bottom-nav { display: none; position: fixed; bottom: 0; left: 0; right: 0; z-index: 9000; background: #fff; border-top: 1px solid #e8e8e8; height: 68px; padding: 0 4px; box-shadow: 0 -4px 24px rgba(0,0,0,.08); }
        @media (max-width: 767px) { .swz-bottom-nav { display: flex; align-items: stretch; } }
        .swz-bnav-item { flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 4px; background: none; border: none; cursor: pointer; text-decoration: none; color: var(--swz-gray); transition: color .2s; padding: 8px 4px; -webkit-tap-highlight-color: transparent; }
        .swz-bnav-item:hover, .swz-bnav-item.swz-bnav-active { color: var(--swz-black); }
        .swz-bnav-icon { width: 22px; height: 22px; flex-shrink: 0; }
        .swz-bnav-label { font-size: 9px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; line-height: 1; }
        .swz-bnav-icon-bg { background: var(--swz-black); border-radius: 50%; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 14px rgba(0,0,0,.25); }
        .swz-bnav-cart-wrap { position: relative; display: flex; align-items: center; justify-content: center; }
        .swz-bnav-badge { position: absolute; top: 8px; right: 12px; background: var(--swz-black); color: #fff; font-size: 8px; font-weight: 700; min-width: 15px; height: 15px; border-radius: 999px; display: flex; align-items: center; justify-content: center; padding: 0 3px; }

        /* HAMBURGER */
        .swz-hamburger { display: flex; }
        @media (min-width: 1280px) { .swz-hamburger { display: none; } }
        .swz-mobile-menu { position: fixed; inset: 0; background: #fff; z-index: 9997; transform: translateX(-100%); transition: transform .4s ease; display: flex; flex-direction: column; padding: 90px 32px 40px; }
        .swz-mobile-menu.swz-open { transform: none; }
        .swz-mobile-close { position: absolute; top: 20px; right: 20px; background: none; border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; }
        .swz-mobile-nav { display: flex; flex-direction: column; gap: 24px; }
        .swz-mobile-nav-link { font-family: 'Playfair Display', serif; font-weight: 800; font-size: 38px; color: var(--swz-black); text-decoration: none; line-height: 1.1; }
        .swz-mobile-nav-link--sale { color: var(--swz-red); }

        /* MODAL */
        .swz-modal-overlay { position: fixed; inset: 0; background: rgba(0,0,0,.55); backdrop-filter: blur(4px); z-index: 9996; opacity: 0; pointer-events: none; transition: opacity .3s; display: flex; align-items: center; justify-content: center; padding: 16px; }
        .swz-modal-overlay.open { opacity: 1; pointer-events: auto; }
        .swz-modal { background: #fff; max-width: 520px; width: 100%; padding: 40px; position: relative; transform: translateY(20px); transition: transform .35s; }
        .swz-modal-overlay.open .swz-modal { transform: none; }
        .swz-modal-close { position: absolute; top: 16px; right: 16px; background: none; border: none; cursor: pointer; color: var(--swz-gray); width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; border-radius: 50%; transition: background .2s; }
        .swz-modal-close:hover { background: #f3f3f3; }
        .swz-modal-title { font-family: 'Playfair Display', serif; font-weight: 800; font-size: 22px; font-style: italic; margin-bottom: 24px; }

        /* TOAST */
        .swz-toast { position: fixed; bottom: 90px; left: 50%; transform: translateX(-50%) translateY(20px); background: var(--swz-black); color: #fff; padding: 14px 28px; font-size: 12px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; z-index: 99999; opacity: 0; pointer-events: none; transition: all .35s; white-space: nowrap; display: flex; align-items: center; gap: 10px; }
        .swz-toast.show { opacity: 1; transform: translateX(-50%) translateY(0); }

        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #333; }
    </style>
</head>
<body>

<!-- ANNOUNCE BAR -->
<div class="swz-announce-bar">
    <div class="swz-marquee-track">
        <span class="swz-marquee-item">Free Shipping on Orders Over $150</span><span class="swz-marquee-sep">✦</span>
        <span class="swz-marquee-item">Winter Collection 2026 — Out Now</span><span class="swz-marquee-sep">✦</span>
        <span class="swz-marquee-item">Use Code SWIZER15 for 15% Off</span><span class="swz-marquee-sep">✦</span>
        <span class="swz-marquee-item">Free Returns Within 30 Days</span><span class="swz-marquee-sep">✦</span>
        <span class="swz-marquee-item">Free Shipping on Orders Over $150</span><span class="swz-marquee-sep">✦</span>
        <span class="swz-marquee-item">Winter Collection 2026 — Out Now</span><span class="swz-marquee-sep">✦</span>
        <span class="swz-marquee-item">Use Code SWIZER15 for 15% Off</span><span class="swz-marquee-sep">✦</span>
        <span class="swz-marquee-item">Free Returns Within 30 Days</span><span class="swz-marquee-sep">✦</span>
    </div>
</div>

<!-- HEADER -->
<header class="swz-header">
    <div class="swz-header-inner">
        <div style="display:flex;align-items:center;gap:32px">
            <a href="index.html" class="swz-logo-text">Swizer</a>
            <nav class="swz-desk-nav">
                <a href="#" class="swz-nav-link">Men</a>
                <a href="#" class="swz-nav-link">Women</a>
                <a href="#" class="swz-nav-link">Shop</a>
                <a href="#" class="swz-nav-link">New Arrivals</a>
                <a href="#" class="swz-nav-link">Accessories</a>
                <a href="#" class="swz-nav-link swz-nav-link--sale">Sale</a>
            </nav>
        </div>
        <div class="swz-header-right">
            <button class="swz-icon-btn" title="Wishlist" onclick="window.location.href='wishlist.html'">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
            </button>
            <button class="swz-icon-btn" title="Cart">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                <span class="swz-cart-badge">2</span>
            </button>
            <button class="swz-icon-btn swz-hamburger" id="swzMobileMenuBtn">
                <svg width="21" height="21" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16m-7 6h7"/></svg>
            </button>
        </div>
    </div>
</header>

<!-- MOBILE MENU -->
<div class="swz-mobile-menu" id="swzMobileMenu">
    <button class="swz-mobile-close" id="swzMobileCloseBtn">
        <svg width="23" height="23" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg>
    </button>
    <nav class="swz-mobile-nav">
        <a href="#" class="swz-mobile-nav-link">Men</a>
        <a href="#" class="swz-mobile-nav-link">Women</a>
        <a href="#" class="swz-mobile-nav-link">Shop</a>
        <a href="#" class="swz-mobile-nav-link">New Arrivals</a>
        <a href="#" class="swz-mobile-nav-link">Accessories</a>
        <a href="#" class="swz-mobile-nav-link swz-mobile-nav-link--sale">Sale</a>
    </nav>
</div>

<!-- BREADCRUMB -->
<div class="swz-breadcrumb-bar">
    <div class="swz-breadcrumb-inner">
        <nav class="swz-breadcrumb">
            <a href="index.html">Home</a>
            <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span>My Account</span>
        </nav>
    </div>
</div>

<!-- PAGE HERO -->
<div class="swz-page-hero">
    <span class="swz-page-hero-eyebrow">Welcome Back</span>
    <h1 class="swz-page-hero-title">My Account</h1>
</div>

<!-- MAIN -->
<div class="swz-account-main">

    <!-- SIDEBAR -->
    <aside class="swz-sidebar">
        <div class="swz-sidebar-user">
            <div class="swz-avatar">S</div>
            <div>
                <div class="swz-sidebar-name">Sarah Mitchell</div>
                <div class="swz-sidebar-email">sarah@example.com</div>
            </div>
        </div>
        <nav class="swz-sidebar-nav">
            <a class="swz-sidebar-nav-item active" onclick="swzSwitchPanel('overview', this)" href="#">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
                Overview
            </a>
            <a class="swz-sidebar-nav-item" onclick="swzSwitchPanel('orders', this)" href="#">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                My Orders
            </a>
            <a class="swz-sidebar-nav-item" onclick="swzSwitchPanel('wishlist-link', this)" href="wishlist.html">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                Wishlist
            </a>
            <a class="swz-sidebar-nav-item" onclick="swzSwitchPanel('profile', this)" href="#">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                Profile
            </a>
            <a class="swz-sidebar-nav-item" onclick="swzSwitchPanel('addresses', this)" href="#">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Addresses
            </a>
            <a class="swz-sidebar-nav-item" onclick="swzSwitchPanel('preferences', this)" href="#">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><circle cx="12" cy="12" r="3"/></svg>
                Preferences
            </a>
            <div class="swz-sidebar-sep"></div>
            <a class="swz-sidebar-nav-item swz-sidebar-nav-item--red" href="#">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                Sign Out
            </a>
        </nav>
    </aside>

    <!-- PANELS -->
    <div>

        <!-- OVERVIEW -->
        <div class="swz-panel active" id="panel-overview">
            <div class="swz-account-stats">
                <div class="swz-account-stat">
                    <div class="swz-account-stat-num" style="color:var(--swz-black)">12</div>
                    <div class="swz-account-stat-label">Total Orders</div>
                </div>
                <div class="swz-account-stat">
                    <div class="swz-account-stat-num" style="color:var(--swz-accent)">$1,847</div>
                    <div class="swz-account-stat-label">Total Spent</div>
                </div>
                <div class="swz-account-stat">
                    <div class="swz-account-stat-num" style="color:var(--swz-green)">8</div>
                    <div class="swz-account-stat-label">Wishlist Items</div>
                </div>
                <div class="swz-account-stat">
                    <div class="swz-account-stat-num" style="color:var(--swz-black)">Gold</div>
                    <div class="swz-account-stat-label">Member Tier</div>
                </div>
            </div>
            <div class="swz-panel-head">
                <div class="swz-panel-title"><div class="swz-panel-title-dot"></div>Account Overview</div>
            </div>
            <div class="swz-panel-body">
                <div class="swz-quick-links" style="margin-bottom:32px">
                    <a href="#" onclick="swzSwitchPanelById('orders')" class="swz-quick-link-card">
                        <div class="swz-quick-link-icon"><svg width="18" height="18" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg></div>
                        <span class="swz-quick-link-label">My Orders</span>
                        <span class="swz-quick-link-desc">Track & manage your purchases</span>
                    </a>
                    <a href="wishlist.html" class="swz-quick-link-card">
                        <div class="swz-quick-link-icon"><svg width="18" height="18" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg></div>
                        <span class="swz-quick-link-label">Wishlist</span>
                        <span class="swz-quick-link-desc">8 saved items waiting for you</span>
                    </a>
                    <a href="#" onclick="swzSwitchPanelById('addresses')" class="swz-quick-link-card">
                        <div class="swz-quick-link-icon"><svg width="18" height="18" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
                        <span class="swz-quick-link-label">Addresses</span>
                        <span class="swz-quick-link-desc">Manage delivery locations</span>
                    </a>
                </div>
                <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:18px;flex-wrap:wrap;gap:12px">
                    <h3 style="font-family:'Playfair Display',serif;font-size:18px;font-weight:700;font-style:italic">Recent Orders</h3>
                    <button class="swz-btn-outline" onclick="swzSwitchPanelById('orders')" style="font-size:10px;padding:9px 18px">View All</button>
                </div>
                <div class="swz-recent-orders-list">
                    <div class="swz-recent-order-item">
                        <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=200" class="swz-recent-order-img" alt="">
                        <div class="swz-recent-order-info">
                            <div class="swz-recent-order-name">Premium Parka · Size L</div>
                            <div class="swz-recent-order-meta">Order #SWZ-2026-00847 · Jan 18, 2026</div>
                            <div style="margin-top:6px"><span class="swz-status-badge swz-status-badge--delivered">✓ Delivered</span></div>
                        </div>
                        <div class="swz-recent-order-price">$129.00</div>
                    </div>
                    <div class="swz-recent-order-item">
                        <img src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?q=80&w=200" class="swz-recent-order-img" alt="">
                        <div class="swz-recent-order-info">
                            <div class="swz-recent-order-name">Cashmere Crewneck · Size M</div>
                            <div class="swz-recent-order-meta">Order #SWZ-2026-00791 · Jan 09, 2026</div>
                            <div style="margin-top:6px"><span class="swz-status-badge swz-status-badge--shipped">↗ In Transit</span></div>
                        </div>
                        <div class="swz-recent-order-price">$165.00</div>
                    </div>
                    <div class="swz-recent-order-item">
                        <img src="https://images.unsplash.com/photo-1548126032-079a0fb0099d?q=80&w=200" class="swz-recent-order-img" alt="">
                        <div class="swz-recent-order-info">
                            <div class="swz-recent-order-name">Classic Trench Coat · Size S</div>
                            <div class="swz-recent-order-meta">Order #SWZ-2025-09922 · Dec 28, 2025</div>
                            <div style="margin-top:6px"><span class="swz-status-badge swz-status-badge--delivered">✓ Delivered</span></div>
                        </div>
                        <div class="swz-recent-order-price">$245.00</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ORDERS -->
        <div class="swz-panel" id="panel-orders">
            <div class="swz-panel-head">
                <div class="swz-panel-title"><div class="swz-panel-title-dot"></div>My Orders</div>
                <a href="orders.html" class="swz-btn-black" style="font-size:10px;padding:10px 20px">Full Orders Page</a>
            </div>
            <div class="swz-panel-body">
                <div class="swz-recent-orders-list">
                    <div class="swz-recent-order-item">
                        <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=200" class="swz-recent-order-img" alt="">
                        <div class="swz-recent-order-info">
                            <div class="swz-recent-order-name">Premium Parka · Size L · Deep Black</div>
                            <div class="swz-recent-order-meta">Order #SWZ-2026-00847 · Jan 18, 2026</div>
                            <div style="margin-top:6px;display:flex;gap:8px;flex-wrap:wrap">
                                <span class="swz-status-badge swz-status-badge--delivered">✓ Delivered</span>
                                <button style="font-size:10px;font-weight:600;letter-spacing:.1em;text-transform:uppercase;background:none;border:none;cursor:pointer;color:var(--swz-gray);text-decoration:underline" onclick="swzShowToast('Tracking opened in new tab')">Track</button>
                                <button style="font-size:10px;font-weight:600;letter-spacing:.1em;text-transform:uppercase;background:none;border:none;cursor:pointer;color:var(--swz-gray);text-decoration:underline" onclick="swzShowToast('Return initiated')">Return</button>
                            </div>
                        </div>
                        <div style="text-align:right">
                            <div class="swz-recent-order-price">$129.00</div>
                            <div style="font-size:10px;color:var(--swz-lgray);margin-top:4px">Qty: 1</div>
                        </div>
                    </div>
                    <div class="swz-recent-order-item">
                        <img src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?q=80&w=200" class="swz-recent-order-img" alt="">
                        <div class="swz-recent-order-info">
                            <div class="swz-recent-order-name">Cashmere Crewneck · Size M · Ivory</div>
                            <div class="swz-recent-order-meta">Order #SWZ-2026-00791 · Jan 09, 2026</div>
                            <div style="margin-top:6px;display:flex;gap:8px">
                                <span class="swz-status-badge swz-status-badge--shipped">↗ In Transit</span>
                                <button style="font-size:10px;font-weight:600;letter-spacing:.1em;text-transform:uppercase;background:none;border:none;cursor:pointer;color:var(--swz-gray);text-decoration:underline" onclick="swzShowToast('Tracking opened')">Track</button>
                            </div>
                        </div>
                        <div style="text-align:right">
                            <div class="swz-recent-order-price">$165.00</div>
                            <div style="font-size:10px;color:var(--swz-lgray);margin-top:4px">Qty: 1</div>
                        </div>
                    </div>
                    <div class="swz-recent-order-item">
                        <img src="https://images.unsplash.com/photo-1548126032-079a0fb0099d?q=80&w=200" class="swz-recent-order-img" alt="">
                        <div class="swz-recent-order-info">
                            <div class="swz-recent-order-name">Classic Trench Coat · Size S · Camel</div>
                            <div class="swz-recent-order-meta">Order #SWZ-2025-09922 · Dec 28, 2025</div>
                            <div style="margin-top:6px;display:flex;gap:8px">
                                <span class="swz-status-badge swz-status-badge--delivered">✓ Delivered</span>
                                <button style="font-size:10px;font-weight:600;letter-spacing:.1em;text-transform:uppercase;background:none;border:none;cursor:pointer;color:var(--swz-gray);text-decoration:underline" onclick="swzShowToast('Return window closed')">Return</button>
                            </div>
                        </div>
                        <div style="text-align:right">
                            <div class="swz-recent-order-price">$245.00</div>
                            <div style="font-size:10px;color:var(--swz-lgray);margin-top:4px">Qty: 1</div>
                        </div>
                    </div>
                    <div class="swz-recent-order-item">
                        <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=200" class="swz-recent-order-img" alt="">
                        <div class="swz-recent-order-info">
                            <div class="swz-recent-order-name">Heritage Denim · Size 32 · Raw Indigo</div>
                            <div class="swz-recent-order-meta">Order #SWZ-2025-09211 · Dec 10, 2025</div>
                            <div style="margin-top:6px"><span class="swz-status-badge swz-status-badge--delivered">✓ Delivered</span></div>
                        </div>
                        <div style="text-align:right">
                            <div class="swz-recent-order-price">$135.00</div>
                            <div style="font-size:10px;color:var(--swz-lgray);margin-top:4px">Qty: 2</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PROFILE -->
        <div class="swz-panel" id="panel-profile">
            <div class="swz-panel-head">
                <div class="swz-panel-title"><div class="swz-panel-title-dot"></div>Profile</div>
                <div class="swz-form-success" id="profileSuccess">
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>
                    Profile saved successfully
                </div>
            </div>
            <div class="swz-panel-body">
                <div class="swz-form-section">
                    <div class="swz-form-section-title">Personal Information</div>
                    <div class="swz-form-grid">
                        <div class="swz-form-grid swz-form-grid-2">
                            <div class="swz-field">
                                <label>First Name</label>
                                <input type="text" class="swz-input" value="Sarah">
                            </div>
                            <div class="swz-field">
                                <label>Last Name</label>
                                <input type="text" class="swz-input" value="Mitchell">
                            </div>
                        </div>
                        <div class="swz-field">
                            <label>Email Address</label>
                            <input type="email" class="swz-input" value="sarah@example.com">
                        </div>
                        <div class="swz-field">
                            <label>Phone Number</label>
                            <input type="tel" class="swz-input" value="+1 (555) 012-3456">
                        </div>
                        <div class="swz-field">
                            <label>Date of Birth <span style="font-size:10px;font-weight:300;text-transform:none;letter-spacing:0;color:var(--swz-lgray)">(optional, for birthday offers)</span></label>
                            <input type="date" class="swz-input" value="1992-03-14">
                        </div>
                        <div class="swz-field">
                            <label>Gender <span style="font-size:10px;font-weight:300;text-transform:none;letter-spacing:0;color:var(--swz-lgray)">(optional)</span></label>
                            <div class="swz-select-wrap">
                                <select class="swz-input swz-select">
                                    <option>Prefer not to say</option>
                                    <option selected>Female</option>
                                    <option>Male</option>
                                    <option>Non-binary</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swz-form-section">
                    <div class="swz-form-section-title">Change Password</div>
                    <div class="swz-form-grid">
                        <div class="swz-field">
                            <label>Current Password</label>
                            <input type="password" class="swz-input" placeholder="••••••••">
                        </div>
                        <div class="swz-form-grid swz-form-grid-2">
                            <div class="swz-field">
                                <label>New Password</label>
                                <input type="password" class="swz-input" placeholder="••••••••">
                            </div>
                            <div class="swz-field">
                                <label>Confirm Password</label>
                                <input type="password" class="swz-input" placeholder="••••••••">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swz-form-footer">
                    <button class="swz-btn-red" onclick="swzShowToast('Account deleted — just kidding!')">Delete Account</button>
                    <button class="swz-btn-black" onclick="swzShowProfileSuccess()">Save Changes</button>
                </div>
            </div>
        </div>

        <!-- ADDRESSES -->
        <div class="swz-panel" id="panel-addresses">
            <div class="swz-panel-head">
                <div class="swz-panel-title"><div class="swz-panel-title-dot"></div>Addresses</div>
                <button class="swz-btn-black" onclick="document.getElementById('swzAddressModal').classList.add('open')" style="font-size:10px;padding:10px 20px">+ Add New</button>
            </div>
            <div class="swz-panel-body">
                <div class="swz-address-grid">
                    <div class="swz-address-card default">
                        <span class="swz-address-default-badge">Default</span>
                        <div class="swz-address-name">Sarah Mitchell</div>
                        <div class="swz-address-lines">
                            123 Oak Street, Apt 4B<br>
                            New York, NY 10001<br>
                            United States<br>
                            +1 (555) 012-3456
                        </div>
                        <div class="swz-address-actions">
                            <button class="swz-address-action-btn" onclick="document.getElementById('swzAddressModal').classList.add('open')">Edit</button>
                            <span style="color:var(--swz-border)">|</span>
                            <button class="swz-address-action-btn" onclick="swzShowToast('Already set as default')">Set Default</button>
                        </div>
                    </div>
                    <div class="swz-address-card">
                        <div class="swz-address-name">Sarah Mitchell</div>
                        <div class="swz-address-lines">
                            45 Broadway Avenue<br>
                            Brooklyn, NY 11201<br>
                            United States<br>
                            +1 (555) 012-3456
                        </div>
                        <div class="swz-address-actions">
                            <button class="swz-address-action-btn" onclick="document.getElementById('swzAddressModal').classList.add('open')">Edit</button>
                            <span style="color:var(--swz-border)">|</span>
                            <button class="swz-address-action-btn" onclick="swzShowToast('Set as default address')">Set Default</button>
                            <span style="color:var(--swz-border)">|</span>
                            <button class="swz-address-action-btn swz-address-action-btn--red" onclick="swzShowToast('Address removed')">Remove</button>
                        </div>
                    </div>
                    <div class="swz-add-address-card" onclick="document.getElementById('swzAddressModal').classList.add('open')">
                        <div class="swz-add-address-icon">
                            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"/></svg>
                        </div>
                        <span class="swz-add-address-label">Add New Address</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- PREFERENCES -->
        <div class="swz-panel" id="panel-preferences">
            <div class="swz-panel-head">
                <div class="swz-panel-title"><div class="swz-panel-title-dot"></div>Preferences</div>
            </div>
            <div class="swz-panel-body">
                <div style="margin-bottom:28px">
                    <div class="swz-form-section-title">Communication</div>
                    <div class="swz-pref-list">
                        <div class="swz-pref-item">
                            <div class="swz-pref-info">
                                <h4>Email Newsletter</h4>
                                <p>New arrivals, exclusive offers, and styling tips</p>
                            </div>
                            <label class="swz-toggle"><input type="checkbox" checked><span class="swz-toggle-slider"></span></label>
                        </div>
                        <div class="swz-pref-item">
                            <div class="swz-pref-info">
                                <h4>Order Updates</h4>
                                <p>Shipping confirmations and delivery notifications</p>
                            </div>
                            <label class="swz-toggle"><input type="checkbox" checked><span class="swz-toggle-slider"></span></label>
                        </div>
                        <div class="swz-pref-item">
                            <div class="swz-pref-info">
                                <h4>SMS Notifications</h4>
                                <p>Text updates for orders and exclusive SMS-only deals</p>
                            </div>
                            <label class="swz-toggle"><input type="checkbox"><span class="swz-toggle-slider"></span></label>
                        </div>
                        <div class="swz-pref-item">
                            <div class="swz-pref-info">
                                <h4>Wishlist Restocks</h4>
                                <p>Alert when a wishlisted item comes back in stock</p>
                            </div>
                            <label class="swz-toggle"><input type="checkbox" checked><span class="swz-toggle-slider"></span></label>
                        </div>
                        <div class="swz-pref-item">
                            <div class="swz-pref-info">
                                <h4>Price Drop Alerts</h4>
                                <p>Notify me when items I've viewed go on sale</p>
                            </div>
                            <label class="swz-toggle"><input type="checkbox"><span class="swz-toggle-slider"></span></label>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="swz-form-section-title">Shopping Preferences</div>
                    <div class="swz-form-grid">
                        <div class="swz-form-grid swz-form-grid-2">
                            <div class="swz-field">
                                <label>Preferred Currency</label>
                                <div class="swz-select-wrap">
                                    <select class="swz-input swz-select">
                                        <option selected>USD ($)</option>
                                        <option>GBP (£)</option>
                                        <option>EUR (€)</option>
                                        <option>CAD (C$)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="swz-field">
                                <label>Size (Tops)</label>
                                <div class="swz-select-wrap">
                                    <select class="swz-input swz-select">
                                        <option>XS</option>
                                        <option selected>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swz-form-footer">
                    <span></span>
                    <button class="swz-btn-black" onclick="swzShowToast('Preferences saved!')">Save Preferences</button>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- ADDRESS MODAL -->
<div class="swz-modal-overlay" id="swzAddressModal">
    <div class="swz-modal">
        <button class="swz-modal-close" onclick="document.getElementById('swzAddressModal').classList.remove('open')">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
        <div class="swz-modal-title">Add / Edit Address</div>
        <div class="swz-form-grid">
            <div class="swz-form-grid swz-form-grid-2">
                <div class="swz-field"><label>First Name</label><input type="text" class="swz-input" placeholder="Jane"></div>
                <div class="swz-field"><label>Last Name</label><input type="text" class="swz-input" placeholder="Doe"></div>
            </div>
            <div class="swz-field"><label>Address Line 1</label><input type="text" class="swz-input" placeholder="123 Main Street"></div>
            <div class="swz-field"><label>Address Line 2</label><input type="text" class="swz-input" placeholder="Apt, suite, unit…"></div>
            <div class="swz-form-grid swz-form-grid-2">
                <div class="swz-field"><label>City</label><input type="text" class="swz-input" placeholder="New York"></div>
                <div class="swz-field"><label>ZIP Code</label><input type="text" class="swz-input" placeholder="10001"></div>
            </div>
            <div class="swz-field"><label>Country</label>
                <div class="swz-select-wrap">
                    <select class="swz-input swz-select"><option>United States</option><option>United Kingdom</option><option>Canada</option></select>
                </div>
            </div>
        </div>
        <div style="display:flex;justify-content:flex-end;gap:10px;margin-top:24px">
            <button class="swz-btn-outline" onclick="document.getElementById('swzAddressModal').classList.remove('open')">Cancel</button>
            <button class="swz-btn-black" onclick="document.getElementById('swzAddressModal').classList.remove('open');swzShowToast('Address saved successfully')">Save Address</button>
        </div>
    </div>
</div>

<!-- MOBILE BOTTOM NAV -->
<nav class="swz-bottom-nav">
    <a href="index.html" class="swz-bnav-item">
        <svg class="swz-bnav-icon" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
        <span class="swz-bnav-label">Home</span>
    </a>
    <a href="#" class="swz-bnav-item">
        <svg class="swz-bnav-icon" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        <span class="swz-bnav-label">Search</span>
    </a>
    <a href="#" class="swz-bnav-item">
        <div class="swz-bnav-cart-wrap">
            <div class="swz-bnav-icon-bg">
                <svg width="20" height="20" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
            </div>
            <span class="swz-bnav-badge">2</span>
        </div>
    </a>
    <a href="wishlist.html" class="swz-bnav-item">
        <svg class="swz-bnav-icon" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        <span class="swz-bnav-label">Wishlist</span>
    </a>
    <a href="account.html" class="swz-bnav-item swz-bnav-active">
        <svg class="swz-bnav-icon" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        <span class="swz-bnav-label">Account</span>
    </a>
</nav>

<!-- TOAST -->
<div class="swz-toast" id="swzToast">
    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
    <span id="swzToastMsg">Done!</span>
</div>

<script>
    // Panel switching
    function swzSwitchPanel(id, el) {
        if (id === 'wishlist-link') return;
        event.preventDefault();
        document.querySelectorAll('.swz-panel').forEach(p => p.classList.remove('active'));
        document.querySelectorAll('.swz-sidebar-nav-item').forEach(n => n.classList.remove('active'));
        const panel = document.getElementById('panel-' + id);
        if (panel) panel.classList.add('active');
        if (el) el.classList.add('active');
    }
    function swzSwitchPanelById(id) {
        event.preventDefault();
        document.querySelectorAll('.swz-panel').forEach(p => p.classList.remove('active'));
        document.querySelectorAll('.swz-sidebar-nav-item').forEach(n => n.classList.remove('active'));
        const panel = document.getElementById('panel-' + id);
        if (panel) panel.classList.add('active');
    }

    // Mobile menu
    document.getElementById('swzMobileMenuBtn').onclick = () => { document.getElementById('swzMobileMenu').classList.add('swz-open'); document.body.style.overflow = 'hidden'; };
    document.getElementById('swzMobileCloseBtn').onclick = () => { document.getElementById('swzMobileMenu').classList.remove('swz-open'); document.body.style.overflow = ''; };

    // Profile save success
    function swzShowProfileSuccess() {
        document.getElementById('profileSuccess').classList.add('show');
        swzShowToast('Profile updated successfully!');
        setTimeout(() => document.getElementById('profileSuccess').classList.remove('show'), 3000);
    }

    // Toast
    let swzToastTimer;
    function swzShowToast(msg) {
        const toast = document.getElementById('swzToast');
        document.getElementById('swzToastMsg').textContent = msg;
        toast.classList.add('show');
        clearTimeout(swzToastTimer);
        swzToastTimer = setTimeout(() => toast.classList.remove('show'), 2800);
    }

    // Close modal on overlay click
    document.getElementById('swzAddressModal').addEventListener('click', function(e) {
        if (e.target === this) this.classList.remove('open');
    });
</script>
</body>
</html>