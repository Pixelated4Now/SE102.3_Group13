 <script language="javascript" type="text/javascript">
        function validateForm() {
            var name = document.getElementById('fname').value.trim();
            var email = document.getElementById('email').value.trim();
            var adultCount = parseInt(document.getElementById('adult').value, 10);
            var kidCount = parseInt(document.getElementById('kids').value, 10);
            var nic = document.getElementById('lname').value.trim();
            var mobile = document.getElementById('Mobile').value.trim();
        
            if (name.length < 3 || name.length > 20) {
                alert('⚠️ Name should have between 3 and 20 characters.');
                return false;
             }
    
            if (email.length < 3 || email.length > 20) {
                alert('⚠️ Email should have between 3 and 20 characters.');
                return false;
            }
    
     
            if (!/^\d{12}$/.test(nic)) {
                alert('⚠️ NIC should have exactly 12 digits and only contain numbers.');
                return false;
            }
    
            if (!/^\d{10}$/.test(mobile)) {
                alert('⚠️ Mobile should have exactly 10 digits and only contain numbers.');
                return false;
            }
        
        
            if (adultCount < 0 || kidCount < 0) {
                alert('⚠️ Number of travelers cannot be negative.');
                return false;
            }
        
        
            return true;
            }
    </script>
