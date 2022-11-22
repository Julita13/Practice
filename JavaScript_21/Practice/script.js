async function getUsers() {
    try {
      const response = await fetch("https://testimonialapi.toolcarton.com/api");
      if(response.ok) {
        const data = await response.json();
        renderUsers(data); // ŠITOJE VIETOJE GALIMA TIK ĮRAŠYTI NAUJĄ FUNKCIJĄ
      }
  
    } catch (error) {
      console.log(`message: `, error.message);
    }
  };
  
  function renderUsers(users) {
    console.log(users);
    const advancedUsers = users.filter(user => user.rating >= 4.5); //.sort((a, b) => a.rating - b.rating); // sortina didėjimo tvarka
    const otherUsers = users.filter(user => user.rating < 4.5).sort((a, b) => b.rating - a.rating); // sortina mažėjimo tvarka
  
    advancedUsers.sort((a, b) => a.rating - b.rating);
  
    console.log(otherUsers);
    console.log(advancedUsers);
   
    const userRatingLabel = document.createElement("h1");
    userRatingLabel.innerText = "Vartotojai su aukštu reitingu"
    document.body.append(userRatingLabel);
    createUserCard(advancedUsers);
  
    const poorUserRatingLabel = document.createElement("h1");
    poorUserRatingLabel.innerText = "Vartotojai su žemu reitingu";
    document.body.append(poorUserRatingLabel);
    createUserCard(otherUsers);
  };
  
  function createUserCard(users) {
    users.forEach(user => {
      const image = document.createElement("img");
      image.src = user.avatar;
  
      const name = document.createElement("h2");
      name.innerText = `${user.name}, reitingas: ${user.rating}`;
  
      const lorem = document.createElement("p");
      lorem.innerText = user.lorem;
  
      const divEl = document.createElement("div");
      const music = createAudioElement(user.audio);
  
      const country = user.location.split(", ");
      const designation = document.createElement("h3");
      const location = country.length === 1 ? country[0]: country[1];
      // const upperDesignation = user.designation.charAt(0).toUpperCase;
      designation.innerText = `${user.designation}, Location: ${location}`;
      console.log(country[1]);
  
      divEl.append(image, name, designation, music, lorem);
      document.body.append(divEl);
    })
  };
  
  function createAudioElement(audio) {
    let x = document.createElement("audio");
    if (x.canPlayType("audio/mpeg")) {
      x.setAttribute("src", audio);
    } 
    x.setAttribute("controls", "controls");
    return x;
  }
  
  getUsers();
  

  
  // norint pasižiūrėti, kas yra paimama iš puslapio, reikia spausti F12, tada Network, 
  // run, ir ten prie response - api
  
  // Užduotis
  // išfiltruoti userius, kurių reitingai yra didesni už 4.5