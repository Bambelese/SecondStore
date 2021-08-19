const form = document.getElementById("form");

form.onsubmit = (e) => {
  e.preventDefault();

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
      console.log(text);
    });
};
