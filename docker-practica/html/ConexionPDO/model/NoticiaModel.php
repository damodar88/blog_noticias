
<?php


class NoticiaModel
{

  private $db;
  private $noticia;

  function __construct(){

    require_once('model/Conectar.php');

    $this->db = Conectar::conexion();

    $this->usuario = array();

  }

  public function get_noticia(){

    //$consultaSQL = $this->db->query('SELECT ID_USUARIO,nombreUsuario,apellidoPaternoUsuario,apellidoMaternoUsuario,ocupacionUsuario FROM USUARIO');

    //require('Paginacion.php');

    $consulta = $this->db->query('SELECT fechaNoticia,secionNoticia,noticiaNoticia,tituloNoticia FROM NOTICIA');

    while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

      $this->noticia[]=$filas;

    }

  return $this->noticia;

  }







}





 ?>
