<?php
/***********************************************************
 * WARNING: This file is part of Salary Management System. *
 * DO NOT edit this file, under any circumstances.		   *
 * Do all modifications in you admin panel.				   *
 * 														   *
 * @packageSalary Management System (SMS)                  *
 * @version 1.0.0                                          *
 * @author Olivine Limited® <info@olivineltd.com>          *
 * @link http://olivineltd.com                             *                     *
 * @copyright Copyright © 2015 - Olivine Limited®.         *
 * @license GPL-2.0+                                       *
 * @license http://www.gnu.org/licenses/gpl-2.0.html       *
 **********************************************************/

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$connection = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
$dbname = 'photolab';
mysqli_select_db($connection,$dbname);

?> 
