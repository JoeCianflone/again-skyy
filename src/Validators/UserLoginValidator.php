<?php
namespace Cianflone\Again\Validators;

class UserLoginValidator extends BaseValidator
{

    protected $sanitizer = [
        'email' => ['toLowerCase', 'trim'],
        'password' => ['trim', 'hash']
    ];

    protected $rules = [
        'verify' => [
            'email' => ['required'],
            'password' => ['required']
        ]
    ];

    protected $messages = [
        'verify' => [
            'email' => 'The Email Address is required',
            'password' => 'The Password is required'
        ]
    ];
}
