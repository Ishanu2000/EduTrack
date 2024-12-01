<!-- footer.php -->
<footer class="footer">
    <div>
        <p>&copy; 2024 EduTrack. All rights reserved.</p>
    </div>
</footer>

<style>
/* Ensure the page fills the entire height of the viewport */
html, body {
    height: 100%; /* Makes the HTML and body elements span the full height */
    margin: 0; /* Removes default margins */
}

/* Wrapper to control layout */
.wrapper {
    display: flex; /* Enable Flexbox */
    flex-direction: column; /* Stack elements vertically */
    min-height: 100vh; /* Ensure wrapper takes the full height of the viewport */
}

/* Main content should take up the remaining space */
main {
    flex: 1; /* Makes the main content expand to fill space between header and footer */
    padding: 20px; /* Adds spacing around the content */
}

/* Footer styles */
.footer {
    background-color: #333; /* Dark footer background */
    color: white; /* White text for contrast */
    text-align: center; /* Center-align footer content */
    padding: 15px 20px; /* Space inside the footer */
    font-family: Arial, sans-serif; /* Clean font */
    font-size: 14px; /* Comfortable text size */
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

</style>