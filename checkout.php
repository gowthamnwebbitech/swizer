<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout – Swizer Premium Apparel</title>
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
        body { font-family: 'Manrope', sans-serif; background: var(--swz-off); color: var(--swz-black); overflow-x: hidden; }
        @media (max-width:767px) { body { padding-bottom: 80px; } }

        /* HEADER (minimal for checkout) */
        .swz-checkout-header { background: #fff; border-bottom: 1px solid var(--swz-border); padding: 0 24px; height: 64px; display: flex; align-items: center; justify-content: space-between; }
        @media (min-width:1024px) { .swz-checkout-header { padding: 0 40px; height: 72px; } }
        .swz-logo { font-family: 'Playfair Display', serif; font-weight: 800; font-size: 22px; color: var(--swz-black); text-decoration: none; font-style: italic; }
        .swz-checkout-secure { display: flex; align-items: center; gap: 6px; font-size: 11px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; color: var(--swz-green); }

        /* PROGRESS STEPS */
        .swz-steps-bar { background: #fff; border-bottom: 1px solid var(--swz-border); padding: 0 24px; }
        @media (min-width:1024px) { .swz-steps-bar { padding: 0 40px; } }
        .swz-steps-inner { max-width: 1200px; margin: 0 auto; display: flex; align-items: center; height: 52px; gap: 0; }
        .swz-step { display: flex; align-items: center; gap: 10px; font-size: 11px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase; color: var(--swz-lgray); white-space: nowrap; }
        .swz-step.active { color: var(--swz-black); }
        .swz-step.done { color: var(--swz-green); }
        .swz-step-num { width: 24px; height: 24px; border-radius: 50%; border: 2px solid var(--swz-lgray); display: flex; align-items: center; justify-content: center; font-size: 10px; font-weight: 800; flex-shrink: 0; transition: all .3s; }
        .swz-step.active .swz-step-num { border-color: var(--swz-black); background: var(--swz-black); color: #fff; }
        .swz-step.done .swz-step-num { border-color: var(--swz-green); background: var(--swz-green); color: #fff; }
        .swz-step-sep { flex: 1; height: 1px; background: var(--swz-border); margin: 0 12px; min-width: 20px; }
        .swz-step-label { display: none; }
        @media (min-width:640px) { .swz-step-label { display: inline; } }

        /* MAIN LAYOUT */
        .swz-checkout-main { max-width: 1200px; margin: 0 auto; padding: 40px 24px 80px; display: grid; grid-template-columns: 1fr; gap: 28px; }
        @media (min-width:1024px) { .swz-checkout-main { grid-template-columns: 1fr 400px; padding: 48px 24px 80px; gap: 40px; align-items: start; } }

        /* PANELS */
        .swz-co-panel { background: #fff; border: 1px solid var(--swz-border); }
        .swz-co-panel-head { padding: 20px 28px; border-bottom: 1px solid var(--swz-border); display: flex; align-items: center; justify-content: space-between; }
        .swz-co-panel-title { font-family: 'Playfair Display', serif; font-weight: 800; font-size: 18px; font-style: italic; display: flex; align-items: center; gap: 10px; }
        .swz-co-panel-num { width: 26px; height: 26px; border-radius: 50%; background: var(--swz-black); color: #fff; font-family: 'Manrope', sans-serif; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .swz-co-panel-num.done { background: var(--swz-green); }
        .swz-co-panel-edit { font-size: 11px; font-weight: 600; letter-spacing: .1em; text-transform: uppercase; color: var(--swz-gray); background: none; border: none; cursor: pointer; text-decoration: underline; transition: color .2s; }
        .swz-co-panel-edit:hover { color: var(--swz-black); }
        .swz-co-panel-body { padding: 28px; }

        /* Express checkout */
        .swz-express-checkout { margin-bottom: 28px; }
        .swz-express-title { font-size: 10px; font-weight: 700; letter-spacing: .28em; text-transform: uppercase; color: var(--swz-lgray); text-align: center; margin-bottom: 14px; position: relative; }
        .swz-express-title::before, .swz-express-title::after { content:''; position:absolute; top:50%; width:calc(50% - 70px); height:1px; background:var(--swz-border); }
        .swz-express-title::before { left:0; }
        .swz-express-title::after { right:0; }
        .swz-express-btns { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
        .swz-express-btn { height: 48px; border: 1.5px solid var(--swz-border); background: #fff; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; font-family: 'Manrope', sans-serif; font-size: 13px; font-weight: 700; transition: all .2s; }
        .swz-express-btn:hover { border-color: var(--swz-black); background: var(--swz-off); }
        .swz-express-btn--apple { background: #000; color: #fff; border-color: #000; }
        .swz-express-btn--apple:hover { background: #222; }
        .swz-express-btn--paypal { background: #F6C355; color: #003087; border-color: #F6C355; }
        .swz-divider-or { display: flex; align-items: center; gap: 14px; margin: 20px 0; color: var(--swz-lgray); font-size: 11px; font-weight: 600; letter-spacing: .1em; text-transform: uppercase; }
        .swz-divider-or::before, .swz-divider-or::after { content:''; flex:1; height:1px; background:var(--swz-border); }

        /* FORM */
        .swz-form-grid { display: grid; grid-template-columns: 1fr; gap: 16px; }
        .swz-form-grid-2 { grid-template-columns: 1fr 1fr; }
        @media (max-width:480px) { .swz-form-grid-2 { grid-template-columns: 1fr; } }
        .swz-field { display: flex; flex-direction: column; gap: 6px; }
        .swz-field label { font-size: 10px; font-weight: 700; letter-spacing: .18em; text-transform: uppercase; color: var(--swz-black); }
        .swz-field-required::after { content: ' *'; color: var(--swz-red); }
        .swz-input, .swz-select, .swz-textarea { width: 100%; border: 1.5px solid var(--swz-border); padding: 13px 14px; font-family: 'Manrope', sans-serif; font-size: 14px; font-weight: 400; outline: none; background: #fff; color: var(--swz-black); transition: border-color .25s, box-shadow .25s; appearance: none; }
        .swz-input:focus, .swz-select:focus { border-color: var(--swz-black); box-shadow: 0 0 0 3px rgba(17,17,17,.06); }
        .swz-input::placeholder { color: #bbb; }
        .swz-input.error { border-color: var(--swz-red); }
        .swz-field-error { font-size: 11px; font-weight: 600; color: var(--swz-red); display: none; }
        .swz-field-error.show { display: block; }
        .swz-select-wrap { position: relative; }
        .swz-select-wrap::after { content:''; position:absolute; right:14px; top:50%; transform:translateY(-50%); width:0; height:0; border-left:5px solid transparent; border-right:5px solid transparent; border-top:6px solid var(--swz-gray); pointer-events:none; }
        .swz-select { padding-right: 36px; cursor: pointer; }
        .swz-textarea { resize: vertical; min-height: 80px; }
        .swz-input-row { position: relative; }
        .swz-input-icon { position: absolute; right: 14px; top: 50%; transform: translateY(-50%); pointer-events: none; color: var(--swz-lgray); }

        /* Same address checkbox */
        .swz-checkbox-row { display: flex; align-items: flex-start; gap: 12px; cursor: pointer; }
        .swz-checkbox { width: 18px; height: 18px; border: 1.5px solid var(--swz-border); flex-shrink: 0; display: flex; align-items: center; justify-content: center; transition: all .2s; margin-top: 1px; cursor: pointer; appearance: none; background: #fff; }
        .swz-checkbox:checked { background: var(--swz-black); border-color: var(--swz-black); }
        .swz-checkbox-label { font-size: 13px; font-weight: 500; line-height: 1.5; cursor: pointer; }

        /* Section subheadings */
        .swz-form-section-title { font-size: 11px; font-weight: 700; letter-spacing: .2em; text-transform: uppercase; color: var(--swz-black); padding: 20px 0 14px; border-top: 1px solid var(--swz-border); margin-top: 4px; }
        .swz-form-section-title:first-child { border-top: none; padding-top: 0; }

        /* Shipping methods */
        .swz-shipping-options { display: flex; flex-direction: column; gap: 10px; }
        .swz-shipping-option { border: 1.5px solid var(--swz-border); padding: 16px 18px; cursor: pointer; display: flex; align-items: center; justify-content: space-between; gap: 12px; transition: border-color .2s; }
        .swz-shipping-option.selected { border-color: var(--swz-black); background: var(--swz-off); }
        .swz-shipping-option-left { display: flex; align-items: center; gap: 14px; }
        .swz-shipping-radio { width: 18px; height: 18px; border-radius: 50%; border: 2px solid var(--swz-border); flex-shrink: 0; display: flex; align-items: center; justify-content: center; transition: all .2s; }
        .swz-shipping-option.selected .swz-shipping-radio { border-color: var(--swz-black); }
        .swz-shipping-radio-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--swz-black); opacity: 0; transition: opacity .2s; }
        .swz-shipping-option.selected .swz-shipping-radio-dot { opacity: 1; }
        .swz-shipping-option-name { font-size: 13px; font-weight: 700; }
        .swz-shipping-option-desc { font-size: 12px; font-weight: 300; color: var(--swz-gray); margin-top: 2px; }
        .swz-shipping-option-price { font-size: 14px; font-weight: 700; white-space: nowrap; }
        .swz-shipping-option-price.free { color: var(--swz-green); }

        /* Payment */
        .swz-payment-tabs { display: flex; border-bottom: 1px solid var(--swz-border); margin-bottom: 20px; }
        .swz-payment-tab { padding: 14px 20px; font-size: 12px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; cursor: pointer; background: none; border: none; border-bottom: 2px solid transparent; margin-bottom: -1px; color: var(--swz-gray); transition: all .2s; font-family: 'Manrope', sans-serif; display: flex; align-items: center; gap: 7px; }
        .swz-payment-tab.active { color: var(--swz-black); border-bottom-color: var(--swz-black); }
        .swz-payment-panel { display: none; }
        .swz-payment-panel.active { display: block; }
        .swz-card-field-wrap { position: relative; margin-bottom: 16px; }
        .swz-card-logo { position: absolute; right: 14px; top: 50%; transform: translateY(-50%); display: flex; gap: 4px; }
        .swz-card-logo-badge { height: 20px; background: var(--swz-border); border-radius: 3px; padding: 2px 6px; font-size: 8px; font-weight: 800; display: flex; align-items: center; color: var(--swz-gray); letter-spacing: .04em; }
        .swz-secure-notice { display: flex; align-items: center; gap: 8px; font-size: 11px; font-weight: 500; color: var(--swz-gray); margin-top: 16px; padding: 12px 14px; background: var(--swz-off); border: 1px solid var(--swz-border); }

        /* Order notes */
        .swz-notes-toggle { font-size: 12px; font-weight: 600; letter-spacing: .1em; text-transform: uppercase; color: var(--swz-gray); background: none; border: none; cursor: pointer; text-decoration: underline; margin-bottom: 0; transition: color .2s; display: flex; align-items: center; gap: 6px; font-family: 'Manrope', sans-serif; }
        .swz-notes-toggle:hover { color: var(--swz-black); }
        .swz-notes-area { display: none; margin-top: 14px; }
        .swz-notes-area.open { display: block; }

        /* Place order button */
        .swz-place-order-btn { width: 100%; padding: 20px; background: var(--swz-black); color: #fff; border: none; font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 700; letter-spacing: .22em; text-transform: uppercase; cursor: pointer; transition: all .3s; display: flex; align-items: center; justify-content: center; gap: 10px; margin-top: 0; }
        .swz-place-order-btn:hover { background: #222; letter-spacing: .28em; }
        .swz-place-order-btn:disabled { background: var(--swz-lgray); cursor: not-allowed; letter-spacing: .22em; }
        .swz-terms-note { font-size: 11px; font-weight: 300; color: var(--swz-gray); line-height: 1.65; margin-top: 14px; text-align: center; }
        .swz-terms-note a { color: var(--swz-gray); }

        /* ORDER SUMMARY PANEL (right col) */
        .swz-co-summary { background: #fff; border: 1px solid var(--swz-border); position: sticky; top: 88px; }
        .swz-co-summary-head { padding: 20px 24px; border-bottom: 1px solid var(--swz-border); display: flex; align-items: center; justify-content: space-between; cursor: pointer; }
        .swz-co-summary-title { font-family: 'Playfair Display', serif; font-weight: 800; font-size: 18px; font-style: italic; display: flex; align-items: center; gap: 10px; }
        .swz-co-summary-toggle { font-size: 12px; font-weight: 600; letter-spacing: .1em; text-transform: uppercase; color: var(--swz-gray); display: flex; align-items: center; gap: 6px; }
        .swz-co-summary-total-badge { font-family: 'Cormorant Garamond', serif; font-weight: 700; font-size: 22px; }
        .swz-co-summary-body { padding: 20px 24px; }
        .swz-co-items-list { display: flex; flex-direction: column; gap: 16px; margin-bottom: 20px; }
        .swz-co-item { display: flex; gap: 14px; align-items: center; }
        .swz-co-item-img-wrap { position: relative; flex-shrink: 0; }
        .swz-co-item-img { width: 60px; height: 76px; object-fit: cover; display: block; }
        .swz-co-item-qty { position: absolute; top: -6px; right: -6px; background: var(--swz-black); color: #fff; font-size: 9px; font-weight: 700; width: 18px; height: 18px; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
        .swz-co-item-info { flex: 1; min-width: 0; }
        .swz-co-item-name { font-size: 13px; font-weight: 600; margin-bottom: 3px; line-height: 1.3; }
        .swz-co-item-meta { font-size: 11px; font-weight: 300; color: var(--swz-gray); }
        .swz-co-item-price { font-size: 14px; font-weight: 700; flex-shrink: 0; }

        /* Summary rows */
        .swz-co-summary-sep { border: none; border-top: 1px solid var(--swz-border); margin: 16px 0; }
        .swz-co-row { display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 12px; }
        .swz-co-row:last-of-type { margin-bottom: 0; }
        .swz-co-label { font-size: 12px; font-weight: 600; letter-spacing: .08em; text-transform: uppercase; color: var(--swz-gray); }
        .swz-co-val { font-size: 15px; font-weight: 600; }
        .swz-co-val-green { font-size: 13px; font-weight: 700; color: var(--swz-green); }
        .swz-co-total-row { display: flex; justify-content: space-between; align-items: baseline; padding: 18px 0 0; border-top: 2px solid var(--swz-black); margin-top: 4px; }
        .swz-co-total-label { font-family: 'Playfair Display', serif; font-weight: 800; font-size: 18px; font-style: italic; }
        .swz-co-total-val { font-family: 'Cormorant Garamond', serif; font-weight: 800; font-size: 38px; line-height: 1; }
        .swz-co-tax-note { font-size: 10px; font-weight: 300; color: var(--swz-lgray); text-align: right; margin-top: 2px; }

        /* Collapsible summary on mobile */
        .swz-co-summary-items-wrap { overflow: hidden; transition: max-height .4s ease; }

        /* MOBILE BOTTOM NAV */
        .swz-bottom-nav { display: none; position: fixed; bottom: 0; left: 0; right: 0; z-index: 9000; background: #fff; border-top: 1px solid #e8e8e8; height: 68px; padding: 0 4px; box-shadow: 0 -4px 24px rgba(0,0,0,.08); }
        @media (max-width:767px) { .swz-bottom-nav { display: flex; align-items: stretch; } }
        .swz-bnav-item { flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 4px; background: none; border: none; cursor: pointer; text-decoration: none; color: var(--swz-gray); transition: color .2s; padding: 8px 4px; }
        .swz-bnav-item:hover, .swz-bnav-item.active { color: var(--swz-black); }
        .swz-bnav-label { font-size: 9px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; }
        .swz-bnav-icon-bg { background: var(--swz-black); border-radius: 50%; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 14px rgba(0,0,0,.25); }
        .swz-bnav-cart-wrap { position: relative; display: flex; align-items: center; justify-content: center; }
        .swz-bnav-badge { position: absolute; top:8px; right:12px; background: var(--swz-black); color: #fff; font-size: 8px; font-weight: 700; min-width: 15px; height: 15px; border-radius: 999px; display: flex; align-items: center; justify-content: center; padding: 0 3px; }

        /* MOBILE STICKY PLACE ORDER */
        .swz-mobile-place-order { display: none; }
        @media (max-width:1023px) { .swz-mobile-place-order { display: flex; position: fixed; bottom: 68px; left: 0; right: 0; z-index: 8999; } }
        .swz-mob-order-btn { flex: 1; padding: 17px; background: var(--swz-black); color: #fff; border: none; font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 700; letter-spacing: .2em; text-transform: uppercase; cursor: pointer; transition: background .2s; }
        .swz-mob-order-btn:hover { background: #222; }

        /* ORDER SUCCESS MODAL */
        .swz-success-overlay { position: fixed; inset: 0; background: rgba(0,0,0,.6); backdrop-filter: blur(6px); z-index: 99999; display: flex; align-items: center; justify-content: center; opacity: 0; pointer-events: none; transition: opacity .4s; }
        .swz-success-overlay.open { opacity: 1; pointer-events: auto; }
        .swz-success-modal { background: #fff; max-width: 520px; width: 90%; padding: 56px 48px; text-align: center; transform: translateY(30px); transition: transform .4s; }
        .swz-success-overlay.open .swz-success-modal { transform: none; }
        .swz-success-icon { width: 72px; height: 72px; border-radius: 50%; background: var(--swz-green); display: flex; align-items: center; justify-content: center; margin: 0 auto 28px; }
        .swz-success-title { font-family: 'Cormorant Garamond', serif; font-weight: 800; font-size: 42px; font-style: italic; margin-bottom: 12px; }
        .swz-success-sub { font-size: 14px; font-weight: 300; color: var(--swz-gray); line-height: 1.7; margin-bottom: 10px; }
        .swz-success-order-num { font-size: 12px; font-weight: 700; letter-spacing: .2em; text-transform: uppercase; color: var(--swz-lgray); margin-bottom: 32px; }
        .swz-success-cta { display: inline-block; padding: 15px 44px; background: var(--swz-black); color: #fff; font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 700; letter-spacing: .2em; text-transform: uppercase; text-decoration: none; transition: background .2s; }
        .swz-success-cta:hover { background: #333; }

        /* Animations */
        @keyframes swzFadeUp { from { opacity:0; transform:translateY(16px); } to { opacity:1; transform:none; } }
        .swz-co-panel { animation: swzFadeUp .4s ease both; }
        .swz-co-panel:nth-child(2) { animation-delay: .08s; }
        .swz-co-panel:nth-child(3) { animation-delay: .16s; }
        .swz-co-panel:nth-child(4) { animation-delay: .24s; }

        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #333; }

        /* Input autofill fix */
        input:-webkit-autofill { -webkit-box-shadow: 0 0 0 30px white inset !important; }
    </style>
</head>
<body>

<!-- HEADER -->
<header class="swz-checkout-header">
    <a href="index.html" class="swz-logo">Swizer</a>
    <div class="swz-checkout-secure">
        <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        Secure Checkout
    </div>
</header>

<!-- PROGRESS STEPS -->
<div class="swz-steps-bar">
    <div class="swz-steps-inner">
        <div class="swz-step done" id="swzStep1">
            <div class="swz-step-num">
                <svg width="10" height="10" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="swz-step-label">Bag</span>
        </div>
        <div class="swz-step-sep"></div>
        <div class="swz-step active" id="swzStep2">
            <div class="swz-step-num">2</div>
            <span class="swz-step-label">Information</span>
        </div>
        <div class="swz-step-sep"></div>
        <div class="swz-step" id="swzStep3">
            <div class="swz-step-num">3</div>
            <span class="swz-step-label">Shipping</span>
        </div>
        <div class="swz-step-sep"></div>
        <div class="swz-step" id="swzStep4">
            <div class="swz-step-num">4</div>
            <span class="swz-step-label">Payment</span>
        </div>
        <div class="swz-step-sep"></div>
        <div class="swz-step" id="swzStep5">
            <div class="swz-step-num">5</div>
            <span class="swz-step-label">Confirm</span>
        </div>
    </div>
</div>

<!-- MAIN -->
<div class="swz-checkout-main">

    <!-- LEFT COL -->
    <div>

        <!-- EXPRESS CHECKOUT -->
        <div class="swz-co-panel" style="margin-bottom:20px">
            <div class="swz-co-panel-body">
                <div class="swz-express-checkout">
                    <p class="swz-express-title">Express Checkout</p>
                    <div class="swz-express-btns">
                        <button class="swz-express-btn swz-express-btn--apple" onclick="swzShowSuccess()">
                            <svg width="18" height="18" fill="white" viewBox="0 0 24 24"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                            Apple Pay
                        </button>
                        <button class="swz-express-btn swz-express-btn--paypal" onclick="swzShowSuccess()">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M7.5 19.5H4.5L6 10.5H9C11.5 10.5 13.5 12 13 14.5C12.5 17 10.5 19.5 7.5 19.5Z" fill="#003087"/><path d="M10 4.5H13C15.5 4.5 17.5 6 17 8.5C16.5 11 14.5 13.5 11.5 13.5H8.5L10 4.5Z" fill="#009CDE"/></svg>
                            PayPal
                        </button>
                    </div>
                </div>
                <div class="swz-divider-or">or fill in details below</div>
            </div>
        </div>

        <!-- CONTACT INFORMATION -->
        <div class="swz-co-panel" style="margin-bottom:20px">
            <div class="swz-co-panel-head">
                <h2 class="swz-co-panel-title">
                    <span class="swz-co-panel-num">1</span>
                    Contact Information
                </h2>
            </div>
            <div class="swz-co-panel-body">
                <div class="swz-form-grid">
                    <div class="swz-form-grid swz-form-grid-2">
                        <div class="swz-field">
                            <label class="swz-field-required">First Name</label>
                            <input type="text" class="swz-input" id="swzFirstName" placeholder="Jane" autocomplete="given-name">
                            <span class="swz-field-error" id="swzFirstNameErr">Please enter your first name</span>
                        </div>
                        <div class="swz-field">
                            <label class="swz-field-required">Last Name</label>
                            <input type="text" class="swz-input" id="swzLastName" placeholder="Doe" autocomplete="family-name">
                            <span class="swz-field-error" id="swzLastNameErr">Please enter your last name</span>
                        </div>
                    </div>
                    <div class="swz-field">
                        <label class="swz-field-required">Email Address</label>
                        <div class="swz-input-row">
                            <input type="email" class="swz-input" id="swzEmail" placeholder="jane@example.com" autocomplete="email">
                        </div>
                        <span class="swz-field-error" id="swzEmailErr">Please enter a valid email address</span>
                    </div>
                    <div class="swz-field">
                        <label>Phone Number <span style="font-size:10px;font-weight:300;text-transform:none;letter-spacing:0;color:var(--swz-lgray)">(optional, for delivery updates)</span></label>
                        <input type="tel" class="swz-input" id="swzPhone" placeholder="+1 (555) 000-0000" autocomplete="tel">
                    </div>
                    <label class="swz-checkbox-row">
                        <input type="checkbox" class="swz-checkbox" checked>
                        <span class="swz-checkbox-label">Subscribe for early access, exclusive offers & new arrivals. Unsubscribe at any time.</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- SHIPPING ADDRESS -->
        <div class="swz-co-panel" style="margin-bottom:20px">
            <div class="swz-co-panel-head">
                <h2 class="swz-co-panel-title">
                    <span class="swz-co-panel-num">2</span>
                    Shipping Address
                </h2>
            </div>
            <div class="swz-co-panel-body">
                <div class="swz-form-grid">
                    <div class="swz-field">
                        <label class="swz-field-required">Address Line 1</label>
                        <input type="text" class="swz-input" id="swzAddr1" placeholder="123 Main Street" autocomplete="address-line1">
                        <span class="swz-field-error" id="swzAddr1Err">Please enter your address</span>
                    </div>
                    <div class="swz-field">
                        <label>Address Line 2 <span style="font-size:10px;font-weight:300;text-transform:none;letter-spacing:0;color:var(--swz-lgray)">(optional)</span></label>
                        <input type="text" class="swz-input" placeholder="Apt, suite, unit, etc." autocomplete="address-line2">
                    </div>
                    <div class="swz-form-grid swz-form-grid-2">
                        <div class="swz-field">
                            <label class="swz-field-required">City</label>
                            <input type="text" class="swz-input" id="swzCity" placeholder="New York" autocomplete="address-level2">
                            <span class="swz-field-error" id="swzCityErr">Please enter your city</span>
                        </div>
                        <div class="swz-field">
                            <label class="swz-field-required">State / Province</label>
                            <div class="swz-select-wrap">
                                <select class="swz-input swz-select" id="swzState">
                                    <option value="">Select state…</option>
                                    <option>Alabama</option><option>Alaska</option><option>Arizona</option>
                                    <option>California</option><option>Colorado</option><option>Connecticut</option>
                                    <option>Florida</option><option>Georgia</option><option>Illinois</option>
                                    <option>New York</option><option>Oregon</option><option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="swz-form-grid swz-form-grid-2">
                        <div class="swz-field">
                            <label class="swz-field-required">ZIP / Postal Code</label>
                            <input type="text" class="swz-input" id="swzZip" placeholder="10001" autocomplete="postal-code">
                            <span class="swz-field-error" id="swzZipErr">Please enter a valid ZIP code</span>
                        </div>
                        <div class="swz-field">
                            <label class="swz-field-required">Country</label>
                            <div class="swz-select-wrap">
                                <select class="swz-input swz-select">
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>Canada</option>
                                    <option>Australia</option>
                                    <option>Germany</option>
                                    <option>France</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SHIPPING METHOD -->
        <div class="swz-co-panel" style="margin-bottom:20px">
            <div class="swz-co-panel-head">
                <h2 class="swz-co-panel-title">
                    <span class="swz-co-panel-num">3</span>
                    Shipping Method
                </h2>
            </div>
            <div class="swz-co-panel-body">
                <div class="swz-shipping-options">
                    <div class="swz-shipping-option selected" onclick="swzSelectShipping(this, 0, 'Free Standard')" data-price="0">
                        <div class="swz-shipping-option-left">
                            <div class="swz-shipping-radio"><div class="swz-shipping-radio-dot"></div></div>
                            <div>
                                <div class="swz-shipping-option-name">Standard Delivery</div>
                                <div class="swz-shipping-option-desc">3–5 business days &nbsp;·&nbsp; Tracked</div>
                            </div>
                        </div>
                        <div class="swz-shipping-option-price free">FREE</div>
                    </div>
                    <div class="swz-shipping-option" onclick="swzSelectShipping(this, 9.99, 'Express')" data-price="9.99">
                        <div class="swz-shipping-option-left">
                            <div class="swz-shipping-radio"><div class="swz-shipping-radio-dot"></div></div>
                            <div>
                                <div class="swz-shipping-option-name">Express Delivery</div>
                                <div class="swz-shipping-option-desc">Next business day &nbsp;·&nbsp; Tracked & Signed</div>
                            </div>
                        </div>
                        <div class="swz-shipping-option-price">$9.99</div>
                    </div>
                    <div class="swz-shipping-option" onclick="swzSelectShipping(this, 19.99, 'Same-Day')" data-price="19.99">
                        <div class="swz-shipping-option-left">
                            <div class="swz-shipping-radio"><div class="swz-shipping-radio-dot"></div></div>
                            <div>
                                <div class="swz-shipping-option-name">Same-Day Delivery</div>
                                <div class="swz-shipping-option-desc">Order by 12pm &nbsp;·&nbsp; Select cities only</div>
                            </div>
                        </div>
                        <div class="swz-shipping-option-price">$19.99</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PAYMENT -->
        <div class="swz-co-panel" style="margin-bottom:20px">
            <div class="swz-co-panel-head">
                <h2 class="swz-co-panel-title">
                    <span class="swz-co-panel-num">4</span>
                    Payment
                </h2>
            </div>
            <div class="swz-co-panel-body">
                <div class="swz-payment-tabs">
                    <button class="swz-payment-tab active" onclick="swzSwitchPayment('card', this)">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="1" y="4" width="22" height="16" rx="2"/><path d="M1 10h22"/></svg>
                        Credit Card
                    </button>
                    <button class="swz-payment-tab" onclick="swzSwitchPayment('paypal', this)">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M7.5 19.5H4.5L6 10.5H9C11.5 10.5 13.5 12 13 14.5C12.5 17 10.5 19.5 7.5 19.5Z" fill="#003087"/></svg>
                        PayPal
                    </button>
                    <button class="swz-payment-tab" onclick="swzSwitchPayment('apple', this)">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                        Apple Pay
                    </button>
                </div>

                <!-- Card Panel -->
                <div class="swz-payment-panel active" id="swzPayCard">
                    <div class="swz-form-grid">
                        <div class="swz-field">
                            <label class="swz-field-required">Cardholder Name</label>
                            <input type="text" class="swz-input" id="swzCardName" placeholder="Jane Doe" autocomplete="cc-name">
                            <span class="swz-field-error" id="swzCardNameErr">Please enter the cardholder name</span>
                        </div>
                        <div class="swz-field">
                            <label class="swz-field-required">Card Number</label>
                            <div class="swz-card-field-wrap">
                                <input type="text" class="swz-input" id="swzCardNum" placeholder="1234 5678 9012 3456" maxlength="19" autocomplete="cc-number" oninput="swzFormatCard(this)">
                                <div class="swz-card-logo">
                                    <span class="swz-card-logo-badge">Visa</span>
                                    <span class="swz-card-logo-badge">MC</span>
                                </div>
                            </div>
                            <span class="swz-field-error" id="swzCardNumErr">Please enter a valid card number</span>
                        </div>
                        <div class="swz-form-grid swz-form-grid-2">
                            <div class="swz-field">
                                <label class="swz-field-required">Expiry Date</label>
                                <input type="text" class="swz-input" id="swzCardExpiry" placeholder="MM / YY" maxlength="7" autocomplete="cc-exp" oninput="swzFormatExpiry(this)">
                                <span class="swz-field-error" id="swzCardExpiryErr">Invalid date</span>
                            </div>
                            <div class="swz-field">
                                <label class="swz-field-required">CVV / CVC</label>
                                <div class="swz-input-row">
                                    <input type="text" class="swz-input" id="swzCardCvv" placeholder="123" maxlength="4" autocomplete="cc-csc">
                                    <span class="swz-input-icon">
                                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                    </span>
                                </div>
                                <span class="swz-field-error" id="swzCardCvvErr">Invalid CVV</span>
                            </div>
                        </div>
                        <label class="swz-checkbox-row">
                            <input type="checkbox" class="swz-checkbox">
                            <span class="swz-checkbox-label">Save card for future purchases (encrypted & secure)</span>
                        </label>
                    </div>
                    <div class="swz-secure-notice">
                        <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        Your payment information is encrypted and never stored on our servers.
                    </div>
                </div>

                <!-- PayPal Panel -->
                <div class="swz-payment-panel" id="swzPayPaypal">
                    <p style="font-size:14px;font-weight:300;color:var(--swz-gray);line-height:1.7;margin-bottom:16px">You will be redirected to PayPal to complete your payment securely.</p>
                    <button class="swz-express-btn swz-express-btn--paypal" style="width:100%;height:52px;font-size:14px" onclick="swzShowSuccess()">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M7.5 19.5H4.5L6 10.5H9C11.5 10.5 13.5 12 13 14.5C12.5 17 10.5 19.5 7.5 19.5Z" fill="#003087"/><path d="M10 4.5H13C15.5 4.5 17.5 6 17 8.5C16.5 11 14.5 13.5 11.5 13.5H8.5L10 4.5Z" fill="#009CDE"/></svg>
                        Continue with PayPal
                    </button>
                </div>

                <!-- Apple Pay Panel -->
                <div class="swz-payment-panel" id="swzPayApple">
                    <p style="font-size:14px;font-weight:300;color:var(--swz-gray);line-height:1.7;margin-bottom:16px">Complete your purchase quickly and securely with Apple Pay.</p>
                    <button class="swz-express-btn swz-express-btn--apple" style="width:100%;height:52px;font-size:14px" onclick="swzShowSuccess()">
                        <svg width="20" height="20" fill="white" viewBox="0 0 24 24"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                        Pay with Apple Pay
                    </button>
                </div>
            </div>
        </div>

        <!-- ORDER NOTES -->
        <div class="swz-co-panel" style="margin-bottom:20px">
            <div class="swz-co-panel-body">
                <button class="swz-notes-toggle" onclick="this.nextElementSibling.classList.toggle('open')">
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"/></svg>
                    Add order notes or gift message (optional)
                </button>
                <div class="swz-notes-area">
                    <textarea class="swz-input swz-textarea" placeholder="Any special instructions, gift messages, or delivery notes…"></textarea>
                </div>
            </div>
        </div>

        <!-- PLACE ORDER (desktop) -->
        <div class="swz-co-panel">
            <div class="swz-co-panel-body">
                <button class="swz-place-order-btn" onclick="swzPlaceOrder()">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    Place Order — <span id="swzPlaceOrderTotal">$521.64</span>
                </button>
                <p class="swz-terms-note">
                    By placing your order you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>. Your personal data will be processed in accordance with our privacy policy.
                </p>
            </div>
        </div>

    </div><!-- end left col -->

    <!-- RIGHT: ORDER SUMMARY -->
    <div>
        <div class="swz-co-summary">
            <div class="swz-co-summary-head" onclick="swzToggleSummary()">
                <div class="swz-co-summary-title">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                    Order Summary
                </div>
                <div>
                    <div class="swz-co-summary-total-badge" id="swzSummaryBadge">$521.64</div>
                    <div class="swz-co-summary-toggle" style="font-size:10px;margin-top:2px">
                        <span id="swzSummaryToggleLabel">Hide</span>
                        <svg id="swzSummaryArrow" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 15l7-7 7 7"/></svg>
                    </div>
                </div>
            </div>

            <div class="swz-co-summary-items-wrap" id="swzSummaryItemsWrap" style="max-height:9999px">
                <div class="swz-co-summary-body">
                    <!-- Items -->
                    <div class="swz-co-items-list" id="swzCoItemsList"></div>
                    <hr class="swz-co-summary-sep">
                    <!-- Rows -->
                    <div class="swz-co-row">
                        <span class="swz-co-label">Subtotal</span>
                        <span class="swz-co-val" id="swzCoSubtotal">$483.00</span>
                    </div>
                    <div class="swz-co-row" id="swzCoDiscountRow" style="display:none">
                        <span class="swz-co-label">Discount</span>
                        <span class="swz-co-val" style="color:var(--swz-green)" id="swzCoDiscount">-$0.00</span>
                    </div>
                    <div class="swz-co-row">
                        <span class="swz-co-label">Shipping</span>
                        <span class="swz-co-val-green" id="swzCoShipping">FREE</span>
                    </div>
                    <div class="swz-co-row">
                        <span class="swz-co-label">Estimated Tax</span>
                        <span class="swz-co-val" id="swzCoTax">$38.64</span>
                    </div>
                    <hr class="swz-co-summary-sep">
                    <div class="swz-co-total-row">
                        <span class="swz-co-total-label">Total</span>
                        <span class="swz-co-total-val" id="swzCoTotal">$521.64</span>
                    </div>
                    <p class="swz-co-tax-note">Incl. all taxes &amp; duties</p>

                    <!-- Trust -->
                    <hr class="swz-co-summary-sep">
                    <div style="display:flex;flex-direction:column;gap:8px">
                        <div style="display:flex;align-items:center;gap:8px;font-size:11px;font-weight:500;color:var(--swz-gray)">
                            <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            256-bit SSL encrypted checkout
                        </div>
                        <div style="display:flex;align-items:center;gap:8px;font-size:11px;font-weight:500;color:var(--swz-gray)">
                            <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                            Free returns within 30 days
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- end checkout main -->

<!-- MOBILE BOTTOM NAV -->
<nav class="swz-bottom-nav">
    <a href="index.html" class="swz-bnav-item">
        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
        <span class="swz-bnav-label">Home</span>
    </a>
    <a href="cart.html" class="swz-bnav-item">
        <div class="swz-bnav-cart-wrap">
            <div class="swz-bnav-icon-bg">
                <svg width="20" height="20" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
            </div>
            <span class="swz-bnav-badge">3</span>
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

<!-- MOBILE STICKY PLACE ORDER -->
<div class="swz-mobile-place-order">
    <button class="swz-mob-order-btn" onclick="swzPlaceOrder()">Place Order — <span id="swzMobTotal">$521.64</span></button>
</div>

<!-- SUCCESS MODAL -->
<div class="swz-success-overlay" id="swzSuccessOverlay">
    <div class="swz-success-modal">
        <div class="swz-success-icon">
            <svg width="32" height="32" fill="none" stroke="white" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
        </div>
        <h2 class="swz-success-title">Order Confirmed!</h2>
        <p class="swz-success-sub">Thank you for your purchase. Your order has been received and will be dispatched within 1–2 business days.</p>
        <p class="swz-success-order-num">Order #SWZ-2026-<span id="swzOrderNum">00847</span></p>
        <p style="font-size:13px;font-weight:300;color:var(--swz-gray);margin-bottom:28px">A confirmation email has been sent to your inbox with tracking details.</p>
        <a href="index.html" class="swz-success-cta">Continue Shopping</a>
    </div>
</div>

<script>
/* ═══════════════════════════════════════════
   SWIZER CHECKOUT PAGE JS
═══════════════════════════════════════════ */

const SWZ_CART = [
    { id:1, name:'Premium Parka', cat:'Outerwear', price:129, qty:1, size:'L', color:'Deep Black', img:'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=200' },
    { id:2, name:'Cashmere Crewneck', cat:'Knitwear', price:165, qty:1, size:'M', color:'Ivory', img:'https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?q=80&w=200' },
    { id:3, name:'Heritage Denim', cat:'Denim', price:135, qty:2, size:'32', color:'Raw Indigo', img:'https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=200' },
];

let swzShippingCost = 0;

// Render order summary items
function swzRenderSummaryItems() {
    const list = document.getElementById('swzCoItemsList');
    list.innerHTML = SWZ_CART.map(item => `
        <div class="swz-co-item">
            <div class="swz-co-item-img-wrap">
                <img src="${item.img}" class="swz-co-item-img" alt="${item.name}">
                <span class="swz-co-item-qty">${item.qty}</span>
            </div>
            <div class="swz-co-item-info">
                <p class="swz-co-item-name">${item.name}</p>
                <p class="swz-co-item-meta">${item.size} · ${item.color}</p>
            </div>
            <span class="swz-co-item-price">$${(item.price * item.qty).toFixed(2)}</span>
        </div>
    `).join('');
    swzUpdateTotals();
}

function swzUpdateTotals() {
    const subtotal = SWZ_CART.reduce((s, i) => s + i.price * i.qty, 0);
    const tax = subtotal * 0.08;
    const total = subtotal + swzShippingCost + tax;

    document.getElementById('swzCoSubtotal').textContent = '$' + subtotal.toFixed(2);
    document.getElementById('swzCoTax').textContent = '$' + tax.toFixed(2);
    document.getElementById('swzCoTotal').textContent = '$' + total.toFixed(2);
    document.getElementById('swzSummaryBadge').textContent = '$' + total.toFixed(2);
    document.getElementById('swzPlaceOrderTotal').textContent = '$' + total.toFixed(2);
    document.getElementById('swzMobTotal').textContent = '$' + total.toFixed(2);

    if (swzShippingCost === 0) {
        document.getElementById('swzCoShipping').textContent = 'FREE';
        document.getElementById('swzCoShipping').style.color = 'var(--swz-green)';
    } else {
        document.getElementById('swzCoShipping').textContent = '$' + swzShippingCost.toFixed(2);
        document.getElementById('swzCoShipping').style.color = 'var(--swz-black)';
    }
}

// Shipping options
function swzSelectShipping(el, price, label) {
    document.querySelectorAll('.swz-shipping-option').forEach(o => o.classList.remove('selected'));
    el.classList.add('selected');
    swzShippingCost = price;
    swzUpdateTotals();
}

// Payment tabs
function swzSwitchPayment(tab, btn) {
    document.querySelectorAll('.swz-payment-tab').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.swz-payment-panel').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById('swzPay' + tab.charAt(0).toUpperCase() + tab.slice(1)).classList.add('active');
}

// Summary toggle (mobile)
let swzSummaryOpen = true;
function swzToggleSummary() {
    swzSummaryOpen = !swzSummaryOpen;
    const wrap = document.getElementById('swzSummaryItemsWrap');
    const arrow = document.getElementById('swzSummaryArrow');
    const label = document.getElementById('swzSummaryToggleLabel');
    wrap.style.maxHeight = swzSummaryOpen ? '9999px' : '0';
    wrap.style.overflow = swzSummaryOpen ? '' : 'hidden';
    arrow.style.transform = swzSummaryOpen ? 'none' : 'rotate(180deg)';
    label.textContent = swzSummaryOpen ? 'Hide' : 'Show';
}

// Card formatting
function swzFormatCard(input) {
    let v = input.value.replace(/\D/g, '').substring(0, 16);
    input.value = v.replace(/(.{4})/g, '$1 ').trim();
}
function swzFormatExpiry(input) {
    let v = input.value.replace(/\D/g, '').substring(0, 4);
    if (v.length >= 2) v = v.substring(0, 2) + ' / ' + v.substring(2);
    input.value = v;
}

// Form validation
function swzValidate() {
    let valid = true;
    const fields = [
        { id:'swzFirstName', errId:'swzFirstNameErr', check: v => v.trim().length >= 2 },
        { id:'swzLastName', errId:'swzLastNameErr', check: v => v.trim().length >= 2 },
        { id:'swzEmail', errId:'swzEmailErr', check: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v) },
        { id:'swzAddr1', errId:'swzAddr1Err', check: v => v.trim().length >= 5 },
        { id:'swzCity', errId:'swzCityErr', check: v => v.trim().length >= 2 },
        { id:'swzZip', errId:'swzZipErr', check: v => v.trim().length >= 3 },
        { id:'swzCardName', errId:'swzCardNameErr', check: v => v.trim().length >= 3 },
        { id:'swzCardNum', errId:'swzCardNumErr', check: v => v.replace(/\s/g,'').length === 16 },
        { id:'swzCardExpiry', errId:'swzCardExpiryErr', check: v => v.replace(/\s/g,'').length === 5 },
        { id:'swzCardCvv', errId:'swzCardCvvErr', check: v => v.length >= 3 },
    ];

    // Only validate card fields if card tab is active
    const cardActive = document.getElementById('swzPayCard').classList.contains('active');

    fields.forEach(f => {
        if (!cardActive && ['swzCardName','swzCardNum','swzCardExpiry','swzCardCvv'].includes(f.id)) return;
        const input = document.getElementById(f.id);
        const errEl = document.getElementById(f.errId);
        if (!f.check(input.value)) {
            input.classList.add('error');
            errEl.classList.add('show');
            valid = false;
        } else {
            input.classList.remove('error');
            errEl.classList.remove('show');
        }
    });
    return valid;
}

// Clear errors on input
document.querySelectorAll('.swz-input').forEach(input => {
    input.addEventListener('input', function() {
        this.classList.remove('error');
        const errId = this.id + 'Err';
        const errEl = document.getElementById(errId);
        if (errEl) errEl.classList.remove('show');
    });
});

function swzPlaceOrder() {
    if (!swzValidate()) {
        // scroll to first error
        const firstErr = document.querySelector('.swz-input.error');
        if (firstErr) firstErr.scrollIntoView({ behavior:'smooth', block:'center' });
        return;
    }
    swzShowSuccess();
}

function swzShowSuccess() {
    // Generate random order number
    const num = Math.floor(Math.random() * 90000) + 10000;
    document.getElementById('swzOrderNum').textContent = num;
    document.getElementById('swzSuccessOverlay').classList.add('open');
    document.body.style.overflow = 'hidden';
    // Progress steps
    document.getElementById('swzStep2').classList.remove('active');
    document.getElementById('swzStep2').classList.add('done');
    document.getElementById('swzStep2').querySelector('.swz-step-num').innerHTML = '<svg width="10" height="10" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>';
    document.getElementById('swzStep3').classList.add('done');
    document.getElementById('swzStep3').querySelector('.swz-step-num').innerHTML = '<svg width="10" height="10" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>';
    document.getElementById('swzStep4').classList.add('done');
    document.getElementById('swzStep4').querySelector('.swz-step-num').innerHTML = '<svg width="10" height="10" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>';
    document.getElementById('swzStep5').classList.add('active');
    document.getElementById('swzStep5').querySelector('.swz-step-num').textContent = '✓';
}

// Init
swzRenderSummaryItems();
</script>
</body>
</html>