// 1.Pratimas
// Parašykite metodą klasėje, kuris pasakys ar žmogus yra pilnametis ar ne, pagal jo amžių.

// Pvz.:
// const p1 = new Person("Petras", 16)
// p1.compareAge() => "Petras is old enough to drink";

// Nusikopijuokite apačioje esantį kodą ir jį papildykite:

// class Person {
// 	constructor(name, age) {
// 		this.name = name;
// 		this.age = age;
// 	}
// 	compareAge(other) {
// 		// Rašyti kodą čia
// 	}
// }

class Person {
    constructor(name, age) {
      this.name = name;
      this.age = age;
    }
    compareAge() {
      if(this.age <= 16) {
        console.log(`${this.name} is too young to drink`)
      } else {
        console.log(`${this.name} is old enough to drink`)
      }
  }}
  
  const p1 = new Person("Petras", 22)
  p1.compareAge();

//   2.Pratimas
// Parašykit funkciją, kuri priimtu mąsyvą sudarytą iš skaičių ir raidžių. Grąžinkite masyvą tik su skaičiais.
// pvz: fn([1, 5, "a", "g", "z", 6]) => [1, 5, 6]