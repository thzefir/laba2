var count = 0;
document.getElementById("my_button").onclick = function() {
	count++;
	if (count % 2 == 0) {
		document.getElemetnById("demo").innerHTML = "";
	} else {
		var img = document.createElement("img");
		img.src = "https://steamuserimages-a.akamaihd.net/ugc/1996814455875421244/3E0EE7C0ACA1694A646D08F99CDFADA4664BED5F/?imw=512&amp;imh=373&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=true";
		document.getElementById("demo").appendChild(img);
	}
}
