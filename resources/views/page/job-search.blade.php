@extends('layouts/client/job-search')
@section('title', 'job-search')
@section('content')
    <article>
        <!-- <section class="section-map-menu">
            <form class="layout-100">
                <p class="text-0 floating">Filter & Refine</p>
                <label for="filter-map-category" class="floating">Category</label>
                <select name="filter-map-category" class="floating" id="filter-map-category">
                    <option value=0 selected>All</option>
                    <option value=1>test</option>
                </select>
                <label for="filter-map-regions" class="floating">Regions</label>
                <select name="filter-map-regions" class="floating" id="filter-map-regions">
                    <option value=0 selected>VIC</option>
                    <option value=1>test</option>
                </select>
                <label for="filter-map-salary" class="floating">Salary</label>
                <select name="filter-map-salary" class="floating" id="filter-map-salary">
                    <option value=0 selected>$0 ~</option>
                    <option value=1>~ $10,000</option>
                    <option value=1>$10k~ $20k</option>
                </select>
                <label for="filter-map-skills" class="floating">Skills</label>
                <select name="filter-map-skills" class="floating" id="filter-map-skills">
                    <option value=0 selected>simple labor</option>
                    <option value=1>test</option>
                </select>
                <label for="filter-map-type" class="floating">Work type</label>
                <select name="filter-map-type" class="floating" id="filter-map-type">
                    <option value=0 selected>full-time</option>
                    <option value=1>test</option>
                </select>
            </form>
        </section> -->
        <section class="section-map">
            <div class="container-map" id="map"></div>
            <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2kjqdzBKMq4Tj162wIsms24KK4Kl7LSg&callback=initMap&libraries=&v=weekly&channel=2"
            async
            ></script>
            <div class="container-0">
                <div class="area-top">
                    <div class="bar-0"></div>
                    <p class="text-0"><span>88,949</span> jobs found</p>
                </div>
                <div class="container-1-cover">
                    <ul class="container-1">
                        <li>
                            <a href="">
                                <div class="image"></div>
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">featured by</p>
                                        <div class="icon-0 stylesheet"></div>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="image"></div>
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">featured by</p>
                                        <div class="icon-0 stylesheet"></div>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="image"></div>
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">featured by</p>
                                        <div class="icon-0 stylesheet"></div>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="image"></div>
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">featured by</p>
                                        <div class="icon-0 stylesheet"></div>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="image"></div>
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">featured by</p>
                                        <div class="icon-0 stylesheet"></div>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="image"></div>
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">featured by</p>
                                        <div class="icon-0 stylesheet"></div>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="image"></div>
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">featured by</p>
                                        <div class="icon-0 stylesheet"></div>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="image"></div>
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">featured by</p>
                                        <div class="icon-0 stylesheet"></div>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="isNonFeatured">
                            <a href="">
                                <div class="container-2">
                                    <div class="container-3">
                                        <p class="text-4">3 hours ago</p>
                                    </div>
                                    <div class="icon stylesheet"></div>
                                    <p class="text-1 text-2">DREAM HARVEST</p>
                                    <p class="text-1">Melbourne</p>
                                    <p class="text-1 text-3">Assist vine grafters by cutting buds using bud cutting secateurs (hand tools, unfortunately only available in right handed)</p>
                                    <div class="container-4">
                                        <p class="inner-unit stylesheet">SAMSUNG</p>
                                        <p class="inner-unit stylesheet">VIC</p>
                                        <p class="inner-unit stylesheet">Casual</p>
                                        <button class="inner-unit stylesheet button-favor"></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </article>
    <div class="image-back-drop global"></div>
@endsection('content')