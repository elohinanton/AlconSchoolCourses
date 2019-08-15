<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="media/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

</head>
<body>
    <div id="app">
    
        <header>

            <div>
                <img :src="siteLogo" alt="">
                <h3>{{siteName}}</h3>
            </div>

            <div>
                <nav>
                    <ul>
                        <li>
                            <input type="button" value="Каталог">                            
                        </li>
                        <li>
                            <input type="button" value="О Нас">
                        </li>
                        <li>
                            <input type="button" value="Корзина">
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>

            <div class="parallax">
                <div class="parallax__image">

                    <div class="image__centralContainer">
                        <h1>У нас Вы можете купить самое вкусное печенье</h1>
                    </div>

                </div>
                
            </div>

            <div class="payload">

                <article class="fullPayload">
                    <section class="payloadBlock">
                        <div>
                            <img src="https://img.povar.ru/main/87/47/56/82/pechene_na_maioneze-75625.jpg" alt="">
                        </div>
                        <div class="payloadBlock__href">
                            <h4>Печеньки Французкие</h4>
                            <p>Очень вкусное с ароматом, напоминающим булочки из французкой забегаловки</p>
                        </div>
                    </section>
                    <section class="payloadBlock">
                        <div>
                            
                        </div>
                    </section>
                    <section class="payloadBlock">
                        <div>
        
                        </div>
                    </section>
                    <section class="payloadBlock">
                        <div>
                            
                        </div>
                    </section>
                    <section class="payloadBlock">
                        <div>
        
                        </div>
                    </section>
                    <section class="payloadBlock">
                        <div>
        
                        </div>
                    </section>
                    <section class="payloadBlock">
                        <div>
        
                        </div>
                    </section>
                    <section class="payloadBlock">
                        <div>
                            
                        </div>
                    </section>
                    <section class="payloadBlock">
                        <div>
        
                        </div>
                    </section>
                </article>

            </div>

            <article>

            </article>

        </main>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="media/js/index.js"></script>
</body>
</html>