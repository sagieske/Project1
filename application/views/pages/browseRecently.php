<div id=body>
<ul data-role="listview" data-filter="true">
<?php foreach ($recentPrograms as $programItem): ?>
  <li>
  <?php $this->load->helper('url');?>  <a href=<?php $temp = site_url("/pages/show_course"); echo $temp."/".$programItem['programID']."/"; ?>>
  <span id="studyName"><?php echo $programItem['programName'] ?></span><br><br>
  <span id="studySummary"><?php echo $programItem['programSummary'] ?></span>
  </a>
  </li>
  <br>
<?php endforeach ?>
</ul>
</div>
<a href="../../pages">Previous</a>
