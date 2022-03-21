@extends('layouts.account')

@section('title', $question->question_text . ' (ред.)')
@section('content')
    <section id="add-services">
        <div class="container-xl container-fluid">
            <div class="section-content">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-xl-4 col-lg-5 col-12">
                        @include('layouts.components.account-sidebar')
                    </div>
                    <!-- Page Content -->
                    <div class="col-lg-7 offset-xl-1 offset-0 col-12">
                        <div class="page-right-content">
                            <div class="service-title">
                                <h2>{{$question->question_text . ' (ред.)'}}</h2>
                            </div>

                            <form action="{{route('questions.update', [$quiz, $question])}}" method="POST"
                                  class="account-form">
                                @csrf @method('PUT')

                                <div class="form-group mb-5">
                                    <label for="type" class="form-label">Тип вопроса</label>
                                    <select name="type" id="type" class="form-select w-100">
                                        <option value="single"
                                                @if(old('type', $question->type) == 'single') selected @endif>
                                            Один вариант ответа
                                        </option>
                                        <option value="multiple"
                                                @if(old('type', $question->type) == 'multiple') selected @endif>
                                            Несколько вариантов ответа
                                        </option>
                                    </select>
                                    @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="question_text" class="form-label">Вопрос</label>
                                    <textarea name="question_text" id="question_text" rows="4"
                                              class="form-control">{{old('question_text', $question->question_text)}}</textarea>
                                    @error('question_text')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label class="form-label">Варианты ответов</label>

                                    @foreach($question->options as $key => $option)
                                        {!! $option->getInput($key+1) !!}
                                    @endforeach

                                    @error('options')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                    <button type="button" id="add-option" class="btn btn-sm btn-outline-dark">Добавить
                                        вариант
                                    </button>
                                </div>

                                {{-- Save Button --}}
                                @include('components.form-save-btn')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
