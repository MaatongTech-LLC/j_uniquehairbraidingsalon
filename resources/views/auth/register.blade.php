@extends('layouts.main')
@section('title', 'Register')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">Register</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home')}}"><span>Home</span></a> |
                        <span>Register</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="register_area login_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section_header text-center">
                <h2>Create an Account</h2>
            </div>
            <div class="col-lg-10 registration_form aos-init aos-animate" data-aos="fade-right">
                <form action="https://groomify.bugfinder.net/register" method="post">
                    <input type="hidden" name="_token" value="IKdJuTCcraUyx3IhMGMchWrVy7DbW6MdXVUeWDj7">                        <div class="row g-4">
                        <div class="col-md-6">
                            <div class="name_area icon_position">
                                <input type="text" name="firstname" class="form-control" placeholder="First Name" value="" autocomplete="off" fdprocessedid="hqlrcz">
                                <div class="image_area mt-1">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                                                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="name_area icon_position">
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="" autocomplete="off" fdprocessedid="ment3c">
                                <div class="image_area mt-1">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                                                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="name_area icon_position">
                                <input type="text" name="username" class="form-control" placeholder="Username" value="" autocomplete="off" fdprocessedid="rco8n">
                                <div class="image_area mt-1">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                                                                </div>
                        </div>

                        <div class="col-md-6">
                            <div class="name_area icon_position">
                                                                    <div class="input-group phone-country-code">
                                    <select name="phone_code" class="form-select country_code dialCode-change text-secondary" fdprocessedid="u680jti">
                                                                                        <option value="+376" data-name="Andorra" data-code="AD"> AD (+376)

                                            </option>
                                                                                        <option value="+971" data-name="United Arab Emirates" data-code="AE"> AE (+971)

                                            </option>
                                                                                        <option value="+93" data-name="Afghanistan" data-code="AF"> AF (+93)

                                            </option>
                                                                                        <option value="+1" data-name="Antigua" data-code="AG"> AG (+1)

                                            </option>
                                                                                        <option value="+1" data-name="Anguilla" data-code="AI"> AI (+1)

                                            </option>
                                                                                        <option value="+43" data-name="Austria" data-code="AI"> AI (+43)

                                            </option>
                                                                                        <option value="+355" data-name="Albania" data-code="AL"> AL (+355)

                                            </option>
                                                                                        <option value="+374" data-name="Armenia" data-code="AM"> AM (+374)

                                            </option>
                                                                                        <option value="+599" data-name="Netherlands Antilles" data-code="AN"> AN (+599)

                                            </option>
                                                                                        <option value="+244" data-name="Angola" data-code="AO"> AO (+244)

                                            </option>
                                                                                        <option value="+54" data-name="Argentina" data-code="AR"> AR (+54)

                                            </option>
                                                                                        <option value="+1" data-name="American Samoa" data-code="AS"> AS (+1)

                                            </option>
                                                                                        <option value="+61" data-name="Australia" data-code="AU"> AU (+61)

                                            </option>
                                                                                        <option value="+297" data-name="Aruba" data-code="AW"> AW (+297)

                                            </option>
                                                                                        <option value="+994" data-name="Azerbaijan" data-code="AZ"> AZ (+994)

                                            </option>
                                                                                        <option value="+387" data-name="Bosnia &amp; Herzegovina" data-code="BA"> BA (+387)

                                            </option>
                                                                                        <option value="+1" data-name="Barbados" data-code="BB"> BB (+1)

                                            </option>
                                                                                        <option value="+880" data-name="Bangladesh" data-code="BD"> BD (+880)

                                            </option>
                                                                                        <option value="+32" data-name="Belgium" data-code="BE"> BE (+32)

                                            </option>
                                                                                        <option value="+226" data-name="Burkina Faso" data-code="BF"> BF (+226)

                                            </option>
                                                                                        <option value="+359" data-name="Bulgaria" data-code="BG"> BG (+359)

                                            </option>
                                                                                        <option value="+973" data-name="Bahrain" data-code="BH"> BH (+973)

                                            </option>
                                                                                        <option value="+257" data-name="Burundi" data-code="BI"> BI (+257)

                                            </option>
                                                                                        <option value="+229" data-name="Benin" data-code="BJ"> BJ (+229)

                                            </option>
                                                                                        <option value="+590" data-name="Saint Barthélemy" data-code="BL"> BL (+590)

                                            </option>
                                                                                        <option value="+1" data-name="Bermuda" data-code="BM"> BM (+1)

                                            </option>
                                                                                        <option value="+673" data-name="Brunei" data-code="BN"> BN (+673)

                                            </option>
                                                                                        <option value="+591" data-name="Bolivia" data-code="BO"> BO (+591)

                                            </option>
                                                                                        <option value="+55" data-name="Brazil" data-code="BR"> BR (+55)

                                            </option>
                                                                                        <option value="+1" data-name="The Bahamas" data-code="BS"> BS (+1)

                                            </option>
                                                                                        <option value="+975" data-name="Bhutan" data-code="BT"> BT (+975)

                                            </option>
                                                                                        <option value="+267" data-name="Botswana" data-code="BW"> BW (+267)

                                            </option>
                                                                                        <option value="+375" data-name="Belarus" data-code="BY"> BY (+375)

                                            </option>
                                                                                        <option value="+501" data-name="Belize" data-code="BZ"> BZ (+501)

                                            </option>
                                                                                        <option value="+1" data-name="Canada" data-code="CA"> CA (+1)

                                            </option>
                                                                                        <option value="+243" data-name="Republic of Congo" data-code="CD"> CD (+243)

                                            </option>
                                                                                        <option value="+236" data-name="Central African Republic" data-code="CF"> CF (+236)

                                            </option>
                                                                                        <option value="+242" data-name="Republic of the Congo" data-code="CG"> CG (+242)

                                            </option>
                                                                                        <option value="+41" data-name="Switzerland" data-code="CH"> CH (+41)

                                            </option>
                                                                                        <option value="+225" data-name="Côte dIvoire" data-code="CI"> CI (+225)

                                            </option>
                                                                                        <option value="+682" data-name="Cook Islands" data-code="CK"> CK (+682)

                                            </option>
                                                                                        <option value="+56" data-name="Chile" data-code="CL"> CL (+56)

                                            </option>
                                                                                        <option value="+237" data-name="Cameroon" data-code="CM"> CM (+237)

                                            </option>
                                                                                        <option value="+86" data-name="China" data-code="CN"> CN (+86)

                                            </option>
                                                                                        <option value="+57" data-name="Colombia" data-code="CO"> CO (+57)

                                            </option>
                                                                                        <option value="+506" data-name="Costa Rica" data-code="CR"> CR (+506)

                                            </option>
                                                                                        <option value="+53" data-name="Cuba" data-code="CU"> CU (+53)

                                            </option>
                                                                                        <option value="+238" data-name="Cape Verde" data-code="CV"> CV (+238)

                                            </option>
                                                                                        <option value="+357" data-name="Cyprus" data-code="CY"> CY (+357)

                                            </option>
                                                                                        <option value="+420" data-name="Czech Republic" data-code="CZ"> CZ (+420)

                                            </option>
                                                                                        <option value="+49" data-name="Germany" data-code="DE" selected=""> DE (+49)

                                            </option>
                                                                                        <option value="+253" data-name="Djibouti" data-code="DJ"> DJ (+253)

                                            </option>
                                                                                        <option value="+45" data-name="Denmark" data-code="DK"> DK (+45)

                                            </option>
                                                                                        <option value="+1" data-name="Dominica" data-code="DM"> DM (+1)

                                            </option>
                                                                                        <option value="+1" data-name="Dominican Republic" data-code="DO"> DO (+1)

                                            </option>
                                                                                        <option value="+213" data-name="Algeria" data-code="DZ"> DZ (+213)

                                            </option>
                                                                                        <option value="+593" data-name="Ecuador" data-code="EC"> EC (+593)

                                            </option>
                                                                                        <option value="+372" data-name="Estonia" data-code="EE"> EE (+372)

                                            </option>
                                                                                        <option value="+20" data-name="Egypt" data-code="EG"> EG (+20)

                                            </option>
                                                                                        <option value="+291" data-name="Eritrea" data-code="ER"> ER (+291)

                                            </option>
                                                                                        <option value="+34" data-name="Spain" data-code="ES"> ES (+34)

                                            </option>
                                                                                        <option value="+251" data-name="Ethiopia" data-code="ET"> ET (+251)

                                            </option>
                                                                                        <option value="+358" data-name="Finland" data-code="FI"> FI (+358)

                                            </option>
                                                                                        <option value="+679" data-name="Fiji" data-code="FJ"> FJ (+679)

                                            </option>
                                                                                        <option value="+500" data-name="Falkland Islands" data-code="FK"> FK (+500)

                                            </option>
                                                                                        <option value="+691" data-name="Federated Micronesia" data-code="FM"> FM (+691)

                                            </option>
                                                                                        <option value="+298" data-name="Faroe Islands" data-code="FO"> FO (+298)

                                            </option>
                                                                                        <option value="+33" data-name="France" data-code="FR"> FR (+33)

                                            </option>
                                                                                        <option value="+241" data-name="Gabon" data-code="GA"> GA (+241)

                                            </option>
                                                                                        <option value="+44" data-name="United Kingdom" data-code="GB"> GB (+44)

                                            </option>
                                                                                        <option value="+1" data-name="Grenada" data-code="GD"> GD (+1)

                                            </option>
                                                                                        <option value="+995" data-name="Georgia" data-code="GE"> GE (+995)

                                            </option>
                                                                                        <option value="+594" data-name="French Guiana" data-code="GF"> GF (+594)

                                            </option>
                                                                                        <option value="+233" data-name="Ghana" data-code="GH"> GH (+233)

                                            </option>
                                                                                        <option value="+350" data-name="Gibraltar" data-code="GI"> GI (+350)

                                            </option>
                                                                                        <option value="+299" data-name="Greenland" data-code="GL"> GL (+299)

                                            </option>
                                                                                        <option value="+220" data-name="The Gambia" data-code="GM"> GM (+220)

                                            </option>
                                                                                        <option value="+224" data-name="Guinea" data-code="GN"> GN (+224)

                                            </option>
                                                                                        <option value="+590" data-name="Guadeloupe" data-code="GP"> GP (+590)

                                            </option>
                                                                                        <option value="+240" data-name="Equatorial Guinea" data-code="GQ"> GQ (+240)

                                            </option>
                                                                                        <option value="+30" data-name="Greece" data-code="GR"> GR (+30)

                                            </option>
                                                                                        <option value="+502" data-name="Guatemala" data-code="GT"> GT (+502)

                                            </option>
                                                                                        <option value="+1" data-name="Guam" data-code="GU"> GU (+1)

                                            </option>
                                                                                        <option value="+245" data-name="Guinea-Bissau" data-code="GW"> GW (+245)

                                            </option>
                                                                                        <option value="+592" data-name="Guyana" data-code="GY"> GY (+592)

                                            </option>
                                                                                        <option value="+852" data-name="Hong Kong" data-code="HK"> HK (+852)

                                            </option>
                                                                                        <option value="+504" data-name="Honduras" data-code="HN"> HN (+504)

                                            </option>
                                                                                        <option value="+385" data-name="Croatia" data-code="HR"> HR (+385)

                                            </option>
                                                                                        <option value="+509" data-name="Haiti" data-code="HT"> HT (+509)

                                            </option>
                                                                                        <option value="+36" data-name="Hungary" data-code="HU"> HU (+36)

                                            </option>
                                                                                        <option value="+235" data-name="Chad" data-code="ID"> ID (+235)

                                            </option>
                                                                                        <option value="+62" data-name="Indonesia" data-code="ID"> ID (+62)

                                            </option>
                                                                                        <option value="+353" data-name="Ireland" data-code="IE"> IE (+353)

                                            </option>
                                                                                        <option value="+972" data-name="Israel" data-code="IL"> IL (+972)

                                            </option>
                                                                                        <option value="+91" data-name="India" data-code="IN"> IN (+91)

                                            </option>
                                                                                        <option value="+246" data-name="British Indian Ocean" data-code="IO"> IO (+246)

                                            </option>
                                                                                        <option value="+964" data-name="Iraq" data-code="IQ"> IQ (+964)

                                            </option>
                                                                                        <option value="+98" data-name="Iran" data-code="IR"> IR (+98)

                                            </option>
                                                                                        <option value="+354" data-name="Iceland" data-code="IS"> IS (+354)

                                            </option>
                                                                                        <option value="+39" data-name="Italy" data-code="IT"> IT (+39)

                                            </option>
                                                                                        <option value="+1" data-name="Jamaica" data-code="JM"> JM (+1)

                                            </option>
                                                                                        <option value="+962" data-name="Jordan" data-code="JO"> JO (+962)

                                            </option>
                                                                                        <option value="+81" data-name="Japan" data-code="JP"> JP (+81)

                                            </option>
                                                                                        <option value="+254" data-name="Kenya" data-code="KE"> KE (+254)

                                            </option>
                                                                                        <option value="+996" data-name="Kyrgyzstan" data-code="KG"> KG (+996)

                                            </option>
                                                                                        <option value="+855" data-name="Cambodia" data-code="KH"> KH (+855)

                                            </option>
                                                                                        <option value="+686" data-name="Kiribati" data-code="KI"> KI (+686)

                                            </option>
                                                                                        <option value="+269" data-name="Comoros" data-code="KM"> KM (+269)

                                            </option>
                                                                                        <option value="+1" data-name="Saint Kitts and Nevis" data-code="KN"> KN (+1)

                                            </option>
                                                                                        <option value="+850" data-name="North Korea" data-code="KP"> KP (+850)

                                            </option>
                                                                                        <option value="+82" data-name="South Korea" data-code="KR"> KR (+82)

                                            </option>
                                                                                        <option value="+965" data-name="Kuwait" data-code="KW"> KW (+965)

                                            </option>
                                                                                        <option value="+1" data-name="Cayman Islands" data-code="KY"> KY (+1)

                                            </option>
                                                                                        <option value="+7" data-name="Kazakhstan" data-code="KZ"> KZ (+7)

                                            </option>
                                                                                        <option value="+856" data-name="Laos" data-code="LA"> LA (+856)

                                            </option>
                                                                                        <option value="+961" data-name="Lebanon" data-code="LB"> LB (+961)

                                            </option>
                                                                                        <option value="+1" data-name="St. Lucia" data-code="LC"> LC (+1)

                                            </option>
                                                                                        <option value="+423" data-name="Liechtenstein" data-code="LI"> LI (+423)

                                            </option>
                                                                                        <option value="+94" data-name="Sri Lanka" data-code="LK"> LK (+94)

                                            </option>
                                                                                        <option value="+231" data-name="Liberia" data-code="LR"> LR (+231)

                                            </option>
                                                                                        <option value="+266" data-name="Lesotho" data-code="LS"> LS (+266)

                                            </option>
                                                                                        <option value="+370" data-name="Lithuania" data-code="LT"> LT (+370)

                                            </option>
                                                                                        <option value="+352" data-name="Luxembourg" data-code="LU"> LU (+352)

                                            </option>
                                                                                        <option value="+371" data-name="Latvia" data-code="LV"> LV (+371)

                                            </option>
                                                                                        <option value="+218" data-name="Libya" data-code="LY"> LY (+218)

                                            </option>
                                                                                        <option value="+212" data-name="Morocco" data-code="MA"> MA (+212)

                                            </option>
                                                                                        <option value="+377" data-name="Monaco" data-code="MC"> MC (+377)

                                            </option>
                                                                                        <option value="+373" data-name="Moldova" data-code="MD"> MD (+373)

                                            </option>
                                                                                        <option value="+382" data-name="Montenegro" data-code="ME"> ME (+382)

                                            </option>
                                                                                        <option value="+590" data-name="Saint Martin" data-code="MF"> MF (+590)

                                            </option>
                                                                                        <option value="+261" data-name="Madagascar" data-code="MG"> MG (+261)

                                            </option>
                                                                                        <option value="+692" data-name="Marshall Islands" data-code="MH"> MH (+692)

                                            </option>
                                                                                        <option value="+389" data-name="Macedonia" data-code="MK"> MK (+389)

                                            </option>
                                                                                        <option value="+223" data-name="Mali" data-code="ML"> ML (+223)

                                            </option>
                                                                                        <option value="+95" data-name="Burma Myanmar" data-code="MM"> MM (+95)

                                            </option>
                                                                                        <option value="+976" data-name="Mongolia" data-code="MN"> MN (+976)

                                            </option>
                                                                                        <option value="+853" data-name="Macau" data-code="MO"> MO (+853)

                                            </option>
                                                                                        <option value="+1" data-name="Northern Mariana Islands" data-code="MP"> MP (+1)

                                            </option>
                                                                                        <option value="+596" data-name="Martinique" data-code="MQ"> MQ (+596)

                                            </option>
                                                                                        <option value="+222" data-name="Mauritania" data-code="MR"> MR (+222)

                                            </option>
                                                                                        <option value="+1" data-name="Montserrat" data-code="MS"> MS (+1)

                                            </option>
                                                                                        <option value="+356" data-name="Malta" data-code="MT"> MT (+356)

                                            </option>
                                                                                        <option value="+230" data-name="Mauritius" data-code="MU"> MU (+230)

                                            </option>
                                                                                        <option value="+960" data-name="Maldives" data-code="MV"> MV (+960)

                                            </option>
                                                                                        <option value="+265" data-name="Malawi" data-code="MW"> MW (+265)

                                            </option>
                                                                                        <option value="+52" data-name="Mexico" data-code="MX"> MX (+52)

                                            </option>
                                                                                        <option value="+60" data-name="Malaysia" data-code="MY"> MY (+60)

                                            </option>
                                                                                        <option value="+258" data-name="Mozambique" data-code="MZ"> MZ (+258)

                                            </option>
                                                                                        <option value="+264" data-name="Namibia" data-code="NA"> NA (+264)

                                            </option>
                                                                                        <option value="+687" data-name="New Caledonia" data-code="NC"> NC (+687)

                                            </option>
                                                                                        <option value="+227" data-name="Niger" data-code="NE"> NE (+227)

                                            </option>
                                                                                        <option value="+672" data-name="Norfolk Island" data-code="NF"> NF (+672)

                                            </option>
                                                                                        <option value="+234" data-name="Nigeria" data-code="NG"> NG (+234)

                                            </option>
                                                                                        <option value="+505" data-name="Nicaragua" data-code="NI"> NI (+505)

                                            </option>
                                                                                        <option value="+31" data-name="Netherlands" data-code="NL"> NL (+31)

                                            </option>
                                                                                        <option value="+47" data-name="Norway" data-code="NO"> NO (+47)

                                            </option>
                                                                                        <option value="+977" data-name="Nepal" data-code="NP"> NP (+977)

                                            </option>
                                                                                        <option value="+674" data-name="Nauru" data-code="NR"> NR (+674)

                                            </option>
                                                                                        <option value="+683" data-name="Niue" data-code="NU"> NU (+683)

                                            </option>
                                                                                        <option value="+64" data-name="New Zealand" data-code="NZ"> NZ (+64)

                                            </option>
                                                                                        <option value="+968" data-name="Oman" data-code="OM"> OM (+968)

                                            </option>
                                                                                        <option value="+507" data-name="Panama" data-code="PA"> PA (+507)

                                            </option>
                                                                                        <option value="+51" data-name="Peru" data-code="PE"> PE (+51)

                                            </option>
                                                                                        <option value="+689" data-name="French Polynesia" data-code="PF"> PF (+689)

                                            </option>
                                                                                        <option value="+675" data-name="Papua New Guinea" data-code="PG"> PG (+675)

                                            </option>
                                                                                        <option value="+63" data-name="Philippines" data-code="PH"> PH (+63)

                                            </option>
                                                                                        <option value="+92" data-name="Pakistan" data-code="PK"> PK (+92)

                                            </option>
                                                                                        <option value="+48" data-name="Poland" data-code="PL"> PL (+48)

                                            </option>
                                                                                        <option value="+508" data-name="St Pierre &amp; Miquelon" data-code="PM"> PM (+508)

                                            </option>
                                                                                        <option value="+1" data-name="Puerto Rico" data-code="PR"> PR (+1)

                                            </option>
                                                                                        <option value="+970" data-name="Palestine" data-code="PS"> PS (+970)

                                            </option>
                                                                                        <option value="+351" data-name="Portugal" data-code="PT"> PT (+351)

                                            </option>
                                                                                        <option value="+680" data-name="Palau" data-code="PW"> PW (+680)

                                            </option>
                                                                                        <option value="+595" data-name="Paraguay" data-code="PY"> PY (+595)

                                            </option>
                                                                                        <option value="+974" data-name="Qatar" data-code="QA"> QA (+974)

                                            </option>
                                                                                        <option value="+262" data-name="Réunion" data-code="RE"> RE (+262)

                                            </option>
                                                                                        <option value="+40" data-name="Romania" data-code="RO"> RO (+40)

                                            </option>
                                                                                        <option value="+381" data-name="Serbia" data-code="RS"> RS (+381)

                                            </option>
                                                                                        <option value="+7" data-name="Russia" data-code="RU"> RU (+7)

                                            </option>
                                                                                        <option value="+250" data-name="Rwanda" data-code="RW"> RW (+250)

                                            </option>
                                                                                        <option value="+966" data-name="Saudi Arabia" data-code="SA"> SA (+966)

                                            </option>
                                                                                        <option value="+677" data-name="Solomon Islands" data-code="SB"> SB (+677)

                                            </option>
                                                                                        <option value="+248" data-name="Seychelles" data-code="SC"> SC (+248)

                                            </option>
                                                                                        <option value="+249" data-name="Sudan" data-code="SD"> SD (+249)

                                            </option>
                                                                                        <option value="+46" data-name="Sweden" data-code="SE"> SE (+46)

                                            </option>
                                                                                        <option value="+65" data-name="Singapore" data-code="SG"> SG (+65)

                                            </option>
                                                                                        <option value="+290" data-name="Saint Helena" data-code="SH"> SH (+290)

                                            </option>
                                                                                        <option value="+386" data-name="Slovenia" data-code="SI"> SI (+386)

                                            </option>
                                                                                        <option value="+421" data-name="Slovakia" data-code="SK"> SK (+421)

                                            </option>
                                                                                        <option value="+232" data-name="Sierra Leone" data-code="SL"> SL (+232)

                                            </option>
                                                                                        <option value="+378" data-name="San Marino" data-code="SM"> SM (+378)

                                            </option>
                                                                                        <option value="+221" data-name="Senegal" data-code="SN"> SN (+221)

                                            </option>
                                                                                        <option value="+252" data-name="Somalia" data-code="SO"> SO (+252)

                                            </option>
                                                                                        <option value="+597" data-name="Suriname" data-code="SR"> SR (+597)

                                            </option>
                                                                                        <option value="+239" data-name="São Tomé and Príncipe" data-code="ST"> ST (+239)

                                            </option>
                                                                                        <option value="+503" data-name="El Salvador" data-code="SV"> SV (+503)

                                            </option>
                                                                                        <option value="+963" data-name="Syria" data-code="SY"> SY (+963)

                                            </option>
                                                                                        <option value="+268" data-name="Swaziland" data-code="SZ"> SZ (+268)

                                            </option>
                                                                                        <option value="+1" data-name="Turks and Caicos Islands" data-code="TC"> TC (+1)

                                            </option>
                                                                                        <option value="+228" data-name="Togo" data-code="TG"> TG (+228)

                                            </option>
                                                                                        <option value="+66" data-name="Thailand" data-code="TH"> TH (+66)

                                            </option>
                                                                                        <option value="+992" data-name="Tajikistan" data-code="TJ"> TJ (+992)

                                            </option>
                                                                                        <option value="+690" data-name="Tokelau" data-code="TK"> TK (+690)

                                            </option>
                                                                                        <option value="+670" data-name="Timor-Leste" data-code="TL"> TL (+670)

                                            </option>
                                                                                        <option value="+993" data-name="Turkmenistan" data-code="TM"> TM (+993)

                                            </option>
                                                                                        <option value="+216" data-name="Tunisia" data-code="TN"> TN (+216)

                                            </option>
                                                                                        <option value="+676" data-name="Tonga" data-code="TO"> TO (+676)

                                            </option>
                                                                                        <option value="+90" data-name="Turkey" data-code="TR"> TR (+90)

                                            </option>
                                                                                        <option value="+1" data-name="Trinidad and Tobago" data-code="TT"> TT (+1)

                                            </option>
                                                                                        <option value="+688" data-name="Tuvalu" data-code="TV"> TV (+688)

                                            </option>
                                                                                        <option value="+886" data-name="Taiwan" data-code="TW"> TW (+886)

                                            </option>
                                                                                        <option value="+255" data-name="Tanzania" data-code="TZ"> TZ (+255)

                                            </option>
                                                                                        <option value="+380" data-name="Ukraine" data-code="UA"> UA (+380)

                                            </option>
                                                                                        <option value="+256" data-name="Uganda" data-code="UG"> UG (+256)

                                            </option>
                                                                                        <option value="+1" data-name="United States" data-code="US"> US (+1)

                                            </option>
                                                                                        <option value="+598" data-name="Uruguay" data-code="UY"> UY (+598)

                                            </option>
                                                                                        <option value="+998" data-name="Uzbekistan" data-code="UZ"> UZ (+998)

                                            </option>
                                                                                        <option value="+39" data-name="Vatican City" data-code="VA"> VA (+39)

                                            </option>
                                                                                        <option value="+1" data-name="St Vincent &amp; Grenadines" data-code="VC"> VC (+1)

                                            </option>
                                                                                        <option value="+58" data-name="Venezuela" data-code="VE"> VE (+58)

                                            </option>
                                                                                        <option value="+1" data-name="British Virgin Islands" data-code="VG"> VG (+1)

                                            </option>
                                                                                        <option value="+1" data-name="US Virgin Islands" data-code="VI"> VI (+1)

                                            </option>
                                                                                        <option value="+84" data-name="Vietnam" data-code="VN"> VN (+84)

                                            </option>
                                                                                        <option value="+678" data-name="Vanuatu" data-code="VU"> VU (+678)

                                            </option>
                                                                                        <option value="+681" data-name="Wallis and Futuna" data-code="WF"> WF (+681)

                                            </option>
                                                                                        <option value="+685" data-name="Samoa" data-code="WS"> WS (+685)

                                            </option>
                                                                                        <option value="+383" data-name="Kosovo" data-code="XK"> XK (+383)

                                            </option>
                                                                                        <option value="+967" data-name="Yemen" data-code="YE"> YE (+967)

                                            </option>
                                                                                        <option value="+262" data-name="Mayotte" data-code="YT"> YT (+262)

                                            </option>
                                                                                        <option value="+27" data-name="South Africa" data-code="ZA"> ZA (+27)

                                            </option>
                                                                                        <option value="+260" data-name="Zambia" data-code="ZM"> ZM (+260)

                                            </option>
                                                                                        <option value="+263" data-name="Zimbabwe" data-code="ZW"> ZW (+263)

                                            </option>
                                                                                </select>
                                    <input type="text" name="phone" class="form-control dialcode-set" value="" placeholder="Your Phone Number" fdprocessedid="zubvei">

                                    <div class="image_area mt-1">
                                        <i class="fa-regular fa-phone"></i>
                                    </div>
                                </div>

                                
                                <input type="hidden" name="country_code" value="" class="text-dark">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="name_area icon_position">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" value="" autocomplete="off" fdprocessedid="z1xm4">
                                <div class="image_area mt-1">
                                    <i class="fa-regular fa-envelope"></i>
                                </div>
                                                                </div>
                        </div>

                        <div class="col-md-6">
                            <div class="name_area icon_position">
                                <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" fdprocessedid="89mi6g">
                                <div class="image_area mt-1">
                                    <i class="fa-regular fa-lock"></i>
                                </div>
                                                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="name_area icon_position">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" autocomplete="off" fdprocessedid="7wxgg9">
                                <div class="image_area mt-1">
                                    <i class="fa-regular fa-lock"></i>
                                </div>
                                                                </div>
                        </div>

                        
                    </div>
                    <div class="remember_forgot">
                        <div class="condition_area mt-4 mb-40 form-check  d-flex align-items-center">
                            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1" value="">
                            <label class="form-check-label mt-1" for="exampleCheck1">I Have Read And Agree To The Website Terms And Conditions</label>
                        </div>

                    </div>
                    <button type="submit" class="common_btn mb-40 d-flex justify-content-center align-items-center" fdprocessedid="vshkjl">Register</button>
                    <h6 class="highlight text-center mb-40">Already have account? <a href="{{ route('login') }}"> Sign In</a>
                    </h6>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection