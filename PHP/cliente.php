<?php

  
class Cliente {

  // ********************************************
  // ESTADO!!!
  // ********************************************
  // Properties

  private $dni;   
  private $nombre;
  private $apellidos; 
  private $movil;
  private $direccion;
  
  // ********************************************
  // COMPORTAMIENTO!!!
  // ********************************************
  // Methods
  // Constructor
  function __construct($nDni, $nNombre, $nApellidos, $nMovil, $nDireccion) {
  
    $this->dni = $nDni;
    $this->nombre = $nNombre;
    $this->apellidos = $nApellidos;    
    $this->movil = $nMovil;
    $this->direccion = $nDireccion; 
    
  }

  function cambiarModoRebaja($modoRebaja) {
      $this->estaRebajado = $modoRebaja;
  }
  
  //Getters

  function getDni() {
    return $this->dni;
  }

  function getNombre() {
    return $this->nombre;
  }
  
  function getApellidos() {
    return $this->apellidos;
  }

  function getMovil() {
    return $this->movil;
  }

  function getDireccion() {
    return $this->direccion;
  }


  //sql para inserción del producto
  function getInsertSQL() {
    $sql = "INSERT INTO clientes (dni, nombre, apellidos, movil, direccion) VALUES ('$this->dni','$this->nombre',$this->apellidos','$this->movil','$this->direccion')";
    return $sql;
  }

  function imprimeCliente() {
    return "<p>$this->dni,$this->nombre,$this->apellidos,$this->movil,$this->direccion</p>";
  }

  public static function getSelectSQL($tipoOrdenacion) {

    $sql = "SELECT * FROM clientes ORDER BY ";

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
      case "apellidosdesc":
          $sql = $sql . "apellidos DESC";
          break;
      default:
        $sql = $sql . "nombre ASC";
    }

    return $sql;
  }


}
?>