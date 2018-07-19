var Research = {
	status: null,
	formElt: null,
	sectionElt: null,

	init() {
		this.formElt = document.getElementsByClassName('form');

		let id = this.formElt[0].id; 
		let handle = (id === 'kanji-form');

		this.analyze(handle);
	},

	analyze(handle) {
		var section = this.sectionElt;
		this.formElt[0].addEventListener('submit', function(e) {
			a =	section;
			var inputValue = document.getElementsByClassName('research')[0].value;

			if (handle) {
				var regex = /^([一-龯]){1,}$/;
			} else {
				var regex = /^([a-zA-Z]){1,}$/i;					
			}

			if (regex.test(inputValue)) {				
				return true;
			} else {
				e.preventDefault();
			}
		});
	}
};

Research.init();