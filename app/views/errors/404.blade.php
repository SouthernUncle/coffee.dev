<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')

    <style type="text/css">
        h1, h2 {
            text-align: center;
            color: white;
        }

        html { 
            background: url(/img/coffee/coffee2.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        section {
            background-color: black; 
        }
    </style>
</head>

<header>
    @include('layouts.partials.nav')
</header>

<body id="page-top" class="index" data-spy="scroll" data-target=".navbar" data-offset="50">
    <section>
        <div class="container bg">
            <h1>
                Nope...
            </h1>
            <h2>
                This isn't a thing.
                <br>
                Go somewhere else.
            <h2>
        </div>
    </section>
</body>