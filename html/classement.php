<?php require '../helper/header.php'; ?>
<link rel="stylesheet" type="text/css" href="./assets/style_classement.css" />
<body>
    <div id="tete">
        <a id="logo" ><img src="assets/images/logo.png" height="100%"></a>
    
        <div id="div_B">
            <a href='/classement.php' > <button id="b1" class="text-button">Classement Joueurs </button></a>
            <a href='/classement_groupe.php' > <button id="b2" class="text-button">Classement Teams </button></a>

        </div>   
    </div>
    <div id="space">
    </div>
        
    <div id="tableau">
        <table id="tablep" >
            <tr>
              <td>
                 <table id="tableaut">
                   <tr>
                      <th>Prénom</th>
                      <th>Nom</th>
                      <th>Groupe</th>
                      <th>Score</th>
                   </tr>
                 </table>
              </td>
            </tr>
            <tr>
              <td>
                 <div id="tableauin">
                    <table id="tablein" cellspacing="0" cellpadding="1" width="300" >
                        <?php
                            /*Affiche le classement des joueurs dans l ordre*/
                            $query = $pdo->query("SELECT * FROM Joueurs ORDER BY Score DESC")->fetchAll();
                            foreach ($query as $joueur): ?>
                                <tr>
                                    <td><?= $joueur["Prenom"]?></td> 
                                    <td><?= $joueur["Nom"]?></td>
                                    <td><?= $joueur["Classe"]?></td>  
                                    <td><?= $joueur["Score"]?></td> 
                                </tr>
                            <?php endforeach ; ?>
                    </table>  
                  </div>
              </td>
            </tr>
        </table>
    </div>
</body>