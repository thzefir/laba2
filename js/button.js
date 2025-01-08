var count = 0;
document.getElementById("my_button").onclick = function() {
	count++;
	if (count % 2 == 0) {
		document.getElemetnById("demo").innerHTML = "";
	} else {
		var img = document.createElement("img");
		img.src = "../image/logo.jpg";
		document.getElementById("demo").appendChild(img);
	}
}
