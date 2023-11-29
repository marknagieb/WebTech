// JavaScript Document
function checkUsername() {                             				
    var elMsg = document.getElementById('feedback');     			
    var elUsername = document.getElementById('username');		

    switch(true) {
        case (elUsername.value.length < 5):  
            elMsg.innerHTML = 'Username must be 5 characters or more'; 
            break;
        default:  
            elMsg.innerHTML = ''; 
            break;
    }
}
