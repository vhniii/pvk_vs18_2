<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tartu KHK Söökla Menüü</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="menu">
    <div class="tabs">

        <ul class="food-category">

            <li class="active" onclick="openTab()">Praed</li>
            <li class="" onclick="openTab()">Supid</li>
            <li class="" onclick="openTab()">Magustoidud</li>
            <li class="" onclick="openTab()">Joogid</li>

        </ul>

    </div>

    <?php
    echo '
    <div id="praed" class="tab-content">

        <ul class="praed">

            <li>

                <h2>Böfstrooganov</h2>
                <span class="price">2.75€</span>
                <p>Veiselihakaste, lisand, salat, leib</p>

            </li>

            <li>

                <h2>Kanašnitsel</h2>
                <span class="price">2.50€</span>
                <p>Kanašnitsel, lisand, kaste, salat, leib</p>


            </li>

            <li>

                <h2>Kartul, kaste salat, leib</h2>
                <span class="price">1.38€</span>


            </li>

        </ul>

    </div>';
    ?>

    <?php
    echo '
    <div id="supid" class="tab-content">

        <ul class="supid">

            <li>

                <h2>Boršš</h2>
                <span class="price">1.10€</span>
                <p>supp, hapukoor, leib</p>


            </li>

        </ul>

    </div>';
    ?>

    <div id="magustoidud" class="tab-content">

        <ul class="magustoidud">

            <li>

                <h2>Kohupiimakreem</h2>
                <span class="price">1.30€</span>


            </li>

        </ul>

    </div>

    <div id="joogid" class="tab-content">

        <ul class="joogid">

            <div class="left-drinks">
                <li>

                    <h2>Mahl</h2>
                    <span class="price">0.6€</span>


                </li>

                <li>

                    <h2>Piim</h2><
                    span class="price">0.3€</span>


                </li>

                <li>

                    <h2>Koolipiim</h2>
                    <span class="price">0.2€</span>


                </li>

            </div>

            <div class="right-drinks">

                <li>

                    <h2>Keefir</h2>
                    <span class="price">0.4€</span>


                </li>

                <li>

                    <h2>Morss</h2>
                    <span class="price">0.25€</span>


                </li>

            </div>

        </ul>

    </div>
</div>

<script src="./js/main.js"></script>
</body>
</html>
?>