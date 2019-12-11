<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuModel extends CI_Model{
    public $_table = 'tb_buku';

    public function get_all_books(){
        return $this->db->query("SELECT * FROM {$this->_table} ORDER BY id DESC")->result_array();
    }

    public function get_all_books_byId($id){
        return $this->db->query("SELECT * FROM {$this->_table} WHERE id = {$id}")->result_array();
    }

    public function add_books($name){
        $data = ['nama_buku' => $name];
        return $this->db->insert($this->_table, $data);
    }


    public function update_books($id, $name){
        return $this->db->query("UPDATE {$this->_table} SET `nama_buku` = '{$name}' WHERE `id` = {$id}");
    }

    public function delete_books($id){
    return $this->db->query("DELETE FROM {$this->_table} WHERE `id` = {$id}");
    }

}