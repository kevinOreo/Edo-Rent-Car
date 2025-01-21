    <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Tambah Data Driver</h1>
        </div>
    </section>

    <?php foreach( $driver as $drv) : ?>
    <form method="POST" action="<?php echo base_url('admin/data_driver/update_driver_aksi') ?>" enctype="multipart/form-data">
        <div class="form-group">
    		<label>Nama Lengkap</label>
            <input type="hidden" name="id_driver" value="<?= $drv->id_driver?>">
    		<input type="text" name="nama" class="form-control" value="<?php echo $drv->namaDriver ?>">
    		<?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
    	</div>
        <div class="form-group">
    		<label>No. Telepon</label>
    		<input type="text" name="no_telepon" class="form-control" value="<?php echo $drv->no_Telp ?>">
    		<?php echo form_error('no_telepon','<span class="text-small text-danger">','</span>') ?>
    	</div>
        <div class="form-group">
        	<label>Gambar</label>
        	<input type="file" name="gambar" class="form-control">
        </div>

        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    	<button type="reset" class="btn btn-sm btn-danger">Reset</button>

    </form>
    <?php endforeach; ?>
</div>