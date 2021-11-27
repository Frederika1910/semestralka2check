<?php

namespace App\Controllers;


use App\Models\Produkt;
/**
 * Class HomeController
 * Example of simple controller
 * @package App\Controllers
 */
class HomeController extends AControllerRedirect
{
    public function index()
    {
        return $this->html();
    }

    public function contact()
    {
        return $this->html();
    }

    public function oblecenie()
    {
        return $this->html();
    }

    public function qa()
    {
        return $this->html();
    }

    public function aboutus()
    {
        return $this->html();
    }

    //public function post()
    //{
    //    return $this->html();
    //}

    public function loggedUser()
    {
        return $this->html();
    }
}