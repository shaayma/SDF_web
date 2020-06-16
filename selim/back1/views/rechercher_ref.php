
<form method="POST" action="rechercher_ref.php">
<link rel="stylsheet" href="table.css">	
<table>
<caption>Rechercher une Promotion</caption>
<tr>
<td>idprom</td>
<td><input type="texte" name="ref"></td>
</tr>
<td><input type="submit" name="rechercher" value="rechercher" ></td>

</table>
</form>

<table border="3">
<tr>
<td>ref</td>
<td>id_client</td>
<td>point</td>

</tr>
                    <?PHP
                    include "C:/wamp64/www/projetweb/template/back/Core/fideliteF.php";
                    if (isset($_POST['ref']))
                    	{ $fideliteF=new fideliteF();
                    
                    $listefidelite=$fideliteF->rechercherListefidelite($_POST['ref']);
                    echo "hello";}
                    else {
                    	$fideliteF=new fideliteF();
                        $listefidelite=$fideliteF->afficherfidelite();
                    }
                    ?>
  <?PHP
foreach($listefidelite as $row){
	?>
	<tr>
	<td><?PHP echo $row['ref']; ?></td>
	<td><?PHP echo $row['id_client']; ?></td>
	<td><?PHP echo $row['point']; ?></td>
	
	
	</form>
	
	
	</tr>
	<?PHP
}
?>
                </table>
            


                                