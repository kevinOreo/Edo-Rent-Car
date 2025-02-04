  <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-6 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Tentang Kami</h2>
                            <div class="widget-body">
                                <img src="<?php echo base_url() ?>assets/assets_shop/img/logo.png" alt="JSOFT">
                                <p>Cardoor adalah Pintu penghubung antara penyedia rental dengan customer. Sebuah marketplace untuk penyedia rental dan customer untuk saling terhubung.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->


                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-6 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Hubungi Kami</h2>
                            <div class="widget-body">
                                <p>Hubungi kami untuk mengetahui lebih banyak. Dapatkan layanan terbaik dan prioritas dari kami, Cardoor.</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> Jl. Hr. Soebrantas, Pekanbaru</li>
                                    <li><i class="fa fa-mobile"></i> +62 811 1111 111</li>
                                    <li><i class="fa fa-envelope"></i> layanan@edorentcar.com</li>
                                </ul>
                                <!-- <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Design by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <!-- <div class="scroll-top">
        <img src="<?php echo base_url() ?>assets/assets_shop/img/scroll-top.png" alt="JSOFT">
    </div> -->
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="<?= base_url('assets/assets_stisla') ?>/assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/assets_stisla') ?>/assets/js/alerts.js"></script>

<script>
    // Menggunakan jQuery untuk mendengarkan event click pada elemen dengan class 'wa-button'
    $('.wa-button').on('click', function() {
        // Ambil nomor telepon dari atribut 'value'
        var phoneNumber = $(this).attr('value');

        // Format nomor telepon agar sesuai dengan format WhatsApp (hilangkan spasi, tanda +, dsb.)
        phoneNumber = phoneNumber.replace(/\s+/g, '');

        // URL API WhatsApp dengan pesan default
        var message = "Halo, saya tertarik dengan layanan Anda!";
        var whatsappURL = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);

        // Buka WhatsApp Web di tab baru
        window.open(whatsappURL, '_blank');
    });
    
// Fungsi untuk menambahkan hari ke tanggal dan mengatur waktu ke jam 23:59 dalam zona waktu lokal
function addDays(dateTime, days) {
    const result = new Date(dateTime);
    result.setDate(result.getDate() + days);
    result.setHours(23, 59, 0, 0); // Atur ke jam 23:59 dalam waktu lokal
    
    return formatDateTimeLocal(result);
}

// Fungsi untuk mendapatkan waktu saat ini dalam format "datetime-local"
function getCurrentDateTime() {
    const now = new Date();
    now.setSeconds(0, 0); // Set detik dan milidetik ke 0
    return formatDateTimeLocal(now);
}

// Fungsi untuk mengonversi objek Date ke format "yyyy-MM-ddTHH:mm" dalam zona waktu lokal
function formatDateTimeLocal(date) {
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');
    const hours = String(date.getHours()).padStart(2, '0');
    const minutes = String(date.getMinutes()).padStart(2, '0');
    
    return `${year}-${month}-${day}T${hours}:${minutes}`;
}

// Fungsi untuk mengatur batas tanggal pada datepicker
function setupDatepickers() {
    const today = getCurrentDateTime();
    const rentalDateInput = document.getElementById("tanggal_rental");
    const returnDateInput = document.getElementById("tanggal_kembali");

    // Set tanggal minimum untuk "Tanggal Rental"
    rentalDateInput.setAttribute("min", today);

    // Event Listener untuk "Tanggal Rental"
    rentalDateInput.addEventListener("change", function () {
        const rentalDateTime = rentalDateInput.value;
        if (rentalDateTime) {
            // Set tanggal minimum dan maksimum untuk "Tanggal Kembali"
            const minReturnDateTime = rentalDateTime;
            const maxReturnDateTime = addDays(rentalDateTime, 3); // Maksimal 3 hari dari tanggal rental, hingga jam 23:59

            returnDateInput.setAttribute("min", minReturnDateTime);
            returnDateInput.setAttribute("max", maxReturnDateTime);

            // Reset nilai "Tanggal Kembali" jika di luar rentang
            if (returnDateInput.value < minReturnDateTime || returnDateInput.value > maxReturnDateTime) {
                returnDateInput.value = ""; // Reset nilai
            }
        } else {
            // Reset atribut "Tanggal Kembali" jika "Tanggal Rental" dihapus
            returnDateInput.setAttribute("min", today);
            returnDateInput.removeAttribute("max");
        }
    });

    // Set tanggal minimum awal untuk "Tanggal Kembali"
    returnDateInput.setAttribute("min", today);
}

// Panggil fungsi saat halaman selesai dimuat
document.addEventListener("DOMContentLoaded", setupDatepickers);
</script>
</body>

</html>