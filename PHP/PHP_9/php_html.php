<?php 

//Tinklapiams atvaizduoti reikalinga HTML žymėjimo kalba. Tinklapius atvaizduoja naršyklės, kurios supranta HTML, CSS ir JS. 
//Tinklapiai nesupranta PHP. 

//HTML kalba yra tik žymėjimo kalba ir su ja kuriamas statinis tinklapio turinys. 

//Kad turinys būtų dinaminis, t.y. HTML kodas atsirastų, pasikeistų savarankiškai (pagal iš anksto numatytas sąlygas), 
//reikalinga programavimo kalbos pagalba. 

//PHP yra bendrinė programavimo kalba, sukurta tinklapių turinį padaryti dinaminiu. 

//PHP gali būti įtrauktas į HTML kodą, kad jį sugeneruotų, papildytų. 

//WEB serveris PHP dokumentą atpažįsta pagal failo plėtinį ".php'. 

//...php faile galima rašyti tiek HTML/CSS, tiek PHP, tiek JS kodą. 

//.php faile esantis PHP kodas yra išsprendžiamas pasitelkiant PHP interpretatorių, t.y. PHP programą, kuri yra nurodyta serveriui naudoti ir rezultatas bus išvestas, ten kur nurodoma.

//Dokumentai į naršyklę grąžinami tekstiniu formatu, todėl jame esantis PHP kodo rezultatas išvedamas kaip tekstas. 

//Bet koks PHP rezultatas turi būti išvestas su print ar echo, kad būtų įtrauktas į grąžinamą dokumentą. 

//Print ar echo išveda tekstą (string), taigi vias PHP logikos rezultatas visada bus išvestas kaip TEKSTAS. 

//PHP rezultatas dokumente atsiras toje vietoje, kur bus padaromas išvedimas, nepriklausomai nuo ti, kur vyko visa PHP logika. Pvz.: galima paleisti 
//funkciją ir jos rezultatą priskirti kintamajam, o tą kintamojo vertė išvesti visai kitoje vietoje ar kitame faile. 

// echo "Rezultatas";
// echo "<div>Hello, world!</div>";

// $number = 11;

// function moreOrLess(int $number): string{
//     if ($number < 12) {
//         $result = "Mažiau";
//     } else {
//         $result = 'Daugiau';
//     }
//     return $result;
// };

// echo moreOrLess(11);
// echo "<div>Labas, Krabas!</div>";


function gallery(string $title, string $content, string $image, int $repeat):void {
    $myTitle = "
        <article>
            <heading> 
                <h1>$title
            </heading>
        </article>";
    $myContent = "<p>$content</p>";
    $myImage = "<img src = $image>";
    for($i = 0; $i < $repeat; $i++) {
        echo "$myTitle $myContent $myImage";
    }
};

echo gallery("Katinas", "Miau", "https://t3.ftcdn.net/jpg/02/95/94/94/360_F_295949484_8BrlWkTrPXTYzgMn3UebDl1O13PcVNMU.jpg", 7);
?>
