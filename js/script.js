document.addEventListener('DOMContentLoaded', function() {
    const services = document.querySelectorAll('.service');
    services.forEach(service => {
        service.addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.05)';
        });
        service.addEventListener('mouseout', function() {
            this.style.transform = 'scale(1)';
        });
    });
});