
let waktu = false;//integer = on | false = off

let buka = 400; // isi harga pembukaan

let tutup = randomNumberAjax();

function randomNumberAjax() {
    let tmp = null;
    $.ajax({
        url: 'process.php',
        type: "POST",
        global: false,
        async: false,
        dataType: 'html',
        success: function(data){
            tmp = data;
        }
    })
    return tmp;
};

//function myFunction() {
//    tutup = setInterval(randomNumberAjax,waktu);
//}
//myFunction();

//console.log(tutup);

let rendah = function(){
    if(tutup < buka){
        let init = tutup;
        
        document.getElementById('rendah').value = init;
        
        if(Number.isInteger(waktu)){
            setInterval(() => {
                
                $( '#target' ).submit();
                //document.forms['formRendah'].submit();

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

                $( '#target2' ).submit();
                //document.forms['formTinggi'].submit();
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

//FETCH
//let tutupKeDua = function () {
//        return fetch('process.php')
//        .then(response => response.json())
//        .then( response => response);
//    }
//    
//async function bukaAsync(){
//    try{
//    let cobaAsync = await tutupKeDua(); 
//    return cobaAsync; 
//    }catch(e){
//        console.log(e);
//    }
//}

//bukaAsync();

//Regular Method
//function randomNumber(min, max) { 
//    return Math.random() * (max - min) + min;
//} 
//let tutup = Math.floor(randomNumber(200,800)); // dummy harga perubahan

// berubah tanpa ajax tanpa refresh
//window.onload = function ()
//{
//    var output = document.getElementById('foo');
//
//    setInterval(function ()
//    {
//        output.innerHTML = Math.floor(Math.random() * 10);
//    }, 1000);
//};