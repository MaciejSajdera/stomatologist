/**
 * Main JavaScript file.
 */
import Navigation from "./navigation.js";
import skipLinkFocus from "./skip-link-focus-fix.js";
import smoothscroll from "smoothscroll-polyfill";
import scrollAnimations from "./scrollAnimations.js";

document.addEventListener("DOMContentLoaded", () => {
	const myPreloader = document.querySelector(".my-preloader");
	const page = document.querySelector("#page");

	setTimeout(() => {
		myPreloader.classList.add("my-preloader-off");
	}, 500);

	setTimeout(() => {
		myPreloader ? myPreloader.classList.add("my-preloader-none") : "";
		page ? page.classList.add("page-loaded") : "";
	}, 600);

	const navigation = new Navigation();
	navigation.setupNavigation();
	smoothscroll.polyfill();
	scrollAnimations();

	document.addEventListener("click", function(e) {
		if (e.target.closest(".tab")) {
			const tab = e.target.closest(".tab");
			tab?.classList.toggle("tab--active");
		}
	});
});
