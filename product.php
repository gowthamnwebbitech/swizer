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
    <link rel="stylesheet" href="assets/css/product.css">
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

    <?php require 'includes/header.php'; ?>


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


    <?php require 'includes/footer.php'; ?>
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