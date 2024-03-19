<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidateIncome implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // if (empty($value)) {

        //     //  dd(123);
        //     $fail("The Monthly Income is required.");
        // }

         if ((!preg_match('/^\d+(\.\d+)?$/', $value))) {
            // Notice the negation operator (!) before preg_match.
            // This means the validation will fail if the value does NOT match
            // the pattern, which is likely what you intended.
            $fail("The Monthly Income only contain degits.");
        }
    }
}
