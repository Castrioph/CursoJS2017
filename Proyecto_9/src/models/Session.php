<?php

/**
 * Created by PhpStorm.
 * User: ellio
 * Date: 29/05/2018
 * Time: 22:29
 */
class Session
{
    private $usuario = "";
    private $puntuacion = 0;

    function __construct($usuario, $puntuacion)
    {
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['puntuacion'] = $puntuacion;

    }

    function start(){
        session_start();
    }

    /**
     * @return int
     */
    public function getPuntuacion()
    {
        return $this->puntuacion;
    }

    /**
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param int $puntuacion
     */
    public function setPuntuacion($puntuacion)
    {
        $this->puntuacion = $puntuacion;
    }

    /**
     * @param string $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
}