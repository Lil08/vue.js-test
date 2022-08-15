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

<div class="container pt-5" id="app">
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
                <li     v-for="(image, index) in images"
                        v-on:click="selectImage(index)"
                        class="list-group-item list-group-item-action"
                        :class="{'active': selectedImageIndex === index}"
                >
                    {{image.name}}
                </li>
            </ul>
        </div>
        <div class="col-md-7 ">
            <div class="row">
            <div class="col-md-5">
                <h2>{{image.name}}</h2>
                <img :src="image.image" :alt="image.name" width="270px">
            </div>
            <div class="col-md-7 mt-3">
                <h5> Image details </h5>
                <p>{{image.descr}}</p>
                <p v-if="hidePrice">{{image.price}}</p>
                <button class="btn btn-outline-success mr-3" v-on:click="hidePrice = true">Show price</button>
                <button class="btn btn-primary">Buy</button>
            </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="js/app.js"></script>
</body>
</html>