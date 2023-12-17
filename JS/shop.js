// Get all elements with the class "button-shop"
var addToCartButtons = document.querySelectorAll('.button-shop');

// Get the shopping cart element
var shoppingCart = document.getElementById('panier');

// Add a click event listener to each "button-shop"
addToCartButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        // Clone the parent node (div with class "manga")
        var clonedItem = this.parentNode.cloneNode(true);

        // Append the cloned item to the shopping cart
        shoppingCart.appendChild(clonedItem);

        // Optionally, you can remove the button from the cloned item in the cart
        var clonedButton = clonedItem.querySelector('.button-shop');
        if (clonedButton) {
            clonedButton.remove();
        }
    });
});
