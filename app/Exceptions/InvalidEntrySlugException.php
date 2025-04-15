<?php

namespace App\Exceptions;

use Exception;

use App\Models\Entry;

class InvalidEntrySlugException extends Exception
{
	private $entry;
	
	public function __construct(Entry $entry)
	{
		$this->entry = $entry;
		parent::__construct();
	}

	public function render()
	{
		return redirect($this->entry->getUrl());
	}
}
