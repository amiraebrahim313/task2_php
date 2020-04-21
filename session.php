<?php

session_start();

// add to session
 function add($key,$value)
 {
     $_SESSION[$key]= $value;
 
    }


 //check if there is in session
 function check($key){
isset($_SESSION[$key]);
 }
 //get value
 function get($key){
if(check($key)){
    return $_SESSION[$key];
}else{
    return null;
}
 }
 //remove data from the session
 function remove($key){
     unset($_SESSION[$key]);
 }
//  destroy the session
function destroy(){
    session_unset();
    session_destroy();
}
