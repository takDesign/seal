// Bootstrap validator script
(function() {
    //anon funtion
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission on SUBMIT if the fields are vacant
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
