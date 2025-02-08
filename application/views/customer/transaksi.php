<div class="container">
	<div class="card mx-auto" style="margin-top: 180px; margin-bottom: 50px;">
		
		<div class="card-header">
			Data Transaksi Anda
		</div>
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
        <?php if ($this->session->flashdata('pesan')) : ?>

        <?php endif; ?>
		<div class="card-body">
			<table class="table table-bordered table-striped table-responsive mx-auto">
				
				<tr>
					<th>No</th>
					<th>Merk Mobil</th>
					<th style="width:550px">No. Plat</th>
					<th>Harga/hari</th>
					<th>Denda/hari</th>
					<th>Tanggal Rental</th>
					<th>Tanggal Kembali</th>
					<th style="width:250px">Status</th>
					<th style="width:1050px">Action</th>
					<!-- <th>Batal</th> -->
				</tr>

				<?php $no = 1; foreach($transaksi as $tr) : ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $tr->merk ?></td>
						<td style="width: 550px"><?php echo $tr->no_plat ?></td>
						<td><?php echo number_format($tr->harga,0,',','.')?></td>
						<td><?php echo number_format($tr->denda,0,',','.')?></td>
						<td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental)); ?></td>
						<td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)); ?></td>
						<td style="width: 250px">
							<?php if ($tr->bukti_pembayaran == "") { ?>
								<span class="badge badge-danger">Bukti Pembayaran</span>
							<?php } ?>
							<?php if ($tr->status_pembayaran == "0") { ?>
								<span class="badge badge-warning">Belum Konfirmasi</span>
							<?php } else { ?>
								<span class="badge badge-success">Dikonfirmasi</span>
							<?php } ?>
							<?php if ($tr->status_rental == "Selesai") { ?>
								<span class="badge badge-primary">Selesai</span>
							<?php } ?>
						</td>
						<td style="width:1050px">
							
							<?php if($tr->status_rental == "Selesai") { ?>
								<a href="<?php echo base_url('customer/transaksi/pembayaran/' . $tr->id_rental) ?>" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i> Detail</a>
							<?php } else { ?>

								<a href="<?php echo base_url('customer/transaksi/pembayaran/' . $tr->id_rental) ?>" class="btn btn-sm btn-success"><i class="fa fa-money" aria-hidden="true"></i> Pembayaran</a>

								<a class="btn btn-sm btn-danger cancel-button" href="<?php echo base_url('customer/transaksi/batal_transaksi/' . $tr->id_rental) ?>"><i class="fa fa-minus-circle" aria-hidden="true"></i> Batal</a>

							<?php } ?>

						</td>
<!-- 						<td>
							<a onclick="return confirm('Anda yakin membatalkan?')" class="btn btn-sm btn-danger" href="<?php echo base_url('customer/transaksi/batal_transaksi/' . $tr->id_rental) ?>">Batal</a>
						</td> -->
					</tr>

				<?php endforeach; ?>
			</table>	
		</div>

	</div>
</div>