
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
                <h1>The Hub</h1>
              </div>
              <div class="pq-breadcrumb-container">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#"
                      ><i class="fas fa-home mr-2"></i>Home</a
                    >
                  </li>
                  <li class="breadcrumb-item active">The HUb</li>
                </ol>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb -->

    <section class="hu-section">
        <div class="hu-floating-shapes">
            <div class="hu-shape hu-shape-1"></div>
            <div class="hu-shape hu-shape-2"></div>
            <div class="hu-shape hu-shape-3"></div>
        </div>

        <div class="hu-container">
            <div class="hu-content-wrapper">
                <div class="hu-text-content">
                    <span class="hu-badge">
                        <i class="fas fa-star"></i> Innovation Meets Excellence
                    </span>

                    <h1 class="hu-title">
                        Welcome to <span class="hu-title-highlight">The Hub</span>
                    </h1>

                    <p class="hu-description">
                        At Metro Cotton Mill, we believe in transparency and seamless collaboration. The Hub is our innovative platform designed to keep you connected every step of the way. With your personalized account, you can effortlessly track your orders, manage queries, and communicate directly with our team.
                    </p>

                    <div class="hu-features">
                        <div class="hu-feature-item">
                            <div class="hu-feature-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <span class="hu-feature-text">Track Orders in Real-Time</span>
                        </div>

                        <div class="hu-feature-item">
                            <div class="hu-feature-icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <span class="hu-feature-text">Direct Team Communication</span>
                        </div>

                        <div class="hu-feature-item">
                            <div class="hu-feature-icon">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <span class="hu-feature-text">Manage Queries Efficiently</span>
                        </div>

                        <div class="hu-feature-item">
                            <div class="hu-feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <span class="hu-feature-text">Secure & Transparent</span>
                        </div>
                    </div>

                    <p class="hu-description">
                        This cutting-edge system sets us apart from traditional manufacturers by ensuring you're always informed and in control. Your trust and satisfaction are our priorities. Experience the difference with The Hub—where connection meets convenience.
                    </p>

                    <div class="hu-cta-wrapper">
                        <a href="#" class="hu-btn hu-btn-primary">
                            <i class="fas fa-sign-in-alt"></i>
                            Login / Signup
                        </a>
                        <a href="#" class="hu-btn hu-btn-secondary">
                            <i class="fas fa-play-circle"></i>
                            Watch Demo
                        </a>
                    </div>

                    <div class="hu-stats">
                        <div class="hu-stat-item">
                            <div class="hu-stat-number">24/7</div>
                            <div class="hu-stat-label">Support</div>
                        </div>
                        <div class="hu-stat-item">
                            <div class="hu-stat-number">100%</div>
                            <div class="hu-stat-label">Transparent</div>
                        </div>
                        <div class="hu-stat-item">
                            <div class="hu-stat-number">Real-Time</div>
                            <div class="hu-stat-label">Updates</div>
                        </div>
                    </div>
                </div>

                <div class="hu-visual-content">
                    <div class="hu-visual-wrapper">
                        <div class="hu-decorative-dots">
                            <div class="hu-dot hu-dot-1"></div>
                            <div class="hu-dot hu-dot-2"></div>
                            <div class="hu-dot hu-dot-3"></div>
                        </div>

                        <div class="hu-main-card">
                            <div class="hu-card-header">
                                <div class="hu-card-logo">
                                    <i class="fas fa-network-wired"></i>
                                </div>
                                <h3 class="hu-card-title">The Hub Platform</h3>
                                <p class="hu-card-subtitle">Your Command Center for Excellence</p>
                            </div>

                            <div class="hu-card-features">
                                <div class="hu-card-feature">
                                    <div class="hu-card-feature-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="hu-card-feature-content">
                                        <div class="hu-card-feature-title">Real-Time Tracking</div>
                                        <div class="hu-card-feature-desc">Monitor your orders instantly</div>
                                    </div>
                                </div>

                                <div class="hu-card-feature">
                                    <div class="hu-card-feature-icon">
                                        <i class="fas fa-headset"></i>
                                    </div>
                                    <div class="hu-card-feature-content">
                                        <div class="hu-card-feature-title">Direct Support</div>
                                        <div class="hu-card-feature-desc">Connect with our expert team</div>
                                    </div>
                                </div>

                                <div class="hu-card-feature">
                                    <div class="hu-card-feature-icon">
                                        <i class="fas fa-file-invoice"></i>
                                    </div>
                                    <div class="hu-card-feature-content">
                                        <div class="hu-card-feature-title">Query Management</div>
                                        <div class="hu-card-feature-desc">Handle all inquiries seamlessly</div>
                                    </div>
                                </div>

                                <div class="hu-card-feature">
                                    <div class="hu-card-feature-icon">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    <div class="hu-card-feature-content">
                                        <div class="hu-card-feature-title">Secure Access</div>
                                        <div class="hu-card-feature-desc">Enterprise-grade protection</div>
                                    </div>
                                </div>
                            </div>

                            <button class="hu-card-cta">
                                <i class="fas fa-rocket"></i> Get Started Now
                            </button>
                        </div>

                        <div class="hu-floating-card hu-floating-card-1">
                            <div class="hu-mini-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="hu-mini-title">Order Completed</div>
                            <div class="hu-mini-desc">Your order #4521 has been delivered successfully</div>
                        </div>

                        <div class="hu-floating-card hu-floating-card-2">
                            <div class="hu-mini-icon">
                                <i class="fas fa-bell"></i>
                            </div>
                            <div class="hu-mini-title">New Message</div>
                            <div class="hu-mini-desc">Team replied to your query about fabric quality</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




            @endsection

@section('script')
@endsection
