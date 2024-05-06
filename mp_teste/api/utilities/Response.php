<?php
//GLOBAL
define("_CODES",[
    200,
    201,
    204,
    401,
    403,
    404,
    405
]);
class Response{
    private $Data;
    private const _AcceptedMethods = ['GET','POST','DELETE','PUT'];
    //INITIALIZE OBJECT WITH METHOD AND ENDPOINT PARAMETERS
    public function __construct($method,$endpoint){
        if(!$this->MethodIsAccepted($method)){
            $this->RequestError(_CODES[6],'Request method invalid.');
        }
        $this->Data = [
            'request_method' => $method,
            'endpoint' => $endpoint
        ];
    }
    //CHECK IF GIVEN METHOD EXISTS
    public function MethodIsAccepted($method){
        return in_array(strtoupper($method),self::_AcceptedMethods);
    }
    public function GetMethod(){
        return $this->Data['request_method'];
    }
    public function GetEndpoint(){
        return $this->Data['endpoint'];
    }
    //ADDING DATA TO RESPONSE
    public function AddToResponse($key,$value){
        $this->Data[$key] = $value;
    }
    //THROWING ERRORS ON REQUEST
    private function RequestError($code,$message){
        $this->Data = [
            'message' => $message,
            'results' => null
        ];
        $this->Send($code);
    }
    //SENDING RESPONSE AND KILL THE SCRIPT
    public function Send($code){
        header('Content-Type:application/json');
        http_response_code($code);
        echo json_encode($this->Data);
        die();
    }
}