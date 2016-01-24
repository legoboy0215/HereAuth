<?php

/*
 * HereAuth
 *
 * Copyright (C) 2016 PEMapModder
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PEMapModder
 */

namespace HereAuth\Importer\Reader;

use HereAuth\Importer\Writer\AccountWriter;

abstract class AccountReader{
	/** @type double */
	private $progress;

	public abstract function read($args, AccountWriter $writer);

	public function getProgress(){
		return $this->progress;
	}

	public function setProgress($progress){
		$this->progress = $progress;
	}
}
