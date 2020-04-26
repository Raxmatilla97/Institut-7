@extends('layouts.back.makets.sayt-maket')

@section('content')

{{-- @push('style')




     
 <!-- END: Page CSS-->
  
     
@endpush --}}

  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-detached">
        <div class="content-body"><div class="content-overlay"></div>
        <section id="minimal-statistics">
            <div class="row">
              <div class="col-12 mt-3 mb-1">
                <h4 class="text-uppercase">Yangiliklar bo'yicha statistik ma'lumotlar</h4>
                <p>Statistics on minimal cards.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-pencil primary font-large-2 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>{{ $articleStat->count()}} ta</h3>
                          <span>Barcha yangiliklar</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-speech warning font-large-2 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>N ta</h3>
                          <span>Izohlar</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-rocket danger font-large-2 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>{{ $articleStatNotActive->count()}} ta</h3>
                          <span>Activlashmagan</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-rocket success font-large-2 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>{{ $articleStatActive->count()}} ta</h3>
                          <span>Activlashgan</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          
            </div>
          
            <div class="row">
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">
                          <h3 class="danger">278</h3>
                          <span>New Projects</span>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-rocket danger font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">
                          <h3 class="success">156</h3>
                          <span>New Clients</span>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-user success font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">
                          <h3 class="warning">64.89 %</h3>
                          <span>Conversion Rate</span>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-pie-chart warning font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">
                          <h3 class="primary">423</h3>
                          <span>Support Tickets</span>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-support primary font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            </div>
          </section>

