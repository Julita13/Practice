
// PRATIMAS IŠ SKAIDRIŲ: 
const inventors = [
    { first: "Albert", last: "Einstein", year: 1879, passed: 1955 },
    { first: "Isaac", last: "Newton", year: 1643, passed: 1727 },
    { first: "Galileo", last: "Galilei", year: 1564, passed: 1642 },
    { first: "Marie", last: "Curie", year: 1867, passed: 1934 },
    { first: "Johannes", last: "Kepler", year: 1571, passed: 1630 },
    { first: "Nicolaus", last: "Copernicus", year: 1473, passed: 1543 },
    { first: "Max", last: "Planck", year: 1858, passed: 1947 },
    { first: "Katherine", last: "Blodgett", year: 1898, passed: 1979 },
    { first: "Ada", last: "Lovelace", year: 1815, passed: 1852 },
    { first: "Sarah E.", last: "Goode", year: 1855, passed: 1905 },
    { first: "Lise", last: "Meitner", year: 1878, passed: 1968 },
    { first: "Hanna", last: "Hammarström", year: 1829, passed: 1909 },
  ];
  // Create code with array methods which would:
  // 1. Give array of inventors first and last names; (map)
  // 2. Sort the inventors by birthdate, earliest to latest; (sort)
  // 3. Filter list of inventors and get only inventors born in the 1500’s; (filter)
  // 4. Get how many years did all inventors live in total; (reduce)
  // 5. Sort the inventors by years lived; (sort)
  
  // 1. Pratimas
  const inventorsFirstNames = inventors.map(person => {return {first: person.first, last: person.last}});
  console.log(inventorsFirstNames);
  // ARBA: 
  // console.log(inventors.map(v => `${v.first`} ${v.last}`));
  
  // 2.Pratimas
  let earliestBirth = inventors.sort((a, b) => a.year - b.year);
  console.log(earliestBirth);
  
  // 3.Pratimas
  console.log(inventors.filter(v => v.year < 1600 && v.year >= 1500));
  
  // 4.Pratimas
  console.log(inventors.reduce((a, b) => a + (b.passed - b.year), 0));
  
  // 5.Pratimas
  console.log(inventors.map(v => ({...v, age: v.passed - v.year})).sort((a, b) => b.age - a.age));
  
  //  ARBA
  const inventorsAge = inventors.map(v => ({ ...v, age: v.passed - v.year})); // sukuriame naują objekto parametrą - age
  console.log(inventorsAge.sort((a, b) => b.age - a.age));