$(document).on('click', '.login_submit', ()=> {
    $.ajax({
        method: 'post',
        url: '../Login/validar_login.php',
        data: {nome: matheus, idade: 20}
    })
})

// $(document).on("click", ".login__submit", function (e) {
//     if (animating) return;
//     animating = true;
//     var that = this;
//     ripple($(that), e);
//     $(that).addClass("processing");

//     console.log("Processando... ");
//     $.post(
//             "login/validar-login.php", 
//             {hdncontroleorigem:"processo-adequado-tabajara", txtusuario: $(".login__input.name").val(), txtsenha: $(".login__input.pass").val()  } , 
//             function (data) {
//                 console.log("Retorno da chamada via ajax", data);
//             }
//     )
//         })