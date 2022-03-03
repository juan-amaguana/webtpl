// GLOBAL VARS

var EDS_RUC = {
    'EDS BAﾃ前S': '0190158098001',
    'EDS GAPAL': '0190158802001',
    'EDS MILCHICHIG': '0190357384001',
    'EDS NARANCAY': '0190168107001',
    'EDS MACHANGARA': '0190055671001',
    'EDS BRITO': '0600057632001',
    'EDS SENSACION': '1718371097001',
    'EDS ARIZAGA / Mobil': '0991306498001',
    'EDS BONACO / Mobil': '0991306498001',
    'EDS MACHALA UNO': '0791735491001',
    'EDS MACHALA YACHT CLUB': '0790058704001',
    'EDS RIO BONITO': '0790092007001',
    'EDS PASAJE': '0791708192001',
    'EDS PUERTO BOLIVAR': '0791708192001',
    'EDS MACHALA DOS': '0992327162001',
    'EDS ATACAMES': '1706730569001',
    'EDS EL JARDIN': '1792817706001',
    'EDS ARUAL': '0991281258001',
    'EDS BARCELONA / Mobil': '0991306498001',
    'EDS BELLAVISTA': '0991321039001',
    'EDS CEIBOS / Mobil': '0991306498001',
    'EDS BAHIA NORTE': '0992704187001',
    'EDS BENEFICENCIA / Mobil': '0991306498001',
    'EDS CARVAJAL': '0991344098001',
    'EDS CASANOVA': '0990330425001',
    'EDS CENTENARIO': '0991306498001',
    'EDS CORDOVA / Mobil': '0991306498001',
    'EDS DAULE': '0903267011001',
    'EDS DOMINGO COMIN': '0991334785001',
    'EDS DURAN': '0991306498001',
    'EDS ECOLOGICA': '0991306498001',
    'EDS EL EXITO': '0991336060001',
    'EDS EL FORTIN': '0992732458001',
    'EDS ELOY ALFARO': '0992707933001',
    'EDS GARITA CHIMBORAZO': '0906007109001',
    'EDS GARZOTA': '0991306498001',
    'EDS GUAYACANES': '0992262400001',
    'EDS GYR': '0992942770001',
    'EDS KENNEDY': '0991306498001',
    'EDS LEON': '0902821214001',
    'EDS LAS AMERICAS': '0991306498001',
    'EDS MAIOLI': '0990997934001',
    'EDS MARIA AUXILIADORA': '0101900330001',
    'EDS PEGASO': '0991306498001',
    'EDS PERIMETRAL': '0992500875001',
    'EDS PETROPORT': '0990243891001',
    'EDS PORTETE': '0990023263001',
    'EDS PRADERA': '0991306498001',
    'EDS PISONI': '0992301759001',
    'EDS QUATRO': '0992914467001',
    'EDS SAN CARLOS': '0990988838001',
    'EDS NATABUELA': '1703818565001',
    'EDS AUTOCENTRO': '1201695804001',
    'EDS LA VICTORIA': '1291736110001',
    'EDS ROSARIO MERCEDES': '1200164125001',
    'EDS MELISSA': '0991417575001',
    'EDS AEROPUERTO': '0991306498001',
    'EDS COSTA NORTE': '1391785585001',
    'EDS MAR FLOR': '1305928218001',
    'EDS PETROLIDER': '0991306498001',
    'EDS MARINA': '0991306498001',
    'EDS VALGAS': '1792605504001',
    'EDS EL CHACO': '1102734322001',
    'EDS SINDICATO DE CHOFERES DEL NAPO': '1720597416001',
    'EDS AMAZONAS': '1715059117001',
    'EDS ANDINA': '1724310071001',
    'EDS AUTOSERVICIO SUR': '1792605504001',
    'EDS CENTRAL': '0991306498001',
    'EDS EL BOSQUE': '1792570956001',
    'EDS CORONEL': '1100604063001',
    'EDS EL PINAR': '1792645352001',
    'EDS EL QUINCHE': '1708304322001',
    'EDS FLAMINGO ORIENTAL': '1714305263001',
    'EDS FLAMINGO OCCIDENTAL': '1714305263001',
    'EDS LABRADOR': '0991306498001',
    'EDS JB': '1700767351001',
    'EDS MIRAVALLE': '0991306498001',
    'EDS ORIENTAL': '0991306498001',
    'EDS PANASUR': '0991306498001',
    'EDS PIFO': '1791729625001',
    'EDS PRESTOSERVICIO DEL VALLE': '1792817706001',
    'EDS SAN SEBASTIAN': '1500463284001',
    'EDS SUPERMOBIL': '0991306498001',
    'EDS TERPEL UNO': '0991306498001',
    'EDS TUFIﾃ前': '1708630619001',
    'EDS BALLENITA': '0992509538001',
    'EDS ANTURIOS I': '0991281258001',
    'EDS EL DESCANSO': '1711392603001',
    'EDS R Y G': '1792605504001',
    'EDS ANTURIOS II': '0991281258001',
    'EDS SERVICENTRO': '1703096824001',
    'EDS TRUCK STOP': '1792605504001',
    'EDS ALBERESE': '0991306498001',
    'EDS SILVAN 1': '0991431535001',
    'EDS SILVAN 2': '0991431535001',
    'EDS POSOIL': '0991306498001',
    'EDS DISCOLDA': '0990030642001',
    'EDS AMCO': '0991306498001',
    'EDS MALECON': '0991306498001',
    'EDS LO JUSTO': '1792605504001',
    'EDS MONTECRISTI': '1792605504001',
    'EDS PETRO PLAZA': '2390059267001',
    'EDS PETRILLO 2': '0702599150001',
    'EDS MALACATOS': '0301255931001',
    'EDS SALITRE': '1792605504001',
    'EDS SERVIMOBIL': '2390059267001',
    'EDS METROPOLIS 2': '0993074659001',
    'EDS BAÑOS':'190158098',
    'EDS TAMARINDO':'0300476744001',
    'EDS LA ISLA': '1714305263001',
    'EDS 9 DE OCTUBRE': '0992539380001',
    'EDS EP VIRGEN DEL QUINCHE': '0050184913001',
    'EDS LA T SALITRE': '1792605504001'
}
const CURRENT_HOST = window.location.protocol + "//" + window.location.host;
console.log("HOST::::::", CURRENT_HOST)
var voucherSetted = false;
// Code callback
function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) === ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) === 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkFactura(){
    var cedula = getCookie('cedula');
    var input = document.getElementById('cedulaLogin');
    console.log('cedula');
    /*if (cedula !== "" && cedula.length > 5){
        window.location.replace(`${CURRENT_HOST}/portal-de-usuario?id=${cedula}`);
        return
    }*/
    input.focus();
    input.select();
}
function removeVoucher() {
    jQuery(function ($) {
        if (voucherSetted) {
            $('.voucher').toggleClass('show');
            voucherSetted = false;
        }
        $("#pdfvoucher").attr("required", false);
        $("input:radio").removeAttr("checked");
        $('#reset').prop('disabled', true);
    })
}

