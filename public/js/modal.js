document.addEventListener('DOMContentLoaded', function() {
    const reportLink = document.querySelector('a[href="#reportModal"]');
    const reportModal = document.getElementById('reportModal');
    const confirmationModal = document.getElementById('confirmationModal');
    const closeButtons = document.querySelectorAll('.close-button');
    const reportForm = document.getElementById('reportForm');

    // Open report modal
    reportLink.addEventListener('click', function(e) {
        e.preventDefault();
        reportModal.style.display = 'block';
    });

    // Close modal buttons
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            reportModal.style.display = 'none';
            confirmationModal.style.display = 'none';
        });
    });

    // Form submission
    reportForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Create FormData object
        const formData = new FormData(this);

        // Debug: Log FormData contents
        for (let [key, value] of formData.entries()) {
            console.log(`${key}: ${value}`);
        }

        // Send AJAX request
        fetch('/sendreport', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log('Received data:', data);
            if(data.success) {
                alert('Success: '+ data.message);
                reportModal.style.display = 'none';
                confirmationModal.style.display = 'none';
            } else {
                alert('Error submitting report: ' + (data.message || 'Unknown error'));
            }
        })
        .catch(error => {
            console.error('Full error:', error);
            alert('An error occurred: ' + error.message);
        });
    });

    // Close confirmation modal
    document.querySelector('.close-confirmation-btn').addEventListener('click', function() {
        confirmationModal.style.display = 'none';
    });
});