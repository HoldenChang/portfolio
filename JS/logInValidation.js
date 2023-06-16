$(document).ready(()=>{
    // validating username
    $('#userName').keyup(()=>{
        const pattern = /^[A-Za-z0-9]{5,20}$/;
        var account = $('#userName').val();
        if(!pattern.test(account)){
            $('#accValid').html("5~20 Characters and Numbers Only");
            $('#accValid').css({"color":"red", "fontSize":"1vw"});
            $('#userName').css("marginBottom", "2px");
        }else{
            $("#accValid").html("");
        }
        if(account === ""){
            $("#accValid").html("");
        }
    })
    // validating password
    $('#confirmPwd').keyup(()=>{
        var pwd = $('#userPwd').val();
        var pwdVal = $('#confirmPwd').val();
        if(pwd != pwdVal){
            $('#pwdValid').html("Password is not same");
            $('#pwdValid').css({"color":"red","fontSize":"1vw"});
            $('#confirmPwd').css("marginBottom", "2px");
        }else{
            $('#pwdValid').html("");
        }
        if(pwdVal === ""){
            $('#pwdValid').html("");
        }
    });
    const namePTN = /^[A-Za-z]{1,25}$/;
    // Validating First name
    $("#firstN").keyup(()=>{
        var fName = $('#firstN').val();
        if(!namePTN.test(fName)){
            $('#fNValid').html("Only Character");
            $('#fNValid').css({"color":"red","fontSize":"1vw"});
            $('#firstN').css("marginBottom", "2px");
        }else{
            $('#fNValid').html("");
        }
        if(fName === ""){
            $('#fNValid').html("");
        }
    });
    $("#lastN").keyup(()=>{
        var lName = $('#lastN').val();
        if(!namePTN.test(lName)){
            $('#lNValid').html("Only Character");
            $('#lNValid').css({"color":"red",});
            $('#lastN').css("marginBottom", "2px");
        }else{
            $('#lNValid').html("");
        }
        if(lName === ""){
            $('#lNValid').html("");
        }
    });
    // checking account is already taken
    $('#userName').keyup(()=>{
        var account = $('#userName').val();
        $.post("../php/accCheck.php", {
            accCheck: account
        }, function(data, status){
            if(data != ""){
                $("#accValid").html(data);
            }
        });
        $('#accValid').css({"color":"red", "fontSize":"1vw"});
        $('#userName').css("marginBottom", "2px");       
    });
});

function loginValidation(){
    let accValid = document.querySelector('#accValid');
    let accValid2 = document.querySelector('#accValid2');
    let pwdValid = document.querySelector('#pwdValid');
    let fNValid = document.querySelector('#fNValid');
    let lNValid = document.querySelector('#lNValid');

    if(accValid.innerHTML === "" && accValid2.innerHTML === "" &&
    pwdValid.innerHTML === "" && fNValid.innerHTML === "" &&
    lNValid.innerHTML === ""){
        return true;
    }else{
        return false;
    }
}