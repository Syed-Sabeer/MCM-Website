@extends('layouts.frontend.app.master')

@section('title', 'Metro Cotton Mill - Home')

@section('css')
@endsection

@section('content')



    <section class="po-products-section">
      <div class="po-container">
        <!-- Section Header -->
        <div class="po-section-header wow animate__animated animate__fadeInUp">
          <div class="po-section-subtitle">Premium Quality</div>
          <h2 class="po-section-title">Explore Our Textile Collection</h2>
          <p class="po-section-description">
            Discover premium quality textile products crafted with excellence.
            From professional workwear to home textiles.
          </p>
        </div>

        <!-- Filter Section -->
        <div
          class="po-filter-wrapper wow animate__animated animate__fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="po-filter-container">
            <div class="po-filter-group">
              <label class="po-filter-label">Sort By</label>
              <select class="po-filter-select" id="poSortFilter">
                <option value="featured">Featured</option>
                <option value="newest">Newest First</option>
                <option value="price-low">Price: Low to High</option>
                <option value="price-high">Price: High to Low</option>
                <option value="rating">Top Rated</option>
              </select>
            </div>

            <div class="po-filter-group">
              <label class="po-filter-label">Price Range</label>
              <select class="po-filter-select" id="poPriceFilter">
                <option value="all">All Prices</option>
                <option value="0-50">Under $50</option>
                <option value="50-100">$50 - $100</option>
                <option value="100-200">$100 - $200</option>
                <option value="200+">$200+</option>
              </select>
            </div>

            <div class="po-filter-group">
              <label class="po-filter-label">Material</label>
              <select class="po-filter-select" id="poMaterialFilter">
                <option value="all">All Materials</option>
                <option value="cotton">Cotton</option>
                <option value="polyester">Polyester</option>
                <option value="canvas">Canvas</option>
                <option value="denim">Denim</option>
                <option value="blend">Blend</option>
              </select>
            </div>

            <div class="po-filter-actions">
              <button class="po-filter-btn po-apply-btn">
                <i class="fas fa-filter"></i> Apply
              </button>
              <button class="po-filter-btn po-reset-btn">
                <i class="fas fa-redo"></i> Reset
              </button>
            </div>
          </div>
        </div>

        <!-- Category Tabs -->
        <div
          class="po-category-tabs wow animate__animated animate__fadeInUp"
          data-wow-delay="0.2s"
        >
          <button class="po-category-tab po-active" data-category="all">
            <i class="fas fa-th"></i> All Products
          </button>
          <button class="po-category-tab" data-category="bags">
            <i class="fas fa-bag-shopping"></i> Bags
          </button>
          <button class="po-category-tab" data-category="aprons">
            <i class="fas fa-utensils"></i> Aprons
          </button>
          <button class="po-category-tab" data-category="scrubs">
            <i class="fas fa-user-nurse"></i> Scrubs
          </button>
          <button class="po-category-tab" data-category="home">
            <i class="fas fa-home"></i> Home Textile
          </button>
          <button class="po-category-tab" data-category="uniform">
            <i class="fas fa-vest"></i> Uniform
          </button>
          <button class="po-category-tab" data-category="bandanas">
            <i class="fas fa-bandage"></i> Bandanas
          </button>
        </div>

        <!-- Products Grid -->
        <div class="po-products-grid">
          <!-- Bags -->
          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.1s"
            data-category="bags"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://www.metro-textile.com/ProductImages/detail_MQTB.jpg"
                alt="Canvas Tote Bag"
                class="po-product-image"
              />
              <span class="po-product-badge po-new">New</span>
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Bags</div>
              <h3 class="po-product-title">Cotton Tote Bag</h3>
              <div class="po-product-rating">
                <!-- <div class="po-stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div> -->
                <!-- <span class="po-rating-count">(248)</span> -->
                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">MQTB</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$1.75</span>
                  <span class="po-price-original">$2.55</span>
                </div> -->
                <a href="{{ route('product.detail', ['slug' => 'cotton-tote-bag']) }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.15s"
            data-category="bags"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=400&h=500&fit=crop"
                alt="Leather Backpack"
                class="po-product-image"
              />
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Bags</div>
              <h3 class="po-product-title">Professional Leather Backpack</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">MODB</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <!-- Aprons -->
          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.2s"
            data-category="aprons"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://www.metro-textile.com/ProductImages/detail_TB600.jpg"
                alt="Chef Apron"
                class="po-product-image"
              />
              <span class="po-product-badge po-sale">Sale</span>
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Bags</div>
              <h3 class="po-product-title">Canvas Jumbo Tote w/ Bottom Gusset</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">MQTB</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.25s"
            data-category="aprons"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://www.metro-textile.com/ProductImages/detail_TB800.jpg"
                alt="Denim Apron"
                class="po-product-image"
              />
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Bags</div>
              <h3 class="po-product-title">Canvas Promotional Tote Bag</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">MQTB</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <!-- Scrubs -->
          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.3s"
            data-category="scrubs"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=400&h=500&fit=crop"
                alt="Medical Scrubs"
                class="po-product-image"
              />
              <span class="po-product-badge po-new">New</span>
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Scrubs</div>
              <h3 class="po-product-title">Premium Medical Scrubs Set</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">MBLQ</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.35s"
            data-category="scrubs"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=500&fit=crop"
                alt="Surgical Scrubs"
                class="po-product-image"
              />
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Scrubs</div>
              <h3 class="po-product-title">Surgical Team Scrubs</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">MJAB</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <!-- Home Textile -->
          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.4s"
            data-category="home"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?w=400&h=500&fit=crop"
                alt="Cotton Bedding"
                class="po-product-image"
              />
              <span class="po-product-badge po-sale">Sale</span>
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Home Textile</div>
              <h3 class="po-product-title">Luxury Cotton Bedding Set</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">AXYB</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.45s"
            data-category="home"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://images.unsplash.com/photo-1584100936595-c0654b55a2e2?w=400&h=500&fit=crop"
                alt="Kitchen Towels"
                class="po-product-image"
              />
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Home Textile</div>
              <h3 class="po-product-title">Premium Kitchen Towel Set</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">MOPB</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <!-- Uniform & Workwear -->
          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.5s"
            data-category="uniform"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://images.unsplash.com/photo-1594938291221-94f18cbb5660?w=400&h=500&fit=crop"
                alt="Work Uniform"
                class="po-product-image"
              />
              <span class="po-product-badge po-new">New</span>
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Uniform</div>
              <h3 class="po-product-title">Professional Work Uniform</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">MKAB</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.55s"
            data-category="uniform"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://images.unsplash.com/photo-1621342050805-85f1f6c7a2b4?w=400&h=500&fit=crop"
                alt="Safety Vest"
                class="po-product-image"
              />
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Workwear</div>
              <h3 class="po-product-title">High-Visibility Safety Vest</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">HDZB</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
               <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <!-- Bandanas -->
          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.6s"
            data-category="bandanas"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://images.unsplash.com/photo-1596755389378-c31d21fd1273?w=400&h=500&fit=crop"
                alt="Cotton Bandana"
                class="po-product-image"
              />
              <span class="po-product-badge po-sale">Sale</span>
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Bandanas</div>
              <h3 class="po-product-title">Classic Cotton Bandana Pack</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">POTB</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
               <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.65s"
            data-category="bandanas"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?w=400&h=500&fit=crop"
                alt="Designer Bandana"
                class="po-product-image"
              />
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Bandanas</div>
              <h3 class="po-product-title">Designer Pattern Bandana</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">CDTI</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
               <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <!-- Additional Products Row 2 -->
          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.1s"
            data-category="bags"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&h=500&fit=crop"
                alt="Gym Bag"
                class="po-product-image"
              />
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Bags</div>
              <h3 class="po-product-title">Sports Gym Duffel Bag</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">PQBB</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.15s"
            data-category="aprons"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?w=400&h=500&fit=crop"
                alt="Barista Apron"
                class="po-product-image"
              />
              <span class="po-product-badge po-new">New</span>
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Aprons</div>
              <h3 class="po-product-title">Barista Canvas Apron</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">GQOB</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.2s"
            data-category="scrubs"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&h=500&fit=crop"
                alt="Dental Scrubs"
                class="po-product-image"
              />
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Scrubs</div>
              <h3 class="po-product-title">Dental Professional Scrubs</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">LQAB</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.25s"
            data-category="home"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=400&h=500&fit=crop"
                alt="Table Linens"
                class="po-product-image"
              />
              <span class="po-product-badge po-sale">Sale</span>
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Home Textile</div>
              <h3 class="po-product-title">Elegant Table Linen Set</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">MKJZ</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.3s"
            data-category="uniform"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?w=400&h=500&fit=crop"
                alt="Corporate Shirt"
                class="po-product-image"
              />
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Uniform</div>
              <h3 class="po-product-title">Corporate Uniform Shirt</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">TYBO</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <div
            class="po-product-card wow animate__animated animate__fadeInUp"
            data-wow-delay="0.35s"
            data-category="bandanas"
          >
            <div class="po-product-image-wrapper">
              <img
                src="https://images.unsplash.com/photo-1582139329536-e7284fece509?w=400&h=500&fit=crop"
                alt="Silk Bandana"
                class="po-product-image"
              />
              <span class="po-product-badge po-new">New</span>
              <div class="po-product-actions">
                <button class="po-action-btn" title="Quick View">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="po-action-btn" title="Add to Wishlist">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="po-product-info">
              <div class="po-product-category">Bandanas</div>
              <h3 class="po-product-title">Luxury Silk Bandana</h3>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Style</div>
                  <div class="pf-meta-value">BOVK</div>
              </div>
              <div class="po-product-rating">

                 <div class="pf-meta-label">Size</div>
                <div class="pf-meta-value">15"W x 16"H</div>
              </div>
              <div class="po-product-footer">
                <!-- <div class="po-product-price">
                  <span class="po-price-current">$34.99</span>
                </div> -->
                <a href="{{ route('product.detail') }}">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Load More Button -->
        <div
          class="po-load-more-wrapper wow animate__animated animate__fadeInUp"
          data-wow-delay="0.2s"
        >
          <button class="po-load-more-btn">
            <i class="fas fa-sync-alt"></i> Load More Products
          </button>
        </div>
      </div>
    </section>


        @endsection

@section('script')
@endsection
