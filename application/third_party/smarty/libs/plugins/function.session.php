<?php

require_once(APPPATH.'third_party/smarty/libs/Smarty.class.php');

function smarty_function_session($params, $template)
{
	if(isset($params['name'])){
		$name = $params['name'];
		if(!isset($_SESSION[$name]))
			return '';

		$sess = $_SESSION[$name];
		if(isset($sess)){
			$msg = $sess;
			switch ($name) {
				case 'success':
					$status = 'success';
					$heading = 'Success';
					break;
				case 'failed':
					$status = 'danger';
					$heading = 'Error';
					break;
				case 'warning':
					$status = 'warning';
					$heading = 'Warning';
					break;
				case 'info':
					$status = 'info';
					$heading = 'Info';
					break;
				default:
					return '';
					break;
			}

			$html = '<div class="alert alert-'. $status .' alert-dismissible" role="alert" style="margin-top:5px; border-radius: 0px;">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>'. $heading .'!</strong> '. $msg .'.
							</div>';
		}else{
			$html = '';
		}
	}else{
		$html = '';
	}

	return $html;
}
