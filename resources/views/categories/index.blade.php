@extends('layouts.main')
@section('title', 'Categories')
@section('content')

    <!-- Products -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Product Sorting -->
                    <div
                        class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                        <div class="results">Showing <span>12</span> results</div>
                        <div class="sorting_container ml-md-auto">
                            <div class="sorting">
                                <ul class="item_sorting">
                                    <li>
                                        <span class="sorting_text">Sort by</span>
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <ul>
                                            <li class="product_sorting_btn"
                                                data-isotope-option='{ "sortBy": "original-order" }'>
                                                <span>Default</span></li>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>
                                                <span>Price</span></li>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'>
                                                <span>Name</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="product_grid">

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product_1.jpg" alt=""></div>
                            <div class="product_extra product_new"><a href="categories.html">New</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product_2.jpg" alt=""></div>
                            <div class="product_extra product_sale"><a href="categories.html">Sale</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$520</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product_3.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$710</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product_4.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$330</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product_5.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$170</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product_6.jpg" alt=""></div>
                            <div class="product_extra product_hot"><a href="categories.html">Hot</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$240</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product_7.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$70</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product_8.jpg" alt=""></div>
                            <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$490</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product_9.jpg" alt=""></div>
                            <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$410</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product_10.jpg" alt=""></div>
                            <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$365</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product_11.jpg" alt=""></div>
                            <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$195</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="images/product_12.jpg" alt=""></div>
                            <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$580</div>
                            </div>
                        </div>

                    </div>
                    <div class="product_pagination">
                        <ul>
                            <li class="active"><a href="#">01.</a></li>
                            <li><a href="#">02.</a></li>
                            <li><a href="#">03.</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Icon Boxes -->

    <div class="icon_boxes">
        <div class="container">
            <div class="row icon_box_row">

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
                        <div class="icon_box_title">Free Shipping Worldwide</div>
                        <div class="icon_box_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed
                                nec molestie.</p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
                        <div class="icon_box_title">Free Returns</div>
                        <div class="icon_box_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed
                                nec molestie.</p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
                        <div class="icon_box_title">24h Fast Support</div>
                        <div class="icon_box_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed
                                nec molestie.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title">Subscribe to our newsletter</div>
                        <div class="newsletter_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                a ultricies metus. Sed nec molestie eros</p></div>
                        <div class="newsletter_form_container">
                            <form action="#" id="newsletter_form" class="newsletter_form">
                                <input type="email" class="newsletter_input" required="required">
                                <button class="newsletter_button trans_200"><span>Subscribe</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
