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

<?php
$csvFile = "players.csv";
$isArchive = false;

if (isset($_GET['archive'])) {
    $tmpCsvFile = urldecode($_GET['archive']) . '.csv';
    if (!str_starts_with($tmpCsvFile, '.')) {
        $csvFile = "archive/$tmpCsvFile";
        $isArchive = true;
    }
}

?>

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
                <a class="navbar-item" href="#archive">
                    Archiv
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
                        <a class="navbar-item" href="https://docs.google.com/spreadsheets/d/15ZigSvSE8n-sNH8lkj4MrZQZ1JPZk7E22_1qTbwuvZs/edit?gid=1223314812#gid=1223314812" target="_blank" rel="noopener">
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
    <section class="section" id="timetable-2025">
        <div class="container">
            <h1 class="title is-1">Commander Liga</h1>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Übersicht Spieltage</p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <div class="table-container">
                            <table class="table is-striped is-hoverable">
                                <thead>
                                    <tr>
                                        <th class="is-unselectable">Spieltag</th>
                                        <th class="is-unselectable">Von</th>
                                        <th class="is-unselectable">Bis</th>
                                        <th class="is-unselectable">Packs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $timetable = [
                                        [1, new DateTime('2025-01-10'), new DateTime('2025-01-30T23:59'), ['3x FDN']],
                                        [2, new DateTime('2025-01-31'), new DateTime('2025-02-20T23:59'), ['1x FDN', '1x DSK', '1x Frei']],
                                        [3, new DateTime('2025-02-21'), new DateTime('2025-03-13T23:59'), ['1x FDN', '1x OTJ', '1x Frei']],
                                        [4, new DateTime('2025-03-14'), new DateTime('2025-04-03T23:59'), ['1x FDN', '1x BLB', '1x Frei']],
                                        [5, new DateTime('2025-04-04'), new DateTime('2025-05-01T23:59'), ['2x FDN', '1x MKM']],
                                        [6, new DateTime('2025-05-02'), new DateTime('2025-05-22T23:59'), ['1x FDN', '1x DFT', '1x Frei']],
                                        [7, new DateTime('2025-05-23'), new DateTime('2025-06-12T23:59'), ['1x FDN', '1x TDM', '1x Frei']],
                                        [8, new DateTime('2025-06-13'), new DateTime('2025-07-04T23:59'), ['1x FDN', '1x FIN', '1x Frei']],
                                        ['Playoff', new DateTime('2025-07-05'), new DateTime('2025-07-31T23:59'), ['3x Frei']],
                                        ['Finale', new DateTime('2025-08-01'), new DateTime('2025-09-13T23:59'), []],
                                    ];
                                    $now = new DateTime('now');

                                    foreach ($timetable as $row) {
                                    ?>
                                        <tr class="<?php echo ($now >= $row[1] && $now <= $row[2]) ? 'is-selected' : ''; ?>">
                                            <td><?php echo $row[0]; ?></td>
                                            <td><?php echo $row[1]->format('d.m.Y'); ?></td>
                                            <td><?php echo $row[2]->format('d.m.Y'); ?></td>
                                            <td><?php echo implode(', ', $row[3]); ?></td>
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
                    <a class="card-footer-item" href="https://docs.google.com/spreadsheets/d/15ZigSvSE8n-sNH8lkj4MrZQZ1JPZk7E22_1qTbwuvZs/edit?gid=1223314812#gid=1223314812" target="_blank" rel="noopener">Spielplan</a>
                </footer>
            </div>
        </div>
    </section>
    <section class="section" id="ranking-2025">
        <div class="container">
            <h2 class="title is-3">Rangliste</h2>
            <?php
            if ($isArchive) {
            ?>
                <div class="notification is-warning">
                    Du schaust dir grad eine Archiv-Version der Rangliste an!<br />
                    <span class="is-size-7">
                        Klicke <a href="/#ranking-2025">hier</a> um die aktuelle Rangliste zu sehen.
                    </span>
                </div>
            <?php
            }
            ?>
            <div class="notification is-size-7 is-italic">
                Klicke auf eine Spalte um die Tabelle zu sortieren!
            </div>
            <?php

            if (($handle = fopen($csvFile, "r")) !== FALSE) {
                $header = fgetcsv($handle);
                array_shift($header);

                $rows = [];
                while (($row = fgetcsv($handle)) !== FALSE) {
                    $rows[] = $row;
                }

                $pointsIndex = 2;
                usort($rows, fn($x, $y) => $x[$pointsIndex] <= $y[$pointsIndex]);

                fclose($handle);

            ?>
                <div class="table-container">
                    <table class="table sortable is-striped is-hoverable">
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
                            foreach ($rows as $row) {
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
    <section class="section" id="archive">
        <div class="container">
            <article class="panel is-link">
                <p class="panel-heading">Archiv</p>
                <?php
                $files = scandir('archive');
                $files = array_filter($files, fn($it) => str_ends_with($it, '.csv'));
                $files = array_reverse($files);

                if (empty($files)) {
                ?>
                    <a class="panel-block">
                        <span class="is-italic">
                            Es gibt noch kein Archiv!
                        </span>
                    </a>
                    <?php
                } else {
                    foreach ($files as $file) {
                        $file = rtrim($file, '.csv');
                        $parts = explode('_', $file);
                        if (count($parts) < 2) continue;

                        $date = new DateTime($parts[1] ?? '');
                        $url = "/?archive=" . urlencode($file) . '#ranking-2025';
                    ?>
                        <a class="panel-block" href="<?php echo $url; ?>">
                            Rangliste (Stand: <?php echo $date->format('d.m.Y H:i:s'); ?>)
                        </a>
                <?php
                    }
                }
                ?>
            </article>
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