const user = {
    email:"fiqhi.nra@gmail.com",
    password: "12345678"
}
document.getElementById('myForm').addEventListener('submit',(e)=>{e.preventDefault();
    const email = document.getElementById('email').value
    const password = document.getElementById('password').value
    console.log(email)
    if(user.email==email && user.password==password){
        window.location.href='mahasiswa.php'
    }else{
        alert ('katasandi salah')
    }
})
console.log(myForm)