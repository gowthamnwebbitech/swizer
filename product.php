<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products – Swizer Premium Apparel</title>
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
            background: #fff;
            color: var(--swz-black);
            overflow-x: hidden;
        }

        @media (max-width: 767px) {
            body {
                padding-bottom: 68px;
            }
        }

        /* ── ANNOUNCE ── */
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

        /* ── HEADER ── */
        .swz-header {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(255, 255, 255, .9);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(229, 231, 235, .6);
        }

        .swz-header-inner {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 24px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        @media (min-width:1024px) {
            .swz-header-inner {
                padding: 0 40px;
                height: 68px;
            }
        }

        .swz-logo {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 22px;
            letter-spacing: -.01em;
            color: var(--swz-black);
            text-decoration: none;
            font-style: italic;
        }

        .swz-desk-nav {
            display: none;
            align-items: center;
            gap: 28px;
        }

        @media (min-width:1024px) {
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

        .swz-nav-link--active {
            color: var(--swz-black);
        }

        .swz-nav-link--active::after {
            width: 100%;
        }

        .swz-nav-link--sale {
            color: var(--swz-red) !important;
        }

        .swz-header-right {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .swz-search-wrap {
            position: relative;
            display: none;
        }

        @media (min-width:1024px) {
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
        }

        .swz-search-input:focus {
            width: 250px;
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

        /* ── PAGE HERO / BREADCRUMB ── */
        .swz-page-hero {
            background: var(--swz-black);
            padding: 56px 0 52px;
            position: relative;
            overflow: hidden;
        }

        .swz-page-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('https://images.unsplash.com/photo-1490481651871-ab68de25d43d?q=40&w=1200') center/cover;
            opacity: .08;
        }

        .swz-page-hero-inner {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 24px;
            position: relative;
            z-index: 1;
        }

        @media (min-width:1024px) {
            .swz-page-hero-inner {
                padding: 0 40px;
            }
        }

        .swz-breadcrumb {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .4);
            margin-bottom: 20px;
        }

        .swz-breadcrumb a {
            color: rgba(255, 255, 255, .4);
            text-decoration: none;
            transition: color .2s;
        }

        .swz-breadcrumb a:hover {
            color: rgba(255, 255, 255, .8);
        }

        .swz-breadcrumb span {
            color: rgba(255, 255, 255, .8);
        }

        .swz-page-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 800;
            font-style: italic;
            font-size: clamp(38px, 6vw, 72px);
            line-height: 1;
            color: #fff;
            letter-spacing: -.01em;
            margin-bottom: 14px;
        }

        .swz-page-subtitle {
            font-size: 14px;
            font-weight: 300;
            color: rgba(255, 255, 255, .5);
            letter-spacing: .04em;
        }

        /* ── TOOLBAR ── */
        .swz-toolbar {
            position: sticky;
            top: 68px;
            z-index: 40;
            overflow-x: hidden;
            background: #fff;
            border-bottom: 1px solid var(--swz-border);
        }

        .swz-toolbar-inner {
            overflow-x: auto;
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* IE/Edge */
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 24px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .swz-toolbar-inner::-webkit-scrollbar {
            display: none;
            /* Chrome/Safari */
        }

        @media (min-width:1024px) {
            .swz-toolbar-inner {
                padding: 0 40px;
            }
        }

        .swz-toolbar-left {
            display: flex;
            align-items: center;
            gap: 0;
            overflow-x: auto;
        }

        .swz-toolbar-left::-webkit-scrollbar {
            display: none;
        }

        .swz-cat-chip {
            white-space: nowrap;
            padding: 6px 16px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            cursor: pointer;
            border: none;
            background: none;
            color: var(--swz-gray);
            transition: all .2s;
            border-bottom: 2px solid transparent;
            font-family: 'Manrope', sans-serif;
        }

        .swz-cat-chip:hover {
            color: var(--swz-black);
        }

        .swz-cat-chip.active {
            color: var(--swz-black);
            border-bottom-color: var(--swz-black);
        }

        .swz-toolbar-right {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-shrink: 0;
        }

        .swz-sort-select {
            background: #f4f4f4;
            border: 1px solid transparent;
            padding: 8px 12px;
            font-family: 'Manrope', sans-serif;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .1em;
            text-transform: uppercase;
            outline: none;
            cursor: pointer;
            transition: border-color .2s;
        }

        .swz-sort-select:focus {
            border-color: #ccc;
        }

        .swz-view-btns {
            display: flex;
            gap: 4px;
        }

        .swz-view-btn {
            width: 34px;
            height: 34px;
            border: 1.5px solid var(--swz-border);
            background: #fff;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all .2s;
            color: var(--swz-gray);
        }

        .swz-view-btn.active {
            background: var(--swz-black);
            color: #fff;
            border-color: var(--swz-black);
        }

        .swz-filter-btn {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 8px 14px;
            border: 1.5px solid var(--swz-border);
            background: #fff;
            cursor: pointer;
            font-family: 'Manrope', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            transition: all .2s;
            color: var(--swz-black);
        }

        .swz-filter-btn:hover {
            background: var(--swz-black);
            color: #fff;
            border-color: var(--swz-black);
        }

        .swz-result-count {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .08em;
            color: var(--swz-gray);
            white-space: nowrap;
            display: none;
        }

        @media (min-width:640px) {
            .swz-result-count {
                display: block;
            }
        }

        /* ── LAYOUT ── */
        .swz-page-body {
            max-width: 1400px;
            margin: 0 auto;
            padding: 32px 24px 80px;
            display: flex;
            gap: 32px;
            align-items: flex-start;
        }

        @media (min-width:1024px) {
            .swz-page-body {
                padding: 40px 40px 80px;
            }
        }

        /* ── FILTER SIDEBAR ── */
        .swz-filter-sidebar {
            width: 240px;
            flex-shrink: 0;
            position: sticky;
            top: 130px;
            display: none;
        }

        @media (min-width:1280px) {
            .swz-filter-sidebar {
                display: block;
            }
        }

        .swz-filter-section {
            border-bottom: 1px solid var(--swz-border);
            padding-bottom: 24px;
            margin-bottom: 24px;
        }

        .swz-filter-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .swz-filter-title {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
        }

        .swz-filter-title svg {
            transition: transform .25s;
        }

        .swz-filter-title.collapsed svg {
            transform: rotate(-90deg);
        }

        .swz-filter-options {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .swz-filter-option {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 400;
            color: var(--swz-gray);
            transition: color .2s;
        }

        .swz-filter-option:hover {
            color: var(--swz-black);
        }

        .swz-filter-check {
            width: 16px;
            height: 16px;
            border: 1.5px solid #ccc;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all .2s;
        }

        .swz-filter-option.checked .swz-filter-check {
            background: var(--swz-black);
            border-color: var(--swz-black);
        }

        .swz-filter-option.checked {
            color: var(--swz-black);
            font-weight: 600;
        }

        .swz-filter-option-count {
            margin-left: auto;
            font-size: 11px;
            color: var(--swz-lgray);
        }

        /* Color swatches */
        .swz-color-options {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .swz-color-swatch {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all .2s;
        }

        .swz-color-swatch:hover,
        .swz-color-swatch.active {
            border-color: var(--swz-black);
            transform: scale(1.1);
        }

        /* Price Range */
        .swz-price-range-wrap {
            padding: 0 4px;
        }

        .swz-price-range-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 13px;
        }

        .swz-price-slider {
            -webkit-appearance: none;
            appearance: none;
            width: 100%;
            height: 3px;
            background: var(--swz-black);
            outline: none;
            border-radius: 2px;
            cursor: pointer;
        }

        .swz-price-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--swz-black);
            cursor: pointer;
            border: 2px solid #fff;
            box-shadow: 0 0 0 2px var(--swz-black);
        }

        /* Active Filters */
        .swz-active-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 24px;
        }

        .swz-active-tag {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 4px 10px;
            background: var(--swz-black);
            color: #fff;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            cursor: pointer;
            transition: background .2s;
        }

        .swz-active-tag:hover {
            background: #333;
        }

        /* ── PRODUCTS GRID ── */
        .swz-products-area {
            flex: 1;
            min-width: 0;
        }

        .swz-grid {
            display: grid;
            gap: 24px;
            grid-template-columns: repeat(2, 1fr);
            transition: all .3s;
        }

        @media (min-width:640px) {
            .swz-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width:900px) {
            .swz-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (min-width:1280px) {
            .swz-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (min-width:1400px) {
            .swz-grid.swz-grid-4 {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .swz-grid.swz-grid-list {
            grid-template-columns: 1fr !important;
            gap: 16px;
        }

        /* Card */
        .swz-prod-card {
            position: relative;
            background: #fff;
            border: 1px solid transparent;
            transition: border-color .25s, box-shadow .25s;
            cursor: pointer;
        }

        .swz-prod-card:hover {
            border-color: var(--swz-black);
            box-shadow: 0 8px 32px rgba(0, 0, 0, .08);
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
            transform: scale(1.07);
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

        .swz-card-actions {
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

        .swz-prod-card:hover .swz-card-actions {
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

        .swz-card-icon-btn.wished svg {
            fill: var(--swz-red);
            stroke: var(--swz-red);
        }

        .swz-quick-add {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, .96);
            backdrop-filter: blur(8px);
            padding: 14px;
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

        .swz-size-row {
            display: flex;
            justify-content: center;
            gap: 6px;
            flex-wrap: wrap;
        }

        .swz-size-btn {
            height: 32px;
            min-width: 32px;
            padding: 0 6px;
            border: 1.5px solid #ddd;
            background: #fff;
            font-family: 'Manrope', sans-serif;
            font-size: 10px;
            font-weight: 700;
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

        .swz-size-btn.oos {
            opacity: .35;
            cursor: not-allowed;
            text-decoration: line-through;
        }

        .swz-add-btn {
            width: 100%;
            margin-top: 8px;
            background: var(--swz-black);
            color: #fff;
            border: none;
            font-family: 'Manrope', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
            padding: 10px;
            cursor: pointer;
            transition: background .2s;
        }

        .swz-add-btn:hover {
            background: #333;
        }

        .swz-card-info {
            padding: 14px 10px 10px;
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
            margin-bottom: 6px;
        }

        .swz-card-rating {
            display: flex;
            align-items: center;
            gap: 4px;
            margin-bottom: 6px;
        }

        .swz-stars {
            color: var(--swz-accent);
            font-size: 11px;
        }

        .swz-rating-count {
            font-size: 11px;
            color: var(--swz-lgray);
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
        }

        /* List view card */
        .swz-grid.swz-grid-list .swz-prod-card {
            display: flex;
            align-items: stretch;
        }

        .swz-grid.swz-grid-list .swz-card-img-wrap {
            width: 180px;
            flex-shrink: 0;
            aspect-ratio: unset;
            height: 220px;
        }

        @media (min-width:640px) {
            .swz-grid.swz-grid-list .swz-card-img-wrap {
                width: 220px;
                height: 260px;
            }
        }

        .swz-grid.swz-grid-list .swz-card-actions {
            transform: translateX(0);
        }

        .swz-grid.swz-grid-list .swz-card-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px 24px;
        }

        .swz-grid.swz-grid-list .swz-card-name {
            font-size: 16px;
            margin-bottom: 8px;
        }

        .swz-grid.swz-grid-list .swz-card-desc {
            font-size: 13px;
            font-weight: 300;
            color: var(--swz-gray);
            line-height: 1.6;
            margin-bottom: 14px;
            max-width: 460px;
            display: block;
        }

        .swz-grid.swz-grid-list .swz-quick-add {
            position: static;
            transform: none;
            background: transparent;
            backdrop-filter: none;
            padding: 0;
            margin-top: 14px;
        }

        .swz-grid.swz-grid-list .swz-size-row {
            justify-content: flex-start;
        }

        .swz-grid.swz-grid-list .swz-add-btn {
            max-width: 220px;
            margin-top: 10px;
        }

        /* Hide quick-add panel in grid mode via card-desc */
        .swz-card-desc {
            display: none;
        }

        /* ── NO RESULTS ── */
        .swz-no-results {
            text-align: center;
            padding: 80px 20px;
            grid-column: 1/-1;
        }

        .swz-no-results h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 32px;
            font-weight: 700;
            font-style: italic;
            margin-bottom: 12px;
        }

        .swz-no-results p {
            color: var(--swz-gray);
            font-weight: 300;
            font-size: 14px;
        }

        /* ── LOAD MORE ── */
        .swz-load-more-wrap {
            text-align: center;
            margin-top: 56px;
        }

        .swz-load-more-btn {
            padding: 15px 56px;
            border: 1.5px solid var(--swz-black);
            background: #fff;
            font-family: 'Manrope', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .2em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all .25s;
        }

        .swz-load-more-btn:hover {
            background: var(--swz-black);
            color: #fff;
        }

        /* ── MOBILE FILTER PANEL ── */
        .swz-mobile-filter-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .5);
            opacity: 0;
            pointer-events: none;
            transition: opacity .3s;
            z-index: 9990;
        }

        .swz-mobile-filter-overlay.open {
            opacity: 1;
            pointer-events: auto;
        }

        .swz-mobile-filter-panel {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #fff;
            z-index: 9991;
            transform: translateY(100%);
            transition: transform .35s ease;
            max-height: 80vh;
            overflow-y: auto;
            padding: 28px 24px 32px;
            border-radius: 16px 16px 0 0;
        }

        .swz-mobile-filter-panel.open {
            transform: none;
        }

        .swz-mobile-filter-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 28px;
        }

        .swz-mobile-filter-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 22px;
            font-style: italic;
        }

        /* ── MOBILE BOTTOM NAV ── */
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

        @media (max-width:767px) {
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
        }

        .swz-bnav-item:hover,
        .swz-bnav-item.active {
            color: var(--swz-black);
        }

        .swz-bnav-label {
            font-size: 9px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        .swz-bnav-cart-wrap {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
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
            transition: transform .2s, box-shadow .2s;
        }

        .swz-bnav-item--cart:hover .swz-bnav-icon-bg {
            transform: translateY(-2px);
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
        }

        /* ── CART DRAWER ── */
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

        .swz-cart-overlay.open {
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

        @media (max-width:767px) {
            .swz-cart-drawer {
                width: 100vw;
            }
        }

        .swz-cart-drawer.open {
            transform: none;
        }

        .swz-cart-head {
            padding: 20px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #f0f0f0;
            flex-shrink: 0;
        }

        .swz-cart-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 20px;
            font-style: italic;
        }

        .swz-cart-count-badge {
            background: var(--swz-black);
            color: #fff;
            font-size: 10px;
            font-weight: 700;
            padding: 3px 12px;
            border-radius: 999px;
        }

        .swz-cart-close {
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

        .swz-cart-close:hover {
            background: #f3f3f3;
        }

        .swz-cart-progress-strip {
            padding: 14px 24px;
            background: #f8f8f6;
            border-bottom: 1px solid #f0f0f0;
            flex-shrink: 0;
        }

        .swz-prog-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .swz-prog-label {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--swz-gray);
        }

        .swz-prog-val {
            font-size: 11px;
            font-weight: 700;
        }

        .swz-prog-track {
            height: 3px;
            background: #ebebeb;
            border-radius: 2px;
            overflow: hidden;
        }

        .swz-prog-fill {
            height: 100%;
            background: var(--swz-black);
            border-radius: 2px;
            transition: width .4s;
        }

        .swz-prog-msg {
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

        .swz-cart-thumb {
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

        .swz-ci-cat {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: var(--swz-gray);
            margin-bottom: 3px;
        }

        .swz-ci-name {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .swz-ci-variant {
            font-size: 13px;
            font-weight: 300;
            color: var(--swz-gray);
            margin-bottom: 14px;
        }

        .swz-ci-btm {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .swz-qty-ctrl {
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

        .swz-ci-price {
            font-size: 15px;
            font-weight: 700;
        }

        .swz-ci-remove {
            background: none;
            border: none;
            cursor: pointer;
            color: #ccc;
            align-self: flex-start;
            margin-top: 2px;
            transition: color .2s;
        }

        .swz-ci-remove:hover {
            color: var(--swz-red);
        }

        .swz-cart-footer {
            flex-shrink: 0;
            border-top: 1px solid #f0f0f0;
        }

        .swz-cart-totals {
            padding: 20px 24px;
        }

        .swz-total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .swz-total-label {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--swz-gray);
        }

        .swz-total-val {
            font-size: 18px;
            font-weight: 700;
        }

        .swz-shipping-val {
            font-size: 13px;
            font-weight: 700;
            color: var(--swz-green);
        }

        .swz-grand-row {
            display: flex;
            justify-content: space-between;
            margin-top: 18px;
            padding-top: 18px;
            border-top: 1px solid #f0f0f0;
        }

        .swz-grand-label {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 18px;
            font-style: italic;
        }

        .swz-grand-val {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 24px;
        }

        .swz-cart-btns {
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

        /* Animate in cards */
        @keyframes swzFadeUp {
            from {
                opacity: 0;
                transform: translateY(18px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        .swz-prod-card {
            animation: swzFadeUp .45s ease both;
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

    <!-- ═══ ANNOUNCE ═══ -->
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

    <!-- ═══ HEADER ═══ -->
    <header class="swz-header">
        <div class="swz-header-inner">
            <div style="display:flex;align-items:center;gap:32px">
                <a href="index.php" class="swz-logo">Swizer</a>
                <nav class="swz-desk-nav">
                    <a href="#" class="swz-nav-link">Men</a>
                    <a href="#" class="swz-nav-link">Women</a>
                    <a href="#" class="swz-nav-link swz-nav-link--active">New Arrivals</a>
                    <a href="#" class="swz-nav-link">Accessories</a>
                    <a href="#" class="swz-nav-link swz-nav-link--sale">Sale</a>
                </nav>
            </div>
            <div class="swz-header-right">
                <div class="swz-search-wrap">
                    <input type="text" placeholder="Search products…" class="swz-search-input" id="swzSearchInput">
                    <svg class="swz-search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <button class="swz-icon-btn" title="Wishlist">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>
                <button class="swz-icon-btn" id="swzCartBtn">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <span class="swz-cart-badge" id="swzCartCount">0</span>
                </button>
            </div>
        </div>
    </header>

    <!-- ═══ PAGE HERO ═══ -->
    <div class="swz-page-hero">
        <div class="swz-page-hero-inner">
            <div class="swz-breadcrumb">
                <a href="#">Home</a>
                <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span>All Products</span>
            </div>
            <h1 class="swz-page-title">All Products</h1>
            <p class="swz-page-subtitle" id="swzHeroCount">120 styles · Winter 2026 Collection</p>
        </div>
    </div>

    <!-- ═══ TOOLBAR ═══ -->
    <div class="swz-toolbar">
        <div class="swz-toolbar-inner">
            <div class="swz-toolbar-left">
                <button class="swz-cat-chip active" data-cat="all">All</button>
                <button class="swz-cat-chip" data-cat="outerwear">Outerwear</button>
                <button class="swz-cat-chip" data-cat="knitwear">Knitwear</button>
                <button class="swz-cat-chip" data-cat="denim">Denim</button>
                <button class="swz-cat-chip" data-cat="essentials">Essentials</button>
                <button class="swz-cat-chip" data-cat="suiting">Suiting</button>
                <button class="swz-cat-chip" data-cat="luxury">Luxury</button>
                <button class="swz-cat-chip" data-cat="sale">Sale</button>
            </div>
            <div class="swz-toolbar-right">
                <span class="swz-result-count" id="swzResultCount">24 products</span>
                <select class="swz-sort-select" id="swzSortSelect">
                    <option value="featured">Featured</option>
                    <option value="newest">Newest</option>
                    <option value="price-asc">Price: Low–High</option>
                    <option value="price-desc">Price: High–Low</option>
                    <option value="rating">Top Rated</option>
                </select>
                <div class="swz-view-btns">
                    <button class="swz-view-btn active" id="swzGridBtn" title="Grid View">
                        <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M1 2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H2a1 1 0 01-1-1V2zm5 0a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H7a1 1 0 01-1-1V2zm5 0a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1h-2a1 1 0 01-1-1V2zM1 7a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H2a1 1 0 01-1-1V7zm5 0a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H7a1 1 0 01-1-1V7zm5 0a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1h-2a1 1 0 01-1-1V7zM1 12a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H2a1 1 0 01-1-1v-2zm5 0a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H7a1 1 0 01-1-1v-2zm5 0a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1h-2a1 1 0 01-1-1v-2z" />
                        </svg>
                    </button>
                    <button class="swz-view-btn" id="swzListBtn" title="List View">
                        <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 01.5-.5h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5z" />
                        </svg>
                    </button>
                </div>
                <button class="swz-filter-btn" id="swzFilterBtn">
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L13 13.414V19a1 1 0 01-.553.894l-4 2A1 1 0 017 21v-7.586L3.293 6.707A1 1 0 013 6V4z" />
                    </svg>
                    Filters
                </button>
            </div>
        </div>
    </div>

    <!-- ═══ PAGE BODY ═══ -->
    <div class="swz-page-body">

        <!-- SIDEBAR -->
        <aside class="swz-filter-sidebar" id="swzSidebar">

            <!-- Active Filters -->
            <div id="swzActiveFilters" class="swz-active-filters" style="display:none"></div>

            <!-- Price -->
            <div class="swz-filter-section">
                <div class="swz-filter-title" onclick="swzToggleFilter(this)">
                    Price Range
                    <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="swz-filter-options">
                    <div class="swz-price-range-wrap">
                        <div class="swz-price-range-row">
                            <span>$0</span>
                            <span id="swzPriceLabel">Up to $<span id="swzPriceVal">500</span></span>
                        </div>
                        <input type="range" class="swz-price-slider" min="0" max="500" value="500" id="swzPriceRange"
                            oninput="swzUpdatePrice(this.value)">
                    </div>
                </div>
            </div>

            <!-- Category -->
            <div class="swz-filter-section">
                <div class="swz-filter-title" onclick="swzToggleFilter(this)">
                    Category
                    <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="swz-filter-options">
                    <div class="swz-filter-option" onclick="swzToggleFilterOpt(this,'cat','outerwear')">
                        <div class="swz-filter-check"><svg width="10" height="10" fill="white" viewBox="0 0 12 12">
                                <path d="M2 6l3 3 5-5" stroke="white" stroke-width="1.8" fill="none" />
                            </svg></div>
                        <span>Outerwear</span><span class="swz-filter-option-count">8</span>
                    </div>
                    <div class="swz-filter-option" onclick="swzToggleFilterOpt(this,'cat','knitwear')">
                        <div class="swz-filter-check"><svg width="10" height="10" fill="white" viewBox="0 0 12 12">
                                <path d="M2 6l3 3 5-5" stroke="white" stroke-width="1.8" fill="none" />
                            </svg></div>
                        <span>Knitwear</span><span class="swz-filter-option-count">5</span>
                    </div>
                    <div class="swz-filter-option" onclick="swzToggleFilterOpt(this,'cat','denim')">
                        <div class="swz-filter-check"><svg width="10" height="10" fill="white" viewBox="0 0 12 12">
                                <path d="M2 6l3 3 5-5" stroke="white" stroke-width="1.8" fill="none" />
                            </svg></div>
                        <span>Denim</span><span class="swz-filter-option-count">4</span>
                    </div>
                    <div class="swz-filter-option" onclick="swzToggleFilterOpt(this,'cat','essentials')">
                        <div class="swz-filter-check"><svg width="10" height="10" fill="white" viewBox="0 0 12 12">
                                <path d="M2 6l3 3 5-5" stroke="white" stroke-width="1.8" fill="none" />
                            </svg></div>
                        <span>Essentials</span><span class="swz-filter-option-count">6</span>
                    </div>
                    <div class="swz-filter-option" onclick="swzToggleFilterOpt(this,'cat','suiting')">
                        <div class="swz-filter-check"><svg width="10" height="10" fill="white" viewBox="0 0 12 12">
                                <path d="M2 6l3 3 5-5" stroke="white" stroke-width="1.8" fill="none" />
                            </svg></div>
                        <span>Suiting</span><span class="swz-filter-option-count">3</span>
                    </div>
                    <div class="swz-filter-option" onclick="swzToggleFilterOpt(this,'cat','luxury')">
                        <div class="swz-filter-check"><svg width="10" height="10" fill="white" viewBox="0 0 12 12">
                                <path d="M2 6l3 3 5-5" stroke="white" stroke-width="1.8" fill="none" />
                            </svg></div>
                        <span>Luxury</span><span class="swz-filter-option-count">4</span>
                    </div>
                </div>
            </div>

            <!-- Size -->
            <div class="swz-filter-section">
                <div class="swz-filter-title" onclick="swzToggleFilter(this)">
                    Size
                    <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div style="display:flex;flex-wrap:wrap;gap:6px">
                    <button class="swz-size-btn"
                        onclick="this.classList.toggle('active');this.style.background=this.classList.contains('active')?'#111':'';this.style.color=this.classList.contains('active')?'#fff':''">XS</button>
                    <button class="swz-size-btn"
                        onclick="this.classList.toggle('active');this.style.background=this.classList.contains('active')?'#111':'';this.style.color=this.classList.contains('active')?'#fff':''">S</button>
                    <button class="swz-size-btn"
                        onclick="this.classList.toggle('active');this.style.background=this.classList.contains('active')?'#111':'';this.style.color=this.classList.contains('active')?'#fff':''">M</button>
                    <button class="swz-size-btn"
                        onclick="this.classList.toggle('active');this.style.background=this.classList.contains('active')?'#111':'';this.style.color=this.classList.contains('active')?'#fff':''">L</button>
                    <button class="swz-size-btn"
                        onclick="this.classList.toggle('active');this.style.background=this.classList.contains('active')?'#111':'';this.style.color=this.classList.contains('active')?'#fff':''">XL</button>
                    <button class="swz-size-btn"
                        onclick="this.classList.toggle('active');this.style.background=this.classList.contains('active')?'#111':'';this.style.color=this.classList.contains('active')?'#fff':''">XXL</button>
                </div>
            </div>

            <!-- Color -->
            <div class="swz-filter-section">
                <div class="swz-filter-title" onclick="swzToggleFilter(this)">
                    Colour
                    <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="swz-color-options">
                    <div class="swz-color-swatch" style="background:#111" title="Black"
                        onclick="this.classList.toggle('active')"></div>
                    <div class="swz-color-swatch" style="background:#f0ece4" title="Ivory"
                        onclick="this.classList.toggle('active')"></div>
                    <div class="swz-color-swatch" style="background:#7a6a5a" title="Camel"
                        onclick="this.classList.toggle('active')"></div>
                    <div class="swz-color-swatch" style="background:#4a5568" title="Slate"
                        onclick="this.classList.toggle('active')"></div>
                    <div class="swz-color-swatch" style="background:#6b4f3a" title="Brown"
                        onclick="this.classList.toggle('active')"></div>
                    <div class="swz-color-swatch" style="background:#c9a96e" title="Gold"
                        onclick="this.classList.toggle('active')"></div>
                    <div class="swz-color-swatch" style="background:#2d4a3e" title="Forest"
                        onclick="this.classList.toggle('active')"></div>
                    <div class="swz-color-swatch" style="background:#8b2635" title="Burgundy"
                        onclick="this.classList.toggle('active')"></div>
                </div>
            </div>

            <!-- Badges -->
            <div class="swz-filter-section">
                <div class="swz-filter-title" onclick="swzToggleFilter(this)">
                    Tags
                    <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="swz-filter-options">
                    <div class="swz-filter-option" onclick="swzToggleFilterOpt(this,'tag','sale')">
                        <div class="swz-filter-check"><svg width="10" height="10" fill="white" viewBox="0 0 12 12">
                                <path d="M2 6l3 3 5-5" stroke="white" stroke-width="1.8" fill="none" />
                            </svg></div>
                        <span>On Sale</span>
                    </div>
                    <div class="swz-filter-option" onclick="swzToggleFilterOpt(this,'tag','new')">
                        <div class="swz-filter-check"><svg width="10" height="10" fill="white" viewBox="0 0 12 12">
                                <path d="M2 6l3 3 5-5" stroke="white" stroke-width="1.8" fill="none" />
                            </svg></div>
                        <span>New Arrival</span>
                    </div>
                    <div class="swz-filter-option" onclick="swzToggleFilterOpt(this,'tag','eco')">
                        <div class="swz-filter-check"><svg width="10" height="10" fill="white" viewBox="0 0 12 12">
                                <path d="M2 6l3 3 5-5" stroke="white" stroke-width="1.8" fill="none" />
                            </svg></div>
                        <span>Eco-Conscious</span>
                    </div>
                </div>
            </div>

            <button onclick="swzClearFilters()"
                style="width:100%;padding:12px;border:1.5px solid #ddd;background:#fff;font-family:'Manrope',sans-serif;font-size:11px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;cursor:pointer;transition:all .2s;margin-top:4px"
                onmouseover="this.style.background='#111';this.style.color='#fff'"
                onmouseout="this.style.background='#fff';this.style.color='#111'">
                Clear All Filters
            </button>
        </aside>

        <!-- PRODUCTS -->
        <div class="swz-products-area">
            <div class="swz-grid" id="swzProductGrid">
                <!-- Rendered by JS -->
            </div>
            <div class="swz-load-more-wrap" id="swzLoadMoreWrap">
                <button class="swz-load-more-btn" id="swzLoadMoreBtn">Load More Products</button>
            </div>
        </div>
    </div>

    <!-- ═══ MOBILE FILTER PANEL ═══ -->
    <div class="swz-mobile-filter-overlay" id="swzMobFilterOverlay" onclick="swzCloseMobileFilter()"></div>
    <div class="swz-mobile-filter-panel" id="swzMobFilterPanel">
        <div class="swz-mobile-filter-head">
            <span class="swz-mobile-filter-title">Filters</span>
            <button onclick="swzCloseMobileFilter()"
                style="background:none;border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;width:36px;height:36px;border-radius:50%;transition:background .2s"
                onmouseover="this.style.background='#f2f2f2'" onmouseout="this.style.background='none'">
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M18 6L6 18M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div style="display:flex;flex-direction:column;gap:20px">
            <div>
                <p
                    style="font-size:11px;font-weight:700;letter-spacing:.16em;text-transform:uppercase;margin-bottom:12px">
                    Category</p>
                <div style="display:flex;flex-wrap:wrap;gap:8px">
                    <button class="swz-cat-chip" style="border:1.5px solid #ddd;padding:8px 16px" data-cat="outerwear"
                        onclick="swzMobCatFilter(this)">Outerwear</button>
                    <button class="swz-cat-chip" style="border:1.5px solid #ddd;padding:8px 16px" data-cat="knitwear"
                        onclick="swzMobCatFilter(this)">Knitwear</button>
                    <button class="swz-cat-chip" style="border:1.5px solid #ddd;padding:8px 16px" data-cat="denim"
                        onclick="swzMobCatFilter(this)">Denim</button>
                    <button class="swz-cat-chip" style="border:1.5px solid #ddd;padding:8px 16px" data-cat="essentials"
                        onclick="swzMobCatFilter(this)">Essentials</button>
                    <button class="swz-cat-chip" style="border:1.5px solid #ddd;padding:8px 16px" data-cat="suiting"
                        onclick="swzMobCatFilter(this)">Suiting</button>
                    <button class="swz-cat-chip" style="border:1.5px solid #ddd;padding:8px 16px" data-cat="luxury"
                        onclick="swzMobCatFilter(this)">Luxury</button>
                </div>
            </div>
            <div>
                <p
                    style="font-size:11px;font-weight:700;letter-spacing:.16em;text-transform:uppercase;margin-bottom:12px">
                    Size</p>
                <div style="display:flex;flex-wrap:wrap;gap:6px">
                    <button class="swz-size-btn">XS</button><button class="swz-size-btn">S</button>
                    <button class="swz-size-btn">M</button><button class="swz-size-btn">L</button>
                    <button class="swz-size-btn">XL</button><button class="swz-size-btn">XXL</button>
                </div>
            </div>
            <button onclick="swzCloseMobileFilter()"
                style="padding:15px;background:#111;color:#fff;border:none;font-family:'Manrope',sans-serif;font-size:11px;font-weight:700;letter-spacing:.18em;text-transform:uppercase;cursor:pointer;margin-top:8px">
                Apply Filters
            </button>
        </div>
    </div>

    <!-- ═══ MOBILE BOTTOM NAV ═══ -->
    <nav class="swz-bottom-nav">
        <a href="#" class="swz-bnav-item active">
            <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span class="swz-bnav-label">Home</span>
        </a>
        <a href="#" class="swz-bnav-item">
            <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <span class="swz-bnav-label">Search</span>
        </a>
        <button class="swz-bnav-item swz-bnav-item--cart" id="swzBnavCart">
            <div class="swz-bnav-cart-wrap">
                <div class="swz-bnav-icon-bg">
                    <svg width="20" height="20" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24">
                        <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
                <span class="swz-bnav-badge" id="swzBnavBadge">0</span>
            </div>
        </button>
        <a href="#" class="swz-bnav-item">
            <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
            <span class="swz-bnav-label">Wishlist</span>
        </a>
        <a href="#" class="swz-bnav-item">
            <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                <circle cx="12" cy="7" r="4" />
            </svg>
            <span class="swz-bnav-label">Account</span>
        </a>
    </nav>

    <!-- ═══ CART ═══ -->
    <div class="swz-cart-overlay" id="swzCartOverlay"></div>
    <div class="swz-cart-drawer" id="swzCartDrawer">
        <div class="swz-cart-head">
            <div style="display:flex;align-items:center;gap:12px">
                <h2 class="swz-cart-title">Your Bag</h2>
                <span class="swz-cart-count-badge" id="swzDrawerCount">0 items</span>
            </div>
            <button class="swz-cart-close" id="swzCloseCart">
                <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M18 6L6 18M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="swz-cart-progress-strip">
            <div class="swz-prog-row">
                <p class="swz-prog-label">Free Shipping Progress</p>
                <p id="swzProgLabel" class="swz-prog-val">$0 / $150</p>
            </div>
            <div class="swz-prog-track">
                <div class="swz-prog-fill" id="swzProgFill" style="width:0%"></div>
            </div>
            <p id="swzProgMsg" class="swz-prog-msg" style="color:var(--swz-gray)">Add $150.00 more for free shipping!
            </p>
        </div>
        <div class="swz-cart-body" id="swzCartBody">
            <div style="text-align:center;padding:60px 20px;color:var(--swz-lgray)" id="swzEmptyCart">
                <svg width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"
                    style="margin:0 auto 16px;display:block;opacity:.4">
                    <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
                <p
                    style="font-family:'Playfair Display',serif;font-style:italic;font-size:22px;margin-bottom:6px;color:#aaa">
                    Your bag is empty</p>
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
                    <span id="swzShippingVal" class="swz-shipping-val"
                        style="color:var(--swz-gray);font-size:13px;font-weight:600">—</span>
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

    <script>
        /* ════════════════════════════════════════════════
           SWIZER PRODUCT LISTING PAGE — FULL JS
        ════════════════════════════════════════════════ */

        // ── PRODUCT DATA ──────────────────────────────
        const SWZ_PRODUCTS = [
            { id: 1, name: 'Premium Parka', cat: 'outerwear', price: 129, was: 180, badge: 'New Arrival', badgeColor: '#111', img: 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=800', sizes: ['S', 'M', 'L', 'XL'], rating: 4.9, reviews: 243, tag: 'new', desc: 'A refined parka built for cold-weather versatility, cut from a water-resistant shell with a warm down fill.' },
            { id: 2, name: 'Biker Leather Jacket', cat: 'luxury', price: 299, was: null, badge: 'Selling Fast', badgeColor: '#d63333', img: 'https://images.unsplash.com/photo-1551028719-00167b16eac5?q=80&w=800', sizes: ['S', 'M', 'L'], rating: 4.8, reviews: 178, tag: '', desc: 'Full-grain leather biker jacket with a slim cut and custom hardware. A forever piece.' },
            { id: 3, name: 'Wool Blend Overcoat', cat: 'outerwear', price: 189, was: null, badge: 'Eco-Conscious', badgeColor: '#4a7c59', img: 'https://images.unsplash.com/photo-1516762689617-e1cffcef479d?q=80&w=800', sizes: ['M', 'L', 'XL'], rating: 4.7, reviews: 132, tag: 'eco', desc: 'Crafted from 70% recycled wool, this overcoat balances warmth and responsible production.' },
            { id: 4, name: 'Minimalist Hoodie', cat: 'essentials', price: 79, was: 110, badge: 'Limited', badgeColor: '#3a5a9a', img: 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?q=80&w=800', sizes: ['S', 'M'], rating: 4.6, reviews: 89, tag: 'sale', desc: 'Heavy-weight 450gsm cotton fleece hoodie with a clean, oversized silhouette.' },
            { id: 5, name: 'Cargo Trousers', cat: 'essentials', price: 95, was: null, badge: 'Trending', badgeColor: '#a0621a', img: 'https://images.unsplash.com/photo-1509631179647-0177331693ae?q=80&w=800', sizes: ['28', '30', '32'], rating: 4.5, reviews: 67, tag: 'new', desc: 'Wide-leg cargo trousers in a durable ripstop cotton. Workwear meets luxury.' },
            { id: 6, name: 'Classic Trench Coat', cat: 'outerwear', price: 245, was: null, badge: 'Best Seller', badgeColor: '#2a7a4a', img: 'https://images.unsplash.com/photo-1548126032-079a0fb0099d?q=80&w=800', sizes: ['XS', 'S', 'M', 'L'], rating: 4.9, reviews: 312, tag: '', desc: 'The quintessential trench, cut from water-resistant gabardine in a timeless double-breasted silhouette.' },
            { id: 7, name: 'Cashmere Crewneck', cat: 'knitwear', price: 165, was: null, badge: 'Signature', badgeColor: '#111', img: 'https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?q=80&w=800', sizes: ['S', 'M', 'L'], rating: 4.8, reviews: 201, tag: '', desc: '100% grade-A Mongolian cashmere. Impossibly soft, endlessly versatile.' },
            { id: 8, name: 'Tailored Blazer', cat: 'suiting', price: 210, was: 280, badge: 'New Drop', badgeColor: '#1a3a6a', img: 'https://images.unsplash.com/photo-1571945153237-4929e783af4a?q=80&w=800', sizes: ['S', 'M', 'L', 'XL'], rating: 4.7, reviews: 94, tag: 'sale', desc: 'A modern Italian-woven blazer with structured shoulders and a half-canvas construction.' },
            { id: 9, name: 'Heritage Denim', cat: 'denim', price: 135, was: null, badge: 'Heritage', badgeColor: '#7a4a20', img: 'https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=800', sizes: ['28', '30', '32', '34'], rating: 4.6, reviews: 155, tag: '', desc: 'Selvedge denim from a 100-year-old Japanese mill. Raw, rigid, real.' },
            { id: 10, name: 'Quilted Vest', cat: 'outerwear', price: 118, was: 150, badge: 'Collab', badgeColor: '#5a3a7a', img: 'https://images.unsplash.com/photo-1544022613-e87ca75a784a?q=80&w=800', sizes: ['S', 'M', 'L'], rating: 4.5, reviews: 76, tag: 'sale', desc: 'Water-repellent quilted vest with recycled down fill. A layering essential.' },
            { id: 11, name: 'Ribbed Turtleneck', cat: 'knitwear', price: 89, was: 120, badge: 'On Sale', badgeColor: '#d63333', img: 'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?q=80&w=800', sizes: ['XS', 'S', 'M', 'L', 'XL'], rating: 4.6, reviews: 112, tag: 'sale', desc: 'A fine-rib merino wool turtleneck with a close-to-body fit and buttery-soft hand feel.' },
            { id: 12, name: 'Wide Leg Trousers', cat: 'suiting', price: 155, was: null, badge: 'New Arrival', badgeColor: '#111', img: 'https://images.unsplash.com/photo-1487222477894-8943e31ef7b2?q=80&w=800', sizes: ['XS', 'S', 'M', 'L'], rating: 4.7, reviews: 88, tag: 'new', desc: 'Fluid wide-leg trousers cut from a lightweight crepe suiting with a high, structured waist.' },
            { id: 13, name: 'Cotton Oxford Shirt', cat: 'essentials', price: 75, was: null, badge: 'Eco-Conscious', badgeColor: '#4a7c59', img: 'https://images.unsplash.com/photo-1532453288672-3a17f2e6ad51?q=80&w=800', sizes: ['S', 'M', 'L', 'XL'], rating: 4.5, reviews: 143, tag: 'eco', desc: 'GOTS-certified organic cotton oxford in a relaxed-fit silhouette with a subtle texture.' },
            { id: 14, name: 'Merino Cardigan', cat: 'knitwear', price: 145, was: 195, badge: 'On Sale', badgeColor: '#d63333', img: 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=800', sizes: ['XS', 'S', 'M', 'L'], rating: 4.8, reviews: 167, tag: 'sale', desc: 'An open-front merino wool cardigan with patch pockets and mother-of-pearl buttons.' },
            { id: 15, name: 'Technical Cargo', cat: 'essentials', price: 185, was: null, badge: 'Limited', badgeColor: '#3a5a9a', img: 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?q=80&w=800', sizes: ['S', 'M', 'L', 'XL'], rating: 4.4, reviews: 53, tag: 'new', desc: 'DWR-coated ripstop nylon jogger cargo with zip pockets and an articulated fit.' },
            { id: 16, name: 'Double-Breasted Coat', cat: 'outerwear', price: 310, was: null, badge: 'Luxury', badgeColor: '#c9a96e', img: 'https://images.unsplash.com/photo-1485230895905-ec40ba36b9bc?q=80&w=800', sizes: ['S', 'M', 'L'], rating: 4.9, reviews: 58, tag: '', desc: 'A statement double-breasted overcoat in a heavyweight camel-hair blend. Wear for decades.' },
            { id: 17, name: 'Washed Denim Jacket', cat: 'denim', price: 148, was: 195, badge: 'On Sale', badgeColor: '#d63333', img: 'https://images.unsplash.com/photo-1509631179647-0177331693ae?q=80&w=800', sizes: ['S', 'M', 'L', 'XL'], rating: 4.6, reviews: 99, tag: 'sale', desc: 'A pre-washed, worn-in denim jacket with a relaxed boxy silhouette and raw-hem pocket detail.' },
            { id: 18, name: 'Linen Blazer', cat: 'suiting', price: 195, was: null, badge: 'New Drop', badgeColor: '#111', img: 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?q=80&w=800', sizes: ['XS', 'S', 'M', 'L'], rating: 4.7, reviews: 71, tag: 'new', desc: 'A deconstructed Belgian linen blazer with unlined construction and a patch pocket.' },
        ];

        let swzFilteredProducts = [...SWZ_PRODUCTS];
        let swzCurrentCat = 'all';
        let swzCurrentSort = 'featured';
        let swzVisibleCount = 12;
        let swzCartItems = [];
        let swzMaxPrice = 500;
        let swzSearchTerm = '';

        // ── RENDER PRODUCTS ────────────────────────────
        function swzRenderProducts() {
            const grid = document.getElementById('swzProductGrid');
            const filtered = swzGetFiltered();
            const visible = filtered.slice(0, swzVisibleCount);

            document.getElementById('swzResultCount').textContent = filtered.length + ' product' + (filtered.length !== 1 ? 's' : '');
            document.getElementById('swzHeroCount').textContent = filtered.length + ' styles · Winter 2026 Collection';

            if (filtered.length === 0) {
                grid.innerHTML = `<div class="swz-no-results">
            <h3>No products found</h3>
            <p>Try adjusting your filters or search term.</p>
        </div>`;
                document.getElementById('swzLoadMoreWrap').style.display = 'none';
                return;
            }

            grid.innerHTML = visible.map((p, i) => swzCardHTML(p, i)).join('');

            // Load more button
            const lmw = document.getElementById('swzLoadMoreWrap');
            lmw.style.display = filtered.length > swzVisibleCount ? 'block' : 'none';

            // Stagger animation
            grid.querySelectorAll('.swz-prod-card').forEach((c, i) => {
                c.style.animationDelay = (i * 0.06) + 's';
            });
        }

        function swzCardHTML(p, i) {
            const saleFlag = p.was ? `<span class="swz-price-was">$${p.was.toFixed(2)}</span><span class="swz-price-off">${Math.round((1 - p.price / p.was) * 100)}% OFF</span>` : '';
            const stars = '★'.repeat(Math.floor(p.rating)) + (p.rating % 1 >= 0.5 ? '½' : '');
            const sizes = p.sizes.map(s => `<button class="swz-size-btn" onclick="event.stopPropagation()">${s}</button>`).join('');

            return `
    <div class="swz-prod-card" data-id="${p.id}" data-cat="${p.cat}" onclick="swzOpenQuickView(${p.id})">
        <div class="swz-card-img-wrap">
            <span class="swz-card-badge" style="background:${p.badgeColor}">${p.badge}</span>
            <div class="swz-card-actions">
                <button class="swz-card-icon-btn" onclick="event.stopPropagation();swzToggleWish(this,${p.id})" title="Wishlist">
                    <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </button>
            </div>
            <img src="${p.img}" alt="${p.name}" loading="lazy">
            <div class="swz-quick-add" onclick="event.stopPropagation()">
                <p class="swz-qa-label">Select Size</p>
                <div class="swz-size-row">${sizes}</div>
                <button class="swz-add-btn" onclick="swzAddToCart(${p.id})">Add to Bag</button>
            </div>
        </div>
        <div class="swz-card-info">
            <p class="swz-card-cat">${p.cat}</p>
            <h3 class="swz-card-name">${p.name}</h3>
            <div class="swz-card-rating">
                <span class="swz-stars">${'★'.repeat(Math.floor(p.rating))}</span>
                <span class="swz-rating-count">(${p.reviews})</span>
            </div>
            <span class="swz-card-desc">${p.desc}</span>
            <div class="swz-card-price">
                <span class="swz-price-now">$${p.price.toFixed(2)}</span>
                ${saleFlag}
            </div>
        </div>
    </div>`;
        }

        function swzGetFiltered() {
            let arr = [...SWZ_PRODUCTS];

            // Category tab
            if (swzCurrentCat !== 'all') {
                if (swzCurrentCat === 'sale') arr = arr.filter(p => p.was);
                else arr = arr.filter(p => p.cat === swzCurrentCat);
            }

            // Price
            arr = arr.filter(p => p.price <= swzMaxPrice);

            // Search
            if (swzSearchTerm) {
                const t = swzSearchTerm.toLowerCase();
                arr = arr.filter(p => p.name.toLowerCase().includes(t) || p.cat.toLowerCase().includes(t) || p.desc.toLowerCase().includes(t));
            }

            // Sort
            if (swzCurrentSort === 'price-asc') arr.sort((a, b) => a.price - b.price);
            if (swzCurrentSort === 'price-desc') arr.sort((a, b) => b.price - a.price);
            if (swzCurrentSort === 'newest') arr.sort((a, b) => b.id - a.id);
            if (swzCurrentSort === 'rating') arr.sort((a, b) => b.rating - a.rating);

            return arr;
        }

        // ── CATEGORY CHIPS ─────────────────────────────
        document.querySelectorAll('.swz-cat-chip').forEach(btn => {
            btn.addEventListener('click', function () {
                document.querySelectorAll('.swz-cat-chip').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                swzCurrentCat = this.dataset.cat;
                swzVisibleCount = 12;
                swzRenderProducts();
            });
        });

        // ── SORT ───────────────────────────────────────
        document.getElementById('swzSortSelect').onchange = function () {
            swzCurrentSort = this.value;
            swzRenderProducts();
        };

        // ── SEARCH ─────────────────────────────────────
        document.getElementById('swzSearchInput').addEventListener('input', function () {
            swzSearchTerm = this.value.trim();
            swzVisibleCount = 12;
            swzRenderProducts();
        });

        // ── VIEW TOGGLE ─────────────────────────────────
        document.getElementById('swzGridBtn').onclick = function () {
            this.classList.add('active');
            document.getElementById('swzListBtn').classList.remove('active');
            document.getElementById('swzProductGrid').classList.remove('swz-grid-list');
        };
        document.getElementById('swzListBtn').onclick = function () {
            this.classList.add('active');
            document.getElementById('swzGridBtn').classList.remove('active');
            document.getElementById('swzProductGrid').classList.add('swz-grid-list');
        };

        // ── LOAD MORE ──────────────────────────────────
        document.getElementById('swzLoadMoreBtn').onclick = function () {
            swzVisibleCount += 6;
            swzRenderProducts();
        };

        // ── PRICE SLIDER ────────────────────────────────
        function swzUpdatePrice(val) {
            document.getElementById('swzPriceVal').textContent = val;
            swzMaxPrice = +val;
            swzRenderProducts();
        }

        // ── FILTER TOGGLE ────────────────────────────────
        function swzToggleFilter(titleEl) {
            titleEl.classList.toggle('collapsed');
            const opts = titleEl.nextElementSibling;
            opts.style.display = titleEl.classList.contains('collapsed') ? 'none' : '';
        }
        function swzToggleFilterOpt(el, type, val) {
            el.classList.toggle('checked');
            swzRenderProducts();
        }
        function swzClearFilters() {
            document.querySelectorAll('.swz-filter-option.checked').forEach(el => el.classList.remove('checked'));
            document.querySelectorAll('.swz-color-swatch.active').forEach(el => el.classList.remove('active'));
            document.querySelectorAll('.swz-size-btn.active').forEach(el => {
                el.classList.remove('active');
                el.style.background = '';
                el.style.color = '';
            });
            document.getElementById('swzPriceRange').value = 500;
            swzMaxPrice = 500;
            document.getElementById('swzPriceVal').textContent = '500';
            swzCurrentCat = 'all';
            document.querySelectorAll('.swz-cat-chip').forEach(b => b.classList.remove('active'));
            document.querySelector('.swz-cat-chip[data-cat="all"]').classList.add('active');
            swzRenderProducts();
        }

        // ── MOBILE FILTER ────────────────────────────────
        document.getElementById('swzFilterBtn').onclick = function () {
            document.getElementById('swzMobFilterOverlay').classList.add('open');
            document.getElementById('swzMobFilterPanel').classList.add('open');
            document.body.style.overflow = 'hidden';
        };
        function swzCloseMobileFilter() {
            document.getElementById('swzMobFilterOverlay').classList.remove('open');
            document.getElementById('swzMobFilterPanel').classList.remove('open');
            document.body.style.overflow = '';
        }
        function swzMobCatFilter(btn) {
            document.querySelectorAll('#swzMobFilterPanel .swz-cat-chip').forEach(b => {
                b.classList.remove('active');
                b.style.background = '';
                b.style.color = '';
                b.style.borderColor = '#ddd';
            });
            btn.classList.add('active');
            btn.style.background = '#111';
            btn.style.color = '#fff';
            btn.style.borderColor = '#111';
            swzCurrentCat = btn.dataset.cat;
            swzVisibleCount = 12;
            swzRenderProducts();
        }

        // ── WISHLIST ─────────────────────────────────────
        function swzToggleWish(btn, id) {
            btn.classList.toggle('wished');
            const svg = btn.querySelector('svg');
            if (btn.classList.contains('wished')) {
                btn.style.background = '#fff5f5';
                svg.style.fill = '#d63333'; svg.style.stroke = '#d63333';
            } else {
                btn.style.background = '#fff';
                svg.style.fill = 'none'; svg.style.stroke = '';
            }
        }

        // ── QUICK VIEW / ADD TO CART ─────────────────────
        function swzOpenQuickView(id) {
            const p = SWZ_PRODUCTS.find(x => x.id === id);
            if (!p) return;
            swzAddToCart(id);
        }
        function swzAddToCart(id) {
            const p = SWZ_PRODUCTS.find(x => x.id === id);
            if (!p) return;
            const existing = swzCartItems.find(i => i.id === id);
            if (existing) { existing.qty++; }
            else { swzCartItems.push({ ...p, qty: 1 }); }
            swzRenderCart();
            swzOpenCartDrawer();
        }

        // ── CART ────────────────────────────────────────
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
        document.addEventListener('keydown', e => { if (e.key === 'Escape') swzCloseCartDrawer(); });

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
            const empty = document.getElementById('swzEmptyCart');
            const total = swzCartItems.reduce((s, i) => s + i.price * i.qty, 0);
            const count = swzCartItems.reduce((s, i) => s + i.qty, 0);

            // Badges
            document.getElementById('swzCartCount').textContent = count;
            document.getElementById('swzBnavBadge').textContent = count;
            document.getElementById('swzDrawerCount').textContent = count + ' item' + (count !== 1 ? 's' : '');
            document.getElementById('swzCartSubtotal').textContent = '$' + total.toFixed(2);
            document.getElementById('swzCartTotal').textContent = '$' + total.toFixed(2);

            const freeAt = 150;
            const pct = Math.min((total / freeAt) * 100, 100);
            document.getElementById('swzProgFill').style.width = pct + '%';
            const rem = freeAt - total;
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
                <p class="swz-ci-variant">Size: M · Black</p>
                <div class="swz-ci-btm">
                    <div class="swz-qty-ctrl">
                        <button class="swz-qty-btn" onclick="swzCartUpdateQty(${item.id},-1)">−</button>
                        <span class="swz-qty-display">${item.qty}</span>
                        <button class="swz-qty-btn" onclick="swzCartUpdateQty(${item.id},1)">+</button>
                    </div>
                    <span class="swz-ci-price">$${(item.price * item.qty).toFixed(2)}</span>
                </div>
            </div>
            <button onclick="swzCartRemove(${item.id})" class="swz-ci-remove">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg>
            </button>
        </div>`).join('');
        }

        // ── INIT ─────────────────────────────────────────
        swzRenderProducts();
        swzRenderCart();
    </script>
</body>

</html>