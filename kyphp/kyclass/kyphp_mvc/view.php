<?php
// +----------------------------------------------------------------------
// ���ݵ�php���
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://www.ky53.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.ky53.net )
// +----------------------------------------------------------------------

/**
 
 * @author   qq:974005652(zhx626@126.com) by����ͯ
 * @version  2.0
 +------------------------------------------------------------------------------
 */
abstract class View {
	protected $registry;	
	public function __construct($KYPHP) {		
		$this->kyphp=$KYPHP;
		foreach($KYPHP as $key=>$value){
		
			$this->$key=$value;
		}
		
	}
	
	
}
?>