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