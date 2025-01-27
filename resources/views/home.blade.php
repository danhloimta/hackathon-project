@extends('user.layout.main')

@section('content')
<div class="home">
        <div class="home_slider_container">
            
            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">
                
                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="home_slider_title">The Premium System Education</div>
                                    <div class="home_slider_subtitle">Future Of Education Technology</div>
                                    <div class="home_slider_form_container">
                                        <form action="#" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                            <div class="d-flex flex-row align-items-center justify-content-start">
                                                <input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
                                                <select class="dropdown_item_select home_search_input">
                                                    <option>Category Courses</option>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                </select>
                                                <select class="dropdown_item_select home_search_input">
                                                    <option>Select Price Type</option>
                                                    <option>Price Type</option>
                                                    <option>Price Type</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="home_search_button">search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="home_slider_title">The Premium System Education</div>
                                    <div class="home_slider_subtitle">Future Of Education Technology</div>
                                    <div class="home_slider_form_container">
                                        <form action="#" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                            <div class="d-flex flex-row align-items-center justify-content-start">
                                                <input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
                                                <select class="dropdown_item_select home_search_input">
                                                    <option>Category Courses</option>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                </select>
                                                <select class="dropdown_item_select home_search_input">
                                                    <option>Select Price Type</option>
                                                    <option>Price Type</option>
                                                    <option>Price Type</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="home_search_button">search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="home_slider_title">The Premium System Education</div>
                                    <div class="home_slider_subtitle">Future Of Education Technology</div>
                                    <div class="home_slider_form_container">
                                        <form action="#" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                            <div class="d-flex flex-row align-items-center justify-content-start">
                                                <input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
                                                <select class="dropdown_item_select home_search_input">
                                                    <option>Category Courses</option>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                </select>
                                                <select class="dropdown_item_select home_search_input">
                                                    <option>Select Price Type</option>
                                                    <option>Price Type</option>
                                                    <option>Price Type</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="home_search_button">search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Home Slider Nav -->

        <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
    </div>

    <!-- Features -->

    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">Welcome To E-Learning</h2>
                        <div class="section_subtitle"><p>Hệ thống giáo dục chất lượng hàng đầu</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div id="filter">
                    <!-- //filter -->
                    <div class="list-todo">
                        <h5 class="filter-by">Lọc theo cấp học</h5>
                        <div >
                            <div class="item todo-item">
                                <div class="form-check form-check-inline">
                                    <input class="inp-cbx todo d-none" id="cbx1" type="checkbox"/>
                                    <label class="cbx" for="cbx1">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Cấp 1</span>
                                    </label>
                                </div>
                            </div>
                            <div class="item todo-item">
                                <div class="form-check form-check-inline">
                                    <input class="inp-cbx todo d-none" id="cbx2" type="checkbox"/>
                                    <label class="cbx" for="cbx2">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Cấp 2</span>
                                    </label>
                                </div>
                            </div>
                            <div class="item todo-item">
                                <div class="form-check form-check-inline">
                                    <input class="inp-cbx todo d-none" id="cbx3" type="checkbox"/>
                                    <label class="cbx" for="cbx3">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Cấp 3</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-todo">
                        <h5 class="filter-by">Lọc theo môn học</h5>
                        <div >
                            <div class="item todo-item">
                                <div class="form-check form-check-inline">
                                    <input class="inp-cbx todo d-none" id="cbx4" type="checkbox"/>
                                    <label class="cbx" for="cbx4">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Toán</span>
                                    </label>
                                </div>
                            </div>
                            <div class="item todo-item">
                                <div class="form-check form-check-inline">
                                    <input class="inp-cbx todo d-none" id="cbx5" type="checkbox"/>
                                    <label class="cbx" for="cbx5">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Văn</span>
                                    </label>
                                </div>
                            </div>
                            <div class="item todo-item">
                                <div class="form-check form-check-inline">
                                    <input class="inp-cbx todo d-none" id="cbx6" type="checkbox"/>
                                    <label class="cbx" for="cbx6">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Tiếng Anh</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="team">
                    <div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="section_title_container text-center">
                                    <h2 class="section_title">Top giáo viên môn Toán</h2>
                                    <div class="section_subtitle"><p>Những giáo viên tốt nhất được đánh giá bởi chúng tôi</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="row team_row">
                            
                            <!-- Team Item -->
                            <div class="col-lg-4 col-md-6 team_col">
                                <div class="team_item">
                                    <div class="team_image"><img src="{{ asset(config('asset.avatar')) }}" alt=""></div>
                                    <div class="team_body">
                                        <div class="team_title"><a href="#">Jacke Masito</a></div>
                                        <div class="team_subtitle">Marketing & Management</div>
                                        <div class="social_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Item -->
                            <div class="col-lg-4 col-md-6 team_col">
                                <div class="team_item">
                                    <div class="team_image"><img src="{{ asset(config('asset.avatar')) }}" alt=""></div>
                                    <div class="team_body">
                                        <div class="team_title"><a href="#">William James</a></div>
                                        <div class="team_subtitle">Designer & Website</div>
                                        <div class="social_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Item -->
                            <div class="col-lg-4 col-md-6 team_col">
                                <div class="team_item">
                                    <div class="team_image"><img src="{{ asset(config('asset.avatar')) }}" alt=""></div>
                                    <div class="team_body">
                                        <div class="team_title"><a href="#">John Tyler</a></div>
                                        <div class="team_subtitle">Quantum mechanics</div>
                                        <div class="social_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="team">
                    <div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="section_title_container text-center">
                                    <h2 class="section_title">Top giáo viên môn Văn</h2>
                                    <div class="section_subtitle"><p>Những giáo viên tốt nhất được đánh giá bởi chúng tôi</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="row team_row">
                            
                            <!-- Team Item -->
                            <div class="col-lg-4 col-md-6 team_col">
                                <div class="team_item">
                                    <div class="team_image"><img src="{{ asset(config('asset.avatar')) }}" alt=""></div>
                                    <div class="team_body">
                                        <div class="team_title"><a href="#">Jacke Masito</a></div>
                                        <div class="team_subtitle">Marketing & Management</div>
                                        <div class="social_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Item -->
                            <div class="col-lg-4 col-md-6 team_col">
                                <div class="team_item">
                                    <div class="team_image"><img src="{{ asset(config('asset.avatar')) }}" alt=""></div>
                                    <div class="team_body">
                                        <div class="team_title"><a href="#">William James</a></div>
                                        <div class="team_subtitle">Designer & Website</div>
                                        <div class="social_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Item -->
                            <div class="col-lg-4 col-md-6 team_col">
                                <div class="team_item">
                                    <div class="team_image"><img src="{{ asset(config('asset.avatar')) }}" alt=""></div>
                                    <div class="team_body">
                                        <div class="team_title"><a href="#">John Tyler</a></div>
                                        <div class="team_subtitle">Quantum mechanics</div>
                                        <div class="social_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <!-- detail -->
                <div id="detail-user">
                    <div id="notification">
                        <h5 class="text-center">Lớp học của bạn sẽ diễn ra trong 15:00</h5>
                    </div>
                    <div id="profile">
                        <!-- proflie user -->
                        <div class="user-info">
                            <div class="avatar">
                                <img src="{{ asset(config('asset.avatar')) }}" alt="">
                            </div>
                            <h3 class="user-name">Nguyễn Danh Lợi</h5>
                            <div class="user-star">
                                <div class="score">
                                    <span>8.8</span>
                                </div>
                                <div class="star-list">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <span>(15)</span>
                            </div>
                            <div class="user-detail">
                                <p>0984.282.942</p>
                                <p>Địa chỉ: Mỹ Đình, Từ Liêm, Hà Nội</p>
                                <p>Email: danhloimta@gmail.com</p>
                                <p>Birthday: 18/06/1996</p>
                                <p>Giới tính: Nam</p>
                                <p>Kinh nghiệm: 4 năm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
