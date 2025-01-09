<!DOCTYPE html>
<html lang="<?php echo 'de'; ?>">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Outer Rim Tabletop MTG Commander">
    <meta name="author" contents="Calucon / Simon Schwitz">

    <!-- HTML Meta Tags -->
    <title>Outer Rim - Commander Liga</title>
    <meta name="description" content="Outer Rim - Commander Liga">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://commander-liga.calucon.de/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Outer Rim - Commander Liga">
    <meta property="og:description" content="Outer Rim - Commander Liga">
    <meta property="og:image" content="https://commander-liga.calucon.de/img/logo-or.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="calucon.de">
    <meta property="twitter:url" content="https://commander-liga.calucon.de/">
    <meta name="twitter:title" content="Outer Rim - Commander Liga">
    <meta name="twitter:description" content="Outer Rim - Commander Liga">
    <meta name="twitter:image" content="https://commander-liga.calucon.de/img/logo-or.png">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/logo-or.png">
    <link rel="icon" href="/img/logo-or.png" sizes="32x32">
    <link rel="icon" href="/img/logo-or.png" sizes="100x100">
    <link rel="apple-touch-icon" href="/img/logo-or.png" sizes="100x100">
    <meta name="msapplication-TileColor" content="#1B8520">
    <meta name="msapplication-TileImage" content="/img/logo-or.png">
    <link rel="image_src" href="/img/logo-or.png">

    <!-- Site CSS and JS -->
    <link rel="stylesheet" href="/css/bulma.min.css">
    <script src="/js/bulma.js"></script>
    <script src="/js/sorttable.js"></script>
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <figure class="image ">
                    <img src="img/logo-or.webp" />
                </figure>
                Commander Liga
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="#timetable-2025">
                    Spieltage
                </a>
                <a class="navbar-item" href="#ranking-2025">
                    Rangliste
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Externe Links
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="https://docs.google.com/document/d/15twQ3RlrfAUgsiOzd4tgaswiyK1cYA6HCyA6DNaukus/" target="_blank" rel="noopener">
                            Regelwerk
                        </a>
                        <a class="navbar-item" href="https://cloud.calucon.de/index.php/s/GLkWwXpQDbztiFW" target="_blank" rel="noopener">
                            Info Präsentation
                        </a>
                        <a class="navbar-item" href="https://docs.google.com/spreadsheets/d/1aY8aPrPGJpLktHIaSFsIJl3mzYdiSW4L0Dg-ndIzqvo/" target="_blank" rel="noopener">
                            Spielplan
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="https://docs.google.com/document/d/10IA6msVCCrq_-nIhvBV1iOJt2jkVazWmZOTOqe01dnE/" target="_blank" rel="noopener">
                            Deck Pool
                        </a>
                        <a class="navbar-item" href="https://docs.google.com/spreadsheets/d/1awIaQoymeatnHV9uArCToLbpBWDpcJaN-dWpU--YNo4" target="_blank" rel="noopener">
                            Commander Pool
                        </a>
                    </div>
                </div>
            </div>
            <div class="navbar-end">
                <a class="navbar-item" href="https://outer-rim-tabletopshop.de/" target="_blank" rel="noopener">
                    Outer Rim - Tabletopshop
                </a>
            </div>
        </div>
    </nav>
    <section class="section">
        <div class="container">
            <h1 class="title is-1">Commander Liga</h1>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Spieltage</p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <div class="table-container">
                            <table class="table is-striped is-hoverable" id="timetable-2025">
                                <thead>
                                    <tr>
                                        <th class="is-unselectable">Spieltag</th>
                                        <th class="is-unselectable">Von</th>
                                        <th class="is-unselectable">Bis</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $timetable = [
                                        [1, new DateTime('2025-01-10'), new DateTime('2025-01-30T23:59')],
                                        [2, new DateTime('2025-01-31'), new DateTime('2025-02-20T23:59')],
                                        [3, new DateTime('2025-02-21'), new DateTime('2025-03-13T23:59')],
                                        [4, new DateTime('2025-03-14'), new DateTime('2025-04-03T23:59')],
                                        [5, new DateTime('2025-04-04'), new DateTime('2025-05-01T23:59')],
                                        [6, new DateTime('2025-05-02'), new DateTime('2025-05-22T23:59')],
                                        [7, new DateTime('2025-05-23'), new DateTime('2025-06-12T23:59')],
                                        [8, new DateTime('2025-06-13'), new DateTime('2025-07-04T23:59')],
                                        ['Playoff', new DateTime('2025-07-05'), new DateTime('2025-07-31T23:59')],
                                        ['Finale', new DateTime('2025-08-01'), new DateTime('2025-09-13T23:59')],
                                    ];
                                    $now = new DateTime('now');

                                    foreach ($timetable as $row) {
                                    ?>
                                        <tr class="<?php echo ($now >= $row[1] && $now <= $row[2]) ? 'is-selected' : ''; ?>">
                                            <td><?php echo $row[0]; ?></td>
                                            <td><?php echo $row[1]->format('d.m.Y'); ?></td>
                                            <td><?php echo $row[2]->format('d.m.Y'); ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <a class="card-footer-item" href="https://docs.google.com/spreadsheets/d/1aY8aPrPGJpLktHIaSFsIJl3mzYdiSW4L0Dg-ndIzqvo/" target="_blank" rel="noopener">Spielplan</a>
                </footer>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="title is-3">Rangliste</h2>
            <div class="notification is-size-7 is-italic">
                Klicke auf eine Spalte um die Tabelle zu sortieren!
            </div>
            <?php

            if (($handle = fopen("players.csv", "r")) !== FALSE) {
                $header = fgetcsv($handle);
                array_shift($header);
            ?>
                <div class="table-container">
                    <table class="table sortable is-striped is-hoverable" id="ranking-2025">
                        <thead>
                            <tr>
                                <?php
                                foreach ($header as $th) {
                                ?>
                                    <th class="is-unselectable"><?php echo $th; ?></th>
                                <?php
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while (($row = fgetcsv($handle)) !== FALSE) {
                                array_shift($row);
                            ?>
                                <tr>
                                    <?php
                                    foreach ($row as $entry) {
                                    ?>
                                        <td><?php echo $entry; ?></td>
                                    <?php
                                    }
                                    ?>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            <?php
                fclose($handle);
            } else {
            ?>
                <div class=" notification is-danger">
                    Daten konnten nicht geladen werden!
                </div>
            <?php
            }

            ?>
        </div>
    </section>
    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Commander Liga Rangliste</strong><br />
                Veranstalter:&nbsp;<a href="https://outer-rim-tabletopshop.de/" rel="noopener">Outer Rim - Tabletopshop</a><br />
                Ligaverwaltung:&nbsp;<a href="#">Aron, Marc D.</a>&nbsp;<span class="is-size-7">(Kontakt via Whatsapp)</span><br />
                Webseite:&nbsp;<a href="https://calucon.de">Simon Schwitz</a>
            </p>
        </div>
    </footer>
</body>

</html>