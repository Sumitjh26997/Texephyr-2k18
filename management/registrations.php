<?php
include 'checklogin.php';
function getName($table, $param, $value, $conn, $req)
{
    $select = "select * from $table where $param = $value ";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);
    $name = $row["$req"];
    if (mysqli_num_rows($result) > 0) {
        return $name;
    } else {
        return 0;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrations</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet'
          type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
</head>
<body>
<!-- Left column -->
<div class="templatemo-flex-row">
    <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
            <div class="square"></div>
            <h1>Texephyr '18</h1>
        </header>
        <div class="profile-photo-container">
            <!-- <img src="images/summit.png" alt="Profile Photo" class="img-responsive">  -->
            <div class="profile-photo-overlay"></div>
        </div>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
            <ul>
                <li><a href="analysis.php"><i class="fa fa-bolt fa-fw"></i>Analysis</a></li>
                <li><a href="volunteers.php"><i class="fa fa-user fa-fw"></i>Volunteers</a></li>
<!--                <li><a href="visits.php"><i class="fa fa-motorcycle fa-fw"></i>Visits</a></li>-->
                <li><a href="#" class="active"><i class="fa fa-pencil-square fa-fw"></i>Registrations</a></li>
                <li><a href="events.php"><i class="fa fa-play fa-fw"></i>Events</a></li>
                <li><a href="colleges.php" class=""><i class="fa fa-university fa-fw"></i>Colleges</a></li>
                <li><a href="contactrequests.php"><i class="fa fa-motorcycle fa-fw"></i>Contact Requests</a></li>

                <li><a href="signout.php"><i class="fa fa-sign-out fa-fw"></i>Sign Out</a></li>
            </ul>
        </nav>
    </div>

    <!-- Main content -->
    <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
            <div class="row">

                <nav class="templatemo-top-nav col-lg-12 col-md-12">
                    <h1>Registrations</h1><br>
                    <div class="templatemo-content-container">
                        <div class="templatemo-flex-row flex-content-row">
                            <form class="templatemo-search-form" action="" method='post'>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search using registration ID"
                                           name="searchterm" id="srch-term">
                                    <br><br>
                                    <center><input type="submit" name="submit_search"
                                                   class="templatemo-blue-button"></input></center>
                                </div>
                            </form>
                </nav>

            </div>
        </div>
        <?php


        if (isset($_POST['submit_search'])) {


            $searchterm = $_POST["searchterm"];
            $select = "SELECT * FROM registration WHERE `r_status_del` = 0 AND `r_id` = '" . $searchterm . "'";
//echo $select;
        } else {
            $select = "SELECT * FROM registration WHERE `r_status_del` = 0";
        }


        $result = mysqli_query($conn, $select);

        if (mysqli_num_rows($result) <= 0) {
            ?>
            <div class="templatemo-content-widget white-bg col-2">
                <i class="fa fa-times"></i>
                <div class="square"></div>
                <h2 class="templatemo-inline-block">No Results Found</h2>
            </div>

            <?php
        } else {

            while ($row = mysqli_fetch_array($result)) {
                $r_id = $row['r_id'];
                $r_e_id = $row['r_event_id'];
                $r_v_id = $row['r_volunteer_id'];
                $name = $row['r_p_name'];
                $id = $row['r_id'];
                $r_p_college_id = $row['r_p_college_id'];
                $phone = $row['r_p_phone'];
                $college = getName("college", "c_id", $r_p_college_id, $conn, "c_name");
                $event = getName("event", "e_id", $r_e_id, $conn, "e_name");
                $volunteer = getName("volunteer", "v_id", $r_v_id, $conn, "v_name");


                ?>
                <div class="templatemo-content-widget white-bg col-2">
                    <form action="editregistration.php" method="post">
                        <i class="fa fa-times"></i>
                        <div class="square"></div>
                        <h2 class="templatemo-inline-block">Registration ID:<?php echo $r_id; ?></h2>
                        <br><br>
                        <h3>
                            <table>
                                <tr>
                                    <td>Participant Name</td>
                                    <td align="center" style="width:20px">:</td>
                                    <td><?php echo $name; ?></td>
                                </tr>
                                <tr>
                                    <td>Event Name</td>
                                    <td align="center" style="width:20px">:</td>
                                    <td><?php echo $event; ?></tr>
                                <tr>
                                    <td>College</td>
                                    <td align="center" style="width:20px">:</td>
                                    <td><?php echo $college; ?></td>
                                </tr>
                                <tr>
                                    <td>Volunteer</td>
                                    <td align="center" style="width:20px">:</td>
                                    <td><?php echo $volunteer; ?></td>
                                </tr>


                            </table>
                        </h3>
                        <br>
                        <table>
                            <tr>
                                <td>
                                    <input type="hidden" name="id" value="<?php echo $id; ?>"</td>
                                <input type="submit" class="templatemo-blue-button" value="  Edit   " name="s"></input>
                    </form>
                    </td>
                    <td style="width:50px;"></td>
                    <br>
                    <td>
                        <form action="deleteregistration.php" method="POST">

                            <input type="hidden" name="id" value="<?php echo $id; ?>"</input>
                            <input type="submit" class="templatemo-blue-button" value="Delete" name="delete"></input>
                        </form>
                    </td>
                    <td style="width:50px;"></td>
                    <td>
                        <form action="detail_registration.php" method="POST">

                            <input type="hidden" name="id" value="<?php echo $id; ?>"</input>
                            <input type="submit" class="templatemo-blue-button" value="Details" name="detail"></input>
                        </form>
                    </td>
                    </tr></table>
                </div>
                <?php
            }

        }
        ?>

        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
        <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
        <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
        <script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->
</body>
</html>

<?php mysqli_close($conn); ?>
