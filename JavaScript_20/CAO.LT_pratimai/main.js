// 1.Pratimas
// Parašykite pažadą, kuris visada resolve'insis po 5 sekundžių. Jam resolve - išoka alert "yes, veikia!". 
// Pažado aprašyme teks naudoti setTimeOut - daugiau apie jį čia.

// let myPromise = new Promise((resolve, reject) => {
//     setTimeout(() => resolve(alert("Yes, veikia!")), 5000)
//   }
//   )
  
//   myPromise.then

//   Antras būdas: (veikia identiškai, tik užrašymas labiau panašėja į CodeAcademy atsakymą)
// let myPromise2 = new Promise((resolve, reject) => {
//     setTimeout(() => resolve(), 5000)
//   }
//   )
  
//   myPromise2.then(() => alert("Yes, veikia!"));

// GALIAUSIAI, CAO.LT atsakymas, parodantis asinchroniškumą: 

// const pazadas = new Promise((resolve, reject) => {
//     setTimeout(() => resolve(), 5000)
//   })
  
//   pazadas.then(() => alert("Veikia"));
  
//   console.log("Šitas kodas pasileis pirmas, nors ir yra paskutinis. Tai būtent mūsų asinchroniškumas")
  

// 2.Pratimas
// Pakoreguokite pirmą pratimą, kad būtų 4/5 tikimybė, 
// jog resolve'ins po 5 sekundžių, ir 1/5 tikimybė, kad po 5 sekundžių bus reject.

// let myPromise3 = new Promise((resolve, reject) => {
//     const randomNumber = Math.floor(Math.random() * 6);
//     console.log(randomNumber);
  
//     setTimeout(() => {
//       if(randomNumber === 1) {
//         reject();
//       }
//       else {
//         resolve()
//       }
//     }, 5000)
    
//   })
  
//   myPromise3
//     .then(() => alert("Yes, veikia!"))
//     .catch(() => alert("Ooops, bad luck!"))

//   3.Pratimas
// Then bendrauja su kitu then. Pakoreguokite antrą pratimą, kad jei resolve'inasi pirmas pažadas - 
// pasileidžia then(), kuris paprasčiausiai grąžina žinutę "this is a message", 
// šią žinutę pagauna antrasis then() ir ją alertina. Prisiminkime - ką then() returnina, 
// tą pasigauna kitas then() kaip parametrą. Nelabai aišku? 
// Pasižiūrėk čia apie teoriją - o jei ne, užmesk akį į atsakymus.

// let myPromise4 = new Promise((resolve, reject) => {
//     const randomNumber = Math.floor(Math.random() * 6);
//     console.log(randomNumber);
  
//     setTimeout(() => {
//       if(randomNumber === 1) {
//         reject();
//       }
//       else {
//         resolve()
//       }
//     }, 5000)
    
//   })
  
//   myPromise4
//     .then(() => alert("Yes, veikia!"))
//     .then(() => alert("This is a message"))
//     .catch(() => alert("Ooops, bad luck!"))

  //TEISINGAS ATSAKYMAS, NAUDOJANTIS CAO.LT: 


  let myPromise5 = new Promise((resolve, reject) => {
    const randomNumber = Math.floor(Math.random() *5) + 1;
    console.log(randomNumber);
  
    setTimeout(() => {
      if(randomNumber === 1) {
        reject();
      }
      else {
        resolve()
      }
    }, 5000)
    
  })
  
  myPromise5
    .then(() => "This is a message") // sekantis then pasiima reikšmę kabutėse kaip savo parametrą? "This is a message 100 eiltutėje tampa mūsų message 101 eilutėje"
    .then((message) => alert(message))
    .catch(() => alert("Ooops, bad luck!"))