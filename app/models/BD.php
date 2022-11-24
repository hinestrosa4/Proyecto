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
         /*catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }*/
    }

    function getListaSelect($tabla, $c_idx, $c_value, $condicion="")
    {
        $this->stmt = $this->pdo->prepare('SELECT ' . $c_idx . ',' . $c_value . ' FROM ' . $tabla . " " . $condicion);
        $this->stmt->execute();

        $lista = array();
        while ($row = $this->stmt->fetch(PDO::FETCH_ASSOC)) {
            $lista[$row[$c_idx]] = $row[$c_value];
        }
        return $lista;
    }

    function catchTarea(){
        /*$nif_cif = $_POST["textNif"];
        $nombre = $_POST["textNombre"];
        $apellidos = $_POST["textApellidos"];
        $telefono = $_POST["textTelefono"];
        $descripcion = $_POST["textDescripcion"];
        $correo = $_POST["textCorreo"];
        $direccion = $_POST["textDireccion"];
        $poblacion = $_POST["textPoblacion"];
        $codigo_postal = $_POST["textCp"];
        $provincia = $_POST["selectProvincia"];
        $estado = $_POST["selectEstado"];
        $fecha_creacion = $_POST["fechaCreacion"];
        $operario_encargado = $_POST["selectOperario"];
        $fecha_realizacion = $_POST["fechaRealizacion"];
        $anotaciones_ant = $_POST["anotacionesAnt"];
        $anotaciones_pos = $_POST["anotacionesPos"];*/

        $todocampos = $_POST;
        $campos = "";
        $names = "";
        
        foreach ($todocampos as $nam=>$camp) {
            $campos  .= $camp . ',';
            $names .= $nam . ',';
        }

        $campos2 = substr($campos, 0, -1);
        $names2 = substr($names, 0, -1);
        $a_campos = explode(",", $campos2);
        //echo $names2;
        echo "<br>";
        echo "<br>";

        include "Tarea.php";

        Tarea::addTarea($a_campos,$names2);

        echo "<a href='procesar_form.php'>Volver al formulario</a>";
        
    }

    function insertarCampos($tabla, $listaValues, $campos){//Función genérica insertar en bases de datos

        $cadena = '';
        foreach($campos AS $id=>$valor){
            $cadena .= "'" . $valor . "'";
            if($id < (count($campos) - 1)){
                $cadena .= ",";
            }
            //echo $cadena . " " . $id . "<br>";
        }
        
        $sql = "INSERT INTO " . $tabla . "(" . $listaValues . ") VALUES(" . $cadena . ")"; 
    
        $resultado = $this->pdo->prepare($sql);
        $resultado->execute(array());
    }
}