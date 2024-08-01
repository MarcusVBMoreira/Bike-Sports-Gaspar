<?php

class Request{
    public static function GetProd(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost/bike-sports-gaspar/apiv1.1/products/get',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response,true);
    }
    public static function GetByIdProd($id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost/bike-sports-gaspar/apiv1.1/products/getbyid/$id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response,true);
    }
    public static function Create($data){

    }
    public static function Update($data){

    }
    public static function UpdateProp($id,$prop,$value){
        
    }
    public static function DeleteSoft($id){

    }
    public static function DeleteHard($id){

    }
    public static function GetUser(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost/bike-sports-gaspar/apiv1.1/products/get',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response,true);
    }
    public static function GetByIdUser($id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost/bike-sports-gaspar/apiv1.1/products/getbyid/$id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response,true);
    }
    public static function GetByEmailUser($email){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost/bike-sports-gaspar/apiv1.1/users/getbyemail/?email=$email",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response,true);

    }
    public static function CreateUser($data){
        $nome = $data['name'];
        $email = $data['email'];
        $pwd = $data['pwd'];
        $phone = $data['phone'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost/bike-sports-gaspar/apiv1.1/users/create',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => "name=$nome&email=$email&pwd=$pwd&phone=$phone",
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response,true);
    }
    public static function UpdateUser($data){

    }
    public static function UpdatePropUser($id,$prop,$value){
        
    }
    public static function DeleteSoftUser($id){

    }
    public static function DeleteHardUser($id){

    }
}