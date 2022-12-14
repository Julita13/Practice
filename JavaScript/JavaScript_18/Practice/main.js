console.log(`%c Labukas`, `color: brown`); // paspalvina console.log tekstą


function newElement() {
    const li = document.createElement('li');
    const value = document.querySelector('#myInput').value;
    const textNode = document.createTextNode(value);
    li.appendChild(textNode);
    if(value === '') {
      console.log('Neįvestas tekstas');
    } else {
      const ulList = document.querySelector('#myUL');
      ulList.appendChild(li);
    }
    document.querySelector('#myInput').value = '';
  
    const span = document.createElement('span');
    const txt = document.createTextNode('\u00D7');
    span.classList.add('close');
    // span.classList = 'close';
    span.append(txt);
    li.appendChild(span);
  
    const close = document.querySelectorAll('.close');
  
    for(let i=0; i<close.length; i++) {    
      close[i].onclick = function() {
        const parentElement = this.parentElement;
        parentElement.style.display = 'none';      
      }
    }
  }
  
  const liItems = document.querySelectorAll('li');
  
  for(let i=0; i<liItems.length;i++) {
    const span = document.createElement('span');
    const txt = document.createTextNode('\u00D7');
    span.classList.add('close');
    span.append(txt);
    liItems[i].appendChild(span);
  
    liItems[i].onclick = function() {
      liItems[i].classList.toggle('checked');
    }
  }
  
  const close = document.querySelectorAll('.close');
  
  for (let i = 0; i < close.length; i++) {
    close[i].onclick = function () {
      const parentElement = this.parentElement;
      parentElement.style.display = 'none';
    }
  }
  
  
  //
  const liItemsValuesArray = [...document.querySelectorAll("li")].map((item) => item.textContent.replace('×',''));
  const sortedItems = liItemsValuesArray.sort()
  console.log(sortedItems);
  
  const doneTasks = [...document.querySelectorAll("li")].reduce((array, value) => {
    if ([...value.classList].includes('checked')) {
      array.push(value.textContent.replace('×', ''));
    }
    return array;
  },[]);
  
  const toDoTasks = [...document.querySelectorAll("li")].reduce((array, value) => {
    if (![...value.classList].includes('checked')) {
      array.push(value.textContent.replace('×', ''));
    }
    return array;
  }, []);
  
  console.log(doneTasks);
  console.log(toDoTasks);
  
  // tas pats tik su foreach
//   let toDo = [];
//   let done = [];
//   [...document.querySelectorAll("li")].forEach((value) => {
//     if ([...value.classList].includes('checked')) {
//       toDo.push(value.textContent.replace('×', ''));
//     } else {
//       done.push(value.textContent.replace('×', ''));
//     }
//   })
  
//   console.log(toDo);
//   console.log(done);