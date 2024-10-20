document.addEventListener("DOMContentLoaded", function() {

    const loading = document.getElementById("loading");
    setTimeout(() => {
        loading.classList.add("hidden");
    }, 1000);

    const codRadio = document.getElementById("cod");
    const bankRadio = document.getElementById("bank");
    const discountInput = document.querySelector('input[placeholder="Nhập mã giảm giá"]');
    const applyButton = document.querySelector('button.bg-gray-200');

    codRadio.checked = true;

    codRadio.addEventListener("change", function() {
        if (this.checked) {
            bankRadio.checked = false;
        }
    });

    bankRadio.addEventListener("change", function() {
        if (this.checked) {
            codRadio.checked = false;
        }
    });

    discountInput.addEventListener("input", function() {
        if (this.value.trim() === "") {
            applyButton.classList.remove("bg-custom-background", "text-white");
            applyButton.classList.add("bg-gray-200");
            applyButton.disabled = true; 
        } else {
            applyButton.classList.add("bg-custom-background", "text-white");
            applyButton.classList.remove("bg-gray-200");
            applyButton.disabled = false;
        }
    });
});
