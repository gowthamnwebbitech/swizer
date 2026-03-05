<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders – Swizer Premium Apparel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,700;0,800;0,900;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
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
            --swz-blue: #1a5a8a;
            --swz-border: #e8e8e8;
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
            background: var(--swz-off);
            color: var(--swz-black);
            overflow-x: hidden;
        }

        @media (max-width: 767px) {
            body {
                padding-bottom: 68px;
            }
        }

        /* ANNOUNCE BAR */
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
            opacity: .3;
        }

        /* HEADER */
        .swz-header {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(255, 255, 255, .9);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(229, 231, 235, .6);
        }

        .swz-header-inner {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        @media (min-width: 1024px) {
            .swz-header-inner {
                padding: 0 32px;
                height: 68px;
            }
        }

        .swz-logo-text {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 22px;
            color: var(--swz-black);
            font-style: italic;
            text-decoration: none;
        }

        .swz-desk-nav {
            display: none;
            align-items: center;
            gap: 28px;
        }

        @media (min-width: 1024px) {
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

        .swz-header-right {
            display: flex;
            align-items: center;
            gap: 4px;
        }

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
            position: relative;
        }

        .swz-icon-btn:hover {
            background: #f2f2f2;
        }

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
        }

        /* BREADCRUMB */
        .swz-breadcrumb-bar {
            border-bottom: 1px solid var(--swz-border);
            background: #fff;
        }

        .swz-breadcrumb-inner {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
            height: 44px;
            display: flex;
            align-items: center;
        }

        @media (min-width: 1024px) {
            .swz-breadcrumb-inner {
                padding: 0 32px;
            }
        }

        .swz-breadcrumb {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--swz-lgray);
        }

        .swz-breadcrumb a {
            color: var(--swz-lgray);
            text-decoration: none;
            transition: color .2s;
        }

        .swz-breadcrumb a:hover {
            color: var(--swz-black);
        }

        .swz-breadcrumb span {
            color: var(--swz-black);
        }

        /* PAGE HERO */
        .swz-page-hero {
            background: var(--swz-black);
            padding: 56px 24px;
            text-align: center;
        }

        @media (min-width: 1024px) {
            .swz-page-hero {
                padding: 72px 32px;
            }
        }

        .swz-page-hero-eyebrow {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .45em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .4);
            margin-bottom: 14px;
            display: block;
        }

        .swz-page-hero-title {
            font-family: 'Playfair Display', serif;
            font-weight: 900;
            font-size: clamp(38px, 6vw, 72px);
            line-height: 1;
            letter-spacing: -.02em;
            color: #fff;
            font-style: italic;
        }

        /* MAIN */
        .swz-orders-main {
            max-width: 1280px;
            margin: 0 auto;
            padding: 40px 24px 80px;
        }

        @media (min-width: 1024px) {
            .swz-orders-main {
                padding: 48px 32px 80px;
            }
        }

        /* HEADER ROW */
        .swz-ord-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
            margin-bottom: 28px;
        }

        .swz-ord-count {
            font-size: 13px;
            font-weight: 300;
            color: var(--swz-gray);
        }

        .swz-ord-count strong {
            font-weight: 700;
            color: var(--swz-black);
        }

        /* BUTTONS */
        .swz-btn-black {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            background: var(--swz-black);
            color: #fff;
            border: none;
            font-family: 'Manrope', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            padding: 11px 20px;
            cursor: pointer;
            transition: all .25s;
        }

        .swz-btn-black:hover {
            background: #333;
        }

        .swz-btn-outline {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            background: #fff;
            color: var(--swz-black);
            border: 1.5px solid var(--swz-border);
            font-family: 'Manrope', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            padding: 10px 18px;
            cursor: pointer;
            transition: all .25s;
        }

        .swz-btn-outline:hover {
            border-color: var(--swz-black);
        }

        .swz-btn-sm {
            padding: 8px 14px;
            font-size: 10px;
        }

        /* FILTER TABS */
        .swz-ord-toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
            padding: 14px 20px;
            background: #fff;
            border: 1px solid var(--swz-border);
            margin-bottom: 24px;
        }

        .swz-filter-tabs {
            display: flex;
            gap: 0;
            overflow-x: auto;
            scrollbar-width: none;
        }

        .swz-filter-tabs::-webkit-scrollbar {
            display: none;
        }

        .swz-filter-tab {
            padding: 8px 18px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            background: none;
            border: none;
            border-bottom: 2px solid transparent;
            cursor: pointer;
            color: var(--swz-gray);
            white-space: nowrap;
            font-family: 'Manrope', sans-serif;
            transition: all .2s;
        }

        .swz-filter-tab.active {
            color: var(--swz-black);
            border-bottom-color: var(--swz-black);
        }

        .swz-search-input {
            border: 1.5px solid var(--swz-border);
            padding: 9px 14px 9px 36px;
            font-family: 'Manrope', sans-serif;
            font-size: 13px;
            width: 200px;
            outline: none;
            transition: all .3s;
            background: #fff;
        }

        .swz-search-input:focus {
            width: 240px;
            border-color: var(--swz-black);
        }

        .swz-search-wrap {
            position: relative;
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

        /* ORDER CARD */
        .swz-orders-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .swz-order-card {
            background: #fff;
            border: 1px solid var(--swz-border);
            transition: border-color .2s, box-shadow .2s;
        }

        .swz-order-card:hover {
            border-color: rgba(0, 0, 0, .2);
            box-shadow: 0 4px 20px rgba(0, 0, 0, .07);
        }

        .swz-order-card-head {
            padding: 18px 24px;
            border-bottom: 1px solid var(--swz-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
            background: var(--swz-off);
        }

        .swz-order-meta-grid {
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
        }

        .swz-order-meta-item {}

        .swz-order-meta-label {
            font-size: 9px;
            font-weight: 700;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: var(--swz-lgray);
            margin-bottom: 3px;
        }

        .swz-order-meta-val {
            font-size: 13px;
            font-weight: 700;
        }

        .swz-order-card-body {
            padding: 20px 24px;
        }

        .swz-order-items-list {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .swz-order-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
        }

        .swz-order-item-img {
            width: 72px;
            height: 90px;
            object-fit: cover;
            flex-shrink: 0;
        }

        .swz-order-item-info {
            flex: 1;
            min-width: 0;
        }

        .swz-order-item-cat {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: var(--swz-lgray);
            margin-bottom: 3px;
        }

        .swz-order-item-name {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .swz-order-item-variant {
            font-size: 12px;
            font-weight: 300;
            color: var(--swz-gray);
            margin-bottom: 6px;
        }

        .swz-order-item-price {
            font-size: 14px;
            font-weight: 700;
        }

        .swz-order-item-qty {
            font-size: 11px;
            font-weight: 300;
            color: var(--swz-gray);
        }

        .swz-order-card-foot {
            padding: 16px 24px;
            border-top: 1px solid var(--swz-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
        }

        .swz-order-total-wrap {
            display: flex;
            align-items: baseline;
            gap: 8px;
        }

        .swz-order-total-label {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--swz-gray);
        }

        .swz-order-total-val {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 26px;
        }

        .swz-order-actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        /* STATUS BADGES */
        .swz-status-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 9px;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            padding: 5px 12px;
        }

        .swz-status-badge--delivered {
            background: #e8f5ef;
            color: var(--swz-green);
        }

        .swz-status-badge--shipped {
            background: #e8f0f5;
            color: var(--swz-blue);
        }

        .swz-status-badge--processing {
            background: #f5f0e8;
            color: #8a5a1a;
        }

        .swz-status-badge--cancelled {
            background: #fef2f2;
            color: var(--swz-red);
        }

        .swz-status-badge--returned {
            background: #f3f4f6;
            color: var(--swz-gray);
        }

        /* TRACKING PROGRESS */
        .swz-tracking-progress {
            margin: 16px 0;
            padding: 16px 0;
            border-top: 1px solid var(--swz-border);
        }

        .swz-tracking-label {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--swz-gray);
            margin-bottom: 14px;
        }

        .swz-tracking-steps {
            display: flex;
            align-items: flex-start;
            gap: 0;
        }

        .swz-tracking-step {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .swz-tracking-step:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 11px;
            left: 50%;
            width: 100%;
            height: 2px;
            background: var(--swz-border);
            z-index: 0;
        }

        .swz-tracking-step.done:not(:last-child)::after {
            background: var(--swz-green);
        }

        .swz-tracking-dot {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            border: 2.5px solid var(--swz-border);
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 1;
            flex-shrink: 0;
            transition: all .3s;
        }

        .swz-tracking-step.done .swz-tracking-dot {
            border-color: var(--swz-green);
            background: var(--swz-green);
        }

        .swz-tracking-step.current .swz-tracking-dot {
            border-color: var(--swz-blue);
            background: var(--swz-blue);
            box-shadow: 0 0 0 4px rgba(26, 90, 138, .15);
        }

        .swz-tracking-step-label {
            font-size: 9px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--swz-lgray);
            text-align: center;
            margin-top: 8px;
            line-height: 1.3;
        }

        .swz-tracking-step.done .swz-tracking-step-label,
        .swz-tracking-step.current .swz-tracking-step-label {
            color: var(--swz-black);
        }

        /* MORE ITEMS TOGGLE */
        .swz-more-items-btn {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .1em;
            text-transform: uppercase;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--swz-gray);
            padding: 12px 0 0;
            text-decoration: underline;
            font-family: 'Manrope', sans-serif;
            transition: color .2s;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .swz-more-items-btn:hover {
            color: var(--swz-black);
        }

        /* DETAIL MODAL */
        .swz-modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .55);
            backdrop-filter: blur(4px);
            z-index: 9996;
            opacity: 0;
            pointer-events: none;
            transition: opacity .3s;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px;
            overflow-y: auto;
        }

        .swz-modal-overlay.open {
            opacity: 1;
            pointer-events: auto;
        }

        .swz-modal {
            background: #fff;
            max-width: 680px;
            width: 100%;
            position: relative;
            transform: translateY(20px);
            transition: transform .35s;
            max-height: 90vh;
            overflow-y: auto;
        }

        .swz-modal-overlay.open .swz-modal {
            transform: none;
        }

        .swz-modal-head {
            padding: 24px 28px;
            border-bottom: 1px solid var(--swz-border);
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 12px;
            position: sticky;
            top: 0;
            background: #fff;
            z-index: 2;
        }

        .swz-modal-close {
            background: none;
            border: none;
            cursor: pointer;
            color: var(--swz-gray);
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: background .2s;
            flex-shrink: 0;
        }

        .swz-modal-close:hover {
            background: #f3f3f3;
        }

        .swz-modal-title {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 20px;
            font-style: italic;
        }

        .swz-modal-sub {
            font-size: 12px;
            font-weight: 300;
            color: var(--swz-gray);
            margin-top: 2px;
        }

        .swz-modal-body {
            padding: 24px 28px;
        }

        .swz-modal-section {
            margin-bottom: 24px;
        }

        .swz-modal-section-title {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: var(--swz-gray);
            margin-bottom: 14px;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--swz-border);
        }

        .swz-detail-table {
            width: 100%;
        }

        .swz-detail-table tr td {
            padding: 10px 0;
            font-size: 13px;
            border-bottom: 1px solid #f3f4f6;
        }

        .swz-detail-table tr:last-child td {
            border-bottom: none;
        }

        .swz-detail-table td:first-child {
            font-weight: 600;
            color: var(--swz-gray);
            width: 40%;
        }

        .swz-detail-table td:last-child {
            font-weight: 400;
        }

        .swz-detail-totals {
            background: var(--swz-off);
            padding: 16px;
        }

        .swz-detail-total-row {
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            padding: 6px 0;
        }

        .swz-detail-total-row.grand {
            font-family: 'Cormorant Garamond', serif;
            font-size: 22px;
            font-weight: 700;
            padding-top: 12px;
            margin-top: 6px;
            border-top: 1px solid var(--swz-border);
        }

        .swz-detail-total-row.grand td {
            font-weight: 700;
        }

        /* EMPTY STATE */
        .swz-empty-state {
            text-align: center;
            padding: 80px 24px;
            background: #fff;
            border: 1px solid var(--swz-border);
        }

        .swz-empty-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 1.5px solid var(--swz-border);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
        }

        .swz-empty-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 36px;
            font-style: italic;
            margin-bottom: 10px;
        }

        .swz-empty-sub {
            font-size: 14px;
            font-weight: 300;
            color: var(--swz-gray);
            margin-bottom: 28px;
            line-height: 1.7;
        }

        /* STATS STRIP */
        .swz-orders-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1px;
            background: var(--swz-border);
            margin-bottom: 24px;
        }

        @media (min-width: 640px) {
            .swz-orders-stats {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .swz-orders-stat {
            background: #fff;
            padding: 16px;
            text-align: center;
        }

        .swz-orders-stat-num {
            font-family: 'Cormorant Garamond', serif;
            font-size: 32px;
            font-weight: 700;
            line-height: 1;
            font-style: italic;
        }

        .swz-orders-stat-label {
            font-size: 9px;
            font-weight: 700;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--swz-gray);
            margin-top: 4px;
        }

        /* MOBILE BOTTOM NAV */
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

        .swz-bnav-icon-bg {
            background: var(--swz-black);
            border-radius: 50%;
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 14px rgba(0, 0, 0, .25);
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
            right: 12px;
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
        }

        /* HAMBURGER */
        .swz-hamburger {
            display: flex;
        }

        @media (min-width: 1280px) {
            .swz-hamburger {
                display: none;
            }
        }

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
        }

        .swz-mobile-nav {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .swz-mobile-nav-link {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 38px;
            color: var(--swz-black);
            text-decoration: none;
            line-height: 1.1;
        }

        .swz-mobile-nav-link--sale {
            color: var(--swz-red);
        }

        /* TOAST */
        .swz-toast {
            position: fixed;
            bottom: 90px;
            left: 50%;
            transform: translateX(-50%) translateY(20px);
            background: var(--swz-black);
            color: #fff;
            padding: 14px 28px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            z-index: 99999;
            opacity: 0;
            pointer-events: none;
            transition: all .35s;
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .swz-toast.show {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }

        @keyframes swzFadeUp {
            from {
                opacity: 0;
                transform: translateY(12px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #333;
        }
    </style>
</head>

<body>

    <!-- ANNOUNCE BAR -->
    <div class="swz-announce-bar">
        <div class="swz-marquee-track">
            <span class="swz-marquee-item">Free Shipping on Orders Over $150</span><span
                class="swz-marquee-sep">✦</span>
            <span class="swz-marquee-item">Winter Collection 2026 — Out Now</span><span class="swz-marquee-sep">✦</span>
            <span class="swz-marquee-item">Use Code SWIZER15 for 15% Off</span><span class="swz-marquee-sep">✦</span>
            <span class="swz-marquee-item">Free Returns Within 30 Days</span><span class="swz-marquee-sep">✦</span>
            <span class="swz-marquee-item">Free Shipping on Orders Over $150</span><span
                class="swz-marquee-sep">✦</span>
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
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>
                <button class="swz-icon-btn" title="Cart">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <span class="swz-cart-badge">2</span>
                </button>
                <button class="swz-icon-btn swz-hamburger" id="swzMobileMenuBtn">
                    <svg width="21" height="21" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- MOBILE MENU -->
    <div class="swz-mobile-menu" id="swzMobileMenu">
        <button class="swz-mobile-close" id="swzMobileCloseBtn">
            <svg width="23" height="23" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                <path d="M18 6L6 18M6 6l12 12" />
            </svg>
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
                <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <a href="account.html">My Account</a>
                <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span>My Orders</span>
            </nav>
        </div>
    </div>

    <!-- PAGE HERO -->
    <div class="swz-page-hero">
        <span class="swz-page-hero-eyebrow">Order History</span>
        <h1 class="swz-page-hero-title">My Orders</h1>
    </div>

    <!-- MAIN -->
    <div class="swz-orders-main">

        <!-- STATS STRIP -->
        <div class="swz-orders-stats">
            <div class="swz-orders-stat">
                <div class="swz-orders-stat-num">12</div>
                <div class="swz-orders-stat-label">Total Orders</div>
            </div>
            <div class="swz-orders-stat">
                <div class="swz-orders-stat-num" style="color:var(--swz-accent)">$1,847</div>
                <div class="swz-orders-stat-label">Total Spent</div>
            </div>
            <div class="swz-orders-stat">
                <div class="swz-orders-stat-num" style="color:var(--swz-green)">1</div>
                <div class="swz-orders-stat-label">In Transit</div>
            </div>
            <div class="swz-orders-stat">
                <div class="swz-orders-stat-num" style="color:var(--swz-red)">0</div>
                <div class="swz-orders-stat-label">Returns Open</div>
            </div>
        </div>

        <!-- TOOLBAR -->
        <div class="swz-ord-toolbar">
            <div class="swz-filter-tabs">
                <button class="swz-filter-tab active" onclick="swzFilterOrders('all', this)">All Orders</button>
                <button class="swz-filter-tab" onclick="swzFilterOrders('delivered', this)">Delivered</button>
                <button class="swz-filter-tab" onclick="swzFilterOrders('shipped', this)">In Transit</button>
                <button class="swz-filter-tab" onclick="swzFilterOrders('processing', this)">Processing</button>
                <button class="swz-filter-tab" onclick="swzFilterOrders('returned', this)">Returned</button>
            </div>
            <div class="swz-search-wrap">
                <input type="text" class="swz-search-input" placeholder="Search orders…"
                    oninput="swzSearchOrders(this.value)">
                <svg class="swz-search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        <!-- HEADER ROW -->
        <div class="swz-ord-header">
            <div class="swz-ord-count"><strong id="swzOrdCountNum">12</strong> orders found</div>
            <div style="display:flex;align-items:center;gap:8px">
                <span
                    style="font-size:11px;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--swz-gray)">Sort:</span>
                <select
                    style="border:1.5px solid var(--swz-border);padding:8px 30px 8px 12px;font-family:'Manrope',sans-serif;font-size:12px;font-weight:600;outline:none;background:#fff;cursor:pointer;appearance:none;background-image:url(\"
                    data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none'
                    stroke='%23767676' stroke-width='2' viewBox='0 0 24 24' %3E%3Cpath d='M6 9l6 6 6-6'
                    /%3E%3C/svg%3E\");background-repeat:no-repeat;background-position:right 8px center">
                    <option>Newest First</option>
                    <option>Oldest First</option>
                    <option>Highest Value</option>
                    <option>Lowest Value</option>
                </select>
            </div>
        </div>

        <!-- ORDERS LIST -->
        <div class="swz-orders-list" id="swzOrdersList"></div>

        <!-- EMPTY STATE -->
        <div class="swz-empty-state" id="swzEmptyState" style="display:none">
            <div class="swz-empty-icon">
                <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.4" viewBox="0 0 24 24">
                    <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </div>
            <h3 class="swz-empty-title">No orders found</h3>
            <p class="swz-empty-sub">Try adjusting your filter or search term.</p>
            <button class="swz-btn-black"
                onclick="swzFilterOrders('all', document.querySelector('.swz-filter-tab'))">View All Orders</button>
        </div>

    </div>

    <!-- ORDER DETAIL MODAL -->
    <div class="swz-modal-overlay" id="swzOrderModal">
        <div class="swz-modal">
            <div class="swz-modal-head">
                <div>
                    <div class="swz-modal-title" id="swzModalOrderNum">Order Detail</div>
                    <div class="swz-modal-sub" id="swzModalOrderDate"></div>
                </div>
                <button class="swz-modal-close"
                    onclick="document.getElementById('swzOrderModal').classList.remove('open')">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M18 6L6 18M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="swz-modal-body" id="swzModalBody">
                <!-- Filled by JS -->
            </div>
        </div>
    </div>

    <!-- MOBILE BOTTOM NAV -->
    <nav class="swz-bottom-nav">
        <a href="index.html" class="swz-bnav-item">
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
        <a href="#" class="swz-bnav-item">
            <div class="swz-bnav-cart-wrap">
                <div class="swz-bnav-icon-bg">
                    <svg width="20" height="20" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24">
                        <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
                <span class="swz-bnav-badge">2</span>
            </div>
        </a>
        <a href="wishlist.html" class="swz-bnav-item">
            <svg class="swz-bnav-icon" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
            <span class="swz-bnav-label">Wishlist</span>
        </a>
        <a href="account.html" class="swz-bnav-item swz-bnav-active">
            <svg class="swz-bnav-icon" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                <circle cx="12" cy="7" r="4" />
            </svg>
            <span class="swz-bnav-label">Account</span>
        </a>
    </nav>

    <!-- TOAST -->
    <div class="swz-toast" id="swzToast">
        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
        <span id="swzToastMsg">Done!</span>
    </div>

    <script>
        const SWZ_ORDERS = [
            {
                id: 'SWZ-2026-00847', date: 'January 18, 2026', status: 'delivered',
                trackingNum: '1Z999AA10123456784', carrier: 'UPS',
                items: [
                    { cat: 'Outerwear', name: 'Premium Parka', variant: 'Size L · Deep Black', price: 129, qty: 1, img: 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=200' },
                    { cat: 'Essentials', name: 'Minimalist Hoodie', variant: 'Size M · Carbon Grey', price: 79, qty: 1, img: 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?q=80&w=200' }
                ],
                subtotal: 208, shipping: 0, tax: 16.64, total: 224.64,
                shippingAddr: 'Sarah Mitchell, 123 Oak Street Apt 4B, New York, NY 10001',
                trackingSteps: ['ordered', 'confirmed', 'shipped', 'delivered'],
                currentStep: 3,
                canReturn: true, canReorder: true
            },
            {
                id: 'SWZ-2026-00791', date: 'January 9, 2026', status: 'shipped',
                trackingNum: '9400111899223397522456', carrier: 'USPS',
                items: [
                    { cat: 'Knitwear', name: 'Cashmere Crewneck', variant: 'Size M · Ivory', price: 165, qty: 1, img: 'https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?q=80&w=200' }
                ],
                subtotal: 165, shipping: 0, tax: 13.2, total: 178.2,
                shippingAddr: 'Sarah Mitchell, 123 Oak Street Apt 4B, New York, NY 10001',
                trackingSteps: ['ordered', 'confirmed', 'shipped', 'delivered'],
                currentStep: 2,
                canReturn: false, canReorder: false
            },
            {
                id: 'SWZ-2025-09922', date: 'December 28, 2025', status: 'delivered',
                trackingNum: 'JD000060009310006011', carrier: 'DHL',
                items: [
                    { cat: 'Outerwear', name: 'Classic Trench Coat', variant: 'Size S · Camel', price: 245, qty: 1, img: 'https://images.unsplash.com/photo-1548126032-079a0fb0099d?q=80&w=200' }
                ],
                subtotal: 245, shipping: 0, tax: 19.6, total: 264.6,
                shippingAddr: 'Sarah Mitchell, 123 Oak Street Apt 4B, New York, NY 10001',
                trackingSteps: ['ordered', 'confirmed', 'shipped', 'delivered'],
                currentStep: 3,
                canReturn: false, canReorder: true
            },
            {
                id: 'SWZ-2025-09211', date: 'December 10, 2025', status: 'delivered',
                trackingNum: '1Z999AA10123456111', carrier: 'UPS',
                items: [
                    { cat: 'Denim', name: 'Heritage Denim', variant: 'Size 32 · Raw Indigo', price: 135, qty: 2, img: 'https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=200' },
                    { cat: 'Suiting', name: 'Tailored Blazer', variant: 'Size M · Midnight Navy', price: 210, qty: 1, img: 'https://images.unsplash.com/photo-1571945153237-4929e783af4a?q=80&w=200' }
                ],
                subtotal: 480, shipping: 0, tax: 38.4, total: 518.4,
                shippingAddr: 'Sarah Mitchell, 123 Oak Street Apt 4B, New York, NY 10001',
                trackingSteps: ['ordered', 'confirmed', 'shipped', 'delivered'],
                currentStep: 3,
                canReturn: false, canReorder: true
            },
            {
                id: 'SWZ-2025-08033', date: 'November 5, 2025', status: 'returned',
                trackingNum: '1Z999AA10123400001', carrier: 'UPS',
                items: [
                    { cat: 'Outerwear', name: 'Quilted Vest', variant: 'Size L · Olive', price: 118, qty: 1, img: 'https://images.unsplash.com/photo-1544022613-e87ca75a784a?q=80&w=200' }
                ],
                subtotal: 118, shipping: 0, tax: 9.44, total: 127.44,
                shippingAddr: 'Sarah Mitchell, 123 Oak Street Apt 4B, New York, NY 10001',
                trackingSteps: ['ordered', 'confirmed', 'shipped', 'delivered'],
                currentStep: 3,
                canReturn: false, canReorder: true
            },
            {
                id: 'SWZ-2025-07144', date: 'October 20, 2025', status: 'delivered',
                trackingNum: '1Z999AA10123400099', carrier: 'FedEx',
                items: [
                    { cat: 'Essentials', name: 'Cargo Trousers', variant: 'Size 30 · Khaki', price: 95, qty: 1, img: 'https://images.unsplash.com/photo-1509631179647-0177331693ae?q=80&w=200' },
                    { cat: 'Knitwear', name: 'Cashmere Scarf', variant: 'One Size · Camel', price: 95, qty: 1, img: 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?q=80&w=200' }
                ],
                subtotal: 190, shipping: 9.99, tax: 15.2, total: 215.19,
                shippingAddr: 'Sarah Mitchell, 45 Broadway Avenue, Brooklyn, NY 11201',
                trackingSteps: ['ordered', 'confirmed', 'shipped', 'delivered'],
                currentStep: 3,
                canReturn: false, canReorder: true
            },
        ];

        const STATUS_CONFIG = {
            delivered: { label: '✓ Delivered', class: 'swz-status-badge--delivered' },
            shipped: { label: '↗ In Transit', class: 'swz-status-badge--shipped' },
            processing: { label: '⟳ Processing', class: 'swz-status-badge--processing' },
            cancelled: { label: '✕ Cancelled', class: 'swz-status-badge--cancelled' },
            returned: { label: '↩ Returned', class: 'swz-status-badge--returned' },
        };

        const TRACK_STEP_LABELS = ['Order Placed', 'Confirmed', 'Shipped', 'Delivered'];

        let swzCurrentFilter = 'all';
        let swzSearchQuery = '';

        function swzGetFilteredOrders() {
            let orders = SWZ_ORDERS;
            if (swzCurrentFilter !== 'all') orders = orders.filter(o => o.status === swzCurrentFilter);
            if (swzSearchQuery) {
                const q = swzSearchQuery.toLowerCase();
                orders = orders.filter(o => o.id.toLowerCase().includes(q) || o.items.some(i => i.name.toLowerCase().includes(q)));
            }
            return orders;
        }

        function swzRenderOrders() {
            const list = document.getElementById('swzOrdersList');
            const empty = document.getElementById('swzEmptyState');
            const countEl = document.getElementById('swzOrdCountNum');
            const orders = swzGetFilteredOrders();

            countEl.textContent = orders.length;

            if (orders.length === 0) {
                list.innerHTML = '';
                empty.style.display = 'block';
                return;
            }
            empty.style.display = 'none';

            list.innerHTML = orders.map((order, idx) => {
                const status = STATUS_CONFIG[order.status] || STATUS_CONFIG.delivered;
                const totalItems = order.items.reduce((s, i) => s + i.qty, 0);
                const showItems = order.items.slice(0, 2);
                const extraItems = order.items.length > 2 ? order.items.length - 2 : 0;

                const trackingHtml = (order.status === 'shipped' || order.status === 'delivered') ? `
        <div class="swz-tracking-progress">
            <div class="swz-tracking-label">Tracking Progress</div>
            <div class="swz-tracking-steps">
                ${TRACK_STEP_LABELS.map((label, i) => {
                    const cls = i < order.currentStep ? 'done' : i === order.currentStep ? 'current' : '';
                    const icon = i < order.currentStep ? `<svg width="10" height="10" fill="none" stroke="white" stroke-width="3" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>` : `<span style="width:8px;height:8px;border-radius:50%;background:${cls === 'current' ? '#fff' : 'transparent'};display:block"></span>`;
                    return `<div class="swz-tracking-step ${cls}"><div class="swz-tracking-dot">${icon}</div><div class="swz-tracking-step-label">${label}</div></div>`;
                }).join('')}
            </div>
        </div>` : '';

                const actionBtns = `<div class="swz-order-actions">
            <button class="swz-btn-black swz-btn-sm" onclick="swzOpenOrderDetail(${idx})">View Details</button>
            ${order.status === 'shipped' ? `<button class="swz-btn-outline swz-btn-sm" onclick="swzShowToast('Tracking: ${order.trackingNum}')">Track Package</button>` : ''}
            ${order.canReturn ? `<button class="swz-btn-outline swz-btn-sm" onclick="swzShowToast('Return request submitted!')">Request Return</button>` : ''}
            ${order.canReorder ? `<button class="swz-btn-outline swz-btn-sm" onclick="swzShowToast('Items added to your bag!')">Reorder</button>` : ''}
        </div>`;

                return `<div class="swz-order-card" style="animation: swzFadeUp .4s ease ${idx * .07}s both">
            <div class="swz-order-card-head">
                <div class="swz-order-meta-grid">
                    <div class="swz-order-meta-item">
                        <div class="swz-order-meta-label">Order</div>
                        <div class="swz-order-meta-val">#${order.id}</div>
                    </div>
                    <div class="swz-order-meta-item">
                        <div class="swz-order-meta-label">Placed</div>
                        <div class="swz-order-meta-val">${order.date}</div>
                    </div>
                    <div class="swz-order-meta-item">
                        <div class="swz-order-meta-label">Items</div>
                        <div class="swz-order-meta-val">${totalItems} item${totalItems !== 1 ? 's' : ''}</div>
                    </div>
                    <div class="swz-order-meta-item">
                        <div class="swz-order-meta-label">Carrier</div>
                        <div class="swz-order-meta-val">${order.carrier}</div>
                    </div>
                </div>
                <div><span class="swz-status-badge ${status.class}">${status.label}</span></div>
            </div>
            <div class="swz-order-card-body">
                ${trackingHtml}
                <div class="swz-order-items-list">
                    ${showItems.map(item => `
                    <div class="swz-order-item">
                        <img src="${item.img}" class="swz-order-item-img" alt="${item.name}">
                        <div class="swz-order-item-info">
                            <div class="swz-order-item-cat">${item.cat}</div>
                            <div class="swz-order-item-name">${item.name}</div>
                            <div class="swz-order-item-variant">${item.variant}</div>
                            <div class="swz-order-item-qty">Qty: ${item.qty}</div>
                        </div>
                        <div class="swz-order-item-price">$${(item.price * item.qty).toFixed(2)}</div>
                    </div>`).join('')}
                </div>
                ${extraItems > 0 ? `<button class="swz-more-items-btn" onclick="swzOpenOrderDetail(${idx})">+ ${extraItems} more item${extraItems > 1 ? 's' : ''} <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg></button>` : ''}
            </div>
            <div class="swz-order-card-foot">
                <div class="swz-order-total-wrap">
                    <span class="swz-order-total-label">Order Total</span>
                    <span class="swz-order-total-val">$${order.total.toFixed(2)}</span>
                </div>
                ${actionBtns}
            </div>
        </div>`;
            }).join('');
        }

        function swzOpenOrderDetail(idx) {
            const orders = swzGetFilteredOrders();
            const order = orders[idx] || SWZ_ORDERS[idx];
            if (!order) return;

            document.getElementById('swzModalOrderNum').textContent = '#' + order.id;
            document.getElementById('swzModalOrderDate').textContent = 'Placed on ' + order.date;

            const status = STATUS_CONFIG[order.status];
            document.getElementById('swzModalBody').innerHTML = `
        <div class="swz-modal-section">
            <div class="swz-modal-section-title">Order Status</div>
            <span class="swz-status-badge ${status.class}" style="margin-bottom:12px;display:inline-flex">${status.label}</span>
        </div>
        <div class="swz-modal-section">
            <div class="swz-modal-section-title">Items Ordered</div>
            <div class="swz-order-items-list">
                ${order.items.map(item => `
                <div class="swz-order-item">
                    <img src="${item.img}" class="swz-order-item-img" alt="${item.name}">
                    <div class="swz-order-item-info">
                        <div class="swz-order-item-cat">${item.cat}</div>
                        <div class="swz-order-item-name">${item.name}</div>
                        <div class="swz-order-item-variant">${item.variant}</div>
                        <div class="swz-order-item-qty">Qty: ${item.qty}</div>
                    </div>
                    <div class="swz-order-item-price">$${(item.price * item.qty).toFixed(2)}</div>
                </div>`).join('')}
            </div>
        </div>
        <div class="swz-modal-section">
            <div class="swz-detail-totals">
                <div class="swz-detail-total-row"><span style="color:var(--swz-gray);font-size:12px;font-weight:600;letter-spacing:.08em;text-transform:uppercase">Subtotal</span><span>$${order.subtotal.toFixed(2)}</span></div>
                <div class="swz-detail-total-row"><span style="color:var(--swz-gray);font-size:12px;font-weight:600;letter-spacing:.08em;text-transform:uppercase">Shipping</span><span style="color:var(--swz-green);font-weight:700">${order.shipping === 0 ? 'FREE' : '$' + order.shipping.toFixed(2)}</span></div>
                <div class="swz-detail-total-row"><span style="color:var(--swz-gray);font-size:12px;font-weight:600;letter-spacing:.08em;text-transform:uppercase">Tax</span><span>$${order.tax.toFixed(2)}</span></div>
                <div class="swz-detail-total-row grand"><span style="font-family:'Playfair Display',serif;font-weight:700;font-size:18px;font-style:italic">Total</span><span style="font-family:'Cormorant Garamond',serif;font-weight:700;font-size:28px">$${order.total.toFixed(2)}</span></div>
            </div>
        </div>
        <div class="swz-modal-section">
            <div class="swz-modal-section-title">Delivery Information</div>
            <table class="swz-detail-table">
                <tr><td>Shipping To</td><td>${order.shippingAddr}</td></tr>
                <tr><td>Carrier</td><td>${order.carrier}</td></tr>
                <tr><td>Tracking #</td><td>${order.trackingNum}</td></tr>
            </table>
        </div>
        <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:8px">
            ${order.canReturn ? `<button class="swz-btn-outline" onclick="swzShowToast('Return request submitted!');document.getElementById('swzOrderModal').classList.remove('open')">Request Return</button>` : ''}
            ${order.canReorder ? `<button class="swz-btn-black" onclick="swzShowToast('Items added to your bag!');document.getElementById('swzOrderModal').classList.remove('open')">Reorder All Items</button>` : ''}
            <button class="swz-btn-outline" onclick="swzShowToast('Invoice downloaded!')">Download Invoice</button>
        </div>
    `;

            document.getElementById('swzOrderModal').classList.add('open');
        }

        function swzFilterOrders(filter, btn) {
            swzCurrentFilter = filter;
            document.querySelectorAll('.swz-filter-tab').forEach(t => t.classList.remove('active'));
            if (btn) btn.classList.add('active');
            swzRenderOrders();
        }

        function swzSearchOrders(q) {
            swzSearchQuery = q;
            swzRenderOrders();
        }

        document.getElementById('swzMobileMenuBtn').onclick = () => { document.getElementById('swzMobileMenu').classList.add('swz-open'); document.body.style.overflow = 'hidden'; };
        document.getElementById('swzMobileCloseBtn').onclick = () => { document.getElementById('swzMobileMenu').classList.remove('swz-open'); document.body.style.overflow = ''; };
        document.getElementById('swzOrderModal').addEventListener('click', function (e) { if (e.target === this) this.classList.remove('open'); });
        document.addEventListener('keydown', e => { if (e.key === 'Escape') document.getElementById('swzOrderModal').classList.remove('open'); });

        let swzToastTimer;
        function swzShowToast(msg) {
            const toast = document.getElementById('swzToast');
            document.getElementById('swzToastMsg').textContent = msg;
            toast.classList.add('show');
            clearTimeout(swzToastTimer);
            swzToastTimer = setTimeout(() => toast.classList.remove('show'), 2800);
        }

        swzRenderOrders();
    </script>
</body>

</html>