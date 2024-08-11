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
                img1,
                img2,
                img3,
                img4,
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
                :i1,
                :i2,
                :i3,
                :i4,
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
        $query->bindValue(":i1",$product["i1"]);
        $query->bindValue(":i2",$product["i2"]);
        $query->bindValue(":i3",$product["i3"]);
        $query->bindValue(":i4",$product["i4"]);
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
        $query = self::$DBContext->prepare("
            SELECT * FROM produtos 
            WHERE nome = :name AND 
            id <> :id
        ");
        $query->bindValue(":name",$product["name"]);
        $query->bindValue(":id",$id);

        if($query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if(count($result)> 0){
                return [
                    'data' => 'There is already a product with the same name',
                    'code' => 200
                ];
            }
        }

        $query = self::$DBContext->prepare("
            UPDATE produtos SET
            nome = :name,
            descricao = :desc,
            valor = :val,
            categoria = :cat,
            quantidade = :qtd,
            tipo = :tp,
            modelo = :mod,
            marca = :brnd,
            composicao = :compst,
            compativel = :comptb,
            peso = :wght,
            altura = :hght,
            largura = :wdth,
            comprimento = :lgth,
            especificacoes = :spec,
            img1 = :i1,
            img2 = :i2,
            img3 = :i3,
            img4 = :i4,
            updated_at = :updated_at
            WHERE
            id = :id
        ");

        date_default_timezone_set('America/Bahia');
        $time_brazil = date('Y/m/d H:i:s e');
        date_default_timezone_set('UTC');
        $time_utc = date('Y/m/d H:i:s e');
        $updated_at = "($time_brazil) - ($time_utc)";

        $query->bindValue(":name",$product["name"]);
        $query->bindValue(":desc",$product["desc"]);
        $query->bindValue(":val",$product["val"]);
        $query->bindValue(":cat",$product["cat"]);
        $query->bindValue(":qtd",$product["qtd"]);
        $query->bindValue(":tp",$product["tp"]);
        $query->bindValue(":mod",$product["mod"]);
        $query->bindValue(":brnd",$product["brnd"]);
        $query->bindValue(":compst",$product["compst"]);
        $query->bindValue(":comptb",$product["comptb"]);
        $query->bindValue(":wght",$product["wght"]);
        $query->bindValue(":hght",$product["hght"]);
        $query->bindValue(":wdth",$product["wdth"]);
        $query->bindValue(":lgth",$product["lgth"]);
        $query->bindValue(":spec",$product["spec"]);
        $query->bindValue(":i1",$product["i1"]);
        $query->bindValue(":i2",$product["i2"]);
        $query->bindValue(":i3",$product["i3"]);
        $query->bindValue(":i4",$product["i4"]);
        $query->bindValue(":updated_at",$updated_at);
        $query->bindValue(":id",$id);
        
        
        if($query->execute()){
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
