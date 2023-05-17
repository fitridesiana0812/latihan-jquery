<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
</head>
<body>
    <button>Set text content for all p elements</button>
    <p>This is a paragraph.</p>
    <p>This is another paragraph.</p>
</body>
</html>

