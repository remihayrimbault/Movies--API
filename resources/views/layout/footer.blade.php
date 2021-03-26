
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
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
/*
        function background() {
            $src = $(".background > img.home").attr('id');
            console.log($src);
            for ($i=1; $i<6; $i++) {
                setTimeout(function(){ $(".background > img.home").css("opacity", "0"); }, 3000);
                $(".background > img.home").attr('src',"images/"+$i+".jpeg");
                $(".background > img.home").css("opacity", "1");
                setTimeout(function(){ $i++; }, 3000);
            }
        }
*/

        $(".result > img").hover(function(){
            $id = $(this).attr("id");
            $(".background > img.research").attr('src',$id);
            $(".background > img.research").css("opacity", "1");
            //$(".background > img").css("opacity", "1");
        }, function(){
            $(".background > img.research").css("opacity", "0");/*
            $(".background > img").css("opacity", "0");
            $(".background").css("background", "none");*/
        });

        $('div.result').click(function(){
            $(".transition").css("height", "100vh");
            let val = $(this).attr('id');
            setTimeout(function(){ window.top.location.href= `/result/${val}`; }, 3000);
            // window.top.location.href= `/result/${val}`;
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
    </script>
</body>
