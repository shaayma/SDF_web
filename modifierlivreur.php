<HTML xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modifier un livreur</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

</head>
<body>
<?PHP
include "../entites/livreur.php";
include "../core/livreurC.php";
if (isset($_GET['cin'])){
	$livreurC=new livreurC();
    $result=$livreurC->recupererlivreur($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
        $prenom=$row['prenom'];
       
		$secteur=$row['secteur'];
?>
<form method="POST">
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
       Modifier un livreur
    </div>
    <div class="panel-body">
        <form role="form">
                    <div class="form-group has-success">
                        <label class="control-label" for="success">Saisir le cin</label>
                        <input type="number" class="form-control" id="success" name="cin" value="<?PHP echo $cin ?>"/>
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">saisir le nom</label>
                        <input type="text" class="form-control" id="warning" name="nom" value="<?PHP echo $nom ?>"/>
                    </div>
                    <div class="form-group has-error">
                        <label class="control-label" for="error">saisir le prenom</label>
                        <input type="text" class="form-control" id="error" name="prenom" value="<?PHP echo $prenom ?>"/>
					</div>
					
                    <div class="form-group has-success">
                        <label class="control-label" for="success">Saisir le secteur</label>
                        <select class="form-control" name="secteur" type="text" >
                        <option><?PHP echo $secteur ?></option>
                            <option>Ariana</option>
                            <option>Béja</option>
                            <option>Ben Arous</option>
                            <option>Bizerte</option>
                            <option>Gabes</option>
                            <option>Gafsa</option>
                            <option>Jendouba</option>
                            <option>Kairouan</option>
                             <option>Kasserine</option>
                             <option>Kebili</option>
                                <option>La Manouba</option>
                                 <option>Le Kef</option>
                                 <option>Mahdia</option>
                                 <option>Médenine</option>
                             <option>Monastir</option>
                           <option>Nabeul</option>
                             <option>Sfax</option>
                              <option>Sidi Bouzid</option>
                               <option>Siliana</option>
                             <option>Sousse</option>
                            <option>Tataouine</option>
                               <option>Tozeur</option>
                             <option>Tunis</option>
                         <option>Zaghouan</option>
                        </select>
                    </div>
                </form>
        <hr />
<input type="submit" name="modifier" value="modifier">

<input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>">


</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livreur=new livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['secteur']);
	$livreurC->modifierlivreur($livreur,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherlivreur.php');
}
?>
</body>
</HTMl>