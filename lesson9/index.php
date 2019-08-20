<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    
    <style>

        body{
            height:50vh;
        }
        .container{
            margin-top: 50vh;
            transform:translateY(-50%)
        }
        input{
            margin: 0.25em;
        }
        img{
            height: 10em;
            
            margin-left: 50%;
            transform:translateX(-50%);

            margin-bottom:1em;
        }
        form{
            padding:0.5em;
        }
    </style>

</head>
<body>

    <div class="container ">
        <div class="row">

            <div class="col-4 offset-4">

                <form class ="border border-secondary bg-light" method="post" action="form-handler.php">
                    <div>
                        <img class="border border-secondary bg-light rounded-circle" src="media/manager.svg" alt="logoIcon">
                    </div>
                    
                    <div class="input-group">
                        <input class="form-control" placeholder="Name" type="text" name="userName">
                    </div>
                    <div class="input-group">
                        <input class="form-control" placeholder="eMail" type="email" name="email">
                    </div>
                    <div class="input-group">
                        <input class="form-control" placeholder="Phone" type="tel" name="phone">
                    </div>
                    <div class="text-center">
                        <input class="btn btn-primary" type="submit" value="Let's do it">
                    </div>          
                </form>

            </div>

        </div>
    </div>
    
</body>
</html>