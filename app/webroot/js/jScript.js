/**
 * Created by Fernanda on 28/03/2015.
 */
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function limitText(textValue) {
    if (textValue == null) {
        id('cont').innerHTML = 800;
    }
    max = 800;
    totalText = textValue.length;
    if (totalText <= max) {
        result = max - totalText;
        id('cont').innerHTML = result;
    } else {
        id('PostObservation').value = textValue.substr(0, max);
    }
}

function validation() {
    if(validateEmail(id('PostEmail').value)){
        return true;
    }else{
        alert("preencha o email corretamente");
        return false;
    }
}

function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");
    return v;
}
function id( element ){
    return document.getElementById( element );
}
window.onload = function(){
    id('PostPhone').onkeypress = function(){
        mascara( this, mtel );
    }
}

function numberMessage(value){

    if(document.getElementById(value).className == "sr-only"){
        document.getElementById(value).className="";
        read(true);
    } else {
        document.getElementById(value).className="sr-only";
    }
}











