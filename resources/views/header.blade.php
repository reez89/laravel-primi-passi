<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel First Steps</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        height: 100vh;
        display: flex;
        flex-flow: column;
        justify-content: space-between;
    }
    #header{
        height: 100px;
        width: 100vw;
        padding: 0 1.2rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: lightblue;
    }
    .logo img{
        height: 50px;
    }

    #footer{
        height: 100px;
        width: 100vw;
        padding: 0 1.2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: lightblue;
    }
</style>

<body>

<header id="header">
    <div class="title">
        <h1> <a href="#">Questo è il mio primo progetto Laravel</a></h1>
    </div>
    <div class="logo">
        <img src="/img/1200px-Laravel.svg.png" alt="">
    </div>
</header>