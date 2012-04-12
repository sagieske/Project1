<div id=body>
Page with your favorite parties
<br><br>

<?php foreach ($favoriteParties as $partyItem): ?>
  <li>
    <span id="partyName"><?php echo $partyItem['partyName'] ?> </span><br>
    <span id="partyLocation"><?php echo $partyItem['partyLocation'] ?> </span><br>
    <span id="partySummary"><?php echo $partyItem['partyDate'] ?></span>
    <br><br>
    Will you be attending this party? <br>
    <form action="going" method="post">
      <input type="hidden" name="partyID" value=<?php echo $partyItem['partyID'] ?> />
      <input type="submit" value="Going">
    <br>
    </form>
  </li>
  <br>
<?php endforeach ?><br><br>
<a href="/">Previous</a>
</div>

