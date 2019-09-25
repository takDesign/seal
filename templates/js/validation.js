var Validator = function (whichFormID) {
	var validator = this;

	validator.el = document.getElementById(whichFormID);
	validator.error = false;

	// methods
	validator.validate = function () {

		var arrMyQuestions = validator.el.getElementsByClassName("required");
		for (var i = 0; i < arrMyQuestions.length; i++) {
			var currentQuestionSet = arrMyQuestions[i];
			var currentQuestionSetErrorDiv = currentQuestionSet.querySelector(".error");
			var checkThisField = currentQuestionSet.getElementsByTagName("input")[0];
			if (checkThisField.type == "text") {
				if (checkThisField.value == "") {
					currentQuestionSetErrorDiv.classList.add("showError");
					validator.error = true;
				} else {
					currentQuestionSetErrorDiv.classList.remove("showError");
				}
			}

		}

	}

	// event listeners
	validator.el.addEventListener("submit", function (e) { // e represents an event that happened
		validator.error = false; // reset the error status every time we click submit
		validator.validate();

		if (validator.error) {
			e.preventDefault(); // stop the default behaviour, which was submit...
		}
	});
}


new Validator("registerForm");