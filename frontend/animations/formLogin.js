const btnHiddenLogin = document.querySelector(".showLog");
const formLogin = document.getElementById("formLogin");

btnHiddenLogin.onclick = (e) => {
  e.path[4].style.overflow = "hidden";
  formLogin.style.width = "0";

  formRegister.style.width = "340px";
};

const btnHiddenRegister = document.querySelector(".showReg");
const formRegister = document.getElementById("formRegister");

btnHiddenRegister.onclick = (e) => {
  e.path[4].style.overflow = "hidden";
  formRegister.style.width = "0";

  formLogin.style.width = "340px";
};
