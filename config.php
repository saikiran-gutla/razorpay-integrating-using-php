<?php
include('index.php');
include('charge.php');
$mon = $_POST["money"];

?>
<script>
var options = {
    "key": "<?php echo $razor_api_key?>",
    "amount": "<?php echo $mon*100?>" , 
    "name": "GKS EDU TECH",
    "description": "Fill Correct Details",
    "image": "icon.png",
    "handler": function (response){
        alert(response.razorpay_payment_id);
    },
    "prefill": {
        "name": "<?php echo $razor_name?>",
        "email": "<?php echo $razor_email?>"
    },
    "notes": {
        "address": "Hello World"
    },
    "theme": {
        "color": "green"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){   
    e.preventDefault();    
    rzp1.open();  
}
</script>