<?php

namespace App\Http\Controllers\Api\V1\Admin\Auth;

use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    protected $userRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->middleware(['api_token', 'auth:api'])->only('logout');
    }
    public function login(LoginRequest $request)
    {
        $data = $request->only([
            'email',
            'password',
        ]);

        if ($this->userRepository->attemptLogin($data)) {
            $user = $this->userRepository->getUser();
            $accessToken = $user->createToken('User')->accessToken;
            return response()->success([
                'access_token' => $accessToken
            ], Response::HTTP_OK);
        }
        
        return response()->error(
            'FILEDS_AUTHENTICATION_ERROR',
            'Unauthorised', 
            Response::HTTP_UNAUTHORIZED
        );
    }
}
