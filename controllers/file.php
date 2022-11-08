<?php

namespace Rhymix\Modules\Froala\Controllers;

use Rhymix\Modules\Froala\Base;
use Context;

/**
 * Froala Editor 4
 * 
 * Copyright (c) Waterticket
 * 
 * Generated with https://www.poesis.org/tools/modulegen/
 */
class File extends Base
{
	public function procFroalaFileUpload()
	{
		$oFileController = getController('file');
		$oFileController->procFileUpload();

		Context::setResponseMethod('JSON');
		$this->add('link', $oFileController->get('download_url'));
	}
}
