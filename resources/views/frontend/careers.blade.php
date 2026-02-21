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

                @include('frontend.partials._career-form')
            </div>
        </div>
    </div>
    </section>



        @endsection

@section('script')
@endsection

