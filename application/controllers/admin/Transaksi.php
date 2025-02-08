<?php  


	class Transaksi extends CI_Controller{
		
		public function index(){
			$this->rental_model->admin_login();

			$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer ORDER BY tr.id_rental ASC")->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/Data_transaksi',$data);
			$this->load->view('templates_admin/footer');
		}


		public function pembayaran($id){
			$this->rental_model->admin_login();
			$where = array('id_rental' => $id);
			$data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental='$id'")->result();
			$data['driver'] = $this->db->query("SELECT * FROM driver WHERE status = '1'")->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/konfirmasi_pembayaran',$data);
			$this->load->view('templates_admin/footer');

		}

		public function cek_pembayaran(){
			$this->rental_model->admin_login();
			$id 				= $this->input->post('id_rental');
			$status_pembayaran	= $this->input->post('status_pembayaran');
			$driver				= $this->input->post('namaDriver');

			$data = array(
				'status_pembayaran'	=> $status_pembayaran,
				'id_driver'			=> $driver
			);

			$where = array(
				'id_rental'		=> $id
			);
			$id_driver = array(
				'id_driver'		=> $driver
			);

			$status = array(
				'status' => '0'
			);

			$this->rental_model->update_data('transaksi',$data,$where);
			$this->rental_model->update_data('driver',$status,$id_driver);

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Pembayaran telah dikonfirmasi
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('admin/transaksi');
		}


		public function download_pembayaran($id){
			$this->rental_model->admin_login();
			$this->load->helper('download');
			$filePembayaran = $this->rental_model->downloadPembayaran($id);
			$file = 'assets/upload/' . $filePembayaran['bukti_pembayaran'];
			force_download($file, NULL);
		}

		public function detail_transaksi($id){
			$this->rental_model->admin_login();
			$where = array('id_rental' => $id);
			$data['detail'] 	= $this->db->query("SELECT * FROM transaksi WHERE id_rental='$id'")->result();
			$data['customer'] 	= $this->db->query("SELECT * FROM customer cs, transaksi tr WHERE cs.id_customer = tr.id_customer && tr.id_rental = '$id'")->result();
			$data['mobil']		= $this->db->query("SELECT * FROM mobil mb, transaksi tr WHERE mb.id_mobil = tr.id_mobil && tr.id_rental = '$id'")->result();
			$data['driver']		= $this->db->query("SELECT * FROM driver dv, transaksi tr WHERE dv.id_driver = tr.id_driver && tr.id_rental = '$id'")->result();

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/detail_transaksi', $data);
			$this->load->view('templates_admin/footer');
		}

		public function transaksi_selesai($id){
			$this->rental_model->admin_login();
			$where = array('id_rental' => $id);
			$data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental='$id'")->result();

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/transaksi_selesai',$data);
			$this->load->view('templates_admin/footer');
		}

		public function transaksi_selesai_aksi(){
			$this->rental_model->admin_login();
			$id 					= $this->input->post('id_rental');
			$tanggal_pengembalian	= $this->input->post('tanggal_pengembalian');
			$status_rental 			= $this->input->post('status_rental');
			$status_pengembalian	= $this->input->post('status_pengembalian');
			$tanggal_kembali		= $this->input->post('tanggal_kembali');

			$harga					= $this->input->post('harga');
			$denda					= $this->input->post('denda');

			
			$x = strtotime($tanggal_pengembalian);
			$y = strtotime($tanggal_kembali);

			$jmlh = ceil(($x - $y)/(60*60*24));

			if($jmlh > 1) {
				$total_denda			= ($jmlh * $denda) + $harga;
			}
			else{
				$total_denda			= $jmlh * $denda;
			}

			$data = array(
				'tanggal_pengembalian'	=> $tanggal_pengembalian,
				'status_rental'			=> $status_rental,
				'status_pengembalian'	=> $status_pengembalian,
				'total_denda'			=> $total_denda
			);

			$where = array( 'id_rental' => $id);



			$this->rental_model->update_data('transaksi', $data, $where);
			if($status_rental == 'Selesai'){
				$id_mobil = $this->input->post('id_mobil');
				$data2	= array('status'    => '1');
				$where2 = array('id_mobil'  => $id_mobil );
				$this->rental_model->update_data('mobil', $data2, $where2);

				$id_driver = $this->input->post('id_driver');
				$data3  = array('status' => '1');
				$where3 = array('id_driver' => $id_driver );
				$this->rental_model->update_data('driver', $data3, $where3); 
			}else{
			}

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Transaksi selesai
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');

			redirect('admin/transaksi');
		}

	public function batal_transaksi($id){
			$this->rental_model->admin_login();

			$alasan_batal = $this->input->post('alasan_batal');

		    // Ambil data transaksi berdasarkan ID rental
			$where = array('id_rental' => $id);
			$data  = $this->rental_model->get_where($where, 'transaksi')->row();

			// Update data mobil = 1 (Tersedia)
			$where2 = array('id_mobil' => $data->id_mobil);
			$data2	= array('status'   => '1');
			$this->rental_model->update_data('mobil', $data2, $where2);

			// Hapus Bukti_Pembayaran lama
			$bukti = $this->rental_model->get_where($where, 'transaksi')->row();

			// Jika ada bukti pembayaran, hapus file gambar dari folder
			if($bukti && !empty($bukti->bukti_pembayaran)){
				$file_path = FCPATH . 'assets/upload' . $bukti->bukti_pembayaran;
				if(file_exists($file_path)){
					unlink($file_path);
				}
			}


			// Update Transaksi -> status_batal
			$data_transaksi = array(
				'status_batal' => $alasan_batal,
				'status_pembayaran' => '0',
				'bukti_pembayaran' => ''
			);

			$this->rental_model->update_data('transaksi', $data_transaksi, $where);

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Transaksi Berhasil dibatalkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/transaksi');

		}
	}

?>