<?php
$smiley_url = getenv('PYTHON_BACKEND_URL');
$smiley = file_get_contents($smiley_url);

$html = "<!DOCTYPE html>\n";
$html .= "<html>\n";
$html .= "<head>\n";
$html .= "<title>Smiley Face</title>\n";
$html .= "</head>\n";
$html .= "<body>\n";
$html .= "<h1>Random Smiley Face</h1>\n";
$html .= "<p>{$smiley}</p>\n";
$html .= "</body>\n";
$html .= "</html>\n";

echo $html;
?>
