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
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php include 'includes/header.php'; ?>


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

    <?php require 'includes/footer.php'; ?>

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
            let cur = 0,
                n = slides.length;

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
            btn.onclick = e => {
                e.stopPropagation();
                drop.classList.toggle('swz-open');
            };
            document.addEventListener('click', () => drop.classList.remove('swz-open'));
        })();

        // ── TESTIMONIALS ─────────────────────────────
        (function () {
            const slides = document.querySelectorAll('.swz-t-slide');
            const dots = document.querySelectorAll('.swz-t-dot');
            let cur = 0,
                n = slides.length;

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
                navigation: {
                    prevEl: prev,
                    nextEl: next
                },
                breakpoints: {
                    480: {
                        slidesPerView: 1.8,
                        spaceBetween: 14
                    },
                    640: {
                        slidesPerView: 2.2,
                        spaceBetween: 18
                    },
                    768: {
                        slidesPerView: 2.8,
                        spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 3.5,
                        spaceBetween: 24
                    },
                    1280: {
                        slidesPerView: 4,
                        spaceBetween: 28
                    }
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
            if (e.key === 'Escape') {
                swzCloseCart();
                swzCloseQV();
            }
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
            let total = 0,
                count = 0;
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