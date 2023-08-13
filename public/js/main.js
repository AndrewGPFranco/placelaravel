const msgContainer = document.getElementById('msgContainer');

if(msgContainer){
    setTimeout(() => {
        msgContainer.parentElement.removeChild(msgContainer);
    },5000);
}
