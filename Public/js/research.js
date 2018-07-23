var Research = {
	formElt: null,
	inputElt: null,

	init() {
		//EMPECHE DE VALIDER UN FORMULAIRE AVEC 'ENTRER'
		$(document).ready(function() {
		    $("form").bind("keypress", function(e) {
		        if (e.keyCode == 13) {
		            return false;
		        }
		    });
		});

		let formElt = document.getElementsByClassName('form')[0];
		
		let id = formElt.id; 
		let handle = (id === 'kanji-form');

		this.analyze(handle);
	},

	analyze(handle) {		
		let formElt = document.getElementsByClassName('form')[0];
		let inputElt = document.getElementsByClassName('research')[0];
		let status = 0;

		inputElt.addEventListener('blur', function(e) {
			let inputValue = inputElt.value;
			if (handle) {
				var regex = /^([一-龯])+$/;
			} else {
				var regex = /^([^一-龯\s/()\[\]@|_-]){1,}([\D\/\[\]\s])*$/i;					
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
