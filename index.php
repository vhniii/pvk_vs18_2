<?php


echo '<!DOCTYPE html>
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

                    <li id="praad" onclick="openTab(0)">Praed</li>
                    <li id="supp" onclick="openTab(1)">Supid</li>
                    <li id="magustoit" onclick="openTab(2)">Magustoidud</li>
                    <li id="jook" onclick="openTab(3)">Joogid</li>

                </ul>

            </div>


            <div id="praed" class="tab-content">

                <ul>

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

            </div>

            <div id="supid" class="tab-content">

                <ul>

                    <li>

                        <h2>Boršš</h2>
                        <span class="price">1.10€</span>
                        <p>supp, hapukoor, leib</p>


                    </li>

                </ul>

            </div>

            <div id="magustoidud" class="tab-content">

                <ul>

                    <li>

                        <h2>Kohupiimakreem</h2>
                        <span class="price">1.30€</span>


                    </li>

                </ul>

            </div>

            <div id="joogid" class="tab-content">

                <ul>

                    <div class="left-drinks">
                        <li>

                            <h2>Mahl</h2>
                            <span class="ld-price">0.60€</span>


                        </li>

                        <li>

                            <h2>Piim</h2>
                            <span class="ld-price">0.30€</span>


                        </li>

                        <li>

                            <h2>Koolipiim</h2>
                            <span class="ld-price">0.20€</span>


                        </li>

                    </div>

                    <div class="right-drinks">

                        <li>

                            <h2>Keefir</h2>
                            <span class="rd-price">0.40€</span>


                        </li>

                        <li>

                            <h2>Morss</h2>
                            <span class="rd-price">0.25€</span>


                        </li>

                    </div>

                </ul>

            </div>

    </div>

    <script src="./js/main.js"></script>
</body>
</html>';