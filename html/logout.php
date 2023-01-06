<?php
  // Détruire la session.
  if(session_destroy())
  {
    // Redirection vers la page de connexion
    session_destroy();
    header("Location: index.php");
  }
?>