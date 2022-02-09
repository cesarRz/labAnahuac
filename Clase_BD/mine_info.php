<html>
<head>
<title>Actividad Forms</title>
</head>
<body>
         <?   

        $nombre=$_POST['Nombre'];
        $last = $_POST['last'];
        $mail= $_POST['mail'];
        $f_nacimiento = $_POST['f_nacimiento'];
        $campus = $_POST['campus'];
        $carrera = $_POST['carrera'];
	$opinion = $_POST['opinion'];

        echo "Nombre: $nombre";
        echo"<br>";
        echo "Apellido: $last";
        echo"<br>";
        echo "e-mail: $mail";
        echo"<br>";
        echo "Fecha de Nacimiento: $f_nacimiento";
        echo"<br>";
        echo "Campus: $campus";
        echo"<br>";
        echo "Carrera: $carrera";
        echo"<br>";
	echo "Opinion: $opinion";	


        ?>


        
</body>
</html>
