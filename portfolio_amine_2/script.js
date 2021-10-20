const navbar = document.querySelector("nav ul");
const navbarButton = document.querySelector("nav button");
const cover = document.querySelector(".cover");
const downloadCV = document.querySelector("#download_cv");

const hideNavbar = () => {
	navbar.classList.add("hideNavbar");
	cover.classList.add("hidenCover");
};

navbarButton.addEventListener("click", () => {
	navbar.classList.toggle("hideNavbar");
	cover.classList.toggle("hidenCover");
});

cover.addEventListener("click", hideNavbar);

window.addEventListener("hashchange", hideNavbar);

const target = document.getElementById("target");
let array = ["Développeur", "Passionné", "Créatif"];
let wordIndex = 0;
let letterIndex = 0;

const createLetter = () => {
	const letter = document.createElement("span");
	target.appendChild(letter);

	letter.textContent = array[wordIndex][letterIndex];

	setTimeout(() => {
		letter.remove();
	}, 2800);
};

const loop = () => {
	setTimeout(() => {
		if (wordIndex >= array.length) {
			wordIndex = 0;
			letterIndex = 0;
			loop();
		} else if (letterIndex < array[wordIndex].length) {
			createLetter();
			letterIndex++;
			loop();
		} else {
			wordIndex++;
			letterIndex = 0;
			setTimeout(() => {
				loop();
			}, 2800);
		}
	}, 60);
};
loop();
