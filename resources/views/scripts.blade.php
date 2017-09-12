<script>
    function thank() {
        var mail=document.getElementById('Email').value;
        if(mail==''){
            alert("Please enter your email!");
        }
        else{
            alert("Thank you. Please check your email!");
        }
        mail.value="";
    }
</script>

<script defer src="js/production-home.min.js" type="text/javascript"></script>
<script defer src="js/home.min.js" type="text/javascript"></script>
<script defer src="js/newsletter.js" type="text/javascript"></script>

