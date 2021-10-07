<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Register extends BaseController
{
	public function index()
	{
        $data = [
            'tittle' => 'Register'
        ];
		// echo view("layouts/header", ['title' => 'Blog - Posts']);
		// echo view("layouts/navbar");
		// echo view("v_posts");
		// echo view("layouts/footer");
        return view("v_register", $data);
	}
	
}
