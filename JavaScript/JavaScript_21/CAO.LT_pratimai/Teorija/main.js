// API - APPLICATION PROGRAMMING INTERFACE - basically it is something,
// that allows one peace of software to talk to another. Front + back.

// REST - REPRESENTATIONAL STATE TRANSFER

// https://graph.facebook.com/youtube?fields=id,name,likes

// http://maps.googleapis.com/maps/api/geocode/json

// maps.googleapis.com / maps / api / geocode / json ? address = chicago & sensor=false

// METHODS: 

// GET AND POST

// PAGRINDINIS FETCH: 
// fetch(url)
//   .then(res => res.json())
//   .then(data => console.log(data))
//   .catch(e => console.log(e.message))

// PAVYZDIS IŠ CAO.LT

// let response = await fetch(url);

// if (response.ok) { // if HTTP-status is 200-299
//   // get the response body (the method explained below)
//   let json = await response.json();
// } else {
//   alert("HTTP-Error: " + response.status);
// }