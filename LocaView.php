<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Wazaa - Location</title>
</head>
<body>

<a href="http://localhost/ci/index.php/RechercheController/BarreRecherche">Accueil</a><br>
<a href="http://localhost/ci/index.php/AnnoncesController/Loca">Locations</a><br>
<a href="http://localhost/ci/index.php/AnnoncesController/Ventes">Ventes</a><br>
<a href="http://localhost/ci/index.php/EmployesController/PageNous">Nous</a><br>
<a href="http://localhost/ci/index.php/EmployesController/ListeEmployes">ListeEmployes(admin)</a><br><br>

<h1>Liste des locations</h1>

<div class="row">
<div class="col-12">    
<?php 
foreach ($locations as $row) 
{
echo "<p>".$row->an_id; 
echo $row->an_prix;
echo $row->an_ref;
echo $row->an_offre;
echo $row->an_titre." </p>";  
echo "<a href=http://localhost/ci/index.php/AnnoncesController/Details/$row->an_id>Détails</a>";

}
?>
</div>
</div>


</body>
</html>