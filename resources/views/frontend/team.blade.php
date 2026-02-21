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
                <h1>Manufacture</h1>
              </div>
              <div class="pq-breadcrumb-container">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#"
                      ><i class="fas fa-home mr-2"></i>Home</a
                    >
                  </li>
                  <li class="breadcrumb-item active">Our Team</li>
                </ol>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb -->

        <!-- Team -->
    <section class="team">
      <div class="container">
        <div class="row pq-mb-30 justify-content-center">
          <div class="col-lg-12 wow animated fadeInUp">
            <div class="pq-section-title pq-style-1 text-center">
              <span class="pq-section-sub-title">
                meer our team
              </span>
              <h5 class="pq-section-main-title">
                Our Expert And Professional metro cotton mill Staff
              </h5>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp">
            <div class="pq-team pq-style-1">
              <div class="pq-team-img">
                <img
                  decoding="async"
               src="{{ asset('FrontendAssets/images/team/slider/guest.png') }}"
                  alt="team-image"
                />
                <div class="pq-team-info">
                  <h5 class="pq-member-name">
                    <a href="#">Samia Sarfaraz</a>
                  </h5>
                  <span class="pq-team-designation">PRESIDENT / CFO</span>
                </div>
                <div class="pq-team-share-icon">
                  <div class="pq-team-social">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-md-0 wow animated fadeInUp"
          >
            <div class="pq-team pq-style-1">
              <div class="pq-team-img">
                <img
                  decoding="async"
                 src="{{ asset('FrontendAssets/images/team/slider/guest.png') }}"
                  alt="team-image"
                />
                <div class="pq-team-info">
                  <h5 class="pq-member-name">
                    <a href="#">Zubair Maya</a>
                  </h5>
                  <span class="pq-team-designation">CEO</span>
                </div>
                <div class="pq-team-share-icon">
                  <div class="pq-team-social">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0 wow animated fadeInUp"
          >
            <div class="pq-team pq-style-1">
              <div class="pq-team-img">
                <img
                  decoding="async"
                  src="{{ asset('FrontendAssets/images/team/slider/guest.png') }}"
                  alt="team-image"
                />
                <div class="pq-team-info">
                  <h5 class="pq-member-name">
                    <a href="#">Tariq</a>
                  </h5>
                  <span class="pq-team-designation">IT TEAM</span>
                </div>
                <div class="pq-team-share-icon">
                  <div class="pq-team-social">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp">
            <div class="pq-team pq-style-1">
              <div class="pq-team-img">
                <img
                  decoding="async"
                  src="{{ asset('FrontendAssets/images/team/slider/guest.png') }}"
                  alt="team-image"
                />
                <div class="pq-team-info">
                  <h5 class="pq-member-name">
                    <a href="#">Tanveer</a>
                  </h5>
                  <span class="pq-team-designation">acounts team</span>
                </div>
                <div class="pq-team-share-icon">
                  <div class="pq-team-social">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-md-0 wow animated fadeInUp"
          >
            <div class="pq-team pq-style-1">
              <div class="pq-team-img">
                <img
                  decoding="async"
                  src="{{ asset('FrontendAssets/images/team/slider/guest.png') }}"
                  alt="team-image"
                />
                <div class="pq-team-info">
                  <h5 class="pq-member-name">
                    <a href="#">Javed</a>
                  </h5>
                  <span class="pq-team-designation">acounts team</span>
                </div>
                <div class="pq-team-share-icon">
                  <div class="pq-team-social">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0 wow animated fadeInUp">
            <div class="pq-team pq-style-1">
              <div class="pq-team-img">
                <img
                  decoding="async"
               src="{{ asset('FrontendAssets/images/team/slider/guest.png') }}"
                  alt="team-image"
                />
                <div class="pq-team-info">
                  <h5 class="pq-member-name">
                    <a href="#">Kamran</a>
                  </h5>
                  <span class="pq-team-designation">marketing team</span>
                </div>
                <div class="pq-team-share-icon">
                  <div class="pq-team-social">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0 wow animated fadeInUp">
            <div class="pq-team pq-style-1">
              <div class="pq-team-img">
                <img
                  decoding="async"
src="{{ asset('FrontendAssets/images/team/slider/guest.png') }}"
                  alt="team-image"
                />
                <div class="pq-team-info">
                  <h5 class="pq-member-name">
                    <a href="#">Asad</a>
                  </h5>
                  <span class="pq-team-designation">marketing team</span>
                </div>
                <div class="pq-team-share-icon">
                  <div class="pq-team-social">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0 wow animated fadeInUp">
            <div class="pq-team pq-style-1">
              <div class="pq-team-img">
                <img
                  decoding="async"
                src="{{ asset('FrontendAssets/images/team/slider/guest.png') }}"
                  alt="team-image"
                />
                <div class="pq-team-info">
                  <h5 class="pq-member-name">
                    <a href="#">Zeeshan</a>
                  </h5>
                  <span class="pq-team-designation">merchandising team</span>
                </div>
                <div class="pq-team-share-icon">
                  <div class="pq-team-social">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0 wow animated fadeInUp">
            <div class="pq-team pq-style-1">
              <div class="pq-team-img">
                <img
                  decoding="async"
                  src="{{ asset('FrontendAssets/images/team/slider/guest.png') }}"
                  alt="team-image"
                />
                <div class="pq-team-info">
                  <h5 class="pq-member-name">
                    <a href="#">Nasir</a>
                  </h5>
                  <span class="pq-team-designation">merchandising team

