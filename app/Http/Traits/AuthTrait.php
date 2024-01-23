<?php

namespace App\Http\Traits;

use App\Providers\RouteServiceProvider;

trait AuthTrait
{

    public function checkGuard($request)
    {
        if ($request->type == 'student') {
            $guardName = 'student';
        } elseif ($request->type == 'parent') {
            $guardName = 'parent';
        } elseif ($request->type == 'teacher') {
            $guardName = 'teacher';
        } else {
            $guardName = 'web';
        }

        return $guardName;
    }

    public function redirect($request)
    {
        if ($request->type == 'users') {
            return redirect()->intended(RouteServiceProvider::HOME);
        } elseif ($request->type == 'clients') {
            return redirect()->intended(RouteServiceProvider::CLIENT);
        }
    }
}
