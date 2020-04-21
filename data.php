<?php
 
 
function the_error(string $name,string $message){
    $search_on_error='form_errors';
     

    $errors = get($search_on_error); 

    if (! $errors) {
        $errors = [];
    }

    $errors[$name] = $message;

    add($search_on_error, $errors);
}
function form_error($name){
    $errors=get('form_errors');
    
    if (! $errors) return '';
    if (! isset($errors[$name])) {
        return '';
    } else {
        return $errors[$name];
    }
}



function form_has_errors(){
    return check('form_errors')==true;
}



function user(string $key)
{
    $user = get('user');

    if (! $user) return '';

    if (! isset($user[$key])) return '';

    return $user[$key];
}



function redirect_to( $path)
{ 
    header("location: $path"); 
}



function clear_form_errors()
{
    remove('form_errors');
}