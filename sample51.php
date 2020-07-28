<?php
$project = array('田中', '滝川', '木下', '堀江', '中西', '角田');
$member = array('吉井', '田中', '玉井', '堀江');
echo "<pre>";
print_r(array_diff($project, $member));
echo "</pre>";
?>
