document.addEventListener('DOMContentLoaded', function() {
    const contactTimeSelect = document.getElementById('contact_time');
    for (let hour = 9; hour <= 17; hour++) {
        const option = document.createElement('option');
        const startTime = hour.toString().padStart(2, '0') + ':00';
        const endTime = (hour + 1).toString().padStart(2, '0') + ':00';
        option.value = startTime + '-' + endTime;
        option.textContent = startTime + ' - ' + endTime;
        contactTimeSelect.appendChild(option);
    }

    // 電話番号フィールドに数字のみを入力させる
    const phoneInput = document.getElementById('phone');
    phoneInput.addEventListener('input', function() {
        // 全角数字を半角数字に変換
        this.value = this.value.replace(/[０-９]/g, function(s) {
            return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
        });
        // 非数字を削除
        this.value = this.value.replace(/\D/g, '');
    });
});
