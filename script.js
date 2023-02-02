const usuario = document.getElementById('usuario')
const contraseña = document.getElementById('contraseña')
const button = document.getElementById('button')

button.addEventListener('click', (e) => {
    e.preventDefault()
    const data = {
        usuario: usuario.value,
        contraseña: contraseña.value,

    }

    console.log(data)
}
)

function login(){
    var user, pass;

    user = usuario.value;
    pass = contraseña.value;

    if(user =="Damian" && pass == "123456"){
        window.location= "formulario.php";
    } else {
        alert("Datos Incorrectos")
    }

}