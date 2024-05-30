<?php
//Sirve Para Imprimir Lo que se ha realizado en una funcion eetc
//echo "Hola Mundo";

//Creacion De una Función
function consulta(){
    //Inicializa la Variable
    $salida="";
   
    //Calcula el Area de un triangulo
    $salida=10*2/2;


    //Retona la Operacion
    return $salida;
}

//Creacion De una Función
function sonreir(){
    //Inicializa la Variable
    $salida=0;
    //Calcula el Area de un Cadrado
    $salida=2*2*2*2;

     //Retona la Operacion
    return $salida;
}

//Creacion De una Función
function correr()
{
    //Inicializa la Variable
    $salida = 0;
    
    //Hay una conexion con la base de datos 
    $conexion=mysqli_connect("localhost","root","root", "20231019a");
   
    //permite descargar datos de una base de datos para luego poder manipularlos
     $sql="select 2+1";
     // Concatenar Se utila para qqque el codigo sea mas facil de leer
     $sql.= " as suma";

     //Ejecuta Una Consulta
     $r=$conexion->query($sql);

     //Recorre el recorodset
     while($fila=mysqli_fetch_assoc($r))
     {
       
        //Concatenar incrementa o acomula
       $salida+=$fila['suma'];

     }
    

    //Retona la Operacion
    return $salida;
}
//Creacion De una Función
function calculo_v2(){
    //Inicializa la Variable
    $salida = 0;

    //Hay una conexion con la base de datos 
    $conexion = mysqli_connect("localhost", "root", "root", "20231019a");

    //permite descargar datos de una base de datos para luego poder manipularlos
    $sql="select 10 as n1, ";
    // Concatenar Se utila para qqque el codigo sea mas facil de leer
    $sql.= " 20 as n2 ";

    //Ejecuta Una Consulta
    $r = $conexion->query($sql);

    //Recorre el recorodset
    while ($row=mysqli_fetch_assoc($r)) {

        //Concatenar incrementa o acomula
        $n1 = $row['n1'];
        $n2 = $row['n2'];
        $suma = $n1 + $n2;
        $salida+= $suma;
        
        
    }
    //Retona la Operacion
    return $salida;
}
//Creacion De una Función
function calculo(){
   
        $conexion = mysqli_connect('localhost', 'root', 'root', '20231019a'); // hay una conexion que se ejecutando, y es una caja negra   
        $salida = "0"; // inicializacion de la variable 
        //permite descargar datos de una base de datos para luego poder manipularlos
        $sql = "SELECT 12 as edad";

        // Ejecuta una consulta
        $result = mysqli_query($conexion, $sql);

        // Recorre el registro
        while ($row = mysqli_fetch_assoc($result)) {
            $edad = $row['edad'];
            
            //Sirve para ver si si cumple con el requerimiento verdadero o falso
            if ($edad >= 18) {
                $salida = "Mayor de edad";
            } else {
                $salida = "Menor de edad";
            }
        }
         //Retona la Operacion
        return $salida;
    }




//Creacion De una Función
function conteo(){
      // Paso 1: Conexión a la base de datos
      $conexion = mysqli_connect('localhost', 'root', 'root', '20231019a');

      if (!$conexion) {
          return -1; // Devolvemos un valor especial para indicar un error
      }
  
      // Paso 2: Consulta SQL para contar los registros en la tabla "Personas"
      $sql = "SELECT COUNT(*) as total_us FROM Usuario";
      
    // Ejecuta una consulta
      $resultado = mysqli_query($conexion, $sql);
  
      if ($resultado) {
          // Paso 3: Obtener el resultado de la consulta
          $fila = mysqli_fetch_assoc($resultado);
          $totalRegistros = $fila['total_us'];
  
          // Paso 4: Cerrar la conexión a la base de datos
          mysqli_close($conexion);
  
          // Paso 5: Liberar los recursos
          mysqli_free_result($resultado);
  
          return $totalRegistros;   //Retona la Operacion
      } else {
          return -1; // Devolvemos un valor especial para indicar un error
      }
  }
    
 

   //******************************OBTEENCION DE DATOS DEL USUSARIO****************************//


   //Creacion De una Función
   function registro($documento, $nombre,$correo,$password)
{
    //Paso 1: Conexión a la base de datos
    $conexion = mysqli_connect('localhost', 'root', '', 'jj_bd');
    // Paso 2: Consulta SQL para contar los registros en la tabla "Personas"
    $sql = "INSERT INTO clientes (documento, nombre , correo , password) VALUES ('$documento', '$nombre', '$correo', '$password')";
     // Ejecuta una consulta
    $resultado = $conexion->query($sql);
// Paso 3: Obtener el resultado de la consulta
    if ($resultado) {
        return "Registro exitoso";
    } else {
        return "Error en el registro: " . $conexion->error;
    }
     // Paso 4: Cerrar la conexión a la base de datos
    $conexion->close();

   
}
 //******************************ELIMINACION DE DATOS DEL USUSARIO****************************//

