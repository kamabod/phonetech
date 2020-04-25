function sumCalculation() {
    var productQuantity = document.getElementById("productQuantity").value;
    var productPrice = document.getElementById("productPrice").innerText;
    var total = productQuantity * productPrice;
    var vat = total * 0.23;

    document.getElementById("productTotal").innerText = total;
    document.getElementById("productVat").innerText = vat;
    document.getElementById("productSubTotal").innerText = total;
    document.getElementById("productSum").innerText = total;
}