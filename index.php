<!DOCTYPE html>
<html>
    <head>
        <title>Teste com Ajax</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            function callAjax() {
                $("#lista").load("banco.php");
            }
        </script>
    </head>
    <body>
        <div name="cadastro" id="cadastro" onload="callAjax()">
            <form action="recebe.php" method="POST">
                <h1>Texto</h1>
                Campo 1: <input type="text" name="campo1" value="123"><br>
                <br>
                Campo 2: <input type="text" name="campo2" value="321"><br>
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
        <br>
        <button onclick="callAjax()">Ajax</button>
        <br>
        <div name="lista" id="lista">
            <script> callAjax(); </script>
        </div>
    </body>
</html>
