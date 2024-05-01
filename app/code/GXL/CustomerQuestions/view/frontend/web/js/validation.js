require([
    'jquery',
    'mage/validation'
], function($){
    $(document).ready(function() {
        $('#name-error').hide();
        $('#email-error').hide();
        $('#question-error').hide();
        $('#custom_questions_form').submit(function(e) {
            var name = $('#question_name').val().trim();
            var email = $('#question_email').val().trim();
            var questions = $('#question_content').val().trim();
            var isValid = true;
    
            if (name == '') {
                $('#name-error').show();
                $("#question_name").css("border-color", "#ed8380");
                isValid = false;
            } else {
                $('#name-error').hide();
                $("#question_name").css("border-color", "#ccc");
            }
    
            if (email == '') {
                $('#email-error').show();
                $("#question_email").css("border-color", "#ed8380");
                isValid = false;
            } else {
                $('#email-error').hide();
                $("#question_email").css("border-color", "#ccc");
            }
    
            if (questions == '') {
                $('#question-error').show();
                $("#question_content").css("border-color", "#ed8380");
                isValid = false;
            } else {
                $('#question-error').hide();
                $("#question_content").css("border-color", "#ccc");
            }
    
            if (!isValid) {
                e.preventDefault();
            }
        });
    });
});