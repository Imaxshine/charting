// reg && Login
const Toview = document.querySelector('#checkbox, .checkbox');
const exampleInputPassword1 = document.getElementById('exampleInputPassword1');
const exampleInputPassword2 = document.getElementById('exampleInputPassword2');
const hideView = document.querySelector('.checkbox');
 
Toview.onclick = ()=>{
if (exampleInputPassword1.type == "password" && exampleInputPassword2.type == "password"){
    exampleInputPassword1.type = "text";
    exampleInputPassword2.type = "text";
    hideView.textContent = "hide";
}else if (exampleInputPassword1.type == "text" && exampleInputPassword2.type == "text")
    {
    exampleInputPassword1.type = "password";
    exampleInputPassword2.type = "password";
    hideView.textContent = "view";
}
}
// End Reg && Login

// Imail input
const emailFocused = document.getElementById('exampleInputEmail1');
function emailInfo()
{
    const clientInfo = document.getElementById('emailHelp');
    if(clientInfo.style.display == "none"){
        clientInfo.style.display = "block";
    }
    
}
emailFocused.addEventListener('focus', emailInfo);
emailFocused.addEventListener('blur', function(){
    document.getElementById('emailHelp').style.display = "none";
})