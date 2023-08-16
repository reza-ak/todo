<?php

namespace App\Actions\Fortify;

use Illuminate\Validation\Rules\Password;

// use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    protected function passwordRules(): array
    {
        return [
            'required',
            'string',
            'confirmed',
            // Require at least one uppercase and one lowercase letter...
            Password::min(8)->mixedCase(),

            // Require at least one letter...
            Password::min(8)->letters(),

            // Require at least one number...
            Password::min(8)->numbers(),

            // Require at least one symbol...
            Password::min(8)->symbols(),
        ];
    }
}
