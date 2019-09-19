var MyName = {
    name: 'LÊ XUÂN THIỆN',
    "gioi-tinh": 'male',
    age: 'nam',
    "name-of-dogs": ['Dogs','Sen','DOGS'],
};

console.log(MyName.name);
console.log(MyName["gioi-tinh"]);
console.log(MyName["name-of-dogs"]);

document.getElementById('tencuaban').innerHTML = MyName.name;

document.getElementById('dogs').innerHTML = MyName["name-of-dogs"];

document.getElementById('gioi-tinh-la').innerHTML = MyName["gioi-tinh"]


var arrayNameDogs = MyName["name-of-dogs"];
console.log(arrayNameDogs);

for (var i = 0; i < arrayNameDogs.length; i = i + 1) {
    console.log(i);
    var heading = document.createElement('h2');
    var ContentOfHeading = document.createTextNode(arrayNameDogs[i]);
    heading.appendChild(ContentOfHeading);
    document.body.appendChild(heading);
}

