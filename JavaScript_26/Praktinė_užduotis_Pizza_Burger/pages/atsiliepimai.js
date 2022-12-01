const formElement = document.querySelector("form");
const textAreaElement = document.getElementById("tekstas");
const posts = document.getElementById("posts"); 
// console.log(textAreaElement, formElement, posts)
let zinutes = [];

formElement.addEventListener("submit", (event) => {
    event.preventDefault();
    posts.innerHTML +=  `<p>${textAreaElement.value}</p>`;
    zinutes.push(textAreaElement.value);
    localStorage.setItem("manoZinutes", JSON.stringify(zinutes));
});

(()=> {
    const data = JSON.parse(localStorage.getItem("manoZinutes"));
    if(data && data.length > 0){
        zinutes.push(...data);
        data.forEach(item => posts.innerHTML +=  `<p>${item}<p>`)
    }
})();