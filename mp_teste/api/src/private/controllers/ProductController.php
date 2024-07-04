<?php
namespace Api\Private\Controllers;
use Api\Private\Repositories\ProductRepository;
class ProductController{
    public static function GetProducts(){
        return ProductRepository::Get();
    }
    public static function GetProductById($id){
        return ProductRepository::GetById($id);
    }
    public static function CreateProduct($prod){
        return ProductRepository::Create($prod);
    }
    public static function SoftDeleteProduct($id){
        return ProductRepository::SoftDelete($id);
    }
    public static function HardDeleteProduct($id){
        return ProductRepository::HardDelete($id);
    }
    public static function UpdateProduct($prod,$id){
        return ProductRepository::Update($prod,$id);
    }
    public static function UpdateProp($id, $prop, $value){
        return ProductRepository::UpdateProp($id, $prop, $value);
    }
}
