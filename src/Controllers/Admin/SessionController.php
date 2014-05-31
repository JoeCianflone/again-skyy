<?php
namespace Cianflone\Again\Controllers\Admin;

use Auth;
use View;
use Input;
use Flash;
use Redirect;
use Cianflone\Again\Users\InvalidCredentialsException;
use Cianflone\Again\CommandBus\CommandBus;
use Cianflone\Again\Users\LogUserInCommand;

class SessionController extends BaseController
{
    protected $command;

    public function __construct(CommandBus $command)
    {
        $this->command = $command;
    }
    /**
     * Shows the login page
     *
     */
    public function index()
    {
        return View::make('admin.pages.session.login');
    }

    public function store()
    {
        $inputs = Input::only('email', 'password');

        try {
            $command = new LogUserInCommand($inputs['email'], $inputs['password']);
            $this->command->execute($command);
        } catch (InvalidCredentialsException $e) {
            Flash::error($e->getMessage());

            return Redirect::route('login');
        }

        return Redirect::intended('/admin/v1/panel/dashboard');
    }

    /**
     * Kills the users session and logs them out
     *
     */
    public function destroy()
    {
        Auth::logout();
        Flash::success("You've been successfully logged out of the account.");

        return Redirect::route('login');
    }
}
