<?php

interface IUserRepository{
    public function GetUserById($id);
    public function GetUsers();
    public function CreateUser($user);
    public function UpdateUser($user, $id);
    public function DeleteUser($id);
}