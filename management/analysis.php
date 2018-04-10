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
    <title>Analysis</title>
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
                <li><a href="#" class="active"><i class="fa fa-bolt fa-fw"></i>Analysis</a></li>
                <li><a href="volunteers.php"><i class="fa fa-user fa-fw"></i>Volunteers</a></li>
<!--                <li><a href="visits.php"><i class="fa fa-motorcycle fa-fw"></i>Visits</a></li>-->
                <li><a href="registrations.php"><i class="fa fa-pencil-square fa-fw"></i>Registrations</a></li>
                <li><a href="events.php"><i class="fa fa-play fa-fw"></i>Events</a></li>
                <li><a href="colleges.php" class=""><i class="fa fa-university fa-fw"></i>Colleges</a></li>
                <li><a href="contactrequests.php"><i class="fa fa-motorcycle fa-fw"></i>Contact Requests</a></li>

                <li><a href="signout.php"><i class="fa fa-sign-out fa-fw"></i>Sign Out</a></li>
            </ul>
        </nav>
    </div>

    <!-- <img src="images/summit.png" alt="Profile Photo" class="img-responsive">  -->


    <!-- Main content -->
    <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
            <div class="row">
                <nav class="templatemo-top-nav col-lg-12 col-md-12">
                    <h1>Analysis</h1><br>
                    <div class="templatemo-content-container">
                        <div class="templatemo-flex-row flex-content-row">
                </nav>


            </div>
        </div>

        <?php

        // number of vol
        $vol_count = "SELECT COUNT(*) as total from volunteer ";
        $query1 = mysqli_query($conn, $vol_count);
        $data1 = mysqli_fetch_assoc($query1);

        //no of event
        $event_count = "SELECT COUNT(*) as total from event";
        $query2 = mysqli_query($conn, $event_count);
        $data2 = mysqli_fetch_assoc($query2);


        $reg_count = "SELECT COUNT(*) as total from registration where r_status_del=0 ";
        $query3 = mysqli_query($conn, $reg_count);
        $data3 = mysqli_fetch_assoc($query3);


        $colg_count = "SELECT COUNT(*) as total from college";
        $query4 = mysqli_query($conn, $colg_count);
        $data4 = mysqli_fetch_assoc($query4);


        $fees_sum = "SELECT SUM(r_fees) as sum from registration  where r_status_del=0 ";
        $query5 = mysqli_query($conn, $fees_sum);
        $data5 = mysqli_fetch_assoc($query5);


        $paid_sum = "SELECT SUM(r_paid) as sum from registration  where r_status_del=0";
        $query6 = mysqli_query($conn, $paid_sum);
        $data6 = mysqli_fetch_assoc($query6);


        $top_vol =
            "SELECT r_volunteer_id as id ,COUNT(r_volunteer_id) AS count
from registration
 where r_status_del=0
 GROUP BY r_volunteer_id
 ORDER BY count DESC
 LIMIT 3 ";

        $query7 = mysqli_query($conn, $top_vol);
        //$volunteer = getName("volunteer","id",$r_v_id,$conn,"v_name");


        $top_colg =
            "SELECT r_p_college_id as id ,COUNT(r_volunteer_id) AS count
from registration
 where r_status_del=0
 GROUP BY r_p_college_id
 ORDER BY count DESC
 LIMIT 3 ";

        $query8 = mysqli_query($conn, $top_colg);
        //$volunteer = getName("volunteer","id",$r_v_id,$conn,"v_name");


        $top_event =
            "SELECT r_event_id as id ,COUNT(r_event_id) AS count
