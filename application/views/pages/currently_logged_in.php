<div id=body>
<br>
<?php
  if ($this->session->userdata("logged_in")) {
    echo "Username: ";
    echo $this->session->userdata("username");
  }
  else {
    echo "<br>No one is logged in <br>";
  }
?>
</div>
