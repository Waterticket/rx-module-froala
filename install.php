<?php

namespace Rhymix\Modules\Froala;

/**
 * Froala Editor 4
 * 
 * Copyright (c) Waterticket
 * 
 * Generated with https://www.poesis.org/tools/modulegen/
 */
class Install extends Base
{
	/**
	 * 등록할 트리거를 여기에 선언하면 자동으로 등록된다.
	 * checkUpdate(), moduleUpdate() 등에서 체크 및 생성 루틴을 중복으로 작성하지 않아도 된다.
	 */
	protected static $_insert_triggers = array(
		// array('document.insertDocument', 'after', 'Controllers\Triggers', 'afterInsertDocument'),
		// array('document.updateDocument', 'after', 'Controllers\Triggers', 'afterUpdateDocument'),
		// array('document.deleteDocument', 'after', 'Controllers\Triggers', 'afterDeleteDocument'),
	);
	
	/**
	 * 이전 버전에서 등록했던 트리거를 삭제하려면 위와 동일한 문법으로 여기에 선언하면 된다.
	 * 사용하지 않는 트리거는 삭제해 주는 것이 성능에 도움이 된다.
	 */
	protected static $_delete_triggers = array(
		// array('comment.insertComment', 'after', 'Controllers\Triggers', 'afterInsertComment'),
		// array('comment.updateComment', 'after', 'Controllers\Triggers', 'afterUpdateComment'),
		// array('comment.deleteComment', 'after', 'Controllers\Triggers', 'afterDeleteComment'),
	);
	
	/**
	 * 트리거 확인 함수.
	 * 
	 * 위에서 선언한 트리거 목록을 참조하여 자동으로 등록 및 삭제한다.
	 * 
	 * @return bool
	 */
	public function checkTriggers()
	{
		foreach (self::$_insert_triggers as $trigger)
		{
			if (!\ModuleModel::getTrigger($trigger[0], $this->module, $trigger[2], $trigger[3], $trigger[1]))
			{
				return true;
			}
		}
		foreach (self::$_delete_triggers as $trigger)
		{
			if (\ModuleModel::getTrigger($trigger[0], $this->module, $trigger[2], $trigger[3], $trigger[1]))
			{
				return true;
			}
		}
		return false;
	}
	
	/**
	 * 트리거 등록 함수.
	 * 
	 * 위에서 선언한 트리거 목록을 참조하여 자동으로 등록 및 삭제한다.
	 * 
	 * @return object
	 */
	public function registerTriggers()
	{
		$oModuleController = \ModuleController::getInstance();
		foreach (self::$_insert_triggers as $trigger)
		{
			if (!\ModuleModel::getTrigger($trigger[0], $this->module, $trigger[2], $trigger[3], $trigger[1]))
			{
				$oModuleController->insertTrigger($trigger[0], $this->module, $trigger[2], $trigger[3], $trigger[1]);
			}
		}
		foreach (self::$_delete_triggers as $trigger)
		{
			if (\ModuleModel::getTrigger($trigger[0], $this->module, $trigger[2], $trigger[3], $trigger[1]))
			{
				$oModuleController->deleteTrigger($trigger[0], $this->module, $trigger[2], $trigger[3], $trigger[1]);
			}
		}
		return new \BaseObject(0, 'success_updated');
	}
	
	/**
	 * 모듈 설치 콜백 함수.
	 * 
	 * 트리거 등록 외에 따로 할 일이 없다면 수정할 필요 없다.
	 * 
	 * @return object
	 */
	public function moduleInstall()
	{
		return $this->registerTriggers();
	}
	
	/**
	 * 모듈 업데이트 확인 콜백 함수.
	 * 
	 * 트리거 등록 외에 따로 할 일이 없다면 수정할 필요 없다.
	 * 
	 * @return bool
	 */
	public function checkUpdate()
	{
		return $this->checkTriggers();
	}
	
	/**
	 * 모듈 업데이트 콜백 함수.
	 * 
	 * 트리거 등록 외에 따로 할 일이 없다면 수정할 필요 없다.
	 * 
	 * @return object
	 */
	public function moduleUpdate()
	{
		return $this->registerTriggers();
	}
	
	/**
	 * 캐시파일 재생성 콜백 함수.
	 * 
	 * @return void
	 */
	public function recompileCache()
	{
		
	}
}
