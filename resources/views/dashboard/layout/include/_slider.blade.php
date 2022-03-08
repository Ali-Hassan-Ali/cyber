<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ auth()->user()->image_path }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">

            
            <li class="{{ Route::Is('dashboard.welcome') ? 'active' : '' }}">
                <a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i><span>@lang('dashboard.dashboard')</span></a>
            </li>

            <li class="{{ Route::Is('dashboard.challenges') ? 'active' : '' }}">
                <a href="{{ route('dashboard.challenges.index') }}"><i class="fa fa-dashboard"></i><span>@lang('dashboard.dashboard')</span></a>
            </li>

        </ul>

    </section>

</aside>

