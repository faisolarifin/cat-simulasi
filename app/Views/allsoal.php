<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;500&display=swap" rel="stylesheet">
    <title>Simulasi CAT</title>
    <style>
        h3 {
            font-family: 'Red Hat Display', sans-serif;
        }
        h5, p, button, label {
            font-family: 'Red Hat Display', sans-serif;
            font-size: 1.11em;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row d-flex justify-content-center mt-3" style="height:100vh;">
            <div class="col">
                <h3>Simulasi CAT</h3>
                <div class="card">
                    <div class="card-body">
                        <?php foreach($data as $index=>$row) { ?>
                        <div class="group mb-3">
                            <p class="card-title">
                                <?= ++$index. ". ". $row['soal'] ?>
                            </p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban-<?= $row["pk_soal"] ?>" id="Ajawaban-<?= $row["pk_soal"] ?>" value="A" <?= $row['jawaban'] == 'A' ? 'checked' : '' ?>>
                                <label class="form-check-label <?= $row['jawaban'] == 'A' ? ' bg-success text-white' : '' ?>" for="Ajawaban-<?= $row["pk_soal"] ?>">
                                    <?= $row['pil_a'] ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban-<?= $row["pk_soal"] ?>" id="Bjawaban-<?= $row["pk_soal"] ?>" value="B" <?= $row['jawaban'] == 'B' ? 'checked' : '' ?>>
                                <label class="form-check-label <?= $row['jawaban'] == 'B' ? ' bg-success text-white' : '' ?>" for="Bjawaban-<?= $row["pk_soal"] ?>">
                                    <?= $row['pil_b'] ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban-<?= $row["pk_soal"] ?>" id="Cjawaban-<?= $row["pk_soal"] ?>" value="C" <?= $row['jawaban'] == 'C' ? 'checked' : '' ?>>
                                <label class="form-check-label <?= $row['jawaban'] == 'C' ? ' bg-success text-white' : '' ?>" for="Cjawaban-<?= $row["pk_soal"] ?>">
                                    <?= $row['pil_c'] ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban-<?= $row["pk_soal"] ?>" id="Djawaban-<?= $row["pk_soal"] ?>" value="D" <?= $row['jawaban'] == 'D' ? 'checked' : '' ?>>
                                <label class="form-check-label <?= $row['jawaban'] == 'D' ? ' bg-success text-white' : '' ?>" for="Djawaban-<?= $row["pk_soal"] ?>">
                                    <?= $row['pil_d'] ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban-<?= $row["pk_soal"] ?>" id="Ejawaban-<?= $row["pk_soal"] ?>" value="E" <?= $row['jawaban'] == 'E' ? 'checked' : '' ?>>
                                <label class="form-check-label <?= $row['jawaban'] == 'E' ? ' bg-success text-white' : '' ?>" for="Ejawaban-<?= $row["pk_soal"] ?>">
                                    <?= $row['pil_e'] ?>
                                </label>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
