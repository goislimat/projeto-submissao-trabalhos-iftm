<?php

namespace Projeto\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class UserValidator extends LaravelValidator {

    protected $rules = [
        'name' => 'required|min:5',
        'email' => 'required|min:5',
        'type' => 'required',
        'password' => 'required|min:6'
   ];

}