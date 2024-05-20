<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords </title>
</head>

<body>

    <div class="container">

        <h1>Scrivi un testo e poi dimmi quale porola vuoi che sia censurata con ***</h1>
        <form action="greeting.php" method="GET">
            <div class="container-fluid">
                <textarea class="form-control form-control-lg" placeholder="scrivi qui il testo" rows="5" name="user_write" style="width: 50vw; height: 100px";></textarea>
            </div>

            <textarea class="form-control" placeholder="scrivi qui la parola da censurare" style="height: 50px" name="censured_word"></textarea>

            <button type="submit">Invia</button>
        </form>

    </div>

</body>

</html>