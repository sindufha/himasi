<?php include 'header.php'; ?>

<!-- Page Header -->
<section class="bg-brand-primary py-5 text-white position-relative overflow-hidden" style="min-height: 250px; background: linear-gradient(135deg, #002b5b, #0f345f);">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: radial-gradient(circle at top right, #ff698d 0%, transparent 30%); opacity: 0.15; pointer-events: none;"></div>
    <div class="container px-4 py-4 relative z-2" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-3">
                <li class="breadcrumb-item"><a href="index.php" class="text-light text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-brand-orange" aria-current="page">Kontak</li>
            </ol>
        </nav>
        <h1 class="display-5 fw-bold mb-3">Hubungi Kontak Kami</h1>
        <p class="lead text-light mb-0 max-w-2xl" style="line-height: 1.6;">
            Punya pertanyaan seputar HIMASI ITM, pendaftaran pengurus, kerja sama, atau sponsor? Jangan ragu hubungi kami.
        </p>
    </div>
</section>

<!-- SPLIT LAYOUT -->
<section class="py-5 bg-white">
    <div class="container px-4 py-5">
        <div class="row g-5 align-items-start">
            <!-- Left Side: Form (Uses AJAX fetch submit for instant alert, no reload) -->
            <div class="col-lg-7" data-aos="fade-right">
                <h2 class="fw-bold text-brand-primary mb-4">Kirim Pesan Kolaborasi</h2>

                <!-- Instant Response Message Container -->
                <div class="d-none" id="contactSuccessAlert">
                    <div class="alert alert-success d-flex align-items-start gap-3 p-4 rounded-4 mb-4 animate__animated animate__fadeIn" role="alert">
                        <i class="bi bi-check-circle-fill text-success fs-3 mt-0.5"></i>
                        <div>
                            <h5 class="alert-heading fw-bold text-success">Pesan Berhasil Terkirim!</h5>
                            <p class="mb-0 text-dark" style="font-size: 14px; line-height: 1.6;">
                                Terima kasih telah menghubungi HIMASI IT Mojosari. Admin kami akan segera meninjau pesan kamu dan membalas melalui email secepatnya.
                            </p>
                        </div>
                    </div>
                </div>

                <form id="contactForm" onsubmit="submitForm(event)" class="d-flex flex-column gap-4">
                    <div class="form-group">
                        <label for="name" class="form-label fw-bold text-uppercase text-brand-primary mb-2" style="font-size: 12px; letter-spacing: 0.05em;">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required placeholder="Masukkan nama lengkap kamu" class="form-control py-3 px-4 rounded-4 bg-light border-0 shadow-none">
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label fw-bold text-uppercase text-brand-primary mb-2" style="font-size: 12px; letter-spacing: 0.05em;">Alamat Email</label>
                        <input type="email" id="email" name="email" required placeholder="Masukkan alamat email aktif" class="form-control py-3 px-4 rounded-4 bg-light border-0 shadow-none">
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label fw-bold text-uppercase text-brand-primary mb-2" style="font-size: 12px; letter-spacing: 0.05em;">Isi Pesan</label>
                        <textarea id="message" name="message" required rows="6" placeholder="Tuliskan pesan atau maksud kolaborasi kamu..." class="form-control py-3 px-4 rounded-4 bg-light border-0 shadow-none"></textarea>
                    </div>

                    <button type="submit" id="submitBtn" class="btn btn-brand-orange px-5 py-3 align-self-start d-inline-flex align-items-center gap-2">
                        <span>Kirim Pesan</span> <i class="bi bi-send-fill" id="submitIcon"></i>
                    </button>
                </form>
            </div>

            <!-- Right Side: Info Contacts & Map -->
            <div class="col-lg-5" data-aos="fade-left">
                <h2 class="fw-bold text-brand-primary mb-4">Informasi Kontak</h2>

                <div class="card card-custom p-4 shadow-sm mb-4">
                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex align-items-start gap-3">
                            <div class="p-3 bg-brand-primary bg-opacity-10 text-brand-primary rounded-4">
                                <i class="bi bi-geo-alt-fill fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-brand-primary text-uppercase mb-1" style="font-size: 11px; letter-spacing: 0.05em;">Sekretariat</h6>
                                <p class="text-brand-gray mb-0 fs-6" style="line-height: 1.6;">
                                    Kampus Institut Teknologi Mojosari, Gedung B Lantai 2, Jl. Raya Mojosari No. 101, Mojokerto, Jawa Timur
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <div class="p-3 bg-brand-primary bg-opacity-10 text-brand-primary rounded-4">
                                <i class="bi bi-envelope-fill fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-brand-primary text-uppercase mb-1" style="font-size: 11px; letter-spacing: 0.05em;">Email Resmi</h6>
                                <a href="mailto:himasi@itm.ac.id" class="text-brand-gray text-decoration-none hover-orange">
                                    himasi@itm.ac.id
                                </a>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <div class="p-3 bg-brand-primary bg-opacity-10 text-brand-primary rounded-4">
                                <i class="bi bi-telephone-fill fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-brand-primary text-uppercase mb-1" style="font-size: 11px; letter-spacing: 0.05em;">Telepon / WhatsApp</h6>
                                <a href="tel:+628123456789" class="text-brand-gray text-decoration-none hover-orange">
                                    +62 812-3456-789 (Humas HIMASI)
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map Link Image -->
                <a href="https://maps.app.goo.gl/4fLwG2G6zL3RzTNL8" target="_blank" class="card card-custom p-0 bg-light border-0 shadow-sm overflow-hidden text-decoration-none position-relative d-block group" style="height: 250px;">
                    <img src="https://itmnganjuk.ac.id/wp-content/uploads/2025/02/MG_0007-scaled.jpg" class="w-100 h-100 object-fit-cover transition-all" style="filter: brightness(0.75); transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'" alt="Kampus ITM">
                    <div class="position-absolute inset-0 d-flex flex-column justify-content-center align-items-center text-center text-white p-3" style="background: rgba(0, 43, 91, 0.45); top: 0; left: 0; width: 100%; height: 100%;">
                        <i class="bi bi-geo-alt-fill text-brand-orange display-6 mb-2 animate-bounce"></i>
                        <span class="d-block fw-bold fs-5 mb-1 text-white">IT Mojosari Campus Map</span>
                        <span class="text-white-50 btn btn-sm btn-brand-orange px-3 py-1.5 mt-2" style="font-size: 12px;"><i class="bi bi-map me-1"></i> Buka Google Maps</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- SOCIAL MEDIA PANEL -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container px-4 text-center" data-aos="fade-up">
        <h5 class="fw-bold text-brand-primary mb-4">Ikuti Terus Kabar Terbaru Kami di Media Sosial</h5>
        <div class="d-flex justify-content-center align-items-center gap-4 flex-wrap">
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="d-flex align-items-center gap-2 text-brand-gray text-decoration-none hover-orange fw-bold">
                <i class="bi bi-instagram text-brand-orange fs-4"></i>
                <span>Instagram</span>
            </a>
            <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="d-flex align-items-center gap-2 text-brand-gray text-decoration-none hover-orange fw-bold">
                <i class="bi bi-youtube text-brand-orange fs-4"></i>
                <span>YouTube</span>
            </a>
            <a href="https://itm.ac.id" target="_blank" rel="noopener noreferrer" class="d-flex align-items-center gap-2 text-brand-gray text-decoration-none hover-orange fw-bold">
                <i class="bi bi-globe text-brand-orange fs-4"></i>
                <span>Website ITM</span>
            </a>
        </div>
    </div>
</section>

<script>
function submitForm(event) {
    event.preventDefault();
    
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const submitIcon = document.getElementById('submitIcon');
    const alertBox = document.getElementById('contactSuccessAlert');
    
    // Disable button & show loading state
    submitBtn.disabled = true;
    submitBtn.querySelector('span').textContent = 'Mengirim...';
    submitIcon.className = 'spinner-border spinner-border-sm';
    
    const formData = new FormData(form);
    
    // AJAX Fetch Request to PHP processor
    fetch('proses-kontak.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            // Hide form and show instant success alert
            form.classList.add('d-none');
            alertBox.classList.remove('d-none');
            
            // Auto hide alert after 5s and show form again
            setTimeout(() => {
                alertBox.classList.add('d-none');
                form.classList.remove('d-none');
                form.reset();
                resetBtn();
            }, 6000);
        } else {
            alert('Ada kesalahan: ' + data.message);
            resetBtn();
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Gagal mengirim pesan, silakan coba lagi.');
        resetBtn();
    });
    
    function resetBtn() {
        submitBtn.disabled = false;
        submitBtn.querySelector('span').textContent = 'Kirim Pesan';
        submitIcon.className = 'bi bi-send-fill';
    }
}
</script>

<style>
    .hover-orange:hover {
        color: #ea580c !important;
    }
    .spinner-grow-custom {
        animation: bounce 2s infinite;
    }
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
</style>

<?php include 'footer.php'; ?>
