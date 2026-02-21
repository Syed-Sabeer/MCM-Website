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
                <h1>Contact</h1>
              </div>
              <div class="pq-breadcrumb-container">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{ route('home') }}"
                      ><i class="fas fa-home mr-2"></i>Home</a
                    >
                  </li>
                  <li class="breadcrumb-item active">Contact</li>
                </ol>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb -->

    <!-- Contact -->
    <section class="contact pq-bg-grey">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="pq-contact-grid-box">
              <div class="pq-contact-box-media">
                <div class="pq-contact-media-icon">
                  <i class="ti-email"></i>
                </div>
                <div class="pq-contact-media-content">
                  <h4 class="pq-contact-media-title">MAIL US NOW</h4>
                  <p class="pq-contact-media-description">Email Address</p>
                </div>
              </div>
              <p class="pq-contact-box-description">
                 <a href="mailto:info@metrocotton.com">info@metrocottonmill.com</a>
              </p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-md-0">
            <div class="pq-contact-grid-box active">
              <div class="pq-contact-box-media">
                <div class="pq-contact-media-icon">
                  <i class="ion ion-android-call"></i>
                </div>
                <div class="pq-contact-media-content">
                  <h4 class="pq-contact-media-title">CALL US ANYTIME</h4>
                  <p class="pq-contact-media-description">Phone Number</p>
                </div>
              </div>
              <p class="pq-contact-box-description">
                Phone No : <a href="tel:+924235270219">+92 423 5270219</a>
              </p>
               <p class="pq-contact-box-description">
                Phone No : <a href="tel:+923008250219">+92 300 8250219</a>
              </p>


            </div>
          </div>
          <div class="col-xl-4 mt-4 mt-xl-0">
            <div class="pq-contact-grid-box">
              <div class="pq-contact-box-media">
                <div class="pq-contact-media-icon">
                  <i class="ion ion-ios-location"></i>
                </div>
                <div class="pq-contact-media-content">
                  <h4 class="pq-contact-media-title">OUR LOCATION</h4>
                  <p class="pq-contact-media-description">Our Location</p>
                </div>
              </div>
              <p class="pq-contact-box-description">
              Pars Ram 34Km Main Ferozpur Road, Opposite Unique College Lahore, 54000, Pakistan
              </p>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact -->

    <!-- Contact Form -->
    <section class="contact-form">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 pe-xl-5">
            <div class="pq-section-title pq-style-1 pq-mb-30">
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
          <div class="col-lg-6 mt-4 mt-lg-0 p-xl-0">
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

        @endsection

@section('script')
@endsection


