<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Death Reminder - Remind yourself to live life to the fullest</title>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

        <style>
            #title{
              font-family: 'Oswald', sans-serif;
              font-size:72px;
            }
            #middle-container{
              position: fixed;
              top: 50%;
              left: 50%;
              /* bring your own prefixes */
              transform: translate(-50%, -50%);
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    </head>
    <body><div id='middle-container'>
            <form method="post" action="{{route('subscription.store')}}"
            <div class='row'>
                  <div id='title' class='text-center'>What is life without death?</div>
                  <div class='input-group'>

                        <input class="form-control" type="text" placeholder="E-mail " />

                        <span class='input-group-btn'>
                            <button class='btn btn-secondary' type='button'>Live Now</button>
                        </span>
                    </div>
            </div>
    </div></body>
</html>
