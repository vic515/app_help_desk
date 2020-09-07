console.log()



function novoCadastro() {
    window.location.href = 'novo_cadastro.php';
}

function comparaSenhas(email,senha,confirmaSenha) {
    console.log(email,senha,confirmaSenha)
    if (senha != confirmaSenha) {
        document.getElementById('senha').className = 'form-control w-100 border-danger'
        document.getElementById('confirmaSenha').className = 'form-control w-100 border-danger'
        document.getElementById('testeSenha').className = 'd-block text-danger mt-1'
    } else {
        document.getElementById('senha').className = 'form-control w-100 border-success'
        document.getElementById('confirmaSenha').className = 'form-control w-100 border-success'
        document.getElementById('testeSenha').className = 'd-none'
        document.getElementById('fakebutton').className = 'd-none'
        document.getElementById('submit').className = 'btn btn-success btn-lg w-100 mt-3'
    }
}

function validaDados() {
    let email = document.getElementById('email').value
    let senha = document.getElementById('senha').value
    let confirmaSenha = document.getElementById('confirmaSenha').value
    if((email != null && email != '') && (senha != null && senha != '') && (confirmaSenha != null && confirmaSenha != '')) {
        comparaSenhas(email,senha,confirmaSenha);
    }
}