function badCode() {
    removeVoucher();
    window.scrollTo(0, 0);
    jQuery(function ($) {
        $("html").css("overflow-y", "hidden");
        $("#errorCode").css("display", "flex");
    })
}
function closebadCode() {
    jQuery(function ($) {
        $("html").css("overflow-y", "scroll");
        $("#errorCode").css("display", "none");
        $('#sendCodeInput').prop('disabled', false);
    })
}
function codeAdded() {
    removeVoucher();
    window.scrollTo(0, 0);
    jQuery(function ($) {
        $("html").css("overflow-y", "hidden");
        $("#codeAdded").css("display", "flex");
    })
}
function closeCodeAdded() {
    jQuery(function ($) {
        $("html").css("overflow-y", "scroll");
        $("#codeAdded").css("display", "none");
        $('#sendCodeInput').prop('disabled', false);
    })
}

function fillFbData(rsp){
    jQuery(function ($) {
    if (rsp.name){
        var fName = rsp.name.split(" ");
        $("#nombre").val(fName[0]);
        $("#apellido").val(fName[1]);
        }
    if(rsp.email){
        $("#correo").val(rsp.email);
        }
    })    
}

// AJAX LOGIN
function submitLogin() {
    jQuery(function ($) {
        var id = $("#cedulaLogin").val();
        var fd = new FormData();
        fd.append('id', id);
        jsLoginSubmit(fd, submit_login_callback);
    })
}

