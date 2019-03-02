<?php

namespace Werde\DeleteCache\Core;


use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\DbMetaDataHandler;
use OxidEsales\Eshop\Core\Module\Module;

/**
 * Class defines what module does on Shop events.
 */
class Events{
	/**
     * Execute action on activate event
     */
    public static function onActivate()
    {
       // Call function for removing cache on Module Activation
       self::clearShopTmp();
    }

    /**
     * Execute action on deactivate event
     */
    public static function onDeactivate()
    {
        // Call function for removing cache on Module De-Activation
       self::clearShopTmp();
    }

    /**
     * Function that clear cache in the  shop
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
    */
    protected static function clearShopTmp(){
        $sTmpDir = getShopBasePath() . "tmp/";
        $sSmartyDir = $sTmpDir . "smarty/";

        foreach (glob($sTmpDir . "*.txt") as $sFileName) {
            @unlink($sFileName);
        }
        foreach (glob($sSmartyDir . "*.php") as $sFileName) {
            @unlink($sFileName);
        }
	}
}