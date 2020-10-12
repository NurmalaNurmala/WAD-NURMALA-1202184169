<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link href="style.css" rel="stylesheet" type="text/css" />


</head>
<body>

<nav class=" navbar-expand-lg navbar-light bg-primary">

<div class="container">


    <div class="row">
        <div class="col-sm-5">

        

        </div>
        <div class="col-sm">

        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                                <a class="nav-link" href=" Home.php">Home</a>
                          </li>
                    
                            <li class="nav-item">
                                <a class="nav-link" href="Booking.php">Booking</a>
                            </li>
                </ul>
            </div>

        </div>

        <div class="col-sm">
        </div>
</nav>
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-sm bg-white">

                <form action="#mybooking.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="nama">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Check-in</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Duration</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="durasi">
                    </div>

                    <div>
                        <p>Room Type</p>
                        <select class="custom-select" name="pilihan">
                            <option value="luxury" >luxury</option>
                        </select>
                    </div>
                    <br>
                    <p>Add Service</p>
                    <p id="ukuran">$ 20/Service</p>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Room Service" id="defaultCheck1" name="service[]">
                    <label class="form-check-label" for="defaultCheck1">
                        Room Service
                    </label>
                    </div>
                    <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Breakfast" id="defaultCheck2" name="service[]">
                        <label class="form-check-label" for="defaultCheck2">
                        Breakfast
                        </label>
                    </div>
                    </div>
    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone Number</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="phone">
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            <a class="nav-link" href="MyBooking.php"> <input type="submit" class="btn btn-primary btn-lg btn-block" value = "Booking"> </a>
                        </div>
                    </div>


                </form>
            </div>

            <!-- gambar -->

            <div class=" col-sm pt-5 pb-5 ">

                <style>
                    .embed-container {
                        position: relative;
                        padding-bottom: 60%;
                        height: 0;
                        overflow: hidden;
                        max-width: 100%;
                    }

                    .embed-container iframe,
                    .embed-container object,
                    .embed-container embed {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                    }
                </style>

                <div class='embed-container'>

                <img src="https://sc02.alicdn.com/kf/HTB1QCEVXifrK1RjSspbq6A4pFXaY/Modern-5-star-hotel-Interior-Design-Bedroom.jpg_350x350.jpg" alt="hotel" class="col-11">


                </div>
            </div>
        </div>

    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>