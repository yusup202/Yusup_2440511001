function loginUser(event) {
    event.preventDefault();

    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;

    if (user === "admin" && pass === "123") {
        // simpan status login
        localStorage.setItem("login", "true");

        alert("Login berhasil! 🎉");
        window.location.href = "index.html";
    } else {
        alert("Username atau Password salah ❌");
    }
}
function logout() {
    localStorage.removeItem("login");
    window.location.href = "login.html";
}