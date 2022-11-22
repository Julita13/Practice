// Pratimas su Fetch metodu ir duomenų filtravimu

// Duomenis pasiimsime iš: https://magnetic-melon-yam.glitch.me

//     Naudojant tik JS, sukurkite lentelę ir į ją įrašykite duomenis (id, name, city, fav_color).
//     Naudojant JS metodus, padalinkite vardą į dvi dalis: vardą ir pavardę (lentelėje).
//     Pridėkite prie lentelės (tarp id ir name) nuotrauką.
//     Sukurkite checkbox virš lentelės su JS. Jį paspaudus, rodys tik tuos žmones, kurie yra VIP.
//     Sukurkite virš lentelės ir search laukelį (forma su input type search ir mygtukas). 
//     Suvedus duomenis, lentelėje turi prasifiltruoti pagal vardą arba pavardę (fullname contains search string). 
//     Capitalizacija turėtų būti nesvarbi.


const vipCheckBox = document.createElement("input");
vipCheckBox.type = "checkbox";
vipCheckBox.id = "checkVipStatus";

const vipLabel = document.createElement("label");
vipLabel.setAttribute("for", "checkVipStatus");
vipLabel.innerText = "VIP only";

document.body.append(vipLabel, vipCheckBox);


const createEmptyTable = () => {
    const myTable = document.createElement("table");
    const myTableHead = document.createElement("thead");
    const myTableBody = document.createElement("tbody");
    const myHeadRow = document.createElement("tr");

    const idHead = document.createElement("th");
    idHead.innerText = "ID numeris";

    const pictureHead = document.createElement("th");
    pictureHead.innerText = "Nuotrauka";

    const vardasHead = document.createElement("th");
    vardasHead.innerText = "Vardas";

    const surnameHead = document.createElement("th");
    surnameHead.innerText = "Pavardė";

    const cityHead = document.createElement("th");
    cityHead.innerText = "Miestas";

    const colorHead = document.createElement("th");
    colorHead.innerText = "Mėgstama spalva";

    myHeadRow.append(idHead, pictureHead, vardasHead, surnameHead, cityHead, colorHead);
    myTableHead.append(myHeadRow);
    myTable.append(myTableHead, myTableBody);

    document.body.append(myTable);
  };

createEmptyTable();

function showRobots(robots) {
  const tableBody = document.querySelector("tbody");
  tableBody.innerHTML = "";

  robots.forEach(robot => {
    const myId = document.createElement("td");
    myId.innerText = robot.id;

    const robotPic = document.createElement("img");
    robotPic.src = robot.image;
    const photo = document.createElement("td");
    photo.append(robotPic);

    const fullName = robot.name;
    const splittedName = fullName.split(" ");

    const vardas = document.createElement("td");
    vardas.innerText = splittedName[0];

    const surname = document.createElement("td");
    surname.innerText = splittedName[1];

    const city = document.createElement("td");
    city.innerText = robot.city;

    const color = document.createElement("td");
    color.innerText = robot.fav_color;

    const newRow = document.createElement("tr");
    newRow.append(myId, photo, vardas, surname, city, color);
    tableBody.append(newRow);
  })
};

const ourCheckBox = document.querySelector("input[type=checkbox]");

ourCheckBox.addEventListener("change", (event) => {
  if (event.target.checked) {
    console.log("VIPs only selected");
    // showRobots(data.filter(robot => robot.vip));
  } else {
    console.log("VIPs are not selected");
    // showRobots(data);
}
});

async function getUsers() {
  try {
    const response = await fetch("https://magnetic-melon-yam.glitch.me");
    if (response.ok) {
      const data = await response.json();
      console.log(data);
      showRobots(data);
    }
  } catch (error) {
    console.log(`message: `, error.message);
  }
};

getUsers();

