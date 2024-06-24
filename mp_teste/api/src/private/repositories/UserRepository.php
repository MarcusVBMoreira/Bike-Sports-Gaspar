<?php
namespace Api\Private\Repositories;
use Api\Private\Context\DBContext, PDO;

class UserRepository implements IRepository{
    public static $DBContext;
    private static $Instance = null;
    public function GetInstance(){
        if(self::$Instance === null){
            self::$Instance = new self();
        }
        return self::$Instance;
    }
    public static function Get(){
        self::$DBContext = DBContext::GetInstance();
        $query = self::$DBContext->prepare("
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
    public static function GetById($id){
        self::$DBContext = DBContext::GetInstance();
        $query = self::$DBContext->prepare("
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
    public static function Create($user){
        self::$DBContext = DBContext::GetInstance();
        if(!is_array($user)){
            return "User paramater must be an associative array. Passed:" . var_dump($user) .".";
        }

        //LOOK FOR DUPLICATE RECORDS
        $query = self::$DBContext->prepare("
            SELECT * FROM clientes 
            WHERE email = :email 
        ");
        $query->bindValue(":email",$user["email"]);

        if($query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if(count($result)> 0){
                return [
                    'data' => 'There is already a user with the same email',
                    'code' => 200
                ];
            }
        }

        date_default_timezone_set('America/Bahia');
        $time_brazil = date('Y/m/d H:i:s e');
        date_default_timezone_set('UTC');
        $time_utc = date('Y/m/d H:i:s e');
        $created_at = "($time_brazil) - ($time_utc)";

        $query = self::$DBContext->prepare("
            INSERT INTO clientes (
                nome,
                cpf,
                email,
                senha,
                data_nascimento,
                telefone,
                cep,
                estado,
                cidade,
                rua,
                bairro,
                numero,
                complemento,
                created_at,
                updated_at
            ) VALUES (
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
                :complemento,
                :created_at,
                :updated_at
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
        $query->bindValue(":created_at",$created_at);
        $query->bindValue(":updated_at",$created_at);

        if($query->execute()){
            return [
                'data' => 'User added successfully',
                'code' => 201
            ];
        }else{
            return [
                'data' => 'Failed to add user',
                'code' => 500
            ];
        }        
    }
    public static function Update($user, $id){
        self::$DBContext = DBContext::GetInstance();
        if(!is_array($user)){
            return [
                'data' => 'Updating user needs to be array. Passed: ' . var_dump($user),
                'code' => 400
            ];
        }

        
    }
    public static function SoftDelete($id){
        self::$DBContext = DBContext::GetInstance();
        $query = self::$DBContext->prepare("
            SELECT * FROM clientes 
            WHERE id = :id
        ");
        $query->bindValue(':id',$id);

        if($query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if(count($result) <= 0){
                return [
                    'data' => "User of id $id not found in database.",
                    'code' => 200
                ];
            }

            date_default_timezone_set('America/Bahia');
            $time_brazil = date('Y/m/d H:i:s e');
            date_default_timezone_set('UTC');
            $time_utc = date('Y/m/d H:i:s e');
            $deleted_at = "($time_brazil) - ($time_utc)";

            $query = self::$DBContext->prepare("
                UPDATE clientes SET 
                deleted_at = :deleted 
                WHERE id = :id
            ");
            $query->bindValue(':deleted',$deleted_at);
            $query->bindValue(':id',$id);

            if($query->execute()){
                return [
                    'data' => 'User deactivated successfully',
                    'code' => 200
                ];
            }else{
                return [
                    'data'=> 'Failed to soft delete user',
                    'code'=> 500,
                ];
            }
        }
    }
    public static function HardDelete($id){
        self::$DBContext = DBContext::GetInstance();
        $query = self::$DBContext->prepare("
            SELECT * FROM clientes 
            WHERE id = :id
        ");
        $query->bindValue(":id",$id);

        if($query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if(count($result) <= 0){
                return [
                    'data' => "User of id $id not found in database",
                    'code' => 200
                ];
            }

            $query = self::$DBContext->prepare("
                DELETE FROM clientes
                WHERE id = :id
            ");
            $query->bindValue(":id",$id);

            if($query->execute()){
                return [
                    'data' => 'User deleted permanently.',
                    'code' => 200
                ];
            }else{
                return [
                    'data'=> 'Failed to delete user',
                    'code'=> 500
                ];
            }
        }
    }
}
