<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
    <?php //include_once 'predlozak/head1.php'; ?>
    <?php //include 'predlozak/head.php'; ?>
    <style type="text/css">table td {
      text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="grid-container">
      <?php require_once 'predlozak/izbornik.php' ?>
      <!-- Početak tijela -->
      <div class="grid-x">
        <div class="large-12 small-12 columns">
          <div class="callout" style="min-height: 400px;"> 
            <h3>Zadatak 02.</h3>
            <hr>
            <p>Kreirati program koji ispisuje tablicu množenja 15x15</p>
            <table >
              <?php
                for ($i=0; $i < 15; $i++) { 
                  echo '<tr>';
                  for ($j=0; $j < 15; $j++) { 
                    echo '<td>' . ($i+1) * ($j+1) .'</td>';
                  }
                  echo '</tr>';
                }

              ?>
            </table>
          </div>
        </div>
      </div>
      <!-- Kraj tijela -->
      <?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/skripte.php' ?>
  </body>
</html>