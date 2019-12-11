<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeminjamModel extends CI_Model{
    public $_table = 'tb_peminjam';

    public function get_all_users(){
        return $this->db->query("SELECT `tb_peminjam`.`*`, `tb_buku`.`nama_buku` 
                                    FROM {$this->_table} JOIN `tb_buku` 
                                    ON `tb_peminjam`.`buku_id` = `tb_buku`.`id` ")->result_array();
    }

    public function add($buku_id, $nama, $no_hp, $tgl_pinjam, $tgl_kembali, $status){
        $data = [
                    'buku_id' => $buku_id,
                    'nama' => $nama,
                    'no_hp' => $no_hp,
                    'tgl_pinjam' => $tgl_pinjam,
                    'tgl_kembali' => $tgl_kembali,
                    'status' => $status
                ]; 
        return $this->db->insert($this->_table, $data);
    }

    public function get_all_users_byId($id){
        return $this->db->query("SELECT `tb_peminjam`.`*`, `tb_buku`.`nama_buku` FROM {$this->_table} JOIN `tb_buku` 
        ON `tb_peminjam`.`buku_id` = `tb_buku`.`id` WHERE `tb_peminjam`.`id` = {$id}")->result_array();
    }

    public function update($id,$buku_id,$nama, $no_hp, $tgl_pinjam, $tgl_kembali, $status){
        return $this->db->query("UPDATE {$this->_table} SET `buku_id`       = '{$buku_id}',
                                                            `nama`          = '{$nama}',
                                                            `no_hp`         = '{$no_hp}',
                                                            `tgl_pinjam`    = '{$tgl_pinjam}',
                                                            `tgl_kembali`   = '{$tgl_kembali}',
                                                            `status`        = '{$status}'
                                                            WHERE `id` = {$id}");
    }
}