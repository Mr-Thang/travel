<?php

namespace App\Repositories\Contracts;

use App\Repositories\RepositoryInterface;

interface UserRepositoryInterface extends RepositoryInterface
{
	public function attemptLogin(array $attributes);

	public function getUser();
}
