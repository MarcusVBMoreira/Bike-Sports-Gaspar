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
        return json_decode($response, true);

    }
    public static function Create($data){
        $nome = $data['name'];
        $descricao = $data['desc'];
        $valor = $data['val'];
        $categoria = $data['cat'];
        $quantidade = $data['qtd'];
        $cor = $data['col'];
        $tipo = $data['tp'];
        $modelo = $data['mod'];
        $marca = $data['brnd'];
        $composicao = $data['compst'];
        $compatibilidade = $data['comptb'];
        $peso = $data['wght'];
        $dimensao = $data['dim'];
        $especificacao = $data['spec'];
        $img1 = $data['i1'];
        $img2 = $data['i2'];
        $img3 = $data['i3'];
        $img4 = $data['i4'];
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost/bike-sports-gaspar/apiv1.1/products/create',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => "name=$nome&val=$valor&qtd=$quantidade&dim=$dimensao&col=$cor&i1=$img1&i2=$img2&i3=$img3&i4=$img4&desc=$descricao&brnd=$marca&mod=$modelo&spec=$especificacao&cat=$categoria&tp=$tipo&wght=$peso&compst=$composicao&comptb=$compatibilidade",
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);

    }
    public static function Update($data){

    }
    public static function UpdateProp($id,$prop,$value){
        
    }
    public static function DeleteSoft($id){

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "http://localhost/bike-sports-gaspar/apiv1.1/products/deletesoft/$id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'PUT',
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode($response);

    }
    public static function DeleteHard($id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://localhost/bike-sports-gaspar/apiv1.1/products/deletehard/$id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response,true);

    }
}