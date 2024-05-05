<?php
require '/xampp/htdocs/Bike-Sports-Gaspar/mp_teste/api/repositories/IUserRepository.php';
require '/xampp/htdocs/Bike-Sports-Gaspar/mp_teste/api/context/DBContext.php';
class UserRepository implements IUserRepository{
    public $DBContext;
    private static $Instance = null;
    public function __construct(){
        $this->DBContext = DBContext::GetInstance();
    }
    public function GetInstance(){
        if(self::$Instance === null){
            self::$Instance = new self();
        }
        return self::$Instance;
    }
    public function GetUsers(){
        $query = $this->DBContext->prepare("SELECT * FROM clientes");
        if($query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if(count($result)>0){
                return $result;
            }else{
                return 'No users found in database.';
            }
        }
    }
    public function GetUserById($id){
        $query = $this->DBContext->prepare("SELECT * FROM clientes WHERE id = :id");
        $query->bindValue(':id',$id);
        if($query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if(count($result)>0){
                return $result[0];
            }else{
                return "User of id $id not found in database.";
            }
        }
    }
    public function InsertUser($user){

    }
    public function UpdateUser($user, $id){

    }
    public function DeleteUser($id){

    }
}
