    <!-- Header -->
    <div class="pq-background-overlay"></div>
    <div class="pq-sidebar">
      <div class="pq-close-btn">
        <a class="pq-close" href="javascript:void(0)">
          <i class="ion-android-close"></i>
        </a>
      </div>
      <div class="pq-sidebar-block mCustomScrollbar" data-simplebar>
        <div class="pq-sidebar-header">
          <img
            src="{{ asset('FrontendAssets/images/newimages/metroicon.png') }}"
            class="pq-sidebar-logo img-fluid"
            alt="image-sidebar-logo"
          />
        </div>
        <div class="pq-sidebar-content">
          <p>
          Leading manufacturers and exporters of premium quality cotton products. Delivering excellence in textile solutions with unwavering commitment to quality, innovation, and sustainability.
          </p>
        </div>
        {{-- <div class="pq-sidebars">
          <div class="pq-widget-menu widget">
            <h4 class="footer-title">Recent Posts</h4>
            <div class="pq-footer-recent-post">
              <div class="pq-footer-recent-post-media">
                <a href="#">
                  <img
                    src="{{ asset('FrontendAssets/images/recent-posts/1.jpg') }}"
                    alt=""
                    class="img-fluid"
                  />
                </a>
              </div>
              <div class="pq-footer-recent-post-info">
                <h6>
                  <a href="#"
                    >Strategies for Reducing Environmental</a
                  >
                </h6>
                <a
                  href="#"
                  class="pq-post-date"
                >
                  <i class="far fa-calendar-alt"></i>April <span>4</span>, 2023
                </a>
              </div>
            </div>
            <div class="pq-footer-recent-post">
              <div class="pq-footer-recent-post-media">
                <a href="#">
                  <img
                    src="{{ asset('FrontendAssets/images/recent-posts/2.jpg') }}"
                    alt=""
                    class="img-fluid"
                  />
                </a>
              </div>
              <div class="pq-footer-recent-post-info">
                <h6>
                  <a href="#"
                    >These services involve repairing&nbsp;</a
                  >
                </h6>
                <a
                  href="#"
                  class="pq-post-date"
                >
                  <i class="far fa-calendar-alt"></i>April <span>4</span>, 2023
                </a>
              </div>
            </div>
            <div class="pq-footer-recent-post">
              <div class="pq-footer-recent-post-media">
                <a href="#">
                  <img
                    src="{{ asset('FrontendAssets/images/recent-posts/3.jpg') }}"
                    alt=""
                    class="img-fluid"
                  />
                </a>
              </div>
              <div class="pq-footer-recent-post-info">
                <h6>
                  <a href="#"
                    >textile services provide businesses</a
                  >
                </h6>
                <a
                  href="#"
                  class="pq-post-date"
                >
                  <i class="far fa-calendar-alt"></i>April <span>4</span>, 2023
                </a>
              </div>
            </div>
          </div>
        </div> --}}
        <div class="pq-sidebar-contact">
          <ul class="pq-contact">
            <li>
              <i class="fa fa-map-marker"></i>
              <span>Pars Ram 34Km Main Ferozpur Road, Opposite Unique College Lahore, 54000, Pakistan </span>
            </li>
            <li>
              <a href="tel:+923008250219">
                <i class="fas fa-phone"></i>
                <span>+92 300 8250219</span>

              </a>
            </li>
              <li>
              <a href="tel:+924235270219">
                <i class="fas fa-phone"></i>

                <span>+92 423 5270219</span>
              </a>
            </li>
            <li>
              <a href="mailto:info@metrocottonmill.com">
                <i class="fas fa-envelope"></i>
                <span>info@metrocottonmill.com</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="pq-sidebar-social">
          <ul>
            <li>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-google-plus-g"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <header id="pq-header" class="pq-header-style-2 pq-has-sticky">
      <div class="pq-top-header top-style-1">
        <div class="container-fluid">
          <div class="row flex-row-reverse">
            <div class="col-md-6 text-right">
              <div class="pq-header-social text-right">
                <ul>
                  <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="pq-header-contact">
                <ul>
                  <li>
                    <a href="tel:+923008250219">
                      <i class="fas fa-phone"></i>
                      <span>+92-300-8250219</span>
                    </a>
                  </li>
                  <li>
                    <a href="mailto:info@metrocottonmill.com">
                      <i class="fas fa-envelope"></i>
                      <span>info@metrocottonmill.com</span>

                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pq-bottom-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                  <img
                    class="img-fluid logo"
                    src="{{ asset('FrontendAssets/images/newimages/metroicon.png') }}"
                    alt="image"
                  />
                </a>
                <div
                  class="collapse navbar-collapse"
                  id="navbarSupportedContent"
                >
                  <div id="pq-menu-contain" class="pq-menu-contain">
                    <ul id="pq-main-menu" class="navbar-nav ml-auto">
                      <li
                        class="menu-item current-menu-item menu-item-has-children"
                      >
                        <a href="{{ route('home') }}">Home</a>

                      </li>
                      <li class="menu-item menu-item-has-children">
                        <a href="{{ route('about') }}">About</a>

                      </li>
                      <li class="menu-item menu-item-has-children">
                        <a href="{{ route('manufacturing') }}">Manufacturing</a>

                      </li>
                      <li class="menu-item menu-item-has-children">
                        <a href="{{ route('products') }}">Products</a>

                      </li>
                      <li class="menu-item menu-item-has-children">
                        <a href="{{ route('team') }}">Our Team</a>

                      </li>
                      <li class="menu-item">
                        <a href="{{ route('careers') }}">Careers</a>
                      </li>
                      <li class=" menu-item">
                        <a href="{{ route('contact') }}">Contact</a>
                      </li>
                      <li class="  menu-item">
                        <a href="{{ route('hub') }}">The Hub</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="pq-menu-search-block">
                  <a
                    href="javascript:void(0)"
                    class="pq-tools-serach-button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvassearch"
                  >
                    <i class="ti-search"></i>
                  </a>
                  <div
                    class="offcanvas offcanvas-top"
                    tabindex="-1"
                    id="offcanvassearch"
                  >
                    <form class="search-form">
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="offcanvas"
                        aria-label="Close"
                      ></button>
                      <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input
                          type="search"
                          class="search-field"
                          placeholder="Search …"
                          value=""
                          name="s"
                        />
                      </label>
                      <button type="submit" class="search-submit">
                        <span class="screen-reader-text">Search</span>
                      </button>
                    </form>
                  </div>
                </div>
                <div class="pq-shop-btn">
                  <!-- <div class="pq-cart-button">
                    <a
                      href="javascript:void(0)"
                      class="pq-tools-button"
                      data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvascart"
                    >
                      <i class="ti-shopping-cart"></i>
                      <span class="basket-item-count">0</span>
                    </a>
                    <div
                      class="offcanvas offcanvas-end"
                      tabindex="-1"
                      id="offcanvascart"
                    >
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="offcanvas"
                      >
                        <i class="ion-android-close"></i>
                      </button>
                      <div class="pq-cart-header">
                        <h3 class="modal-title">
                          Your Cart
                          <span class="cart-panel-counter">0</span>
                        </h3>
                      </div>
                      <div class="widget_shopping_cart_content">
                        <p>No products in the cart.</p>
                      </div>
                    </div>
                  </div> -->
                </div>
                <div class="pq-toggle-btn">
                  <a href="javascript:void(0)" class="menu-toggle">Menu</a>
                </div>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <i class="fas fa-bars"></i>
                </button>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header -->
