<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerando PDF</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container" style="margin-top: 10%;">
        <div class="main jumbtron">
            <fieldset class="">
                <legend>Preenche os Campos para gerar o pdf</legend>
                <form action="pdf.php" method="post">
                    <input type="text" class="form-control" name="title" placeholder="Titulo do Documento"><br>
                    <input type="text" class="form-control" name="Autor" placeholder="Quem escreveu o arquivo"><br>
                    <textarea name="text" id="" cols="30" rows="10" class="form-control" placeholder="Digite aqui o conteúdo do documento"></textarea><br>

                    <button type="submit" class="btn btn-sucess form-control btn btn-success">Gerar Documento</button>
                </form>
            </fieldset>
        </div>
    </div>
</body>
</html>