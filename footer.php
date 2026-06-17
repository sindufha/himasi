    <!-- Footer -->
    <footer class="footer pt-4 pb-3 mt-4">
        <div class="container px-4">
            <!-- Main Grid Section -->
            <div class="row g-4 pb-4 border-bottom border-secondary border-opacity-25">
                <!-- Column 1: Brand & Socials -->
                <div class="col-lg-4">
                    <a class="d-flex align-items-center gap-3 mb-2 text-decoration-none" href="index.php">
                        <img src="https://itmnganjuk.ac.id/wp-content/uploads/2026/02/ITM-Nganjuk.png" alt="ITM Logo" style="height: 35px; width: auto;">
                        <div class="d-flex flex-column text-white">
                            <span class="fs-5 fw-bold mb-0">HIMASI</span>
                            <span class="text-brand-orange fw-bold" style="font-size: 10px; letter-spacing: 0.1em;">IT Mojosari</span>
                        </div>
                    </a>
                    <p class="text-light fs-7 mb-3 pe-lg-3" style="line-height: 1.6;">
                        Himpunan Mahasiswa Sistem Informasi Institut Teknologi Mojosari. Wadah pengembangan akademik, karakter, dan kreativitas mahasiswa.
                    </p>
                    <div class="d-flex gap-2">
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; transition: all 0.3s ease; font-size: 12px;">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; transition: all 0.3s ease; font-size: 12px;">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://itm.ac.id" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; transition: all 0.3s ease; font-size: 12px;">
                            <i class="bi bi-globe"></i>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Navigasi -->
                <div class="col-6 col-md-3 col-lg-2">
                    <h6 class="text-brand-orange fw-bold mb-3 text-uppercase" style="font-size: 12px; letter-spacing: 0.05em;">Navigasi</h6>
                    <ul class="list-unstyled d-flex flex-column gap-2" style="font-size: 13px;">
                        <li><a href="index.php" class="text-light text-decoration-none hover-white">Home</a></li>
                        <li><a href="about.php" class="text-light text-decoration-none hover-white">Tentang Kami</a></li>
                        <li><a href="struktur-organisasi.php" class="text-light text-decoration-none hover-white">Struktur Organisasi</a></li>
                        <li><a href="program-kerja.php" class="text-light text-decoration-none hover-white">Program Kerja</a></li>
                        <li><a href="berita.php" class="text-light text-decoration-none hover-white">Berita & Artikel</a></li>
                        <li><a href="kontak.php" class="text-light text-decoration-none hover-white">Kontak</a></li>
                    </ul>
                </div>

                <!-- Column 3: Hubungi Kami -->
                <div class="col-6 col-md-4 col-lg-3">
                    <h6 class="text-brand-orange fw-bold mb-3 text-uppercase" style="font-size: 12px; letter-spacing: 0.05em;">Hubungi Kami</h6>
                    <div class="d-flex flex-column gap-2 text-light" style="font-size: 13px; line-height: 1.5;">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto:himasi@itm.ac.id" class="text-light text-decoration-none">himasi@itm.ac.id</a>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:+628123456789" class="text-light text-decoration-none">+62 812-789</a>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <i class="bi bi-geo-alt-fill mt-0.5"></i>
                            <p class="mb-0">
                                Kampus IT Mojosari, Jl. Raya Mojosari 101, Mojokerto
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Column 4: Newsletter -->
                <div class="col-md-5 col-lg-3">
                    <h6 class="text-brand-orange fw-bold mb-3 text-uppercase" style="font-size: 12px; letter-spacing: 0.05em;">Newsletter</h6>
                    <p class="text-light mb-2" style="font-size: 13px; line-height: 1.5;">
                        Berlangganan info webinar & info akademik terbaru.
                    </p>
                    <form class="d-flex bg-white bg-opacity-10 p-1.5 rounded-3 border border-secondary border-opacity-25" onsubmit="event.preventDefault(); alert('Terima kasih telah berlangganan newsletter HIMASI!'); this.reset();">
                        <input type="email" required placeholder="Email kamu" class="form-control bg-transparent border-0 text-white shadow-none ps-2 py-1" style="font-size: 13px;">
                        <button type="submit" class="btn btn-brand-orange py-1 px-3" style="font-size: 13px; border-radius: 6px;">OK</button>
                    </form>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2 pt-3 text-light fs-7" style="font-size: 12px;">
                <p class="mb-0">© <?php echo date("Y"); ?> HIMASI ITM. All Rights Reserved.</p>
                <div class="d-flex align-items-center gap-1">
                    <span>Made with</span>
                    <i class="bi bi-heart-fill text-danger" style="font-size: 10px;"></i>
                    <span>by Divisi Kominfo HIMASI</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- AOS (Animate On Scroll) JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS untuk animasi scroll yang smooth seperti Framer Motion
        AOS.init({
            duration: 800,
            once: true
        });

        // Efek scroll navbar
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNavbar');
            if (window.scrollY > 20) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
    <style>
        .hover-white:hover { color: #ffffff !important; }
        .fs-7 { font-size: 0.85rem; }
    </style>
</body>
</html>