<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Social media icons footer
            built with Bootstrap 5. Examples of footers with social media icons,
            buttons and button dark theme.">

    <title>View All Customers</title>
    <style>
        body {
            width: 100%;
            height: 100%;
        }

        .container {
            height: 250px;
            width: 550px;
            background-color: lightcyan;
            border: 2px solid black;
            text-align: left;
            margin-top: 100px;
            margin-left: 400px;
            margin-bottom: 10px;
            padding-left: 30px;
        }

        .card-img-top {
            border: 1px solid black;
        }

        p {
            text-align: center;
        }

        .btn:hover {
            background-color: rgb(49, 209, 49);
        }

        .btn:active {
            background-color: green;
        }

        .btn {
            border: 2px black solid;
            background-color: lightblue;
            border-radius: 5px;
            font-size: 25px;
            align-content: center;
        }

        #email:hover {
            color: blue;
        }
    </style>
</head>

<body>

    <?php
    include 'nav.php';
    ?>

    <div class="details">
        <div class="container">
            <img src="i6.png" class="card-img-top" alt="not found" style="float:
                right;" height="250px" width="" style="border:1px solid black;">
            <p class="card-text">
            <h1><b> Vivek Shah
                </b> </h1>
            <span style="color: rgb(98, 96, 96);"> Doctor
            </span><br><br>
            ADDRESS:Bangalore, Karnataka, 560001
            <br>
            EMAIL:<span id="email">vivek06@gmail.com
            </span> <br>
            AGE:24 <br>
            PHONE:9896235610 <br> <br>
            <form action="transfermoney.php" method="POST">
                <button class="btn" id="btn1" href="transfermoney.php"> Money Transfer</button>
            </form>
            </p>
        </div>

        <div class="container">
            <img src="i7.png" class="card-img-top" alt="..." style="float:
                right;" height="250px" width="" style="border:1px solid black;">
            <p class="card-text">
            <h1><b> Manav Khanna
                </b> </h1>
            <span style="color: rgb(98, 96, 96);"> Data Scientist
            </span><br><br>
            ADDRESS:G-37, Blue Diamond Complex
            <br>
            EMAIL:<span id="email">manav07@gmail.com
            </span> <br>
            AGE:25 <br>
            PHONE:2323434546 <br> <br>
            <form action="transfermoney.php" method="POST">
                <button class="btn" id="btn2" href="transfermoney.php"> Money Transfer</button>
            </form>
            </p>
        </div>

        <div class="container">
            <img src="i3.png" class="card-img-top" alt="..." style="float:
                right;" height="250px" width="" style="border:1px solid black;">
            <p class="card-text">
            <h1><b> Aman Jetani
                </b> </h1>
            <span style="color: rgb(98, 96, 96);"> Web developer
            </span><br><br>
            ADDRESS:88/38, Malleshwaram, Bangalore
            <br>
            EMAIL:<span id="email">aman03@gmail.com
            </span> <br>
            AGE:25 <br>
            PHONE:9856231425 <br> <br>
            <form action="transfermoney.php" method="POST">
                <button class="btn" id="btn3" href="transfermoney.php"> Money Transfer</button>
            </form>
            </p>
        </div>

        <div class="container">
            <img src="i5.png" class="card-img-top" alt="..." style="float:
                right;" height="250px" width="" style="border:1px solid black;">
            <p class="card-text">
            <h1><b> Megha Chaturvedi
                </b> </h1>
            <span style="color: rgb(98, 96, 96);"> Teacher
            </span><br><br>
            ADDRESS:67, Frazer Town, Bangalore
            <br>
            EMAIL:<span id="email">megha05@gmail.com
            </span> <br>
            AGE:36 <br>
            PHONE:4589756325 <br> <br>
            <form action="transfermoney.php" method="POST">
                <button class="btn" id="btn4" href="transfermoney.php"> Money Transfer</button>
            </form>
            </p>
        </div>

        <div class="container">
            <img src="i1.png" class="card-img-top" alt="..." style="float:
                right;" height="250px" width="" style="border:1px solid black;">
            <p class="card-text">
            <h1><b> Nisha Benarji
                </b> </h1>
            <span style="color: rgb(98, 96, 96);"> Professor
            </span><br><br>
            ADDRESS:Gf-13, Ivory Terrace,Alkapuri
            <br>
            EMAIL:<span id="email">nisha01@gmail.com
            </span> <br>
            AGE:27 <br>
            PHONE:1425369685 <br> <br>
            <form action="transfermoney.php" method="POST" v>
                <button class="btn" id="btn5" href="transfermoney.php"> Money Transfer</button>
            </form>
            </p>
        </div>

        <div class="container">
            <img src="i2.png" class="card-img-top" alt="..." style="float:
                right;" height="250px" width="" style="border:1px solid black;">
            <p class="card-text">
            <h1><b> Alish Ranan
                </b> </h1>
            <span style="color: rgb(98, 96, 96);"> Scientist
            </span><br><br>
            ADDRESS:5, Surya Complex, Vadodara
            <br>
            EMAIL:<span id="email">alish02@gmail.com
            </span> <br>
            AGE:45 <br>
            PHONE:2545658514 <br> <br>
            <form action="transfermoney.php" method="POST">
                <button class="btn" id="btn6" href="transfermoney.php"> Money Transfer</button>
            </form>
            </p>
        </div>

        <div class="container">
            <img src="i9.png" class="card-img-top" alt="..." style="float:
                right;" height="250px" width="" style="border:1px solid black;">
            <p class="card-text">
            <h1><b> Heli Patel
                </b> </h1>
            <span style="color: rgb(98, 96, 96);"> Android developer
            </span><br><br>
            ADDRESS:G F 11, Antriksh Bhawan, patana
            <br>
            EMAIL:<span id="email">Heli09@gmail.com
            </span> <br>
            AGE:24 <br>
            PHONE:45023698451 <br> <br>
            <form action="transfermoney.php" method="POST">
                <button class="btn" id="btn7" href="transfermoney.php"> Money Transfer</button>
            </form>
            </p>
        </div>

        <div class="container">
            <img src="i4.png" class="card-img-top" alt="..." style="float:
                right;" height="250px" width="" style="border:1px solid black;">
            <p class="card-text">
            <h1><b> Nayan Sainam
                </b> </h1>
            <span style="color: rgb(98, 96, 96);"> Actor</span><br><br>
            ADDRESS:2, Hotel Kamadhenu Building<br>
            EMAIL:<span id="email">naman04@gmail.com
            </span> <br>
            AGE:26 <br>
            PHONE:4586966323 <br> <br>
            <form action="transfermoney.php" method="POST">
                <button class="btn" id="btn8" href="transfermoney.php"> Money Transfer</button>
            </form>
            </p>
        </div>

        <div class="container">
            <img src="i10.png" class="card-img-top" alt="..." style="float:
                right;" height="250px" width="" style="border:1px solid black;">
            <p class="card-text">
            <h1><b> Samir Bhatiya
                </b> </h1>
            <span style="color: rgb(98, 96, 96);"> Cloud Architecture
            </span><br><br>
            ADDRESS:Hulmavu Main Road, Jamnagar<br>
            EMAIL:<span id="email">samir10@gmail.com
            </span> <br>
            AGE:27 <br>
            PHONE:12124556 <br> <br>
            <form action="transfermoney.php" method="POST">
                <button class="btn" id="btn9" href="transfermoney.php"> Money Transfer</button>
            </form>
            </p>
        </div>

        <div class="container">
            <img src="i8.png" class="card-img-top" alt="..." style="float:
                right;" height="250px" width="" style="border:1px solid black;">
            <p class="card-text">
            <h1><b> Asha Keshwala
                </b> </h1>
            <span style="color: rgb(98, 96, 96);"> Doctor</span><br><br>
            ADDRESS:Nr Sai Baba Mandir, Virar<br>
            EMAIL:<span id="email">asha08@gmail.com
            </span> <br>
            AGE:24 <br>
            PHONE:9896562341 <br> <br>
            <form action="transfermoney.php" method="POST">
                <button class="btn" id="btn10" href="transfermoney.php"> Money Transfer</button>
            </form>
            </p>
        </div>
    </div>
</body>

</html>