<!DOCTYPE html>
<!--
Consumimos un servicio creado en Java Rest http://localhost:8080/EjemploGF/app/ServicioDatos/2
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Haciendo una petición GET.
//        $ch = curl_init("http://localhost:8090/personas");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        //establecemos el verbo http que queremos utilizar para la petición
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//        $response = curl_exec($ch);
        //Haciendo una petición GET con parámetro en la URL.
//        $ch = curl_init("http://localhost:8090/personas/9567");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        //establecemos el verbo http que queremos utilizar para la petición
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//        $response = curl_exec($ch);
        //----------- Para los GET ---------
        // Se cierra el recurso CURL y se liberan los recursos del sistema
//        curl_close($ch);
//        if (!$response) {
//            return false;
//        } else {
//            echo '<br>';
//            var_dump($response);
//            $data = json_decode($response, true);
//            if (empty($data)) {
//                echo 'No se han obtenido registros';
//            } else {
//                foreach ($data as $cod => $emp) {
//                    echo 'Nombre: ' . $emp['nombre'] . '<br>Ciudad: ' . $emp['ciudad'] . '<br>--------<br>';
//                }
//            }
//        }
        //Haciendo una petición POST: para insertar un artículo.        
        $data = ['nombre' => 'Alguien',
            'ciudad' => 'Algun lugar'];
        $datos = json_encode($data);
        var_dump($datos);
        $ch = curl_init("http://localhost:8090/personas");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datos);
        //set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        $response = curl_exec($ch);
        curl_close($ch);
        if ($respuesta['errors'][0]['code'] == 404) {
            echo $respuesta['errors'][0]['message'];
        } else {
            echo $response;
        }
        ?>
    </body>
</html>
