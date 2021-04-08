<html>
<head>
<title>Bienvenido a sistema</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.ajax({
        url: "http://localhost:8090/PHPPrestamo/Servicio/SCliente.php",
        data: {txtbus: ''},
        type: 'Get',
        dataType: '',
        success: function(resp){
            var tabla="";
            var JCli = JSON.parse(resp);
            console.log(JCli);
            
            for(var i=0;i<JCli.length;i++){
                tabla+="<tr>";
                tabla+="<td>"+JCli[i]['cod']+"</td>";
                tabla+="<td>"+JCli[i]['nom']+"</td>";
                tabla+="<td>"+JCli[i]['ape']+"</td>";
                tabla+="<td>"+JCli[i]['dni']+"</td>";
                tabla+="</tr>";
            }
            $('#TbLista').html(tabla);

        },error: function(mens){
            alert('Error 404:'+mens);
        }
    });
</script>
<body>
    <div id="TbLista">Lista</div>
</body>
</html>