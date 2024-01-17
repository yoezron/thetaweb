<?php

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');
    }

    public function index()
    {
        $data['title'] = 'Manajemen Menu';
        $data['staff'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('staff_menu')->result_array();


        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/pageheader', $data);
            $this->load->view('template/pagesidebar', $data);
            $this->load->view('template/pagetopbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('template/pagefooter');
        } else {
            $this->db->insert('staff_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Baru berhasil ditambahkan!</div>');
            redirect('menu');
        }
    }

    public function delete($id)
    {
        $this->Menu_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Baru berhasil dihapus!</div>');
        redirect('menu');
    }

    public function edit($id)
    {
        $data = [
            'menu' => $this->input->post('menu')
        ];

        $this->Menu_model->edit($id, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Baru berhasil diubah!</div>');
        redirect('menu');
    }

    public function submenu()
    {
        $data['title'] = 'Manajemen Submenu';
        $data['staff'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();

        $data['subMenu'] = $this->Menu_model->getSubmenu();
        $data['menu'] = $this->db->get('staff_menu')->result_array();


        $this->load->view('template/pageheader', $data);
        $this->load->view('template/pagesidebar', $data);
        $this->load->view('template/pagetopbar', $data);
        $this->load->view('menu/submenu', $data);
        $this->load->view('template/pagefooter');
    }
}
