function addToCart(id, imageSrc, description) {
    // Récupérer le panier existant depuis le stockage local
    const existingCart = JSON.parse(localStorage.getItem("cart")) || [];

    // Trouver l'élément du panier avec l'ID correspondant
    const existingItem = existingCart.find(item => item.id === id);

    if (existingItem) {
        // Si le produit existe déjà, augmenter la quantité
        existingItem.quantity = (existingItem.quantity || 1) + 1;
    } else {
        // Si le produit n'est pas dans le panier, l'ajouter avec une quantité de 1
        const newCartItem = { id, imageSrc, description, quantity: 1 };
        existingCart.push(newCartItem);
    }

    // Mettre à jour le panier dans le stockage local
    localStorage.setItem("cart", JSON.stringify(existingCart));

    // Mettre à jour l'affichage du panier sur la page
    updateCartDisplay();

    console.log(`Produit "${id}" ajouté au panier.`);
}

function removeFromCart(id) {
    // Récupérer le panier depuis le stockage local
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    // Trouver l'élément du panier avec l'ID correspondant
    const existingItem = cart.find(item => item.id === id);

    if (existingItem) {
        // Décrémenter la quantité de 1 à chaque clic sur "X"
        existingItem.quantity = Math.max(0, (existingItem.quantity || 1) - 1);

        // Si la quantité est maintenant égale à 0, supprimer l'élément du panier
        if (existingItem.quantity === 0) {
            cart = cart.filter(item => item.id !== id);
        }

        // Mettre à jour le panier dans le stockage local
        localStorage.setItem("cart", JSON.stringify(cart));
    }

    // Mettre à jour l'affichage du panier sur la page
    updateCartDisplay();

    console.log(`Produit "${id}" supprimé du panier. Nouvelle quantité : ${existingItem.quantity}`);
}

function updateCartDisplay() {
    const panierElement = document.querySelector(".panier");

    if (panierElement) {
        panierElement.innerHTML = '';

        const cart = JSON.parse(localStorage.getItem("cart")) || [];

        cart.forEach((item) => {
            const cartItem = document.createElement("div");
            cartItem.classList.add("cart-item");
            cartItem.innerHTML = `
                <img src="${item.imageSrc}" alt="${item.id}" class="cart-item-image">
                <div class="cart-item-description">
                    <p>${item.description || ""} x${item.quantity}</p>
                </div>
                <button class="delete-button" onclick="removeFromCart('${
                    item.id
                }')">X</button>
            `;
            panierElement.appendChild(cartItem);
        });
    } else {
        console.error("L'élément '.panier' n'a pas été trouvé.");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const panierElement = document.querySelector(".panier");

    if (panierElement) {
        panierElement.addEventListener("click", function (event) {
            if (event.target.classList.contains("delete-button")) {
                const productId =
                    event.target.parentElement.querySelector(".cart-item-image").alt;
                removeFromCart(productId);
            }
        });

        updateCartDisplay();
    } else {
        console.error("L'élément '.panier' n'a pas été trouvé.");
    }
});
