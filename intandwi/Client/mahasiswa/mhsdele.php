<h3>Edit Data Mahasiswa <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil di Hapus
</div>
<form>
    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" class="form-control" id="txnim" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="txnama" disabled>
    </div>
<div id="sembunyi">
    <div class="mb-3">
        <label class="form-label">Tgl Lahir</label>
        <input type="date" class="form-control" id="txtglahir" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select id="txjkel" class="form-select" disabled>
            <option value="L"> Laki-Laki </option>
            <option value="P"> Perempuan </option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Jurusan</label>
        <select id="txjur" class="form-select" disabled>
            <option value="MTI"> MTI </option>
            <option value="SK"> SK </option>
            <option value="KAB"> KAB </option>
        </select>
    </div>    
</div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="deletedata()" class="btn btn-danger">Hapus Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
    document.getElementById("sembunyi").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/desi/Client/main.php?p=mhs")
}
</script>
<script src="http://localhost/desi/Client/mahasiswa/mhscaridata.js"></script>
<script src="http://localhost/desi/client/mahasiswa/mhsdeletedata.js"></script>