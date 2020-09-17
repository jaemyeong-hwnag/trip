<?php
function arrayCheck( $arr, $key ){
    return isset( $arr[$key] ) ? $arr[$key] : false;
}