<?php

namespace App\Repositories;

abstract class BaseRepository
{
	/**
	 * @var [_model]
	 */
	protected $_model;

	public function __construct()
	{
		$this->setModel();
	}
	abstract public function model();

	/**
	 * [setModel description]
	 */
	public function setModel()
	{
		$this->_model = app()->make(
			$this->model()
		);
	}

	/**
	 * [show all]
	 * @return [all]
	 */
	public function all()
	{
		return $this->_model->all();
	}
}
