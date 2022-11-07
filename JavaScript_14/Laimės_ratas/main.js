const students = [
    { color: randomColor(), label: 'Edita' },
    { color: randomColor(), label: 'Gintas' },
    { color: randomColor(), label: 'Milda' },
    { color: randomColor(), label: 'Dovilė' },
    { color: randomColor(), label: 'Eglė N.' },
    { color: randomColor(), label: 'Marina' },
    { color: randomColor(), label: 'Andrius' },
    { color: randomColor(), label: 'Žygimantas' },
    { color: randomColor(), label: 'Marius' },
    { color: randomColor(), label: 'Vytautas' },
    { color: randomColor(), label: 'Julita' },
    { color: randomColor(), label: 'Gediminas' },
    { color: randomColor(), label: 'Ana' },
    { color: randomColor(), label: 'Jevgenij' },
    { color: randomColor(), label: 'Tomas' },
    { color: randomColor(), label: 'Aušra' },
    { color: randomColor(), label: 'Virginija' },
    { color: randomColor(), label: 'Rūta' },
    { color: randomColor(), label: 'Darius' },
    { color: randomColor(), label: 'Eglė P.' },
    { color: randomColor(), label: 'Giedrius' },
  ];
  
  const skip = [];
  
  const sectors = students.filter((el) => skip.indexOf(el.label) < 0 );
  
  const rand = (m, M) => Math.random() * (M - m) + m
  const tot = sectors.length;
  const spinEl = document.querySelector('#spin');
  const ctx = document.querySelector('#wheel').getContext('2d');
  const dia = ctx.canvas.width;
  const rad = dia / 2;
  const PI = Math.PI;
  const TAU = 2 * PI;
  const arc = TAU / sectors.length;
  
  const friction = 0.991; // 0.995=soft, 0.99=mid, 0.98=hard
  let angVel = 0; // Angular velocity
  let ang = 0; // Angle in radians
  
  const getIndex = () => Math.floor(tot - (ang / TAU) * tot) % tot;
  
  function drawSector(sector, i) {
    const ang = arc * i;
    ctx.save();
    // COLOR
    ctx.beginPath();
    ctx.fillStyle = sector.color;
    ctx.moveTo(rad, rad);
    ctx.arc(rad, rad, rad, ang, ang + arc);
    ctx.lineTo(rad, rad);
    ctx.fill();
    // TEXT
    ctx.translate(rad, rad);
    ctx.rotate(ang + arc / 2);
    ctx.textAlign = 'right';
    ctx.fillStyle = '#fff';
    ctx.font = 'bold 24px sans-serif';
    ctx.fillText(sector.label, rad - 10, 10);
    //
    ctx.restore();
  }
  
  function rotate() {
    const sector = sectors[getIndex()];
    ctx.canvas.style.transform = `rotate(${ang - PI / 2}rad)`;
    spinEl.textContent = !angVel ? 'SUKAM' : sector.label;
    spinEl.style.background = sector.color;
  }
  
  function frame() {
    if (!angVel) return
    angVel *= friction; // Decrement velocity by friction
    if (angVel < 0.002) angVel = 0; // Bring to stop
    ang += angVel; // Update angle
    ang %= TAU; // Normalize angle
    rotate();
  }
  
  function engine() {
    frame();
    requestAnimationFrame(engine);
  }
  
  function init() {
    sectors.forEach(drawSector);
    rotate(); // Initial rotation
    engine() // Start engine
    spinEl.addEventListener('click', () => {
      if (!angVel) angVel = rand(0.25, 0.45);
    })
  }
  
  init();
  
  function randomColor() {
    return '#' + Math.floor(Math.random() * 16777215).toString(16);
  }