<?php


class FormularioNoticiaModel
  {

    private $id;
    private $fechaNoticia;
    private $seccionNoticia;
    private $noticia;
    private $tituloNoticia;
    private $imagen;


    //get obtencion de datos
    public function get_id(){
        return $this->id;
    }

    public function get_fechaNoticia(){
        return $this->fechaNoticia;
    }

    public function get_seccionNoticia(){
        return $this->seccionNoticia;
    }

    public function get_noticia(){
        return $this->noticia;
    }

    public function get_tituloNoticia(){
        return $this->tituloNoticia;
    }

    public function get_imagen(){
        return $this->imagen;
    }

    //seter asignacion da datos
    public function set_id($id){
        $this->id = $id;
    }

    public function set_fechaNoticia($fechaNoticia){
        $this->fechaNoticia = $fechaNoticia;
    }

    public function set_seccionNoticia($seccionNoticia){
        $this->seccionNoticia = $seccionNoticia;
    }

    public function set_noticia($noticia){
        $this->noticia = $noticia;
    }

    public function set_tituloNoticia($tituloNoticia){
        $this->tituloNoticia = $tituloNoticia;
    }

    public function set_imagen($imagen){
        $this->imagen = $imagen;
    }










  }




 ?>
