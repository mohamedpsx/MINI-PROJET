<?php
    $cnx = @mysql_connect( "localhost", "root", "" ) ;
    $db = mysql_select_db( "realestatedb",$cnx  ) ;

   
      $titre    = $_POST["titre"] ;
      $text    = $_POST["text"] ;
      $dateCreation    = $_POST["dateCreation"] ;
      $gouvernorat    = $_POST["gouvernorat"] ;
      $rubrique    = $_POST["rubrique"] ;
      $nature    = $_POST["nature"] ;
      $type    = $_POST["type"] ;
      $prix    = $_POST["prix"] ;
      $user_id    = $_POST["user_id"] ;

     $sql = "INSERT INTO post (`id`, `titre`, `text`, `dateCreation`, `gouvernorat`, `rubrique`, `nature`, `type`, `prix`) VALUES ('','$titre','$text','$dateCreation','$gouvernorat','$rubrique','$nature','$type','$prix','$user_id')" ;
     $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
    if($requete)
  {
    echo("La modification terminé") ;
    header('Location:ListeAnnonce.php');
  }
  else
  {
    echo("La modification à échouée") ;
     }
    
?>