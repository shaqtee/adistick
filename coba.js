
function randomNumber(min, max) { 
    return Math.random() * (max - min) + min;
} 

let buka = 400;
let tutup = Math.floor(randomNumber(50,1000));

let waktu = false;

let rendah = function(){
    if(tutup < buka){
        let init = tutup;
        
        document.getElementById('rendah').value = init;

        if(Number.isInteger(waktu)){
            setInterval(() => {

                document.forms['formRendah'].submit();

            },waktu)
        }else{
            return "sip"
        }
        
    }
    return terendah;
}

let tinggi = function(){
    if(tutup > buka){
        let init = tutup;
        
        document.getElementById('tinggi').value = init;
        if(Number.isInteger(waktu)){
            setInterval(() => {

                document.forms['formTinggi'].submit();
            },waktu)
        }else{
            return "sip"
        }
    }
    return tertinggi;
}

//setInterval(() => {
//    function randomNumber(min, max) { 
//        return Math.random() * (max - min) + min;
//    } 
//
//    let buka = 400;
//    let tutup = Math.floor(randomNumber(200, 600));
//
//    $.ajax({ 
//        url: 'ajax.php',
//        data: {
//            tinggi : tutup > buka ? tutup : "",
//            rendah : tutup < buka ? tutup : "",
//            buka: buka,
//            terendah : 'rendah',
//            tertinggi : 'tinggi'
//        },
//        type: 'post',
//        //dataType:'json',
//        success: function(output) {
//            console.log(window.rendah)
//        }
//    });
//},3000);
//
//console.log(rendah);
