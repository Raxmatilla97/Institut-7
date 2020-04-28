@extends('layouts.back.makets.sayt-maket')



@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-detached">
        <div class="content-body"><div class="content-overlay"></div>


<section class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="bug-list-search">
                    <div class="bug-list-search-content">
                        <div class="sidebar-toggle d-block d-lg-none"><i class="feather icon-menu font-large-1"></i></div>
                        <form action="#">
                            <div class="position-relative">
                                <input type="search" id="search-contacts" class="form-control" placeholder="Yangilik qidirish...">
                                <div class="form-control-position">
                                    <i class="fa fa-search text-size-base text-muted la-rotate-270"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>


  
  <section class="row all-contacts">
    @if ($errors->any())
    <div class="alert alert-card alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="col-12">
        <div class="card">
            <div class="card-head">
                <div class="card-header">
                    <h4 class="card-title">Barcha yangiliklar</h4>
                    <div class="heading-elements mt-0">
                        <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#AddContactModal"><i class="d-md-none d-block feather icon-plus white"></i>
                            <span class="d-md-block d-none">Yangi bo'lim qo'shish</span></button>
                        <div class="modal fade" id="AddContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
                         aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <section class="contact-form">
                                        <form id="form-add-contact" method="POST" action="{{ route('yangilik-bolim.store')}}" class="contact-input" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Yangi bo'lim qo'shish</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <fieldset class="form-group col-12">

                                                    <div class="ul-form__text form-text">@if ($errors->has('name'))
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif</div>

                                                    <input type="text" required  value="{{ old('name') }}" name="name" id="slug-source"  class="name form-control" placeholder="Bo'lim nomi">
                                                </fieldset>
                                                <fieldset class="form-group col-12">
                                                    <div class="ul-form__text form-text">@if ($errors->has('slug'))
                                                        <span class="text-danger">{{ $errors->first('slug') }}</span>
                                                    @endif</div>

                                                    <input type="text"readonly="readonly" required value="{{ old('slug') }}" name="slug" id="slug-target" class="email form-control" placeholder="Bo'lim slug manzili">
                                                </fieldset>
                                                                                            
                                           
                                                <fieldset class="form-group col-12">
                                                    <input type="checkbox" id="favorite" name="active" value="0" class="contact-fav input-chk"> Bo'limni yashirish
                                                    <input type="checkbox" id="favorite" name="active" value="1" class="contact-fav input-chk"> Bo'limni faollashtirish
                                                </fieldset>
                                                <fieldset class="form-group col-12">
                                                    <input type="file" name="img" class="form-control-file" id="user-image">
                                                </fieldset>
                                            </div>
                                            <div class="modal-footer">
                                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                                    <button type="submit" class="btn btn-info add-contact-item"><i
                                                         class="fa fa-paper-plane-o d-block d-lg-none"></i> <span class="d-none d-lg-block">Qo'shish</span></button>
                                                </fieldset>
                                            </div>
                                        </form>
                                    </section>
                                </div>
                            </div>
                        </div>
                        
                       
                        
                        {{-- <span class="dropdown">
                            <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-warning dropdown-menu-right dropdown-toggle btn-md">
                                <i class="feather icon-download-cloud white"></i>Qo'shimcha ishlar</button>
                            <span aria-labelledby="btnSearchDrop1" class="dropdown-menu dropdown-menu-right mt-1">
                              <a class="dropdown-item" href="{{ route('yangiliklar.approw')}}">Tasdiqlanmagan yangiliklar</a>
                              <a class="dropdown-item" href="{{ route('yangiliklar.yesapprow') }} ">Tasdiqlangan yangiliklar</a>
                              <a class="dropdown-item" href="{{ route('yangiliklar.activmas')}}">Aktivmas yangiliklar</a>
                              <a class="dropdown-item" href="{{ route('yangiliklar.activlar')}}">Aktivlashgan yangiliklar</a>
                              <a class="dropdown-item" href="{{ route('yangiliklar.index')}}">Barcha yangiliklar</a>
                            </span>
                        </span> --}}
                        <button class="btn btn-default btn-sm"><i class="feather icon-settings white"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <!-- Task List table -->
                    {{-- <button type="button" class="btn btn-danger btn-sm delete-all mb-1">Delete All</button> --}}
                    <div class="table-responsive">
                        <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle text-center">
                            <thead>
                                <tr>
                                    <th>Mualif</th>
                                    <th>Bo'lim nomi</th>
                                    {{-- <th>Kafedra tomonidan</th> --}}
                                    <th>Yaratilgan sana</th>
                                    <th>Holati</th>
                                    {{-- <th>Tasdiqlanganligi</th> --}}
                                    <th>Qo'shimcha ishlar</th>
                                </tr>
                            </thead>
                            <tbody>
  
                              {{-- Boshlanadi --}}
  
                              @foreach ($articlesCategory as $item)
                                  
                              
  
                                <tr>
                                  <td  style="background: @if($item->active == 0) #FFA5B2; @else #68E2BD; @endif" >
                                      <div class="media">
                                          <div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle" style="width: 40px;
                                              height: auto;"><img src="{{ asset('admin/app-assets/images/portrait/small/avatar-s-2.png')}}" alt="avatar"><i></i></span></div>
                                          {{-- <div class="media-body media-middle">
                                          <a class="media-heading name">{{ $item->users->name}}</a>
                                          </div> --}}
                                      </div>
                                  </td>
                                <td> {{$item->name}}</td>
                                    
                                    {{-- <td class="text-center">
                                      @if ( isset($item->kafedra->name) )  {{$item->kafedra->name}} @else <p class="typo_link text-warning">Kafedra kiritilmagan</p> @endif
                                    </td> --}}
                                    <td>{{ $item->created_at }}</td>
                                    <td class="phone">
                                      <button type="button" class="btn mr-1 mb-1 @if($item->active == 0) btn-danger @else  btn-success  @endif btn-sm"> @if($item->active == 0)<i class="fa fa-moon-o"></i> Activ emas! @else <i class="fa fa-desktop"></i> Bu sahifa active! @endif</button>
                                    
                                      
                                    {{-- <td class="text-center">
                                         <button type="button" class="btn mr-1 mb-1 @if($item->tasdiq == 0) btn-danger  @else  btn-success @endif btn-sm">@if($item->tasdiq == 0)<i class="fa fa-moon-o"></i> Tasdiqlanmagan! @else <i class="fa fa-desktop"></i> Tasdiqlangan! @endif</button>
                                    </td> --}}
                                    <td>
                                        <a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
                                        <a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
                                        <span class="dropdown">
                                            <a id="btnSearchDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
                                                 class="fa fa-ellipsis-v"></i></a>
                                            <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="feather icon-edit-2"></i>
                                                    Edit</a>
                                                <a href="#" class="dropdown-item delete"><i class="feather icon-trash-2"></i> Delete</a>
                                                <a href="#" class="dropdown-item"><i class="feather icon-plus-circle primary"></i> Projects</a>
                                                <a href="#" class="dropdown-item"><i class="feather icon-plus-circle info"></i> Team</a>
                                                <a href="#" class="dropdown-item"><i class="feather icon-plus-circle warning"></i> Clients</a>
                                                <a href="#" class="dropdown-item"><i class="feather icon-plus-circle success"></i> Friends</a>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                                {{-- bu yerda tugaydi --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                  <th>Mualif</th>
                                  <th>Bo'lim nomi</th>
                                  {{-- <th>Kafedra tomonidan</th> --}}
                                  <th>Yaratilgan sana</th>
                                  <th>Holati</th>
                                  {{-- <th>Tasdiqlanganligi</th> --}}
                                  <th>Qo'shimcha ishlar</th>
                                </tr>
                            </tfoot>
                        </table>
  
                        {{-- <div class="col-lg-6 col-md-12">
                         
                          <nav aria-label="Page navigation mb-3">
                              <ul class="pagination justify-content-center">
                                 
                                  {{ $articles->links() }}
                                     
                                 
                              </ul>
                          </nav>
                          
                      </div> --}}
  
  
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
          </div>
        </div>
        
  
  
        </div>
      </div>
    </div>
    <!-- END: Content-->
  
  
    @push('scripts')
        
      <!-- BEGIN: Vendor JS-->
      <script src="{{ asset('admin/app-assets/vendors/js/vendors.min.js')}}"></script>
      <!-- BEGIN Vendor JS-->
  
      <!-- BEGIN: Page Vendor JS-->
      <script src="{{ asset('admin/app-assets/vendors/js/tables/jquery.dataTables.min.js')}}"></script>
      <script src="{{ asset('admin/app-assets/vendors/js/extensions/jquery.raty.js')}}"></script>
      <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
      <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
      <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/dataTables.rowReorder.min.js')}}"></script>
      <script src="{{ asset('admin/app-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
      <!-- END: Page Vendor JS-->
  
      <!-- BEGIN: Theme JS-->
      <script src="{{ asset('admin/app-assets/js/core/app-menu.min.js')}}"></script>
      <script src="{{ asset('admin/app-assets/js/core/app.min.js')}}"></script>
      <script src="{{ asset('admin/app-assets/js/scripts/customizer.min.js')}}"></script>
      <!-- END: Theme JS-->
  
      <!-- BEGIN: Page JS-->
      <script src="{{ asset('admin/app-assets/js/scripts/pages/app-contacts.min.js')}}"></script>
      <!-- END: Page JS-->
      <script src="{{ asset('js/slugify.js') }}"></script>
      <script>
      $(document).ready(function(){
        $('#slug-target,#slug-target-span').slugify('#slug-source');
      });
        
      </script>
    @endpush
  
    @push('style')
        
      <!-- BEGIN: Vendor CSS-->
      <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/vendors.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/tables/extensions/rowReorder.dataTables.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/forms/icheck/icheck.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/forms/icheck/custom.css')}}">
      <!-- END: Vendor CSS-->
  
      <!-- BEGIN: Theme CSS-->
      <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/bootstrap-extended.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/colors.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/components.min.css')}}">
      <!-- END: Theme CSS-->
  
      <!-- BEGIN: Page CSS-->
      <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/core/colors/palette-gradient.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/pages/app-contacts.min.css')}}">
      <!-- END: Page CSS-->
  
      <!-- BEGIN: Custom CSS-->
      <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css')}}">
      <!-- END: Custom CSS-->
  
  
      <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/fonts/simple-line-icons/style.min.css')}}">
      {{-- <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/pages/card-statistics.min.css')}}"> --}}
      {{-- <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/pages/vertical-timeline.min.css')}}"> --}}
  
  
    @endpush

    
@endsection