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


// Get references to the HTML elements
let bustype = document.getElementById('type');
let choosedBus = document.getElementById('bustype');
let buspic = document.getElementById('buspic');

let container = document.getElementById('container');
let typeContainer = document.getElementById('type'); // Renamed to avoid conflict with 'type' select element

// Initially hide the container
container.style.display = "none";

// Directory path for bus images
const dir = "../../../assets/image/";

// Event listener for the "Done" button click
choosedBus.addEventListener("click", () => {
    // Get the selected bus type
    let selectedType = bustype.querySelector('select').value;

    // Check if a valid bus type is selected
    if (selectedType) {
        // Update the bus image source
        buspic.src = dir + selectedType;

        // Show the container with the bus ticket form
        container.style.display = 'block';

        // Hide the bus type selection
        typeContainer.style.display = 'none';
    } else {
        // Handle the case when no valid bus type is selected
        alert("Please select a valid bus type.");
    }
});
