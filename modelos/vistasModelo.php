<?php
class vistasModelo{
    protected function obtener_vistas_modelo($vista){
        $listaBlanca=["inicio","paciente","cita","404"];
        if(in_array($vista,$listaBlanca)){
            if(is_file("./vistas/contenido/vista-".$vista.".php")){
                $contenido="./vistas/contenido/vista-".$vista.".php";
            }else{
                $contenido="404";
            }
        }elseif($vista=="login"){
            $contenido="login";
        }elseif($vista=="index"){
            $contenido="login";
        } else{
            $contenido="404";
        }
        return $contenido;
    }
}