@extends("frontend.layouts.app")

@section("title" , "جامعة الهادي | الهيكل التنظيمي والاداري")

@section("css")

    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>

@endsection

@section("content")

    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url(assets/images/campus-2-2.jpg);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">كلمة السيد العميد</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Contact Start ======-->

    <section class="contact-area">
        <div class="container">
            <div class="contact-form" style="padding-top: 20px;">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-title text-center">
                            <div id='zc' style="overflow: visible;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Contact Ends ======-->

    <!--====== Newsletter Start ======-->

    <section class="newsletter-area">
        <div class="container">
            <div class="newsletter-wrapper bg_cover wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s"
                 style="background-image: url(assets/images/newsletter-bg-1.webp);">
                <div class="row align-items-center">

                    <div class="col-lg-7">

                        <div class="comment-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <input type="email" placeholder="البريد الالكتروني">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <textarea placeholder="التواصل معنا بخصوص ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <button class="main-btn">Submit now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="section-title-2 mt-25">
                            <h2 class="title">أتصـــل بــنا</h2>
                            <span class="line"></span>
                            <p>نحن دائما في اتقبال الاتصالات منكم</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Newsletter Ends ======-->



@endsection
@section("js")
    <script>

        var data = [

            {id:'collegeboard', name:'مجلس الكلية', parent:'', cls:'bdegblue'},

            {id:'fkn1', fake:true, name:'1', parent:'collegeboard', sibling:'president'},
            {id:'president', name:'العميد', parent:'collegeboard', cls:'byellow'},
            {id:'execasspres', name:'مكتب العميد', parent:'collegeboard', sibling:'president', cls:'bwhite'},
            {id:'execvicepres', name:'Executive Vice<br>President/<br>Administrative<br>Services', parent:'president', cls:'bred'},
            {id:'chinof', name:'Chief Information Officer', parent:'execvicepres', cls:'bgreen'},
            {id:'assvicepres', name:'Associate Vice President', parent:'execvicepres', cls:'bgreen'},

            {id:'fkn2', fake:true, name:'2', parent:'president'},
            {id:'fkn3', fake:true, name:'3', parent:'fkn2'},

            {id:'prmdir', name:'Public Relations & Marketing<br>Senior Director', parent:'fkn3', cls:'bblue'},
            {id:'prc', name:'Public Relations<br>Coordinator', parent:'prmdir', cls:'bwhite'},
            {id:'sw', name:'Switchboard', parent:'prmdir', reference:'prc', cls:'bwhite'},
            {id:'ps', name:'Publications Specialist', parent:'prmdir', reference:'prc', cls:'bwhite'},
            {id:'gd', name:'Graphic Designer', parent:'prmdir', reference:'prc', cls:'bwhite'},
            {id:'ms', name:'Marketing Specialist', parent:'prmdir', reference:'prc', cls:'bwhite'},
            {id:'wcm', name:'Web Content Manager', parent:'prmdir', reference:'prc', cls:'bwhite'},

            {id:'fed', name:'Foundation<br>Executive Director', parent:'fkn3', cls:'bblue'},
            {id:'safed', name:'Senior Accountant', parent:'fed', cls:'bwhite'},
            {id:'dps', name:'Development Program<br>Specialist', parent:'fed', reference:'safed', cls:'bwhite'},

            {id:'sdirsp', name:'Senior Director<br>Institutional Research and<br>Strategic Planning', parent:'fkn3', cls:'bblue'},
            {id:'sra', name:'Senior Research Analyst', parent:'sdirsp', cls:'bwhite'},
            {id:'rs', name:'Research Specialist', parent:'sdirsp', reference:'sra', cls:'bwhite'},

            {id:'vicepresle', name:'Vice President<br>for Learning', parent:'president', cls:'bred'},
            {id:'assvicepresl', name:'Associate Vice President', parent:'vicepresle', cls:'bgreen'},

            {id:'vicepresstu', name:'Vice President for<br>Student Services', parent:'president', cls:'bred'}
        ];

        var cdata = {
            type : 'tree',
            plotarea : {
                margin : 20
            },
            options : {
                aspect : 'tree-down',
                orgChart : true,
                packingFactor : 1,
                link : {
                    lineColor : '#000',
                    lineWidth : 2,
                },
                node : {
                    borderColor : '#000',
                    borderWidth : 2,
                    hoverState : {
                        visible : false
                    },
                    fillAngle : 0,
                    gradientStops : '0.01 0.5 0.55 0.99',
                    shadow : true,
                    shadowDistance : 4,
                    shadowColor : '#ccc',
                    label : {
                        color : '#000',
                        fontSize : 10
                    }
                },
                'link[parent-prmdir]' : {
                    aspect : 'side-before'
                },
                'link[parent-fed]' : {
                    aspect : 'side-before'
                },
                'link[parent-sdirsp]' : {
                    aspect : 'side-before'
                },
                'node[cls-byellow]' : {
                    type : 'box',
                    width : 200,
                    height : 60,
                    gradientColors : '#FDDA58 #FBF4BD #FBF4BD #FDDA58',
                    label : {
                        fontSize : 15,
                        fontWeight : 'bold'
                    }
                },
                'node[cls-bred]' : {
                    type : 'box',
                    width : 120,
                    height : 70,
                    gradientColors : '#A15A58 #D6B2B2 #D6B2B2 #A15A58'
                },
                'node[cls-bdegblue]' : {
                    type : 'box',
                    width : 300,
                    height : 70,
                    gradientColors : '#51B7CD #C0E0EB #C0E0EB #51B7CD',
                    label : {
                        fontSize : 15,
                        fontWeight : 'bold'
                    }
                },
                'node[cls-bblue]' : {
                    type : 'box',
                    width : 180,
                    height : 65,
                    backgroundColor : '#B7DDE8'
                },
                'node[cls-bgreen]' : {
                    type : 'box',
                    width : 130,
                    height : 50,
                    backgroundColor : '#C3D79A'
                },
                'node[cls-bwhite]' : {
                    type : 'box',
                    width : 140,
                    height : 50,
                    backgroundColor : '#fff',
                    offsetX: 30
                }
            },
            series : data
        };
        zingchart.render({
            id : 'zc',
            width : 950,
            height : 950,
            output : 'svg',
            data : cdata
        });

    </script>
@endsection
