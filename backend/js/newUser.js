const formUser = document.getElementById("registerUser");

formUser.onsubmit = (e) => {
  const data = new FormData(document.getElementById("registerUser"));
  fetch("backend/controllers/newUser.php", { body: data, method: "POST" })
    .then((response) => {
      if (response.ok) {
        return response.text();
      } else {
        alert("error!");
      }
    })
    .then((text) => {
      console.log(text);
    })
    .catch((err) => {
      console.log(err);
    });
  e.preventDefault();
};

////LOGEO USUARIO
//const formLogUser = document.getElementById("logUser");
//
//formLogUser.onsubmit = (e) => {
//  const dataa = new FormData(document.getElementById("logUser"));
//  fetch("backend/controllers/verifyLogin.php", { body: dataa, method: "POST" }).then((response) => {
//    if (response.ok) {
//      return response.text;
//    } else {
//      alert("error");
//    }
//  });
//  e.preventDefault();
//};

//$("#registerUser").submit(function (event) {
//  var parametros = $(this).serialize();
//  $.ajax({
//    type: "POST",
//    url: "backend/controllers/newUser.php",
//    data: parametros,
//    beforeSend: function (objeto) {
//      console.log("enviando");
//    },
//    success: function (datos) {
//      console.log("enviado");
//    },
//  });
//  event.preventDefault();
//});
