<!-- to auto-play slideshow -->

$(document).ready(function(){

    $("#slideshow > div:gt(0)").hide();

    setInterval(function() {
        $('#slideshow > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            //adjust the timing: 2000 is 2 seconds, change it accordingly
            .appendTo('#slideshow');
    },  3000);

    <!-- auto-play slideshow-testimonies-->


    $("#slideshow-testimonies > div:gt(0)").hide();

    setInterval(function() {
        $('#slideshow-testimonies > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow-testimonies');
    },  10000);
});
