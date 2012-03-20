<div id=body>
<h3><strong>Page with search results</strong></h3>

<br>

<ul data-role="listview" data-filter="true">
<?php foreach ($searchedPrograms as $programItem): ?>
  <li>
  <span id="studyName"><?php echo $programItem['programName'] ?> </span><br>
  <span id="studySummary"><?php echo $programItem['programDescription'] ?></span>
  <br>
  <form action="set_favorite_program" method="get">
    <input type="hidden" name="programID" value=<?php echo $programItem['programID'] ?> />
    <input type="submit" value="Set as favorite!" />
  </form>
  </li>
  <br>
<?php endforeach ?>
</ul>
<a href="search_programs">Previous</a>
</div>
