<?php
class M_login extends CI_Model {
  //mengambil tabel users
  public $table = 'user_login';


  public function cekUser($email,$password){
    $query = "SELECT * FROM tb_user WHERE EMAIL = '$email' AND PASSWORD = '$password'";
  	//echo $query;exit();
  	$query = $this->db->query($query);

    	if($query->num_rows() > 0){
    		return $query->row();
    	}else{
    		return NULL;
    }
  }
  function ambilPasssword($email){
    $query = "SELECT * FROM tb_user WHERE EMAIL = '$email'";
    //echo $query;exit();

    $query = $this->db->query($query);

      if($query->num_rows() > 0){
        return $query->row();
      }else{
        return NULL;
    }
  }
  function insertAkun(){
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $tempat = $this->input->post('tempat');
        $tgl = $this->input->post('tgl');
        $kelamin = $this->input->post('kelamin');
        $password = $this->input->post('password');

        $query = "INSERT INTO user_login (EMAIL,PASSWORD,USERNAME,NAMA,TEMPAT_LAHIR,TANGGAL_LAHIR,JENIS_KELAMIN) VALUES ('$email','$password','$username','$nama','$tempat','$tgl','$kelamin')";
        $query = $this->db->query($query);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}