
/* Responsiveness of the Navbar  */
const bar = document.getElementById('bar');
const close1 = document.getElementById('close');
const nav = document.getElementById('navbar');
/* the bar will be opened or closed */
if(bar){
    bar.addEventListener('click', () => {
        nav.classList.add('active');
})
}
if(close1){
    bar.addEventListener('click', () => {
        nav.classList.remove('active');
})
}

const addToCartBtn = document.getElementById('addToCartBtn');
const quantityInput = document.getElementById('quantity');

// Add click event listener to the button
addToCartBtn.addEventListener('click', function() {
  // Get the selected quantity
  const quantity = quantityInput.value;

  // Redirect to cart.php with the product and quantity as query parameters
  window.location.href = `cart12.php?product=product_id&quantity=${quantity}`;
});


document.addEventListener("DOMContentLoaded", () => {
  const products = [
    {
      img: "IMG/HersheysKisses.jpeg",
      brand: "Hersheys",
      name: "Kisses",
      price: "R45",
      description: "Delicious milk chocolate candies.",
      stars: 4
    },
    {
      img: "IMG/SourPatchKidsOriginal.jpeg",
      brand: "Sour Patch kids",
      name: "Original",
      price: "R50",
      description: "Sour then sweet gummy candies.",
      stars: 4
    },
    {
      img: "IMG/FeastablesOriginal.jpeg",
      brand: "Feastables",
      name: "Original",
      price: "R50",
      description: "Premium chocolate bars.",
      stars: 4
    },
    {
      img: "IMG/SkittlesOriginal.jpeg",
      brand: "Skittles",
      name: "Original",
      price: "R25",
      description: "Fruity chewy candies.",
      stars: 4
    },
    {
      img: "IMG/MikeAndIkeOriginal.jpeg",
      brand: "MikeAndIke",
      name: "Original",
      price: "R34",
      description: "Chewy fruit flavored candies.",
      stars: 4
    },
    {
      img: "IMG/DrumstickSquashies.jpeg",
      brand: "Drumstick",
      name: "Squashies",
      price: "R45",
      description: "Soft and chewy raspberry & milk flavored gums.",
      stars: 4
    },
    {
      img: "IMG/TrufflesLindt.jpeg",
      brand: "Lindt",
      name: "Chocolate Candy Truffles",
      price: "R65",
      description: "Smooth melting truffles.",
      stars: 4
    },
    {
      img: "IMG/MikeAndIkeTropicalTyphoon.jpeg",
      brand: "MIKE AND IKE",
      name: "Tropical Typhoon",
      price: "R35",
      description: "Chewy tropical flavored candies.",
      stars: 4
    }
  ];

  const modal = document.getElementById("product-detail-modal");
  const closeButton = document.querySelector(".close-button");

  function openModal(product) {
    document.getElementById("modal-img").src = product.img;
    document.getElementById("modal-brand").innerText = product.brand;
    document.getElementById("modal-name").innerText = product.name;
    document.getElementById("modal-price").innerText = product.price;
    document.getElementById("modal-description").innerText = product.description;

    const starContainer = document.getElementById("modal-star");
    starContainer.innerHTML = "";
    for (let i = 0; i < product.stars; i++) {
      const star = document.createElement("i");
      star.classList.add("fas", "fa-star");
      starContainer.appendChild(star);
    }

    modal.style.display = "block";
  }

  function closeModal() {
    modal.style.display = "none";
  }

  closeButton.addEventListener("click", closeModal);
  window.addEventListener("click", (event) => {
    if (event.target == modal) {
      closeModal();
    }
  });

  document.querySelectorAll(".pro").forEach((productElement, index) => {
    productElement.addEventListener("click", () => {
      openModal(products[index]);
    });
  });
});




