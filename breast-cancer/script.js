// Mobile Menu Toggle
const menuBtn = document.querySelector(".menu-btn");
const navLinks = document.querySelector("nav ul");

if (menuBtn) {
    menuBtn.addEventListener("click", () => {
        navLinks.classList.toggle("show");
    });
}

// Success Message Auto Hide
setTimeout(() => {
    const alertBox = document.querySelector(".alert");

    if (alertBox) {
        alertBox.style.display = "none";
    }
}, 3000);

// Simple Form Validation
const forms = document.querySelectorAll("form");

forms.forEach(form => {
    form.addEventListener("submit", (e) => {

        const inputs = form.querySelectorAll("input[required], textarea[required]");

        let valid = true;

        inputs.forEach(input => {

            if (input.value.trim() === "") {
                valid = false;
                input.style.border = "2px solid red";
            } else {
                input.style.border = "1px solid #ddd";
            }

        });

        if (!valid) {
            e.preventDefault();
            alert("Please fill all required fields");
        }

    });
});