<?php

$timovi = json_decode(file_get_contents('timovi.json'), true);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="timovi.css">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

  <header class="container-fluid text-center">
        <div class="row">
            <div class="container-fluid pozadina">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-12"><p style="position: relative; top: 11px;">F1 TIMOVI</p></div>
                        <div class="col-lg-9 col-12">
                            <nav>
                                <ul>
                                    <li><a href="vozaci.php">F1 VOZAČI</a></li>
                                    <li><a href="https://www.formula1.com/">SLUŽBENA STRANICA</a></li>
                                    <li><a href="https://www.formula1.com/en/racing/2024.html">RASPORED</a></li>
                                    <li><a href="https://www.planetf1.com/">VIJESTI</a></li>
                                    <li><a href="#">KONTAKT</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1><strong>FORMULA 1 - TIMOVI</strong></h1>
    </header>
     
    <div class="container">
    <h2>TABLICA F1 TIMOVA</h2>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">Ime</th>
          <th scope="col">Država</th>
          <th scope="col">Vozači</th>
          <th scope="col">Prvenstva</th>
          <th scope="col">Godina ulaska</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($timovi['teams'] as $tim) { ?>
        <tr>
          <td><?php echo $tim['name']; ?></td>
          <td><?php echo $tim['country']; ?></td>
          <td><?php echo implode(", ", $tim['drivers']); ?></td>
          <td><?php echo $tim['championships']; ?></td>
          <td><?php echo $tim['entryYear']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>

    <section class="container pb-5">
        <div class="row pt-3">
            <div class="col-lg-12">
                <h4>O timovima</h4>
                <p>Formula 1 je jedan od najprestižnijih i najpopularnijih 
                  moto-sportova na svijetu, a povijest timova u F1 je bogata i 
                  puna interesantnih događaja. Evo nekoliko ključnih trenutaka i 
                  informacija o povijesti timova u Formuli 1.</p>
                <p>Ferrari: Ferrari je najstariji i najuspješniji tim u povijesti Formule 1. 
                  Osnovan je 1929. godine, a prva utrka u kojoj su sudjelovali bila je 1950. 
                  godine, kada je i osnovana Formula 1. Ferrari je osvojio brojna prvenstva 
                  vozača i konstruktora, te je tim s najdužom poviješću i najvećim brojem navijača.</p>
                <p>McLaren: McLaren je osnovan 1963. godine i postao je jedan od najuspješnijih timova u 
                  povijesti Formule 1. McLaren je osvojio više od 180 utrka i 20 konstruktorskih prvenstava.</p>
                <p>Williams: Osnovan 1977. godine, Williams je također jedan od najpoznatijih timova u Formuli 1. 
                  Bio je vrlo uspješan u 1980-ima i 1990-ima, osvojivši brojna prvenstva vozača i konstruktora. 
                  Williams je također poznat po tome što je lansirao karijere mnogih poznatih vozača.</p>
                <p>Mercedes: Mercedes-Benz, koji je ušao u Formulu 1 kao konstruktor 1954. godine, nakon 
                  nekoliko decenija pauze, ponovno se vratio 2010. godine. Od tada, postao je jedan od 
                  najdominantnijih timova u povijesti sporta, osvajajući niz prvenstava, kako u vozačkoj, 
                  tako i u konstruktorskoj konkurenciji.</p>
                <p>Red Bull Racing: Osnovan 2005. godine, Red Bull Racing je relativno mlad tim u F1, ali 
                  je brzo postao jedan od najuspješnijih. Osvojio je više uzastopnih prvenstava konstruktora
                   s Sebastianom Vettelom kao vozačem.</p>
            </div>
        </div>
    </section>

    <footer class="container-fluid">
        <p>© All right reserved</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
