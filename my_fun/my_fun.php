<?php
function userInsert ($name,$email,$password){

}

function usernameCheck($name){
    if(strlen($name)>=6){
        $bol=preg_match('/^[\w]+$/',$name);
        return $bol;
    }else{
        return false;
    }
}
// $bol=usernameCheck("AungKaungMyatPaing");
// echo $bol ? "TRUE" : "FALSE";

function emailCheck($email){
    if(strlen($email)>=13){
        $bol=preg_match('/^[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,4}+$/',$email);
        return $bol;
    }else{
        return false;
    }
}
// $bol=emailCheck("sabreaozo5152@gmail.com");
// echo $bol ? "TRUE": "FALSE";

function passwordCheck($password){
    if(strlen($password)>=6){
        $bol=preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[^\w])(?=.*\d).+$/',$password);
        return $bol;
    }else{
        return false;
    }
}
// $bol=passwordCheck("Markoo5152@");
// echo $bol ? "TRUE" : "FALSE";

function encodePassword($password){
    $password=md5($password);
    $password=sha1($password);
    $password=crypt($password,$password);
    return $password;
}

function getTime(){
   return date("Y-m-d H-m-s",time());
}
?>