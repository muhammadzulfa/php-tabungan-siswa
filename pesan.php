<?php
if(isset($_GET['sukses']) && $_GET['sukses'] == 'tambah-data'){
echo "<div class='alert alert-success'>
        <button class='close' data-dismiss='alert'>×</button>
        Data berhasil ditambahkan
    </div>
    ";
}
if(isset($_GET['sukses']) && $_GET['sukses'] == 'edit-data'){
echo "<div class='alert alert-success'>
        <button class='close' data-dismiss='alert'>×</button>
        Data berhasil diedit
    </div>
    ";
}
if(isset($_GET['sukses']) && $_GET['sukses'] == 'hapus-data'){
echo "<div class='alert alert-success'>
        <button class='close' data-dismiss='alert'>×</button>
        Data berhasil dihapus
    </div>
    ";
}
?>