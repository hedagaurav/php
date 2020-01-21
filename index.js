//javascript


function show_width() {
    if (document.title == 'Php Project') {
        setInterval(function () {
            document.getElementById("screen_width").innerHTML = screen.width;
            var body_width = document.getElementById("body").offsetWidth;

        // alert(body_width);
        document.getElementById("body_width").innerHTML = body_width;

        var container_width = document.getElementsByClassName("container");
        c = container_width[0].offsetWidth;
        document.getElementById("container_width").innerHTML = c;

        // var jumbo_width = document.getElementById("jumbotron").offsetWidth;
        // document.getElementById("jumbo_width").innerHTML = jumbo_width;

        // var section1_width = document.getElementById("section1").offsetWidth;
        // document.getElementById("section1_width").innerHTML = section1_width;
    }, 1000);
    }else{
        alert("page title is different.");
    }
}

function sizechange(psize){

    var size = psize;
    var ip = $(".ss")
    // var p = 0;
    // p = document.getElementById('price').innerHTML;
    alert(p);
    
    // $.post(size.php,{});
}


$(function () {

    var x = document.getElementById('sandwich');
    var i = document.getElementById('navbar');
    $('.bars').click(function () {
        if (x.className == 'bars') {
            x.innerHTML = '<i class="fa fa-times" aria-hidden="true"></i>';
            $('.navbar').slideToggle();
        }
        else {
            // alert('else');
            x.innerHTML = '<i class="fa fa-bars" aria-hidden="true"></i>';
            $('.navbar').slideToggle();
        }
        $(this).toggleClass('cross');
        $('.navbar').toggleClass('show');
    });

    $('button').click(function() {

    });
    
    if (document.title == 'Php Project') {
        setInterval(function () {
            document.getElementById("screen_width").innerHTML = screen.width;
            var body_width = document.getElementById("body").offsetWidth;
            document.getElementById("body_width").innerHTML = body_width;

            var container_width = document.getElementsByClassName("container")[0].offsetWidth;
            document.getElementById("container_width").innerHTML = container_width;
            var contm = body_width - container_width;
            document.getElementById("contm").innerHTML = contm/2;
        // alert(contm);

        // var jumbo_width = document.getElementById("jumbotron").offsetWidth;
        // document.getElementById("jumbo_width").innerHTML = jumbo_width;

        // var section1_width = document.getElementById("section1").offsetWidth;
        // document.getElementById("section1_width").innerHTML = section1_width;
    }, 500);
    }
});
