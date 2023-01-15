<?php

namespace App\Controllers\Frontpage;

use App\Controllers\Basecontroller;

class Homepage extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}
?>