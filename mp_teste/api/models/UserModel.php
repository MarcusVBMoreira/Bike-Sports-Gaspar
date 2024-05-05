<?php

class UserModel{
    private $DbInstance;
    private $Id;

    public function __construct($id = null){
        $this->Id = $id;
        $this->DbInstance = DBContext::GetInstance();
    }
    public function GetUser(){
        $query = $this->DbInstance->prepare("SELECT * FROM clientes WHERE id = :id");
        $query->bindValue(':id',$this->Id);
        if($query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if(count($result)>0){
                return $result[0];
            }else{
                return 'User not found in database.';
            }
        }
    }
}
