var Inscription = {
	formElt: null,
	pseudo: null,
	pwd: null,
	pwdConf: null,
	pseudoRegex: /^([\w]){1,}$/,	

	init() {
		this.formElt = $('#sign-in');
		this.pseudo = $('#sign-pseudo');
		this.pwd = $('#sign-pwd');
		this.pwdConf = $('#sign-conf');
		
		this.analyze(this.formElt, this.pseudo, this.pwd, this.pwdConf, this.pseudoRegex);
	},

	analyze(form, pseudo, pwd, conf, regex) {
		form.change(function(e) {
			let pseudoValue = pseudo.val();
			let pwdValue = pwd.val();
			let pwdConfValue = conf.val();

			let statusP = null;
			let statusPwd = null;

			//ANALYSE PSEUDO
			if (regex.test(pseudoValue) || pseudoValue === "") {
				if (pseudo.hasClass('custom-danger')) {
					pseudo.removeClass('custom-danger');					
				}
				statusP = 1;
			} else if (!regex.test(pseudoValue)) {			
				pseudo.addClass('custom-danger');
				statusP = null;
			}

			//ANALYSE MOTS DE PASSE
			if (!(pwdConfValue === '' && pwdConfValue === '')) {
				if (pwdConfValue === pwdValue) {
					if (conf.hasClass('custom-danger')) {
						conf.removeClass('custom-danger');
						$('#conf-danger').addClass('d-none');					
					}
					statusPwd = 1;
				} else {
					conf.addClass('custom-danger');
					$('#conf-danger').removeClass('d-none');
					statusPwd = null;
				}
			}			

			//BLOCAGE & ENVOI FORMULAIRE
			if (!(statusP === 1 && statusPwd === 1) &&
				!(statusP === null && statusPwd === null)) {
				form.submit(function(e) {
					e.preventDefault();
				});
			} else {
				form.unbind('submit');
			}
		});		
	}	
};

Inscription.init();
