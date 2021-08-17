const formUser = document.getElementById("registerUser");

formUser.onsubmit = (e) => {
  e.preventDefault();

  fetch("../controllers/newUser.php").then(alert("UsuarioRegistrado"));
};
