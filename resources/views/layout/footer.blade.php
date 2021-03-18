
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".transition").css("transform", "translateX(-150vw) translateY(-100vh)");
        });

        $('#search_bar').keyup(function (e) {
            if (e.keyCode === 13) {
                $(".transition").css("transform", "translateX(0) translateY(0)");
                let val = $(this).val();
                val = val.replace(/\s/g, "-");
                setTimeout(function(){ window.top.location.href= `/research/${val}`; }, 2000);
            }
        });


        $(".result > img").hover(function(){
            $id = $(this).attr("id");
            $(".background").css("opacity", "0");
            $(".background").css("opacity", "0.3");
            $(".background").css("background", "top/100% url('"+$id+"')");
        }, function(){
            /*$(".background").css("opacity", "0");
            $(".background").css("background", "none");*/
        });

        $('div.result').click(function(){
            $(".transition").css("transform", "translateX(0) translateY(0)");
            let val = $(this).attr('id');
            setTimeout(function(){ window.top.location.href= `/result/${val}`; }, 2000);
            // window.top.location.href= `/result/${val}`;
        });

        $('.back_button').click(function(){
            $(".transition").css("transform", "translateX(0) translateY(0)");
            setTimeout(function(){ history.back();}, 2000);
        });

        $('.try').click(function(){
            $(".transition").css("transform", "translateX(0) translateY(0)");
            setTimeout(function(){ history.back();}, 2000);
        });

        $("#search_bar").focus(function(){
            $("#search_bar").css("transition-duration", "1s");
            $("#search_bar").css("background", "white");
            $("#search_bar").css("color", "grey");
        });

        $("#search_bar").focusout(function(){
            $("#search_bar").css("transition-duration", "1s");
            $("#search_bar").css("background", "none");
            $("#search_bar").css("color", "grey");
        });
    </script>
</body>
