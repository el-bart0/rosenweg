const openBtns = document.querySelectorAll("[data-open-modal]");
const closeBtn = document.querySelector("[data-close-modal]");
const modal = document.querySelector("[data-modal]");
const html = document.querySelector("html");

if (openBtns.length > 0) {
	openBtns.forEach((openBtn) => {
		openBtn.addEventListener("click", () => {
			modal.showModal();
			html.classList.toggle("no-scroll");
		});
	});

	if (closeBtn) {
		closeBtn.addEventListener("click", () => {
			modal.close();
			html.classList.toggle("no-scroll");
		});
	}
}
