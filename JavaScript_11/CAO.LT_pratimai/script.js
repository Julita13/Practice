const body = document.body;
body.style.backgroundColor = "#e1eef4"

const person = document.createElement("h1");
person.innerText = "Trent Walton";
person.style.cssText = "color: #53575a; text-align: center;"

const occupation = document.createElement("h2");
occupation.innerText = "Founder & ⅓ of @paravelinc";
occupation.style.cssText = "color: #b1b1b1; text-align: center"

const city = document.createElement("h2");
city.innerText = "Austin, TX";
city.style.cssText = "color: #b1b1b1; text-align: center"

const photo = document.createElement("img");
photo.src = "https://www.kindpng.com/picc/m/719-7191738_round-png-image-man-transparent-png.png";
photo.style.cssText = "width: 160px; display: block; margin-left: auto; margin-right: auto; margin-top: -11rem; border-radius: 50%;" // tai visgi neigiami margin'ai net CAO??? :)

const container = document.createElement("div");
container.append(person, occupation, city);
container.prepend(photo);
container.style.cssText = "margin: 5rem 3rem; background-color: white; padding: 7rem 0 1rem 0; border-radius: 1.5rem 1.5rem 0 0"
body.append(container);
