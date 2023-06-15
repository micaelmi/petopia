function readStorage(key) {
  if (window.localStorage) {
    let aux = JSON.parse(localStorage.getItem(key));
    let dados;
    if (aux != null) {
      dados = aux;
    } else {
      dados = [];
    }
    return dados;
  } else {
    alert("Operação não disponível");
  }
  return false;
}

function recordStorage(key, value) {
  if (window.localStorage) {
    localStorage.setItem(key, JSON.stringify(value));
  } else {
    alert("Local Storage não suportado");
  }
}

function changeStorage(operation, id) {
  let cart = readStorage("cart");
  let cartItem;

  let index = 0;
  let selectedItems = false;
  do {
    if (products[index].id === id) {
      product = products[index];
      cartItem = cart[index];
      selectedItems = true;
    } else {
      index++;
    }
  } while (selectedItems == false);

  let i = 0;
  let updated = false;
  do {
    if (products[i].id === id) {
      if (operation === "sub") {
        if (cartItem.quantity > 1) {
          cartItem.quantity--;
          product.stored++;
        } else {
          cartItem.quantity = 0;
          product.stored++;
          iziToast.show({
            title: "Produto removido do carrinho",
            timeout: 2000,
            color: "red",
          });
        }
      }
      if (operation === "sum") {
        if (product.stored > 0) {
          cartItem.quantity++;
          product.stored--;

          iziToast.show({
            title: "Item adicionado",
            message: "quantidade: " + cartItem.quantity,
            timeout: 2000,
            color: "green",
          });
        } else {
          iziToast.show({
            title: "Você já adicionou todo o estoque desse produto",
            timeout: 2000,
            color: "yellow",
          });
        }
      }
      if (operation === "delete") {
        product.stored += cartItem.quantity;
        cartItem.quantity = 0;
        iziToast.show({
          title: "Produto excluído do carrinho",
          timeout: 2000,
          color: "red",
        });
      }

      recordStorage("cart", cart);
      recordStorage("products", products);
      updated = true;
    } else {
      i++;
    }
  } while (updated == false);
}

function startCart() {
  let storedcart = readStorage("cart");
  if (storedcart.length < 1) {
    const cart = [];
    recordStorage("cart", cart);
  }
}

function addToCart(item_id, nome, valor, qt) {
  startCart();
  let cart = readStorage("cart");
  let exists = false;

  i = 0;
  while (i < cart.length) {
    if (cart[i].id === item_id) {
      if (cart[i].quantity < qt) {
        cart[i].quantity++;
        iziToast.show({
          title: "Produto adicionado",
          timeout: 2000,
          color: "green",
        });
      } else {
        iziToast.show({
          title: "Produto esgotado",
          timeout: 2000,
          color: "red",
        });
      }
      exists = true;
    }
    i++;
  }

  if (!exists) {
    cart.push({
      id: item_id,
      name: nome,
      value: valor,
      quantity: 1,
    });
    iziToast.show({
      title: "Produto adicionado",
      timeout: 2000,
      color: "green",
    });
  }

  recordStorage("cart", cart);
  showQuantity();
}
