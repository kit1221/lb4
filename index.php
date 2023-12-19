<?php
$file_path = 'views.txt';

function readViews($file_path) {
    $file = fopen($file_path, 'r');
    $views = intval(fread($file, filesize($file_path)));
    fclose($file);
    return $views;
}

function writeViews($file_path, $views) {
    $file = fopen($file_path, 'w');
    fwrite($file, $views);
    fclose($file);
}

$views = readViews($file_path);

$views++;

echo "Кількість показів сторінки: $views";

writeViews($file_path, $views);
?>

<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="script.js"></script>
        <title>lb3</title>
        <style>
            body {
                position: relative;
            }

            #pic-container {
                position: relative;
                text-align: center;
                margin-top: 20px;
            }

            #pic {
                width: auto;
                height: 350px;
                display: block;
                margin: 0 auto;
                border: none;
                border-radius: 5px;
            }

            #options-container {
                margin-top: 20px;
            }

            h3 {
                margin-bottom: 10px;
            }

            select {
                padding: 5px;
                margin-bottom: 10px;
                width: 20%;
                box-sizing: border-box;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input {
                padding: 5px;
                width: 80%;
                box-sizing: border-box;
                margin-bottom: 10px;
            }

            button {
                padding: 10px;
                background-color: #105212;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            button:hover {
                background-color: #0b8011;
            }
        </style>
    </head>

    <body>
        <div id="pic-container">
            <img src="./images/1.jpg" alt="pic" id="pic" />
            <div>
                <h3>Вибрати зображення зі списку</h3>
                <select id="image-select" onchange="changePic()">
                    <optgroup label="Вибір зображення">
                        <option value="1">Перше</option>
                        <option value="2">Друге</option>
                        <option value="3">Третє</option>
                        <option value="4">Четверте</option>
                        <option value="5">П'яте</option>
                        <option value="6">Шосте</option>
                        <option value="7">Сьоме</option>
                        <option value="8">Восьме</option>
                        <option value="9">Дев'яте</option>
                    </optgroup>
                </select>
            </div>
        </div>
        <div id="options-container">
            <h3>Змінити параметри зображення</h3>
            <p>
                <label for="width">Ширина зображення</label>
                <input id="width" type="number" value="600" /> px
            </p>
            <p>
                <label for="height">Висота зображення</label>
                <input id="height" type="number" value="350" /> px
            </p>
            <p>
                <label for="frame">Розмір рамки</label>
                <input id="frame" type="number" value="10" /> px
            </p>
            <p>
                <label for="alt">Альтернативний текст</label>
                <input id="alt" value="alternative text" />
            </p>
            <button onclick="changeParam()">Змінити</button>
        </div>
    </body>
</html>
