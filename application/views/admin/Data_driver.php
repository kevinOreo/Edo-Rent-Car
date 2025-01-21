<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Driver</h1>
        </div>

        <a href="<?php echo base_url('admin/data_driver/tambah_driver')?>" class="btn btn-primary mb-3">Tambah Driver</a>

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
        <?php if ($this->session->flashdata('pesan')) : ?>

        <?php endif; ?>

        <table class="table table-striped table-bordered">
        	<tr>
        		<th>No</th>
        		<th>Foto</th>
        		<th>Nama Driver</th>
        		<th>No. Telp</th>
                <!-- <th>Rate Driver</th> -->
        		<th>Status</th>
        		<th>Aksi</th>
        	</tr>

            <?php 
            $no = 1;
            foreach ($driver as $drv) :
            ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><img height="50px" src="<?php echo base_url() . 'assets/upload/' . $drv->fotoDriver ?>"></td>
                <td><?php echo $drv->namaDriver ?></td>
                <td><?php echo $drv->no_Telp ?></td>
                <!-- <td><?= $drv->rate ?></td> -->
                <td><?php
                    if($drv->status == "0"){
                        echo "<span class='badge badge-danger'> Tidak Tersedia </span>";
            		} else{
            			echo "<span class='badge badge-primary'> Tersedia </span>";
            		}
                    
                ?>
                </td>
                <td>
                    <div class="row">
                        <a href="<?php echo base_url('admin/data_driver/delete_driver/') . $drv->id_driver?>" class="btn btn-sm btn-danger mr-1 delete-button"><i class="fas fa-trash"></i></a>
                        <a href="<?php echo base_url('admin/data_driver/update_driver/') . $drv->id_driver?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    </div>
                </td>
            </tr>

        <?php endforeach; ?>
        </table>


    </section>
</div>