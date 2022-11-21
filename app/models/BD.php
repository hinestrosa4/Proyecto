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

        try {
            $this->pdo = new PDO($dsn, $usuario, $password);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }

    public function getProv()
    {
        $prov = array();

        $this->stmt = $this->pdo->prepare('SELECT codPoblacion,nombre FROM poblacion');
        $this->stmt->execute();
        
        while ($row =  $this->stmt->fetch(PDO::FETCH_ASSOC)) {
            $prov[$row['codPoblacion']] = $row['nombre'];
        }
        return $prov;
    }

    public function getOperarios()
    {
        $ops = array();

        $this->stmt = $this->pdo->prepare('SELECT nombre, apellidos FROM usuario WHERE isAdmin=0');
        $this->stmt->execute();
        
        while ($row =  $this->stmt->fetch(PDO::FETCH_ASSOC)) {
            $ops[$row['nombre']] = $row['apellidos'];
        }
        return $ops;
    }
}
