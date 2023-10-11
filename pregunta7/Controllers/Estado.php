<?php

namespace App\Controllers;

class Estado extends BaseController
{
    public function index(): string
    {
        return view('cambiar_estado');
    }
}
