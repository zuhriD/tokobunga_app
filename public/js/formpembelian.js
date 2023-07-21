function get_total(){
    var total = 0;
    var harga = parseInt($("#harga").val()); // Convert to integer using parseInt()
    var jumlah = parseInt($("#quantity").val()); // Convert to integer using parseInt()
    
    // Check the value of harga (optional)
    console.log(harga);
    
    total = harga * jumlah;
    console.log(total);
    harga = parseInt(harga.value);
    jumlah = parseInt(jumlah.value);
    document.getElementById("price").value = total;
}