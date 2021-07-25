<?php
session_start();
unset($_SESSION['loginchk']);
unset($_SESSION['user_id']);
unset($_SESSION['refer']);

?><script type="text/javascript">

window.location.replace('login.php');
</script>