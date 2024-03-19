<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\BeneficiaryMasterInfo;

class ValidateMaritalStatus implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $validate_data=BeneficiaryMasterInfo::where('id',$value)->where('code', 'like','03%')->count();

        //dd($validate_data);
        // }
        if ($validate_data==0) {
            $fail("The Marital Status is Invalid.");
        }
    }
}
