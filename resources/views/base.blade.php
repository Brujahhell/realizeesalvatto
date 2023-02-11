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
    <section class="section1">
        <header class="cabecalho linha">
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
        <div class="linha2">
            <div class="coluna-50">
                <div><img class="logors" src="assets/imagens/REALIZE-SALVATTO.png"></div>
            </div>
            <div class="coluna-50" style="padding: 7%">
                <div class="boxformulario ">
                    <a class="tituloform">IMAGINE SER PROIBÍDO DE USAR SUA </a> <a class="descricaomarca"> MARCA</a> <a class="tituloform">?</a>
                    <p class="tituloform">CONFIRA SE ELA ESTÁ DISPONÍVEL!</p>
                    <div class="descricaoform">Preencha o formulário e um consultor te dará todo suporte para evitar esse prejuízo.</div>
                    <div style="padding-top: 20px"><a class="button subtitulo2" href="/#formulariocentralizado">Formulário</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section2">
        <div class="titulo">
            <div class="titulo1">
            O que você precisa saber sobre registro de marca
            </div>
        </div>
        <div class="descrição"><img decoding="async" src="/assets/imagens/sobre.png" alt="" loading="lazy"></div>

        <div class="subtitulo"> Valor e Confiança </div>
            <div class="descrição"> Nossa missão é consolidar a identidade empresarial de pequenos e grandes empreendedores. </div>
        <div class="descrição"><img decoding="async" width="45" height="45" src="/assets/imagens/escudo.png" alt="" loading="lazy"></div>
            <div class="subtitulo2"> Serviço Seguro </div>
                <div class="descrição2"> Nossos processos são totalmente supervisionados e revisados pelo Instituto Nacional da Propriedade Industrial (INPI). </div>
        <div class="descrição" id="formulariocentralizado"><img decoding="async" width="50" height="45" src="/assets/imagens/transferencia.png" alt="" loading="lazy"></div>
            <div class="subtitulo2"> Serviço Online e Presencial </div>
                <div class="descrição2"> Realizamos os inícios dos processos por meio presencial e online, atendimento online em todo país. </div>
    </section>
    <section class="sectionform">
        <div style="padding-top: 20px">
            <div class="boxformulario1">
                <div class="descricaoform" style="padding-top: 20px; font-weight: bold;">Preencha o formulário e um consultor te dará todo suporte para evitar esse prejuízo.</div>
                <div>
                    <form action="/minhamarca" method="post" id="cf" enctype="multipart/form-data">
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                        <div class="coluna-100">
                            <div class="inputbox">
                                <input type="text" placeholder=" * Nome Completo: " id="nome_completo" name="nome_completo" required="" class="inputcss">
                            </div>
                        </div>
                        <div class="coluna-100">
                            <div class="inputbox">
                                <input type="text" placeholder=" * Nome da Empresa:" id="nome_empresa" name="nome_empresa" required="" class="inputcss">
                            </div>
                        </div>
                        <div class="linha2">
                            <div class="coluna-50dir">
                                <div style="padding-left: 20px">
                                    <input type="text" placeholder=" * Segmento: " id="segmento" name="segmento" class="inputcss" required="">
                                </div>
                            </div>
                            <div class="coluna-50esq">
                                <div style="padding-right: 20px">
                                    <input type="text" placeholder=" * Telefone Contato:" id="telefone" name="telefone" class="inputcss">
                                </div>
                            </div>
                        </div>
                        <div class="coluna-100">
                            <div class="inputbox">
                                <input type="text" placeholder=" * Email:" id="email" required="" name="email" class="inputcss">
                            </div>
                        </div>
                        <div class="coluna-100">
                            <div class="inputbox">
                                <input type="text" placeholder=" * Marca a Registrar:" id="marca_registrar" name="marca_registrar" class="inputcss">
                            </div>
                        </div>
                        <div class="coluna-100">
                            <div class="inputbox2">
                                <textarea type="text" placeholder="* Resumo sobre a marca:" id="resumo" name="resumo" class="inputcss2"></textarea>
                            </div>
                        </div>
                        <div class="linha2">
                            <div class="coluna-50 inputbox">
                                <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                                <input type='file' id="getFile" style="display:none" name="whitepaper">
                                <button type="button" class="buttonform"
                                        onclick="document.getElementById('getFile').click()">
                                    <a style="padding-right: 10px"> * WhitePaper de seu Marca (Até 10MB, .PDF) </a>
                                </button>
                            </div>
                            <div class="coluna-50 inputbox">
                                <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                                <input type='file' id="getFile2" style="display:none" name="logo_projeto" required="">
                                <button type="button" class="buttonform"
                                        onclick="document.getElementById('getFile2').click()">
                                    <a style="font-size: 16px" > * LOGO do Projeto ( Max 200x200px .PNG, .JPG ) </a>
                                </button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="subtitulo">
                                <input type="submit" id="submit" class="buttonform"
                                       name="submit" value="ENVIAR SEU PROJETO"/>
                            </div>
                        </div>
                    </form>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section4">
        <div class="subtitulo"> Confira depoimentos de alguns de nossos clientes: </div>
        <div class="linha" style="height: 320px;">
            <div class="coluna-20"></div>
            <a class="coluna-30" target="_blank" href="https://www.youtube.com/watch?v=0HuNkl0mB2A&t=2s">
                <p class="yout"><img src="assets/imagens/video1.png" ></p>
            </a>
            <a class="coluna-30" target="_blank" href="https://www.youtube.com/watch?v=4iP-CiREb14">
                <p class="yout"><img src="assets/imagens/video2.png" ></p>
            </a>
            <div class="coluna-20"></div>
        </div>
        <div class="linha">
            <div class="coluna-20"></div>
            <a class="coluna-30" target="_blank" href="https://www.youtube.com/watch?v=Jkor0SREXto">
                <p class="yout"><img src="assets/imagens/video3.png" ></p>
            </a>
            <a class="coluna-30" target="_blank" href="https://www.youtube.com/watch?v=kSjiXpZ89fA">
                <p class="yout"><img src="assets/imagens/video4.png" ></p>
            </a>
            <div class="coluna-20"></div>
        </div>
    </section>
    <section class="section5">
        <div class="subtitulologo"> Clientes que tiveram suas marcas registradas conosco: </div>
        <div class="linha">
        <a class="coluna-10"  target="_blank" href="https://www.alemaodoforro.com.br/">
            <img width="250px" class="" src="assets/imagens/aviao-do-forro-1.png" >
        </a>

        <a class="coluna-10" target="_blank" href="http://www.mundodaesfiha.com/">
            <img width="250px" class="" src="assets/imagens/esfiha-word-1.png" >
        </a>

        <a class="coluna-10" target="_blank" href="https://www.cervejariaaltezza.com.br/site/">
            <img width="250px" class="instagram" src="assets/imagens/altezza-2.png" >
        </a>

        <a class="coluna-10" target="_blank" href="https://cafepatrocinio.com.br/">
            <img width="250px" class="instagram" src="assets/imagens/cafe-patrocinio.png" >
        </a>

        <a class="coluna-10"  target="_blank" href="https://www.atlanticapetroleo.com.br/">
            <img width="250px" class="instagram" src="assets/imagens/posto-1.png" >
        </a>

        <a class="coluna-10" target="_blank" href="http://fastportion.com.br/">
            <img width="250px" class="instagram" src="assets/imagens/fastportion.png" >
        </a>

        <a class="coluna-10" target="_blank" href="https://www.instagram.com/orbita_rock/">
            <img width="250px" class="instagram" src="assets/imagens/orbitarock.png" >
        </a>

        <a class="coluna-10" target="_blank" href="http://www.ronchibeer.com.br/">
            <img width="250px" class="instagram" src="assets/imagens/Rochi-beer.png" >
        </a>

        </div>

    </section>
<footer class="section6" id="rodapé">
    <div class="linha">
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
