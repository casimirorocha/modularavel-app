<?php


use App\Models\User;

if (! function_exists('currentUser')) {
    /**
     * Get the configuration path.
     *
     * @param string|null $attribute
     * @param string|null $guard
     * @return User
     */
    if (! function_exists('currentUser')) {
        function currentUser(?string $attribute = null)
        {
            if ($attribute)
            {
                return auth()->user()?->getAttribute($attribute);
            }

            return auth()->user();
        }
    }
}
