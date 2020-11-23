<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use App\Repository\UserRepository;
use Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

/**
 * @property UserRepository userRepository
 */
class SocialController extends Controller
{

    /**
     * SocialController constructor.
     * @param UserRepository $repository
     */

    public function __construct(UserRepository $repository)
    {
        $this->userRepository = $repository;
    }

    public function loginVk()
    {
        if(Auth::id())
        {
            return redirect(RouteServiceProvider::HOME);
        }
        return Socialite::driver('vkontakte')->redirect();
    }

    public function loginFacebook()
    {
        if(Auth::id())
        {
            return redirect(RouteServiceProvider::HOME);
        }
        return Socialite::driver('facebook')->redirect();
    }

    public function responseVk()
    {
        if(Auth::id())
        {
            return redirect(RouteServiceProvider::HOME);
        }
        $user = Socialite::driver('vkontakte')->user();
        $user = $this->userRepository->getUserBySocId($user, 'vk');
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function responseFacebook()
    {
        if(Auth::id())
        {
            return redirect(RouteServiceProvider::HOME);
        }
        $user = Socialite::driver('facebook')->user();
        $user = $this->userRepository->getUserBySocId($user, 'facebook');

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
