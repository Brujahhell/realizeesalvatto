<!doctype html>
<html lang="en">
<head>
    <title>REALIZE E SALVATTO</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="screen" id="color">
    <link rel="stylesheet" type="text/css" href="/assets/css/style2.css" media="screen" id="color">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="margin: 0px">
    <header class="cabecalho linha" style="top: 0px">
        @auth
            <a class="coluna-20">
                <span class="subtitulo3">{{ Str::upper(\Illuminate\Support\Facades\Auth::user()->name) }}</span>
            </a>
            <span>
                    <H3 style="color: azure; margin-top: 10px  ">

                    </H3>
                </span>
        @else
            <a class="coluna-35" href="/cadastrar#paracadastro">
                <span class="subtitulo3">Cadastrar</span>
            </a>
        @endauth
        <a class="coluna-15" href="/">
            <span class="subtitulo3">Home</span>
        </a>
        <a class="coluna-15" href="#rodapé">
            <span class="subtitulo3">Contato</span>
        </a>
        @auth
            <a class="coluna-15" target="_blank" href="/minhamarca">
                <span class="subtitulo3" >Minha Marca</span>
            </a>
            <a class="coluna-15" href="/#formulariocentralizado">
                <span class="subtitulo3" >Formulário</span>
            </a>
            <a class="coluna-15" href="/logout">
                <span class="subtitulo3">Sair</span>
            </a>
        @else
            <a class="coluna-35" href="/cadastrar#paralogin">
                <span class="subtitulo3">Login</span>
            </a>
        @endauth
    </header>
    @foreach($registro as $registro)
        <section class="boxmarca">
                <div><img class="logors" src="assets/logomarca/0001322023020363dc4edc97908.png"></div>
            <div>
                <h2 class="titulomarca"> EMPRESA </h2>
                <h2 class="titulomarca"> {{$registro->nome_empresa}} </h2>
            </div>
            <div class="linha2">
                <div class="coluna-50">
                    <h2 class="titulomarca"> SEGMENTO </h2>
                    <h2 class="segmentomarca"> {{$registro->segmento}} </h2>
                </div>
                <div class="coluna-50">
                    <h2 class="titulomarca"> MARCA </h2>
                    <h2 class="segmentomarca"> {{$registro->marca_registrar}} </h2>
                </div>
            </div>
            <div class="linha2">
                <div class="coluna-50">
                    <h2 class="titulomarca"> TELEFONE </h2>
                    <h2 class="segmentomarca"> {{$registro->telefone}} </h2>
                </div>
                <div class="coluna-50">
                    <h2 class="titulomarca"> E-MAIL </h2>
                    <h2 class="segmentomarca"> {{$registro->email}} </h2>
                </div>
            </div>
            <div style="margin-bottom: 5%">
            <h2 class="titulomarca"> RESUMO DA MARCA </h2>
            <h2 class="resumomarca"> {{$registro->resumo  }} </h2>
            </div>
    </section>
    @endforeach
    <footer class="section6" id="rodapé">
        <div class="linha" style="padding-top: 20px;">
            <div class="coluna-15">

            </div>
            <div class="coluna-30">

                <div class="rodapé1">
                    <p>A Realize & Salvatto preza por uma proximidade aos seus clientes e parceiros,
                        onde tiramos suas dúvidas, interagimos e atualizamos sobre as novidades de nossa empresa.
                </div>
                <div class="rodapé1a"> Horario de Atendimento
                    <p> de 8:00 as 18:00 de Segunda a Sexta
                </div>
                <div class="rodapé2a">
                    Confira nossos contatos abaixo
                </div>
                <div class="linha rodapé1a">
                    <a class="coluna-20" target="_blank" href="https://www.facebook.com/realizesalvattomarcas">
                        <img width="60px" class="instagram" src="assets/imagens/icon/facebook.png" >
                    </a>
                    <a class="coluna-20" target="_blank" href="https://www.instagram.com/realizesalvattooficial/">
                        <img width="60px" class="instagram" src="assets/imagens/icon/instagram.png" >
                    </a>
                    <a class="coluna-20" target="_blank" href="https://www.linkedin.com/company/realize-salvatto/?originalSubdomain=br">
                        <img width="60px" class="instagram" src="assets/imagens/icon/linkedin.png" >
                    </a>
                    <a class="coluna-20" target="_blank" href="https://api.whatsapp.com/send?phone=5527992751183&text=Ol%C3%A1,
                %20quero%20saber%20como%20anda%20meu%20processo%20de%20Registro%20de%20Marca.">
                        <img width="60px" class="instagram" src="assets/imagens/icon/whatsapp.png" >
                    </a>
                    <a class="coluna-20" target="_blank" href="mailto:contato@realizesalvatto.com.br">
                        <img width="60px" class="instagram" src="assets/imagens/icon/email.png" >
                    </a>
                </div>
            </div>
            <div class="coluna-10">
            </div>
            <a class="coluna-25">
                <div class="rodapé2a"> Onde estamos? </div>
                <div class="rodapé1a">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.1227989550957!2d-40
            .29802568457889!3d-20.336545086377384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
            .1!3m3!1m2!1s0xb7a8292c4200f9%3A0x4c5bf182ed46380a!2sRealize%20%26%20Salvatto%20
            -%20Registro%20de%20marcas%20e%20patentes!5e0!3m2!1spt-BR!2sbr!4v1674925445480!5m2!1spt-BR!2sbr"
                            width="400" height="300" style="border:0; border-radius: 13px" allowfullscreen="" loading="lazy" class="mapa"
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </a>
            <div class="coluna-15"></div>
        </div>
    </footer>
</body>

</html>
