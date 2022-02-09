<html>                                                                          
	<head><title>altas_peces</title></head>                                              
	<body>                                                                          
	<form method="post" action="alt_peces_2.php">                                     
	<?PHP                                                                                                                                               
$user ="a00258511";                                                              
$password="p00258511";                                                           
$host="localhost";                                                              
$port="5432";                                                                   
$dbname="a00258511";                                                                
$strconn="host=$host port=$port dbname=$dbname user=$user password=$password";  
$conn=pg_Connect($strconn);                                                                                                                                
if(!$conn)                                                                      
    { echo "no se conecto a la base\n";                                           
	    exit;                                                                       
	  }         
else{
	echo "si se conecto a la base";
}                                                                                                                           
?>
	

