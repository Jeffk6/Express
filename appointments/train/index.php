<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    $title = "Express | Train table";
    $place = "../../";
    require_once ($place . 'assets/template/head.php'); 
    ?>
    <link rel="stylesheet" href="<?php echo $place; ?>assets/style/Trainticket.css">
</head>

<body>
    <?php
    require_once ($place . "assets/template/header.php");
    ?>
    <main>
        <div class="bus-type form-container" id="type">
            <h2>Bus type</h2>
            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" id="type">
                    <option value="" disabled selected>Select Type</option>
                    <option value="LRT.png">LRT</option>
                    <option value="ENR.png">Egyptian railways</option>
                    <option value="MWASLAT MASR.png">Mwaslat Masr</option>
                </select>
            </div>
            <button id="bustype">Done</button>
        </div>
        <div class="container" id="container">
            <div class="vehicle-image">
                <img src="" id="buspic" alt="Vehicle Image" class="rounded-image">
            </div>
            <div class="form-container">
                <h2>Search for a seat</h2>
                <span>Filter</span>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="departure">Departure</label>
                        <select name="departure" id="departure">
                            <option value="" disabled selected>Select Departure</option>
                            <option value="Ramses">Ramses</option>
                            <option value="Downtown">Downtown</option>
                            <option value="New Cairo">New Cairo</option>
                            <option value="Maadi">Maadi</option>
                            <option value="Mohandessin">Mohandessin</option>
                            <option value="Heliopolis">Heliopolis</option>
                            <option value="Nasr City">Nasr City</option>
                            <option value="6th of October">6th of October</option>
                            <option value="Sheikh Zayed">Sheikh Zayed</option>
                            <option value="Tagamo'">Tagamo'</option>
                            <option value="Zamalek">Zamalek</option>
                            <option value="Shubra">Shubra</option>
                            <option value="Madinet Nasr">Madinet Nasr</option>
                            <option value="Abbassiya">Abbassiya</option>
                            <option value="Mokattam">Mokattam</option>
                            <option value="Sayeda Zeinab">Sayeda Zeinab</option>
                            <option value="Rehab City">Rehab City</option>
                            <option value="Zaytoun">Zaytoun</option>
                            <option value="Ain Shams">Ain Shams</option>
                            <option value="Heliopolis Square">Heliopolis Square</option>
                            <option value="El Darb El Ahmar">El Darb El Ahmar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="arrival">Arrival</label>
                        <select name="arrival" id="arrival">
                            <option value="" disabled selected>Select Arrival</option>
                            <option value="Ramses">Ramses</option>
                            <option value="Downtown">Downtown</option>
                            <option value="New Cairo">New Cairo</option>
                            <option value="Maadi">Maadi</option>
                            <option value="Mohandessin">Mohandessin</option>
                            <option value="Heliopolis">Heliopolis</option>
                            <option value="Nasr City">Nasr City</option>
                            <option value="6th of October">6th of October</option>
                            <option value="Sheikh Zayed">Sheikh Zayed</option>
                            <option value="Tagamo'">Tagamo'</option>
                            <option value="Zamalek">Zamalek</option>
                            <option value="Shubra">Shubra</option>
                            <option value="Madinet Nasr">Madinet Nasr</option>
                            <option value="Abbassiya">Abbassiya</option>
                            <option value="Mokattam">Mokattam</option>
                            <option value="Sayeda Zeinab">Sayeda Zeinab</option>
                            <option value="Rehab City">Rehab City</option>
                            <option value="Zaytoun">Zaytoun</option>
                            <option value="Ain Shams">Ain Shams</option>
                            <option value="Heliopolis Square">Heliopolis Square</option>
                            <option value="El Darb El Ahmar">El Darb El Ahmar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date">
                    </div>
                    <div class="form-group">
                        <label for="class">Class</label>
                        <select name="class" id="class">
                            <option value="" disabled selected>Select Class</option>
                            <option value="First Class">First Class</option>
                            <option value="Business Class">Business Class</option>
                            <option value="Economy Class">Economy Class</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="busNumber">Bus Number</label>
                        <select name="busNumber" id="busNumber">
                            <option value="" disabled selected>Select Bus Number</option>
                            <option value="101">101</option>
                            <option value="102">102</option>
                            <option value="103">103</option>
                            <!-- Add more bus numbers as needed -->
                        </select>
                    </div>
                    <button type="submit" class="btn-submit">Purchase Ticket</button>
                </form>
            </div>
        </div>
        <div id="ticket-details" style="display: none;">
            <h3>Ticket Details</h3>
            <p>Departure: <span id="departure-details"></span></p>
            <p>Arrival: <span id="arrival-details"></span></p>
            <p>Date: <span id="date-details"></span></p>
            <p>Class: <span id="class-details"></span></p>
            <p>Bus Number: <span id="bus-number-details"></span></p>
            <p>Seat: <span id="seat-details"></span></p>
            <p>Payment Method: <span id="payment-method-details"></span></p>
            <!-- Add any additional details you want to display -->
        </div>
    </main>

    <?php
    require_once ($place . "assets/template/footer.html");
    ?>

    <script src="<?php echo $place; ?>assets/script/appointments.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-...your-hash-code..." crossorigin="anonymous"></script>
</body>

</html>
