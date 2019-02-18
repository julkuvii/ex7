
function showLanguage(){
    var select = document.getElementById('language');
    var input = document.getElementById('selected_language')
        input.value = select.value;
    
}

function showPhone(value){
    var input = document.getElementById('selected_phone')

    input.value = value;
}