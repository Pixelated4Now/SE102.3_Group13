<script>
    	function validateForm() {
    		var fname = document.getElementsByName('fname')[0].value;
    		var lname = document.getElementsByName('lname')[0].value;
    		var email = document.getElementsByName('email')[0].value;
    		var tel = document.getElementsByName('tel')[0].value;
    		var subject = document.getElementsByName('subject')[0].value;
    
    		if (fname.length < 3 || fname.length > 20) {
    			alert('⚠️ First name should have between 3 and 20 characters.');
    			return false;
    		}
    
    		if (lname.length < 3 || lname.length > 20) {
    			alert('⚠️ Last name should have between 3 and 20 characters.');
    			return false;
    		}
    
    		if (email.length < 3 || email.length > 20) {
    			alert('⚠️ Email should have between 3 and 20 characters.');
    			return false;
    		}
    
    		var telRegex = /^\d{10}$/;
    		if (!telRegex.test(tel)) {
    			alert('⚠️ Mobile number should have exactly 10 digits and only contain numbers.');
    			return false;
    		}
    
    		if (subject.trim().length === 0) {
    			alert('⚠️ Please write something in the textarea.');
    			return false;
    		}
    
    		return true;
    	}
    </script>
