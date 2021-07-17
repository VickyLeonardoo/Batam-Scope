$(function () {
    var $registerForm = $("$registration");
    if ($registerForm.length) {
        $registerForm.validate({
            rules: {
                nik: {
                    required: true
                }
            },
            messages: {
                nik: {
                    required: 'Nik is Required'
                }
            }
        })
    }
})