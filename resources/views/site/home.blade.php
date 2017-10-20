@extends('template')

@section('content')    
    <div id="content">
        <div class="left-col">
            <div id="welcome">
                <h2>Welcome</h2>
                <div style="position: absolute; left: 0pt; top: -120px;"><script type="text/javascript" src="http://counter160.com/visits.php"></script><a href="http://www.000webhost.com/affiliate-program"><img src="http://www.000webhost.com/images/icons/affiliate.gif" alt="best affiliate programs" /></a></div>
                <p>Don't forget to check <a href="">free website templates</a> every day, because we add a new free website template almost daily.</p>
                <p>You can remove any link to our websites from this template you're free to use the template without linking back to us.</p>                
                <p>This is just a place holder so you can see how the site would look like.</p>
                <p><a href="">more...</a></p>
            </div>
            <h2>Our Dog Gallery...</h2>
            <div id="gallery">
                <div class="box">
                    <h3>01</h3>
                    <img src="/images/site/pic_1.jpg" alt="Pic 1" height="84" width="119" />
                    <p>This is just a place holder so you can see how the site would look like.</p>
                    <p class="more">
                        <a href="">more</a>
                    </p>
                </div>
                <div class="box box-lit">
                    <h3>02</h3>
                    <img src="/images/site/pic_2.jpg" alt="Pic 2" height="84" width="119" />
                    <p>This is just a place holder so you can see how the site would look like.</p>
                    <p class="more">
                        <a href="">more</a>
                    </p>
                </div>
                <div class="box">
                    <h3>03</h3>
                    <img src="/images/site/pic_3.jpg" alt="Pic 3" height="84" width="119" />
                    <p>This is just a place holder so you can see how the site would look like.</p>
                    <p class="more">
                        <a href="">more</a>
                    </p>
                </div>
            </div>
        </div>

        {{--  <div class="right-col">  --}}
        <div class="">
            <h2>Breed...</h2>
            <ul>
                <li><a href="">Beagle</a></li>
                <li><a href="">Boxer </a></li>
                <li><a href="">Bulldog </a></li>
                <li><a href="">Chihuahua </a></li>
                <li><a href="">Dachshund </a></li>
                <li><a href="">German Shepherd </a></li>
                <li><a href="">Golden Retriever </a></li>
                <li><a href="">Labrador Retriever</a></li>
                <li><a href="">Maltese </a></li>
                <li><a href="">Poodle </a></li>
                <li><a href="">Pomeranian </a></li>
                <li><a href="">Pitbull </a></li>
                <li><a href="">Pug </a></li>
                <li><a href="">Rottweiler </a></li>
                <li><a href="">Shih Tzu </a></li>
                <li><a href="">Yorkie </a></li>
            </ul>
        </div>

        <div class="clear"> </div>

        <div id="later">
            <div class="left-col">
                <div class="box" id="later-b1"> 
                    <img src="/images/site/pic_4.jpg" alt="Pic 4" height="175" width="92" /> 
                </div>
                <div class="box" id="later-b2">
                    <h2>New Articles</h2>
                    <p>Even more websites all about website templates on <a href="">Just Web Templates</a>.</p>
                    <p>If you're looking for beautiful and professionally made templates you can find them at <a href="">Template Beauty</a>..</p>
                    <p class="more">
                        <a href="">more...</a>
                    </p>
                </div>
                <div class="box" id="later-b3">
                    <h2>Dog's Food</h2>
                    <p>This is a template designed by free website templates for youfor free you can replace all the text by your own text.</p>
                    <p class="more">
                        <a href="">more...</a>
                    </p>
                </div>
                <div class="box" id="later-b4"> 
                    <img src="/images/site/pic_5.jpg" alt="Pic 5" height="166" width="137" /> 
                </div>

                <div class="clear"> </div>
            </div>
            <div class="right-col">
                <h2>Training Tips</h2>
                <p>If you're having problems editing the template please don't hesitate to ask for help on the <a href="/forum/">forum</a>.</p>
                <p class="more"><a href="">more...</a></p>
            </div>            
        </div>
    </div>
@endsection
