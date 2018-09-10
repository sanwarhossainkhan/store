function menulink(menu) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("onloadpage").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET", "system/menulink.php?q=" + menu, true);
    xmlhttp.send();
}