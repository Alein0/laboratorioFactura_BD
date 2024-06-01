<?php

namespace App\models;

class Clientes extends Model
{
    protected $id = 0;
    protected $nombreCompleto = '';
    protected $tipoDocumento = '';	
    protected $numeroDocumento = '';
    protected $email = '';
    protected $telefono = '';

    // Métodos getter y setter
    public function get($property)
    {
        return $this->$property;
    }

    public function set($property, $value)
    {
        $this->$property = $value;
    }
}