function submitLogin2() {
    jQuery(function ($) {
        var id = $("#cedulaLogin2").val();
        var fd = new FormData();
        fd.append('id', id);
        jsLoginSubmit(fd, submit_login_callback);
    })
}

function submit_login_callback(data) {
    var jdata;
    try {
        jdata = JSON.parse(data);
        if (jdata.success === 1) {
            window.location.replace(`${CURRENT_HOST}/portal-de-usuario?id=${jdata.id}`);
        } else if ((jdata.success === 0)) {
            window.location.replace(`${CURRENT_HOST}/pagina-de-registro?id=${jdata.id}`);
        }
    }
    catch (e) {
        console.error(e);
    }
}

function jsLoginSubmit(fd, callback) {
    var submitUrl = CURRENT_HOST+'/wp-content/plugins/promoTerpel/login/';
    jQuery(function ($) {
        $.ajax({
            url: submitUrl,
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function (data) {
                callback(data);
            }
        });
    })
}
// AJAX USER REGISTER
function submitRegister() {
    jQuery(function ($) {
        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var correo = $("#correo").val();
        var cedula = $("#cedula").val();
        var telefono = $("#telefono").val();
        var fd = new FormData();
        fd.append('nombre', nombre);
        fd.append('apellido', apellido);
        fd.append('correo', correo);
        fd.append('cedula', cedula);
        fd.append('telefono', telefono);
        jsRegisterSubmit(fd, submit_register_callback);
    })
}

function submit_register_callback(data) {
    var jdata;
    try {
        jdata = JSON.parse(data);
        setCookie('cedula',jdata.id,70)
        window.location.replace(`${CURRENT_HOST}/portal-de-usuario?id=${jdata.id}`);
    }
    catch (e) {
        console.error(e);
    }
}

function jsRegisterSubmit(fd, callback) {
    var submitUrl = CURRENT_HOST+'/wp-content/plugins/promoTerpel/register/';
    jQuery(function ($) {
        $.ajax({
            url: submitUrl,
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function (data) {
                callback(data);
            }
        });
    })
}

/**
 * BAJAR TAMANO DE IMAGENES DE FACTURAS
 * @returns 
 */
pdf.onchange = function change() {
    const file = this.files[0]
    if(file.type.match(/image.*/)) {
        if (!file) return
    
        file.image().then(img => {
            const canvas = document.createElement('canvas')
                const ctx = canvas.getContext('2d')
            const maxWidth = 900
            const maxHeight = 900
            
            // calculate new size
            const ratio = Math.min(maxWidth / img.width, maxHeight / img.height)
            const width = img.width * ratio + .5|0
            const height = img.height * ratio + .5|0
            
            // resize the canvas to the new dimensions
            canvas.width = width
            canvas.height = height
            
            // scale & draw the image onto the canvas
            ctx.drawImage(img, 0, 0, width, height)
            document.body.appendChild(canvas)
            
            // Get the binary (aka blob)
            canvas.toBlob(blob => {
                const resizedFile = new File([blob], file.name, file)
                const fileList = new FileListItem(resizedFile)
                
                // temporary remove event listener since
                // assigning a new filelist to the input
                // will trigger a new change event...
                pdf.onchange = null
                pdf.files = fileList
                pdf.onchange = change
            })
        })
    }
}

/**
 * BAJAR TAMANO DE IMAGENES DE VOUCHER
 * @returns 
 */
