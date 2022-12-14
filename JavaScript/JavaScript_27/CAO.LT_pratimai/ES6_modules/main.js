import User, { printName, printAge } from "./user.js"
// import U, { printName as printUserName} - defaultines reikšmes galima keisti iškart, viską, kas yra riestiniuose skliaustuose - galima keisti 
// kaip pavyzdyje aukščiau - printName as printUserName


const user = new User("Julita", 33);
console.log(user);
printName(user)
printAge(user)

