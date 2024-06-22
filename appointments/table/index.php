<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Express | Travel bus";
    $place = "../../";
    require_once($place . 'assets/template/head.php');
    ?>
    <link rel="stylesheet" href="<?php echo $place; ?>assets/style/Trainticket.css">
</head>

<body>
    <?php
    require_once($place . "assets/template/header.php");
    ?>

    <main>
        <!-- Your existing form and other content -->

        <div class="table-container">
            <h2>Vehicle Arrival Times at Cities</h2>
            <table>
                <thead>
                    <tr>
                        <th>Vehicle ID</th>
                        <th>Tracking ID</th>
                        <th>Vehicle Type</th>
                        <th>Type</th>
                        <th>Free Seats</th>
                        <th>Vehicle Arrival Time</th>
                        <th>Vehicle Departure Time</th>
                        <th>Duration</th>
                        <th>Number of Stops</th>
                        <th>City ID</th>
                        <th>City</th>
                        <th>City Arrival Time</th>
                        <th>City Departure Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once($place . "backend/db.php");
                    $conn = connect_db();

                    $sql = "SELECT
                                v.id AS vehicle_id,
                                v.`Tracking_id`,
                                v.`vehicle_type`,
                                v.`type`,
                                v.`free_seats`,
                                v.`Arrival_time` AS vehicle_arrival_time,
                                v.`Departure_time` AS vehicle_departure_time,
                                v.`Duration`,
                                v.`no_of_stops`,
                                c.id AS city_id,
                                c.city,
                                c.`Arrival_time` AS city_arrival_time,
                                c.`Departure_time` AS city_departure_time
                            FROM
                                vehicles v
                            JOIN
                                cities c ON v.id = c.`vehicle_id`
                            ORDER BY
                                c.city, c.`Arrival_time`";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["vehicle_id"] . "</td>
                                    <td>" . $row["Tracking id"] . "</td>
                                    <td>" . $row["vehicle type"] . "</td>
                                    <td>" . $row["type"] . "</td>
                                    <td>" . $row["free seats"] . "</td>
                                    <td>" . $row["vehicle_arrival_time"] . "</td>
                                    <td>" . $row["Duration"] . "</td>
                                    <td>" . $row["no. of stops"] . "</td>
                                    <td>" . $row["city"] . "</td>
                                    <td>" . $row["city_arrival_time"] . "</td>
                                    <td>" . $row["city_departure_time"] . "</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='13'>No results found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>

    </main>

    <?php
    require_once($place . "assets/template/footer.html");
    ?>

    <!-- <script src="../../../assets/script/payment.js"></script> -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-...your-hash-code..." crossorigin="anonymous"></script>
</body>

</html>