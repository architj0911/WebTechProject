// search.js - SEARCH PAGE LOGIC
document.addEventListener("DOMContentLoaded", () => {
    const products = [
        { id: 1, name: "Grey Shoes Men Velour Collection", price: 2000, image: "images/card-image1 (1).jpg" },
        { id: 2, name: "Leather Black Handbag Velour Collection", price: 4200, image: "images/card-image2.jpg" },
        { id: 3, name: "Grey Overcoat Velour Collection", price: 4000, image: "images/card-image3.jpg" },
        { id: 4, name: "Black Overcoat Velour Collection", price: 6000, image: "images/card-image4.jpg" },
        { id: 5, name: "Bagpack 20L Sovereign Collection", price: 3700, image: "images/card-image5.jpg" },
        { id: 6, name: "Folding Umbrella Sovereign Collection", price: 2000, image: "images/card-image6.jpg" },
        { id: 7, name: "Braided Leather Bracelet Sovereign Collection", price: 2000, image: "images/card-image7 (1).jpg" },
        { id: 8, name: "Luxury Suspenders / Braces", price: 2000, image: "images/card-image8.jpg" },
        { id: 9, name: "Grey Boots Women Midnight Vault", price: 3500, image: "images/card-image9.jpg" },
        { id: 10, name: "Grey Handbag Midnight Vault", price: 5500, image: "images/card-image10.jpg" },
        { id: 11, name: "Black Leather Backpack Midnight Vault", price: 3800, image: "images/card-image11.jpg" },
        { id: 12, name: "Green Casual Overshirt", price: 2500, image: "images/card-image12.jpg" },
        { id: 13, name: "Women's Aurora Gold Mesh Watch", price: 9500, image: "images/card-13.jpg" },
        { id: 14, name: "Bluewave Classic Hoodie", price: 3000, image: "images/card-14.jpg" },
        { id: 15, name: "Earthline Utility Jacket", price: 4800, image: "images/card-15.jpg" },
        { id: 16, name: "Desert Beige Utility Pants", price: 2500, image: "images/card-16.jpg" }
    ];

    const input = document.getElementById("searchInput");
    const btn = document.getElementById("searchBtn");
    const results = document.getElementById("searchResults");

    function performSearch() {
        const query = input.value.trim().toLowerCase();
        results.innerHTML = "";

        if (!query) {
            results.innerHTML = `<p class="empty">Please enter a search term</p>`;
            return;
        }

        const filtered = products.filter(p => p.name.toLowerCase().includes(query));

        if (!filtered.length) {
            results.innerHTML = `<p class="empty">No products found</p>`;
            return;
        }

        filtered.forEach(product => {
            const card = document.createElement("div");
            card.className = "card";
            card.innerHTML = `
                <img src="${product.image}">
                <div class="card-content">
                    <p class="title">${product.name}</p>
                    <span class="amount">₹${product.price}</span>
                    <button class="add-to-cart-search">Add to Cart</button>
                </div>
            `;

            const addBtn = card.querySelector(".add-to-cart-search");
            addBtn.addEventListener("click", () => {
                addToCart(product); // Uses global function
                
                addBtn.textContent = "Added ✔";
                addBtn.disabled = true;
                setTimeout(() => {
                    addBtn.textContent = "Add to Cart";
                    addBtn.disabled = false;
                }, 800);
            });

            results.appendChild(card);
        });
    }

    if (btn) btn.addEventListener("click", performSearch);
    if (input) {
        input.addEventListener("keydown", (e) => {
            if (e.key === "Enter") performSearch();
        });
    }
});