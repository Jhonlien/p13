<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('BukuModel');
    }
    public function index()
    {
        if($this->input->server('REQUEST_METHOD') == 'POST'){
            $books_name = $this->input->post('nama_buku');
            if($books_name != ''){
                $this->BukuModel->add_books($books_name);
                $this->session->set_flashdata('msg','<script> alert("Sukses Menambah Data Buku!"); </script>');
                redirect('buku/');
            }
        }
        $get_all = $this->BukuModel->get_all_books();
        $data = ['title' => 'Data List Buku',
                 'all_books' => $get_all
                ];
        $this->load->view('template/header', $data);
        $this->load->view('index/databuku/index', $data);
        $this->load->view('template/footer');
    }

    public function edit($id){
        if($this->input->server('REQUEST_METHOD') == 'POST'){
            $books_name = $this->input->post('nama_buku');
            $this->BukuModel->update_books($id, $books_name);
            $this->session->set_flashdata('msg','<script> alert("Sukses Mengupdate Data Buku!"); </script>');
            redirect('buku/');
        }

        $get = $this->BukuModel->get_all_books_byId($id);//print_r($get);die;
        $data = ['title' => 'Edit Books', 'edit_books' => $get];

        $this->load->view('template/header', $data);
        $this->load->view('index/databuku/edit', $data);
        $this->load->view('template/footer');
    }

    public function delete($id){
        $this->BukuModel->delete_books($id);
        $this->session->set_flashdata('msg','<script> alert("Sukses Menghapus Buku!"); </script>');
        redirect('buku/');
    }
}