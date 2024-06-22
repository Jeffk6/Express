document.addEventListener("DOMContentLoaded", () => {
    const notification = document.getElementById("notification");

    const showNotification = (message, type) => {
        notification.innerText = message;
        notification.className = `notification ${type}`;
        notification.style.display = 'block';
        setTimeout(() => {
            notification.style.display = 'none';
            notification.className = 'notification'; // Reset class
        }, 3000);
    };
});