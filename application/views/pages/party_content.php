<div id=body>
<br>
<ul data-role="listview" data-filter="true">
  <?php foreach ($partyItem as $partyItem): ?>
  <li>
  <span id="studyName"><?php echo $partyItem['partyName'] ?> </span><br><br>
  <span id="studyDescription">Date: <?php echo $partyItem['partyDate'] ?></span><br>
  <span id="studyDescription">Location: <?php echo $partyItem['partyLocation'] ?></span><br>
  <span id="studyDescription">Genre: <?php echo $partyItem['partyGenre'] ?></span><br>
  <span id="studyDescription">Description: <?php echo $partyItem['partyDescription'] ?></span><br>
  <br>
  <form action="../../set_favorite" method="get">
    <input type="hidden" name="partyID" value=<?php echo $partyItem['partyID'] ?> />
    <input type="submit" value="Set as favorite!" />
  </form>
  </li>
  <li>
    <?php
    $rater_id=1;
    $rater_item_name='Item 1';
    include("rater.php");
    ?>
  </li>
  <li>
    Will you be attending this party? <br>
    <form action="../../going" method="post">
      <input type="hidden" name="partyID" value=<?php echo $partyItem['partyID'] ?> />
      <input type="submit" value="Going">
    </form>
  <br>
  <?php endforeach?>
  <a href="show_all_parties"> Previous </a>
 </div>
