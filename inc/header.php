<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servis</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"  crossorigin="anonymous">    
    <link rel="stylesheet" href="css/tempus-dominus.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="js/moment.js"></script>
    <script type="text/javascript" src="js/tempus-dominus.js"></script>
    <script src="js/bootstrap.js"></script>        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
</head>
<body>
   <!--Social nav-->
   <nav class=" navbar-light bg-secondary  ">
        <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link text-light" href="#">
                    <i class="fab fa-facebook"></i>
                  </a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">
                       <i class="fab fa-google-plus-square"></i>    
                     </a>
                  </li>
                      <li class="nav-item">
                        <a class="nav-link text-light" href="#">
                           <i class="fab fa-twitter-square"></i>    
                         </a>
                       </li>
        </ul>
    </nav>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
       Calendar
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
              <a class="nav-link text-info " href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info " href="calendar.php">Calendar</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link text-info " href="scheduling.php">Scheduling</a>
                  </li>
            <li class="nav-item">
              <a class="nav-link text-info" href="#">Pricing</a>
            </li>

          </ul>  
        </div>
      </nav>
    
      <div class="container">
            <div class="row">
                <div class="col-sm-6">

                  <form action="insert.php" method="POST">

                    <div class="form-group">
                        <label>Please pick date and time</label>
                        <div class="input-group date"  id="datetimepicker1" data-target-input="nearest">
                            <input type="text" name="date"  class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class=" text-primary far fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">  
                          <label >Your name</label>
                          <input type="text" name="name"  class="form-control " placeholder="name"/>
                          </div>
                          <div class="form-group">  
                              <label >Your email</label>
                              <input type="text" name="email"  class="form-control " placeholder="email"/>
                              </div>
                              <div class="form-group">  
                                  <label >Your phone Number</label>
                                  <input type="text" name="phone"  class="form-control " placeholder="phone"/>
                                  </div>
                                  <div class="form-group"> 
                                    <select class="custom-select mr-sm-2" name="job">
                                      <option selected>Choose type of servis</option>
                                      <option value="Check">Check</option>
                                      <option value="Repair">Repair</option>
                                      <option value="Change">Change</option>
                                     </select>
                                   </div>

                              <button type="submit" class="btn btn-primary mb-2">Make appointment</button>
                          </div>
                      </div> 
                  </div>
                </form>
                </div>

            </div>
        </div>