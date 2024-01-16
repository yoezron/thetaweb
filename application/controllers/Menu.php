<?php

class Menu extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Manajemen Menu';
        $data['staff'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('staff_menu')->result_array();

        $this->load->view('template/pageheader', $data);
        $this->load->view('template/pagesidebar', $data);
        $this->load->view('template/pagetopbar', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('template/pagefooter');
    }
}