pdfvoucher.onchange = function change() {
    const file = this.files[0]
    if(file.type.match(/image.*/)) {
        if (!file) return
    
        file.image().then(img => {
            const canvas = document.createElement('canvas')
                const ctx = canvas.getContext('2d')
            const maxWidth = 900
            const maxHeight = 900
            
            // calculate new size
            const ratio = Math.min(maxWidth / img.width, maxHeight / img.height)
            const width = img.width * ratio + .5|0
            const height = img.height * ratio + .5|0
            
            // resize the canvas to the new dimensions
            canvas.width = width
            canvas.height = height
            
            // scale & draw the image onto the canvas
            ctx.drawImage(img, 0, 0, width, height)
            document.body.appendChild(canvas)
            
            // Get the binary (aka blob)
            canvas.toBlob(blob => {
                const resizedFile = new File([blob], file.name, file)
                const fileList = new FileListItem(resizedFile)
                
                // temporary remove event listener since
                // assigning a new filelist to the input
                // will trigger a new change event...
                pdfvoucher.onchange = null
                pdfvoucher.files = fileList
                pdfvoucher.onchange = change
            })
        })
    }
}

function FileListItem(a) {
    a = [].slice.call(Array.isArray(a) ? a : arguments)
    for (var c, b = c = a.length, d = !0; b-- && d;) d = a[b] instanceof File
    if (!d) throw new TypeError("expected argument to FileList is File or array of File objects")
    for (b = (new ClipboardEvent("")).clipboardData || new DataTransfer; c--;) b.items.add(a[c])
    return b.files
}

/**
 * MAX VALUE
 */
function correctValue() {
    jQuery('#montoFactura').val('');
    jQuery('#decimals').val('');
    jQuery("#montoFactura").focus();
    jQuery('#amountExceeded').modal('hide');
}

/**
 * ACCEPT
 */
function acceptValue() {
    jQuery('#amountExceeded').modal('hide');
    submitCode(true);
}

/**
 * ACCEPT DATE
 */
 function acceptDate() {
    jQuery('#noticeDate').modal('hide');
    submitCode(true);
}

/**
 * REGISTRAR FACTURAS
 * @param {*} data 
 */
// AJAX CODE REGISTER
function submitCode(acceptValue=null) {
    jQuery(function ($) {
        
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var user = urlParams.get('id');
        var numFactura1 = $("#numFactura1").val();
        var numFactura2 = $("#numFactura2").val();
        var numFactura3 = $("#numFactura3").val();
        var montoFactura = $("#montoFactura").val();
        var decimals = $("#decimals").val();
        montoFactura  = Number(`${montoFactura}.${decimals}`);

        console.log(montoFactura);
        var fuel = $("#fuel").val();
        var ruc = EDS_RUC[fuel];

        if (montoFactura > 500 && !acceptValue) {
            $('#valueInvoice').text('$'+montoFactura)
            $('#amountExceeded').modal('show');
            return;
        } else if (!acceptValue) {
            $('#noticeDate').modal('show');
            return;
        }

        $('#sendCodeInput').prop('disabled', true);
        $('#sendCodeInput').val('Cargando..');
        //if (montoFactura < 10) {
        //    badCode();
        //    return;
        // };
        var ciudad = $("#ciudad").val();
        var fuel = $("#fuel").val();
        var pdf = $("#pdf").prop('files')[0];
        var numFactura = ruc + numFactura1 + numFactura2 + numFactura3;
        /* Optional Values */
        var evolt = document.getElementById('evolt').checked ?? true;
        var lubricante = document.getElementById('lubricante').checked ?? true;
        var altoque = document.getElementById('altoque').checked ?? true;

        var voucherType = $('input[name="target"]:checked').val() ?? null;
        var voucher = $("#pdfvoucher").prop('files') !== undefined ? $("#pdfvoucher").prop('files')[0] : null;
        /* End optional Values */
        var fd = new FormData();
        fd.append('id', user);

        fd.append('numFactura', numFactura);
        fd.append('montoFactura', montoFactura);
        fd.append('ciudad', ciudad);
        fd.append('fuel', fuel);
        fd.append('pdf', pdf);

        if (evolt) {
            fd.append('evolt', evolt);
        }
        if (lubricante) {
            fd.append('lubricante', lubricante);
        }
        if (altoque) {
            fd.append('altoque', altoque);
        }
        if (voucherType !== null) {
            fd.append('voucherType', voucherType);
            fd.append('voucher', voucher);
        }
        jsRegisterCode(fd, submit_code_callback);
    })
}

