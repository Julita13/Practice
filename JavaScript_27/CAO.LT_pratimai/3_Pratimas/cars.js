export function appendingCars(app) {
    const cars = ["BMW", "VW", "AUDI", "MB"];
    app.innerHTML += `<ul>` + cars.map(function(car) {
        return '<li>' + car + '</li>';
    }).join('') + `</ul>`;
    console.log(cars)
}
