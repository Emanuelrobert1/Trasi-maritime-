<?php
// TRASI AUTO - Admin simple
$fichier = 'produits.json';
$produits = json_decode(file_get_contents($fichier), true);

if($_POST){
  $produits[] = [
    "id" => count($produits)+1,
    "nom" => $_POST['nom'],
    "prix" => (int)$_POST['prix'],
    "stock" => (int)$_POST['stock'],
    "image" => $_POST['image']
  ];
  file_put_contents($fichier, json_encode($produits, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
  echo "<p style='color:green'>Produit ajouté !</p>";
}
?>
<h2>Admin TRASI - Ajouter produit</h2>
<form method="post">
Nom: <input name="nom" required><br><br>
Prix: <input name="prix" type="number" required><br><br>
Stock: <input name="stock" type="number" required><br><br>
Image: <input name="image" value="images/p1.jpg"><br><br>
<button type="submit">Ajouter</button>
</form>
<h3>Produits actuels: <?=count($produits)?></h3>
