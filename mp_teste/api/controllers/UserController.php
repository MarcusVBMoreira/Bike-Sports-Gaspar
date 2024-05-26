<?php
require_once 'C:/xampp/htdocs/Bike-Sports-Gaspar/mp_teste/api/repositories/UserRepository.php';
require_once 'C:/xampp/htdocs/Bike-Sports-Gaspar/mp_teste/api/models/UserModel.php';
class UserController{
    private $UserRepository;
    private $User;
    public function __construct(){
        $this->UserRepository = new UserRepository;//OTHER CLASSES NEED TO BE INSTANTIATED INSIDE THE CONSTRUCTOR METHOD
        $this->User = new UserModel;
    }
    
    public function GetUsers(){
        $users = $this->UserRepository->GetUsers();
        return $users;
    }
}
