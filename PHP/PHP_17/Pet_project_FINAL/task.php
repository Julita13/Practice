<?php


// IV Atnaujinti failo įrašą





// 5. Forma pateikiama POST metodu į update_contest.php, kuriame yra identiškas kodas, kaip ir register_content.php, tik po sėkmingos 

// validacijos kviečiama funkcija updatePet() 

// 6. Forma, kartu su įvestais duomenimis, turi perduoti ir gyvūno id, kaip nematomą, nemodifikuojamą įvesties laukelį(tipas hidden). 

// 7. Sukurti naują funkciją updatePet() pet_functions.php faile. 

// 8. updatePet() priima gyvūno id ir duomenis iš update formos. 

// 9. Pagal id surandamas įrašas pet.json faile, paverčiamas į masyvą ir jo duomenys pakeičiami atėjusiais iš formos. 

// 10. Vėl padaromas įrašas į pet.json su atnaujinimais. 