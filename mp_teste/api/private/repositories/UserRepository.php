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

        //LOOK FOR DUPLICATE RECORDS
        $query = $this->DBContext->prepare("
            SELECT * FROM clientes 
            WHERE email = :email 
            OR CPF = :cpf 
        ");
        $query->bindValue(":email",$user["email"]);
        $query->bindValue(":cpf",$user["cpf"]);
        if($query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if(count($result)> 0){
                return [
                    'data' => 'There is already a user with the same email or CPF',
                    'code' => 400
                ];
            }
        }

        $query = $this->DBContext->prepare("
            INSERT INTO clientes VALUES (
                :nome,
                :cpf,
                :email,
                :senha,
                :data_nascimento,
                :telefone,
                :cep,
                :estado,
                :cidade,
                :rua,
                :bairro,
                :numero,
                :complemento
            )
        ");
        $query->bindValue(":nome",$user["name"]);
        $query->bindValue(":cpf",$user["cpf"]);
        $query->bindValue(":email",$user["email"]);
        $query->bindValue(":senha",$user["pwd"]);
        $query->bindValue(":data_nascimento",$user["brtd"]);
        $query->bindValue(":telefone",$user["phone"]);
        $query->bindValue(":cep",$user["cep"]);
        $query->bindValue(":estado",$user["st"]);
        $query->bindValue(":cidade",$user["city"]);
        $query->bindValue(":rua",$user["strt"]);
        $query->bindValue(":bairro",$user["ngbh"]);
        $query->bindValue(":numero",$user["num"]);
        $query->bindValue(":complemento",$user["comp"]);


        return $user['name'];
        
    }
    public function UpdateUser($user, $id){

    }
    public function DeleteUser($id){

    }
}
