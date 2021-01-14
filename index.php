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

<table>
    <tr>
        <th>Klasė</th>
        <th>Kodas</th>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>Kontrolinių darbų vidurkis</th>
        <th>Sudarymo data</th>
    </tr>
    <?php foreach ($students as $class => $student): ?>
    <?php foreach ($student as $code => $value):?>
            <tr>
                <td><?= $class; ?></td>
                <td><?= $code; ?></td>
                <td><?=$value[0];?></td>
                <td><?=$value[1];?></td>
                <td></td>
                <!--<?php foreach ($value as $grades):?>
                <td><?=array_sum($grades);?></td>
               <?php endforeach;?>-->
                <td><?=$value[2];?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
</table>
