var array = ['A','B','C','D'];

for (var index = 0; index < array.length; index = index + 1;) {
    document.getElementById('nguoiso-' + (index + 1)).innerHTML = array[index];
}