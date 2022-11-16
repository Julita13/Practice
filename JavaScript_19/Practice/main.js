// DUOMENŲ SAUGOJIMAS
// WEB APLIKACIJA GALI VEIKTI BE INTERNETO RYŠIO IR PAGREITINA VEIKIMĄ
// WEB STORAGE API - tai mechanizmai, suteikiantys galimybę išsaugoti informaciją. 

// COOKIES
// Atėjo su GDPR.
// NAUDOJAMI: saugoti sesijos informacijai, būseną tarp puslapių, atskirti vartotoją, gali saugoti tik tekstą. Sulėtina tinklo testą.


function setCookie(cname, cvalue, exdays) {
    const today = new Date();
    today.setTime(today.getTime() + (exdays * 24 * 60 *60 *1000));
    const expires = today.toUTCString(); 
    document.cookie = `${cname}=${cvalue};expires=${expires}`;
  }
  
  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  
  function checkCookie() {
    let myName = getCookie("userName");
    if(myName === "") {
      myName = prompt("Įveskite savo vardą:", "");
      if(myName !== "") {
        setCookie("userName", myName, 30);
      }
    } else {
      alert(`Labas, ` + myName)
    }
  }
  
  checkCookie();