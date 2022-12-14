//let mylesiu = new Promise((resolve, reject) => {
  //setTimeout(() => resolve(), 1000) // viena sekundė TimeOut'ui
  // if(Petras.tampa.geras) {
  //   resolve()
  // }
  // else {
  //   reject()
  // }
//})

//mylesiu
  // .then(() => console.log("susitaikom")) // kabliataškio šioje vietoje nereikia!!
  // .catch(() => console.log("radau kitą, geresnį"))



// let fetch = new Promise((resolve, reject) => {
//   console.log("EIK Į URL");
//   console.log("SIŲSK TĄ JSON'ą");
//   if(file.ok) {
//     resolve(file);
//   }
//   else {
//     reject(error)
//   }
// })


// fetch("https://randomuser.me/api/")
// .then(function(file){return file.json()})
// .then(function(pasiimuFileIsVirsaus){
//   console.log(pasiimuFileIsVirsaus.results[0])
// } )

// JSON - JavaScript Object Notation

fetch("https://randomuser.me/api/")
  .then(response => response.json())
  .then(data => console.log(data))

  //funkcija, kuri yra paduodama į new Promise vadinama EXECUTOR.   
//   let promise = new Promise(function(resolve, reject) {
//     // executor (the producing code, "singer")
//   });
// 
// resolve(value) — if the job is finished successfully, with result value.
// reject(error) — if an error has occurred, error is the error object.
// JEI EXECUTORIAUS TASKAS YRA RESOLVINAMAS, visi kiti rejectai, setTimeout'ai ir panašiai nėra vykdomi ir lieka ignoruojami.
// A finally handler has no arguments. In finally we don’t know whether the promise is successful or not. 

// function loadScript(src) {
//   return new Promise(function(resolve, reject) {
//     let script = document.createElement('script');
//     script.src = src;

//     script.onload = () => resolve(script);
//     script.onerror = () => reject(new Error(`Script load error for ${src}`));

//     document.head.append(script);
//   });
// }

// let promise = loadScript("https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.js");

// promise.then(
//   script => alert(`${script.src} is loaded!`),
//   error => alert(`Error: ${error.message}`)
// );

// promise.then(script => alert('Another handler...'));
// Kodas su pažadais turi augti iš viršaus į apačią, ne į dešinę
// We may have as many .then handlers as we want, and then use a single .catch at the end to handle errors in all of them.

//ASYNC/AWAIT

// async function f() {
//   return 1;
// }

// f().then(alert); // 1


// works only inside async functions
// let value = await promise;

// The setTimeout() method calls a function after a number of milliseconds.
// 1 second = 1000 milliseconds.

// The setTimeout() is executed only once.

// If you need repeated executions, use setInterval() instead.

// Use the clearTimeout() method to prevent the function from starting.