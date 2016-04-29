<?php

require_once(APPPATH.'third_party/smarty/libs/Smarty.class.php');

function smarty_function_get_session($params, $template)
{
	if(isset($_SESSION)){
		if(isset($params['name'])){
			$name = $params['name'];
			if(isset($_SESSION[$name])){
				return $_SESSION[$name];
			}else{
				return '';
			}
		}else{
			return '';
		}
	}else{
		return '';
	}
}
