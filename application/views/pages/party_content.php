<div id=body>
<br>
<ul data-role="listview" data-filter="true">
  <?php foreach ($partyItem as $partyItem): ?>
  <li>
  <span id="studyName"><?php echo $partyItem['partyName'] ?> </span><br>
  <span id="studyDescription"><?php echo $partyItem['partyDescription'] ?></span>
  <br>
  <form action="../../set_favorite_party" method="get">
    <input type="hidden" name="partyID" value=<?php echo $partyItem['partyID'] ?> />
    <input type="submit" value="Set as favorite!" />
  </form>
  </li>
  <br>
  <?php endforeach?>
  <a href="show_all_parties"> Previous </a>
 </div>
