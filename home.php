<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Filip Chudiak</title>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Balsamiq+Sans?subset=latin">
    <script type="text/javascript" charset="utf-8"></script>

    <style>
        body {
            background-image: url("body.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .jumbotron {
            background: transparent;
            padding: 20px 30px 0px 30px;
            height: 100px;
            margin: 0px;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: #484848;
            text-align: center;
            background-color: #ced1d2;
        }

        .footer p {
            margin: 5px;
            font-size: 12px;
        }

        #myTab {
            background-color: transparent;
        }

        a {
            color: black;
        }

        a:hover {
            color: darkred;
        }

        .container {
            padding-top: 40px;
            text-align: center;

        }

        #avg {
            font-size: 12px;
        }

        #th-day {
            font-size: 12px;
            margin: 10px 0px 0px 0px;
        }

        table {
            background:rgba(255,255,255,0.35);
        }
        
    </style>
</head>

<body>
    <div class="jumbotron text-center">
        <h3>Meteostanica</h3>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab"  href="#home" role="tab" aria-controls="home"
                aria-selected="true">Domov</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" href="graph.php" role="tab">Grafy</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" href="actuall.php" role="tab">Vypis</a>
        </li>
    </ul>
    </div>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container">
                <div class="row" style="padding-top: 50px;" ;>
                    <div class="col row">
                        <div class="col">
                            <img src="teplomer.png" alt="Test Image" height="100px" style="float: left;"/>
                            <h3>20°C</h3>
                            <h6>Teplota</h6>
                        </div>
                    </div>
                    <div class="col row">
                        <div class="col">
                            <img src="humidity.png" alt="Test Image" height="100px" style="float: left;" />
                            <h3>20%</h3>
                            <h6>Vlhkosť</h6>
                        </div>
                    </div>
                    <div class="col row">
                        <div class="col">
                            <img src="bulb.png" alt="Test Image" height="100px" style="float: left;" />
                            <h3>0%</h3>
                            <h6>Svietivosť</h6>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 80px;" ;>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">

                                </th>
                                <th scope="col">

                                </th>
                                <th scope="col">

                                </th>
                                <th scope="col">

                                </th>
                                <th scope="col">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                            <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>© 2020 Copyright <b>Filip Chudiak</b></p>
    </div>

</body>

</html>