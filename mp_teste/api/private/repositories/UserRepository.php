<?php
require __DIR__ . '/IUserRepository.php'; 
require __DIR__ . '/../context/DBContext.php';
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
        $query = $this->DBContext->prepare("
            SELECT id,nome,CPF,email,data_nascimento,telefone,CEP,estado,cidade,rua,bairro,numero,complemento FROM clientes WHERE deleted_at IS NULL
        ");
        if($query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if(count($result)>0){
                return [
                    'data' => $result,
                    'code' => 200
                ];
            }else{
                return [
                    'data' => 'No users found in database.',
                    'code' => 200
                ];
            }
        }
    }
    public function GetUserById($id){
        $query = $this->DBContext->prepare("
            SELECT id,nome,CPF,email,data_nascimento,telefone,CEP,estado,cidade,rua,bairro,numero,complemento FROM clientes WHERE id = :id
        ");//FILTRAR
        $query->bindValue(':id',$id);
        if($query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if(count($result)>0){
                return [
                    'data' => $result[0],
                    'code' => 200
                ];
            }else{
                return [
                    'data' => "User of id $id not found in database.",
                    'code' => 200
                ];
            }
        }
    }
    public function CreateUser($user){
        if(!is_array($user)){
            return "User paramater must be an associative array. Passed:" . var_dump($user) .".";
        }

        

        return $user['name'];
        
    }
    public function UpdateUser($user, $id){

    }
    public function DeleteUser($id){

    }
}
