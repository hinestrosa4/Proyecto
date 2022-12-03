<?php

/* Clase encargada de gestionar las conexiones a la base de datos */
class BD
{
    public $pdo;
    private $stmt;
    static $_instance;

    /*La función construct es privada para evitar que el objeto pueda ser creado mediante new*/
    private function __construct()
    {
        $this->conectar();
    }

    /*Evitamos el clonaje del objeto. Patrón Singleton*/
    private function __clone()
    {
    }

    /*Función encargada de crear, si es necesario, el objeto. Esta es la función que debemos llamar desde fuera de la clase para instanciar el objeto, y así, poder utilizar sus métodos*/
    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /*Realiza la conexión a la base de datos.*/
    public function conectar()
    {
        /* Conectar a una base de datos de MySQL invocando al controlador */
        $dsn = 'mysql:dbname=bdproyecto;host=localhost';
        $usuario = 'root';
        $password = '';

        $this->pdo = new PDO($dsn, $usuario, $password);
    }

    function getListaSelect($tabla, $c_idx, $c_value, $condicion = "")
    {
        $this->stmt = $this->pdo->prepare('SELECT ' . $c_idx . ',' . $c_value . ' FROM ' . $tabla . " " . $condicion);
        $this->stmt->execute();

        $lista = array();
        while ($row = $this->stmt->fetch(PDO::FETCH_ASSOC)) {
            $lista[$row[$c_idx]] = $row[$c_value];
        }
        return $lista;
    }

    function catchTarea()
    {
        $todocampos = $_POST;

        /*if ($_FILES["fichero_resumen"]['name'] == "")
            $todocampos["fichero_resumen"] = "";
        else
            $todocampos["fichero_resumen"] = "app/files/Tarea_" . $this->getCodTarea()[0] + 1 . "-" .  $_FILES["fichero_resumen"]['name'];

        if ($_FILES["foto_trabajo"]['name'] == "")
            $todocampos["foto_trabajo"] = "";
        else
            $todocampos["foto_trabajo"] = "app/files/Tarea_" . $this->getCodTarea()[0] + 1 . "-" .  $_FILES["foto_trabajo"]['name'];

var_dump($todocampos);*/

        $campos = "";
        $names = "";

        foreach ($todocampos as $nam => $camp) {
            $campos  .= $camp . ',';
            $names .= $nam . ',';
        }

        $campos2 = substr($campos, 0, -1);
        $names2 = substr($names, 0, -1);
        $a_campos = explode(",", $campos2);

        include "Tarea.php";

        Tarea::addTarea($a_campos, $names2);

        echo "<a href='procesar_form.php'>Volver al formulario</a>";
    }

    function insertarCampos($tabla, $listaValues, $campos)
    { //Función genérica insertar en bases de datos

        $cadena = '';
        foreach ($campos as $id => $valor) {
            $cadena .= "'" . $valor . "'";
            if ($id < (count($campos) - 1)) {
                $cadena .= ",";
            }
        }

        $sql = "INSERT INTO " . $tabla . "(" . $listaValues . ") VALUES(" . $cadena . ")";

        $resultado = $this->pdo->prepare($sql);
        $resultado->execute(array());
    }

    function getCodTarea()
    {
        $stmt = $this->pdo->query("SELECT id FROM tareas GROUP BY id desc limit 1");
        return $stmt->fetch();
    }

    public function numFilas($tabla){

        $sql = "SELECT * FROM " . $tabla; 

        $resultado = $this->pdo->prepare($sql);
        $resultado->execute();

        $numFilas = $resultado->rowCount();

        return $numFilas;
    }

    public function contenidoTabla($tabla, $empezarDesde, $tamanioPagina){

        $queryLimite = "SELECT id,nif_cif,nombre,apellidos,telefono,descripcion,correo,direccion,poblacion,
        codigo_postal,provincia,estado,DATE_FORMAT(fecha_creacion, '%d/%m/%Y') AS fecha_creacion ,operario_encargado, DATE_FORMAT(fecha_realizacion, '%d/%m/%Y') AS fecha_realizacion,
        anotaciones_ant,anotaciones_pos,fichero_resumen,foto_trabajo FROM tareas ORDER BY fecha_realizacion " .  " LIMIT " . $empezarDesde . "," . $tamanioPagina;

        $resultado = $this->pdo->prepare($queryLimite);
        $resultado->execute();

        /*Almacenamos el resultado de fetchAll en una variable*/
        $datos = $resultado->fetchAll(PDO::FETCH_ASSOC);

        return $datos;
    }

    public function contenidoImpTabla($tabla, $empezarDesde, $tamanioPagina){

        $queryLimite = "SELECT id,nombre,apellidos,telefono,descripcion,correo,DATE_FORMAT(fecha_creacion, '%d/%m/%Y') AS fecha_creacion ,operario_encargado, DATE_FORMAT(fecha_realizacion, '%d/%m/%Y') AS fecha_realizacion
        FROM tareas ORDER BY fecha_realizacion " .  " LIMIT " . $empezarDesde . "," . $tamanioPagina;

        $resultado = $this->pdo->prepare($queryLimite);
        $resultado->execute();

        /*Almacenamos el resultado de fetchAll en una variable*/
        $datos = $resultado->fetchAll(PDO::FETCH_ASSOC);

        return $datos;
    }

    public function checkUser($correo,$password){
        
        $stmt = $this->pdo->query("SELECT * FROM usuarios where correo='$correo' and clave='$password'");
        return $stmt->fetch();
    }

    public function showTarea($id){

        $queryLimite = "SELECT * FROM tareas where id=$id";

        $resultado = $this->pdo->prepare($queryLimite);
        $resultado->execute();

        /*Almacenamos el resultado de fetchAll en una variable*/
        $datos = $resultado->fetchAll(PDO::FETCH_ASSOC);

        return $datos;
    }

    public function deleteTarea($id){

        $stmt = $this->pdo->query("DELETE from tareas WHERE id=$id");
        $stmt->execute();
    }
}