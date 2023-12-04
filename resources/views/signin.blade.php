<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body>
    <div class="card shadow-lg bg-dark-500 m-20 p-5 w-50">
        <div class="title mb-3">
            <div class="theme fw">
                 <p class="h3 fw-">Welcome back!</p>
            </div>
            <div class="theme2">
                <p class="h5">Please enter your details</p>
            </div>
        </div>

        <div class="content">
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
            @endforeach
            <form action="/saveLogin" method="post">
                {{csrf_field()}}
                <div class="email d-flex flex-column mb-2">
                    <label for="">Email</label>
                    <input type="email" name="email" id=""  placeholder="Enter email" >
                </div>
                <div class="passsword d-flex flex-column mb-2">
                    <label for="">Password</label>
                    <input type="password" name="password" id=""  placeholder="Enter password">
                </div>
                <div class="btn align-content-center w-50 ">
                    <input type="submit" value="Sign in">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
