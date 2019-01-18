<footer>
			
  <div class="card-footer text-muted text-center "><?php print date('d/m/y')?>
 
    -L'Armée des 12 devs-  
   <div class="container">
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link  <?php if($CURRENT_PAGE=="index"){ echo"active";}?>" href="accueil">Accueil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if($CURRENT_PAGE=="about"){ echo"active";}?>" href="about">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if($CURRENT_PAGE=="contact"){ echo"active";}?>" href="contact">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if($CURRENT_PAGE=="users"){ echo"active";}?>" href="users">Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if($CURRENT_PAGE=="boucle"){echo "active";} ?>" href="boucle.php">Boucle</a>
  </li>
</ul>
</div>
</div>
</footer>