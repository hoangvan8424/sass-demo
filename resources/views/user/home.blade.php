@extends('layouts.userApp')

@section('content')
    <div class="home">
        <div class="mv">
            <div class="main__container mv__container">
                <div class="mv__content">
                    <h2 class="mv__title">
                        An elite ecosystem of <br>
                        <span>entrepreneurs.</span>
                    </h2>
                    <p class="mv__desc">We believe that technology has the power to make the world a better place and we invest our time and resources into entrepreneurs that are making an impact.</p>
                    <a href="#" class="mv__btn">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
        <div class="service">
            <div class="main__container service__container">
                <h2 class="title text-center">A design and branding agency in New York</h2>
                <div class="service__list">
                    <div class="service__item row">
                        <div class="col-md-6 col-left">
                            <h3 class="item-title">SEO-focused WordPress web design and marketing agency</h3>
                            <div class="item-desc">
                                A brand today is all about how it makes your customers feel. It's not a logo, visual identity, or digital product design. but rather a cohesive system that spans across all mediums and touchpoints.<br>
                                We're a branding agency offering a complete solution from naming and logo design to communications and style guides.
                            </div>
                            <a href="#" class="view-more-btn">Learn More</a>
                        </div>
                        <div class="col-md-6 col-right">
                            <img src="{{ Vite::asset('resources/images/service_1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="service__item service__item--revert row">
                        <div class="col-md-6 col-left">
                            <h3 class="item-title">Branding has never been more agile than it is today</h3>
                            <div class="item-desc">
                                A brand today is all about how it makes your customers feel. It's not a logo, visual identity, or digital product design. but rather a cohesive system that spans across all mediums and touchpoints.<br>
                                We're a branding agency offering a complete solution from naming and logo design to communications and style guides.
                            </div>
                            <a href="#" class="view-more-btn">Discover Now</a>
                        </div>
                        <div class="col-md-6 col-right">
                            <img src="{{ Vite::asset('resources/images/service_2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="service__item row">
                        <div class="col-md-6 col-left">
                            <h3 class="item-title">We are a digital product and user experience design agency</h3>
                            <div class="item-desc">
                                A brand today is all about how it makes your customers feel. It's not a logo, visual identity, or digital product design. but rather a cohesive system that spans across all mediums and touchpoints.<br>
                                We're a branding agency offering a complete solution from naming and logo design to communications and style guides.
                            </div>
                            <a href="#" class="view-more-btn">Contact Us</a>
                        </div>
                        <div class="col-md-6 col-right">
                            <img src="{{ Vite::asset('resources/images/service_3.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="statistical">
            <div class="main__container">
                <div class="statistical__list row">
                    <div class="col-lg-4 text-center statistical__item">
                        <p class="numbers">150+</p>
                        <div class="subtitle">Happy Clients in 2022</div>
                        <p class="desc">Branding has never been more expansive, adventurous and agile than it is today</p>
                    </div>
                    <div class="col-lg-4 text-center statistical__item">
                        <p class="numbers">89%</p>
                        <div class="subtitle">Optimization Strategy</div>
                        <p class="desc">Branding has never been more expansive, adventurous and agile than it is today</p>
                    </div>
                    <div class="col-lg-4 text-center statistical__item">
                        <p class="numbers">190%</p>
                        <div class="subtitle">Increased Traffic</div>
                        <p class="desc">Branding has never been more expansive, adventurous and agile than it is today</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="review">
            <div class="main__container">
                <h2 class="title text-center">What our clients are saying about us</h2>
                <p class="re-desc text-center">Customer satisfaction is a primary goal for our company</p>
                <div class="row review__list">
                    <div class="col-md-4 review__item text-center">
                        <div class="item-group">
                            <div class="avatar">
                                <img src="{{ Vite::asset('resources/images/avatar_1.png') }}" alt="">
                            </div>
                            <h4 class="name">Monica Smith</h4>
                            <p class="position">Web Designer</p>
                            <div class="star d-flex justify-content-center">
                            <span class="item-star item-star--active">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5809 5.49169C15.4816 5.18615 15.2106 4.96984 14.8912 4.94094L10.5354 4.5455L8.814 0.515276C8.6869 0.21918 8.39772 0.0280762 8.07583 0.0280762C7.75395 0.0280762 7.46464 0.21918 7.33836 0.515276L5.61692 4.5455L1.26045 4.94094C0.941096 4.97041 0.670673 5.18673 0.570746 5.49169C0.471395 5.79723 0.563148 6.13235 0.804676 6.34417L4.0973 9.23134L3.12647 13.5072C3.05544 13.8216 3.17747 14.1467 3.43834 14.3353C3.57856 14.4372 3.7433 14.4881 3.90862 14.4881C4.05068 14.4881 4.19285 14.4503 4.31984 14.3743L8.07583 12.1285L11.8311 14.3743C12.1066 14.539 12.453 14.5239 12.7133 14.3353C12.9742 14.1467 13.0962 13.8216 13.0252 13.5072L12.0544 9.23134L15.347 6.34417C15.5884 6.13235 15.6803 5.79792 15.5809 5.49169Z" fill="#292F3A"/>
                                </svg>
                            </span>
                                <span class="item-star item-star--active">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5809 5.49169C15.4816 5.18615 15.2106 4.96984 14.8912 4.94094L10.5354 4.5455L8.814 0.515276C8.6869 0.21918 8.39772 0.0280762 8.07583 0.0280762C7.75395 0.0280762 7.46464 0.21918 7.33836 0.515276L5.61692 4.5455L1.26045 4.94094C0.941096 4.97041 0.670673 5.18673 0.570746 5.49169C0.471395 5.79723 0.563148 6.13235 0.804676 6.34417L4.0973 9.23134L3.12647 13.5072C3.05544 13.8216 3.17747 14.1467 3.43834 14.3353C3.57856 14.4372 3.7433 14.4881 3.90862 14.4881C4.05068 14.4881 4.19285 14.4503 4.31984 14.3743L8.07583 12.1285L11.8311 14.3743C12.1066 14.539 12.453 14.5239 12.7133 14.3353C12.9742 14.1467 13.0962 13.8216 13.0252 13.5072L12.0544 9.23134L15.347 6.34417C15.5884 6.13235 15.6803 5.79792 15.5809 5.49169Z" fill="#292F3A"/>
                                </svg>
                            </span>
                                <span class="item-star item-star--active">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5809 5.49169C15.4816 5.18615 15.2106 4.96984 14.8912 4.94094L10.5354 4.5455L8.814 0.515276C8.6869 0.21918 8.39772 0.0280762 8.07583 0.0280762C7.75395 0.0280762 7.46464 0.21918 7.33836 0.515276L5.61692 4.5455L1.26045 4.94094C0.941096 4.97041 0.670673 5.18673 0.570746 5.49169C0.471395 5.79723 0.563148 6.13235 0.804676 6.34417L4.0973 9.23134L3.12647 13.5072C3.05544 13.8216 3.17747 14.1467 3.43834 14.3353C3.57856 14.4372 3.7433 14.4881 3.90862 14.4881C4.05068 14.4881 4.19285 14.4503 4.31984 14.3743L8.07583 12.1285L11.8311 14.3743C12.1066 14.539 12.453 14.5239 12.7133 14.3353C12.9742 14.1467 13.0962 13.8216 13.0252 13.5072L12.0544 9.23134L15.347 6.34417C15.5884 6.13235 15.6803 5.79792 15.5809 5.49169Z" fill="#292F3A"/>
                                </svg>
                            </span>
                                <span class="item-star item-star--active">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5809 5.49169C15.4816 5.18615 15.2106 4.96984 14.8912 4.94094L10.5354 4.5455L8.814 0.515276C8.6869 0.21918 8.39772 0.0280762 8.07583 0.0280762C7.75395 0.0280762 7.46464 0.21918 7.33836 0.515276L5.61692 4.5455L1.26045 4.94094C0.941096 4.97041 0.670673 5.18673 0.570746 5.49169C0.471395 5.79723 0.563148 6.13235 0.804676 6.34417L4.0973 9.23134L3.12647 13.5072C3.05544 13.8216 3.17747 14.1467 3.43834 14.3353C3.57856 14.4372 3.7433 14.4881 3.90862 14.4881C4.05068 14.4881 4.19285 14.4503 4.31984 14.3743L8.07583 12.1285L11.8311 14.3743C12.1066 14.539 12.453 14.5239 12.7133 14.3353C12.9742 14.1467 13.0962 13.8216 13.0252 13.5072L12.0544 9.23134L15.347 6.34417C15.5884 6.13235 15.6803 5.79792 15.5809 5.49169Z" fill="#292F3A"/>
                                </svg>
                            </span>
                                <span class="item-star item-star--active">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5809 5.49169C15.4816 5.18615 15.2106 4.96984 14.8912 4.94094L10.5354 4.5455L8.814 0.515276C8.6869 0.21918 8.39772 0.0280762 8.07583 0.0280762C7.75395 0.0280762 7.46464 0.21918 7.33836 0.515276L5.61692 4.5455L1.26045 4.94094C0.941096 4.97041 0.670673 5.18673 0.570746 5.49169C0.471395 5.79723 0.563148 6.13235 0.804676 6.34417L4.0973 9.23134L3.12647 13.5072C3.05544 13.8216 3.17747 14.1467 3.43834 14.3353C3.57856 14.4372 3.7433 14.4881 3.90862 14.4881C4.05068 14.4881 4.19285 14.4503 4.31984 14.3743L8.07583 12.1285L11.8311 14.3743C12.1066 14.539 12.453 14.5239 12.7133 14.3353C12.9742 14.1467 13.0962 13.8216 13.0252 13.5072L12.0544 9.23134L15.347 6.34417C15.5884 6.13235 15.6803 5.79792 15.5809 5.49169Z" fill="#292F3A"/>
                                </svg>
                            </span>
                            </div>
                            <div class="comment-txt">
                                Overall experience is awesome!! I'm a visual thinker, and I couldn't function without a tool like this.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 review__item text-center">
                        <div class="item-group">
                            <div class="avatar">
                                <img src="{{ Vite::asset('resources/images/avatar_2.png') }}" alt="">
                            </div>
                            <h4 class="name">Vincent Smith</h4>
                            <p class="position">Web Designer</p>
                            <div class="star d-flex justify-content-center">
                            <span class="item-star item-star--active">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5809 5.49169C15.4816 5.18615 15.2106 4.96984 14.8912 4.94094L10.5354 4.5455L8.814 0.515276C8.6869 0.21918 8.39772 0.0280762 8.07583 0.0280762C7.75395 0.0280762 7.46464 0.21918 7.33836 0.515276L5.61692 4.5455L1.26045 4.94094C0.941096 4.97041 0.670673 5.18673 0.570746 5.49169C0.471395 5.79723 0.563148 6.13235 0.804676 6.34417L4.0973 9.23134L3.12647 13.5072C3.05544 13.8216 3.17747 14.1467 3.43834 14.3353C3.57856 14.4372 3.7433 14.4881 3.90862 14.4881C4.05068 14.4881 4.19285 14.4503 4.31984 14.3743L8.07583 12.1285L11.8311 14.3743C12.1066 14.539 12.453 14.5239 12.7133 14.3353C12.9742 14.1467 13.0962 13.8216 13.0252 13.5072L12.0544 9.23134L15.347 6.34417C15.5884 6.13235 15.6803 5.79792 15.5809 5.49169Z" fill="#292F3A"/>
                                </svg>
                            </span>
                                <span class="item-star item-star--active">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5809 5.49169C15.4816 5.18615 15.2106 4.96984 14.8912 4.94094L10.5354 4.5455L8.814 0.515276C8.6869 0.21918 8.39772 0.0280762 8.07583 0.0280762C7.75395 0.0280762 7.46464 0.21918 7.33836 0.515276L5.61692 4.5455L1.26045 4.94094C0.941096 4.97041 0.670673 5.18673 0.570746 5.49169C0.471395 5.79723 0.563148 6.13235 0.804676 6.34417L4.0973 9.23134L3.12647 13.5072C3.05544 13.8216 3.17747 14.1467 3.43834 14.3353C3.57856 14.4372 3.7433 14.4881 3.90862 14.4881C4.05068 14.4881 4.19285 14.4503 4.31984 14.3743L8.07583 12.1285L11.8311 14.3743C12.1066 14.539 12.453 14.5239 12.7133 14.3353C12.9742 14.1467 13.0962 13.8216 13.0252 13.5072L12.0544 9.23134L15.347 6.34417C15.5884 6.13235 15.6803 5.79792 15.5809 5.49169Z" fill="#292F3A"/>
                                </svg>
                            </span>
                                <span class="item-star item-star--active">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5809 5.49169C15.4816 5.18615 15.2106 4.96984 14.8912 4.94094L10.5354 4.5455L8.814 0.515276C8.6869 0.21918 8.39772 0.0280762 8.07583 0.0280762C7.75395 0.0280762 7.46464 0.21918 7.33836 0.515276L5.61692 4.5455L1.26045 4.94094C0.941096 4.97041 0.670673 5.18673 0.570746 5.49169C0.471395 5.79723 0.563148 6.13235 0.804676 6.34417L4.0973 9.23134L3.12647 13.5072C3.05544 13.8216 3.17747 14.1467 3.43834 14.3353C3.57856 14.4372 3.7433 14.4881 3.90862 14.4881C4.05068 14.4881 4.19285 14.4503 4.31984 14.3743L8.07583 12.1285L11.8311 14.3743C12.1066 14.539 12.453 14.5239 12.7133 14.3353C12.9742 14.1467 13.0962 13.8216 13.0252 13.5072L12.0544 9.23134L15.347 6.34417C15.5884 6.13235 15.6803 5.79792 15.5809 5.49169Z" fill="#292F3A"/>
                                </svg>
                            </span>
                                <span class="item-star item-star--active">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5809 5.49169C15.4816 5.18615 15.2106 4.96984 14.8912 4.94094L10.5354 4.5455L8.814 0.515276C8.6869 0.21918 8.39772 0.0280762 8.07583 0.0280762C7.75395 0.0280762 7.46464 0.21918 7.33836 0.515276L5.61692 4.5455L1.26045 4.94094C0.941096 4.97041 0.670673 5.18673 0.570746 5.49169C0.471395 5.79723 0.563148 6.13235 0.804676 6.34417L4.0973 9.23134L3.12647 13.5072C3.05544 13.8216 3.17747 14.1467 3.43834 14.3353C3.57856 14.4372 3.7433 14.4881 3.90862 14.4881C4.05068 14.4881 4.19285 14.4503 4.31984 14.3743L8.07583 12.1285L11.8311 14.3743C12.1066 14.539 12.453 14.5239 12.7133 14.3353C12.9742 14.1467 13.0962 13.8216 13.0252 13.5072L12.0544 9.23134L15.347 6.34417C15.5884 6.13235 15.6803 5.79792 15.5809 5.49169Z" fill="#292F3A"/>
                                </svg>
                            </span>
                                <span class="item-star item-star--active">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5809 5.49169C15.4816 5.18615 15.2106 4.96984 14.8912 4.94094L10.5354 4.5455L8.814 0.515276C8.6869 0.21918 8.39772 0.0280762 8.07583 0.0280762C7.75395 0.0280762 7.46464 0.21918 7.33836 0.515276L5.61692 4.5455L1.26045 4.94094C0.941096 4.97041 0.670673 5.18673 0.570746 5.49169C0.471395 5.79723 0.563148 6.13235 0.804676 6.34417L4.0973 9.23134L3.12647 13.5072C3.05544 13.8216 3.17747 14.1467 3.43834 14.3353C3.57856 14.4372 3.7433 14.4881 3.90862 14.4881C4.05068 14.4881 4.19285 14.4503 4.31984 14.3743L8.07583 12.1285L11.8311 14.3743C12.1066 14.539 12.453 14.5239 12.7133 14.3353C12.9742 14.1467 13.0962 13.8216 13.0252 13.5072L12.0544 9.23134L15.347 6.34417C15.5884 6.13235 15.6803 5.79792 15.5809 5.49169Z" fill="#292F3A"/>
                                </svg>
                            </span>
                            </div>
                            <div class="comment-txt">
                                Overall experience is awesome!! I'm a visual thinker, and I couldn't function without a tool like this.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 review__item text-center">
                        <div class="item-group">
                            <div class="avatar">
                                <img src="{{ Vite::asset('resources/images/avatar_3.png') }}" alt="">
                            </div>
                            <h4 class="name">Stella Smith</h4>
                            <p class="position">Web Designer</p>
                            <div class="star d-flex justify-content-center">
                            <span class="item-star item-star--active">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5809 5.49169C15.4816 5.18615 15.2106 4.96984 14.8912 4.94094L10.5354 4.5455L8.814 0.515276C8.6869 0.21918 8.39772 0.0280762 8.07583 0.0280762C7.75395 0.0280762 7.46464 0.21918 7.33836 0.515276L5.61692 4.5455L1.26045 4.94094C0.941096 4.97041 0.670673 5.18673 0.570746 5.49169C0.471395 5.79723 0.563148 6.13235 0.804676 6.34417L4.0973 9.23134L3.12647 13.5072C3.05544 13.8216 3.17747 14.1467 3.43834 14.3353C3.57856 14.4372 3.7433 14.4881 3.90862 14.4881C4.05068 14.4881 4.19285 14.4503 4.31984 14.3743L8.07583 12.1285L11.8311 14.3743C12.1066 14.539 12.453 14.5239 12.7133 14.3353C12.9742 14.1467 13.0962 13.8216 13.0252 13.5072L12.0544 9.23134L15.347 6.34417C15.5884 6.13235 15.6803 5.79792 15.5809 5.49169Z" fill="#292F3A"/>
                                </svg>
                            </span>
                                <span class="item-star item-star--active">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5809 5.49169C15.4816 5.18615 15.2106 4.96984 14.8912 4.94094L10.5354 4.5455L8.814 0.515276C8.6869 0.21918 8.39772 0.0280762 8.07583 0.0280762C7.75395 0.0280762 7.46464 0.21918 7.33836 0.515276L5.61692 4.5455L1.26045 4.94094C0.941096 4.97041 0.670673 5.18673 0.570746 5.49169C0.471395 5.79723 0.563148 6.13235 0.804676 6.34417L4.0973 9.23134L3.12647 13.5072C3.05544 13.8216 3.17747 14.1467 3.43834 14.3353C3.57856 14.4372 3.7433 14.4881 3.90862 14.4881C4.05068 14.4881 4.19285 14.4503 4.31984 14.3743L8.07583 12.1285L11.8311 14.3743C12.1066 14.539 12.453 14.5239 12.7133 14.3353C12.9742 14.1467 13.0962 13.8216 13.0252 13.5072L12.0544 9.23134L15.347 6.34417C15.5884 6.13235 15.6803 5.79792 15.5809 5.49169Z" fill="#292F3A"/>
                                </svg>
                            </span>
                                <span class="item-star item-star--active">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5809 5.49169C15.4816 5.18615 15.2106 4.96984 14.8912 4.94094L10.5354 4.5455L8.814 0.515276C8.6869 0.21918 8.39772 0.0280762 8.07583 0.0280762C7.75395 0.0280762 7.46464 0.21918 7.33836 0.515276L5.61692 4.5455L1.26045 4.94094C0.941096 4.97041 0.670673 5.18673 0.570746 5.49169C0.471395 5.79723 0.563148 6.13235 0.804676 6.34417L4.0973 9.23134L3.12647 13.5072C3.05544 13.8216 3.17747 14.1467 3.43834 14.3353C3.57856 14.4372 3.7433 14.4881 3.90862 14.4881C4.05068 14.4881 4.19285 14.4503 4.31984 14.3743L8.07583 12.1285L11.8311 14.3743C12.1066 14.539 12.453 14.5239 12.7133 14.3353C12.9742 14.1467 13.0962 13.8216 13.0252 13.5072L12.0544 9.23134L15.347 6.34417C15.5884 6.13235 15.6803 5.79792 15.5809 5.49169Z" fill="#292F3A"/>
                                </svg>
                            </span>
                                <span class="item-star item-star--active">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5809 5.49169C15.4816 5.18615 15.2106 4.96984 14.8912 4.94094L10.5354 4.5455L8.814 0.515276C8.6869 0.21918 8.39772 0.0280762 8.07583 0.0280762C7.75395 0.0280762 7.46464 0.21918 7.33836 0.515276L5.61692 4.5455L1.26045 4.94094C0.941096 4.97041 0.670673 5.18673 0.570746 5.49169C0.471395 5.79723 0.563148 6.13235 0.804676 6.34417L4.0973 9.23134L3.12647 13.5072C3.05544 13.8216 3.17747 14.1467 3.43834 14.3353C3.57856 14.4372 3.7433 14.4881 3.90862 14.4881C4.05068 14.4881 4.19285 14.4503 4.31984 14.3743L8.07583 12.1285L11.8311 14.3743C12.1066 14.539 12.453 14.5239 12.7133 14.3353C12.9742 14.1467 13.0962 13.8216 13.0252 13.5072L12.0544 9.23134L15.347 6.34417C15.5884 6.13235 15.6803 5.79792 15.5809 5.49169Z" fill="#292F3A"/>
                                </svg>
                            </span>
                                <span class="item-star item-star--active">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5809 5.49169C15.4816 5.18615 15.2106 4.96984 14.8912 4.94094L10.5354 4.5455L8.814 0.515276C8.6869 0.21918 8.39772 0.0280762 8.07583 0.0280762C7.75395 0.0280762 7.46464 0.21918 7.33836 0.515276L5.61692 4.5455L1.26045 4.94094C0.941096 4.97041 0.670673 5.18673 0.570746 5.49169C0.471395 5.79723 0.563148 6.13235 0.804676 6.34417L4.0973 9.23134L3.12647 13.5072C3.05544 13.8216 3.17747 14.1467 3.43834 14.3353C3.57856 14.4372 3.7433 14.4881 3.90862 14.4881C4.05068 14.4881 4.19285 14.4503 4.31984 14.3743L8.07583 12.1285L11.8311 14.3743C12.1066 14.539 12.453 14.5239 12.7133 14.3353C12.9742 14.1467 13.0962 13.8216 13.0252 13.5072L12.0544 9.23134L15.347 6.34417C15.5884 6.13235 15.6803 5.79792 15.5809 5.49169Z" fill="#292F3A"/>
                                </svg>
                            </span>
                            </div>
                            <div class="comment-txt">
                                Overall experience is awesome!! I'm a visual thinker, and I couldn't function without a tool like this.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
