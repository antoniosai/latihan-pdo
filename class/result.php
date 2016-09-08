<?php
/**
* 
*/
class Result
{

	private $data;
	// private $id;
	
	function __construct(Array $data)
	{
		$this->data = $data;
	}

	public function all()
	{
		return $this->data;
	}

	public function first()
	{
		if (empty($this->data)) {
			return null;
		}

		return $this->data[0];
	}

	public function delete()
	{
		if (empty($this->data)) {
			return null;
		}

		return $this->data[0];
	}
}