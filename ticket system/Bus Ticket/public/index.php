<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Express | Public bus";
    $place = "../../../";
    require_once ('../../../assets/template/head.php'); ?>
    <link rel="stylesheet" href="../../../Assets/style/Trainticket.css">
</head>

<body>
    <?php
    require_once ("../../../assets/template/header.php");
    ?>
    <main>

        <div class="container">
            <div class="vehicle-image">
                <img src="/public bus img/ENR.png" alt="Vehicle Image" class="rounded-image">
            </div>
            <div class="form-container">
                <h2>Purchase Bus Ticket</h2>
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
        </div>
        <div id="ticket-details" style="display: none;">
            <h3>Ticket Details</h3>
            <p>Departure: <span id="departure-details"></span></p>
            <p>Arrival: <span id="arrival-details"></span></p>
            <p>Date: <span id="date-details"></span></p>
            <p>Class: <span id="class-details"></span></p>
            <p>bus Number: <span id="bus-number-details"></span></p>
            <p>Seat: <span id="seat-details"></span></p>
            <p>Payment Method: <span id="payment-method-details"></span></p>
            <!-- Add any additional details you want to display -->
        </div>

        <!-- Payment Options -->
        <div id="payment-options" style="display: none; margin-bottom: 20px;">
            <h3>Select Payment Method</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="payment-option">
                        <input type="radio" id="walletPayment" name="paymentMethod" value="Wallet" checked>
                        <label for="walletPayment">
                            <i class="fas fa-wallet"></i> Wallet
                        </label>
                        <div class="checkmark"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="payment-option">
                        <input type="radio" id="bankPayment" name="paymentMethod" value="Bank">
                        <label for="bankPayment">
                            <i class="fas fa-university"></i> Bank Transfer
                        </label>
                        <div class="checkmark"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visa Payment Form -->
        <div id="visaPaymentForm" style="display: none; margin-bottom: 20px;">
            <h3>Visa Payment Details</h3>
            <form>
                <div class="form-group">
                    <label for="cardNumber">Card Number</label>
                    <input type="text" class="form-control" id="cardNumber" placeholder="Enter card number">
                </div>
                <div class="form-group">
                    <label for="expiryDate">Expiry Date</label>
                    <input type="text" class="form-control" id="expiryDate" placeholder="Enter expiry date">
                </div>
                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" id="cvv" placeholder="Enter CVV">
                </div>
            </form>
        </div>

        <!-- Wallet Payment Form -->
        <div id="walletPaymentForm" style="display: none; margin-bottom: 20px;">
            <h3>Wallet Payment Details</h3>
            <form>
                <div class="form-group">
                    <label for="walletNumber">Wallet Number</label>
                    <input type="text" class="form-control" id="walletNumber" placeholder="Enter wallet number">
                </div>
                <div class="form-group">
                    <label for="countryCode">Country Code</label>
                    <select class="form-select" id="countryCode">
                        <option selected>Select country code</option>
                        <option value="1">+1</option>
                        <option value="20">+20</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" class="form-control" id="phoneNumber" placeholder="Enter phone number">
                </div>
            </form>
        </div>

        <!-- Pay Now Button -->
        <div class="text-center" id="payNowButtonContainer" style="display: none; margin-bottom: 20px;">
            <button id="payNowButton" class="btn-submit" style="display: none;">Pay Now</button>
        </div>

        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </div>
    </footer>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // تحديد زر حجز التذكرة
            const purchaseButton = document.querySelector('.btn-submit');

            // تحديد عناصر التفاصيل
            const ticketDetails = document.getElementById('ticket-details');
            const departureDetails = document.getElementById('departure-details');
            const arrivalDetails = document.getElementById('arrival-details');
            const dateDetails = document.getElementById('date-details');
            const classDetails = document.getElementById('class-details');
            const trainNumberDetails = document.getElementById('bus-number-details');
            const seatDetails = document.getElementById('seat-details');
            const paymentMethodDetails = document.getElementById('payment-method-details');

            // إضافة استماع للنقر على زر حجز التذكرة
            purchaseButton.addEventListener('click', function (event) {
                event.preventDefault(); // منع السلوك الافتراضي للزر

                // قم بعرض عناصر التفاصيل
                ticketDetails.style.display = 'block';
                document.getElementById('payment-options').style.display = 'block';

                // استرجاع قيم الحقول من النموذج وعرضها
                const departure = document.getElementById('departure').value;
                departureDetails.textContent = departure;

                const arrival = document.getElementById('arrival').value;
                arrivalDetails.textContent = arrival;

                const date = document.getElementById('date').value;
                dateDetails.textContent = date;

                const ticketClass = document.getElementById('class').value;
                classDetails.textContent = ticketClass;

                const trainNumber = document.getElementById('trainNumber').value;
                trainNumberDetails.textContent = trainNumber;

                // تخمين المقعد (أفترضت هنا أن المقاعد تكون عبارة عن أرقام)
                const seat = Math.floor(Math.random() * 100) + 1; // تخمين رقم المقعد بين 1 و 100
                seatDetails.textContent = seat;
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            // تحديد زر حجز التذكرة
            const purchaseButton = document.querySelector('.btn-submit');

            // تحديد عناصر التفاصيل
            const ticketDetails = document.getElementById('ticket-details');
            const departureDetails = document.getElementById('departure-details');
            const arrivalDetails = document.getElementById('arrival-details');
            const dateDetails = document.getElementById('date-details');
            const classDetails = document.getElementById('class-details');
            const trainNumberDetails = document.getElementById('bus-number-details');
            const seatDetails = document.getElementById('seat-details');
            const paymentMethodDetails = document.getElementById('payment-method-details');

            // إضافة استماع للنقر على زر حجز التذكرة
            purchaseButton.addEventListener('click', function (event) {
                event.preventDefault(); // منع السلوك الافتراضي للزر

                // قم بعرض عناصر التفاصيل
                ticketDetails.style.display = 'block';
                document.getElementById('payment-options').style.display = 'block';
            });

            // تحديث وظيفة عرض زر الدفع والعلامات بعد تحديد طريقة الدفع
            document.querySelectorAll('input[name="paymentMethod"]').forEach((radio) => {
                radio.addEventListener('change', function () {
                    const paymentMethod = this.value;
                    if (paymentMethod === 'Wallet') {
                        document.getElementById('payNowButton').style.display = 'block';
                        document.getElementById('bankConfirmation').style.display = 'none';
                        document.getElementById('walletConfirmation').style.display = 'block';
                    } else if (paymentMethod === 'Bank') {
                        document.getElementById('payNowButton').style.display = 'block';
                        document.getElementById('walletConfirmation').style.display = 'none';
                        document.getElementById('bankConfirmation').style.display = 'block';
                    }
                });
            });

            // إضافة استماع للنقر على زر الدفع الآن
            document.getElementById('payNowButton').addEventListener('click', function () {
                // هنا يمكنك إضافة السلوك عند النقر على زر الدفع الآن، مثل توجيه المستخدم إلى بوابة الدفع الإلكترونية
                // window.location.href = 'رابط بوابة الدفع';
                alert('Redirecting to payment gateway...');
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            // تحديد زر حجز التذكرة
            const purchaseButton = document.querySelector('.btn-submit');

            // تحديد عناصر التفاصيل
            const ticketDetails = document.getElementById('ticket-details');
            const departureDetails = document.getElementById('departure-details');
            const arrivalDetails = document.getElementById('arrival-details');
            const dateDetails = document.getElementById('date-details');
            const classDetails = document.getElementById('class-details');
            const trainNumberDetails = document.getElementById('bus-number-details');
            const seatDetails = document.getElementById('seat-details');
            const paymentMethodDetails = document.getElementById('payment-method-details');

            // تحديث وظيفة عرض زر الدفع والنماذج بعد تحديد طريقة الدفع
            document.querySelectorAll('input[name="paymentMethod"]').forEach((radio) => {
                radio.addEventListener('change', function () {
                    const paymentMethod = this.value;
                    if (paymentMethod === 'Wallet') {
                        document.getElementById('visaPaymentForm').style.display = 'none';
                        document.getElementById('walletPaymentForm').style.display = 'block';
                    } else if (paymentMethod === 'Bank') {
                        document.getElementById('walletPaymentForm').style.display = 'none';
                        document.getElementById('visaPaymentForm').style.display = 'block';
                    }
                    document.getElementById('payNowButtonContainer').style.display = 'block';
                });
            });

            // إضافة استماع للنقر على زر الدفع الآن
            document.getElementById('payNowButton').addEventListener('click', function () {
                // هنا يمكنك إضافة السلوك عند النقر على زر الدفع الآن، مثل توجيه المستخدم إلى بوابة الدفع الإلكترونية
                // window.location.href = 'رابط بوابة الدفع';
                alert('Redirecting to payment gateway...');
            });
        });


    </script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-...your-hash-code..." crossorigin="anonymous"></script>
</body>

</html>