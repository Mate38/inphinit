<div class="code-inphinit">
<div class="code-inphinit-header"><?php echo $file; ?> on line <?php echo $line; ?></div>
<div class="error">
<?php echo nl2br(Inphinit\Experimental\Debug::searcherror($message)); ?>
</div>
<?php
$data = $source['preview'];
$breakpoint = $source['breakpoint'];
$lines = count($data);
?>
<pre style="counter-reset: line <?php echo $line - $breakpoint - 1; ?>"><?php
    for ($i = 0; $i < $lines; $i++) {
        $data[$i] = trim($data[$i], "\r\n");

        if ($breakpoint === $i) {
            echo '<span class="hl-line">', htmlspecialchars($data[$i], ENT_QUOTES), '</span>', EOL;
        } else {
            echo '<span>', htmlspecialchars($data[$i], ENT_QUOTES), '</span>', EOL;
        }
    }
?></pre>
</div>
