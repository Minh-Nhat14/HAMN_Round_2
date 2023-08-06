// validation form login
const inputUsername = document.querySelector(".input-login-username");
const inputPassword = document.querySelector(".input-login-password");
const btnLogin = document.querySelector(".login__signInButton");

btnLogin.addEventListener("click", (e) => {
  e.preventDefault();
    const user = JSON.parse(localStorage.getItem(inputUsername.value));
    if(user==null){
      alert("Đăng Nhập Thất Bại");
      window.location.href = "login.html";
    }else{
      if (
      user.username === inputUsername.value &&
      user.password === inputPassword.value
    ) {
      alert("Đăng Nhập Thành Công");
      var usn = user.name;
      var work = user.work;
      window.location.href = "../index.html?username=" + encodeURIComponent(usn) + "&work=" + encodeURIComponent(work);
      
    } else{
      alert("Sai mật khẩu hoặc tên đăng nhập");
    }
    }
    
});

