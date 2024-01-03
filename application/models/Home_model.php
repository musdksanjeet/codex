<?php

class Home_model extends CI_Model
{
    public function getTyres()
    {
        $query = $this->db->select('id, year_size_id, year_created_page_url, status')
                                  ->get('tyres');

        return $query->result_array();


    }
}
