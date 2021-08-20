var products = [];

let btnBuy = document.querySelectorAll(".buyProd");

for (let i = 0; i < btnBuy.length; i++) {
  btnBuy[i].onclick = (e) => {
    let idProd = e.target.getAttribute("data-id");
    let product = e.target.getAttribute("data-prod");
    let codCategory = e.target.getAttribute("data-cat");
    let codClient = e.target.getAttribute("data-cl");
    let proveedor = e.target.getAttribute("data-prov");
    let price = e.target.getAttribute("data-price");
    let quantity = e.path[1].children[0].value;

    let objProduct = new Product(idProd, codCategory, codClient, product, proveedor, price, quantity);

    products.push(objProduct);

    localStorage.setItem("products", JSON.stringify(objProduct));
  };
}
