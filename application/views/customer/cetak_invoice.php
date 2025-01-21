<head>
	<style>
		@media print {
			@page {
				size	: A5;
				margin	: 10mm;
				orientation: portrait;
			}

			body {
				font-family	: Verdana;
				font-size	: 15px;

			}
			p {
				text-align	: right;
				font-size	: 10px;
			}
		}

	</style>
</head>
<div style="width: 500px">
	<center><img src="<?php echo base_url() ?>assets/assets_shop/img/logo.png"></center>
	<h2>Invoice Pembayaran Anda</h2>
	<p id="currentTime"></p>
<table style="width: 100%">
	<hr>
	<?php foreach($transaksi as $tr) : ?>
		

		<tr>
			<td>Nama Customer</td>
			<td>: </td>
			<td><?php echo $tr->nama ?></td>
		</tr>

		<tr>
			<td>Merk Mobil</td>
			<td>: </td>
			<td><?php echo $tr->merk ?></td>
		</tr>

		<tr>
			<td>Tanggal Rental</td>
			<td>: </td>
			<td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental)); ?></td>
		</tr>

		<tr>
			<td>Tanggal Kembali</td>
			<td>: </td>
			<td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)); ?></td>
		</tr>

		<tr>
			<td>Biaya Sewa/Hari</td>
			<td>: </td>
			<td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
		</tr>

		<tr>
			<?php 
				$x = strtotime($tr->tanggal_kembali);
				$y = strtotime($tr->tanggal_rental);
				$jmlHari = abs(($x - $y)/(60*60*24));

			?>
			<td>Jumlah Hari Sewa</td>
			<td>: </td>
			<td><?php echo $jmlHari; ?> Hari</td>
		</tr>

		<tr>
			<td>Status Pembayaran</td>
			<td>:</td>
			<td>
				<?php 
					if($tr->status_pembayaran == '0') {
						echo "Belum Lunas";
					}else{
						echo "Lunas";
					}
				?>
			</td>
		</tr>

		<tr style="font-weight: bold; color: green">
			<td>JUMLAH PEMBAYARAN</td>
			<td>: </td>
			<td>Rp. <?php echo number_format(($tr->harga * $jmlHari),0,',','.') ?></td>
		</tr>

	<?php endforeach; ?>
</table>

<!-- <span style="font-weight: bold">Informasi Rental</span>
<table style="width: 100%">
	<tr>
		<td>Nama Rental</td>
		<td>:</td>
		<td><?php echo $rental[0]->nama_rental ?></td>
	</tr>
	<tr>
		<td>Alamat Rental</td>
		<td>:</td>
		<td><?php echo $rental[0]->alamat ?></td>
	</tr>
</table> -->
<br>
<span style="font-weight: bold">Alat Pembayaran: </span>
	<ul>
		<?php foreach ($payment as $pm ) : ?>
			<li><?php echo $pm->nama_payment . ' ' . $pm->key_payment . ' ' . $pm->atas_nama  ?></li>
		<?php endforeach; ?>
	</ul>

<hr>
<center>
	<h3>Terimakasih Sudah Menggunakan Jasa Kami</h3>
	<h5>Edo Rent Car<br>
	Jalan Sunan Giri 11, Sitirejo, Wagir, Kabupaten Malang</h5>
</div>
<script type="text/javascript">
	window.print();
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