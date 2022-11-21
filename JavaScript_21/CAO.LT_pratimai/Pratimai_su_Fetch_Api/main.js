// 1. Pratimas
// Jums paskambino pažinčių portalas – jiems reikia greitai sukurti front-endą, kuris pasiimtų duomenis iš 
// https://randomuser.me/api/ ir juos atvaizduotų juos puslapyje. Duomenys galėtų būti atvaizduoti panašioje kortelėje. 
// Svarbu atvaizduoti nuotrauką, vardą, amžių ir el. pašto adresą.

let randomPerson = (user) => {
    let newImage = document.createElement("img");
    newImage.src = user.picture.large;
    newImage.alt = `${user.name.first} profile picture`;

    let newName = document.createElement("h2");
    newName.innerText = `${user.name.first} ${user.name.last}`;

    let age = document.createElement("h2");
    age.innerText = `${user.dob.age} years old`;
    age.style.cssText = "color: green";

    let email = document.createElement("h4");
    email.innerText = `${user.email}`;
    email.style.cssText = "color: grey";
    
    let newProfile = document.createElement("div");
    newProfile.append(newImage, newName, age, email);
    document.body.append(newProfile);
}

const findRandomUser = async () => {
  try {
    const response = await fetch("https://randomuser.me/api/");
    if(response.ok) {
    const data = await response.json();
    randomPerson(data.results[0]);
  }
} catch(error) {
  console.erro(error);
}
};

findRandomUser();

// 2.Pratimas
// Naudojant "https://boiling-reaches-93648.herokuapp.com/week-3/party" - pasiimkite informaciją iš šito puslapio 
// ir naudojant skirtingus array metodus, transformuokite duomenis bei išmeskite true/false ekrane - ar 
// "Kristupas Lapeika" yra VIP, ar ne?

// VEIKIA TIK SU KRISTUPU!

const findUser = (users, userName) => {
    const guest = users.find(person => person.name === userName);
    const answer = document.createElement("p");
    document.body.append(answer);
    console.log(guest);
      if(guest.vip) {
        answer.innerText = `${userName} yra VIP narys`
      } 
      else {
        answer.innerText = `${userName} nėra VIP narys`
      }
  }
  
  const checkPersonsStatus = async() => {
    try {
      const response = await fetch("https://boiling-reaches-93648.herokuapp.com/week-3/party");
      if(response.ok) {
        const data = await response.json();
        findUser(data, "Kristupas Lapeika")
      }
    } catch(error) {
      console.error(error);
    }
  }
  
  checkPersonsStatus();

//   JEI DOMINA IR KITI ŽMONĖS IŠ SĄRAŠO - Andriaus atsakymas: 

// const findUser = (users, userName) => {
//     const guest = users.find(person => person.name === userName) || [];
//     const answer = document.createElement("p");
//     document.body.append(answer);
//     if (guest.length === 0) {
//       return answer.innerText = `${userName} neegzistuoja`
//     } else if (guest.vip) {
//       answer.innerText = `${userName} yra VIP narys`
//     } else {
//       answer.innerText = `${userName} nėra VIP narys`
//     }
//   }
  
//   const checkPersonsStatus = async() => {
//     try {
//       const response = await fetch("https://boiling-reaches-93648.herokuapp.com/week-3/party");
//       if(response.ok) {
//         const data = await response.json();
//         findUser(data, "Kristupas Lapeika")
//       }
//     } catch(error) {
//       console.error(error);
//     }
//   }
  
//   checkPersonsStatus();

// 3.Pratimas
// Organizuojate vestuves - pasiimkite informaciją iš "https://boiling-reaches-93648.herokuapp.com/week-3/wedding" ir atvaizduokite lentelėje: 
// vardą, plusOne ir attending. Parašykite taip, kad plusOne ir attending būtų ne true/false, bet "+" arba "-".


const addUserToGuestList = (user) => {
    user.forEach(guest => {
      let newRow = document.createElement("tr");
      let myTable = document.querySelector("tbody");
  
      let nameCell = document.createElement("td");
      nameCell.innerText = `${guest.name}`;
  
      let attendingCell = document.createElement("td");
      if (guest.attending) {
        attendingCell.innerText = "+"
      } else {
        attendingCell.innerText = "-"
      };
  
      let plusOneCell = document.createElement("td");
      if (guest.plusOne) {
        plusOneCell.innerText = "+"
      } else {
        plusOneCell.innerText = "-"
      };
  
      newRow.append(nameCell, attendingCell, plusOneCell);
      myTable.append(newRow);
    })
  };
  
  const showFinalTable = async () => {
    try {
      const response = await fetch("https://boiling-reaches-93648.herokuapp.com/week-3/party");
      if (response.ok) {
        const data = await response.json();
        addUserToGuestList(data);
      }
    } catch (error) {
      console.error(error);
    }
  };
  
  showFinalTable();