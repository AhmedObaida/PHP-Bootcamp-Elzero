<?php
function myarray_key_exist( $array, $key ){
    foreach( $array as $k => $value){
        if( $k == $key ){
            return true;
        }
    }
    return false;
}


