<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <title>Consultas</title>
    </head>
    <body>
        <div class="container">
            <div class="btn-group" role="group" aria-label="Basic example">
                <div id="C1">
                    <p style="margin-top: 5%;">
                        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#Iconsulta1" aria-expanded="false" aria-controls="collapseExample">
                            consulta por nome
                        </button>
                    </p>
                </div>
                <div id="C2">
                    <p style="margin-top: 5%;">
                        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#Iconsulta2" aria-expanded="false" aria-controls="collapseExample">
                            consulta por ramal
                        </button>
                    </p>
                </div>
                <div id="C3">
                    <p style="margin-top: 5%;">
                        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#Iconsulta3" aria-expanded="false" aria-controls="collapseExample">
                            consulta por setor
                        </button>
                    </p>
                </div>
            </div>
            <div class="consulta1">
                <div class="collapse" id="Iconsulta1">
                    <div class="card card-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="Inome">Nome</label>
                                <input type="text" class="form-control" id="Inome" name="Nnome" placeholder="Consulte o nome aqui">
                            </div>
                            <button type="submit" class="btn btn-success">Consultar</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="consulta2">
                <div class="collapse" id="Iconsulta2">
                    <div class="card card-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="Iramal">Ramal</label>
                                <input type="text" class="form-control" id="Iramal" name="Nramal" placeholder="Consulte o ramal aqui">
                            </div>
                            <button type="submit" class="btn btn-success">Consultar</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="consulta3">
                
                <div class="collapse" id="Iconsulta3">
                    <div class="card card-body">
                        <form action="#" method="post">
                            <select name="Nsetor" style="border: 1px solid #D3D3D3; border-radius: 30px; width: 100%; margin-bottom: 2%; height: 50%;">
                                <option value="1">&nbsp;&nbsp;1</option>
                                <option value="2">&nbsp;&nbsp;2</option>
                                <option value="3">&nbsp;&nbsp;3</option>
                                <option value="4">&nbsp;&nbsp;4</option>
                            </select>
                            <button type="submit" class="btn btn-success">Consultar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>