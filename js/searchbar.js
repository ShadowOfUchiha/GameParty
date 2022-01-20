
document.getElementById("searchIcon").addEventListener("click", function(){
    var value = document.getElementById("searchValue").value;
    window.location.href = "searchProducts.php?searchValue=" + value;
});