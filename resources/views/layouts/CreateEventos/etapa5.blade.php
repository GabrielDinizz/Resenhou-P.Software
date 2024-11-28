<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/componentsCSS/header.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/createEventos/createEventos.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .hidden {
            max-height: 100px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .show-more {
            color: blue;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <x-header />

    <div class="container">
        <div class="content">
            <div class="instrucoes">
                <div class="titulo-instrucoes">
                    <a href="{{ route('evento.etapa4') }}"><img src="{{ asset('assets/voltar.png') }}" alt="" height="100%"></a>
                    <h1>CRIAR <span>EVENTO</span></h1>
                    <img src="{{ asset('assets/etapa5.png') }}" alt="">
                </div>
                <div class="txt-instrucoes">
                    <h2>RESPONSABILIDADE</h2>
                    <p id="terms" class="hidden">
                        1. Aceitação dos Termos
                        Ao utilizar o Resenhou, você reconhece que leu, compreendeu e concorda com todos os termos e condições aqui estabelecidos.
                        
                        <br><br>
                        2. Responsabilidade do Usuário na Criação de Eventos
                        O usuário é o único responsável por todas as informações inseridas e decisões tomadas ao criar eventos na plataforma. Isso inclui, mas não se limita a:

                        - Legitimidade e Legalidade: Garantir que o evento segue todas as leis, regulamentos e normas aplicáveis locais, estaduais e federais.
                        - Segurança e Organização: Assegurar que o evento seja organizado de forma a garantir a segurança dos participantes e envolvidos.
                        - Permissões e Autorizações: Obter todas as autorizações, licenças ou permissões necessárias para a realização do evento.
                        - Resolução de Problemas: Lidar com quaisquer problemas, disputas ou ocorrências resultantes do evento, incluindo questões relacionadas a segurança, acidentes, danos materiais ou quaisquer outras responsabilidades.
                        
                        <br><br>
                        3. Isenção de Responsabilidade da Plataforma
                        A plataforma Resenhou atua apenas como uma ferramenta tecnológica para auxiliar na organização de eventos. Não temos qualquer responsabilidade ou envolvimento direto ou indireto com os eventos criados pelos usuários, incluindo, mas não se limitando a:

                        - Ações dos Organizadores ou Participantes: Não nos responsabilizamos por ações ou omissões dos organizadores, participantes ou terceiros envolvidos.
                        - Conteúdo e Dados Fornecidos pelo Usuário: Todo o conteúdo inserido no sistema é de responsabilidade exclusiva do usuário.
                        - Problemas Jurídicos: Não somos responsáveis por infrações legais relacionadas ao evento.
                        
                        <br><br>
                        4. Declaração de Indenização
                        Você concorda em indenizar, defender e isentar a plataforma Resenhou, seus desenvolvedores, representantes e parceiros de qualquer reivindicação, processo, perda, dano ou despesa (incluindo honorários advocatícios) resultante de:

                        - Suas ações ou omissões relacionadas ao evento.
                        - Qualquer violação destes Termos de Uso.
                        - Atividades realizadas por você ou terceiros em conexão com o evento.
                        
                        <br><br>
                        5. Limitação de Responsabilidade
                        Na máxima extensão permitida por lei, a plataforma Resenhou não será responsável por:

                        - Lucros cessantes, danos indiretos, especiais, punitivos ou incidentais resultantes do uso da plataforma.
                        - Perdas causadas por informações incompletas, erradas ou imprecisas fornecidas pelo usuário.
                        - Falhas técnicas, indisponibilidade do sistema ou erros que possam afetar a criação ou gerenciamento de eventos.
                        
                        <br><br>
                        6. Restrições de Uso
                        O usuário concorda em utilizar a plataforma de maneira responsável e ética. É proibido o uso da plataforma para criar, promover ou organizar eventos que envolvam:

                        - Atividades ilegais ou ilícitas.
                        - Discriminação, discurso de ódio ou qualquer tipo de conteúdo ofensivo.
                        - Eventos que possam causar danos ou riscos à saúde, segurança ou bem-estar de pessoas, animais ou bens.
                        
                        <br><br>
                        7. Modificações nos Termos de Uso
                        A plataforma Resenhou se reserva o direito de atualizar e modificar estes Termos de Uso a qualquer momento, sem aviso prévio. É responsabilidade do usuário revisar os termos regularmente.
                        
                        <br><br>
                        8. Aceitação ao Criar um Evento
                        Ao criar um evento na plataforma, você declara e concorda expressamente que:

                        - Leu e aceitou todos os Termos de Uso.
                        - É o único responsável por quaisquer problemas, situações ou responsabilidades decorrentes do evento criado.

                        <br><br>
                        9. Legislação Aplicável
                        Estes Termos de Uso são regidos pelas leis do Brasil, Minas Gerais. Qualquer disputa será resolvida exclusivamente nos tribunais competentes do [SEU LOCAL].
                        <br><br>
                        10. Contato
                        Em caso de dúvidas ou preocupações sobre estes Termos de Uso, entre em contato conosco pelo email: resenhou@gmail.com.
                    </p>
                    <br>
                    <span id="toggleText" class="show-more" style="color: white">Ler Mais</span>
                </div>
            </div>

            <div class="continuar">
                <form action="{{ route('evento.saveEtapa5') }}" method="POST">
                    @csrf
                    <button type="submit">CRIAR EVENTO</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const terms = document.getElementById('terms');
        const toggleText = document.getElementById('toggleText');

        toggleText.addEventListener('click', () => {
            if (terms.classList.contains('hidden')) {
                terms.classList.remove('hidden');
                toggleText.textContent = 'Ler Menos';
            } else {
                terms.classList.add('hidden');
                toggleText.textContent = 'Ler Mais';
            }
        });
    </script>
</body>

</html>
