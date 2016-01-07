<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title></title>
    <link rel="stylesheet" href="clarity/css/style.css"/>
    <link rel="stylesheet" href="styles.css"/>
</head>

<body>


<div id="example-wrapper">

    <div id="example-outer">
        <div id="example">

        </div>
    </div>
</div>


</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="clarity/ttw-clarity-player.js"></script>
<script src="clarity/yepnope.js"></script>
<script type="text/javascript">
    $(function () {
        var myPlaylist = [
            {
                mp3:'playlist/vanessa.mp3',
                duration:'26:32',
                cover:'playlist/vanessa.jpg',
                title:'Vanessa Podcast',
                artist:'Vanessa',
                background:'playlist/vanessa.jpg'
            }
        ];

        var clarity = $('#example').ttwClarityPlayer(myPlaylist);


        $('#example-size-picker').on('click', 'li', function(){
            $('#example').attr('data-size', $(this).data('size'));
            clarity.manageLayout();
        });
    });
</script>
</body>
</html>