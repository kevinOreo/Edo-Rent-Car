<?php 

	class Data_driver extends CI_Controller{


		public function index(){
			$this->rental_model->admin_login();
			$data['driver'] = $this->rental_model->get_data('driver')->result();

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/Data_driver',$data);
			$this->load->view('templates_admin/footer');
		}

        public function tambah_driver(){
			$this->rental_model->admin_login();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_tambah_driver');
			$this->load->view('templates_admin/footer');
		}

        public function tambah_driver_aksi(){
            $this->_rules();
            if ($this->form_validation->run() == FALSE) {
                $this->tambah_driver();
            }else{
				$nama_driver	= $this->input->post('nama');
				$telp			= $this->input->post('no_telepon');
				$gambar			= $_FILES['gambar']['name'];

				if($gambar='0'){}else{
					$config['upload_path']		= './assets/upload';
					$config['allowed_types']	= 'jpg|jpeg|webp|tfif|png';

					$this->load->library('upload', $config);
					if(!$this->upload->do_upload('gambar')){
					echo "Gambar Driver Gagal Diupload!";
					}else{
					$gambar = $this->upload->data('file_name');
					}
				}

				$data = array(
					'namaDriver'		=> $nama_driver,
					'fotoDriver'		=> $gambar,
					'no_Telp'			=> '+62'.$telp,
					'status'			=> 1
				);
				$this->rental_model->insert_data($data, 'driver');
				$this->session->set_flashdata('pesan','Ditambahkan');
				redirect('admin/data_driver');
			}
        }

        public function _rules(){
            $this->form_validation->set_rules('nama', 'Nama Driver', 'required');
            $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required');
        }

		public function delete_driver($id) {
			$this->rental_model->admin_login();
			$where = array('id_driver' => $id);
			$this->rental_model->delete_data($where, 'driver');
			$this->session->set_flashdata('pesan','Dihapus');
		redirect('admin/data_driver');
		}

		public function update_driver($id){
			$this->rental_model->admin_login();
			$where = array('id_driver' => $id);
			$data['driver'] = $this->db->query("SELECT * FROM driver WHERE id_driver = '$id'")->result();

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_update_driver',$data);
			$this->load->view('templates_admin/footer');
		}

		public function update_driver_aksi(){
			$this->rental_model->admin_login();
			$this->_rules();

			if($this->form_validation->run() == FALSE){
				$this->update_driver($this->input->post('id_driver'));
			} else {
				$id		= $this->input->post('id_driver');
				$nama	= $this->input->post('nama');
				$telp	= $this->input->post('no_telepon');
				$gambar	= $_FILES['gambar']['name'];

				if($gambar='0'){}else{
					$config['upload_path']		= './assets/upload';
					$config['allowed_types']	= 'jpg|jpeg|webp|tfif|png';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('gambar')){
						$gambar = $this->upload->data('file_name');
						$this->db->set('fotoDriver', $gambar);
					}else{
						echo $this->upload->display_errors();
					}
				}

				$data = array(
					'namaDriver'	=> $nama,
					'no_Telp'		=> $telp,
					'fotoDriver'	=> $gambar,
					'status'		=> 1
				);

				$where = array(
					'id_driver' => $id
				);

				$this->rental_model->update_data('driver', $data, $where);
				$this->session->set_flashdata('pesan', 'Diubah');
			redirect('admin/data_driver');
			}
		}
    }

?>