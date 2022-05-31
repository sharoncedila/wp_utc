<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <header>
        <div class="store-name">
            <div class="p-4 mb-2 bg-secondary text-white bg-gradient text-center">
                <h1>HAPPY BOOK STORE</h1>
            </div>
        </div>


        <div class="navigation-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle navbar-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                          <li><a class="dropdown-item" href="/booklist/1">Fiction</a></li>
                          <li><a class="dropdown-item" href="/booklist/2">Science</a></li>
                          <li><a class="dropdown-item" href="/booklist/3">Computer</a></li>
                          <li><a class="dropdown-item" href="/booklist/4">Fantasy</a></li>
                          <li><a class="dropdown-item" href="/booklist/5">Werewolf</a></li>
                          <li><a class="dropdown-item" href="/booklist/6">Thriller</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/contact">Contact</a>
                      </li>
                    </ul>
                    </div>
                </div>
              </nav>
        </div>
    </header>

    <div class="body-content">
        <div class="content-center">
            @yield('content')
        </div>

        <div class="content-right">
            <p class="text-white text-center rounded-pill p-category">Category</p>
            <button type="button btn-genre" class="btn btn-outline-warning">
                <a class="genre" href="/booklist/1">Fiction</a>
            </button> <br> 
            <button type="button btn-genre" class="btn btn-outline-warning">
                <a class="genre" href="/booklist/2">Science</a>
            </button> <br>
            <button type="button btn-genre" class="btn btn-outline-warning">
                <a class="genre" href="/booklist/3">Computer</a>
            </button> <br>
            <button type="button btn-genre" class="btn btn-outline-warning">
                <a class="genre" href="/booklist/4">Fantasy</a>
            </button> <br>
            <button type="button btn-genre" class="btn btn-outline-warning">
                <a class="genre" href="/booklist/5">Werewolf</a>
            </button> <br>
            <button type="button btn-genre" class="btn btn-outline-warning">
                <a class="genre" href="/booklist/6">Thriller</a>
          </button>
        </div>
    </div>

    <footer class="bg-secondary text-white bg-gradient text-center fixed-bottom">
        ©️ Happy Book Store 2021
    </footer>

    <style>        
        .text-white{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .navigation-bar{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body-content{
            display: flex;
            flex-direction: row;
            gap: 5%;
            justify-content: center;
            /* align-items: center; */
        }

        .genre {
            text-decoration: none;
            color: black;
        }

        .p-category{
            padding: 0.75em;
            background-color: #efcc00;
        }

        .content-right{
            display: flex;
            flex-direction: column;
            width: 10em;
        }

        .btn-genre{
            align-items: center;
            width: 100px;
            margin-bottom: 1em;
        }
    </style>

  </body>
</html>