<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@settings(name)</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="@baseurl()/application/resources/views/frontend/starter/assets/css/bd-coming-soon.css">
</head>

<body class="min-vh-100 d-flex flex-column">

    <header>
        <div class="container">
            <nav class="navbar navbar-dark bg-transparenet">
                <a class="navbar-brand" href="@baseurl()">
                    @settings(logo)
                </a>
                <span class="navbar-text ml-auto d-none d-sm-inline-block">@settings(mobile) </span>
                <span class="navbar-text d-none d-sm-inline-block">@settings(email)</span>
            </nav>
        </div>
    </header>