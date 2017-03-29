<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP & HTML</title>
</head>
<body>
  <h1>Liste des élèves</h1>
  <!-- Instructions : Afficher la liste des éléves qui sont présent dans le tableau $students -->
  <?php
        //students
  $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
  ?>
  <ul>
   <?php 
   foreach ($students as $value){
    echo $value." "."<br>";
  }
  ?>
</ul>
<hr>
<h1>Date du jour</h1>
<form>

 <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
 <label for="day">Day</label>
 <select  name="day"><?php //list of day
  # code...
   for ($day = 1; $day <= 31; $day++){
    echo "<option value=>". $day. "</option>";
  }
  ?></select>

  <label for="month">Month</label>
  <select  name="month"><?php
  //list of month 
   $month = array ('Janvier'=>1, 'Février'=>2, 'Mars'=>3, 'Avril'=>4,'Mai'=>5, 'Juin'=>6, 'Juillet'=>7, 'Aout'=>8, 
     'Septembre'=>9, 'Octobre'=>10,'Novembre'=>11, 'Decembre'=>12);
   foreach ($month as $key => $mois){
    echo "<option value='" .$key."'>". $mois. "</option>";
  }
  ?></select>

  <label for="year">Year</label>
  <select  name="year"><?php 
 //list of year 
   for ($year = 2000; $year <= 2020; $year++){
    echo "<option value=>". $year. "</option>";
  }
  ?></select>

</form>
<hr>
<!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
<?php  
if($_GET["sexe"]=="fille"){
  echo "<p>Je suis une fille</p>";
}
else if($_GET["sexe"]=="garçon"){
  echo "<p>Je suis un garçon</p>";
}
else {
  echo "<p>Je suis indéfini</p>";
}

?>
<!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
<!-- Instruction : Afficher ce bloc dans les autres cas -->

</body>
</html>
