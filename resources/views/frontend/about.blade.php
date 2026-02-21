
@extends('layouts.frontend.app.master')

@section('title', 'Metro Cotton Mill - Home')

@section('css')
@endsection

@section('content')

    <!-- Breadcrumb -->
    <div class="pq-breadcrumb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav aria-label="breadcrumb">
              <div class="pq-breadcrumb-title">
                <h1>About Us</h1>
              </div>
              <div class="pq-breadcrumb-container">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/"
                      ><i class="fas fa-home mr-2"></i>Home</a
                    >
                  </li>
                  <li class="breadcrumb-item active">About Us</li>
                </ol>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb -->

    <!-- About Us -->
    <section class="about-us pq-bg-img-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 wow animated fadeInLeft">
            <img src="{{ asset('FrontendAssets/images/about-us/1.jpg') }}" class="img-fluid w-100" alt="" />
          </div>
          <div class="col-xl-6 mt-4 mt-xl-0 wow animated fadeInRight">
            <div class="pq-section-title pq-style-1 pq-mb-45">
              <span class="pq-section-sub-title">
                About Us
              </span>
              <h5 class="pq-section-main-title">
                Five Decades of Excellence in Textile Manufacturing
              </h5>
              <p class="pq-section-description">
                Founded in 1967, Metro Cotton Mill (Pvt) Ltd. has grown from a fabric
                manufacturer into one of Pakistan’s leading textile groups, driven by
                innovation, quality, and trust built over generations.
              </p>
            </div>

            <div class="pq-icon-box pq-style-3 pq-pb-30">
              <div class="pq-icon">
                <i class="flaticon-sewing-machine"></i>
              </div>
              <div class="pq-icon-box-content">
                <h5 class="pq-icon-box-title">Advanced Manufacturing</h5>
                <p class="pq-icon-box-description">
                  Equipped with state-of-the-art looms, dyeing, finishing, and
                  embellishment facilities, we deliver high-quality textiles that meet
                  international standards.
                </p>
              </div>
            </div>

            <div class="divider-dark"></div>

            <div class="pq-icon-box pq-style-3 pq-pt-30 pq-mb-45">
              <div class="pq-icon">
                <i class="flaticon-clothes-1"></i>
              </div>
              <div class="pq-icon-box-content">
                <h5 class="pq-icon-box-title">Global Export Expertise</h5>
                <p class="pq-icon-box-description">
                  For over two decades, we have served leading retailers and wholesalers
                  across the USA and Europe, specializing in home textiles, uniforms,
                  scrubs, reusable bags, and eco-friendly packaging.
                </p>
              </div>
            </div>

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
      </div>
    </section>
    <!-- About Us -->

        <!-- Service -->
    <section class="service pq-bg-grey">
      <div class="container">
        <div class="row">
          <!-- LEFT COLUMN : MISSION INTRO -->
          <div class="col-xl-4 wow animated fadeInLeft">
            <div class="pq-section-title pq-style-1 pq-mb-45">
              <span class="pq-section-sub-title">

                our mission
              </span>
              <h5 class="pq-section-main-title">
                Leading Textile Innovation with Responsibility
              </h5>
              <p class="pq-section-description">
                Metro Cotton Mill is committed to becoming a global leader in textile
                manufacturing by fostering innovation, sustainability, and social
                responsibility. Our mission is to deliver exceptional quality,
                creative solutions, and outstanding service that exceed customer
                expectations at every stage.
              </p>
            </div>

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

          <!-- RIGHT COLUMN : MISSION IN ACTION -->
          <div class="col-xl-8 pq-ps-60 mt-4 mt-xl-0 wow animated fadeInRight">
            <div class="service-slider pq-slider-1">
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="pq-content-column">
                    <div class="pq-content-column-inner">
                      <div class="slick-slider-main">

                        <!-- ITEM 1 -->
                        <div class="item">
                          <div class="pq-service-box pq-style-1">
                            <div class="pq-service-media">
                              <img
                                decoding="async"
                                src="{{ asset('FrontendAssets/images/service/slick-horizontal/1.jpg') }}"
                                alt="servicebox"
                              />
                            </div>
                            <div class="pq-service-box-info">
                              <div class="pq-service-icon">
                                <i class="flaticon-clothes"></i>
                              </div>
                              <h4 class="pq-service-box-title">
                                Quality-Driven Dyeing
                              </h4>
                              <p class="pq-service-box-description">
                                Our advanced dyeing processes ensure superior color
                                consistency, durability, and fabric performance while
                                meeting international quality and compliance standards.
                              </p>
                              <div class="pq-btn-container">
                                <a class="pq-button pq-button-link" href="#">
                                  <div class="pq-button-block">
                                    <span class="pq-button-text">read more</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- ITEM 2 -->
                        <div class="item">
                          <div class="pq-service-box pq-style-1">
                            <div class="pq-service-media">
                              <img
                                decoding="async"
                                src="{{ asset('FrontendAssets/images/service/slick-horizontal/1.jpg') }}"
                                alt="servicebox"
                              />
                            </div>
                            <div class="pq-service-box-info">
                              <div class="pq-service-icon">
                                <i class="flaticon-knitting"></i>
                              </div>
                              <h4 class="pq-service-box-title">
                                Innovative Digital Printing
                              </h4>
                              <p class="pq-service-box-description">
                                We empower brands with creative freedom through
                                high-precision digital printing, enabling custom
                                designs, vibrant colors, and rapid production.
                              </p>
                              <div class="pq-btn-container">
                                <a class="pq-button pq-button-link" href="#">
                                  <div class="pq-button-block">
                                    <span class="pq-button-text">read more</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- ITEM 3 -->
                        <div class="item">
                          <div class="pq-service-box pq-style-1">
                            <div class="pq-service-media">
                              <img
                                decoding="async"
                                src="{{ asset('FrontendAssets/images/service/slick-horizontal/1.jpg') }}"
                                alt="servicebox"
                              />
                            </div>
                            <div class="pq-service-box-info">
                              <div class="pq-service-icon">
                                <i class="flaticon-pin"></i>
                              </div>
                              <h4 class="pq-service-box-title">
                                Precision Satin Weaving
                              </h4>
                              <p class="pq-service-box-description">
                                Blending craftsmanship with modern technology, our
                                weaving processes deliver premium fabrics that reflect
                                excellence, durability, and refined quality.
                              </p>
                              <div class="pq-btn-container">
                                <a class="pq-button pq-button-link" href="#">
                                  <div class="pq-button-block">
                                    <span class="pq-button-text">read more</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- ITEM 4 -->
                        <div class="item">
                          <div class="pq-service-box pq-style-1">
                            <div class="pq-service-media">
                              <img
                                decoding="async"
                                src="{{ asset('FrontendAssets/images/service/slick-horizontal/1.jpg') }}"
                                alt="servicebox"
                              />
                            </div>
                            <div class="pq-service-box-info">
                              <div class="pq-service-icon">
                                <i class="flaticon-scissors-1"></i>
                              </div>
                              <h4 class="pq-service-box-title">
                                Sustainable Fabric Treatment
                              </h4>
                              <p class="pq-service-box-description">
                                Our eco-friendly finishing and treatment processes
                                enhance fabric performance while supporting
                                environmental and social responsibility.
                              </p>
                              <div class="pq-btn-container">
                                <a class="pq-button pq-button-link" href="#">
                                  <div class="pq-button-block">
                                    <span class="pq-button-text">read more</span>
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

                <!-- THUMB NAVIGATION -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="pq-thumbs-column">
                    <div class="pq-thumbs-column-inner">
                      <div class="slick-slider-thumb">
                        <div class="item">
                          <h4><span><i class="flaticon-sewing-machine"></i></span>Quality Dyeing</h4>
                        </div>
                        <div class="item">
                          <h4><span><i class="flaticon-textile-printing"></i></span>Digital Printing</h4>
                        </div>
                        <div class="item">
                          <h4><span><i class="flaticon-sewing-machine-1"></i></span>Satin Weaving</h4>
                        </div>
                        <div class="item">
                          <h4><span><i class="flaticon-scissors-1"></i></span>Fabric Treatment</h4>
                        </div>
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
    <!-- Service -->

    <!-- Service -->
