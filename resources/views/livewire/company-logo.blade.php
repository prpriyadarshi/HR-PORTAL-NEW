<div>
    @auth('emp')
    <img  height="50" width="210" src="{{$employee->company_logo}}" alt="">
    @endauth
    @auth('hr')
    <img height="50" width="210" src="{{ optional($hr)->com->company_logo }}" alt="">
    @endauth

    @auth('it')
    <img  height="50" width="210" src="{{ optional($it)->com->company_logo }}" alt="">
    @endauth
    @auth('finance')
    <img  height="50" width="210" src="{{ optional($finance)->com->company_logo }}" alt="">
    @endauth
</div>