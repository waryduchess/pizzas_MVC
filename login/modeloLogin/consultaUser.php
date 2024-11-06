<?php
class Usuario
{
    private $nombre;
    private $usuario;
    private $contra;
    private $tipoUser;
    private $conn;

    public function __construct($conn, $usuarioIngresado)
    {
        $this->conn = $conn;
        $this->cargarDatos($usuarioIngresado);
    }

    private function cargarDatos($usuarioIngresado)
    {
        try {
            // Consulta el nombre, usuario, contra y tipoUser
            $sql = "SELECT
                        u.nombre,
                        u.usuario,
                        u.contrasena,
                        t.id_tipo_usuario
                    FROM
                        usuario u
                    JOIN tipo_usuario t ON
                        t.id_tipo_usuario = u.tipo_usuario_id
                    WHERE
                        u.usuario = ?";

            // Cambié prepareQuery por prepare, que es el método correcto
            $stmt = $this->conn->prepare($sql); // Aquí se debe usar 'prepare' en lugar de 'prepareQuery'
            $stmt->bind_param("s", $usuarioIngresado); // Enlazar el parámetro
            $stmt->execute(); // Ejecutar la consulta
            $resultado = $stmt->get_result(); // Obtener los resultados

            if ($resultado->num_rows > 0) {
                $fila = $resultado->fetch_assoc();

                // Carga los datos sin verificar la contraseña
                $this->nombre = $fila['nombre'];
                $this->usuario = $fila['usuario'];
                $this->contra = $fila['contrasena'];
                $this->tipoUser = $fila['id_tipo_usuario'];
            } else {
                throw new Exception("Usuario no encontrado.");
            }
        } catch (Exception $e) {
            throw new Exception("Error al cargar los datos del usuario: " . $e->getMessage());
        }
    }

    private function obtenerNombre()
    {
        return $this->nombre;
    }

    private function obtenerUsuario()
    {
        return $this->usuario;
    }

    private function obtenerContra()
    {
        return $this->contra;
    }

    private function obtenerTipoUser()
    {
        return $this->tipoUser;
    }

    // Métodos para obtener información del usuario
    public function getNombre()
    {
        return $this->obtenerNombre();
    }

    public function getUsuario()
    {
        return $this->obtenerUsuario();
    }

    public function getTipoUser()
    {
        return $this->obtenerTipoUser();
    }

    public function getContra()
    {
        return $this->obtenerContra();
    }
}
?>
