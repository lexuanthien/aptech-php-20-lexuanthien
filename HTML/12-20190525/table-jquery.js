$(document).ready(function(){
  $("#annut-button").click(function(){
    $.get("https://namcoi.com/projects/users-crud-laravel/public/api/users", function(data, status){
  
      var table = document.createElement('table');
      document.body.appendChild(table);
      
      var thead = document.createElement('thead');
      table.appendChild(thead);
      
      
      var tr = document.createElement('tr');
      thead.appendChild(tr);
      
      var arrayth = ['ID', 'NAME', 'EMAIL','UPDATED_AT']
      for (var i = 0; i < arrayth.length; i = i + 1) {
          console.log(i);
          var th = document.createElement('th');
          var ContentTH = document.createTextNode(arrayth[i]);
          th.appendChild(ContentTH);
          tr.appendChild(th);
      }
      
      
      var tbody = document.createElement('tbody');
      table.appendChild(tbody);
      
      
      for (var i = 0; i < data.users.length; i = i + 1) {
          console.log(i);
      
          var tr = document.createElement('tr');
      
          var th = document.createElement('th');
          var tdstt = document.createTextNode(data.users[i].id);
          th.appendChild(tdstt);
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
          var tdname = document.createTextNode(data.users[i].updated_at);
          td.appendChild(tdname);
          tr.appendChild(td);
      
          tbody.appendChild(tr);
      
      }
  
    });
  });
    

});
