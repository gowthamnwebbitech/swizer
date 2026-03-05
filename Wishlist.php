<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist – Swizer Premium Apparel</title>
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

        /* MAIN */
        .swz-wishlist-main { max-width: 1280px; margin: 0 auto; padding: 40px 24px 80px; }
        @media (min-width: 1024px) { .swz-wishlist-main { padding: 48px 32px 80px; } }

        /* HEADER ROW */
        .swz-wl-header { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px; margin-bottom: 32px; }
        .swz-wl-count { font-size: 13px; font-weight: 300; color: var(--swz-gray); }
        .swz-wl-count strong { font-weight: 700; color: var(--swz-black); }
        .swz-wl-actions { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
        .swz-btn-outline { display: inline-flex; align-items: center; justify-content: center; gap: 7px; background: #fff; color: var(--swz-black); border: 1.5px solid var(--swz-border); font-family: 'Manrope', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; padding: 11px 20px; cursor: pointer; transition: all .25s; }
        .swz-btn-outline:hover { border-color: var(--swz-black); }
        .swz-btn-black { display: inline-flex; align-items: center; justify-content: center; gap: 7px; background: var(--swz-black); color: #fff; border: none; font-family: 'Manrope', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; padding: 11px 20px; cursor: pointer; transition: all .25s; }
        .swz-btn-black:hover { background: #333; }

        /* SORT / FILTER BAR */
        .swz-wl-toolbar { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; padding: 16px 0; border-top: 1px solid var(--swz-border); border-bottom: 1px solid var(--swz-border); margin-bottom: 32px; background: #fff; padding: 14px 20px; }
        .swz-filter-tabs { display: flex; gap: 0; overflow-x: auto; scrollbar-width: none; }
        .swz-filter-tabs::-webkit-scrollbar { display: none; }
        .swz-filter-tab { padding: 8px 18px; font-size: 11px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; background: none; border: none; border-bottom: 2px solid transparent; cursor: pointer; color: var(--swz-gray); white-space: nowrap; font-family: 'Manrope', sans-serif; transition: all .2s; }
        .swz-filter-tab.active { color: var(--swz-black); border-bottom-color: var(--swz-black); }
        .swz-sort-wrap { display: flex; align-items: center; gap: 8px; }
        .swz-sort-label { font-size: 11px; font-weight: 600; letter-spacing: .1em; text-transform: uppercase; color: var(--swz-gray); }
        .swz-sort-select { border: 1.5px solid var(--swz-border); padding: 8px 30px 8px 12px; font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 600; outline: none; background: #fff; cursor: pointer; appearance: none; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23767676' stroke-width='2' viewBox='0 0 24 24'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 8px center; }

        /* GRID VIEW TOGGLE */
        .swz-view-toggle { display: flex; gap: 4px; }
        .swz-view-btn { width: 34px; height: 34px; border: 1.5px solid var(--swz-border); background: #fff; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all .2s; color: var(--swz-gray); }
        .swz-view-btn.active { background: var(--swz-black); border-color: var(--swz-black); color: #fff; }

        /* PRODUCT GRID */
        .swz-wishlist-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; }
        @media (min-width: 640px) { .swz-wishlist-grid { grid-template-columns: repeat(3, 1fr); } }
        @media (min-width: 1024px) { .swz-wishlist-grid { grid-template-columns: repeat(4, 1fr); gap: 24px; } }
        .swz-wishlist-grid.list-view { grid-template-columns: 1fr; }

        /* PRODUCT CARD */
        .swz-prod-card { position: relative; background: #fff; border: 1px solid transparent; transition: border-color .25s, box-shadow .25s; }
        .swz-prod-card:hover { border-color: var(--swz-black); box-shadow: 0 8px 32px rgba(0,0,0,.08); }
        .swz-card-img-wrap { position: relative; overflow: hidden; aspect-ratio: 3/4; background: var(--swz-off); }
        .swz-card-img-wrap img { width:100%; height:100%; object-fit:cover; display:block; transition: transform .9s cubic-bezier(.165,.84,.44,1); }
        .swz-prod-card:hover .swz-card-img-wrap img { transform: scale(1.07); }
        .swz-card-badge { position: absolute; top: 10px; left: 10px; z-index: 6; font-size: 9px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #fff; padding: 4px 10px; }
        .swz-remove-wish { position: absolute; top: 10px; right: 10px; z-index: 6; width: 36px; height: 36px; border-radius: 50%; background: rgba(255,255,255,.92); border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all .2s; color: var(--swz-red); box-shadow: 0 2px 10px rgba(0,0,0,.1); }
        .swz-remove-wish:hover { background: var(--swz-red); color: #fff; }
        .swz-remove-wish svg { fill: var(--swz-red); }
        .swz-remove-wish:hover svg { fill: #fff; }
        .swz-quick-add { position: absolute; bottom: 0; left: 0; right: 0; background: rgba(255,255,255,.96); backdrop-filter: blur(8px); padding: 12px; transform: translateY(100%); transition: transform .32s cubic-bezier(.165,.84,.44,1); z-index: 5; }
        .swz-prod-card:hover .swz-quick-add { transform: none; }
        .swz-qa-label { font-size: 10px; font-weight: 600; letter-spacing: .18em; text-transform: uppercase; color: var(--swz-gray); text-align: center; margin-bottom: 6px; }
        .swz-size-row { display: flex; justify-content: center; gap: 6px; }
        .swz-size-btn { height: 32px; min-width: 32px; padding: 0 6px; border: 1.5px solid #ddd; background: #fff; font-family: 'Manrope', sans-serif; font-size: 11px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all .2s; }
        .swz-size-btn:hover { background: var(--swz-black); color: #fff; border-color: var(--swz-black); }
        .swz-add-btn { width: 100%; margin-top: 8px; background: var(--swz-black); color: #fff; border: none; font-family: 'Manrope', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; padding: 10px; cursor: pointer; transition: background .2s; }
        .swz-add-btn:hover { background: #333; }
        .swz-card-info { padding: 12px 10px 10px; }
        .swz-card-cat { font-size: 10px; font-weight: 600; letter-spacing: .2em; text-transform: uppercase; color: var(--swz-lgray); margin-bottom: 3px; }
        .swz-card-name { font-size: 14px; font-weight: 600; margin-bottom: 5px; }
        .swz-card-rating { display: flex; align-items: center; gap: 4px; margin-bottom: 5px; }
        .swz-stars-sm { color: var(--swz-accent); font-size: 11px; }
        .swz-rating-count { font-size: 11px; color: var(--swz-lgray); }
        .swz-card-price { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; }
        .swz-price-now { font-size: 15px; font-weight: 700; }
        .swz-price-was { font-size: 13px; font-weight: 300; color: var(--swz-lgray); text-decoration: line-through; }
        .swz-price-off { font-size: 10px; font-weight: 700; color: var(--swz-red); }
        .swz-stock-low { font-size: 10px; font-weight: 700; color: var(--swz-red); margin-top: 4px; }
        .swz-stock-ok { font-size: 10px; font-weight: 600; color: var(--swz-green); margin-top: 4px; }

        /* LIST VIEW CARD */
        .swz-wishlist-grid.list-view .swz-prod-card { display: flex; gap: 0; }
        .swz-wishlist-grid.list-view .swz-card-img-wrap { aspect-ratio: auto; width: 120px; height: 150px; flex-shrink: 0; }
        @media (min-width: 640px) { .swz-wishlist-grid.list-view .swz-card-img-wrap { width: 160px; height: 200px; } }
        .swz-wishlist-grid.list-view .swz-card-info { flex: 1; padding: 16px 20px; display: flex; flex-direction: column; gap: 6px; }
        .swz-wishlist-grid.list-view .swz-quick-add { display: none; }
        .swz-wishlist-grid.list-view .swz-prod-card:hover .swz-card-img-wrap img { transform: scale(1.04); }
        .swz-wishlist-grid.list-view .swz-list-actions { display: flex; gap: 8px; margin-top: 8px; flex-wrap: wrap; }
        .swz-list-actions { display: none; }

        /* EMPTY STATE */
        .swz-empty-state { text-align: center; padding: 80px 24px; display: none; }
        .swz-empty-state.show { display: block; }
        .swz-empty-icon { width: 80px; height: 80px; border-radius: 50%; border: 1.5px solid var(--swz-border); display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; }
        .swz-empty-title { font-family: 'Cormorant Garamond', serif; font-weight: 700; font-size: 36px; font-style: italic; margin-bottom: 10px; color: var(--swz-black); }
        .swz-empty-sub { font-size: 14px; font-weight: 300; color: var(--swz-gray); margin-bottom: 28px; line-height: 1.7; }

        /* PRICE ALERT BANNER */
        .swz-alert-banner { background: #fff8e8; border: 1px solid #e8d888; padding: 14px 20px; margin-bottom: 24px; display: flex; align-items: center; justify-content: space-between; gap: 12px; flex-wrap: wrap; }
        .swz-alert-banner-text { font-size: 13px; font-weight: 500; }
        .swz-alert-banner-text strong { font-weight: 700; color: #8a5a00; }

        /* SHARE MODAL */
        .swz-modal-overlay { position: fixed; inset: 0; background: rgba(0,0,0,.55); backdrop-filter: blur(4px); z-index: 9996; opacity: 0; pointer-events: none; transition: opacity .3s; display: flex; align-items: center; justify-content: center; padding: 16px; }
        .swz-modal-overlay.open { opacity: 1; pointer-events: auto; }
        .swz-modal { background: #fff; max-width: 440px; width: 100%; padding: 40px; position: relative; transform: translateY(20px); transition: transform .35s; }
        .swz-modal-overlay.open .swz-modal { transform: none; }
        .swz-modal-close { position: absolute; top: 16px; right: 16px; background: none; border: none; cursor: pointer; color: var(--swz-gray); width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; border-radius: 50%; transition: background .2s; }
        .swz-modal-close:hover { background: #f3f3f3; }
        .swz-modal-title { font-family: 'Playfair Display', serif; font-weight: 800; font-size: 22px; font-style: italic; margin-bottom: 6px; }
        .swz-modal-sub { font-size: 13px; font-weight: 300; color: var(--swz-gray); margin-bottom: 24px; }
        .swz-share-row { display: flex; gap: 10px; }
        .swz-share-input { flex: 1; border: 1.5px solid var(--swz-border); padding: 12px 14px; font-family: 'Manrope', sans-serif; font-size: 13px; outline: none; color: var(--swz-gray); }
        .swz-share-btns { display: flex; gap: 10px; margin-top: 16px; }
        .swz-share-btn { flex: 1; padding: 12px; border: 1.5px solid var(--swz-border); background: #fff; font-family: 'Manrope', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 6px; transition: all .2s; }
        .swz-share-btn:hover { border-color: var(--swz-black); }

        /* CART DRAWER */
        .swz-cart-overlay { position: fixed; inset: 0; background: rgba(0,0,0,.52); backdrop-filter: blur(4px); opacity: 0; pointer-events: none; transition: opacity .35s; z-index: 9998; }
        .swz-cart-overlay.open { opacity: 1; pointer-events: auto; }
        .swz-cart-drawer { position: fixed; top: 0; right: 0; bottom: 0; width: 460px; max-width: 100vw; background: #fff; display: flex; flex-direction: column; transform: translateX(100%); transition: transform .4s cubic-bezier(.165,.84,.44,1); z-index: 9999; box-shadow: -16px 0 60px rgba(0,0,0,.14); }
        @media (max-width: 767px) { .swz-cart-drawer { width: 100vw; } }
        .swz-cart-drawer.open { transform: none; }
        .swz-cart-head { padding: 20px 24px; display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #f0f0f0; flex-shrink: 0; }
        .swz-cart-title-text { font-family: 'Playfair Display', serif; font-weight: 700; font-size: 20px; font-style: italic; }
        .swz-cart-close-btn { width: 36px; height: 36px; border: none; background: none; cursor: pointer; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: background .2s; }
        .swz-cart-close-btn:hover { background: #f3f3f3; }
        .swz-cart-body { flex: 1; overflow-y: auto; padding: 24px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; }
        .swz-cart-footer { flex-shrink: 0; border-top: 1px solid #f0f0f0; padding: 20px 24px; }
        .swz-cart-checkout { width: 100%; padding: 16px; background: var(--swz-black); color: #fff; border: none; font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 700; letter-spacing: .2em; text-transform: uppercase; cursor: pointer; }

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

        /* TOAST */
        .swz-toast { position: fixed; bottom: 90px; left: 50%; transform: translateX(-50%) translateY(20px); background: var(--swz-black); color: #fff; padding: 14px 28px; font-size: 12px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; z-index: 99999; opacity: 0; pointer-events: none; transition: all .35s; white-space: nowrap; display: flex; align-items: center; gap: 10px; }
        .swz-toast.show { opacity: 1; transform: translateX(-50%) translateY(0); }

        @keyframes swzFadeUp { from { opacity:0; transform:translateY(12px); } to { opacity:1; transform:none; } }
        .swz-prod-card { animation: swzFadeUp .4s ease both; }

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
            <button class="swz-icon-btn" title="Wishlist" style="color:var(--swz-red)">
                <svg width="20" height="20" fill="currentColor" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
            </button>
            <button class="swz-icon-btn" title="Cart" id="swzCartBtn">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                <span class="swz-cart-badge" id="swzCartCount">2</span>
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
            <span>Wishlist</span>
        </nav>
    </div>
</div>

<!-- PAGE HERO -->
<div class="swz-page-hero">
    <span class="swz-page-hero-eyebrow">Saved Items</span>
    <h1 class="swz-page-hero-title">My Wishlist</h1>
</div>

<!-- MAIN -->
<div class="swz-wishlist-main">

    <!-- PRICE ALERT BANNER -->
    <div class="swz-alert-banner">
        <div class="swz-alert-banner-text">
            <strong>Price Drop Alert!</strong> The Minimalist Hoodie you saved is now 28% off. Don't miss out.
        </div>
        <button class="swz-btn-black" onclick="swzAddToCart('Minimalist Hoodie', 79)" style="font-size:10px;padding:9px 18px;white-space:nowrap">Add to Bag</button>
    </div>

    <!-- HEADER ROW -->
    <div class="swz-wl-header">
        <div>
            <p class="swz-wl-count" id="swzWlCount"><strong>8 items</strong> saved to your wishlist</p>
        </div>
        <div class="swz-wl-actions">
            <button class="swz-btn-outline" onclick="document.getElementById('swzShareModal').classList.add('open')">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
                Share
            </button>
            <button class="swz-btn-black" id="swzAddAllBtn" onclick="swzAddAllToCart()">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                Add All to Bag
            </button>
        </div>
    </div>

    <!-- TOOLBAR -->
    <div class="swz-wl-toolbar">
        <div style="display:flex;align-items:center;gap:20px;flex-wrap:wrap">
            <div class="swz-filter-tabs">
                <button class="swz-filter-tab active" onclick="swzFilter('all', this)">All (8)</button>
                <button class="swz-filter-tab" onclick="swzFilter('outerwear', this)">Outerwear (3)</button>
                <button class="swz-filter-tab" onclick="swzFilter('knitwear', this)">Knitwear (2)</button>
                <button class="swz-filter-tab" onclick="swzFilter('essentials', this)">Essentials (3)</button>
            </div>
        </div>
        <div style="display:flex;align-items:center;gap:12px">
            <div class="swz-sort-wrap">
                <span class="swz-sort-label">Sort:</span>
                <select class="swz-sort-select">
                    <option>Date Added</option>
                    <option>Price: Low–High</option>
                    <option>Price: High–Low</option>
                    <option>Newest First</option>
                </select>
            </div>
            <div class="swz-view-toggle">
                <button class="swz-view-btn active" id="swzGridBtn" onclick="swzSetView('grid')" title="Grid view">
                    <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16"><rect x="0" y="0" width="7" height="7"/><rect x="9" y="0" width="7" height="7"/><rect x="0" y="9" width="7" height="7"/><rect x="9" y="9" width="7" height="7"/></svg>
                </button>
                <button class="swz-view-btn" id="swzListBtn" onclick="swzSetView('list')" title="List view">
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- WISHLIST GRID -->
    <div class="swz-wishlist-grid" id="swzWishlistGrid">
        <!-- Cards rendered by JS -->
    </div>

    <!-- EMPTY STATE -->
    <div class="swz-empty-state" id="swzEmptyState">
        <div class="swz-empty-icon">
            <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.4" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        </div>
        <h3 class="swz-empty-title">Your wishlist is empty</h3>
        <p class="swz-empty-sub">Save items you love and come back to them anytime.<br>Start exploring and tap the heart icon on any product.</p>
        <a href="#" class="swz-btn-black" style="font-size:12px">Explore Collection</a>
    </div>

</div>

<!-- SHARE MODAL -->
<div class="swz-modal-overlay" id="swzShareModal">
    <div class="swz-modal">
        <button class="swz-modal-close" onclick="document.getElementById('swzShareModal').classList.remove('open')">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
        <div class="swz-modal-title">Share Your Wishlist</div>
        <div class="swz-modal-sub">Copy the link below or share directly with friends</div>
        <div class="swz-share-row">
            <input type="text" class="swz-share-input" value="https://swizer.com/wishlist/sarah-m-8b2k" readonly>
            <button class="swz-btn-black" onclick="swzShowToast('Link copied!');document.getElementById('swzShareModal').classList.remove('open')" style="white-space:nowrap;font-size:11px">Copy Link</button>
        </div>
        <div class="swz-share-btns">
            <button class="swz-share-btn" onclick="swzShowToast('Shared to Instagram')">
                <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/></svg>
                Instagram
            </button>
            <button class="swz-share-btn" onclick="swzShowToast('Shared via Email')">
                <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Email
            </button>
            <button class="swz-share-btn" onclick="swzShowToast('Shared via WhatsApp')">
                <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.114.551 4.097 1.513 5.815L.057 23.998l6.305-1.654A11.954 11.954 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.794 9.794 0 01-5.001-1.369l-.359-.213-3.737.98 1-3.645-.234-.374A9.773 9.773 0 012.182 12C2.182 6.57 6.57 2.182 12 2.182S21.818 6.57 21.818 12 17.43 21.818 12 21.818z"/></svg>
                WhatsApp
            </button>
        </div>
    </div>
</div>

<!-- CART DRAWER -->
<div class="swz-cart-overlay" id="swzCartOverlay" onclick="swzCloseCart()"></div>
<div class="swz-cart-drawer" id="swzCartDrawer">
    <div class="swz-cart-head">
        <div style="display:flex;align-items:center;gap:12px">
            <h2 class="swz-cart-title-text">Your Bag</h2>
            <span style="background:var(--swz-black);color:#fff;font-size:10px;font-weight:700;padding:3px 12px;border-radius:999px" id="swzDrawerCount">0 items</span>
        </div>
        <button class="swz-cart-close-btn" onclick="swzCloseCart()">
            <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
    </div>
    <div class="swz-cart-body" id="swzCartBody">
        <div style="opacity:.4;margin-bottom:16px"><svg width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg></div>
        <p style="font-family:'Playfair Display',serif;font-style:italic;font-size:22px;color:#aaa;margin-bottom:6px">Your bag is empty</p>
        <p style="font-size:13px;font-weight:300;color:var(--swz-lgray)">Add something beautiful from your wishlist</p>
    </div>
    <div class="swz-cart-footer">
        <button class="swz-cart-checkout" onclick="window.location.href='checkout.html'">Proceed to Checkout →</button>
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
    <button class="swz-bnav-item" id="swzBnavCartBtn" onclick="swzOpenCart()" style="border:none">
        <div class="swz-bnav-cart-wrap">
            <div class="swz-bnav-icon-bg">
                <svg width="20" height="20" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
            </div>
            <span class="swz-bnav-badge" id="swzBnavBadge">2</span>
        </div>
    </button>
    <a href="wishlist.html" class="swz-bnav-item swz-bnav-active">
        <svg class="swz-bnav-icon" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        <span class="swz-bnav-label">Wishlist</span>
    </a>
    <a href="account.html" class="swz-bnav-item">
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
const SWZ_WISHLIST = [
    { id:1, name:'Premium Parka', cat:'Outerwear', filter:'outerwear', price:129, was:180, badge:'New Arrival', badgeColor:'#111', img:'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=600', rating:4.9, reviews:243, stock:'In Stock', sizes:['S','M','L','XL'], priceOff:28 },
    { id:2, name:'Biker Leather Jacket', cat:'Luxury', filter:'outerwear', price:299, was:null, badge:'Selling Fast', badgeColor:'#d63333', img:'https://images.unsplash.com/photo-1551028719-00167b16eac5?q=80&w=600', rating:4.8, reviews:178, stock:'Low Stock', sizes:['S','M','L'], priceOff:null },
    { id:3, name:'Wool Blend Overcoat', cat:'Outerwear', filter:'outerwear', price:189, was:null, badge:'Eco', badgeColor:'#4a7c59', img:'https://images.unsplash.com/photo-1516762689617-e1cffcef479d?q=80&w=600', rating:4.7, reviews:132, stock:'In Stock', sizes:['M','L','XL'], priceOff:null },
    { id:4, name:'Cashmere Crewneck', cat:'Knitwear', filter:'knitwear', price:165, was:null, badge:'Signature', badgeColor:'#111', img:'https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?q=80&w=600', rating:4.8, reviews:201, stock:'In Stock', sizes:['S','M','L'], priceOff:null },
    { id:5, name:'Cashmere Scarf', cat:'Knitwear', filter:'knitwear', price:95, was:130, badge:'Sale', badgeColor:'#d63333', img:'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?q=80&w=600', rating:4.6, reviews:88, stock:'In Stock', sizes:['ONE SIZE'], priceOff:27 },
    { id:6, name:'Minimalist Hoodie', cat:'Essentials', filter:'essentials', price:79, was:110, badge:'Limited', badgeColor:'#3a5a9a', img:'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?q=80&w=600', rating:4.6, reviews:89, stock:'Low Stock', sizes:['S','M'], priceOff:28 },
    { id:7, name:'Cargo Trousers', cat:'Essentials', filter:'essentials', price:95, was:null, badge:'Trending', badgeColor:'#a0621a', img:'https://images.unsplash.com/photo-1509631179647-0177331693ae?q=80&w=600', rating:4.5, reviews:67, stock:'In Stock', sizes:['28','30','32','34'], priceOff:null },
    { id:8, name:'Heritage Denim', cat:'Essentials', filter:'essentials', price:135, was:null, badge:'Heritage', badgeColor:'#7a4a20', img:'https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=600', rating:4.6, reviews:155, stock:'In Stock', sizes:['28','30','32','34'], priceOff:null },
];

let swzWishlistItems = [...SWZ_WISHLIST];
let swzCartCount = 2;
let swzCurrentView = 'grid';
let swzCurrentFilter = 'all';

function swzRenderWishlist() {
    const grid = document.getElementById('swzWishlistGrid');
    const emptyState = document.getElementById('swzEmptyState');
    const countEl = document.getElementById('swzWlCount');

    const filtered = swzCurrentFilter === 'all' ? swzWishlistItems : swzWishlistItems.filter(i => i.filter === swzCurrentFilter);

    if (filtered.length === 0) {
        grid.innerHTML = '';
        emptyState.classList.add('show');
        countEl.innerHTML = '<strong>0 items</strong> in your wishlist';
        return;
    }

    emptyState.classList.remove('show');
    countEl.innerHTML = `<strong>${filtered.length} item${filtered.length !== 1 ? 's' : ''}</strong> saved to your wishlist`;

    grid.innerHTML = filtered.map((p, i) => {
        const priceOff = p.was ? `<span class="swz-price-was">$${p.was.toFixed(2)}</span><span class="swz-price-off">${p.priceOff}% OFF</span>` : '';
        const stockClass = p.stock === 'Low Stock' ? 'swz-stock-low' : 'swz-stock-ok';
        const stockIcon = p.stock === 'Low Stock' ? '⚠ ' : '✓ ';
        const listActions = `<div class="swz-list-actions">
            <button class="swz-btn-black" onclick="swzAddToCart('${p.name}', ${p.price})" style="font-size:10px;padding:9px 16px">Add to Bag</button>
            <button class="swz-btn-outline" onclick="swzRemoveFromWishlist(${p.id})" style="font-size:10px;padding:8px 14px;color:var(--swz-red);border-color:var(--swz-red)">Remove</button>
        </div>`;
        return `<div class="swz-prod-card" data-id="${p.id}" style="animation-delay:${i * .06}s">
            <div class="swz-card-img-wrap">
                <span class="swz-card-badge" style="background:${p.badgeColor}">${p.badge}</span>
                <button class="swz-remove-wish" onclick="swzRemoveFromWishlist(${p.id})" title="Remove from wishlist">
                    <svg width="15" height="15" fill="currentColor" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </button>
                <img src="${p.img}" alt="${p.name}" loading="lazy">
                <div class="swz-quick-add">
                    <p class="swz-qa-label">Select Size</p>
                    <div class="swz-size-row">${p.sizes.map(s => `<button class="swz-size-btn">${s}</button>`).join('')}</div>
                    <button class="swz-add-btn" onclick="swzAddToCart('${p.name}', ${p.price})">Add to Bag</button>
                </div>
            </div>
            <div class="swz-card-info">
                <p class="swz-card-cat">${p.cat}</p>
                <h3 class="swz-card-name">${p.name}</h3>
                <div class="swz-card-rating">
                    <span class="swz-stars-sm">${'★'.repeat(Math.floor(p.rating))}</span>
                    <span class="swz-rating-count">(${p.reviews})</span>
                </div>
                <div class="swz-card-price">
                    <span class="swz-price-now">$${p.price.toFixed(2)}</span>
                    ${priceOff}
                </div>
                <div class="${stockClass}">${stockIcon}${p.stock}</div>
                ${listActions}
            </div>
        </div>`;
    }).join('');
}

function swzRemoveFromWishlist(id) {
    const card = document.querySelector(`[data-id="${id}"]`);
    if (card) {
        card.style.opacity = '0';
        card.style.transform = 'scale(.95)';
        card.style.transition = 'all .3s';
        setTimeout(() => {
            swzWishlistItems = swzWishlistItems.filter(i => i.id !== id);
            swzRenderWishlist();
        }, 300);
    }
    swzShowToast('Removed from wishlist');
}

function swzAddToCart(name, price) {
    swzCartCount++;
    document.getElementById('swzCartCount').textContent = swzCartCount;
    document.getElementById('swzBnavBadge').textContent = swzCartCount;
    document.getElementById('swzDrawerCount').textContent = swzCartCount + ' item' + (swzCartCount !== 1 ? 's' : '');
    swzOpenCart();
    swzShowToast('✓ ' + name + ' added to bag!');
}

function swzAddAllToCart() {
    const filtered = swzCurrentFilter === 'all' ? swzWishlistItems : swzWishlistItems.filter(i => i.filter === swzCurrentFilter);
    swzCartCount += filtered.length;
    document.getElementById('swzCartCount').textContent = swzCartCount;
    document.getElementById('swzBnavBadge').textContent = swzCartCount;
    document.getElementById('swzDrawerCount').textContent = swzCartCount + ' item' + (swzCartCount !== 1 ? 's' : '');
    swzOpenCart();
    swzShowToast('✓ All ' + filtered.length + ' items added to bag!');
}

function swzFilter(filter, btn) {
    swzCurrentFilter = filter;
    document.querySelectorAll('.swz-filter-tab').forEach(t => t.classList.remove('active'));
    btn.classList.add('active');
    swzRenderWishlist();
}

function swzSetView(view) {
    swzCurrentView = view;
    const grid = document.getElementById('swzWishlistGrid');
    document.getElementById('swzGridBtn').classList.toggle('active', view === 'grid');
    document.getElementById('swzListBtn').classList.toggle('active', view === 'list');
    if (view === 'list') grid.classList.add('list-view');
    else grid.classList.remove('list-view');
}

function swzOpenCart() { document.getElementById('swzCartOverlay').classList.add('open'); document.getElementById('swzCartDrawer').classList.add('open'); document.body.style.overflow = 'hidden'; }
function swzCloseCart() { document.getElementById('swzCartOverlay').classList.remove('open'); document.getElementById('swzCartDrawer').classList.remove('open'); document.body.style.overflow = ''; }

document.getElementById('swzCartBtn').onclick = swzOpenCart;
document.addEventListener('keydown', e => { if (e.key === 'Escape') swzCloseCart(); });

document.getElementById('swzMobileMenuBtn').onclick = () => { document.getElementById('swzMobileMenu').classList.add('swz-open'); document.body.style.overflow = 'hidden'; };
document.getElementById('swzMobileCloseBtn').onclick = () => { document.getElementById('swzMobileMenu').classList.remove('swz-open'); document.body.style.overflow = ''; };
document.getElementById('swzShareModal').addEventListener('click', function(e) { if (e.target === this) this.classList.remove('open'); });

let swzToastTimer;
function swzShowToast(msg) {
    const toast = document.getElementById('swzToast');
    document.getElementById('swzToastMsg').textContent = msg;
    toast.classList.add('show');
    clearTimeout(swzToastTimer);
    swzToastTimer = setTimeout(() => toast.classList.remove('show'), 2800);
}

swzRenderWishlist();
</script>
</body>
</html>