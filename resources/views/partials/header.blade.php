<div class="heading-block">
    <div class="row">
        <div class="col-6 left-column">
            <div class="heading-left-block">
                <h2>{{ ucfirst(Route::currentRouteName()) }}</h2>
                <ul class="breadcrumbs">
                    <li><a href="javascript:void(0)">Goa247</a></li>
                    <li>{{ Auth::user()->role->name }}</li>
                </ul>
            </div>
        </div>
        <div class="col-6 right-column">
            <div class="heading-right-block">
                <div class="heading-info">
                    <h5>@auth
                        {{ Auth::user()->username }}
                    @endauth</h5>

                </div>
                <div class="heading-profile">
                    <img src="{{ asset('img/profile.png') }}" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</div>
