<?php
namespace Api\Private\Repositories;
use Api\Private\Context\DBContext, PDO;

class ProductRepository implements IRepository{
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
            SELECT * FROM produtos WHERE deleted_at IS NULL
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
                    'data' => 'No products found in database.',
                    'code' => 200
                ];
            }
        }
    }
    public static function GetById($id){
        self::$DBContext = DBContext::GetInstance();
        $query = self::$DBContext->prepare("
            SELECT * FROM produtos WHERE id = :id
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
                    'data' => "Product of id $id not found in database.",
                    'code' => 200
                ];
            }
        }
    }
    public static function GetByCategory($cat){
        self::$DBContext = DBContext::GetInstance();
        $query = self::$DBContext->prepare("
            SELECT * FROM produtos WHERE categoria = :cat
        ");//FILTRAR
        $query->bindValue(':cat',$cat);
        
        if($query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if(count($result)>0){
                return [
                    'data' => $result,
                    'code' => 200
                ];
            }else{
                return [
                    'data' => "Product of category $cat not found in database.",
                    'code' => 200
                ];
            }
        }
    }
    public static function Create($product){
        self::$DBContext = DBContext::GetInstance();
        if(!is_array($product)){
            return "Product paramater must be an associative array. Passed:" . var_dump($product) .".";
        }

        //LOOK FOR DUPLICATE RECORDS
        // $query = self::$DBContext->prepare("
        //     SELECT * FROM produtos 
        //     WHERE nome = :name 
        // ");
        // $query->bindValue(":name",$product["name"]);

        // if($query->execute()){
        //     $result = $query->fetchAll(PDO::FETCH_ASSOC);

        //     if(count($result)> 0){
        //         return [
        //             'data' => 'There is already a product with the same name',
        //             'code' => 200
        //         ];
        //     }
        // }

        date_default_timezone_set('America/Bahia');
        $time_brazil = date('Y/m/d H:i:s e');
        date_default_timezone_set('UTC');
        $time_utc = date('Y/m/d H:i:s e');
        $created_at = "($time_brazil) - ($time_utc)";

        $query = self::$DBContext->prepare("
            INSERT INTO produtos (
                nome,
                descricao,
                valor,
                categoria,
                quantidade,
                cor,
                tipo,
                modelo,
                marca,
                composicao,
                compativel,
                peso,
                dimensoes,
                especificacoes,
                video,
                imgs,   
                created_at,
                updated_at
            )
            VALUES (
                :nome,
                :desc,
                :val,
                :cat,
                :qtd,
                :col,
                :tp,
                :mod,
                :brnd,
                :compst,
                :comptb,
                :wght,
                :dim,
                :spec,
                :video,
                :imgs,
                :created_at,
                :updated_at
            )
        ");//CONVERTER VALORESS
        $query->bindValue(":nome",$product["name"]);
        $query->bindValue(":desc",$product["desc"]);
        $query->bindValue(":val",$product["val"]);
        $query->bindValue(":cat",$product["cat"]);
        $query->bindValue(":qtd",$product["qtd"]);
        $query->bindValue(":col",$product["col"]);
        $query->bindValue(":tp",$product["tp"]);
        $query->bindValue(":mod",$product["mod"]);
        $query->bindValue(":brnd",$product["brnd"]);
        $query->bindValue(":compst",$product["compst"]);
        $query->bindValue(":comptb",$product["comptb"]);
        $query->bindValue(":wght",$product["wght"]);
        $query->bindValue(":dim",$product["dim"]);
        $query->bindValue(":spec",$product["spec"]);
        $query->bindValue(":video",$product["video"]);
        $query->bindValue(":imgs",$product["imgs"]);
        $query->bindValue(":created_at",$created_at);
        $query->bindValue(":updated_at",$created_at);

        if($query->execute()){
            return [
                'data' => 'Product added successfully',
                'code' => 201
            ];
        }else{
            return [
                'data' => 'Failed to add product',
                'code' => 500
            ];
        }        
    }
    public static function Update($product, $id){
        self::$DBContext = DBContext::GetInstance();
        if(!is_array($product)){
            return [
                'data' => 'Updating product needs to be array. Passed: ' . var_dump($product),
                'code' => 400
            ];
        }

        $search_id = self::GetById($id);
        if(!is_array($search_id['data'])){
            return [
                'data' => "Product of id $id not found in database.",
                'code' => 200
            ];
        }

        //LOOK FOR DUPLICATE EMAIL ON DIFFERENT RECORD
        // $query = self::$DBContext->prepare("
        //     SELECT * FROM produtos 
        //     WHERE nome = :name AND 
        //     id <> :id
        // ");
        // $query->bindValue(":name",$product["name"]);
        // $query->bindValue(":id",$id);

        // if($query->execute()){
        //     $result = $query->fetchAll(PDO::FETCH_ASSOC);

        //     if(count($result)> 0){
        //         return [
        //             'data' => 'There is already a product with the same name',
        //             'code' => 200
        //         ];
        //     }
        // }

        $query = "UPDATE produtos SET ";
        if(isset($product['name'])){
            $query .= 'nome = :name,';
        }
        if(isset($product['desc'])){
            $query .= 'descricao = :desc,';
        }
        if(isset($product['val'])){
            $query .= 'valor = :val,';
        }
        if(isset($product['cat'])){
            $query .= 'categoria = :cat,';
        }
        if(isset($product['qtd'])){
            $query .= 'quantidade = :qtd,';
        }
        if(isset($product['tp'])){
            $query .= 'tipo = :tp,';
        }
        if(isset($product['mod'])){
            $query .= 'modelo = :mod,';
        }
        if(isset($product['brnd'])){
            $query .= 'marca = :brnd,';
        }
        if(isset($product['compst'])){
            $query .= 'composicao = :compst,';
        }
        if(isset($product['comptb'])){
            $query .= 'compativel = :comptb,';
        }
        if(isset($product['wght'])){
            $query .= 'peso = :wght,';
        }
        if(isset($product['dim'])){
            $query .= 'dimensoes = :dim,';
        }
        if(isset($product['spec'])){
            $query .= 'especificacoes = :spec,';
        }
        if(isset($product['video'])){
            $query .= 'video = :video,';
        }
        if(isset($product['imgs'])){
            $query .= 'imgs = :imgs,';
        }

        $query .= "updated_at = :updated_at WHERE id = :id";
        
        $sql = self::$DBContext->prepare($query);
        
        date_default_timezone_set('America/Bahia');
        $time_brazil = date('Y/m/d H:i:s e');
        date_default_timezone_set('UTC');
        $time_utc = date('Y/m/d H:i:s e');
        $updated_at = "($time_brazil) - ($time_utc)";

        if(isset($product['name'])){
            $sql->bindValue(":name",$product["name"]);
        }
        if(isset($product['desc'])){
            $sql->bindValue(":desc",$product["desc"]);
        }
        if(isset($product['val'])){
            $sql->bindValue(":val",$product["val"]);
        }
        if(isset($product['cat'])){
            $sql->bindValue(":cat",$product["cat"]);
        }
        if(isset($product['qtd'])){
            $sql->bindValue(":qtd",$product["qtd"]);
        }
        if(isset($product['tp'])){
            $sql->bindValue(":tp",$product["tp"]);
        }
        if(isset($product['mod'])){
            $sql->bindValue(":mod",$product["mod"]);
        }
        if(isset($product['brnd'])){
            $sql->bindValue(":brnd",$product["brnd"]);
        }
        if(isset($product['compst'])){
            $sql->bindValue(":compst",$product["compst"]);
        }
        if(isset($product['comptb'])){
            $sql->bindValue(":comptb",$product["comptb"]);
        }
        if(isset($product['wght'])){
            $sql->bindValue(":wght",$product["wght"]);
        }
        if(isset($product['dim'])){
            $sql->bindValue(":dim",$product["dim"]);
        }
        if(isset($product['spec'])){
            $sql->bindValue(":spec",$product["spec"]);
        }
        if(isset($product['video'])){
            $sql->bindValue(":video",$product["video"]);
        }
        if(isset($product['imgs'])){
            $sql->bindValue(":imgs",$product["imgs"]);
        }
        $sql->bindValue(":updated_at",$updated_at);
        $sql->bindValue(":id",$id);
        
        
        if($sql->execute()){
            return [
                'data' => 'Product updated successfully',
                'code' => 200
            ];
        }else{
            return [
                'data' => 'Failed to update product.',
                'code' => 500
            ];
        }


    }
    public static function SoftDelete($id){
        self::$DBContext = DBContext::GetInstance();
        $query = self::$DBContext->prepare("
            SELECT * FROM produtos 
            WHERE id = :id
        ");
        $query->bindValue(':id',$id);

        if($query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if(count($result) <= 0){
                return [
                    'data' => "Product of id $id not found in database.",
                    'code' => 200
                ];
            }

            date_default_timezone_set('America/Bahia');
            $time_brazil = date('Y/m/d H:i:s e');
            date_default_timezone_set('UTC');
            $time_utc = date('Y/m/d H:i:s e');
            $deleted_at = "($time_brazil) - ($time_utc)";

            $query = self::$DBContext->prepare("
                UPDATE produtos SET 
                deleted_at = :deleted 
                WHERE id = :id
            ");
            $query->bindValue(':deleted',$deleted_at);
            $query->bindValue(':id',$id);

            if($query->execute()){
                return [
                    'data' => 'Product deactivated successfully',
                    'code' => 200
                ];
            }else{
                return [
                    'data'=> 'Failed to soft delete Product',
                    'code'=> 500,
                ];
            }
        }
    }
    public static function HardDelete($id){
        self::$DBContext = DBContext::GetInstance();
        $query = self::$DBContext->prepare("
            SELECT * FROM produtos 
            WHERE id = :id
        ");
        $query->bindValue(":id",$id);

        if($query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if(count($result) <= 0){
                return [
                    'data' => "Product of id $id not found in database",
                    'code' => 200
                ];
            }

            $query = self::$DBContext->prepare("
                DELETE FROM produtos
                WHERE id = :id
            ");
            $query->bindValue(":id",$id);

            if($query->execute()){
                return [
                    'data' => 'Product deleted permanently.',
                    'code' => 200
                ];
            }else{
                return [
                    'data'=> 'Failed to delete Product',
                    'code'=> 500
                ];
            }
        }
    }
    public static function UpdateProp($id, $prop, $value){
        self::$DBContext = DBContext::GetInstance();

        $search_id = self::GetById($id);
        if(!is_array($search_id['data'])){
            return [
                'data' => "Product of id $id not found in database.",
                'code' => 200
            ];
        }   
        $query = self::$DBContext->prepare("
            UPDATE produtos
            SET $prop = '$value'
            WHERE id = $id
        ");
        if($query->execute()){
            return [
                'code' => 200,
                'data' => "Property: $prop updated successfully to value: $value on id: $id"
            ];
        }
    }
}
