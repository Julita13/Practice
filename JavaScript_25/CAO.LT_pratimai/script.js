const baseUrl = "https://golden-whispering-show.glitch.me";

const myForm = document.querySelector("#my-form");

function showProducts(products) {
  const productsWindow = document.querySelector("#show-products");
  productsWindow.innerHTML = "";

  products.forEach(product => {
    const productPhoto = document.createElement("img");
    productPhoto.src = product.image;
    productPhoto.style.cssText = "width: 90%; height: 90%; margin-top: 0.5rem; margin-bottom: 0.8rem; margin-left: 0.3rem; padding-right: 0.3rem";
    const photo = document.createElement("div");
    photo.style.cssText = "display: flex; justify-content: center; align-item: center";
    photo.append(productPhoto);

    const productName = document.createElement("h5");
    productName.style.cssText = "text-align: center; color: rgb(126, 124, 124); margin-bottom: -1rem; margin-top: -0.8rem; font-weight: 100";
    productName.innerText = product.title;

    const productPrice = document.createElement("h3");
    productPrice.style.cssText = "text-align: center; color: red";
    productPrice.innerText = `€${product.price}`;

    const deleteButton = document.createElement("button");
    deleteButton.setAttribute("type", "submit");
    deleteButton.style.cssText = "width: 20%; padding: 0.2rem; background-color: white; border: 1px solid lightgrey; font-size: 0.5rem; color: black; margin-bottom: 0.5rem; margin-top: -1rem"
    deleteButton.innerText = "Ištrinti";
    const buttonDiv = document.createElement("div");
    buttonDiv.style.cssText = "display: flex; justify-content: center"
    buttonDiv.append(deleteButton)

    const productInfo = document.createElement("div");
    productInfo.style.cssText = "display: flex; flex-direction: column; justify-content: center; margin-top: 1rem; border: 1px solid lightgrey; margin-left: 1rem";
    productInfo.append(productPhoto, productName, productPrice, buttonDiv);
    productsWindow.append(productInfo);
  });
};

async function getProducts() {
  try {
    const response = await fetch(baseUrl);
    if (response.ok) {
      const data = await response.json();
      console.log(data);
      showProducts(data);
    }
  } catch (error) {
    console.log(`message: `, error.message);
  }
};

myForm.onsubmit = async (event) => {
  event.preventDefault();
  const imageValue = myForm.querySelector("#image").value;
  const titleValue = myForm.querySelector("#title").value;
  const priceValue = Number(myForm.querySelector("#price").value);

  const newProduct = {
    image: imageValue,
    title: titleValue,
    price: priceValue
  };

  console.log(newProduct);

  postData(newProduct).then((item) => {
    console.log(item);
  });

  setTimeout(function () {
    getProducts();
  }, 5000);
};

const postData = async (data) => {
  try {
    const response = await fetch(baseUrl, {
      method: 'POST',
      body: JSON.stringify(data),
      headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json',
      },
    });
    if (response.ok) {
      const data = await response.json();
      if (data.msg === 'Product added') {
        alert("Jūsų produktas sėmingai pridėtas")
        return data;
      } else {
        alert("Duomenų įrašyti nepavyko")
      }
    }
  } catch (error) {
    console.error(error);
  }
};

getProducts();


// https://jsitor.com/zK9nqBDDdO


// https://jsitor.com/zK9nqBDDdO