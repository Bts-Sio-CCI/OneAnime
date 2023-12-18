function addToCart(id, imageSrc, description) {
    // Récupérer le panier existant depuis le stockage local
    const existingCart = JSON.parse(localStorage.getItem("cart")) || [];

    // Trouver l'élément du panier avec l'ID correspondant
    const mangaElement = document.querySelector(`[data-manga-id="${id}"]`);

    if (mangaElement) {
        // Récupérer le prix depuis l'attribut data-price
        const price = parseFloat(mangaElement.getAttribute("data-price"));

        // Trouver l'élément du panier avec l'ID correspondant
        const existingItem = existingCart.find(item => item.id === id);

        if (existingItem) {
            // Si le produit existe déjà, augmenter la quantité et mettre à jour le prix
            existingItem.quantity = (existingItem.quantity || 1) + 1;
            existingItem.price = existingItem.quantity * price;
        } else {
            // Si le produit n'est pas dans le panier, l'ajouter avec une quantité de 1 et le prix initial
            const newCartItem = { id, imageSrc, description, quantity: 1, price };
            existingCart.push(newCartItem);
        }

        // Mettre à jour le panier dans le stockage local
        localStorage.setItem("cart", JSON.stringify(existingCart));

        // Mettre à jour l'affichage du panier sur la page
        updateCartDisplay();

        console.log(`Produit "${id}" ajouté au panier.`);
    } else {
        console.error(`L'élément avec l'ID "${id}" n'a pas été trouvé.`);
    }
}


function removeFromCart(id) {
    // Récupérer le panier depuis le stockage local
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    // Trouver l'élément du panier avec l'ID correspondant
    const existingItem = cart.find(item => item.id === id);

    if (existingItem) {
        // Décrémenter la quantité de 1 à chaque clic sur "X"
        existingItem.quantity = Math.max(0, (existingItem.quantity || 1) - 0.5);

        // Mettre à jour le prix proportionnellement à la nouvelle quantité
        existingItem.price = existingItem.price/existingItem.quantity;

        // Si la quantité est maintenant égale à 0, supprimer l'élément du panier
        if (existingItem.quantity === 0) {
            cart = cart.filter(item => item.id !== id);
        }

        // Mettre à jour le panier dans le stockage local
        localStorage.setItem("cart", JSON.stringify(cart));
    }

    // Mettre à jour l'affichage du panier sur la page
    updateCartDisplay();

    console.log(`Produit "${id}" supprimé du panier. Nouvelle quantité : ${existingItem ? existingItem.quantity : 0}`);
}



function updateCartDisplay() {
    const panierElement = document.querySelector(".panier");

    if (panierElement) {
        panierElement.innerHTML = '';

        const cart = JSON.parse(localStorage.getItem("cart")) || [];

        cart.forEach((item) => {
            const cartItem = document.createElement("div");
            cartItem.classList.add("cart-item");

            // Vérifier si la propriété price est définie
            const priceText = item.price ? ` - Prix : ${item.price.toFixed(2)} €` : '';

            const itemCountText = `x${item.quantity}`;

            cartItem.innerHTML = `
                <img src="${item.imageSrc}" alt="${item.id}" class="cart-item-image">
                <div class="cart-item-description">
                    <p>${item.description || ""} ${itemCountText}${priceText}</p>
                </div>
                <button class="delete-button" onclick="removeFromCart('${item.id}')">X</button>
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
