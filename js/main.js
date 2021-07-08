(function() {
    "use strict";
    let regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function() {

        //campos datos usuarios
        let nombre = document.getElementById('nombre');
        let apellido = document.getElementById('apellido');
        let email = document.getElementById('email');

        //campos pases
        let pase_dia = document.getElementById('pase_dia');
        let pase_dosdias = document.getElementById('pase_2dias');
        let pase_completo = document.getElementById('pase_completo');

        //Botones y divs
        let calcular = document.getElementById('calcular');
        let errorDiv = document.getElementById('error');
        let botonRegistro = document.getElementById('boton-registro');
        let listaProductos = document.getElementById('lista-productos');
        let suma = document.getElementById('suma-total');

        calcular.addEventListener('click', calcularTotal);

        botonRegistro.disabled = true;



        //Extras
        let etiquetas = document.getElementById('etiquetas');
        let camisas = document.getElementById('camisa_evento');



        //EVENTOS
        pase_dia.addEventListener('blur', mostrarDia);
        pase_dosdias.addEventListener('blur', mostrarDia);
        pase_completo.addEventListener('blur', mostrarDia);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarMail);


        //VALIDAR CAMPOS
        function validarCampos() {
            if (this.value == '') {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Este campo es obligatorio';
                this.style.border = '1px solid red';
            } else {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }
        }


        //VALIDAR MAIL
        function validarMail() {
            if (this.value.indexOf('@') > -1) {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            } else {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Debes ingresar un email válido';
                this.style.border = '1px solid red';
            }
        }

        //FUNCION CALCULAR TOTAL
        function calcularTotal(event) {
            event.preventDefault();
            if (regalo.value === '') {
                alert('Debes elegir un regalo');
                regalo.focus();
            } else {
                let boletoDia = parseInt(pase_dia.value, 10) || 0,
                    boletosDosDias = parseInt(pase_2dias.value, 10) || 0,
                    boletoCompleto = parseInt(pase_completo.value, 10) || 0,
                    cantCamisas = parseInt(camisas.value, 10) || 0,
                    cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

                let totalPagar = (boletoDia * 30) + (boletosDosDias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

                let totalProductos = [];


                if (boletoDia >= 1) {
                    totalProductos.push(`${boletoDia} boletos por día`);
                }

                if (boletosDosDias >= 1) {
                    totalProductos.push(`${boletosDosDias} boletos por dos día`);
                }

                if (boletoCompleto >= 1) {
                    totalProductos.push(`${boletoCompleto} boletos por pase completo`);
                }
                if (cantCamisas >= 1) {
                    totalProductos.push(`${cantCamisas} camisas`);
                }
                if (cantEtiquetas >= 1) {
                    totalProductos.push(`${cantEtiquetas} etiquetas`);
                }

                listaProductos.style.display = 'block';
                listaProductos.innerHTML = '';
                for (let i = 0; i < totalProductos.length; i++) {
                    listaProductos.innerHTML += totalProductos[i] + '<br/>'
                }
                suma.innerHTML = `$ ${totalPagar.toFixed(2)}`;

                botonRegistro.disabled = false;
                document.getElementById('total_pedido').value = totalPagar;

            }
        }


        function mostrarDia() {
            let boletoDia = parseInt(pase_dia.value, 10) || 0,
                boletosDosDias = parseInt(pase_2dias.value, 10) || 0,
                boletoCompleto = parseInt(pase_completo.value, 10) || 0;

            let diasElegidos = [];
            if (boletoDia > 0) {
                diasElegidos.push('viernes');
            }
            if (boletosDosDias > 0) {
                diasElegidos.push('viernes', 'sabado')
            }
            if (boletoCompleto > 0) {
                diasElegidos.push('viernes', 'sabado', 'domingo')
            }

            for (let i = 0; i < diasElegidos.length; i++) {
                document.getElementById(diasElegidos[i]).style.display = 'block';
            }
        }
    }); //DOM CONTENT LOADED
})();


$(function() {
    //LETTERING
    $('.nombre-sitio').lettering();

    //CLASS ACTIVO
    $('body.conferencia .nav-principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .nav-principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .nav-principal a:contains("Invitados")').addClass('activo');
    $('body.registro .nav-principal a:contains("Reservaciones")').addClass('activo');

    //MENU HAMBURGUESA
    $('.menu-movil').on('click', function() {
        $('.nav-principal').slideToggle();
        return false;
    })



    //PROGRAMA DE CONFERENCIAS
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');


    $('.menu-programa a').on('click', function() {
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        let enlace = $(this).attr('href');
        $(enlace).fadeIn(500);

        return false;
    });


    //ANIMACION PARA NUMEROS
    $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6 }, 1000);
    $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15 }, 900);
    $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3 }, 1000);
    $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9 }, 1200);

    //COUNTDOWN
    $('.cuenta-regresiva').countdown('2022/01/11 00:00:00',
        function(event) {
            $('#dias').html(event.strftime('%D'));
            $('#horas').html(event.strftime('%H'));
            $('#minutos').html(event.strftime('%M'));
            $('#segundos').html(event.strftime('%S'));
        });


    //COLORBOX
    $('.invitado-info').colorbox({ inline: true, width: "50%" })


})