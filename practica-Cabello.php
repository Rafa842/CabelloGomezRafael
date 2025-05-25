<?php
/**
 * Clase para tratar nombres de usuario.
 * 
 * @author Rafael Cabello
 * @version 1.0.0
 */
class EjemploModificado {
    
    /**
     * Nombre del usuario.
     * 
     * @var string
     */
    private $nombre;

    /**
     * Constructor de la clase.
     * 
     * @param string $nombre Nombre del usuario.
     */
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * Obtiene el nombre del usuario.
     * 
     * @return string El nombre del usuario.
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Establece un nuevo nombre para el usuario.
     * 
     * @param string $nombre El nuevo nombre del usuario.
     * @return void
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * Muestra un saludo personalizado.
     * 
     * @return string Mensaje de saludo.
     */
    public function saludar() {
        return "¡Hola, " . $this->nombre . "!";
    }

    /**
     * Funcion interna solo para desarrolladores.
     * 
     * @internal Esta funcion solo debe ser utilizada para pruebas internas.
     * @return string Mensaje para desarrolladores.
     */
    public function mensajeInterno() {
        return "Este es un mensaje solo para desarrolladores.";
    }
}
?>
