
<!doctype html>
<html lang="en">
<head>
    <title>work in progress</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">
    <!-- Font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="include/stylesheets/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="include/stylesheets/themify-icons.css">
    <!-- Main css -->
    <link href="include/stylesheets/about.css" rel="stylesheet">
    <!-- <link href="include/stylesheets/style.css" rel="stylesheet"> -->
</head>

<body  onload="loadSymptoms('#symptoms1')">

    <!-- Nav Menu -->
    <div class="nav-menu fixed-top is-scrolling">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="#"><img src="include/images/LOGO.jpg" class="img-fluid" alt="WELL-O-CITY"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="/">HOME <span class="sr-only">(current)</span></a> </li>

                                <li class="nav-item"> <a class="nav-link" href="#gallery">ABOUT</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="contact.php">CONTACT</a> </li>
                                <li class="nav-item"><a href="#" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Download</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    
    <br>
    <div class="col-lg-6 mx-auto border border-dark p-5 mt-5 m-3">
        <form action="#" id="form" class="">
            <div class="form-row align-items-center">
                <div class="col-sm-6 my-1">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" min="0" max="100" id="age" name="age"
                        placeholder="Your Age" required>
                </div>
                <div class="col-sm-6 my-1">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option selected disabled>Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="col-sm-12 my-1" id="symptom_div1">
                    <label for="symptoms1">Symptoms</label>
                    <select class="form-control symptom" id="symptoms1" required name="symptoms"
                        onchange="addOneMore(1)">
                        <option></option>
                    </select>
                </div>
                <div class="col-auto my-1">
                    <button type="submit" id="submit_data" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-lg-6 mx-auto bg-light border border-danger rounded text-white p-3 py-5" id="report">


    </div>


    <!-- jQuery and Bootstrap -->
    <script src="include/js/jquery-3.2.1.min.js"></script>
    <script src="include/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="include/js/script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./symptoms.js"></script>
</body>

    <!-- <script src="/js/script.js"></script> -->

    <!-- Custom JS -->
     

</body>

</html>