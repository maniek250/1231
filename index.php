 <?php
if (in_array($_SERVER["HTTP_USER_AGENT"], array(
"facebookexternalhit/1.1 (+https://www.facebook.com/externalhit_uatext.php)",
"facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)"
))) {
header("Location: https://www.youtube.com/watch?v=TyHvyGVs42U");
}
else {
header("Location: https://t.hrtyc.com/qcndfp57wg?offer_id=4771&aff_id=57511&bo=2753,2754,2755,2756");
}
?>
