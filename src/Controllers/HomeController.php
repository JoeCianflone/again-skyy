<?php
namespace Cianflone\Again\Controllers;

use View;

class HomeController extends BaseController
{
    public function index()
    {
        return View::make('hello');
    }
}
