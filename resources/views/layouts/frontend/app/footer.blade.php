    <footer class="fo-footer-wrapper pq-bg-img-6">
      <!-- Background Decorations -->
      <div class="fo-bg-decoration">
        <div class="fo-bg-circle fo-bg-circle-1"></div>
        <div class="fo-bg-circle fo-bg-circle-2"></div>
        <div class="fo-bg-circle fo-bg-circle-3"></div>
      </div>

      <!-- Top Border -->
      <div class="fo-top-border"></div>

      <div class="fo-footer-container">
        <div class="fo-footer-grid">
          <!-- Company Section -->
          <div class="fo-footer-company">
            <div class="fo-company-logo-wrapper">
              <div class="fo-company-logo">
                <img
                      src="{{ asset('FrontendAssets/images/newimages/metroicon.png') }}"
                      class="pq-footer-logo"
                      alt="image-footer-logo"
                    />
              </div>
            </div>
            <p class="fo-company-desc">
              Leading manufacturers and exporters of premium quality cotton
              products. Delivering excellence in textile solutions with
              unwavering commitment to quality, innovation, and sustainability.
            </p>

            <!-- Stats Cards -->
            <div class="fo-company-stats">
              <div class="fo-stat-card">
                <span class="fo-stat-number">25+</span>
                <span class="fo-stat-label">Years</span>
              </div>
              <div class="fo-stat-card">
                <span class="fo-stat-number">500+</span>
                <span class="fo-stat-label">Clients</span>
              </div>
              <div class="fo-stat-card">
                <span class="fo-stat-number">50+</span>
                <span class="fo-stat-label">Countries</span>
              </div>
            </div>

            <div class="fo-company-social">
              <a href="#" class="fo-social-link" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="fo-social-link" aria-label="Twitter">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="fo-social-link" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="fo-social-link" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="fo-social-link" aria-label="YouTube">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>

          <!-- Services -->
          <div class="fo-footer-column">
            <h3>Our Services</h3>
            <ul class="fo-footer-links">
              <li><a href="#">Service 01</a></li>
              <li><a href="#">Service 02</a></li>
              <li><a href="#">Service 03</a></li>
              <li><a href="#">Service 04</a></li>
              <li><a href="#">Service 05</a></li>
            </ul>
          </div>

          <!-- Quick Links -->
          <div class="fo-footer-column">
            <h3>Quick Links</h3>
            <ul class="fo-footer-links">
              <li><a href="{{ route('about') }}">About Company</a></li>
              <li><a href="{{ route('products') }}">Our Products</a></li>
              <li><a href="{{ route('team') }}">Our Team</a></li>
              <li><a href="{{ route('about') }}">Certifications</a></li>
              <li><a href="{{ route('careers') }}">Careers</a></li>
              <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
          </div>

          <!-- Contact Info -->
          <div class="fo-footer-column">
            <h3>Get In Touch</h3>
            <div class="fo-contact-item">
              <div class="fo-contact-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="fo-contact-content">
                <h4>Address</h4>
                <p>Pars Ram 34Km Main Ferozpur Road, Opposite Unique College Lahore, 54000, Pakistan</p>
              </div>
            </div>
            <div class="fo-contact-item">
              <div class="fo-contact-icon">
                <i class="fas fa-phone-alt"></i>
              </div>
              <div class="fo-contact-content">
                <h4>Phone</h4>
                <p><a href="tel:+923008250219">+92 300 8250219</a></p>
                <p><a href="tel:+924235270219">+92 423 5270219</a></p>
              </div>
            </div>
            <div class="fo-contact-item">
              <div class="fo-contact-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="fo-contact-content">
                <h4>Email</h4>
                <p>
                  <a href="mailto:info@metrocotton.com">info@metrocottonmill.com</a>
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Newsletter Section -->
        <div class="fo-newsletter-section ">
          <div class="fo-newsletter-content">
            <div class="fo-newsletter-icon">
              <i class="fas fa-envelope-open-text"></i>
            </div>
            <h3>Subscribe to Our Newsletter</h3>
            <p class="fo-newsletter-text">
              Stay updated with our latest products, exclusive deals, and
              industry insights delivered directly to your inbox every week.
            </p>
            <form class="fo-newsletter-form">
              <input
                type="email"
                class="fo-newsletter-input"
                placeholder="Enter your email address"
                required
              />
              <button type="submit" class="fo-newsletter-btn">
                <span>Subscribe</span>
                <i class="fas fa-paper-plane"></i>
              </button>
            </form>
          </div>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="fo-footer-bottom">
        <div class="fo-footer-container">
          <div class="fo-footer-bottom-content">
            <div class="fo-copyright">
              <span>&copy; 2026  <a href="">Metro Cotton Mill (Pvt) Ltd.</a></span>
              <i class="fas fa-circle" style="font-size: 4px"></i>
              <span>All rights reserved</span>
              <i class="fas fa-circle" style="font-size: 4px"></i>
              <span
                >Powered by
                <a href="https://deveoninc.com/">Deveon Inc</a></span
              >
            </div>
            <ul class="fo-footer-bottom-links">
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms of Service</a></li>
              {{-- <li><a href="#">Cookie Policy</a></li> --}}
              <li><a href="#">Sitemap</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Scroll to Top Button -->
    </footer>
