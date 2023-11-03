<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <title>Document</title>
</head>
<body>

    <div class="row" >
        <div class="col-md-6" style="  background-image: url('{{ asset('img/bg6.jpg') }}');  background-size: cover;background-repeat: no-repeat;">

                Hello
        </div>

        <div class="col-md-6">
            <form method="POST" action="">
                <div class="col-md-6">
                    <input type="text" class="form-control" style = "margin-bottom:10px; margin-top:50%;" placeholder="FIRST NAME" name = "fname" id = "fname" />
            </div>
            <div class="col-md-6">
                <input type="text" placeholder="LAST NAME" style = "margin-bottom:10px; margin-top:50%;"  class="form-control"  name = "lname" id = "fname" />
            </div>


                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="USERNAME" name = "username" id = "username" />
            </div>
            <div class="col-md-6">
                <input type="text" placeholder="EMAIL ADDRESS" class="form-control"  name = "lname" id = "fname" />
            </div>


            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="PASSWORD" name = "fname" id = "fname" />
        </div>
        <div class="col-md-6">
            <input type="text" placeholder="CONFIRM PASSWORD" class="form-control"  name = "lname" id = "fname" />
        </div>


        <button class="btn btn-primary btn-lg" style="margin-top:10px;width: 80%;" > Submit </button>
            </form>


        </div>


    </div>


</body>
</html>
