const flashData = $(".flash-data").data("flashdata");

if (flashData) {
	Swal.fire({
		title: "Data Berhasil " + flashData,
		text: "",
		icon: "success",
	});
}

$(".delete-button").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Yakin Akan Menghapus Data ?",
		text: "Data Akan Hilang!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus Data",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});

// Menggunakan jQuery untuk mendengarkan event click pada elemen dengan class 'wa-button'
$(".wa-button").on("click", function () {
	// Membuat objek Date untuk mendapatkan waktu saat ini
	var now = new Date();

	// Array untuk nama hari dalam seminggu
	var daysOfWeek = [
		"Minggu",
		"Senin",
		"Selasa",
		"Rabu",
		"Kamis",
		"Jumat",
		"Sabtu",
	];

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
	var timeString = day + " ," + hours + ":" + minutes + ":" + seconds;

	// Ambil nomor telepon dari atribut 'value'
	var phoneNumber = $(this).attr("value");
	var nama = $("#nama").attr("value");
	var plat = $("#plat").attr("value");
	var driver = $("#nmDriver").attr("value");
	var telp = $("#telpDriver").attr("value");
	var mobil = $("#mobil").attr("value");
	var sewa = $("#tglsewa").attr("value");
	var kmbl = $("#tglkembali").attr("value");
	var jmlh = $("#jmlhHari").attr("value");
	var byr = $("#total_bayar").attr("value");
	var denda = $("#total_denda").attr("value");
	var total = $("#total_biaya").attr("value");

	// Format nomor telepon agar sesuai dengan format WhatsApp (hilangkan spasi, tanda +, dsb.)
	phoneNumber = phoneNumber.replace(/\s+/g, "");

	// URL API WhatsApp dengan pesan default
	var message =
		"Edo Rent Car | *Transaksi Selesai*\n" +
		"\nWaktu : " +
		timeString +
		"\nPelanggan Atas Nama : " +
		nama +
		"\nUnit Mobil : " +
		mobil +
		"\nNomor Plat Mobil : " +
		plat +
		"\n\n -- *Data Driver* --" +
		"\nNama Driver : " +
		driver +
		"\nKontak Driver : " +
		telp +
		"\n\n -- *Data Transaksi* --" +
		"\nTanggal Sewa : " +
		sewa +
		"\nTanggal Kembali : " +
		kmbl +
		"\nLama Sewa : " +
		jmlh +
		"\nTotal Bayar : " +
		byr +
		"\nTotal Denda : " +
		denda +
		"\nTotal Biaya : " +
		total +
		"\n\n" +
		"Terimakasih Telah Melakukan Pembayaran dan Menaruh Kepercayaan Penuh Pada Jasa Kami. \n" +
		"\n*Edo Rent Car*";
	var whatsappURL =
		"https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);

	// Buka WhatsApp Web di tab baru
	window.open(whatsappURL, "_blank");
});

$(".wa-button2").on("click", function () {
	// Membuat objek Date untuk mendapatkan waktu saat ini
	var now = new Date();

	// Array untuk nama hari dalam seminggu
	var daysOfWeek = [
		"Minggu",
		"Senin",
		"Selasa",
		"Rabu",
		"Kamis",
		"Jumat",
		"Sabtu",
	];

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
	var timeString = day + ", " + hours + ":" + minutes + ":" + seconds;

	var phoneNumber = $(this).attr("value");
	var nama = $("#nama").attr("value");
	var mobil = $("#mobil").attr("value");
	var id_rental = $("#id_rental").attr("value");
	var harga = $("#harga").attr("value");
	var rental = $("#rental").attr("value");
	var kembali = $("#kembali").attr("value");
	var jumlah = $("#jumlah").attr("value");

	phoneNumber = phoneNumber.replace(/\s+/g, "");

	var message =
		"Edo Rent Car | Pembayaran Telah *Dikonfirmasi* Pada : " +
		timeString +
		"\n\nPelanggan Yang Terhormat, " +
		nama +
		"\nTerimakasih Telah Melakukan Pembayaran Untuk Transaksi : " +
		id_rental +
		"\nUnit Mobil : " +
		mobil +
		"\nTanggal Rental : " +
		rental +
		"\nTanggal Pengembalian Mobil : " +
		kembali +
		"\nLama Sewa : " +
		jumlah +
		" Hari" +
		"\n*Total Harga :* " +
		"*" +
		harga +
		"*" +
		"\n\n*Silahkan Cek Kembali Detail Transaksi Anda di Website Kami" +
		"\n*Edo Rent Car*";
	var whatsappURL =
		"https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);

	window.open(whatsappURL, "_blank");
});

function showCurrentTime() {
	// Membuat objek Date untuk mendapatkan waktu saat ini
	var now = new Date();

	// Array untuk nama hari dalam seminggu
	var daysOfWeek = [
		"Minggu",
		"Senin",
		"Selasa",
		"Rabu",
		"Kamis",
		"Jumat",
		"Sabtu",
	];

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
	document.getElementById("currentTime").innerText = day + " , " + timeString;

	// Panggil fungsi showCurrentTime setiap detik untuk memperbarui waktu
	setInterval(showCurrentTime, 1000);

	// Menampilkan waktu saat pertama kali halaman dibuka
	showCurrentTime();
}
