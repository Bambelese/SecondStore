const form = document.getElementById("getCategories");
const nomProd = document.getElementById("product");
const priceProd = document.getElementById("priceProduct");
const quantityProd = document.getElementById("quantityProduct");

var idCategory;
form.onclick = () => {
  fetch("../controllers/viewCategories.php", { method: "POST" })
    .then((response) => {
      if (response.ok) {
        return response.text();
      } else {
        alert("error!");
      }
    })
    .then((text) => {
      document.getElementById("s").innerHTML = text;

      let itemsCategories = document.querySelectorAll(".opCategory");

      for (let i = 0; i < itemsCategories.length; i++) {
        itemsCategories[i].onclick = (e) => {
          console.log(e.target.getAttribute("data-id"));
          idCategory = e.target.getAttribute("data-id");
          console.log(idCategory);
        };
      }
    });
};

const btnNewProduct = document.getElementById("newProduct");
const formDataProduct = new FormData();

btnNewProduct.onclick = () => {
  console.log(quantityProd);
  formDataProduct.append("product", nomProd.value);
  formDataProduct.append("price", priceProd.value);
  formDataProduct.append("quantity", quantityProd.value);
  formDataProduct.append("idCategory", idCategory);

  fetch("../controllers/createProduct.php", { body: formDataProduct, method: "POST" });
  //console.log(nomProd.value);
  //console.log(idCategory);
};
