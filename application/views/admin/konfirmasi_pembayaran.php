<div class="main-content">
	
	<section class="section">
		<div class="section-header">
			<h1>Konfirmasi Pembayaran</h1>
		</div>

		<center class="card" style="width: 65%">
			<div class="card-header">
				Konfimasi Pembayaran
			</div>

			<div class="card-body">
				<form method="POST" action="<?php echo base_url('admin/transaksi/cek_pembayaran') ?>">
					<?php foreach($pembayaran as $pmb) : ?>

						
						<img style="width: 50%" src="<?= base_url('') . 'assets/upload/' . $pmb->bukti_pembayaran ?>">

						<br>
						<br>
						<hr>

						<a class="btn btn-sm btn-success" href="<?php echo base_url('admin/transaksi/download_pembayaran/') . $pmb->id_rental ?>"><i class="fas fa-download"></i> Download Bukti Pembayaran</a>
						<div class="custom-control custom-switch ml-5">
							<input type="hidden" name="id_rental" value="<?php echo $pmb->id_rental ?>">
							<input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_pembayaran">
						<label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
						</div>
						<br>
						<br>
						<br>
							<div class="form-group">
								<!-- <label>Driver</label> -->
									<select name="namaDriver" class="form-control">
										<option value="">--Pilih Driver--</option>
										<?php foreach ($driver as $dvr) :?>
											<option value="<?php echo $dvr->id_driver?>"><?php echo $dvr->namaDriver?></option>
										<?php endforeach ?>

									</select>
							</div>
						<hr>
						<a href="<?= base_url('admin/transaksi')?>" class="btn btn-sm btn-outline-secondary">Kembali</a>
						<button type="submit" class="btn btn-sm btn-primary">Simpan</button>

					<?php endforeach; ?>
				</form>
			</div>
		</center>
	</section>

</div>