var TO_DO;
var list = document.getElementById('ft_list');

var cooks = document.cookie.split("; ");
for (var i = 0; i < cooks.length; i++) {
    if (cooks[i].split("=")[0] === "todo") {
        var cooks_value = cooks[i].split("=")[1];
        cooks_value = cooks_value.split(":");
        for (var j = 0; j < cooks_value.length; j++) {
            if (cooks_value[j] !== "") {
                var element = document.createElement('div');
                element.innerHTML = cooks_value[j];
                list.appendChild(element);
            }
        }
    }
}

list.onclick = function(event) {
    var conf = confirm("Do you want to remove this TO DO: " + event.target.innerHTML + "?");
    if (conf === true){
        list.removeChild(event.target);
        create_cookie();
    }
};


function newEl() {
    if (TO_DO = prompt("Enter a new TO DO: ")) {
        var newEl = document.createElement('div');
        list.appendChild(newEl);
        newEl.innerHTML = TO_DO;
        list.insertBefore(newEl, list.firstElementChild);
        create_cookie();
        console.log(event.target);
    }
}

function create_cookie() {
    var children = list.children;
    var temp = "";
    for (var i = 0; i < children.length; i++) {
        var tableChild = children[i];
        temp = temp + tableChild.innerHTML + ':';
    }
    document.cookie = "todo=" + temp + ";" + "expires=Tue, 19 Jan 2038 03:14:07 GMT";
}