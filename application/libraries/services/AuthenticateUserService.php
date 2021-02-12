<?php

/**
 * Fabio Vige - Exemplo de Sistema de login Codeigniter 3 + JWT
 * E-mail: fabiovige@gmail.com
 * Contato: 11 96327-0717
 * 
 * Classe de serviço para autenticação. Utilizando como dependência o componente Firebase\FWT
 * @method execute()
 */

use \Firebase\JWT\JWT;

class AuthenticateUserService
{
    public function execute($data = [])
    {		

		$CI = &get_instance();		

		$userRepository = new Usuario_Model();

		$user = $userRepository->getUsuario($data['email']);

        if (false === $user) {
            throw new Exception(ERROR_401);
        }

		$verifiaSenha = password_verify($data['password'], $user['password']);
		
        if (false === $verifiaSenha) {
            throw new Exception(ERROR_401);
        }

		// seta o tempo de login para 30 minutos
        $dataAtual = new DateTime('now');
        $time_iat = $dataAtual->getTimestamp();
        $time_jti = $dataAtual->getTimestamp();
        $dataAtual->modify('+30 minutes'); // 1d //+2 minutes
        $time_exp = $dataAtual->getTimestamp();
        $key = getenv('PRIVATE_KEY');

        $payload = [
            'uid' => $user['id'], // id do usuário
            'nome' => $user['nome'], // id do usuário
			'email' => $user['email'], // id do usuário
            'iss' => base_url(), // emissor do token
            'aud' => base_url(), // publico do token
            'exp' => $time_exp, // data de expiração
            'iat' => $time_iat, // horario em que o token foi gerado
            'jti' => $time_jti, // Identificador exclusivo para o JWT. Pode ser usado para impedir que o JWT seja repetido. Isso é útil para um token de uso único.
        ];

		// gera o token e armazena na session
        $token = JWT::encode($payload, $key);

		$CI->session->set_userdata('token', $token);

    }
}
