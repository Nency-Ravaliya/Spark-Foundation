<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
        button {
            transition: 1.5s;
            background-color: lightblue;
        }

        button:hover {
            background-color: green;
            color: white;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-top: 40px;
        }

        #customers td,
        #customers th {
            border: 1px solid whitesmoke;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: cornflowerblue;
            color: white;
        }

        th {
            text-align: left;
        }
    </style>
</head>


<body>

    <?php
    include 'MySQL.php';
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn, $sql);
    ?>

    <?php
    include 'nav.php';
    ?>

    <div class="container">
        <h2><span style="color:rgb(6, 6, 72);" class="money">TRANSFER MONEY</span></h2>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table id="customers" class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center py-2">ID</th>
                                <th scope="col" class="text-center py-2">NAME</th>
                                <th scope="col" class="text-center py-2">BALANCE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td class="py-2"><?php echo $rows['id'] ?></td>
                                    <td class="py-2"><?php echo $rows['name'] ?></td>
                                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                                    <td style="background-color:cornflowerblue; text-align:center"><a href="selecteduserdetails.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn">Transfer</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>