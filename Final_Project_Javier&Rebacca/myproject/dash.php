<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <!-- ======= Styles ====== -->
        <link rel="stylesheet" href="dash.css">
    </head>

    <body>
        <!-- =============== Navigation ================ -->
        <div class="container">
            <div class="navigation">
                <ul>
                <li class="branding">
        <div class="icon">
            <img src="photos/logo.png" alt="logo" />
        </div>
        <div class="title">
            <div class="institute-name">Agricultural Training Institute</div>
            <div class="center-name">International Training Center on Pig Husbandry</div>
            <div class="certification">ISO 9001:2015 Certified</div>
        </div>
    </li>

                    <li>
                        <a href="#">
                            <span class="icon">
                            </span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span class="icon">
                            </span>
                            <span class="title">Profile</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span class="icon">
                            </span>
                            <span class="title">Training & Learning Hub</span>
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            <span class="icon">
                            </span>
                            <span class="title">Inquries</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span class="icon">
                            </span>
                            <span class="title">Setting</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span class="icon">
                            </span>
                            <span class="title">Customer Service</span>
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            <span class="icon">
                            </span>
                            <span class="title">E-books</span>
                        </a>
                    </li>

                    <li>
                        <a href="logout.php">
                            <span class="icon">
                            </span>
                            <span class="title">Log Out</span>
                        </a>
                    </li>

                </ul>
            </div>

            <!-- ========================= Main ==================== -->
            <div class="main">
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>

                    <div class="search">
                        <label>
                            <input type="text" placeholder="Search here">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>

                    <div class="user">
                        <img src="photos/jen.jpg" alt="">
                    </div>
                </div>

                <!-- ================ Module Details List ================= -->
                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>List of Students</h2>
                            <a href="#" class="btn">View All</a>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Courses</td>
                                    <td>Status</td>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Samantha De Vera</td>
                                    <td>National Course on Meat Processing</td>
                                    <td><span class="status delivered">Enrolled</span></td>
                                </tr>

                                <tr>
                                    <td>Abigail Garcia</td>
                                    <td>National Course on Artificial Insemination</td>
                                    <td><span class="status delivered">Enrolled</span></td>
                                </tr>

                                <tr>
                                    <td>Claire Samonte</td>
                                    <td>National Course on Pig Husbandry</td>
                                    <td><span class="status delivered">Enrolled</span></td>
                                </tr>


                                <tr>
                                    <td>Pearl Vergara</td>
                                    <td>Basic Course on Pig Husbandry</td>
                                    <td><span class="status delivered">Enrolled</span></td>
                                </tr>


                                <tr>
                                    <td>Juliane Caballes</td>
                                    <td>National Course on Animal Waste Management & Utilization</td>
                                    <td><span class="status delivered">Enrolled</span></td>
                                </tr>


                                <tr>
                                    <td>Ashley Sarmiento</td>
                                    <td>Practical Course on Pig Husbandry for Stockpersons</td>
                                    <td><span class="status delivered">Enrolled</span></td>
                                </tr>


                                <tr>
                                    <td>Megan Ramirez</td>
                                    <td>National Course on Pig Farming as an Enterprise
    This five-day training i</td>
                                    <td><span class="status delivered">Enrolled</span></td>
                                </tr>


                                <tr>
                                    <td>Stacey Javier</td>
                                    <td>Short Course on Sustainable Pig Farming (LABS-Pigs)</td>
                                    <td><span class="status delivered">Enrolled</span></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <!-- ================= New Customers ================ -->
                    <div class="recentCustomers">
                        <div class="cardHeader">
                            <h2>Students</h2>
                        </div>

                        <table>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="photos/who.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Samantha<br> <span>Italy</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="photos/2.jpeg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Abigail <br> <span>France</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="photos/8.jpeg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Claire<br> <span>South Korea</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="photos/4.jpeg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Pearl<br> <span>Singapore</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="photos/5.jpeg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Juliane <br> <span>New Zealand</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="photos/6.jpeg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Ashley <br> <span>USA</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="photos/7.jpeg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Megan<br> <span>Japan</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="photos/9.jpeg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Stacey<br> <span>China</span></h4>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- =========== Scripts =========  -->
        <script src="script.js"></script>

        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

    </html>