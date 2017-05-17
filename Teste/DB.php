<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DB
 *
 * @author Usuario
 */
class DB {
    private static $instance = false;
    private function __construct() {}
    
    public static function getInstance() {
        if (false === DB::$instance) {
            DB::$instance = mysqli_connect('localhost', 'root', '','transportadora', '3306','');
        }
        return DB::$instance;
    }
}
