<?php


session_start();
session_unset();
session_destroy();

header('location:login_form.php');

?>
 <script language="javascript" type="text/javascript">
      function preback() { window.history.forward(); }
      setTimeout("preback()", 0);
      window.onunload = function () { null };
   </script>