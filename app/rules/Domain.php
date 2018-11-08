<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Domain implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
		
		//we will use a substring of this to find the domain
		//echo 'here we are';
		$domains = ['bloomington.in.gov','iu.edu'];
		$domain = $value;
		//finds last occurence of @ and gives index of it
		//assigns domain val to $domain once found
		if(false !== $lastAtPos = strrpos($value, '@')) {
			$domain = substr($value, $lastAtPos + 1);
		}
		return in_array($domain,$domains);
		
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Admin registration not enabled for this address';
    }
}
