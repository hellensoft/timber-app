@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')

<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg);">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title">Manyara National Park</h1>
             </div>
          </div>
       </div>
       <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->
    <div class="single-page-section">
       <div class="container">
          <figure class="single-feature-img">
             <img src="assets/images/img31.jpg" alt="">
          </figure>
          {{-- <div class="page-content">
             <p>Amet orci, nibh blanditiis tempor soluta bibendum, omnis dictumst eiusmod felis mollis porta molestiae, laborum fugiat, phasellus minim labore habitasse culpa dignissimos? Distinctio molestias! Incididunt pede nostra mollit quam quaerat voluptas similique accumsan quae accusantium aliqua illum faucibus amet voluptatum natoque sodales. Proident facilisis, atque impedit ullam recusandae ducimus quisquam faucibus dolorum nibh neque libero, laudantium harum labore facilis proident nec doloribus netus. Posuere accusamus nam repudiandae, tincidunt! Id doloribus tempus potenti adipiscing deleniti nemo! Vel, tortor eiusmod omnis molestie sint quisque mollitia molestiae et! Veniam mollitia adipisci, anim eligendi? Turpis laborum leo quisque eos! Suspen sectetuer proident ex nostrud, ratione.</p>
             <p>Amet orci, nibh blanditiis tempor soluta bibendum, omnis dictumst eiusmod felis mollis porta molestiae, laborum fugiat, phasellus minim labore habitasse culpa dignissimos? Distinctio molestias! Incididunt pede nostra mollit quam quaerat voluptas similique accumsan quae accusantium aliqua illum faucibus amet voluptatum natoque sodales. Laboris justo dolorem deserunt consectetur ultricies tortor cum tenetur ducimus occaecati imperdiet enim mus ab arcu. Taciti euismod metpus!</p>
             <ul>
                <li>Purus sequi accusamus? Nibh aut perspiciatis, lorem lorem perspiciatis.</li>
                <li>Dictum? Posuere cumque sed illum facilisis leo illum facilisis.</li>
                <li>Neque officiis feugiat praesentium qui, aliqua hic commodo praesentium.</li>
                <li>Asperiores irure class lobortis veritatis, alias sem lobortis veritatis.</li>
                <li>Ipsum eros quaerat deserunt proin porttitor, fugit ultrices.</li>
                <li>Volutpat, justo mollit ullamco sagittis duis enim labore, ullamcorper dicta</li>
             </ul>
             <p>Sequi sociis leo, interdum eos ipsa pharetra, unde fringilla erat vulputate litora nisl adipisicing primis consectetuer erat aliqua reprehenderit unde accusamus earum sollicitudin voluptatum wisi vulputate deleniti, accusamus, animi rutrum. Labore et! Odit, nunc nostra, excepturi dui netus, euismod pariatur? Proin vivamus diamlorem natoque reprehenderit vivamus diamlorem natpo.</p>
          </div> --}}
        <div class="tab-container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview"
                        role="tab" aria-controls="overview" aria-selected="true">DESCRIPTION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="program-tab" data-toggle="tab" href="#program"
                        role="tab" aria-controls="program" aria-selected="false">PROGRAM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience"
                        role="tab" aria-controls="experience" aria-selected="false">PRICE
                        INCLUDES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="requirement-tab" data-toggle="tab" href="#requirement"
                        role="tab" aria-controls="requirement" aria-selected="false">PRICE
                        EXCLUDES</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                    aria-labelledby="overview-tab">
                    <div class="overview-content">

                        <p>The tour has been designed to include:</p>
                        <ul style='color:#1D293F'>
                            <li><b>- Lake Manyara National Park: </b>
                                <p>One of Tanzania’s most dramatically located wildlife areas,
                                    consisting of a massive but shallow soda lake (covering two-thirds
                                    of the park),
                                    located at the foot of the Great Rift Valley’s western escarpment.
                                </p>
                                <p>The Park’s varied habitat attracts a wide variety of animals,
                                    including one of Africa’s largest concentrations of Elephants;
                                    Lake Manyara is unique for a Tree-climbing Lions, as well as large
                                    flocks of Flamingos attracted by the algae in the lake.
                                </p>
                            </li>
                            <li><b>- The Serengeti:</b>
                                <p>the meaning of the word “Serengeti,” which derives from the Masai
                                    “Siringet” and has been artistically translated as “the land that
                                    flows on forever”.
                                </p>
                                <p>It is one of the most famous parks in the world covering 6,000 square
                                    miles of pristine land and the ultimate destination for game drives
                                    or witnessing the astounding, annual Great Migration.
                                </p>
                                <p>Boundless plains punctuated with spiky acacia trees, Serengeti
                                    kopjes, hippos, and crocodile-laden rivers,
                                    a landscape home to the Big Five (lions, leopards, rhinos, buffalo,
                                    and elephants)
                                    and more than 475 bird species–it’s no wonder the Serengeti precedes
                                    its reputation as a wildlife haven.
                                </p>
                            </li>
                            <li><b>- The Ngorongoro crater: </b>
                                <p>Located 180KM from Arusha of Tanzania</p>
                                <p>The crater formed when a large volcano exploded and collapsed two to
                                    three million years ago, and now a home for more than 25,000 species
                                    of large animals.</p>
                                <p>Ngorongoro Crater supports a vast variety of animals, which includes
                                    herds of Wildebeests, Zebras, Buffalos
                                    , Elands, Warthogs, Hippos, and giant African Elephants.
                                </p>
                                <p>The Crater also consists of a dense population of predators, which
                                    include lions, hyenas, jackals, cheetahs
                                    and the ever-elusive leopard.
                                </p>
                            </li>
                            <li><b>- Tarangire National Park: </b>
                                <p> The Tarangire National Park is reputed to contain some of the
                                    largest elephant herds in Africa.
                                    This African National Park is also home to three rare species of
                                    animals the Greater Kudu, the Fringed-eared Oryx,
                                    as well as a few Ashy Starlings. </p>
                                <p> A very scenic soda Lake found on the Southern border of the
                                    Ngorongoro Conservation Area.
                                    This less visited lake lies at the base of the Eyasi escarpment on
                                    the Western Rift Valley Wall.
                                    Some wildlife and a wide range of bird species can be viewed during
                                    walks around the lake, which can be arranged.
                                </p>
                                <p>you will be introduced to an indigenous tribe known as the ‘Hadzabee’
                                    (hunter-gatherer Bushmen) and the Nilotic-speaking Datoga tribe.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">
                    <div class="itinerary-content">
                        <h3>Program <span>( 7 days )</span></h3>
                        <p>
                            Our Safari is designed to include Lake Manyara National Park, Serengeti
                            National Park, and Ngorongoro Crater and Tarangire National Park.
                        </p>
                        {{-- <p>Dolores maiores dicta dolore. Natoque placeat libero sunt sagittis debitis? Egestas non non qui quos, semper aperiam lacinia eum nam! Pede beatae. Soluta, convallis irure accusamus voluptatum ornare saepe cupidatat.</p> --}}
                    </div>
                    <div class="itinerary-timeline-wrap">
                        <ul>
                            <li>
                                <div class="timeline-content">
                                    <div class="day-count">Day <span>1</span></div>
                                    <h4>Arusha – Lake Manyara National Park</h4>
                                    <h5 style="font-size:16px; font-weight:555;">Non-game-viewing travel
                                        time: 2 ½ hours; Distance (130km).</h5>
                                    <p>You will meet our professional driver tour guide at your hotel,
                                        who will deliver a short safari info briefing. After your
                                        breakfast,
                                        we drive to Lake Manyara National Park for Game drive,
                                        where you will view variety of animals such as elephants,
                                        mountain climbing lions, flocks of beautiful flamingos etc.
                                        Late afternoon we drive to the Lodge/Tented Camp/Basic
                                        Camp/Luxury stays for dinner and overnight.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-content">
                                    <div class="day-count">Day <span>2</span></div>
                                    <h4>Lake Manyara – Serengeti National Park</h4>
                                    <h5 style="font-size:16px; font-weight:555;">Non-game-viewing travel
                                        time: 6 hours; Distance (205km).</h5>
                                    <p>After the breakfast, we depart from the Camp and driver to
                                        Serengeti via Ngorongoro Conservation Area
                                        and later arrive on the great Serengeti plains for a different
                                        but just as spectacular wildlife viewing experience.
                                        You will pass one of the world’s greatest prehistoric
                                        archaeological sites, called Olduvai Gorge,
                                        and then continue your way over the scrub lands.
                                        The wooded knolls around Naabi Hill Gate mark the Serengeti’s
                                        official entrance,
                                        which then drops into the Park’s signature wide-open plains,
                                        Like no other.
                                        Dinner and overnight at the Lodge/Luxury/Tented Camp/Basic
                                        Campsite.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-content">
                                    <div class="day-count">Day <span>3</span></div>
                                    <h4>Full day – Serengeti National Park</h4>
                                    <p>We do an after breakfast game viewing drives along the Sogore
                                        River Circuit,
                                        which loops into the plains south of the Seronera River,
                                        and which is good for possible Lion, Thomson gazelle, Topi,
                                        ostrich and cheetah sightings.
                                        In the afternoon we will follow the Kopjes Circuit,
                                        which goes anti-clockwise around the Maasai Kopjes,
                                        which usually attract a number of Lion
                                        which like to lie in wait for animals coming to drink! and some
                                        formidably large Cobras.
                                        Dinner and overnight in the Seronera Lodge/Basic Campsite/Tented
                                        Camp/Lodge/Luxury.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-content">
                                    <div class="day-count">Day <span>4</span></div>
                                    <h4>Full day – Serengeti National Park</h4>
                                    <p>Be one of only a few fortunate people to glide in a Hot Air
                                        Balloon over the Serengeti Plains
                                        (available at supplementary cost by per-arrangement).
                                        Floating silently above the awakening bush,
                                        while spotting wildlife and enjoying the amazing scenery of
                                        Africa,
                                        across rivers and over numerous small villages.
                                        First is a Game viewing drives along the Sogore River Circuit
                                        and later having breakfast.
                                        Dinner and overnight in the Seronera Lodge/Basic Campsite/Tented
                                        Camp/Lodge/Luxury.</p>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-content">
                                    <div class="day-count">Day <span>5</span></div>
                                    <h4>Serengeti – Ngorongoro Crater</h4>
                                    <h5 style="font-size:16px; font-weight:555;">Non-game-viewing travel
                                        time: 4 hours; Distance (130km).</h5>
                                    <p>Our day starts with a morning game drive central of the
                                        Serengeti.
                                        For animals, that’s an active time of the day – not hot yet,
                                        so there is a lot to see out there until by 11:30 am then we
                                        return back to the Lodge/Camp for Brunch.
                                        On our way back we will stop at Olduvai Gorge.
                                        It’s a fascinating archaeological site we will visit if you are
                                        interested in history
                                        and the Masai tribes. Dinner and overnight at the Lodge/Tented
                                        Camp/Hotel/Campsite set
                                        on the Crater rim, the Lodge/Luxury/Tented Camp/Basic Campsite
                                        offers stunning views of
                                        Ngorongoro and the surrounding highlands.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-content">
                                    <div class="day-count">Day <span>6</span></div>
                                    <h4>Ngorongoro Crater – Tarangire</h4>
                                    <h5 style="font-size:16px; font-weight:555;">Non-game-viewing travel
                                        time: 2 hours; Distance (152km).</h5>
                                    <p>Our day we start very early in the morning equipped with a picnic
                                        lunch we descend 2000 ft.
                                        down to the Crater floor by our 4×4 wheel drive vehicle for game
                                        viewing. Let’s explore this Garden of Eden.
                                        It’d the best opportunity to see black Rhino and many other rare
                                        species like the black-manned lion, Hyenas, Jackals, Cheetahs,
                                        and the ever-elusive Leopard. We will enjoy a picnic lunch on
                                        the crater floor.
                                        Dinner and overnight at the Lodge/Tented Camp/Luxury/Basic Camp.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-content">
                                    <div class="day-count">Day <span>7</span></div>
                                    <h4>Tarangire National Park – Arusha</h4>
                                    <h5 style="font-size:16px; font-weight:555;">Non-game-viewing travel
                                        time: 2 ½ hours; Distance (152.7km).</h5>
                                    <p>After your breakfast and then we drive to Tarangire National Park
                                        for game viewing.
                                        The Park runs along the line of the Tarangire River and is
                                        mainly made up of low-lying hills on the Great Rift Valley
                                        floor.
                                        Its natural vegetation mainly consists of Acacia woodland and
                                        giant African Baobab trees, with huge swamp areas in the south.
                                        Both the river and the swamps act like a magnet for wild
                                        animals, during Tanzania’s dry season.
                                        Late afternoon we return back to Arusha and you will be dropped
                                        to your hotel.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                    <div class="experience-content">
                        <h5>TOUR PRICES INCLUDE:</h5>
                        <ul style='color:#1D293F'>
                            <li>- All Park entry fees – All Park Camping fees. </li>
                            <li>- Pick up from the Airport. </li>
                            <li>- Transport 4×4 Toyota Land Cruiser with pop up roof with driver cum
                                guide. </li>
                            <li>- Overnight at the Hotels/Lodge/Tented Camps/Campsites according to the
                                program. </li>
                            <li>- Chef/Meals as per the above itinerary. </li>
                            <li>- Complimentary bottled of drinking water 1.5 litter per person per day
                                during on safari. </li>
                            <li>- 1-night free Hotel accommodation on your arrival in Arusha with bed &
                                breakfast. </li>
                            <li>- Tents/Sleeping mats/Sleeping bags/Chairs/Table/Pillow. </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="requirement" role="tabpanel"
                    aria-labelledby="requirement-tab">
                    <div class="requirement-content">
                        <h5 style='font-weight: 900'>TOUR PRICES DOES NOT INCLUDE:</h5>
                        <ul style='color:#1D293F'>
                            <li>- International flights & Domestic flight. </li>
                            <li>- Fees for passport, visas, immunizations, and insurance. </li>
                            <li>- Tips for staff such as driver cum guides/chef/porter. </li>
                            <li>- Expenses of personal nature (like souvenirs). </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
       </div>
    </div>
 </main>

@endsection