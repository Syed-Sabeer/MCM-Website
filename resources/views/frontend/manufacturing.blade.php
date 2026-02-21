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
                    <a href="{{ route('home') }}"
                      ><i class="fas fa-home mr-2"></i>Home</a
                    >
                  </li>
                  <li class="breadcrumb-item active">Manufacture</li>
                </ol>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb -->

    <!-- Production -->
    <section class="production">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="pq-section-title pq-style-1 text-center">
              <span class="pq-section-sub-title">
                Our Divisions

              </span>
              <h5 class="pq-section-main-title">
                Textiles and Fashion From Reducing Runway
              </h5>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="pq-border-line"></div>
        <div class="row">
          <div class="col-lg-12">
            <div class="pq-timelines">
              <div class="timeline">
                <div class="timeline-states">
                  <div class="timeline-state">
                    <div class="row align-items-center">
                      <div class="col-lg-6 col-md-6 pe-0">
                        <div class="timeline-image pq-pe-90">
                          <img
                            decoding="async"
                            src="{{ asset('FrontendAssets/images/timeline/1.jpg') }}"
                            class="wow animated fadeInLeft"
                            alt="images"
                          />
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 mt-4 mt-md-0 ps-0">
                        <div class="timeline-details position-relative">
                          <div class="timeline-content pq-ps-90">
                            <h3 class="mb-2 wow animated fadeInRight">
                              01. Thread-to-Fabric
                            </h3>
                            <p class="wow animated fadeInRight">
                              Metro Cotton Mill is a global leader in textile manufacturing, dedicated to fostering innovation and sustainability. With a strong commitment to social and environmental responsibility, we aim to be the preferred partner for our customers by delivering exceptional quality, innovative solutions, and outstanding service. Our mission is to exceed customer expectations through creative designs and unmatched attention to detail, ensuring total satisfaction every step of the way.
                            </p>
                            <!-- <a
                              class="pq-button pq-button-link wow animated fadeInRight"
                              href="#"
                            >
                              <div class="pq-button-block">
                                <span class="pq-button-text">View more</span>
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
                            </a> -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="pq-dot-circle wow animated zoomIn"></div>
                  </div>
                  <div class="timeline-state pq-py-60">
                    <div
                      class="row align-items-center flex-column-reverse flex-md-row"
                    >
                      <div class="col-lg-6 col-md-6 mt-4 mt-md-0 pe-0">
                        <div class="timeline-content pq-pe-90">
                          <h3 class="mb-2 wow animated fadeInLeft">
                            02. Dye to Perfect
                          </h3>
                          <p class="wow animated fadeInLeft">
                            Metro Cotton Mill is a global leader in textile manufacturing, dedicated to fostering innovation and sustainability. With a strong commitment to social and environmental responsibility, we aim to be the preferred partner for our customers by delivering exceptional quality, innovative solutions, and outstanding service. Our mission is to exceed customer expectations through creative designs and unmatched attention to detail, ensuring total satisfaction every step of the way.
                          </p>
                          <!-- <a
                            class="pq-button pq-button-link wow animated fadeInLeft"
                            href="#"
                          >
                            <div class="pq-button-block">
                              <span class="pq-button-text">View more</span>
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
                          </a> -->
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 ps-0">
                        <div class="timeline-image pq-ps-90">
                          <img
                            decoding="async"
                            src="{{ asset('FrontendAssets/images/timeline/2.jpg') }}"
                            class="wow animated fadeInRight"
                            alt="images"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="pq-dot-circle wow animated zoomIn"></div>
                  </div>
                  <div class="timeline-state">
                    <div class="row align-items-center">
                      <div class="col-lg-6 col-md-6 pe-0">
                        <div class="timeline-image pq-pe-90">
                          <img
                            decoding="async"
                            src="{{ asset('FrontendAssets/images/timeline/3.jpg') }}"
                            class="wow animated fadeInLeft"
                            alt="images"
                          />
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 mt-4 mt-md-0 ps-0">
                        <div class="timeline-content pq-ps-90">
                          <h3 class="mb-2 wow animated fadeInRight">
                            03. Masterful Craftsmanship
                          </h3>
                          <p class="wow animated fadeInRight">
                            Metro Cotton Mill is a global leader in textile manufacturing, dedicated to fostering innovation and sustainability. With a strong commitment to social and environmental responsibility, we aim to be the preferred partner for our customers by delivering exceptional quality, innovative solutions, and outstanding service. Our mission is to exceed customer expectations through creative designs and unmatched attention to detail, ensuring total satisfaction every step of the way.
                          </p>
                          <!-- <a
                            class="pq-button pq-button-link wow animated fadeInRight"
                            href="#"
                          >
                           <div class="pq-button-block">
                              <span class="pq-button-text">View more</span>
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
                          </a> -->
                        </div>
                      </div>
                    </div>
                    <div class="pq-dot-circle wow animated zoomIn"></div>
                  </div>
                  <div class="timeline-state pq-py-60">
                    <div
                      class="row align-items-center flex-column-reverse flex-md-row"
                    >
                      <div class="col-lg-6 col-md-6 mt-4 mt-md-0 pe-0">
                        <div class="timeline-content pq-pe-90">
                          <h3 class="mb-2 wow animated fadeInLeft">
                            04. Product Integrity Process
                          </h3>
                          <p class="wow animated fadeInLeft">
                            Metro Cotton Mill is a global leader in textile manufacturing, dedicated to fostering innovation and sustainability. With a strong commitment to social and environmental responsibility, we aim to be the preferred partner for our customers by delivering exceptional quality, innovative solutions, and outstanding service. Our mission is to exceed customer expectations through creative designs and unmatched attention to detail, ensuring total satisfaction every step of the way.
                          </p>
                          <!-- <a
                            class="pq-button pq-button-link wow animated fadeInLeft"
                            href="#"
                          >
                            <div class="pq-button-block">
                              <span class="pq-button-text">View more</span>
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
                          </a> -->
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 ps-0">
                        <div class="timeline-image pq-ps-90">
                          <img
                            decoding="async"
                            src="{{ asset('FrontendAssets/images/timeline/2.jpg') }}"
                            class="wow animated fadeInRight"
                            alt="images"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="pq-dot-circle wow animated zoomIn"></div>
                  </div>
                  <div class="timeline-state">
                    <div class="row align-items-center">
                      <div class="col-lg-6 col-md-6 pe-0">
                        <div class="timeline-image pq-pe-90">
                          <img
                            decoding="async"
                            src="{{ asset('FrontendAssets/images/timeline/3.jpg') }}"
                            class="wow animated fadeInLeft"
                            alt="images"
                          />
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 mt-4 mt-md-0 ps-0">
                        <div class="timeline-content pq-ps-90">
                          <h3 class="mb-2 wow animated fadeInRight">
                            05. Creative Customization
                          </h3>
                          <p class="wow animated fadeInRight">
                            Metro Cotton Mill is a global leader in textile manufacturing, dedicated to fostering innovation and sustainability. With a strong commitment to social and environmental responsibility, we aim to be the preferred partner for our customers by delivering exceptional quality, innovative solutions, and outstanding service. Our mission is to exceed customer expectations through creative designs and unmatched attention to detail, ensuring total satisfaction every step of the way.
                          </p>
                          <!-- <a
                            class="pq-button pq-button-link wow animated fadeInRight"
                            href="#"
                          >
                            <div class="pq-button-block">
                              <span class="pq-button-text">View more</span>
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
                          </a> -->
                        </div>
                      </div>
                    </div>
                    <div class="pq-dot-circle wow animated zoomIn"></div>
                  </div>
                  <div class="timeline-state pq-py-60">
                    <div
                      class="row align-items-center flex-column-reverse flex-md-row"
                    >
                      <div class="col-lg-6 col-md-6 mt-4 mt-md-0 pe-0">
                        <div class="timeline-content pq-pe-90">
                          <h3 class="mb-2 wow animated fadeInLeft">
                            06. Marketing
                          </h3>
                          <p class="wow animated fadeInLeft">
                            Metro Cotton Mill is a global leader in textile manufacturing, dedicated to fostering innovation and sustainability. With a strong commitment to social and environmental responsibility, we aim to be the preferred partner for our customers by delivering exceptional quality, innovative solutions, and outstanding service. Our mission is to exceed customer expectations through creative designs and unmatched attention to detail, ensuring total satisfaction every step of the way.
                          </p>
                          <!-- <a
                            class="pq-button pq-button-link wow animated fadeInLeft"
                            href="#"
                          >
                            <div class="pq-button-block">
                              <span class="pq-button-text">View more</span>
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
                          </a> -->
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 ps-0">
                        <div class="timeline-image pq-ps-90">
                          <img
                            decoding="async"
                            src="{{ asset('FrontendAssets/images/timeline/2.jpg') }}"
                            class="wow animated fadeInRight"
                            alt="images"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="pq-dot-circle wow animated zoomIn"></div>
                  </div>
                  <div class="timeline-state">
                    <div class="row align-items-center">
                      <div class="col-lg-6 col-md-6 pe-0">
                        <div class="timeline-image pq-pe-90">
                          <img
                            decoding="async"
                            src="{{ asset('FrontendAssets/images/timeline/3.jpg') }}"
                            class="wow animated fadeInLeft"
                            alt="images"
                          />
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 mt-4 mt-md-0 ps-0">
                        <div class="timeline-content pq-ps-90">
                          <h3 class="mb-2 wow animated fadeInRight">
                            07. Merchandising
                          </h3>
                          <p class="wow animated fadeInRight">
                            Metro Cotton Mill is a global leader in textile manufacturing, dedicated to fostering innovation and sustainability. With a strong commitment to social and environmental responsibility, we aim to be the preferred partner for our customers by delivering exceptional quality, innovative solutions, and outstanding service. Our mission is to exceed customer expectations through creative designs and unmatched attention to detail, ensuring total satisfaction every step of the way.
                          </p>
                          <!-- <a
                            class="pq-button pq-button-link wow animated fadeInRight"
                            href="#"
                          >
                            <div class="pq-button-block">
                              <span class="pq-button-text">View more</span>
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
                          </a> -->
                        </div>
                      </div>
                    </div>
                    <div class="pq-dot-circle wow animated zoomIn"></div>
                  </div>
                  <div class="timeline-state pq-py-60">
                    <div
                      class="row align-items-center flex-column-reverse flex-md-row"
                    >
                      <div class="col-lg-6 col-md-6 mt-4 mt-md-0 pe-0">
                        <div class="timeline-content pq-pe-90">
                          <h3 class="mb-2 wow animated fadeInLeft">
                            08. Research & Innovation
                          </h3>
                          <p class="wow animated fadeInLeft">
                            Metro Cotton Mill is a global leader in textile manufacturing, dedicated to fostering innovation and sustainability. With a strong commitment to social and environmental responsibility, we aim to be the preferred partner for our customers by delivering exceptional quality, innovative solutions, and outstanding service. Our mission is to exceed customer expectations through creative designs and unmatched attention to detail, ensuring total satisfaction every step of the way.
                          </p>
                          <!-- <a
                            class="pq-button pq-button-link wow animated fadeInLeft"
                            href="#"
                          >
                            <div class="pq-button-block">
                              <span class="pq-button-text">View more</span>
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
                          </a> -->
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 ps-0">
                        <div class="timeline-image pq-ps-90">
                          <img
                            decoding="async"
                            src="{{ asset('FrontendAssets/images/timeline/2.jpg') }}"
                            class="wow animated fadeInRight"
                            alt="images"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="pq-dot-circle wow animated zoomIn"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Production -->




        @endsection

@section('script')
@endsection

