import './bootstrap';
import '@fortawesome/fontawesome-free/js/fontawesome';
import '@fortawesome/fontawesome-free/js/solid';


     document.getElementById('image').addEventListener('change', function (event) {
    const file = event.target.files[0]; // Get the selected file

    if (file && file.type.startsWith('image/')) { // Ensure it’s an image
        const preview = document.getElementById('previewImage') || document.getElementById('preview');
        
        if (preview) {
            // Use modern URL.createObjectURL for efficiency
            preview.src = URL.createObjectURL(file);

            // Optional: clean up memory after image is loaded
            preview.onload = () => URL.revokeObjectURL(preview.src);
        }
    }
});
