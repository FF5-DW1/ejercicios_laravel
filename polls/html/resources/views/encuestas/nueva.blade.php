<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva encuesta</title>
    <style>
        body{
            background-color: #111;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        input{
            padding: 0.4rem 0.8rem;
        }
        .container{
            max-width: 420px;
            display: flex;
            justify-content: center;
            /* flex-direction: column; */
            flex-wrap: wrap;
            margin: 0 auto;
        }
        .container div input{
            display: block;
            margin-bottom: .2rem;
        }

        .pregunta{
            margin-bottom: 1rem;
        }
        .respuestas{
            margin-bottom: 1rem;
        }
        .cta{
            background-color: darkgreen;
            color: white;
            border: 1px solid green;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <main class="container">
        <form action="/guardar" method="post">

            @csrf

            <h1>Nueva encuesta</h1>
    
            <div class="pregunta">
                <label for="pregunta">Introduce tu Pregunta:</label>
                <input type="text" id="pregunta" name="pregunta">
            </div>
    
            <div class="respuestas">
                <label for="">Respuestas</label>
                <input type="text" name="r1" >
                <input type="text" name="r2" >
                <input type="text" name="r3" >
                <input type="text" name="r4" >
            </div>
    
            <div>
                <input type="submit" class="cta" value="Crear encuesta">
            </div>
        </form>
    </main>
</body>
</html>