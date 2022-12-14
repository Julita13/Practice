const html = document.body;
const newButton = document.createElement("button");
newButton.innerText = "JS created mygtukas";


html.style.cssText = "background: blue; margin: 0 auto";
html.append(newButton);
newButton.classList.add("red");
// newButton.setAttribute("onclick", console.log("pink"));
// newButton.onclick = () => console.log("pink");
newButton.onclick = () => {
  newButton.classList.contains("red") ? newButton.classList.remove("red"): newButton.classList.add("red");
}


// newButton.setAttribute('onclick', 'toggle()')
// // newButton.onclick = () => {
// //   // newButton.classList.contains('red') ? newButton.classList.remove('red') : newButton.classList.add('red');
// //   toggle();
// // }

// function toggle() {
// newButton.classList.contains('red') ? newButton.classList.remove('red') : newButton.classList.add('red');
// newButton.style.cssText = "display: block; margin: 0 auto"
// }


// ir dar: ŠOKINĖJANTIS MYGTUKAS
//     newButton.onclick = () => {
//     const param = (new Date()).getSeconds() * 10 * Math.random();
//     console.log(param);
//     newButton.classList.contains("red") ? newButton.classList.remove("red"): newButton.classList.add("red");
//     newButton.style.cssText = `display: block; margin: ${param}px; `
//   }