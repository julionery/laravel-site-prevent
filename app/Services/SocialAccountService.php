<?php

namespace App\Services;

use App\Models\SocialAccount;
use App\Models\User;
use Laravel\Socialite\Contracts\Provider;

class SocialAccountService
{
    public function createOrGetUser(Provider $provider)
    {
        try {
            $providerName = class_basename($provider);

            if ($providerName == "FacebookProvider")
                $providerUser = $provider->stateless()->user();

            if ($providerName == "TwitterProvider")
                $providerUser = $provider->user();

            if ($providerName == "GoogleProvider")
                $providerUser = $provider->user();

            if ($providerName == "GithubProvider")
                $providerUser = $provider->user();

            $account = SocialAccount::whereProvider($providerName)
                ->whereProviderUserId($providerUser->getId())
                ->first();

            if ($account) {
                return $account->user;
            } else {

                $account = new SocialAccount([
                    'provider_user_id' => $providerUser->getId(),
                    'provider' => $providerName
                ]);

                $user = User::whereEmail($providerUser->getEmail())->first();

                if (!$user) {
                    $user = User::create([
                        'email' => $providerUser->getEmail(),
                        'name' => $providerUser->getName(),
                        'usuario_inclusao' => $providerUser->getName(),
                    ]);
                }

                $account->user()->associate($user);
                $account->save();

                return $user;
            }

        } catch (Exception $e) {
            dd("Erro");
            return Redirect::to('/login')->with('msg', ' Sorry something went worng. Please try again.');
        }

    }
}