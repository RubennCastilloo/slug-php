<?php 

    $path=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    $slug=substr($path,strrpos($path,'/')+1);
    // $slug=substr($_SERVER['REQUEST_URI'],8);

    // echo $slug;
    // echo $path;
    // echo $slug;


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Slug: <?php echo $slug; ?></h2>
    <form>
        <input type="text" placeholder="Escribe el slug" id="slug">
        <button id="save">Guardar</button>
    </form>

    <div class="msg"></div>

    <script>
        document.querySelector('#save').addEventListener('click', e => {
            e.preventDefault();

            slug = document.querySelector('#slug').value.trim(),
            msg = document.querySelector('.msg');

            msg.innerHTML = `<a href="${slug}">${slug}</a>`;  

            

        })
    </script>
</body>
</html>