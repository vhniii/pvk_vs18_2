<?php

require_once 'conf.php';

//echo '<pre>';
//print_r($sess);
//echo '</pre>';

$mainTmpl = new Template('main');


$mainTmpl->set('title', 'Menu App');
$mainTmpl->set("page title", "Tartu KHK Menu");


$contentTmpl = new Template('content');


require_once 'menus/menu.php';

$courseCardTmpl = new Template('course_card');

$courseCardHeaderTmpl = new Template('course_card_header');
$courseCardDataTmpl = new Template('course_card_data');
$courseDataListTmpl = new Template ('course_data_list');




$courses = array(
        array(
                'name' => 'praed',
                'icon' => 'fa-utensils',
                'data' => array (
                        'dish name' => 'Sealihapada ploomide ja aprikoosiga',
                        'dish ingredients' => 'sealihapada, lisand, salat, leib',
                        'dish price' => '2.65',
                        'discount' => '2.25'

                ),

            array(
                'dish_name' => 'Praetud kanakints',
                'dish_description' => 'praetud kana, lisand, salat, leib',
                'dish_price' => 2.50,
                'discount' => 2.13
            ),

        ),

     array(
         'name' => 'supid',
         'icon' => 'fa-utensil-spoon',
         'data' => array(
             array(
                 'dish_name' => 'Rassolnik',
                 'dish_description' => 'supp, hapukoor, leib',
                 'dish_price' => 1.10,
                 'discount' => 0.94
             )
         )
     )

);


//    'praed' => 'fa-utensils',
//    'supid' => 'fa-utensil-spoon',
//    'magustoidud' => 'fa-cookie-bite',
//    'joogid' => 'fa-glass-whiskey');



foreach ($courses as $course => $courseData){
    $courseCardHeaderTmpl->set('course_name', $courseData['name']);
    $courseCardHeaderTmpl->set('icon', $courseData['icon']);
    $courseCardTmpl->set('course_card_header', $courseCardHeaderTmpl->parse());

    $courseCardDataTmpl->set('course-name', $courseData['name']);


    foreach ($courseData['data'] as $dish -> $dishData) {

        $courseDataListTmpl->set ('dish name', $dishData['dish name']);
        $courseDataListTmpl->set ('dish ingredients', $dishData['dish ingredients']);
        $courseDataListTmpl->set ('dish price', $dishData['dish price']);
        $courseDataListTmpl->set ('discount', $dishData['discount']);
        $courseCardDataTmpl->add ('course_data_list', $courseDataListTmpl->parse());
    }


//    $courseCardDataTmpl->add ('course_data_list', $courseDataListTmpl->parse());
    $courseCardTmpl->set ('course_card_data', $courseCardDataTmpl->parse());

    $contentTmpl->add('course_cards', $courseCardTmpl->parse());
}


$mainTmpl->set('content', $contentTmpl->parse());

$mainTmplContent = $mainTmpl->parse();

echo $mainTmplContent;





//echo $contentTmplContent;



//echo '<pre>';
//print_r($mainTmpl);
//echo '</pre>';


