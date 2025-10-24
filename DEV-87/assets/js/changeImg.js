function changeImg(image){
	var p = document.getElementById("p");

	p.src = image.src;

	p.parentElement.style.display = "block";
}