from registration
 where r_status_del=0
 GROUP BY r_event_id
 ORDER BY count DESC
 LIMIT 3 ";

        $query9 = mysqli_query($conn, $top_event);


        $select_vol = "select * from volunteer";
        $select_event = "select * from event";
        ?>

        <div class="templatemo-content-widget white-bg col-2">
            <form action="showanalysis.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">

                <div class="row form-group">
                    <div class="col-lg-6 col-md-6 form-group">
                        <label for="inputLoc">Volunteer</label>
                        <br>
                        <select name="volunteer" class="form-control">
                            <option value="0">ALL</option>

                            <?php
                            $result = mysqli_query($conn, $select_vol);
                            while ($row = mysqli_fetch_array($result)) {
                                $name = $row['v_name'];
                                ?>

                                <option value="<?php echo $row['v_id']; ?> "> <?php echo $name; ?></option>

                                <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">
                        <label for="inputLoc">Event</label>
                        <br>

                        <select name="event" class="form-control">
                            <option value="0">ALL</option>
                            <?php
                            $result = mysqli_query($conn, $select_event);
                            while ($row = mysqli_fetch_array($result)) {
                                $name = $row['e_name'];
                                ?>

                                <option value="<?php echo $row['e_id']; ?> "> <?php echo $name; ?></option>


                                <?php
                            }
                            ?>
                        </select>

                    </div>
                </div>

                <div class="row form-group">

                    <div class="col-lg-6 col-md-6 form-group">
                        <label for="inputSport">Start Date</label> <br>
                        <input type="date" class="form-control" name="start_date" value="<?php echo date("Y-m-d"); ?>"/>
                    </div>

                    <div class="col-lg-6 col-md-6 form-group">
                        <label for="inputLoc">End Date</label>
                        <input type="date" name="end_date" class="form-control" value="<?php echo date("Y-m-d"); ?>"/>
                    </div>
                </div>

                <input type="submit" class="templatemo-blue-button"/>

            </form>

        </div>


        <div class="templatemo-content-widget white-bg col-2">

            <h2 class="templatemo-inline-block">SUMMARY</h2>
            <br><br>
            <h3>
                <table>

                    <tr>
                        <td># of Volunteers</td>
                        <td align="center" style="width:20px">:</td>
                        <td>
                            <?php echo $data1['total']; ?></td>
                    </tr>

                    <tr>
                        <td># of Events</td>
                        <td align="center" style="width:20px">:</td>
                        <td>
                            <?php echo $data2['total']; ?></td>
                    </tr>

                    <tr>
                        <td># of Registrations</td>
                        <td align="center" style="width:20px">:</td>
                        <td>
                            <?php echo $data3['total']; ?></td>
                    </tr>

                    <tr>
                        <td>Amount (Expected)</td>
                        <td align="center" style="width:20px">:</td>
                        <td>
                            <?php echo $data5['sum']; ?></td>
                    </tr>

                    <tr>
                        <td>Amount (Recieved)</td>
                        <td align="center" style="width:20px">:</td>
                        <td>
                            <?php echo $data6['sum']; ?></td>
                    </tr>

                </table>
            </h3>
            <br>
        </div>


        <div class="templatemo-content-widget white-bg col-2">


            <h2 class="templatemo-inline-block">Top 3 Volunteers (with Ids)</h2>
            <br><br>
            <h3>
                <table>
                    <?php
                    while ($data7 = mysqli_fetch_array($query7)) {
                        $id = $data7['id'];
                        $name = getName("volunteer", "v_id", $id, $conn, "v_name");
                        echo "<tr><td> " . $name . "&nbsp:&nbsp</td><td>" . $data7['count'] . "</td></tr>";
                    }

                    ?>
                </table>
            </h3>
            <br>
        </div>
        <div class="templatemo-content-widget white-bg col-2">


            <h2 class="templatemo-inline-block">Top 3 colleges (with No. of Entries)</h2>
            <br><br>
            <h3>
                <table>
                    <?php

                    while ($data8 = mysqli_fetch_array($query8)) {
                        $college = getName("college", "c_id", $data8['id'], $conn, "c_name");
                        echo "<tr><td> " . $college . "&nbsp:&nbsp</td><td>" . $data8['count'] . "</td></tr>";
                    }

                    ?>
                </table>
            </h3>
            <br>
        </div>
        <div class="templatemo-content-widget white-bg col-2">


            <h2 class="templatemo-inline-block">Top 3 events (with Max Entries)</h2>
            <br><br>
            <h3>
                <table>
                    <?php

                    while ($data9 = mysqli_fetch_array($query9)) {
                        $name = getName("event", "e_id", $data9['id'], $conn, "e_name");
                        echo "<tr><td> " . $name . "&nbsp:&nbsp</td><td>" . $data9['count'] . "</td></tr>";
                    }
                    ?>


                </table>
            </h3>
            <br>
        </div>


</body>
</html>

<?php mysqli_close($conn); ?>
