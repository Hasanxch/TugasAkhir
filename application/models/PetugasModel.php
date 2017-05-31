<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 22/05/2017
 * Time: 18.55
 */
class PetugasModel extends CI_Model {
    function profilSekolah($where){
        $this->db->where($where);
        return $this->db->get('profil');
    }

    public function lihat_kecamatan(){
        return $this->db->get('kecamatan');
    }

    public function lihat_kabupaten(){
        return $this->db->get('kabupaten');
    }

    function asetBangunan($where){
        $this->db->where($where);
        return $this->db->get('aset_bangunan');
    }

    function asetTanah($where){
        $this->db->where($where);
        return $this->db->get('aset_tanah');
    }

    function jurusan($where){
        $this->db->where($where);
        return $this->db->get('jurusan');
    }

    function siswa($where){
        $this->db->where($where);
        return $this->db->get('siswa');
    }

    function sarana($where){
        $this->db->where($where);
        return $this->db->get('sarpras');
    }

    function kepsek($where){
        $this->db->where($where);
        return $this->db->get('kepsek');
    }

    function wakasek($where){
        $this->db->where($where);
        return $this->db->get('wakasek');
    }

    function guru($where){
        $this->db->where($where);
        return $this->db->get('data_guru');
    }

    function tenagaPendidikan($where){
        $this->db->where($where);
        return $this->db->get('tenkependik');
    }

    function prestasi($where){
        $this->db->where($where);
        return $this->db->get('prestasi');
    }
}
?>