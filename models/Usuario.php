<?php
namespace app\models;
class Usuario{
    private $id;
    private $usuario;
    private $pwd;

    function getId(){
        return $this->id;
    }
    function setId($value){
        $this->id = $value;
    }

    function getUsuario(){
        return $this->usuario;
    }
    function setUsuario($value){
        $this->usuario = $value;
    }

    function getPwd(){
        return $this->pwd;
    }
    function setPwd($value){
        $this->pwd = $value;
    }
}