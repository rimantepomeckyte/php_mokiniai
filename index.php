<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php

$students = [
    "5a" => [
        rand(1, 30) => [
            "agne",
            "kazlauskaite",
            "kontroliniai darbai" => [
                "matematika" => 5,
                "it" => 9,
                "anglu kalba" => 10
            ],
            date("Y-m-d")
        ],
        rand(1, 30) => [
            "petras",
            "petraitis",
            "kontroliniai darbai" => [
                "matematika" => 7,
                "it" => 8,
                "anglu kalba" => 9
            ],
            date("Y-m-d")
        ],
        rand(1, 30) => [
            "jonas",
            "jonaitis",
            "kontroliniai darbai" => [
                "matematika" => 8,
                "it" => 5,
                "anglu kalba" => 6
            ],
            date("Y-m-d")
        ],
        rand(1, 30) => [
            "birute",
            "dobkeviciute",
            "kontroliniai darbai" => [
                "matematika" => 9,
                "it" => 9,
                "anglu kalba" => 9
            ],
            date("Y-m-d")
        ],
        rand(1, 30) => [
            "algirdas",
            "jonusas",
            "kontroliniai darbai" => [
                "matematika" => 10,
                "it" => 9,
                "anglu kalba" => 6
            ],
            date("Y-m-d")
        ]
    ],
    "5b" => [
        rand(1, 30) => [

            "augustinas",
            "dabkus",
            "kontroliniai darbai" => [
                "matematika" => 6,
                "it" => 8,
                "anglu kalba" => 7
            ],
            date("Y-m-d")
        ],
        rand(1, 30) => [
            "lukas",
            "macijauskas",
            "kontroliniai darbai" => [
                "matematika" => 6,
                "it" => 7,
                "anglu kalba" => 10
            ],
            date("Y-m-d")
        ],
        rand(1, 30) => [
            "kajus",
            "mazvydas",
            "kontroliniai darbai" => [
                "matematika" => 10,
                "it" => 9,
                "anglu kalba" => 5
            ],
            date("Y-m-d")
        ],
        rand(1, 30) => [
            "antanas",
            "antanaitis",
            "kontroliniai darbai" => [
                "matematika" => 8,
                "it" => 7,
                "anglu kalba" => 8
            ],
            date("Y-m-d")
        ],
        rand(1, 30) => [
            "jonas",
            "ambrazevicius",
            "kontroliniai darbai" => [
                "matematika" => 6,
                "it" => 7,
                "anglu kalba" => 10
            ],
            date("Y-m-d")
        ]
    ]
];
?>
<div class="d-flex justify-content-center py-5 container">
    <table class="text-center table table-sm table-striped table-dark w-75">
        <tr>
            <th>Klasė</th>
            <th>Kodas</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Kontrolinių darbų vidurkis</th>
            <th>Sudarymo data</th>
        </tr>
        <?php foreach ($students as $class => $student): ?>
            <?php foreach ($student as $code => $value): ?>

                <tr>
                    <td><?= $class; ?></td>
                    <td><?= $code; ?></td>
                    <?php foreach ($value as $properties => $prop): ?>
                        <?php if (is_array($prop)): ?>
                            <td><?= number_format((float)array_sum($prop) / count($prop), 1, '.', ''); ?></td>
                        <?php else: ?>
                            <td><?= ucfirst($prop); ?></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>

