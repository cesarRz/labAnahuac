<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Info</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.24.1" />
</head>
<body>
	
<?PHP                                                                                                                                               
$user ="a00258511";                                                              
$password="p00258511";                                                           
$host="localhost";                                                              
$port="5432";                                                                   
$dbname="a00258511";                                                                
$strconn="host=$host port=$port dbname=$dbname user=$user password=$password";  
$conn=pg_Connect($strconn);  
$fnum=$_POST['fnum'];                                                                                                                              
if(!$conn)                                                                      
    { echo "no se conecto a la base\n";                                           
	    exit;                                                                       
	}
	else{
		echo 'Se conecto a la base<br>';
		
		$request="SELECT * FROM fish WHERE fnum = $fnum";
		echo "$request";
		$retval = mysql_query( $request, $conn );
		echo "$retval";
	}                                                                                                                            
?>

	
</body>

</html>
