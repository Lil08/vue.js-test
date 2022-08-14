<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Test vue.js</title>
</head>
<body>

<div class="container pt-5">
    <div class="row mb-3">
        <div class="col"><h1>Images</h1></div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label for="search">Find your image</label>
                <input type="text" class="form-control" id="search">
            </div>
            <ul class="list-group ">
                <li class="list-group-item list-group-item-action">1</li>
                <li class="list-group-item list-group-item-action">2</li>
                <li class="list-group-item list-group-item-action">3</li>
            </ul>
        </div>
        <div class="col-md-7 ">
            <div class="row">
            <div class="col-md-5">
                <h2>Name</h2>
                <img src="images/1.jpg" alt="" width="270px">
            </div>
            <div class="col-md-7 mt-3">
                <h5> Image details </h5>
                <p>Description image</p>
                <p>Price</p>
                <button class="btn btn-outline-success mr-3">Show price</button>
                <button class="btn btn-primary">Buy</button>
            </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>