<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swizer – Premium Apparel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Manrope:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --black: #111111;
            --off: #f6f5f2;
            --gray: #767676;
            --lgray: #b0b0b0;
            --accent: #c9a96e;
            --red: #d63333;
            --white: #ffffff;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Manrope', sans-serif;
            font-size: 15px;
            line-height: 1.7;
            background: #fff;
            color: var(--black);
            overflow-x: hidden;
        }

        .fp {
            font-family: 'Cormorant Garamond', serif;
            letter-spacing: 0.5px;
        }

        .fs {
            font-family: 'Manrope', sans-serif;
        }

        /* ── MARQUEE ── */
        .marquee-track {
            display: flex;
            width: max-content;
            animation: marquee 32s linear infinite;
            color: #fff;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .22em;
            text-transform: uppercase;
        }

        @keyframes marquee {
            to {
                transform: translateX(-50%);
            }
        }

        .marquee-sep {
            opacity: 0.3;
        }

        .marquee-item {
            padding: 0 48px;
        }

        /* ── ANNOUNCEMENT BAR ── */
        .announcement-bar {
            overflow: hidden;
            padding: 10px 0;
            background: var(--black);
        }

        /* ── NAV LINKS ── */
        .nav-link {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--gray);
            text-decoration: none;
            position: relative;
            transition: color .25s;
            white-space: nowrap;
            padding-bottom: 2px;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 1.5px;
            background: var(--black);
            transition: width .3s;
        }

        .nav-link:hover {
            color: var(--black);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link.sale {
            color: var(--red);
        }

        /* ── ICON BTN ── */
        .icon-btn {
            background: none;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            transition: background .2s;
            flex-shrink: 0;
        }

        .icon-btn:hover {
            background: #f2f2f2;
        }

        /* ── LOGO ── */
        .logo-link {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 22px;
            letter-spacing: -.01em;
            color: var(--black);
            text-decoration: none;
            line-height: 1;
        }

        /* ── SEARCH ── */
        .search-input {
            background: #f4f4f4;
            border: 1px solid transparent;
            border-radius: 4px;
            padding: 9px 14px 9px 36px;
            font-family: 'Open Sans', sans-serif;
            font-size: 13px;
            width: 190px;
            outline: none;
            transition: all .3s;
            color: var(--black);
        }

        .search-input:focus {
            width: 260px;
            background: #fff;
            border-color: #ddd;
        }

        .search-wrap {
            position: relative;
        }

        .search-icon {
            position: absolute;
            left: 11px;
            top: 10px;
            width: 14px;
            height: 14px;
            color: #aaa;
        }

        /* ── CART COUNT BADGE ── */
        .cart-count-badge {
            position: absolute;
            top: -2px;
            right: -2px;
            background: var(--black);
            color: #fff;
            font-size: 9px;
            font-weight: 700;
            width: 17px;
            height: 17px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Open Sans', sans-serif;
        }

        /* ── MOBILE MENU ── */
        #mobile-menu {
            position: fixed;
            inset: 0;
            background: #fff;
            z-index: 9997;
            transform: translateX(-100%);
            transition: transform .4s ease;
            display: flex;
            flex-direction: column;
            padding: 90px 32px 40px;
        }

        #mobile-menu.open {
            transform: none;
        }

        .mobile-nav-link {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 42px;
            color: var(--black);
            text-decoration: none;
        }

        .mobile-nav-link.sale {
            color: var(--red);
        }

        .mobile-footer-link {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--gray);
            text-decoration: none;
        }

        .mobile-footer-sep {
            color: #ddd;
        }

        /* ── HERO ── */
        .hero-wrap {
            position: relative;
            height: 90vh;
            min-height: 560px;
            overflow: hidden;
            background: #111;
        }

        .hero-slide {
            position: absolute;
            inset: 0;
            z-index: 0;
            opacity: 0;
            transition: opacity 1.2s ease;
        }

        .hero-slide.active {
            opacity: 1;
        }

        .hero-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .hero-grad {
            position: absolute;
            inset: 0;
            z-index: 1;
            background: linear-gradient(115deg, rgba(0, 0, 0, .82) 0%, rgba(0, 0, 0, .44) 50%, rgba(0, 0, 0, .10) 100%);
        }

        .hero-content {
            position: absolute;
            inset: 0;
            z-index: 20;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 6%;
        }

        .hero-tag {
            display: block;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .45em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .6);
            margin-bottom: 16px;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-weight: 900;
            font-size: clamp(50px, 8.5vw, 118px);
            line-height: 1;
            letter-spacing: -.02em;
            color: #fff;
            margin-bottom: 20px;
            font-style: italic;
        }

        .hero-sub {
            font-size: clamp(14px, 1.4vw, 16px);
            font-weight: 300;
            color: rgba(255, 255, 255, .72);
            line-height: 1.75;
            max-width: 420px;
            margin-bottom: 36px;
        }

        .hero-btns {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .btn-outline-white {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, .08);
            backdrop-filter: blur(10px);
            color: #fff;
            border: 1.5px solid rgba(255, 255, 255, .5);
            font-family: 'Open Sans', sans-serif;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            padding: 15px 34px;
            cursor: pointer;
            transition: all .3s;
            text-decoration: none;
        }

        .btn-outline-white:hover {
            background: #fff;
            color: var(--black);
            border-color: #fff;
        }

        .btn-outline-white.dim {
            border-color: rgba(255, 255, 255, .25);
            background: rgba(0, 0, 0, .28);
        }

        .btn-dark {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--black);
            color: #fff;
            border: 1.5px solid var(--black);
            font-family: 'Open Sans', sans-serif;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            padding: 15px 34px;
            cursor: pointer;
            transition: all .3s;
        }

        .btn-dark:hover {
            background: transparent;
            color: var(--black);
        }

        /* Hero controls */
        .hero-ctrl {
            position: absolute;
            z-index: 20;
        }

        .hero-arrows {
            bottom: 36px;
            right: 6%;
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .hero-arrows-btns {
            gap: 8px;
        }

        .hero-nav-btn {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            border: 1.5px solid rgba(255, 255, 255, .32);
            background: transparent;
            color: #fff;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all .25s;
        }

        .hero-nav-btn:hover {
            background: #fff;
            color: #000;
        }

        .hero-counter {
            color: #fff;
            display: flex;
            align-items: baseline;
            gap: 3px;
        }

        .hero-counter-num {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 48px;
            line-height: 1;
            font-style: italic;
        }

        .hero-counter-total {
            font-size: 20px;
            color: rgba(255, 255, 255, .35);
            font-weight: 300;
        }

        .hero-dots {
            bottom: 44px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
        }

        .hdot {
            display: inline-block;
            height: 2px;
            width: 8px;
            border: none;
            cursor: pointer;
            background: rgba(255, 255, 255, .32);
            transition: all .35s;
            border-radius: 2px;
        }

        .hdot.on {
            width: 28px;
            background: #fff;
        }

        .hero-scroll {
            bottom: 36px;
            left: 6%;
            color: rgba(255, 255, 255, .4);
        }

        .hero-scroll-label {
            font-size: 9px;
            font-weight: 600;
            letter-spacing: .4em;
            text-transform: uppercase;
        }

        .hero-scroll-track {
            width: 1px;
            height: 50px;
            background: rgba(255, 255, 255, .15);
            position: relative;
            overflow: hidden;
        }

        @keyframes scrl {
            0% {
                top: 0;
                opacity: 1;
            }

            100% {
                top: 100%;
                opacity: 0;
            }
        }

        .scrl-inner {
            position: absolute;
            top: 0;
            width: 100%;
            height: 38%;
            background: rgba(255, 255, 255, .7);
            animation: scrl 1.8s ease-in-out infinite;
        }

        /* ── ROUND BTN ── */
        .rnd {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            border: 1.5px solid;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all .25s;
            background: transparent;
            flex-shrink: 0;
        }

        /* ── SECTION HELPERS ── */
        .eyebrow {
            display: block;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .4em;
            text-transform: uppercase;
            color: var(--gray);
            margin-bottom: 10px;
        }

        .sec-title {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: clamp(26px, 3.8vw, 46px);
            line-height: 1.05;
            letter-spacing: -.01em;
        }

        .sec-sub {
            font-size: 14px;
            font-weight: 300;
            color: var(--gray);
            margin-top: 6px;
        }

        .divider {
            width: 40px;
            height: 2px;
            background: var(--accent);
            margin: 14px auto 0;
        }

        /* ── STATS ── */
        .stats-section {
            padding: 56px 0;
            background: var(--black);
        }

        .stat-num {
            font-size: clamp(38px, 5vw, 58px);
            font-family: 'Cormorant Garamond', serif;
            font-weight: 800;
            color: #fff;
            letter-spacing: 0.5px;
        }

        .stat-label {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--gray);
            margin-top: 8px;
        }

        /* ── CATEGORIES ── */
        .cat-label {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        /* ── PRODUCT CARD ── */
        .prod-card {
            position: relative;
            background: #fff;
            border-bottom: 2px solid transparent;
            transition: border-color .25s;
            padding: 10px;
        }

        .prod-card:hover {
            border-color: var(--black);
        }

        .card-img {
            position: relative;
            overflow: hidden;
            aspect-ratio: 3/4;
            background: var(--off);
        }

        .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform .9s cubic-bezier(.165, .84, .44, 1);
        }

        .prod-card:hover .card-img img {
            transform: scale(1.08);
        }

        .card-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 6;
            font-size: 9px;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: #fff;
            padding: 4px 10px;
            font-family: 'Open Sans', sans-serif;
        }

        .card-icons {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 6;
            display: flex;
            flex-direction: column;
            gap: 6px;
            transform: translateX(52px);
            transition: transform .35s cubic-bezier(.165, .84, .44, 1);
        }

        .prod-card:hover .card-icons {
            transform: translateX(0);
        }

        .card-icon-btn {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #fff;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .14);
            transition: all .22s;
            color: var(--gray);
        }

        .card-icon-btn:hover {
            background: var(--black);
            color: #fff;
        }

        .card-icon-btn.wished {
            color: var(--red);
        }

        .card-icon-btn.wished svg {
            fill: var(--red);
            stroke: var(--red);
        }

        .quick-add {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, .95);
            backdrop-filter: blur(8px);
            padding: 12px 12px 14px;
            transform: translateY(100%);
            transition: transform .32s cubic-bezier(.165, .84, .44, 1);
            z-index: 5;
        }

        .prod-card:hover .quick-add {
            transform: none;
        }

        .qa-label {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: var(--gray);
            text-align: center;
            margin-bottom: 8px;
        }

        .size-btn {
            width: 34px;
            height: 34px;
            border: 1.5px solid #ddd;
            background: #fff;
            font-family: 'Open Sans', sans-serif;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all .2s;
        }

        .size-btn:hover {
            background: var(--black);
            color: #fff;
            border-color: var(--black);
        }

        .add-btn-card {
            width: 100%;
            margin-top: 9px;
            background: var(--black);
            color: #fff;
            border: none;
            font-family: 'Open Sans', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
            padding: 11px;
            cursor: pointer;
            transition: background .2s;
        }

        .add-btn-card:hover {
            background: #333;
        }

        .card-info {
            padding: 14px 2px 8px;
        }

        .card-cat {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--lgray);
            margin-bottom: 4px;
        }

        .card-name {
            font-size: 14px;
            font-weight: 600;
            color: var(--black);
            margin-bottom: 6px;
        }

        .card-price {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .price-now {
            font-size: 15px;
            font-weight: 700;
        }

        .price-was {
            font-size: 13px;
            font-weight: 300;
            color: var(--lgray);
            text-decoration: line-through;
        }

        .price-off {
            font-size: 10px;
            font-weight: 700;
            color: var(--red);
            margin-left: auto;
        }

        /* ── SWIPER CLIP ── */
        .swiper-clip {
            overflow: hidden;
        }

        .swiper {
            width: 100%;
        }

        /* ── PRODUCT SECTION HEADER ── */
        .prod-sec-nav-btn {
            border-color: #ccc;
            color: var(--black);
        }

        .prod-sec-nav-btn:hover {
            background: var(--black);
            color: #fff;
            border-color: var(--black);
        }

        /* ── LOOKBOOK ── */
        .lb-card {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .lb-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .85s cubic-bezier(.165, .84, .44, 1);
            display: block;
        }

        .lb-card:hover img {
            transform: scale(1.06);
        }

        .lb-grad {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, .75) 0%, transparent 55%);
            pointer-events: none;
        }

        .lb-chapter {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .4em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .5);
            margin-bottom: 8px;
        }

        .lb-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 36px;
            line-height: 1.1;
            font-style: italic;
            margin-bottom: 16px;
            letter-spacing: 0.5px;
        }

        .lb-explore-btn {
            background: none;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, .55);
            color: #fff;
            font-family: 'Open Sans', sans-serif;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .18em;
            text-transform: uppercase;
            padding-bottom: 4px;
            cursor: pointer;
        }

        .lb-chapter-sm {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .3em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .5);
            margin-bottom: 4px;
        }

        .lb-title-sm {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 24px;
            font-style: italic;
            letter-spacing: 0.5px;
        }

        .lb-content-lg {
            position: absolute;
            bottom: 0;
            left: 0;
            padding: 32px;
            color: white;
            z-index: 2;
        }

        .lb-content-sm {
            position: absolute;
            bottom: 0;
            left: 0;
            padding: 24px;
            color: white;
            z-index: 2;
        }

        /* ── FEATURES ── */
        .features-section {
            padding: 64px 0;
            border-top: 1px solid #f3f4f6;
            border-bottom: 1px solid #f3f4f6;
            background: var(--off);
        }

        .feature-icon-wrap {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            background: var(--black);
        }

        .feature-title {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            margin-bottom: 4px;
        }

        .feature-desc {
            font-size: 13px;
            font-weight: 300;
            color: var(--gray);
        }

        /* ── BRAND STORY ── */
        .brand-story-section {
            overflow: hidden;
            background: var(--black);
        }

        .brand-story-img {
            position: relative;
            overflow: hidden;
            height: 560px;
            min-height: 320px;
        }

        .brand-story-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: .78;
        }

        .brand-story-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 64px 32px;
            color: white;
        }

        @media (min-width: 768px) {
            .brand-story-content {
                padding: 64px;
            }
        }

        .brand-story-eyebrow {
            color: var(--gray);
        }

        .brand-story-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 800;
            font-size: clamp(34px, 5vw, 60px);
            line-height: 1.05;
            font-style: italic;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
        }

        .brand-story-desc {
            color: #9a9a9a;
            font-size: 15px;
            font-weight: 300;
            max-width: 420px;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .brand-stats {
            display: flex;
            gap: 32px;
            margin-bottom: 40px;
        }

        .brand-stat-num {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 36px;
            font-style: italic;
            letter-spacing: 0.5px;
        }

        .brand-stat-label {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--gray);
            margin-top: 4px;
        }

        .brand-stat-sep {
            width: 1px;
            background: rgba(255, 255, 255, .1);
        }

        /* ── CART ── */
        #cart-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .52);
            backdrop-filter: blur(4px);
            opacity: 0;
            pointer-events: none;
            transition: opacity .35s;
            z-index: 9998;
        }

        #cart-overlay.open {
            opacity: 1;
            pointer-events: auto;
        }

        #cart-drawer {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            width: 460px;
            max-width: 100vw;
            background: #fff;
            display: flex;
            flex-direction: column;
            transform: translateX(100%);
            transition: transform .4s cubic-bezier(.165, .84, .44, 1);
            z-index: 9999;
            box-shadow: -16px 0 60px rgba(0, 0, 0, .14);
        }

        #cart-drawer.open {
            transform: none;
        }

        .cart-drawer-header {
            padding: 20px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #f0f0f0;
            flex-shrink: 0;
        }

        .cart-drawer-title-wrap {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .cart-drawer-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 20px;
            font-style: italic;
        }

        .drawer-count-badge {
            background: var(--black);
            color: #fff;
            font-size: 10px;
            font-weight: 700;
            padding: 3px 12px;
            border-radius: 999px;
            font-family: 'Open Sans', sans-serif;
        }

        .cart-close-btn {
            width: 36px;
            height: 36px;
            border: none;
            background: none;
            cursor: pointer;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background .2s;
        }

        .cart-close-btn:hover {
            background: #f3f3f3;
        }

        .cart-progress-wrap {
            padding: 14px 24px;
            background: #f8f8f6;
            border-bottom: 1px solid #f0f0f0;
            flex-shrink: 0;
        }

        .cart-progress-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
        }

        .cart-progress-label-text {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--gray);
        }

        .cart-progress-value {
            font-size: 11px;
            font-weight: 700;
        }

        .progress-bar {
            height: 3px;
            background: #ebebeb;
            border-radius: 2px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: var(--black);
            border-radius: 2px;
            transition: width .4s;
        }

        .cart-progress-msg {
            font-size: 11px;
            font-weight: 600;
            margin-top: 8px;
            color: #2a7a4a;
        }

        .cart-items-list {
            flex: 1;
            overflow-y: auto;
            padding: 0 24px;
        }

        .cart-item {
            display: flex;
            gap: 14px;
            padding: 18px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .cart-item img {
            width: 84px;
            height: 104px;
            object-fit: cover;
            flex-shrink: 0;
            border-radius: 1px;
        }

        .cart-item-body {
            flex: 1;
            min-width: 0;
        }

        .cart-item-cat {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: var(--gray);
            margin-bottom: 3px;
        }

        .cart-item-name {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .cart-item-variant {
            font-size: 13px;
            font-weight: 300;
            color: var(--gray);
            margin-bottom: 14px;
        }

        .cart-item-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .qty-wrap {
            display: flex;
            align-items: center;
            border: 1.5px solid #e0e0e0;
        }

        .qty-btn {
            width: 33px;
            height: 33px;
            border: 1.5px solid #e0e0e0;
            background: #fff;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all .2s;
            font-family: 'Open Sans', sans-serif;
            flex-shrink: 0;
        }

        .qty-btn:hover {
            background: var(--black);
            color: #fff;
            border-color: var(--black);
        }

        .qty-val {
            width: 38px;
            text-align: center;
            font-size: 14px;
            font-weight: 700;
        }

        .item-price {
            font-size: 15px;
            font-weight: 700;
        }

        .cart-remove-btn {
            background: none;
            border: none;
            cursor: pointer;
            color: #ccc;
            align-self: flex-start;
            margin-top: 2px;
            flex-shrink: 0;
            transition: color .2s;
        }

        .cart-remove-btn:hover {
            color: var(--red);
        }

        .cart-footer {
            flex-shrink: 0;
            border-top: 1px solid #f0f0f0;
        }

        .cart-totals {
            padding: 20px 24px;
        }

        .cart-subtotal-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .cart-subtotal-label {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--gray);
        }

        .cart-subtotal-val {
            font-size: 18px;
            font-weight: 700;
        }

        .cart-shipping-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 4px;
        }

        .cart-shipping-label {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--gray);
        }

        .cart-shipping-val {
            font-size: 13px;
            font-weight: 700;
            color: #2a7a4a;
        }

        .cart-total-row {
            display: flex;
            justify-content: space-between;
            margin-top: 18px;
            padding-top: 18px;
            border-top: 1px solid #f0f0f0;
        }

        .cart-total-label {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 18px;
            font-style: italic;
        }

        .cart-total-val {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 24px;
        }

        .cart-actions {
            padding: 0 24px 24px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .cart-view-btn {
            padding: 15px;
            border: 1.5px solid #e0e0e0;
            background: #fff;
            font-family: 'Open Sans', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            cursor: pointer;
            transition: background .2s;
        }

        .cart-view-btn:hover {
            background: #f7f7f7;
        }

        .cart-checkout-btn {
            padding: 15px;
            background: var(--black);
            color: #fff;
            border: none;
            font-family: 'Open Sans', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            cursor: pointer;
            transition: opacity .2s;
        }

        .cart-checkout-btn:hover {
            opacity: .85;
        }

        /* ── PROFILE DROPDOWN ── */
        #profile-dropdown {
            position: absolute;
            top: calc(100% + 8px);
            right: 0;
            background: #fff;
            border: 1px solid #e8e8e8;
            min-width: 175px;
            padding: 6px 0;
            box-shadow: 0 8px 30px rgba(0, 0, 0, .10);
            opacity: 0;
            pointer-events: none;
            transform: translateY(-6px);
            transition: all .25s;
            z-index: 200;
        }

        #profile-dropdown.open {
            opacity: 1;
            pointer-events: auto;
            transform: none;
        }

        .drop-link {
            display: block;
            padding: 11px 18px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--gray);
            text-decoration: none;
            transition: all .2s;
        }

        .drop-link:hover {
            color: var(--black);
            background: #f7f7f7;
        }

        .drop-link-red {
            color: var(--red) !important;
        }

        /* ── TESTIMONIALS ── */
        .testimonials-section {
            padding: 80px 0;
            background: white;
        }

        .t-slide {
            display: none;
        }

        .t-slide.active {
            display: block;
            animation: fadeUp .5s ease;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        .t-stars {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            color: var(--accent);
            font-size: 20px;
            letter-spacing: .18em;
        }

        .t-quote {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: clamp(20px, 3.2vw, 34px);
            font-style: italic;
            line-height: 1.3;
            margin-bottom: 28px;
            color: var(--black);
            letter-spacing: 0.5px;
        }

        .t-author-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
        }

        .t-author-img {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            object-fit: cover;
        }

        .t-author-name {
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        .t-author-role {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--gray);
            margin-top: 2px;
        }

        .t-nav-wrap {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 16px;
            margin-top: 48px;
        }

        .t-dot {
            height: 5px;
            background: #d1d5db;
            border: none;
            cursor: pointer;
            border-radius: 3px;
            transition: all .3s;
        }

        .t-dot-active {
            width: 24px;
            background: var(--black);
        }

        .t-dot-inactive {
            width: 8px;
        }

        .t-prev-btn {
            border-color: #e0e0e0;
            color: var(--black);
        }

        .t-next-btn {
            border-color: #e0e0e0;
            color: var(--black);
        }

        /* ── INSTAGRAM ── */
        .insta-section {}

        .insta-header {
            text-align: center;
            padding: 40px 0;
        }

        .insta-handle {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 28px;
            font-style: italic;
            letter-spacing: 0.5px;
        }

        .insta-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2px;
        }

        @media (min-width: 768px) {
            .insta-grid {
                grid-template-columns: repeat(6, 1fr);
            }
        }

        .insta-icon-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color .2s;
        }

        .insta-icon {
            width: 28px;
            height: 28px;
            color: white;
            opacity: 0;
            transition: opacity .2s;
        }

        .group:hover .insta-icon-overlay {
            background: rgba(0, 0, 0, 0.28);
        }

        .group:hover .insta-icon {
            opacity: 1;
        }

        /* ── NEWSLETTER ── */
        .newsletter-section {
            padding: 80px 0;
            text-align: center;
            background: var(--black);
            color: white;
        }

        .newsletter-eyebrow {
            color: var(--gray);
        }

        .newsletter-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 800;
            font-size: clamp(34px, 5vw, 54px);
            font-style: italic;
            line-height: 1;
            margin-bottom: 12px;
            letter-spacing: 0.5px;
        }

        .newsletter-desc {
            color: #9a9a9a;
            font-size: 15px;
            font-weight: 300;
            line-height: 1.75;
            margin-bottom: 40px;
        }

        .newsletter-form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        @media (min-width: 640px) {
            .newsletter-form {
                flex-direction: row;
            }
        }

        .newsletter-input {
            flex: 1;
            background: transparent;
            border: 1.5px solid #2a2a2a;
            color: #fff;
            padding: 15px 18px;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            outline: none;
            transition: border-color .25s;
        }

        .newsletter-input:focus {
            border-color: #555;
        }

        .newsletter-btn {
            background: #fff;
            color: var(--black);
            padding: 15px 30px;
            font-family: 'Open Sans', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
            border: none;
            cursor: pointer;
            white-space: nowrap;
            transition: background .2s;
        }

        .newsletter-btn:hover {
            background: #e8e8e8;
        }

        .newsletter-note {
            margin-top: 16px;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: #3a3a3a;
        }

        /* ── FOOTER ── */
        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 22px;
            color: var(--black);
            text-decoration: none;
            font-style: italic;
        }

        .footer-desc {
            color: var(--gray);
            font-size: 14px;
            font-weight: 300;
            max-width: 290px;
            margin-top: 20px;
            line-height: 1.6;
        }

        .footer-social-btn {
            width: 40px;
            height: 40px;
            border: 1px solid #e5e7eb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 700;
            color: var(--black);
            text-decoration: none;
            transition: all .2s;
        }

        .footer-social-btn:hover {
            background: var(--black);
            color: #fff;
        }

        .footer-col-title {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            margin-bottom: 18px;
        }

        .footer-link {
            font-size: 14px;
            font-weight: 300;
            color: var(--gray);
            text-decoration: none;
            transition: color .2s;
        }

        .footer-link:hover {
            color: var(--black);
        }

        .footer-bottom {
            margin-top: 64px;
            padding-top: 32px;
            border-top: 1px solid #f9fafb;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
        }

        @media (min-width: 768px) {
            .footer-bottom {
                flex-direction: row;
                justify-content: space-between;
            }
        }

        .footer-copy {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #bbb;
        }

        .footer-alert-wrap {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .footer-alert-label {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--red);
        }

        .footer-alert-text {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: #bbb;
        }

        /* ── QUICK VIEW MODAL ── */
        #qv-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .55);
            backdrop-filter: blur(4px);
            opacity: 0;
            pointer-events: none;
            transition: opacity .3s;
            z-index: 9996;
        }

        #qv-modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -60%);
            width: 90%;
            max-width: 480px;
            background: #fff;
            z-index: 9997;
            opacity: 0;
            pointer-events: none;
            transition: all .35s cubic-bezier(.165, .84, .44, 1);
            padding: 32px;
        }

        .qv-close-btn {
            position: absolute;
            top: 14px;
            right: 14px;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--gray);
        }

        .qv-cat {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--gray);
            margin-bottom: 4px;
        }

        .qv-name {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 24px;
            font-style: italic;
            margin-bottom: 8px;
        }

        .qv-price {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .qv-desc {
            font-size: 14px;
            font-weight: 300;
            color: var(--gray);
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .qv-add-btn {
            width: 100%;
            background: var(--black);
            color: #fff;
            border: none;
            font-family: 'Open Sans', sans-serif;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
            padding: 15px;
            cursor: pointer;
            transition: background .2s;
        }

        .qv-add-btn:hover {
            background: #333;
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 767px) {
            #cart-drawer {
                width: 100vw;
            }

            .hero-title {
                font-size: clamp(44px, 13vw, 68px);
            }
        }

        @media (max-width: 640px) {
            .hero-content {
                padding: 0 5%;
            }

            .btn-outline-white {
                padding: 13px 22px;
                font-size: 11px;
            }

            .hero-sub {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

    <!-- ═══ ANNOUNCEMENT BAR ═══ -->
    <div class="announcement-bar">
        <div class="marquee-track">
            <span class="marquee-item">Free Shipping on Orders Over $150</span><span class="marquee-sep">✦</span>
            <span class="marquee-item">Winter Collection 2026 — Out Now</span><span class="marquee-sep">✦</span>
            <span class="marquee-item">Use Code SWIZER15 for 15% Off</span><span class="marquee-sep">✦</span>
            <span class="marquee-item">Free Returns Within 30 Days</span><span class="marquee-sep">✦</span>
            <span class="marquee-item">Free Shipping on Orders Over $150</span><span class="marquee-sep">✦</span>
            <span class="marquee-item">Winter Collection 2026 — Out Now</span><span class="marquee-sep">✦</span>
            <span class="marquee-item">Use Code SWIZER15 for 15% Off</span><span class="marquee-sep">✦</span>
            <span class="marquee-item">Free Returns Within 30 Days</span><span class="marquee-sep">✦</span>
        </div>
    </div>

    <!-- ═══ HEADER ═══ -->
    <header class="sticky top-0 z-50 bg-white/75 backdrop-blur-md border-b border-gray-200/60">
        <div
            class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 h-16 md:h-[68px] flex items-center justify-between gap-4">
            <div class="flex items-center gap-8">
                <a href="#" class="logo-link">Swizer</a>
                <nav class="hidden xl:flex items-center gap-7">
                    <a href="#" class="nav-link">Men</a>
                    <a href="#" class="nav-link">Women</a>
                    <a href="#" class="nav-link">New Arrivals</a>
                    <a href="#" class="nav-link">Accessories</a>
                    <a href="#" class="nav-link sale">Sale</a>
                </nav>
            </div>
            <div class="flex items-center gap-1 md:gap-2">
                <div class="search-wrap hidden lg:block">
                    <input type="text" placeholder="Search products…" class="search-input">
                    <svg class="search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <button class="icon-btn hidden sm:flex" title="Wishlist">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>
                <div class="relative hidden sm:block" id="profile-wrap">
                    <button class="icon-btn" id="profile-btn" title="Account">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                    </button>
                    <div id="profile-dropdown">
                        <a href="#" class="drop-link">My Account</a>
                        <a href="#" class="drop-link">My Orders</a>
                        <a href="#" class="drop-link">Wishlist</a>
                        <a href="#" class="drop-link drop-link-red">Sign Out</a>
                    </div>
                </div>
                <button id="header-cart-btn" class="icon-btn relative" title="Cart">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <span id="cart-count" class="cart-count-badge">2</span>
                </button>
                <button class="icon-btn xl:hidden" id="mobile-menu-btn">
                    <svg width="21" height="21" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div id="mobile-menu">
        <button id="mobile-close-btn" class="absolute top-5 right-5 icon-btn">
            <svg width="23" height="23" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                <path d="M18 6L6 18M6 6l12 12" />
            </svg>
        </button>
        <nav class="flex flex-col gap-6">
            <a href="#" class="mobile-nav-link">Men</a>
            <a href="#" class="mobile-nav-link">Women</a>
            <a href="#" class="mobile-nav-link">New Arrivals</a>
            <a href="#" class="mobile-nav-link">Accessories</a>
            <a href="#" class="mobile-nav-link sale">Sale</a>
        </nav>
        <div class="mt-auto pt-8 border-t border-gray-100 flex gap-6">
            <a href="#" class="mobile-footer-link">Sign In</a>
            <span class="mobile-footer-sep">|</span>
            <a href="#" class="mobile-footer-link">My Orders</a>
        </div>
    </div>

    <main>

        <!-- ═══ HERO ═══ -->
        <div class="hero-wrap">
            <div class="hero-slide active">
                <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?q=80&w=2070" alt="Hero 1">
                <div class="hero-grad"></div>
            </div>
            <div class="hero-slide">
                <img src="https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?q=80&w=2070" alt="Hero 2">
                <div class="hero-grad"></div>
            </div>
            <div class="hero-slide">
                <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?q=80&w=2070" alt="Hero 3">
                <div class="hero-grad"></div>
            </div>

            <div class="hero-content">
                <span class="hero-tag">New Season · Winter 2026</span>
                <h1 class="hero-title">Elevated<br>Essentials</h1>
                <p class="hero-sub">Refined silhouettes crafted from the world's finest materials. Wear what lasts.</p>
                <div class="hero-btns">
                    <button class="btn-outline-white">Explore Collection</button>
                    <button class="btn-outline-white dim">Shop Sale →</button>
                </div>
            </div>

            <!-- Arrows + Counter -->
            <div class="hero-ctrl hero-arrows">
                <div class="hidden md:flex hero-arrows-btns" style="display:flex;gap:8px">
                    <button id="hero-prev" class="hero-nav-btn">
                        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2.2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="hero-next" class="hero-nav-btn">
                        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2.2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <div class="hero-counter">
                    <span id="slide-current" class="hero-counter-num">01</span>
                    <span class="hero-counter-total">/ 03</span>
                </div>
            </div>

            <!-- Dots -->
            <div class="hero-ctrl hero-dots">
                <button class="hdot on" data-idx="0"></button>
                <button class="hdot" data-idx="1"></button>
                <button class="hdot" data-idx="2"></button>
            </div>

            <!-- Scroll cue -->
            <div class="hero-ctrl hero-scroll hidden md:flex flex-col items-center gap-2">
                <span class="hero-scroll-label">Scroll</span>
                <div class="hero-scroll-track">
                    <div class="scrl-inner"></div>
                </div>
            </div>
        </div>

        <!-- ═══ STATS ═══ -->
        <section class="stats-section">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div>
                        <div class="stat-num fp font-extrabold">240K+</div>
                        <div class="stat-label">Happy Customers</div>
                    </div>
                    <div>
                        <div class="stat-num fp font-extrabold">98%</div>
                        <div class="stat-label">Satisfaction Rate</div>
                    </div>
                    <div>
                        <div class="stat-num fp font-extrabold">120+</div>
                        <div class="stat-label">Styles This Season</div>
                    </div>
                    <div>
                        <div class="stat-num fp font-extrabold">30</div>
                        <div class="stat-label">Day Free Returns</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ CATEGORIES ═══ -->
        <section class="py-20 bg-white">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <span class="eyebrow">Browse</span>
                    <h2 class="sec-title">Shop By Category</h2>
                    <div class="divider"></div>
                </div>
                <div class="grid grid-cols-3 md:grid-cols-6 gap-5 md:gap-7">
                    <div class="flex flex-col items-center gap-3 group cursor-pointer">
                        <div class="w-full aspect-square rounded-full overflow-hidden border"
                            style="background:var(--off)">
                            <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=400&fit=crop"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <span class="cat-label">Women</span>
                    </div>
                    <div class="flex flex-col items-center gap-3 group cursor-pointer">
                        <div class="w-full aspect-square rounded-full overflow-hidden border"
                            style="background:var(--off)">
                            <img src="https://images.unsplash.com/photo-1505022610485-0249ba5b3675?w=400&fit=crop"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <span class="cat-label">Men</span>
                    </div>
                    <div class="flex flex-col items-center gap-3 group cursor-pointer">
                        <div class="w-full aspect-square rounded-full overflow-hidden border"
                            style="background:var(--off)">
                            <img src="https://images.unsplash.com/photo-1514327605112-b887c0e61c0a?w=400&fit=crop"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <span class="cat-label">Outerwear</span>
                    </div>
                    <div class="flex flex-col items-center gap-3 group cursor-pointer">
                        <div class="w-full aspect-square rounded-full overflow-hidden border"
                            style="background:var(--off)">
                            <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?w=400&fit=crop"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <span class="cat-label">T-Shirts</span>
                    </div>
                    <div class="flex flex-col items-center gap-3 group cursor-pointer">
                        <div class="w-full aspect-square rounded-full overflow-hidden border"
                            style="background:var(--off)">
                            <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=400&fit=crop"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <span class="cat-label">Accessories</span>
                    </div>
                    <div class="flex flex-col items-center gap-3 group cursor-pointer">
                        <div class="w-full aspect-square rounded-full overflow-hidden border"
                            style="background:var(--off)">
                            <img src="https://images.unsplash.com/photo-1551488831-00ddcb6c6bd3?w=400&fit=crop"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <span class="cat-label">Footwear</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ PRODUCT SLIDER 1 — Season Must-Haves ═══ -->
        <section class="py-20" style="background:var(--off)">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-10 gap-4">
                    <div>
                        <span class="eyebrow">Curated for You</span>
                        <h2 class="sec-title">Season Must-Haves</h2>
                        <p class="sec-sub">Selected pieces from our winter drop.</p>
                    </div>
                    <div class="flex gap-2 flex-shrink-0">
                        <button class="s1-prev rnd prod-sec-nav-btn">
                            <svg width="17" height="17" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2.5" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button class="s1-next rnd prod-sec-nav-btn">
                            <svg width="17" height="17" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2.5" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="swiper-clip">
                    <div class="swiper swiper1">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="prod-card">
                                    <div class="card-img">
                                        <span class="card-badge" style="background:var(--black)">New Arrival</span>
                                        <div class="card-icons">
                                            <button class="card-icon-btn" title="Add to Wishlist"
                                                onclick="toggleWish(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                            <button class="card-icon-btn" title="Quick View"
                                                onclick="showQuickView(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=800"
                                            alt="Premium Parka">
                                        <div class="quick-add">
                                            <p class="qa-label">Select Size</p>
                                            <div class="flex justify-center gap-2">
                                                <button class="size-btn">S</button><button
                                                    class="size-btn">M</button><button
                                                    class="size-btn">L</button><button class="size-btn">XL</button>
                                            </div>
                                            <button class="add-btn-card open-cart-btn" data-product="Premium Parka"
                                                data-price="129.00"
                                                data-img="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?w=200"
                                                data-cat="Outerwear">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <p class="card-cat">Outerwear</p>
                                        <h3 class="card-name">Premium Parka</h3>
                                        <div class="card-price"><span class="price-now">$129.00</span><span
                                                class="price-was">$180.00</span><span class="price-off">28% OFF</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="prod-card">
                                    <div class="card-img">
                                        <span class="card-badge" style="background:var(--red)">Selling Fast</span>
                                        <div class="card-icons">
                                            <button class="card-icon-btn" title="Add to Wishlist"
                                                onclick="toggleWish(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                            <button class="card-icon-btn" title="Quick View"
                                                onclick="showQuickView(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1551028719-00167b16eac5?q=80&w=800"
                                            alt="Biker Jacket">
                                        <div class="quick-add">
                                            <p class="qa-label">Select Size</p>
                                            <div class="flex justify-center gap-2">
                                                <button class="size-btn">S</button><button
                                                    class="size-btn">M</button><button class="size-btn">L</button>
                                            </div>
                                            <button class="add-btn-card open-cart-btn"
                                                data-product="Biker Leather Jacket" data-price="299.00"
                                                data-img="https://images.unsplash.com/photo-1551028719-00167b16eac5?w=200"
                                                data-cat="Luxury">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <p class="card-cat">Luxury</p>
                                        <h3 class="card-name">Biker Leather Jacket</h3>
                                        <div class="card-price"><span class="price-now">$299.00</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="prod-card">
                                    <div class="card-img">
                                        <span class="card-badge" style="background:#4a7c59">Eco-Conscious</span>
                                        <div class="card-icons">
                                            <button class="card-icon-btn" title="Add to Wishlist"
                                                onclick="toggleWish(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                            <button class="card-icon-btn" title="Quick View"
                                                onclick="showQuickView(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1516762689617-e1cffcef479d?q=80&w=800"
                                            alt="Wool Overcoat">
                                        <div class="quick-add">
                                            <p class="qa-label">Select Size</p>
                                            <div class="flex justify-center gap-2">
                                                <button class="size-btn">M</button><button
                                                    class="size-btn">L</button><button class="size-btn">XL</button>
                                            </div>
                                            <button class="add-btn-card open-cart-btn"
                                                data-product="Wool Blend Overcoat" data-price="189.00"
                                                data-img="https://images.unsplash.com/photo-1516762689617-e1cffcef479d?w=200"
                                                data-cat="Winter">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <p class="card-cat">Winter</p>
                                        <h3 class="card-name">Wool Blend Overcoat</h3>
                                        <div class="card-price"><span class="price-now">$189.00</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="prod-card">
                                    <div class="card-img">
                                        <span class="card-badge" style="background:#3a5a9a">Limited</span>
                                        <div class="card-icons">
                                            <button class="card-icon-btn" title="Add to Wishlist"
                                                onclick="toggleWish(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                            <button class="card-icon-btn" title="Quick View"
                                                onclick="showQuickView(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?q=80&w=800"
                                            alt="Minimalist Hoodie">
                                        <div class="quick-add">
                                            <p class="qa-label">Select Size</p>
                                            <div class="flex justify-center gap-2">
                                                <button class="size-btn">S</button><button class="size-btn">M</button>
                                            </div>
                                            <button class="add-btn-card open-cart-btn" data-product="Minimalist Hoodie"
                                                data-price="79.00"
                                                data-img="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=200"
                                                data-cat="Essentials">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <p class="card-cat">Essentials</p>
                                        <h3 class="card-name">Minimalist Hoodie</h3>
                                        <div class="card-price"><span class="price-now">$79.00</span><span
                                                class="price-was">$110.00</span><span class="price-off">28% OFF</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="prod-card">
                                    <div class="card-img">
                                        <span class="card-badge" style="background:#a0621a">Trending</span>
                                        <div class="card-icons">
                                            <button class="card-icon-btn" title="Add to Wishlist"
                                                onclick="toggleWish(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                            <button class="card-icon-btn" title="Quick View"
                                                onclick="showQuickView(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?q=80&w=800"
                                            alt="Cargo Trousers">
                                        <div class="quick-add">
                                            <p class="qa-label">Select Size</p>
                                            <div class="flex justify-center gap-2">
                                                <button class="size-btn">28</button><button
                                                    class="size-btn">30</button><button class="size-btn">32</button>
                                            </div>
                                            <button class="add-btn-card open-cart-btn" data-product="Cargo Trousers"
                                                data-price="95.00"
                                                data-img="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=200"
                                                data-cat="Bottoms">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <p class="card-cat">Bottoms</p>
                                        <h3 class="card-name">Cargo Trousers</h3>
                                        <div class="card-price"><span class="price-now">$95.00</span></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ LOOKBOOK ═══ -->
        <section class="py-20 bg-white">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <span class="eyebrow">Editorial</span>
                    <h2 class="sec-title">Winter Lookbook '26</h2>
                    <div class="divider"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="lb-card md:col-span-2" style="height:520px">
                        <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?q=80&w=1400"
                            alt="Dark Palettes">
                        <div class="lb-grad"></div>
                        <div class="lb-content-lg">
                            <p class="lb-chapter">Chapter 01</p>
                            <h3 class="lb-title">The Dark Palettes</h3>
                            <button class="lb-explore-btn">Explore →</button>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="lb-card" style="height:250px">
                            <img src="https://images.unsplash.com/photo-1487222477894-8943e31ef7b2?q=80&w=800"
                                alt="Street Textures">
                            <div class="lb-grad"></div>
                            <div class="lb-content-sm">
                                <p class="lb-chapter-sm">Chapter 02</p>
                                <h3 class="lb-title-sm">Street Textures</h3>
                            </div>
                        </div>
                        <div class="lb-card" style="height:250px">
                            <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?q=80&w=800"
                                alt="Soft Minimalism">
                            <div class="lb-grad"></div>
                            <div class="lb-content-sm">
                                <p class="lb-chapter-sm">Chapter 03</p>
                                <h3 class="lb-title-sm">Soft Minimalism</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ PRODUCT SLIDER 2 — Best Sellers ═══ -->
        <section class="py-20 bg-white border-t border-gray-100">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-10 gap-4">
                    <div>
                        <span class="eyebrow">All-Time Favourites</span>
                        <h2 class="sec-title">Best Sellers</h2>
                        <p class="sec-sub">Our most-loved styles, season after season.</p>
                    </div>
                    <div class="flex gap-2 flex-shrink-0">
                        <button class="s2-prev rnd prod-sec-nav-btn">
                            <svg width="17" height="17" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2.5" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button class="s2-next rnd prod-sec-nav-btn">
                            <svg width="17" height="17" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2.5" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="swiper-clip">
                    <div class="swiper swiper2">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="prod-card">
                                    <div class="card-img">
                                        <span class="card-badge" style="background:#2a7a4a">Best Seller</span>
                                        <div class="card-icons">
                                            <button class="card-icon-btn" title="Add to Wishlist"
                                                onclick="toggleWish(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                            <button class="card-icon-btn" title="Quick View"
                                                onclick="showQuickView(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1548126032-079a0fb0099d?q=80&w=800"
                                            alt="Trench Coat">
                                        <div class="quick-add">
                                            <p class="qa-label">Select Size</p>
                                            <div class="flex justify-center gap-2"><button
                                                    class="size-btn">XS</button><button
                                                    class="size-btn">S</button><button
                                                    class="size-btn">M</button><button class="size-btn">L</button></div>
                                            <button class="add-btn-card open-cart-btn"
                                                data-product="Classic Trench Coat" data-price="245.00"
                                                data-img="https://images.unsplash.com/photo-1548126032-079a0fb0099d?w=200"
                                                data-cat="Outerwear">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <p class="card-cat">Outerwear</p>
                                        <h3 class="card-name">Classic Trench Coat</h3>
                                        <div class="card-price"><span class="price-now">$245.00</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="prod-card">
                                    <div class="card-img">
                                        <span class="card-badge" style="background:var(--black)">Signature</span>
                                        <div class="card-icons">
                                            <button class="card-icon-btn" title="Add to Wishlist"
                                                onclick="toggleWish(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                            <button class="card-icon-btn" title="Quick View"
                                                onclick="showQuickView(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?q=80&w=800"
                                            alt="Cashmere">
                                        <div class="quick-add">
                                            <p class="qa-label">Select Size</p>
                                            <div class="flex justify-center gap-2"><button
                                                    class="size-btn">S</button><button
                                                    class="size-btn">M</button><button class="size-btn">L</button></div>
                                            <button class="add-btn-card open-cart-btn" data-product="Cashmere Crewneck"
                                                data-price="165.00"
                                                data-img="https://images.unsplash.com/photo-1594938298603-c8148c4bfa44?w=200"
                                                data-cat="Knitwear">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <p class="card-cat">Knitwear</p>
                                        <h3 class="card-name">Cashmere Crewneck</h3>
                                        <div class="card-price"><span class="price-now">$165.00</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="prod-card">
                                    <div class="card-img">
                                        <span class="card-badge" style="background:#1a3a6a">New Drop</span>
                                        <div class="card-icons">
                                            <button class="card-icon-btn" title="Add to Wishlist"
                                                onclick="toggleWish(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                            <button class="card-icon-btn" title="Quick View"
                                                onclick="showQuickView(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1571945153237-4929e783af4a?q=80&w=800"
                                            alt="Tailored Blazer">
                                        <div class="quick-add">
                                            <p class="qa-label">Select Size</p>
                                            <div class="flex justify-center gap-2"><button
                                                    class="size-btn">S</button><button
                                                    class="size-btn">M</button><button
                                                    class="size-btn">L</button><button class="size-btn">XL</button>
                                            </div>
                                            <button class="add-btn-card open-cart-btn" data-product="Tailored Blazer"
                                                data-price="210.00"
                                                data-img="https://images.unsplash.com/photo-1571945153237-4929e783af4a?w=200"
                                                data-cat="Suiting">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <p class="card-cat">Suiting</p>
                                        <h3 class="card-name">Tailored Blazer</h3>
                                        <div class="card-price"><span class="price-now">$210.00</span><span
                                                class="price-was">$280.00</span><span class="price-off">25% OFF</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="prod-card">
                                    <div class="card-img">
                                        <span class="card-badge" style="background:#7a4a20">Heritage</span>
                                        <div class="card-icons">
                                            <button class="card-icon-btn" title="Add to Wishlist"
                                                onclick="toggleWish(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                            <button class="card-icon-btn" title="Quick View"
                                                onclick="showQuickView(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=800"
                                            alt="Heritage Denim">
                                        <div class="quick-add">
                                            <p class="qa-label">Select Size</p>
                                            <div class="flex justify-center gap-2"><button
                                                    class="size-btn">28</button><button
                                                    class="size-btn">30</button><button
                                                    class="size-btn">32</button><button class="size-btn">34</button>
                                            </div>
                                            <button class="add-btn-card open-cart-btn" data-product="Heritage Denim"
                                                data-price="135.00"
                                                data-img="https://images.unsplash.com/photo-1520975916090-3105956dac38?w=200"
                                                data-cat="Denim">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <p class="card-cat">Denim</p>
                                        <h3 class="card-name">Heritage Denim</h3>
                                        <div class="card-price"><span class="price-now">$135.00</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="prod-card">
                                    <div class="card-img">
                                        <span class="card-badge" style="background:#5a3a7a">Collab</span>
                                        <div class="card-icons">
                                            <button class="card-icon-btn" title="Add to Wishlist"
                                                onclick="toggleWish(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                            <button class="card-icon-btn" title="Quick View"
                                                onclick="showQuickView(this)">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1544022613-e87ca75a784a?q=80&w=800"
                                            alt="Quilted Vest">
                                        <div class="quick-add">
                                            <p class="qa-label">Select Size</p>
                                            <div class="flex justify-center gap-2"><button
                                                    class="size-btn">S</button><button
                                                    class="size-btn">M</button><button class="size-btn">L</button></div>
                                            <button class="add-btn-card open-cart-btn" data-product="Quilted Vest"
                                                data-price="118.00"
                                                data-img="https://images.unsplash.com/photo-1544022613-e87ca75a784a?w=200"
                                                data-cat="Outerwear">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <p class="card-cat">Outerwear</p>
                                        <h3 class="card-name">Quilted Vest</h3>
                                        <div class="card-price"><span class="price-now">$118.00</span><span
                                                class="price-was">$150.00</span><span class="price-off">21% OFF</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ FEATURES ═══ -->
        <section class="features-section">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="flex flex-col items-center text-center gap-4">
                        <div class="feature-icon-wrap">
                            <svg width="22" height="22" fill="none" stroke="white" stroke-width="1.6"
                                viewBox="0 0 24 24">
                                <path d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="feature-title">Free Shipping</h4>
                            <p class="feature-desc">On all orders over $150</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center text-center gap-4">
                        <div class="feature-icon-wrap">
                            <svg width="22" height="22" fill="none" stroke="white" stroke-width="1.6"
                                viewBox="0 0 24 24">
                                <path
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="feature-title">Easy Returns</h4>
                            <p class="feature-desc">30-day hassle-free returns</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center text-center gap-4">
                        <div class="feature-icon-wrap">
                            <svg width="22" height="22" fill="none" stroke="white" stroke-width="1.6"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="feature-title">Secure Payments</h4>
                            <p class="feature-desc">256-bit SSL encryption</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center text-center gap-4">
                        <div class="feature-icon-wrap">
                            <svg width="22" height="22" fill="none" stroke="white" stroke-width="1.6"
                                viewBox="0 0 24 24">
                                <path
                                    d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="feature-title">24/7 Support</h4>
                            <p class="feature-desc">Always here to help you</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ BRAND STORY ═══ -->
        <section class="brand-story-section">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="brand-story-img">
                    <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?q=80&w=1400">
                </div>
                <div class="brand-story-content">
                    <span class="eyebrow brand-story-eyebrow">Our Story</span>
                    <h2 class="brand-story-title">Crafted For<br>The Modern<br>Individual</h2>
                    <p class="brand-story-desc">Founded in 2018, Swizer was born from a simple belief — everyday
                        clothing should be both beautiful and purposeful. We source only the finest materials and work
                        with ethical factories to bring you pieces that last.</p>
                    <div class="brand-stats">
                        <div>
                            <div class="brand-stat-num">2018</div>
                            <div class="brand-stat-label">Founded</div>
                        </div>
                        <div class="brand-stat-sep"></div>
                        <div>
                            <div class="brand-stat-num">12</div>
                            <div class="brand-stat-label">Countries</div>
                        </div>
                        <div class="brand-stat-sep"></div>
                        <div>
                            <div class="brand-stat-num">100%</div>
                            <div class="brand-stat-label">Ethical</div>
                        </div>
                    </div>
                    <button class="btn-outline-white self-start">Read Our Story</button>
                </div>
            </div>
        </section>

        <!-- ═══ TESTIMONIALS ═══ -->
        <section class="testimonials-section">
            <div class="max-w-screen-md mx-auto px-4 sm:px-6 text-center">
                <span class="eyebrow">What They Say</span>
                <h2 class="sec-title mb-14">Customer Reviews</h2>
                <div>
                    <div class="t-slide active">
                        <div class="t-stars">★★★★★</div>
                        <blockquote class="t-quote">"The quality is absolutely unmatched. Every single piece I've
                            ordered has exceeded expectations."</blockquote>
                        <div class="t-author-wrap">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop"
                                class="t-author-img">
                            <div class="text-left">
                                <p class="t-author-name">Sarah M.</p>
                                <p class="t-author-role">Verified Buyer · 5 Stars</p>
                            </div>
                        </div>
                    </div>
                    <div class="t-slide">
                        <div class="t-stars">★★★★★</div>
                        <blockquote class="t-quote">"I've been buying from Swizer for two years. The Premium Parka is
                            genuinely the best jacket I own."</blockquote>
                        <div class="t-author-wrap">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop"
                                class="t-author-img">
                            <div class="text-left">
                                <p class="t-author-name">James K.</p>
                                <p class="t-author-role">Verified Buyer · 5 Stars</p>
                            </div>
                        </div>
                    </div>
                    <div class="t-slide">
                        <div class="t-stars">★★★★★</div>
                        <blockquote class="t-quote">"Shipping was incredibly fast and packaging is so premium. Everyone
                            loves the pieces I gifted them."</blockquote>
                        <div class="t-author-wrap">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop"
                                class="t-author-img">
                            <div class="text-left">
                                <p class="t-author-name">Priya L.</p>
                                <p class="t-author-role">Verified Buyer · 5 Stars</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t-nav-wrap">
                    <button id="t-prev" class="rnd t-prev-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2.5" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <div class="flex gap-2">
                        <button class="t-dot t-dot-active" data-idx="0"></button>
                        <button class="t-dot t-dot-inactive" data-idx="1"></button>
                        <button class="t-dot t-dot-inactive" data-idx="2"></button>
                    </div>
                    <button id="t-next" class="rnd t-next-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2.5" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- ═══ INSTAGRAM GRID ═══ -->
        <section class="insta-section">
            <div class="insta-header">
                <span class="eyebrow">Follow Along</span>
                <h2 class="insta-handle">@swizer.official</h2>
            </div>
            <div class="insta-grid" style="gap:2px">
                <div class="aspect-square overflow-hidden group cursor-pointer relative">
                    <img src="https://images.unsplash.com/photo-1581044777550-4cfa60707c03?q=80&w=600"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="insta-icon-overlay">
                        <svg class="insta-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </div>
                </div>
                <div class="aspect-square overflow-hidden group cursor-pointer relative">
                    <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?q=80&w=600"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 group-hover:bg-black/28 transition-colors"></div>
                </div>
                <div class="aspect-square overflow-hidden group cursor-pointer relative">
                    <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=600"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 group-hover:bg-black/28 transition-colors"></div>
                </div>
                <div class="aspect-square overflow-hidden group cursor-pointer relative">
                    <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?q=80&w=600"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 group-hover:bg-black/28 transition-colors"></div>
                </div>
                <div class="aspect-square overflow-hidden group cursor-pointer relative">
                    <img src="https://images.unsplash.com/photo-1487222477894-8943e31ef7b2?q=80&w=600"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 group-hover:bg-black/28 transition-colors"></div>
                </div>
                <div class="aspect-square overflow-hidden group cursor-pointer relative">
                    <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?q=80&w=600"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 group-hover:bg-black/28 transition-colors"></div>
                </div>
            </div>
        </section>

        <!-- ═══ NEWSLETTER ═══ -->
        <section class="newsletter-section">
            <div class="max-w-screen-sm mx-auto px-4 sm:px-6">
                <span class="eyebrow newsletter-eyebrow">Stay In The Loop</span>
                <h2 class="newsletter-title">Join the Club</h2>
                <p class="newsletter-desc">Subscribe for early access to drops, exclusive offers, and styling tips.</p>
                <div class="newsletter-form">
                    <input type="email" placeholder="Your email address" class="newsletter-input">
                    <button class="newsletter-btn">Subscribe</button>
                </div>
                <p class="newsletter-note">No spam. Unsubscribe at any time.</p>
            </div>
        </section>

    </main>

    <!-- ═══ FOOTER ═══ -->
    <footer class="bg-white border-t border-gray-100 py-16">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
                <div class="col-span-2">
                    <a href="#" class="footer-logo">Swizer</a>
                    <p class="footer-desc">Crafting premium apparel for the modern individual. Quality, comfort, and
                        style — redefined for everyday wear.</p>
                    <div class="flex gap-2 mt-8">
                        <a href="#" class="footer-social-btn">IG</a>
                        <a href="#" class="footer-social-btn">TT</a>
                        <a href="#" class="footer-social-btn">P</a>
                    </div>
                </div>
                <div>
                    <h4 class="footer-col-title">Help</h4>
                    <ul style="list-style:none;display:flex;flex-direction:column;gap:12px">
                        <li><a href="#" class="footer-link">Order Status</a></li>
                        <li><a href="#" class="footer-link">Shipping &amp; Delivery</a></li>
                        <li><a href="#" class="footer-link">Returns</a></li>
                        <li><a href="#" class="footer-link">Size Guide</a></li>
                        <li><a href="#" class="footer-link">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-col-title">Company</h4>
                    <ul style="list-style:none;display:flex;flex-direction:column;gap:12px">
                        <li><a href="#" class="footer-link">Our Story</a></li>
                        <li><a href="#" class="footer-link">Sustainability</a></li>
                        <li><a href="#" class="footer-link">Careers</a></li>
                        <li><a href="#" class="footer-link">Press</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-col-title">Shop</h4>
                    <ul style="list-style:none;display:flex;flex-direction:column;gap:12px">
                        <li><a href="#" class="footer-link">New Arrivals</a></li>
                        <li><a href="#" class="footer-link">Best Sellers</a></li>
                        <li><a href="#" class="footer-link">Sale</a></li>
                        <li><a href="#" class="footer-link">Gift Cards</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="footer-copy">© 2026 Swizer Apparel Group. All Rights Reserved.</p>
                <div class="footer-alert-wrap">
                    <span class="footer-alert-label">Alert:</span>
                    <p class="footer-alert-text">Swizer will never ask for private details over SMS.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- ═══ CART OVERLAY + DRAWER ═══ -->
    <div id="cart-overlay"></div>

    <div id="cart-drawer">
        <div class="cart-drawer-header">
            <div class="cart-drawer-title-wrap">
                <h2 class="cart-drawer-title">Your Bag</h2>
                <span id="drawer-count" class="drawer-count-badge">2 items</span>
            </div>
            <button id="close-cart-btn" class="cart-close-btn">
                <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path d="M18 6L6 18M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="cart-progress-wrap">
            <div class="cart-progress-top">
                <p class="cart-progress-label-text">Free Shipping Progress</p>
                <p id="progress-label" class="cart-progress-value">$208 / $150 ✓</p>
            </div>
            <div class="progress-bar">
                <div class="progress-fill" id="progress-fill" style="width:100%"></div>
            </div>
            <p id="progress-msg" class="cart-progress-msg">🎉 You've unlocked free shipping!</p>
        </div>

        <div class="cart-items-list" id="cart-items-list">
            <div class="cart-item" data-price="129.00">
                <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?w=200" alt="Premium Parka">
                <div class="cart-item-body">
                    <p class="cart-item-cat">Outerwear</p>
                    <h4 class="cart-item-name">Premium Parka</h4>
                    <p class="cart-item-variant">Size: L · Deep Black</p>
                    <div class="cart-item-row">
                        <div class="qty-wrap">
                            <button class="qty-btn" onclick="updateQty(this,-1)">−</button>
                            <span class="qty-val">1</span>
                            <button class="qty-btn" onclick="updateQty(this,1)">+</button>
                        </div>
                        <span class="item-price">$129.00</span>
                    </div>
                </div>
                <button onclick="removeItem(this)" class="cart-remove-btn">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M18 6L6 18M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="cart-item" data-price="79.00">
                <img src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=200" alt="Minimalist Hoodie">
                <div class="cart-item-body">
                    <p class="cart-item-cat">Essentials</p>
                    <h4 class="cart-item-name">Minimalist Hoodie</h4>
                    <p class="cart-item-variant">Size: M · Carbon Grey</p>
                    <div class="cart-item-row">
                        <div class="qty-wrap">
                            <button class="qty-btn" onclick="updateQty(this,-1)">−</button>
                            <span class="qty-val">1</span>
                            <button class="qty-btn" onclick="updateQty(this,1)">+</button>
                        </div>
                        <span class="item-price">$79.00</span>
                    </div>
                </div>
                <button onclick="removeItem(this)" class="cart-remove-btn">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M18 6L6 18M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="cart-footer">
            <div class="cart-totals">
                <div class="cart-subtotal-row">
                    <span class="cart-subtotal-label">Subtotal</span>
                    <span id="cart-subtotal" class="cart-subtotal-val">$208.00</span>
                </div>
                <div class="cart-shipping-row">
                    <span class="cart-shipping-label">Shipping</span>
                    <span class="cart-shipping-val">FREE</span>
                </div>
                <div class="cart-total-row">
                    <span class="cart-total-label">Total</span>
                    <span id="cart-total" class="cart-total-val">$208.00</span>
                </div>
            </div>
            <div class="cart-actions">
                <button class="cart-view-btn">View Cart</button>
                <button class="cart-checkout-btn">Checkout →</button>
            </div>
        </div>
    </div>

    <!-- ═══ QUICK VIEW MODAL ═══ -->
    <div id="qv-overlay" onclick="closeQuickView()"></div>
    <div id="qv-modal">
        <button onclick="closeQuickView()" class="qv-close-btn">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                <path d="M18 6L6 18M6 6l12 12" />
            </svg>
        </button>
        <p class="qv-cat" id="qv-cat">—</p>
        <h3 class="qv-name" id="qv-name">Product</h3>
        <p class="qv-price" id="qv-price">$0.00</p>
        <p class="qv-desc">Premium quality piece crafted with care. Perfect for the modern individual who values both
            style and substance.</p>
        <button class="qv-add-btn open-cart-btn" id="qv-add-btn">Add to Bag</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // ── HERO SLIDER ──
        (function () {
            const slides = document.querySelectorAll('.hero-slide');
            const dots = document.querySelectorAll('.hdot');
            const cur$ = document.getElementById('slide-current');
            let cur = 0, n = slides.length;

            function goTo(i) {
                slides[cur].classList.remove('active');
                dots[cur].classList.remove('on');
                dots[cur].style.width = '8px'; dots[cur].style.background = 'rgba(255,255,255,.32)';
                cur = ((i % n) + n) % n;
                slides[cur].classList.add('active');
                dots[cur].classList.add('on');
                dots[cur].style.width = '28px'; dots[cur].style.background = '#fff';
                cur$.textContent = String(cur + 1).padStart(2, '0');
            }

            document.getElementById('hero-prev').onclick = () => goTo(cur - 1);
            document.getElementById('hero-next').onclick = () => goTo(cur + 1);
            dots.forEach(d => d.onclick = () => goTo(+d.dataset.idx));
            setInterval(() => goTo(cur + 1), 5500);
        })();

        // ── MOBILE MENU ──
        document.getElementById('mobile-menu-btn').onclick = () => {
            document.getElementById('mobile-menu').classList.add('open');
            document.body.style.overflow = 'hidden';
        };
        document.getElementById('mobile-close-btn').onclick = () => {
            document.getElementById('mobile-menu').classList.remove('open');
            document.body.style.overflow = '';
        };

        // ── PROFILE DROPDOWN ──
        (function () {
            const btn = document.getElementById('profile-btn');
            const drop = document.getElementById('profile-dropdown');
            btn.onclick = e => { e.stopPropagation(); drop.classList.toggle('open'); };
            document.addEventListener('click', () => drop.classList.remove('open'));
        })();

        // ── TESTIMONIALS ──
        (function () {
            const slides = document.querySelectorAll('.t-slide');
            const dots = document.querySelectorAll('.t-dot');
            let cur = 0, n = slides.length;
            function goTo(i) {
                slides[cur].classList.remove('active');
                dots[cur].style.width = '8px'; dots[cur].style.background = '#d1d5db';
                cur = ((i % n) + n) % n;
                slides[cur].classList.add('active');
                dots[cur].style.width = '24px'; dots[cur].style.background = 'var(--black)';
            }
            document.getElementById('t-prev').onclick = () => goTo(cur - 1);
            document.getElementById('t-next').onclick = () => goTo(cur + 1);
            dots.forEach(d => d.onclick = () => goTo(+d.dataset.idx));
            setInterval(() => goTo(cur + 1), 6000);
        })();

        // ── SWIPERS ──
        document.addEventListener('DOMContentLoaded', () => {
            const opts = (prev, next) => ({
                slidesPerView: 1.2, spaceBetween: 12,
                navigation: { prevEl: prev, nextEl: next },
                breakpoints: {
                    480: { slidesPerView: 1.8, spaceBetween: 14 },
                    640: { slidesPerView: 2.2, spaceBetween: 18 },
                    768: { slidesPerView: 2.8, spaceBetween: 20 },
                    1024: { slidesPerView: 3.5, spaceBetween: 24 },
                    1280: { slidesPerView: 4, spaceBetween: 28 }
                }
            });
            new Swiper('.swiper1', opts('.s1-prev', '.s1-next'));
            new Swiper('.swiper2', opts('.s2-prev', '.s2-next'));
        });

        // ── WISHLIST TOGGLE ──
        function toggleWish(btn) {
            btn.classList.toggle('wished');
            if (btn.classList.contains('wished')) {
                btn.style.background = '#fff5f5';
                btn.querySelector('svg').style.stroke = 'var(--red)';
                btn.querySelector('svg').style.fill = 'var(--red)';
            } else {
                btn.style.background = '#fff';
                btn.querySelector('svg').style.stroke = '';
                btn.querySelector('svg').style.fill = 'none';
            }
        }

        // ── QUICK VIEW ──
        function showQuickView(btn) {
            const card = btn.closest('.prod-card');
            const addBtn = card.querySelector('.add-btn-card');
            const cat = card.querySelector('.card-cat')?.textContent || '';
            const name = card.querySelector('.card-name')?.textContent || '';
            const price = card.querySelector('.price-now')?.textContent || '';

            document.getElementById('qv-cat').textContent = cat;
            document.getElementById('qv-name').textContent = name;
            document.getElementById('qv-price').textContent = price;

            const qvAdd = document.getElementById('qv-add-btn');
            if (addBtn) {
                qvAdd.dataset.product = addBtn.dataset.product || name;
                qvAdd.dataset.price = addBtn.dataset.price || '0.00';
                qvAdd.dataset.img = addBtn.dataset.img || '';
                qvAdd.dataset.cat = addBtn.dataset.cat || '';
            }

            const overlay = document.getElementById('qv-overlay');
            const modal = document.getElementById('qv-modal');
            overlay.style.opacity = '1'; overlay.style.pointerEvents = 'auto';
            modal.style.opacity = '1'; modal.style.pointerEvents = 'auto';
            modal.style.transform = 'translate(-50%,-50%)';
            document.body.style.overflow = 'hidden';
        }
        function closeQuickView() {
            const overlay = document.getElementById('qv-overlay');
            const modal = document.getElementById('qv-modal');
            overlay.style.opacity = '0'; overlay.style.pointerEvents = 'none';
            modal.style.opacity = '0'; modal.style.pointerEvents = 'none';
            modal.style.transform = 'translate(-50%,-60%)';
            document.body.style.overflow = '';
        }

        // ── CART DRAWER ──
        const overlay = document.getElementById('cart-overlay');
        const drawer = document.getElementById('cart-drawer');
        const closeBtn = document.getElementById('close-cart-btn');

        function openCart() {
            overlay.classList.add('open'); drawer.classList.add('open');
            document.body.style.overflow = 'hidden';
        }
        function closeCart() {
            overlay.classList.remove('open'); drawer.classList.remove('open');
            document.body.style.overflow = '';
        }

        document.addEventListener('click', e => {
            if (e.target.closest('.open-cart-btn')) { closeQuickView(); openCart(); }
        });
        document.getElementById('header-cart-btn').onclick = openCart;
        closeBtn.onclick = closeCart;
        overlay.onclick = closeCart;
        document.addEventListener('keydown', e => { if (e.key === 'Escape') { closeCart(); closeQuickView(); } });

        // ── CART LOGIC ──
        function updateQty(btn, delta) {
            const span = btn.parentElement.querySelector('.qty-val');
            let v = Math.max(1, parseInt(span.textContent) + delta);
            span.textContent = v;
            const item = btn.closest('.cart-item');
            const base = parseFloat(item.dataset.price);
            item.querySelector('.item-price').textContent = '$' + (base * v).toFixed(2);
            refreshTotals();
        }

        function removeItem(btn) {
            btn.closest('.cart-item').remove();
            refreshTotals();
        }

        function refreshTotals() {
            const items = document.querySelectorAll('.cart-item');
            let total = 0, count = 0;
            items.forEach(item => {
                const price = parseFloat(item.querySelector('.item-price').textContent.replace('$', ''));
                const qty = parseInt(item.querySelector('.qty-val').textContent);
                total += price; count += qty;
            });
            document.getElementById('cart-subtotal').textContent = '$' + total.toFixed(2);
            document.getElementById('cart-total').textContent = '$' + total.toFixed(2);
            document.getElementById('cart-count').textContent = count;
            document.getElementById('drawer-count').textContent = count + ' item' + (count !== 1 ? 's' : '');
            const pct = Math.min((total / 150) * 100, 100);
            document.getElementById('progress-fill').style.width = pct + '%';
            const rem = 150 - total;
            if (rem <= 0) {
                document.getElementById('progress-label').textContent = '$' + total.toFixed(0) + ' / $150 ✓';
                document.getElementById('progress-msg').textContent = "🎉 You've unlocked free shipping!";
                document.getElementById('progress-msg').style.color = '#2a7a4a';
            } else {
                document.getElementById('progress-label').textContent = '$' + total.toFixed(0) + ' / $150';
                document.getElementById('progress-msg').textContent = 'Add $' + rem.toFixed(2) + ' more for free shipping!';
                document.getElementById('progress-msg').style.color = 'var(--gray)';
            }
        }
    </script>
</body>

</html>