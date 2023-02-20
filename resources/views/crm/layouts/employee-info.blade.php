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
</div>
