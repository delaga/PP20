<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
    <?php //include_once 'predlozak/head1.php'; ?>
    <?php //include 'predlozak/head.php'; ?>
  </head>
  <body>
    <div class="grid-container">
      <?php require_once 'predlozak/izbornik.php' ?>
      <!-- Početak tijela -->
      <div class="grid-x">
        <div class="large-12 small-12 columns">
          <div class="callout" style="min-height: 400px;"> 
            <h3>Zadatak 03.</h3>
            <hr>
            <p>Kreirati program koji za dva unesena broja ispisuje sve prim brojeve između njih.</p>
            <br>
            <form action="" method="post">
              <h2>Unesi prvi broj</h2>
              <input type="number" name='prviBroj' id='prviBroj'>
              <h2>Unesi drugi broj</h2>
              <input type="number" name='drugiBroj' id='drugiBroj'>
              <input type="submit" value="SUBMIT">
            </form>
          </div>
        </div>
      </div>
      <!-- Kraj tijela -->
      <?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/skripte.php' ?>
  </body>
</html>