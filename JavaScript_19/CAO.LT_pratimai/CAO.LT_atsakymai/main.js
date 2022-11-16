// 1.Pratimas
// Šiame atsakyme nenaudojam Cookie Store API. 
// Funckijos paimtos iš https://www.w3schools.com/js/js_cookies.asp
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  
  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  
  const form = document.querySelector('form');
  const output = document.getElementById('output');
  const name = getCookie('name');
  
  // Jeigu puslapis būtų perkraunamas
  if (getCookie(name)) {
    form.classList.add('hidden');
    output.classList.remove('hidden');
  } else {
    form.classList.remove('hidden');
    output.classList.add('hidden');
  }
  
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const name = document.querySelector('input[name="name"]').value;
    setCookie('name', name, 1);
    document.getElementById('name').innerText = name;
    form.classList.add('hidden');
    output.classList.remove('hidden');
  });
  
  document.getElementById('erase').addEventListener('click', (event) => {
    document.cookie = '';
    document.getElementById('name').innerText = '';
    output.classList.add('hidden');
    form.classList.remove('hidden');
  });
  

  // 2. Pratimas
  // const profileInfo = {
  //   firstName: 'John',
  //   lastName: 'Snow',
  //   picture: 'https://tele1.com.tr/wp-content/uploads/2019/05/john-snow.jpg',
  //   description: 'Jon Snow is a fictional character in the A Song of Ice and Fire series of fantasy novels by American author George R. R. Martin, and its television adaptation Game of Thrones, in which he is portrayed by English actor Kit Harington. In the novels, he is a prominent point of view character.'
  // }
  // localStorage.setItem('profile', JSON.stringify(profileInfo));
  
  // const renderProfileCard = (profile) => {
  //   const img = document.createElement('img');
  //   img.width = '200';
  //   img.src = profile.picture;
  //   img.alt = `${profile.firstName} ${profileInfo.lastName} profile picture`;
  
  //   const name = document.createElement('h4');
  //   name.innerText = `${profile.firstName} ${profile.firstName}`;
  
  //   const description = document.createElement('h5');
  //   description.innerText = profile.description;
  
  //   const card = document.createElement('div');
  //   card.append(img, name, description);
  //   document.body.append(card);
  // };
  
  // const profileInfoFromLocalStorage = JSON.parse(localStorage.getItem('profile'));
  // renderProfileCard(profileInfoFromLocalStorage);

  // 3.Pratimas
  const LOCAL_STORAGE_ITEM_KEY = 'users';

const renderUsersTable = () => {
  const users = JSON.parse(localStorage.getItem(LOCAL_STORAGE_ITEM_KEY));
  const tbody = document.querySelector('tbody');
  tbody.innerHTML = '';
  users && users.forEach(user => {
    const name = document.createElement('td');
    name.innerText = user.name;

    const surname = document.createElement('td');
    surname.innerText = user.surname;

    const tr = document.createElement('tr');
    tr.append(name, surname);
    tbody.append(tr);
  })
};

document.querySelector('form').addEventListener('submit', (event) => {
  event.preventDefault();
  const fullName = event.target.querySelector('input[name="name"]').value;
  const [name, surname] = fullName.split(' ');

  const usersInlocalStorage = JSON.parse(localStorage.getItem(LOCAL_STORAGE_ITEM_KEY));
  if (usersInlocalStorage && usersInlocalStorage.length) {
    localStorage.setItem(LOCAL_STORAGE_ITEM_KEY, JSON.stringify([...usersInlocalStorage, { name, surname }]));
  } else {
    localStorage.setItem(LOCAL_STORAGE_ITEM_KEY, JSON.stringify([{ name, surname }]));
  }
  renderUsersTable();
});

renderUsersTable();
