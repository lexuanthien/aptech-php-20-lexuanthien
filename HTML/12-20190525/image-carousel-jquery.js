$('#hinhanh2').hide();
$('#hinhanh3').hide();

$(document).ready(function(){

    function swapImages() {
        $("#hinhanh1").click(function(){
            $(this).hide();
            $('#hinhanh2').show();
        });
        $("#hinhanh2").click(function(){
            $('#hinhanh2').hide();
            $('#hinhanh3').show();
        });
        $('#hinhanh3').click(function() {
            $(this).hide();
            $('#hinhanh1').show();
        });
    }
    setInterval(swapImages,3000);

});
