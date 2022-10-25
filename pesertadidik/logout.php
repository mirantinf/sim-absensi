<?php

session_start();
session_destroy();
echo "<script>alert('logout sukses');document.location.href='../'</script>";
?>