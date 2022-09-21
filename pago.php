<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Pago de empleado</title>
</head>

<body>
    <header>
        <h1 id="centrado">PAGO DE EMPLEADO</h1>

    </header>
    <section>
        <table align="center">
            <form action="pago.php" method="post">

                <tr>
                    <td width="200">Empleado</td>
                    <td><input type="text" name="txtEmpleado" id="" size="40"></td>
                </tr>
                <tr>
                    <td width="200">Horas Trabajadas</td>
                    <td><input type="text" name="txtHoras" id="" ></td>
                </tr>
                <tr>
                    <td width="200">Tarifa por hora</td>
                    <td><input type="text" name="txtTarifa" id="" ></td>
                </tr>
                <tr>
                    <td width="200"></td>
                    <td><input type="submit" value="Procesar"></td>
                    <td><input type="reset" value="Limpiar"></td>
                </tr>

                <!-- Codigo PHP -->
                <?php
                error_reporting(0);
                $empleado = $_POST['txtEmpleado'];
                $horas = $_POST['txtHoras'];
                $tarifa = $_POST['txtTarifa'];

                //Realizar los calculos
                $salarioBruto = $horas * $tarifa;
                $descuentoSeguroSalud = $salarioBruto * 0.12;
                $descuentoAfp = $salarioBruto * 0.10;
                $salarioNeto = $salarioBruto - $descuentoSeguroSalud - $descuentoAfp;


                ?>

                <tr>
                    <td>Empleado</td>
                    <td><?php echo ucwords($empleado) ; ?></td>
                </tr>
                <tr>
                    <td>Horas trabajadas</td>
                    <td><?php echo $horas; ?></td>
                </tr>
                <tr>
                    <td>Tarifa por hora</td>
                    <td><?php echo "$".number_format($tarifa, 2); ?></td>
                </tr>
                <tr>
                    <td>Sueldo Bruto</td>
                    <td><?php echo "$".number_format($salarioBruto, 2); ?></td>
                </tr>
                <tr>
                    <td>Descuento Salud</td>
                    <td><?php echo "$".number_format($descuentoSeguroSalud, 2); ?></td>
                </tr>
                <tr>
                    <td>Descuento Afp</td>
                    <td><?php echo "$".number_format($descuentoAfp, 2); ?></td>
                </tr>
                <tr>
                    <td>Salario Neto</td>
                    <td><?php echo "$".number_format($salarioNeto, 2); ?></td>
                </tr>



            </form>

        </table>

    </section>

    <footer>
    <h6 id="centrado">Todos los derechos reservados - Ing Carlos Morales</h6>

    </footer>


</body>

</html>