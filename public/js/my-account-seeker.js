$(function(){
    $('.change-password').on('click', function () {
        $('.account-password-inner').toggleClass('displayNone');
        $('.change-password').toggleClass('selected');
        $('.arrow-01').toggleClass('rotate-arrow');
        return false;
    });

    $('.pw-cancel').on('click', function() {
        $('.account-password-inner').toggleClass('displayNone');
        $('.change-password').toggleClass('selected');
        $('.arrow-01').toggleClass('rotate-arrow');
        return false;
    });

    $('.change-email').on('click', function () {
        $('.account-email-inner').toggleClass('displayNone');
        $('.change-email').toggleClass('selected');
        $('.arrow-02').toggleClass('rotate-arrow');
        return false;
    });

    $('.email-cancel').on('click', function() {
        $('.account-email-inner').toggleClass('displayNone');
        $('.background-email').toggleClass('selected');
        $('.arrow-02').toggleClass('rotate-arrow');
        return false;
    });

    $('.delete-account').on('click', function () {
        $('.account-delete-inner').toggleClass('displayNone');
        $('.delete-account').toggleClass('selected');
        $('.arrow-03').toggleClass('rotate-arrow');
        return false;
    });

    $('.delete-cancel').on('click', function() {
        $('.account-delete-inner').toggleClass('displayNone');
        $('.delete-account').toggleClass('selected');
        $('.arrow-03').toggleClass('rotate-arrow');
        return false;
    });
})