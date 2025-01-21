    <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Tambah Data Driver</h1>
        </div>
    </section>
    <form method="POST" action="<?php echo base_url('admin/data_driver/tambah_driver_aksi') ?>" enctype="multipart/form-data">
        <div class="form-group">
    		<label>Nama Lengkap</label>
    		<input type="text" name="nama" class="form-control">
    		<?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
    	</div>
		<div class="form-group">
			<label>Nomor Telepon</label>
			<div class="input-group">
				<div class="input-group-prepend">
    				<span class="input-group-text" id="basic-addon1">+62</span>
    			</div>
				<input type="text" name="no_telepon" class="form-control" aria-label="telepon" aria-describedby="basic-addon1">
    			<?php echo form_error('no_telepon','<span class="text-small text-danger">','</span>') ?>
			</div>
		</div>
        <div class="form-group">
        	<label>Gambar</label>
        	<input type="file" name="gambar" class="form-control">
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    	<button type="reset" class="btn btn-sm btn-danger">Reset</button>
    </form>
</div>