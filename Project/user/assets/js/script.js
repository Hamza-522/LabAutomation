document.addEventListener("DOMContentLoaded", function() {
    const toggleButton = document.querySelector('#profileImage'); // Assuming you want to trigger the menuToggle function on the profile image click

    toggleButton.addEventListener("click", function() {
        menuToggle();
    });
});

