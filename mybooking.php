<?php
    $time = strtotime(str_replace("-", "/", $_POST["tanggal"]));

    $date_input = date('d-m-Y', $time);

    $check = date('d-m-Y', strtotime($_POST['tanggal'] . " +" . $_POST["durasi"] . " day"));

    // var_dump($_POST["service"]);


    
    if ($_POST["pilihan"]=="Standard"){
        $total = 90 * $_POST["durasi"];
        if (!isset($_POST["service"])) {
            $total;
          }
          else{
            if (count($_POST["service"]) == 1) {
              $total += 20;
            }
            elseif (count($_POST["service"]) == 2){
              $total += 40;
            }
          }
        }

        if ($_POST["pilihan"]=="Superior"){
            $total = 150 * $_POST["durasi"];
            if (!isset($_POST["service"])) {
                $total;
              }
              else{
                if (count($_POST["service"]) == 1) {
                  $total += 20;
                }
                elseif (count($_POST["service"]) == 2){
                  $total += 40;
                }
              }
            }
            if ($_POST["pilihan"]=="luxury"){
                $total = 200 * $_POST["durasi"];
                if (!isset($_POST["service"])) {
                    $total;
                  }
                  else{
                    if (count($_POST["service"]) == 1) {
                      $total += 20;
                    }
                    elseif (count($_POST["service"]) == 2){
                      $total += 40;
                    }
                  }
                }
    
    ?>



<!DOCTYPE html>
<html>




<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>mybooking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link href="style.css" rel="stylesheet" type="text/css" />


    

</head>

<body>

<nav class=" navbar-expand-lg navbar-light " style="background-color:#3461eb">

        <div class="container">


            <div class="row">
                <div class="col-sm-5">

                    
                </div>
                <div class="col-sm">

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="test nav-link">booking</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link">My Booking</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-sm">
                </div>

            </div>
        </div>
    </nav>

            



    <table class="table mt-5 mr-5 ml-3">
        <thead>
            <tr>
                <th scope="col">booking Number</th>
                <th scope="col">Name</th>
                <th scope="col">Check-in</th>
                <th scope="col">Check-out</th>
                <th scope="col">Room Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">service</th>
                <th scope="col">Total Price</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td scope="row">1</td>
                <td><?php echo $_POST["nama"]; ?></td>
                <td><?php echo $date_input; ?> </td>
                <td><?php echo $check; ?></td>
                <td><?= $_POST['pilihan']; ?></td>
                <td><?php echo $_POST["hp"]; ?></td>
                <td>
                    <ul>
                    <li><?php if (isset($_POST["service"])) {echo "Room service";}  ?> </li>
                    <li><?php if (isset($_POST["makan"])) {echo "BreakFast";}  ?> </li>
                    </ul>
                </td>
                
               <td> $<?php echo $total; ?>  </td>
            </tr>
        </tbody>
    </table>


</body>

</html>