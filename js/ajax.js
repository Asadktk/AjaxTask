$(document).ready(function() {
    $('#employeeForm').on('submit', function(event) {
        event.preventDefault();

        // Reset previous error messages
        $('.text-red-600').addClass('hidden');

        // Fields to validate
        const fields = ['name', 'email', 'department'];
        let hasError = false;

        // Check for empty fields
        fields.forEach(field => {
            if (!$(`#${field}`).val().trim()) {
                $(`#${field}Error`).removeClass('hidden');
                hasError = true;
            }
        });

        if (!hasError) {
            $.ajax({
                url: 'insert.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    const messageColor = response.status === 'success' ? 'green' : 'red';
                    $('#responseMessage').html(`<p style="color: ${messageColor};">${response.message}</p>`);

                    if (response.status === 'success') {
                        $('#employeeForm')[0].reset();
                    }
                },
                error: function() {
                    $('#responseMessage').html('<p style="color: red;">An error occurred while processing your request.</p>');
                }
            });
        }
    });
});