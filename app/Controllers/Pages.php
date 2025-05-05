<?php namespace App\Controllers;

class Pages extends BaseController
{
    public function view($page = 'index')
    {
        // Optional: whitelist or validate the $page parameter to prevent load attacks
        $allowedPages = ['index', 'about', 'contact', 'courses', 'instructor', 'login', 'pembelianproduk', 'signup', 'team', 'testimonial']; // etc.

        if (! in_array($page, $allowedPages)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('MainPage/' . $page);
    }
}