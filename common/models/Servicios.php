<?php

namespace common\models;

use Yii;
use yii\base\Model;
use frontend\models\WpUsers;
use frontend\models\WpUsermeta;
use \frontend\models\PlanesConfiguracion;
use yii\web\UploadedFile;



class Servicios extends Model {


    function splitname($name, $lasname, $just_one=0){

        $name_split = '';
        $last_split = '';
        $temp_name = explode(' ', $name);
        $temp_last = explode(' ', $lasname);
        if(isset($temp_name[0])){
            $name_split = $temp_name[0];
        }
        if(isset($temp_last[0])){
            $last_split = $temp_last[0];
        }

        if(strlen($temp_last[0]) == 3){
            if(isset($temp_last[1])){
                $last_split .= ' '.$temp_last[1];
            }

            if (strtoupper($last_split) == 'DE LOS' OR strtoupper($last_split) == 'DE LA' OR strtoupper($last_split) == 'DE LAS' OR strtoupper($last_split) == 'DE LO') {
                $last_split .= ' '.$temp_last[2];
            }
            
        }

        if(strlen($temp_last[0]) == 2){
            if(isset($temp_last[1])){
                $last_split .= ' '.$temp_last[1];
            }
            if (strtoupper($last_split) == 'DE LOS' OR strtoupper($last_split) == 'DE LA' OR strtoupper($last_split) == 'DE LAS' OR strtoupper($last_split) == 'DE LO') {
                $last_split .= ' '.$temp_last[2];
            }
        }

        if ($just_one == 2) { 
            return $last_split;   
        }
        if ($just_one == 1) {
            return $name_split;   
        }

        return $name_split.' '.$last_split;
    }

    function formatDate($date, $type=2) {
        
        $date = substr($date, 0, 10);
        $day = date('d', strtotime($date));
        $dia = date('l', strtotime($date));
        $mes = date('F', strtotime($date));
        $year = date('Y', strtotime($date));
        $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        $nombreMes = str_replace($meses_EN, $meses_ES, $mes);

        if ($type == 1) {
            return "$nombreMes $day, $year";
        }else{
            return "$day de $nombreMes, $year";
        }
    }


    function clean_string($string){
        return preg_replace('/,[\\;\"????]+/', '', trim($string));
    }

    function savePhoto($model, $nombre_archivo, $campo, $carpeta){
        $imagen_old = $model[$campo];

        $nombre_archivo = str_replace(' ', '-', $nombre_archivo);
        $nombre_archivo = $this->clean_string($nombre_archivo);
        $path = "images/$carpeta/";

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        if (UploadedFile::getInstance($model, "$campo")) {
            $model[$campo] = UploadedFile::getInstance($model, "$campo");
            $imagen = $path . $nombre_archivo .'-'. date('Y-m-d H-i-s') . ".". $model[$campo]->extension;
            $model["$campo"]->saveAs($imagen);
        }else{
            $imagen = $imagen_old;
        }

        $imagen = $imagen ? $imagen : $imagen_old;
        return $imagen;

    }

    function calcularCuota($monto, $meses, $tasa){

        $datos = [];
        $tasafinal = $tasa / 1200;
        // $factor = Math.pow($tasafinal+1,$meses);
        $factor = pow($tasafinal+1,$meses);
        $datos['cuota'] = $monto * $tasafinal * $factor / ($factor - 1);

        $datos['totalInterest'] = $datos['cuota'] * $meses - $monto;
        $datos['totalPay'] = $monto + $datos['totalInterest'];

        return $datos;

    }

    function getTablaAmortizacion($monto, $meses, $tasa){

            $montoc = 0;
            $cuota = 0;
            for ($i = 1; $i < $meses + 1; $i++) {
                    $date = date('Y-m-d');
                    $newDate = date('m', strtotime('+1 month', strtotime($date)));
                    // $newDate = date('m',strtotime('first day of +1 month'));


                    if ($i == 1) {
                            $saldo = $monto;
                            $datos = $this->calcularCuota($saldo, $meses, $tasa);
                            // cuota = formatNumber(datos.cuota);
                            $cuota =  $datos['cuota'];
                            $montoc = $monto - $cuota;

                            // console.log(datos);

                    }else{
                            $saldo = $balance;
                            $montoc = $montoc - $cuota + $datosMes['totalInterest'];

                    }
                    $datosMes = $this->calcularCuota($saldo, 1, $tasa);
                    // console.log(datosMes);
                    
                    $totalInterest = $datosMes['totalInterest'];
                    $totalPay = $datosMes['totalPay'];

                    $balance = $montoc + $totalInterest;

                    
                   
                    // $('.tBody').show();
            }
    }

    function saveLog($type, $id, $agente_id){

        $log = new \frontend\models\LogVisitas();
        
        if ($type == 'perfil') {
            $log->perfil_agente = $id;
        }else{
            $log->propiedad_id = $id;
        }
        $log->agente_id = $agente_id;
        $log->dispositivo_ip = $this->getIp();
        $log->date = date('Y-m-d H:i:s');
        $log->save();
    }

    function getIp(){

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        
        return $ip;
    }



}
