<?php

if ( ! defined('BASEPATH') )
    exit( 'No direct script access allowed' );

require_once(APPPATH.'third_party/smarty/libs/SmartyBC.class.php');

class Smartyci extends SmartyBC
{
    public function __construct()
    {
        parent::__construct();

        $config =& get_config();

        //$this->caching = 1;
				$this->setTemplateDir(APPPATH."views");
        $this->setCompileDir(APPPATH."third_party/smarty/templates_c");
        $this->setConfigDir(APPPATH."third_party/smarty/configs");
        $this->setCacheDir(APPPATH."cache");
				$this->php_handling = 3;
    }

    //if specified template is cached then display template and exit, otherwise, do nothing.
    public function useCached( $tpl, $cacheId = null )
    {
        if ( $this->isCached( $tpl, $cacheId ) )
        {
            $this->display( $tpl, $cacheId );
            exit();
        }
    }
}