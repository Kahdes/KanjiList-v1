var Research = {
	formElt: null,
	inputElt: null,

	init() {
		this.formElt = document.getElementsByClassName('form')[0];
		this.inputElt = document.getElementsByClassName('research')[0];

		let id = this.formElt.id; 
		let handle = (id === 'kanji-form');

		this.analyze(handle);
	},

	analyze(handle) {
		let formElt = this.formElt;
		let inputElt = this.inputElt;
		let status = 0;

		inputElt.addEventListener('blur', function(e) {
			let inputValue = inputElt.value;
			if (handle) {
				var regex = /^([一-龯]){1,}$/;
			} else {
				var regex = /^([\D]){1}([\D\/\[\]\s]){0,}$/i;					
			}

			if (regex.test(inputValue) || inputValue === "") {
				if (inputElt.classList.contains('custom-danger')) {
					inputElt.classList.remove('custom-danger');
				}
				status = 1;
			} else if (!regex.test(inputValue)) {
				status = 0;				
				inputElt.classList.add('custom-danger');
			}

			formElt.addEventListener('submit', function(e) {
				if (status !== 1) {
					e.preventDefault();
				}
			})
		});
		
	}
};

Research.init();