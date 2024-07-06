<?php

class Request{
    public static function Get(){
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
    public static function GetById($id){

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
}