<?php

/*
On utilise session_id() pour récupérer l'id de session s'il existe.
 Si l'id de session n'existe  pas, session_id() rnevoie une chaine
 de caractères 
*/ 

$id_session = session_id();

    if($id_session){
        echo 'ID de session (récupéré via session_id()) : <br>'
        .$id_session. '<br>';
    }
?>