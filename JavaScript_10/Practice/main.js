// const doors = {
//     color: 'red' // key: value, 
//     //paspaudus doors.color gauni 'red';
// };
// typeof doors 'object'
//  doors.color (išmes 'red') ir doors['color'] - irgi išmes 'red'

// Objekto pavadinime nenaudojame skaičių(to start with), brūkšnelių, tarpelių. Name should look like "camelCase".
// 1. Pratimas
let doors = {
    color: 'brown',
    isOpen: false,
    open: function() {
      if(doors.isOpen === true) {
        return 'Doors are open';
      } else {
        doors.isOpen = true;
        return 'I am opening the doors';
      }
    },
    close: function() {
      if(doors.isOpen === true) {
        doors.isOpen = false;
        return 'Doors are open'
      } else {
        return 'I am opening the doors';
      }
    }
  }
  
  const btn = document.querySelector('button');
  btn.addEventListener('click', () => {
    if(!doors.isOpen) {
      btn.innerText = '📁';
      doors.open();
    } else {
      btn.innerText = '📂';
      doors.close();
    }
    console.log(doors.isOpen);
    console.log(doors['isOpen']);
  })
  
// 2. Pratimas
  const student = {
    name: 'Julita',
    activity: function() {
      return `${this.name} dėlioja puzzle vakarais`;
    }
  }
  console.log(student.activity()); 

//   const student = {
//     name: 'Julita',
//     activity: function() {
//       console.log(this);
//       return `${this.name} dėlioja puzzle vakarais`;
//     }
//   }
  
//   console.log(this);
//   student.activity();

// const savingsAccount = {
//     balance: 1000,
//     interestRate: 1,
//     deposit: function (amount) {
//       if (amount > 0) {
//         this.balance += amount;
//       }
//     },
//     withdraw: function (amount) {
//       const verifyBalance = this.balance - amount;
//       if (amount > 0 && verifyBalance >= 0) {
//         this.balance -= amount;
//       }
//     },
//     printAccountSummary: function() {
//       return `Welcome! Your balance is currently $${this.balance} and your interest rate is ${this.interestRate}%`
//     },
//     printWithdrawed: function() {
//         return 
//     }
//   }
//   console.log(savingsAccount.printAccountSummary());



  const savingsAccount = {
    balance: 1000,
    interestRate: 1,
    deposit: function (amount) {
      if (amount > 0) {
        this.balance += amount;
      }
    },
    withdraw: function (amount) {
      const verifyBalance = this.balance - amount;
      if (amount > 0 && verifyBalance >= 0) {
        this.balance -= amount;
        return `You withdrawed ${amount}, \n
        you have ${this.balance} in your account left.`
      } else {
        return `Ups, you don't have $ ${amount} in your account`
      }
    },
    printAccountSummary: function() {
      return `Welcome! Your balance is currently $${this.balance} and your interest rate is ${this.interestRate}%`
    },
  }
  console.log(savingsAccount.printAccountSummary());
  console.log(savingsAccount.withdraw(200));
  