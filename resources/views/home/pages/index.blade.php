@extends('home.layouts.master')

@section('content')
    <div class="content">
        <!-- open sidebar menu -->
        <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
            {{-- <i class="fas fa-align-left"></i>  --}}
            <i class="fas fa-bars"></i>
        </a>

        @include('home.sections.language')

        <div class="to-top rounded-top-btn">
            <a href="#" role="button">
                <i class="fas fa-chevron-circle-up"></i>
            </a>
        </div>


        <!-- Top content -->
        <div class="top-content section-container" id="top-content">
            <div class="container">
                <div class="row">
                    <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h1 class="wow fadeIn page-header-logo">
                            <img class="img-fluid logo-text" src="{{ asset('images/7.png') }}" alt="">

                            {{-- <strong> | بازرگانی اسپیدکار</strong> --}}
                        </h1>

                        {{-- <div class="buttons wow fadeInUp">
                            <a class="btn btn-primary btn-customized scroll-link" href="#" role="button">
                                خدمات <i class="fas fa-briefcase"></i>
                            </a>
                            <a class="btn btn-primary btn-customized-2 scroll-link" href="#" role="button">
                                محصولات <i class="fas fa-tags"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 1 -->
        <div class="section-1-container section-container services-icons" id="section-1">
            <div class="container">
                <div class="row">
                    <div class="col section-1 section-description wow fadeIn">
                        <h2 class="text-center">خدمات ما</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 section-1-box wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-1-box-icon">
                                    <a href="{{ route('home.pages.services') }}/#serviceFirst"><i
                                            class="fas fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="{{ route('home.pages.services') }}/#serviceFirst" class="text-center">خدمات خرید و
                                    تامین کالا</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 section-1-box wow fadeInDown">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-1-box-icon">
                                    <a href="{{ route('home.pages.services') }}/#serviceSecond"><i
                                            class="fas fa-money-check-alt"></i></a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="{{ route('home.pages.services') }}/#serviceSecond" class="text-center">خدمات ارزی
                                    بازرگانی</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 section-1-box wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-1-box-icon">
                                    <a href="{{ route('home.pages.services') }}/#serviceThird"><i
                                            class="fas fa-shipping-fast"></i></a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="{{ route('home.pages.services') }}/#serviceThird" class="text-center">خدمات حمل بین
                                    المللی</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 section-1-box wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-1-box-icon">
                                    <a href="{{ route('home.pages.services') }}/#serviceFour"><i
                                            class="fas fa-truck-loading"></i></a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="{{ route('home.pages.services') }}/#serviceFour" class="text-center">خدمات
                                    گمرکی</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="section-2-container section-container section-container-gray-bg" id="section-2">
            <div class="container">
                <div class="row">
                    <div class="col section-2 section-description wow fadeIn"></div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 section-2-box wow fadeInLeft">
                        <h2>درباره ما</h2>
                        <div class="divider-1 wow fadeInUp mb-3"><span></span></div>
                        <p class="medium-paragraph">
                            شرکت بازرگانی اسپیدکار، با در اختیار داشتن گروه بازرگانی و مهندسی در زمینه تامین، واردات و عرضه
                            آلیاژ ها صنعتی با پشتوانه بیش از 10 سال تجربه فعالیت بازرگانی و خدمات مهندسی سطح، آماده ارایه
                            تجهیزات، مواد اولیه و آلیاژ های صنعتی تخصصی ضد سایش و ضد خوردگی در زمینه پوشش های حرارتی،
                            جوشکاری و پوشش دهی مورد نیاز صنایع کشور می باشد.
                            هدف این شرکت کمک به انتخاب علمی و دسترسی به آلیاژ های تخصصی و مهندسی مطابق با استاندارد های روز
                            دنیا در داخل کشور می باشد.
                        </p>
                        <p class="medium-paragraph">
                            شرکت بازرگانی اسپیدکار با نیازسنجی و شناسایی زمینه‌های مساعد و قابل اجرا جهت فعالیت در بخش‌ها و
                            حوزه‌های مختلف صنعتی و تولیدی ایران، قدم در عرصه صنعت فلزات و آلیاژ های نوین در این کشور گذاشته
                            و با بکارگیری نیروهایی جوان، متخصص و کارامد همراه با تجاربی مناسب در بسیاری از زمینه‌های اجرایی؛
                            تلاش دارد نقشی موثر و بسزا در بهبود، بروزرسانی و توسعه صنعت نوآور و به روز درکشور ایفا نماید.
                        </p>
                        <p class="medium-paragraph">واحد بازرگانی اسپیدکار با توجه به داشتن ارتباطات گستره با متخصصین رشته
                            متالورژی و مکانیک در خارج
                            از کشور و اخذ نمایندگی های فروش و خدمات پس از فروش از چندین برند مطرح اروپایی و آسیایی و همکاری
                            گسترده با تامین کنندگان معتبر خارجی در بخش مواد اولیه و ماشین الات صنعت پوشش دهی، امکان تأمین
                            طیف وسیعی از قطعات، تجهیزات و ماشین‌آلات مورد نیاز در پروژه‌های صنعتی شرکت‌ها و صنایع کشور و
                            ارائه خدمات پس از فروش مناسب آنها را در کوتاه‌ترین زمان ممکن و تحت استانداردهای بین‌المللی روز
                            دنیا را دارا می‌باشد.</p>

                    </div>
                    <div class="col-md-4 col-sm-12 section-2-box wow fadeInUp">
                        <img class="h-100" src="{{ asset('images/about-us.jpg') }}" alt="about-us" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="section-3-container section-container" id="section-3">
            <div class="container">
                <div class="row">
                    <div class="col section-3 section-description wow fadeIn">
                        <h2 class="text-center">محصولات</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>

                <div class="row index-products wow fadeIn">
                    @foreach ($products as $product)
                        <div id="product{{ $product->id }}"
                            onclick="location.href='{{ route('showProduct', ['product' => $product->id]) }}'"
                            class="col-md-3 picture-item wow fadeInUp" data-groups='["{{ $product->category_id }}"]'
                            data-date-created="2015-10-20" data-title="Central Park">
                            <div id="product" class="skill-card">
                                <header class="skill-card__header"><img class="skill-card__icon"
                                        src="{{ asset(env('PRODUCT_IMAGE_PATH') . $product->primary_image) }}"
                                        alt="HTML5 Logo" /></header>
                                <section class="skill-card__body">
                                    <h2 class="skill-card__title">{{ $product->name }}</h2><span
                                        class="skill-card__duration">{{ $product->description }}</span>
                                    <ul class="skill-card__knowledge">
                                        @foreach ($product->attributes as $value)
                                            <li>{{ $value->name }}</li>
                                        @endforeach
                                        <a href="{{ route('showProduct', ['product' => $product->id]) }}">نمایش محصول</a>
                                    </ul>
                                </section>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="row">
                    <div class="col section-bottom-button wow fadeInUp">
                        <a class="btn btn-primary btn-customized-2" href="{{ route('product') }}" role="button">
                            مشاهده همه <i class="fas fa-sync"></i>
                        </a>
                    </div>
                </div>


            </div>
        </div>

        <!-- Section 4 -->
        <div class="section-4-container section-container section-container-image-bg" id="section-4">
            <div class="container">
                <div class="row">
                    <div class="col section-4 section-description wow fadeInLeftBig">
                        <h2>اسپیدکار؟</h2>
                        <p class="text-center">
                            اسپیدکار یا سپیدکار در متون فارسی شخصی را گویند که ظروف مس را سفید کند و او را قلعی گر و سفیدگر
                            نیز گویند.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col section-bottom-button wow fadeInUp">
                        <a class="btn btn-primary btn-customized-2 " href="{{ route('home.pages.contact-us') }}" role="button">
                            تماس با ما <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 5 -->
        <div class="section-5-container section-container" id="section-5">
            <div class="container">
                <div class="row">
                    <div class="col section-5 section-description wow fadeIn">
                        <h2 class="text-center">وبلاگ</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>

                    </div>
                </div>
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-md-3 section-5-box wow fadeInUp"
                            onclick="location.href='{{ route('blogContent', ['blog' => $blog->id]) }}'">
                            <div class="section-5-box-image">
                                <img src="{{ url(env('BLOG_IMAGE_PATH') . $blog->image) }}" alt="portfolio-1" />
                            </div>
                            <h3>
                                <a href="#">{{ $blog->title }}</a>
                                <i class="fas fa-angle-left"></i>
                            </h3>
                            <div class="section-5-box-date">
                                <i class="far fa-calendar"></i>{{ $blog->updated_at }}
                            </div>
                            <p class="blog-text">
                                {!! $blog->text !!}
                            </p>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col section-bottom-button wow fadeInUp">
                        <a class="btn btn-primary btn-customized-2" href="{{ route('home.pages.blog') }}" role="button">
                            مشاهده همه <i class="fas fa-sync"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 6 -->
        {{-- <div class="section-6-container section-container section-container-image-bg" id="section-6">
            <div class="container">
                <div class="row">
                    <div class="col section-6 section-description wow fadeIn">
                        <h2 class="text-center">تماس با ما</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                        <p class="text-center">
                            افکارتان را با ما در میان بگذارید
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 section-6-box wow fadeInUp">
                        <h3>با ایمیل</h3>
                        <div class="section-6-form">
                            <form role="form" action="assets/contact.php" method="post">
                                <div class="form-group">
                                    <label class="sr-only" for="contact-email">ایمیل</label>
                                    <input type="text" name="email" placeholder="ایمیل..."
                                        class="contact-email form-control" id="contact-email" />
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="contact-subject">موضوع</label>
                                    <input type="text" name="subject" placeholder="موضوع..."
                                        class="contact-subject form-control" id="contact-subject" />
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="contact-message">پیام</label>
                                    <textarea name="message" placeholder="پیام..." class="contact-message form-control" id="contact-message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-customized">
                                    ارسال پیام <i class="fas fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 section-6-box wow fadeInDown">
                        <h3 class="text-right">راه های ارتباطی</h3>
                        <div class="section-6-social">
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-telegram"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fas fa-video"></i></a>
                            <a href="#"><i class="fas fa-phone"></i></a>
                            <a href="#"><i class="fa fa-envelope"></i></a>
                        </div>
                        <div class="address-tel">
                            <h4 class="text-right">آدرس شرکت</h4>
                            <p>دفتر مرکزی و انبار : تهران، بزرگراه فتح، خیابان فتح یازدهم، گلبن یازدهم غربی، پلاک 7</p>
                            <h4>تلفن شرکت</h4>
                            <div class="text-right">
                                <span>ثابت :</span> <a href="tel:02166811664">۰۲۱۶۶۸۱۱۶۶۴</a> | <span>همراه :</span> <a
                                    href="tel:09125248632">۰۹۱۲۵۲۴۸۶۳۲</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Footer -->
        @include('home.sections.footer')
    </div>
@endsection
