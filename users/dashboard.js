document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("toggleDashboard");
    const dashboard = document.getElementById("dashboard");
    const mainContent = document.querySelector('.last');

    toggleButton.addEventListener("click", function () {
        // Toggle visibility of sidebar
        dashboard.classList.toggle("d-none");

        // Adjust the main content width
        if (dashboard.classList.contains("d-none")) {
            mainContent.classList.remove("col-md-10");
            mainContent.classList.add("col-md-10");
        } else {
            mainContent.classList.remove("col-md-10");
            mainContent.classList.add("col-md-10");
        }
    });
});
