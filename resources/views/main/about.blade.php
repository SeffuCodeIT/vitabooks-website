@extends("layout.index")
@section("content")
    <h1 class="text-center">About Us & Contacts</h1>
    <div class="container">
        <div class="causes-contents">
            <p>Vita Book is an independent Kenyan publisher supporting people’s struggles to create societies based on
                the
                principles of equality and justice. It aims to redress working people’s lack of power over information,
                communication and the media which then restricts their access to ideas and experiences to resist
                imperialism. Vita Books strives to connect and unite progressive people everywhere in their battles for
                justice and equality for everyone. It was formed in 1986 in London by Kenyans forced to seek asylum by
                the
                oppressive government under President Daniel arap Moi. It publishes material with focus on people’s
                resistance to imperialism and their struggle for socialism.
                Vita Books relocated to Kenya in 2017.</p><br>
            <p>In its first two years or so, it published a number of books and started the free
                on-line journal, The Kenya
                Socialist. It is one of the organisations that set up Ukombozi Library, and has been working closely
                with
                the Library. it conducts events such as book launches and other forums to sensitise communities on
                social
                and political issues which are also the subject matter of its publications. As a publisher working with
                a
                library, we connect with a number of community groups whose libraries we helped by donating titles
                published
                by VitaBooks.
                The subject areas that Vita Books publishes in are influenced very much by the political and information
                needs of working people in Kenya. As a neo-colony, Kenya has continued the imperialist-imposed practice
                of
                ‘TINA’ (There Is No Alternative – to capitalism and imperialism). This has affected political as well as
                information struggles in Kenya, as it has in other countries in a similar situation. That is why Vita
                Books
                focuses on areas that are obvious ‘vacuum areas’ created by the ruling elites. One such area is
                socialism as
                an alternative to capitalism. In this sense Vita Books has unashamedly taken sides with the struggles of
                working people and seeks to expose the oppression and exploitation inherent in the current Political and
                economic set-up.
                That forms the content of what Vita Books publishes.</p><br>
            <p>But the form of its publications also reflects the needs of
                the intended audience. One
                aspect of this is the
                language of publications – as imperialism seeks to downplay information and culture in minority
                languages,
                focusing on English. Thus, our last publication was a dual-language one, with articles in Gujarati and
                English.
                One of our forthcoming books – Tunakataa! –is a dual Kiswahili-English collection of resistance poems.
                This
                language policy also enables us to reach a readership we would not reach if we published in English
                only.

                In a multi-lingual, multi-nationality country such as Kenya, Vita Books also recognises the importance
                of
                the
                availability of different types of resources. We are interested not only in historical topics, but also
                in
                arts,
                culture and literature. One of our future books is a collection of poems and future plans include a
                collection
                of short stories by young people struggling for survival in a hostile and unequal society.</p><br>
            <p>Format is also important to Vita Books. The first two booklets published in 1986
                (by Ngugi and Durrani) were
                small format easy to read booklets which could be carried around and hidden from special branch
                officials on
                the
                lookout for ‘subversive’ materials
                In keeping with its aim of making alternative ideas and experiences available, Vita Books set up the
                Notes
                and
                Quotes Series which are presentation slides on specific themes that are easy to read and follow. They
                are
                available, with other material, for free download on the Vita Books website.
                Vita Books plans in the near future to address another important gap in the information field in Kenya.
                Many
                important books on the history and politics of Kenya are now out of print partly as a result of the
                government’s
                decision not to include them in school curricula and partly as publishers close down or find it
                uneconomical
                to
                keep such books in print. Vita Books is planning to reprint an important set of such books in 2021. A
                difficulty
                in reprinting such material concerns copyright. Publishers need resources to get legal advice on their
                ability
                to reprint out of print material</p><br>
            {{--            <p>{{$singleProjects->project_body}} </p>--}}
            {{--            <div class="row">--}}
            {{--                <div class="col-md-6">--}}
            {{--                    <img src="{{url('/project-pics/'.$singleProjects->back_pic)}}"--}}
            {{--                         alt="fundraising">--}}
            {{--                </div>--}}
            {{--                <div class="col-md-6">--}}
            {{--                    <img src="{{url('/project-pics/'.$singleProjects->back_pic)}}"--}}
            {{--                         alt="fundraising">--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Address:</span> UniWay House, Opposite University Of Nairobi</p>
                </div>
                <div class="col-md-3">
                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <h4 class="mb-4">Do you have any questions?</h4>
                    <form action="{{route('contactUs')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Your Phone Number"
                                   required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea name="messages" id="messages" cols="30" rows="7" class="form-control"
                                      placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>
                <!-- map -->
                <div class="col-md-6">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="600" height="500" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=vitabooks&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://123movies-to.org"></a><br>
                            <style>.mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 600px;
                                }</style>
                            <a href="https://www.embedgooglemap.net"></a>
                            <style>.gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 600px;
                                }</style>
                        </div>
                    </div>

                </div>

                <!-- map end -->
            </div>
        </div>
    </section>
@endsection
