// cart.js - CART PAGE RENDERING & ACTIONS
document.addEventListener("DOMContentLoaded", () => {
    const cartItemsContainer = document.getElementById("cartItems");
    const cartTotalEl = document.getElementById("cartTotal");

    if (!cartItemsContainer) return; // Only run on cart page

    function renderCart() {
        const cart = getCart(); // From cart-utils.js
        cartItemsContainer.innerHTML = "";

        if (cart.length === 0) {
            cartItemsContainer.innerHTML = `<p class="empty">Your cart is empty 🛒</p>`;
            cartTotalEl.textContent = "";
            updateCartCount();
            return;
        }

        let total = 0;
        cart.forEach(item => {
            total += (Number(item.price) * Number(item.qty));
            cartItemsContainer.innerHTML += `
                <div class="cart-item">
                    <img src="${item.image}" alt="${item.name}">
                    <div class="cart-details">
                        <h4>${item.name}</h4>
                        <p>₹${item.price}</p>
                    </div>
                    <div class="cart-actions">
                        <button class="decrease" data-id="${item.id}">−</button>
                        <span>${item.qty}</span>
                        <button class="increase" data-id="${item.id}">+</button>
                        <button class="remove" data-id="${item.id}">X</button>
                    </div>
                </div>
            `;
        });

        cartTotalEl.textContent = `Total: ₹${total}`;
        updateCartCount();
    }

    cartItemsContainer.addEventListener("click", (e) => {
        const target = e.target;
        const id = Number(target.dataset.id);
        if (!id) return;

        let cart = getCart();
        const itemIndex = cart.findIndex(i => Number(i.id) === id);
        
        if (itemIndex === -1) return;

        if (target.classList.contains("increase")) {
            cart[itemIndex].qty++;
        } else if (target.classList.contains("decrease")) {
            if (cart[itemIndex].qty > 1) {
                cart[itemIndex].qty--;
            }
        } else if (target.classList.contains("remove")) {
            cart.splice(itemIndex, 1);
        }

        saveCart(cart); // Saves to localstorage & updates counts everywhere
        renderCart();   // Re-draws the list
    });

    renderCart();
});