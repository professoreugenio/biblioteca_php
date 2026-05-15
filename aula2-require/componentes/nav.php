<?php

$dadosNav= [
    [
        "link"=>"#inicio",
        "rotulo"=>"Início"       
    ],
    [
        "link"=>"#alunos",
        "rotulo"=>"Alunos"       
    ],
    [
        "link"=>"#produtos",
        "rotulo"=>"Produtos"       
    ],
    [
        "link"=>"#servicos",
        "rotulo"=>"Serviços"       
    ]
    ,[
        "link"=>"#publicacoes",
        "rotulo"=>"Publicações"       
    ],

[
        "link"=>"#login",
        "rotulo"=>"Login"       
    ],
]

?>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#inicio">
                <i class="bi bi-grid-1x2-fill text-warning"></i>
                Minha Aplicação
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="navbar-nav ms-auto">
                   <?php
                   foreach ($dadosNav as $key => $value) {
                    $link = $value['link'];
                    $rotulo = $value['rotulo'];
                    echo '<li class="nav-item"><a class="nav-link" href="'.$link.'">'.$rotulo.'</a></li>';
                   }
                   ?> 
                
                    
                </ul>
            </div>
        </div>
    </nav>