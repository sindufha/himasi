    <!-- Footer -->
    <footer class="footer pt-5 pb-4 mt-5">
        <div class="container px-4">
            <!-- Top Section -->
            <div class="row g-4 pb-4 border-bottom border-secondary border-opacity-25">
                <div class="col-lg-5">
                    <a class="d-flex align-items-center gap-3 mb-3 text-decoration-none" href="index.php">
                        <img src="https://itmnganjuk.ac.id/wp-content/uploads/2026/02/ITM-Nganjuk.png" alt="ITM Logo" style="height: 40px; width: auto;">
                        <div class="d-flex flex-column text-white">
                            <span class="fs-5 fw-bold mb-0">HIMASI</span>
                            <span class="text-brand-orange fw-bold" style="font-size: 10px; letter-spacing: 0.1em;">IT Mojosari</span>
                        </div>
                    </a>
                    <p class="text-light fs-6 pe-lg-5">
                        Himpunan Mahasiswa Sistem Informasi Institut Teknologi Mojosari.
                        Wadah pengembangan akademik, karakter, dan kreativitas mahasiswa Sistem Informasi.
                    </p>
                </div>
                <div class="col-md-4 col-lg-3">
                    <h5 class="text-brand-orange fw-bold mb-3 text-uppercase" style="font-size: 14px; letter-spacing: 0.05em;">Navigasi</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="index.php" class="text-light text-decoration-none hover-white">Home</a></li>
                        <li><a href="about.php" class="text-light text-decoration-none hover-white">Tentang Kami</a></li>
                        <li><a href="program-kerja.php" class="text-light text-decoration-none hover-white">Program Kerja</a></li>
                        <li><a href="berita.php" class="text-light text-decoration-none hover-white">Berita & Artikel</a></li>
                        <li><a href="kontak.php" class="text-light text-decoration-none hover-white">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-8 col-lg-4">
                    <h5 class="text-brand-orange fw-bold mb-3 text-uppercase" style="font-size: 14px; letter-spacing: 0.05em;">Media Sosial</h5>
                    <div class="d-flex gap-3">
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; transition: all 0.3s ease;">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; transition: all 0.3s ease;">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://itm.ac.id" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; transition: all 0.3s ease;">
                            <i class="bi bi-globe"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Middle Section -->
            <div class="row g-4 py-4 border-bottom border-secondary border-opacity-25">
                <div class="col-lg-5">
                    <span class="text-brand-orange fw-bold text-uppercase d-block mb-3" style="font-size: 13px; letter-spacing: 0.05em;">Hubungi Kami</span>
                    <div class="d-flex flex-column gap-2 text-light">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-envelope-fill text-light"></i>
                            <a href="mailto:himasi@itm.ac.id" class="text-light text-decoration-none">himasi@itm.ac.id</a>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-telephone-fill text-light"></i>
                            <a href="tel:+628123456789" class="text-light text-decoration-none">+62 812-3456-789</a>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <i class="bi bi-geo-alt-fill text-light mt-1"></i>
                            <p class="mb-0">
                                Kampus Institut Teknologi Mojosari, Jl. Raya Mojosari No. 101, Mojokerto, Jawa Timur
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <span class="text-brand-orange fw-bold text-uppercase d-block mb-3" style="font-size: 13px; letter-spacing: 0.05em;">Berlangganan Newsletter</span>
                    <p class="text-light">
                        Dapatkan info terbaru seputar kegiatan, webinar, dan info akademik dari HIMASI ITM langsung di email kamu.
                    </p>
                    <form class="d-flex flex-column flex-sm-row gap-2 bg-white bg-opacity-10 p-2 rounded-4 border border-secondary border-opacity-25" onsubmit="event.preventDefault(); alert('Terima kasih telah berlangganan newsletter HIMASI!'); this.reset();">
                        <input type="email" required placeholder="Alamat email kamu" class="form-control bg-transparent border-0 text-white shadow-none ps-3">
                        <button type="submit" class="btn btn-brand-orange whitespace-nowrap">Langganan</button>
                    </form>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3 pt-3 text-light fs-7">
                <p class="mb-0">© <?php echo date("Y"); ?> HIMASI ITM. All Rights Reserved.</p>
                <div class="d-flex align-items-center gap-1">
                    <span>Made with</span>
                    <i class="bi bi-heart-fill text-danger"></i>
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
            easing: 'ease-in-out',
            once: true,
            mirror: false
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
