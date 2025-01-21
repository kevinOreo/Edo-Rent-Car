<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Transaksi</h1>
		</div>

		        <?php echo $this->session->flashdata('pesan') ?>

		<table class="table-responsive table table-hover table-bordered">
			<tr>
				<th>No</th>
				<th>Customer</th>
				<th>Mobil</th>
				<th>Tgl. Rental</th>
				<th>Tgl. Kembali</th>
				<!-- <th>Harga/Hari</th> -->
				<!-- <th>Denda/Hari</th> -->
				<!-- <th>Total Denda</th> -->
				<th>Tgl. Dikembalikan</th>
				<!-- <th>Status Pengembalian</th> -->
				<th>Status Rental</th>
				<th>Bukti Pembayaran</th>
				<th>Action</th>
			</tr>
			<?php
				$no = 1;
				foreach ($transaksi as $tr) : ?>
					<tr>
						<input type="hidden" name="id_rental" id="id_rental" value="<?= $tr->id_rental ?>">
						<td><?php echo $no++ ?></td>
						<td id="nama" value="<?php echo $tr->nama ?>"><?php echo $tr->nama ?></td>
						<td id="mobil" value="<?php echo $tr->merk ?>"><?php echo $tr->merk ?></td>
						<td id="rental" value="<?php echo date('d/m/Y', strtotime($tr->tanggal_rental ))?>"><?php echo date('d/m/Y', strtotime($tr->tanggal_rental ))?></td>
						<td id="kembali" value="<?php echo date('d/m/Y', strtotime($tr->tanggal_kembali ))?>"><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali ))?></td>
						<!-- <td>Rp. <?php echo number_format($tr->harga,0,',','.')?></td> -->
						<!-- <td>Rp. <?php echo number_format($tr->denda,0,',','.')?></td> -->
						<!-- <td>Rp. <?php echo number_format($tr->total_denda,0,',','.')?></td> -->
						<?php 
                                $x = strtotime($tr->tanggal_kembali);
                                $y = strtotime($tr->tanggal_rental);
                                $jmlh = abs(($x - $y)/(60*60*24));
                        ?>
						<input type="hidden" name="jumlah" id="jumlah" value="<?= $jmlh ?>">
						<td>
							<?php 
								if($tr->tanggal_pengembalian=="0000-00-00"){
									echo "-";
								}else{
									echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
								}
							?>
						</td>

						<!-- <td>
							<?php if($tr->status_pengembalian == "Kembali") {
								echo "Kembali";
							}else{
								echo "Belum Kembali";
							}

							?>
						</td> -->

						<td>
							<?php if($tr->status_rental == "Selesai") {
								echo "Kembali";
							}else{
								echo "Belum Selesai";
							}

							?>
						</td>

						<td>
							
							<center>

								<?php if($tr->status_pembayaran == "1") { ?>
											<a class="btn btn-sm btn-primary text-white" ><i class="fas fa-check-circle"></i></a>
								<?php }else{ ?>
									<?php 
									if(empty($tr->bukti_pembayaran)) { ?>

										<button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>

									<?php } else { ?>

											<a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/transaksi/pembayaran/' . $tr->id_rental) ?>"><i class="fa fa-search" aria-hidden="true"></i></a>

									<?php } ?>
								<?php } ?>

								<!-- <?php if($tr->tanggal_pengembalian=="0000-00-00") { ?>
									<a class="btn btn-sm btn-success text-white wa-button2" value="<?= $tr->noTelp ?>" id="btn-wa"><i class="fa fa-whatsapp"></i></a>    
								<?php } ?> -->
								
								

							</center>

						</td>

						<td>
							
							<?php 

								if($tr->status_rental == "Selesai"){
								?>
									<a class="btn btn-sm btn-success text-white" href="<?= base_url('admin/transaksi/detail_transaksi/' . $tr->id_rental) ?>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
								<?php }else { ?>

									<div class="row">
										<a class="btn btn-sm btn-success mr-2" href="<?php echo base_url('admin/transaksi/transaksi_selesai/' . $tr->id_rental) ?>"><i class="fas fa-check"></i></a>
										<a class="btn btn-sm btn-danger delete-button" href="<?php echo base_url('admin/transaksi/batal_transaksi/' . $tr->id_rental) ?>"><i class="fas fa-times"></i></a>
									</div>

								<?php } ?>

								<input type="hidden" name="harga" id="harga" value="<?= $tr->harga ?>">
								<input type="hidden" name="status_pembayaran" id="status_pembayaran" value="<?php if($tr->status_pembayaran == "1"){ echo "Dikonfirmasi"; } ?>">
						</td>
					</tr>

			<?php endforeach; ?>
		</table>
	</section>
</div>