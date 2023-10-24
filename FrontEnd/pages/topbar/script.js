function myFunction() {
	const body = document.body;

	// Toggle dark mode class
	body.classList.toggle("bg-dark");

	// You can add more logic here if needed

	// Example: Change button text based on mode
	const button = document.getElementById("dark-button");
	button.classList.toggle("btn-dark");

	const isDarkMode = body.classList.contains("bg-dark");
	button.innerText = isDarkMode ? "Light" : "Dark";
}
