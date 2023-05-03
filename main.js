function time_now() {
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    const date = new Date();
    const month = months[date.getMonth()];
    const day = date.getDate();
    const year = date.getFullYear();

    const dateString = `${month} ${day}, ${year}`;
    const timeOptions = { hour: 'numeric', minute: 'numeric', hour12: true };
    const timeString = date.toLocaleTimeString('en-PH', timeOptions);

    document.getElementById("current-date").textContent = `${dateString}`;
}