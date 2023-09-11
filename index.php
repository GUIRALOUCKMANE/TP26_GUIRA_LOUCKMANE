<?php
@$nom=$_POST["nom"]; 
@$prenom=$_POST["prenom"];
@$age=$_POST["age"];
@$submit=$_POST["submit"];
$erreur="";
if(isset($submit))
if(empty($nom)) $erreur= "<li style='color:white' >Nom laissé vide!</li>";
if(isset($submit))
if(empty($prenom))$erreur.="<li style='color:white'>prenom laissé vide!</li>";
if(isset($submit))
if(!is_numeric($age) or $age<12)$erreur.="<li style='color:white'>age invalide!</li>";


else if (isset($submit)){
    echo "$nom";
    echo "$prenom";
    echo "$age";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
    
</head>
<body>
<header>INCRIPTION</header>
<section>
<form nom="fo" method="post" action="">
<div class="label">NOM</div>
<div class="input">
<input type="text" name="nom" value="<?php echo $nom?>" />
</div>
<div class="label">PRENOM</div>
<div class="input">
<input type="text" name="prenom" value="<?php echo $prenom?>"/>

</div>
<div class="label">AGE</div>
<div class="input">
<input type="number"min="12" name="age"value="<?php echo $age?>" />
</div>
<div class="input">
<input type="submit" name="submit" value="M'incrire" />

</div>



</form>

<?php if(!empty($erreur))  {  ?>                 
<div id="erreur"><?php echo $erreur ?></div>
<?php } ?>

</section>
    
</body>
</html>