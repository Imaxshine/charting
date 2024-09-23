const Messages = document.querySelectorAll('.message');
Messages.forEach(message=>{
    message.addEventListener('click',()=>{
        const messageId = message.getAttribute('data-message-id'); //Add data-* (data attribute) 
        const toShowtime = document.getElementById('time-' + messageId);
        if(toShowtime.style.display == "none"){
            toShowtime.style.display = "block";
        }else{
            toShowtime.style.display = "none";
        }
    })
})
 


// ==============SCROLL=======================

const messageContainer = document.querySelector('.message-body');
function scrollToBottom(){
    messageContainer.scrollTop = messageContainer.scrollHeight;
}
scrollToBottom();
