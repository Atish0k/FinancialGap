@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center welcome-section">
        <h1 class="display-4 fw-normal welcome-heading">Добро пожаловать!</h1>
        <p class="welcome-text">Мы рады приветствовать вас на нашем сайте и в нашей школе, где каждый найдет для себя полезные знания и навыки в области финансов. Наша миссия — сделать финансовую грамотность доступной для всех, помочь вам уверенно управлять своими деньгами и принимать обоснованные финансовые решения.</p>
    </div>

    <main>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm bg-dark text-white">
                    <img src="{{ asset('images/stock-1863880_1280.jpg') }}" class="bd-placeholder-img card-img-top" alt="Thumbnail" width="100%" height="225">
                    <div class="card-body" style="background-color: #2C3E50;">
                        <h2>Что такое акции?</h2>
                        <p class="card-text">Акции представляют собой долевые ценные бумаги, которые дают владельцам право на долю в капитале компании.
                            Инвестируя в акции, вы становитесь совладельцем компании и можете получать доход в виде дивидендов и роста стоимости акций</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://fincult.info/article/chto-takoe-aktsii-i-kak-na-nikh-zarabotat/" class="btn btn-sm btn-primary text-dark" role="button">Читать</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm bg-dark text-white">
                    <img src="{{ asset('images/5e6d52e81ebad509855011.jpg') }}" class="bd-placeholder-img card-img-top" alt="Thumbnail" width="100%" height="225">
                    <div class="card-body" style="background-color: #2C3E50;">
                        <h2>Как правильно спланировать отпуск</h2>
                        <p class="card-text">Скучно на работе? Наступило время планировать идеальный отпуск! С правильным подходом, вы сможете провести незабываемое время, забыть о
                            повседневных заботах и зарядиться энергией.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://fincult.info/article/kak-pravilno-splanirovat-otpusk/" class="btn btn-sm btn-primary text-dark" role="button">Читать</a>
                            </div>
                            <small class="text-body-secondary"></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm bg-dark text-white">
                    <img src="{{ asset('images/43518.jpg') }}" class="bd-placeholder-img card-img-top" alt="Thumbnail" width="100%" height="225">
                    <div class="card-body" style="background-color: #2C3E50;">
                        <h2>10 финансовых привычек до Нового года</h2>
                        <p class="card-text">Хотите взять контроль над своими финансами и улучшить свое финансовое благополучие? Начните с простых, но эффективных привычек,
                            которые помогут вам достичь финансового успеха.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://fincult.info/article/10-finansovykh-privychek-dlya-novogo-goda/" class="btn btn-sm btn-primary text-dark" role="button">Читать</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm bg-dark text-white">
                    <img src="{{ asset('images/1671125631_www-funnyart-club-p-kartinki-dlya-bankovskikh-kart-krasivo-25.jpg') }}" class="bd-placeholder-img card-img-top" alt="Thumbnail" width="100%" height="225">
                    <div class="card-body" style="background-color: #2C3E50;">
                        <h2>Как заставить банковскую карту работать на вас</h2>
                        <p class="card-text">Пока вы работаете за деньги, деньги должны работать на вас. К счастью, с помощью банковской карты можно не только тратить, но и зарабатывать. Даже кредитка,
                            если действовать грамотно, принесет вам доход. Как этого добиться? Раскрываем вам все карты.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://fincult.info/article/kak-zastavit-bankovskuyu-kartu-rabotat-na-vas/" class="btn btn-sm btn-primary text-dark" role="button">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm bg-dark text-white">
                    <img src="{{ asset('images/scale_1200.jfif') }}" class="bd-placeholder-img card-img-top" alt="Thumbnail" width="100%" height="225">
                    <div class="card-body" style="background-color: #2C3E50;">
                        <h2>Как получить компенсацию за советский вклад</h2>
                        <p class="card-text">Разбирая дома старые документы, вы наткнулись на сберкнижку, которую открыли в 1989 году.
                            На ней остались деньги. Вы слышали, что за советские вклады можно получить компенсацию. Рассказываем, как это сделать.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="https://fincult.info/article/kak-poluchit-kompensatsiyu-za-sovetskiy-vklad/" class="btn btn-sm btn-primary text-dark" role="button">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
