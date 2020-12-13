<?php
class Verificar{
    protected function Datos_A_Verificar($arg1, $arg2){
        if ($arg1=="Yuri" && $arg2=="456") {
            return "Usuario logeado";
        }else{
            return "Error: los datos ingresados no coinciden";
        }
    }
}
class Login extends Verificar{
    private $usuario, $contrasena;
    public function __construct($arg1, $arg2){
        $this->usuario = $arg1;
        $this->contrasena = $arg2;
    }
    private function Enviar_Datos(){
        return $this->Datos_A_Verificar($this->usuario, $this->contrasena);
    }
    public function Mensaje(){
        return $this->Enviar_Datos();
    }
}
$obj = new Login("Yuri","456");
echo $obj->Mensaje();









?>