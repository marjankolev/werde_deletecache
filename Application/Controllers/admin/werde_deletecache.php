<?php

use OxidEsales\Eshop\Core\Registry;
class Werde_DeleteCache extends oxAdminView{
	/**
	* This function calls the parent data and returns the template to werde_deletecache_admin.tpl
	* 
	* @return string template name
	*/ 
	public function render()
	{
		parent::render();
		return "werde_deletecache_admin.tpl";
	}

	public function clearShopTmp(){
		
		$sTmpDir = getShopBasePath() . "tmp/";
        $sSmartyDir = $sTmpDir . "smarty/";

        foreach (glob($sTmpDir . "*.txt") as $sFileName) {
            @unlink($sFileName);
        }
        foreach (glob($sSmartyDir . "*.php") as $sFileName) {
            @unlink($sFileName);
        }
        echo 'Cache removed successfully from the shop';
	}
}