<?php
namespace Api\Private\Repositories;
interface IRepository{
    public static function GetById($id);
    public static function Get();
    public static function Create($user);
    public static function Update($user, $id);
    public static function UpdateProp($id, $prop, $value);
    public static function SoftDelete($id);
    public static function HardDelete($id);
}