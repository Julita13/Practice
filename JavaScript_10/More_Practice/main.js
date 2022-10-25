//  4. Pratimas iš skaidrių
const facebookProfile = {
    name: 'Julita',
    numberOfFriends: 4,
    messagesPosted: ['Labas'],
    postMessage: function postMessage(message) {
      facebookProfile.messagesPosted.push(message); // pushina naują dalyką į masyvo vidų 
      return facebookProfile.messagesPosted
    },
    deleteMessage: function deleteMessage(index){
      facebookProfile.messagesPosted.splice((index-1),1); // šioje vietoje ištrina žinutę iš masyvo 
      return facebookProfile.messagesPosted;
    },
    addFriend: function addFriend() {
      facebookProfile.numberOfFriends +=1; 
      return facebookProfile.numberOfFriends;
    },
    removeFriend: function removeFriend() {
      facebookProfile.numberOfFriends -=1;
      return facebookProfile.numberOfFriends;
    }
  };
  console.log(facebookProfile.postMessage('Hello!'));
  console.log(facebookProfile.deleteMessage(0));
  // console.log(facebookProfile.addFriend());
  console.log(facebookProfile.removeFriend());

//    5. Pratimas
const cars = [
  {type: "BMW", price: '30.000'},
  {type: "MERCEDES", price: '35.000'},
  {type: "HONDA", price: '18.000'},
  {type: "VOLVO", price: '25.000'}
];

cars.forEach(function (item, index){
  // console.log(`${cars[index].type} car price $${cars[index].price}`);
  console.log(`${item.type} car price $${item.price}`); // tas pats, kas ir 37 eilutėje
  console.log(index);
});