/**
 * LIMPIAR FORM
 * @param {*} data 
 */
function submit_code_callback(data) {
    jQuery(function ($) {
        var jdata;
        $('#sendCodeInput').val('Ingresar factura');
        $('#sendCodeInput').prop('disabled', false);
        $('#numFactura1').val('');
        $('#numFactura2').val('');
        $('#numFactura3').val('');
        $('#montoFactura').val('');
        $('#decimals').val('');
        $("#ciudad").val('Elegir');
        $("#fuel").val('Elegir');
        $('#pdf').val('');
        $('input[name="target"]:checked').prop("checked", false);
        $('#evolt').prop("checked", false);
        $('#lubricante').prop("checked", false);
        $('#altoque').prop("checked", false);
        $("#pdfvoucher").val('')
        try {
            jdata = JSON.parse(data);
            var ul = document.querySelector('#yourCodes');
            var codeCount = (parseInt($("#codeCount").text()) + jdata.codes.length);
            var saldoDivided = jdata.saldo.toFixed(2).toString().split('.');
            $("#saldoUnidad").text(saldoDivided[0]);
            $("#saldoCentena").text(saldoDivided[1]);
            $("#codeCount").text(codeCount);
            jdata.codes.map((el) => {
                var li = document.createElement('li');
                li.classList.add("singleCode");
                li.textContent = el;
                ul.prepend(li);
            })
            codeAdded();
        } catch (e) {
            badCode()
        }
    })
}

function jsRegisterCode(fd, callback) {
    var submitUrl = CURRENT_HOST+'/wp-content/plugins/promoTerpel/code/';
    jQuery(function ($) {
        $.ajax({
            url: submitUrl,
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function (data) {
                callback(data);
            }
        });
    })
}
// AJAX FACEBOOK CODE
function submitFBCode(facCode) {
    jQuery(function ($) {
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var user = urlParams.get('id');
        var fd = new FormData();
        fd.append('user', user);
        fd.append('facCode', facCode);
        jsRegisterFBCode(fd, submit_FB_code_callback)
    });
}

function submit_FB_code_callback(data) {
    jQuery(function ($) {
        var jdata;
        try {
            jdata = JSON.parse(data);
            if (!jdata.error) {
                var ul = document.querySelector('#yourCodes');
                var codeCount = (parseInt($("#codeCount").text()) + 1);
                $("#codeCount").text(codeCount);
                var li = document.createElement('li');
                li.classList.add("singleCode");
                li.textContent = jdata.code;
                ul.prepend(li);
                return
            }
            badCode()
        } catch (e) {
            console.log(e)
        }
    })
}

function jsRegisterFBCode(fd, callback) {
    var submitUrl = CURRENT_HOST+'/wp-content/plugins/promoTerpel/fb/';
    jQuery(function ($) {
        $.ajax({
            url: submitUrl,
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function (data) {
                callback(data);
            }
        });
    })
}
// AJAX CODE EXPORT
function exportTableBackend() {
    jsExportTableBackend(exportTableBackend_callback)
}

function exportTableBackend_callback(data) {
    jQuery(function ($) {
        var jdata;
        try {
            jdata = JSON.parse(data);
            if (!jdata.error) {
                const fullUrl = jdata.url;
                const splitedUrl = fullUrl.split("/");
                const lastSplitedUrl = splitedUrl.slice(-1)[0] 
                const finalUrl = `${CURRENT_HOST}/exports/${lastSplitedUrl}`;
                 window.open(finalUrl, '_blank');
                return
            }
            badCode()
        } catch (e) {
            console.log(e)
        }
    })
}

