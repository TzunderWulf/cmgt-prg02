<?php
    $currentDate = date('Y-m-d');
?>

<!doctype html>
    <html lang="en">

        <head>
            <title>Hello</title>
            <link rel="stylesheet" href="./style.css">
        </head>

        <body>
            <header>Front-End Speed Course 7 December</header>

            <nav>
                <div>Reservering</div>
                <div>Over ons</div>
            </nav>

            <main>
                <section>
                    <h1>Code editor</h1>
                    <p>Open <a href="https://www.jetbrains.com/phpstorm/download/" target="_blank">PHP Storm</a> of <a href="https://code.visualstudio.com/download" target="_blank">Visual Studio Code</a>.</p>

                    <h2>Werken met localhost</h2>
                    <p>Zorg dat XAMPP aan staat. Maak nu een nieuwe projectmap aan binnen de <b>htdocs</b> map van XAMPP.</p>
                    <p>Vanuit je code editor maak je een nieuwe <b>index.html</b> file aan in je projectmap. Open deze file in je browser via <strong>http://localhost</strong></p>
                    <p>
                        <span class="greenText">👍 http://localhost/mijnspeedcourse/index.html</span><br>
                        <span class="redText">🚫 file://c:mijn documenten/mijnspeedcourse/index.html</span>
                    </p>

                    <h2>Start layout</h2>
                    <p>Kopieer de html uit deze codepen naar de body van je eigen index.html. Je kan de sections leeg maken. </p><p>Maak een nieuwe style.css file. Kopieer de inhoud van deze codepen css naar je eigen css file.</p>
                </section>


                <section id="coursesection">
                    <h1>Speed Course</h1>
                    <p>Als dit allemaal werkt gaan we kijken naar formulieren en front-end validatie!</p>
                </section>

                <section>
                    <h1>Reserveren</h1>
                    <form action="./speedcourse_confirm.php" method="post">
                        <div>
                            <label for="name">Name*: </label>
                            <input type="text" id="name" name="name" required>
                        </div>

                        <div>
                            <label for="email">Email*: </label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div>
                            <label for="start">Date*: </label>
                            <input type="date" id="start" name="tripStart" required
                            value="<?=$currentDate;?>" min="<?=$currentDate;?>">
                        </div>

                        <div>
                            <button type="submit" name="submit" value="submit">Reserveren</button>
                        </div>
                    </form>
                </section>


            </main>
            <footer>
                Twitter | Instagram
            </footer>

        </body>
    </html>
