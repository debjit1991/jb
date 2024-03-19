<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidateName implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // dd($attribute);
      
        // if (empty($value)) {

        //     //  dd(123);
        //     $fail("The Beneficiary Name is required.");
        // }

      if (!preg_match('/^[a-zA-Z\s]+$/', $value)) {
            // Notice the negation operator (!) before preg_match.
            // This means the validation will fail if the value does NOT match
            // the pattern, which is likely what you intended.
            $fail("The Beneficiary Name must only contain letters and spaces.");
        }
        
       
       
    
    }
}
