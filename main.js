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

// ===========================================================================================================
// AJAX for getting data from database and output to specified content window
function outputToHtmlFromDb(inputStr, response) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(response).innerHTML = this.responseText;
        }
    }
    xmlhttp.open("POST", "connectContentToDb.php?input_value=" + inputStr, true);
    xmlhttp.send();
}

// For CHRONOLOGY
function chronology() {
    const field_id = ["contentDiscriptionPrehistoricPeriod","contentDiscriptionEarlyhistoricPeriod", "contentDiscriptionClassicalPeriod", "contentDiscriptionLatehistoricPeriod"];
    for (let i = 0; i < 4; i++) {
        outputToHtmlFromDb(i+1, field_id[i]);
    }
}

// for TRADE AND COMMERCE
function tradeAndCommerce() {
    const field_id = ["contentDiscriptionMaritimeTradeNetworks", "contentDiscriptionTradeRelationWithChina", "contentDiscriptionTradeRelationWithIndia", "contentDiscriptionTradeRelationWithArabia", "contentDiscriptionTradeRelationWithIndonesia"];
    let temp = 0;
    for (let i = 4; i < 9; i++) {
        outputToHtmlFromDb(i+1, field_id[temp]);
        temp++;
    }
}

// for SPIRITUALITY
function spirituality() {
    const field_id = ["contentDiscriptionAnimism","contentDiscriptionHinduism", "contentDiscriptionBuddhism", "contentDiscriptionIslam"];
    let temp = 0;
    for (let i = 9; i < 13; i++) {
        outputToHtmlFromDb(i+1, field_id[temp]);
        temp++;
    }
}

// for GEOGRAPHY
function geography() {
    const field_id = ["contentDiscriptionPhysicalGeography","contentDiscriptionPoliticalGeography", "contentDiscriptionCulturalGeography"];
    let temp = 0;
    for (let i = 13; i < 16; i++) {
        outputToHtmlFromDb(i+1, field_id[temp]);
        temp++;
    }
}

// for ETHNICITY
function ethnicity() {
    const field_id = ["contentDiscriptionAustronesian","contentDiscriptionNegrito", "contentDiscriptionSamaBajau"];
    let temp = 0;
    for (let i = 16; i < 19; i++) {
        outputToHtmlFromDb(i+1, field_id[temp]);
        temp++;
    }
}

// for ETHNICITY
function culture() {
    const field_id = ["contentDiscriptionArt","contentDiscriptionLiterature", "contentDiscriptionMusic", "contentDiscriptionArchitecture", "contentDiscriptionClothing", "contentDiscriptionCuisine"];
    let temp = 0;
    for (let i = 19; i < 25; i++) {
        outputToHtmlFromDb(i+1, field_id[temp]);
        temp++;
    }
}
// ===========================================================================================================

