<!-- Career Form Partial -->
<section class="ce-section">
    <div class="ce-container">
        <div class="ce-form-card">
            <h4 class="ce-form-title">Apply Now</h4>
            <form class="ce-form career-form-submit" id="careerForm">
                @csrf
                <div class="ce-form-row">
                    <div class="ce-form-group">
                        <label class="ce-label">
                            <i class="fas fa-user"></i>
                            First Name
                        </label>
                        <div class="ce-input-wrapper">
                            <input type="text" name="first_name" class="ce-input" placeholder="Enter your first name" required />
                        </div>
                    </div>

                    <div class="ce-form-group">
                        <label class="ce-label">
                            <i class="fas fa-user"></i>
                            Last Name
                        </label>
                        <div class="ce-input-wrapper">
                            <input type="text" name="last_name" class="ce-input" placeholder="Enter your last name" required />
                        </div>
                    </div>
                </div>

                <div class="ce-form-group ce-full-width">
                    <label class="ce-label">
                        <i class="fas fa-phone"></i>
                        Phone Number
                    </label>
                    <div class="ce-input-wrapper">
                        <input type="tel" name="phone" class="ce-input" placeholder="Enter your phone number" required />
                    </div>
                </div>

                <div class="ce-form-group ce-full-width">
                    <label class="ce-label">
                        <i class="fas fa-edit"></i>
                        About You
                    </label>
                    <textarea name="note" class="ce-textarea" placeholder="Tell us about yourself and why you'd like to join our team..." required></textarea>
                </div>

                <div class="ce-form-group ce-full-width">
                    <label class="ce-label">
                        <i class="fas fa-file-upload"></i>
                        Resume / CV
                    </label>
                    <label class="ce-file-upload" for="careerFileInput">
                        <input type="file" name="resume" id="careerFileInput" class="ce-file-input" accept=".pdf,.doc,.docx" required />
                        <i class="fas fa-cloud-upload-alt ce-upload-icon"></i>
                        <div class="ce-upload-text">Drop your resume here or click to browse</div>
                        <div class="ce-upload-subtext">Supported formats: PDF, DOC, DOCX (Max 5MB)</div>
                        <div class="ce-file-name" id="careerFileName">
                            <i class="fas fa-check-circle"></i>
                            <span></span>
                        </div>
                    </label>
                </div>

                <div class="ce-submit-wrapper">
                    <button type="submit" class="ce-submit-btn career-submit-btn">
                        <span class="btn-text">Submit Application</span>
                        <span class="btn-loader" style="display: none;">
                            <i class="fas fa-spinner fa-spin"></i>
                        </span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                    <p class="ce-footer-text">We look forward to hearing from you!</p>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Career Form Partial -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const careerForm = document.getElementById('careerForm');
    const fileInput = document.getElementById('careerFileInput');
    const fileName = document.getElementById('careerFileName');

    // File name display
    if (fileInput) {
        fileInput.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                fileName.style.display = 'flex';
                fileName.querySelector('span').textContent = this.files[0].name;
            }
        });
    }

    if (careerForm) {
        careerForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const submitBtn = this.querySelector('.career-submit-btn');
            const btnText = submitBtn.querySelector('.btn-text');
            const btnLoader = submitBtn.querySelector('.btn-loader');

            // Show loader and disable button
            submitBtn.disabled = true;
            btnText.style.display = 'none';
            btnLoader.style.display = 'inline-block';

            fetch('{{ route("careers.store") }}', {
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
                        careerForm.reset();
                        fileName.style.display = 'none';
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
