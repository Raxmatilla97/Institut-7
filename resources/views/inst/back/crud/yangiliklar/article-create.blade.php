@extends('layouts.back.makets.sayt-maket')
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Basic Forms</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Basic Forms</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group" role="group">
              <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings icon-left"></i> Settings</button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a></div>
            </div><a class="btn btn-outline-primary" href="full-calender-basic.html"><i class="feather icon-mail"></i></a><a class="btn btn-outline-primary" href="timeline-center.html"><i class="feather icon-pie-chart"></i></a>
          </div>
        </div>
      </div>
      <div class="content-body"><!-- Basic form layout section start -->


<section id="basic-form-layouts">
   @if ($errors->any())
    <div class="alert alert-card alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


  <div class="row match-height">
      <div class="col-md-8">
          <div class="card" style="height: auto;">
              <div class="card-header">
                  <h4 class="card-title" id="basic-layout-tooltip">Issue Tracking</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  
              </div>
              <div class="card-content collapse show">
                  <div class="card-body" style="
                  padding-top: 0px;
              ">

                    <div class="bs-callout-success callout-border-left mt-1 p-1">
                        <strong>Eslatma!</strong>
                        <p>Siz birinchi novbatda yangilik jo'natishdan oldin, yangilik imlo hatolariga etibor bering. Unda qatnashgan suratlar <strong>VERTICAL</strong> emas <strong>GORIZONTAL</strong> bo'lishiga alohida etibor bering. </p>
                    </div>
                    <br>

        <form method="POST" action="{{route('yangiliklar.store')}}" enctype="multipart/form-data">
                        @csrf

                        
                {{-- Yangilikni kiritgan odamni user id --}}
               <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                          <div class="form-body">

                              <div class="form-group">
                                <div class="ul-form__text form-text">@if ($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif</div>
                                  <label for="slug-source">Yangilikni nomlanishi: (Qisqa va aniq holda, lotin yozuvida, kichik harflarda)</label>
                                  <input type="text" required  value="{{ old('title') }}" name="title" id="slug-source"  class="form-control" placeholder="Yangilik nomlari qisqartirilib yozilsin."  data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Yangilik sarlavhasi" data-original-title="" title="">
                              </div>

                              <fieldset class="form-group">
                                <div class="ul-form__text form-text">@if ($errors->has('slug'))
                                    <span class="text-danger">{{ $errors->first('slug') }}</span>
                                @endif</div>
                                  <label for="slug-target">Yangilik url manzili</label>
                                  {{-- <div style="color: blue;"><h6>YANGILIK MANZILI: Iltimos bu yerga hech qanday o'zgartirish kiritmang. Yangilik nomini yozganizda avtomatik bajariladi.</h6></div> --}}
                                  <input type="text"  readonly="readonly" required value="{{ old('slug') }}" name="slug" id="slug-target" class="form-control" placeholder="Bu yerga hechnarsa yozmaysiz avtomatik kiritiladi!"  data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Bu yerni o'zgartirish shart emas!" data-original-title="" title="">
                              </fieldset>
                              <br>
                              <hr class="border-success">


                  <div class="bs-callout-success callout-transparent mt-1">
                            <div class="media align-items-stretch">
                                <div class="d-flex align-items-center bg-success position-relative callout-arrow-left p-2">
                                    <i class="fa fa-bell-o white font-medium-5"></i>
                                </div>
                                <div class="media-body p-1">
                                    <strong>Diqqar!</strong>
                                    <p>Yangilik kafedra yoki bo'lim nomidan chiqishini istaysizmi? Buning uchun pastdagi tugmani bosing. <strong>Eslatma! Agar siz buni istamasangiz bu tugmaga tegmang.</strong></p>
                                </div>
                            </div>
                        </div>
                              
                              <div class="card-content">
                                <div class="card-body border-success">
                                    {{-- <p>Use font icons before pill name to get pills with icon.</p> --}}
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                        <a class="nav-link active" id="homeEle-tab" data-toggle="pill" href="#homeEle" aria-expanded="true"><i class="fa fa-home"></i> Yo'q istamayman!</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" id="profileEle-tab" data-toggle="pill" href="#profileEle" aria-expanded="false"><i class="fa fa-user"></i> Kafedra nomidan</a>
                                        </li>
                                       
                                        <li class="nav-item">
                                        <a class="nav-link" id="aboutEle-tab" data-toggle="pill" href="#aboutEle" aria-expanded="false"><i class="fa fa-envelope"></i> Bo'lim nomidan</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-bars"></i> Boshqa variantlar
                                            </a>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                                                <a class="dropdown-item" id="dropdownEle1-tab" href="#dropdownEle1" data-toggle="pill" aria-expanded="true"><i class="fa fa-fighter-jet"></i> Hali ma'lumot yo'q!</a>
                                                <a class="dropdown-item" id="dropdownEle2-tab" href="#dropdownEle2" data-toggle="pill" aria-expanded="true"><i class="fa fa-fighter-jet"></i> Hali ma'lumot yo'q!</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane active" id="homeEle" aria-labelledby="homeEle-tab" aria-expanded="true">
                                            <p class="">Siz bu funksiyadan foydalanishni istamadingiz shu sabab keyingi qatorga o'tishingiz mumkin.</p>
                                        </div>
                                        <div class="tab-pane show" id="profileEle" role="tabpanel" aria-labelledby="profileEle-tab" aria-expanded="false">
                                           
                                                <p>Endi siz o'z kafedrangizni yoki hohlagan kafedrani nomidan bu yangilikni chiqarishingiz mumkin.</p>
                                                
                                                    
                                                    <div class="ul-form__text form-text">@if ($errors->has('kafedra_id'))
                                                        <span class="text-danger">{{ $errors->first('kafedra_id') }}</span>
                                                    @endif</div>
                                                    <select name="kafedra_id" class="form-control form-control-rounded">
                                                        <option value="">Kerakli kafedrani belgilang!</option>
                                                        @foreach ($kafedralar as $kafedra )
                                                        <option value="{{$kafedra->id}}">{{$kafedra->name}}</option>
                                                        @endforeach
                                                        
                                                       
                                                    </select>
                                                
                                            
                                        </div>
                                        <div class="tab-pane" id="dropdownEle1" role="tabpanel" aria-labelledby="dropdownEle1-tab" aria-expanded="false">
                                            <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                        </div>
                                        <div class="tab-pane" id="dropdownEle2" role="tabpanel" aria-labelledby="dropdownEle2-tab" aria-expanded="false">
                                            <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                        </div>
                                        <div class="tab-pane" id="aboutEle" role="tabpanel" aria-labelledby="aboutEle-tab" aria-expanded="false">
                                            <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <br>
                                    {{-- <div data-repeater-list="repeater-list">
                                        <div data-repeater-item="">
                                            <div class="row mb-1">
                                                <div class="col-9 col-xl-10">
                                                    <div class="ul-form__text form-text">@if ($errors->has('image'))
                                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                                    @endif</div>
                                                    <p>Yangilikga asosiy sahifa uchun surat yuklang!</p>
                                                    <label class="file center-block">
                                                        <input type="file" name="image" id="file">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                </div>
                                                <div class="col-2 col-xl-1">
                                                    <button type="button" data-repeater-delete="" class="btn btn-icon btn-danger mr-1"><i class="feather icon-x"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="row">
                        <div class="form-group col-md-4 mb-2">
                                
                            <img id="blah" src="{{ "/storage/photos/1/news.png" }}" alt="your image" /></div>

                        <div class="form-group col-md-8 mb-2">
                            <label for="inputEmail4" class="ul-form__label">Yangilik muqovasi uchun bitta surat: 16:9 o'lchamda.</label>
                            <div class="ul-form__text form-text">@if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif</div>

                            

                            <style>
                            #blah{
                                max-width:180px;
                              }
                              input[type=file]{
                              padding:10px;
                              background:#2d2d2d;}
                              </style>

                              <script>
                              function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                    
                                    reader.onload = function (e) {
                                        $('#blah')
                                            .attr('src', e.target.result);
                                    };
                    
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }</script>

                           
                                <div class="input-group mb-3 ">
                                <div class="custom-file">
                                   
                                    <input required onchange="readURL(this);" type="file" value="{{ old('image') }}" name="image" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Belgilang
                                            file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="inputGroupFileAddon02"></span>
                                </div>
                            </div>

                            <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                            Some help content goes here
                                    </small>
                        </div>
                   

                    </div>   
                            <br>
                              

                          </div>

                 
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-4">
          <div class="card" style="height: auto;">
              <div class="card-header">
                  <h4 class="card-title" id="basic-layout-icons">Timesheet</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  
              </div>


              
              <div class="card-content collapse show">
                  <div class="card-body">

                      

                        <div class="card card border-teal border-lighten-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin/app-assets/images/portrait/medium/avatar-m-5.png')}}" class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body" style="padding-top: 0px;">
                                    @foreach ( $users as $user)
                                    <h4 class="card-title">{{$user->name}}</h4>
                                    <h6 class="card-subtitle text-muted">{{$user->role_name}}</h6>
                                    @endforeach
                               
                                </div>

                               
                            </div>
                            
                        </div>
                
                          <div class="form-body">

                              

                             

                              <div class="form-group">
                                  <label for="timesheetinput3">Yangilik yozilgan vaqt</label>
                                  <div class="position-relative has-icon-left">
                                      <input readonly="readonly" type="date" id="timesheetinput3" class="form-control" value="{{ old('image') }}" name="created_at">
                                      <div class="form-control-position">
                                          <i class="feather icon-message-square"></i>
                                      </div>
                                  </div>
                              </div>

                              
{{-- 
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="timesheetinput5">Yangilik yozilgan vaqt</label>
                                          <div class="position-relative has-icon-left">
                                              <input type="time" id="timesheetinput5" class="form-control" name="created_at">
                                              <div class="form-control-position">
                                                  <i class="feather icon-clock"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div> --}}
                                  {{-- <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="timesheetinput6">End Time</label>
                                          <div class="position-relative has-icon-left">
                                              <input type="time" id="timesheetinput6" class="form-control" name="endtime">
                                              <div class="form-control-position">
                                                  <i class="feather icon-clock"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div> --}}

                              <div class="form-group">
                                  <label for="timesheetinput7">Faoliyat izohi</label>
                                  <div class="position-relative has-icon-left">
                                      <textarea id="timesheetinput7" rows="10" class="form-control" value="{{ old('notes') }}" name="notes" placeholder="Agar yangilik hali o'z nihoyasiga yetmagan bo'lsa yoki hatoligi bo'lsa bu yerga yoziladi."></textarea>
                                      <div class="form-control-position">
                                          <i class="feather icon-file"></i>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                <label for="issueinput5">Yangilik kategoriyasini belgilang!</label>
                                <div class="ul-form__text form-text">@if ($errors->has('category_id'))
                                  <span class="text-danger">{{ $errors->first('category_id') }}</span>
                              @endif</div>
                                <select id="issueinput5"  name="category_id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="">
                                  <option value="">Kerakli bo'limni tanlang!</option>
                                  @foreach ($category as $cate )                                                       

                                  <option value="{{ $cate->id }}" {{ old('category_id') == $cate->id ? ' selected="selected"' : '' }}>{{$cate->name}}</option> 
                                 @endforeach
                                </select>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                  <div class="card-header" style="
                                  padding-bottom: 0px;
                              ">
                                      <label class="card-title">Siz yaratgan yangilik chop etishga tayyormi?</label>
                                  </div>
                                  <div class="card-content">


                                    <script>

                                    </script>
                                   
                                   <div class="card-body">
                                   
                                    <fieldset>
                                      <div class="custom-control custom-radio">
                                        <input type="radio" name="active" value="0" checked="" class="custom-control-input"  id="customRadio1">
                                        <label class="custom-control-label" for="customRadio1">Yo'q tayyor emas.</label>
                                      </div>
                                    </fieldset>
                                    <fieldset>
                                      <div class="custom-control custom-radio">
                                        <input type="radio" name="active" value="1"  class="custom-control-input"  id="customRadio2" >
                                        <label class="custom-control-label" for="customRadio2">Ha tayyor!</label>
                                      </div>
                                    </fieldset>
                                    
                                  </div>
                                  </div>
                                </div>
                              </div>

                          </div>

                          
                      

                  </div>
              </div>
          </div>
      </div>
  </div>



  <section class="full-editor">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Asosiy yangilikning content qismi:</h4>
                    <a class="heading-elements-toggle"><i class="feather icon-ellipsis-h font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                            <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                            <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        @if ($errors->has('description'))
                        <div class="alert alert-icon-right alert-warning alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <strong>Diqqat!</strong>{{ $errors->first('description') }}
                        </div>
                        @endif
                        <div class="row">
                            <div class=" col-md-12">
                                <div id="full-wrapper">
                                    <div id="full-container">
                                        <div class="col-lg-12 mb-3 " style=" margin: auto;">
                                           
                                             
                                                    <textarea rows="20" name="description" class="form-control my-editor">{!! old('description', '') !!}</textarea>
                                                    <script>
                                                      var editor_config = {
                                                        path_absolute : "/filemanager?type=Files",
                                                        selector: "textarea.my-editor",
                                                        plugins: [
                                                          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                                                          "searchreplace wordcount visualblocks visualchars code fullscreen",
                                                          "insertdatetime media nonbreaking save table contextmenu directionality",
                                                          "emoticons template paste textcolor colorpicker textpattern"
                                                        ],
                                                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                                                        relative_urls: false,
                                                        file_browser_callback : function(field_name, url, type, win) {
                                                          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                                          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
                                                          var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                                                          if (type == 'image') {
                                                            cmsURL = cmsURL + "&type=Images";
                                                          } else {
                                                            cmsURL = cmsURL + "&type=Files";
                                                          }
                                                          tinyMCE.activeEditor.windowManager.open({
                                                            file : cmsURL,
                                                            title : 'Filemanager',
                                                            width : x * 0.8,
                                                            height : y * 0.8,
                                                            resizable : "yes",
                                                            close_previous : "no"
                                                          });
                                                        }
                                                      };
                                                      tinymce.init(editor_config);
                                                    </script>
                                
                                    </div>
                                </div>
                               

                                <div class="card-footer bg-transparent" style="margin-left: auto;">
                                    <div class="mc-footer">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn mr-1 mb-1 btn-success btn-lg"><i class="fa fa-star-o"></i> Yuborish</button>
                                                
                            
                            
                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </form>

    </div>
</section>
  




<!-- // Basic form layout section end -->
      </div>
    </div>
  </div>



  @push('style')
      <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

 
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/forms/toggle/switchery.min.css')}}">

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/components.min.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/core/colors/palette-gradient.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/plugins/forms/switch.min.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/core/colors/palette-callout.min.css') }}">

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
     @endpush

     

  @push('scripts')
  
      <!-- BEGIN: Vendor JS-->
      <script src="{{ asset('admin/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->
    
   <!-- BEGIN: Page Vendor JS-->
   <script src="{{ asset('admin/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js') }}"></script>
   <script src="{{ asset('admin/app-assets/vendors/js/forms/toggle/switchery.min.js') }}"></script>
   <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('admin/app-assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/core/app.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/scripts/customizer.min.js') }}"></script>

        <!-- BEGIN: Page JS-->
        <script src="{{ asset('admin/app-assets/js/scripts/forms/switch.min.js') }}"></script>
        <!-- END: Page JS-->

    <script src="{{ asset('js/slugify.js') }}"></script>
    <script>
    $(document).ready(function(){
      $('#slug-target,#slug-target-span').slugify('#slug-source');
    });
      
    </script>

     <!-- BEGIN: Page JS-->
     <script src="{{ asset('admin/app-assets/js/scripts/forms/custom-file-input.min.js') }}"></script>
     <!-- END: Page JS-->
     
     

    
     
  @endpush
@endsection