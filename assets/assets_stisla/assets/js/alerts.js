const flashData = $(".flash-data").data("flashdata");

if (flashData) {
	Swal.fire({
		title: "Data Berhasil " + flashData,
		text: "",
		icon: "success",
	});
}

$(".cancel-button").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Yakin Akan Membatalkan Transaksi ?",
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
	// Ambil nomor telepon dari atribut 'value'
	var phoneNumber = $(this).attr("value");

	// Format nomor telepon agar sesuai dengan format WhatsApp (hilangkan spasi, tanda +, dsb.)
	phoneNumber = phoneNumber.replace(/\s+/g, "");

	// URL API WhatsApp dengan pesan default
	var message = "";
	var whatsappURL =
		"https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);

	// Buka WhatsApp Web di tab baru
	window.open(whatsappURL, "_blank");
});
