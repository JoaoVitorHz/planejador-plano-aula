<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planejador de Plano de Aula</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="library/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
    <body>
        <div class="div-logo-container">
            <div class="div-logo-content">
                LOGO
            </div>
            <span>Gerador de Plano de Aula</span>
            <span>Educação Infantil</span>
        </div>

        <div class="div-add-class-plan">
            <div class="div-add-class-plan-text">
                <span>Planos</span>
                <span>Relação de Planos cadastrados.</span>
            </div>

            <div class="div-add-class-plan-button">
                <button id="btnAddClassPlan">Adicionar<i class="fa-solid fa-plus"></i></button>
                <button>Modelos de planos <i class="fa-solid fa-file-lines"></i></button>
            </div>
        </div>

        <div class="div-list-class-plan">
            <div class="div-search-plan">
                <span>Busca:</span>
                <input type="text">
            </div>

            <div class="div-list-class-plan-table">
                <table>
                    <tr class="tr-header">
                        <th>Ações</th>
                        <th>Data</th>
                        <th>Tema de Aula</th>
                        <th>Campos de Experiência</th>
                        <th>Id</th>
                    </tr>

                    @for($i = 0; $i <= 6; $i++)
                        <tr style="{{ ($i % 2) == 0 ? 'background-color: #eee;' : 'background-color: #FFF;' }}">
                            <td class="td-crud">
                                <div>
                                    <i class="fa-solid fa-gear"></i>
                                    <i class="fa-solid fa-sort-down"></i>
                                </div>
                            </td>
                            <td>01/02/2023</td>
                            <td>Acolhimento bricante</td>
                            <td class="td-experience-field">
                                <i class="fa-solid fa-circle"></i> O EU, O OUTROS NÓS
                            </td>
                            <td>46124</td>
                        </tr>
                    @endfor
                </table>
            </div>
        </div>


        <div class="div-modal-container hidden">
            <div class="div-modal-class-plan-for">
                    <span>O seu plano de aula é para:</span>
                    <select name="" id="">
                        <option value="">Educação Infantil</option>
                    </select>

                    <div class="div-modal-class-plan-for-buttons">
                        <button id="buttonCancelAddClassPlan">Cancelar</button>
                        <button>Avançar</button>
                    </div>
            </div>
        </div>

        <script src="js/script.js"></script>
    </body>
</html>