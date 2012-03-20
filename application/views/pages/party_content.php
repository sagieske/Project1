<div id=body>
<br>
<ul data-role="listview" data-filter="true">
  <?php foreach ($programItem as $programItem): ?>
  <li>
  <span id="studyName"><?php echo $programItem['programName'] ?> </span><br>
  <span id="studyDescription"><?php echo $programItem['programDescription'] ?></span>
  <br>
  <form action="../../set_favorite_program" method="get">
    <input type="hidden" name="programID" value=<?php echo $programItem['programID'] ?> />
    <input type="submit" value="Set as favorite!" />
  </form>
  </li>
  <br>
  <?php endforeach?>
  <a href="show_all_programs"> Previous </a>
 </div>