//
//function soodus($price, $soodustusProtsent) {
//
//    return round($price * ((100 - $soodustusProtsent) / 100));
//
//}
//
//
//$menu = array (
//
//        array(
//                'tuup' => 'praed',
//                'nimetus' => 'Böfstrooganov',
//                'kirjeldus' => 'Veiselihakaste, lisand, salat, leib',
//                'hind' => '2.75€'
//        ),
//         array(
//                'tuup' => 'praed',
//                'nimetus' => 'Kanašnitsel',
//                'kirjeldus' => 'Kanašnitsel, lisand, kaste, salat, leib',
//                'hind' => '2.50€'
//        ),
//        array(
//                'tuup' => 'praed',
//                'nimetus' => 'Kartul, kaste salat, leib',
//                'kirjeldus' => '',
//                'hind' => '1.38€'
//        ),
//        array(
//                'tuup' => 'supid',
//                'nimetus' => 'Boršš',
//                'kirjeldus' => 'supp, hapukoor, leib',
//                'hind' => '1.10€'
//        ),
//         array(
//                'tuup' => 'magustoidud',
//                'nimetus' => 'Kohupiimakreem',
//                'kirjeldus' => '',
//                'hind' => '1.30€'
//        ),
//        array(
//                'tuup' => 'joogid',
//                'nimetus' => 'Mahl',
//                'kirjeldus' => '',
//                'hind' => '0.6€'
//        ),
//        array(
//                'tuup' => 'joogid',
//                'nimetus' => 'Piim',
//                'kirjeldus' => '',
//                'hind' => '0.3€'
//        ),
//        array(
//                'tuup' => 'joogid',
//                'nimetus' => 'Koolipiim',
//                'kirjeldus' => '',
//                'hind' => '0.2€'
//        ),
//        array(
//                'tuup' => 'joogid',
//                'nimetus' => 'Keefir',
//                'kirjeldus' => '',
//                'hind' => '0.4€'
//        ),
//        array(
//                'tuup' => 'joogid',
//                'nimetus' => 'Morss',
//                'kirjeldus' => '',
//                'hind' => '0.25€'
//        )
//
//
//);
//
//
//?>
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Tartu KHK Söökla Menüü</title>-->
<!--    <meta charset="utf-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">-->
<!--    <link rel="stylesheet" href="css/style.css">-->
<!--</head>-->
<!--<body>-->
<!--<div class="menu">-->
<!--    <div class="tabs">-->
<!---->
<!--        <ul class="food-category">-->
<!---->
<!--            <li class="" onclick="openTab(0)">Praed</li>-->
<!--            <li class="" onclick="openTab(1)">Supid</li>-->
<!--            <li class="" onclick="openTab(2)">Magustoidud</li>-->
<!--            <li class="" onclick="openTab(3)">Joogid</li>-->
<!---->
<!--        </ul>-->
<!---->
<!--    </div>-->
<!---->
<!--    --><?php
//    echo '
//
//    <div id="praed" class="tab-content">
//
//        <ul class="praed">
//
//            <li>
//
//                <h2>'.$menu[0][nimetus].'</h2>
//                <span class="price">'.$menu[0][hind].'</span>
//                <span class="discount">'.soodus(2.75, 15).'.00€</span>
//                <p>'.$menu[0][kirjeldus].'</p>
//
//            </li>
//
//            <li>
//
//                <h2>'.$menu[1][nimetus].'</h2>
//                <span class="price">'.$menu[1][hind].'</span>
//                <span class="discount">'.soodus(2.50, 15).'.00€</span>
//                <p>'.$menu[1][kirjeldus].'</p>
//
//
//            </li>
//
//            <li>
//
//                <h2>'.$menu[2][nimetus].'</h2>
//                <span class="price">'.$menu[2][hind].'</span>
//                <span class="discount">'.soodus(1.38, 15).'.00€</span>
//
//
//            </li>
//
//        </ul>
//
//    </div>';
//    ?>
<!---->
<!--    --><?php
//    echo '
//    <div id="supid" class="tab-content">
//
//        <ul class="supid">
//
//            <li>
//
//                <h2>'.$menu[3][nimetus].'</h2>
//                <span class="price">'.$menu[3][hind].'</span>
//                <span class="discount">'.soodus(1.10, 15).'.00€</span>
//                <p>'.$menu[3][kirjeldus].'</p>
//
//
//            </li>
//
//        </ul>
//
//    </div>';
//    ?>
<!---->
<!---->
<!--    --><?php
//    echo '
//    <div id="magustoidud" class="tab-content">
//
//        <ul class="magustoidud">
//
//            <li>
//
//                <h2>'.$menu[4][nimetus].'</h2>
//                <span class="price">'.$menu[4][hind].'</span>
//                <span class="discount">'.soodus(1.30, 15).'.00€</span>
//
//
//            </li>
//
//        </ul>
//
//    </div>';
//    ?>
<!---->
<!--    --><?php
//    echo '
//    <div id="joogid" class="tab-content">
//
//        <ul class="joogid">
//
//            <div class="left-drinks">
//                <li>
//
//                    <h2>'.$menu[5][nimetus].'</h2>
//                    <span class="ld-price">'.$menu[5][hind].'</span>
//
//
//                </li>
//
//                <li>
//
//                    <h2>'.$menu[6][nimetus].'</h2>
//                    <span class="ld-price">'.$menu[5][hind].'</span>
//
//
//                </li>
//
//                <li>
//
//                    <h2>'.$menu[7][nimetus].'</h2>
//                    <span class="ld-price">'.$menu[7][hind].'</span>
//
//
//                </li>
//
//            </div>
//
//            <div class="right-drinks">
//
//                <li>
//
//                    <h2>'.$menu[8][nimetus].'</h2>
//                    <span class="rd-price">'.$menu[8][hind].'</span>
//
//
//                </li>
//
//                <li>
//
//                    <h2>'.$menu[9][nimetus].'</h2>
//                    <span class="rd-price">'.$menu[9][hind].'</span>
//
//
//                </li>
//
//            </div>
//
//        </ul>
//
//    </div>';
//    ?>
<!--</div>-->
<!---->
<!--<script src="./js/main.js"></script>-->
<!--</body>-->
<!--</html>-->