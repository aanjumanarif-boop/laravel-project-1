<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment-4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="{{asset('frontend/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- header section start -->
    <header class="header-section">
        <img src="{{asset('frontend/Image-5/Banner-web.webp')}}" class="image-responsive">

        <div class="hero-containt">
            <h1>Organic Dry Food</h1>
            <p class="para-01">Be fit and healthy test our organic food</p>
            <a href="#" class="btn-custom">Buy Now</a>
        </div>

    </header>
    <!-- header section end -->

    <!-- product section start -->

    <section class="feature-section">

        <div class="container">
            <h3>Why Chose Our Product</h3>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="{{asset('frontend/Image-5/apple-image.webp')}}" class="picture-1">
                        <h5>feture-1</h5>
                        <p class="para-02">this is a premium product</p>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="{{asset('frontend/Image-5/apple-image.webp')}}" class="picture-1">
                        <h5>feture-1</h5>
                        <p class="para-02">this is a premium product</p>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="{{asset('frontend/Image-5/apple-image.webp')}}" class="picture-1">
                        <h5>feture-1</h5>
                        <p class="para-02">this is a premium product</p>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="{{asset('frontend/Image-5/apple-image.webp')}}" class="picture-1">
                        <h5>feture-1</h5>
                        <p class="para-02">this is a premium product</p>
                    </div>
                </div>


                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="{{asset('frontend/Image-5/apple-image.webp')}}" class="picture-1">
                        <h5>feture-1</h5>
                        <p class="para-02">this is a premium product</p>
                    </div>
                </div>


                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="{{asset('frontend/Image-5/apple-image.webp')}}" class="picture-1">
                        <h5>feture-1</h5>
                        <p class="para-02">this is a premium product</p>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- product section end -->

    <!-- customers section start 
     ============================== -->
    <section class="custom-section">

        <div class="container">
            <h2>What our customers say</h2>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="{{asset('frontend/Image-5/apple-image.webp')}}" class="picture-1">

                        <p class="para-02">that is an amazing product</p>
                        <h5>customers-1</h5>
                    </div>
                </div>


                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="{{asset('frontend/Image-5/apple-image.webp')}}" class="picture-1">
                        <p class="para-02">that is an amazing product</p>
                        <h5>customers-2</h5>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="{{asset('frontend/Image-5/apple-image.webp')}}"  class="picture-1">

                        <p class="para-02">that is an amazing product</p>
                        <h5>customers-3</h5>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- customers section end 
      ============================ -->


    <!-- checkout section start 
    ============================ -->

    <section class="form-main">
        <div class="container">
            <h2 class="text-check ">Checkout</h2>
            <form action="" method="" class="checkout-form">
                <div class="  mb-3">
                    <label class="form-label">full name*</label>
                    <input type="text" placeholder="your full name*" name="" class="form-control" required>
                </div>

                <div class=" mb-3">
                    <label class="form-label">Phone Number*</label>
                    <input type="number" placeholder="your phone number*" name="" class="form-control" required>
                </div>

                <div class="">
                    <label class="form-label">Address*</label>
                    <textarea class="form-control" placeholder="Enter Your Address"></textarea>
                </div>

                <div>
                    <div class="">
                        <label class=" form-label">Area*</label>
                        <select class="form-control" name="">
                            <option value="inside-dhaka">inside dhaka</option>
                            <option value="outside-dhaka">outside dhaka</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary mt-1 mb-1">confirm order</button>


            </form>
        </div>

    </section>

    <!-- checkout section End 
    ============================ -->

    <!-- footer start  -->

    <footer class="footer">
        <div class="container">

            <div class="footer-contain">
                <div class="footer-man">
                    <img class="mt-2" src="{{asset('frontend/Image-5/web-man.webp')}}">
                </div>
                <div class="logo-div">
                    <a href="#" class="bg-dark text-light"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="bg-dark text-light"><i class="fa-brands fa-square-x-twitter"></i></a>
                    <a href="#" class="bg-dark text-light"><i class="fa-brands fa-youtube"></i></a>

                </div>

                <p>&copy 2025 Landingpage. all right reserved</p>

            </div>


        </div>

    </footer>
                 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>