<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: 100%;
            height: 100%;
            font-family: 'Times New Roman', Times, serif;
        }

        #navbar {
            overflow: hidden;
            background-color: rgb(97, 89, 89);
        }

        #navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
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
    <div id="navbar">
        <a class="active" href="index.php"><b>Home</b></a>
        <a href="listofcustomers.php"><b>All Customers</b></a>
        <a href="transactionhistory.php"><b>History</b></a>
    </div>
</body>

</html>