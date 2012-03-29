<div id=body>
Page with favorite programs
<br>

<?php foreach ($favoriteParties as $partyItem): ?>
  <strong><?php echo $partyItem['partyID'] ?> </strong>
  <br>
  : <?php echo $partyItem['partyName'] ?>
<?php endforeach ?><br><br>
<a href="/">Previous</a>
</div>

