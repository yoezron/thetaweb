<?php

class Menu_model extends CI_Model
{

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('staff_menu');
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('staff_menu', $data);
    }

    public function getSubmenu()
    {
        $query = "SELECT `staff_sub`.*, `staff_menu`.`menu`
                    FROM `staff_sub` JOIN `staff_menu`
                    ON `staff_sub`.`menu_id` = `staff_menu`.`id`
        ";

        return $this->db->query($query)->result_array();
    }
}
