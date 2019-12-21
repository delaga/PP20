<!-- Početak izbornik -->
<div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
        <div class="title-bar-title"><?php echo $nazivAPP; ?></div>
      </div>

      <div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top spin-out">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text show-for-large" > <?= $nazivAPP; ?></li>
            <li> <a href="index.php">Početna</A></li>
            <li>
              <a href="#">PHP</a>
              <ul class="menu vertical">
                <li><a href="varijable.php">Varijable</a></li>
                <li><a href="if.php">If</a></li>
                <li><a href="switch.php">Switch</a></li>
              </ul>
            </li>
            <li><a href="zadatak.php">Zadatak</a></li>
            
          </ul>
        </div>
      </div>
      <!-- Kraj zbornik -->