function submitImePay(event) {
    event.preventDefault();
    $("#imepayform").submit();
}

function submitConnectIps(event) {
    event.preventDefault();
    $("#connectipsForm").submit();
}

function submitManualPayment(event) {
    event.preventDefault();
    $("#manualPaymentForm").submit();
}

function setRegion(regionId) {
    $(".regionIds").val(regionId);
    return false;
}