<section class="service pq-bg-grey pq-bg-img-3 wow animated fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="pq-section-title pq-style-1 text-center">
          <span class="pq-section-sub-title">

            Manufacturing Excellence
          </span>
          <h5 class="pq-section-main-title">
            Your Trusted Partner for End-to-End Textile Manufacturing
          </h5>
        </div>
      </div>
    </div>

    <div class="row no-gutters">
      <!-- BOX 1 -->
      <div class="col-xl-4 col-lg-6 col-md-6 p-0">
        <div class="pq-fancy-grid-box">
          <div class="pq-fancy-box pq-style-2">
            <div class="pq-fancy-box-info">
              <h5 class="pq-fancy-box-title">
                Fabric Manufacturing & Accessories
              </h5>
              <p class="pq-fancybox-description">
                From raw material to finished fabric, we manufacture high-quality
                textiles and accessories with precision, consistency, and global
                compliance.
              </p>
              <div class="pq-fancy-box-icon">
                <i class="flaticon-sewing-machine"></i>
              </div>
              <div class="pq-btn-container">
                <a class="pq-button pq-button-link" href="#">
                  <div class="pq-button-block">
                    <span class="pq-button-text">manufacture with us</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- BOX 2 -->
      <div class="col-xl-4 col-lg-6 col-md-6 p-0">
        <div class="pq-fancy-grid-box">
          <div class="pq-fancy-box pq-style-2">
            <div class="pq-fancy-box-info">
              <h5 class="pq-fancy-box-title">
                Advanced Textile Manufacturing Technology
              </h5>
              <p class="pq-fancybox-description">
                Our modern machinery and smart manufacturing systems ensure
                efficiency, scalability, and precision for large-volume and
                custom production.
              </p>
              <div class="pq-fancy-box-icon">
                <i class="flaticon-textile-1"></i>
              </div>
              <div class="pq-btn-container">
                <a class="pq-button pq-button-link" href="#">
                  <div class="pq-button-block">
                    <span class="pq-button-text">explore capabilities</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- BOX 3 -->
      <div class="col-xl-4 p-0">
        <div class="pq-fancy-grid-box">
          <div class="pq-fancy-box pq-style-2 border-end-0">
            <div class="pq-fancy-box-info">
              <h5 class="pq-fancy-box-title">
                Sustainable & Responsible Production
              </h5>
              <p class="pq-fancybox-description">
                We follow environmentally responsible manufacturing practices,
                ensuring sustainability without compromising quality or delivery
                timelines.
              </p>
              <div class="pq-fancy-box-icon">
                <i class="flaticon-silk"></i>
              </div>
              <div class="pq-btn-container">
                <a class="pq-button pq-button-link" href="#">
                  <div class="pq-button-block">
                    <span class="pq-button-text">partner sustainably</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- BOX 4 -->
      <div class="col-xl-4 col-lg-6 col-md-6 p-0">
        <div class="pq-fancy-grid-box">
          <div class="pq-fancy-box pq-style-2 border-bottom-0">
            <div class="pq-fancy-box-info">
              <h5 class="pq-fancy-box-title">
                Custom Manufacturing for Global Brands
              </h5>
              <p class="pq-fancybox-description">
                We work closely with brands, retailers, and wholesalers to
                manufacture customized textile solutions tailored to market
                demands.
              </p>
              <div class="pq-fancy-box-icon">
                <i class="flaticon-shop"></i>
              </div>
              <div class="pq-btn-container">
                <a class="pq-button pq-button-link" href="#">
                  <div class="pq-button-block">
                    <span class="pq-button-text">start collaboration</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- BOX 5 -->
      <div class="col-xl-4 col-lg-6 col-md-6 p-0">
        <div class="pq-fancy-grid-box">
          <div class="pq-fancy-box pq-style-2 border-bottom-0">
            <div class="pq-fancy-box-info">
              <h5 class="pq-fancy-box-title">
                Scalable Production & Export Readiness
              </h5>
              <p class="pq-fancybox-description">
                With decades of export experience, we deliver scalable
                manufacturing solutions for USA, Europe, and global markets.
              </p>
              <div class="pq-fancy-box-icon">
                <i class="flaticon-threads-1"></i>
              </div>
              <div class="pq-btn-container">
                <a class="pq-button pq-button-link" href="#">
                  <div class="pq-button-block">
                    <span class="pq-button-text">scale with us</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CTA BOX -->
      <div class="col-xl-4 p-0">
        <div class="pq-link-box">
          <a class="pq-button pq-button-link" href="#">
            <div class="pq-button-block">
              <span class="pq-button-text">start manufacturing with us</span>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

    <!-- Service -->

        <section class="cr-certifications-section pq-bg-img-1 ">
      <div class="cr-container">
        <div class="cr-header wow animated fadeInUp">
          <!-- <div class="cr-subtitle">Our Credentials</div>
          <h2 class="cr-title">Certifications</h2>
          <p class="cr-description">
            Committed to quality and sustainability through internationally
            recognized standards
          </p> -->

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

        @endsection

@section('script')
@endsection
