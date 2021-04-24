$(document).ready(function() {
    $(".transition").css("height", "0");
});

$('#search_bar').keyup(function (e) {
    if (e.keyCode === 13) {
        $(".transition").css("height", "100vh");
        let val = $(this).val();
        val = val.replace(/\s/g, "-");
        setTimeout(function(){ window.top.location.href= `/research/${val}`; }, 3000);
    }
});

$(".result > img").hover(function(){
    $id = $(this).attr("id");
    $(".background > img.research").attr('src',$id);
    $(".background > img.research").css("opacity", "1");
}, function(){
    $(".background > img.research").css("opacity", "0");
});

$('div.result').click(function(){
    $(".transition").css("height", "100vh");
    let val = $(this).attr('id');
    setTimeout(function(){ window.top.location.href= `/result/${val}`; }, 3000);
});

$('.back_button').click(function(){
    $(".transition").css("height", "100vh");
    setTimeout(function(){ history.back();}, 3000);
});

$('.try').click(function(){
    $(".transition").css("height", "100vh");
    setTimeout(function(){ history.back();}, 3000);
});

$("#search_bar").focus(function(){
    $("#search_bar").css("transition-duration", "1s");
    $("#search_bar").css("background", "#3f51b5");
    $("#search_bar").css("color", "white");
});

$("#search_bar").focusout(function(){
    $("#search_bar").css("transition-duration", "1s");
    $("#search_bar").css("background", "none");
    $("#search_bar").css("color", "#3f51b5");
});
