<html>
<head>
<script src="jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jquery-1.8.3.js" type="text/javascript"></script>
<script type="text/javascript">
var a;    
$(document).ready(function() {
        var a,bandera=false;
	$("#descarga").click(function() {   
            
            var url = $("input#url").val();               
            $.post("rindex.php", 'url='+url,function(data){
                a = data;
                prueba();
            });
            function actualiza(){
                $.post("porcentaje.php",'porcentaje='+a,function(data1){
                    alert(data1);
                });
                setTimeout(actualiza(),5000);
            }
            function prueba(){
                $.post("actualiza_porcentaje.php",'id='+a);
                setTimeout(actualiza(),6000);
            }
        });
});
</script>
</head>
<body> 
    <label for="url">URL:</label>
    <input type="text" id="url" name="url" />
    <input name="submit" type="submit" value="enviar" id="descarga" />               
</body>
</html>