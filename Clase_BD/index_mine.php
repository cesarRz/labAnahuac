<html>
<head>
<title>Actividad Forms</title>
</head>
<style >
        form{
        width: 50%;
        display: block;
        margin: auto;
        margin-top: 10%;
        padding: 5%;
        }

</style>
<body>

        <form action='mine_info.php' method='POST'>
                <label>Nombre:</label>
                        <input name='Nombre' type='text'>
 
                <label style='margin-left: 40px'>Apellido:</label>
                        <input name='last' type='text'>
                        
                        <br>
                        <br>

                <label>Mail:</label>
                        <input name='mail' type='email'>


                <label style='margin-left: 40px'>Fecha de Nacimiento:</label>
                        <input name='f_nacimiento' type='date'>

                        <br>
                        <br>

                <Label>Campus:</label>
                <select name="campus">
                        <option disabled value="0">Seleccionar uno</option>
                        <option value="UAMN">UNIVERSIDAD ANAHUAC MEXICO NORTE</option>
                        <option value="UAMS">UNIVERSIDAD ANAHUAC MEXICO SUR</option>
                        <option value="UAX">UNIVERSIDAD ANAHUAC XALAPA</option>
                        <option value="MAYAB">UNIVERSIDAD ANAHUAC MAYAB</option>
                </select>

                <div style='margin-left: 70px; display: inline-block;'>
                        <label>Carrera:</label><br>

                                <input type="radio" id="sistemas" name='carrera' value="Sistemas" checked>
                                <label for="sistemas">Ingenieria en Sistemas</label><br>

                                <input type="radio"  id="quimica" name='carrera' value="Quimica">
                                <label for="quimica">Ingenieria Quimica</label><br>

                                <input type="radio" id="comunicacion" name='carrera' value="Comunicacion">
                                <label for="comunicacion">Comunicacion</label><br>

                                <input type="radio" id="fin_con" name='carrera' value="Finanzas">
                                <label for="fin_cont">Finanzas y Contabilidad</label>

                </div>
                <br> 
		<br>
		<label>Opinion:</label>
		<textarea name='opinion'></textarea>
                <br>

                <input type='submit' value='Submit'>
                
        </form>
        
</body>
</html>


