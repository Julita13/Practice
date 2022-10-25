const html = document.body;
html.style.cssText = 'background: blue; margin: 0 auto;';
const mygtukas = document.createElement('button');
html.append(mygtukas);
mygtukas.innerText = 'Mygtukas';
mygtukas.classList.add('red');
mygtukas.setAttribute('onclick', 'toggle()')

function toggle() {
  const y = self.innerHeight * Math.random();
  const x = self.innerWidth * Math.random();
  console.log(y, x);
  mygtukas.classList.contains('red') ? mygtukas.classList.remove('red') : mygtukas.classList.add('red');
  mygtukas.style.cssText = `top: ${y}px; left: ${x}px;`;
}