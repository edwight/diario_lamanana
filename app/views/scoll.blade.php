<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Laravel </title>
 
    <style type="text/css">
        .box{
            width: 100px;
            height: 100px;
            background-color: #ccc;
        }
    </style>
 </head>
 <body>
    <div class="row">   
        <div id="boxes">

            @foreach ($posts as $post)
                <div class="box">
                    <p>{{ $post->titulo }}</p>
                    <p>{{ $post->contenido }}</p> 
                </div>
            @endforeach
        </div>

        <div class="col-span-12">
            <div class="paginate text-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

    <a id="next" href="scoll?page=2">next page?</a>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
    <script>window.jQuery || document.write("<script src='jquery-1.6.1.js'>\x3C/script>")</script>
    {{ HTML::script('infinite-scroll/test/debug.js') }}
    {{ HTML::script('infinite-scroll/jquery.infinitescroll.js') }}
    {{ HTML::script('infinite-scroll/behaviors/manual-trigger.js') }}
    <script>
       $('#boxes').infinitescroll({
            navSelector     : ".paginate",
            nextSelector    : ".pagination li a:last",
            itemSelector    : ".box",
            debug           : false,
            dataType        : 'html',
            path: function(index) {
                return "?page=" + index;
            }
            }, function(newElements, data, url){
            var $newElems = $( newElements );
            $('#boxes').masonry( 'appended', $newElems, true);
        });
    </script>
 </body>
</html>


