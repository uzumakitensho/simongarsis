<?php
/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage PluginsFunction
 */

/**
 * Smarty {counter} function plugin
 * Type:     function<br>
 * Name:     counter<br>
 * Purpose:  print out a counter value
 *
 * @author Monte Ohrt <monte at ohrt dot com>
 * @link   http://www.smarty.net/manual/en/language.function.counter.php {counter}
 *         (Smarty online manual)
 *
 * @param array                    $params   parameters
 * @param Smarty_Internal_Template $template template object
 *
 * @return string|null
 */
function smarty_function_form_error($params, $template)
{
	if(!isset($params['field'])){
		$msg = '';
		$has_error = '';
	}else{
		$msg = form_error($params['field']);
		$msg = strip_tags($msg);
		if($msg == ''){
			$has_error = '';
		}else{
			$has_error = 'has-error';
		}
	}

	if(!isset($params['opt'])){
		return $msg;
	}else{
		$opt = $params['opt'];
		switch ($opt) {
			case 1:
				return $has_error;
				break;
			case 2:
				return $msg;
				break;
			default:
				return $msg;
				break;
		}
	}
}
