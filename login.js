const Toviewlogin = document.querySelector('#checkbox, .checkbox');
const hideView = document.querySelector('.checkbox');
Toviewlogin.onclick = ()=>{
    if (exampleInputPassword.type == "password"){
        exampleInputPassword.type = "text";
        hideView.textContent = "hide";
    }else if (exampleInputPassword.type == "text")
        {
        exampleInputPassword.type = "password";
        hideView.textContent = "view";
    }
    }