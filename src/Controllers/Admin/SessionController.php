<?php
namespace Cianflone\Again\Controllers\Admin;

use View;

class SessionController extends BaseController
{
    public function index()
    {
        return View::make('admin.pages.session.login');
    }
}
