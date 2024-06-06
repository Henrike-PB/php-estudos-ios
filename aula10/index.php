<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./media/dachshund.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <title>O Mundo dos Dachshunds</title>
</head>
<body>

<header>
                <div class="menu">
                    <img src="./media/dachshund.png" alt="logo" width="50" height="50">
                    <nav>
                        <div id="toggle" class="toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                            <ul class="ul">
                                    <li><a class="active" id="active" href="#home">Home</a></li>
                                    <li><a href="#tech">Curiosidades</a></li>
                                    <li><a href="#skills">Cuidados</a></li>
                                    <li><a href="#projetos">Origem</a></li>
                        

                                        <div class="toggle-mode">
                                            
                                            <input type="checkbox" name="#" id="toggle-mode" class="toggle-btn">
                                            <label for="toggle-mode" class="toggle-lable"></label>
                                            
                                        </div>

                        </ul>
                    </nav>

                </div>
            </header>


<h1>Bem-vindo à Terra dos Dachshunds!</h1>

<div class="introduc">

<h2 >Descubra o Encanto dos Dachshunds: Explorando os Tipos e Curiosidades desta Raça Excepcional</h2>

        <p class="intro">Bem-vindo à fascinante jornada pelo mundo dos Dachshunds! Estes cãezinhos encantadores são uma verdadeira celebração de personalidade, inteligência e, é claro, aqueles corpos alongados e adoráveis. Vamos mergulhar no universo destes cães extraordinários e descobrir tudo o que você precisa saber.</p>


</div>

    
<div class="tipos">

<h2>Explore a variedade destes cães!</h2>

<form action="" method="post">

        <select name="dog" id="">
                <option value="1">Dachshund de Pelo Curto</option>
                <option value="2">Dachshund de Pelo Longo</option>
                <option value="3">Dachshund de Pelo Duro</option>
        </select>

    <input class="submit" type="submit" value="selecione">


</form>
       
<?php 
if($_SERVER["REQUEST_METHOD"] == 'POST'){

    switch($_POST["dog"]){
    case "1":
        $titulo = "Dachshund de Pelo curto";

        $descricao = "<p>Conhecidos pela sua pelagem suave e brilhante, esses Dachshunds são verdadeiros campeões de charme. Com suas orelhas caídas e olhares perspicazes, eles conquistam corações em todo o mundo.</p>";

        $imagem = "./media/dunga.jfif";
        break;

        case "2":
            $titulo = "Dachshund de Pelo Longo";

            $descricao = "<p>Prepare-se para se apaixonar pela elegância desses Dachshunds. Com suas longas mechas de pelos sedosos e olhos expressivos, eles combinam beleza e graciosidade como ninguém.</p>";

            $imagem = "https://www.patasdacasa.com.br/sites/default/files/noticias/2023/03/dachshund-pelo-longo-conheca-os-cuidados-essenciais-com-a-raca-salsicha.jpg";
            break;
            
        case "3":
            $titulo = "Dachshund de Pelo Longo";

            $descricao = "<p>Robustos e cheios de personalidade, os Dachshunds de pelo duro são como verdadeiros aventureiros. Sua pelagem áspera e densa os torna ainda mais encantadores, enquanto sua determinação é verdadeiramente inspiradora.</p>";

            $imagem = "https://i.pinimg.com/564x/e7/df/63/e7df6372293dcb2b0bebbe9816f1a6e3.jpg";
            break;

        default:
            $titulo = "";
            $descricao = "";
            $imagem = "";
        
    }

    if($titulo && $descricao && $imagem){
        echo "<h2>$titulo</h2>";
        echo "<p>$descricao</p>";
        echo "<div class='foto'><img src='$imagem' alt='$titulo'></div";
    }
} else{
    echo "<p>Por favor, selecione um tipo.</p>";
}
?>


</div>



