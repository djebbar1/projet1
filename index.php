<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="connexion.css" rel="stylesheet" type="text/css">

    <title>Clinique</title>
</head>
<body>
    <div id="bo">
        <div id="lav">
            <h1>Logiciel de gestion d'animaux</h1>
            <h2>Nos amies les bêtes</h2>
        </div>
        <div id="lab">
            <div id="la">
                <label for="name">Code</label>
                <input type="password" id="name" name="name" required minlength="4" maxlength="8" size="10" OnClick="window.location.href='page_clin.php'">
                
            </div>
            <div id="but">
                <button class="connexion" type="button" OnClick="window.location.href='page_connect.php'">Connexion client</button>    
            </div>
        </div>
    </div>
</body>
</html>
<style>
    h1,h2{text-align: center;}
    body {
        /*width: 600px;
        height: 600px;
        margin: 0 auto;*/
        background-color: grey;
        /*padding: 0 20px 20px 20px;
        border: 5px solid black;*/
        line-height: 2;}
    #bo {
        width: 600px;
        height: 600px;
        margin: 0 auto;
        background-color: #D3D3D3;
        padding: 0 20px 20px 20px;
        border: 5px solid black;
        line-height: 2;}
    #lav{ line-height: 2;}
    #la{width: 200px;
        height: 100px;
        margin: 0 auto;
        text-align: center;
        background-color: #FF9500;
        padding: 0 20px 20px 20px;
        border: 5px solid black;
        line-height: 8;}
    #bu{width: 200px;
        height: 100px;
        margin: 0 auto;
        text-align: center;
        background-color: #FF9500;
        padding: 0 20px 20px 20px;
        border: 5px solid black;
        line-height: 2;}
    label{}
</style>
<script>

</script>