function jsExportTableBackend(callback) {
    var submitUrl = CURRENT_HOST+'/wp-content/plugins/promoTerpel/exportCodes/';
    jQuery(function ($) {
        $.ajax({
            url: submitUrl,
            type: 'post',
            contentType: false,
            processData: false,
            success: function (data) {
                callback(data);
            }
        });
    })
}


// Send 5 mails
function submit5mails(facCode) {
    jQuery(function ($) {
        registert5mails(submit5mailscallback)
    });
}

function submit5mailscallback(data) {
    jQuery(function ($) {
        var jdata;
        try {
            jdata = JSON.parse(data);
            if (jdata.success === 1) {
                alert('Correos enviados')
            }
        } catch (e) {
            console.log(e)
        }
    })
}

function registert5mails(callback) {
    var submitUrl = CURRENT_HOST+'/wp-content/plugins/promoTerpel/five/';
    jQuery(function ($) {
        $.ajax({
            url: submitUrl,
            type: 'post',
            contentType: false,
            processData: false,
            success: function (data) {
                callback(data);
            }
        });
    })
}
// Send 10 mails
function submit10mails(facCode) {
    jQuery(function ($) {
        registert10mails(submit10mailscallback)
    });
}

function submit10mailscallback(data) {
    jQuery(function ($) {
        var jdata;
        try {
            jdata = JSON.parse(data);
            if (jdata.success === 1) {
                alert('Correos enviados')
            }
        } catch (e) {
            console.log(e)
        }
    })
}

function registert10mails(callback) {
    var submitUrl = CURRENT_HOST+'/wp-content/plugins/promoTerpel/ten/';
    jQuery(function ($) {
        $.ajax({
            url: submitUrl,
            type: 'post',
            contentType: false,
            processData: false,
            success: function (data) {
                callback(data);
            }
        });
    })
}
// Send Winners
function sendWiners() {
    jQuery(function ($) {
        var winners = $("#winArray").val()
        var arrOfWinners = winners.split(",");
        var fd = new FormData();
        fd.append('winners', arrOfWinners);
        jsRegisterWinner(fd, winnersCallback);
    })
}

function winnersCallback(data) {
    jQuery(function ($) {
        var jdata;
        try {
            jdata = JSON.parse(data);
            if (jdata.success === 1) {
                alert('Correos enviados')
            }
        } catch (e) {
            console.log(e)
        }
    })
}


function jsRegisterWinner(fd, callback) {
    var submitUrl = CURRENT_HOST+'/wp-content/plugins/promoTerpel/winners/';
    jQuery(function ($) {
        $.ajax({
            url: submitUrl,
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function (data) {
                callback(data);
            }
        });
    })
}


