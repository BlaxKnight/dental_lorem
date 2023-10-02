function showPassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
    document.getElementById('password-icon').setAttribute('class', 'bi bi-eye');
  } else {
    x.type = "password";
    document.getElementById('password-icon').setAttribute('class', 'bi bi-eye-slash');
  }
} 