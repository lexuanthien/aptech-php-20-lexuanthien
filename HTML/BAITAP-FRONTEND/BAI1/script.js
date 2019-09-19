function chuyendoihinhanh() {
    var Hinhmot = document.getElementById('anh-1');
    console.log(Hinhmot);
    var Hinhhai = document.getElementById('anh-2');
    var Hinhba = document.getElementById('anh-3');

    if (Hinhmot.style.display == 'block')
    {
        Hinhmot.style.display = 'none';
        Hinhhai.style.display = 'block';
        Hinhba.style.display = 'none';
    }
    else if (Hinhhai.style.display == 'block')
    {
        Hinhmot.style.display = 'none';
        Hinhhai.style.display = 'none';
        Hinhba.style.display = 'block';
    }
    else 
    {
        Hinhmot.style.display = 'block';
        Hinhhai.style.display = 'none';
        Hinhba.style.display = 'none';
    }

}
setInterval(chuyendoihinhanh, 3000);