<div class="divBack">

        <div class="content">

            <h2>Conheça os Dachshunds:</h2>

            <p>Os Dachshunds, comumente conhecidos como "salsichinhas", são uma raça de cães fascinante e cheia de personalidade. Originários da Alemanha, esses pequenos notáveis conquistaram o mundo com seu charme único e aparência inconfundível.</p>


            <h2>História e Origem</h2>

                <p>Os Dachshunds têm uma história fascinante que remonta ao século XVII, quando foram desenvolvidos na Alemanha para caçar texugos. Sua habilidade de perseguir presas em tocas estreitas os tornou populares entre os caçadores da época.</p>

                <h2>Principais Características:</h2>
                <ul>
                    <li><strong>Personalidade Corajosa:</strong>Apesar do seu tamanho pequeno, os Dachshunds são cães valentes e destemidos, prontos para enfrentar qualquer desafio com determinação.</li>

                    <li><strong>Lealdade Inabalável:</strong>São companheiros leais e devotados, dispostos a proteger e cuidar de suas famílias com todo o seu coração.</li>

                    <li><strong>Inteligência Notável:</strong> Os Dachshunds são cães inteligentes e astutos, capazes de aprender rapidamente e se adaptar a diversas situações.</li>
                </ul>

                <h2>Principais Cuidados:</h2>
                <ul>
                    <li><strong>Higiene Dental:</strong> Escovar os dentes do seu Dachshund regularmente pode prevenir problemas dentários e garantir um sorriso saudável.</li>

                    <li><strong>Cuidados com a Pele e Pelagem:</strong> Os Dachshunds de pelo longo requerem cuidados extras com sua pelagem, incluindo escovação regular e banhos frequentes.</li>

                    <li><strong>Monitoramento da Saúde:</strong> Fique atento a sinais de problemas de saúde, como dificuldade para caminhar, dor nas costas e obesidade, e consulte um veterinário se necessário.</li>
                </ul>

                <h2>Cuidados Essenciais:</h2>
                <ul>
                    <li><strong>Exercício Adequado:</strong> Embora pequenos, os Dachshunds são cães ativos e precisam de exercícios regulares para manter sua saúde e bem-estar.</li>

                    <li><strong>Alimentação Balanceada:</strong> Uma dieta equilibrada é fundamental para garantir que seu Dachshund tenha todos os nutrientes necessários para uma vida saudável.</li>
                    
                    <li><strong>Cuidados com a Coluna:</strong> Devido à sua estrutura alongada, os Dachshunds são propensos a problemas de coluna. É importante evitar que pulem de lugares altos e mantê-los em um peso saudável.</li>
                </ul>
        </div>

        <div class="curiosidades">

        <h2>Curiosidades dos Dachshunds</h2>

<img id="dachshund-img" src="./media/malandro.jfif" alt="Dachshund">

<p id="curiosity"></p>

