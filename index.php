<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="content-wrapper content-web ">
            <section class="content">
                <div class="content-header">
                </div>
                <div class="container-fluid">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    O que é PHP ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php
                    echo "
                    <p>
                        <strong>O PHP (Hypertext Preprocessor) é uma linguagem de programação de código aberto</strong>, amplamente utilizada para desenvolvimento web. 
                        Foi projetada especificamente para criação de páginas dinâmicas e interativas, 
                        permitindo a geração de conteúdo personalizado com base em informações fornecidas pelo usuário, dados do banco de dados e outras fontes.
                    <p>
                    ";   
                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Quando usar ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php 
                    echo "
                    <p>
                    <strong>O PHP é ideal para criar sites que exigem conteúdo dinâmico</strong>, como blogs, portais de notícias, fóruns e redes sociais. 
                    Ele permite a interação do usuário, exibição de dados personalizados e a atualização de conteúdo em tempo real.
                    <p>
                    ";
                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Como usar ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php
                    echo "
                    <p>
                    <strong>O PHP pode ser usado para criar APIs (Interfaces de Programação de Aplicativos)</strong> que permitem que diferentes aplicativos e serviços se comuniquem entre si. 
                    Se você precisa fornecer acesso a dados ou funcionalidades do seu aplicativo para outros sistemas, uma API PHP pode ser uma solução eficiente.
                    <strong>O PHP tem suporte nativo para uma variedade de bancos de dados populares</strong>, como MySQL, PostgreSQL, Oracle e muitos outros.
                    <p><br>
                    ";
                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

</html>
<?php 








?>