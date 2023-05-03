function time_now() {
	document.getElementById("current-date").innerHTML = new Date().toLocaleDateString('en-us', {year:"numeric", month:"short", day:"numeric"});
}