<?php
class M_registrasi extends CI_Model{
    public function registrasi(){

        return $this->db->get('user')->result();

    }
    public function proses_tambah_data(){
        $data=[
            "id_user" => $this->input->post('id_user'),
            "username" => $this->input->post('username'),
            "email" => $this->input->post('email'),
            "password" => $this->input->post('password'),
        ];
        $this->db->insert('user',$data);
    }
    public function hapus_data($id_user){
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }
    public function ambil_id_user($id_user){
        return $this->db->get_where('user', ['id_user' => $id_user])->row();
    }
    public function proses_edit_data(){
        $data=[
            "username" => $this->input->post('username'),
            "email" => $this->input->post('email'),
            "password" => $this->input->post('password'),
        ];
        $this->db->where('id_user',$this->input->post('id_user'));
        $this->db->update('user',$data);

    }
    public function ambilrole(){
        return $this->db->get('role');
    }

}