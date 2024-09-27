document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.getElementById('phone');
    phoneInput.addEventListener('input', function(event) {
        this.value = this.value.replace(/[^\d-]/g, '');
    });

    const contactTimeSelect = document.getElementById('contact_time');
    for (let hour = 9; hour <= 17; hour++) {
        const option = document.createElement('option');
        const startTime = hour.toString().padStart(2, '0') + ':00';
        const endTime = (hour + 1).toString().padStart(2, '0') + ':00';
        option.value = startTime + '-' + endTime;
        option.textContent = startTime + ' - ' + endTime;
        contactTimeSelect.appendChild(option);
    }
});
