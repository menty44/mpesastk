<?php
/**
 * Created by IntelliJ IDEA.
 * User: Admin
 * Date: 2018-01-06
 * Time: 7:18 PM
 */


$dbuser = 'postgres';
$dbpass = 'postgres';
$host = 'localhost';
$dbname='mpesabridge';
$dbh = new PDO("pgsql:host=$host;dbname=$dbname", $dbuser, $dbpass, array(
    PDO::ATTR_PERSISTENT => true));
