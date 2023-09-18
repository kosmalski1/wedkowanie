<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>

<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <div class="grid">
        <section class="lewy">
            <h3>Ryby zamieszkujące rzeki</h3>
            <ol> <?php
                    //skrypt1
                    $laczenie = mysqli_connect('localhost', 'root', '', 'wedkowanie');

                    $kwerenda1 = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby,  lowisko WHERE ryby.id=lowisko.Ryby_id and lowisko.rodzaj = 3";
                    $wynik = mysqli_query($laczenie, $kwerenda1);
                    while ($wiersz = mysqli_fetch_row($wynik)) {
                        echo "<li>$wiersz[0] pływa w rzece $wiersz[1], $wiersz[2]</li>";
                    }
                    ?></ol>
        </section>
        <section class="lewy">
            <h3>Ryby drapieżne naszych wód</h3>
            <table>
                <tr>
                    <th>L.p.</th>
                    <th>Gatunek</th>
                    <th>Występowanie</th>
                </tr>
                <?php
                        //skrypt2
                $kwerenda = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1";
                $wynik2 = mysqli_query($laczenie, $kwerenda);
                while ($wiersz2 = mysqli_fetch_row($wynik2)) {
                    echo "<tr>
                            <td>$wiersz2[0]</td>
                            <td>$wiersz2[1]</td>
                            <td>$wiersz2[2]</td>
                          </tr>";
                }
                mysqli_close($laczenie);
                ?>
            </table>

        </section>
        <section class="prawy"><img src="ryba1.jpg" alt="sum"><br>
            <a href="kwerendy.txt"> Pobierz kwerendy</a>
        </section>
    </div>
    <footer>
        <p>strone wykonał: 88888888</p>
    </footer>
</body>

</html>