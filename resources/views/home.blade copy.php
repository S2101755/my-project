<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .features {
            padding: 100px 0;
            text-align: center;
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 24px;
            z-index: 2;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .prev { left: 10px; }
        .next { right: 10px; }

        .hero {
            position: relative;
            padding: 100px 0;
            text-align: center;
            background-size: cover;
            background-position: center;
        }

        .slideshow-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .mySlides {
            display: none;
        }

        .slideshow-image {
            width: 100%;
            height: 555px;
            object-fit: cover;
        }

        .container {
            position: relative;
            z-index: 1; /* Ensure container stays behind buttons */
        }

        .text-with-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .btn-with-shadow {
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">{{ $appName }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('listings') }}">RENT</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('list') }}">LIST</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="slideshow-container">
            @foreach($slides as $index => $slide)
                <div class="mySlides" style="display: {{$index == 0 ? 'block' : 'none'}};">
                    <img src="{{ asset($slide) }}" class="slideshow-image">
                </div>
            @endforeach
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                <h1 class="text-with-shadow">Welcome to {{ $appName }}</h1>
                <h1 class="text-with-shadow">{{ $appTitle }}</h1>
                <p class="lead text-with-shadow">{{ $appCaption }}</p>
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg btn-with-shadow">{{ $btnText }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <h2>FEATURES</h2>
            <div class="row">
                @foreach($features as $feature)
                    <div class="col-md-4">
                        <h3>{{ $feature['title'] }}</h3>
                        <p>{{ $feature['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} {{ $appName }}. All rights reserved.</p>
        </div>
    </footer>

    <script>
        var slideIndex = 0;
        var slides = document.getElementsByClassName("mySlides");

        function showSlides() {
            slides[slideIndex].style.display = "none";
            slideIndex = (slideIndex + 1) % slides.length;
            slides[slideIndex].style.display = "block";
            setTimeout(showSlides, 10000);
        }

        function plusSlides(n) {
            slides[slideIndex].style.display = "none";
            slideIndex = (slideIndex + n + slides.length) % slides.length;
            slides[slideIndex].style.display = "block";
        }

        showSlides();

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>
</html>
