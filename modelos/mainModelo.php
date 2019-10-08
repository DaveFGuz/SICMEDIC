<?php
if($peticionAjax){
require_once "../core/configAPP.php";
}
else{
require_once "./core/configAPP.php";
}
class mainModelo{
protected function conectar(){
$enlace= new PDO(SGBD,USER,PASS);
return $enlace;
}
protected function ejecutar_consulta_simple($consulta){
$respuesta=self::conectar()->prepare($consulta);
$respuesta->execute();
return $respuesta;
}

public function encryptacion($string){
    $output="false";
    $key=hash('sha256', SECRET_KEY);
    $iv=substr(hash('sha256',SECRET_IV),0,16);
    $output=openssl_encrypt($string,METHOD,$key, 0, $iv);
    $output=base64_encode($output);
    return $output;
}

public function desencryptacion($string){
    $key=hash('sha256', SECRET_KEY);
    $iv=substr(hash('sha256',SECRET_IV),0,16);
    $output=openssl_decrypt(base64_decode($string),METHOD,$key, 0, $iv);
    return $output;
}

protected function generar_codigo_aliatorio($letra,$longitud,$num){
for($i=1;i<=$longitud;$i++){
$numero=rand(0,9);
$letra.=$numero;
}
return $letra."-".$num;
}

protected function limpiar_cadena($cadena){
    $cadena=trim($cadena);
    $cadena=stripslashes($cadena);
    $cadena=str_replace("<script>","",$cadena);
    $cadena=str_replace("<script/>","",$cadena);
    $cadena=str_replace("<script src>","",$cadena);
    $cadena=str_replace("<script type=","",$cadena);
    $cadena=str_replace("SELECT * FROM ","",$cadena);
    $cadena=str_replace("DELETE FROM","",$cadena);
    $cadena=str_replace("INSERT INTO","",$cadena);
    $cadena=str_replace("--","",$cadena);
    $cadena=str_replace("^","",$cadena);
    $cadena=str_replace("[","",$cadena);
    $cadena=str_replace("]","",$cadena);
    $cadena=str_replace("==","",$cadena);
    $cadena=str_replace(";","",$cadena);
    return $cadena;
}

protected function sweet_alert($datos){
    if($datos['Alerta']=="simple"){
        $alerta="
        <script>
        swal('".$datos['titulo']."','".$datos['texto']."','".$datos['tipo']."');
        </script>";
    }
}
    


}

?>