</span>
                </div>
                <div class="pq-team-share-icon">
                  <div class="pq-team-social">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0 wow animated fadeInUp">
            <div class="pq-team pq-style-1">
              <div class="pq-team-img">
                <img
                  decoding="async"
                  src="{{ asset('FrontendAssets/images/team/slider/guest.png') }}"
                  alt="team-image"
                />
                <div class="pq-team-info">
                  <h5 class="pq-member-name">
                    <a href="#">Khalid</a>
                  </h5>
                  <span class="pq-team-designation">Art / Design Team</span>
                </div>
                <div class="pq-team-share-icon">
                  <div class="pq-team-social">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0 wow animated fadeInUp">
            <div class="pq-team pq-style-1">
              <div class="pq-team-img">
                <img
                  decoding="async"
                  src="{{ asset('FrontendAssets/images/team/slider/guest.png') }}"
                  alt="team-image"
                />
                <div class="pq-team-info">
                  <h5 class="pq-member-name">
                    <a href="#">Bilawal</a>
                  </h5>
                  <span class="pq-team-designation">ppc team</span>
                </div>
                <div class="pq-team-share-icon">
                  <div class="pq-team-social">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0 wow animated fadeInUp">
            <div class="pq-team pq-style-1">
              <div class="pq-team-img">
                <img
                  decoding="async"
                  src="{{ asset('FrontendAssets/images/team/slider/guest.png') }}"
                  alt="team-image"
                />
                <div class="pq-team-info">
                  <h5 class="pq-member-name">
                    <a href="#">Nauman</a>
                  </h5>
                  <span class="pq-team-designation">ppc team</span>
                </div>
                <div class="pq-team-share-icon">
                  <div class="pq-team-social">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0 wow animated fadeInUp">
            <div class="pq-team pq-style-1">
              <div class="pq-team-img">
                <img
                  decoding="async"
                  src="{{ asset('FrontendAssets/images/team/slider/guest.png') }}"
                  alt="team-image"
                />
                <div class="pq-team-info">
                  <h5 class="pq-member-name">
                    <a href="#">Mehboob</a>
                  </h5>
                  <span class="pq-team-designation">Production</span>
                </div>
                <div class="pq-team-share-icon">
                  <div class="pq-team-social">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0 wow animated fadeInUp">
            <div class="pq-team pq-style-1">
              <div class="pq-team-img">
                <img
                  decoding="async"
                  src="{{ asset('FrontendAssets/images/team/slider/guest.png') }}"
                  alt="team-image"
                />
                <div class="pq-team-info">
                  <h5 class="pq-member-name">
                    <a href="#">Hamza</a>
                  </h5>
                  <span class="pq-team-designation">Production</span>
                </div>
                <div class="pq-team-share-icon">
                  <div class="pq-team-social">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team -->
a
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
          <a class="pq-button pq-button-link" href="{{ route('contact') }}">
            <div class="pq-button-block">
              <span class="pq-button-text">start manufacturing with us</span>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Counter -->
<section
  class="counter pq-bg-dark pq-bg-img-6 pq-py-90 wow animated fadeInUp"
>
  <div class="container">
    <div class="row">
      <!-- Experience -->
      <div class="col-xl-4 col-lg-6 col-md-6 p-0">
        <div class="pq-counter pq-style-1 pq-counter-padding ps-xl-0">
          <div class="pq-counter-info">
            <div class="pq-counter-top">
              <div class="pq-counter-num-prefix">
                <h5 class="timer" data-to="55" data-speed="5000">55</h5>
                <span class="pq-counter-prefix">+</span>
              </div>
              <div class="pq-counter-icon">
                <i class="flaticon-sewing-machine"></i>
              </div>
            </div>
            <h4 class="pq-counter-title">Years of Manufacturing Experience</h4>
            <p class="pq-counter-description">
              Decades of expertise in textile manufacturing, delivering
              consistent quality through advanced production processes.
            </p>
          </div>
        </div>
      </div>

      <!-- Production Capacity -->
      <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-md-0 p-0">
        <div class="pq-counter pq-style-1 pq-counter-padding">
          <div class="pq-counter-info">
            <div class="pq-counter-top">
              <div class="pq-counter-num-prefix">
                <h5 class="timer" data-to="30" data-speed="5000">30</h5>
                <span class="pq-counter-prefix">+</span>
              </div>
              <div class="pq-counter-icon">
                <i class="flaticon-textile-printing"></i>
              </div>
            </div>
            <h4 class="pq-counter-title">Export Markets Served</h4>
            <p class="pq-counter-description">
              Supplying large-scale textile products to leading buyers across
              the USA, Europe, and other global markets.
            </p>
          </div>
        </div>
      </div>

      <!-- Clients -->
      <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0 p-0">
        <div
          class="pq-counter pq-style-1 pq-counter-padding border-end-0 border-bottom-0"
        >
          <div class="pq-counter-info">
            <div class="pq-counter-top">
              <div class="pq-counter-num-prefix">
                <h5 class="timer" data-to="500" data-speed="5000">500</h5>
                <span class="pq-counter-prefix">+</span>
              </div>
              <div class="pq-counter-icon">
                <i class="flaticon-clothes-1"></i>
              </div>
            </div>
            <h4 class="pq-counter-title">Global Clients & Partners</h4>
            <p class="pq-counter-description">
              Trusted by international retailers, wholesalers, and brands for
              reliable manufacturing and timely delivery.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Counter -->

    <section class="cr-certifications-section pq-bg-img-6 ">
      <div class="tt-testimonial-section">
        <div class="tt-section-header wow animated fadeInUp">
          <!-- <h2 class="tt-section-title">What Our Clients Say</h2>
          <p class="tt-section-subtitle">
            Trusted by thousands of satisfied customers worldwide
          </p> -->


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
