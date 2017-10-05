var config = {
    apiKey: "AIzaSyCrTmUv3Euy-RzJ1_W2DCbarr6Gcth9RLY",
    authDomain: "codefest-9a4d2.firebaseapp.com",
    databaseURL: "https://codefest-9a4d2.firebaseio.com",
    projectId: "codefest-9a4d2",
    storageBucket: "codefest-9a4d2.appspot.com",
    messagingSenderId: "712969745052"
};

firebase.initializeApp(config);
var db = firebase.database();

// CREATE PAGE
var queryString = window.location.search;
var parseQueryString = '';
var params = {},
    queries, temp, i, l;
// Split into key/value pairs
queries = queryString.split("&");
// Convert the array of strings into an object
for (i = 0, l = queries.length; i < l; i++) {
    temp = queries[i].split('=');
    params[temp[0]] = temp[1];
}

var contentForm = document.getElementById('contentForm');
var firstname = document.getElementById('firstname');
var eventName = decodeURIComponent(temp[1]);

var lastname = document.getElementById('lastname');
var Fnumber = document.getElementById('Fnumber');

//--validation before post

function validateForm() {
    console.log("Hit!!!");
    // var pwd = "asdfds1234";
    var ExpNum = /^[0-9]+$/;
    var ExpAlphNum = /^[a-zA-Z0-9]+$/;
    var ExpAlph = /^[a-zA-Z]+$/;

    if (firstname.value == "") {
        alert("Please fill in firstname!");
        eventName.focus();
        return false;
    }
    if (lastname.value == "") {
        alert("Please fill in lastname!");
        lastname.focus();
        return false;
    }
    if (Fnumber.value == "") {
        alert("Please fill in Fnumber!");
        Fnumber.focus();
        return false;
    }

    if (!ExpAlph.test(firstname.value)) {
        alert("Invalid firstname");
        firstname.focus();
        return false;
    }
    if (!ExpAlph.test(lastname.value)) {
        alert("Invalid lastname");
        lastname.focus();
        return false;
    }
    if (!ExpAlphNum.test(Fnumber.value)) {
        alert("Invalid Fnumber");
        Fnumber.focus();
        return false;
    }
    contentForm.addEventListener('submit', (e) => {
        e.preventDefault();

        if (!firstname.value || !Fnumber.value) return null

        var id = Date.now()


        db.ref('rsvp/' + id).set({
            firstname: firstname.value,
            lastname: lastname.value,
            eventName: eventName,
            Fnumber: Fnumber.value
        });

        firstname.value = '';
        lastname.value = '';
        Fnumber.value = '';

    });
    // window.location.href = "slide.html";
    console.log("Hit!!!");
    history.back();
    return (true);
}