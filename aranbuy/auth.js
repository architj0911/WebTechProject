/* REGISTER */
if (document.getElementById("registerForm")) {
    registerForm.addEventListener("submit", e => {
        e.preventDefault();

        const name = regName.value.trim();
        const email = regEmail.value.trim();
        const password = regPassword.value.trim();

        let users = JSON.parse(localStorage.getItem("users")) || [];

        if (users.find(u => u.email === email)) {
            alert("Account already exists. Please login.");
            window.location.href = "auth.html";
            return;
        }

        users.push({ name, email, password });
        localStorage.setItem("users", JSON.stringify(users));

        alert("Registration successful! Please login.");
        window.location.href = "auth.html";
    });
}

/* LOGIN */
if (document.getElementById("loginForm")) {
    loginForm.addEventListener("submit", e => {
        e.preventDefault();

        const email = loginEmail.value.trim();
        const password = loginPassword.value.trim();

        const users = JSON.parse(localStorage.getItem("users")) || [];
        const user = users.find(u => u.email === email);

        if (!user) {
            alert("Account not found. Please register.");
            window.location.href = "register.html";
            return;
        }

        if (user.password !== password) {
            alert("Incorrect password!");
            return;
        }

        localStorage.setItem("loggedInUser", JSON.stringify(user));
        window.location.href = "index.php";
    });
}
