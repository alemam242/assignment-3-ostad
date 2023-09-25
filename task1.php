<?php
function modifyString(string $text): string
{
    if ($text != null) {
        $text = strtolower($text);

        $text = str_replace('brown', 'red', $text);

        return $text;
    }
}


$text = "The quick brown fox jumps over the lazy dog.";
$modifiedText = modifyString($text);
echo $modifiedText;
