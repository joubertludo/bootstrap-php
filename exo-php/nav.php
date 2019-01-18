<div class="container">
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link  <?php if($CURRENT_PAGE=="index"){echo "active";} ?>" href="index.php">Accueil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if($CURRENT_PAGE=="about"){echo "active";} ?>" href="about.php">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if($CURRENT_PAGE=="contact"){echo "active";} ?>" href="contact.php">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if($CURRENT_PAGE=="users"){echo "active";} ?>" href="users.php">Users</a>
  </li>
   <li class="nav-item">
    <a class="nav-link <?php if($CURRENT_PAGE=="boucle"){echo "active";} ?>" href="boucle.php">Boucle</a>
  </li>
</ul>
</div>