<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/vendors.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script>
    function sendMessageToWhatsApp() {
        // Collect form data
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var message = document.getElementById('message').value;

        // Customize the WhatsApp number you want the message sent to
        var whatsappNumber = '8122475511';  // Replace with your WhatsApp number (include country code)
        
        // Construct the message text
        var textMessage = `Name: ${name}%0AEmail: ${email}%0APhone: ${phone}%0AMessage: ${message}`;

        // Construct the WhatsApp URL
        var whatsappUrl = `https://wa.me/${whatsappNumber}?text=${textMessage}`;

        // Redirect to WhatsApp
        window.open(whatsappUrl, '_blank');
    }
</script>
<script>
           

            function scrollToEducation() {
                document.getElementById("education").scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }
            function scrollToSkill() {
                document.getElementById("skills").scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }
            function scrollToContact() {
                document.getElementById("contact").scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }
            function scrollToProject() {
                document.getElementById("project").scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }
            

            
    </script>
    