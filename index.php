<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Atualizar DIV de segundos em segundos com PHP/JQuery/AJAX</title>

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	
	    <script type="text/javascript">


        // Função responsável por atualizar as programadors
        function atualizar()
        {
            // Fazendo requisição AJAX
            $.post('ajax/atualizar.php', function (programador) {

                // Exibindo programador
                $('#programador').html('<b>' + programador.nome + programador.sobrenome +'</b><br />');

            }, 'JSON');
        }

        // Definindo intervalo que a função será chamada
        setInterval("atualizar()", 2000);

        // Quando carregar a página
        $(function() {
            // Faz a primeira atualização
            atualizar();
        });

    </script>

</head>

<body>

<div class="container">

    <h1>Programadores sortidos</h1>

    <div id="programador"></div>

</div>

</body>
</html>
