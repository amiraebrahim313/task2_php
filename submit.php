<?php 
 require 'data.php';
 require 'session.php';
$username=$_POST['username'];
$email= $_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
//start the validation
if(!$username){
    //if not found __>call function the error that there is in page data  
    //this function store error
    the_error('username','username is required');
}
if (!$email){
    the_error('email','email is required');

    }
 if(!$password){
     the_error('password','password is required');
 }
 if(!$confirm_password){
     the_error('confirm_password is required');
 }elseif($password!=$confirm_password){
     the_error('password dont match confirm_password');
 }
 if(form_has_errors()){
    redirect_to('register.php'); 
 }else{
    // store in session
     store('user',[
         'name'=> $username,
         'email'=>$email,
     ]);
     //after store in the session redirect to the page of index;
     redirect_to('index.php');
 };