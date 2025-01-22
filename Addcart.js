const categoriesUrl = 'products.json';
let categories = [];

// Load the JSON data
fetch(categoriesUrl)
  .then(response => response.json())
  .then(data => {
    categories = data;
    renderCategories();
  })
  .catch(error => console.error('Error loading JSON:', error));

let cart = [];

function renderCategories() {
  let i = 0;
  document.getElementById('root').innerHTML = categories.map(item => {
    const { productImage, productName, productPrice } = item;
    return `
      <div class='box'>
        <div class='img-box'>
          <img class='images' src=${productImage}></img>
        </div>
        <div class='bottom'>
          <p>${productName}</p>
          <h2>$ ${productPrice}.00 </h2>
          <button onclick='addtocart(${i++})'>Add to cart</button>
        </div>
      </div>
    `;
  }).join('');
}

function addtocart(a) {
  cart.push({ ...categories[a] });
  displaycart();
}

function delElement(a) {
  cart.splice(a, 1);
  displaycart();
}

function displaycart() {
  let j = 0, total = 0, finalTotal = 0;
  document.getElementById("count").innerHTML = cart.length;
  
  if (cart.length === 0) {
    document.getElementById('cartItem').innerHTML = "Your cart is empty";
    document.getElementById("total").innerHTML = "$ 0.00";
  } else {
    document.getElementById("cartItem").innerHTML = cart.map((items) => {
      const { productImage, productName, productPrice } = items;
      total += parseInt(productPrice);
      return `
        <div class='cart-item'>
          <div class='row-img'>
            <img class='rowimg' src=${productImage}>
          </div>
          <p style='font-size:12px;'>${productName}</p>
          <h2 style='font-size: 15px;'>$ ${productPrice}.00</h2>
          <i class='fa-solid fa-trash' onclick='delElement(${j++})'></i>
        </div>
      `;
    }).join('');

    // Apply discount based on total price
    if (total > 300) {
      finalTotal = total * 0.7; // 30% discount
    } else if (total > 200) {
      finalTotal = total * 0.8; // 20% discount
    } else if (total > 150) {
      finalTotal = total * 0.85; // 15% discount
    } else {
      finalTotal = total;
    }

    document.getElementById("total").innerHTML = `$ ${finalTotal.toFixed(2)}`;
  }
}

// Show/hide cart popup
function showCartPopup() {
  const cartPopup = document.getElementById('cartPopup');
  cartPopup.classList.toggle('show');
  displaycart(); // Call displaycart() to update the cart items when the popup is shown
}

// Toggle cart popup on cart icon click
document.querySelector('.cart').addEventListener('click', showCartPopup);
