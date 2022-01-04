<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class PageController
{
    public function admin()
    {
        return Inertia::render('Admin/Pages');
    }

    public function home()
    {
        return Inertia::render('Home/Home');
    }
}
