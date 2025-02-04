<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Transaksi</h1>
        </div>

        <?php foreach ($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">
                <center>
                    <img height="50%" src="<?php echo base_url() ?>assets/assets_shop/img/logo.png">
                    <h2>Detail Transaksi : #<?= $dt->id_rental ?></h2>
                    <h3>Nama Rental      : <?= $dt->nama_rental ?></h3>
                    <a class="btn btn-sm btn-success text-white wa-button" value="<?= $dt->noTelp ?>" id="btn-wa"><i class="fa fa-whatsapp"></i></a>
                    <button type="button" readonly class="btn btn-sm btn-success" value="<?= $dt->status_rental ?>"><?=$dt->status_rental ?></button>    
                </center><hr>
                <div class="row">
                    <!-- Data customer -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <?php foreach ($customer as $cs) :  ?>
                            <label>Customer ID  :</label>
                            <input type="text" disabled class="form-control" value="<?= $cs->id_customer ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama Customer    :</label>
                            <input type="text" id="nama" disabled class="form-control" value="<?= $cs->nama ?>">
                        </div>
                        <div class="form-group">
                            <label>Alamat   :</label>
                            <input type="text" disabled class="form-control" value="<?= $cs->alamat ?>">
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon    :</label>
                            <input type="text" disabled class="form-control" value="<?= $cs->no_telp ?>">
                        </div>
                        <div class="form-group">
                            <label>Nomor KTP    :</label>
                            <input type="text" disabled class="form-control" value="<?= $cs->no_ktp ?>">
                        </div>
                        <?php endforeach ?>
                    </div>
                    <!-- Data Mobil -->
                    <div class="col-md-3">
                        <?php foreach ($mobil as $mb) : ?>
                        <div class="form-group">
                            <label>Unit Mobil   :</label>
                            <input type="text" id="mobil" disabled class="form-control" value="<?= $mb->merk ?>">
                        </div>
                        <div class="form-group">
                            <label>Type Mobil   :</label>
                            <input type="text" disabled class="form-control" value="<?= $mb->kode_type ?>">
                        </div>
                        <div class="form-group">
                            <label>Tahun Keluaran Unit Mobil   :</label>
                            <input type="text" disabled class="form-control" value="<?= $mb->tahun ?>">
                        </div>
                        <div class="form-group">
                            <label>Plat Nomor Unit Mobil   :</label>
                            <input type="text" id="plat" disabled class="form-control" value="<?= $mb->no_plat ?>">
                        </div>
                        <div class="form-group">
                            <label>Warna Unit Mobil   :</label>
                            <input type="text" disabled class="form-control" value="<?= $mb->warna ?>">
                        </div>
                        <?php endforeach ?>
                    </div>
                    <!-- Data Driver -->
                    <div class="col-md-3">
                    <?php foreach ($driver as $dv) : ?>
                        <div class="form-group">
                            <center><label>Foto Driver</label><br>
                            <img draggable="false" height="234px" src="<?= base_url() . 'assets/upload/' . $dv->fotoDriver ?>" alt="foto"></center>
                        </div>
                        <div class="form-group">
                            <label>Nama Driver  :</label>
                            <input type="text" id="nmDriver" disabled class="form-control" value="<?= $dv->namaDriver ?>" style="font-size: 12px">
                        </div>
                        <div class="form-group">
                            <label>Telepon Driver  :</label>
                            <input type="text" id="telpDriver" disabled class="form-control" value="<?= $dv->no_Telp ?>">
                        </div>
                    <?php endforeach ?>
                    </div>
                    <!-- Data Keuangan -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tanggal Sewa</label>
                            <input type="text" id="tglsewa" disabled class="form-control" value="<?= $dt->tanggal_rental ?>">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input type="text" id="tglkembali" disabled class="form-control" value="<?= $dt->tanggal_pengembalian ?>">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Hari Sewa</label>
                            <?php 
                                $x = strtotime($dt->tanggal_kembali);
                                $y = strtotime($dt->tanggal_rental);
                                $jmlh = floor(($x - $y)/(60*60*24));
                            ?>
                            <input type="text" id="jmlhHari" disabled class="form-control" value="<?= $jmlh ?> Hari">
                        </div>
                        <?php 
                            $harga = $dt->harga;
                            $total = $harga * $jmlh;
                        ?>
                        <div class="form-group">
                            <label>Total Bayar</label>
                            <button type="button" id="total_bayar" disabled class="form-control bg-primary text-white" value="Rp. <?= number_format($total,0,',','.') ?>">
                                Rp. <?= number_format($total,0,',','.') ?></button>
                        </div>
                        <?php 
                            $denda = $dt->denda;
                            $harga = $dt->harga;

                            $x = strtotime($dt->tanggal_pengembalian);
                            $y = strtotime($dt->tanggal_kembali);

                            $selisih = ceil(($x-$y)/(60 * 60 * 24));

                            if($selisih > 1){
                                $total_denda = ($selisih * $denda) + $harga;
                            }else{
                                $total_denda = $selisih * $denda;
                            }

                            $total_biaya = $total + $total_denda ;
                        ?>
                        <div class="form-group">
                            <label>Denda</label>
                            <button type="button" id="total_denda" disabled class="form-control text-white bg-danger" value="Rp. <?= number_format($total_denda,0,',','.') ?>">
                            Rp. <?= number_format($total_denda,0,',','.') ?></button>
                        </div>

                         <div class="form-group">
                            <label>Total Biaya</label>
                            <button type="button" id="total_biaya" disabled class="form-control text-white bg-success" value="Rp. <?= number_format($total_biaya,0,',','.') ?>">
                            Rp. <?= number_format($total_biaya,0,',','.') ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php endforeach ?>
    </section>
</div>