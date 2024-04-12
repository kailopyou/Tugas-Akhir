document.addEventListener('DOMContentLoaded', function () {
    var addAddressBtn = document.getElementById('addAddressBtn');
    var checkoutForm = document.getElementById('checkoutForm');

    if (addAddressBtn && checkoutForm) {
        addAddressBtn.addEventListener('click', function () {
            // Toggle the display of the checkout form
            checkoutForm.style.display = (checkoutForm.style.display === 'none') ? 'block' : 'none';
        });
    }
});
