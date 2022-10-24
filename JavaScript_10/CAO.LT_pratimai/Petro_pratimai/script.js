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
