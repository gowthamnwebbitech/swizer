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
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,700;0,800;0,900;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        /* ═══════════════════════════════════════════
           SWZ — SWIZER DESIGN SYSTEM
           All classes prefixed with swz- to prevent
           any conflicts with Tailwind or 3rd-party libs
        ═══════════════════════════════════════════ */

        :root {
            --swz-black: #111111;
            --swz-off: #f6f5f2;
            --swz-gray: #767676;
            --swz-lgray: #b0b0b0;
            --swz-accent: #c9a96e;
            --swz-red: #d63333;
            --swz-white: #ffffff;
            --swz-green: #2a7a4a;
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
            color: var(--swz-black);
            overflow-x: hidden;
            /* Space for mobile bottom nav */
            padding-bottom: 0;
        }

        @media (max-width: 767px) {
            body {
                padding-bottom: 68px;
            }
        }

        /* ── UTILITY ── */
        .swz-fp {
            font-family: 'Cormorant Garamond', serif;
            letter-spacing: 0.5px;
        }

        /* ═══════════════════════════════════════════
           ANNOUNCEMENT BAR
        ═══════════════════════════════════════════ */
        .swz-announce-bar {
            overflow: hidden;
            padding: 10px 0;
            background: var(--swz-black);
        }

        .swz-marquee-track {
            display: flex;
            width: max-content;
            animation: swzMarquee 32s linear infinite;
            color: #fff;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .22em;
            text-transform: uppercase;
        }

        @keyframes swzMarquee {
            to {
                transform: translateX(-50%);
            }
        }

        .swz-marquee-item {
            padding: 0 48px;
        }

        .swz-marquee-sep {
            opacity: 0.3;
        }

        /* ═══════════════════════════════════════════
           HEADER
        ═══════════════════════════════════════════ */
        .swz-header {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(229, 231, 235, 0.6);
        }

        .swz-header-inner {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 16px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        @media (min-width: 640px) {
            .swz-header-inner {
                padding: 0 24px;
            }
        }

        @media (min-width: 1024px) {
            .swz-header-inner {
                padding: 0 32px;
                height: 68px;
            }
        }

        .swz-header-left {
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .swz-header-right {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        @media (min-width: 768px) {
            .swz-header-right {
                gap: 8px;
            }
        }

        /* Logo */
        /* Logo */
        .swz-logo {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
        }

        .swz-logo img {
            height: 58px;
            /* adjust as needed */
            width: auto;
            display: block;
        }

        /* Desktop Nav */
        .swz-desk-nav {
            display: none;
            align-items: center;
            gap: 28px;
        }

        @media (min-width: 1280px) {
            .swz-desk-nav {
                display: flex;
            }
        }

        .swz-nav-link {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--swz-gray);
            text-decoration: none;
            position: relative;
            transition: color .25s;
            white-space: nowrap;
            padding-bottom: 2px;
        }

        .swz-nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 1.5px;
            background: var(--swz-black);
            transition: width .3s;
        }

        .swz-nav-link:hover {
            color: var(--swz-black);
        }

        .swz-nav-link:hover::after {
            width: 100%;
        }

        .swz-nav-link--sale {
            color: var(--swz-red);
        }

        /* Search */
        .swz-search-wrap {
            position: relative;
            display: none;
        }

        @media (min-width: 1024px) {
            .swz-search-wrap {
                display: block;
            }
        }

        .swz-search-input {
            background: #f4f4f4;
            border: 1px solid transparent;
            border-radius: 4px;
            padding: 9px 14px 9px 36px;
            font-family: 'Manrope', sans-serif;
            font-size: 13px;
            width: 190px;
            outline: none;
            transition: all .3s;
            color: var(--swz-black);
        }

        .swz-search-input:focus {
            width: 260px;
            background: #fff;
            border-color: #ddd;
        }

        .swz-search-icon {
            position: absolute;
            left: 11px;
            top: 50%;
            transform: translateY(-50%);
            width: 14px;
            height: 14px;
            color: #aaa;
            pointer-events: none;
        }

        /* Icon Btn */
        .swz-icon-btn {
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
            position: relative;
        }

        .swz-icon-btn:hover {
            background: #f2f2f2;
        }

        /* Cart Badge */
        .swz-cart-badge {
            position: absolute;
            top: -2px;
            right: -2px;
            background: var(--swz-black);
            color: #fff;
            font-size: 9px;
            font-weight: 700;
            width: 17px;
            height: 17px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Manrope', sans-serif;
        }

        /* Profile Dropdown */
        .swz-profile-wrap {
            position: relative;
            display: none;
        }

        @media (min-width: 640px) {
            .swz-profile-wrap {
                display: block;
            }
        }

        .swz-profile-dropdown {
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

        .swz-profile-dropdown.swz-open {
            opacity: 1;
            pointer-events: auto;
            transform: none;
        }

        .swz-drop-link {
            display: block;
            padding: 11px 18px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--swz-gray);
            text-decoration: none;
            transition: all .2s;
        }

        .swz-drop-link:hover {
            color: var(--swz-black);
            background: #f7f7f7;
        }

        .swz-drop-link--red {
            color: var(--swz-red) !important;
        }

        /* Hamburger — only show on mobile/tablet */
        .swz-hamburger {
            display: flex;
        }

        @media (min-width: 1280px) {
            .swz-hamburger {
                display: none;
            }
        }

        /* Wishlist — hide on mobile (in bottom nav) */
        .swz-wishlist-btn {
            display: none;
        }

        @media (min-width: 640px) {
            .swz-wishlist-btn {
                display: flex;
            }
        }

        /* ═══════════════════════════════════════════
           MOBILE MENU (FULL SCREEN OVERLAY)
        ═══════════════════════════════════════════ */
        .swz-mobile-menu {
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

        .swz-mobile-menu.swz-open {
            transform: none;
        }

        .swz-mobile-close {
            position: absolute;
            top: 20px;
            right: 20px;
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
        }

        .swz-mobile-close:hover {
            background: #f2f2f2;
        }

        .swz-mobile-nav {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .swz-mobile-nav-link {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 42px;
            color: var(--swz-black);
            text-decoration: none;
            line-height: 1.1;
        }

        .swz-mobile-nav-link--sale {
            color: var(--swz-red);
        }

        .swz-mobile-footer {
            margin-top: auto;
            padding-top: 32px;
            border-top: 1px solid #f3f4f6;
            display: flex;
            gap: 24px;
            align-items: center;
        }

        .swz-mobile-footer-link {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--swz-gray);
            text-decoration: none;
        }

        .swz-mobile-footer-sep {
            color: #ddd;
        }

        /* ═══════════════════════════════════════════
           MOBILE BOTTOM NAVIGATION BAR
        ═══════════════════════════════════════════ */
        .swz-bottom-nav {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 9000;
            background: #fff;
            border-top: 1px solid #e8e8e8;
            height: 68px;
            padding: 0 4px;
            box-shadow: 0 -4px 24px rgba(0, 0, 0, .08);
        }

        @media (max-width: 767px) {
            .swz-bottom-nav {
                display: flex;
                align-items: stretch;
            }
        }

        .swz-bnav-item {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 4px;
            background: none;
            border: none;
            cursor: pointer;
            text-decoration: none;
            color: var(--swz-gray);
            transition: color .2s;
            padding: 8px 4px;
            -webkit-tap-highlight-color: transparent;
        }

        .swz-bnav-item:hover,
        .swz-bnav-item.swz-bnav-active {
            color: var(--swz-black);
        }

        .swz-bnav-icon {
            width: 22px;
            height: 22px;
            flex-shrink: 0;
        }

        .swz-bnav-label {
            font-size: 9px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            line-height: 1;
        }

        .swz-bnav-cart-wrap {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .swz-bnav-badge {
            position: absolute;
            top: 8px;
            right: 15px;
            background: var(--swz-black);
            color: #fff;
            font-size: 8px;
            font-weight: 700;
            min-width: 15px;
            height: 15px;
            border-radius: 999px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 3px;
            font-family: 'Manrope', sans-serif;
        }

        .swz-bnav-item--cart {
            color: var(--swz-black);
        }

        .swz-bnav-item--cart .swz-bnav-icon-bg {
            background: var(--swz-black);
            border-radius: 50%;
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0;
            box-shadow: 0 4px 14px rgba(0, 0, 0, .25);
            transition: transform .2s, box-shadow .2s;
        }

        .swz-bnav-item--cart:hover .swz-bnav-icon-bg {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, .3);
        }

        .swz-bnav-item--cart .swz-bnav-icon {
            color: #fff;
            width: 20px;
            height: 20px;
        }

        /* ═══════════════════════════════════════════
           HERO SECTION
        ═══════════════════════════════════════════ */
        .swz-hero-wrap {
            position: relative;
            height: 90vh;
            min-height: 560px;
            overflow: hidden;
            background: #111;
        }

        .swz-hero-slide {
            position: absolute;
            inset: 0;
            z-index: 0;
            opacity: 0;
            transition: opacity 1.2s ease;
        }

        .swz-hero-slide.swz-active {
            opacity: 1;
        }

        .swz-hero-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .swz-hero-grad {
            position: absolute;
            inset: 0;
            z-index: 1;
            background: linear-gradient(115deg, rgba(0, 0, 0, .82) 0%, rgba(0, 0, 0, .44) 50%, rgba(0, 0, 0, .10) 100%);
        }

        .swz-hero-content {
            position: absolute;
            inset: 0;
            z-index: 20;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 6%;
        }

        .swz-hero-tag {
            display: block;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .45em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .6);
            margin-bottom: 16px;
        }

        .swz-hero-title {
            font-family: 'Playfair Display', serif;
            font-weight: 900;
            font-size: clamp(50px, 8.5vw, 118px);
            line-height: 1;
            letter-spacing: -.02em;
            color: #fff;
            margin-bottom: 20px;
            font-style: italic;
        }

        .swz-hero-sub {
            font-size: clamp(14px, 1.4vw, 16px);
            font-weight: 300;
            color: rgba(255, 255, 255, .72);
            line-height: 1.75;
            max-width: 420px;
            margin-bottom: 36px;
        }

        .swz-hero-btns {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        /* Hero Controls */
        .swz-hero-ctrl {
            position: absolute;
            z-index: 20;
        }

        .swz-hero-ctrl--arrows {
            bottom: 36px;
            right: 6%;
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .swz-hero-arrows-btns {
            display: none;
            gap: 8px;
        }

        @media (min-width: 768px) {
            .swz-hero-arrows-btns {
                display: flex;
            }
        }

        .swz-hero-nav-btn {
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

        .swz-hero-nav-btn:hover {
            background: #fff;
            color: #000;
        }

        .swz-hero-counter {
            color: #fff;
            display: flex;
            align-items: baseline;
            gap: 3px;
        }

        .swz-hero-counter-num {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 48px;
            line-height: 1;
            font-style: italic;
        }

        .swz-hero-counter-total {
            font-size: 20px;
            color: rgba(255, 255, 255, .35);
            font-weight: 300;
        }

        .swz-hero-ctrl--dots {
            bottom: 44px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
        }

        .swz-hdot {
            display: inline-block;
            height: 2px;
            width: 8px;
            border: none;
            cursor: pointer;
            background: rgba(255, 255, 255, .32);
            transition: all .35s;
            border-radius: 2px;
        }

        .swz-hdot.swz-on {
            width: 28px;
            background: #fff;
        }

        .swz-hero-ctrl--scroll {
            bottom: 36px;
            left: 6%;
            color: rgba(255, 255, 255, .4);
            display: none;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }

        @media (min-width: 768px) {
            .swz-hero-ctrl--scroll {
                display: flex;
            }
        }

        .swz-hero-scroll-label {
            font-size: 9px;
            font-weight: 600;
            letter-spacing: .4em;
            text-transform: uppercase;
        }

        .swz-hero-scroll-track {
            width: 1px;
            height: 50px;
            background: rgba(255, 255, 255, .15);
            position: relative;
            overflow: hidden;
        }

        @keyframes swzScrl {
            0% {
                top: 0;
                opacity: 1;
            }

            100% {
                top: 100%;
                opacity: 0;
            }
        }

        .swz-scrl-inner {
            position: absolute;
            top: 0;
            width: 100%;
            height: 38%;
            background: rgba(255, 255, 255, .7);
            animation: swzScrl 1.8s ease-in-out infinite;
        }

        /* ── BUTTONS ── */
        .swz-btn-outline-white {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, .08);
            backdrop-filter: blur(10px);
            color: #fff;
            border: 1.5px solid rgba(255, 255, 255, .5);
            font-family: 'Manrope', sans-serif;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            padding: 15px 34px;
            cursor: pointer;
            transition: all .3s;
            text-decoration: none;
        }

        .swz-btn-outline-white:hover {
            background: #fff;
            color: var(--swz-black);
            border-color: #fff;
        }

        .swz-btn-outline-white--dim {
            border-color: rgba(255, 255, 255, .25);
            background: rgba(0, 0, 0, .28);
        }

        /* Round Button */
        .swz-rnd-btn {
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

        .swz-rnd-btn--light {
            border-color: #ccc;
            color: var(--swz-black);
        }

        .swz-rnd-btn--light:hover {
            background: var(--swz-black);
            color: #fff;
            border-color: var(--swz-black);
        }

        .swz-rnd-btn--outline {
            border-color: #e0e0e0;
            color: var(--swz-black);
        }

        .swz-rnd-btn--outline:hover {
            background: var(--swz-black);
            color: #fff;
            border-color: var(--swz-black);
        }

        /* ═══════════════════════════════════════════
           SECTION HELPERS
        ═══════════════════════════════════════════ */
        .swz-eyebrow {
            display: block;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .4em;
            text-transform: uppercase;
            color: var(--swz-gray);
            margin-bottom: 10px;
        }

        .swz-sec-title {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: clamp(26px, 3.8vw, 46px);
            line-height: 1.05;
            letter-spacing: -.01em;
        }

        .swz-sec-sub {
            font-size: 14px;
            font-weight: 300;
            color: var(--swz-gray);
            margin-top: 6px;
        }

        .swz-divider {
            width: 40px;
            height: 2px;
            background: var(--swz-accent);
            margin: 14px auto 0;
        }

        /* ═══════════════════════════════════════════
           STATS SECTION
        ═══════════════════════════════════════════ */
        .swz-stats-section {
            padding: 56px 0;
            background: var(--swz-black);
        }

        .swz-stat-num {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(38px, 5vw, 58px);
            font-weight: 800;
            color: #fff;
            letter-spacing: 0.5px;
            line-height: 1;
        }

        .swz-stat-label {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--swz-gray);
            margin-top: 8px;
        }

        /* ═══════════════════════════════════════════
           CATEGORIES SECTION
        ═══════════════════════════════════════════ */
        .swz-categories-section {
            padding: 80px 0;
            background: #fff;
        }

        .swz-cat-bubble {
            width: 100%;
            aspect-ratio: 1;
            border-radius: 50%;
            overflow: hidden;
            border: 1px solid #e5e7eb;
            background: var(--swz-off);
        }

        .swz-cat-bubble img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .7s cubic-bezier(.165, .84, .44, 1);
            display: block;
        }

        .swz-cat-item:hover .swz-cat-bubble img {
            transform: scale(1.1);
        }

        .swz-cat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            cursor: pointer;
        }

        .swz-cat-label {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        /* ═══════════════════════════════════════════
           PRODUCT CARD
        ═══════════════════════════════════════════ */
        .swz-prod-card {
            position: relative;
            background: #fff;
            border-bottom: 2px solid transparent;
            transition: border-color .25s;
            padding: 10px;
        }

        .swz-prod-card:hover {
            border-color: var(--swz-black);
        }

        .swz-card-img-wrap {
            position: relative;
            overflow: hidden;
            aspect-ratio: 3/4;
            background: var(--swz-off);
        }

        .swz-card-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform .9s cubic-bezier(.165, .84, .44, 1);
        }

        .swz-prod-card:hover .swz-card-img-wrap img {
            transform: scale(1.08);
        }

        .swz-card-badge {
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
            font-family: 'Manrope', sans-serif;
        }

        .swz-card-action-btns {
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

        .swz-prod-card:hover .swz-card-action-btns {
            transform: translateX(0);
        }

        .swz-card-icon-btn {
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
            color: var(--swz-gray);
        }

        .swz-card-icon-btn:hover {
            background: var(--swz-black);
            color: #fff;
        }

        .swz-card-icon-btn.swz-wished {
            color: var(--swz-red);
        }

        .swz-card-icon-btn.swz-wished svg {
            fill: var(--swz-red);
            stroke: var(--swz-red);
        }

        .swz-quick-add {
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

        .swz-prod-card:hover .swz-quick-add {
            transform: none;
        }

        .swz-qa-label {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: var(--swz-gray);
            text-align: center;
            margin-bottom: 8px;
        }

        .swz-size-btns-row {
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .swz-size-btn {
            width: 34px;
            height: 34px;
            border: 1.5px solid #ddd;
            background: #fff;
            font-family: 'Manrope', sans-serif;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all .2s;
        }

        .swz-size-btn:hover {
            background: var(--swz-black);
            color: #fff;
            border-color: var(--swz-black);
        }

        .swz-add-to-bag-btn {
            width: 100%;
            margin-top: 9px;
            background: var(--swz-black);
            color: #fff;
            border: none;
            font-family: 'Manrope', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
            padding: 11px;
            cursor: pointer;
            transition: background .2s;
        }

        .swz-add-to-bag-btn:hover {
            background: #333;
        }

        .swz-card-info {
            padding: 14px 2px 8px;
        }

        .swz-card-cat {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--swz-lgray);
            margin-bottom: 4px;
        }

        .swz-card-name {
            font-size: 14px;
            font-weight: 600;
            color: var(--swz-black);
            margin-bottom: 6px;
        }

        .swz-card-price {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .swz-price-now {
            font-size: 15px;
            font-weight: 700;
        }

        .swz-price-was {
            font-size: 13px;
            font-weight: 300;
            color: var(--swz-lgray);
            text-decoration: line-through;
        }

        .swz-price-off {
            font-size: 10px;
            font-weight: 700;
            color: var(--swz-red);
            margin-left: auto;
        }

        /* ═══════════════════════════════════════════
           PRODUCT SLIDER SECTIONS
        ═══════════════════════════════════════════ */
        .swz-prod-slider-section {
            padding: 80px 0;
        }

        .swz-prod-slider-section--off {
            background: var(--swz-off);
        }

        .swz-prod-slider-section--white {
            background: #fff;
            border-top: 1px solid #f3f4f6;
        }

        .swz-slider-header {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 40px;
            gap: 16px;
        }

        @media (min-width: 640px) {
            .swz-slider-header {
                flex-direction: row;
                align-items: flex-end;
            }
        }

        .swz-slider-nav-btns {
            display: flex;
            gap: 8px;
            flex-shrink: 0;
        }

        /* Swiper override — clip container */
        .swz-swiper-clip {
            overflow: hidden;
        }

        .swz-swiper-instance {
            width: 100%;
        }

        /* ═══════════════════════════════════════════
           LOOKBOOK SECTION
        ═══════════════════════════════════════════ */
        .swz-lookbook-section {
            padding: 80px 0;
            background: #fff;
        }

        .swz-lb-card {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .swz-lb-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .85s cubic-bezier(.165, .84, .44, 1);
            display: block;
        }

        .swz-lb-card:hover img {
            transform: scale(1.06);
        }

        .swz-lb-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, .75) 0%, transparent 55%);
            pointer-events: none;
        }

        .swz-lb-content {
            position: absolute;
            bottom: 0;
            left: 0;
            padding: 32px;
            color: white;
            z-index: 2;
        }

        .swz-lb-content--sm {
            padding: 24px;
        }

        .swz-lb-chapter {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .4em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .5);
            margin-bottom: 8px;
        }

        .swz-lb-chapter--sm {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .3em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .5);
            margin-bottom: 4px;
        }

        .swz-lb-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 36px;
            line-height: 1.1;
            font-style: italic;
            margin-bottom: 16px;
            letter-spacing: 0.5px;
        }

        .swz-lb-title--sm {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 24px;
            font-style: italic;
            letter-spacing: 0.5px;
        }

        .swz-lb-explore-btn {
            background: none;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, .55);
            color: #fff;
            font-family: 'Manrope', sans-serif;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .18em;
            text-transform: uppercase;
            padding-bottom: 4px;
            cursor: pointer;
        }

        /* ═══════════════════════════════════════════
           FEATURES SECTION
        ═══════════════════════════════════════════ */
        .swz-features-section {
            padding: 64px 0;
            border-top: 1px solid #f3f4f6;
            border-bottom: 1px solid #f3f4f6;
            background: var(--swz-off);
        }

        .swz-feature-icon-wrap {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            background: var(--swz-black);
        }

        .swz-feature-title {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            margin-bottom: 4px;
        }

        .swz-feature-desc {
            font-size: 13px;
            font-weight: 300;
            color: var(--swz-gray);
        }

        /* ═══════════════════════════════════════════
           BRAND STORY SECTION
        ═══════════════════════════════════════════ */
        .swz-brand-story-section {
            overflow: hidden;
            background: var(--swz-black);
        }

        .swz-brand-story-img {
            position: relative;
            overflow: hidden;
            height: 560px;
            min-height: 320px;
        }

        .swz-brand-story-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: .78;
        }

        .swz-brand-story-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 64px 32px;
            color: white;
        }

        @media (min-width: 768px) {
            .swz-brand-story-content {
                padding: 64px;
            }
        }

        .swz-brand-eyebrow {
            color: var(--swz-gray);
        }

        .swz-brand-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 800;
            font-size: clamp(34px, 5vw, 60px);
            line-height: 1.05;
            font-style: italic;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
        }

        .swz-brand-desc {
            color: #9a9a9a;
            font-size: 15px;
            font-weight: 300;
            max-width: 420px;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .swz-brand-stats {
            display: flex;
            gap: 32px;
            margin-bottom: 40px;
        }

        .swz-brand-stat-num {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 36px;
            font-style: italic;
            letter-spacing: 0.5px;
        }

        .swz-brand-stat-label {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--swz-gray);
            margin-top: 4px;
        }

        .swz-brand-stat-sep {
            width: 1px;
            background: rgba(255, 255, 255, .1);
        }

        /* ═══════════════════════════════════════════
           TESTIMONIALS SECTION
        ═══════════════════════════════════════════ */
        .swz-testimonials-section {
            padding: 80px 0;
            background: white;
        }

        .swz-t-slide {
            display: none;
        }

        .swz-t-slide.swz-active {
            display: block;
            animation: swzFadeUp .5s ease;
        }

        @keyframes swzFadeUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        .swz-t-stars {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            color: var(--swz-accent);
            font-size: 20px;
            letter-spacing: .18em;
        }

        .swz-t-quote {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: clamp(20px, 3.2vw, 34px);
            font-style: italic;
            line-height: 1.3;
            margin-bottom: 28px;
            color: var(--swz-black);
            letter-spacing: 0.5px;
        }

        .swz-t-author-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
        }

        .swz-t-author-img {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            object-fit: cover;
        }

        .swz-t-author-name {
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        .swz-t-author-role {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--swz-gray);
            margin-top: 2px;
        }

        .swz-t-nav-wrap {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 16px;
            margin-top: 48px;
        }

        .swz-t-dot {
            height: 5px;
            background: #d1d5db;
            border: none;
            cursor: pointer;
            border-radius: 3px;
            transition: all .3s;
        }

        .swz-t-dot--active {
            width: 24px;
            background: var(--swz-black);
        }

        .swz-t-dot--inactive {
            width: 8px;
        }

        /* ═══════════════════════════════════════════
           INSTAGRAM GRID
        ═══════════════════════════════════════════ */
        .swz-insta-section {}

        .swz-insta-header {
            text-align: center;
            padding: 40px 0;
        }

        .swz-insta-handle {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 28px;
            font-style: italic;
            letter-spacing: 0.5px;
        }

        .swz-insta-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2px;
        }

        @media (min-width: 768px) {
            .swz-insta-grid {
                grid-template-columns: repeat(6, 1fr);
            }
        }

        .swz-insta-cell {
            aspect-ratio: 1;
            overflow: hidden;
            position: relative;
            cursor: pointer;
        }

        .swz-insta-cell img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .5s ease;
            display: block;
        }

        .swz-insta-cell:hover img {
            transform: scale(1.1);
        }

        .swz-insta-cell-overlay {
            position: absolute;
            inset: 0;
            background: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background .2s;
        }

        .swz-insta-cell:hover .swz-insta-cell-overlay {
            background: rgba(0, 0, 0, .28);
        }

        .swz-insta-ig-icon {
            width: 28px;
            height: 28px;
            color: white;
            opacity: 0;
            transition: opacity .2s;
        }

        .swz-insta-cell:hover .swz-insta-ig-icon {
            opacity: 1;
        }

        /* ═══════════════════════════════════════════
           NEWSLETTER SECTION
        ═══════════════════════════════════════════ */
        .swz-newsletter-section {
            padding: 80px 0;
            text-align: center;
            background: var(--swz-black);
            color: white;
        }

        .swz-nl-eyebrow {
            color: var(--swz-gray);
        }

        .swz-nl-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 800;
            font-size: clamp(34px, 5vw, 54px);
            font-style: italic;
            line-height: 1;
            margin-bottom: 12px;
            letter-spacing: 0.5px;
        }

        .swz-nl-desc {
            color: #9a9a9a;
            font-size: 15px;
            font-weight: 300;
            line-height: 1.75;
            margin-bottom: 40px;
        }

        .swz-nl-form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        @media (min-width: 640px) {
            .swz-nl-form {
                flex-direction: row;
            }
        }

        .swz-nl-input {
            flex: 1;
            background: transparent;
            border: 1.5px solid #2a2a2a;
            color: #fff;
            padding: 15px 18px;
            font-family: 'Manrope', sans-serif;
            font-size: 14px;
            outline: none;
            transition: border-color .25s;
        }

        .swz-nl-input:focus {
            border-color: #555;
        }

        .swz-nl-input::placeholder {
            color: #555;
        }

        .swz-nl-submit-btn {
            background: #fff;
            color: var(--swz-black);
            padding: 15px 30px;
            font-family: 'Manrope', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
            border: none;
            cursor: pointer;
            white-space: nowrap;
            transition: background .2s;
        }

        .swz-nl-submit-btn:hover {
            background: #e8e8e8;
        }

        .swz-nl-note {
            margin-top: 16px;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: #3a3a3a;
        }

        /* ═══════════════════════════════════════════
           FOOTER
        ═══════════════════════════════════════════ */
        .swz-footer {
            background: var(--swz-off);
            border-top: 1px solid #f3f4f6;
            padding: 64px 0;
        }

        .swz-footer-logo {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 22px;
            color: var(--swz-black);
            text-decoration: none;
            font-style: italic;
        }

        .swz-footer-desc {
            color: var(--swz-gray);
            font-size: 14px;
            font-weight: 300;
            max-width: 290px;
            margin-top: 20px;
            line-height: 1.6;
        }

        .swz-footer-social-wrap {
            display: flex;
            gap: 8px;
            margin-top: 32px;
        }

        .swz-footer-social-btn {
            width: 40px;
            height: 40px;
            border: 1px solid #e5e7eb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 700;
            color: var(--swz-black);
            text-decoration: none;
            transition: all .2s;
        }

        .swz-footer-social-btn:hover {
            background: var(--swz-black);
            color: #fff;
        }

        .swz-footer-col-title {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            margin-bottom: 18px;
        }

        .swz-footer-links-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .swz-footer-link {
            font-size: 14px;
            font-weight: 300;
            color: var(--swz-gray);
            text-decoration: none;
            transition: color .2s;
        }

        .swz-footer-link:hover {
            color: var(--swz-black);
        }

        .swz-footer-bottom {
            margin-top: 64px;
            padding-top: 32px;
            border-top: 1px solid #f9fafb;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
        }

        @media (min-width: 768px) {
            .swz-footer-bottom {
                flex-direction: row;
                justify-content: space-between;
            }
        }

        .swz-footer-copy {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #bbb;
        }

        .swz-footer-alert-wrap {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .swz-footer-alert-label {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--swz-red);
        }

        .swz-footer-alert-text {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: #bbb;
        }

        /* ═══════════════════════════════════════════
           CART OVERLAY + DRAWER
        ═══════════════════════════════════════════ */
        .swz-cart-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .52);
            backdrop-filter: blur(4px);
            opacity: 0;
            pointer-events: none;
            transition: opacity .35s;
            z-index: 9998;
        }

        .swz-cart-overlay.swz-open {
            opacity: 1;
            pointer-events: auto;
        }

        .swz-cart-drawer {
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

        @media (max-width: 767px) {
            .swz-cart-drawer {
                width: 100vw;
            }
        }

        .swz-cart-drawer.swz-open {
            transform: none;
        }

        .swz-cart-drawer-head {
            padding: 20px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #f0f0f0;
            flex-shrink: 0;
        }

        .swz-cart-drawer-head-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .swz-cart-drawer-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 20px;
            font-style: italic;
        }

        .swz-cart-items-count-badge {
            background: var(--swz-black);
            color: #fff;
            font-size: 10px;
            font-weight: 700;
            padding: 3px 12px;
            border-radius: 999px;
            font-family: 'Manrope', sans-serif;
        }

        .swz-cart-close-btn {
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

        .swz-cart-close-btn:hover {
            background: #f3f3f3;
        }

        .swz-cart-progress-strip {
            padding: 14px 24px;
            background: #f8f8f6;
            border-bottom: 1px solid #f0f0f0;
            flex-shrink: 0;
        }

        .swz-cart-progress-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
        }

        .swz-cart-progress-text {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--swz-gray);
        }

        .swz-cart-progress-val {
            font-size: 11px;
            font-weight: 700;
        }

        .swz-progress-bar-track {
            height: 3px;
            background: #ebebeb;
            border-radius: 2px;
            overflow: hidden;
        }

        .swz-progress-bar-fill {
            height: 100%;
            background: var(--swz-black);
            border-radius: 2px;
            transition: width .4s;
        }

        .swz-cart-progress-msg {
            font-size: 11px;
            font-weight: 600;
            margin-top: 8px;
            color: var(--swz-green);
        }

        .swz-cart-body {
            flex: 1;
            overflow-y: auto;
            padding: 0 24px;
        }

        .swz-cart-item {
            display: flex;
            gap: 14px;
            padding: 18px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .swz-cart-item-thumb {
            width: 84px;
            height: 104px;
            object-fit: cover;
            flex-shrink: 0;
            border-radius: 1px;
        }

        .swz-cart-item-info {
            flex: 1;
            min-width: 0;
        }

        .swz-cart-item-category {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: var(--swz-gray);
            margin-bottom: 3px;
        }

        .swz-cart-item-name {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .swz-cart-item-variant {
            font-size: 13px;
            font-weight: 300;
            color: var(--swz-gray);
            margin-bottom: 14px;
        }

        .swz-cart-item-row-btm {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .swz-qty-controls {
            display: flex;
            align-items: center;
            border: 1.5px solid #e0e0e0;
        }

        .swz-qty-btn {
            width: 33px;
            height: 33px;
            border: none;
            background: #fff;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all .2s;
            font-family: 'Manrope', sans-serif;
            flex-shrink: 0;
        }

        .swz-qty-btn:hover {
            background: var(--swz-black);
            color: #fff;
        }

        .swz-qty-display {
            width: 38px;
            text-align: center;
            font-size: 14px;
            font-weight: 700;
        }

        .swz-cart-item-price {
            font-size: 15px;
            font-weight: 700;
        }

        .swz-cart-item-remove {
            background: none;
            border: none;
            cursor: pointer;
            color: #ccc;
            align-self: flex-start;
            margin-top: 2px;
            flex-shrink: 0;
            transition: color .2s;
        }

        .swz-cart-item-remove:hover {
            color: var(--swz-red);
        }

        .swz-cart-footer-wrap {
            flex-shrink: 0;
            border-top: 1px solid #f0f0f0;
        }

        .swz-cart-totals-wrap {
            padding: 20px 24px;
        }

        .swz-cart-subtotal-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .swz-cart-subtotal-label {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--swz-gray);
        }

        .swz-cart-subtotal-val {
            font-size: 18px;
            font-weight: 700;
        }

        .swz-cart-shipping-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 4px;
        }

        .swz-cart-shipping-label {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--swz-gray);
        }

        .swz-cart-shipping-val {
            font-size: 13px;
            font-weight: 700;
            color: var(--swz-green);
        }

        .swz-cart-total-row {
            display: flex;
            justify-content: space-between;
            margin-top: 18px;
            padding-top: 18px;
            border-top: 1px solid #f0f0f0;
        }

        .swz-cart-total-label {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 18px;
            font-style: italic;
        }

        .swz-cart-total-val {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 24px;
        }

        .swz-cart-action-btns {
            padding: 0 24px 24px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .swz-cart-view-btn {
            padding: 15px;
            border: 1.5px solid #e0e0e0;
            background: #fff;
            font-family: 'Manrope', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            cursor: pointer;
            transition: background .2s;
        }

        .swz-cart-view-btn:hover {
            background: #f7f7f7;
        }

        .swz-cart-checkout-btn {
            padding: 15px;
            background: var(--swz-black);
            color: #fff;
            border: none;
            font-family: 'Manrope', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            cursor: pointer;
            transition: opacity .2s;
        }

        .swz-cart-checkout-btn:hover {
            opacity: .85;
        }

        /* ═══════════════════════════════════════════
           QUICK VIEW MODAL
        ═══════════════════════════════════════════ */
        .swz-qv-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .55);
            backdrop-filter: blur(4px);
            opacity: 0;
            pointer-events: none;
            transition: opacity .3s;
            z-index: 9996;
        }

        .swz-qv-modal {
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

        .swz-qv-close {
            position: absolute;
            top: 14px;
            right: 14px;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--swz-gray);
        }

        .swz-qv-cat {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--swz-gray);
            margin-bottom: 4px;
        }

        .swz-qv-name {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 24px;
            font-style: italic;
            margin-bottom: 8px;
        }

        .swz-qv-price {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .swz-qv-desc {
            font-size: 14px;
            font-weight: 300;
            color: var(--swz-gray);
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .swz-qv-add-btn {
            width: 100%;
            background: var(--swz-black);
            color: #fff;
            border: none;
            font-family: 'Manrope', sans-serif;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
            padding: 15px;
            cursor: pointer;
            transition: background .2s;
        }

        .swz-qv-add-btn:hover {
            background: #333;
        }

        /* ═══════════════════════════════════════════
           RESPONSIVE TWEAKS
        ═══════════════════════════════════════════ */
        @media (max-width: 640px) {
            .swz-hero-content {
                padding: 0 5%;
            }

            .swz-btn-outline-white {
                padding: 13px 22px;
                font-size: 11px;
            }

            .swz-hero-sub {
                font-size: 13px;
            }

            .swz-hero-title {
                font-size: clamp(44px, 13vw, 68px);
            }
        }
    </style>
</head>

<body>

    <!-- ═══ ANNOUNCEMENT BAR ═══ -->
    <div class="swz-announce-bar">
        <div class="swz-marquee-track">
            <span class="swz-marquee-item">Free Shipping on Orders Over $150</span>
            <span class="swz-marquee-sep">✦</span>
            <span class="swz-marquee-item">Winter Collection 2026 — Out Now</span>
            <span class="swz-marquee-sep">✦</span>
            <span class="swz-marquee-item">Use Code SWIZER15 for 15% Off</span>
            <span class="swz-marquee-sep">✦</span>
            <span class="swz-marquee-item">Free Returns Within 30 Days</span>
            <span class="swz-marquee-sep">✦</span>
            <span class="swz-marquee-item">Free Shipping on Orders Over $150</span>
            <span class="swz-marquee-sep">✦</span>
            <span class="swz-marquee-item">Winter Collection 2026 — Out Now</span>
            <span class="swz-marquee-sep">✦</span>
            <span class="swz-marquee-item">Use Code SWIZER15 for 15% Off</span>
            <span class="swz-marquee-sep">✦</span>
            <span class="swz-marquee-item">Free Returns Within 30 Days</span>
            <span class="swz-marquee-sep">✦</span>
        </div>
    </div>

    <!-- ═══ HEADER ═══ -->
    <header class="swz-header">
        <div class="swz-header-inner">
            <div class="swz-header-left">
                <a href="#" class="swz-logo"><img src="images/logo/Group 39 (2).png" alt="swz-logo"></a>
                <nav class="swz-desk-nav">
                    <a href="#" class="swz-nav-link">Men</a>
                    <a href="#" class="swz-nav-link">Women</a>
                    <a href="product.php" class="swz-nav-link">Shop</a>
                    <a href="#" class="swz-nav-link">New Arrivals</a>
                    <a href="#" class="swz-nav-link">Accessories</a>
                    <a href="#" class="swz-nav-link swz-nav-link--sale">Sale</a>
                </nav>
            </div>
            <div class="swz-header-right">
                <div class="swz-search-wrap">
                    <input type="text" placeholder="Search products…" class="swz-search-input">
                    <svg class="swz-search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <button class="swz-icon-btn swz-wishlist-btn" title="Wishlist">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>
                <div class="swz-profile-wrap" id="swzProfileWrap">
                    <button class="swz-icon-btn" id="swzProfileBtn" title="Account">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                    </button>
                    <div class="swz-profile-dropdown" id="swzProfileDrop">
                        <a href="#" class="swz-drop-link">My Account</a>
                        <a href="#" class="swz-drop-link">My Orders</a>
                        <a href="product.php" class="swz-drop-link">Shop</a>
                        <a href="#" class="swz-drop-link">Wishlist</a>
                        <a href="#" class="swz-drop-link swz-drop-link--red">Sign Out</a>
                    </div>
                </div>
                <button id="swzHeaderCartBtn" class="swz-icon-btn" title="Cart">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <span id="swzCartCount" class="swz-cart-badge">2</span>
                </button>
                <button class="swz-icon-btn swz-hamburger" id="swzMobileMenuBtn">
                    <svg width="21" height="21" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- ═══ MOBILE MENU ═══ -->
    <div class="swz-mobile-menu" id="swzMobileMenu">
        <button class="swz-mobile-close" id="swzMobileCloseBtn">
            <svg width="23" height="23" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                <path d="M18 6L6 18M6 6l12 12" />
            </svg>
        </button>
        <nav class="swz-mobile-nav">
            <a href="#" class="swz-mobile-nav-link">Men</a>
            <a href="#" class="swz-mobile-nav-link">Women</a>
            <a href="product.php" class="swz-mobile-nav-link">Shop</a>
            <a href="#" class="swz-mobile-nav-link">New Arrivals</a>
            <a href="#" class="swz-mobile-nav-link">Accessories</a>
            <a href="#" class="swz-mobile-nav-link swz-mobile-nav-link--sale">Sale</a>
        </nav>
        <div class="swz-mobile-footer">
            <a href="#" class="swz-mobile-footer-link">Sign In</a>
            <span class="swz-mobile-footer-sep">|</span>
            <a href="#" class="swz-mobile-footer-link">My Orders</a>
        </div>
    </div>

    <!-- ═══ MOBILE BOTTOM NAV ═══ -->
    <nav class="swz-bottom-nav">
        <a href="#" class="swz-bnav-item swz-bnav-active">
            <svg class="swz-bnav-icon" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span class="swz-bnav-label">Home</span>
        </a>
        <a href="#" class="swz-bnav-item">
            <svg class="swz-bnav-icon" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <span class="swz-bnav-label">Search</span>
        </a>
        <button class="swz-bnav-item swz-bnav-item--cart" id="swzBnavCartBtn">
            <div class="swz-bnav-icon-bg">
                <svg class="swz-bnav-icon" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
                <span id="swzBnavBadge" class="swz-bnav-badge">2</span>
            </div>
        </button>
        <a href="#" class="swz-bnav-item">
            <svg class="swz-bnav-icon" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
            <span class="swz-bnav-label">Wishlist</span>
        </a>
        <a href="#" class="swz-bnav-item">
            <svg class="swz-bnav-icon" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                <circle cx="12" cy="7" r="4" />
            </svg>
            <span class="swz-bnav-label">Account</span>
        </a>
    </nav>

    <main>

        <!-- ═══ HERO ═══ -->
        <div class="swz-hero-wrap">
            <div class="swz-hero-slide swz-active">
                <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?q=80&w=2070" alt="Hero 1">
                <div class="swz-hero-grad"></div>
            </div>
            <div class="swz-hero-slide">
                <img src="https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?q=80&w=2070" alt="Hero 2">
                <div class="swz-hero-grad"></div>
            </div>
            <div class="swz-hero-slide">
                <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?q=80&w=2070" alt="Hero 3">
                <div class="swz-hero-grad"></div>
            </div>

            <div class="swz-hero-content max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <span class="swz-hero-tag">New Season · Winter 2026</span>
                <h1 class="swz-hero-title">Elevated<br>Essentials</h1>
                <p class="swz-hero-sub">Refined silhouettes crafted from the world's finest materials. Wear what lasts.
                </p>
                <div class="swz-hero-btns">
                    <button class="swz-btn-outline-white">Explore Collection</button>
                    <button class="swz-btn-outline-white swz-btn-outline-white--dim">Shop Sale →</button>
                </div>
            </div>

            <!-- Arrows + Counter -->
            <div class="swz-hero-ctrl swz-hero-ctrl--arrows">
                <div class="swz-hero-arrows-btns">
                    <button id="swzHeroPrev" class="swz-hero-nav-btn">
                        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2.2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="swzHeroNext" class="swz-hero-nav-btn">
                        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2.2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <div class="swz-hero-counter">
                    <span id="swzSlideCurrent" class="swz-hero-counter-num">01</span>
                    <span class="swz-hero-counter-total">/ 03</span>
                </div>
            </div>

            <!-- Dots -->
            <div class="swz-hero-ctrl swz-hero-ctrl--dots">
                <button class="swz-hdot swz-on" data-idx="0"></button>
                <button class="swz-hdot" data-idx="1"></button>
                <button class="swz-hdot" data-idx="2"></button>
            </div>

            <!-- Scroll cue -->
            <div class="swz-hero-ctrl swz-hero-ctrl--scroll">
                <span class="swz-hero-scroll-label">Scroll</span>
                <div class="swz-hero-scroll-track">
                    <div class="swz-scrl-inner"></div>
                </div>
            </div>
        </div>

        <!-- ═══ STATS ═══ -->
        <section class="swz-stats-section">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div>
                        <div class="swz-stat-num swz-fp">240K+</div>
                        <div class="swz-stat-label">Happy Customers</div>
                    </div>
                    <div>
                        <div class="swz-stat-num swz-fp">98%</div>
                        <div class="swz-stat-label">Satisfaction Rate</div>
                    </div>
                    <div>
                        <div class="swz-stat-num swz-fp">120+</div>
                        <div class="swz-stat-label">Styles This Season</div>
                    </div>
                    <div>
                        <div class="swz-stat-num swz-fp">30</div>
                        <div class="swz-stat-label">Day Free Returns</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ CATEGORIES ═══ -->
        <section class="swz-categories-section">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <span class="swz-eyebrow">Browse</span>
                    <h2 class="swz-sec-title">Shop By Category</h2>
                    <div class="swz-divider"></div>
                </div>
                <div class="grid grid-cols-3 md:grid-cols-6 gap-5 md:gap-7">
                    <div class="swz-cat-item">
                        <div class="swz-cat-bubble"><img
                                src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=400&fit=crop"
                                alt="Women"></div>
                        <span class="swz-cat-label">Women</span>
                    </div>
                    <div class="swz-cat-item">
                        <div class="swz-cat-bubble"><img
                                src="https://images.unsplash.com/photo-1505022610485-0249ba5b3675?w=400&fit=crop"
                                alt="Men"></div>
                        <span class="swz-cat-label">Men</span>
                    </div>
                    <div class="swz-cat-item">
                        <div class="swz-cat-bubble"><img
                                src="https://images.unsplash.com/photo-1514327605112-b887c0e61c0a?w=400&fit=crop"
                                alt="Outerwear"></div>
                        <span class="swz-cat-label">Outerwear</span>
                    </div>
                    <div class="swz-cat-item">
                        <div class="swz-cat-bubble"><img
                                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?w=400&fit=crop"
                                alt="T-Shirts"></div>
                        <span class="swz-cat-label">T-Shirts</span>
                    </div>
                    <div class="swz-cat-item">
                        <div class="swz-cat-bubble"><img
                                src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=400&fit=crop"
                                alt="Accessories"></div>
                        <span class="swz-cat-label">Accessories</span>
                    </div>
                    <div class="swz-cat-item">
                        <div class="swz-cat-bubble"><img
                                src="https://images.unsplash.com/photo-1551488831-00ddcb6c6bd3?w=400&fit=crop"
                                alt="Footwear"></div>
                        <span class="swz-cat-label">Footwear</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ PRODUCT SLIDER 1 — Season Must-Haves ═══ -->
        <section class="swz-prod-slider-section swz-prod-slider-section--off">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="swz-slider-header">
                    <div>
                        <span class="swz-eyebrow">Curated for You</span>
                        <h2 class="swz-sec-title">Season Must-Haves</h2>
                        <p class="swz-sec-sub">Selected pieces from our winter drop.</p>
                    </div>
                    <div class="swz-slider-nav-btns">
                        <button class="swz-s1-prev swz-rnd-btn swz-rnd-btn--light">
                            <svg width="17" height="17" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2.5" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button class="swz-s1-next swz-rnd-btn swz-rnd-btn--light">
                            <svg width="17" height="17" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2.5" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="swz-swiper-clip">
                    <div class="swiper swz-swiper-instance swz-swiper1">
                        <div class="swiper-wrapper">

                            <!-- CARD 1 -->
                            <div class="swiper-slide">
                                <div class="swz-prod-card">
                                    <div class="swz-card-img-wrap">
                                        <span class="swz-card-badge" style="background:var(--swz-black)">New
                                            Arrival</span>
                                        <div class="swz-card-action-btns">
                                            <button class="swz-card-icon-btn" onclick="swzToggleWish(this)"
                                                title="Wishlist">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                            <button class="swz-card-icon-btn" onclick="swzShowQuickView(this)"
                                                title="Quick View">
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
                                        <div class="swz-quick-add">
                                            <p class="swz-qa-label">Select Size</p>
                                            <div class="swz-size-btns-row">
                                                <button class="swz-size-btn">S</button><button
                                                    class="swz-size-btn">M</button><button
                                                    class="swz-size-btn">L</button><button
                                                    class="swz-size-btn">XL</button>
                                            </div>
                                            <button class="swz-add-to-bag-btn swz-open-cart-trigger"
                                                data-product="Premium Parka" data-price="129.00"
                                                data-cat="Outerwear">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="swz-card-info">
                                        <p class="swz-card-cat">Outerwear</p>
                                        <h3 class="swz-card-name">Premium Parka</h3>
                                        <div class="swz-card-price">
                                            <span class="swz-price-now">$129.00</span>
                                            <span class="swz-price-was">$180.00</span>
                                            <span class="swz-price-off">28% OFF</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CARD 2 -->
                            <div class="swiper-slide">
                                <div class="swz-prod-card">
                                    <div class="swz-card-img-wrap">
                                        <span class="swz-card-badge" style="background:var(--swz-red)">Selling
                                            Fast</span>
                                        <div class="swz-card-action-btns">
                                            <button class="swz-card-icon-btn" onclick="swzToggleWish(this)"
                                                title="Wishlist">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                            <button class="swz-card-icon-btn" onclick="swzShowQuickView(this)"
                                                title="Quick View">
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
                                        <div class="swz-quick-add">
                                            <p class="swz-qa-label">Select Size</p>
                                            <div class="swz-size-btns-row">
                                                <button class="swz-size-btn">S</button><button
                                                    class="swz-size-btn">M</button><button
                                                    class="swz-size-btn">L</button>
                                            </div>
                                            <button class="swz-add-to-bag-btn swz-open-cart-trigger"
                                                data-product="Biker Leather Jacket" data-price="299.00"
                                                data-cat="Luxury">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="swz-card-info">
                                        <p class="swz-card-cat">Luxury</p>
                                        <h3 class="swz-card-name">Biker Leather Jacket</h3>
                                        <div class="swz-card-price"><span class="swz-price-now">$299.00</span></div>
                                    </div>
                                </div>
                            </div>

                            <!-- CARD 3 -->
                            <div class="swiper-slide">
                                <div class="swz-prod-card">
                                    <div class="swz-card-img-wrap">
                                        <span class="swz-card-badge" style="background:#4a7c59">Eco-Conscious</span>
                                        <div class="swz-card-action-btns">
                                            <button class="swz-card-icon-btn" onclick="swzToggleWish(this)"
                                                title="Wishlist">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                            <button class="swz-card-icon-btn" onclick="swzShowQuickView(this)"
                                                title="Quick View">
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
                                        <div class="swz-quick-add">
                                            <p class="swz-qa-label">Select Size</p>
                                            <div class="swz-size-btns-row">
                                                <button class="swz-size-btn">M</button><button
                                                    class="swz-size-btn">L</button><button
                                                    class="swz-size-btn">XL</button>
                                            </div>
                                            <button class="swz-add-to-bag-btn swz-open-cart-trigger"
                                                data-product="Wool Blend Overcoat" data-price="189.00"
                                                data-cat="Winter">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="swz-card-info">
                                        <p class="swz-card-cat">Winter</p>
                                        <h3 class="swz-card-name">Wool Blend Overcoat</h3>
                                        <div class="swz-card-price"><span class="swz-price-now">$189.00</span></div>
                                    </div>
                                </div>
                            </div>

                            <!-- CARD 4 -->
                            <div class="swiper-slide">
                                <div class="swz-prod-card">
                                    <div class="swz-card-img-wrap">
                                        <span class="swz-card-badge" style="background:#3a5a9a">Limited</span>
                                        <div class="swz-card-action-btns">
                                            <button class="swz-card-icon-btn" onclick="swzToggleWish(this)"
                                                title="Wishlist">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                            <button class="swz-card-icon-btn" onclick="swzShowQuickView(this)"
                                                title="Quick View">
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
                                        <div class="swz-quick-add">
                                            <p class="swz-qa-label">Select Size</p>
                                            <div class="swz-size-btns-row">
                                                <button class="swz-size-btn">S</button><button
                                                    class="swz-size-btn">M</button>
                                            </div>
                                            <button class="swz-add-to-bag-btn swz-open-cart-trigger"
                                                data-product="Minimalist Hoodie" data-price="79.00"
                                                data-cat="Essentials">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="swz-card-info">
                                        <p class="swz-card-cat">Essentials</p>
                                        <h3 class="swz-card-name">Minimalist Hoodie</h3>
                                        <div class="swz-card-price">
                                            <span class="swz-price-now">$79.00</span>
                                            <span class="swz-price-was">$110.00</span>
                                            <span class="swz-price-off">28% OFF</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CARD 5 -->
                            <div class="swiper-slide">
                                <div class="swz-prod-card">
                                    <div class="swz-card-img-wrap">
                                        <span class="swz-card-badge" style="background:#a0621a">Trending</span>
                                        <div class="swz-card-action-btns">
                                            <button class="swz-card-icon-btn" onclick="swzToggleWish(this)"
                                                title="Wishlist">
                                                <svg width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                            <button class="swz-card-icon-btn" onclick="swzShowQuickView(this)"
                                                title="Quick View">
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
                                        <div class="swz-quick-add">
                                            <p class="swz-qa-label">Select Size</p>
                                            <div class="swz-size-btns-row">
                                                <button class="swz-size-btn">28</button><button
                                                    class="swz-size-btn">30</button><button
                                                    class="swz-size-btn">32</button>
                                            </div>
                                            <button class="swz-add-to-bag-btn swz-open-cart-trigger"
                                                data-product="Cargo Trousers" data-price="95.00" data-cat="Bottoms">Add
                                                to Bag</button>
                                        </div>
                                    </div>
                                    <div class="swz-card-info">
                                        <p class="swz-card-cat">Bottoms</p>
                                        <h3 class="swz-card-name">Cargo Trousers</h3>
                                        <div class="swz-card-price"><span class="swz-price-now">$95.00</span></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ LOOKBOOK ═══ -->
        <section class="swz-lookbook-section">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <span class="swz-eyebrow">Editorial</span>
                    <h2 class="swz-sec-title">Winter Lookbook '26</h2>
                    <div class="swz-divider"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="swz-lb-card md:col-span-2" style="height:520px">
                        <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?q=80&w=1400"
                            alt="Dark Palettes">
                        <div class="swz-lb-overlay"></div>
                        <div class="swz-lb-content">
                            <p class="swz-lb-chapter">Chapter 01</p>
                            <h3 class="swz-lb-title">The Dark Palettes</h3>
                            <button class="swz-lb-explore-btn">Explore →</button>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="swz-lb-card" style="height:250px">
                            <img src="https://images.unsplash.com/photo-1487222477894-8943e31ef7b2?q=80&w=800"
                                alt="Street Textures">
                            <div class="swz-lb-overlay"></div>
                            <div class="swz-lb-content swz-lb-content--sm">
                                <p class="swz-lb-chapter--sm">Chapter 02</p>
                                <h3 class="swz-lb-title--sm">Street Textures</h3>
                            </div>
                        </div>
                        <div class="swz-lb-card" style="height:250px">
                            <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?q=80&w=800"
                                alt="Soft Minimalism">
                            <div class="swz-lb-overlay"></div>
                            <div class="swz-lb-content swz-lb-content--sm">
                                <p class="swz-lb-chapter--sm">Chapter 03</p>
                                <h3 class="swz-lb-title--sm">Soft Minimalism</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ PRODUCT SLIDER 2 — Best Sellers ═══ -->
        <section class="swz-prod-slider-section swz-prod-slider-section--white">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="swz-slider-header">
                    <div>
                        <span class="swz-eyebrow">All-Time Favourites</span>
                        <h2 class="swz-sec-title">Best Sellers</h2>
                        <p class="swz-sec-sub">Our most-loved styles, season after season.</p>
                    </div>
                    <div class="swz-slider-nav-btns">
                        <button class="swz-s2-prev swz-rnd-btn swz-rnd-btn--light">
                            <svg width="17" height="17" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2.5" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button class="swz-s2-next swz-rnd-btn swz-rnd-btn--light">
                            <svg width="17" height="17" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2.5" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="swz-swiper-clip">
                    <div class="swiper swz-swiper-instance swz-swiper2">
                        <div class="swiper-wrapper">

                            <!-- BS1 -->
                            <div class="swiper-slide">
                                <div class="swz-prod-card">
                                    <div class="swz-card-img-wrap">
                                        <span class="swz-card-badge" style="background:#2a7a4a">Best Seller</span>
                                        <div class="swz-card-action-btns">
                                            <button class="swz-card-icon-btn" onclick="swzToggleWish(this)"><svg
                                                    width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg></button>
                                            <button class="swz-card-icon-btn" onclick="swzShowQuickView(this)"><svg
                                                    width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg></button>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1548126032-079a0fb0099d?q=80&w=800"
                                            alt="Trench Coat">
                                        <div class="swz-quick-add">
                                            <p class="swz-qa-label">Select Size</p>
                                            <div class="swz-size-btns-row"><button
                                                    class="swz-size-btn">XS</button><button
                                                    class="swz-size-btn">S</button><button
                                                    class="swz-size-btn">M</button><button
                                                    class="swz-size-btn">L</button></div>
                                            <button class="swz-add-to-bag-btn swz-open-cart-trigger"
                                                data-product="Classic Trench Coat" data-price="245.00"
                                                data-cat="Outerwear">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="swz-card-info">
                                        <p class="swz-card-cat">Outerwear</p>
                                        <h3 class="swz-card-name">Classic Trench Coat</h3>
                                        <div class="swz-card-price"><span class="swz-price-now">$245.00</span></div>
                                    </div>
                                </div>
                            </div>

                            <!-- BS2 -->
                            <div class="swiper-slide">
                                <div class="swz-prod-card">
                                    <div class="swz-card-img-wrap">
                                        <span class="swz-card-badge"
                                            style="background:var(--swz-black)">Signature</span>
                                        <div class="swz-card-action-btns">
                                            <button class="swz-card-icon-btn" onclick="swzToggleWish(this)"><svg
                                                    width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg></button>
                                            <button class="swz-card-icon-btn" onclick="swzShowQuickView(this)"><svg
                                                    width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg></button>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?q=80&w=800"
                                            alt="Cashmere">
                                        <div class="swz-quick-add">
                                            <p class="swz-qa-label">Select Size</p>
                                            <div class="swz-size-btns-row"><button
                                                    class="swz-size-btn">S</button><button
                                                    class="swz-size-btn">M</button><button
                                                    class="swz-size-btn">L</button></div>
                                            <button class="swz-add-to-bag-btn swz-open-cart-trigger"
                                                data-product="Cashmere Crewneck" data-price="165.00"
                                                data-cat="Knitwear">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="swz-card-info">
                                        <p class="swz-card-cat">Knitwear</p>
                                        <h3 class="swz-card-name">Cashmere Crewneck</h3>
                                        <div class="swz-card-price"><span class="swz-price-now">$165.00</span></div>
                                    </div>
                                </div>
                            </div>

                            <!-- BS3 -->
                            <div class="swiper-slide">
                                <div class="swz-prod-card">
                                    <div class="swz-card-img-wrap">
                                        <span class="swz-card-badge" style="background:#1a3a6a">New Drop</span>
                                        <div class="swz-card-action-btns">
                                            <button class="swz-card-icon-btn" onclick="swzToggleWish(this)"><svg
                                                    width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg></button>
                                            <button class="swz-card-icon-btn" onclick="swzShowQuickView(this)"><svg
                                                    width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg></button>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1571945153237-4929e783af4a?q=80&w=800"
                                            alt="Tailored Blazer">
                                        <div class="swz-quick-add">
                                            <p class="swz-qa-label">Select Size</p>
                                            <div class="swz-size-btns-row"><button
                                                    class="swz-size-btn">S</button><button
                                                    class="swz-size-btn">M</button><button
                                                    class="swz-size-btn">L</button><button
                                                    class="swz-size-btn">XL</button></div>
                                            <button class="swz-add-to-bag-btn swz-open-cart-trigger"
                                                data-product="Tailored Blazer" data-price="210.00"
                                                data-cat="Suiting">Add to Bag</button>
                                        </div>
                                    </div>
                                    <div class="swz-card-info">
                                        <p class="swz-card-cat">Suiting</p>
                                        <h3 class="swz-card-name">Tailored Blazer</h3>
                                        <div class="swz-card-price">
                                            <span class="swz-price-now">$210.00</span>
                                            <span class="swz-price-was">$280.00</span>
                                            <span class="swz-price-off">25% OFF</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- BS4 -->
                            <div class="swiper-slide">
                                <div class="swz-prod-card">
                                    <div class="swz-card-img-wrap">
                                        <span class="swz-card-badge" style="background:#7a4a20">Heritage</span>
                                        <div class="swz-card-action-btns">
                                            <button class="swz-card-icon-btn" onclick="swzToggleWish(this)"><svg
                                                    width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg></button>
                                            <button class="swz-card-icon-btn" onclick="swzShowQuickView(this)"><svg
                                                    width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg></button>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=800"
                                            alt="Heritage Denim">
                                        <div class="swz-quick-add">
                                            <p class="swz-qa-label">Select Size</p>
                                            <div class="swz-size-btns-row"><button
                                                    class="swz-size-btn">28</button><button
                                                    class="swz-size-btn">30</button><button
                                                    class="swz-size-btn">32</button><button
                                                    class="swz-size-btn">34</button></div>
                                            <button class="swz-add-to-bag-btn swz-open-cart-trigger"
                                                data-product="Heritage Denim" data-price="135.00" data-cat="Denim">Add
                                                to Bag</button>
                                        </div>
                                    </div>
                                    <div class="swz-card-info">
                                        <p class="swz-card-cat">Denim</p>
                                        <h3 class="swz-card-name">Heritage Denim</h3>
                                        <div class="swz-card-price"><span class="swz-price-now">$135.00</span></div>
                                    </div>
                                </div>
                            </div>

                            <!-- BS5 -->
                            <div class="swiper-slide">
                                <div class="swz-prod-card">
                                    <div class="swz-card-img-wrap">
                                        <span class="swz-card-badge" style="background:#5a3a7a">Collab</span>
                                        <div class="swz-card-action-btns">
                                            <button class="swz-card-icon-btn" onclick="swzToggleWish(this)"><svg
                                                    width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg></button>
                                            <button class="swz-card-icon-btn" onclick="swzShowQuickView(this)"><svg
                                                    width="17" height="17" fill="none" stroke="currentColor"
                                                    stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg></button>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1544022613-e87ca75a784a?q=80&w=800"
                                            alt="Quilted Vest">
                                        <div class="swz-quick-add">
                                            <p class="swz-qa-label">Select Size</p>
                                            <div class="swz-size-btns-row"><button
                                                    class="swz-size-btn">S</button><button
                                                    class="swz-size-btn">M</button><button
                                                    class="swz-size-btn">L</button></div>
                                            <button class="swz-add-to-bag-btn swz-open-cart-trigger"
                                                data-product="Quilted Vest" data-price="118.00" data-cat="Outerwear">Add
                                                to Bag</button>
                                        </div>
                                    </div>
                                    <div class="swz-card-info">
                                        <p class="swz-card-cat">Outerwear</p>
                                        <h3 class="swz-card-name">Quilted Vest</h3>
                                        <div class="swz-card-price">
                                            <span class="swz-price-now">$118.00</span>
                                            <span class="swz-price-was">$150.00</span>
                                            <span class="swz-price-off">21% OFF</span>
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
        <section class="swz-features-section">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="flex flex-col items-center text-center gap-4">
                        <div class="swz-feature-icon-wrap">
                            <svg width="22" height="22" fill="none" stroke="white" stroke-width="1.6"
                                viewBox="0 0 24 24">
                                <path d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="swz-feature-title">Free Shipping</h4>
                            <p class="swz-feature-desc">On all orders over $150</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center text-center gap-4">
                        <div class="swz-feature-icon-wrap">
                            <svg width="22" height="22" fill="none" stroke="white" stroke-width="1.6"
                                viewBox="0 0 24 24">
                                <path
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="swz-feature-title">Easy Returns</h4>
                            <p class="swz-feature-desc">30-day hassle-free returns</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center text-center gap-4">
                        <div class="swz-feature-icon-wrap">
                            <svg width="22" height="22" fill="none" stroke="white" stroke-width="1.6"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="swz-feature-title">Secure Payments</h4>
                            <p class="swz-feature-desc">256-bit SSL encryption</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center text-center gap-4">
                        <div class="swz-feature-icon-wrap">
                            <svg width="22" height="22" fill="none" stroke="white" stroke-width="1.6"
                                viewBox="0 0 24 24">
                                <path
                                    d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="swz-feature-title">24/7 Support</h4>
                            <p class="swz-feature-desc">Always here to help you</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ BRAND STORY ═══ -->
        <section class="swz-brand-story-section">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="swz-brand-story-img">
                    <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?q=80&w=1400" alt="Brand Story">
                </div>
                <div class="swz-brand-story-content">
                    <span class="swz-eyebrow swz-brand-eyebrow">Our Story</span>
                    <h2 class="swz-brand-title">Crafted For<br>The Modern<br>Individual</h2>
                    <p class="swz-brand-desc">Founded in 2018, Swizer was born from a simple belief — everyday clothing
                        should be both beautiful and purposeful. We source only the finest materials and work with
                        ethical factories to bring you pieces that last.</p>
                    <div class="swz-brand-stats">
                        <div>
                            <div class="swz-brand-stat-num">2018</div>
                            <div class="swz-brand-stat-label">Founded</div>
                        </div>
                        <div class="swz-brand-stat-sep"></div>
                        <div>
                            <div class="swz-brand-stat-num">12</div>
                            <div class="swz-brand-stat-label">Countries</div>
                        </div>
                        <div class="swz-brand-stat-sep"></div>
                        <div>
                            <div class="swz-brand-stat-num">100%</div>
                            <div class="swz-brand-stat-label">Ethical</div>
                        </div>
                    </div>
                    <button class="swz-btn-outline-white" style="align-self:flex-start">Read Our Story</button>
                </div>
            </div>
        </section>

        <!-- ═══ TESTIMONIALS ═══ -->
        <section class="swz-testimonials-section">
            <div class="max-w-screen-md mx-auto px-4 sm:px-6 text-center">
                <span class="swz-eyebrow">What They Say</span>
                <h2 class="swz-sec-title" style="margin-bottom:56px">Customer Reviews</h2>
                <div>
                    <div class="swz-t-slide swz-active">
                        <div class="swz-t-stars">★★★★★</div>
                        <blockquote class="swz-t-quote">"The quality is absolutely unmatched. Every single piece I've
                            ordered has exceeded expectations."</blockquote>
                        <div class="swz-t-author-wrap">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop"
                                class="swz-t-author-img" alt="Sarah M.">
                            <div class="text-left">
                                <p class="swz-t-author-name">Sarah M.</p>
                                <p class="swz-t-author-role">Verified Buyer · 5 Stars</p>
                            </div>
                        </div>
                    </div>
                    <div class="swz-t-slide">
                        <div class="swz-t-stars">★★★★★</div>
                        <blockquote class="swz-t-quote">"I've been buying from Swizer for two years. The Premium Parka
                            is genuinely the best jacket I own."</blockquote>
                        <div class="swz-t-author-wrap">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop"
                                class="swz-t-author-img" alt="James K.">
                            <div class="text-left">
                                <p class="swz-t-author-name">James K.</p>
                                <p class="swz-t-author-role">Verified Buyer · 5 Stars</p>
                            </div>
                        </div>
                    </div>
                    <div class="swz-t-slide">
                        <div class="swz-t-stars">★★★★★</div>
                        <blockquote class="swz-t-quote">"Shipping was incredibly fast and packaging is so premium.
                            Everyone loves the pieces I gifted them."</blockquote>
                        <div class="swz-t-author-wrap">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop"
                                class="swz-t-author-img" alt="Priya L.">
                            <div class="text-left">
                                <p class="swz-t-author-name">Priya L.</p>
                                <p class="swz-t-author-role">Verified Buyer · 5 Stars</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swz-t-nav-wrap">
                    <button id="swzTPrev" class="swz-rnd-btn swz-rnd-btn--outline">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2.5" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <div class="flex gap-2">
                        <button class="swz-t-dot swz-t-dot--active" data-idx="0"></button>
                        <button class="swz-t-dot swz-t-dot--inactive" data-idx="1"></button>
                        <button class="swz-t-dot swz-t-dot--inactive" data-idx="2"></button>
                    </div>
                    <button id="swzTNext" class="swz-rnd-btn swz-rnd-btn--outline">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2.5" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- ═══ INSTAGRAM GRID ═══ -->
        <section class="swz-insta-section">
            <div class="swz-insta-header">
                <span class="swz-eyebrow">Follow Along</span>
                <h2 class="swz-insta-handle">@swizer.official</h2>
            </div>
            <div class="swz-insta-grid">
                <div class="swz-insta-cell">
                    <img src="https://images.unsplash.com/photo-1581044777550-4cfa60707c03?q=80&w=600" alt="">
                    <div class="swz-insta-cell-overlay">
                        <svg class="swz-insta-ig-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </div>
                </div>
                <div class="swz-insta-cell">
                    <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?q=80&w=600" alt="">
                    <div class="swz-insta-cell-overlay"></div>
                </div>
                <div class="swz-insta-cell">
                    <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=600" alt="">
                    <div class="swz-insta-cell-overlay"></div>
                </div>
                <div class="swz-insta-cell">
                    <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?q=80&w=600" alt="">
                    <div class="swz-insta-cell-overlay"></div>
                </div>
                <div class="swz-insta-cell">
                    <img src="https://images.unsplash.com/photo-1487222477894-8943e31ef7b2?q=80&w=600" alt="">
                    <div class="swz-insta-cell-overlay"></div>
                </div>
                <div class="swz-insta-cell">
                    <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?q=80&w=600" alt="">
                    <div class="swz-insta-cell-overlay"></div>
                </div>
            </div>
        </section>

        <!-- ═══ NEWSLETTER ═══ -->
        <section class="swz-newsletter-section">
            <div class="max-w-screen-sm mx-auto px-4 sm:px-6">
                <span class="swz-eyebrow swz-nl-eyebrow">Stay In The Loop</span>
                <h2 class="swz-nl-title">Join the Club</h2>
                <p class="swz-nl-desc">Subscribe for early access to drops, exclusive offers, and styling tips.</p>
                <div class="swz-nl-form">
                    <input type="email" placeholder="Your email address" class="swz-nl-input">
                    <button class="swz-nl-submit-btn">Subscribe</button>
                </div>
                <p class="swz-nl-note">No spam. Unsubscribe at any time.</p>
            </div>
        </section>

    </main>

    <!-- ═══ FOOTER ═══ -->
    <footer class="swz-footer">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
                <div class="col-span-2">
                    <a href="#" class="swz-footer-logo">Swizer</a>
                    <p class="swz-footer-desc">Crafting premium apparel for the modern individual. Quality, comfort, and
                        style — redefined for everyday wear.</p>
                    <div class="swz-footer-social-wrap">
                        <a href="#" class="swz-footer-social-btn">IG</a>
                        <a href="#" class="swz-footer-social-btn">TT</a>
                        <a href="#" class="swz-footer-social-btn">P</a>
                    </div>
                </div>
                <div>
                    <h4 class="swz-footer-col-title">Help</h4>
                    <ul class="swz-footer-links-list">
                        <li><a href="#" class="swz-footer-link">Order Status</a></li>
                        <li><a href="#" class="swz-footer-link">Shipping &amp; Delivery</a></li>
                        <li><a href="#" class="swz-footer-link">Returns</a></li>
                        <li><a href="#" class="swz-footer-link">Size Guide</a></li>
                        <li><a href="#" class="swz-footer-link">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="swz-footer-col-title">Company</h4>
                    <ul class="swz-footer-links-list">
                        <li><a href="#" class="swz-footer-link">Our Story</a></li>
                        <li><a href="#" class="swz-footer-link">Sustainability</a></li>
                        <li><a href="#" class="swz-footer-link">Careers</a></li>
                        <li><a href="#" class="swz-footer-link">Press</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="swz-footer-col-title">Shop</h4>
                    <ul class="swz-footer-links-list">
                        <li><a href="#" class="swz-footer-link">New Arrivals</a></li>
                        <li><a href="#" class="swz-footer-link">Best Sellers</a></li>
                        <li><a href="#" class="swz-footer-link">Sale</a></li>
                        <li><a href="#" class="swz-footer-link">Gift Cards</a></li>
                    </ul>
                </div>
            </div>
            <div class="swz-footer-bottom">
                <p class="swz-footer-copy">© 2026 Swizer Apparel Group. All Rights Reserved.</p>
                <div class="swz-footer-alert-wrap">
                    <span class="swz-footer-alert-label">Alert:</span>
                    <p class="swz-footer-alert-text">Swizer will never ask for private details over SMS.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- ═══ CART OVERLAY + DRAWER ═══ -->
    <div class="swz-cart-overlay" id="swzCartOverlay"></div>

    <div class="swz-cart-drawer" id="swzCartDrawer">
        <div class="swz-cart-drawer-head">
            <div class="swz-cart-drawer-head-left">
                <h2 class="swz-cart-drawer-title">Your Bag</h2>
                <span id="swzDrawerCount" class="swz-cart-items-count-badge">2 items</span>
            </div>
            <button id="swzCloseCartBtn" class="swz-cart-close-btn">
                <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path d="M18 6L6 18M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="swz-cart-progress-strip">
            <div class="swz-cart-progress-row">
                <p class="swz-cart-progress-text">Free Shipping Progress</p>
                <p id="swzProgressLabel" class="swz-cart-progress-val">$208 / $150 ✓</p>
            </div>
            <div class="swz-progress-bar-track">
                <div class="swz-progress-bar-fill" id="swzProgressFill" style="width:100%"></div>
            </div>
            <p id="swzProgressMsg" class="swz-cart-progress-msg">🎉 You've unlocked free shipping!</p>
        </div>

        <div class="swz-cart-body" id="swzCartBody">
            <div class="swz-cart-item" data-price="129.00">
                <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?w=200"
                    class="swz-cart-item-thumb" alt="Premium Parka">
                <div class="swz-cart-item-info">
                    <p class="swz-cart-item-category">Outerwear</p>
                    <h4 class="swz-cart-item-name">Premium Parka</h4>
                    <p class="swz-cart-item-variant">Size: L · Deep Black</p>
                    <div class="swz-cart-item-row-btm">
                        <div class="swz-qty-controls">
                            <button class="swz-qty-btn" onclick="swzUpdateQty(this,-1)">−</button>
                            <span class="swz-qty-display">1</span>
                            <button class="swz-qty-btn" onclick="swzUpdateQty(this,1)">+</button>
                        </div>
                        <span class="swz-cart-item-price">$129.00</span>
                    </div>
                </div>
                <button onclick="swzRemoveItem(this)" class="swz-cart-item-remove">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M18 6L6 18M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="swz-cart-item" data-price="79.00">
                <img src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=200"
                    class="swz-cart-item-thumb" alt="Minimalist Hoodie">
                <div class="swz-cart-item-info">
                    <p class="swz-cart-item-category">Essentials</p>
                    <h4 class="swz-cart-item-name">Minimalist Hoodie</h4>
                    <p class="swz-cart-item-variant">Size: M · Carbon Grey</p>
                    <div class="swz-cart-item-row-btm">
                        <div class="swz-qty-controls">
                            <button class="swz-qty-btn" onclick="swzUpdateQty(this,-1)">−</button>
                            <span class="swz-qty-display">1</span>
                            <button class="swz-qty-btn" onclick="swzUpdateQty(this,1)">+</button>
                        </div>
                        <span class="swz-cart-item-price">$79.00</span>
                    </div>
                </div>
                <button onclick="swzRemoveItem(this)" class="swz-cart-item-remove">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M18 6L6 18M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="swz-cart-footer-wrap">
            <div class="swz-cart-totals-wrap">
                <div class="swz-cart-subtotal-row">
                    <span class="swz-cart-subtotal-label">Subtotal</span>
                    <span id="swzCartSubtotal" class="swz-cart-subtotal-val">$208.00</span>
                </div>
                <div class="swz-cart-shipping-row">
                    <span class="swz-cart-shipping-label">Shipping</span>
                    <span class="swz-cart-shipping-val">FREE</span>
                </div>
                <div class="swz-cart-total-row">
                    <span class="swz-cart-total-label">Total</span>
                    <span id="swzCartTotal" class="swz-cart-total-val">$208.00</span>
                </div>
            </div>
            <div class="swz-cart-action-btns">
                <button class="swz-cart-view-btn">View Cart</button>
                <button class="swz-cart-checkout-btn">Checkout →</button>
            </div>
        </div>
    </div>

    <!-- ═══ QUICK VIEW MODAL ═══ -->
    <div class="swz-qv-overlay" id="swzQvOverlay" onclick="swzCloseQV()"></div>
    <div class="swz-qv-modal" id="swzQvModal">
        <button onclick="swzCloseQV()" class="swz-qv-close">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                <path d="M18 6L6 18M6 6l12 12" />
            </svg>
        </button>
        <p class="swz-qv-cat" id="swzQvCat">—</p>
        <h3 class="swz-qv-name" id="swzQvName">Product</h3>
        <p class="swz-qv-price" id="swzQvPrice">$0.00</p>
        <p class="swz-qv-desc">Premium quality piece crafted with care. Perfect for the modern individual who values
            both style and substance.</p>
        <button class="swz-qv-add-btn swz-open-cart-trigger" id="swzQvAddBtn">Add to Bag</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        /* ═══════════════════════════════════════════
           SWIZER — ALL JS NAMESPACED WITH swz prefix
        ═══════════════════════════════════════════ */

        // ── HERO SLIDER ──────────────────────────────
        (function () {
            const slides = document.querySelectorAll('.swz-hero-slide');
            const dots = document.querySelectorAll('.swz-hdot');
            const cur$ = document.getElementById('swzSlideCurrent');
            let cur = 0, n = slides.length;

            function swzHeroGoTo(i) {
                slides[cur].classList.remove('swz-active');
                dots[cur].classList.remove('swz-on');
                dots[cur].style.width = '8px';
                dots[cur].style.background = 'rgba(255,255,255,.32)';
                cur = ((i % n) + n) % n;
                slides[cur].classList.add('swz-active');
                dots[cur].classList.add('swz-on');
                dots[cur].style.width = '28px';
                dots[cur].style.background = '#fff';
                cur$.textContent = String(cur + 1).padStart(2, '0');
            }

            document.getElementById('swzHeroPrev').onclick = () => swzHeroGoTo(cur - 1);
            document.getElementById('swzHeroNext').onclick = () => swzHeroGoTo(cur + 1);
            dots.forEach(d => d.onclick = () => swzHeroGoTo(+d.dataset.idx));
            setInterval(() => swzHeroGoTo(cur + 1), 5500);
        })();

        // ── MOBILE MENU ──────────────────────────────
        document.getElementById('swzMobileMenuBtn').onclick = () => {
            document.getElementById('swzMobileMenu').classList.add('swz-open');
            document.body.style.overflow = 'hidden';
        };
        document.getElementById('swzMobileCloseBtn').onclick = () => {
            document.getElementById('swzMobileMenu').classList.remove('swz-open');
            document.body.style.overflow = '';
        };

        // ── PROFILE DROPDOWN ─────────────────────────
        (function () {
            const btn = document.getElementById('swzProfileBtn');
            const drop = document.getElementById('swzProfileDrop');
            if (!btn) return;
            btn.onclick = e => { e.stopPropagation(); drop.classList.toggle('swz-open'); };
            document.addEventListener('click', () => drop.classList.remove('swz-open'));
        })();

        // ── TESTIMONIALS ─────────────────────────────
        (function () {
            const slides = document.querySelectorAll('.swz-t-slide');
            const dots = document.querySelectorAll('.swz-t-dot');
            let cur = 0, n = slides.length;

            function swzTestiGoTo(i) {
                slides[cur].classList.remove('swz-active');
                dots[cur].style.width = '8px';
                dots[cur].style.background = '#d1d5db';
                cur = ((i % n) + n) % n;
                slides[cur].classList.add('swz-active');
                dots[cur].style.width = '24px';
                dots[cur].style.background = 'var(--swz-black)';
            }

            document.getElementById('swzTPrev').onclick = () => swzTestiGoTo(cur - 1);
            document.getElementById('swzTNext').onclick = () => swzTestiGoTo(cur + 1);
            dots.forEach(d => d.onclick = () => swzTestiGoTo(+d.dataset.idx));
            setInterval(() => swzTestiGoTo(cur + 1), 6000);
        })();

        // ── SWIPERS ──────────────────────────────────
        document.addEventListener('DOMContentLoaded', () => {
            const swzSwiperOpts = (prev, next) => ({
                slidesPerView: 1.2,
                spaceBetween: 12,
                navigation: { prevEl: prev, nextEl: next },
                breakpoints: {
                    480: { slidesPerView: 1.8, spaceBetween: 14 },
                    640: { slidesPerView: 2.2, spaceBetween: 18 },
                    768: { slidesPerView: 2.8, spaceBetween: 20 },
                    1024: { slidesPerView: 3.5, spaceBetween: 24 },
                    1280: { slidesPerView: 4, spaceBetween: 28 }
                }
            });
            new Swiper('.swz-swiper1', swzSwiperOpts('.swz-s1-prev', '.swz-s1-next'));
            new Swiper('.swz-swiper2', swzSwiperOpts('.swz-s2-prev', '.swz-s2-next'));
        });

        // ── WISHLIST TOGGLE ──────────────────────────
        function swzToggleWish(btn) {
            btn.classList.toggle('swz-wished');
            const svg = btn.querySelector('svg');
            if (btn.classList.contains('swz-wished')) {
                btn.style.background = '#fff5f5';
                svg.style.stroke = 'var(--swz-red)';
                svg.style.fill = 'var(--swz-red)';
            } else {
                btn.style.background = '#fff';
                svg.style.stroke = '';
                svg.style.fill = 'none';
            }
        }

        // ── QUICK VIEW ───────────────────────────────
        function swzShowQuickView(btn) {
            const card = btn.closest('.swz-prod-card');
            const addBtn = card.querySelector('.swz-add-to-bag-btn');
            const cat = card.querySelector('.swz-card-cat')?.textContent || '';
            const name = card.querySelector('.swz-card-name')?.textContent || '';
            const price = card.querySelector('.swz-price-now')?.textContent || '';

            document.getElementById('swzQvCat').textContent = cat;
            document.getElementById('swzQvName').textContent = name;
            document.getElementById('swzQvPrice').textContent = price;

            const qvAdd = document.getElementById('swzQvAddBtn');
            if (addBtn) {
                qvAdd.dataset.product = addBtn.dataset.product || name;
                qvAdd.dataset.price = addBtn.dataset.price || '0.00';
                qvAdd.dataset.cat = addBtn.dataset.cat || '';
            }

            document.getElementById('swzQvOverlay').style.opacity = '1';
            document.getElementById('swzQvOverlay').style.pointerEvents = 'auto';
            document.getElementById('swzQvModal').style.opacity = '1';
            document.getElementById('swzQvModal').style.pointerEvents = 'auto';
            document.getElementById('swzQvModal').style.transform = 'translate(-50%,-50%)';
            document.body.style.overflow = 'hidden';
        }
        function swzCloseQV() {
            document.getElementById('swzQvOverlay').style.opacity = '0';
            document.getElementById('swzQvOverlay').style.pointerEvents = 'none';
            document.getElementById('swzQvModal').style.opacity = '0';
            document.getElementById('swzQvModal').style.pointerEvents = 'none';
            document.getElementById('swzQvModal').style.transform = 'translate(-50%,-60%)';
            document.body.style.overflow = '';
        }

        // ── CART ─────────────────────────────────────
        function swzOpenCart() {
            document.getElementById('swzCartOverlay').classList.add('swz-open');
            document.getElementById('swzCartDrawer').classList.add('swz-open');
            document.body.style.overflow = 'hidden';
        }
        function swzCloseCart() {
            document.getElementById('swzCartOverlay').classList.remove('swz-open');
            document.getElementById('swzCartDrawer').classList.remove('swz-open');
            document.body.style.overflow = '';
        }

        // Open cart on any trigger
        document.addEventListener('click', e => {
            if (e.target.closest('.swz-open-cart-trigger')) {
                swzCloseQV();
                swzOpenCart();
            }
        });

        document.getElementById('swzHeaderCartBtn').onclick = swzOpenCart;
        document.getElementById('swzBnavCartBtn').onclick = swzOpenCart;
        document.getElementById('swzCloseCartBtn').onclick = swzCloseCart;
        document.getElementById('swzCartOverlay').onclick = swzCloseCart;
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') { swzCloseCart(); swzCloseQV(); }
        });

        // ── CART LOGIC ───────────────────────────────
        function swzUpdateQty(btn, delta) {
            const span = btn.parentElement.querySelector('.swz-qty-display');
            let v = Math.max(1, parseInt(span.textContent) + delta);
            span.textContent = v;
            const item = btn.closest('.swz-cart-item');
            const base = parseFloat(item.dataset.price);
            item.querySelector('.swz-cart-item-price').textContent = '$' + (base * v).toFixed(2);
            swzRefreshTotals();
        }

        function swzRemoveItem(btn) {
            btn.closest('.swz-cart-item').remove();
            swzRefreshTotals();
        }

        function swzRefreshTotals() {
            const items = document.querySelectorAll('.swz-cart-item');
            let total = 0, count = 0;
            items.forEach(item => {
                const price = parseFloat(item.querySelector('.swz-cart-item-price').textContent.replace('$', ''));
                const qty = parseInt(item.querySelector('.swz-qty-display').textContent);
                total += price;
                count += qty;
            });

            document.getElementById('swzCartSubtotal').textContent = '$' + total.toFixed(2);
            document.getElementById('swzCartTotal').textContent = '$' + total.toFixed(2);
            document.getElementById('swzCartCount').textContent = count;
            document.getElementById('swzBnavBadge').textContent = count;
            document.getElementById('swzDrawerCount').textContent = count + ' item' + (count !== 1 ? 's' : '');

            const pct = Math.min((total / 150) * 100, 100);
            document.getElementById('swzProgressFill').style.width = pct + '%';

            const rem = 150 - total;
            if (rem <= 0) {
                document.getElementById('swzProgressLabel').textContent = '$' + total.toFixed(0) + ' / $150 ✓';
                document.getElementById('swzProgressMsg').textContent = "🎉 You've unlocked free shipping!";
                document.getElementById('swzProgressMsg').style.color = 'var(--swz-green)';
            } else {
                document.getElementById('swzProgressLabel').textContent = '$' + total.toFixed(0) + ' / $150';
                document.getElementById('swzProgressMsg').textContent = 'Add $' + rem.toFixed(2) + ' more for free shipping!';
                document.getElementById('swzProgressMsg').style.color = 'var(--swz-gray)';
            }
        }

        // ── BOTTOM NAV ACTIVE STATE ──────────────────
        document.querySelectorAll('.swz-bnav-item').forEach(item => {
            if (item.tagName === 'A') {
                item.addEventListener('click', function () {
                    document.querySelectorAll('.swz-bnav-item').forEach(i => i.classList.remove('swz-bnav-active'));
                    this.classList.add('swz-bnav-active');
                });
            }
        });
    </script>
</body>

</html>