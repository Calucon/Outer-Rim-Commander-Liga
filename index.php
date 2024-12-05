<!DOCTYPE html>
<html lang="<?php echo 'de'; ?>">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Calucon, Software, Programming, Security">
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
    <script src="/js/sorttable.js"></script>
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <figure class="image ">
                    <img src="img/logo-or.png" />
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
                <a class="navbar-item" href="#ranking-2025">
                    Rangliste
                </a>
            </div>
            <div class="navbar-end">
                <a class="navbar-item" href="https://outer-rim-tabletopshop.de/" target="_blank" rel="noopener">
                    Outer Rim
                </a>
            </div>
        </div>
    </nav>
    <section class="section">
        <div class="container">
            <h1 class="title">Rangliste</h1>
            <?php

            if (($handle = fopen("players.csv", "r")) !== FALSE) {
                $header = fgetcsv($handle);
                array_shift($header);
            ?>
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
                <strong>Commaner Liga Rangliste</strong>&nbsp;&mdash;&nbsp;<a href="https://calucon.de">Simon Schwitz</a>.
            </p>
        </div>
    </footer>
</body>

</html>