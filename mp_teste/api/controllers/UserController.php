<?php
require_once __DIR__ . '/../repositories/UserRepository.php';
require_once __DIR__ . '/../models/UserModel.php';
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
    public function GetUserById($id){
        $user = $this->UserRepository->GetUserById($id);
        
        $this->User->Id = $user['id'];
        $this->User->Name = $user['nome'];
        $this->User->Email = $user['email'];
        $this->User->Cpf = $user['cpf'];
        $this->User->Birthday = $user['data_nascimento'];
        $this->User->Cep = $user['CEP'];
        $this->User->State = $user['estado'];
        $this->User->City = $user['cidade'];
        $this->User->Street = $user['rua'];
        $this->User->Neighbourhood = $user['bairro'];
        $this->User->Number = $user['numero'];
        $this->User->Complement = $user['complemento'];

        return $this->User;
    }
}
