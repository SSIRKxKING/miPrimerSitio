<?php
//se hace una llamada oblogatoria al archivo conexion.php para disponer sus instacias//
require('conexion.php');

//herencia//
class Modelo
{
    //se declara un atributo protegido//
    protected $_db;

    //se declara el constructor de la clase//
    public function __construct()
    {
        //crear una instacia u objeto de la clase Conexion//
        $this->_db = new Conexion; //colaboracion de clases//
    }
}

//private -- solo es accesible dentro de la clase que esta declarada//
//protected --el objeto se puede acceder desde una clase que herede de la clase que declara el objeto//
//public -- se hacen visibles para cualquier clase quen herede de la clase donde se declara el objeto//
//static -- se pueden usar sin necesidad de heredar de la case que la crea solo o con solo mencionar la clase//
