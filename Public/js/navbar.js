var Navbar = {
	url: location.href,
	homeRegex: /Home(\/(.){0,}){0,}/,
	alphabetsRegex: /Alphabets(\/(.){0,}){0,}/,	
	researchRegex: /Research(\/(.){0,}){0,}/,
	exercisesRegex: /Exercises(\/(.){0,}){0,}/,
	panelRegex: /Panel(\/(.){0,}){0,}/,

	init() {
		if (!this.homeRegex.test(this.url)) {
			if (this.alphabetsRegex.test(this.url)) {
				$('#Alphabets').addClass("active");
			} else if (this.researchRegex.test(this.url)) {
				$('#Research').addClass("active");
			} else if (this.exercisesRegex.test(this.url)) {
				$('#Exercises').addClass("active");
			} else if (this.panelRegex.test(this.url)) {
				$('#Panel').addClass("active");
			} else {
				$('#Home').addClass("active");
			}
		} else {
			$('#Home').addClass("active");
		}	
	}
};

Navbar.init();