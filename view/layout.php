<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Создай свою страницу за пару минут</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="./view/css/styles.css" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-bg-dark">
    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">

        {{ header }}

        <main class="px-3">
            {{ content }}
        </main>

        {{ footer }}
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>