<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends MY_model
{

    protected $table = 'user';

    public function getDefaultValues()
    {
        return [
            'name'      => '',
            'email'     => '',
            'password'  => '',
            'role'      => '',
            'is_active' => ''
        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'name',
                'label' => 'Nama',
                'rules' => 'trim|required',
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|is_unique[user.email]',
                'errors' => [
                    'is_unique' => 'Email telah terdaftar.!'
                ]
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[8]'

            ],
            [
                'field' => 'password_confirmation',
                'label' => 'Konfirmasi Password',
                'rules' => 'required|matches[password]'

            ],
        ];

        return $validationRules;
    }

    public function run()
    {
        $data   = [
            'name'      => $input->name,
            'email'     => strtolower($input->email),
            'password'  => hashEncrypt($input->password),
            'role'      => 'member'
        ];

        $user   = $this->create($data);
        $sess_data = [
            'id'        => $user,
            'name'      => $data['name'],
            'email'     => $data['email'],
            'role'      => $data['role'],
            'is_login'  => true
        ];

        $this->session->set_userdata($sess_data);
        return true;
    }
}

/* End of file ModelName.php */
