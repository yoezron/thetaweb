<?php

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Admin';
            $this->load->view('template/header', $data);
            $this->load->view('admin/login');
            $this->load->view('template/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $staff = $this->db->get_where('staff', ['email' => $email])->row_array();

        if ($staff) {
            if ($staff['is_active'] == 1) {
                if (password_verify($password, $staff['password'])) {
                    $data = [
                        'email' => $staff['email'],
                        'role_id' => $staff['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($staff['role_id'] == 1) {
                        redirect('owner/index');
                    } else {
                        redirect('team/index');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun belum aktif, silakan hubungi admin!</div>');
                redirect('admin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak terdaftar!</div>');
            redirect('admin');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[staff.email]', ['valid_email' => 'Pastikan Email Valid!', 'is_unique' => 'Email telah terdaftar akun lain!']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek! min 8 karakter.'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi Tim Thetametrika';
            $this->load->view('template/header', $data);
            $this->load->view('admin/register');
            $this->load->view('template/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'foto' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'is_active' => 0,
                'role_id' => 2,
            ];

            $this->db->insert('staff', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun anda berhasil dibuat! Silakan Login.</div>');
            redirect('admin');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu telah logout! Have a nice day!.</div>');
        redirect('admin');
    }
}
