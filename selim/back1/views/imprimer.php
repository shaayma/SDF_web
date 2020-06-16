<?php
include "../core/produitC.php";
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Touts les produits </h1>
		<table style="width:100%;border: 2px dashed " >
		<tr>

														  <th scope="col">prix</th>
													      <th scope="col">nom produit</th>
													      <th scope="col">quantité</th>
													    
													  
													  
													      
													    
													
													</tr>
													
		<?php
	$Produit1C=new produitC();
$listeProduits=$Produit1C->recuperercommandes();
		foreach($listeProduits as $row) {
			?>


		  <tr>
												      
												      <td> <?php echo $row["prix"] ; ?></td> 
                                                     <td> <?php echo $row["designation"] ; ?></td> 
													  <td> <?php echo $row["quantite"] ; ?></td> 


 												      
												   
												              
												    </tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>