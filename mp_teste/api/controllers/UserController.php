<?php
require("/xampp/htdocs/Bike-Sports-Gaspar/mp_teste/api/repositories/UserRepository.php");
class UserController{
    private $UserRepository;
    public function __construct(){
        $this->UserRepository = new UserRepository;//OTHER CLASSES NEED TO BE INSTANTIATED INSIDE THE CONSTRUCTOR METHOD
    }
    public function GetUsers(){
        $users = $this->UserRepository->GetUsers();
        return $users;
    }
}
