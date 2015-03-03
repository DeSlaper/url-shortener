<?php namespace MyAdm\Validation;

class ValidationException extends \Exception {

	protected $errors;

	function __construct($errors)
	{
		$this->errors = $errors;
	}

	/**
	 * @return mixed
	 */
	public function getErrors()
	{
		return $this->errors;
	}
}