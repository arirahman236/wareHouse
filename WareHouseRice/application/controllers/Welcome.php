<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		 parent::__construct();
     //if (empty($this->session->userdata('id'))) {
       //redirect('login.html');
     //}
		$this->load->model('M_login');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	function aksiLogin(){
    // Mengambil inputan username
		$email = $this->input->post('email');
    // Mengambil inputan password
		$password = $this->input->post('password');

		$cek = $this->M_login->cekUser($email,$password);//Mengecek data user di database
    if ($cek) {
       if($cek->STATUS == '1') {
        $data_session = array(
          'email' => $email,
          'id' => $cek->ID_USER,
          'nama' => $cek->NAMA,
          'status' => 'login',
          'level' => $cek->STATUS
          );

        $this->session->set_userdata($data_session);//Mengubah data user menjadi session

        redirect('warehouse-main.html');//mengarahkan ke halaman admin
      }else if($cek->STATUS == '2') {
        $data_session = array(
          'email' => $email,
          'id' => $cek->ID,
          'nama' => $cek->NAMA,
          'status' => 'login',
          'level' => $cek->STATUS
          );

        $this->session->set_userdata($data_session);//Mengubah data user menjadi session

        redirect('warehouse-main.html');//mengarahkan ke halaman petugas
      }
    }
		else{
      //Menampilkan alert jika username atau password salah
			echo "<script>alert('Gagal Login Pastikan Username dan Password anda Benar !!!');</script>";
			 $this->load->view('welcome_message');
		}
	}
  function main(){
    $this->load->view('warehouse_main');
  }
	function lupaPassword(){
		$this->load->view('lupa_password');
	}
  
	public function kirimEmail()
    {	
    	$email=$this->input->post('email');
    	$password = $this->M_login->ambilPasssword($email);
      // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'arirahman236@gmail.com',  // Email gmail
            'smtp_pass'   => '4r14r3m4',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('arirahman236@gmail.com', 'coba.com');

        // Email penerima
        $this->email->to($email); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        $this->email->attach('http://images.summitmedia-digital.com/cosmo/images/2018/11/27/blackpink-lisa-1543288094.jpg');

        // Subject email
        $this->email->subject('Password Baru anda | PhotosTing');

        // Isi email
        $this->email->message("Password baru anda adalah ".$password->PASSWORD);

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }

    function daftarAkun(){
      $this->load->view('view_regristasi');
    }
    function prosesDaftarAkun(){
      $add = $this->M_login->insertAkun();
      redirect('Welcome');
    }

  public function logout()
  {
    //Menghapus semua session (sesi)
    $this->session->sess_destroy();
    redirect('login.html');
  }
}


