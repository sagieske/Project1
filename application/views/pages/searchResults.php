<div id=body>
<h3><strong>Page with search results</strong></h3>

<br>

<ul data-role="listview" data-filter="true">
<?php foreach ($searchedParties as $partyItem): ?>
  <li>
  <span id="partyName"><?php echo $partyItem['partyName'] ?> </span><br>
  <span id="partyLocation"><?php echo $partyItem['partyLocation'] ?> </span><br>
  <span id="partySummary"><?php echo $partyItem['partyDate'] ?></span>
  <br>
  <form action="set_favorite" method="get">
    <input type="hidden" name="partyID" value=<?php echo $partyItem['partyID'] ?> />
    <input type="submit" value="Set as favorite!" />
  </form>
  </li>
  <br>
<?php endforeach ?>
</ul>
<a href="search_programs">Previous</a>
</div>
