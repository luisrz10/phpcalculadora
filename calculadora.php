<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js ">
    </script>
    <link rel="stylesheet" href="main.css">
    <title>calculadora</title>
</head>

<body>

    <div class="container">
        <h1>CALCULADORA</h1>

        <form>
            <label>NUMERO 1</label>
            <input type="number" max="10000" min="0" placeholder="0" id="numero1" autofocus>
            <label>NUMERO 2</label>
            <input type="number" max="10000" min="0" placeholder="0" id="numero2">
            <hr>
            <input type="button" style="color: rgb(240, 2, 220);" class="btn btn-outline-info" onclick="Sumar()" value="SUMAR" required>
            <input type="button" style="color: rgb(23, 1, 223)" class="btn btn-outline-info" onclick="Restar()" value="RESTAR" required>
            <input type="button" style="color: rgb(193, 247, 1);" class="btn btn-outline-info" onclick="Multiplicacion()" value="MULTIPLICACIÓN"
                required>
            <input type="button" style="color: rgb(73, 20, 221)5, 42, 165);" class="btn btn-outline-info" onclick="Division()" value="DIVISIÓN" required>
            <input type="button" style="color: rgb(9, 194, 9);" class="btn btn-outline-info" onclick="Potenciacion()" value="POTENCIACIÓN" required>
        </form>
        <hr>
    </div><br>
    <div id="Resultado" class="container"></div>

    <script>
        var R = document.getElementById("Resultado");

        function Propiedades() {
            R.style.borderStyle = "Solid"
            R.style.textAlign = "center"
            R.style.fontFamily = "areal"
            R.style.fontSize = "20px"
            R.style.color = "green"
        }

        function obtenerValores() {
            var n1 = document.getElementById("numero1").value;
            n1 = parseInt(n1, 10);
            var n2 = document.getElementById("numero2").value;
            n2 = parseInt(n2, 10)
            return [n1, n2]
        }

        function Sumar() {
            [n1, n2] = obtenerValores();
            Propiedades()
            R.innerHTML = "LA SUMA DE LOS NUMEROS ES :" + (n1 + n2);

        }

        function Restar() {
            [n1, n2] = obtenerValores();
            Propiedades()
            R.innerHTML = "LA RESTA DE LOS NUMEROS ES :" + (n1 - n2);

        }

        function Multiplicacion() {
            [n1, n2] = obtenerValores();
            Propiedades()
            R.innerHTML = "LA MULTIPLICACIÓN DE LOS NUMEROS ES:" + (n1 * n2);

        }

        function Division() {
            [n1, n2] = obtenerValores();
            Propiedades()
            if (n2 === 0)
                d = "Error: Division por 0"
            else
                d = n1 / n2;
            R.innerHTML = "LA DIVISIÓN DE LOS NUMEROS ES:" + (d);

        }

        function Potenciacion() {
            [n1, n2] = obtenerValores();
            Propiedades()
            R.innerHTML = "LA POTENCIACIÓN DE LOS NUMEROS ES :" + (Math.pow(n1, n2));

        }

    </script>

</body>

</html>