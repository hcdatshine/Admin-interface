@extends('layouts.master')

@section('content')
<div id="trang1">
        <div class="container">
            <div>
                <p id="logo">LAMBDA</p>
            </div>
            <div id="header-top">
                <ul>
                    <li><a href="#">Home</a></li>
                    <!--href la cho link vao -->
                    <li><a href="#">About</a></li>
                    <li><a href="#">Igredients</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">Reservations</a></li>
                    <li>
                        <a class="color-yellow" href="https://twitter.com/?lang=vi">
                        <i class="fab fa-twitter"></i>
                        </a>
                        <a class="color-yellow" href="https://www.facebook.com/hc.datshine">
                        <i class="fab fa-facebook-square"></i>
                        </a>
                        <a class="color-yellow" href="https://www.youtube.com/channel/UC5hImAby_HlXtsURAlj6Wog?view_as=subscriber">
                        <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    @if(Auth::check())
                    <li><a href="{{ route('userInformation') }}" type="button">{{ Auth::user()->name}}</a></li>
                    @else
                    <li><a href="{{ route('showLoginForm') }}" type="button">Login</a></li>
                    @endif
                </ul>
            </div>
            <div id="banner">
                <div class="content">
                    <p>the right ingredients for the right food</p>
                </div>
                <!-- <div class="text-center-padding3"><img src="../images/trang1a.png"></div> -->
                <div class="trang1a"></div>
                <div class="banner-button">
                    <div class="button-left">BOOK A TABLE</div>
                    <div class="button-right">SEE THE MENU</div>
                </div>
            </div>
        </div>
    </div>
    <div id="trang2">
        <div class="container">
            <div class="trang2-content">
                <div class="info-cooker">
                    <p class="p36">Just the right food</p>
                    <div class="trang2a"></div>
                    <div class="text-center">
                        <p class="p16a">
                            If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food, delicious Lambda cakes, muffins, and gourmet coffees make us hard to resist!
                        </p>
                        <p class="p16a">Stop in today and check us out!
                        </p>
                    </div>
                    <div id="img2"><img src="../images/10.png"></div>
                </div>
                <div class="cook">
                    <img src="../images/11.png" class="width100">
                </div>
                <div class="clear-both"></div>
            </div>
        </div>
    </div>
    <div id="trang3">
        <div class="container">
            <div class="lephai">
                <h2 class="text-center-white">Fine ingredients</h2>
                <div class="trang3a"></div>
                <div class="text-center-padding5">
                    <p class="p16b">
                        3 If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food, delicious Lambda cakes, muffins, and gourmet coffees make us hard to resist!
                    </p>
                    <p class="p16b">
                        Stop in today and check us out!
                    </p>
                </div>
                <div class="top-bottom10">
                    <ul class="ul">
                        <li><img src="../images/1a.png" class="width30"> 
                        </li>
                        <li><img src="../images/1b.png" class="width30">
                        </li>
                        <li><img src="../images/1c.png" class="width30">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		<div class="clear-both"></div>
    </div>

    <div id="trang4">
        <div class="container">
            <div class="box-left">
                <ul class="list">
                    <li>
                        <h2>Appetisers</h2>
                        <div class="trang4a"></div>
                        <ul class="list ">
                            <li>
                                <div class="border-bottom">
                                    <span class="name-eating">Tzatsiki</span>
                                    <span class="cost">$3.99</span>
                                </div>
                                <p class="note ">Pureed eggplant, garlic, green pepper and tomato dip.</p>
                            </li>
                            <li>
                                <div class="border-bottom">
                                    <span class="name-eating">Aubergine_Salad</span>
                                    <span class="cost">$5.50</span>
                                </div>
                                <p class="note">Refreshing traditional cucumber and garlic yoghurt dip.</p>
                            </li>
                            <li>
                                <div class="border-bottom">
                                    <span class="name-eating">Tzatsiki</span>
                                    <span class="cost">$3.99</span>
                                </div>
                                <p class="note">Pureed eggplant, garlic, green pepper and tomato dip.</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h2>Salads</h2>
                        <div class="trang4a"></div>
                    	<ul class="list ">
                            <li>
                                <div class="border-bottom">
                                    <span class="name-eating">Aubergine_Salad</span>
                                    <span class="cost">$5.50</span>
                                </div>
                                <p class="note">Refreshing traditional cucumber and garlic yoghurt dip.</p>
                            </li>
                            <li>
                                <div class="border-bottom">
                                    <span class="name-eating">Tzatsiki</span>
                                    <span class="cost">$3.99</span>
                                </div>
                                <p class="note">Pureed eggplant, garlic, green pepper and tomato dip.
                                </p>
                            </li>
                            <li>
                                <div class="border-bottom">
                                    <span class="name-eating">Aubergine_Salad</span>
                                    <span class="cost">$5.50</span>
                                </div>
                                <p class="note">Refreshing traditional cucumber and garlic yoghurt dip.
                                </p>
                            </li>
                    	</ul>
                    </li>
                </ul>
            </div>
            <div class="box-right">
                <ul class="list">
                    <li>
                        <h2>Starters</h2>
                        <div class="trang4a"></div>
                        <ul class="list ">
                            <li>
                                <div class="border-bottom ">
                                    <span class="name-eating ">Tzatsiki</span>
                                    <span class="cost ">$3.99</span>
                                </div>
                                <p class="note ">Refreshing traditional cucumber and garlic yoghurt dip.</p>
                            </li>
                            <li>
                                <div class="border-bottom ">
                                    <span class="name-eating ">Aubergine_Salad</span>
                                    <span class="cost ">$5.50</span>
                                </div>
                                <p class="note ">Refreshing traditional cucumber and garlic yoghurt dip.</p>
                            </li>
                            <li>
                                <div class="border-bottom ">
                                    <span class="name-eating ">Tzatsiki</span>
                                    <span class="cost ">$3.99</span>
                                </div>
                                <p class="note ">Pureed eggplant, garlic, green pepper and tomato dip.</p>
                            <li>
                        </ul>
                    </li>
                    <li>
                        <h2>Main Dishes</h2>
                        <div class="trang4a "></div>
                        <ul class="list ">
                            <li>
                                <div class="border-bottom">
                                    <span class="name-eating">Aubergine_Salad</span>
                                    <span class="cost">$5.50</span>
                                </div>
                                <p class="note">Refreshing traditional cucumber and garlic yoghurt dip.</p>
                            </li>
                            <li>
                                <div class="border-bottom">
                                    <span class="name-eating">Tzatsiki</span>
                                    <span class="cost">$3.99</span>
                                </div>
                                <p class="note ">Refreshing traditional cucumber and garlic yoghurt dip.</p>
                            </li>
                            <li>
                                <div class="border-bottom">
                                    <span class="name-eating">Aubergine_Salad</span>
                                    <span class="cost">$5.50</span>
                                </div>
                                <p class="note ">Pureed eggplant, garlic, green pepper and tomato dip.</p>
                            </li>
                    	</ul>
                    </li>
                </ul>
            	<div class="clear-both"></div>
        	</div>
        </div>
    </div>


    <div id="trang5">
        <div class="container">
            <div class="nhulol">
                <div id="middle">
                    <h2 class="text-center-white">Guest Reviews</h2>
                    <div class="trang3a"></div>
                    <div class="text-center-padding5">
                        <p class="p25">f you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food, delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! 
                        </p>
                        <p class="p25">
                            Stop in today and check us out!
                        </p>
                        <p id="p18">- food inc, New York</p>
                    </div>
                </div>
            </div>
            <div class="clear-both"></div>
        </div>
    </div>

    <div id="trang6">
        <div class="container">
            <div class="left">
                <div id="box-img">
                    <div id="img-left"><img src="../images/6a.png" class="width100"></div>
                    <div id="img-right"><img src="../images/6b.png" class="width100"></div>
                </div>
                <div class="clear-both"></div>
            </div>
            <div class="right">
                <div id="text-order">
                    <p class="p36 ">Just the right food</p>
                    <div class="trang4a"></div>
                    <div>
                        <p class="p16c">
                            If you’ve been to one of our restaurants, you’ve seen – and tasted – what keeps our customers coming back for more. Perfect materials and freshly baked food.
                        </p>
                        <p class="p16c">
                            Delicious Lambda cakes,  muffins, and gourmet coffees make us hard to resist! Stop in today and check us out! Perfect materials and freshly baked food.
                        </p>
                    </div>
                    <div class="clear-both"></div>
                </div>
                <div id="order">
                    <!-- <div class=" name-left -->
                    <div class="name-date">
                        <form>
                            <p class="p14">Name:</p>
                            <p>
                                <input class="form" type="text" name="name" placeholder="Name *"></p>
                                <br><br>
                            <p class="p14">Date:</p>
                            <p>
                                <input class="form" type="date"></p>
                        </form>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="name-right "> -->
                    <div class="mail-number">
                        <p class="p14">Mail:</p>
                        <p>
                            <input class="form" type="text" name="mail" placeholder="Mail *"></p>
                            <br><br>
                        <p class="p14 ">Number:</p>                     
                        <p>	
                            <input class="form" type="text" name="number" placeholder="number *"  ></p>
                    </div>
                    <!-- </div> -->
                    <div class="clear-both"></div>
                </div>
                <div id="book-now">
                    <div class="button-mid">Book now!</div>
                </div>
                <div class="clear-both"></div>
            </div>
            <div class="clear-both"></div>
        </div>
    </div>
    <div id="trang7">
        <div class="container">
            <div id="block-left">
                <p class="p21 ">About us</p>
                <div class="trang3a"></div>
                <div class="text-center-padding5">
                    <p class="p16b">Lambda's new and expanded Chelsea location represents a truly authentic Greek patisserie, featuring breakfasts of fresh croissants and steaming bowls of café.</p>
                    <p class="p16b">Lamda the best restaurant in town</p>
                </div>
                <!-- <div class="clear-both "></div> -->
            </div>
            <div id="block-mid">
                <p class="p21">Opening Hours</p>
                <div class="trang3a"></div>
                <div class="text-center-padding5">
                    <p class="p16b">Mon-Thu: 7:00am-8:00pm</p>
                    <p class="p16b">Fri-Sun: 7:00am-10:00pm</p>
                    <div class="zero">
                        <img src="../images/7a.png">
                    </div>
                </div>
            </div>
            <div id="block-right">
                <p class="p21 ">Our Location</p>
                <div class="trang3a"></div>
                <div class="text-center-padding5">
                    <p class="p16b">19th Paradise Street Sitia</p>
                    <p class="p16b">128 Meserole Avenue </p>
                </div>
                <div class="icon-size">
                    <a class="color-yellow" href="https://twitter.com/?lang=vi ">
                    <i class="fab fa-twitter "></i>
                    </a>
                    <a class="color-yellow" href="https://www.facebook.com/hc.datshine">
                    <i class="fab fa-facebook-square "></i>
                    </a>
                    <a class="color-yellow" href="https://www.youtube.com/channel/UC5hImAby_HlXtsURAlj6Wog?view_as=subscriber">
                    <i class="fab fa-youtube "></i>
                    </a>
                </div>
            </div>
            <div class="clear-both"></div>
        </div>
    </div>
@endsection