@extends('layouts.back.sayt-app')

@section('sidebar-menyu')
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">

          <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

          <li class=" nav-item"><a href="{{route('admin')}}"><i class="feather icon-slash"></i><span class="menu-title" data-i18n="Disabled Menu">Boshqaruv ko'rinishi</span></a>
            </li>
           
            <li class=" nav-item"><a href="#"><i class="feather icon-monitor"></i><span class="menu-title" data-i18n="Templates">OTM-AXBOROT</span></a>
              <ul class="menu-content">
                <li><a class="menu-item" href="#" data-i18n="Vertical">Yangiliklar</a>
                  <ul class="menu-content">
                  <li><a class="menu-item" href="{{route('yangiliklar.index')}}" data-i18n="Modern Menu">Yangiliklar ro'yxati</a>
                    </li>
                    <li><a class="menu-item" href="{{route('yangiliklar.create')}}" data-i18n="Collapsed Menu">Yangilik qo'shish</a>
                    </li>
                    <li><a class="menu-item" href="../vertical-menu-template" data-i18n="Semi Light">Yangilik bo'limlari</a>
                    </li>
                    <li><a class="menu-item" href="../vertical-menu-template-semi-dark" data-i18n="Semi Dark">Sozlamlar</a>
                    </li>
                   
                  </ul>
                </li>
                <li><a class="menu-item" href="#" data-i18n="Horizontal">E'lonlar</a>
                  <ul class="menu-content">
                    <li><a class="menu-item" href="../horizontal-menu-template" data-i18n="Classic">E'lonlar ro'yxati</a>
                    </li>
                    <li><a class="menu-item" href="../horizontal-menu-template-nav" data-i18n="Nav Dark">E'lon qo'shish</a>
                    </li>
                    <li><a class="menu-item" href="../vertical-menu-template" data-i18n="Semi Light">E'lon bo'limlari</a>
                    </li>
                    <li><a class="menu-item" href="../vertical-menu-template-semi-dark" data-i18n="Semi Dark">Sozlamlar</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            
            
            <li class="disabled nav-item"><a href="#"><i class="feather icon-slash"></i><span class="menu-title" data-i18n="Disabled Menu">Disabled Menu</span></a>
            </li>
            <li class=" nav-item"><a href="https://pixinvent.ticksy.com/" target="_blank"><i class="feather icon-life-buoy"></i><span class="menu-title" data-i18n="Raise Support">Raise Support</span></a>
            </li>
            <li class=" nav-item"><a href="https://pixinvent.com/stack-bootstrap-admin-template/documentation" target="_blank"><i class="feather icon-folder"></i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
            </li>
          </ul>
        </div>
      </div>
      <!-- END: Main Menu-->
@endsection