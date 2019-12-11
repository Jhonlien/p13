<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Peminjam extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('PeminjamModel','PM');
    }

    public function index(){
        if($this->input->get('filter')){
            $status = $this->input->get('status');

            $get = $this->db->query("SELECT `tb_peminjam`.`*`, `tb_buku`.`nama_buku` 
                                        FROM `tb_peminjam` JOIN `tb_buku` 
                                        ON `tb_peminjam`.`buku_id` = `tb_buku`.`id`
                                        WHERE `tb_peminjam`.`status` = '{$status}' ")->result_array();

            $data = ['title' => 'Data Peminjam', 'users' => $get];
            $this->load->view('template/header',$data);
            $this->load->view('index/datapinjam/index',$data);
            $this->load->view('template/footer');
        }
        else{
            $get = $this->PM->get_all_users();
            $data = ['title' => 'Data Peminjam', 'users' => $get];
            $this->load->view('template/header',$data);
            $this->load->view('index/datapinjam/index',$data);
            $this->load->view('template/footer');
        }
    }

    public function edit($id){
            if($this->input->server('REQUEST_METHOD') == 'POST'){
                $buku_id = $this->input->post('buku_id');
                $nama = $this->input->post('nama');
                $no_hp = $this->input->post('no_hp');
                $tgl_pinjam = $this->input->post('tgl_pinjam');
                $tgl_kembali = $this->input->post('tgl_kembali');
                $status = $this->input->post('status');
                if($this->PM->update($id,$buku_id,$nama, $no_hp, $tgl_pinjam, $tgl_kembali, $status)){
                    $this->session->set_flashdata('msg','<script> alert("Sukses Memperbaharui Data Peminjam!"); </script>');
                    redirect('peminjam/');
                }
            }
            $get = $this->PM->get_all_users_byId($id);
            $data = ['title' => 'Edit Data Peminjam', 'users_edit' => $get];
            $this->load->view('template/header',$data);
            $this->load->view('index/datapinjam/edit',$data);
            $this->load->view('template/footer');

    }

    public function add(){
        if($this->input->server('REQUEST_METHOD') == 'POST'){
            $buku_id =  $this->input->post('buku_id');
            $nama =  $this->input->post('nama');
            $no_hp =  $this->input->post('no_hp');
            $tgl_pinjam =  $this->input->post('tgl_pinjam');
            $tgl_kembali =  $this->input->post('tgl_kembali');
            $status =  'N';
            if($this->PM->add($buku_id, $nama, $no_hp, $tgl_pinjam, $tgl_kembali, $status)){
                $this->session->set_flashdata('msg','<script> alert("Sukses Menambah Data Peminjam!"); </script>');
                redirect('peminjam/');
            }
        }

        $data = ['title' => 'Tambah Data Peminjam'];
        $this->load->view('template/header',$data);
        $this->load->view('index/datapinjam/tambah',$data);
        $this->load->view('template/footer');
    }

    // public function filter(){

    // }

    public function delete($id){
        $this->db->query("DELETE FROM `tb_peminjam` WHERE `id` = {$id}");
        $this->session->set_flashdata('msg','<script> alert("Sukses Menghapus Data Peminjam!"); </script>');
        redirect('peminjam/');
    }

    public function confirm($id){
        $this->db->query("UPDATE `tb_peminjam` SET `status` = 'Y' WHERE `id` = {$id}");
        redirect('peminjam/');
    }

}