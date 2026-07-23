<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
    <tr>
        <td><font face="verdana"><b>Id Cliente</b></font></td>
        <td><font face="verdana"><b>Nombre Cliente</b></font></td>
        <td><font face="verdana"><b>Apellido Cliente</b></font></td>
    </tr>
    <?php
    $connex = mysqli_connect("localhost", "root", "","taller_1")
    or die ("error al conectar a la base de datos.");

    $query = "SELECT Id_Cliente, Nombre, Apellido FROM prueba";
    $result = mysqli_query($connex, $query);
    $numero = 0;
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr><td width=\"25%\"><font face=\"verdana\">" . $row['Id_Cliente'] . "</font></td></tr>";
        echo "<tr><td width=\"25%\"><font face=\"verdana\">" . $row['Nombre'] . "</font></td></tr>";
        echo "<tr><td width=\"25%\"><font face=\"verdana\">" . $row['Apellido'] . "</font></td></tr>";
        $numero++;
    }
    echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Total de clientes: " . $numero . "</b></font></td></tr>";
    mysqli_close($connex);
    ?>
</table>