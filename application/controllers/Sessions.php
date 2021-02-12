<?php

/**
 * Fabio Vige - Exemplo de Sistema de login Codeigniter 3 + JWT
 * E-mail: fabiovige@gmail.com
 * Contato: 11 96327-0717
 * 
 * Classe de session responsável pelo gerenciamento dos acessos.
 * @method execute()
 */



defined('BASEPATH') or exit('No direct script access allowed');

use \Firebase\JWT\JWT;

class Sessions extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('email', 'Email', "required|valid_email");

        if (false == $this->form_validation->run()) {
            $this->load->view('pages/Login/index');
        } else {
            $data = [
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
			];
            try {
                $authenticationUser = new AuthenticateUserService();
                $authenticationUser->execute($data);
                $this->session->userdata('token');

				redirect('home', 'refresh');
				
            } catch (Exception $error) {
                $this->session->set_flashdata('error', $error->getMessage());
				redirect('sessions', 'refresh');
			}
			
        }
    }

    public function sair() {
		$this->session->sess_destroy();
        redirect('/home/index');
    }

}
