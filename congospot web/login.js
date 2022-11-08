function login() {
    // (A) GET SURCARD NUMBER + PASSWORD
    var data = new FormData();
    data.append('surfcard', document.getElementById("surfcard number").value);
    data.append('password', document.getElementById("user-pass").value);

    // (B) AJAX REQUEST
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "dummy.php");
    xhr.onload = function() {
        if (this.response == "OK") { location.href = "index.html"; } else { alert(this.response); }
    };
    xhr.send(data);
    return false;
}