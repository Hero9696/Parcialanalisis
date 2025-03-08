
<script>
function checkLogin() {
    const user = document.getElementById("username").value;
    const pass = document.getElementById("password").value;
    if (user === "usuario1" && pass === "pass123") {
        document.getElementById("loginModal").style.display = "none";
    } else {
        document.getElementById("errorMsg").style.display = "block";
    }
}
</script>