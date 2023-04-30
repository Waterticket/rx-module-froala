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

		$link = $oFileController->get('download_url');

		$vars = Context::getRequestVars();
		if ($vars->target == 'file')
		{
			$link = '/'.$link;
		}

		Context::setResponseMethod('JSON');
		$this->add('link', $link);
		$this->add('file-srl', $oFileController->get('file_srl'));
		$this->add('upload-target-srl', $oFileController->get('upload_target_srl'));
	}
}
