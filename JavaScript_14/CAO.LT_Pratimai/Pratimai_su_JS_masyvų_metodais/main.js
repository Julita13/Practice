const people = [
    {
      name: "Petras",
      age: "18"
    },
    {
      name: "Jonas",
      age: 15
    },
    {
      name: "Antanas",
      age: 20
    },
    {
      name: "Urtė",
      age: 10
    },
    {
      name: "Diana",
      age: 25
    },
    {
      name: "Ieva",
      age: 16
    }
  ];

//   1.Pratimas
//  Prafiltruojame masyvą, kad rodytų tik pilnamečius.
// Mano sprendimas: 
const adults = people.filter(amžius => amžius.age >= 18);
console.log(adults);
console.log(people.filter(x => x.age >= 18));

// 2.Pratimas
// Pakoreguojame aukščiau nurodytą pratimą, kad pilnamečių array rodytų tik vardus (amžius jau nesvarbu). 
// Tai rezultatas turi būti: ["Petras", "Antanas", "Diana"].
console.log(adults.map(person => person.name))

// 3.Pratimas
// Antro pratimo array A-Z tvarka išrykiuokite. Optimizuokite kodą, kad visas veiksmas tilptų į vieną eilutę.

const adultsNames = adults.map(person => person.name);
console.log(adultsNames.sort());

// ATSAKYMAS GRYNAI Į 3 PRATIMĄ PAGAL PARAMETRUS: 
console.log(people.filter(amžius => amžius.age >= 18).map(person => person.name).sort());

// 4. Pratimas
// Sukurkite funkciją. Ji priims vieną argumentą - array su objektais, kurie turės du parametrus - name ir price. 
// Grąžins - brangiausią ir pigiausią prekes. Turi veikti padavus neribotą kiekį elementų (pavyzdyje apačioje - tik du).


const prekės = [
    {
      name: "lemonade",
      price: 50,
    },
    {
      name: "lime",
      price: 10,
    },
    {
      name: "juice",
      price: 2,
    },
    {
      name: "champagne",
      price: 150,
    }
  ]
  
  function fn(items) {
    items.sort((a, b) => a.price - b.price)
    return `pigiausia prekė: ${items[0].name}, brangiausia prekė: ${items[items.length - 1].name}`
  }
  
  console.log(fn(prekės))