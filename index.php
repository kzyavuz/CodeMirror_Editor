<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Kod Editörü</title>

    <!-- CodeMirror CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/theme/dracula.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/addon/hint/show-hint.css">


</head>

<body>
    <div class="editor-container">
        <h2>PHP Kod Editörü</h2>
        <form action="save.php" method="post">
            <textarea id="editor" name="code"></textarea>
            <br>
            <button type="submit">Kaydet</button>
        </form>
    </div>

    <?php
    include 'script.php';
    ?>
</body>

</html>