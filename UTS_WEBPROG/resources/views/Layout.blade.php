<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{url('template.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="Title d-flex justify-content-center align-items-center" >
            <h1>Giant Book Supplier</h1>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto" >
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($categories as $category)
                        <a class="dropdown-item" href="/category/{{$category->id}}">{{$category->name}}</a>
                    @endforeach
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Publisher">Publisher</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Contact">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>

    @yield('content')

    <footer>
        <div class="d-flex justify-content-center align-items-center fixed-bottom" style="background-color:#4a7c59; color:white; padding: 5px 0px">
            <span>&copy; Giant Supplier Book<br>2440045161 - Audia Maharani </span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
