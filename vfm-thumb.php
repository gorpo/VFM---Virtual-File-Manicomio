<?php
/**

 */
require_once 'vfm-admin/config.php';
require_once 'vfm-admin/class/class.setup.php';
require_once 'vfm-admin/class/class.imageserver.php';
require_once 'vfm-admin/class/class.gatekeeper.php';
require_once 'vfm-admin/class/class.utils.php';
$setUp = new SetUp();

if (!GateKeeper::isAccessAllowed()) {
    die('access denied');
}
$imageServer = new ImageServer();
$imageServer->showImage();
exit;