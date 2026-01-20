// main.js - HOME PAGE SPECIFIC LOGIC
document.addEventListener("DOMContentLoaded", () => {
    /* ================= HAMBURGER MENU ================= */
    const navList = document.querySelector(".navlist");
    const hamburgerBtn = document.querySelector(".hamburger");

    if (hamburgerBtn && navList) {
        const hamburgerIcon = hamburgerBtn.querySelector("i");
        hamburgerBtn.addEventListener("click", (e) => {
            e.preventDefault();
            navList.classList.toggle("navlist-active");
            hamburgerIcon.classList.toggle("fa-bars");
            hamburgerIcon.classList.toggle("fa-x");
        });
    }

    /* ================= HOME PAGE ADD TO CART ================= */
    document.querySelectorAll(".add-to-cart").forEach(btn => {
        btn.addEventListener("click", () => {
            const product = {
                id: btn.dataset.id,
                name: btn.dataset.name,
                price: btn.dataset.price,
                image: btn.dataset.image
            };

            // Call global function from cart-utils.js
            addToCart(product);

            // UI feedback
            const originalText = btn.textContent;
            btn.textContent = "Added ✔";
            btn.disabled = true;

            setTimeout(() => {
                btn.textContent = originalText;
                btn.disabled = false;
            }, 800);
        });
    });
});