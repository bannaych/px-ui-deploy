<?php
while (@ ob_end_flush());
$name = $_POST['name'];
$temp = $_POST['temp'];
$count1 = $_POST['count'];
$cmd = 'sudo docker run -e PXDUSER=root --rm --name px-deploy.$$ -v /root/.px-deploy:/px-deploy/.px-deploy -v /root/.aws/credentials:/root/.aws/credentials -v /root/.config/gcloud:/root/.config/gcloud -v /root/.azure:/root/.azure -v /etc/localtime:/etc/localtime px-deploy /root/go/bin/px-deploy create -n "'. $name .'" -t "'. $temp .'" -c "'. $count1 .'" ';
$proc = popen($cmd, 'r');
echo '<pre>';
while (!feof($proc))
{
    echo fread($proc, 4096);
    @ flush();
}
echo '</pre>';
?>
