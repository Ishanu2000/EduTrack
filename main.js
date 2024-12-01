document.getElementById('studentForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const studentName = document.getElementById('studentName').value;
    const studentId = document.getElementById('studentId').value;
    const studentEmail = document.getElementById('studentEmail').value;
    const studentAge = document.getElementById('studentAge').value;
    const studentYear = document.getElementById('studentYear').value;
    const studentSemester = document.getElementById('studentSemester').value;
    const semesterGpa = document.getElementById('semesterGpa').value;

    // Create a FormData object
    const formData = new FormData();
    formData.append('studentName', studentName);
    formData.append('studentId', studentId);
    formData.append('studentEmail', studentEmail);
    formData.append('studentAge', studentAge);
    formData.append('studentYear', studentYear);
    formData.append('studentSemester', studentSemester);
    formData.append('semesterGpa', semesterGpa);

    // Send the data to PHP using AJAX
    fetch('submit_student.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // Show success or error message from PHP
        document.getElementById('studentForm').reset(); // Reset the form after submission
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
