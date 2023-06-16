const frete = document.getElementById("frete");
const comissao = document.getElementById("comissao");
const itemsCart = document.querySelector("#items-cart");

window.onload = () => {
  renderCart();
};

function calcular() {
  let total = readStorage("total");
  // console.log(total);
  frete.value = (total * 0.05).toFixed(2);
  comissao.value = (total * 0.03).toFixed(2);
}
calcular();

function renderCart() {
  let cart = readStorage("cart");
  cart.map((item) => {
    if (item.quantity > 0) {
      itemsCart.innerHTML += `
            <tr>
              <td>${item.name}</td>
              <td>R$${item.value}</td>
              <td>${item.quantity}</td>
              <td>R$${item.value * item.quantity}</td>
            </tr>
            `;
    }
  });
}
