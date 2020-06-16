<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Delivery</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
        <?PHP
        include "../core/livraisonC.php";
        $livraison1C=new livraisonC();
        $listelivraisons=$livraison1C->afficherlivraisons();
        
        //var_dump($listelivraisons->fetchAll());
        ?>
		<div class="col-md-6">
    <div class="panel panel-default">
		 <div class="panel-heading">
       Les evenement en cours
    </div>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>idclient</th>
                <th>Nom</th>
                <th>adresse</th>
                <th>numtel</th>
				<th>numcommande</th>
            </tr>
        </thead>
        <?PHP
foreach($listelivraisons as $row){
	?>
        <tbody>
           
            <tr>
                <td><?PHP echo $row['idclient']; ?></td>
                <td><?PHP echo $row['nom']; ?></td>
                <td><?PHP echo $row['adresse']; ?></td>
                <td><?PHP echo $row['numtel']; ?></td>
				<td><?PHP echo $row['numcommande']; ?></td>
                <td><form method="POST" action="supprimerlivraison.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idclient']; ?>" name="idclient">
	</form>
	</td>
	<td><a href="modifierlivraison.php?idclient=<?PHP echo $row['idclient']; ?>">
	Modifier</a></td>
            </tr>
           
        </tbody>
        <?PHP
    }
    ?>
    </table>
</div>
</div>
</body>
</html>