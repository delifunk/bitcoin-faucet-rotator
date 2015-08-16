<?php
/**
 * Created by PhpStorm.
 * User: robattfield
 * Date: 16-Aug-2015
 * Time: 23:00
 */

namespace Helpers\Validators;


use Illuminate\Validation\Validator;

class TwitterConfigValidator extends Validator
{

    /**
     * Validates new twitter config entries.
     * @return array
     */
    public static function validationRules()
    {
        return [
            'consumer_key' => 'max:255',
            'consumer_key_secret' => 'max:255',
            'access_token' => 'max:255',
            'access_token_secret' => 'max:255',
            'user_id' => 'required|integer'
        ];
    }
}