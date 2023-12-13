const lesproduits = document.querySelectorAll("#liste_Manga");
const panier = document.querySelector(".panier");

lesproduits.forEach((produit) => {
    produit.addEventListener("click", (e) => {
        panier.innerHTML = produit.textContent+"<br>";
    })
})

