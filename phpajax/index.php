<!doctype html>
<html>
    <head>
        <title>Retornar notas em JSON e exibi-las em uma tabela</title>
        <link href="style.css" type="text/css" rel="stylesheet">
        <script src="jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="script.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container">
            <table id="userTable" border="1" >
                <thead>
                    <tr>
                        <th width="5%">Cód</th>
                        <th width="30%">Disciplina</th>
                        <th width="15%">1ºB</th>
                        <th width="15%">2ºB</th>
                        <th width="15%">3ºB</th>
                        <th width="15%">4ºB</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div>
            <a href="ajaxfile.php">Clique aqui para visualizar o JSON</a>
        </div>
    </body>
</html>