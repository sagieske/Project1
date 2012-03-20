<div id=body>
Page with favorite programs
<br>

<?php foreach ($favoritePrograms as $programItem): ?>
  <strong><?php echo $programItem['programID'] ?> </strong>
  <br>
  : <?php echo $programItem['programName'] ?>
<?php endforeach ?><br><br>
<a href="../../pages">Previous</a>
</div>

