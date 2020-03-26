$(document).ready(function(){
    $('#login').ajaxForm({ 
        url: '/session',
        type: 'POST',
        success: function(){
            location.replace('/');
        }
    }); 
})