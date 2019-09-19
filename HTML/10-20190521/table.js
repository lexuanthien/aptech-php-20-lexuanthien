var table = document.createElement('table');
document.body.appendChild(table);

var thead = document.createElement('thead');
table.appendChild(thead);


var tr = document.createElement('tr');
thead.appendChild(tr);

var arrayth = ['ID', 'NAME', 'EMAIL', 'PASSWORD', 'CREATED_AT', 'UPDATED_AT']
for (var i = 0; i < arrayth.length; i = i + 1) {
  console.log(i);
  var th = document.createElement('th');
  var ContentTH = document.createTextNode(arrayth[i]);
  th.appendChild(ContentTH);
  tr.appendChild(th);
}


var tbody = document.createElement('tbody');
table.appendChild(tbody);



var data = {
    users: [{
        "id": 10,
        "name": "Ethyl Medhurst",
        "email": "noah.hand@example.org",
        "password": "$2y$10$GLfHbVK./jG2WD8QQ0.ZDOqqeJe7rz.hl827sKoHOhd9LLoXfyHHG",
        "created_at": "2019-03-26 04:55:04",
        "updated_at": "2019-03-26 04:55:04"
      },
      {
        "id": 9,
        "name": "Eula Lebsack PhD",
        "email": "schroeder.sylvan@example.org",
        "password": "$2y$10$.vzCIUVX34GibJ3.ObFqYu5Bd.Ig8PqF3adoLHza78eq510mfhy9G",
        "created_at": "2019-03-26 04:55:03",
        "updated_at": "2019-03-26 04:55:03"
      },
      {
        "id": 8,
        "name": "Mrs. Kathlyn Parisian DDS",
        "email": "ggrimes@example.net",
        "password": "$2y$10$N.DpYW9Sd0c8p3rSVjO0MeZ5e7idfPeKPZyOO77m8vNSEOnMws5O2",
        "created_at": "2019-03-26 04:55:03",
        "updated_at": "2019-03-26 04:55:03"
      }
    ]
  };  


for (var i = 0; i < data.users.length; i = i + 1) {
    console.log(i);

    var tr = document.createElement('tr');

    var th = document.createElement('th');
    var tdNoidung = document.createTextNode(data.users[i].id);
    th.appendChild(tdNoidung);
    tr.appendChild(th);

    var th = document.createElement('th');
    var tdname = document.createTextNode(data.users[i].name);
    th.appendChild(tdname);
    tr.appendChild(th);

    var td = document.createElement('td');
    var tdname = document.createTextNode(data.users[i].email);
    td.appendChild(tdname);
    tr.appendChild(td);

    var td = document.createElement('td');
    var tdname = document.createTextNode(data.users[i].password);
    td.appendChild(tdname);
    tr.appendChild(td);

    tbody.appendChild(tr);
    
}  


