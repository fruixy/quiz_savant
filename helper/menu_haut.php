<nav class="navbar">
	<div>
		<ul>
			<li><a href="./index.php">map</a></li>
			<li><a href="./search.php">statistique avancé</a></li>
            <li>
                <?php if(isset($_SESSION['logon']) && $_SESSION['logon'] === true): ?> 
                    <a href="./logout.php">déconnexion</a>
                <?php else: ?>
                    <a href="./login.php">connexion</a>
                <?php endif ?>
            </li>
		</ul>
	</div>
</nav>