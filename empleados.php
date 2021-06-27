<html>

<head>
    <title>Arreglos asociativos</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    
</head>

<body>
    <?php
    if (isset($_POST['btn']) && $_POST['btn'] == 'Mostrar') {

        $empleados = [
            "empleado1" => [
                $_POST['nombre1'],
                $_POST['apellido1'],
                $_POST['cedula1'],
                $_POST['sueldo1'],
                $_POST['departamento1'],
                $_POST['lugarTrabajo1']
            ],
            "empleado2" => [
                $_POST['nombre2'],
                $_POST['apellido2'],
                $_POST['cedula2'],
                $_POST['sueldo2'],
                $_POST['departamento2'],
                $_POST['lugarTrabajo2']
            ],
            "empleado3" => [
                $_POST['nombre3'],
                $_POST['apellido3'],
                $_POST['cedula3'],
                $_POST['sueldo3'],
                $_POST['departamento3'],
                $_POST['lugarTrabajo3']
            ]
        ];
        print
            "
            <table class='table'>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
                    <th>Sueldo</th>
                    <th>Departamento</th>
                    <th>Lugar de Trabajo</th>
                </tr>";

        print "<tr>";

        foreach ($empleados as $key => $value) {

            for ($i = 0; $i < count($value); $i++) {
                print "
                            <td>{$value[$i]}</td>
                    ";
            }
            print "</tr>";
        }

        print
            "</table>";
    }
    print "<br/><br/>";
    print "<a href='index.html'>Regresar</a>";
    ?>
</body>

</html>