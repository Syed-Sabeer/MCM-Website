@extends('layouts.frontend.app.master')

@section('title', 'Metro Cotton Mill - Home')

@section('css')
@endsection

@section('content')

  <div class="de-hero-slider">
      <div class="de-slider-wrapper">

        <!-- Slide 1 -->
        <div class="de-slide de-active">
        <div
            class="de-slide-bg"
            style="
            background-image: url('{{ asset('FrontendAssets/images/newimages/bannerone.png') }}');
            "
        ></div>
        <div class="de-slide-content">
            <div class="de-slide-icon">
            <i class="fas fa-industry"></i>
            </div>
            <div class="de-slide-subtitle">Since 1967</div>
            <h1 class="de-slide-title">
            A Legacy of Quality, Innovation & Trust
            </h1>
            <p class="de-slide-description">
            For over five decades, Metro Cotton Mill has led Pakistan’s textile
            manufacturing industry with advanced technology, superior craftsmanship,
            and world-class fabric solutions.
            </p>
            <div class="de-slide-cta">
            <a href="#" class="de-btn de-btn-primary">
                Discover Our Journey <i class="fas fa-arrow-right"></i>
            </a>
            <a href="#" class="de-btn de-btn-secondary">
                Learn More <i class="fas fa-play"></i>
            </a>
            </div>
        </div>
        </div>


        <!-- Slide 2 -->
        <div class="de-slide">
        <div
            class="de-slide-bg"
            style="
            background-image: url('{{ asset('FrontendAssets/images/newimages/bannertwo.png') }}');
            "
        ></div>
        <div class="de-slide-content">
            <div class="de-slide-icon">
            <i class="fas fa-tshirt"></i>
            </div>
            <div class="de-slide-subtitle">Premium Manufacturing</div>
            <h1 class="de-slide-title">
            High-Quality Textiles for Global Markets
            </h1>
            <p class="de-slide-description">
            From home textiles to scrubs, uniforms, and eco-friendly bags, we produce
            premium-quality items trusted by leading retailers and wholesalers across
            the USA and Europe.
            </p>
            <div class="de-slide-cta">
            <a href="#" class="de-btn de-btn-primary">
                View Product Range <i class="fas fa-arrow-right"></i>
            </a>
            <a href="#" class="de-btn de-btn-secondary">
                Contact Us <i class="fas fa-envelope"></i>
            </a>
            </div>
        </div>
        </div>

        <!-- Slide 3 -->
        <div class="de-slide">
        <div
            class="de-slide-bg"
            style="
            background-image: url('{{ asset('FrontendAssets/images/newimages/bannerthree.png') }}');
            "
        ></div>
        <div class="de-slide-content">
            <div class="de-slide-icon">
            <i class="fas fa-paint-brush"></i>
            </div>
            <div class="de-slide-subtitle">Advanced Embellishment</div>
            <h1 class="de-slide-title">
            Elevate Your Brand with Precision Craftsmanship
            </h1>
            <p class="de-slide-description">
            We specialize in embroidery, screen printing, foil stamping, sublimation,
            and digital full-color printing—helping brands enhance identity with
            premium finishing.
            </p>
            <div class="de-slide-cta">
            <a href="#" class="de-btn de-btn-primary">
                Request a Sample <i class="fas fa-arrow-right"></i>
            </a>
            <a href="#" class="de-btn de-btn-secondary">
                View Capabilities <i class="fas fa-desktop"></i>
            </a>
            </div>
        </div>
        </div>

        <!-- Slide 4 -->
        <div class="de-slide">
        <div
            class="de-slide-bg"
            style="
            background-image: url('{{ asset('FrontendAssets/images/newimages/bannerfour.png') }}');
            "
        ></div>
        <div class="de-slide-content">
            <div class="de-slide-icon">
            <i class="fas fa-globe"></i>
            </div>
            <div class="de-slide-subtitle">Our Mission</div>
            <h1 class="de-slide-title">
            Leading the Future of Sustainable Textile Manufacturing
            </h1>
            <p class="de-slide-description">
            We are committed to exceptional quality, innovation, and sustainability—
            delivering high-value textile solutions to our global partners with
            integrity and responsibility.
            </p>
            <div class="de-slide-cta">
            <a href="#" class="de-btn de-btn-primary">
                Partner With Us <i class="fas fa-arrow-right"></i>
            </a>
            <a href="#" class="de-btn de-btn-secondary">
                Explore Our Vision <i class="fas fa-star"></i>
            </a>
            </div>
        </div>
        </div>

              <!-- Pagination -->
      <div class="de-slider-pagination">
        <div class="de-pagination-dot de-active" data-slide="0"></div>
        <div class="de-pagination-dot" data-slide="1"></div>
        <div class="de-pagination-dot" data-slide="2"></div>
        <div class="de-pagination-dot" data-slide="3"></div>
      </div>
      </div>



      <!-- Controls -->
      <div class="de-slider-controls">
        <div class="de-control-btn de-prev-btn">
          <i class="fas fa-chevron-left"></i>
        </div>
        <div class="de-control-btn de-next-btn">
          <i class="fas fa-chevron-right"></i>
        </div>
      </div>
    </div>


    <!-- About Us -->
    <section class="about-us pq-bg-img-3">
      <div class="container">
        <div class="row flex-column-reverse flex-xl-row">
        <div class="col-xl-6 mt-4 mt-xl-0 wow animated fadeInLeft">
        <div class="pq-section-title pq-style-1 pq-mb-45">
            <span class="pq-section-sub-title">
            <img
                decoding="async"
                src="{{ asset('FrontendAssets/images/section-title/title-icon-primary.png') }}"
                alt="image"
            />About Us
            </span>
            <h5 class="pq-section-main-title">
            Leading Pakistan’s Textile Industry Since 1967
            </h5>
            <p class="pq-section-description">
            At Metro Cotton Mill (Pvt) Ltd., we bring over five decades of innovation,
            craftsmanship, and excellence to the textile industry. From our humble
            beginnings in 1967 as a fabric manufacturer, we have grown into one of
            Pakistan’s most trusted and progressive textile groups.

            </p>
        </div>

        <div class="pq-icon-box pq-style-3 pq-pb-30">
            <div class="pq-icon">
            <i class="flaticon-sewing-machine"></i>
            </div>
            <div class="pq-icon-box-content">
            <h5 class="pq-icon-box-title">Premium Textile Manufacturing</h5>
            <p class="pq-icon-box-description">
                Equipped with modern weaving, dyeing, and finishing technologies, we
                deliver high-quality fabrics trusted by global brands across multiple
                industries.
            </p>
            </div>
        </div>

        <div class="divider-dark"></div>

        <div class="pq-icon-box pq-style-3 pq-pt-30 pq-mb-45">
            <div class="pq-icon">
            <i class="flaticon-clothes-1"></i>
            </div>
            <div class="pq-icon-box-content">
            <h5 class="pq-icon-box-title">Customized Product Solutions</h5>
            <p class="pq-icon-box-description">
                From home textiles to uniforms, scrubs, and eco-friendly bags, we offer
                fully customizable production solutions designed to meet the unique
                needs of international retailers and wholesalers.
            </p>
            </div>
        </div>

        <div class="button-align-center">
            <a class="pq-button pq-button-flat" href="#">
            <div class="pq-button-block">
                <span class="pq-button-text">Read more</span>
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="pq-svg-arrow"
                width="34.899"
                height="14.585"
                viewBox="0 0 34.899 14.585"
                >
                <path
                    d="M.5,6.388c6.609,0,11.487-6.142,11.535-6.2a.6.6,0,0,1,.684-.131.33.33,0,0,1,.176.513A19.589,19.589,0,0,1,4.765,6.388H33.4c.275,0,.5.168.5.376s-.223.376-.5.376H4.765a19.591,19.591,0,0,1,8.128,5.822.331.331,0,0,1-.179.514.6.6,0,0,1-.68-.133c-.048-.062-4.926-6.2-11.535-6.2-.275,0-.5-.168-.5-.376S.223,6.388.5,6.388Z"
                    transform="translate(34.399 14.056) rotate(180)"
                    fill="currentColor"
                    stroke="currentColor"
                    stroke-width="1"
                ></path>
                </svg>
            </div>
            </a>
        </div>
        </div>

          <div class="col-xl-6">
            <div class="pq-about-us-img">
              <img
                src="{{ asset('FrontendAssets/images/about-us/5.png') }}"
                class="pq-about-us-img-3 wow animated fadeInRight"
                alt=""
              />
              <div class="pq-counter pq-floating-counter wow animated zoomIn">
                <div class="pq-counter-num-prefix">
                  <h5 class="timer" data-to="58" data-speed="2000"></h5>
                  <span class="pq-counter-prefix">+</span>
                </div>
                <h5 class="pq-counter-title">Year Experiance Working</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Us -->





    <section class="pd-products-section">
      <div class="pd-container">
        <div class="pd-section-header wow animated fadeInUp">
          <div class="pd-section-badge">
            <i class="fas fa-gem"></i>
            Premium Collection
          </div>
          <h2 class="pd-section-title">
            Discover Your Next
            <span class="pd-highlight">Favorite Product</span>
          </h2>
          <p class="pd-section-description">
            Explore our curated selection of premium products, meticulously
            crafted to bring excellence and innovation into your everyday life.
          </p>
        </div>



        <div class="po-products-grid">
          <!-- Bags -->
          <div
            class="po-product-card wow  zoomIn animated"
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
                <a href="./productdetail.html">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <div
            class="po-product-card wow  zoomIn animated"
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
                <a href="./productdetail.html">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <!-- Aprons -->
          <div
            class="po-product-card wow  zoomIn animated"
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
                <a href="./productdetail.html">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <div
            class="po-product-card wow  zoomIn animated"
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
                <a href="./productdetail.html">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <!-- Scrubs -->
          <div
            class="po-product-card wow  zoomIn animated"
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
                <a href="./productdetail.html">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <div
            class="po-product-card wow  zoomIn animated"
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
                <a href="./productdetail.html">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <!-- Home Textile -->
          <div
            class="po-product-card wow  zoomIn animated"
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
                <a href="./productdetail.html">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>

          <div
            class="po-product-card wow  zoomIn animated"
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
                <a href="./productdetail.html">
                    <button class="po-add-to-cart">
                    <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
              </div>
            </div>
          </div>



          <!-- Additional Products Row 2 -->

        </div>

        <div class="pd-view-all-wrapper">
          <a href="#" class="pd-view-all-btn">
            Explore All Products
            <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </section>



    <!-- Process -->
    <section class="process pq-process-bg-img ">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="pq-section-title pq-style-1 text-center">
              <span class="pq-section-sub-title">
                OUR WORKING PROCESS
              </span>
              <h5 class="pq-section-main-title">
                We Give Top Production From Every Angle
              </h5>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div
            class="col-xl-4 col-lg-6 col-md-6 pq-mt-60 wow animated fadeInLeft"
          >
            <div class="pq-process-step pq-style-1 text-center">
              <div class="pq-process-media">
                <img
                  decoding="async"
                  src="{{ asset('FrontendAssets/images/process-step/1.jpg') }}"
                  alt="image"
                />
                <span class="pq-process-number">step 1</span>
              </div>
              <div class="pq-process-icon">
                <i class="flaticon-sewing-machine-1"></i>
              </div>
              <div class="pq-process-info">
                <h5 class="pq-process-title">product of fabrics</h5>
                <p class="pq-process-description">
                  extiles are materials made from fibers or yarn, and they are
                  used to create a wide range of products such as household
                  items clothing
                </p>
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-6 col-md-6 mt-5 mt-md-0 pq-process-center wow animated fadeInUp"
          >
            <div class="pq-process-step pq-style-1 text-center">
              <div class="pq-process-media">
                <img
                  decoding="async"
                  src="{{ asset('FrontendAssets/images/process-step/2.jpg') }}"
                  alt="image"
                />
                <span class="pq-process-number">step 2</span>
              </div>
              <div class="pq-process-icon">
                <i class="flaticon-scissors-1"></i>
              </div>
              <div class="pq-process-info">
                <h5 class="pq-process-title">exportation glabally</h5>
                <p class="pq-process-description">
                  extiles are materials made from fibers or yarn, and they are
                  used to create a wide range of products such as household
                  items clothing
                </p>
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-6 col-md-6 mt-5 mt-xl-0 pq-mt-60 wow animated fadeInRight"
          >
            <div class="pq-process-step pq-style-1 text-center">
              <div class="pq-process-media">
                <img
                  decoding="async"
                  src="{{ asset('FrontendAssets/images/process-step/3.jpg') }}"
                  alt="image"
                />
                <span class="pq-process-number">step 3</span>
              </div>
              <div class="pq-process-icon">
                <i class="flaticon-sewing-machine"></i>
              </div>
              <div class="pq-process-info">
                <h5 class="pq-process-title">Textiles Trends Forecasts</h5>
                <p class="pq-process-description">
                  extiles are materials made from fibers or yarn, and they are
                  used to create a wide range of products such as household
                  items clothing
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Process -->

    <!-- Slides -->
    <section class="slides py-0">
      <div class="container-fluid">
        <div class="pd-section-header wow animated fadeInUp">
          <div class="pd-section-badge">
            <i class="fas fa-gem"></i>
            Crafted with Excellence
          </div>

          <h2 class="pd-section-title">
            Dedicated to Creating
            <span class="pd-highlight">Remarkable Experiences</span>
          </h2>

          <p class="pd-section-description">
            Step into a world where quality meets creativity. Every product in our
            collection is thoughtfully designed, expertly crafted, and carefully curated
            to elevate your lifestyle with elegance and innovation.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-12 p-0">
            <div class="pq-background-img">
              <div class="pq-background-img-inner">
                <div class="pq-background-img-item wow  zoomIn animated">
                  <div class="pq-background-link">
                    <a
                      class="pq-background-img-number"
                      href="#"
                      >01</a
                    >
                  </div>
                  <div class="pq-background-img-info">
                    <h4 class="pq-background-img-title">
                      <a href="#">Bags </a>
                    </h4>
                  </div>
                  <div class="pq-background-content">
                    <div class="pq-background-leftimg">
                      <img
                        decoding="async"
                        class="background img"
                        src="{{ asset('FrontendAssets/images/slides/1.png') }}"
                        alt="image"
                      />
                    </div>
                    <div class="pq-background-rightinfo">
                      <h4 class="pq-rightinfo-title">Bags</h4>
                      <p class="pq-rightinfo-description">
                        Explore our stylish, durable bags crafted for daily use—blending comfort,
                        functionality, and modern design.
                      </p>
                      <div class="pq-btn-container">
                        <a
                          class="pq-button pq-button-flat"
                          href="#"
                          tabindex="0"
                        >
                          <div class="pq-button-block">
                            <span class="pq-button-text">Read More</span>
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="pq-svg-arrow"
                              width="34.899"
                              height="14.585"
                              viewBox="0 0 34.899 14.585"
                            >
                              <path
                                d="M.5,6.388c6.609,0,11.487-6.142,11.535-6.2a.6.6,0,0,1,.684-.131.33.33,0,0,1,.176.513A19.589,19.589,0,0,1,4.765,6.388H33.4c.275,0,.5.168.5.376s-.223.376-.5.376H4.765a19.591,19.591,0,0,1,8.128,5.822.331.331,0,0,1-.179.514.6.6,0,0,1-.68-.133c-.048-.062-4.926-6.2-11.535-6.2-.275,0-.5-.168-.5-.376S.223,6.388.5,6.388Z"
                                transform="translate(34.399 14.056) rotate(180)"
                                fill="currentColor"
                                stroke="currentColor"
                                stroke-width="1"
                              ></path>
                            </svg>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pq-background-img-item wow  zoomIn animated active">
                  <div class="pq-background-link">
                    <a
                      class="pq-background-img-number"
                      href="#"
                      >02</a
                    >
                  </div>
                  <div class="pq-background-img-info">
                    <h4 class="pq-background-img-title">
                      <a href="#"> Aprons </a>
                    </h4>
                  </div>
                  <div class="pq-background-content">
                    <div class="pq-background-leftimg">
                      <img
                        decoding="async"
                        class="background img"
                        src="{{ asset('FrontendAssets/images/slides/2.jpg') }}"
                        alt="image"
                      />
                    </div>
                    <div class="pq-background-rightinfo">
                      <h4 class="pq-rightinfo-title">Aprons</h4>
                      <p class="pq-rightinfo-description">
                        Premium aprons designed for comfort and protection, perfect for cooking,
                        crafting, and everyday tasks.
                      </p>
                      <div class="pq-btn-container">
                        <a
                          class="pq-button pq-button-flat"
                          href="#"
                          tabindex="0"
                        >
                          <div class="pq-button-block">
                            <span class="pq-button-text">Read More</span>
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="pq-svg-arrow"
                              width="34.899"
                              height="14.585"
                              viewBox="0 0 34.899 14.585"
                            >
                              <path
                                d="M.5,6.388c6.609,0,11.487-6.142,11.535-6.2a.6.6,0,0,1,.684-.131.33.33,0,0,1,.176.513A19.589,19.589,0,0,1,4.765,6.388H33.4c.275,0,.5.168.5.376s-.223.376-.5.376H4.765a19.591,19.591,0,0,1,8.128,5.822.331.331,0,0,1-.179.514.6.6,0,0,1-.68-.133c-.048-.062-4.926-6.2-11.535-6.2-.275,0-.5-.168-.5-.376S.223,6.388.5,6.388Z"
                                transform="translate(34.399 14.056) rotate(180)"
                                fill="currentColor"
                                stroke="currentColor"
                                stroke-width="1"
                              ></path>
                            </svg>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pq-background-img-item wow  zoomIn animated">
                  <div class="pq-background-link">
                    <a class="pq-background-img-number" href="#"
                      >03</a
                    >
                  </div>
                  <div class="pq-background-img-info">
                    <h4 class="pq-background-img-title">
                      <a href="#"> Scrubs </a>
                    </h4>
                  </div>
                  <div class="pq-background-content">
                    <div class="pq-background-leftimg">
                      <img
                        decoding="async"
                        class="background img"
                        src="{{ asset('FrontendAssets/images/slides/1.png') }}"
                        alt="image"
                      />
                    </div>
                    <div class="pq-background-rightinfo">
                      <h4 class="pq-rightinfo-title">Scrubs</h4>
                      <p class="pq-rightinfo-description">
                        Comfortable, durable scrubs designed for professionals who need reliability
                        and all-day ease.
                      </p>
                      <div class="pq-btn-container">
                        <a
                          class="pq-button pq-button-flat"
                          href="#"
                          tabindex="0"
                        >
                          <div class="pq-button-block">
                            <span class="pq-button-text">Read More</span>
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="pq-svg-arrow"
                              width="34.899"
                              height="14.585"
                              viewBox="0 0 34.899 14.585"
                            >
                              <path
                                d="M.5,6.388c6.609,0,11.487-6.142,11.535-6.2a.6.6,0,0,1,.684-.131.33.33,0,0,1,.176.513A19.589,19.589,0,0,1,4.765,6.388H33.4c.275,0,.5.168.5.376s-.223.376-.5.376H4.765a19.591,19.591,0,0,1,8.128,5.822.331.331,0,0,1-.179.514.6.6,0,0,1-.68-.133c-.048-.062-4.926-6.2-11.535-6.2-.275,0-.5-.168-.5-.376S.223,6.388.5,6.388Z"
                                transform="translate(34.399 14.056) rotate(180)"
                                fill="currentColor"
                                stroke="currentColor"
                                stroke-width="1"
                              ></path>
                            </svg>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pq-background-img-item wow  zoomIn animated">
                  <div class="pq-background-link">
                    <a class="pq-background-img-number" href="#"
                      >04</a
                    >
                  </div>
                  <div class="pq-background-img-info">
                    <h4 class="pq-background-img-title">
                      <a href="#"> Home Textile </a>
                    </h4>
                  </div>
                  <div class="pq-background-content">
                    <div class="pq-background-leftimg">
                      <img
                        decoding="async"
                        class="background img"
                        src="{{ asset('FrontendAssets/images/slides/2.jpg') }}"
                        alt="image"
                      />
                    </div>
                    <div class="pq-background-rightinfo">
                      <h4 class="pq-rightinfo-title">Home Textile</h4>
                      <p class="pq-rightinfo-description">
                        Soft, stylish home textiles crafted to bring comfort, warmth, and elegance to
                        your living space.
                      </p>
                      <div class="pq-btn-container">
                        <a
                          class="pq-button pq-button-flat"
                          href="#"
                          tabindex="0"
                        >
                          <div class="pq-button-block">
                            <span class="pq-button-text">Read More</span>
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="pq-svg-arrow"
                              width="34.899"
                              height="14.585"
                              viewBox="0 0 34.899 14.585"
                            >
                              <path
                                d="M.5,6.388c6.609,0,11.487-6.142,11.535-6.2a.6.6,0,0,1,.684-.131.33.33,0,0,1,.176.513A19.589,19.589,0,0,1,4.765,6.388H33.4c.275,0,.5.168.5.376s-.223.376-.5.376H4.765a19.591,19.591,0,0,1,8.128,5.822.331.331,0,0,1-.179.514.6.6,0,0,1-.68-.133c-.048-.062-4.926-6.2-11.535-6.2-.275,0-.5-.168-.5-.376S.223,6.388.5,6.388Z"
                                transform="translate(34.399 14.056) rotate(180)"
                                fill="currentColor"
                                stroke="currentColor"
                                stroke-width="1"
                              ></path>
                            </svg>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pq-background-img-item wow  zoomIn animated">
                  <div class="pq-background-link">
                    <a
                      class="pq-background-img-number"
                      href="#"
                      >05</a
                    >
                  </div>
                  <div class="pq-background-img-info">
                    <h4 class="pq-background-img-title">
                      <a href="#">Uniform & Workwear</a>
                    </h4>
                  </div>
                  <div class="pq-background-content">
                    <div class="pq-background-leftimg">
                      <img
                        decoding="async"
                        class="background img"
                        src="{{ asset('FrontendAssets/images/slides/1.png') }}"
                        alt="image"
                      />
                    </div>
                    <div class="pq-background-rightinfo">
                      <h4 class="pq-rightinfo-title">Uniform & Workwear</h4>
                      <p class="pq-rightinfo-description">
                        Reliable uniform and workwear built for durability, comfort, and a
                        professional look that lasts.
                      </p>
                      <div class="pq-btn-container">
                        <a
                          class="pq-button pq-button-flat"
                          href="#"
                          tabindex="0"
                        >
                          <div class="pq-button-block">
                            <span class="pq-button-text">Read More</span>
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="pq-svg-arrow"
                              width="34.899"
                              height="14.585"
                              viewBox="0 0 34.899 14.585"
                            >
                              <path
                                d="M.5,6.388c6.609,0,11.487-6.142,11.535-6.2a.6.6,0,0,1,.684-.131.33.33,0,0,1,.176.513A19.589,19.589,0,0,1,4.765,6.388H33.4c.275,0,.5.168.5.376s-.223.376-.5.376H4.765a19.591,19.591,0,0,1,8.128,5.822.331.331,0,0,1-.179.514.6.6,0,0,1-.68-.133c-.048-.062-4.926-6.2-11.535-6.2-.275,0-.5-.168-.5-.376S.223,6.388.5,6.388Z"
                                transform="translate(34.399 14.056) rotate(180)"
                                fill="currentColor"
                                stroke="currentColor"
                                stroke-width="1"
                              ></path>
                            </svg>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pq-background-img-item wow  zoomIn animated ">
                  <div class="pq-background-link">
                    <a
                      class="pq-background-img-number"
                      href="#"
                      >06</a
                    >
                  </div>
                  <div class="pq-background-img-info">
                    <h4 class="pq-background-img-title">
                      <a href="#">Bandanas</a>
                    </h4>
                  </div>
                  <div class="pq-background-content">
                    <div class="pq-background-leftimg">
                      <img
                        decoding="async"
                        class="background img"
                        src="{{ asset('FrontendAssets/images/slides/1.png') }}"
                        alt="image"
                      />
                    </div>
                    <div class="pq-background-rightinfo">
                      <h4 class="pq-rightinfo-title">Bandanas</h4>
                      <p class="pq-rightinfo-description">
                        Versatile, stylish bandanas crafted for everyday wear, offering comfort and a
                        touch of personality.
                      </p>
                      <div class="pq-btn-container">
                        <a
                          class="pq-button pq-button-flat"
                          href="#"
                          tabindex="0"
                        >
                          <div class="pq-button-block">
                            <span class="pq-button-text">Read More</span>
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="pq-svg-arrow"
                              width="34.899"
                              height="14.585"
                              viewBox="0 0 34.899 14.585"
                            >
                              <path
                                d="M.5,6.388c6.609,0,11.487-6.142,11.535-6.2a.6.6,0,0,1,.684-.131.33.33,0,0,1,.176.513A19.589,19.589,0,0,1,4.765,6.388H33.4c.275,0,.5.168.5.376s-.223.376-.5.376H4.765a19.591,19.591,0,0,1,8.128,5.822.331.331,0,0,1-.179.514.6.6,0,0,1-.68-.133c-.048-.062-4.926-6.2-11.535-6.2-.275,0-.5-.168-.5-.376S.223,6.388.5,6.388Z"
                                transform="translate(34.399 14.056) rotate(180)"
                                fill="currentColor"
                                stroke="currentColor"
                                stroke-width="1"
                              ></path>
                            </svg>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Slides -->

         <!-- Provide -->
    <section class="provide pq-bg-primary pq-bg-img-2 pq-py-60">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-8">
            <div class="pq-section-title pq-style-1">
              <h5 class="pq-section-main-title">
                Provide the highest quality work that meets your expectation
              </h5>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="button-align">
              <a class="pq-button pq-button-flat" href="#">
                <div class="pq-button-block">
                  <span class="pq-button-text">contact us</span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="pq-svg-arrow"
                    width="34.899"
                    height="14.585"
                    viewBox="0 0 34.899 14.585"
                  >
                    <path
                      d="M.5,6.388c6.609,0,11.487-6.142,11.535-6.2a.6.6,0,0,1,.684-.131.33.33,0,0,1,.176.513A19.589,19.589,0,0,1,4.765,6.388H33.4c.275,0,.5.168.5.376s-.223.376-.5.376H4.765a19.591,19.591,0,0,1,8.128,5.822.331.331,0,0,1-.179.514.6.6,0,0,1-.68-.133c-.048-.062-4.926-6.2-11.535-6.2-.275,0-.5-.168-.5-.376S.223,6.388.5,6.388Z"
                      transform="translate(34.399 14.056) rotate(180)"
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-width="1"
                    ></path>
                  </svg>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Provide -->


    <!-- Contact Form -->
    <section class="contact-form">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 pe-xl-5 wow animated fadeInLeft">
            <div class="pq-section-title pq-style-1 pq-mb-30 ">
              <span class="pq-section-sub-title">
                <img
                  decoding="async"
                  src="{{ asset('FrontendAssets/images/section-title/title-icon-primary.png') }}"
                  alt="image"
                />LET'S TALK
              </span>
              <h5 class="pq-section-main-title">
                Contact Us &amp; Get In here Touch !
              </h5>
              <p class="pq-section-description">
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration some form, by injected
                humour.
              </p>
            </div>
            <div class="map">
              <iframe
                src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
                title="London Eye, London, United Kingdom"
                aria-label="London Eye, London, United Kingdom"
              ></iframe>
            </div>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0 p-xl-0 wow animated fadeInRight">
            <div class="pq-form-div border-0 mt-0">
              <h4 class="pq-form-title mb-2">Send Your Message</h4>
              <form class="pq-applyform">
                <div class="row">
                  <div class="col-lg-12">
                    <input type="text" placeholder="Enter Name" />
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <input type="email" placeholder="Email Address" />
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <div class="col-lg-12">
                    <select>
                      <option value="Service 1" selected>Service 1</option>
                      <option value="Service 2">Service 2</option>
                      <option value="Service 3">Service 3</option>
                      <option value="Service 4">Service 4</option>
                    </select>
                  </div>
                  <div class="col-lg-12">
                    <textarea
                      cols="40"
                      rows="10"
                      placeholder="Message"
                    ></textarea>
                  </div>
                  <div class="col-lg-12">
                    <a href="#" class="pq-button">SUBMIT</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Form -->


    <section class="cr-certifications-section pq-bg-img-1 ">
      <div class="cr-container">
        <div class="cr-header wow animated fadeInUp">


          <div class="pq-section-title pq-style-1 text-center">
              <span class="pq-section-sub-title">
                Our Credentials
              </span>
              <h5 class="pq-section-main-title">
                Certifications
              </h5>
          </div>

        </div>

        <div class="cr-grid">
          <div class="cr-card wow  zoomIn animated">
            <div class="cr-image-wrapper">
              <img
                src="{{ asset('FrontendAssets/images/newimages/certificated01.png') }}"
                alt="ISO 9001 Certification"
              />
            </div>
            <h3 class="cr-card-title">ISO 9001</h3>
            <div class="cr-card-label">
              <i class="fas fa-badge-check"></i>
              Certified
            </div>
          </div>

          <div class="cr-card wow  zoomIn animated">
            <div class="cr-image-wrapper">
              <img
                src="{{ asset('FrontendAssets/images/newimages/certificated02.png') }}"
                alt="Global Recycled Standard"
              />
            </div>
            <h3 class="cr-card-title">Global Recycled Standard</h3>
            <div class="cr-card-label">
              <i class="fas fa-badge-check"></i>
              Certified
            </div>
          </div>

          <div class="cr-card wow  zoomIn animated">
            <div class="cr-image-wrapper">
              <img
                src="{{ asset('FrontendAssets/images/newimages/certificated03.png') }}"
                alt="OEKO-TEX Certification"
              />
            </div>
            <h3 class="cr-card-title">OEKO-TEX®</h3>
            <div class="cr-card-label">
              <i class="fas fa-badge-check"></i>
              Certified
            </div>
          </div>

          <div class="cr-card wow  zoomIn animated">
            <div class="cr-image-wrapper">
              <img
                src="{{ asset('FrontendAssets/images/newimages/certificated04.png') }}"
                alt="Sedex Certification"
              />
            </div>
            <h3 class="cr-card-title">Sedex</h3>
            <div class="cr-card-label">
              <i class="fas fa-badge-check"></i>
              Certified
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cr-certifications-section pq-bg-img-6 ">
      <div class="tt-testimonial-section">
        <div class="tt-section-header wow animated fadeInUp">


          <div class="pd-section-badge">
            <i class="fas fa-gem"></i>
            Hear From Our Clients
          </div>

          <h2 class="pd-section-title">
            What Our
            <span class="pd-highlight">Customers Say</span>
          </h2>

          <p class="pd-section-description">
            Discover why our clients trust us. Real experiences, honest feedback, and
            heartfelt stories.
          </p>


        </div>

        <div class="tt-slider-container wow  zoomIn animated">
          <button class="tt-nav-button tt-nav-prev" onclick="tsPreviousSlide()">
            <i class="fas fa-chevron-left"></i>
          </button>

          <div class="tt-slider-wrapper">
            <div class="tt-slider-track" id="ttSliderTrack">
              <div class="tt-testimonial-card">
                <div class="tt-card-image-wrapper">
                  <img
                    src="https://randomuser.me/api/portraits/women/44.jpg"
                    alt="Sarah Johnson"
                    class="tt-card-image"
                  />
                  <div class="tt-quote-icon">
                    <i class="fas fa-quote-right"></i>
                  </div>
                </div>
                <div class="tt-card-content">
                  <div class="tt-rating-stars">
                    <i class="fas fa-star tt-star"></i>
                    <i class="fas fa-star tt-star"></i>
                    <i class="fas fa-star tt-star"></i>
                    <i class="fas fa-star tt-star"></i>
                    <i class="fas fa-star tt-star"></i>
                  </div>
                  <p class="tt-testimonial-text">
                    "Working with this team has been an absolute game-changer for
                    our business. Their professionalism, attention to detail, and
                    commitment to excellence exceeded all our expectations. They
                    delivered results beyond what we imagined possible."
                  </p>
                  <div class="tt-author-info">
                    <div class="tt-author-details">
                      <h4 class="tt-author-name">Sarah Johnson</h4>
                      <p class="tt-author-position">CEO, TechVision Solutions</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tt-testimonial-card">
                <div class="tt-card-image-wrapper">
                  <img
                    src="https://randomuser.me/api/portraits/men/32.jpg"
                    alt="Michael Chen"
                    class="tt-card-image"
                  />
                  <div class="tt-quote-icon">
                    <i class="fas fa-quote-right"></i>
                  </div>
                </div>
                <div class="tt-card-content">
                  <div class="tt-rating-stars">
                    <i class="fas fa-star tt-star"></i>
                    <i class="fas fa-star tt-star"></i>
                    <i class="fas fa-star tt-star"></i>
                    <i class="fas fa-star tt-star"></i>
                    <i class="fas fa-star tt-star"></i>
                  </div>
                  <p class="tt-testimonial-text">
                    "Exceptional service from start to finish. The team's
                    expertise and innovative approach helped us achieve our goals
                    faster than anticipated. Their dedication to customer
                    satisfaction is truly remarkable and sets them apart from the
                    competition."
                  </p>
                  <div class="tt-author-info">
                    <div class="tt-author-details">
                      <h4 class="tt-author-name">Michael Chen</h4>
                      <p class="tt-author-position">
                        Marketing Director, Global Innovations
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tt-testimonial-card">
                <div class="tt-card-image-wrapper">
                  <img
                    src="https://randomuser.me/api/portraits/women/65.jpg"
                    alt="Emily Rodriguez"
                    class="tt-card-image"
                  />
                  <div class="tt-quote-icon">
                    <i class="fas fa-quote-right"></i>
                  </div>
                </div>
                <div class="tt-card-content">
                  <div class="tt-rating-stars">
                    <i class="fas fa-star tt-star"></i>
                    <i class="fas fa-star tt-star"></i>
                    <i class="fas fa-star tt-star"></i>
                    <i class="fas fa-star tt-star"></i>
                    <i class="fas fa-star tt-star"></i>
                  </div>
                  <p class="tt-testimonial-text">
                    "I've collaborated with many agencies over the years, but none
                    compare to the level of quality and professionalism
                    demonstrated here. They truly understand their clients' needs
                    and go above and beyond to deliver outstanding results every
                    single time."
                  </p>
                  <div class="tt-author-info">
                    <div class="tt-author-details">
                      <h4 class="tt-author-name">Emily Rodriguez</h4>
                      <p class="tt-author-position">
                        Founder, Creative Studio Pro
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <button class="tt-nav-button tt-nav-next" onclick="tsNextSlide()">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>

        <div class="tt-slider-dots" id="ttSliderDots"></div>
      </div>
    </section>



        @endsection

@section('script')
@endsection