<section class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">
              <div class="bug-list-search">
                  <div class="bug-list-search-content">
                      <div class="sidebar-toggle d-block d-lg-none"><i class="feather icon-menu font-large-1"></i></div>
                      <form action="#">
                          <div class="position-relative">
                              <input type="search" id="search-contacts" class="form-control" placeholder="Search contacts...">
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
  <div class="col-12">
      <div class="card">
          <div class="card-head">
              <div class="card-header">
                  <h4 class="card-title">All Contacts</h4>
                  <div class="heading-elements mt-0">
                      <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#AddContactModal"><i class="d-md-none d-block feather icon-plus white"></i>
                          <span class="d-md-block d-none">Add Contacts</span></button>
                      <div class="modal fade" id="AddContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
                       aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <section class="contact-form">
                                      <form id="form-add-contact" class="contact-input">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel1">Add New Contact</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <fieldset class="form-group col-12">
                                                  <input type="text" id="contact-name" class="contact-name form-control" placeholder="Name">
                                              </fieldset>
                                              <fieldset class="form-group col-12">
                                                  <input type="text" id="contact-email" class="contact-email form-control" placeholder="Email">
                                              </fieldset>
                                              <fieldset class="form-group col-12">
                                                  <input type="text" id="contact-phone" class="contact-phone form-control" placeholder="Phone Number">
                                              </fieldset>
                                              <fieldset class="form-group col-12">
                                                  <input type="checkbox" id="favorite" class="contact-fav input-chk"> Favorite
                                              </fieldset>
                                              <fieldset class="form-group col-12">
                                                  <input type="file" class="form-control-file" id="user-image">
                                              </fieldset>
                                          </div>
                                          <div class="modal-footer">
                                              <fieldset class="form-group position-relative has-icon-left mb-0">
                                                  <button type="button" id="add-contact-item" class="btn btn-info add-contact-item" data-dismiss="modal"><i
                                                       class="fa fa-paper-plane-o d-block d-lg-none"></i> <span class="d-none d-lg-block">Add New</span></button>
                                              </fieldset>
                                          </div>
                                      </form>
                                  </section>
                              </div>
                          </div>
                      </div>
                      <div class="modal fade" id="EditContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                       aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <section class="contact-form">
                                      <form id="form-edit-contact" class="contact-input">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <fieldset class="form-group col-12">
                                                  <input type="text" id="name" class="name form-control" placeholder="Name">
                                              </fieldset>
                                              <fieldset class="form-group col-12">
                                                  <input type="text" id="email" class="email form-control" placeholder="Email">
                                              </fieldset>
                                              <fieldset class="form-group col-12">
                                                  <input type="text" id="phone" class="phone form-control" placeholder="Phone Number">
                                              </fieldset>
                                              <span id="fav" class="d-none"></span>
                                          </div>
                                          <div class="modal-footer">
                                              <fieldset class="form-group position-relative has-icon-left mb-0">
                                                  <button type="button" id="edit-contact-item" class="btn btn-info edit-contact-item" data-dismiss="modal"><i
                                                       class="fa fa-paper-plane-o d-lg-none"></i> <span class="d-none d-lg-block">Edit</span></button>
                                              </fieldset>
                                          </div>
                                      </form>
                                  </section>
                              </div>
                          </div>
                      </div>
                      <span class="dropdown">
                          <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-warning dropdown-menu-right dropdown-toggle btn-md">
                              <i class="feather icon-download-cloud white"></i></button>
                          <span aria-labelledby="btnSearchDrop1" class="dropdown-menu dropdown-menu-right mt-1">
                              <a href="#" class="dropdown-item"><i class="feather icon-upload"></i> Import</a>
                              <a href="#" class="dropdown-item"><i class="feather icon-download"></i> Export</a>
                              <a href="#" class="dropdown-item"><i class="feather icon-shuffle"></i> Find Duplicate</a>
                          </span>
                      </span>
                      <button class="btn btn-default btn-sm"><i class="feather icon-settings white"></i></button>
                  </div>
              </div>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <!-- Task List table -->
                  <button type="button" class="btn btn-danger btn-sm delete-all mb-1">Delete All</button>
                  <div class="table-responsive">
                      <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle text-center">
                          <thead>
                              <tr>
                                  <th>Mualif</th>
                                  <th>Yangilik nomi</th>
                                  <th>Kafedra tomonidan</th>
                                  <th>Yaratilgan sana</th>
                                  <th>Holati</th>
                                  <th>Tasdiqlanganligi</th>
                                  <th>Qo'shimcha ishlar</th>
                              </tr>
                          </thead>
                          <tbody>

                            {{-- Boshlanadi --}}

                            @foreach ($articles as $item)
                                
                            

                              <tr>
                                <td  style="background: @if($item->active == 0) #FFA5B2; @else #68E2BD; @endif" >
                                    <div class="media">
                                        <div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{ asset('admin/app-assets/images/portrait/small/avatar-s-2.png')}}" alt="avatar"><i></i></span></div>
                                        {{-- <div class="media-body media-middle">
                                        <a class="media-heading name">{{ $item->users->name}}</a>
                                        </div> --}}
                                    </div>
                                </td>
                              <td> {{$item->title}}</td>
                                  
                                  <td class="text-center">
                                    @if ( isset($item->kafedra->name) )  {{$item->kafedra->name}} @else <p class="typo_link text-warning">Kafedra kiritilmagan</p> @endif
                                  </td>
                                  <td>{{ $item->created_at }}</td>
                                  <td class="phone">
                                    <button type="button" class="btn mr-1 mb-1 @if($item->active == 0) btn-danger @else  btn-success  @endif btn-sm"> @if($item->active == 0)<i class="fa fa-moon-o"></i> Activ emas! @else <i class="fa fa-desktop"></i> Bu sahifa active! @endif</button>
                                  
                                    
                                  <td class="text-center">
                                       <button type="button" class="btn mr-1 mb-1 @if($item->tasdiq == 0) btn-danger  @else  btn-success @endif btn-sm">@if($item->tasdiq == 0)<i class="fa fa-moon-o"></i> Tasdiqlanmagan! @else <i class="fa fa-desktop"></i> Tasdiqlangan! @endif</button>
                                  </td>
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
                                <th>Yangilik nomi</th>
                                <th>Kafedra tomonidan</th>
                                <th>Yaratilgan sana</th>
                                <th>Holati</th>
                                <th>Tasdiqlanganligi</th>
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