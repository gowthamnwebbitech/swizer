<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Bag – Swizer Premium Apparel</title>
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
            --swz-green: #2a7a4a;
            --swz-border: #e8e8e8;
        }
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Manrope', sans-serif; background: #fff; color: var(--swz-black); overflow-x: hidden; }
        @media (max-width:767px) { body { padding-bottom: 80px; } }

        /* ANNOUNCE */
        .swz-announce-bar { overflow: hidden; padding: 10px 0; background: var(--swz-black); }
        .swz-marquee-track { display: flex; width: max-content; animation: swzMarquee 32s linear infinite; color: #fff; font-size: 10px; font-weight: 600; letter-spacing: .22em; text-transform: uppercase; }
        @keyframes swzMarquee { to { transform: translateX(-50%); } }
        .swz-marquee-item { padding: 0 48px; }
        .swz-marquee-sep { opacity: .3; }

        /* HEADER */
        .swz-header { position: sticky; top: 0; z-index: 50; background: rgba(255,255,255,.92); backdrop-filter: blur(14px); border-bottom: 1px solid rgba(229,231,235,.6); }
        .swz-header-inner { max-width: 1400px; margin: 0 auto; padding: 0 24px; height: 64px; display: flex; align-items: center; justify-content: space-between; }
        @media (min-width:1024px) { .swz-header-inner { padding: 0 40px; height: 68px; } }
        .swz-logo { font-family: 'Playfair Display', serif; font-weight: 800; font-size: 22px; color: var(--swz-black); text-decoration: none; font-style: italic; }
        .swz-desk-nav { display: none; align-items: center; gap: 28px; }
        @media (min-width:1024px) { .swz-desk-nav { display: flex; } }
        .swz-nav-link { font-size: 12px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; color: var(--swz-gray); text-decoration: none; position: relative; transition: color .25s; }
        .swz-nav-link::after { content:''; position: absolute; bottom:-4px; left:0; width:0; height:1.5px; background:var(--swz-black); transition: width .3s; }
        .swz-nav-link:hover { color: var(--swz-black); }
        .swz-nav-link:hover::after { width: 100%; }
        .swz-nav-link--sale { color: var(--swz-red) !important; }
        .swz-header-right { display: flex; align-items: center; gap: 4px; }
        .swz-icon-btn { background: none; border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; transition: background .2s; position: relative; }
        .swz-icon-btn:hover { background: #f2f2f2; }
        .swz-cart-badge { position: absolute; top: -2px; right: -2px; background: var(--swz-black); color: #fff; font-size: 9px; font-weight: 700; width: 17px; height: 17px; border-radius: 50%; display: flex; align-items: center; justify-content: center; }

        /* BREADCRUMB */
        .swz-breadcrumb-bar { border-bottom: 1px solid var(--swz-border); }
        .swz-breadcrumb-inner { max-width: 1400px; margin: 0 auto; padding: 0 24px; height: 44px; display: flex; align-items: center; }
        @media (min-width:1024px) { .swz-breadcrumb-inner { padding: 0 40px; } }
        .swz-breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 11px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; color: var(--swz-lgray); }
        .swz-breadcrumb a { color: var(--swz-lgray); text-decoration: none; transition: color .2s; }
        .swz-breadcrumb a:hover { color: var(--swz-black); }
        .swz-breadcrumb span { color: var(--swz-black); }

        /* PAGE HERO */
        .swz-page-hero { background: var(--swz-black); padding: 48px 0 44px; position: relative; overflow: hidden; }
        .swz-page-hero::before { content:''; position:absolute; inset:0; background: url('https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?q=30&w=1200') center/cover; opacity:.06; }
        .swz-page-hero-inner { max-width: 1400px; margin: 0 auto; padding: 0 24px; position: relative; z-index: 1; }
        @media (min-width:1024px) { .swz-page-hero-inner { padding: 0 40px; } }
        .swz-page-title { font-family: 'Cormorant Garamond', serif; font-weight: 800; font-style: italic; font-size: clamp(36px, 5.5vw, 68px); line-height: 1; color: #fff; letter-spacing: -.01em; margin-bottom: 10px; }
        .swz-page-subtitle { font-size: 14px; font-weight: 300; color: rgba(255,255,255,.45); }

        /* FREE SHIPPING PROGRESS BAR */
        .swz-shipping-banner { background: var(--swz-off); border-bottom: 1px solid var(--swz-border); padding: 14px 0; }
        .swz-shipping-banner-inner { max-width: 1400px; margin: 0 auto; padding: 0 24px; }
        @media (min-width:1024px) { .swz-shipping-banner-inner { padding: 0 40px; } }
        .swz-ship-row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px; }
        .swz-ship-label { font-size: 11px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: var(--swz-gray); }
        .swz-ship-val { font-size: 12px; font-weight: 700; }
        .swz-ship-track { height: 4px; background: #e0e0e0; border-radius: 2px; overflow: hidden; }
        .swz-ship-fill { height: 100%; background: var(--swz-black); border-radius: 2px; transition: width .6s cubic-bezier(.165,.84,.44,1); }
        .swz-ship-msg { font-size: 12px; font-weight: 600; margin-top: 8px; display: flex; align-items: center; gap: 6px; }

        /* MAIN LAYOUT */
        .swz-cart-page { max-width: 1400px; margin: 0 auto; padding: 48px 24px 80px; display: grid; grid-template-columns: 1fr; gap: 40px; align-items: start; }
        @media (min-width:1024px) { .swz-cart-page { grid-template-columns: 1fr 380px; padding: 56px 40px 80px; gap: 56px; } }

        /* CART ITEMS */
        .swz-cart-items-col {}
        .swz-cart-items-header { display: flex; align-items: center; justify-content: space-between; padding-bottom: 16px; border-bottom: 2px solid var(--swz-black); margin-bottom: 0; }
        .swz-cart-items-title { font-family: 'Playfair Display', serif; font-weight: 800; font-size: 22px; font-style: italic; }
        .swz-cart-items-count { font-size: 12px; font-weight: 600; letter-spacing: .1em; text-transform: uppercase; color: var(--swz-gray); }
        .swz-clear-cart-btn { font-size: 11px; font-weight: 600; letter-spacing: .1em; text-transform: uppercase; color: var(--swz-lgray); background: none; border: none; cursor: pointer; text-decoration: underline; transition: color .2s; }
        .swz-clear-cart-btn:hover { color: var(--swz-red); }

        /* Column headers */
        .swz-cart-col-heads { display: none; }
        @media (min-width:768px) { .swz-cart-col-heads { display: grid; grid-template-columns: 1fr 120px 120px 80px; gap: 16px; padding: 14px 0; border-bottom: 1px solid var(--swz-border); font-size: 10px; font-weight: 700; letter-spacing: .18em; text-transform: uppercase; color: var(--swz-lgray); } }

        /* Cart Item Row */
        .swz-cart-item-row { display: flex; gap: 16px; padding: 24px 0; border-bottom: 1px solid var(--swz-border); position: relative; animation: swzFadeUp .4s ease both; }
        @media (min-width:768px) { .swz-cart-item-row { display: grid; grid-template-columns: 1fr 120px 120px 80px; gap: 16px; align-items: center; } }
        @keyframes swzFadeUp { from { opacity:0; transform:translateY(12px); } to { opacity:1; transform:none; } }

        .swz-ci-product { display: flex; gap: 16px; align-items: flex-start; }
        .swz-ci-thumb-wrap { position: relative; flex-shrink: 0; }
        .swz-ci-thumb { width: 88px; height: 110px; object-fit: cover; display: block; }
        @media (min-width:640px) { .swz-ci-thumb { width: 100px; height: 126px; } }
        .swz-ci-details { flex: 1; min-width: 0; }
        .swz-ci-cat { font-size: 10px; font-weight: 600; letter-spacing: .2em; text-transform: uppercase; color: var(--swz-lgray); margin-bottom: 4px; }
        .swz-ci-name { font-size: 15px; font-weight: 600; margin-bottom: 6px; line-height: 1.3; }
        .swz-ci-meta { font-size: 12px; font-weight: 300; color: var(--swz-gray); margin-bottom: 12px; line-height: 1.6; }
        .swz-ci-actions { display: flex; gap: 12px; align-items: center; }
        .swz-ci-wish-btn { font-size: 11px; font-weight: 600; letter-spacing: .08em; text-transform: uppercase; color: var(--swz-gray); background: none; border: none; cursor: pointer; text-decoration: underline; transition: color .2s; display: flex; align-items: center; gap: 4px; }
        .swz-ci-wish-btn:hover { color: var(--swz-red); }
        .swz-ci-remove-btn { font-size: 11px; font-weight: 600; letter-spacing: .08em; text-transform: uppercase; color: var(--swz-gray); background: none; border: none; cursor: pointer; text-decoration: underline; transition: color .2s; }
        .swz-ci-remove-btn:hover { color: var(--swz-red); }

        /* Qty */
        .swz-ci-qty { display: flex; align-items: center; }
        .swz-qty-box { display: flex; align-items: center; border: 1.5px solid var(--swz-border); }
        .swz-qty-dec, .swz-qty-inc { width: 36px; height: 36px; border: none; background: #fff; cursor: pointer; font-size: 18px; font-family: 'Manrope', sans-serif; display: flex; align-items: center; justify-content: center; transition: all .2s; color: var(--swz-black); }
        .swz-qty-dec:hover, .swz-qty-inc:hover { background: var(--swz-black); color: #fff; }
        .swz-qty-val { width: 40px; text-align: center; font-size: 14px; font-weight: 700; border: none; outline: none; background: transparent; font-family: 'Manrope', sans-serif; }

        /* Price */
        .swz-ci-price-col { display: flex; flex-direction: column; gap: 2px; }
        .swz-ci-price-now { font-size: 16px; font-weight: 700; }
        .swz-ci-price-was { font-size: 12px; font-weight: 300; color: var(--swz-lgray); text-decoration: line-through; }
        .swz-ci-price-save { font-size: 10px; font-weight: 700; color: var(--swz-red); letter-spacing: .06em; }

        /* Remove col */
        .swz-ci-remove-col { display: flex; justify-content: center; }
        .swz-ci-remove-x { width: 32px; height: 32px; border: 1.5px solid var(--swz-border); background: #fff; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all .2s; color: var(--swz-lgray); border-radius: 50%; }
        .swz-ci-remove-x:hover { background: var(--swz-red); border-color: var(--swz-red); color: #fff; }

        /* Mobile qty/price */
        .swz-ci-mobile-btm { display: flex; align-items: center; justify-content: space-between; margin-top: 12px; }
        @media (min-width:768px) { .swz-ci-mobile-btm { display: none; } }
        .swz-ci-desktop-hide { display: none; }
        @media (min-width:768px) { .swz-ci-desktop-hide { display: block; } }

        /* Promo code */
        .swz-promo-section { margin-top: 28px; }
        .swz-promo-title { font-size: 12px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; margin-bottom: 12px; display: flex; align-items: center; gap: 8px; }
        .swz-promo-form { display: flex; gap: 0; }
        .swz-promo-input { flex: 1; border: 1.5px solid var(--swz-border); border-right: none; padding: 12px 16px; font-family: 'Manrope', sans-serif; font-size: 13px; outline: none; transition: border-color .25s; }
        .swz-promo-input:focus { border-color: var(--swz-black); }
        .swz-promo-input::placeholder { color: #bbb; }
        .swz-promo-apply { padding: 12px 20px; background: var(--swz-black); color: #fff; border: none; font-family: 'Manrope', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: .16em; text-transform: uppercase; cursor: pointer; transition: background .2s; white-space: nowrap; }
        .swz-promo-apply:hover { background: #333; }
        .swz-promo-applied { display: none; margin-top: 10px; font-size: 12px; font-weight: 600; color: var(--swz-green); }

        /* Continue shopping */
        .swz-continue-btn { display: inline-flex; align-items: center; gap: 8px; margin-top: 28px; font-size: 12px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; color: var(--swz-gray); text-decoration: none; transition: color .2s; }
        .swz-continue-btn:hover { color: var(--swz-black); }
        .swz-continue-btn svg { transition: transform .2s; }
        .swz-continue-btn:hover svg { transform: translateX(-3px); }

        /* EMPTY CART */
        .swz-empty-cart { text-align: center; padding: 80px 20px; }
        .swz-empty-icon { width: 64px; height: 64px; margin: 0 auto 24px; opacity: .2; }
        .swz-empty-title { font-family: 'Cormorant Garamond', serif; font-size: 32px; font-weight: 700; font-style: italic; margin-bottom: 10px; }
        .swz-empty-sub { font-size: 14px; font-weight: 300; color: var(--swz-gray); margin-bottom: 32px; }
        .swz-shop-btn { display: inline-block; padding: 15px 48px; background: var(--swz-black); color: #fff; font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 700; letter-spacing: .2em; text-transform: uppercase; text-decoration: none; transition: background .2s; }
        .swz-shop-btn:hover { background: #333; }

        /* ORDER SUMMARY */
        .swz-order-summary { background: var(--swz-off); padding: 28px; position: sticky; top: 88px; }
        .swz-summary-title { font-family: 'Playfair Display', serif; font-weight: 800; font-size: 20px; font-style: italic; margin-bottom: 24px; padding-bottom: 16px; border-bottom: 2px solid var(--swz-black); }
        .swz-summary-row { display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 14px; }
        .swz-summary-label { font-size: 12px; font-weight: 600; letter-spacing: .1em; text-transform: uppercase; color: var(--swz-gray); }
        .swz-summary-val { font-size: 15px; font-weight: 600; }
        .swz-summary-discount-val { font-size: 15px; font-weight: 600; color: var(--swz-green); }
        .swz-summary-shipping-val { font-size: 13px; font-weight: 600; color: var(--swz-green); }
        .swz-summary-sep { border: none; border-top: 1px solid var(--swz-border); margin: 18px 0; }
        .swz-summary-total-row { display: flex; justify-content: space-between; align-items: baseline; }
        .swz-summary-total-label { font-family: 'Playfair Display', serif; font-weight: 700; font-size: 18px; font-style: italic; }
        .swz-summary-total-val { font-family: 'Cormorant Garamond', serif; font-weight: 800; font-size: 36px; line-height: 1; }
        .swz-summary-tax-note { font-size: 11px; font-weight: 300; color: var(--swz-lgray); margin-top: 4px; text-align: right; }

        /* Checkout button */
        .swz-checkout-btn { display: block; width: 100%; margin-top: 24px; background: var(--swz-black); color: #fff; border: none; font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 700; letter-spacing: .22em; text-transform: uppercase; padding: 18px; cursor: pointer; transition: all .25s; text-align: center; text-decoration: none; }
        .swz-checkout-btn:hover { background: #222; letter-spacing: .28em; }
        .swz-paypal-btn { display: flex; align-items: center; justify-content: center; gap: 10px; width: 100%; margin-top: 10px; background: #F6C355; color: #003087; border: none; font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 800; letter-spacing: .1em; padding: 16px; cursor: pointer; transition: opacity .2s; }
        .swz-paypal-btn:hover { opacity: .88; }

        .swz-divider-or { display: flex; align-items: center; gap: 14px; margin: 12px 0; color: var(--swz-lgray); font-size: 11px; font-weight: 600; letter-spacing: .1em; text-transform: uppercase; }
        .swz-divider-or::before, .swz-divider-or::after { content:''; flex: 1; height: 1px; background: var(--swz-border); }

        /* Trust micro-badges */
        .swz-summary-trust { margin-top: 20px; display: flex; flex-direction: column; gap: 8px; }
        .swz-trust-micro { display: flex; align-items: center; gap: 8px; font-size: 11px; font-weight: 500; color: var(--swz-gray); }

        /* Payment logos */
        .swz-payment-logos { display: flex; gap: 6px; flex-wrap: wrap; margin-top: 18px; }
        .swz-pay-logo { height: 22px; background: var(--swz-border); border-radius: 3px; padding: 3px 8px; font-size: 9px; font-weight: 800; letter-spacing: .06em; display: flex; align-items: center; text-transform: uppercase; color: var(--swz-gray); }

        /* YOU MAY ALSO LIKE */
        .swz-upsell-section { padding: 72px 0; border-top: 1px solid var(--swz-border); background: var(--swz-off); }
        .swz-upsell-inner { max-width: 1400px; margin: 0 auto; padding: 0 24px; }
        @media (min-width:1024px) { .swz-upsell-inner { padding: 0 40px; } }
        .swz-eyebrow { display: block; font-size: 10px; font-weight: 700; letter-spacing: .4em; text-transform: uppercase; color: var(--swz-gray); margin-bottom: 8px; }
        .swz-sec-title { font-family: 'Playfair Display', serif; font-weight: 800; font-size: clamp(24px, 3.5vw, 42px); line-height: 1.05; }
        .swz-divider-line { width: 40px; height: 2px; background: var(--swz-accent); margin: 12px 0 36px; }
        .swz-upsell-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
        @media (min-width:640px) { .swz-upsell-grid { grid-template-columns: repeat(3, 1fr); } }
        @media (min-width:1024px) { .swz-upsell-grid { grid-template-columns: repeat(4, 1fr); } }

        /* Product Card */
        .swz-prod-card { position: relative; background: #fff; border: 1px solid transparent; transition: border-color .25s, box-shadow .25s; cursor: pointer; }
        .swz-prod-card:hover { border-color: var(--swz-black); box-shadow: 0 8px 32px rgba(0,0,0,.08); }
        .swz-card-img-wrap { position: relative; overflow: hidden; aspect-ratio: 3/4; background: var(--swz-off); }
        .swz-card-img-wrap img { width:100%; height:100%; object-fit:cover; display:block; transition: transform .9s cubic-bezier(.165,.84,.44,1); }
        .swz-prod-card:hover .swz-card-img-wrap img { transform: scale(1.07); }
        .swz-card-badge { position: absolute; top: 10px; left: 10px; z-index: 6; font-size: 9px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #fff; padding: 4px 10px; }
        .swz-card-actions { position: absolute; top: 10px; right: 10px; z-index: 6; transform: translateX(52px); transition: transform .35s; }
        .swz-prod-card:hover .swz-card-actions { transform: translateX(0); }
        .swz-card-icon-btn { width: 38px; height: 38px; border-radius: 50%; background: #fff; border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 10px rgba(0,0,0,.14); transition: all .22s; color: var(--swz-gray); }
        .swz-card-icon-btn:hover { background: var(--swz-black); color: #fff; }
        .swz-quick-add { position: absolute; bottom: 0; left: 0; right: 0; background: rgba(255,255,255,.96); backdrop-filter: blur(8px); padding: 12px; transform: translateY(100%); transition: transform .32s cubic-bezier(.165,.84,.44,1); z-index: 5; }
        .swz-prod-card:hover .swz-quick-add { transform: none; }
        .swz-qa-label { font-size: 10px; font-weight: 600; letter-spacing: .18em; text-transform: uppercase; color: var(--swz-gray); text-align: center; margin-bottom: 6px; }
        .swz-size-row { display: flex; justify-content: center; gap: 5px; }
        .swz-size-btn-sm { height: 30px; min-width: 30px; padding: 0 4px; border: 1.5px solid #ddd; background: #fff; font-family: 'Manrope', sans-serif; font-size: 10px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all .2s; }
        .swz-size-btn-sm:hover { background: var(--swz-black); color: #fff; border-color: var(--swz-black); }
        .swz-add-btn-sm { width: 100%; margin-top: 7px; background: var(--swz-black); color: #fff; border: none; font-family: 'Manrope', sans-serif; font-size: 10px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; padding: 9px; cursor: pointer; transition: background .2s; }
        .swz-add-btn-sm:hover { background: #333; }
        .swz-card-info { padding: 12px 8px 8px; }
        .swz-card-cat { font-size: 10px; font-weight: 600; letter-spacing: .2em; text-transform: uppercase; color: var(--swz-lgray); margin-bottom: 3px; }
        .swz-card-name { font-size: 14px; font-weight: 600; margin-bottom: 5px; }
        .swz-card-price { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; }
        .swz-price-now { font-size: 15px; font-weight: 700; }
        .swz-price-was { font-size: 13px; font-weight: 300; color: var(--swz-lgray); text-decoration: line-through; }
        .swz-price-off { font-size: 10px; font-weight: 700; color: var(--swz-red); }

        /* MOBILE BOTTOM NAV */
        .swz-bottom-nav { display: none; position: fixed; bottom: 0; left: 0; right: 0; z-index: 9000; background: #fff; border-top: 1px solid #e8e8e8; height: 68px; padding: 0 4px; box-shadow: 0 -4px 24px rgba(0,0,0,.08); }
        @media (max-width:767px) { .swz-bottom-nav { display: flex; align-items: stretch; } }
        .swz-bnav-item { flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 4px; background: none; border: none; cursor: pointer; text-decoration: none; color: var(--swz-gray); transition: color .2s; padding: 8px 4px; }
        .swz-bnav-item:hover, .swz-bnav-item.active { color: var(--swz-black); }
        .swz-bnav-label { font-size: 9px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; }
        .swz-bnav-icon-bg { background: var(--swz-black); border-radius: 50%; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 14px rgba(0,0,0,.25); }
        .swz-bnav-badge { position: absolute; top:8px; right:12px; background: var(--swz-black); color: #fff; font-size: 8px; font-weight: 700; min-width: 15px; height: 15px; border-radius: 999px; display: flex; align-items: center; justify-content: center; padding: 0 3px; }
        .swz-bnav-cart-wrap { position: relative; display: flex; align-items: center; justify-content: center; }

        /* MOBILE STICKY CHECKOUT */
        .swz-sticky-checkout { display: none; }
        @media (max-width:1023px) { .swz-sticky-checkout { display: flex; position: fixed; bottom: 68px; left: 0; right: 0; z-index: 8998; background: rgba(255,255,255,.97); backdrop-filter: blur(12px); border-top: 1px solid var(--swz-border); padding: 12px 16px; gap: 12px; align-items: center; } }
        .swz-sticky-total { display: flex; flex-direction: column; }
        .swz-sticky-total-num { font-family: 'Cormorant Garamond', serif; font-size: 28px; font-weight: 700; line-height: 1; }
        .swz-sticky-total-label { font-size: 10px; font-weight: 600; letter-spacing: .14em; text-transform: uppercase; color: var(--swz-gray); }
        .swz-sticky-checkout-btn { flex: 1; background: var(--swz-black); color: #fff; border: none; font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 700; letter-spacing: .2em; text-transform: uppercase; padding: 0 20px; height: 50px; cursor: pointer; transition: background .2s; }
        .swz-sticky-checkout-btn:hover { background: #222; }

        /* Toast */
        .swz-toast { position: fixed; bottom: 90px; left: 50%; transform: translateX(-50%) translateY(20px); background: var(--swz-black); color: #fff; padding: 14px 28px; font-size: 12px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; z-index: 99999; opacity: 0; pointer-events: none; transition: all .35s; white-space: nowrap; display: flex; align-items: center; gap: 10px; }
        .swz-toast.show { opacity: 1; transform: translateX(-50%) translateY(0); }
        @keyframes swzFadeUp2 { from { opacity:0; transform:translateY(8px); } to { opacity:1; transform:none; } }

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
            <button class="swz-icon-btn" title="Wishlist">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
            </button>
            <button class="swz-icon-btn" id="swzCartHeaderBtn">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                <span class="swz-cart-badge" id="swzHeaderCount">3</span>
            </button>
        </div>
    </div>
</header>

<!-- BREADCRUMB -->
<div class="swz-breadcrumb-bar">
    <div class="swz-breadcrumb-inner">
        <nav class="swz-breadcrumb">
            <a href="index.html">Home</a>
            <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span>Your Bag</span>
        </nav>
    </div>
</div>

<!-- PAGE HERO -->
<div class="swz-page-hero">
    <div class="swz-page-hero-inner">
        <h1 class="swz-page-title">Your Bag</h1>
        <p class="swz-page-subtitle" id="swzHeroSub">3 items · $483.00</p>
    </div>
</div>

<!-- SHIPPING PROGRESS -->
<div class="swz-shipping-banner">
    <div class="swz-shipping-banner-inner">
        <div class="swz-ship-row">
            <span class="swz-ship-label">Free Shipping Progress</span>
            <span class="swz-ship-val" id="swzShipVal">$483 / $150 ✓</span>
        </div>
        <div class="swz-ship-track">
            <div class="swz-ship-fill" id="swzShipFill" style="width:100%"></div>
        </div>
        <p class="swz-ship-msg" id="swzShipMsg" style="color:var(--swz-green)">
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            🎉 You've unlocked free shipping!
        </p>
    </div>
</div>

<!-- MAIN CART PAGE -->
<div class="swz-cart-page">

    <!-- LEFT: ITEMS -->
    <div class="swz-cart-items-col">
        <div class="swz-cart-items-header">
            <div>
                <h2 class="swz-cart-items-title">Shopping Bag</h2>
                <p class="swz-cart-items-count" id="swzItemsCount">3 items</p>
            </div>
            <button class="swz-clear-cart-btn" onclick="swzClearCart()">Clear All</button>
        </div>

        <!-- Column Labels (desktop) -->
        <div class="swz-cart-col-heads">
            <div>Product</div>
            <div style="text-align:center">Quantity</div>
            <div style="text-align:right">Price</div>
            <div style="text-align:center">Remove</div>
        </div>

        <!-- Items Container -->
        <div id="swzCartItems"></div>

        <!-- Empty State -->
        <div class="swz-empty-cart" id="swzEmptyCart" style="display:none">
            <svg class="swz-empty-icon" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
            <h3 class="swz-empty-title">Your bag is empty</h3>
            <p class="swz-empty-sub">Looks like you haven't added anything yet. Explore our latest collection.</p>
            <a href="product.html" class="swz-shop-btn">Continue Shopping</a>
        </div>

        <!-- Promo Code -->
        <div class="swz-promo-section" id="swzPromoSection">
            <p class="swz-promo-title">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                Promo / Gift Code
            </p>
            <div class="swz-promo-form">
                <input type="text" id="swzPromoInput" class="swz-promo-input" placeholder="Enter code e.g. SWIZER15">
                <button class="swz-promo-apply" onclick="swzApplyPromo()">Apply</button>
            </div>
            <p class="swz-promo-applied" id="swzPromoMsg">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                Code applied — 15% discount added!
            </p>
        </div>

        <a href="product.html" class="swz-continue-btn">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"/></svg>
            Continue Shopping
        </a>
    </div>

    <!-- RIGHT: ORDER SUMMARY -->
    <div>
        <div class="swz-order-summary">
            <h2 class="swz-summary-title">Order Summary</h2>

            <div class="swz-summary-row">
                <span class="swz-summary-label">Subtotal (<span id="swzSummaryCount">3</span> items)</span>
                <span class="swz-summary-val" id="swzSummarySubtotal">$483.00</span>
            </div>
            <div class="swz-summary-row" id="swzDiscountRow" style="display:none">
                <span class="swz-summary-label">Discount (15%)</span>
                <span class="swz-summary-discount-val" id="swzDiscountVal">-$72.45</span>
            </div>
            <div class="swz-summary-row">
                <span class="swz-summary-label">Shipping</span>
                <span class="swz-summary-shipping-val" id="swzSummaryShipping">FREE</span>
            </div>
            <div class="swz-summary-row">
                <span class="swz-summary-label">Estimated Tax</span>
                <span class="swz-summary-val" id="swzSummaryTax">$38.64</span>
            </div>

            <hr class="swz-summary-sep">

            <div class="swz-summary-total-row">
                <span class="swz-summary-total-label">Total</span>
                <span class="swz-summary-total-val" id="swzSummaryTotal">$521.64</span>
            </div>
            <p class="swz-summary-tax-note">Incl. all taxes &amp; duties</p>

            <a href="checkout.html" class="swz-checkout-btn">
                Proceed to Checkout →
            </a>

            <div class="swz-divider-or">or</div>

            <button class="swz-paypal-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M7.5 19.5H4.5L6 10.5H9C11.5 10.5 13.5 12 13 14.5C12.5 17 10.5 19.5 7.5 19.5Z" fill="#009CDE"/><path d="M10 4.5H13C15.5 4.5 17.5 6 17 8.5C16.5 11 14.5 13.5 11.5 13.5H8.5L10 4.5Z" fill="#003087"/></svg>
                Pay with PayPal
            </button>

            <!-- Trust micro badges -->
            <div class="swz-summary-trust">
                <div class="swz-trust-micro">
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    256-bit SSL encrypted checkout
                </div>
                <div class="swz-trust-micro">
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    Free returns within 30 days
                </div>
                <div class="swz-trust-micro">
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8"/></svg>
                    Free shipping over $150
                </div>
            </div>

            <!-- Payment logos -->
            <div class="swz-payment-logos">
                <span class="swz-pay-logo">Visa</span>
                <span class="swz-pay-logo">MC</span>
                <span class="swz-pay-logo">Amex</span>
                <span class="swz-pay-logo">Apple Pay</span>
                <span class="swz-pay-logo">G Pay</span>
            </div>
        </div>
    </div>
</div>

<!-- YOU MAY ALSO LIKE -->
<section class="swz-upsell-section">
    <div class="swz-upsell-inner">
        <span class="swz-eyebrow">Complete Your Order</span>
        <h2 class="swz-sec-title">You May Also Like</h2>
        <div class="swz-divider-line"></div>
        <div class="swz-upsell-grid" id="swzUpsellGrid"></div>
    </div>
</section>

<!-- MOBILE BOTTOM NAV -->
<nav class="swz-bottom-nav">
    <a href="index.html" class="swz-bnav-item">
        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
        <span class="swz-bnav-label">Home</span>
    </a>
    <a href="#" class="swz-bnav-item">
        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        <span class="swz-bnav-label">Search</span>
    </a>
    <button class="swz-bnav-item swz-bnav-item--cart active" style="border:none;color:var(--swz-black)">
        <div class="swz-bnav-cart-wrap">
            <div class="swz-bnav-icon-bg">
                <svg width="20" height="20" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
            </div>
            <span class="swz-bnav-badge" id="swzBnavBadge">3</span>
        </div>
    </button>
    <a href="#" class="swz-bnav-item">
        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        <span class="swz-bnav-label">Wishlist</span>
    </a>
    <a href="#" class="swz-bnav-item">
        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        <span class="swz-bnav-label">Account</span>
    </a>
</nav>

<!-- MOBILE STICKY CHECKOUT -->
<div class="swz-sticky-checkout">
    <div class="swz-sticky-total">
        <span class="swz-sticky-total-num" id="swzStickyTotal">$521.64</span>
        <span class="swz-sticky-total-label">Total (incl. tax)</span>
    </div>
    <a href="checkout.html" class="swz-sticky-checkout-btn" style="display:flex;align-items:center;justify-content:center;text-decoration:none">Checkout →</a>
</div>

<!-- TOAST -->
<div class="swz-toast" id="swzToast">
    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
    <span id="swzToastMsg">Done!</span>
</div>

<script>
/* ═══════════════════════════════════════════
   SWIZER CART PAGE JS
═══════════════════════════════════════════ */

let swzPromoApplied = false;
const SWZ_PROMO_CODE = 'SWIZER15';
const SWZ_PROMO_PCT = 0.15;
const SWZ_TAX_RATE = 0.08;
const SWZ_FREE_SHIP_THRESHOLD = 150;

// Initial cart data
let swzCart = [
    { id:1, name:'Premium Parka', cat:'Outerwear', price:129, was:180, qty:1, size:'L', color:'Deep Black', img:'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=200' },
    { id:2, name:'Cashmere Crewneck', cat:'Knitwear', price:165, was:null, qty:1, size:'M', color:'Ivory', img:'https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?q=80&w=200' },
    { id:3, name:'Heritage Denim', cat:'Denim', price:135, was:null, qty:2, size:'32', color:'Raw Indigo', img:'https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=200' },
];

function swzRenderCart() {
    const container = document.getElementById('swzCartItems');
    const empty = document.getElementById('swzEmptyCart');
    const promoSec = document.getElementById('swzPromoSection');

    if (swzCart.length === 0) {
        container.innerHTML = '';
        empty.style.display = 'block';
        promoSec.style.display = 'none';
        swzUpdateSummary();
        return;
    }
    empty.style.display = 'none';
    promoSec.style.display = 'block';

    container.innerHTML = swzCart.map((item, i) => {
        const linePrice = item.price * item.qty;
        const wasPrice = item.was ? `<span class="swz-ci-price-was">$${item.was.toFixed(2)}</span>` : '';
        const saveAmt = item.was ? `<span class="swz-ci-price-save">Save $${((item.was - item.price) * item.qty).toFixed(2)}</span>` : '';
        return `
        <div class="swz-cart-item-row" style="animation-delay:${i*.08}s" id="swzRow${item.id}">
            <div class="swz-ci-product">
                <div class="swz-ci-thumb-wrap">
                    <img src="${item.img}" class="swz-ci-thumb" alt="${item.name}">
                </div>
                <div class="swz-ci-details">
                    <p class="swz-ci-cat">${item.cat}</p>
                    <h3 class="swz-ci-name">${item.name}</h3>
                    <p class="swz-ci-meta">Size: ${item.size} &nbsp;·&nbsp; Colour: ${item.color}</p>
                    <div class="swz-ci-actions">
                        <button class="swz-ci-wish-btn" onclick="swzMoveToWish(${item.id})">
                            <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                            Save for later
                        </button>
                        <span style="color:#ddd">|</span>
                        <button class="swz-ci-remove-btn" onclick="swzRemoveItem(${item.id})">Remove</button>
                    </div>
                    <!-- Mobile qty + price -->
                    <div class="swz-ci-mobile-btm">
                        <div class="swz-qty-box">
                            <button class="swz-qty-dec" onclick="swzChangeQty(${item.id},-1)">−</button>
                            <span class="swz-qty-val" id="swzQtyVal${item.id}">${item.qty}</span>
                            <button class="swz-qty-inc" onclick="swzChangeQty(${item.id},1)">+</button>
                        </div>
                        <div class="swz-ci-price-col" style="text-align:right">
                            <span class="swz-ci-price-now">$${linePrice.toFixed(2)}</span>
                            ${wasPrice}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Desktop qty -->
            <div class="swz-ci-qty swz-ci-desktop-hide" style="justify-content:center">
                <div class="swz-qty-box">
                    <button class="swz-qty-dec" onclick="swzChangeQty(${item.id},-1)">−</button>
                    <span class="swz-qty-val" id="swzQtyValD${item.id}">${item.qty}</span>
                    <button class="swz-qty-inc" onclick="swzChangeQty(${item.id},1)">+</button>
                </div>
            </div>
            <!-- Desktop price -->
            <div class="swz-ci-price-col swz-ci-desktop-hide" style="text-align:right;justify-content:flex-end">
                <span class="swz-ci-price-now" id="swzPrice${item.id}">$${linePrice.toFixed(2)}</span>
                ${wasPrice}${saveAmt}
            </div>
            <!-- Desktop remove -->
            <div class="swz-ci-remove-col swz-ci-desktop-hide">
                <button class="swz-ci-remove-x" onclick="swzRemoveItem(${item.id})">
                    <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg>
                </button>
            </div>
        </div>`;
    }).join('');

    swzUpdateSummary();
}

function swzChangeQty(id, delta) {
    const item = swzCart.find(i => i.id === id);
    if (!item) return;
    item.qty = Math.max(1, item.qty + delta);
    swzRenderCart();
}

function swzRemoveItem(id) {
    swzCart = swzCart.filter(i => i.id !== id);
    swzRenderCart();
    swzShowToast('Item removed from bag');
}

function swzMoveToWish(id) {
    const item = swzCart.find(i => i.id === id);
    swzCart = swzCart.filter(i => i.id !== id);
    swzRenderCart();
    swzShowToast(`❤️ "${item.name}" saved to wishlist`);
}

function swzClearCart() {
    if (!confirm('Remove all items from your bag?')) return;
    swzCart = [];
    swzRenderCart();
    swzShowToast('Bag cleared');
}

function swzUpdateSummary() {
    const subtotal = swzCart.reduce((s, i) => s + i.price * i.qty, 0);
    const count = swzCart.reduce((s, i) => s + i.qty, 0);
    const discount = swzPromoApplied ? subtotal * SWZ_PROMO_PCT : 0;
    const afterDiscount = subtotal - discount;
    const shipping = afterDiscount >= SWZ_FREE_SHIP_THRESHOLD ? 0 : 9.99;
    const tax = afterDiscount * SWZ_TAX_RATE;
    const total = afterDiscount + shipping + tax;

    document.getElementById('swzItemsCount').textContent = count + ' item' + (count !== 1 ? 's' : '');
    document.getElementById('swzSummaryCount').textContent = count;
    document.getElementById('swzHeaderCount').textContent = count;
    document.getElementById('swzBnavBadge').textContent = count;
    document.getElementById('swzHeroSub').textContent = count + ' items · $' + total.toFixed(2);

    document.getElementById('swzSummarySubtotal').textContent = '$' + subtotal.toFixed(2);
    document.getElementById('swzSummaryTax').textContent = '$' + tax.toFixed(2);
    document.getElementById('swzSummaryTotal').textContent = '$' + total.toFixed(2);
    document.getElementById('swzStickyTotal').textContent = '$' + total.toFixed(2);

    const discountRow = document.getElementById('swzDiscountRow');
    if (swzPromoApplied) {
        discountRow.style.display = 'flex';
        document.getElementById('swzDiscountVal').textContent = '-$' + discount.toFixed(2);
    } else {
        discountRow.style.display = 'none';
    }

    if (shipping === 0) {
        document.getElementById('swzSummaryShipping').textContent = 'FREE';
        document.getElementById('swzSummaryShipping').style.color = 'var(--swz-green)';
    } else {
        document.getElementById('swzSummaryShipping').textContent = '$' + shipping.toFixed(2);
        document.getElementById('swzSummaryShipping').style.color = 'var(--swz-black)';
    }

    // Shipping progress
    const pct = Math.min((subtotal / SWZ_FREE_SHIP_THRESHOLD) * 100, 100);
    document.getElementById('swzShipFill').style.width = pct + '%';
    const rem = SWZ_FREE_SHIP_THRESHOLD - subtotal;
    if (rem <= 0) {
        document.getElementById('swzShipVal').textContent = '$' + subtotal.toFixed(0) + ' / $150 ✓';
        document.getElementById('swzShipMsg').innerHTML = `<svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> 🎉 You've unlocked free shipping!`;
        document.getElementById('swzShipMsg').style.color = 'var(--swz-green)';
    } else {
        document.getElementById('swzShipVal').textContent = '$' + subtotal.toFixed(0) + ' / $150';
        document.getElementById('swzShipMsg').textContent = `Add $${rem.toFixed(2)} more for free shipping!`;
        document.getElementById('swzShipMsg').style.color = 'var(--swz-gray)';
    }
}

function swzApplyPromo() {
    const code = document.getElementById('swzPromoInput').value.trim().toUpperCase();
    const msg = document.getElementById('swzPromoMsg');
    if (code === SWZ_PROMO_CODE) {
        swzPromoApplied = true;
        msg.style.display = 'flex';
        msg.style.alignItems = 'center';
        msg.style.gap = '6px';
        msg.style.color = 'var(--swz-green)';
        msg.innerHTML = `<svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> Code applied — 15% discount added!`;
        swzUpdateSummary();
        swzShowToast('✓ Promo code applied!');
    } else {
        msg.style.display = 'flex';
        msg.style.color = 'var(--swz-red)';
        msg.innerHTML = `✕ Invalid code. Try SWIZER15`;
    }
}

// Toast
let swzToastTimer;
function swzShowToast(msg) {
    const t = document.getElementById('swzToast');
    document.getElementById('swzToastMsg').textContent = msg;
    t.classList.add('show');
    clearTimeout(swzToastTimer);
    swzToastTimer = setTimeout(() => t.classList.remove('show'), 2800);
}

// Upsell products
const SWZ_UPSELL = [
    { name:'Wool Blend Overcoat', cat:'Outerwear', price:189, was:null, badge:'Eco-Conscious', badgeColor:'#4a7c59', img:'https://images.unsplash.com/photo-1516762689617-e1cffcef479d?q=80&w=600' },
    { name:'Minimalist Hoodie', cat:'Essentials', price:79, was:110, badge:'Limited', badgeColor:'#3a5a9a', img:'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?q=80&w=600' },
    { name:'Tailored Blazer', cat:'Suiting', price:210, was:280, badge:'New Drop', badgeColor:'#1a3a6a', img:'https://images.unsplash.com/photo-1571945153237-4929e783af4a?q=80&w=600' },
    { name:'Quilted Vest', cat:'Outerwear', price:118, was:150, badge:'On Sale', badgeColor:'#d63333', img:'https://images.unsplash.com/photo-1544022613-e87ca75a784a?q=80&w=600' },
];

document.getElementById('swzUpsellGrid').innerHTML = SWZ_UPSELL.map((p, i) => {
    const sale = p.was ? `<span class="swz-price-was">$${p.was.toFixed(2)}</span><span class="swz-price-off">${Math.round((1-p.price/p.was)*100)}% OFF</span>` : '';
    return `<div class="swz-prod-card" style="animation-delay:${i*.07}s">
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
                <div class="swz-size-row"><button class="swz-size-btn-sm">S</button><button class="swz-size-btn-sm">M</button><button class="swz-size-btn-sm">L</button></div>
                <button class="swz-add-btn-sm" onclick="swzShowToast('✓ Added to bag!')">Add to Bag</button>
            </div>
        </div>
        <div class="swz-card-info">
            <p class="swz-card-cat">${p.cat}</p>
            <h3 class="swz-card-name">${p.name}</h3>
            <div class="swz-card-price"><span class="swz-price-now">$${p.price.toFixed(2)}</span>${sale}</div>
        </div>
    </div>`;
}).join('');

// Init
swzRenderCart();
</script>
</body>
</html>