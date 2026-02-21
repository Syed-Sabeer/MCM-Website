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
                <h1>Careers</h1>
              </div>
              <div class="pq-breadcrumb-container">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{ route('home') }}"
                      ><i class="fas fa-home mr-2"></i>Home</a
                    >
                  </li>
                  <li class="breadcrumb-item active">Careers</li>
                </ol>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb -->

    <section class="cebody" >
    <div class="ce-container">
        <div class="ce-card">
            <div class="ce-header">
                <div class="ce-header-content">
                    <div class="ce-icon-wrapper">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h1 class="ce-title">Careers at Metro Cotton Mill</h1>
                    <p class="ce-subtitle">
                        Join our team and contribute to our journey of excellence. We believe that our people are the foundation of our success.
                    </p>
                </div>
            </div>

            <div class="ce-body">
                <p class="ce-description">
                    If you're looking for a dynamic and rewarding workplace where innovation, collaboration, and growth are valued, we invite you to apply. Fill out the form below, attach your resume, and take the first step toward building your career with us.
                </p>

                <div class="ce-divider"></div>

                <form class="ce-form" id="ceCareerForm">
                    <div class="ce-form-row">
                        <div class="ce-form-group">
                            <label class="ce-label">
                                <i class="fas fa-user"></i>
                                First Name
                            </label>
                            <div class="ce-input-wrapper">
                                <input type="text" class="ce-input" placeholder="Enter your first name" required>
                            </div>
                        </div>

                        <div class="ce-form-group">
                            <label class="ce-label">
                                <i class="fas fa-user"></i>
                                Last Name
                            </label>
                            <div class="ce-input-wrapper">
                                <input type="text" class="ce-input" placeholder="Enter your last name" required>
                            </div>
                        </div>
                    </div>

                    <div class="ce-form-group ce-full-width">
                        <label class="ce-label">
                            <i class="fas fa-phone"></i>
                            Phone Number
                        </label>
                        <div class="ce-input-wrapper">
                            <input type="tel" class="ce-input" placeholder="Enter your phone number" required>
                        </div>
                    </div>

                    <div class="ce-form-group ce-full-width">
                        <label class="ce-label">
                            <i class="fas fa-edit"></i>
                            Note
                        </label>
                        <textarea class="ce-textarea" placeholder="Tell us about yourself and why you'd like to join our team..." required></textarea>
                    </div>

                    <div class="ce-form-group ce-full-width">
                        <label class="ce-label">
                            <i class="fas fa-file-upload"></i>
                            Resume / CV
                        </label>
                        <label class="ce-file-upload" for="ceFileInput">
                            <input type="file" id="ceFileInput" class="ce-file-input" accept=".pdf,.doc,.docx">
                            <i class="fas fa-cloud-upload-alt ce-upload-icon"></i>
                            <div class="ce-upload-text">Drop your resume here or click to browse</div>
                            <div class="ce-upload-subtext">Supported formats: PDF, DOC, DOCX (Max 5MB)</div>
                            <div class="ce-file-name" id="ceFileName">
                                <i class="fas fa-check-circle"></i>
                                <span></span>
                            </div>
                        </label>
                    </div>

                    <div class="ce-submit-wrapper">
                        <button type="submit" class="ce-submit-btn">
                            <span class="ce-btn-content">Submit Application</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                        <p class="ce-footer-text">We look forward to hearing from you!</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>



        @endsection

@section('script')
@endsection

