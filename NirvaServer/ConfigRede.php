<?php
    $serie = filter_input(INPUT_POST,'serie',FILTER_DEFAULT);
    $ip = filter_input(INPUT_POST, 'ip', FILTER_DEFAULT);
    $ssid = filter_input(INPUT_POST, 'ssid', FILTER_DEFAULT);
    $senha = filter_input(INPUR_POST, 'senha', FILTER_DEFAULT);

    echo('"status: true"');
