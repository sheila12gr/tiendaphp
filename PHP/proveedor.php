<?php

  
class Proveedor {

  // ********************************************
  // ESTADO!!!
  // ********************************************
  // Properties

  private $nombre;   
  private $cif;
  private $direccion; 
  private $email;
  private $telefono;
  
  // ********************************************
  // COMPORTAMIENTO!!!
  // ********************************************
  // Methods
  // Constructor
  function __construct($nNombre, $nCif, $nDireccion, $nEmail, $nTelefono) {
  
    $this->nombre = $nNombre;
    $this->cif = $nCif;
    $this->direccion = $nDireccion;    
    $this->email = $nEmail;
    $this->telefono = $nTelefono; 
    
  }

  //Getters

  function getNombre() {
    return $this->nombre;
  }

  function getCif() {
    return $this->cif;
  }
  
  function getDireccion() {
    return $this->direccion;
  }

  function getEmail() {
    return $this->email;
  }

  function getTelefono() {
    return $this->telefono;
  }


  //sql para inserción del proveedor
  function getInsertSQL() {
    $sql = "INSERT INTO proveedor (nombre, cif, direccion, email, telefono) VALUES ('$this->nombre','$this->cif','$this->direccion','$this->email','$this->telefono')";
    return $sql;
  }

  function imprimeProveedor() {
    return "<p>$this->nombre,$this->cif,$this->direccion,$this->email,$this->telefono</p>";
  }

  public static function getSelectSQL($tipoOrdenacion) {

    $sql = "SELECT * FROM proveedor ORDER BY ";

    switch ($tipoOrdenacion) {
      case "nombreasc":
        $sql = $sql . "nombre ASC";
        break;
      case "nombredesc":
        $sql = $sql . "nombre DESC";
        break;
      case "apellidosasc":
        $sql = $sql . "apellidos ASC";
        break;
      default:
        $sql = $sql . "nombre ASC";
    }

    return $sql;
  }


}
?>
