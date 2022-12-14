// 1. Pratimas
// Sukurk formą, kuri leis įrašyti vardą - jis bus išsaugojamas į cookies. 
// Jei vardas jau egzistuoja - išmeta tik vardą ir mygtuką, su kuriuo cookies ištrinamas. 
// Jei neegzistuoja - formą.

// function setCookie(cname, cvalue, exdays) {
//     const d = new Date();
//     d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
//     let expires = "expires=" + d.toUTCString();
//     document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
//   }
  
//   function getCookie(cname) {
//     let name = cname + "=";
//     let decodedCookie = decodeURIComponent(document.cookie);
//     let ca = decodedCookie.split(';');
//     for (let i = 0; i < ca.length; i++) {
//       let c = ca[i];
//       while (c.charAt(0) == ' ') {
//         c = c.substring(1);
//       }
//       if (c.indexOf(name) == 0) {
//         return c.substring(name.length, c.length);
//       }
//     }
//     return "";
//   }
  
//   const firstForm = document.querySelector("#first-task");
//   const output = document.querySelector("#small");
//   const name = getCookie("userName");
  
//   // Jeigu puslapis būtų perkraunamas
//   if (getCookie(name)) {
//     firstForm.classList.add('hidden');
//     output.classList.remove('hidden');
//   } else {
//     firstForm.classList.remove('hidden');
//     output.classList.add('hidden');
//   }
  
//   firstForm.addEventListener("submit", (e) => {
//     e.preventDefault();
//     const userName = document.querySelector("input[name=vardas]").value;
//     setCookie("name", userName, 1);
//     output.innerText = userName;
//     firstForm.classList.add("hidden");
//     output.classList.remove("hidden");
//     console.log(userName);
//   });
  
//   document.querySelector("#delete").addEventListener("click", (e) => {
//     document.cookie = "";
//     output.innerText = "";
//     output.classList.add("hidden");
//     firstForm.classList.remove("hidden");
//   })
  

//2.Pratimas
// Į localStorage, įrašykite savo vardą, pavardę, aprašymą, ir nuorodą į profilio nuotrauką. 
// Informaciją įrašykite pirmą kartą užkrovus puslapį, o vėliau ją atvaizduokite.

const myProfile = {
  firstName: "Julita",
  lastName: "Mažuolytė",
  picture: "https://st2.depositphotos.com/1730367/7727/i/950/depositphotos_77275520-stock-photo-crazy-woman-screaming.jpg",
  description: "Me trying to understand JS" 
}

localStorage.setItem("profile", JSON.stringify(myProfile));
console.log(localStorage.getItem("profile"));

const renderProfileCard = (profile) => {
  const img = document.createElement("img");
  img.width = '200';
  img.src = profile.picture;
  img.alt =  `${profile.firstName} ${myProfile.lastName} profile picture`;

  const name = document.createElement("h4");
  name.innerText = `${profile.firstName} ${profile.lastName}`;

  const description = document.createElement("h5");
  description.innerText = profile.description;

  const card = document.createElement("div");
  card.append(img, name, description);
  document.body.append(card);
};

const profileInfoFromLocalStorage = JSON.parse(localStorage.getItem("profile"));
renderProfileCard(profileInfoFromLocalStorage);

// 3.Pratimas
// Sukurkite puslapį, kuriame būtų forma su vienu input - fullName. Įvedus vardą ir pavardę, juos padalina į dvi dalis 
// (name ir surname). Vardą ir pavardę įdeda į objektą, o objektą - į array. Šį array išsaugo localStorage. 
// Po forma sukurkite lentelę joje atvaizduokite informaciją iš localStorage.


// NEPABAIGTAS VARIANTAS


const thirdForm = document.querySelector("#third-task");

// const newRow = document.createElement("td");


thirdForm.addEventListener("submit", (e) => {
  e.preventDefault(); 
  const myName = document.querySelector("input[name=fullName]").value;
  const splittedName = myName.split(" ");
  const newObject = {
    name: splittedName[0],
    surname: splittedName[1],
  };
  const newPerson = [];
  newPerson.push(newObject); //iki čia viskas veikia
  console.log(newPerson);
  localStorage.setItem("myProfile", newPerson); 
})

// reikia naudoti JSON.parse()


// https://jsitor.com/zQpmK_H0QD