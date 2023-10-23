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
        h5, p, button, label, a {
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
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="control-button">
                            <button href="#" class="btn btn-primary me-sm-2 prev-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                    <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                </svg> Sebelumnya</button>
                            <button href="#" class="btn btn-primary me-sm-2 next-btn">Selanjutnya <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg></button>
                        </div>
                        <div class="group-button">
                        <a href="/allsoal" class="btn btn-success me-sm-2">Semua Soal <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                            </svg></a>
                        <button href="#" class="btn btn-warning btn-save">Simpan Jawaban <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                                <path d="M11 2H9v3h2V2Z"/>
                                <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0ZM1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5Zm3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4v4.5ZM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5V15Z"/>
                            </svg></button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <form id="question">
                        <div class="card-body">
                            <!-- Content By Ajax -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        let index = urlParams.get('index') ?? 0;
        let listSoalCat = [];
        $.ajax({
            url: '<?= base_url('soalcat'); ?>',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                listSoalCat = data;
                showQuestion(index);
            },
            error: function(xhr, status, error) {
                console.log('Error: ' + error);
            }
        });

        function showQuestion(index) {
            // New URL without reloading the page
            var newURL = window.location.pathname + '?index=' + index;
            window.history.pushState({ path: newURL }, '', newURL);

            $cardBody = $(".card-body");
            $cardBody.empty();
            question = listSoalCat[index];
            $htmlElement = `<div class="d-flex justify-content-between">
                                <h5>Group Soal : ${question.grp_soal}</h5>
                                <p>Soal ${++index} of ${listSoalCat.length}</p>
                            </div>
                            <p class="card-title">
                                ${index}. ${question.soal}
                            </p>
                            <input type="hidden" name="id" value="${question.id_soal}">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban" id="A" value="A">
                                <label class="form-check-label" for="A">
                                    ${question.pil_a}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban" id="B" value="B">
                                <label class="form-check-label" for="B">
                                    ${question.pil_b}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban" id="C" value="C">
                                <label class="form-check-label" for="C">
                                    ${question.pil_c}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban" id="D" value="D">
                                <label class="form-check-label" for="D">
                                    ${question.pil_d}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban" id="E" value="E">
                                <label class="form-check-label" for="E">
                                    ${question.pil_e}
                                </label>
                            </div>`;
            $cardBody.append($htmlElement);
            $cardBody.find(`input[name=jawaban][value="${question.jawaban}"]`).prop('checked', true)
        }

        $(".prev-btn").click(function() {
            if (index > 0) {
                index--;
                showQuestion(index);
            }
        });
        $(".next-btn").click(function () {
            if (index < listSoalCat.length) {
                index++;
                showQuestion(index);
            }
        })

        $(".btn-save").click(function() {
           $answer = $("#question").serialize();
            $.ajax({
                url: '<?= base_url('saveanswer'); ?>',
                method: 'POST',
                data: $answer,
                success: function (response) {
                    if (response.status === 'success') {
                        alert('Data updated successfully.');
                    } else {
                        alert('Data update failed.');
                    }
                }
            });
        });

    </script>
</body>
</html>
