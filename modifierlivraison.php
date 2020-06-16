<HTML xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modifier un livraison</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

</head>
<body>
<?PHP
include "../entites/livraison.php";
include "../core/livraisonC.php";
if (isset($_GET['idclient'])){
	$livraisonC=new livraisonC();
    $result=$livraisonC->recupererlivraison($_GET['idclient']);
	foreach($result as $row){
		$idclient=$row['idclient'];
		$nom=$row['nom'];
        $adresse=$row['adresse'];
        $numtel=$row['numtel'];
		$numcommande=$row['numcommande'];
?>
<form method="POST">
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
       Modifier une livraison
    </div>
    <div class="panel-body">
        <form role="form">
                    <div class="form-group has-success">
                        <label class="control-label" for="success">Saisir id client</label>
                        <input type="number" class="form-control" id="success" name="idclient" value="<?PHP echo $idclient ?>"/>
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">saisir le nom</label>
                        <input type="text" class="form-control" id="warning" name="nom" value="<?PHP echo $nom ?>"/>
                    </div>
                    <div class="form-group has-error">
                        <label class="control-label" for="error">saisir l'adresse</label>
                        <input type="text" class="form-control" id="error" name="adresse" value="<?PHP echo $adresse ?>"/>
					</div>
					
                    <div class="form-group has-success">
                        <label class="control-label" for="success">Saisir le numero du telephone</label>
                        <input type="number" class="form-control" id="success" name="numtel" value="<?PHP echo $numtel ?>"/>
                    </div>
					<div class="form-group has-success">
                        <label class="control-label" for="success">Saisir le numero du commande</label>
                        <input type="number" class="form-control" id="success" name="numcommande" value="<?PHP echo $numcommande ?>"/>
                    </div>
                </form>

<input type="submit" name="modifier" value="modifier">

<input type="hidden" name="idclient_ini" value="<?PHP echo $_GET['idclient'];?>">


</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livraison=new livraison($_POST['idclient'],$_POST['nom'],$_POST['adresse'],$_POST['numtel'],$_POST['numcommande']);
	$livraisonC->modifierlivraison($livraison,$_POST['idclient_ini']);
	echo $_POST['idclient_ini'];
	header('Location: afficherlivraison.php');
}
?>
</body>
</HTMl>