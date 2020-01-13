<form class="log-in-form" action="autorizacija.php" method="POST">
            <h4 class="text-center">Prijava sa pristupnim podacima</h4>
            <label>Email
                <input type="email" name="email" id="email">
            </label>
            <label>Lozinka
                <input type="password" name="lozinka" id="lozinka">
            </label>
            <?php if(isset($_GET['g'])) {
                require_once 'greske.php';
                echo $greske[$_GET['g']];
            } ?>
            <p><input type="submit" class="button expanded" value="Prijava"></input></p>
            
</form>