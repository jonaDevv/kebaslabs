<?php
namespace Helper;

use Helper\Sesion;



class Login
{
    public static function Identifica(string $usuario,string $contrasena,bool $recuerdame)
    {

        






        
        
    }

    /** 
     * 
     * @param Usuario $usuario 
     * @param string $contrasena 
     * @return bool
     */
    public static function existeUsuario($usuario,string $contrasena=null)
    {
        //
        $passUser = $usuario['password'];

        if ($passUser == $contrasena){

            return true;
        }
        
    }




    public static function UsuarioEstaLogueado()
    {

        
    }





    public static function login($usuario){ //Solo para USERRR

        Sesion::iniciaSesion();
        unset($usuario['password']);
        $_SESSION['user']=$usuario;
       

    }


   public static function logout(){

        
        $_SESSION['user']="";
        session_unset(); 
        Sesion::finalizaSesion();

    }


    public static function leerUsuario(){
        return isset($_SESSION['user']);
    }

    



   
}