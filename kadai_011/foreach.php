<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kadai_011</title>
</head>
<body>
    <p>
        <?php
        $yasai_profile = [
            '名前' => '玉ねぎ',
            '値段' => 200,
            '産地' => '北海道'
        ];
        foreach ($yasai_profile as $key => $value) {
            echo "{$key}: {$value}";
            echo '<br>';
        }

        ?>
    </p>
</body>
</html>