<script>
// Array de curiosidades
var curiosities = [
  "Mascotes Olímpicos: Os Dachshunds foram escolhidos como mascotes oficiais dos Jogos Olímpicos de Munique, em 1972, destacando sua popularidade e apelo universal.",

  "Apaixonados pela Realeza: Esses cãezinhos encantadores foram uma das raças favoritas da Rainha Vitória, que os criava em seu palácio real.",

  "Astros do Cinema: Dachshunds já foram estrelas de filmes famosos, como 'A Dama e o Vagabundo', onde um Dachshund chamado 'Cãodongo' desempenhou um papel memorável.",

  "Heróis da Guerra: Durante a Primeira Guerra Mundial, os Dachshunds eram frequentemente usados como cães de guerra devido ao seu tamanho compacto e agilidade.",

  "Artistas Famosos: Pablo Picasso era um grande amante de Dachshunds e frequentemente os retratava em suas obras de arte, destacando sua influência na cultura popular.",

  "Nomes em Outros Idiomas: Em alemão, \"Dachshund\" significa literalmente \"cachorro texugo\". Em inglês, são conhecidos como \"Dachshunds\" ou simplesmente \"Doxies\".",

  "Caça às Raposas: Os Dachshunds também eram usados para caçar raposas, graças à sua valentia e habilidade para seguir o rastro do animal.",

  "Personalidade Diversificada: Apesar de seu tamanho pequeno, os Dachshunds podem ser incrivelmente corajosos, alertas e até teimosos.",

  "Aparência Variada: Existem diferentes tipos de Dachshunds, incluindo os de pelo curto, de pelo longo e de pelo duro, cada um com sua própria personalidade e aparência.",

  "Recordistas de Longevidade: Alguns Dachshunds viveram até impressionantes 20 anos de idade, tornando-os uma das raças mais longevas.",

  "Filhotes de Celebridades: Muitas celebridades têm Dachshunds como animais de estimação, incluindo Adele, Clint Eastwood e Josh Duhamel.",
  
  "Campeões de Exposições Caninas: Dachshunds frequentemente competem em exposições caninas e têm uma longa história de vitórias e títulos.",

  "Versatilidade Esportiva: Além da caça, os Dachshunds também são usados em competições de agility, obediência e até mesmo corridas.",

  "Inspiração para Arte: Dachshunds têm sido retratados em várias obras de arte ao longo da história, incluindo pinturas famosas de Gustav Klimt e David Hockney.",

  "Narizes de Trabalho: Dachshunds têm um olfato excepcionalmente aguçado e são frequentemente usados em operações de busca e resgate.",

  "Aventureiros de Mochila: Alguns donos de Dachshunds os levam em caminhadas com mochilas especialmente projetadas para cães, permitindo que carreguem seus próprios pertences.",

  "Fofuras na Internet: Dachshunds são uma das raças mais populares nas redes sociais, com milhões de seguidores em contas dedicadas a eles.",

  "Terapia Canina: Devido à sua natureza afetuosa e leal, Dachshunds são frequentemente usados como cães de terapia em hospitais e lares de idosos.",

  "Caça de Animais Pequenos: Além de texugos e raposas, os Dachshunds também foram treinados para caçar coelhos, ratos e outros animais de pequeno porte.",

  "Dachshund Weiner Races: Em várias partes do mundo, há competições de corrida de Dachshunds, conhecidas como \"Dachshund Weiner Races\".",

  "Diversidade de Cores: Dachshunds vêm em uma ampla variedade de cores e padrões, incluindo vermelho, preto e castanho, creme, tigrado e arlequim.",

  "Saudades da Alemanha: Dachshunds são tão amados na Alemanha que há até um monumento em sua homenagem na cidade de Passau.",
  
  "Ação de Graças com Dachshunds: Todos os anos, um desfile de Dachshunds vestidos com fantasias de Ação de Graças acontece em Nova York, conhecido como \"Dachshund Thanksgiving Parade\".",

  "Reputação de Latidores: Dachshunds têm uma reputação de latir excessivamente, o que os torna excelentes cães de alerta, mas pode ser um desafio para alguns donos.",

  "Cães do Ralé: No Brasil, os Dachshunds são carinhosamente chamados de \"salsichas\" ou \"cães do ralé\", mostrando sua popularidade e carisma.",

  "Protetores de Jardim: Dachshunds têm uma inclinação natural para cavar, o que os torna ótimos para desenterrar pequenos animais que possam ameaçar seu jardim.",

  "Aventuras Subterrâneas: Graças ao seu corpo alongado, os Dachshunds são excelentes para explorar túneis e tocas, seguindo seus instintos de caça.",

  "Inteligência Reconhecida: Dachshunds são classificados como uma das raças mais inteligentes de acordo com a lista de Stanley Coren, demonstrando habilidades de resolução de problemas e aprendizado rápido.",

  "Habilidade de Escalar: Surpreendentemente ágeis, os Dachshunds são capazes de escalar e pular mais do que se espera devido ao seu tamanho.",

  "Afetuosos e Carentes: Conhecidos por sua natureza amorosa, os Dachshunds são cães muito ligados aos seus donos e adoram passar tempo junto a eles.",

  "Habilidades de Caça Preservadas: Mesmo hoje, os Dachshunds mantêm seus instintos de caça, mostrando grande interesse em perseguir pequenos animais em seus passeios.",

  "Adaptação a Diferentes Ambientes: Esses cães versáteis se adaptam bem a viver em apartamentos ou casas grandes, desde que tenham a oportunidade de se exercitar regularmente.",

  "Vocação para Guarda: Apesar de seu tamanho pequeno, os Dachshunds têm um forte instinto de proteção, alertando seus donos sobre a presença de estranhos com seus latidos característicos.",

  "Companheiros de Viagem: Dachshunds adoram viajar e são excelentes companheiros para aventuras ao ar livre, desde caminhadas até viagens de carro.",

  "Amizade com Outros Animais: Com uma socialização adequada, os Dachshunds podem se dar bem com outros animais de estimação, incluindo gatos e até mesmo outros cães."

];

// Função para exibir uma curiosidade aleatória ao clicar na imagem
document.getElementById("dachshund-img").addEventListener("click", function() {
  var randomIndex = Math.floor(Math.random() * curiosities.length);
  document.getElementById("curiosity").textContent = curiosities[randomIndex];
});
</script>

        </div>

</div>



<script src="main.js"></script>
<script src="menu.js"></script>
</body>
</html>