<?php
/*
* inventory_report_page_registration.php 1.5.0 Admin Page Registration
* @copyright Copyright 2003-2011 Zen Cart Development Team
* @copyright Portions Copyright 2003 osCommerce
* @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
* 
* $Id: inventory_report_page_registration.php 2-26-2012 PRO-Webs.net     
* Module Version 1.6                                                                   
*/
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}
if (function_exists('zen_register_admin_page')) {
    if (!zen_page_key_exists('inventory_report')) {
        zen_register_admin_page('inventory_report', 'BOX_REPORTS_INVENTORY_REPORT','FILENAME_STATS_INVENTORY_REPORT', '', 'reports', 'Y', 17);
    }
}
// EOF