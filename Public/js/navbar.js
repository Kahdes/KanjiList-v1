var Navbar = {
	url: location.href,
	linkElts: null,
	homeElt: null,
	researchElt: null,
	connectionElt: null,
	homeRegex: /Home(\/(.){0,}){0,}/,
	researchRegex: /Research(\/(.){0,}){0,}/,
	connectionRegex: /Connection(\/(.){0,}){0,}/,

	init() {
		this.linkElts = document.getElementsByClassName('nav-item');
		this.homeElt = document.getElementById('Home');
		this.researchElt = document.getElementById('Research');
		this.connectionElt = document.getElementById('Connection');
	},

	activeLink() {
		if (!this.homeRegex.test(this.url)) {
			console.log('OK');
			if (this.researchRegex.test(this.url)) {
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