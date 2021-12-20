<!DOCTYPE html>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
pre
{
  font-family: Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
  margin-bottom: 10px;
  overflow: auto;
  width: 1050px;
  padding: 5px;
  background-color: #eee;
  width: 650px!ie7;
  padding-bottom: 20px!ie7;
  max-height: 600px;
}
</style>
</body>
<body>
<head>

<?php
while (@ ob_end_flush());
$clname = $_POST['clname'];
$cmd = 'sudo docker run -e PXDUSER=root --rm --name px-deploy.$$ -v /root/.px-deploy:/px-deploy/.px-deploy -v /root/.aws/credentials:/root/.aws/credentials -v /root/.config/gcloud:/root/.config/gcloud -v /root/.azure:/root/.azure -v /etc/localtime:/etc/localtime px-deploy /root/go/bin/px-deploy status -n "'.$clname.'"';
$proc = popen($cmd, 'r');
echo '<pre>';
while (!feof($proc))
{
    echo fread($proc, 4096);
    @ flush();
}
echo '</pre>';
?>
