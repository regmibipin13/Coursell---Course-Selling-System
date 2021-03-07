<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coursell - Online Course Streaming Platform</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>
<body>


    <section id="navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand font-weight-bold" href="#">COURSELL</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link login" href="#">Login</a>
                        </li>
                        &nbsp;
                        &nbsp;
                        <li class="nav-item">
                            <a class="nav-link btn btn-custom-primary register" href="#">Join Pro</a>
                        </li>
                    </ul>
                    
                </div>
            </nav>
        </div>
    </section>

    <section id="big-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-box">
                    <h1 class="mb-3">Ready To Learn Something Awesome ?</h1>
                    <h4 class="mb-5">Practical screencasts for awesome developers.</h4>
                    <input type="search" placeholder="Enter name of language , course , category etc .. " class="form-control main-search-bar mb-3">
                    <h5>Or Just <a href="">Browse All Course</a></h5>
                </div>
            </div>
        </div>
    </section>


    <section id="course-lists">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-12 text-center">
                    <h3>Latest Content</h3>
                    <h6 class="text-secondary">Fresh From The Library</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-4 p-4 course-card bg-light">
                    <h5 class="course-title pt-2 pb-2"><a href="">How to Build SPA Filters with Laravel and Vue </a></h5>
                    <div class="course-components d-flex align-items-center mb-3">
                        <div class="time">
                            <i class="fa fa-clock text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">1 hour 21 min</span>
                        </div>
                        &nbsp; &nbsp; &nbsp;
                        <div class="date">
                            <i class="fas fa-calendar-week text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">Released 1 hour ago</span>
                        </div>
                        &nbsp; &nbsp; &nbsp;
                        <div class="users">
                            <i class="fas fa-users text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">Total 119 enrolled</span>
                        </div>
                    </div>
                    <div class="course-category pt-3 pb-3">
                        <a href="">Laravel</a>
                        <a href="">Vue</a>
                        <a href="">PHP</a>
                    </div>
                </div>
                <div class="col-md-12 mb-4 p-4 course-card bg-light">
                    <h5 class="course-title pt-2 pb-2"><a href="">How to Build SPA Filters with Laravel and Vue </a></h5>
                    <div class="course-components d-flex align-items-center mb-3">
                        <div class="time">
                            <i class="fa fa-clock text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">1 hour 21 min</span>
                        </div>
                        &nbsp; &nbsp; &nbsp;
                        <div class="date">
                            <i class="fas fa-calendar-week text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">Released 1 hour ago</span>
                        </div>
                        &nbsp; &nbsp; &nbsp;
                        <div class="users">
                            <i class="fas fa-users text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">Total 119 enrolled</span>
                        </div>
                    </div>
                    <div class="course-category pt-3 pb-3">
                        <a href="">Laravel</a>
                        <a href="">Vue</a>
                        <a href="">PHP</a>
                    </div>
                </div>
                <div class="col-md-12 mb-4 p-4 course-card bg-light">
                    <h5 class="course-title pt-2 pb-2"><a href="">How to Build SPA Filters with Laravel and Vue </a></h5>
                    <div class="course-components d-flex align-items-center mb-3">
                        <div class="time">
                            <i class="fa fa-clock text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">1 hour 21 min</span>
                        </div>
                        &nbsp; &nbsp; &nbsp;
                        <div class="date">
                            <i class="fas fa-calendar-week text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">Released 1 hour ago</span>
                        </div>
                        &nbsp; &nbsp; &nbsp;
                        <div class="users">
                            <i class="fas fa-users text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">Total 119 enrolled</span>
                        </div>
                    </div>
                    <div class="course-category pt-3 pb-3">
                        <a href="">Laravel</a>
                        <a href="">Vue</a>
                        <a href="">PHP</a>
                    </div>
                </div>

                <div class="col-md-12 mb-4 text-center">
                    <a href="" class="btn btn-custom-primary">See All Courses</a>
                </div>
                
            </div>
        </div>
    </section>

    <section id="suscribtion-section" class="bg-light pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="pt-2 pb-4">Unlimited access to everything <br />with pro membership.</h3>
                    <h6 class="text-secondary pb-3">For the price of a few coffees a month you get access to our entire <br />library of content, and more.</h6>
                    <a href="" class="btn btn-lg btn-custom-primary">See Our Plans</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about-author" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{ asset('img/user.jpeg') }}" alt="User Img" width="150" class="img-fluid author-img">
                    <h5 class="text-primary pt-3 pb-1">Sonia Gandiya Ropez</h5>
                    <p class="pb-2">Founder / Author</p>
                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam tempora voluptatem modi. Aliquam explicabo earum vel adipisci itaque omnis provident doloremque quae minima ab. Temporibus consequatur facere voluptatibus eligendi sit!</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright @ 2021 Coursell Ltd . All Rights Reserved . Developed by <a href="">Bipin Regmi</a></p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>