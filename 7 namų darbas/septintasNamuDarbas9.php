<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>9 uzduotis</title>
</head>
<style>
body {
    background: gray;
}

button {
    margin-top: 20px;
}
</style>

<body>
    <div >
        <form action="" method="post">
            <?php foreach (array_slice(range('A','J'), 0, rand(3, 10)) as $value) : ?>
            <div>
                <input type="checkbox" id="<?=$value?>"><label for="<?=$value?>"><?=$value?></label>
            </div>
            <?php endforeach ?>
            <button type="submit">Daryk</button>
        </form>
    </div>
    <h1></h1>

</body>

</html>