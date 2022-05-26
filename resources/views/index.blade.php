<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Portfolio de Noan - Étudiant" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://noan.dev" />
    <meta property="og:description" content="Étudiant en alternance dans le développement logiciel et web" />
    <meta name="theme-color" content="#FF0000">
    <title>Noan Perrot - Portfolio</title>
    <style>
        @keyframes load {
            from {
                top: 50vh;
            }

            to {
                top: 25vh;
            }
        }

        #loader {
            display: flex;
            position: fixed;
            height: 100vh;
            width: 100vw;
            background-color: #fff;
            z-index: 10000;
            color: rgb(201, 201, 201);
        }

        #cube {
            position: relative;
            height: 100px;
            width: 100px;
            top: 50vh;
            left: 42vw;
            background-color: black;
            z-index: 9999999;
            transform: skewX(-45deg);
            -webkit-box-shadow: 0px 20px 17px -10px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 20px 17px -10px rgba(0, 0, 0, 0.3);
        }

        #cube:nth-of-type(1) {
            animation: load 1s alternate infinite cubic-bezier(0.23, 1, 0.320, 1);
        }

        #cube:nth-of-type(2) {
            animation: load 1s 0.25s alternate infinite cubic-bezier(0.23, 1, 0.320, 1);
        }

        #cube:nth-of-type(3) {
            animation: load 1s 0.5s alternate infinite cubic-bezier(0.23, 1, 0.320, 1);
        }

    </style>
    <link rel="icon" href="./img/favicon.ico" />
    <link rel="stylesheet preload" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body>
    <!--
        LOADER
    -->
    <div id="loader">
        <div id="cube" style="background-color: blue"></div>
        <div id="cube" style="background-color: white"></div>
        <div id="cube" style="background-color: red"></div>
    </div>
    <!--
        Responsive Menu
    -->
    <div class="mx-auto lg:px-64 modal" id="respmenu">
        <button class="m-10 float-right text-5xl close_modal"><i class="lni lni-cross-circle"></i></button>
        <div class="flex flex-col justify-between text-3xl uppercase font-thin">
            <a href="#" class="p-5 my-4 close_modal">Accueil</a>
            <a href="#skill" class="p-5 my-4 close_modal">Compétences</a>
            <a href="#aboutme" class="p-5 my-4 close_modal">A mon sujet</a>
            <a href="#funfact" class="p-5 my-4 close_modal">Fun fact</a>
            <a href="#cv"
                class="bg-purple-400 hover:bg-purple-600 transition text-white font-bold rounded-2xl p-5 my-4 close_modal">CV</a>
        </div>
    </div>
    <!--
        Python
    -->
    <div class="mx-auto lg:px-64 modal skill-modal" id="python">
        <button class="my-10 text-5xl close_modal"><i class="lni lni-cross-circle"></i></button>
        <h1 class="text-6xl mb-10 font-black text-green">PYTHON</h1>
        <pre>even = [i for i in range(100) if i % 2 == 0]</pre>
        <hr class="mt-5">
        <div class="flex flex-col lg:flex-row w-full mt-16">
            <div class="flex-grow border border-gray-800 border-4 p-5 rounded lg:mr-5">
                <h4 class="text-2xl"><a
                        href="https://colab.research.google.com/drive/1rwbMVbh7isPr2K9EU8GWl_4tqyZT9j-I">Word
                        Generator</a></h4>
                <p>Programme permettant la création de mots sur la base d’une matrice probabiliste générée par une liste
                    de mots.</p>
                <ul class="inline-block text-xs text-white mt-5">
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Python</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Numpy</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Matplotlib</li>
                </ul>
            </div>
            <div class="flex-grow border border-gray-800 border-4 p-5 rounded lg:ml-5">
                <h4 class="text-2xl">Alternance Bot</h4>
                <p>Web scrapper récupérant les nouvelles offres d'alternance sur Linkedin en les envoyant via un Webhook
                    dans un channel Discord.</p>
                <ul class="inline-block text-xs text-white mt-5">
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Python</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Requests</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Beautifulsoup</li>
                </ul>
            </div>
            <div class="flex-grow border border-gray-800 border-4 p-5 rounded lg:ml-5">
                <h4 class="text-2xl"><a href="https://gitlab.com/skewram/Rocket-Server">Rocket Server</a></h4>
                <p>Logiciel de relais entre une base de données MongoDB et Pusher.io pour acheminer les données
                    télémétriques d'une fusée à eau.</p>
                <ul class="inline-block text-xs text-white mt-5">
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Python</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">MongoDB</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Pusher</li>
                </ul>
            </div>
        </div>
    </div>
    <!--
        Javascript
    -->
    <div class="mx-auto lg:px-64 modal skill-modal" id="javascript">
        <button class="my-10 text-5xl close_modal"><i class="lni lni-cross-circle"></i></button>
        <h1 class="text-6xl mb-10 font-black text-orange">Javascript / <span class="text-blue-600">Typescript</span>
        </h1>
        <pre>client.on('message', msg => console.log(msg.content))</pre>
        <hr class="mt-5">
        <div class="flex flex-col lg:flex-row w-full mt-16">
            <div class="flex-grow border border-gray-800 border-4 p-5 rounded lg:ml-5">
                <h4 class="text-2xl"><a href="https://gitlab.com/skewram/botdamnit">BotDamnit</a></h4>
                <p>Bot pour le logiciel Discord agencé autour d'une architecture fait maison permettant l'exécution de
                    tâches avec une récurrence ainsi que de commandes.</p>
                <ul class="inline-block text-xs text-white mt-5">
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Typescript</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Discord.JS</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Axios</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">SQLite</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">JSON</li>
                </ul>
            </div>
            <div class="flex-grow border border-gray-800 border-4 p-5 rounded lg:ml-5">
                <h4 class="text-2xl">ModalTS</h4>
                <p>Système de modal inspiré par Bootstrap, ne nécessitant aucune librairie externe. Développé dans le
                    cadre de ce site</p>
                <ul class="inline-block text-xs text-white mt-5">
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Typescript</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Vanilla</li>
                </ul>
            </div>
            <div class="flex-grow border border-gray-800 border-4 p-5 rounded lg:ml-5">
                <h4 class="text-2xl"><a href="https://glitch.com/edit/#!/vue-twitch-tchat">Vue Twitch Tchat</a>
                </h4>
                <p>Application Vue.JS retranscrivant un fil de discussion Twitch sur une page web avec la prise en
                    charge d'émotes.</p>
                <ul class="inline-block text-xs text-white mt-5">
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Typescript</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Vue.JS</li>
                </ul>
            </div>
        </div>
    </div>
    <!--
        Java
    -->
    <div class="mx-auto lg:px-64 modal skill-modal" id="java">
        <button class="my-10 text-5xl close_modal"><i class="lni lni-cross-circle"></i></button>
        <h1 class="text-6xl mb-10 font-black text-pink">Java</h1>
        <pre>public static void main(String[] args){}</pre>
        <hr class="mt-5">
        <div class="flex flex-col lg:flex-row w-full mt-16">
            <div class="flex-grow border border-gray-800 border-4 p-5 rounded lg:mr-5">
                <h4 class="text-2xl"><a href="https://gitlab.com/skewram/preri">PRERI</a></h4>
                <p>Projet de fin 1ère année d'IUT permettant de prédir la consommation électrique en France.</p>
                <ul class="inline-block text-xs text-white mt-5">
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Java</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">JavaFX</li>
                </ul>
            </div>
            <div class="flex-grow border border-gray-800 border-4 p-5 rounded lg:mr-5">
                <h4 class="text-2xl"><a href="https://gitlab.com/skewram/armorutil">ArmorUtil</a></h4>
                <p>Plugin Minecraft pour serveur Spigot permettant de générer des porte-armures avec certaines
                    rotations.</p>
                <ul class="inline-block text-xs text-white mt-5">
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Java</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Paper API</li>
                </ul>
            </div>
            <div class="flex-grow border border-gray-800 border-4 p-5 rounded lg:ml-5">
                <h4 class="text-2xl"><a href="https://gitlab.com/skewram/exygui">ExyGUI</a></h4>
                <p>Plugin Minecraft pour serveur Spigot d'interfaces graphiques pour le serveur ExyGames.</p>
                <ul class="inline-block text-xs text-white mt-5">
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Java</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Paper API</li>
                </ul>
            </div>
            <div class="flex-grow border border-gray-800 border-4 p-5 rounded lg:ml-5">
                <h4 class="text-2xl"><a href="https://gitlab.com/skewram/exyrank"></a>ExyRank</h4>
                <p>Plugin Minecraft pour serveur Spigot délivrant un classement des meilleurs factions en s'interfaçant
                    avec un plugin de MassiveCraft.</p>
                <ul class="inline-block text-xs text-white mt-5">
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Java</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Paper API</li>
                </ul>
            </div>
            <div class="flex-grow border border-gray-800 border-4 p-5 rounded lg:ml-5">
                <h4 class="text-2xl"><a href="https://gitlab.com/skewram/duel"></a>Duel</h4>
                <p>Plugin Minecraft pour serveur Spigot utile pour créer des arènes afin de faire des duels entre
                    joueurs.</p>
                <ul class="inline-block text-xs text-white mt-5">
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Java</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Paper API</li>
                </ul>
            </div>
        </div>
    </div>
    <!--
        Web
    -->
    <div class="mx-auto lg:px-64 modal skill-modal" id="web">
        <button class="my-10 text-5xl close_modal"><i class="lni lni-cross-circle"></i></button>
        <h1 class="text-6xl mb-10 font-black text-blue-400">HTML/CSS</h1>
        <pre><xmp><p style="color: crimson;font-weight: bold;">lorem ipsum dolor sit amet</p></xmp></pre>
        <hr class="mt-5">
        <div class="flex flex-col lg:flex-row w-full mt-16">
            <div class="flex-grow border border-gray-800 border-4 p-5 rounded lg:mr-5">
                <h4 class="text-2xl"><a href="https://infolannion.com/h14/">Nos Liens Sociaux Durant
                        L'épidémie</a></h4>
                <p>Site réalisé dans le cadre du PPP sur le thème de l'impact d'internet et des réseaux sociaux sur nous
                    durant l'épidémie.</p>
                <ul class="inline-block text-xs text-white mt-5">
                    <li class="inline px-2 py-1 bg-black rounded-2xl">HTML/CSS</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Javascript</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">FontAwesome</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Bootstrap</li>
                </ul>
            </div>
            <div class="flex-grow border border-gray-800 border-4 p-5 rounded lg:ml-5">
                <h4 class="text-2xl"><a href="https://laconfrerie.net/">La Confrérie</a></h4>
                <p>La Confrérie est une communauté de plusieurs milliers de joueurs se réunissant sur différents
                    serveurs de jeux.</p>
                <ul class="inline-block text-xs text-white mt-5">
                    <li class="inline px-2 py-1 bg-black rounded-2xl">HTML/CSS</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Javascript</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">FontAwesome</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Bootstrap</li>
                </ul>
            </div>
            <div class="flex-grow border border-gray-800 border-4 p-5 rounded lg:ml-5">
                <h4 class="text-2xl"><a href="https://badblock.fr/">BadBlock Manager</a></h4>
                <p>Outil d'administration, modération, rédaction pour l'ancien serveur Minecraft BadBlock réunissant des
                    centaines de joueurs.</p>
                <ul class="inline-block text-xs text-white mt-5">
                    <li class="inline px-2 py-1 bg-black rounded-2xl">HTML/CSS</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Bootstrap</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">PHP</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">Laravel</li>
                    <li class="inline px-2 py-1 bg-black rounded-2xl">MongoDB</li>
                </ul>
            </div>
        </div>
    </div>
    <!--
        HEADER
    -->
    <div class="relative h-screen w-screen flex justify-center nav-trigger" id="home">
        <svg class="w-full pb-20 sm:w-1/4 z-10" viewBox="0 0 940 539" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Logo 1">
                <g id="an">
                    <g id="Group">
                        <path class="letter" id="Vector"
                            d="M500.537 374.592V373.21L501.861 373.608M500.537 374.592H501.565L501.861 373.608M500.537 374.592H443.972M500.537 374.592V371.829H443.972V374.592M501.861 373.608L499.215 372.813L510.337 335.886M501.861 373.608L512.987 336.682L510.337 335.886M442.659 372.777L443.972 373.21V374.592M442.659 372.777L442.059 374.592H443.972M442.659 372.777L506.388 179.859M442.659 372.777L445.286 373.644L509.015 180.725L506.388 179.859M507.702 178.91V180.292L506.388 179.859M507.702 178.91H506.703L506.388 179.859M507.702 178.91H579.351M507.702 178.91V181.673H579.351V178.91M580.665 179.859L579.351 180.292V178.91M580.665 179.859L580.352 178.91H579.351M580.665 179.859L644.397 372.777M580.665 179.859L578.041 180.725L641.77 373.644L644.397 372.777M643.084 374.592V373.21L644.397 372.777M643.084 374.592H644.994L644.397 372.777M643.084 374.592H586.517M643.084 374.592V371.829H586.517V374.592M585.192 373.608L586.517 373.21V374.592M585.192 373.608L585.491 374.592H586.517M585.192 373.608L574.069 336.682L576.716 335.886M585.192 373.608L587.841 372.813L576.716 335.886M576.716 335.886L575.394 336.284V334.902M576.716 335.886L576.42 334.902H575.394M575.394 334.902H511.662M575.394 334.902V337.665H511.662V334.902M511.662 334.902V336.284L510.337 335.886M511.662 334.902H510.633L510.337 335.886M522.218 296.699L523.542 297.099V298.481M522.218 296.699L521.678 298.481H523.542M522.218 296.699L541.448 233.021M522.218 296.699L524.864 297.497L544.098 233.819L541.448 233.021M523.542 298.481H563.514M523.542 298.481V295.718H563.514V298.481M563.514 298.481V297.099L564.838 296.699M563.514 298.481H565.375L564.838 296.699M564.838 296.699L545.605 233.021M564.838 296.699L562.189 297.497L542.958 233.819L545.605 233.021M545.605 233.021L544.283 233.42V232.038M545.605 233.021L545.309 232.038H544.283M544.283 232.038H542.773M544.283 232.038V234.801H542.773V232.038M542.773 232.038V233.42L541.448 233.021M542.773 232.038H541.747L541.448 233.021"
                            stroke="white" stroke-width="3" />
                        <path class="letter" id="Vector_2"
                            d="M830.118 180.292H828.735V178.91M830.118 180.292V178.91H828.735M830.118 180.292V373.21M830.118 180.292H827.353V373.21H830.118M828.735 178.91V181.673H776.319V178.91M828.735 178.91H776.319M828.735 374.592V373.21H830.118M828.735 374.592H830.118V373.21M828.735 374.592H784.992M828.735 374.592V371.829H784.992V374.592M783.852 373.992L784.992 373.21V374.592M783.852 373.992L784.264 374.592H784.992M783.852 373.992L714.089 272.636L716.368 271.07M783.852 373.992L786.131 372.429L716.368 271.07M716.368 271.07L715.228 271.853V270.471M716.368 271.07L715.955 270.471H715.228M715.228 270.471H714.097M715.228 270.471V273.234H714.097V270.471M714.097 270.471V271.853H712.714M714.097 270.471H712.714V271.853M712.714 271.853V373.21H715.48M712.714 271.853H715.48V373.21M714.097 374.592V373.21H715.48M714.097 374.592H715.48V373.21M714.097 374.592H661.678M714.097 374.592V371.829H661.678V374.592M660.296 373.21H661.678V374.592M660.296 373.21V374.592H661.678M660.296 373.21V180.292M660.296 373.21H663.061V180.292H660.296M661.678 178.91V180.292H660.296M661.678 178.91H660.296V180.292M661.678 178.91H706.177M661.678 178.91V181.673H706.177V178.91M707.322 179.516L706.177 180.292V178.91M707.322 179.516L706.91 178.91H706.177M707.322 179.516L775.954 280.497L773.667 282.049M707.322 179.516L705.035 181.068L773.667 282.049M773.667 282.049L774.809 281.273V282.654M773.667 282.049L774.077 282.654H774.809M774.809 282.654H776.319M774.809 282.654V279.891H776.319V282.654M776.319 282.654V281.273H777.702M776.319 282.654H777.702V281.273M777.702 281.273V180.292H774.937M777.702 281.273H774.937V180.292M776.319 178.91V180.292H774.937M776.319 178.91H774.937V180.292"
                            stroke="white" stroke-width="3" />
                    </g>
                </g>
                <g id="meteor">
                    <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="-45" y="-283" width="1027"
                        height="1065">
                        <path id="Rectangle 10"
                            d="M931.999 -29.5L980.708 16.7238L260.135 504.305C260.135 504.305 113.281 635.145 29.2775 551.149C-54.7264 467.153 65.1568 365.781 65.1568 365.781L577.194 -3.21221L931.999 -29.5Z"
                            fill="#C4C4C4" />
                    </mask>
                    <g mask="url(#mask0)">
                        <g id="meteor_2" filter="url(#filter0_d)">
                            <path
                                d="M939.086 3.76318C522.889 3.76318 -74.5002 394.124 52.7653 524.618C180.031 655.113 612.755 3.76318 939.086 3.76318Z"
                                fill="url(#paint1_linear)" />
                        </g>
                    </g>
                </g>
                <g id="no">
                    <path class="letter" id="Vector_3"
                        d="M212.687 373.211V180.292H160.269V281.273H158.761L90.1279 180.292H45.6296V373.211H98.047V271.853H99.1784L168.943 373.211H212.687Z"
                        fill="white" />
                    <path class="letter" id="Vector_4" fill-rule="evenodd" clip-rule="evenodd"
                        d="M424.524 276.751C424.524 298.229 420.346 316.345 411.986 331.103C403.629 345.8 392.346 356.947 378.142 364.545C363.936 372.08 348.099 375.849 330.627 375.849C313.028 375.849 297.126 372.05 282.923 364.451C268.781 356.789 257.531 345.609 249.172 330.915C249.172 330.915 237.514 316.503 237.5 276.751C237.486 236.999 249.172 222.493 249.172 222.493C257.531 207.735 268.781 196.588 282.923 189.052C297.126 181.454 313.028 177.654 330.627 177.654C348.099 177.654 363.936 181.454 378.142 189.052C392.346 196.588 403.629 207.735 411.986 222.493C420.346 237.188 424.524 255.274 424.524 276.751ZM360.322 236.999C367.175 246.168 370.598 259.419 370.598 276.751C370.598 294.085 367.175 307.334 360.322 316.502C353.536 325.67 343.635 330.257 330.627 330.257C317.615 330.257 307.685 325.67 300.835 316.502C294.048 307.334 290.652 294.085 290.652 276.751C290.652 259.419 294.048 246.168 300.835 236.999C307.685 227.831 317.615 223.246 330.627 223.246C343.635 223.246 353.536 227.831 360.322 236.999Z"
                        fill="white" />
                </g>
            </g>
            <defs>
                <filter id="filter0_d" x="20.3321" y="0.763184" width="933.754" height="568.137"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                    <feOffset dy="12" />
                    <feGaussianBlur stdDeviation="7.5" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                </filter>
                <linearGradient id="paint1_linear" x1="939" y1="3.99995" x2="46.4998" y2="524.5"
                    gradientUnits="userSpaceOnUse">
                    <stop />
                    <stop offset="1" stop-color="#10F1FF" />
                </linearGradient>
            </defs>
        </svg>
        <svg style="z-index: -1;" class="absolute top-0 left-0 w-full h-full" preserveAspectRatio="none"
            viewBox="0 0 411 353" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0H411V231C411 231 356.5 282.5 205.5 282.5C54.5 282.5 0 353 0 353L0 0Z"
                fill="url(#paint0_linear)" />
            <defs>
                <linearGradient id="paint0_linear" x1="205.5" y1="0" x2="205.5" y2="384.5"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#144F70" />
                    <stop offset="1" stop-color="#07283A" stop-opacity="0.6" />
                </linearGradient>
            </defs>
        </svg>
        <canvas height="1080" width="1920" class="absolute top-0 left-0 w-full h-full z-0" id="stars"></canvas>
    </div>
    <!--
        SKILLS
    -->
    <div class="relative d-block h-auto container mx-auto lg:px-64 nav-trigger w-screen" id="skill">
        <div class="flex flex-row flex-wrap justify-around">
            <div class="relative skill p-5 rounded-t-2xl flex-grow">
                <div class="px-5 flex flex-row w-full">
                    <img src="./img/python.gif">
                    <h2 class="self-center mx-auto">Python</h2>
                </div>
                <button class="w-full h-14 rounded-b-2xl bg-green modal" targeted-modal="python">+</button>
            </div>
            <div class="relative skill p-5 rounded-t-2xl flex-grow">
                <div class="px-5 flex flex-row w-full">
                    <img src="./img/javascript.gif">
                    <h2 class="self-center mx-auto modal">Javascript</h2>
                </div>
                <button class="w-full h-14 rounded-b-2xl bg-orange modal" targeted-modal="javascript">+</button>
            </div>
            <div class="relative skill p-5 rounded-t-2xl flex-grow">
                <div class="px-5 flex flex-row w-full">
                    <img src="./img/java.gif">
                    <h2 class="self-center mx-auto">Java</h2>
                </div>
                <button class="w-full h-14 rounded-b-2xl bg-pink modal" targeted-modal="java">+</button>
            </div>
            <div class="relative skill p-5 rounded-t-2xl flex-grow">
                <div class="px-5 flex flex-row w-full">
                    <img src="./img/web.png">
                    <h2 class="self-center mx-auto">HTML/CSS</h2>
                </div>
                <button class="w-full h-14 rounded-b-2xl bg-blue-400 modal" targeted-modal="web">+</button>
            </div>
        </div>
    </div>
    <!--
        Navbar
    -->
    <div class="fixed bottom-0 left-1/2 transform -translate-x-1/2 h-16 bg-white w-16 lg:w-1/3 rounded-full shadow-xl text-center mb-5"
        style="z-index: 9999;" id="nav">
        <ul class="hidden lg:inline-flex w-full justify-around h-full items-center" id="navbar">
            <li><a href="#">Accueil</a></li>
            <li><a href="#skill">Compétences</a></li>
            <li><a href="#aboutme">A mon sujet</a></li>
            <li><a href="#funfact">Fun fact</a></li>
            <li><a href="#cv"
                    class="bg-purple-400 hover:bg-purple-600 transition text-white font-bold rounded-2xl px-3 py-2">CV</a>
            </li>
        </ul>
        <button class="lg:hidden cursor-pointer p-5 modal" targeted-modal="respmenu"><i
                class="lni lni-menu"></i></button>
    </div>
    <div class="lg:h-screen/2 w-screen absolute" style="z-index: -1;">
        <svg style="z-index: -1;" class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 411 270" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M-2 54L412 0V232.124C412 232.124 305.371 317.345 205 232.124C104.629 146.904 -2 200 -2 200V54Z"
                fill="#126D4D" />
        </svg>
    </div>
    <!--
        ABOUT ME
    -->
    <div class="d-block h-auto container mx-auto lg:px-64 nav-trigger" id="aboutme">
        <div class="flex flex-col lg:flex-row justify-between mt-40">
            <div class="about-me flex flex-col items-center w-full md:w-2/5 p-10 rounded-xl" data-scroll>
                <img class="rounded-full" src="img/pp.png">
                <h3 class="text-green-light font-bold text-3xl py-2 uppercase text-center">Interesse par l'I.A</h3>
                <p><i class="my-2 lni lni-envelope"></i> <a
                        href="mailto:noan.perrot@gmail.com">noan.perrot@gmail.com</a></p>
                <hr class="w-2/4 my-4">
                <p class="self-start py-2">
                    Passionné par la cybersécurité et l'intelligence artificelle, j'ai pour ambition de devenir
                    ingénieur ou chercheur dans ces domaines.
                </p>
                <p class="self-start">
                    Fortement motivé par les aspects créatifs d’un projet, je suis actuellement en alternance au sein de
                    l'entreprise <a href="https://www.apizee.com/">Apizee</a>.
                </p>
                <a href="https://www.linkedin.com/in/noan-perrot/"
                    class="btn mt-8 py-4 w-2/4 bg-blue-500 text-center text-white rounded-xl transition-all hover:bg-blue-800">
                    <i class="lni lni-linkedin-original"></i> Mon LinkedIn
                </a>
            </div>
            <div
                class="flex flex-col mx-12 lg:mx-0 lg:flex-row lg:w-1/4 lg:flex-col justify-around items-center mt-5 lg:mt-0">
                <div class="mood rounded-xl p-2 m-5 lg:m-0 self-start" data-scroll>
                    <i class="lni lni-infinite"></i>
                    <h3 class="text-green-light font-bold text-2xl lg:text-3xl py-2 uppercase">CURIEUX</h3>
                </div>
                <div class="mood rounded-xl p-2 m-5 lg:m-0 self-end" data-scroll>
                    <i class="lni lni-pyramids"></i>
                    <h3 class="text-green-light font-bold text-2xl lg:text-3xl py-2 uppercase">INVESTI</h3>
                </div>
                <div class="mood rounded-xl p-2 m-5 lg:m-0 self-start" data-scroll>
                    <i class="lni lni-ruler-pencil"></i>
                    <h3 class="text-green-light font-bold text-2xl lg:text-3xl py-2 uppercase">CREATIF</h3>
                </div>
            </div>
        </div>
        <!--
            ETUDES
        -->
        <div class="flex flex-col my-20 relative w-auto h-auto">
            <div class="flex flex-col mt-10">
                <div class="inline-flex items-center">
                    <img src="./img/logoiut.jpg" class="rounded-full w-16">
                    <div class="w-full ml-5">
                        <h4 class="text-2xl">D.U.T Informatique</h4>
                        <h5><i class="lni lni-pin"></i> <a href="https://iut-lannion.univ-rennes1.fr/"
                                class="text-green-light hover:underline">I.U.T de Lannion</a><i
                                class="ml-4 lni lni-calendar"></i> Année d'obtention prévu: 2022</h5>
                        <hr>
                    </div>
                </div>
                <p class="border-l-4 pl-12 ml-8 mt-2" id="self-description">Seconde année en
                    <b>alternance</b><br>Spécialité: <b>Génie Logiciel</b></p>
            </div>

            <div class="flex flex-col mt-4">
                <div class="inline-flex items-center">
                    <img src="./img/logofld.jpg" class="rounded-full w-16">
                    <div class="w-full ml-5">
                        <h4 class="text-2xl">Bacalauréat Scientifique</h4>
                        <h5><i class="lni lni-pin"></i> <a href="https://lycee-ledantec.fr/"
                                class="text-green-light hover:underline">Lycée Félix Le Dantec</a><i
                                class="ml-4 lni lni-calendar"></i> Année d'obtention: 2020</h5>
                        <hr>
                    </div>
                </div>
                <p class="pl-12 ml-8 mt-2">Spécialité: <b>Sciences de l'Ingénieur</b><br>Option: <b>Sciences de
                        l'Informatique et du Numérique</b></p>
            </div>
        </div>
    </div>
    <svg style="z-index: -1;" class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 410 126" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
            d="M0 51.5008L205 25.7504L410 0V126C410 126 355.245 70.7004 219 50.8157C161.295 42.3939 90.5 46 0 51.5008Z"
            fill="#248DC8" />
    </svg>
    <!--
        FUN FACTS
    -->
    <div class="container mx-auto h-auto lg:px-64 nav-trigger" id="funfact">
        <div class="flex flex-col transform lg:-translate-y-1/2">
            <div class="stat mb-14">
                <h4 class="text-9xl mb-5">+999</h4>
                <p class="text-4xl">Tasses de cafés bu</p>
            </div>
            <div class="stat mb-14 self-end">
                <h4 class="text-9xl mb-5">{{ $nb_repo }}</h4>
                <p class="text-4xl"><b>repository</b> sur GitLab</p>
            </div>
        </div>
        <div class="grid grid-rows-2 gap-28 lg:grid-cols-2">
            <div
                class="spotify-albums gap-2 grid grid-flow-col grid-cols-2 grid-rows-2 transform -rotate-45 -translate-x-24 lg:-translate-x-14 lg:-translate-x-0">
                <img class="transform -translate-y-16"
                    src="https://i.scdn.co/image/be9d9ffb781917a37eec1c76c8ca9b2f9acfc590">
                <img class="transform -translate-y-16"
                    src="https://i.scdn.co/image/ab67616d00001e0224edb22d068eb245a924b7f2">
                <img src="https://i.scdn.co/image/f5ee560658111388ece8fd33d51e67533649c7d9">
                <img src="https://i.scdn.co/image/ab67616100005174745e09d713e0bfe2df2e2a35">
            </div>
            <div class="spotify-top flex flex-col justify-between items-center">
                <div class="w-full flex flex-row justify-between items-center">
                    <div class="p-5 bg-yellow-400 flex flex-row justify-between flex-grow rounded-2xl">
                        <p class="text-2xl">#1</p>
                        <p class="text-2xl font-bold">VALD</p>
                    </div>
                </div>
                <div class="w-full flex flex-row justify-between items-center">
                    <div class="p-4 bg-blue-300 flex flex-row justify-between flex-grow rounded-2xl">
                        <p class="text-2xl">#2</p>
                        <p class="text-2xl font-bold">Toby Fox</p>
                    </div>
                </div>
                <div class="w-full flex flex-row justify-between items-center">
                    <div class="p-3 bg-purple-300 flex flex-row justify-between flex-grow rounded-2xl">
                        <p class="text-2xl">#3</p>
                        <p class="text-2xl font-bold">Lena Raine</p>
                    </div>
                </div>
                <div class="w-full flex flex-row justify-between items-center">
                    <div class="p-3 bg-red-200 flex flex-row justify-between flex-grow rounded-2xl">
                        <p class="text-2xl">#4</p>
                        <p class="text-2xl font-bold">Carpenter Brut</p>
                    </div>
                </div>
                <a href="https://open.spotify.com/user/naoukill"
                    class="px-8 py-4 text-white transition-all bg-green-400 hover:bg-green-600 rounded-full"><i
                        class="lni lni-spotify-original"></i> Voir mon profil</a>
            </div>
        </div>
    </div>
    <!--
        CV
    -->
    <div class="relative w-full h-full nav-trigger" id="cv">
        <svg style="z-index: -1;" class="w-full h-screen bg-green-light lg:bg-transparent" preserveAspectRatio="none"
            viewBox="0 0 1920 1315" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M977.492 106.817C1078.02 88.8903 1172.35 0.579116 1268.31 30.2656C1364.47 60.016 1361.22 173.767 1416.47 242.626C1459.5 296.257 1502.31 349.433 1559.93 393.732C1642.38 457.126 1767.28 483.878 1829.59 560.262C1894.75 640.155 1926.22 739.082 1918.98 833.92C1911.54 931.429 1877.29 1037.82 1787.97 1105.47C1696.76 1174.56 1550.01 1165.54 1432.51 1202.39C1331.91 1233.94 1247.15 1296.25 1140.05 1308.7C1033.65 1321.06 914.556 1318.16 823.342 1273.21C729.222 1226.82 734.044 1098.35 634.547 1059.58C520.505 1015.14 365.671 1103.53 256.333 1052.25C160.721 1007.42 156.768 897.555 115.362 816.104C70.9986 728.835 -12.6844 644.559 1.62523 551.212C15.9942 457.479 148.483 401.934 192.32 314.08C240.588 217.348 150.556 53.1449 271.097 11.1699C420.154 -40.7354 572.919 103.886 733.501 125.629C814.733 136.628 897.1 121.152 977.492 106.817Z"
                fill="#28DB9B" />
        </svg>
        <div class="absolute top-0 left-0 lg:top-24 lg:left-32 mt-32 lg:mt-0 lg:mt-0 container lg:px-64 text-white"
            id="nicetextbro">
            <p id="envre" class=""><b>Interessé ?</b></p>
            <a id="iremoi" class="px-5 bg-pink-400 rounded-2xl italic float-right underline" href="./cv.pdf"
                download="NoanPerrotCV.pdf">>> Voici mon CV <<</a>
        </div>
    </div>
    <!--
        FOOTER
    -->
    <div class="relative h-25 w-full bg-black text-white text-center p-10 nav-trigger" id="footer">
        <p>Créé avec le ❤️, les ressources et le code sont open-source. <a href="https://gitlab.com/skewram/portfolio/-/blob/main/LICENSE">Plus d'informations ici</a></p>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script
        src="https://polyfill.io/v3/polyfill.min.js?features=Document%2CWindow%2CArray.prototype.forEach%2Cdefault%2Ces6%2C%7Eviewport%2C%7Ehtml5-elements%2Csmoothscroll%2Cscroll%2CrequestAnimationFrame%2Cdocument%2CWebAnimations%2CElement">
    </script>
    <script>
        window.addEventListener('load', () => {
            document.getElementById('loader').animate([{
                    opacity: 1
                },
                {
                    opacity: 0
                }
            ], {
                duration: 1000
            });
            setTimeout(() => {
                document.getElementById('loader').remove()
            }, 1000)
        });
    </script>
</body>

</html>
