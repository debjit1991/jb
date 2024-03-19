<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\BeneficiaryMasterInfo;

class ValidateRationcard implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $validate_data=BeneficiaryMasterInfo::where('id',$value)->where('code', 'like','05%')->count();

        //dd($validate_data);
        // }
        if ($validate_data==0) {
            $fail("The Ration Card is Invalid.");
        }
    }
}
