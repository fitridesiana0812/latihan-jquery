<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <p>If you click on the "Hide" button, Iwill disappear.</p>
    <button id="hide">Hide</button>
    <button id="show">Show</button>
</body>
</html>

<script>
    $(document).ready(function)(){
        $("#hide").click(function)(){
            $("p").hide();
        });
        $("#show").click(function()){
            $("p").show();
        });
    }); 
</script>