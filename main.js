function time_now() {
	document.getElementById("current-date").innerHTML = new Date().toLocaleDateString('en-us', {year:"numeric", month:"short", day:"numeric"});
}

let users = [];

function add_user() {
    let id = Math.floor(Math.random() * 1000000);
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let repassword = document.getElementById("repassword").value;

    const warning = document.getElementById("warning");
    const note = document.getElementById("note");
    if(password.length >= 8){
        if(password == repassword){
            let user = {
                id: id,
                username: username,
                password: password,
              };
            users.push(user);
        }
        else{
            warning.innerHTML = "Passwords do not match!";
        }
    }
    else{
        note.innerHTML = "Passwords must be at least 8 characters";
    }
}
