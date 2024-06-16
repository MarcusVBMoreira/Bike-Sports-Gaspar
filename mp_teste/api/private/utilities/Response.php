<?php

define('_CONF',parse_ini_file(__DIR__ . '/.ini', true));    

class Response{
    private $Data = [
        'api_version' => _CONF['api']['API_VERSION'],
        'api_active' => true,
        'response_code' => 0,
    ];
    private const _AcceptedMethods = ['GET','POST','DELETE','PUT',];
    //INITIALIZE OBJECT WITH METHOD AND ENDPOINT PARAMETERS
    public function __construct($method,$params = []){
        if(!$this->MethodIsAccepted(strtoupper($method))){
            $this->Data['response_code'] = 405;
            $this->RequestError(405,"Request method invalid: $method");
        }
        if (_CONF['api']['API_ACTIVE']!=1) {
            $this->Data['response_code'] = 503;
            $this->RequestError(503,'API offline temporarily. Try again later.');
        }
        $this->Data = [
            'api_version' => _CONF['api']['API_VERSION'],
            'api_active' => true,
            'response_code' => 200,
            'request_method' => $method,
            'request_parameters' => $params
        ];
    }
    //CHECK IF GIVEN METHOD EXISTS
    public function MethodIsAccepted($method){
        return in_array(strtoupper($method),self::_AcceptedMethods);
    }
    //CHECK IF GIVEN ROUTE EXISTS
    // public function RouteIsAccepted($route){
    //     return array_key_exists($route,_ROUTES);
    // }
    public function GetMethod(){
        return $this->Data['request_method'];
    }
    //ADDING DATA TO RESPONSE
    public function AddToResponse($key,$value){
        $this->Data[$key] = $value;
    }
    //THROWING ERRORS ON REQUEST
    public function RequestError($code,$message){
        $this->Data += ['message'=> $message,'results'=> null];
        $this->Send($code);
    }
    //SENDING RESPONSE AND KILL THE SCRIPT
    public function Send($code){
        header('Content-Type:application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT');
        http_response_code($code);
        $this->Data['response_code'] = $code;
        echo json_encode($this->Data);
        die();
    }
}