document.getElementById("form").addEventListener("submit", function(e) {
    e.preventDefault();

    let pass = document.getElementById("pass").value;
    let repass = document.getElementById("repass").value;
    let msg = document.getElementById("message");

    // kiểm tra rỗng
    if (pass === "" || repass === "") {
        msg.innerHTML = "<div class='error'>Không được để trống!</div>";
        return;
    }

    // kiểm tra trùng mật khẩu
    if (pass !== repass) {
        msg.innerHTML = "<div class='error'>Mật khẩu không khớp!</div>";
        return;
    }

    // gửi dữ liệu lên PHP
    let formData = new FormData(this);

    fetch("process_forgot.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        msg.innerHTML = "<div class='success'>" + data + "</div>";
    });
});


// HIỆN / ẨN PASSWORD
function togglePass(id) {
    let input = document.getElementById(id);
    input.type = (input.type === "password") ? "text" : "password";
}
