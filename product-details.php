<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Parka – Swizer Premium Apparel</title>
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

        body {
            font-family: 'Manrope', sans-serif;
            background: #fff;
            color: var(--swz-black);
            overflow-x: hidden;
        }

        @media (max-width: 767px) { body { padding-bottom: 68px; } }

        /* ── ANNOUNCE ── */
        .swz-announce-bar { overflow: hidden; padding: 10px 0; background: var(--swz-black); }
        .swz-marquee-track {
            display: flex; width: max-content;
            animation: swzMarquee 32s linear infinite;
            color: #fff; font-size: 10px; font-weight: 600;
            letter-spacing: .22em; text-transform: uppercase;
        }
        @keyframes swzMarquee { to { transform: translateX(-50%); } }
        .swz-marquee-item { padding: 0 48px; }
        .swz-marquee-sep { opacity: .3; }

        /* ── HEADER ── */
        .swz-header {
            position: sticky; top: 0; z-index: 50;
            background: rgba(255,255,255,.9);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(229,231,235,.6);
        }
        .swz-header-inner {
            max-width: 1400px; margin: 0 auto; padding: 0 24px;
            height: 64px; display: flex; align-items: center; justify-content: space-between;
        }
        @media (min-width:1024px) { .swz-header-inner { padding: 0 40px; height: 68px; } }

        .swz-logo {
            font-family: 'Playfair Display', serif; font-weight: 800;
            font-size: 22px; letter-spacing: -.01em;
            color: var(--swz-black); text-decoration: none; font-style: italic;
        }
        .swz-desk-nav { display: none; align-items: center; gap: 28px; }
        @media (min-width:1024px) { .swz-desk-nav { display: flex; } }
        .swz-nav-link {
            font-size: 12px; font-weight: 600; letter-spacing: .12em;
            text-transform: uppercase; color: var(--swz-gray);
            text-decoration: none; position: relative; transition: color .25s;
        }
        .swz-nav-link::after {
            content:''; position: absolute; bottom:-4px; left:0; width:0;
            height:1.5px; background:var(--swz-black); transition: width .3s;
        }
        .swz-nav-link:hover { color: var(--swz-black); }
        .swz-nav-link:hover::after { width: 100%; }
        .swz-nav-link--sale { color: var(--swz-red) !important; }

        .swz-header-right { display: flex; align-items: center; gap: 4px; }
        .swz-search-wrap { position: relative; display: none; }
        @media (min-width:1024px) { .swz-search-wrap { display: block; } }
        .swz-search-input {
            background: #f4f4f4; border: 1px solid transparent; border-radius: 4px;
            padding: 9px 14px 9px 36px; font-family: 'Manrope', sans-serif;
            font-size: 13px; width: 190px; outline: none; transition: all .3s;
        }
        .swz-search-input:focus { width: 250px; background: #fff; border-color: #ddd; }
        .swz-search-icon {
            position: absolute; left: 11px; top: 50%; transform: translateY(-50%);
            width: 14px; height: 14px; color: #aaa; pointer-events: none;
        }
        .swz-icon-btn {
            background: none; border: none; cursor: pointer;
            display: flex; align-items: center; justify-content: center;
            width: 40px; height: 40px; border-radius: 50%;
            transition: background .2s; position: relative;
        }
        .swz-icon-btn:hover { background: #f2f2f2; }
        .swz-cart-badge {
            position: absolute; top: -2px; right: -2px;
            background: var(--swz-black); color: #fff;
            font-size: 9px; font-weight: 700; width: 17px; height: 17px;
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
        }

        /* ── BREADCRUMB ── */
        .swz-breadcrumb-bar {
            border-bottom: 1px solid var(--swz-border);
            background: #fff;
        }
        .swz-breadcrumb-inner {
            max-width: 1400px; margin: 0 auto; padding: 0 24px;
            height: 44px; display: flex; align-items: center;
        }
        @media (min-width:1024px) { .swz-breadcrumb-inner { padding: 0 40px; } }
        .swz-breadcrumb {
            display: flex; align-items: center; gap: 8px;
            font-size: 11px; font-weight: 600; letter-spacing: .12em;
            text-transform: uppercase; color: var(--swz-lgray);
        }
        .swz-breadcrumb a { color: var(--swz-lgray); text-decoration: none; transition: color .2s; }
        .swz-breadcrumb a:hover { color: var(--swz-black); }
        .swz-breadcrumb span { color: var(--swz-black); }

        /* ── PRODUCT MAIN ── */
        .swz-product-main {
            max-width: 1400px; margin: 0 auto;
            padding: 40px 24px 80px;
            display: grid; grid-template-columns: 1fr;
            gap: 40px;
        }
        @media (min-width: 1024px) {
            .swz-product-main {
                grid-template-columns: 1fr 1fr;
                padding: 48px 40px 80px;
                gap: 64px;
                align-items: start;
            }
        }

        /* ── GALLERY ── */
        .swz-gallery { display: flex; flex-direction: column; gap: 12px; }
        @media (min-width:768px) { .swz-gallery { flex-direction: row; } }

        .swz-gallery-thumbs {
            display: flex; gap: 8px;
            flex-direction: row;
            order: 2;
        }
        @media (min-width:768px) {
            .swz-gallery-thumbs {
                flex-direction: column;
                order: 1;
                width: 80px;
                flex-shrink: 0;
                gap: 10px;
            }
        }
        .swz-thumb {
            width: 72px; height: 90px;
            flex-shrink: 0; overflow: hidden;
            cursor: pointer; border: 2px solid transparent;
            transition: border-color .2s;
        }
        @media (min-width:768px) { .swz-thumb { width: 80px; height: 100px; } }
        .swz-thumb.active { border-color: var(--swz-black); }
        .swz-thumb img { width:100%; height:100%; object-fit:cover; display:block; transition: transform .4s; }
        .swz-thumb:hover img { transform: scale(1.07); }

        .swz-gallery-main {
            position: relative; overflow: hidden;
            background: var(--swz-off);
            flex: 1; order: 1;
        }
        @media (min-width:768px) { .swz-gallery-main { order: 2; } }
        .swz-gallery-main-img {
            aspect-ratio: 3/4; width: 100%; position: relative; overflow: hidden;
        }
        .swz-gallery-main-img img {
            width:100%; height:100%; object-fit:cover; display:block;
            transition: opacity .45s ease, transform .7s cubic-bezier(.165,.84,.44,1);
        }
        .swz-gallery-main-img img.swz-fade-out { opacity: 0; transform: scale(1.03); }

        .swz-gallery-badge {
            position: absolute; top: 16px; left: 16px; z-index: 6;
            font-size: 9px; font-weight: 700; letter-spacing: .14em;
            text-transform: uppercase; color: #fff; padding: 5px 12px;
            background: var(--swz-black); pointer-events: none;
        }
        .swz-gallery-zoom-hint {
            position: absolute; bottom: 16px; right: 16px; z-index: 6;
            display: flex; align-items: center; gap: 6px;
            background: rgba(255,255,255,.9); backdrop-filter: blur(8px);
            padding: 7px 12px; font-size: 10px; font-weight: 700;
            letter-spacing: .12em; text-transform: uppercase; color: var(--swz-gray);
            pointer-events: none;
        }
        .swz-gallery-arrows {
            position: absolute; top: 50%; transform: translateY(-50%);
            width: 100%; display: flex; justify-content: space-between;
            padding: 0 12px; z-index: 6; pointer-events: none;
        }
        .swz-gallery-arrow {
            pointer-events: auto;
            width: 40px; height: 40px;
            background: rgba(255,255,255,.92); border: none; cursor: pointer;
            display: flex; align-items: center; justify-content: center;
            transition: background .2s; box-shadow: 0 2px 12px rgba(0,0,0,.12);
        }
        .swz-gallery-arrow:hover { background: var(--swz-black); color: #fff; }

        /* Wishlist heart on main image */
        .swz-gallery-wish {
            position: absolute; top: 16px; right: 16px; z-index: 6;
            width: 42px; height: 42px; border-radius: 50%;
            background: rgba(255,255,255,.9); backdrop-filter: blur(8px);
            border: none; cursor: pointer;
            display: flex; align-items: center; justify-content: center;
            transition: all .2s;
        }
        .swz-gallery-wish:hover { background: #fff; box-shadow: 0 4px 16px rgba(0,0,0,.12); }
        .swz-gallery-wish.wished svg { fill: var(--swz-red); stroke: var(--swz-red); }

        /* ── PRODUCT INFO ── */
        .swz-product-info { display: flex; flex-direction: column; gap: 0; }

        .swz-pi-cat {
            font-size: 10px; font-weight: 700; letter-spacing: .3em;
            text-transform: uppercase; color: var(--swz-lgray); margin-bottom: 10px;
        }
        .swz-pi-name {
            font-family: 'Playfair Display', serif; font-weight: 800;
            font-size: clamp(28px, 3.8vw, 44px); line-height: 1.05;
            letter-spacing: -.01em; font-style: italic; margin-bottom: 14px;
        }
        .swz-pi-rating-row {
            display: flex; align-items: center; gap: 12px; margin-bottom: 20px;
        }
        .swz-stars { color: var(--swz-accent); font-size: 14px; letter-spacing: .08em; }
        .swz-rating-score { font-size: 13px; font-weight: 700; }
        .swz-rating-count { font-size: 13px; font-weight: 400; color: var(--swz-gray); text-decoration: underline; cursor: pointer; }
        .swz-rating-sep { width: 1px; height: 14px; background: var(--swz-border); }
        .swz-pi-verified {
            font-size: 11px; font-weight: 600; letter-spacing: .1em;
            text-transform: uppercase; color: var(--swz-green);
            display: flex; align-items: center; gap: 4px;
        }

        .swz-pi-price-block {
            padding: 20px 0; border-top: 1px solid var(--swz-border);
            border-bottom: 1px solid var(--swz-border); margin-bottom: 24px;
            display: flex; align-items: baseline; gap: 12px; flex-wrap: wrap;
        }
        .swz-pi-price-now {
            font-family: 'Cormorant Garamond', serif;
            font-size: 38px; font-weight: 700; line-height: 1;
        }
        .swz-pi-price-was {
            font-size: 20px; font-weight: 300;
            color: var(--swz-lgray); text-decoration: line-through;
        }
        .swz-pi-price-save {
            font-size: 11px; font-weight: 700; letter-spacing: .1em;
            text-transform: uppercase; color: #fff;
            background: var(--swz-red); padding: 4px 10px;
        }

        /* Color Select */
        .swz-option-label {
            font-size: 11px; font-weight: 700; letter-spacing: .16em;
            text-transform: uppercase; margin-bottom: 10px;
            display: flex; align-items: center; justify-content: space-between;
        }
        .swz-option-label span { font-weight: 400; text-transform: none; letter-spacing: 0; color: var(--swz-gray); font-size: 13px; }

        .swz-color-row { display: flex; gap: 8px; margin-bottom: 20px; flex-wrap: wrap; }
        .swz-color-swatch {
            width: 32px; height: 32px; border-radius: 50%; cursor: pointer;
            border: 2px solid transparent; transition: all .2s; position: relative;
        }
        .swz-color-swatch:hover { transform: scale(1.1); }
        .swz-color-swatch.active {
            border-color: var(--swz-black);
            box-shadow: 0 0 0 3px #fff, 0 0 0 5px var(--swz-black);
        }

        /* Size Select */
        .swz-size-guide-link {
            font-size: 11px; font-weight: 600; color: var(--swz-gray);
            text-decoration: underline; cursor: pointer; letter-spacing: 0;
            text-transform: none;
        }
        .swz-size-row { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 24px; }
        .swz-size-btn {
            height: 44px; min-width: 52px; padding: 0 10px;
            border: 1.5px solid var(--swz-border); background: #fff;
            font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 700;
            text-transform: uppercase; cursor: pointer;
            display: flex; align-items: center; justify-content: center;
            transition: all .2s; letter-spacing: .08em;
        }
        .swz-size-btn:hover { border-color: var(--swz-black); }
        .swz-size-btn.active { background: var(--swz-black); color: #fff; border-color: var(--swz-black); }
        .swz-size-btn.oos {
            opacity: .32; cursor: not-allowed;
            text-decoration: line-through;
            background: repeating-linear-gradient(-45deg, transparent, transparent 3px, #f0f0f0 3px, #f0f0f0 4px);
        }

        /* Qty + Actions */
        .swz-action-row { display: flex; gap: 10px; margin-bottom: 14px; align-items: stretch; }
        .swz-qty-ctrl {
            display: flex; align-items: center;
            border: 1.5px solid var(--swz-border); flex-shrink: 0;
        }
        .swz-qty-btn {
            width: 44px; height: 52px; border: none; background: #fff;
            cursor: pointer; font-size: 20px; font-family: 'Manrope', sans-serif;
            display: flex; align-items: center; justify-content: center;
            transition: all .2s; color: var(--swz-black);
        }
        .swz-qty-btn:hover { background: var(--swz-black); color: #fff; }
        .swz-qty-display { width: 44px; text-align: center; font-size: 15px; font-weight: 700; }

        .swz-add-to-bag {
            flex: 1; background: var(--swz-black); color: #fff; border: none;
            font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 700;
            letter-spacing: .2em; text-transform: uppercase; padding: 0 24px;
            cursor: pointer; transition: all .25s; display: flex;
            align-items: center; justify-content: center; gap: 10px; height: 52px;
        }
        .swz-add-to-bag:hover { background: #222; }
        .swz-add-to-bag:active { transform: scale(.99); }

        .swz-buy-now {
            width: 100%; border: 1.5px solid var(--swz-black); background: #fff;
            font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 700;
            letter-spacing: .2em; text-transform: uppercase; padding: 0 24px;
            cursor: pointer; transition: all .25s; height: 52px;
            display: flex; align-items: center; justify-content: center; gap: 8px;
            color: var(--swz-black); margin-bottom: 24px;
        }
        .swz-buy-now:hover { background: var(--swz-black); color: #fff; }

        /* Trust badges */
        .swz-trust-row {
            display: grid; grid-template-columns: repeat(3, 1fr);
            gap: 8px; margin-bottom: 24px;
        }
        .swz-trust-item {
            display: flex; flex-direction: column; align-items: center;
            text-align: center; gap: 6px; padding: 12px 6px;
            border: 1px solid var(--swz-border); background: var(--swz-off);
        }
        .swz-trust-label {
            font-size: 10px; font-weight: 700; letter-spacing: .1em;
            text-transform: uppercase; line-height: 1.3;
        }

        /* Delivery info */
        .swz-delivery-info {
            border: 1px solid var(--swz-border); padding: 16px;
            background: var(--swz-off); margin-bottom: 24px;
            display: flex; flex-direction: column; gap: 10px;
        }
        .swz-delivery-row { display: flex; align-items: flex-start; gap: 10px; }
        .swz-delivery-icon { flex-shrink: 0; color: var(--swz-black); margin-top: 1px; }
        .swz-delivery-text h5 {
            font-size: 12px; font-weight: 700; letter-spacing: .06em; margin-bottom: 2px;
        }
        .swz-delivery-text p { font-size: 12px; font-weight: 300; color: var(--swz-gray); }

        /* Accordion */
        .swz-accordion { border-top: 1px solid var(--swz-border); }
        .swz-accordion-item { border-bottom: 1px solid var(--swz-border); }
        .swz-accordion-trigger {
            width: 100%; background: none; border: none; padding: 18px 0;
            display: flex; align-items: center; justify-content: space-between;
            cursor: pointer; font-family: 'Manrope', sans-serif;
            font-size: 12px; font-weight: 700; letter-spacing: .14em;
            text-transform: uppercase; color: var(--swz-black); text-align: left;
        }
        .swz-accordion-trigger svg { transition: transform .3s; flex-shrink: 0; }
        .swz-accordion-trigger.open svg { transform: rotate(45deg); }
        .swz-accordion-body {
            display: none; padding: 0 0 20px;
            font-size: 14px; font-weight: 300; color: var(--swz-gray);
            line-height: 1.75;
        }
        .swz-accordion-body.open { display: block; }
        .swz-accordion-body ul { padding-left: 16px; }
        .swz-accordion-body ul li { margin-bottom: 4px; }

        /* ── PRODUCT TABS (Description, Details, Reviews) ── */
        .swz-tabs-section {
            border-top: 1px solid var(--swz-border);
            max-width: 1400px; margin: 0 auto; padding: 0 24px 80px;
        }
        @media (min-width:1024px) { .swz-tabs-section { padding: 0 40px 80px; } }

        .swz-tabs-nav {
            display: flex; border-bottom: 1px solid var(--swz-border); margin-bottom: 48px;
            overflow-x: auto; scrollbar-width: none;
        }
        .swz-tabs-nav::-webkit-scrollbar { display: none; }
        .swz-tab-btn {
            padding: 18px 28px; background: none; border: none;
            font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 700;
            letter-spacing: .14em; text-transform: uppercase; cursor: pointer;
            color: var(--swz-gray); border-bottom: 2px solid transparent;
            margin-bottom: -1px; transition: all .2s; white-space: nowrap;
        }
        .swz-tab-btn.active { color: var(--swz-black); border-bottom-color: var(--swz-black); }

        .swz-tab-panel { display: none; }
        .swz-tab-panel.active { display: block; }

        /* Description Tab */
        .swz-desc-grid {
            display: grid; grid-template-columns: 1fr;
            gap: 48px;
        }
        @media (min-width:768px) {
            .swz-desc-grid { grid-template-columns: 1fr 1fr; }
        }
        .swz-desc-eyebrow {
            font-size: 10px; font-weight: 700; letter-spacing: .4em;
            text-transform: uppercase; color: var(--swz-gray); margin-bottom: 12px;
        }
        .swz-desc-title {
            font-family: 'Cormorant Garamond', serif; font-weight: 700;
            font-size: clamp(26px, 3.5vw, 42px); font-style: italic;
            line-height: 1.1; margin-bottom: 20px; letter-spacing: .5px;
        }
        .swz-desc-body {
            font-size: 14px; font-weight: 300; color: var(--swz-gray);
            line-height: 1.8; margin-bottom: 24px;
        }
        .swz-desc-feature-list { display: flex; flex-direction: column; gap: 10px; }
        .swz-desc-feature-item {
            display: flex; align-items: center; gap: 12px;
            font-size: 13px; font-weight: 500;
        }
        .swz-desc-feature-dot {
            width: 6px; height: 6px; border-radius: 50%;
            background: var(--swz-accent); flex-shrink: 0;
        }
        .swz-desc-img-wrap {
            position: relative; overflow: hidden; aspect-ratio: 4/5; background: var(--swz-off);
        }
        .swz-desc-img-wrap img { width:100%; height:100%; object-fit:cover; display:block; }

        /* Details Tab */
        .swz-details-grid {
            display: grid; grid-template-columns: 1fr;
            gap: 48px;
        }
        @media (min-width:768px) { .swz-details-grid { grid-template-columns: 1fr 1fr; } }
        .swz-details-table { width: 100%; border-collapse: collapse; }
        .swz-details-table tr { border-bottom: 1px solid var(--swz-border); }
        .swz-details-table td {
            padding: 14px 0; font-size: 14px;
        }
        .swz-details-table td:first-child {
            font-weight: 700; letter-spacing: .06em; width: 45%; color: var(--swz-black);
        }
        .swz-details-table td:last-child { font-weight: 300; color: var(--swz-gray); }

        .swz-size-guide-table {
            width: 100%; border-collapse: collapse;
            font-size: 13px;
        }
        .swz-size-guide-table th {
            font-size: 10px; font-weight: 700; letter-spacing: .16em;
            text-transform: uppercase; padding: 10px 12px;
            background: var(--swz-black); color: #fff; text-align: left;
        }
        .swz-size-guide-table td {
            padding: 10px 12px; border-bottom: 1px solid var(--swz-border);
            font-weight: 300; color: var(--swz-gray);
        }
        .swz-size-guide-table tr:nth-child(even) td { background: var(--swz-off); }

        /* Reviews Tab */
        .swz-reviews-grid {
            display: grid; grid-template-columns: 1fr;
            gap: 48px;
        }
        @media (min-width:1024px) { .swz-reviews-grid { grid-template-columns: 320px 1fr; } }

        .swz-review-summary { display: flex; flex-direction: column; gap: 20px; }
        .swz-review-big-num {
            font-family: 'Cormorant Garamond', serif; font-weight: 800;
            font-size: 84px; line-height: 1; color: var(--swz-black);
        }
        .swz-review-big-stars { color: var(--swz-accent); font-size: 22px; letter-spacing: .1em; margin-bottom: 4px; }
        .swz-review-total { font-size: 13px; font-weight: 300; color: var(--swz-gray); }

        .swz-rating-bars { display: flex; flex-direction: column; gap: 8px; }
        .swz-rating-bar-row { display: flex; align-items: center; gap: 10px; font-size: 12px; font-weight: 600; }
        .swz-rating-bar-track {
            flex: 1; height: 6px; background: #e8e8e8; border-radius: 3px; overflow: hidden;
        }
        .swz-rating-bar-fill { height: 100%; background: var(--swz-black); border-radius: 3px; }
        .swz-rating-bar-pct { width: 32px; text-align: right; color: var(--swz-gray); font-weight: 400; }

        .swz-review-list { display: flex; flex-direction: column; gap: 28px; }
        .swz-review-item { border-bottom: 1px solid var(--swz-border); padding-bottom: 28px; }
        .swz-review-item:last-child { border-bottom: none; }
        .swz-review-header { display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 12px; gap: 12px; }
        .swz-reviewer-info {}
        .swz-reviewer-name { font-size: 14px; font-weight: 700; margin-bottom: 4px; }
        .swz-reviewer-meta { font-size: 11px; font-weight: 600; letter-spacing: .08em; text-transform: uppercase; color: var(--swz-gray); }
        .swz-review-stars { color: var(--swz-accent); font-size: 13px; letter-spacing: .06em; flex-shrink: 0; }
        .swz-review-title { font-size: 15px; font-weight: 700; margin-bottom: 8px; }
        .swz-review-body { font-size: 14px; font-weight: 300; color: var(--swz-gray); line-height: 1.75; }
        .swz-review-tag {
            display: inline-block; margin-top: 10px;
            padding: 3px 10px; background: var(--swz-off);
            font-size: 10px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase;
            color: var(--swz-green);
        }
        .swz-write-review-btn {
            padding: 14px 32px;
            border: 1.5px solid var(--swz-black); background: #fff;
            font-family: 'Manrope', sans-serif; font-size: 11px; font-weight: 700;
            letter-spacing: .18em; text-transform: uppercase; cursor: pointer;
            transition: all .25s; color: var(--swz-black);
        }
        .swz-write-review-btn:hover { background: var(--swz-black); color: #fff; }

        /* ── RECENTLY VIEWED / YOU MAY ALSO LIKE ── */
        .swz-related-section {
            padding: 80px 0; border-top: 1px solid var(--swz-border);
            background: var(--swz-off);
        }
        .swz-related-inner { max-width: 1400px; margin: 0 auto; padding: 0 24px; }
        @media (min-width:1024px) { .swz-related-inner { padding: 0 40px; } }

        .swz-eyebrow {
            display: block; font-size: 10px; font-weight: 700; letter-spacing: .4em;
            text-transform: uppercase; color: var(--swz-gray); margin-bottom: 10px;
        }
        .swz-sec-title {
            font-family: 'Playfair Display', serif; font-weight: 800;
            font-size: clamp(26px, 3.8vw, 46px); line-height: 1.05; letter-spacing: -.01em;
        }
        .swz-sec-sub { font-size: 14px; font-weight: 300; color: var(--swz-gray); margin-top: 6px; }
        .swz-divider { width: 40px; height: 2px; background: var(--swz-accent); margin: 14px 0 0; }

        .swz-related-grid {
            display: grid; grid-template-columns: repeat(2, 1fr);
            gap: 20px; margin-top: 40px;
        }
        @media (min-width:640px) { .swz-related-grid { grid-template-columns: repeat(3, 1fr); } }
        @media (min-width:1024px) { .swz-related-grid { grid-template-columns: repeat(4, 1fr); } }

        /* Product card (same as listing) */
        .swz-prod-card {
            position: relative; background: #fff;
            border: 1px solid transparent;
            transition: border-color .25s, box-shadow .25s; cursor: pointer;
        }
        .swz-prod-card:hover { border-color: var(--swz-black); box-shadow: 0 8px 32px rgba(0,0,0,.08); }
        .swz-card-img-wrap {
            position: relative; overflow: hidden; aspect-ratio: 3/4; background: var(--swz-off);
        }
        .swz-card-img-wrap img {
            width:100%; height:100%; object-fit:cover; display:block;
            transition: transform .9s cubic-bezier(.165,.84,.44,1);
        }
        .swz-prod-card:hover .swz-card-img-wrap img { transform: scale(1.07); }
        .swz-card-badge {
            position: absolute; top: 10px; left: 10px; z-index: 6;
            font-size: 9px; font-weight: 700; letter-spacing: .14em;
            text-transform: uppercase; color: #fff; padding: 4px 10px;
        }
        .swz-card-actions {
            position: absolute; top: 10px; right: 10px; z-index: 6;
            display: flex; flex-direction: column; gap: 6px;
            transform: translateX(52px); transition: transform .35s;
        }
        .swz-prod-card:hover .swz-card-actions { transform: translateX(0); }
        .swz-card-icon-btn {
            width: 38px; height: 38px; border-radius: 50%; background: #fff; border: none;
            cursor: pointer; display: flex; align-items: center; justify-content: center;
            box-shadow: 0 2px 10px rgba(0,0,0,.14); transition: all .22s; color: var(--swz-gray);
        }
        .swz-card-icon-btn:hover { background: var(--swz-black); color: #fff; }
        .swz-quick-add {
            position: absolute; bottom: 0; left: 0; right: 0;
            background: rgba(255,255,255,.96); backdrop-filter: blur(8px);
            padding: 12px; transform: translateY(100%);
            transition: transform .32s cubic-bezier(.165,.84,.44,1); z-index: 5;
        }
        .swz-prod-card:hover .swz-quick-add { transform: none; }
        .swz-qa-label {
            font-size: 10px; font-weight: 600; letter-spacing: .18em;
            text-transform: uppercase; color: var(--swz-gray); text-align: center; margin-bottom: 6px;
        }
        .swz-size-row-sm { display: flex; justify-content: center; gap: 6px; }
        .swz-size-btn-sm {
            height: 30px; min-width: 30px; padding: 0 4px;
            border: 1.5px solid #ddd; background: #fff;
            font-family: 'Manrope', sans-serif; font-size: 10px; font-weight: 700;
            cursor: pointer; display: flex; align-items: center; justify-content: center;
            transition: all .2s;
        }
        .swz-size-btn-sm:hover { background: var(--swz-black); color: #fff; border-color: var(--swz-black); }
        .swz-add-btn-sm {
            width: 100%; margin-top: 7px; background: var(--swz-black); color: #fff;
            border: none; font-family: 'Manrope', sans-serif; font-size: 10px; font-weight: 700;
            letter-spacing: .14em; text-transform: uppercase; padding: 9px;
            cursor: pointer; transition: background .2s;
        }
        .swz-add-btn-sm:hover { background: #333; }
        .swz-card-info { padding: 12px 8px 8px; }
        .swz-card-cat { font-size: 10px; font-weight: 600; letter-spacing: .2em; text-transform: uppercase; color: var(--swz-lgray); margin-bottom: 3px; }
        .swz-card-name { font-size: 14px; font-weight: 600; margin-bottom: 4px; }
        .swz-card-rating-sm { display: flex; align-items: center; gap: 4px; margin-bottom: 5px; }
        .swz-stars-sm { color: var(--swz-accent); font-size: 11px; }
        .swz-rating-count-sm { font-size: 11px; color: var(--swz-lgray); }
        .swz-card-price { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; }
        .swz-price-now { font-size: 15px; font-weight: 700; }
        .swz-price-was { font-size: 13px; font-weight: 300; color: var(--swz-lgray); text-decoration: line-through; }
        .swz-price-off { font-size: 10px; font-weight: 700; color: var(--swz-red); }

        /* ── RECENTLY VIEWED ── */
        .swz-recently-section {
            padding: 60px 0; border-top: 1px solid var(--swz-border); background: #fff;
        }

        /* ── MOBILE BOTTOM NAV ── */
        .swz-bottom-nav {
            display: none; position: fixed; bottom: 0; left: 0; right: 0;
            z-index: 9000; background: #fff; border-top: 1px solid #e8e8e8;
            height: 68px; padding: 0 4px; box-shadow: 0 -4px 24px rgba(0,0,0,.08);
        }
        @media (max-width:767px) { .swz-bottom-nav { display: flex; align-items: stretch; } }
        .swz-bnav-item {
            flex: 1; display: flex; flex-direction: column; align-items: center;
            justify-content: center; gap: 4px; background: none; border: none;
            cursor: pointer; text-decoration: none; color: var(--swz-gray);
            transition: color .2s; padding: 8px 4px;
        }
        .swz-bnav-item:hover, .swz-bnav-item.active { color: var(--swz-black); }
        .swz-bnav-label { font-size: 9px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; }
        .swz-bnav-icon-bg {
            background: var(--swz-black); border-radius: 50%; width: 44px; height: 44px;
            display: flex; align-items: center; justify-content: center;
            box-shadow: 0 4px 14px rgba(0,0,0,.25); transition: transform .2s;
        }
        .swz-bnav-item--cart:hover .swz-bnav-icon-bg { transform: translateY(-2px); }
        .swz-bnav-badge {
            position: absolute; top: 8px; right: 12px;
            background: var(--swz-black); color: #fff; font-size: 8px; font-weight: 700;
            min-width: 15px; height: 15px; border-radius: 999px;
            display: flex; align-items: center; justify-content: center; padding: 0 3px;
        }
        .swz-bnav-cart-wrap { position: relative; display: flex; align-items: center; justify-content: center; }

        /* Mobile sticky ATC */
        .swz-mobile-atc {
            display: none; position: fixed; bottom: 68px; left: 0; right: 0;
            z-index: 8999; background: #fff; border-top: 1px solid var(--swz-border);
            padding: 12px 16px; gap: 10px;
        }
        @media (max-width:1023px) { .swz-mobile-atc { display: flex; } }
        .swz-mobile-atc-price { display: flex; flex-direction: column; }
        .swz-mobile-atc-price-now { font-family: 'Cormorant Garamond', serif; font-size: 26px; font-weight: 700; }
        .swz-mobile-atc-price-was { font-size: 13px; color: var(--swz-lgray); text-decoration: line-through; }
        .swz-mobile-atc-btn {
            flex: 1; background: var(--swz-black); color: #fff; border: none;
            font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 700;
            letter-spacing: .2em; text-transform: uppercase; padding: 0 20px;
            cursor: pointer; height: 48px; transition: background .2s;
        }
        .swz-mobile-atc-btn:hover { background: #222; }

        /* ── CART DRAWER ── */
        .swz-cart-overlay {
            position: fixed; inset: 0; background: rgba(0,0,0,.52);
            backdrop-filter: blur(4px); opacity: 0; pointer-events: none;
            transition: opacity .35s; z-index: 9998;
        }
        .swz-cart-overlay.open { opacity: 1; pointer-events: auto; }
        .swz-cart-drawer {
            position: fixed; top: 0; right: 0; bottom: 0;
            width: 460px; max-width: 100vw; background: #fff;
            display: flex; flex-direction: column;
            transform: translateX(100%);
            transition: transform .4s cubic-bezier(.165,.84,.44,1);
            z-index: 9999; box-shadow: -16px 0 60px rgba(0,0,0,.14);
        }
        @media (max-width:767px) { .swz-cart-drawer { width: 100vw; } }
        .swz-cart-drawer.open { transform: none; }
        .swz-cart-head {
            padding: 20px 24px; display: flex; align-items: center;
            justify-content: space-between; border-bottom: 1px solid #f0f0f0; flex-shrink: 0;
        }
        .swz-cart-title { font-family: 'Playfair Display', serif; font-weight: 700; font-size: 20px; font-style: italic; }
        .swz-cart-count-badge { background: var(--swz-black); color: #fff; font-size: 10px; font-weight: 700; padding: 3px 12px; border-radius: 999px; }
        .swz-cart-close { width: 36px; height: 36px; border: none; background: none; cursor: pointer; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: background .2s; }
        .swz-cart-close:hover { background: #f3f3f3; }
        .swz-cart-progress-strip { padding: 14px 24px; background: #f8f8f6; border-bottom: 1px solid #f0f0f0; flex-shrink: 0; }
        .swz-prog-row { display: flex; justify-content: space-between; margin-bottom: 8px; }
        .swz-prog-label { font-size: 11px; font-weight: 600; letter-spacing: .14em; text-transform: uppercase; color: var(--swz-gray); }
        .swz-prog-val { font-size: 11px; font-weight: 700; }
        .swz-prog-track { height: 3px; background: #ebebeb; border-radius: 2px; overflow: hidden; }
        .swz-prog-fill { height: 100%; background: var(--swz-black); border-radius: 2px; transition: width .4s; }
        .swz-prog-msg { font-size: 11px; font-weight: 600; margin-top: 8px; }
        .swz-cart-body { flex: 1; overflow-y: auto; padding: 0 24px; }
        .swz-cart-item { display: flex; gap: 14px; padding: 18px 0; border-bottom: 1px solid #f0f0f0; }
        .swz-cart-thumb { width: 84px; height: 104px; object-fit: cover; flex-shrink: 0; }
        .swz-cart-item-info { flex: 1; min-width: 0; }
        .swz-ci-cat { font-size: 10px; font-weight: 600; letter-spacing: .18em; text-transform: uppercase; color: var(--swz-gray); margin-bottom: 3px; }
        .swz-ci-name { font-size: 14px; font-weight: 600; margin-bottom: 3px; }
        .swz-ci-variant { font-size: 13px; font-weight: 300; color: var(--swz-gray); margin-bottom: 14px; }
        .swz-ci-btm { display: flex; align-items: center; justify-content: space-between; }
        .swz-qty-ctrl { display: flex; align-items: center; border: 1.5px solid #e0e0e0; }
        .swz-qty-btn-sm { width: 33px; height: 33px; border: none; background: #fff; cursor: pointer; font-size: 16px; display: flex; align-items: center; justify-content: center; transition: all .2s; }
        .swz-qty-btn-sm:hover { background: var(--swz-black); color: #fff; }
        .swz-qty-display { width: 38px; text-align: center; font-size: 14px; font-weight: 700; }
        .swz-ci-price { font-size: 15px; font-weight: 700; }
        .swz-ci-remove { background: none; border: none; cursor: pointer; color: #ccc; align-self: flex-start; margin-top: 2px; transition: color .2s; }
        .swz-ci-remove:hover { color: var(--swz-red); }
        .swz-cart-footer { flex-shrink: 0; border-top: 1px solid #f0f0f0; }
        .swz-cart-totals { padding: 20px 24px; }
        .swz-total-row { display: flex; justify-content: space-between; margin-bottom: 8px; }
        .swz-total-label { font-size: 11px; font-weight: 600; letter-spacing: .14em; text-transform: uppercase; color: var(--swz-gray); }
        .swz-total-val { font-size: 18px; font-weight: 700; }
        .swz-shipping-val { font-size: 13px; font-weight: 700; color: var(--swz-green); }
        .swz-grand-row { display: flex; justify-content: space-between; margin-top: 18px; padding-top: 18px; border-top: 1px solid #f0f0f0; }
        .swz-grand-label { font-family: 'Playfair Display', serif; font-weight: 700; font-size: 18px; font-style: italic; }
        .swz-grand-val { font-family: 'Playfair Display', serif; font-weight: 800; font-size: 24px; }
        .swz-cart-btns { padding: 0 24px 24px; display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
        .swz-cart-view-btn { padding: 15px; border: 1.5px solid #e0e0e0; background: #fff; font-family: 'Manrope', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: .16em; text-transform: uppercase; cursor: pointer; transition: background .2s; }
        .swz-cart-view-btn:hover { background: #f7f7f7; }
        .swz-cart-checkout-btn { padding: 15px; background: var(--swz-black); color: #fff; border: none; font-family: 'Manrope', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: .16em; text-transform: uppercase; cursor: pointer; transition: opacity .2s; }
        .swz-cart-checkout-btn:hover { opacity: .85; }

        /* Animate in */
        @keyframes swzFadeUp { from { opacity:0; transform: translateY(16px); } to { opacity:1; transform:none; } }
        .swz-prod-card { animation: swzFadeUp .45s ease both; }

        /* Sticky product info on scroll (desktop) */
        @media (min-width:1024px) {
            .swz-product-info { position: sticky; top: 88px; }
        }

        /* Image zoom modal */
        .swz-zoom-overlay {
            position: fixed; inset: 0; background: rgba(0,0,0,.92);
            z-index: 99999; display: flex; align-items: center; justify-content: center;
            opacity: 0; pointer-events: none; transition: opacity .3s;
        }
        .swz-zoom-overlay.open { opacity: 1; pointer-events: auto; }
        .swz-zoom-img { max-width: 90vw; max-height: 90vh; object-fit: contain; }
        .swz-zoom-close {
            position: absolute; top: 20px; right: 20px;
            background: none; border: none; color: #fff; cursor: pointer;
            display: flex; align-items: center; justify-content: center;
            width: 44px; height: 44px; border-radius: 50%;
            font-size: 28px; transition: background .2s;
        }
        .swz-zoom-close:hover { background: rgba(255,255,255,.1); }

        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #333; }

        /* Notify toast */
        .swz-toast {
            position: fixed; bottom: 90px; left: 50%; transform: translateX(-50%) translateY(20px);
            background: var(--swz-black); color: #fff;
            padding: 14px 28px; font-size: 12px; font-weight: 700;
            letter-spacing: .14em; text-transform: uppercase;
            z-index: 99999; opacity: 0; pointer-events: none;
            transition: all .35s; white-space: nowrap;
            display: flex; align-items: center; gap: 10px;
        }
        .swz-toast.show { opacity: 1; transform: translateX(-50%) translateY(0); }
    </style>
</head>

<body>

<!-- ═══ ANNOUNCE BAR ═══ -->
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

<!-- ═══ HEADER ═══ -->
<header class="swz-header">
    <div class="swz-header-inner">
        <div style="display:flex;align-items:center;gap:32px">
            <a href="index.html" class="swz-logo">Swizer</a>
            <nav class="swz-desk-nav">
                <a href="#" class="swz-nav-link">Men</a>
                <a href="#" class="swz-nav-link">Women</a>
                <a href="product.html" class="swz-nav-link">Shop</a>
                <a href="#" class="swz-nav-link">New Arrivals</a>
                <a href="#" class="swz-nav-link">Accessories</a>
                <a href="#" class="swz-nav-link swz-nav-link--sale">Sale</a>
            </nav>
        </div>
        <div class="swz-header-right">
            <div class="swz-search-wrap">
                <input type="text" placeholder="Search products…" class="swz-search-input">
                <svg class="swz-search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
            <button class="swz-icon-btn" title="Wishlist">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
            </button>
            <button class="swz-icon-btn" id="swzCartBtn">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
                <span class="swz-cart-badge" id="swzCartCount">0</span>
            </button>
        </div>
    </div>
</header>

<!-- ═══ BREADCRUMB ═══ -->
<div class="swz-breadcrumb-bar">
    <div class="swz-breadcrumb-inner">
        <nav class="swz-breadcrumb">
            <a href="#">Home</a>
            <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="product.html">Shop</a>
            <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="#">Outerwear</a>
            <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span>Premium Parka</span>
        </nav>
    </div>
</div>

<!-- ═══ PRODUCT MAIN ═══ -->
<div class="swz-product-main">

    <!-- GALLERY -->
    <div class="swz-gallery">
        <div class="swz-gallery-thumbs" id="swzGalleryThumbs">
            <div class="swz-thumb active" onclick="swzSwitchImage(0)">
                <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=300" alt="View 1">
            </div>
            <div class="swz-thumb" onclick="swzSwitchImage(1)">
                <img src="https://images.unsplash.com/photo-1548126032-079a0fb0099d?q=80&w=300" alt="View 2">
            </div>
            <div class="swz-thumb" onclick="swzSwitchImage(2)">
                <img src="https://images.unsplash.com/photo-1516762689617-e1cffcef479d?q=80&w=300" alt="View 3">
            </div>
            <div class="swz-thumb" onclick="swzSwitchImage(3)">
                <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?q=80&w=300" alt="View 4">
            </div>
        </div>

        <div class="swz-gallery-main">
            <div class="swz-gallery-main-img" id="swzMainImg">
                <img id="swzMainImgEl" src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=1200" alt="Premium Parka" onclick="swzOpenZoom()">
            </div>
            <span class="swz-gallery-badge">New Arrival</span>
            <button class="swz-gallery-wish" id="swzWishBtn" onclick="swzToggleWish()" title="Add to Wishlist">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
            </button>
            <div class="swz-gallery-zoom-hint" style="cursor:pointer" onclick="swzOpenZoom()">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/></svg>
                Zoom
            </div>
            <div class="swz-gallery-arrows">
                <button class="swz-gallery-arrow" onclick="swzPrevImage()">
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button class="swz-gallery-arrow" onclick="swzNextImage()">
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- PRODUCT INFO -->
    <div class="swz-product-info">
        <p class="swz-pi-cat">Outerwear · Winter 2026</p>
        <h1 class="swz-pi-name">Premium Parka</h1>

        <!-- Rating -->
        <div class="swz-pi-rating-row">
            <span class="swz-stars">★★★★★</span>
            <span class="swz-rating-score">4.9</span>
            <span class="swz-rating-count" onclick="swzSwitchTab('reviews')">(243 reviews)</span>
            <div class="swz-rating-sep"></div>
            <span class="swz-pi-verified">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                Verified Quality
            </span>
        </div>

        <!-- Price -->
        <div class="swz-pi-price-block">
            <span class="swz-pi-price-now">$129.00</span>
            <span class="swz-pi-price-was">$180.00</span>
            <span class="swz-pi-price-save">Save 28%</span>
        </div>

        <!-- Color -->
        <div style="margin-bottom:20px">
            <div class="swz-option-label">Colour <span id="swzColorLabel">Deep Black</span></div>
            <div class="swz-color-row">
                <div class="swz-color-swatch active" style="background:#111" title="Deep Black" onclick="swzSelectColor(this,'Deep Black')"></div>
                <div class="swz-color-swatch" style="background:#3a3a3a" title="Charcoal" onclick="swzSelectColor(this,'Charcoal')"></div>
                <div class="swz-color-swatch" style="background:#7a6a5a" title="Camel" onclick="swzSelectColor(this,'Camel')"></div>
                <div class="swz-color-swatch" style="background:#2d4a3e" title="Forest Green" onclick="swzSelectColor(this,'Forest Green')"></div>
                <div class="swz-color-swatch" style="background:#4a5568" title="Storm Blue" onclick="swzSelectColor(this,'Storm Blue')"></div>
            </div>
        </div>

        <!-- Size -->
        <div style="margin-bottom:4px">
            <div class="swz-option-label">
                Size <span id="swzSizeLabel">Select a size</span>
                <span class="swz-size-guide-link" onclick="swzOpenSizeGuide()">Size Guide</span>
            </div>
            <div class="swz-size-row" id="swzSizeRow">
                <button class="swz-size-btn oos" disabled>XS</button>
                <button class="swz-size-btn" onclick="swzSelectSize(this,'S')">S</button>
                <button class="swz-size-btn" onclick="swzSelectSize(this,'M')">M</button>
                <button class="swz-size-btn" onclick="swzSelectSize(this,'L')">L</button>
                <button class="swz-size-btn" onclick="swzSelectSize(this,'XL')">XL</button>
                <button class="swz-size-btn oos" disabled>XXL</button>
            </div>
            <p id="swzStockMsg" style="font-size:12px;font-weight:600;color:var(--swz-green);margin-top:8px;margin-bottom:18px;display:none">
                ✓ In stock — ships in 1–2 business days
            </p>
        </div>

        <!-- Qty + Add -->
        <div class="swz-action-row">
            <div class="swz-qty-ctrl">
                <button class="swz-qty-btn" onclick="swzQtyChange(-1)">−</button>
                <span class="swz-qty-display" id="swzQty">1</span>
                <button class="swz-qty-btn" onclick="swzQtyChange(1)">+</button>
            </div>
            <button class="swz-add-to-bag" onclick="swzAddToCart()">
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                Add to Bag
            </button>
        </div>
        <button class="swz-buy-now" onclick="swzAddToCart()">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            Buy It Now
        </button>

        <!-- Trust Badges -->
        <div class="swz-trust-row">
            <div class="swz-trust-item">
                <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8"/></svg>
                <span class="swz-trust-label">Free Shipping Over $150</span>
            </div>
            <div class="swz-trust-item">
                <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                <span class="swz-trust-label">30-Day Free Returns</span>
            </div>
            <div class="swz-trust-item">
                <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                <span class="swz-trust-label">Secure Checkout</span>
            </div>
        </div>

        <!-- Delivery Info -->
        <div class="swz-delivery-info">
            <div class="swz-delivery-row">
                <div class="swz-delivery-icon">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                </div>
                <div class="swz-delivery-text">
                    <h5>Standard Delivery</h5>
                    <p>3–5 Business Days · Free over $150</p>
                </div>
            </div>
            <div class="swz-delivery-row">
                <div class="swz-delivery-icon">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <div class="swz-delivery-text">
                    <h5>Express Delivery</h5>
                    <p>Next Business Day · from $9.99</p>
                </div>
            </div>
            <div class="swz-delivery-row">
                <div class="swz-delivery-icon">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <div class="swz-delivery-text">
                    <h5>Free Returns</h5>
                    <p>Within 30 days, no questions asked</p>
                </div>
            </div>
        </div>

        <!-- Accordion -->
        <div class="swz-accordion">
            <div class="swz-accordion-item">
                <button class="swz-accordion-trigger" onclick="swzToggleAccordion(this)">
                    Product Description
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"/></svg>
                </button>
                <div class="swz-accordion-body">
                    <p>A refined parka built for cold-weather versatility. The Premium Parka is cut from a water-resistant shell fabric with a warm down fill — giving you uncompromising warmth without sacrificing movement or silhouette.</p>
                    <br>
                    <p>The adjustable hood, storm placket, and interior baffling keep the cold out on the harshest days, while underarm venting and a relaxed-but-tailored fit keep you looking composed.</p>
                </div>
            </div>
            <div class="swz-accordion-item">
                <button class="swz-accordion-trigger" onclick="swzToggleAccordion(this)">
                    Materials & Fabric
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"/></svg>
                </button>
                <div class="swz-accordion-body">
                    <ul>
                        <li>Outer: 100% Recycled Nylon (water-resistant, DWR treated)</li>
                        <li>Fill: 80% Recycled Down, 20% Feather (600 Fill Power)</li>
                        <li>Lining: 100% Recycled Polyester</li>
                        <li>YKK zippers throughout</li>
                        <li>Bluesign® certified fabric</li>
                    </ul>
                </div>
            </div>
            <div class="swz-accordion-item">
                <button class="swz-accordion-trigger" onclick="swzToggleAccordion(this)">
                    Care Instructions
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"/></svg>
                </button>
                <div class="swz-accordion-body">
                    <ul>
                        <li>Machine wash cold on gentle cycle</li>
                        <li>Use mild, non-biological detergent</li>
                        <li>Tumble dry low with two clean tennis balls</li>
                        <li>Do not iron or dry clean</li>
                        <li>Store loosely — do not compress long term</li>
                    </ul>
                </div>
            </div>
            <div class="swz-accordion-item">
                <button class="swz-accordion-trigger" onclick="swzToggleAccordion(this)">
                    Shipping & Returns
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"/></svg>
                </button>
                <div class="swz-accordion-body">
                    <p>Free standard shipping on orders over $150. Express delivery from $9.99. All orders are dispatched within 1–2 business days. Returns accepted within 30 days of delivery in original, unworn condition. Full refund guaranteed.</p>
                </div>
            </div>
        </div>

    </div><!-- end .swz-product-info -->
</div><!-- end .swz-product-main -->

<!-- ═══ PRODUCT TABS ═══ -->
<div class="swz-tabs-section">
    <div class="swz-tabs-nav">
        <button class="swz-tab-btn active" onclick="swzSwitchTab('description')" data-tab="description">Description</button>
        <button class="swz-tab-btn" onclick="swzSwitchTab('details')" data-tab="details">Product Details</button>
        <button class="swz-tab-btn" onclick="swzSwitchTab('reviews')" data-tab="reviews">Reviews (243)</button>
    </div>

    <!-- Description Tab -->
    <div class="swz-tab-panel active" id="swz-tab-description">
        <div class="swz-desc-grid">
            <div>
                <p class="swz-desc-eyebrow">About This Piece</p>
                <h2 class="swz-desc-title">Built for the Elements, Designed for the Street</h2>
                <p class="swz-desc-body">The Premium Parka was born from a singular obsession: what if outerwear was both technically exceptional and genuinely beautiful? We spent 18 months sourcing materials, refining the silhouette, and testing in the field before we were satisfied.</p>
                <p class="swz-desc-body">The result is a parka that performs in sub-zero conditions but looks perfectly at home in the city. The clean lines, minimal hardware, and relaxed-but-tailored fit make it the one coat you'll reach for every single morning.</p>
                <div class="swz-desc-feature-list">
                    <div class="swz-desc-feature-item"><div class="swz-desc-feature-dot"></div>Water-resistant DWR-treated nylon shell</div>
                    <div class="swz-desc-feature-item"><div class="swz-desc-feature-dot"></div>600 fill-power recycled down insulation</div>
                    <div class="swz-desc-feature-item"><div class="swz-desc-feature-dot"></div>Adjustable storm hood with a clean packaway</div>
                    <div class="swz-desc-feature-item"><div class="swz-desc-feature-dot"></div>6 pockets including 2 internal fleece-lined</div>
                    <div class="swz-desc-feature-item"><div class="swz-desc-feature-dot"></div>Underarm ventilation zips for temperature control</div>
                    <div class="swz-desc-feature-item"><div class="swz-desc-feature-dot"></div>Bluesign® and GRS certified production</div>
                </div>
            </div>
            <div class="swz-desc-img-wrap">
                <img src="https://images.unsplash.com/photo-1548126032-079a0fb0099d?q=80&w=900" alt="Premium Parka Detail">
            </div>
        </div>
    </div>

    <!-- Details Tab -->
    <div class="swz-tab-panel" id="swz-tab-details">
        <div class="swz-details-grid">
            <div>
                <p class="swz-desc-eyebrow">Specifications</p>
                <h3 style="font-family:'Cormorant Garamond',serif;font-size:28px;font-weight:700;font-style:italic;margin-bottom:24px">Product Details</h3>
                <table class="swz-details-table">
                    <tr><td>SKU</td><td>SWZ-PKA-2026-001</td></tr>
                    <tr><td>Collection</td><td>Winter 2026</td></tr>
                    <tr><td>Category</td><td>Outerwear</td></tr>
                    <tr><td>Outer Material</td><td>100% Recycled Nylon</td></tr>
                    <tr><td>Fill Material</td><td>80/20 Recycled Down</td></tr>
                    <tr><td>Fill Power</td><td>600 FP</td></tr>
                    <tr><td>Weight (M)</td><td>680g / 1.5 lbs</td></tr>
                    <tr><td>Length (M)</td><td>Mid-thigh (approx. 86cm)</td></tr>
                    <tr><td>Fit</td><td>Relaxed / Regular</td></tr>
                    <tr><td>Certification</td><td>Bluesign®, GRS, RDS</td></tr>
                    <tr><td>Made In</td><td>Portugal</td></tr>
                    <tr><td>Available Colours</td><td>Black, Charcoal, Camel, Forest, Storm</td></tr>
                </table>
            </div>
            <div>
                <p class="swz-desc-eyebrow">Size Guide</p>
                <h3 style="font-family:'Cormorant Garamond',serif;font-size:28px;font-weight:700;font-style:italic;margin-bottom:24px">Find Your Fit</h3>
                <table class="swz-size-guide-table">
                    <thead>
                        <tr>
                            <th>Size</th>
                            <th>Chest (cm)</th>
                            <th>Waist (cm)</th>
                            <th>Hip (cm)</th>
                            <th>Height (cm)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>S</td><td>86–91</td><td>71–76</td><td>91–96</td><td>170–176</td></tr>
                        <tr><td>M</td><td>91–96</td><td>76–81</td><td>96–101</td><td>176–182</td></tr>
                        <tr><td>L</td><td>96–101</td><td>81–86</td><td>101–106</td><td>182–188</td></tr>
                        <tr><td>XL</td><td>101–106</td><td>86–91</td><td>106–111</td><td>188–194</td></tr>
                    </tbody>
                </table>
                <p style="font-size:12px;font-weight:300;color:var(--swz-gray);margin-top:14px;line-height:1.6">Measurements are body measurements, not garment measurements. The Premium Parka has a relaxed fit — if you're between sizes, we recommend sizing down for a more tailored look.</p>
            </div>
        </div>
    </div>

    <!-- Reviews Tab -->
    <div class="swz-tab-panel" id="swz-tab-reviews">
        <div class="swz-reviews-grid">
            <!-- Summary -->
            <div class="swz-review-summary">
                <div>
                    <div class="swz-review-big-num">4.9</div>
                    <div class="swz-review-big-stars">★★★★★</div>
                    <div class="swz-review-total">Based on 243 reviews</div>
                </div>
                <div class="swz-rating-bars">
                    <div class="swz-rating-bar-row">
                        <span>5★</span>
                        <div class="swz-rating-bar-track"><div class="swz-rating-bar-fill" style="width:84%"></div></div>
                        <span class="swz-rating-bar-pct">84%</span>
                    </div>
                    <div class="swz-rating-bar-row">
                        <span>4★</span>
                        <div class="swz-rating-bar-track"><div class="swz-rating-bar-fill" style="width:10%"></div></div>
                        <span class="swz-rating-bar-pct">10%</span>
                    </div>
                    <div class="swz-rating-bar-row">
                        <span>3★</span>
                        <div class="swz-rating-bar-track"><div class="swz-rating-bar-fill" style="width:4%"></div></div>
                        <span class="swz-rating-bar-pct">4%</span>
                    </div>
                    <div class="swz-rating-bar-row">
                        <span>2★</span>
                        <div class="swz-rating-bar-track"><div class="swz-rating-bar-fill" style="width:1%"></div></div>
                        <span class="swz-rating-bar-pct">1%</span>
                    </div>
                    <div class="swz-rating-bar-row">
                        <span>1★</span>
                        <div class="swz-rating-bar-track"><div class="swz-rating-bar-fill" style="width:1%"></div></div>
                        <span class="swz-rating-bar-pct">1%</span>
                    </div>
                </div>
                <button class="swz-write-review-btn">Write a Review</button>
            </div>

            <!-- Reviews List -->
            <div>
                <div class="swz-review-list">
                    <div class="swz-review-item">
                        <div class="swz-review-header">
                            <div class="swz-reviewer-info">
                                <p class="swz-reviewer-name">Sarah M.</p>
                                <p class="swz-reviewer-meta">Verified Buyer · Size M · Jan 2026</p>
                            </div>
                            <span class="swz-review-stars">★★★★★</span>
                        </div>
                        <p class="swz-review-title">The best parka I've ever owned</p>
                        <p class="swz-review-body">I've had this parka for three months now and it's been through everything — rain, sleet, -15°C mornings. Not once has it let me in. The construction is impeccable, the down fill is genuinely warm, and it still looks brand new. Worth every penny.</p>
                        <span class="swz-review-tag">✓ Verified Purchase</span>
                    </div>
                    <div class="swz-review-item">
                        <div class="swz-review-header">
                            <div class="swz-reviewer-info">
                                <p class="swz-reviewer-name">James K.</p>
                                <p class="swz-reviewer-meta">Verified Buyer · Size L · Dec 2025</p>
                            </div>
                            <span class="swz-review-stars">★★★★★</span>
                        </div>
                        <p class="swz-review-title">Finally — outerwear that looks as good as it performs</p>
                        <p class="swz-review-body">I've been searching for a parka that didn't look like I was heading to the Arctic. This is it. The silhouette is clean, the colour options are excellent (I went with Storm Blue), and the zippers feel premium. Took a size down as suggested and it fits perfectly.</p>
                        <span class="swz-review-tag">✓ Verified Purchase</span>
                    </div>
                    <div class="swz-review-item">
                        <div class="swz-review-header">
                            <div class="swz-reviewer-info">
                                <p class="swz-reviewer-name">Priya L.</p>
                                <p class="swz-reviewer-meta">Verified Buyer · Size S · Nov 2025</p>
                            </div>
                            <span class="swz-review-stars">★★★★★</span>
                        </div>
                        <p class="swz-review-title">Gifted one to my sister — she won't stop wearing it</p>
                        <p class="swz-review-body">Bought this as a birthday gift and honestly wish I'd bought myself one too. The packaging was gorgeous, it arrived beautifully presented, and my sister told me it's the warmest thing she owns. Will absolutely be ordering for myself before winter ends.</p>
                        <span class="swz-review-tag">✓ Verified Purchase</span>
                    </div>
                    <div class="swz-review-item">
                        <div class="swz-review-header">
                            <div class="swz-reviewer-info">
                                <p class="swz-reviewer-name">Oliver T.</p>
                                <p class="swz-reviewer-meta">Verified Buyer · Size M · Oct 2025</p>
                            </div>
                            <span class="swz-review-stars">★★★★☆</span>
                        </div>
                        <p class="swz-review-title">Excellent coat, minor sizing note</p>
                        <p class="swz-review-body">Quality is outstanding — I can tell this is made to last. The only thing I'd flag is the sizing runs slightly long in the body; I'm 5'10" and the M hits lower than I expected. Still a great coat overall and I'll keep it — just worth knowing if you prefer a shorter fit.</p>
                        <span class="swz-review-tag">✓ Verified Purchase</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ═══ YOU MAY ALSO LIKE ═══ -->
<section class="swz-related-section">
    <div class="swz-related-inner">
        <div style="margin-bottom:40px">
            <span class="swz-eyebrow">Complete Your Look</span>
            <h2 class="swz-sec-title">You May Also Like</h2>
            <div class="swz-divider"></div>
        </div>
        <div class="swz-related-grid" id="swzRelatedGrid">
            <!-- Rendered by JS -->
        </div>
    </div>
</section>

<!-- ═══ RECENTLY VIEWED ═══ -->
<section class="swz-recently-section">
    <div class="swz-related-inner" style="max-width:1400px;margin:0 auto;padding:0 24px">
        <div style="margin-bottom:40px">
            <span class="swz-eyebrow">Your History</span>
            <h2 class="swz-sec-title">Recently Viewed</h2>
            <div class="swz-divider"></div>
        </div>
        <div class="swz-related-grid" id="swzRecentGrid">
            <!-- Rendered by JS -->
        </div>
    </div>
</section>

<!-- ═══ MOBILE BOTTOM NAV ═══ -->
<nav class="swz-bottom-nav">
    <a href="#" class="swz-bnav-item">
        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
        </svg>
        <span class="swz-bnav-label">Home</span>
    </a>
    <a href="#" class="swz-bnav-item">
        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
        </svg>
        <span class="swz-bnav-label">Search</span>
    </a>
    <button class="swz-bnav-item swz-bnav-item--cart" id="swzBnavCart" style="border:none">
        <div class="swz-bnav-cart-wrap">
            <div class="swz-bnav-icon-bg">
                <svg width="20" height="20" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24">
                    <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
            </div>
            <span class="swz-bnav-badge" id="swzBnavBadge">0</span>
        </div>
    </button>
    <a href="#" class="swz-bnav-item">
        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
        </svg>
        <span class="swz-bnav-label">Wishlist</span>
    </a>
    <a href="#" class="swz-bnav-item">
        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
            <circle cx="12" cy="7" r="4"/>
        </svg>
        <span class="swz-bnav-label">Account</span>
    </a>
</nav>

<!-- Mobile sticky ATC -->
<div class="swz-mobile-atc">
    <div class="swz-mobile-atc-price">
        <span class="swz-mobile-atc-price-now">$129.00</span>
        <span class="swz-mobile-atc-price-was">was $180.00</span>
    </div>
    <button class="swz-mobile-atc-btn" onclick="swzAddToCart()">Add to Bag</button>
</div>

<!-- ═══ CART DRAWER ═══ -->
<div class="swz-cart-overlay" id="swzCartOverlay"></div>
<div class="swz-cart-drawer" id="swzCartDrawer">
    <div class="swz-cart-head">
        <div style="display:flex;align-items:center;gap:12px">
            <h2 class="swz-cart-title">Your Bag</h2>
            <span class="swz-cart-count-badge" id="swzDrawerCount">0 items</span>
        </div>
        <button class="swz-cart-close" id="swzCloseCart">
            <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
    </div>
    <div class="swz-cart-progress-strip">
        <div class="swz-prog-row">
            <p class="swz-prog-label">Free Shipping Progress</p>
            <p id="swzProgLabel" class="swz-prog-val">$0 / $150</p>
        </div>
        <div class="swz-prog-track"><div class="swz-prog-fill" id="swzProgFill" style="width:0%"></div></div>
        <p id="swzProgMsg" class="swz-prog-msg" style="color:var(--swz-gray)">Add $150.00 more for free shipping!</p>
    </div>
    <div class="swz-cart-body" id="swzCartBody">
        <div style="text-align:center;padding:60px 20px;color:var(--swz-lgray)">
            <svg width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24" style="margin:0 auto 16px;display:block;opacity:.4"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
            <p style="font-family:'Playfair Display',serif;font-style:italic;font-size:22px;margin-bottom:6px;color:#aaa">Your bag is empty</p>
            <p style="font-size:13px;font-weight:300">Add some beautiful pieces to get started.</p>
        </div>
    </div>
    <div class="swz-cart-footer">
        <div class="swz-cart-totals">
            <div class="swz-total-row">
                <span class="swz-total-label">Subtotal</span>
                <span id="swzCartSubtotal" class="swz-total-val">$0.00</span>
            </div>
            <div class="swz-total-row">
                <span class="swz-total-label">Shipping</span>
                <span id="swzShippingVal" class="swz-shipping-val" style="color:var(--swz-gray);font-size:13px;font-weight:600">—</span>
            </div>
            <div class="swz-grand-row">
                <span class="swz-grand-label">Total</span>
                <span id="swzCartTotal" class="swz-grand-val">$0.00</span>
            </div>
        </div>
        <div class="swz-cart-btns">
            <button class="swz-cart-view-btn">View Cart</button>
            <button class="swz-cart-checkout-btn">Checkout →</button>
        </div>
    </div>
</div>

<!-- Image Zoom Modal -->
<div class="swz-zoom-overlay" id="swzZoomOverlay" onclick="swzCloseZoom()">
    <button class="swz-zoom-close" onclick="swzCloseZoom()">✕</button>
    <img id="swzZoomImg" class="swz-zoom-img" src="" alt="Zoom View">
</div>

<!-- Toast -->
<div class="swz-toast" id="swzToast">
    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
    <span id="swzToastMsg">Added to bag!</span>
</div>

<script>
/* ════════════════════════════════════════════════
   SWIZER PRODUCT DETAIL PAGE — JS
════════════════════════════════════════════════ */

// ── GALLERY IMAGES ─────────────────────────────
const SWZ_GALLERY_IMGS = [
    'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=1200',
    'https://images.unsplash.com/photo-1548126032-079a0fb0099d?q=80&w=1200',
    'https://images.unsplash.com/photo-1516762689617-e1cffcef479d?q=80&w=1200',
    'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?q=80&w=1200',
];
let swzCurImg = 0;

function swzSwitchImage(idx) {
    const mainEl = document.getElementById('swzMainImgEl');
    const thumbs = document.querySelectorAll('.swz-thumb');
    mainEl.classList.add('swz-fade-out');
    setTimeout(() => {
        mainEl.src = SWZ_GALLERY_IMGS[idx];
        mainEl.classList.remove('swz-fade-out');
    }, 220);
    thumbs.forEach((t, i) => t.classList.toggle('active', i === idx));
    swzCurImg = idx;
}
function swzPrevImage() { swzSwitchImage((swzCurImg - 1 + SWZ_GALLERY_IMGS.length) % SWZ_GALLERY_IMGS.length); }
function swzNextImage() { swzSwitchImage((swzCurImg + 1) % SWZ_GALLERY_IMGS.length); }

// Swipe support
(function () {
    let sx = 0;
    const el = document.getElementById('swzMainImg');
    el.addEventListener('touchstart', e => { sx = e.touches[0].clientX; }, { passive: true });
    el.addEventListener('touchend', e => {
        const dx = e.changedTouches[0].clientX - sx;
        if (Math.abs(dx) > 40) { dx < 0 ? swzNextImage() : swzPrevImage(); }
    });
})();

// ── ZOOM ────────────────────────────────────────
function swzOpenZoom() {
    document.getElementById('swzZoomImg').src = SWZ_GALLERY_IMGS[swzCurImg];
    document.getElementById('swzZoomOverlay').classList.add('open');
    document.body.style.overflow = 'hidden';
}
function swzCloseZoom() {
    document.getElementById('swzZoomOverlay').classList.remove('open');
    document.body.style.overflow = '';
}

// ── WISHLIST ────────────────────────────────────
let swzWished = false;
function swzToggleWish() {
    swzWished = !swzWished;
    const btn = document.getElementById('swzWishBtn');
    btn.classList.toggle('wished', swzWished);
    const svg = btn.querySelector('svg');
    svg.style.fill = swzWished ? '#d63333' : 'none';
    svg.style.stroke = swzWished ? '#d63333' : 'currentColor';
    swzShowToast(swzWished ? '❤️ Saved to Wishlist' : 'Removed from Wishlist');
}

// ── COLOR SELECT ────────────────────────────────
function swzSelectColor(el, name) {
    document.querySelectorAll('.swz-color-swatch').forEach(s => s.classList.remove('active'));
    el.classList.add('active');
    document.getElementById('swzColorLabel').textContent = name;
}

// ── SIZE SELECT ──────────────────────────────────
let swzSelectedSize = '';
function swzSelectSize(btn, size) {
    if (btn.classList.contains('oos')) return;
    document.querySelectorAll('.swz-size-btn:not(.oos)').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    swzSelectedSize = size;
    document.getElementById('swzSizeLabel').textContent = size;
    const stockMsg = document.getElementById('swzStockMsg');
    stockMsg.style.display = 'block';
}

// ── SIZE GUIDE ───────────────────────────────────
function swzOpenSizeGuide() {
    swzSwitchTab('details');
    setTimeout(() => {
        document.getElementById('swz-tab-details').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }, 100);
}

// ── QTY ──────────────────────────────────────────
let swzQty = 1;
function swzQtyChange(delta) {
    swzQty = Math.max(1, swzQty + delta);
    document.getElementById('swzQty').textContent = swzQty;
}

// ── ACCORDION ───────────────────────────────────
function swzToggleAccordion(trigger) {
    const body = trigger.nextElementSibling;
    const isOpen = body.classList.contains('open');
    // close all
    document.querySelectorAll('.swz-accordion-trigger').forEach(t => {
        t.classList.remove('open');
        t.nextElementSibling.classList.remove('open');
    });
    if (!isOpen) {
        trigger.classList.add('open');
        body.classList.add('open');
    }
}

// ── TABS ─────────────────────────────────────────
function swzSwitchTab(tabName) {
    document.querySelectorAll('.swz-tab-btn').forEach(b => b.classList.toggle('active', b.dataset.tab === tabName));
    document.querySelectorAll('.swz-tab-panel').forEach(p => p.classList.toggle('active', p.id === 'swz-tab-' + tabName));
}

// ── CART ─────────────────────────────────────────
let swzCartItems = [];

function swzOpenCartDrawer() {
    document.getElementById('swzCartOverlay').classList.add('open');
    document.getElementById('swzCartDrawer').classList.add('open');
    document.body.style.overflow = 'hidden';
}
function swzCloseCartDrawer() {
    document.getElementById('swzCartOverlay').classList.remove('open');
    document.getElementById('swzCartDrawer').classList.remove('open');
    document.body.style.overflow = '';
}

document.getElementById('swzCartBtn').onclick = swzOpenCartDrawer;
document.getElementById('swzBnavCart').onclick = swzOpenCartDrawer;
document.getElementById('swzCloseCart').onclick = swzCloseCartDrawer;
document.getElementById('swzCartOverlay').onclick = swzCloseCartDrawer;
document.addEventListener('keydown', e => { if (e.key === 'Escape') { swzCloseCartDrawer(); swzCloseZoom(); } });

const SWZ_PRODUCT = {
    id: 1, name: 'Premium Parka', cat: 'Outerwear',
    price: 129, img: 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=200'
};

function swzAddToCart() {
    const size = swzSelectedSize || 'M';
    const color = document.getElementById('swzColorLabel').textContent;
    const existing = swzCartItems.find(i => i.id === SWZ_PRODUCT.id && i.size === size);
    if (existing) { existing.qty += swzQty; }
    else {
        swzCartItems.push({ ...SWZ_PRODUCT, qty: swzQty, size, color });
    }
    swzRenderCart();
    swzOpenCartDrawer();
    swzShowToast('✓ Added to your bag!');
}

function swzCartUpdateQty(id, delta) {
    const item = swzCartItems.find(i => i.id === id);
    if (!item) return;
    item.qty = Math.max(1, item.qty + delta);
    swzRenderCart();
}
function swzCartRemove(id) {
    swzCartItems = swzCartItems.filter(i => i.id !== id);
    swzRenderCart();
}

function swzRenderCart() {
    const body = document.getElementById('swzCartBody');
    const total = swzCartItems.reduce((s, i) => s + i.price * i.qty, 0);
    const count = swzCartItems.reduce((s, i) => s + i.qty, 0);

    document.getElementById('swzCartCount').textContent = count;
    document.getElementById('swzBnavBadge').textContent = count;
    document.getElementById('swzDrawerCount').textContent = count + ' item' + (count !== 1 ? 's' : '');
    document.getElementById('swzCartSubtotal').textContent = '$' + total.toFixed(2);
    document.getElementById('swzCartTotal').textContent = '$' + total.toFixed(2);

    const pct = Math.min((total / 150) * 100, 100);
    document.getElementById('swzProgFill').style.width = pct + '%';
    const rem = 150 - total;
    if (rem <= 0) {
        document.getElementById('swzProgLabel').textContent = '$' + total.toFixed(0) + ' / $150 ✓';
        document.getElementById('swzProgMsg').textContent = "🎉 You've unlocked free shipping!";
        document.getElementById('swzProgMsg').style.color = 'var(--swz-green)';
        document.getElementById('swzShippingVal').textContent = 'FREE';
        document.getElementById('swzShippingVal').style.color = 'var(--swz-green)';
    } else {
        document.getElementById('swzProgLabel').textContent = '$' + total.toFixed(0) + ' / $150';
        document.getElementById('swzProgMsg').textContent = 'Add $' + rem.toFixed(2) + ' more for free shipping!';
        document.getElementById('swzProgMsg').style.color = 'var(--swz-gray)';
        document.getElementById('swzShippingVal').textContent = 'Calculated at checkout';
        document.getElementById('swzShippingVal').style.color = 'var(--swz-gray)';
    }

    if (swzCartItems.length === 0) {
        body.innerHTML = `<div style="text-align:center;padding:60px 20px;color:var(--swz-lgray)">
            <svg width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24" style="margin:0 auto 16px;display:block;opacity:.4"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
            <p style="font-family:'Playfair Display',serif;font-style:italic;font-size:22px;margin-bottom:6px;color:#aaa">Your bag is empty</p>
            <p style="font-size:13px;font-weight:300">Add some beautiful pieces to get started.</p>
        </div>`;
        return;
    }

    body.innerHTML = swzCartItems.map(item => `
        <div class="swz-cart-item">
            <img src="${item.img}" class="swz-cart-thumb" alt="${item.name}">
            <div class="swz-cart-item-info">
                <p class="swz-ci-cat">${item.cat}</p>
                <h4 class="swz-ci-name">${item.name}</h4>
                <p class="swz-ci-variant">Size: ${item.size} · ${item.color}</p>
                <div class="swz-ci-btm">
                    <div class="swz-qty-ctrl">
                        <button class="swz-qty-btn-sm" onclick="swzCartUpdateQty(${item.id},-1)">−</button>
                        <span class="swz-qty-display">${item.qty}</span>
                        <button class="swz-qty-btn-sm" onclick="swzCartUpdateQty(${item.id},1)">+</button>
                    </div>
                    <span class="swz-ci-price">$${(item.price * item.qty).toFixed(2)}</span>
                </div>
            </div>
            <button onclick="swzCartRemove(${item.id})" class="swz-ci-remove">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg>
            </button>
        </div>`).join('');
}

// ── TOAST ─────────────────────────────────────────
let swzToastTimer;
function swzShowToast(msg) {
    const toast = document.getElementById('swzToast');
    document.getElementById('swzToastMsg').textContent = msg;
    toast.classList.add('show');
    clearTimeout(swzToastTimer);
    swzToastTimer = setTimeout(() => toast.classList.remove('show'), 2800);
}

// ── RELATED PRODUCTS ─────────────────────────────
const SWZ_RELATED = [
    { name:'Wool Blend Overcoat', cat:'Outerwear', price:189, was:null, badge:'Eco-Conscious', badgeColor:'#4a7c59', img:'https://images.unsplash.com/photo-1516762689617-e1cffcef479d?q=80&w=600', rating:4.7, reviews:132 },
    { name:'Classic Trench Coat', cat:'Outerwear', price:245, was:null, badge:'Best Seller', badgeColor:'#2a7a4a', img:'https://images.unsplash.com/photo-1548126032-079a0fb0099d?q=80&w=600', rating:4.9, reviews:312 },
    { name:'Quilted Vest', cat:'Outerwear', price:118, was:150, badge:'On Sale', badgeColor:'#d63333', img:'https://images.unsplash.com/photo-1544022613-e87ca75a784a?q=80&w=600', rating:4.5, reviews:76 },
    { name:'Cashmere Crewneck', cat:'Knitwear', price:165, was:null, badge:'Signature', badgeColor:'#111', img:'https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?q=80&w=600', rating:4.8, reviews:201 },
];

const SWZ_RECENT = [
    { name:'Biker Leather Jacket', cat:'Luxury', price:299, was:null, badge:'Selling Fast', badgeColor:'#d63333', img:'https://images.unsplash.com/photo-1551028719-00167b16eac5?q=80&w=600', rating:4.8, reviews:178 },
    { name:'Minimalist Hoodie', cat:'Essentials', price:79, was:110, badge:'Limited', badgeColor:'#3a5a9a', img:'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?q=80&w=600', rating:4.6, reviews:89 },
    { name:'Tailored Blazer', cat:'Suiting', price:210, was:280, badge:'New Drop', badgeColor:'#1a3a6a', img:'https://images.unsplash.com/photo-1571945153237-4929e783af4a?q=80&w=600', rating:4.7, reviews:94 },
    { name:'Heritage Denim', cat:'Denim', price:135, was:null, badge:'Heritage', badgeColor:'#7a4a20', img:'https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=600', rating:4.6, reviews:155 },
];

function swzRelatedCard(p, i) {
    const saleFlag = p.was ? `<span class="swz-price-was">$${p.was.toFixed(2)}</span><span class="swz-price-off">${Math.round((1-p.price/p.was)*100)}% OFF</span>` : '';
    return `
    <div class="swz-prod-card" style="animation-delay:${i*.07}s">
        <div class="swz-card-img-wrap">
            <span class="swz-card-badge" style="background:${p.badgeColor}">${p.badge}</span>
            <div class="swz-card-actions">
                <button class="swz-card-icon-btn" title="Wishlist">
                    <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </button>
            </div>
            <img src="${p.img}" alt="${p.name}" loading="lazy">
            <div class="swz-quick-add">
                <p class="swz-qa-label">Select Size</p>
                <div class="swz-size-row-sm">
                    <button class="swz-size-btn-sm">S</button>
                    <button class="swz-size-btn-sm">M</button>
                    <button class="swz-size-btn-sm">L</button>
                </div>
                <button class="swz-add-btn-sm" onclick="swzShowToast('✓ Added to your bag!')">Add to Bag</button>
            </div>
        </div>
        <div class="swz-card-info">
            <p class="swz-card-cat">${p.cat}</p>
            <h3 class="swz-card-name">${p.name}</h3>
            <div class="swz-card-rating-sm">
                <span class="swz-stars-sm">${'★'.repeat(Math.floor(p.rating))}</span>
                <span class="swz-rating-count-sm">(${p.reviews})</span>
            </div>
            <div class="swz-card-price">
                <span class="swz-price-now">$${p.price.toFixed(2)}</span>
                ${saleFlag}
            </div>
        </div>
    </div>`;
}

document.getElementById('swzRelatedGrid').innerHTML = SWZ_RELATED.map(swzRelatedCard).join('');
document.getElementById('swzRecentGrid').innerHTML = SWZ_RECENT.map(swzRelatedCard).join('');

// init
swzRenderCart();
</script>
</body>
</html>