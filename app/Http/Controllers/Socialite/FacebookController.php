<?php

namespace App\Http\Controllers\Socialite;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Services\SocialAccountService;
use Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handle(SocialAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('facebook')); //->stateless()->user());
        $user = User::whereEmail($user['email'])->first();

        if ($user['ativo'] == 'sim') {
            Auth::login($user);
        }
        return redirect()->route('login');
    }
}
