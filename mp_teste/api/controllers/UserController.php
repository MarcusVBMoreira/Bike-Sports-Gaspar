<?php
require '../api/repositories/UserRepository.php';//REQUIRING ESSENTIAL CLASSES
require '../api/models/UserModel.php';
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
