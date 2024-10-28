
        <?php
        //pizas.php
        //<link rel="stylesheet" type="text/css" href="./css/">
   // <link href="./boots/css/bootstrap.min.css" rel="stylesheet">
class BaseDeDatos {
    private $host = 'localhost';
    private $user = 'erik';
    private $password = '2013460';
    private $database = 'pizzas';
    private $conexion;

    public function __construct() {
        $this->conexion = new mysqli($this->host, $this->user, $this->password, $this->database);

        if ($this->conexion->connect_error) {
            die("Error en la conexión: " . $this->conexion->connect_error);
        }
        echo "conexion exitosa";
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function cerrarConexion() {
        if ($this->conexion) {
            $this->conexion->close();
        }
    }

    public function __destruct() {
        $this->cerrarConexion();
    }
}

        ?>
