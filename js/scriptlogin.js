let usr_r = /^[a-z, A-Z, 0-9]{5,15}$/;
let pass_r = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{4,8}$/;;
var pass;
function validaciones(id){
	switch(id){
		case 'name':
			var usr = document.getElementById(id).value;
			if (usr_r.test(usr)) {
				document.getElementById('mensaje_usr').innerHTML=`<label style="color: green;
			 font-family:Arial;">Nombre de usuario válido</label>`;
			}else{
				document.getElementById('mensaje_usr').innerHTML=`<label style="color: red;
			 font-family:Arial;">Nombre de usuario inválido</label>`;
			}
			break;
		case 'contrasena':
			pass = document.getElementById(id).value;

			if (pass_r.test(pass)&&pass.length>=8&&pass.length<=15) {
				document.getElementById('mensaje_pass').innerHTML=`<label style="color: green;
			 font-family:Arial;">Contraseña válida</label>`;
			}else{
				document.getElementById('mensaje_pass').innerHTML=`<label style="color: red;
			 font-family:Arial;">Contraseña inválida</label>`;
			}
			break;
	}
}
