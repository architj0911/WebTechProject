// cart-utils.js - SHARED LOGIC FOR ALL PAGES

function getCart() {
    try {
        return JSON.parse(localStorage.getItem("cart")) || [];
    } catch (e) {
        return [];
    }
}

function saveCart(cart) {
    localStorage.setItem("cart", JSON.stringify(cart));
    updateCartCount(); // Sync the UI every time data changes
}

function updateCartCount() {
    const el = document.querySelector(".cart-count");
    if (!el) return;

    const cart = getCart();
    const totalQty = cart.reduce((total, item) => total + (Number(item.qty) || 0), 0);
    el.textContent = totalQty;
}

function addToCart(product) {
    const cart = getCart();
    // Ensure ID is treated as a Number to prevent "1" !== 1 issues
    const productId = Number(product.id);
    const existingItem = cart.find(item => Number(item.id) === productId);

    if (existingItem) {
        existingItem.qty += 1;
    } else {
        cart.push({
            id: productId,
            name: product.name,
            price: Number(product.price),
            image: product.image,
            qty: 1
        });
    }

    saveCart(cart);
}

// Ensure the count is correct as soon as the page loads
document.addEventListener("DOMContentLoaded", updateCartCount);