// Get references to buttons and the message div
const teacherBtn = document.getElementById('teacherBtn');
const studentBtn = document.getElementById('studentBtn');
const messageDiv = document.getElementById('message');

// Add event listeners to buttons
teacherBtn.addEventListener('click', () => {
    messageDiv.textContent = "You have selected Teacher.";
    messageDiv.style.color = "#4CAF50"; // Green color
});

studentBtn.addEventListener('click', () => {
    messageDiv.textContent = "You have selected Student.";
    messageDiv.style.color = "#2196F3"; // Blue color
});
