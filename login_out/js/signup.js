// validation form register and register user local storage
const inputUsernameRegister = document.querySelector(".input-signup-username");
const inputPasswordRegister = document.querySelector(".input-signup-password");
const inputPasswordagainRegister = document.querySelector(".input-signup-passwordagain");
const inputnameRegister = document.querySelector(".input-signup-name");
const inputUserworkRegister = document.querySelector(".input-signup-work");
const btnRegister = document.querySelector(".signup__signInButton");

// validation form register and register user local storage

btnRegister.addEventListener("click", (e) => {
  e.preventDefault();
    // array user
    const user = {
      username: inputUsernameRegister.value,
      password: inputPasswordRegister.value,
      name: inputUsernameRegister.value,
      work: inputUserworkRegister.value,
    };
    if(inputPasswordRegister.value == inputPasswordagainRegister.value){
      let json = JSON.stringify(user);
      localStorage.setItem(inputUsernameRegister.value, json);
      alert("Đăng Ký Thành Công");
      window.location.href = "login.html";
    }else{
      alert("Nhập lại mật khẩu không chính xác");
    }
    
});