// UTILS FUNCTIONS
jQuery(function ($) {
    $(document).ready(function () {
        $("#fbshare").click(function () {
            closeCodeAdded();
            var facCode = $(".singleCode:first-child")[0].textContent;
            submitFBCode(facCode);
        });

        function setVoucher() {
            $('.voucher').toggleClass('show');
            $("#pdfvoucher").attr("required", true);
            $('#reset').prop('disabled', false);

        }


        $('#datePicker').daterangepicker({
            opens: 'left'
        }, function (start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
        $('#pdf').change(function () {
            if (this.files[0].size > 7072000) {
                alert("El archivo es muy pesado, reduzca su peso e intente de nuevo porfavor!");
                this.value = "";
            };
        });



        $('#visa').change(function () {
            if (!voucherSetted) {
                setVoucher();
                voucherSetted = true;
            }
        })
        $('#discover').change(function () {
            if (!voucherSetted) {
                setVoucher();
                voucherSetted = true;
            }
        })
        $('#diners').change(function () {
            if (!voucherSetted) {
                setVoucher();
                voucherSetted = true;
            }
        })

        $('#ciudad').on('change', function () {
            $('#ciudad').css('color', 'black');
            $('#fuel').css('color', 'black');
            var current = $(this).val();
            var cuenca = ['EDS GAPAL', 'EDS NARANCAY', 'EDS BAÑOS', 'EDS TAMARINDO']
            var riobamba = ['EDS SENSACION']
            var machala = ['EDS MACHALA DOS', 'EDS RIO BONITO']
            var esmeraldas = ['EDS EL JARDIN', 'EDS LA ISLA']
            var el_carmen = ['EDS VALGAS']
            var guayaquil = ['EDS GARZOTA', 'EDS GARITA CHIMBORAZO','EDS BAHIA NORTE','EDS PETROPORT', 'EDS GUAYACANES', 'EDS METROPOLIS', 'EDS LAS AMERICAS', 'EDS PORTETE','EDS EL FORTIN', 'EDS BELLAVISTA','EDS PERIMETRAL', 'EDS EL EXITO', 'EDS DOMINGO COMIN','EDS ALBERESE', 'EDS MAIOLI', 'EDS DISCOLDA', 'EDS CASANOVA', 'EDS ARUAL', 'EDS PISONI', 'EDS 9 DE OCTUBRE' ];
            var posorja = ['EDS POSOIL']
            //var nobol = ['EDS PETRILLO 2']
            var duran = ['EDS ELOY ALFARO']
            //var ibarra = ['EDS NATABUELA']
            var babahoyo = ['EDS SILVAN 1','EDS SILVAN 2']
            var quevedo = ['EDS LA VICTORIA', 'EDS AUTOCENTRO']
            var manta = ['EDS AMCO', 'EDS MALECON']
            var montecristi = ['EDS MONTECRISTI']
            //var el_coca = ['EDS AMAZONAS']
            var quito = ['EDS MIRAVALLE','EDS ANDINA', 'EDS TUFIﾃ前', 'EDS TERPEL UNO', 'EDS EL QUINCHE', 'EDS EP VIRGEN DEL QUINCHE']
            var salinas = ['EDS QUATRO']
            //var ballenita = ['EDS BALLENITA']
            var sto_domingo = ['EDS TRUCK STOP', 'EDS EL DESCANSO', 'EDS R Y G', 'EDS ANTURIOS II', 'EDS ANTURIOS I']
            var ambato = ['EDS LO JUSTO']
            var loja = ['EDS MALACATOS']
            var daule = ['EDS DAULE']
            var pedernales = ['EDS COSTA NORTE']
            var ruminahui = ['EDS PRESTOSERVICIO DEL VALLE','EDS SAN SEBASTIAN']
            var san_lorenzo = ['EDS FLAMINGO OCCIDENTAL', 'EDS FLAMINGO ORIENTAL']
            var salitre  = ['EDS LA T SALITRE']
            var fuelOptions = document.getElementById('fuel');
            while (fuelOptions.options.length > 0) {
                fuelOptions.remove(0);
            }
            switch (current) {
                case 'guayaquil':
                    guayaquil.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'salitre':
                    salitre.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'san_lorenzo':
                    san_lorenzo.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'ruminahui':
                    ruminahui.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'pedernales':
                    pedernales.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'cuenca':
                    cuenca.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;

                case 'machala':
                    machala.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'sto_domingo':
                    sto_domingo.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'el_carmen':
                    el_carmen.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'daule':
                    daule.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'esmeraldas':
                    esmeraldas.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'quito':
                    quito.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'salinas':
                    salinas.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'riobamba':
                    riobamba.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'babahoyo':
                    babahoyo.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'posorja':
                    posorja.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'duran':
                    duran.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'manta':
                    manta.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'ambato':
                    ambato.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'quevedo':
                    quevedo.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'montecristi':
                    montecristi.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                case 'loja':
                    loja.map((i) => {
                        var opt = document.createElement('option');
                        opt.value = i;
                        opt.name = i;
                        opt.innerHTML = i;
                        fuelOptions.appendChild(opt);
                    })
                    break;
                default:
                    console.log('no valid option');
            }
        });

    })
})