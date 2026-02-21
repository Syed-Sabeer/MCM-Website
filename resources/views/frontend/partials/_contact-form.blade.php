<!-- Contact Form Partial -->
<section class="contact-form">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 pe-xl-5 {{ isset($animateLeft) ? 'wow animated fadeInLeft' : '' }}">
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
            src="https://maps.google.com/maps?q=Lahore%2C%20Pakistan&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
            title="Metro Cotton Mill, Lahore, Pakistan"
            aria-label="Metro Cotton Mill, Lahore, Pakistan"
          ></iframe>
        </div>
      </div>
      <div class="col-lg-6 mt-4 mt-lg-0 p-xl-0 {{ isset($animateRight) ? 'wow animated fadeInRight' : '' }}">
        <div class="pq-form-div border-0 mt-0">
          <h4 class="pq-form-title mb-2">Send Your Message</h4>
          <form class="pq-applyform contact-form-submit" id="contactForm">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <input type="text" name="name" class="contact-input" placeholder="Enter Name" required />
              </div>
              <div class="col-lg-6 col-md-6">
                <input type="email" name="email" class="contact-input" placeholder="Email Address" required />
              </div>
              <div class="col-lg-6 col-md-6">
                <input type="tel" name="phone" class="contact-input" placeholder="Phone Number" required />
              </div>
              <div class="col-lg-12">
                <select name="service" class="contact-input">
                  <option value="">Select Service</option>
                  <option value="Textile Inquiry">Textile Inquiry</option>
                  <option value="Bulk Order">Bulk Order</option>
                  <option value="Partnership">Partnership</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="col-lg-12">
                <textarea
                  name="message"
                  class="contact-input"
                  cols="40"
                  rows="10"
                  placeholder="Message"
                  required
                ></textarea>
              </div>
              <div class="col-lg-12">
                <button type="submit" class="pq-button contact-submit-btn">
                  <span class="btn-text">SUBMIT</span>
                  <span class="btn-loader" style="display: none;">
                    <i class="fas fa-spinner fa-spin"></i>
                  </span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Contact Form Partial -->

<script>
document.addEventListener('DOMContentLoaded', function() {
  const contactForm = document.getElementById('contactForm');

  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();

      const formData = new FormData(this);
      const submitBtn = this.querySelector('.contact-submit-btn');
      const btnText = submitBtn.querySelector('.btn-text');
      const btnLoader = submitBtn.querySelector('.btn-loader');

      // Show loader and disable button
      submitBtn.disabled = true;
      btnText.style.display = 'none';
      btnLoader.style.display = 'inline-block';

      fetch('{{ route("contact.store") }}', {
        method: 'POST',
        body: formData,
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'Accept': 'application/json',
        }
      })
      .then(response => response.json())
      .then(data => {
        // Hide loader and enable button
        submitBtn.disabled = false;
        btnText.style.display = 'inline';
        btnLoader.style.display = 'none';

        // Show SweetAlert
        Swal.fire({
          title: data.success ? 'Success!' : 'Error!',
          text: data.message,
          icon: data.success ? 'success' : 'error',
          confirmButtonText: 'OK',
          confirmButtonColor: '#d4a574',
        }).then(() => {
          if (data.success) {
            contactForm.reset();
          }
        });
      })
      .catch(error => {
        // Hide loader and enable button
        submitBtn.disabled = false;
        btnText.style.display = 'inline';
        btnLoader.style.display = 'none';

        console.error('Error:', error);
        Swal.fire({
          title: 'Error!',
          text: 'An error occurred. Please try again.',
          icon: 'error',
          confirmButtonText: 'OK',
          confirmButtonColor: '#d4a574',
        });
      });
    });
  }
});
</script>
