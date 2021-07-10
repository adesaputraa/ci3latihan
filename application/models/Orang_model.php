<?php 


class Orang_model extends CI_model
{
    public function getAllOrang()
    {
        return $this->db->get('orang')->result_array();
    }

    public function getOrang($limit, $start, $keyword = null)
    {
        if ($keyword)
        {
            $this->db->like('nama', $keyword);
            $this->db->or_like('email', $keyword);
        }
        return $this->db->get('orang', $limit, $start)->result_array();
    }

    public function countAllOrang()
    {
        return $this->db->get('orang')->num_rows();
    }
}

?>