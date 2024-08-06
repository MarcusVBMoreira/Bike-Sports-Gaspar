<?php

class Upload{
    private $fileName;
    public function __construct(string $fileName) {
        $this->fileName = $fileName;
    }
    public function GetFileName(){
        return $this->fileName;
    }
}