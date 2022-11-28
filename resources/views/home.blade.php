<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sabay news</title>
    @vite(['resources/sass/custom.scss', 'resources/js/app.js'])
</head>

<body>
    <header class="bg-dark">
        <div class="container">
            <div class="d-flex justify-content-center justify-content-md-between align-items-center just">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('logo.png') }}" alt="logo" class="logo">
                </a>
                <div class="ads-top d-none d-md-block">
                    <img src="https://ads.sabay.com/images/0e8271a9cc5813acec0e859dee108ba2.jpg" alt="ads">
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-danger py-0">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">កម្សាន្ត</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">បច្ចេកវិទ្យា</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ជីវិតនិងសង្គម</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">កីឡា</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ផ្លូវទៅស្រុក</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-uppercase fw-bold">auto talk</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-uppercase fw-bold">world cup</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-uppercase fw-bold">Slamball</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-uppercase fw-bold">podcast</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-uppercase fw-bold" href="#">deals</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->

    <!-- Recent Post -->
    <section class="recent-post">
        <div class="container">
            <div class="row px-0">
                <div class="col-md-9 px-0">
                    <div class="d-flex border-1 border-dark">
                        <a href="#" class="card rounded-0 border-0" style="background-image: url('https://bit.ly/3ANnLDQ');">
                            <div class="category" style="--category-color: #e85682;">
                                កម្សាន្ត
                            </div>
                            <div class="card-body position-absolute bottom-0 start-0 text-white">
                                <div class="content">
                                    <h5>សេចក្ដីប្រកាសចេញផ្សាយកាលពីថ្ងៃមិញ ពុំមែនជារបៀបវារៈផ្លូវការរបស់ពិធីបិទកីឡាជាតិលើកទី ៣ ទេ</h5>
                                    <p class="card-text">នៅថ្ងៃនេះ មានការបែកធ្លាយរបៀបវារៈមិនត្រឹមត្រូវជាផ្លូវការ ពិធីបិទកីឡាជាតិលើកទី ៣ ដែលនឹងត្រូវធ្វើឡើងនៅ ថ្ងៃទី ៣០ វិច្ឆិកា ឆ្នាំ ២០២២ នៅពហុកីឡាដ្ឋានជាតិមរតកតេជោ ដែលការសម្តែងមួយចំនួនត្រូវបានគេលុបចេញ ឬមិនទាន់ដាក់ចូល មុនទេបង្ហោះជាសាធារណៈ។</p>
                                </div>
                                <p class="mb-0">ម្សិលមិញ ម៉ោង 18:24</p>
                            </div>
                        </a>
                        <a href="#" class="card rounded-0 border-0" style="background-image: url('https://bit.ly/3ORDLKV');">
                            <div class="category" style="--category-color: #eca62f;">
                                ជីវិតនិងសង្គម
                            </div>
                            <div class="card-body position-absolute bottom-0 start-0 text-white">
                                <div class="content">
                                    <h5>ចេញ​រកស៊ី​ហើយ តែ​ចង់​ដឹង​ខ្លួន​មាន​ភាព​ជា​ម្ចាស់​អាជីវកម្ម ឬ​សហគ្រិន តាម​ដាន​ទាំង​អស់​គ្នា!</h5>
                                    <p class="card-text">និន្នាការ​នៃ​ការ​ចេញ​រកស៊ី​ខ្លួន​ឯង ធ្វើ​ឲ្យ​មាន​យុវជន​ជា​ច្រើន​បាន​ហក់​ចូល​មក​ប្រឡូក​ជំនួញ​ដោយ​បង្កើត​អាជីវកម្ម​ខ្លួន​ឯង ដែល​ភាគ​ច្រើន ជា​ប្រភេទ​សហគ្រាស​ធុនតូច និង​មធ្យម(SME)។ ត្បិត​យ៉ាង​នេះ នៅ​ក្នុង​នៅ​មាន​លាយឡំ​រវាង ម្ចាស់​អាជីវកម្ម និង​សហគ្រិន។</p>
                                </div>
                                <p class="mb-0">ម្សិលមិញ ម៉ោង 18:24</p>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex">
                        <a href="#" class="card rounded-0 border-0" style="background-image: url('https://bit.ly/3id6ddU');">
                            <div class="category" style="--category-color: #5d91f8;">
                                កីឡា
                            </div>
                            <div class="card-body position-absolute bottom-0 start-0 text-white">
                                <div class="content">
                                    <h5>ស្មាត់​ យុន​ ប្រាប់​មូលហេតុ​លោត​វាយ​សេវា​មិន​សូវ​បាន​ល្អ​ពេល​ប៉ះ​ គោព្រៃ​កណ្ដាល​</h5>
                                    <p class="card-text">តារា​បាល់ទះ​ល្បី​ឈ្មោះ​គ្រប់​តារាង​ ស្មាត់​ យុន​ ថា​មូល​ហេតុ​លោត​វាយ​សេវា​មិន​សូវ​បាន​ល្អ​ ឬ​អស់ៗ​ពេល​ប៉ះ​ក្រុម​គោព្រៃ​កណ្ដាល​ ដោយ​សារ​តែ​មិន​ស្និត​ជា​មួយ​បាល់ ​ព្រោះ​ច្បាប់​ប្រកួត​តម្រូវ​ឲ្យ​វាយ​វិល​ជុំ។​</p>
                                </div>
                                <p class="mb-0">ម្សិលមិញ ម៉ោង 18:24</p>
                            </div>
                        </a>
                        <a href="#" class="card rounded-0 border-0" style="background-image: url('https://bit.ly/3U9yK17');">
                            <div class="category" style="--category-color: #5d91f8;">
                                កីឡា
                            </div>
                            <div class="card-body position-absolute bottom-0 start-0 text-white">
                                <div class="content">
                                    <h5>កូរ៉េខាងត្បូង ទោះមិនអាចឈ្នះដូចជប៉ុន តែក្រឡុកអ៊ុយរ៉ាហ្គាយមិនអន់ដែរនៅ World Cup
                                        យប់មិញ</h5>
                                    <p class="card-text">កូរ៉េខាងត្បូង ក្លាយជាក្រុមមកពីអាស៊ីទីបី
                                        ដែលបង្ហាញទម្រង់លេងយ៉ាងល្អទល់នឹងក្រុមយក្សមកពីឡាទីនគឺ
                                        អ៊ុយរ៉ាហ្គាយដោយបញ្ចប់ក្នុងលទ្ធផល ០-០ ស្មើគ្នា។ មុននេះអារ៉ាប៊ី សាអូឌីត
                                        បានយកឈ្នះអាហ្សង់ទីន ហើយជប៉ុនបានផ្ដួលអាល្លឺម៉ង់យ៉ាងគួរឲ្យភ្ញាក់ផ្អើល។</p>
                                </div>
                                <p class="mb-0">ម្សិលមិញ ម៉ោង 18:24</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 px-0">
                    <img src="https://bit.ly/3tYIikU" alt="ads" class="ads-recent img-fluid bg-secondary">
                    <img src="https://bit.ly/3F5zFvn" alt="ads" class="ads-recent img-fluid bg-secondary">
                </div>
            </div>
        </div>
    </section>
    <!-- End Recent Post -->

    <!-- Video Last -->
    <section class="lastest-items my-2">
        <div class="container">
            <div class="section-header border-bottom border-3 border-danger">
                <a href="#">វីដេអូ <i class="bi bi-caret-right"></i></a>
            </div>
            <div class="items card rounded-0">  
                <div class="item-top">
                    <div class="card float-start rounded-0 border-0 shadow-none">
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="img-thumbnail p-0 rounded-0">
                                <img src="https://bit.ly/3id6ddU" alt="thumbnail">
                            </div>
                            <div class="card-body p-0 mt-2">
                                <h5>ស្មាត់​ យុន​ ប្រាប់​មូលហេតុ​លោត​វាយ​សេវា​មិន​សូវ​បាន​ល្អ​ពេល​ប៉ះ​ គោព្រៃ​កណ្ដាល​</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card float-start rounded-0 border-0 shadow-none">
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="img-thumbnail p-0 rounded-0">
                                <img src="https://bit.ly/3VqMyW2" alt="thumbnail">
                            </div>
                            <div class="card-body p-0 mt-2">
                                <h5>ស្ដេចអារ៉ាប៊ី ឲ្យពលរដ្ឋឈប់សម្រាកមួយប្រទេស​ ក្រោយជម្រើសជាតិយកឈ្នះអាហ្សង់ទីនផ្អើលពិភពលោក</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card float-start rounded-0 border-0 shadow-none">
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="img-thumbnail p-0 rounded-0">
                                <img src="https://bit.ly/3Vrr4IH" alt="thumbnail">
                            </div>
                            <div class="card-body p-0 mt-2">
                                <h5>២គ្រាប់ នៅ៦នាទីចុងម៉ោង ជួយហូឡង់ ឈ្នះសេណេហ្គាល់ ក្នុងប្រកួតដ៏តានតឹងសម្រាប់ពូល A</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item-body"></div>
            </div>

        </div>
    </section>
    <!--End Video Last -->
</body>

</html>
