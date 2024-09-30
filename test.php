<?php

for ($i = 0; $i < 10; $i++)
    echo bin2hex(random_bytes(32)) . "\n";
