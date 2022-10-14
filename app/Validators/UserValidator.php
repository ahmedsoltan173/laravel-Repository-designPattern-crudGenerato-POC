<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class UserValidator.
 *
 * @package namespace App\Validators;
 */
class UserValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
		'name'=>'required|min:2',
		'email'	=>'required|email|unique:users,email',
		'password'=>'required|min:8',
	],
        ValidatorInterface::RULE_UPDATE => [
		'name'	=>'required|min:2',
		'email'	=>'required|email',
		'password'=>'nullable|min:8',
	],
    ];
}
