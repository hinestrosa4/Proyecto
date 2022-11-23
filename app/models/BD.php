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
        $dsn = 'mysql:dbname=bddempresa;host=localhost';
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


    function intoValues(){
        
    }
    /*function intoValues($nif,$nombre,$apellidos,$clave,$correo,$direccion,$telefono,$isAdmin)
    {
        $sql = "INSERT INTO tareas (cod_tarea,nif_cif,nombre,telefono,descripcion,correo,direccion,poblacion,codigoPostal,
        provincia,estado,fechaCreacion,operarioEncargado,fechaRealizacion,anotacionesAnt,anotacionesPos)
        VALUES($nif,$nombre,$apellidos,$clave,$correo,$direccion,$telefono,$isAdmin)";
    $resultado = $this->db->prepare($sql);
    $resultado->execute(array());
    }*/
}
