<?php

interface IUserRepository{
    public function GetUserById($id);
    public function GetUsers();
    public function CreateUser($user);
    public function UpdateUser($user, $id);
    public function SoftDeleteUser($id);
    public function HardDeleteUser($id);
}