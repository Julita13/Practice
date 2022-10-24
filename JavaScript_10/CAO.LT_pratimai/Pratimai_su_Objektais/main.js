// 1. Pratimas
    // Susikuriame objektą "car". Duodame jam tris properties: "doors", "color", "brand". 
    // Reikšmes įrašykite patys, tik atminkite - doors bus skaičius, o color ir brand - string'ai. 
    // Pasiconsole'inkite ir patikrinkite ar matosi car objektas, ar galite atskirai pasiimti 
    // vieną iš jo parametrų (pvz. car.doors).

    const car = {
        doors: 2,
        color: "red",
        brand: "Toyota",
      };
      
      console.log(car);
      console.log(car.brand);
      console.log(car.doors);
      console.log(car.color);

    //   PLIUS PETRO ADDITIONS: 
    //   const car = {
    //     doors: 2,
    //     color: "red",
    //     brand: "Toyota",
    //   };
      
    //   console.log(car);
    //   console.log(car.brand);
    //   console.log(car.doors);
    //   console.log(car.color);
      
    //   if(car.doors === 2){
    //     alert("turi dvejas duris")
    //   } else if (car.doors === 4) {
    //     alert("turi keturias duris")
    //   } else {
    //       alert("turi neįprastą skaičių durų")
    //     }

    //   2. Pratimas
    // Sukuriame formą su dviem input - name ir surname. Pateikus formą, JS turi pasiimti vardą ir pavardę ir sukurti objektą pavadinimu 'person'. 
    // Šis objektas turės du parametrus - name ir surname. Kai tik objektas susikuria (t.y. dar addEventListener funkcijoje) - 
    // atsispausdink objektą ir pažiūrėk ar viskas gerai veikia. Hint: už funkcijos ribų negali atspausdinti objekto, 
    // nes const person = {} yra limituotas konkrečiame bloke (šiuo atveju - funkcijoje). Už jos ribų jis neegzistuoja.

    document.querySelector("#second-task").addEventListener("submit", e => {
        e.preventDefault(); 
        const myName = document.querySelector("input[name=myname]").value;
        const mySurname = document.querySelector("input[name=surname]").value;
        const person = {
          name: myName, 
          surname: mySurname,
        }
        console.log(person)
      }
      );

    // 3. Pratimas
    // Sukurk formą, kurioje vartotojas įrašo vardą ir įveda amžių. Pateikus duomenis, turi susikurti objektas, kuriame du properties - name ir isLegalAge. 
    // Name - string, o isLegalAge - boolean.

    document.querySelector("#third-task").addEventListener("submit", e => {
        e.preventDefault();
        const vardas = document.querySelector("input[name=vardas]").value;
        const age = document.querySelector("input[name=age]").value;
        const isLegalAge = age >= 18;
        const asmuo = {
            name: vardas,
            isLegal: isLegalAge,
        };
        console.log(asmuo)
    })

