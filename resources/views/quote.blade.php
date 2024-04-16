
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Gallery·Treasure</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
            .section-background2 {
                background-image: url('{{ asset('images/background2.jpg') }}');
                background-size: cover;
                background-position: center;
                height: 100vh; /* Set the height to fill the viewport */
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .content {
                background-color: rgba(255, 255, 255, 0.8); /* Background color with opacity */
                padding: 2rem;
                border-radius: 10px;
            }
        }
    </style>
</head>
<body>

<div class="section-background2">
    <main class="container">
        <div class="content bg-light p-5 rounded">
            <h1>Quote</h1>
            <hr class="featurette-divider">
            <p class="lead">{{$post->excerpt}}</p>
            <a class="btn btn-lg btn-primary" href="/" role="button">Homepage &raquo;</a>
        </div>
    </main>
</div>

<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
