<?php

use \Firebase\JWT\JWT;

function verificaToken()
{
    $CI = &get_instance();
    try {
		
		$key = getenv('PRIVATE_KEY');
		$token = $CI->session->userdata('token');

		$decoded = JWT::decode($token, $key, ['HS256']);		
        $CI->session->set_userdata('id', (int) $decoded->uid);
        $CI->session->set_userdata('nome', $decoded->nome);
        $CI->session->set_userdata('email', $decoded->email);
    } catch (Exception $e) {
        $CI->session->set_flashdata('error', 'Sessão encerrada');
		redirect('/sessions', 'refresh');
    }
}
