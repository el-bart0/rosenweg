var glide = document.querySelectorAll(".glide");
if (glide.length > 0) {
	new Glide(".glide", {
		type: "slide",
		perView: 1,
		autoplay: false,
		rewind: false,
		gap: 0,
	}).mount();
}
