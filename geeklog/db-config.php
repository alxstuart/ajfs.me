<?php

/*
 * Geeklog database configuration
 *
 * You should not need to edit this file. See the installation instructions
 * for details.
 *
 */

if (strpos(strtolower($_SERVER['PHP_SELF']), 'db-config.php') !== false) {
    die('This file can not be used on its own!');
}

global $_DB_host, $_DB_name, $_DB_user, $_DB_pass, $_DB_table_prefix, $_DB_dbms;

$_DB_host = 'localhost';
$_DB_name = 'cl50-a-cms';
$_DB_user = 'cl50-a-cms';
$_DB_pass = 'Dzgssry^c';
$_DB_table_prefix = 'gl_';
$_DB_dbms = 'mysql';

?>