
<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.0';
/**
 * Module information
 */
$aModule = array(
    'id'           => 'werde_deletecache',
    'title'        => 'Delete Cache (Temporary files) from the Shop',
    'description'  => 'Empty the /tmp directory from the shop - Not delete cache of the modules',
    'thumbnail'    => '',
    'version'      => '1.0',
    'author'       => 'Marjan Kolev',
    'thumbnail'    => 'logo.png',
    'url'          => 'http://marjankolev.com',
    'email'        => 'marjankolev1994@yahoo.com',    
    'files'  =>  array(
        'werde_deletecache' => 'werde/deletecache/Application/Controllers/admin/werde_deletecache.php',
    ), 
    'templates' => array(
        'werde_deletecache_admin.tpl' => 'werde/deletecache/Application/views/admin/werde_deletecache_admin.tpl',
    ),
    // Remove cache files from the /tmp directory of the shop
    'events' => array(
        'onActivate' => '\Werde\DeleteCache\Core\Events::onActivate',
        'onDeactivate' => '\Werde\DeleteCache\Core\Events::onDeactivate',
    ),            
);