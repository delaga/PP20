<!-- Početak izbornik -->
<div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
<button class="menu-icon" type="button" data-toggle></button>
<div class="title-bar-title"><?=$nazivAPP?></div>
</div>

<div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top spin-out">
<div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
    <li class="menu-text show-for-large"><?php echo $nazivAPP ?></li>
    <li><a href="index.php">Početna</a></li>
    <li>
        <a href="#">PHP</a>
        <ul class="menu vertical">
        <li><a href="varijable.php">Varijable</a></li>
        <li><a href="if.php">If</a></li>
        <li><a href="switch.php">Switch</a></li>
        <li><a href="nizovi.php">Nizovi (polja) - Arrays</a></li>
        <li><a href="ugradeniNizovi.php">Ugrađeni nizovi</a></li>
        </ul>
    </li>
    <li>
    
        <a href="#">Zadaci</a>
        <ul class="menu vertical">
            <li><a href="zadatak.php">Zadatak if switch</a></li>
            <li><a href="zadatak1.php">Zadatak nizovi</a></li>
        </ul>
        
    </li>
    </ul>
</div>
</div>
<!-- Kraj izbornik -->