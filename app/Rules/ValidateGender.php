<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\BeneficiaryMasterInfo;

class ValidateGender implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //dd($value);
        // if (empty($value)) {
        //     $fail("The Gender Name is required.");

        $validate_data=BeneficiaryMasterInfo::where('id',$value)->where('code', 'like','01%')->count();

        //dd($validate_data);
        // }
        if ($validate_data==0) {
            $fail("The Gender Name is Invalid.");
        }
    }
}
