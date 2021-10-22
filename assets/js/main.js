/**
 * Main JavaScript file.
 */
import Navigation from "./navigation.js";
import skipLinkFocus from "./skip-link-focus-fix.js";

document.addEventListener("DOMContentLoaded", () => {
	const navigation = new Navigation();
	navigation.setupNavigation();

	document.addEventListener("click", function(e) {
		if (e.target.closest(".tab")) {
			const tab = e.target.closest(".tab");
			tab?.classList.toggle("tab--active");
		}
	});
});
