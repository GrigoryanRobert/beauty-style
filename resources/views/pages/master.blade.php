@extends('layouts.pages')

@section('content')
    <div class="container profileuser">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ Auth::user()->name }}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 " align="center">
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="profile" >
                                        <div class="col-md-12col-sm-12 col-xs-12 ">
                                            <div class="form-group">
                                                <div class="profile-pic" style="">
                                                    <div class="profile-pic-box" style="">
                                                        <img src="/images/1.jpg" alt="Picture" >

                                                        <button type="button" class="close" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group image-upload">
                                                <input type="button" value="upload image" class="btn-primary form-control">
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-6 col-lg-6 col-sm-6" align="center">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <form class="form-horizontal profile-form" method="POST" action="{{ route('userprofile') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <div class="row">

                                                    <div class="col-md-9 col-md-offset-1">
                                                        <div class="relative">
                                                            <i class="glyphicon glyphicon-phone input-icon"></i>
                                                            <input type="text" name="userphone" class="form-control input-with-icon" placeholder="Phone">

                                                        </div>

                                                        @if ($errors->has('userphone'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('userphone') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <div class="row">

                                                    <div class="col-md-9 col-md-offset-1">
                                                        <input type="hidden" name="userid" value="{{Auth::user()->id}}">

                                                        <div class="relative">

                                                            <i class="glyphicon glyphicon-map-marker input-icon"></i>
                                                            <input type="text" name="useradress" class="form-control input-with-icon" placeholder="Address">

                                                        </div>


                                                        @if ($errors->has('useradress'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('useradress') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <div class="row">

                                                    <div class="col-md-12 col-md-offset-2">
                                                        <button type="submit" class="btn btn-danger">Send</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="panel-footer">
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>



                </div>


            </div>

                <div class="form-group col-lg-12 col-sm-12">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">

                            <select id="providersearch-service_category_id" class="form-control select2-hidden-accessible">
                                <option value="">Կատեգորիայի անունը</option>
                                <option value="1">Կանանց Մազերի Կտրվածք</option>
                                <option value="2">Կանանց Մազերի Հարդարում</option>
                                <option value="3">Կանանց Մազերի երանգավորում</option>
                                <option value="5">Կանանց Դիմահարդարում</option>
                                <option value="4">Կանանց Մատնահարդարում</option>
                                <option value="7">Տղամարդկանց Մատնահարդարում</option>
                                <option value="6">Տղամարդկանց Մազերի Կտրվածք</option>
                                <option value="8">Երեխաների Մազերի Խնամք</option>
                                <option value="9">Կոսմետոլոգիա</option>
                            </select>

                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">

                            <select id="providersearch-service_id" class="form-control select2-hidden-accessible" >
                                <option value="">Ծառայության անվանումը</option>
                                <optgroup label="Կանանց Մազերի Կտրվածք">
                                    <option value="1">Կտրվածք (կարճ մազեր - մինչև ուսագիծ)</option>
                                    <option value="2">Կտրվածք (երկար մազեր - ուսագծից երկար)</option>
                                    <option value="3">Կրեատիվ կտրվածք (կարճ մազեր - մինչև ուսագիծ)</option>
                                    <option value="4">Կրեատիվ կտրվածք (երկար մազեր - ուսագծից երկար)</option>
                                    <option value="5">Մազափնջի կտրվածք/հավասարեցում</option>
                                </optgroup>
                                <optgroup label="Կանանց Մազերի Հարդարում">
                                    <option value="134">Մազերի կերատինային հարթեցում (կարճ մազեր - մինչև ուսագիծ)</option>
                                    <option value="131">Քիմիական գանգրացում  (կարճ մազեր - մինչև ուսագիծ)</option>
                                    <option value="132">Քիմիական գանգրացում  (երկար մազեր - ուսագծից երկար)</option>
                                    <option value="133">Մազերի կերատինային հարթեցում (երկար մազեր - ուսագծից երկար)</option>
                                    <option value="6">Հարդարում (կարճ մազեր - մինչև ուսագիծ)</option>
                                    <option value="7">Հարդարում (երկար մազեր - ուսագծից երկար)</option>
                                    <option value="126">Խառը ֆեն (կարճ մազեր - մինչեւ ուսագիծ)</option>
                                    <option value="127">Խառը ֆեն (երկար մազեր - ուսագծից երկար)</option>
                                    <option value="8">Կանացի սանրվածք</option>
                                    <option value="9">Ունելիով հարդարում  (կարճ մազեր - մինչև ուսագիծ)</option>
                                    <option value="10">Ունելիով հարդարում (երկար մազեր - ուսագծից երկար)</option>
                                    <option value="11">Հարդարում դիֆֆուզորով (կարճ մազեր - մինչև ուսագիծ)</option>
                                    <option value="12">Հարդարում դիֆֆուզորով (երկար մազեր - ուսագծից երկար)</option>
                                    <option value="13">Հարսանեկան սանրվածք</option>
                                    <option value="62">Աֆրիկյան հյուսքեր (1 հատ)</option>
                                    <option value="63">Գոֆրե</option>
                                    <option value="14">Մազերի երկարացում</option>
                                    <option value="61">Հյուսքեր</option>
                                </optgroup>
                                <optgroup label="Կանանց Մազերի երանգավորում">
                                    <option value="15">Մազերի ներկում (չի ներառում ներկի գինը) (կարճ մազեր - մինչև ուսագիծ)</option>
                                    <option value="16">Մազերի ներկում (չի ներառում ներկի գինը) (երկար մազեր - ուսագծից երկար)</option>
                                    <option value="17">Արմատների ներկում (չի ներառում ներկի գինը)</option>
                                    <option value="18">Մազերի երանգավորում (կարճ մազեր - մինչև ուսագիծ)</option>
                                    <option value="19">Մազերի երանգավորում  (երկար մազեր - ուսագծից երկար)</option>
                                    <option value="20">Նրբաթիթեղով շերտաներկում (կարճ մազեր - մինչև ուսագիծ)</option>
                                    <option value="21">Նրբաթիթեղով շերտաներկում (երկար մազեր - ուսագծից երկար)</option>
                                    <option value="22">Գլխարկով շերտաներկում (կարճ մազեր - մինչև ուսագիծ)</option>
                                    <option value="23">Գլխարկով շերտաներկում (երկար մազեր - ուսագծից երկար)</option>
                                    <option value="24">Մազերի գունաթափում (չի ներառում նյութի գինը) (կարճ մազեր - մինչև ուսագիծ)</option>
                                    <option value="25">Մազերի գունաթափում (չի ներառում նյութի գինը) (երկար մազեր - ուսագծից երկար)</option>
                                    <option value="26">Բալայաժ (կարճ մազեր - մինչև ուսագիծ)</option>
                                    <option value="27">Բալայաժ (երկար մազեր - ուսագծից երկար)</option>
                                    <option value="59">Օմբրե</option>
                                </optgroup>
                                <optgroup label="Կանանց Դիմահարդարում">
                                    <option value="37">Կանացի հոնքերի ձևավորում</option>
                                    <option value="38">Կանացի ամենօրյա դիմահարդարում</option>
                                    <option value="39">Կանացի երեկոյան դիմահարդարում</option>
                                    <option value="40">Կանացի հարսանեկան դիմահարդարում</option>
                                    <option value="58">Ֆոտոսեսիայի դիմահարդարում</option>
                                    <option value="129">Կանացի փորձնական դիմահարդարում</option>
                                    <option value="135">Թարթիչների շիթերով ամրացում</option>
                                    <option value="124">Թարթիչների ամբողջական ամրացում</option>
                                </optgroup>
                                <optgroup label="Կանանց Մատնահարդարում">
                                    <option value="28">Կանացի դասական մանիկյուր (մաքրում, լաքապատում)</option>
                                    <option value="77">Կանացի ապարատային մանիկյուր (մաքրում, լաքապատում)</option>
                                    <option value="78">Կանացի կոմբինացված մանիկյուր (մաքրում, լաքապատում)</option>
                                    <option value="30">Կանացի գել-լաքով մանիկյուր (մաքրում, լաքապատում)</option>
                                    <option value="79">Կանացի գել-լաքով մանիկյուրի լաքապատման հեռացում</option>
                                    <option value="57">Կանացի ձեռքերի եղունգների գելով աճեցում</option>
                                    <option value="80">Կանացի ձեռքերի եղունգների ակրիլով աճեցում</option>
                                    <option value="81">Կանացի ձեռքերի եղունգների տիպսերով աճեցում</option>
                                    <option value="82">Կանացի ձեռքերի եղունգների "ֆռենչ" աճեցում</option>
                                    <option value="83">Կանացի ձեռքերի եղունգների աճեցման հեռացում (գել,ակրիլ,տիպս)</option>
                                    <option value="84">Կանացի մանիկյուր և դիզայն</option>
                                    <option value="85">Կանացի ձեռքերի եղունգների ուղղում (գել)</option>
                                    <option value="86">Կանացի ձեռքերի եղունգների ուղղում (ակրիլ)</option>
                                    <option value="87">Կանացի ձեռքերի եղունգների ամրապնդում</option>
                                    <option value="88">Կանացի ձեռքերի եղունգների բուժիչ լաքապատում</option>
                                    <option value="89">Կանացի ձեռքերի պարաֆինային թերապիա</option>
                                    <option value="33">Կանացի դասական պեդիկյուր (մաքրում, լաքապատում)</option>
                                    <option value="91">Կանացի ապարատային պեդիկյուր (մաքրում, լաքապատում)</option>
                                    <option value="92">Կանացի կոմբինացված պեդիկյուր (մաքրում, լաքապատում)</option>
                                    <option value="93">Կանացի գել-լաքով պեդիկյուր (մաքրում, լաքապատում)</option>
                                    <option value="94">Կանացի գել-լաքով պեդիկյուրի լաքապատման հեռացում</option>
                                    <option value="96">Կանացի ոտքերի եղունգների գելով աճեցում</option>
                                    <option value="97">Կանացի ոտքերի եղունգների ակրիլով աճեցում</option>
                                    <option value="98">Կանացի ոտքերի եղունգների տիպսերով աճեցում</option>
                                    <option value="99">Կանացի ոտքերի եղունգների "ֆռենչ" աճեցում</option>
                                    <option value="100">Կանացի ոտքերի եղունգների աճեցման հեռացում (գել,ակրիլ,տիպս)</option>
                                    <option value="101">Կանացի պեդիկյուր և դիզայն</option>
                                    <option value="102">Կանացի ոտքերի եղունգների ուղղում (գել)</option>
                                    <option value="103">Կանացի ոտքերի եղունգների ուղղում (ակրիլ)</option>
                                    <option value="104">Կանացի ոտքերի եղունգների ամրապնդում</option>
                                    <option value="105">Կանացի ոտքերի եղունգների բուժիչ լաքապատում</option>
                                    <option value="106">Կանացի ոտքերի պարաֆինային թերապիա</option>
                                    <option value="35">Կանացի ոտքերի կոշտուկների հեռացում</option>
                                    <option value="36">Կանացի դասական մանիկյուր և պեդիկյուր (մաքրում)</option>
                                </optgroup>
                                <optgroup label="Տղամարդկանց Մատնահարդարում">
                                    <option value="46">Տղամարդու դասական մանիկյուր (մաքրում, լաքապատում)</option>
                                    <option value="64">Տղամարդու ապարատային մանիկյուր (մաքրում, լաքապատում)</option>
                                    <option value="68">Տղամարդու ձեռքերի պարաֆինային թերապիա</option>
                                    <option value="50">Տղամարդու դասական պեդիկյուր (մաքրում, լաքապատում)</option>
                                    <option value="70">Տղամարդու ապարատային պեդիկյուր (մաքրում, լաքապատում)</option>
                                    <option value="76">Տղամարդու ոտքերի պարաֆինային թերապիա</option>
                                    <option value="53">Տղամարդու դասական մանիկյուր և պեդիկյուր</option>
                                </optgroup>
                                <optgroup label="Տղամարդկանց Մազերի Կտրվածք">
                                    <option value="41">Տղամարդու կտրվածք</option>
                                    <option value="42">Տղամարդու կրեատիվ կտրվածք</option>
                                    <option value="43">Տղամարդու մազերի եզրավորում</option>
                                    <option value="44">Տղամարդու մազերի հարդարում</option>
                                </optgroup>
                                <optgroup label="Երեխաների Մազերի Խնամք">
                                    <option value="54">Աղջիկ երեխայի կտրվածք (մինչեւ 12 տարեկան)</option>
                                    <option value="138">Աղջիկ երեխայի մազերի հարդարում (մինչեւ 12 տարեկան)</option>
                                    <option value="56">Աղջիկ երեխայի մազափնջի կտրվածք/եզրավորում (մինչեւ 12 տարեկան)</option>
                                    <option value="136">Աղջիկ երեխայի հյուսքեր (մինչեւ 12 տարեկան)</option>
                                    <option value="55">Տղա երեխայի կտրվածք (մինչեւ 12 տարեկան)</option>
                                    <option value="137">Տղա երեխայի մազերի հարդարում (մինչեւ 12 տարեկան)</option>
                                </optgroup>
                                <optgroup label="Կոսմետոլոգիա">
                                    <option value="107">Շրթունքի էպիլյացիա (ոսկ)</option>
                                    <option value="108">Թևատակերի էպիլյացիա (ոսկ)</option>
                                    <option value="109">Փորի էպիլյացիա (ոսկ)</option>
                                    <option value="110">Մեջքի էպիլյացիա (ոսկ)</option>
                                    <option value="111">Ձեռքերի էպիլյացիա (ոսկ)</option>
                                    <option value="112">Ոտքերի էպիլյացիա (մինչև ծնկները) (ոսկ)</option>
                                    <option value="113">Ոտքերի էպիլյացիա (ծնկներից վեր) (ոսկ)</option>
                                    <option value="114">Բիկինի էպիլյացիա (ոսկ)</option>
                                    <option value="115">Էլեկտրական էպիլյացիա (յուրաքանչյուր 30 րոպեն)</option>
                                    <option value="116">Դեմքի մեխանիկական մաքրում</option>
                                    <option value="117">Դեմքի դիմակ</option>
                                    <option value="118">Դեմքի ապարատային մաքրում</option>
                                    <option value="119">Ուլտրաձայնային մաքրում և դիմակ</option>
                                    <option value="120">Կանացի մերսում (երես, պարանոց, դեկոլտե) (1 պրոցեդուրա)</option>
                                    <option value="121">Դարսոնվալ</option>
                                    <option value="122">Ականջների դակում</option>
                                    <option value="123">Թարթիչների լամինացիա</option>
                                    <option value="125">Թարթիչների աճեցում (լիցք)</option>
                                    <option value="140">Էլոս շրթունքի էպիլյացիա</option>
                                    <option value="141">Էլոս թևատակերի էպիլյացիա</option>
                                    <option value="142">Էլոս փորի էպիլյացիա</option>
                                    <option value="143">Էլոս մեջքի էպիլյացիա</option>
                                    <option value="144">Էլոս ձեռքերի էպիլյացիա</option>
                                    <option value="145">Էլոս ոտքերի էպիլյացիա (մինչև ծնկները)</option>
                                    <option value="146">Էլոս ոտքերի էպիլյացիա (ծնկներից վերև)</option>
                                    <option value="139">Էլոս  բիկինի էպիլյացիա</option>
                                </optgroup>
                            </select>

                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group field-providersearch-service_location">

                            <select id="providersearch-service_location" class="form-control select2-hidden-accessible">
                                <option value="">Ծառայության վայրը</option>
                                <option value="P">Մասնագետի գտնվելու վայրում</option>
                                <option value="H">Պատվիրատուի գտնվելու վայրում</option>
                            </select>

                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group field-providersearch-provider_location">

                            <div><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="text" class="form-control tt-hint" value="" data-krajee-typeahead="typeahead_307a21f9" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><input type="text" id="providersearch-provider_location" class="form-control tt-input" name="ProviderSearch[provider_location]" value="" placeholder="Քաղաք" data-krajee-typeahead="typeahead_307a21f9" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-providersearch_provider_location_data_1"></div></div></span></div>

                            <div class="help-block"></div>
                        </div>
                    </div>

                </div>


        </div>


        </div>

    </div>



@endsection
