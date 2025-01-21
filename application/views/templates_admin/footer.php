      <footer class="main-footer">
        <div class="footer-left">
          
        </div>
        <div class="footer-right">
          <p id="currentTime"></p>
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url('assets/assets_stisla') ?>/assets/js/stisla.js"></script>

  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/assets_stisla') ?>/assets/js/scripts.js"></script>
  <script src="<?php echo base_url('assets/assets_stisla') ?>/assets/js/custom.js"></script>
  
  <script src="<?php echo base_url('assets/assets_stisla') ?>/assets/js/login/main-login.js"></script>
  <script src="<?php echo base_url('assets/assets_stisla') ?>/assets/js/login/popper-login.js"></script>
  <script src="<?php echo base_url('assets/assets_stisla') ?>/assets/js/login/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/assets_stisla') ?>/assets/js/login/jquery.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/assets_stisla') ?>/assets/js/page/index-0.js"></script>

  <script src="<?= base_url('assets/assets_stisla') ?>/assets/js/sweetalert2.all.min.js"></script>
  <script src="<?= base_url('assets/assets_stisla') ?>/assets/js/alert.js"></script>
  <script>
  document.getElementById('driver-option').addEventListener('change', function() {
    var driverSelectGroup = document.getElementById('driver-select-group');
    if (this.value == "1") { // Jika "Tersedia" dipilih
      driverSelectGroup.style.display = 'block';
    } else { // Jika "Tidak Tersedia" dipilih
      driverSelectGroup.style.display = 'none';
    }
  });
</script>
<script>
        function showCurrentTime() {
            // Membuat objek Date untuk mendapatkan waktu saat ini
            var now = new Date();

            // Array untuk nama hari dalam seminggu
            var daysOfWeek = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
            
            // Mengambil hari dari array berdasarkan indeks getDay()
            var day = daysOfWeek[now.getDay()];

            // Mengambil jam, menit, dan detik
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            // Menambahkan angka nol di depan jika kurang dari 10
            if (hours < 10) hours = "0" + hours;
            if (minutes < 10) minutes = "0" + minutes;
            if (seconds < 10) seconds = "0" + seconds;

            // Format waktu dalam bentuk HH:MM:SS
            var timeString = hours + ":" + minutes + ":" + seconds;

            // Menampilkan hari dan waktu di paragraf dengan id 'currentTime'
            document.getElementById("currentTime").innerText =  day + " , " + timeString;
        }

        // Panggil fungsi showCurrentTime setiap detik untuk memperbarui waktu
        setInterval(showCurrentTime, 1000);

        // Menampilkan waktu saat pertama kali halaman dibuka
        showCurrentTime();
</script>

</body>
</html>
