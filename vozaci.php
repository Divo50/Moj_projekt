<?php

$xml = simplexml_load_file('vozaci.xml');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vozači</title>
    <link rel="stylesheet" href="vozaci.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<header class="container-fluid text-center">
        <div class="row">
            <div class="container-fluid pozadina">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-12"><p style="position: relative; top: 11px;">F1 VOZAČI</p></div>
                        <div class="col-lg-9 col-12">
                            <nav>
                                <ul>
                                    <li><a href="timovi.php">F1 TIMOVI</a></li>
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
        <h1><strong>FORMULA 1 - VOZAČI</strong></h1>
    </header>

<div class="container">
<h2>TABLICA F1 VOZAČA</h2>
    <table class="table table-dark table-striped-columns table-hover">
        <thead>
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Tim</th>
                <th>Država</th>
                <th>Godina rođenja</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($xml->Vozac as $vozac): ?>
                <tr>
                    <td><?php echo $vozac->Ime; ?></td>
                    <td><?php echo $vozac->Prezime; ?></td>
                    <td><?php echo $vozac->Tim; ?></td>
                    <td><?php echo $vozac->Drzava; ?></td>
                    <td><?php echo $vozac->DatumRodjenja; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<section class="container pb-5">
        <h2>Posljednja utrka</h2>
        <div class="row pt-3">
            <div class="col-lg-5">
                <h4>Velika nagrada Monaka 2024.</h4>
                <p>Iza nas je osma utrka sezone 2024. Formule 1, utrka na 
                    legendarnim ulicama Monaka. Utrku je obilježio prekid odmah nakon 
                    starta zbog sudara Sergija Pereza u Red Bullu i dva vozača Haasa. Tada 
                    su svi vodeći vozači iskoristili priliku i prešli sa srednje mekih na 
                    tvrde gume i ostatak utrke odvozili do kraja. U takvoj procesijskoj 
                    atmosferi do cilja je kao prvi došao domaći vozač Charles Leclerc u Ferrariju, 
                    njegova tek šesta pobjeda u karijeri, prva pobjeda u Monaku, prva ove sezone i
                     prva još od VN Austrije 2022. godine.</p>
            </div>
            <div class="col-lg-7">
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/tomPqNoHYyU?si=cPCzXGwGeNOqXFTs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section class="container-fluid naslovi">
        <div class="container">
        <h2>Vozači s najviše naslova</h2>
        <div class="row pb-5 pt-3 justify-content-center">
            <div class="col-lg-2 col-6">
                <img src="images/schumacher.webp" alt="">
                <h5>Michael Schumacher (7)</h5>
                <p>Naslove je osvajao: 1994., 1995., 2000., 2001., 2002., 2003., 2004. </p>
            </div>
            <div class="col-lg-2 col-6">
                <img src="images/Lewis_Hamilton_2022_São_Paulo_Grand_Prix_(52498120773)_(cropped).jpg" alt="">
                <h5>Lewis Hamilton (7)</h5>
                <p>Naslove je osvajao: 2008., 2014., 2015., 2017., 2018.,2019.,2020.</p>
            </div>
            <div class="col-lg-2 col-6">
                <img src="images/Juan_Manuel_Fangio_(circa_1952).jpg" alt="">
                <h5>Juan Fangio (4)</h5>
                <p>Naslove je osvajao: 1951., 1954., 1955., 1956., 1957. </p>
            </div>
            <div class="col-lg-2 col-6">
                <img src="images/img91.jpg" alt="">
                <h5>Sebastian Vettel (4)</h5>
                <p>Naslove je osvajao: 2010., 2011., 2012., 2013. </p>
            </div>
        </div>
        </div>
    </section>

    <footer class="container-fluid">
        <p>© All right reserved</p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
