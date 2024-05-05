<?php

interface IUserRepository{
    public function GetUserById($id);
    public function GetUsers();
    public function InsertUser($user);
    public function UpdateUser($user, $id);
    public function DeleteUser($id);
}