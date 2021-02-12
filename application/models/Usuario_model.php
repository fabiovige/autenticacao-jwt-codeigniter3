<?php

/**
 * Fabio Vige - Exemplo de Sistema de login Codeigniter 3 + JWT
 * E-mail: fabiovige@gmail.com
 * Contato: 11 96327-0717
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Usuario_model extends CI_Model
{
    private $table;

    public function __construct()
    {
        parent::__construct();
    }

    public function getUsuario($email) {
        $sql = "select * from usuarios where email = '$email' ";
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            return $query->row_array();
        }
        return false;
    }
}
