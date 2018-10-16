<?php

namespace App\Repositories\Eloquents;

use App\Repositories\BaseRepository;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Model\User;

class UserRepository extends BaseRepository implements  UserRepositoryInterface
{
	public function model()
	{
		return User::class;
	}
	/**
	 * Check loin
	 * @param  array  $attributes
	 * @return Login             
	 */
	public function attemptLogin(array $attributes){
		return \Auth::attempt(['email' => $attributes['email'], 'password' => $attributes['password']]);
	}

	/**
	 * @return Object 
	 */
	public function getUser(){
		return \Auth::user();
	}
}
