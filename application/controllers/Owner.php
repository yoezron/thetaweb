<?php

class Owner extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['staff'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/pageheader', $data);
        $this->load->view('template/pagesidebar', $data);
        $this->load->view('template/pagetopbar', $data);
        $this->load->view('owner/index', $data);
        $this->load->view('template/pagefooter');
    }
}
