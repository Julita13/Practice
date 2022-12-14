const apiUrl = 'https://golden-whispering-show.glitch.me/';

async function getData(url) {
  try {
    const response = await fetch(url);
    if (response.ok){
      const data = await response.json();
      renderProducts(data);
      // return data;
    } else {
      console.log('Error: could not get data');
    }
  } catch (err) {
    console.log('Error:', err.message);
  }
}

async function removeProduct(url, id) {
  try {
    const response = await fetch(url+id, {
      method: 'DELETE',
      headers: {
        'Content-Type': 'application/json'
      }
    })
    if(response.ok){
      getData(apiUrl);
    }
  } catch (err) {
    console.log('Error: ', err.message);
  }
}

async function addProduct(url, data) {
  try {
    const response = await fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data),
    })
    if (response.ok) {
      getData(apiUrl);
    }
  } catch (err) {
    console.log('Error: ', err.message);
  }
}

function renderProducts(data) {
  const content = document.querySelector('.products');
  content.innerHTML = '';
  data.forEach(product => {
    const card = document.createElement('div');
    card.className = 'card';
    const img = document.createElement('img');
    img.src = product.image;
    const title = document.createElement('p');
    title.innerText = product.title;
    const price = document.createElement('h3');
    price.innerText = `€${product.price}`;
    const removeButton = document.createElement('button');
    removeButton.innerText = 'Remove';
    removeButton.addEventListener('click', () => removeProduct(apiUrl, product.id));
    card.append(img, title, price, removeButton);
    content.appendChild(card);
  });
}

async function init() {
  getData(apiUrl);
  const form = document.querySelector('form');
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const img = form.elements.namedItem('image');
    const title = form.elements.namedItem('title');
    const price = form.elements.namedItem('price');
    const data = {
      image: img.value,
      title: title.value,
      price: price.value
    }
    addProduct(apiUrl, data);
  })
}

init();
