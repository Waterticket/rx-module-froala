<?php

namespace Rhymix\Modules\Froala\Controllers;

use Rhymix\Modules\Froala\Base;
use Rhymix\Framework\Cache;
use Rhymix\Framework\DB;
use Rhymix\Framework\Exception;
use Rhymix\Framework\Storage;
use BaseObject;
use Context;
use ModuleController;
use ModuleModel;

/**
 * Froala Editor 4
 * 
 * Copyright (c) Waterticket
 * 
 * Generated with https://www.poesis.org/tools/modulegen/
 */
class Admin extends Base
{
	/**
	 * 초기화
	 */
	public function init()
	{
		// 관리자 화면 템플릿 경로 지정
		$this->setTemplatePath($this->module_path . 'views/admin/');
	}
	
	/**
	 * 관리자 설정 화면 예제
	 */
	public function dispFroalaAdminConfig()
	{
		// 현재 설정 상태 불러오기
		$config = $this->getConfig();
		
		// Context에 세팅
		Context::set('froala_config', $config);
		
		// 스킨 파일 지정
		$this->setTemplateFile('config');
	}
	
	/**
	 * 관리자 설정 저장 액션 예제
	 */
	public function procFroalaAdminInsertConfig()
	{
		// 현재 설정 상태 불러오기
		$config = $this->getConfig();
		
		// 제출받은 데이터 불러오기
		$vars = Context::getRequestVars();
		
		// 제출받은 데이터를 각각 적절히 필터링하여 설정 변경
		if (in_array($vars->example_config, ['Y', 'N']))
		{
			$config->example_config = $vars->example_config;
		}
		else
		{
			return new BaseObject(-1, '설정값이 이상함');
		}
		
		// 변경된 설정을 저장
		$output = $this->setConfig($config);
		if (!$output->toBool())
		{
			return $output;
		}
		
		// 설정 화면으로 리다이렉트
		$this->setMessage('success_registed');
		$this->setRedirectUrl(Context::get('success_return_url'));
	}
}
