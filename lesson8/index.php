<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <body>
        <div class="container">
            <h1 class="page-header">
                hello, <?= $_GET['name'] ?? 'world' ?>
            </h1>
            <div class="row">
                <div class="col-12">
                    <form>
                        <input type="text" name="name" value="<?= $_GET['name'] ?>">
                        <input type="submit" value="let's do it!">
                    </form>
                </div>
            </div>
            <div class="row">
                <pre>
                    <??>
                </pre>
            </div>
        </div>
        <br>
        <div class="text-center fixed-bottom">
            &copy; 2019
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    </body>
</html>