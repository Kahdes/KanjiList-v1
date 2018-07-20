var Navbar = {
	url: location.href,
	linkElts: null,
	homeElt: null,
	alphabetsElt: null,
	exercisesElt: null,
	researchElt: null,
	connectionElt: null,
	homeRegex: /Home(\/(.){0,}){0,}/,
	alphabetsRegex: /Alphabets(\/(.){0,}){0,}/,
	exercisesRegex: /Exercises(\/(.){0,}){0,}/,
	researchRegex: /Research(\/(.){0,}){0,}/,
	connectionRegex: /Connection(\/(.){0,}){0,}/,

	init() {
		this.linkElts = document.getElementsByClassName('nav-item');
		this.homeElt = document.getElementById('Home');
		this.alphabetsElt = document.getElementById('Alphabets');
		this.exercisesElt = document.getElementById('Exercises');
		this.researchElt = document.getElementById('Research');
		this.connectionElt = document.getElementById('Connection');
	},

	activeLink() {
		if (!this.homeRegex.test(this.url)) {
			if (this.alphabetsRegex.test(this.url)) {
				this.alphabetsElt.setAttribute("class", "active");
			} else if (this.exercisesRegex.test(this.url)) {
				this.exercisesElt.setAttribute("class", "active");
			} else if (this.researchRegex.test(this.url)) {
				this.researchElt.setAttribute("class", "active");
			} else if (this.connectionRegex.test(this.url)) {
				this.connectionElt.setAttribute("class", "active");
			} else {
				this.homeElt.setAttribute("class", "active");
			}
		} else {
			this.homeElt.setAttribute("class", "active");
		}
	}
};

Navbar.init();
Navbar.activeLink();