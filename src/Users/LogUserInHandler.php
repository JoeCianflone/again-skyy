<?php
namespace Cianflone\Again\Users;

use Cianflone\Again\Notifications\FlashNotifier;
use Cianflone\Again\Repositories\UserRepository;
use Cianflone\Again\CommandBus\HandlerInterface;
use Cianflone\Again\Validators\UserLoginValidator;
use Cianflone\Again\Validators\ValidationException;

class LogUserInHandler implements HandlerInterface
{
    protected $user;
    protected $validator;
    protected $flash;

    public function __construct(UserRepository $user, UserLoginValidator $validator, FlashNotifier $flash)
    {
        $this->user = $user;
        $this->validator = $validator;
        $this->flash = $flash;
    }

    public function handle($command)
    {
        if (! $this->validator->validate((array) $command, 'verify')) {
            throw new ValidationException($this->validator->getMessage());
        }

        if (! $this->user->checkLoginCredentials($command->email, $command->password)) {
            throw new InvalidCredentialsException("Whoops! Looks like you might have typo'ed cause we can't find you. Try again?");
        }

        return true;
    }
}
