function updatedata(){
    let nim = document.getElementById("txnim").value;
    let nama = document.getElementById("txnama").value;
    let tgl = document.getElementById("txtglahir").value;
    let jkel = document.getElementById("txjkel").value;
    let jur = document.getElementById("txjur").value;

    let dta = "nim="+nim+"&nama="+nama+"&jurusan="+jur+"&jkel="+jkel+"&tgl="+tgl;
    const gh = new XMLHttpRequest();
    gh.open("POST","http://localhost/desi/Server/mahasiswa/dtmhsupdate.php");
    gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    gh.send(dta);

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        if(dta["sukses"]){
            document.getElementById("pesan").style.display = "block";
        }
        setTimeout(()=>{
            window.location.href="http://localhost/desi/Client/Main.php?p=mhs";
        },1500);
    }

}