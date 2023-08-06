<?php
$boyNames = [
    'Zaw',
    'Kyaw',
    'Lin',
    'Htet',
    'Thu',
    'Win',
    'Hein',
    'Khant',
    'Kaung',
    'Myat',
    'Swam',
    'Nyan',
    'Htut',
    'Hlwan',
    'Paing',
    'Thant',
    'Thiha',
    'Ko',
    'Nyein',
    'Myat',
    'Thura',
    'Min',
    'Phyo',
    'Naung',
    'Sai',
    'Wunna',
    'Hlaing',
    'Naing',
    'Zay Yar',
    'Bhone'
    ];
$girlNames = [
    'Aye',
    'Yamin',
    'April',
    'Thandar',
    'Hnin',
    'Pwint',
    'Phyu',
    'Lae',
    'Thin',
    'Wutyi',
    'Su',
    'Khin',
    'May',
    'Thiri',
    'Su',
    'Khaing',
    'Hla',
    'Tha Zin',
    'Shwe',
    'Zin',
    'Myint',
    'Zun',
    'Pwint',
    'Thaw',
    'Htet',
    'Shoon',
    'Thu',
    'Win',
    'Hlaing',
    ];

$showGirl = function () use ($girlNames) {
    $girl = $girlNames[array_rand($girlNames)]." ".$girlNames[array_rand($girlNames)]." ".$girlNames[array_rand($girlNames)];
    return $girl;};

$showBoy = function () use ($boyNames) {
    $boy = $boyNames[array_rand($boyNames)]." ".$boyNames[array_rand($boyNames)]." ".$boyNames[array_rand($boyNames)];
    return $boy;};
    

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Burmes Names Generator</title>

        <!-- Bootstrap CSS link -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

        <!--- google fonts -->

        <link rel="preconnect" href="https://fonts.googleapis.com" />

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&family=Ubuntu&display=swap" rel="stylesheet" />

        <style>
            .Roboto {
                font-family: "Roboto Condensed", sans-serif;
            }

            .Ubuntu {
                font-family: "Ubuntu", sans-serif;
            }
        </style>
    </head>

    <body style="background-clor: #28282b;">
        <div class="container mt-1 mb-5">
            <div class="container text-center h4 text-primary Roboto">
                Burmese Names Generator
            </div>
            <hr />

            <div class="container mt-4 text-center h3" id="textToCopy">
                <p class="Ubuntu">
                    <?php 

                if ($_POST['gender']==='0') {

                    echo $showGirl();

                } else {

                    echo $showBoy();

                };

                ?></p>
            </div>

            <div class="mt-5">
                <form method="post" action="index.php" class="row">
                    <div class="col-12">
                        <select class="custom-select Ubuntu" name="gender">
                            <option value="1">Boy Names</option>

                            <option value="0">Girl Names</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <hr />

                        <button type="submit" class="btn btn-primary btn-lg w-100 Roboto mt-5 shadow shadow-md">
                            Generate
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            const textToCopy = document.getElementById("textToCopy");

            textToCopy.addEventListener("click", copyToClipboard);

            function copyToClipboard() {
                const text = textToCopy.textContent;

                const textArea = document.createElement("textarea");

                textArea.value = text;

                document.body.appendChild(textArea);

                textArea.select();

                document.execCommand("copy");

                document.body.removeChild(textArea);

                alert("Copied to clipboard!");
            }
        </script>
    </body>
</html>

