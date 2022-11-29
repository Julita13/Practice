import { fetchData, postData } from "./src/crud.js";
function displayData(tasks){
    const taskContainer = document.querySelector(".tasks");
    let taskDiv = "";
    tasks.forEach(task => {
        taskDiv += `<div>
        <h2>${task.text}</h2>
        <h3>${task.date}</h3>
        <p>${task.description}</p>
        <span class="options">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-alt"></i>
            </span>
            </div>`
        });
        taskContainer.innerHTML = taskDiv;
    }
    const formEl = document.querySelector("form");
    formEl.onsubmit = async (event) => {
        event.preventDefault();
        const textInput = document.querySelector("#task").value;
        if(textInput === ""){
            const errorDiv = document.querySelector(".error");
            errorDiv.textContent = "Privalomas laukas";   
        }else{
            const descriptionInput = document.querySelector("#description").value;
            const dateInput = document.querySelector("#date").value;
            const data = {
                text: textInput,
                date: dateInput,
                description: descriptionInput,
                id: Math.floor(Math.random()*1000 + 1),
            }
            postData(data).then(item => displayData(item))
        }
    }


    (()=>{fetchData().then(data => displayData(data))})();