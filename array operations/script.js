const sortIntegers = () => {
const integers = document.getElementById('integers').value.split(',').map(Number);
const sortedIntegers = integers.sort((a, b) => a - b);
document.getElementById('sortedIntegers').innerText = sortedIntegers.join(', ');
}
document.getElementById('sortIntegers').addEventListener('click', sortIntegers);
// Array of named entities
let entities = [];
const addEntity = () => {
const entity = prompt('Enter a named entity:');
if (entity !== null && entity !== '') {
entities.push(entity);
document.getElementById('entities').innerHTML = entities.map(entity =>
`<li>${entity}</li>`).join('');
}
}
document.getElementById('addEntity').addEventListener('click', addEntity);
// Code for integer array manipulation
let intArray = [];
const addInteger = () => {
const intInput = document.getElementById('intInput').value;
intArray.push(intInput);
const tableRow = `
<tr>
<td>${intArray.length - 1}</td>
<td>${intInput}</td>
</tr>
`;
document.getElementById('intArray').innerHTML += tableRow;
}
document.getElementById('addIntBtn').addEventListener('click', addInteger);
const sortArray = () => {
intArray.sort((a, b) => a - b);
const tableRows = intArray.map((int, index) => `
<tr>
<td>${index}</td>
<td>${int}</td>
</tr>
`);
document.getElementById('intArray').innerHTML = tableRows.join('');
}
document.getElementById('sortIntBtn').addEventListener('click', sortArray);
const searchArray = () => {
const searchInput = document.getElementById('searchIntInput').value;
const foundIndex = intArray.indexOf(searchInput);
if (foundIndex === -1) {
alert('The integer was not found in the array');
} else {
alert(`The integer was found at index ${foundIndex}`);
}
}
document.getElementById('searchIntBtn').addEventListener('click', searchArray);