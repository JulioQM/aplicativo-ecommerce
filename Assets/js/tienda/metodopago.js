valorTotal = JSON.parse(localStorage.getItem('pagoTotal'));


var mostrarTotal = document.getElementById('mostrar-total');
mostrarTotal.innerHTML = '<b>Total a pagar:</b> $' + valorTotal.toFixed(2);

//Imput numero tarjeta
formulario.numeroTarjeta.addEventListener('keyup', (e) => {
    let valorImput = e.target.value;

    formulario.numeroTarjeta.value = valorImput
    //Elimina caracteres que no sean digitos 0-9
    .replace(/\D/g,'')
    //Agrupar los numeros de 4 en 4
    .replace(/([0-9]{4})/g,'$1 ')
    //Elimina el ultimo espacio
    .trim();  

    if (valorImput[0]==4) {
        document.getElementById("visa").style.display = 'inline';
        document.getElementById("master").style.display = 'none';
        document.getElementById("otro").style.display = 'none';
    }else{
        document.getElementById("otro").style.display = "inline";
        document.getElementById("master").style.display = "inline";
        document.getElementById("visa").style.display = "inline";
        if (valorImput[0]==5) {
            document.getElementById("master").style.display = "inline";
            document.getElementById("visa").style.display = 'none';
            document.getElementById("otro").style.display = 'none';
        }
        if (valorImput[0]==3) {
            document.getElementById("master").style.display = "none";
            document.getElementById("visa").style.display = 'none';
            document.getElementById("otro").style.display = 'inline';
        }
    }
    
    

});

//Imput nombre tarjeta
formulario.nombreTarjeta.addEventListener('keyup', (e) => {
    let valorImput = e.target.value;

    formulario.nombreTarjeta.value = valorImput
    //Eliminar numeros
    .replace(/([0-9])/g,''); 
});

//Imput CVV
formulario.cvvTarjeta.addEventListener('keyup', (e) => {
    let valorImput = e.target.value;

    formulario.cvvTarjeta.value = valorImput
    //Eliminar numeros
    .replace(/\D/g,''); 
});

//Rellenar select del mes
for(let i=1; i<=12 ; i++){
let opcion =document.createElement('option');
opcion.value=i;
opcion.innerText=i;
formulario.selectMes.appendChild(opcion);
}

//Rellenar select del año
for(let i=2020; i<=2030 ; i++){
    let opcion =document.createElement('option');
    opcion.value=i;
    opcion.innerText=i;
    formulario.selectAño.appendChild(opcion);
    }

//Imput Comprobante de pago
document.getElementById("comprobante").addEventListener('keyup', (e) => {
    let valorImput = e.target.value;

    document.getElementById("comprobante").value = valorImput
    //Eliminar numeros
    .replace(/\D/g,''); 
});