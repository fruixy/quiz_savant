<?php require '../helper/header.php'; ?>
<link rel="stylesheet" type="text/css" href="./assets/style_classement.css" />
<body>
    <div id="tete">
        <a id="logo"><img src="assets/images/logo.png" height="100%"></a>
    
        <div id="div_B">
            <button id="B1">classement par joueur</button>
            <button id="B2">classement par groupe</button>
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
                    <table id="tablein" cellspacing="0" cellpadding="1" border="0" width="300" >
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