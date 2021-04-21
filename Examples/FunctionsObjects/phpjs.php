<html>
<body>
<p1>With php and js</p1>
<p>
<script>
function loop(){
    for(var i=0;i<10;i++){
        document.write("js");
    }
   
}
loop();


</script>
<?php
    echo "<br>";
    for($i=0;$i<10;$i++){
        echo "php";
    }
?>
</p>
</body>
</html>