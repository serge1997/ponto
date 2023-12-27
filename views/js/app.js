$('#userForm').submit((e) => {
    e.preventDefault();
    let nome = $('#nome').val();
    let email = $('#email').val();
    let password = $('#password').val();
    $("#success").text("")
    let success = document.getElementById('success');

    $.ajax({
        url: 'http://localhost/fullcrud/routes/user.php',
        method: 'POST',
        data: {
            nome: nome,
            email: email,
            password: password
        },
        dataType: 'json'
    }).done(function(res) {
        console.log(res)
        $('#nome').val('');
        $('#email').val('');
        $('#password').val('')
        if (res.email || res.name || res.password){
            $('.name-err').text(res.name)
            $('.email-err').text(res.email)
            $('.password-err').text(res.password)
        }else{
            $('.name-err').text("")
            $('.email-err').text("")
            $('.password-err').text("")
            $("#success").addClass("py2 px-3").text(res);
        }

    })
})

var codpin = "0";
$('.py-3').click(function() {
    let user_pin = $(this).attr("value");
    codpin += user_pin;
    $(".user-pin").attr("value", codpin)
    //$('.user-pin').val(codpin);
})


$('#apagar').click(function() {
    $('.user-pin').val("");
})


$(document).ready(function() {
    BaterPonto();
    DisplayDateHour();
    justify();
})

function BaterPonto(){
    $('#bater-ponto').click(function(){
        swal.fire({
            text: "Clique em ok para confirmar",
            icon: "question",
            showCancelButton: true
        }).then((result) => {
            if (result.isConfirmed){
                swal.fire({text: "Ponto registradao", icon: "success"});
            }
        })
    })
}

function SetDateHour(){
    let date = new Date();
    let day = date.getDate();
    let year = date.getFullYear();
    let month = date.getMonth();
    let hour = date.getHours();
    let minute = date.getMinutes();
    let second = date.getSeconds();
    let fulldate = `${day}/${month}/${year}  ${hour}:${minute}:${second}`;
    return fulldate;
}
function DisplayDateHour(){
    let time = SetDateHour();
    let p = document.createElement('p')
    p.style.marginBottom = "10px";
    p.innerText = time;
    document.querySelector('.ponto-box').prepend(p);

}

function justify(){
    $("#justificar").click(function() {
        Swal.fire({
            text: "Informe em baixo a justificativa",
            showCancelButton: true,
            html: `
                <small id="justificativa-err"></small>
                <label for="justificativa-text">Resumo justificativa: </label>
                <textarea id="justificativa-text" class="w-full border mb-5" rows="5"></textarea>
                <label for="justificativa-file" class="mt-4">Annex justificativa: </label>
                <input type="file" id="justificativa-file" class="w-full border p-3"/>
            `
        }).then((result) => {
            if (result.isConfirmed){
                let justificativa_text = document.getElementById('justificativa-text').value;
                let err_output = document.getElementById('justificativa-err').value;
                if (justificativa_text === ""){
                    alert("Campo resumo obrigatorio")
                }
            }
        })
    })
}

