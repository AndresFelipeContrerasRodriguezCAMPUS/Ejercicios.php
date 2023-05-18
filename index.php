<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        if(!empty($_POST)){
            $nivel_estudio=$_POST['nivel_de_estudio'];
            $lenguajes_de_program=count($_POST['lenguajes_de_programacion']);
            $nivel_de_ing=$_POST['nivel_de_ingles'];
            echo var_dump($nivel_estudio, $lenguajes_de_program);
        }  if($lenguajes_de_program>0 && $lenguajes_de_program<3 && $nivel_ingles='basico'){
            header('Location: /apolo.html ');
        } else if($lenguajes_de_program>=3 && $lenguajes_de_program<6 && $nivel_ingles='intemedio'){
            header('Location: /artemis.html ');
        } else if($lenguajes_de_program>=6 && $nivel_ingles='avanzado'){
            header('Location: /spukni.html ');
        } 


    ?>
<div class="seccion">
    <form method="POST">
        <label>
            <span>Nombre</span><br>
            <input type="text" name="nombre">
        </label><br>
        <label>
            <span>apellido</span><br>
            <input type="text" name="nombre">
        </label><br>
        <label>
            <span>email</span><br>
            <input type="text" name="nombre">
        </label><br>
        <label>
            <span>telefono</span><br>
            <input type="text" name="nombre">
        </label><br>
        <span>Nivel de estudio</span><br>
        <select name="nivel_de_estudio" >
            <option value="bachiller">bachiller</option>
            <option value="tecnico">tecnico</option>
            <option value="tecnologo">tecnologo</option>
            <option value="profecional">profecional</option>
            <option value="universitario">universitario</option>
        </select><br>
        <span>Nivel de ingles</span><br>
        <select name="nivel_de_ingles" >
            <span>Nivel de ingles</span>
            <option value="basico">basico</option>
            <option value="intermedio">intermedio</option>
            <option value="avanzado">avanzado</option>
        </select><br>
        <span>lenguajes de programacion</span><br>
        <select name="lenguajes_de_programacion[]" multiple>
            <span>lenguajes de programacion</span>
            <option value="python">python</option>
            <option value="javascript">javascript</option>
            <option value="php">php</option>
            <option value="html">html</option>
            <option value="nodejs">nodejs</option>
            <option value="css">css</option>
            <option value="typescript">typescript</option>
        </select><br>
        <button type="reset">Limpiar</button>
        <button type="submit">enviar</button>
    </form>
</div>
</body>
</html>