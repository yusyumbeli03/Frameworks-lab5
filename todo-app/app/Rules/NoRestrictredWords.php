<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NoRestrictredWords implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $restrictedWords = ['depression', 'burnout'];

        foreach ($restrictedWords as $word) {
            if (strpos($value, $word) !== false) {
                $fail("The :attribute contains a restricted word: {$word}");
                return;
            }
        }
    }
}
