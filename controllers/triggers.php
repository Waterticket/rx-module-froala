<?php

namespace Rhymix\Modules\Froala\Controllers;

use Rhymix\Modules\Froala\Base;

/**
 * Froala Editor 4
 * 
 * Copyright (c) Waterticket
 * 
 * Generated with https://www.poesis.org/tools/modulegen/
 */
class Triggers extends Base
{
	/**
	 * 트리거 예제: 새 글 작성시 실행
	 * 
	 * 주의: 첨부파일이 있는 경우 아직 작성하지 않았어도 이 함수가 실행될 수 있음
	 * 
	 * @param object $obj
	 */
	public function afterInsertDocument($obj)
	{
	
	}
	
	/**
	 * 트리거 예제: 글 수정시 실행
	 * 
	 * 주의: 첨부파일이 있는 경우 최종 작성 시점에 이 함수가 실행될 수 있음
	 * 
	 * @param object $obj
	 */
	public function afterUpdateDocument($obj)
	{
	
	}
	
	/**
	 * 트리거 예제: 글 삭제시 실행
	 * 
	 * @param object $obj
	 */
	public function afterDeleteDocument($obj)
	{
	
	}
	
	/**
	 * 트리거 예제: 새 댓글 작성시 실행
	 * 
	 * 주의: 첨부파일이 있는 경우 아직 작성하지 않았어도 이 함수가 실행될 수 있음
	 * 
	 * @param object $obj
	 */
	public function afterInsertComment($obj)
	{
	
	}
	
	/**
	 * 트리거 예제: 댓글 수정시 실행
	 * 
	 * 주의: 첨부파일이 있는 경우 최종 작성 시점에 이 함수가 실행될 수 있음
	 * 
	 * @param object $obj
	 */
	public function afterUpdateComment($obj)
	{
	
	}
	
	/**
	 * 트리거 예제: 댓글 삭제시 실행
	 * 
	 * @param object $obj
	 */
	public function afterDeleteComment($obj)
	{
	
	}
}
