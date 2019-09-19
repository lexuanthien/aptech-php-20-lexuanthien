

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
setInterval(chuyendoihinhanh, 2000);


function Hinhanh1() {
    document.getElementById('hinhanh').src= 'anh-1.jpg';
}

function Hinhanh2() {
    document.getElementById('hinhanh').src= 'anh-2.jpg';
}

function Hinhanh3() {
    document.getElementById('hinhanh').src= 'anh-3.jpg';
}
