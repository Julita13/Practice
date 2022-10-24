const person = {
    cars: [
        {
            name: "BMW",
            model: "X1", 
            params: ["navigation", "CD player"],
        },
    ],
    sayHello: () => alert("Hello!"),
};

console.log(person.cars);
console.log(person.cars[0]);
console.log(person.cars[0].params);
console.log(person.cars[0].params[0]);


console.log(document.location);

if (document.location.search === "?color=red") {
    document.body.style.background = "green";
};

document.querySelector("button").addEventListener("click", () => {
    document.location.replace("http://google.com");
})

//  tik tuo atveju, jei nurodai: http://127.0.0.1:5500/JavaScript_10/CAO.LT_pratimai/Petro_pratimai/index.html?color=red

//  Document Location valdymas:
// Nuėjus į Delfi > naujausi > straipsnis --- kaip grįžti į pradinį puslapį? 
// ogi pasinaudojus: 
// document.location.replace("/")