<?php

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('home/index');
    }

    public function about()
    {
        $data['title'] = 'Tentang Kami';
        $this->load->view('template/header', $data);
        $this->load->view('home/about');
        $this->load->view('template/footer');
    }
}
