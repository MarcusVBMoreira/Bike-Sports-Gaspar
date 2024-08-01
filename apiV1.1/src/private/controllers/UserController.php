<?php
namespace Api\Private\Controllers;
use Api\Private\Repositories\UserRepository;
class UserController{
    public static function GetUsers(){
        return UserRepository::Get();
    }
    public static function GetUserById($id){
        return UserRepository::GetById($id);
    }
    public static function GetUserByEmail($email){
        return UserRepository::GetByEmail($email);
    }
    public static function CreateUser($user){
        return UserRepository::Create($user);
    }
    public static function SoftDeleteUser($id){
        return UserRepository::SoftDelete($id);
    }
    public static function HardDeleteUser($id){
        return UserRepository::HardDelete($id);
    }
    public static function UpdateUser($user,$id){
        return UserRepository::Update($user,$id);
    }
    public static function UpdateProp($id, $prop, $value){
        return UserRepository::UpdateProp($id, $prop, $value);
    }
}
