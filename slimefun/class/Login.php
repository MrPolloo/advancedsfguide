<?php
include('DB.php');

class Login {
    public static function isLoggedIn() {
    
        if (isset($_COOKIE['SNID'])) {
            if (DB::query('SELECT userid FROM logintoken WHERE token=:token', array(':token'=>sha1($_COOKIE['SNID'])))) {
                    $userid = DB::query('SELECT userid FROM logintoken WHERE token=:token', array(':token'=>sha1($_COOKIE['SNID'])))[0]['userid'];
                    
                    if (isset($_COOKIE['SNID_'])){
                    return $userid; 
                    } 
            }
        }
    
        return false;
    }
}
?>