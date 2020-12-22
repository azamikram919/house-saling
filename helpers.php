<?php
/**
 * Created by PhpStorm.
 * User: ITShpere
 * Date: 11/20/2020
 * Time: 5:11 PM
 */
function base_url(){
    return ($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
}