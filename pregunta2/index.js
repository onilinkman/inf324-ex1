const themeColor = () => {
	let theme = localStorage.getItem("theme") ?? "light";
	if (theme) {
		let htmlElement = document.documentElement;

		htmlElement.setAttribute("data-bs-theme", theme);
	}
};

themeColor();

const changeColor = () => {
	let theme = localStorage.getItem("theme") ?? "light";
	let htmlElement = document.documentElement;
	localStorage.setItem("theme", theme === "light" ? "dark" : "light");
	htmlElement.setAttribute(
		"data-bs-theme",
		theme === "light" ? "dark" : "light"
	);
};
