<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.gallery {
            display: inline-block;
        }
    </style>
</head>

<body>
    <?php

        // Tinklapiams atvaizduoti reikalinga HTML žymėjimo kalba.
        // Tinklapius atvaizduoja naršyklės, kurios supranta HTML,CSS ir JS.

        // HTML kalba yra tik žymėjimo kalba ir su ja kuriamas statinis 
        // tinklapio turinys.

        // Kad turinys būtų dinaminis, t.y., HTML kodas atsirastų, pasikeistų
        // savarankiškai (pagal iš anksto numatytas sąlygas),
        // reikalinga programavimo kalbos pagalba.

        // PHP yra programavimo kalba, sukurta tinklapių turinį padaryti
        // dinamišku.

        // PHP gali būti įtrauktas į HTML kodą, kad jį sugeneruotų/papildytų. 

        //Web Serveris - tai programa,kuri paduoda (servs) cliento (naršyklės)
        //prašomus dokumentus.

        //Web Serveris gali atiduoti dokumentą taip, kaip jis parašytas,
        //arba pirmiausia išspręsti dokumente esantį backend kodą, pagal
        //naudojamą interpretatorių ir tada grąžinti.

        // Web serveris PHP dokumentą atpažįsta pagal failo plėtinį ".php".

        // .php faile galima rašyti tiek HTML/CSS tiek PHP tiek JS kodą, 

        // .php faile PHP kodas yra žymimas atidarant <?php ir uždarant ? > php kodo bloką.

        // .php faile esantis PHP kodas yra išsprendžiamas pasitelkiant PHP interpretatorių, 
        // t.y. PHP programą, kuri yra nurodyta serveriui naudot ir rezultatas dokumente
        // bus išvestas, ten kur nurodoma.

        // Dokumentai į naršyklę grąžinami tekstiniu formatu, todėl jame esantis  PHP kodo rezultatas 
        // išvedamas kaip tekstas.

        // Bet koks PHP rezultatas turi būti išvestas su print ar echo, kad būtų įtrauktas į grąžinamą
        // dokumentą.

        // Print ar echo išvedą tekstą (string), taigi visas PHP logikos
        // rezultatas visada bus išvestas kaip tekstas.

        // PHP rezultatas dokumente atsiras toje vietoje, kur bus padaromas išvedimas,
        // nepriklausomai nuo to, kur vyko visa PHP logika. Pvz.: galima paleisti funkciją ir jos
        // rezultatą priskirti kintamajam, o tą kintamojo vertę išvesti visai kitoje vietoje ar kitame faile.


    //Paprastas string išvedimas
    echo "Labas krabas";
    print "Labas krabas";

    //string su html tagais išvedimas.
    echo "<div>DIVO TAGAS</div>";
    echo "<div>DIVO TAGAS</div>";

    //Atliekama logika
    $number = 11;

    if ($number < 10) {
        $result = 'Mažiau';
    } else {
        $result = 'Daugiau';
    }

    //PHP rezultatas išvedamas.
    echo "Rezultatas";
    echo "<br>";
    echo $result;

    //Sugeneruojamas didesnis HTML blokas
    $article =
        "<article>
                <h2>Straipsniukas 1</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus minus expedita placeat facilis molestias est error harum nam, doloremque delectus natus dolorem quam veniam asperiores deleniti ea ipsa, animi dolor!</p>
            </article>";

    //PHP rezultatas article išvedamas.
    echo $article;

    // Kitas būdas rašyti PHP su html, atveriant php string tik ten, kur reikalingas php
    $title = 'New section';
    $content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, magni. Soluta quae quaerat tempore nihil aliquam! Adipisci consectetur ut quis sed eius enim qui pariatur ratione animi, culpa totam dolore.';
    ?>
    
    <section>
        <h2><?= $title;?></h2>
        <p><?= $content;?></p>
    </section>

    <?php

    //Panaudojamas ciklas išvesti daugiau elementų.
    $n = 1;

    for ($i = 1; $i <= $n; $i++) {
        echo "
            <div class='gallery'>
                <div>CAGE{$i}</div>
                <img width=200 src='https://assets-prd.ignimgs.com/2022/07/19/nicolas-cage-in-con-air-1658251738731.jpg'>
            </div>
            ";
    }
    ?>

</body>

</html>