//Creacion De una Función
function eliminar($Documento)
{
    //Paso 1: Conexión a la base de datos
    $conexion = mysqli_connect('localhost', 'root', 'root', '20231019a');
    // Paso 2: Consulta SQL para contar los registros en la tabla "Personas"
    $sql = "DELETE FROM Usuario Where Documento=$Documento";
    // Ejecuta una consulta
    $resultado = $conexion->query($sql);
    // Paso 3: Obtener el resultado de la consulta
    if ($resultado) {
        return "Elimiación  exitoso";
    } else {
        return "Error en al Eliminar: " . $conexion->error;
    }
    // Paso 4: Cerrar la conexión a la base de datos
    $conexion->close();
}


//******************************ACTUALIZAR DE DATOS DEL USUSARIO****************************//

// Creación de una función para actualizar datos
function actualizar($Documento, $Nombre, $Sitio)
{
    // Paso 1: Conexión a la base de datos
    $conexion = mysqli_connect('localhost', 'root', 'root', '20231019a');

    // Verificar si la conexión se realizó correctamente
    if (!$conexion) {
        return "Error en la conexión a la base de datos: " . mysqli_connect_error();
    }

    // Paso 2: Consulta SQL para actualizar los datos en la tabla "Usuario"
    $sql = "UPDATE Usuario SET Nombre = '$Nombre', Sitio = '$Sitio' WHERE Documento = $Documento";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);

    // Paso 3: Verificar si la consulta se ejecutó con éxito
    if ($resultado) {
        // Paso 4: Cerrar la conexión a la base de datos
        mysqli_close($conexion);
        return "Actualización exitosa";
    } else {
        return "Error al actualizar: " . mysqli_error($conexion);
    }
}


//******************************MOSTRAR DE DATOS DEL USUSARIO****************************//

function ObtenerSitioPorDNI($Documento)
{
    // Paso 1: Establecer la conexión a la base de datos
    $conexion = mysqli_connect('localhost', 'root', 'root', '20231019A');

    if (!$conexion) {
        return "Error en la conexión a la base de datos";
    }

    // Paso 2: Crear la consulta SQL para obtener el campo 'sitio' por DNI
    $sql = "SELECT sitio FROM Usuario WHERE Documento = '$Documento'";

    // Paso 3: Ejecutar la consulta SQL
    $result = mysqli_query($conexion, $sql);

    // Paso 4: Comprobar si la consulta se ejecutó con éxito
    if ($result) {
        // Paso 5: Comprobar si se encontró un registro con el DNI proporcionado
        if ($row = mysqli_fetch_assoc($result)) {
            // Paso 6: Obtener el valor del campo 'sitio'
            $sitio = $row['sitio'];
            return $sitio;
        } else {
            return "No se encontró un registro con el DNI proporcionado";
        }
    } else {
        return "Error en la consulta: " . mysqli_error($conexion);
    }

    // Paso 7: Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}


//******************************IMPRIMIR ENLACE DE DEL USUSARIO****************************//

//Creacion De una Función
function enlace()
{
    $conexion = mysqli_connect('localhost', 'root', 'root', '20231019a');
    $salida = "";

    // Consulta SQL para obtener una URL
    $sql = "SELECT 'despliegue.php' as url";

    // Ejecuta una consulta
    $r = mysqli_query($conexion, $sql);

    // Recorre el registro
    while ($fila = mysqli_fetch_assoc($r)) {
        $url = $fila['url'];

        $salida .= "<a href='https://www.youtube.com/watch?v=5Uo4D1mdBp8" . $url . "'>";
        $salida .= "GO TO MY SITE";
        $salida .= "</a>";
    }

    // Retorna la operación
    return $salida;
}