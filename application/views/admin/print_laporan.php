<head>
    <style>
        /* Gaya untuk tampilan layar */
        table {
            width: 100%;
            padding: 1rem;
            /* border-collapse: collapse; */
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }

        table th {
            color: white;
            padding: 12px;
            text-align: left;
        }

        table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        table tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        table tr:nth-child(even) {
            background-color: #ffffff;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        h3 {
            font-family: Arial, sans-serif;
            color: #333;
            margin-bottom: 20px;
        }

        .table-responsive {
            overflow-x: auto;
        }

        /* Gaya khusus untuk cetakan */
        @media print {
            body {
                margin: 0;
                padding: 20px; /* Sesuaikan padding sesuai kebutuhan */
                font-size: 12px; /* Ukuran font lebih kecil untuk cetakan */
            }

            h3 {
                text-align: center;
                font-size: 18px; /* Judul lebih besar */
                margin-bottom: 10px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                font-size: 10px; /* Ukuran font tabel lebih kecil */
            }

            table th, table td {
                padding: 6px; /* Padding lebih kecil untuk cetakan */
                /* border: 1px solid #000; Garis tabel lebih tebal */
            }

            table th {
                background-color: #4CAF50;
                color: white;
            }

            .no-print {
                display: none; /* Sembunyikan elemen yang tidak perlu dicetak */
            }

            /* Pastikan tabel tidak terpotong */
            .table-responsive {
                overflow: visible;
            }

            /* Tambahkan page break jika tabel terlalu panjang */
            table {
                page-break-inside: auto;
            }

            tr {
                page-break-inside: avoid;
                page-break-after: auto;
            }
        }
    </style>
</head>
<div class="no-print">
    <button onclick="window.print()">Cetak Laporan</button>
</div>

<h3 style="text-align: center">Laporan Transaksi Rental Mobil</h3>

<p style="text-align: center; font-size: 14px;" class="no-print">
    Periode: <?php echo date('d F Y', strtotime($_GET['dari'])); ?> hingga <?php echo date('d F Y', strtotime($_GET['sampai'])); ?>
</p>

<table>
    <tr>
        <td>Dari Tanggal</td>
        <td>:</td>
        <td><?php echo date('d F Y',strtotime($_GET['dari'])); ?></td>
    </tr>
    <tr>
        <td>Sampai Tanggal</td>
        <td>:</td>
        <td><?php echo date('d F Y',strtotime($_GET['sampai'])); ?></td>
    </tr>
</table>

<table class="table-responsive table table-striped mt-3" id="laporan-table">
    <thead>
        <tr>
            <th>No</th>
            <th>Customer</th>
            <th>Mobil</th>
            <th>Tgl. Rental</th>
            <th>Tgl. Kembali</th>
            <th>Harga/Hari</th>
            <th>Denda/Hari</th>
            <th>Total Denda</th>
            <th>Tgl. Dikembalikan</th>
            <th>Status Pengembalian</th>
            <th>Status Rental</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($laporan as $tr) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $tr->nama ?></td>
                <td><?php echo $tr->merk ?></td>
                <td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental)) ?></td>
                <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)) ?></td>
                <td>Rp. <?php echo number_format($tr->harga, 0, ',', '.') ?></td>
                <td>Rp. <?php echo number_format($tr->denda, 0, ',', '.') ?></td>
                <td>Rp. <?php echo number_format($tr->total_denda, 0, ',', '.') ?></td>
                <td>
                    <?php
                    if ($tr->tanggal_pengembalian == "0000-00-00") {
                        echo "-";
                    } else {
                        echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                    }
                    ?>
                </td>
                <td>
                    <?php if ($tr->status_pengembalian == "Kembali") {
                        echo "Kembali";
                    } else {
                        echo "Belum Kembali";
                    }
                    ?>
                </td>
                <td>
                    <?php if ($tr->status_rental == "Selesai") {
                        echo "Kembali";
                    } else {
                        echo "Belum Selesai";
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script type="text/javascript">
    window.print();
</script>