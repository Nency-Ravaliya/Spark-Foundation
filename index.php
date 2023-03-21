<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Social media icons footer
            built with Bootstrap 5. Examples of footers with social media icons,
            buttons and button dark theme.">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/dist/mdb5/standard/core.min.css">
    <link rel="stylesheet" id="roboto-subset.css-css" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/mdb5/fonts/roboto-subset.css?ver=3.9.0-update.5" type="text/css" media="all">

    <title>Basic Banking System</title>

    <style>
        body {
            width: 100%;
            height: 100%;
            font-family: 'Times New Roman', Times, serif;

            /* background-attachment: fixed; */
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-bottom: 0;
        }

        .header {
            display: flex;
            justify-content: center;
            background-color: rgba(106, 174, 222, 0.889);
            padding: 15px;
        }


        #navbar {
            overflow: hidden;
            background-color: rgb(97, 89, 89);
            overflow: auto;
            align-items: center;
            height: 20%;
            padding-top: 0px;
        }

        #navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px;
            text-decoration: none;
            font-size: 17px;
        }

        #navbar a:hover {
            background-color: black;
        }

        #navbar a.active {
            background-color: rgb(232, 146, 41);
            color: whitesmoke;
        }

        .back {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            padding-top: 0px;
        }

        .back h1 {
            text-align: center;
            padding-top: 200px;
        }

        .content {
            padding: 16px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky+.content {
            padding-top: 60px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1> <span style="color:rgb(6, 6, 74);">Spark Foundation</span></h1>
        <img src="spark1.png" alt="not found." style="height:40px ;
                width:auto;">
    </div>

    <div id="navbar">
        <a class="active" href="index.php">
            <h6><b>Home</b></h6>
        </a>
        <a href="listofcustomers.php">
            <h6><b>All Customers</b></h6>
        </a>
        <a href="transactionhistory.php">
            <h6><b>History</b></h6>
        </a>
    </div>

    <div class="back">
        <img src="bank5.jpg" alt="photo" style="float: left;">
        <h1> <span style="color:rgb(6, 6, 72);"><b>BASIC BANKING SYSTEM</b></span> </h1>
    </div>

    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/nencyravaliya028/" role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Nency-Ravaliya" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0,
                0.2);">
            nensiravaliya@gmail.com
        </div>
        <!-- Copyright -->

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <script>
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
</body>

</html>