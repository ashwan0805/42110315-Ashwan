document.getElementById('contactForm').addEventListener('submit', function(event) {
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var subject = document.getElementById('subject').value.trim();
    var message = document.getElementById('message').value.trim();

    if (name === "" || email === "" || subject === "" || message === "") {
        alert("All fields are required!");
        event.preventDefault();
    }
    
});
