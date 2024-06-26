<!-- FUNCION DE REGISTAR USAURIO -->
<?php

class Registrar_usuario {
    private $db;

    public function __construct($host, $username, $password, $dbname) {
        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function registrar($documento, $nombre, $correo, $password) {
        try {
            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Prepare the SQL statement
            $stmt = $this->db->prepare("INSERT INTO clientes (documento, nombre, correo, password) VALUES (:documento, :nombre, :correo, :password)");

            // Bind parameters
            $stmt->bindParam(':documento', $documento);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':password', $hashedPassword);

            // Execute the statement
            $stmt->execute();

            header("Location: controlador.php?seccion=seccion9");
            exit();
        } catch (PDOException $e) {
            return "Registration failed: " . $e->getMessage();
        }
    }
}
?>


<!-- iniciar sesion -->
<?php
class Iniciar_sesion {
    private $db;

    public function __construct($host, $username, $password, $dbname) {
        try {
            // Establecer la conexión a la base de datos
            $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Manejar errores de conexión a la base de datos aquí
            echo "Error de conexión: " . $e->getMessage();
            exit();
        }
    }

    public function login($correo, $password) {
        try {
            // Prepare the SQL statement
            $stmt = $this->db->prepare("SELECT * FROM clientes WHERE correo = :correo");

            // Bind parameter
            $stmt->bindParam(':correo', $correo);

            // Execute the statement
            $stmt->execute();

            // Fetch the user record
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                // Verify the password
                if (password_verify($password, $user['password'])) {
                    // Password correct
                    return $user;
                } else {
                    return false; // Incorrect password
                }
            } else {
                return false; // User not found
            }
        } catch (PDOException $e) {
            // Handle database errors if any
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
?>
<!-- productos -->


<?php
class Productos {
    public static function mostrarProductos() {
        // Paso 1: Conexión a la base de datos
        $conexion = mysqli_connect('localhost', 'root', '', 'jj_bd');

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        // Paso 2: Consulta SQL para obtener los productos
        $sql = "SELECT * FROM productos";
        
        // Ejecutar la consulta
        $result = $conexion->query($sql);

        // Verificar si la consulta fue exitosa
        if (!$result) {
            die("Error en la consulta SQL: " . $conexion->error);
        }

        // Verificar si se encontraron resultados
        if ($result->num_rows > 0) {
            echo '<div class="container mt-5">';
            echo '<h1 class="text-center mb-4">Ofertas Disponibles</h1>';
            echo '<div class="row">';
            
            // Iterar sobre los productos y generar el HTML
            while ($producto = $result->fetch_assoc()) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card h-100">';
                echo '<a href="descripcion.html">';
                echo '<img src="http://localhost/Sitio/img/' . $producto['imagen_url'] . '" class="card-img-top" alt="' . $producto['nombre_producto'] . '">';
                echo '</a>';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $producto['nombre_producto'] . '</h5>';
                echo '<h5 class="card-title">$' . $producto['precio'] . '</h5>';
                // Si existe el campo 'descuento', mostrarlo
                if (isset($producto['descuento'])) {
                    echo '<h6 class="card-subtitle mb-2 text-muted">' . $producto['descuento'] . '</h6>';
                }
                // Si existe el campo 'descripcion', mostrarlo
                if (isset($producto['descripcion'])) {
                    echo '<p class="card-text">' . $producto['descripcion'] . '</p>';
                }
                echo '<a href="carrrito.html"><button class="btn btn-warning">Agregar Al Carrito</button></a>';
                echo '<a href="pago.html"><button type="button" class="btn btn-success">Comprar</button></a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            
            echo '</div>'; // Cierre de row
            echo '</div>'; // Cierre de container
        } else {
            echo "No se encontraron productos.";
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
    }
}
?>

<!-- agregar productos -->
<?php
class Agregar_producto {
    private $conn;

    public function __construct($host, $username, $password, $dbname) {
        $this->conn = new mysqli($host, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        }
    }

    public function agregar($id, $nombre, $precio, $impuesto, $stock, $categoria, $descripcion, $imagen) {
        $stmt = $this->conn->prepare("INSERT INTO productos (id, nombre, precio, impuesto, stock, categoria, descripcion, imagen) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdiisss", $id, $nombre, $precio, $impuesto, $stock, $categoria, $descripcion, $imagen);

        if ($stmt->execute()) {
            return "Nuevo producto agregado exitosamente.";
        } else {
            return "Error: " . $stmt->error;
        }
    }
}
?>

