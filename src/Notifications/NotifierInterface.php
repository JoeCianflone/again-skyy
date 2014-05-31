<?php
namespace Cianflone\Again\Notifications;

interface NotifierInterface
{
    public function success($message);

    public function error($message);

    public function overlay($message);

    public function message($message, $level = 'info');
}
