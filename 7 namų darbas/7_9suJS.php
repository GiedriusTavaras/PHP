<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
    background: grey;
}

label {
    color: #b6b623;
}

button {
    margin-top: 20px;
}
</style>

<body id="body">
    <div id="forma">
        <?php foreach (array_slice(range('A','J'), 0, rand(3, 10)) as $value) : ?>
        <div>
            <input type="checkbox" id="<?=$value?>"><label for="<?=$value?>"><?=$value?></label>
        </div>
        <?php endforeach ?>
        <button>Daryk</button>
    </div>
    <div id="info"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="http://localhost/NamuDarbai/7namuDarbas/7_9suJS.js"></script>
</body>

</html>