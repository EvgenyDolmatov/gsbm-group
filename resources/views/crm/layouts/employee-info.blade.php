<a href="{{route('crm.employees.edit', $employee)}}"
   class="crm-edit text-danger">
    <i class="fa fa-edit"></i>
</a>
<div class="row">
    <div class="col-lg-3 col-12 mb-2">
        <strong>ФИО:</strong>
    </div>
    <div class="col-lg-9 col-12 mb-2">
        <span>{{$employee->getFullName()}}</span>
    </div>

    <div class="col-lg-3 col-12 mb-2">
        <strong>Пол:</strong>
    </div>
    <div class="col-lg-9 col-12 mb-2">
        <span>{{$employee->getSex()}}</span>
    </div>

    <div class="col-lg-3 col-12 mb-2">
        <strong>Дата рождения:</strong>
    </div>
    <div class="col-lg-9 col-12 mb-2">
        <span>{{$employee->getBirthday()}}</span>
    </div>

    <div class="col-lg-3 col-12 mb-2">
        <strong>Место работы:</strong>
    </div>
    <div class="col-lg-9 col-12 mb-2">
        <span>{{$employee->getCompany()}}</span>
    </div>

    <div class="col-lg-3 col-12 mb-2">
        <strong>Профессия:</strong>
    </div>
    <div class="col-lg-9 col-12 mb-2">
        <span>{{$employee->getProfession()}}</span>
    </div>

    <div class="col-lg-3 col-12 mb-2">
        <strong>Дата приёма на работу:</strong>
    </div>
    <div class="col-lg-9 col-12 mb-2">
        <span>{{$employee->getEmploymentDate()}}</span>
    </div>

    @if($employee->height)
        <div class="col-lg-3 col-12 mb-2">
            <strong>Рост:</strong>
        </div>
        <div class="col-lg-9 col-12 mb-2">
            <span>{{$employee->height . ' см'}}</span>
        </div>
    @endif

    @if($employee->clothing_size)
        <div class="col-lg-3 col-12 mb-2">
            <strong>Размер одежды:</strong>
        </div>
        <div class="col-lg-9 col-12 mb-2">
            <span>{{$employee->clothing_size}}</span>
        </div>
    @endif

    @if($employee->shoe_size)
        <div class="col-lg-3 col-12 mb-2">
            <strong>Размер обуви:</strong>
        </div>
        <div class="col-lg-9 col-12 mb-2">
            <span>{{$employee->shoe_size}}</span>
        </div>
    @endif
</div>
