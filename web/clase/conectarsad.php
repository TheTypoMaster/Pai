<?php


Class trabajo
 
 {   public static function con()
	{
		
		$con = pg_connect(" 	ec2-54-225-102-235.compute-1.amazonaws.com","db0iq2atr12u3q" ,"nxlaeioyrwqiqr","Mv3CDNF4Eu3pHQdToGFZJl3Q6S");
	   return $con;
	   
		
	}
  	
 
 	
 	public function seleccion($sql)
 	{
 			
 	
 	$result = pg_query(con(),$sql) or die('La consulta fallo: ' . pg_last_error());
 	return $result;
 	
 	}
    public function imprimir($resul)
    {
       	echo "<table>\n";
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
   }
     echo "</table>\n";

   pg_free_result($result);
    	 	
    	
    	
    	}




$trabajo= new trabajo();
$trabajo->imprimir(trabajo->seleccion("select * from persona ")))


?>