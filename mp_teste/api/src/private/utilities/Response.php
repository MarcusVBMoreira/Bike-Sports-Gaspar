<?php
namespace Api\Private\Utilities;

define('_CONF',parse_ini_file(__DIR__ . '/.ini', true));    

class Response{
    private $Data = [
        'api_version' => _CONF['api']['API_VERSION'],
        'response_code' => 0,
        'response_time' => 0,
        'response_date' => 0,
        'api_active' => true,
    ];
    private const _AcceptedMethods = ['GET','POST','DELETE','PUT',];
    //INITIALIZE OBJECT WITH METHOD AND ENDPOINT PARAMETERS
    public function __construct($method,$params = []){
        if(!$this->MethodIsAccepted(strtoupper($method))){
            $this->Data['response_code'] = 405;
            self::RequestError(405,"Request method invalid: $method",$params);
        }
        if (_CONF['api']['API_ACTIVE']!=1) {
            $this->Data['response_code'] = 503;
            self::RequestError(503,'API offline temporarily. Try again later.',$params);
        }
        date_default_timezone_set('America/Bahia');
        $this->Data = [
            'api_version' => _CONF['api']['API_VERSION'],
            'response_code' => 200,
            'response_time' => time(),
            'response_date' => date('Y-m-d H:i:s'),
            'api_active' => true,
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
    public static function RequestError($code,$message,$params){
        header('Content-Type:application/json');
        http_response_code($code);
        $Data = [
            'api_version' => _CONF['api']['API_VERSION'],
            'response_code' => $code,
            'response_time' => microtime(true) - _START_TIME,
            'response_date' => date('Y-m-d H:i:s'),
            'api_active' => true,
            'request_method' => $_SERVER['REQUEST_METHOD'],
            'request_parameters' => $params,
            'message' => $message,
            'results' => null,
        ];
        echo json_encode($Data);
        die();
    }
    //SENDING RESPONSE AND KILL THE SCRIPT
    public function Send($code){
        header('Content-Type:application/json');
        http_response_code($code);
        $this->Data['response_code'] = $code;
        $this->Data['response_time'] = microtime(true) - _START_TIME;
        echo json_encode($this->Data);
        die();
    }
}