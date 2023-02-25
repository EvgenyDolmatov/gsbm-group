@extends('layouts.account')

@section('title', $employee->getFullName().' (ред.)')
@section('content')
    <section id="add-services">
        <div class="container-xl container-fluid">
            <div class="section-content">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-xl-4 col-lg-5 col-12">
                        @include('layouts.components.crm-sidebar')
                    </div>
                    <!-- Page Content -->
                    <div class="col-lg-7 offset-xl-1 offset-0 col-12">
                        <div class="page-right-content">
                            <div class="service-title">
                                <h2>{{$employee->getFullName().' (ред.)'}}</h2>
                            </div>

                            <form action="{{route('crm.employees.update', $employee)}}" method="POST"
                                  class="account-form">
                                @csrf @method('PUT')

                                {{-- Surname --}}
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="surname" class="form-label">Фамилия</label>
                                            <input type="text" id="surname" class="form-control shadow-none"
                                                   name="surname"
                                                   value="{{old('surname', $employee->surname)}}">
                                            @error('surname')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Name --}}
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="name" class="form-label">Имя</label>
                                            <input type="text" id="name" class="form-control shadow-none" name="name"
                                                   value="{{old('name', $employee->name)}}">
                                            @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Middle Name --}}
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="middle_name" class="form-label">Отчество</label>
                                            <input type="text" id="middle_name" class="form-control shadow-none"
                                                   name="middle_name"
                                                   value="{{old('middle_name', $employee->middle_name)}}">
                                            @error('middle_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Phone --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="phone" class="form-label">Телефон</label>
                                            <input type="text" id="phone" class="form-control shadow-none" name="phone"
                                                   value="{{old('phone', $employee->phone)}}">
                                            @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Email --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" id="email" class="form-control shadow-none" name="email"
                                                   value="{{old('email', $employee->email)}}">
                                            @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Birthday --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="birthday" class="form-label">Дата рождения</label>
                                            <input type="date" id="birthday" class="form-control shadow-none"
                                                   name="birthday"
                                                   value="{{old('birthday', $employee->birthday)}}">
                                            @error('birthday')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- СНИЛС --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="snils" class="form-label">СНИЛС</label>
                                            <input type="text" id="snils" class="form-control shadow-none"
                                                   name="snils"
                                                   value="{{old('snils', $employee->snils)}}">
                                            @error('snils')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Company --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="company_id" class="form-label">Компания</label>
                                            <select name="company_id" id="company_id" class="form-select shadow-none">
                                                <option value="" selected>Выберите компанию</option>
                                                @foreach($companies as $company)
                                                    <option value="{{$company->id}}"
                                                            @if($company->id==old("company_id", $employee->company_id)) selected @endif>
                                                        {{$company->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('company_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Дата приёма на работу --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="employment_date" class="form-label">Дата приёма на работу</label>
                                            <input type="date" id="employment_date" class="form-control shadow-none"
                                                   name="employment_date"
                                                   value="{{old('employment_date', $employee->employment_date)}}">
                                            @error('employment_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Profession --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="profession_id" class="form-label">Профессия</label>
                                            <select name="profession_id" id="profession_id"
                                                    class="form-select shadow-none">
                                                <option value="" selected>Выберите профессию</option>
                                                @foreach($professions as $profession)
                                                    <option value="{{$profession->id}}"
                                                            @if($profession->id==old("profession_id", $employee->profession_id)) selected @endif>
                                                        {{$profession->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('profession_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Разряд --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="profession_discharge" class="form-label">Разряд</label>
                                            <select name="profession_discharge" id="profession_discharge"
                                                    class="form-select shadow-none">
                                                <option value="" selected>Выберите разряд</option>
                                                @for($i=1;$i<=9;$i++)
                                                    <option value="{{$i}}"
                                                            @if($i==old("profession_discharge", $employee->profession_discharge)) selected @endif>
                                                        {{ $i . " разряд" }}
                                                    </option>
                                                @endfor
                                            </select>
                                            @error('profession_discharge')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Пол --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="sex" class="form-label">Пол</label>
                                            <select name="sex" id="sex" class="form-select shadow-none">
                                                <option value="male" @if(old("male", $employee->sex)=="male") selected @endif>
                                                    Мужской
                                                </option>
                                                <option value="female" @if(old("female", $employee->sex)=="female") selected @endif>
                                                    Женский
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- Рост --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="height" class="form-label">Рост, см</label>
                                            <input type="text" id="height" class="form-control shadow-none"
                                                   name="height" value="{{old('height', $employee->height)}}">
                                            @error('height')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Размер одежды --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="clothing_size" class="form-label">Размер одежды</label>
                                            <input type="text" id="clothing_size" class="form-control shadow-none"
                                                   name="clothing_size" value="{{old('clothing_size', $employee->clothing_size)}}">
                                            @error('clothing_size')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Размер обуви --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="shoe_size" class="form-label">Размер обуви</label>
                                            <input type="text" id="shoe_size" class="form-control shadow-none"
                                                   name="shoe_size" value="{{old('shoe_size', $employee->shoe_size)}}">
                                            @error('shoe_size')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-brand btn-filled mb-3">Сохранить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('additional-scripts')
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            CKEDITOR.replace('description');
        });
    </script>
@endsection
