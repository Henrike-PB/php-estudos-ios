<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/2363/2363701.png">
    <title>Catálogo de Filmes</title>
</head>
<body>
    
    <h1>Escolha um filme</h1>

    <form class="form" action="#" method="post">

    <select class="select" name="filme" id="">

        <option value="darko">Donnie Darko</option>
        <option value="future">De Volta Para o Futuro</option>
        <option value="godfather">O Poderoso Chefão</option>
        <option value="cela">O Milagre da Cela 7</option>
        <option value="marrowbone">O Segredo dos Marrowbone</option>
        <option value="hachiko">Sempre ao Seu Lado</option>   
    </select>

<!-- value do input é apenas para ser impresso no botão -->
    <input class="submit" type="submit" value="Ver detalhes">
    </form>

    <?php 
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){


        switch($_POST["filme"]) {
            case "darko":
                $titulo = "Donnie Darko";

                $sinopse = "<p>\"Donnie Darko\" é um filme de drama e ficção científica dirigido por Richard Kelly e lançado em 2001. A história se passa em 1988 e gira em torno de Donnie Darko, um adolescente problemático que começa a ter visões de um coelho gigante chamado Frank, que o informa que o mundo vai acabar em um curto espaço de tempo.</p>

                <p?>Conforme Donnie explora essas visões e tenta entender o que está acontecendo, ele se vê envolvido em uma série de eventos estranhos e misteriosos, incluindo viagens no tempo, eventos sobrenaturais e questões filosóficas sobre destino e livre arbítrio.</p>

                <p>O filme mistura elementos de drama psicológico, ficção científica e surrealismo, criando uma narrativa complexa e intrigante que desafia as expectativas do espectador. Com atuações marcantes de Jake Gyllenhaal, Maggie Gyllenhaal, Drew Barrymore e outros, \"Donnie Darko\" se tornou um filme cult, celebrado por sua originalidade e profundidade temática.</p>";
                
                $stream = "Disponível em:<br><br>
                 <a class='link' href='https://www.primevideo.com/dp/amzn1.dv.gti.5cb0ba65-16ec-5c80-09d3-8b65e7278702?autoplay=0&ref_=atv_cf_strg_wb'>Amazon Prime Video</a> ";

                $imagem = "https://i.pinimg.com/564x/0c/da/f5/0cdaf5a6ceda8e305a522db3849fc38b.jpg";
                
               break;

               case "future":
                $titulo = "De Volta para o Futuro";
                $sinopse = "<p>\"De Volta para o Futuro\" é um clássico filme de ficção científica e aventura dirigido por Robert Zemeckis e lançado em 1985. A história gira em torno de Marty McFly, um adolescente típico dos anos 1980, interpretado por Michael J. Fox, que acidentalmente viaja no tempo para 1955 usando um DeLorean modificado pelo cientista excêntrico Dr. Emmett Brown, interpretado por Christopher Lloyd.</p>

                <p>Ao chegar em 1955, Marty encontra versões mais jovens de seus pais e inadvertidamente interfere em eventos que ameaçam sua própria existência. Ele busca a ajuda do jovem Dr. Brown para consertar o DeLorean e encontrar uma maneira de retornar ao seu próprio tempo. Enquanto isso, Marty deve garantir que seus pais se apaixonem, para que ele ainda exista no futuro.</p>
                
                <p>O filme combina humor, ação e elementos de viagem no tempo de uma forma cativante e emocionante. Além disso, ele explora temas de amizade, coragem e a importância de assumir o controle do próprio destino. \"De Volta para o Futuro\" tornou-se um fenômeno cultural e um ícone da cultura pop, gerando duas sequências e mantendo uma base de fãs dedicada ao longo das décadas.</p>";
                
                $stream = "Disponível em:<br><br> <a class='link' href='https://www.starplus.com/pt-br/movies/de-volta-para-o-futuro/2JsvVTYiLGkI'>Star +</a>";

                $imagem = "https://i.pinimg.com/564x/4f/c7/59/4fc7598c8e7647746650de0b2144e396.jpg";

                break;

            case "godfather":
                $titulo = "O Poderoso Chefão";
                $sinopse = "<p> \"O Poderoso Chefão\" é um filme de crime e drama dirigido por Francis Ford Coppola, lançado em 1972 e baseado no romance homônimo de Mario Puzo. A trama se concentra na poderosa família mafiosa italiana Corleone, liderada pelo patriarca Don Vito Corleone, interpretado por Marlon Brando. O filme retrata a ascensão e queda da família Corleone, bem como os dramas pessoais e os conflitos internos que surgem em meio ao mundo do crime organizado.</p>

                <p>No cerne da história está a sucessão do império criminoso de Vito, com seu filho mais novo, Michael Corleone, interpretado por Al Pacino, inicialmente relutante em se envolver nos negócios da família. No entanto, após uma tentativa de assassinato contra seu pai, Michael é gradualmente arrastado para o mundo do crime e assume um papel cada vez mais central na família Corleone.</p>
                
                <p>\"O Poderoso Chefão\" é aclamado por sua narrativa envolvente, personagens complexos e atuações magistrais. O filme explora temas de lealdade, tradição, vingança e redenção, enquanto mergulha nas profundezas sombrias do submundo do crime. Além disso, sua direção meticulosa, cinematografia marcante e trilha sonora memorável contribuem para sua reputação como um dos maiores filmes já feitos, estabelecendo um padrão para o gênero de filmes de máfia que perdura até os dias atuais.</p>";

                $stream = "Disponível em:<br><br> <a class='link' href='https://www.netflix.com/br/title/60011152?source=35'>Netflix</a";

                $imagem = "https://i.pinimg.com/564x/87/2f/d3/872fd37eb38631a1632ef09cc66ce5cf.jpg";   
                break;

                case "cela":
                    $titulo = "O Milagre da Cela 7";
                    $sinopse = "<p>\"O Milagre da Cela 7\" é um filme turco de drama lançado em 2019, dirigido por Mehmet Ada Öztekin. A trama gira em torno de Memo, um homem com deficiência intelectual, e sua filha de seis anos, Ova. Memo é injustamente acusado de um crime que não cometeu e é condenado à pena de morte.</p>

                    <p>Enquanto aguarda sua execução na prisão, Memo é colocado na cela 7, onde ele faz amizade com outros detentos que se tornam sua nova família. Enquanto isso, sua filha Ova, determinada a provar a inocência de seu pai, busca a ajuda de pessoas ao seu redor para reunir evidências que possam absolvê-lo.</p>
                    
                    <p>O filme é uma jornada emocionante e comovente que destaca os laços de amor e conexão entre pai e filha, bem como a luta pela justiça em face da adversidade. \"O Milagre da Cela 7\" recebeu elogios por suas performances cativantes, especialmente do ator principal, Aras Bulut İynemli, e da atriz infantil, Nisa Sofiya Aksongur. A história toca o coração do público, transmitindo uma mensagem poderosa sobre empatia, perdão e esperança.</p>";

                    $stream = "Disponível em:<br><br> <a class='link' href='https://www.netflix.com/br/title/81239779?source=35'>Netflix</a>";

                    $imagem = "https://i.pinimg.com/564x/f8/49/49/f84949f1e962cd067bc5dc916cb24b22.jpg";
                    break;

                    case "marrowbone":
                        $titulo = " O Segredo dos Marrowbone";
                        $sinopse = "<p>\"O Segredo dos Marrowbone\" é um filme de suspense e terror psicológico dirigido por Sergio G. Sánchez e lançado em 2017. A trama se passa na década de 1960 e segue quatro irmãos, Jack, Billy, Jane e Sam, que se refugiam em uma mansão isolada chamada Marrowbone, após a morte de sua mãe. Eles mantêm sua presença na mansão em segredo, temendo serem separados pelas autoridades.</p>
                        
                        <p>No entanto, a tranquilidade deles é ameaçada quando eventos estranhos e perturbadores começam a acontecer na casa, sugerindo a presença de uma entidade sobrenatural. Enquanto tentam lidar com seus próprios segredos e traumas, os irmãos lutam para manter sua família unida e proteger seus segredos a todo custo.</p>
                        
                        <p>O filme mergulha nas complexidades dos relacionamentos familiares, segredos sombrios e o impacto devastador do trauma. À medida que a história se desenrola, segredos do passado são revelados, levando a um clímax tenso e surpreendente.</p>
                        
                        <p>\"O Segredo dos Marrowbone\" é elogiado por sua atmosfera sombria e assustadora, performances sólidas do elenco e uma narrativa envolvente que mantém o espectador tenso e intrigado até o final.</p>";

                        $stream = "Disponível a partir de R$ 6,90 em: <br><br>
                        
                        <a class='link' href='https://www.primevideo.com/dp/amzn1.dv.gti.6c9f0133-aaa4-4c91-848c-a0516605e800?autoplay=0&ref_=atv_cf_strg_wb'>Amazon Prime Video</a>";

                        $imagem = "https://i.pinimg.com/564x/ae/48/ae/ae48ae0da6566515e5c2e1197fa33df9.jpg";
                        break;

                        case "hachiko":

                            $titulo = "Sempre ao seu Lado";
                            $sinopse = "<p>\"Hachiko: A Dog's Story\" é um filme baseado em fatos reais, dirigido por Lasse Hallström e lançado em 2009. Ele conta a história emocionante e comovente de Hachiko, um cão da raça Akita que se tornou famoso no Japão por sua lealdade extraordinária.</p>

                            <p>O filme narra a relação especial entre Hachiko e seu dono, um professor universitário chamado Parker Wilson, interpretado por Richard Gere. Todos os dias, Hachiko acompanha Parker até a estação de trem pela manhã e retorna ao final do dia para encontrá-lo. Um dia, Parker sofre um ataque cardíaco e morre enquanto está no trabalho, mas Hachiko continua a esperar por ele na estação de trem, dia após dia, durante nove anos, na esperança de vê-lo voltar.</p>
                            
                            <p>A história de Hachiko se torna conhecida em todo o Japão, inspirando e comovendo as pessoas com sua devoção inabalável ao seu dono falecido. O filme destaca a profundidade do vínculo entre humanos e animais, bem como a capacidade dos cães de demonstrar amor e lealdade incondicionais.</p>
                            
                            <p>\"Hachiko: A Dog's Story\" é uma jornada emocional que celebra o poder do amor e da fidelidade, tocando o coração dos espectadores e inspirando-os com a história verdadeira de um cão extraordinário.</p>";

                            $stream = "Disponível em: <br><br> <a class='link dog' href='https://www.primevideo.com/dp/amzn1.dv.gti.b0b4e263-3185-593e-7356-19467ffdf317?autoplay=0&ref_=atv_cf_strg_wb'>Amazon Prime Video</a> <br>

                            <a class='link dog' href='https://globoplay.globo.com/sempre-ao-seu-lado/t/ncRkKtsgQd/'>Globoplay</a> ";

                            $imagem = "https://i.pinimg.com/564x/0e/e8/83/0ee883f1a921311752a10a0fc811a456.jpg";
                            break;

                default: 
                
                    $titulo = "";
                    $sinopse = "";
                    $imagem = "";
                    $stream = "";
        }

        if($titulo && $sinopse && $imagem && $stream){
            echo "<h2>$titulo</h2>";
            echo "<p> $sinopse </p>";
            echo "<div class='poster'><img src='$imagem' alt='$titulo'></div>";
            echo "<p class='p-stream'> $stream </p>";
            
        } else{
            echo "
                <div class='content'>
                <p>Este projeto foi desenvolvido utilizando PHP, em pró de colocar em prática a Estrutura Condicional relacionada a <a class='link-switch' href='https://www.devmedia.com.br/php-estrutura-condicional-switch-case/38223#:~:text=O%20switch%2Fcase%20%C3%A9%20uma,a%20essa%20condi%C3%A7%C3%A3o%20%C3%A9%20executado.'>Switch Case</a></p>
             </div>";
            echo "<p> Por favor, selecione um filme.</p>";
        }

    }  
    ?>


<footer>
    <p>Desenvolvido por Henrike P.B. &copy;</p>
</footer>

</body>
</html>