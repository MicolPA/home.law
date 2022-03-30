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
        return preg_replace('/,[\\;\"´´]+/', '', trim($string));
    }

    function savePhoto($model, $nombre_archivo, $campo, $carpeta){

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
            $imagen = $model[$campo];
        }
        return $imagen;

    }



}
